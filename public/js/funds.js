class DataTableManager {
    constructor(config) {
        this.initialData = config.data || [];
        this.tableBodyId = config.tableBodyId || 'tableBody';
        this.itemsPerPage = config.itemsPerPage || 10;
        this.paginationId = config.paginationId || 'pagination';
        this.columns = config.columns || [];
        this.onRowClick = config.onRowClick || (() => {});
        this.onDelete = config.onDelete || (() => {});

        this.state = {
            data: [...this.initialData],
            filteredData: [...this.initialData],
            currentPage: 1,
            sortField: config.defaultSortField || '',
            sortDirection: config.defaultSortDirection || 'desc'
        };

        this.init();
    }

    init() {
        this.renderTable();
        this.renderPagination();
    }

    formatCurrency(amount) {
        return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(amount);
    }

    escapeHtml(unsafe) {
        return unsafe
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }

    searchData(searchTerm) {
        if (!searchTerm) {
            this.state.filteredData = [...this.state.data];
        } else {
            const lowerSearchTerm = searchTerm.toLowerCase();
            this.state.filteredData = this.state.data.filter(item => {
                return this.columns.some(col => {
                    const value = item[col.field]?.toString().toLowerCase();
                    return value && value.includes(lowerSearchTerm);
                });
            });
        }
        this.state.currentPage = 1;
        this.renderTable();
        this.renderPagination();
    }

    sortData(field) {
        if (this.state.sortField === field) {
            this.state.sortDirection = this.state.sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            this.state.sortField = field;
            this.state.sortDirection = 'asc';
        }

        this.state.filteredData.sort((a, b) => {
            let valueA = a[field];
            let valueB = b[field];

            if (this.columns.find(col => col.field === field)?.type === 'date') {
                valueA = new Date(valueA);
                valueB = new Date(valueB);
            } else if (this.columns.find(col => col.field === field)?.type === 'number') {
                valueA = parseFloat(valueA);
                valueB = parseFloat(valueB);
            } else {
                valueA = valueA?.toString().toLowerCase() || '';
                valueB = valueB?.toString().toLowerCase() || '';
            }

            if (this.state.sortDirection === 'asc') {
                return valueA > valueB ? 1 : -1;
            } else {
                return valueA < valueB ? 1 : -1;
            }
        });

        this.state.currentPage = 1;
        this.renderTable();
        this.renderPagination();
    }

    renderTable() {
        const tbody = document.getElementById(this.tableBodyId);
        const start = (this.state.currentPage - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        const paginatedData = this.state.filteredData.slice(start, end);

        tbody.innerHTML = '';
        if (paginatedData.length === 0) {
            tbody.innerHTML = `<tr><td colspan="${this.columns.length + 1}" class="text-center">Không có dữ liệu.</td></tr>`;
            return;
        }

        paginatedData.forEach(item => {
            const row = document.createElement('tr');
            if (item.detailUrl) {
                row.setAttribute('data-url', item.detailUrl);
                row.style.cursor = 'pointer';
            }

            let rowHtml = '';
            this.columns.forEach(col => {
                let value = item[col.field];
                if (col.formatter) {
                    value = col.formatter(value, item);
                } else if (col.type === 'currency') {
                    value = this.formatCurrency(value);
                }
                rowHtml += `
                    <td class="${col.class || ''}">
                        ${value || ''}
                    </td>
                `;
            });

            // Cột hành động
            rowHtml += `
                <td class="text-center">
                    ${item.isTreasurer ? `
                        <button type="button" class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#editFundModal${item.id}" onclick="event.stopPropagation();">Sửa</button>
                        <button type="button" class="btn btn-sm btn-danger mb-0 delete-btn" data-id="${item.id}" data-csrf-token="${item.csrfToken}" onclick="event.stopPropagation();">Xóa</button>
                    ` : item.isAdmin ? `
                        <a href="${item.detailUrl}" class="btn btn-sm btn-info mb-0" onclick="event.stopPropagation();">Xem chi tiết</a>
                    ` : ''}
                </td>
            `;

            row.innerHTML = rowHtml;
            tbody.appendChild(row);
        });

        // Gắn sự kiện click cho các hàng
        document.querySelectorAll(`#${this.tableBodyId} tr`).forEach(row => {
            row.addEventListener('click', () => this.onRowClick(row));
        });

        // Gắn sự kiện xóa
        document.querySelectorAll(`#${this.tableBodyId} .delete-btn`).forEach(button => {
            button.addEventListener('click', () => this.onDelete(button));
        });
    }

    renderPagination() {
        const pagination = document.getElementById(this.paginationId);
        const pageCount = Math.ceil(this.state.filteredData.length / this.itemsPerPage);
        pagination.innerHTML = '';

        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${this.state.currentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class="page-link" href="#" data-page="${this.state.currentPage - 1}">«</a>`;
        pagination.appendChild(prevLi);

        const maxVisiblePages = 5;
        let startPage = Math.max(1, this.state.currentPage - Math.floor(maxVisiblePages / 2));
        let endPage = Math.min(pageCount, startPage + maxVisiblePages - 1);
        startPage = Math.max(1, endPage - maxVisiblePages + 1);

        for (let i = startPage; i <= endPage; i++) {
            const li = document.createElement('li');
            li.className = `page-item ${i === this.state.currentPage ? 'active' : ''}`;
            li.innerHTML = `<a class="page-link" href="#" data-page="${i}">${i}</a>`;
            pagination.appendChild(li);
        }

        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${this.state.currentPage === pageCount ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class="page-link" href="#" data-page="${this.state.currentPage + 1}">»</a>`;
        pagination.appendChild(nextLi);

        document.querySelectorAll(`#${this.paginationId} .page-link`).forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = parseInt(link.getAttribute('data-page'));
                if (page && page >= 1 && page <= pageCount) {
                    this.state.currentPage = page;
                    this.renderTable();
                    this.renderPagination();
                }
            });
        });
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Dữ liệu ban đầu từ server
    const initialFunds = [
        {% for fund in funds %}
            {
                id: {{ fund.id }},
                date: '{{ fund.date|date('Y-m-d') }}',
                transactionType: '{{ fund.transactionType }}',
                amount: {{ fund.amount }},
                description: '{{ fund.description|e('js') }}',
                createdBy: '{{ fund.createdBy.name|e('js') }}',
                detailUrl: '{{ path('app_funds_show', {'id': fund.id, 'referer': app.request.uri}) }}',
                isTreasurer: {{ is_granted('ROLE_TREASURER') ? 'true' : 'false' }},
                isAdmin: {{ is_granted('ROLE_ADMIN') ? 'true' : 'false' }},
                csrfToken: '{{ csrf_token('delete' ~ fund.id) }}'
            },
        {% endfor %}
    ];

    // Cấu hình DataTableManager
    const tableManager = new DataTableManager({
        data: initialFunds,
        tableBodyId: 'fundsTableBody',
        paginationId: 'pagination',
        itemsPerPage: 10,
        defaultSortField: 'date',
        defaultSortDirection: 'desc',
        columns: [
            { field: 'date', class: 'text-center', type: 'date' },
            {
                field: 'transactionType',
                class: 'text-center',
                formatter: (value) => `
                    <div class="d-flex flex-column justify-content-center text-center">
                        <h6 class="mb-0 text-sm text-${value === 'income' ? 'success' : 'danger'}">
                            ${value === 'income' ? 'Thu' : 'Chi'}
                        </h6>
                    </div>
                `
            },
            { field: 'amount', class: 'text-center', type: 'currency' },
            {
                field: 'description',
                formatter: (value) => value.length > 50 ? value.slice(0, 50) + '...' : value
            },
            { field: 'createdBy', class: 'text-center' }
        ],
        onRowClick: (row) => {
            const detailUrl = row.getAttribute('data-url');
            if (detailUrl) {
                window.location.href = detailUrl;
            }
        },
        onDelete: (button) => {
            if (!confirm('Bạn có chắc chắn muốn xóa giao dịch này?')) {
                return;
            }

            const fundId = button.getAttribute('data-id');
            const csrfToken = button.getAttribute('data-csrf-token');

            fetch(`/funds/${fundId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `_token=${csrfToken}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    alert(data.error);
                }
            })
            .catch(error => {
                alert('Có lỗi xảy ra: ' + error.message);
            });
        }
    });

    // Xử lý tìm kiếm
    const searchInput = document.getElementById('searchInput');
    const clearSearchBtn = document.getElementById('clearSearchBtn');

    searchInput.addEventListener('input', function () {
        const searchTerm = this.value.trim();
        tableManager.searchData(searchTerm);
        clearSearchBtn.classList.toggle('d-none', !searchTerm);
    });

    clearSearchBtn.addEventListener('click', function () {
        searchInput.value = '';
        tableManager.searchData('');
        clearSearchBtn.classList.add('d-none');
    });

    // Xử lý sắp xếp
    document.querySelectorAll('.sort-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const field = this.getAttribute('data-sort');
            tableManager.sortData(field);
        });
    });

    // Hàm hiển thị loading
    function showLoading(button, spinner) {
        button.disabled = true;
        spinner.classList.remove('d-none');
    }

    // Hàm ẩn loading
    function hideLoading(button, spinner) {
        button.disabled = false;
        spinner.classList.add('d-none');
    }

    // Hàm hiển thị lỗi trong modal
    function showError(errorDiv, message) {
        errorDiv.classList.remove('d-none');
        errorDiv.textContent = message;
    }

    // Hàm ẩn lỗi
    function hideError(errorDiv) {
        errorDiv.classList.add('d-none');
        errorDiv.textContent = '';
    }

    // Xử lý form thêm giao dịch
    const addFundForm = document.getElementById('addFundForm');
    const addFundSubmitBtn = document.getElementById('addFundSubmitBtn');
    const addFundSpinner = document.getElementById('addFundSpinner');
    const addFundError = document.getElementById('addFundError');

    addFundForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);
        showLoading(addFundSubmitBtn, addFundSpinner);
        hideError(addFundError);

        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            hideLoading(addFundSubmitBtn, addFundSpinner);
            if (data.success) {
                window.location.href = data.redirect;
            } else {
                showError(addFundError, data.error);
            }
        })
        .catch(error => {
            hideLoading(addFundSubmitBtn, addFundSpinner);
            showError(addFundError, 'Có lỗi xảy ra: ' + error.message);
        });
    });

    // Xử lý form sửa giao dịch
    document.querySelectorAll('[id^="editFundForm"]').forEach(form => {
        const formId = form.id;
        const submitBtn = document.getElementById('editFundSubmitBtn' + formId.replace('editFundForm', ''));
        const spinner = document.getElementById('editFundSpinner' + formId.replace('editFundForm', ''));
        const errorDiv = document.getElementById('editFundError' + formId.replace('editFundForm', ''));

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            showLoading(submitBtn, spinner);
            hideError(errorDiv);

            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                hideLoading(submitBtn, spinner);
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    showError(errorDiv, data.error);
                }
            })
            .catch(error => {
                hideLoading(submitBtn, spinner);
                showError(errorDiv, 'Có lỗi xảy ra: ' + error.message);
            });
        });
    });

    // Lưu vị trí chuyển trang
    const tableContainer = document.querySelector('.table-responsive');
    const scrollPositionKey = 'funds_table_scroll_position';

    if (tableContainer) {
        const savedScrollPosition = sessionStorage.getItem(scrollPositionKey);
        if (savedScrollPosition) {
            tableContainer.scrollTop = savedScrollPosition;
        }

        tableContainer.addEventListener('scroll', function () {
            sessionStorage.setItem(scrollPositionKey, tableContainer.scrollTop);
        });
    }
});