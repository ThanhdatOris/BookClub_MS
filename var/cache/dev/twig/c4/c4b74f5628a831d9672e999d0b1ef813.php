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

/* z-old/attendance/index.html.twig */
class __TwigTemplate_f7cf4d12295ade51a33912091a81baff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/attendance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/attendance/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/attendance/index.html.twig", 1);
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

        yield "Quản lý điểm danh";
        
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
                <!-- Chi tiết điểm danh -->
                <div class=\"card mb-3 shadow-sm d-none\" id=\"attendanceSection\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Chi tiết điểm danh - <span id=\"activityName\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-00\" id=\"closeAttendance\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"attendanceTable\" class=\"table table-striped align-items-center mb-0\">
                                <thead class=\"bg-light\">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên thành viên</th>
                                        <th>Check-in time</th>
                                        <th class=\"text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <button class=\"btn btn-success mt-3 btn-sm\" id=\"addMemberBtn\">+ Thêm thành viên</button>
                    </div>
                </div>

                <!-- Danh sách hoạt động -->
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-list-ul me-2\"></i>Danh sách điểm danh</h5>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"activitiesTable\" class=\"table table-striped align-items-center mb-0\">
                                <thead class=\"bg-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Tên hoạt động</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Số lượt tham gia</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css\">
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js\"></script>

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
        background: linear-gradient(90deg, rgb(0, 157, 255), rgb(127, 35, 247));
    }
    .shadow-lg {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    h5 {
        color: white;
    }
</style>

<script>
\$(document).ready(function() {
    let activitiesTable = \$('#activitiesTable').DataTable({
        \"ajax\": \"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_index");
        yield "\",
        \"columns\": [
            { \"data\": \"id\", \"className\": \"text-center\" },
            { \"data\": \"title\" },
            { \"data\": \"participant_count\" },
            {
                \"data\": null,
                \"className\": \"text-center\",
                \"render\": function(data, type, row) {
                    return `<button class=\"btn btn-primary btn-sm view-attendance bg-gradient-primary mb-0\" data-id=\"\${row.id}\" data-title=\"\${row.title}\"><i class=\"fas fa-eye\"></i> Xem</button>`;
                }
            }
        ],
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
                let activityId = data.id;
                let activityTitle = data.title;

                \$('#activityName').text(activityTitle);
                \$('#attendanceSection').removeClass('d-none');

                let attendanceTable = \$('#attendanceTable').DataTable({
                    \"destroy\": true,
                    \"ajax\": `/attendance/\${activityId}`,
                    \"columns\": [
                        { \"data\": \"id\" },
                        { \"data\": \"member_name\" },
                        { \"data\": \"check_in_time\" },
                        {
                            \"data\": null,
                            \"className\": \"text-center\",
                            \"render\": function(data, type, row) {
                                return `<button class=\"btn btn-danger btn-sm remove-member\" data-id=\"\${row.id}\">Xóa</button>`;
                            }
                        }
                    ]
                });

                \$('#attendanceTable tbody').on('click', '.remove-member', function() {
                    let attendanceId = \$(this).data('id');
                    \$.ajax({
                        url: `/attendance/delete/\${attendanceId}`,
                        type: 'POST',
                        success: function() { attendanceTable.ajax.reload(); }
                    });
                });

                \$('#addMemberBtn').off('click').on('click', function() {
                    let memberName = prompt(\"Nhập tên thành viên:\");
                    if (memberName) {
                        \$.ajax({
                            url: `/attendance/add`,
                            type: 'POST',
                            contentType: \"application/json\",
                            data: JSON.stringify({ activity_id: activityId, member_name: memberName }),
                            success: function() { attendanceTable.ajax.reload(); }
                        });
                    }
                });

                \$('html, body').animate({ scrollTop: 0 }, 'fast');
            });
        }
    });

    \$('#closeAttendance').on('click', function() {
        \$('#attendanceSection').addClass('d-none');
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
        return "z-old/attendance/index.html.twig";
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
        return array (  191 => 95,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý điểm danh{% endblock %}

{% block body %}
<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Chi tiết điểm danh -->
                <div class=\"card mb-3 shadow-sm d-none\" id=\"attendanceSection\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Chi tiết điểm danh - <span id=\"activityName\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-00\" id=\"closeAttendance\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"attendanceTable\" class=\"table table-striped align-items-center mb-0\">
                                <thead class=\"bg-light\">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên thành viên</th>
                                        <th>Check-in time</th>
                                        <th class=\"text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <button class=\"btn btn-success mt-3 btn-sm\" id=\"addMemberBtn\">+ Thêm thành viên</button>
                    </div>
                </div>

                <!-- Danh sách hoạt động -->
                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-list-ul me-2\"></i>Danh sách điểm danh</h5>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"activitiesTable\" class=\"table table-striped align-items-center mb-0\">
                                <thead class=\"bg-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Tên hoạt động</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Số lượt tham gia</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css\">
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js\"></script>

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
        background: linear-gradient(90deg, rgb(0, 157, 255), rgb(127, 35, 247));
    }
    .shadow-lg {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    h5 {
        color: white;
    }
</style>

<script>
\$(document).ready(function() {
    let activitiesTable = \$('#activitiesTable').DataTable({
        \"ajax\": \"{{ path('app_activities_index') }}\",
        \"columns\": [
            { \"data\": \"id\", \"className\": \"text-center\" },
            { \"data\": \"title\" },
            { \"data\": \"participant_count\" },
            {
                \"data\": null,
                \"className\": \"text-center\",
                \"render\": function(data, type, row) {
                    return `<button class=\"btn btn-primary btn-sm view-attendance bg-gradient-primary mb-0\" data-id=\"\${row.id}\" data-title=\"\${row.title}\"><i class=\"fas fa-eye\"></i> Xem</button>`;
                }
            }
        ],
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
                let activityId = data.id;
                let activityTitle = data.title;

                \$('#activityName').text(activityTitle);
                \$('#attendanceSection').removeClass('d-none');

                let attendanceTable = \$('#attendanceTable').DataTable({
                    \"destroy\": true,
                    \"ajax\": `/attendance/\${activityId}`,
                    \"columns\": [
                        { \"data\": \"id\" },
                        { \"data\": \"member_name\" },
                        { \"data\": \"check_in_time\" },
                        {
                            \"data\": null,
                            \"className\": \"text-center\",
                            \"render\": function(data, type, row) {
                                return `<button class=\"btn btn-danger btn-sm remove-member\" data-id=\"\${row.id}\">Xóa</button>`;
                            }
                        }
                    ]
                });

                \$('#attendanceTable tbody').on('click', '.remove-member', function() {
                    let attendanceId = \$(this).data('id');
                    \$.ajax({
                        url: `/attendance/delete/\${attendanceId}`,
                        type: 'POST',
                        success: function() { attendanceTable.ajax.reload(); }
                    });
                });

                \$('#addMemberBtn').off('click').on('click', function() {
                    let memberName = prompt(\"Nhập tên thành viên:\");
                    if (memberName) {
                        \$.ajax({
                            url: `/attendance/add`,
                            type: 'POST',
                            contentType: \"application/json\",
                            data: JSON.stringify({ activity_id: activityId, member_name: memberName }),
                            success: function() { attendanceTable.ajax.reload(); }
                        });
                    }
                });

                \$('html, body').animate({ scrollTop: 0 }, 'fast');
            });
        }
    });

    \$('#closeAttendance').on('click', function() {
        \$('#attendanceSection').addClass('d-none');
    });
});
</script>
{% endblock %}
", "z-old/attendance/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\attendance\\index.html.twig");
    }
}
