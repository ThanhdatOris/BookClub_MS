document.addEventListener('DOMContentLoaded', function () {
    // Xử lý hiển thị chi tiết hoạt động
    document.querySelectorAll('.view-activity').forEach(button => {
        button.addEventListener('click', function () {
            const activity = this.dataset;
            document.getElementById('viewActivityTitle').textContent = activity.title;
            document.getElementById('viewActivityDescription').textContent = activity.description;
            document.getElementById('viewActivityDate').textContent = activity.date;
            document.getElementById('viewActivityTime').textContent = activity.time;
            document.getElementById('viewActivityLocation').textContent = activity.location;
            document.getElementById('viewActivityStatus').textContent = activity.status;
            new bootstrap.Modal(document.getElementById('activityViewModal')).show();
        });
    });

    // Xử lý mở modal để tạo/sửa hoạt động
    document.querySelectorAll('.edit-activity').forEach(button => {
        button.addEventListener('click', function () {
            const activity = this.dataset;
            document.getElementById('activityModalLabel').textContent = 'Sửa hoạt động';
            document.getElementById('activityId').value = activity.id;
            document.getElementById('title').value = activity.title;
            document.getElementById('description').value = activity.description;
            document.getElementById('date').value = activity.date;
            document.getElementById('time').value = activity.time;
            document.getElementById('location').value = activity.location;
            document.getElementById('status').value = activity.status;
        });
    });

    document.querySelectorAll('[data-action="create"]').forEach(button => {
        button.addEventListener('click', function () {
            document.getElementById('activityModalLabel').textContent = 'Tạo hoạt động mới';
            document.getElementById('activityForm').reset();
            document.getElementById('activityId').value = '';
        });
    });

    // Xử lý lưu hoạt động (Create/Update)
    document.getElementById('saveActivity').addEventListener('click', function () {
        const form = document.getElementById('activityForm');
        const formData = new FormData(form);
        const id = formData.get('id');
        const url = id ? `/activities/${id}/edit` : '/activities/new';

        fetch(url, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload(); // Tải lại trang để cập nhật danh sách
            } else {
                alert('Có lỗi xảy ra: ' + (data.message || 'Không thể lưu hoạt động.'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Có lỗi xảy ra khi lưu hoạt động.');
        });
    });

    // Xử lý xóa hoạt động
    document.querySelectorAll('.delete-activity').forEach(button => {
        button.addEventListener('click', function () {
            if (!confirm('Bạn có chắc chắn muốn xóa hoạt động này?')) return;

            const id = this.dataset.id;
            fetch(`/activities/${id}`, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
                },
                body: new URLSearchParams({ '_method': 'DELETE' })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload(); // Tải lại trang để cập nhật danh sách
                } else {
                    alert('Có lỗi xảy ra: ' + (data.message || 'Không thể xóa hoạt động.'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Có lỗi xảy ra khi xóa hoạt động.');
            });
        });
    });
});