class TableLayout {
    constructor(config) {
        this.data = config.data || [];
        this.tableBodyId = config.tableBodyId || 'tableBody';
        this.paginationId = config.paginationId || 'pagination';
        this.searchInputId = config.searchInputId || 'searchInput';
        this.clearSearchBtnId = config.clearSearchBtnId || 'clearSearchBtn';
        this.itemsPerPage = config.itemsPerPage || 10;
        this.columns = config.columns || [];
        this.onRowClick = config.onRowClick || (() => {});
        this.onDelete = config.onDelete || (() => {});
        this.defaultSortField = config.defaultSortField || this.columns[0]?.field || '';
        this.defaultSortDirection = config.defaultSortDirection || 'asc';
        this.scrollPositionKey = config.scrollPositionKey || 'table_scroll_position';

        this.state = {
            data: [...this.data],
            filteredData: [...this.data],
            currentPage: 1,
            sortField: this.defaultSortField,
            sortDirection: this.defaultSortDirection
        };

        this.init();
    }

    init() {
        this.setupEventListeners();
        this.renderTable();
        this.renderPagination();
        this.restoreScrollPosition();
    }

    // Hàm tiện ích
    formatCurrency(amount) {
        return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(amount);
    }

    escapeHtml(unsafe) {
        return unsafe
            .replace(/&/g, "&")
            .replace(/</g, "<")
            .replace(/>/g, ">")
            .replace(/"/g, '\\"')
            .replace(/'/g, "'");
    }

    // Tìm kiếm
    searchData(searchTerm) {
        if (!searchTerm) {
            this.state.filteredData = [...this.state.data];
        } else {
            const lowerSearchTerm = searchTerm.toLowerCase();
            this.state.filteredData = this.state.data.filter(item =>
                this.columns.some(col => {
                    const value = item[col.field]?.toString().toLowerCase();
                    return value && value.includes(lowerSearchTerm);
                })
            );
        }
        this.state.currentPage = 1;
        this.renderTable();
        this.renderPagination();
    }

    // Sắp xếp
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

    // Render bảng
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
                    ${item.actions || ''}
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

    // Render phân trang
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

    // Thiết lập sự kiện
    setupEventListeners() {
        // Tìm kiếm
        const searchInput = document.getElementById(this.searchInputId);
        const clearSearchBtn = document.getElementById(this.clearSearchBtnId);

        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.trim();
            this.searchData(searchTerm);
            clearSearchBtn.classList.toggle('d-none', !searchTerm);
        });

        clearSearchBtn.addEventListener('click', () => {
            searchInput.value = '';
            this.searchData('');
            clearSearchBtn.classList.add('d-none');
        });

        // Sắp xếp
        document.querySelectorAll('.sort-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const field = link.getAttribute('data-sort');
                this.sortData(field);
            });
        });
    }

    // Lưu và khôi phục vị trí cuộn
    restoreScrollPosition() {
        const tableContainer = document.querySelector('.table-responsive');
        if (tableContainer) {
            const savedScrollPosition = sessionStorage.getItem(this.scrollPositionKey);
            if (savedScrollPosition) {
                tableContainer.scrollTop = savedScrollPosition;
            }

            tableContainer.addEventListener('scroll', () => {
                sessionStorage.setItem(this.scrollPositionKey, tableContainer.scrollTop);
            });
        }
    }

    // Hàm tiện ích cho modal
    showLoading(button, spinner) {
        button.disabled = true;
        spinner.classList.remove('d-none');
    }

    hideLoading(button, spinner) {
        button.disabled = false;
        spinner.classList.add('d-none');
    }

    showError(errorDiv, message) {
        errorDiv.classList.remove('d-none');
        errorDiv.textContent = message;
    }

    hideError(errorDiv) {
        errorDiv.classList.add('d-none');
        errorDiv.textContent = '';
    }
}