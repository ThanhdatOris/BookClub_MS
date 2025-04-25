class TableLayout {
    constructor(config) {
        this.data = config.data || [];
        this.originalData = [...this.data];
        this.tableBodyId = config.tableBodyId;
        this.searchInputId = config.searchInputId;
        this.clearSearchBtnId = config.clearSearchBtnId;
        this.paginationId = config.paginationId;
        this.columns = config.columns || [];
        this.onRowClick = config.onRowClick || (() => {});
        this.onDelete = config.onDelete || (() => {});
        this.scrollPositionKey = config.scrollPositionKey || 'table_scroll_position';
        this.itemsPerPage = config.itemsPerPage || 10;
        this.currentPage = 1;
        this.sortField = '';
        this.sortDirection = 'asc';
        this.loadingTimeout = null;
        this.debounceTimeout = null;
        this.maxVisiblePages = 5; // Số trang tối đa hiển thị

        this.init();
    }

    init() {
        this.renderTable();
        this.setupEventListeners();
        this.restoreScrollPosition();
    }

    renderTable() {
        const tbody = document.getElementById(this.tableBodyId);
        if (!tbody) return;

        // Thêm hiệu ứng loading
        tbody.classList.add('table-loading');
        
        // Sử dụng setTimeout để tạo hiệu ứng loading
        this.loadingTimeout = setTimeout(() => {
            tbody.innerHTML = '';
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            const paginatedData = this.data.slice(start, end);

            if (paginatedData.length === 0) {
                const emptyRow = document.createElement('tr');
                const emptyCell = document.createElement('td');
                emptyCell.colSpan = this.columns.length;
                emptyCell.className = 'text-center py-4';
                emptyCell.innerHTML = '<i class="fas fa-info-circle me-2"></i>Không có dữ liệu';
                emptyRow.appendChild(emptyCell);
                tbody.appendChild(emptyRow);
            } else {
                paginatedData.forEach((item) => {
                    if (!item.id) {
                        console.error('Item missing id:', item);
                        return;
                    }
                    const row = document.createElement('tr');
                    row.setAttribute('data-id', item.id);
                    row.className = 'activity-row';
                    row.style.cursor = 'pointer';

                    this.columns.forEach(column => {
                        const td = document.createElement('td');
                        const value = item[column.field] || '';
                        td.innerHTML = column.formatter ? column.formatter(value, item) : value;
                        row.appendChild(td);
                    });

                    tbody.appendChild(row);
                });
            }

            // Xóa hiệu ứng loading
            tbody.classList.remove('table-loading');
            this.renderPagination();
        }, 300); // Delay 300ms để tạo hiệu ứng loading
    }

    searchData(query) {
        // Debounce tìm kiếm để tránh render quá nhiều
        clearTimeout(this.debounceTimeout);
        this.debounceTimeout = setTimeout(() => {
            query = query.toLowerCase().trim();
            if (query === '') {
                this.data = [...this.originalData];
                this.currentPage = 1;
                this.renderTable();
                return;
            }

            this.data = this.originalData.filter(item =>
                this.columns.some(column => {
                    const value = item[column.field] || '';
                    return value.toString().toLowerCase().includes(query);
                })
            );
            this.currentPage = 1;
            this.renderTable();
        }, 300);
    }

    sortData(field) {
        if (this.sortField === field) {
            this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            this.sortField = field;
            this.sortDirection = 'asc';
        }

        this.data.sort((a, b) => {
            let valueA = a[field] || '';
            let valueB = b[field] || '';
            const isDate = this.columns.find(col => col.field === field)?.type === 'date';

            if (isDate) {
                valueA = valueA ? new Date(valueA) : new Date(0);
                valueB = valueB ? new Date(valueB) : new Date(0);
            } else {
                valueA = valueA.toString().toLowerCase();
                valueB = valueB.toString().toLowerCase();
            }

            if (valueA < valueB) return this.sortDirection === 'asc' ? -1 : 1;
            if (valueA > valueB) return this.sortDirection === 'asc' ? 1 : -1;
            return 0;
        });

        this.renderTable();
    }

    renderPagination() {
        const totalPages = Math.ceil(this.data.length / this.itemsPerPage);
        const pagination = document.getElementById(this.paginationId);
        if (!pagination) return;
        
        pagination.innerHTML = '';

        if (totalPages <= 1) return;

        const createPageItem = (page, text, disabled = false, active = false, icon = null) => {
            const li = document.createElement('li');
            li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;
            const a = document.createElement('a');
            a.className = 'page-link';
            a.href = '#';
            
            if (icon) {
                const i = document.createElement('i');
                i.className = icon;
                a.appendChild(i);
            } else {
                a.innerText = text;
            }
            
            if (!disabled && !active) {
                a.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.currentPage = page;
                    this.renderTable();
                });
            }
            
            li.appendChild(a);
            pagination.appendChild(li);
        };

        // Nút về trang đầu
        createPageItem(1, '', this.currentPage === 1, false, 'fas fa-angle-double-left');
        
        // Nút Previous
        createPageItem(this.currentPage - 1, '', this.currentPage === 1, false, 'fas fa-angle-left');

        // Tính toán range trang hiển thị
        let startPage = Math.max(1, this.currentPage - Math.floor(this.maxVisiblePages / 2));
        let endPage = Math.min(totalPages, startPage + this.maxVisiblePages - 1);
        
        if (endPage - startPage + 1 < this.maxVisiblePages) {
            startPage = Math.max(1, endPage - this.maxVisiblePages + 1);
        }

        // Hiển thị dấu ... nếu cần
        if (startPage > 1) {
            createPageItem(startPage - 1, '...', true);
        }

        // Hiển thị các trang
        for (let i = startPage; i <= endPage; i++) {
            createPageItem(i, i, false, this.currentPage === i);
        }

        // Hiển thị dấu ... nếu cần
        if (endPage < totalPages) {
            createPageItem(endPage + 1, '...', true);
        }

        // Nút Next
        createPageItem(this.currentPage + 1, '', this.currentPage === totalPages, false, 'fas fa-angle-right');
        
        // Nút về trang cuối
        createPageItem(totalPages, '', this.currentPage === totalPages, false, 'fas fa-angle-double-right');
    }

    setupEventListeners() {
        const searchInput = document.getElementById(this.searchInputId);
        const clearSearchBtn = document.getElementById(this.clearSearchBtnId);
        
        if (searchInput) {
            searchInput.addEventListener('input', () => {
                this.searchData(searchInput.value);
                if (clearSearchBtn) {
                    clearSearchBtn.classList.toggle('d-none', searchInput.value === '');
                }
            });
        }

        if (clearSearchBtn) {
            clearSearchBtn.addEventListener('click', () => {
                if (searchInput) {
                    searchInput.value = '';
                    this.searchData('');
                    clearSearchBtn.classList.add('d-none');
                }
            });
        }

        const sortLinks = document.querySelectorAll('.sort-link');
        sortLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const field = link.getAttribute('data-sort');
                this.sortData(field);
            });
        });

        window.addEventListener('beforeunload', () => {
            localStorage.setItem(this.scrollPositionKey, window.scrollY);
        });
    }

    restoreScrollPosition() {
        const scrollPosition = localStorage.getItem(this.scrollPositionKey);
        if (scrollPosition) {
            window.scrollTo(0, parseInt(scrollPosition));
        }
    }

    showLoading(button, spinner) {
        if (button) button.disabled = true;
        if (spinner) spinner.classList.remove('d-none');
    }

    hideLoading(button, spinner) {
        if (button) button.disabled = false;
        if (spinner) spinner.classList.add('d-none');
    }

    showError(errorDiv, message) {
        if (errorDiv) {
            errorDiv.textContent = message;
            errorDiv.classList.remove('d-none');
        }
    }

    hideError(errorDiv) {
        if (errorDiv) {
            errorDiv.textContent = '';
            errorDiv.classList.add('d-none');
        }
    }
}