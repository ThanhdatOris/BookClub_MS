<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* z-old/activities/index.html.twig */
class __TwigTemplate_a020f6ddc39e2d24e2e10321281c61ff extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/activities/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/activities/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/activities/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Quản lý hoạt động";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Chi tiết hoạt động -->
                <div class=\"card mb-4 shadow-sm d-none\" id=\"activityDetail\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Chi tiết hoạt động - <span id=\"activityTitleHeader\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeDetail\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <p><strong>Tên hoạt động:</strong> <span id=\"activityTitle\"></span></p>
                        <p><strong>Mô tả:</strong> <span id=\"activityDescription\"></span></p>
                        <p><strong>Ngày:</strong> <span id=\"activityDate\"></span></p>
                        <p><strong>Thời gian:</strong> <span id=\"activityTime\"></span></p>
                        <p><strong>Địa điểm:</strong> <span id=\"activityLocation\"></span></p>
                        <p><strong>Người tạo:</strong> <span id=\"activityCreator\"></span></p>
                        <p><strong>Thành viên tham gia:</strong> <span id=\"activityMembers\"></span></p>
                        <p><strong>Trạng thái:</strong> <span id=\"activityStatus\"></span></p>
                        <button class=\"btn btn-primary btn-sm\" id=\"editActivity\">Sửa hoạt động</button>
                        <button class=\"btn btn-danger btn-sm\" id=\"deleteActivity\">Xóa hoạt động</button>
                    </div>
                </div>

                <!-- Form sửa hoạt động -->
                <div class=\"card mt-4 mb-4 shadow-sm d-none\" id=\"editActivityForm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Sửa hoạt động - ID: <span id=\"editActivityId\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeEditForm\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <form id=\"activityEditForm\">
                            <div class=\"mb-3\">
                                <label for=\"editActivityTitle\" class=\"form-label\">Tên hoạt động</label>
                                <input type=\"text\" class=\"form-control\" id=\"editActivityTitle\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityDescription\" class=\"form-label\">Mô tả</label>
                                <textarea class=\"form-control\" id=\"editActivityDescription\" required></textarea>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityDate\" class=\"form-label\">Ngày</label>
                                <input type=\"date\" class=\"form-control\" id=\"editActivityDate\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityTime\" class=\"form-label\">Thời gian</label>
                                <input type=\"time\" class=\"form-control\" id=\"editActivityTime\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityLocation\" class=\"form-label\">Địa điểm</label>
                                <input type=\"text\" class=\"form-control\" id=\"editActivityLocation\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityStatus\" class=\"form-label\">Trạng thái</label>
                                <input type=\"text\" class=\"form-control\" id=\"editActivityStatus\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>

                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-list-ul me-2\"></i> Danh sách hoạt động</h5>
                        <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_new");
        yield "\" class=\"btn btn-success btn-sm mb-0\">
                            <i class=\"fas fa-plus me-2\"></i> Tạo mới</a>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"activitiesTable\" class=\"table table-hover align-items-center mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Tên hoạt động</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Mô tả</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DataTables sẽ tự động điền -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- DataTables CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css\">

<!-- Font Awesome for icons -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<style>
    .table-responsive {
        overflow-x: auto;
    }
    .table th, .table td {
        vertical-align: middle;
        white-space: nowrap;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.1);
    }
    .btn-sm {
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 6px;
    }
    .bg-gradient-primary {
        background: linear-gradient(90deg,rgb(0, 157, 255),rgb(127, 35, 247));
    }
    .shadow-lg {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    h5 {
        color: white;
    }
    /* Đặt chiều rộng tối đa cho các ô và áp dụng hiệu ứng cắt chữ */
    td.truncate {
        max-width: 150px; /* Điều chỉnh chiều rộng tối đa theo ý bạn */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

</style>

<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- DataTables JS -->
<script src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js\"></script>

<script>
\$(document).ready(function() {
    \$('#activitiesTable').DataTable({
        \"ajax\": \"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_index");
        yield "\",
        \"columns\": [
            { \"data\": \"id\", \"className\": \"text-center truncate\" },
            { \"data\": \"title\" },
            { \"data\": \"description\",  \"className\": \"truncate\" },
            {
                \"data\": null,
                \"className\": \"text-center\",
                \"render\": function(data, type, row) {
                    return '<a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_show", ["id" => "ID_PLACEHOLDER"]);
        yield "\" class=\"btn btn-primary btn-sm bg-gradient-primary mb-0\"><i class=\"fas fa-eye\"></i> Xem</a>'.replace(/ID_PLACEHOLDER/g, row.id);
                }
            }
        ],
        \"scrollX\": true,
        \"autoWidth\": false,
        \"order\": [[0, \"asc\"]],
        \"language\": {
            \"search\": \"🔍 Tìm kiếm \",
            \"lengthMenu\": \"Hiển thị _MENU_ mục\",
            \"info\": \"Hiển thị _START_ đến _END_ trong _TOTAL_ mục\",
            \"paginate\": {
                \"first\": \"<i class='fas fa-angle-double-left'></i>\",
                \"previous\": \"<i class='fas fa-angle-left'></i>\",
                \"next\": \"<i class='fas fa-angle-right'></i>\",
                \"last\": \"<i class='fas fa-angle-double-right'></i>\"
            },
            \"infoEmpty\": \"Không có mục nào để hiển thị\",
            \"zeroRecords\": \"Không tìm thấy kết quả phù hợp\",
            \"emptyTable\": \"Không có dữ liệu trong bảng\",
            \"infoFiltered\": \"(được lọc từ _MAX_ mục)\",
            \"loadingRecords\": \"Đang tải...\",
            \"processing\": \"Đang xử lý...\"
        },
        \"rowCallback\": function(row, data) {
            \$(row).on('click', function() {
                \$('#activityTitleHeader').text(data.title);
                \$('#activityTitle').text(data.title);
                \$('#activityDescription').text(data.description);
                \$('#activityDate').text(data.date);
                \$('#activityTime').text(data.time);
                \$('#activityLocation').text(data.location);
                \$('#activityCreator').text(data.creator);
                \$('#activityMembers').text(data.members);
                \$('#activityStatus').text(data.status);
                \$('#activityDetail').hide().removeClass('d-none').slideDown();
                \$('html, body').animate({ scrollTop: 0 }, 'fast');

                // Set the edit button data attributes
                \$('#editActivity').data('id', data.id);
                \$('#editActivity').data('title', data.title);
                \$('#editActivity').data('description', data.description);
                \$('#editActivity').data('date', data.date);
                \$('#editActivity').data('time', data.time);
                \$('#editActivity').data('location', data.location);
                \$('#editActivity').data('status', data.status);
            });
        }
    });

    \$('#editActivity').on('click', function() {
        \$('#editActivityId').text(\$(this).data('id'));
        \$('#editActivityTitle').val(\$(this).data('title'));
        \$('#editActivityDescription').val(\$(this).data('description'));
        \$('#editActivityDate').val(\$(this).data('date'));
        \$('#editActivityTime').val(\$(this).data('time'));
        \$('#editActivityLocation').val(\$(this).data('location'));
        \$('#editActivityStatus').val(\$(this).data('status'));

        \$('#activityDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
        \$('#editActivityForm').hide().removeClass('d-none').slideDown();
    });

    \$('#closeEditForm').on('click', function() {
        \$('#editActivityForm').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#activityEditForm').on('submit', function(e) {
        e.preventDefault();

        const activityId = \$('#editActivityId').text();
        const formData = {
            title: \$('#editActivityTitle').val(),
            description: \$('#editActivityDescription').val(),
            date: \$('#editActivityDate').val(),
            time: \$('#editActivityTime').val(),
            location: \$('#editActivityLocation').val(),
            status: \$('#editActivityStatus').val()
        };

        \$.ajax({
            url: `/activities/\${activityId}/edit`,
            method: 'POST',
            data: formData,
            success: function(response) {
                alert('Thông tin hoạt động đã được cập nhật.');
                \$('#editActivityForm').slideUp(function() {
                    \$(this).addClass('d-none');
                });
                \$('#activitiesTable').DataTable().ajax.reload();
            },
            error: function(xhr, status, error) {
                alert('Đã xảy ra lỗi khi cập nhật thông tin hoạt động.');
            }
        });
    });

    \$('#closeDetail').on('click', function() {
        \$('#activityDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#deleteActivity').on('click', function() {
        if (confirm('Bạn có chắc chắn muốn xóa hoạt động này không?')) {
            // Xử lý xóa hoạt động
            alert('Xóa hoạt động thành công!');
            \$('#activityDetail').slideUp(function() {
                \$(this).addClass('d-none');
            });
        }
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "z-old/activities/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  258 => 156,  246 => 147,  166 => 70,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý hoạt động{% endblock %}

{% block body %}
<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Chi tiết hoạt động -->
                <div class=\"card mb-4 shadow-sm d-none\" id=\"activityDetail\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Chi tiết hoạt động - <span id=\"activityTitleHeader\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeDetail\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <p><strong>Tên hoạt động:</strong> <span id=\"activityTitle\"></span></p>
                        <p><strong>Mô tả:</strong> <span id=\"activityDescription\"></span></p>
                        <p><strong>Ngày:</strong> <span id=\"activityDate\"></span></p>
                        <p><strong>Thời gian:</strong> <span id=\"activityTime\"></span></p>
                        <p><strong>Địa điểm:</strong> <span id=\"activityLocation\"></span></p>
                        <p><strong>Người tạo:</strong> <span id=\"activityCreator\"></span></p>
                        <p><strong>Thành viên tham gia:</strong> <span id=\"activityMembers\"></span></p>
                        <p><strong>Trạng thái:</strong> <span id=\"activityStatus\"></span></p>
                        <button class=\"btn btn-primary btn-sm\" id=\"editActivity\">Sửa hoạt động</button>
                        <button class=\"btn btn-danger btn-sm\" id=\"deleteActivity\">Xóa hoạt động</button>
                    </div>
                </div>

                <!-- Form sửa hoạt động -->
                <div class=\"card mt-4 mb-4 shadow-sm d-none\" id=\"editActivityForm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Sửa hoạt động - ID: <span id=\"editActivityId\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeEditForm\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <form id=\"activityEditForm\">
                            <div class=\"mb-3\">
                                <label for=\"editActivityTitle\" class=\"form-label\">Tên hoạt động</label>
                                <input type=\"text\" class=\"form-control\" id=\"editActivityTitle\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityDescription\" class=\"form-label\">Mô tả</label>
                                <textarea class=\"form-control\" id=\"editActivityDescription\" required></textarea>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityDate\" class=\"form-label\">Ngày</label>
                                <input type=\"date\" class=\"form-control\" id=\"editActivityDate\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityTime\" class=\"form-label\">Thời gian</label>
                                <input type=\"time\" class=\"form-control\" id=\"editActivityTime\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityLocation\" class=\"form-label\">Địa điểm</label>
                                <input type=\"text\" class=\"form-control\" id=\"editActivityLocation\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editActivityStatus\" class=\"form-label\">Trạng thái</label>
                                <input type=\"text\" class=\"form-control\" id=\"editActivityStatus\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>

                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-list-ul me-2\"></i> Danh sách hoạt động</h5>
                        <a href=\"{{ path('app_activities_new') }}\" class=\"btn btn-success btn-sm mb-0\">
                            <i class=\"fas fa-plus me-2\"></i> Tạo mới</a>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"activitiesTable\" class=\"table table-hover align-items-center mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Tên hoạt động</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Mô tả</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DataTables sẽ tự động điền -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- DataTables CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css\">

<!-- Font Awesome for icons -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<style>
    .table-responsive {
        overflow-x: auto;
    }
    .table th, .table td {
        vertical-align: middle;
        white-space: nowrap;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.1);
    }
    .btn-sm {
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 6px;
    }
    .bg-gradient-primary {
        background: linear-gradient(90deg,rgb(0, 157, 255),rgb(127, 35, 247));
    }
    .shadow-lg {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    h5 {
        color: white;
    }
    /* Đặt chiều rộng tối đa cho các ô và áp dụng hiệu ứng cắt chữ */
    td.truncate {
        max-width: 150px; /* Điều chỉnh chiều rộng tối đa theo ý bạn */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

</style>

<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- DataTables JS -->
<script src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js\"></script>

<script>
\$(document).ready(function() {
    \$('#activitiesTable').DataTable({
        \"ajax\": \"{{ path('app_activities_index') }}\",
        \"columns\": [
            { \"data\": \"id\", \"className\": \"text-center truncate\" },
            { \"data\": \"title\" },
            { \"data\": \"description\",  \"className\": \"truncate\" },
            {
                \"data\": null,
                \"className\": \"text-center\",
                \"render\": function(data, type, row) {
                    return '<a href=\"{{ path('app_activities_show', {'id': 'ID_PLACEHOLDER'}) }}\" class=\"btn btn-primary btn-sm bg-gradient-primary mb-0\"><i class=\"fas fa-eye\"></i> Xem</a>'.replace(/ID_PLACEHOLDER/g, row.id);
                }
            }
        ],
        \"scrollX\": true,
        \"autoWidth\": false,
        \"order\": [[0, \"asc\"]],
        \"language\": {
            \"search\": \"🔍 Tìm kiếm \",
            \"lengthMenu\": \"Hiển thị _MENU_ mục\",
            \"info\": \"Hiển thị _START_ đến _END_ trong _TOTAL_ mục\",
            \"paginate\": {
                \"first\": \"<i class='fas fa-angle-double-left'></i>\",
                \"previous\": \"<i class='fas fa-angle-left'></i>\",
                \"next\": \"<i class='fas fa-angle-right'></i>\",
                \"last\": \"<i class='fas fa-angle-double-right'></i>\"
            },
            \"infoEmpty\": \"Không có mục nào để hiển thị\",
            \"zeroRecords\": \"Không tìm thấy kết quả phù hợp\",
            \"emptyTable\": \"Không có dữ liệu trong bảng\",
            \"infoFiltered\": \"(được lọc từ _MAX_ mục)\",
            \"loadingRecords\": \"Đang tải...\",
            \"processing\": \"Đang xử lý...\"
        },
        \"rowCallback\": function(row, data) {
            \$(row).on('click', function() {
                \$('#activityTitleHeader').text(data.title);
                \$('#activityTitle').text(data.title);
                \$('#activityDescription').text(data.description);
                \$('#activityDate').text(data.date);
                \$('#activityTime').text(data.time);
                \$('#activityLocation').text(data.location);
                \$('#activityCreator').text(data.creator);
                \$('#activityMembers').text(data.members);
                \$('#activityStatus').text(data.status);
                \$('#activityDetail').hide().removeClass('d-none').slideDown();
                \$('html, body').animate({ scrollTop: 0 }, 'fast');

                // Set the edit button data attributes
                \$('#editActivity').data('id', data.id);
                \$('#editActivity').data('title', data.title);
                \$('#editActivity').data('description', data.description);
                \$('#editActivity').data('date', data.date);
                \$('#editActivity').data('time', data.time);
                \$('#editActivity').data('location', data.location);
                \$('#editActivity').data('status', data.status);
            });
        }
    });

    \$('#editActivity').on('click', function() {
        \$('#editActivityId').text(\$(this).data('id'));
        \$('#editActivityTitle').val(\$(this).data('title'));
        \$('#editActivityDescription').val(\$(this).data('description'));
        \$('#editActivityDate').val(\$(this).data('date'));
        \$('#editActivityTime').val(\$(this).data('time'));
        \$('#editActivityLocation').val(\$(this).data('location'));
        \$('#editActivityStatus').val(\$(this).data('status'));

        \$('#activityDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
        \$('#editActivityForm').hide().removeClass('d-none').slideDown();
    });

    \$('#closeEditForm').on('click', function() {
        \$('#editActivityForm').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#activityEditForm').on('submit', function(e) {
        e.preventDefault();

        const activityId = \$('#editActivityId').text();
        const formData = {
            title: \$('#editActivityTitle').val(),
            description: \$('#editActivityDescription').val(),
            date: \$('#editActivityDate').val(),
            time: \$('#editActivityTime').val(),
            location: \$('#editActivityLocation').val(),
            status: \$('#editActivityStatus').val()
        };

        \$.ajax({
            url: `/activities/\${activityId}/edit`,
            method: 'POST',
            data: formData,
            success: function(response) {
                alert('Thông tin hoạt động đã được cập nhật.');
                \$('#editActivityForm').slideUp(function() {
                    \$(this).addClass('d-none');
                });
                \$('#activitiesTable').DataTable().ajax.reload();
            },
            error: function(xhr, status, error) {
                alert('Đã xảy ra lỗi khi cập nhật thông tin hoạt động.');
            }
        });
    });

    \$('#closeDetail').on('click', function() {
        \$('#activityDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#deleteActivity').on('click', function() {
        if (confirm('Bạn có chắc chắn muốn xóa hoạt động này không?')) {
            // Xử lý xóa hoạt động
            alert('Xóa hoạt động thành công!');
            \$('#activityDetail').slideUp(function() {
                \$(this).addClass('d-none');
            });
        }
    });
});
</script>
{% endblock %}
", "z-old/activities/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\activities\\index.html.twig");
    }
}
