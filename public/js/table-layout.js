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
        this.itemsPerPage = 10;
        this.currentPage = 1;
        this.sortField = '';
        this.sortDirection = 'asc';
        this.expandedRows = new Set();

        this.init();
    }

    init() {
        this.renderTable();
        this.setupEventListeners();
        this.restoreScrollPosition();
    }

    renderTable() {
        const tbody = document.getElementById(this.tableBodyId);
        tbody.innerHTML = '';

        const start = (this.currentPage - 1) * this.itemsPerPage;
        const end = start + this.itemsPerPage;
        const paginatedData = this.data.slice(start, end);

        paginatedData.forEach((item, index) => {
            const row = document.createElement('tr');
            row.setAttribute('data-id', item.id);
            row.style.cursor = 'pointer';

            this.columns.forEach(column => {
                const td = document.createElement('td');
                const value = item[column.field] || '';
                td.innerHTML = column.formatter ? column.formatter(value, item) : value;
                row.appendChild(td);
            });

            // Actions column
            const actionsTd = document.createElement('td');
            actionsTd.className = 'text-center';
            actionsTd.innerHTML = item.actions || '';
            row.appendChild(actionsTd);

            tbody.appendChild(row);

            // Render expandable row if expanded
            if (this.expandedRows.has(item.id)) {
                const expandRow = document.createElement('tr');
                expandRow.className = 'expandable-row';
                expandRow.setAttribute('data-id', item.id);
                const expandTd = document.createElement('td');
                expandTd.setAttribute('colspan', this.columns.length + 1);
                expandTd.innerHTML = item.expandableContent || '';
                expandRow.appendChild(expandTd);
                tbody.appendChild(expandRow);
            }
        });
        this.tableBody.querySelectorAll('tr').forEach(row => {
            row.addEventListener('click', () => this.onRowClick(row));
        });
        this.renderPagination();
    }

    toggleExpandableRow(activityId) {
        activityId = activityId.toString();
        if (this.expandedRows.has(activityId)) {
            this.expandedRows.delete(activityId);
        } else {
            this.expandedRows.add(activityId);
        }
        this.renderTable();
    }

    searchData(query) {
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
        pagination.innerHTML = '';

        if (totalPages <= 1) return;

        const createPageItem = (page, text, disabled = false, active = false) => {
            const li = document.createElement('li');
            li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;
            const a = document.createElement('a');
            a.className = 'page-link';
            a.href = '#';
            a.innerText = text;
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

        createPageItem(this.currentPage - 1, 'Previous', this.currentPage === 1);
        for (let i = 1; i <= totalPages; i++) {
            createPageItem(i, i, false, this.currentPage === i);
        }
        createPageItem(this.currentPage + 1, 'Next', this.currentPage === totalPages);
    }

    setupEventListeners() {
        const tableBody = document.getElementById(this.tableBodyId);
        tableBody.addEventListener('click', (e) => {
            const row = e.target.closest('tr');
            if (row && !e.target.closest('.expand-btn, .cancel-btn, [data-bs-toggle="modal"]')) {
                this.onRowClick(row);
            }

            if (e.target.classList.contains('expand-btn')) {
                const activityId = e.target.getAttribute('data-id');
                this.toggleExpandableRow(activityId);
            }

            if (e.target.classList.contains('cancel-btn')) {
                this.onDelete(e.target);
            }
        });

        const searchInput = document.getElementById(this.searchInputId);
        const clearSearchBtn = document.getElementById(this.clearSearchBtnId);
        if (searchInput) {
            searchInput.addEventListener('input', () => {
                this.searchData(searchInput.value);
                clearSearchBtn.classList.toggle('d-none', searchInput.value === '');
            });
        }

        if (clearSearchBtn) {
            clearSearchBtn.addEventListener('click', () => {
                searchInput.value = '';
                this.searchData('');
                clearSearchBtn.classList.add('d-none');
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
        button.disabled = true;
        if (spinner) spinner.classList.remove('d-none');
    }

    hideLoading(button, spinner) {
        button.disabled = false;
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

    loadAttendanceModal(activityId) {
        const participantList = document.getElementById(`participantList${activityId}`);
        const participantCount = document.getElementById(`participantCount${activityId}`);
        const attendedCount = document.getElementById(`attendedCount${activityId}`);

        fetch(`/activities/${activityId}/attendance`)
            .then(response => response.json())
            .then(data => {
                participantList.innerHTML = '';
                let attended = 0;

                data.participants.forEach(participant => {
                    const status = participant.attendance_status || 'N/A';
                    if (status === 'present') attended++;
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${participant.user_id}</td>
                        <td>${participant.student_id || 'N/A'}</td>
                        <td>${participant.name}</td>
                        <td>
                            <button class="btn btn-sm btn-${status === 'present' ? 'success' : 'danger'} mb-0 attendance-toggle-btn"
                                    data-activity-id="${activityId}"
                                    data-user-id="${participant.user_id}"
                                    data-status="${status === 'present' ? 'present' : 'absent'}">
                                ${status === 'present' ? 'Có mặt' : status === 'absent' ? 'Vắng mặt' : 'Chưa điểm danh'}
                            </button>
                        </td>
                    `;
                    participantList.appendChild(row);
                });

                participantCount.textContent = data.participants.length;
                attendedCount.textContent = attended;

                this.setupAttendanceButtons(activityId);
            })
            .catch(error => {
                console.error('Error loading attendance:', error);
                participantList.innerHTML = '<tr><td colspan="4">Có lỗi xảy ra khi tải dữ liệu.</td></tr>';
            });
    }

    setupAttendanceButtons(activityId) {
        const buttons = document.querySelectorAll(`#participantList${activityId} .attendance-toggle-btn`);
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const activityId = button.getAttribute('data-activity-id');
                const userId = button.getAttribute('data-user-id');
                const currentStatus = button.getAttribute('data-status');
                const newStatus = currentStatus === 'present' ? 'absent' : 'present';

                fetch('/activities/attendance/toggle', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        activity_id: activityId,
                        user_id: userId,
                        status: newStatus
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.loadAttendanceModal(activityId);
                    } else {
                        alert('Có lỗi xảy ra: ' + data.error);
                    }
                })
                .catch(error => alert('Có lỗi xảy ra: ' + error.message));
            });
        });
    }
}