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

/* z-old/members/index.html.twig */
class __TwigTemplate_387329d20c12d9b94c66b0a98f70fa3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/members/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/members/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/members/index.html.twig", 1);
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

        yield "Quản lý thành viên";
        
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
                <!-- Chi tiết thành viên -->
                <div class=\"card mb-4 shadow-sm d-none\" id=\"MemberDetail\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Thông tin thành viên - ID: <span id=\"MemberId\"></span><span id=\"transactionType\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeDetail\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <p><strong>Họ và tên:</strong> <span id=\"MemberName\"></span></p>
                                <p><strong>Giới tính:</strong> <span id=\"MemberGender\"></span></p>
                                <p><strong>MSSV:</strong> <span id=\"MemberStudentID\"></span></p>
                                <p><strong>Lớp:</strong> <span id=\"MemberClasses\"></span></p>
                                <p><strong>Khoa:</strong> <span id=\"MemberFaculty\"></span></p>
                            </div>
                            <div class=\"col-md-6\">
                                <p><strong>Mail:</strong> <span id=\"MemberMail\"></span></p>
                                <p><strong>Địa chỉ:</strong> <span id=\"MemberAddress\"></span></p>
                                <p><strong>Số điện thoại:</strong> <span id=\"MemberPhoneNum\"></span></p>
                                <p><strong>Ngày tham gia:</strong> <span id=\"MemberJoinDate\"></span></p>
                                <p><strong>Ngày sinh:</strong> <span id=\"MemberDOB\"></span></p>
                            </div>
                        </div>
                        <button class=\"btn btn-primary btn-sm mt-3\" id=\"editMember\">Sửa thông tin</button>
                        <button class=\"btn btn-danger btn-sm mt-3\" id=\"deleteTransaction\">Xóa thành viên</button>
                    </div>
                </div>

                <!-- Form sửa thành viên -->
                <div class=\"card mt-4 mb-4 shadow-sm d-none\" id=\"editMemberForm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Sửa thông tin thành viên - ID: <span id=\"editMemberId\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeEditForm\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <form id=\"memberEditForm\">
                            <div class=\"mb-3\">
                                <label for=\"editMemberFullname\" class=\"form-label\">Họ và tên</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberFullname\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberGender\" class=\"form-label\">Giới tính</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberGender\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberStudentID\" class=\"form-label\">MSSV</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberStudentID\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberClasses\" class=\"form-label\">Lớp</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberClasses\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberFaculty\" class=\"form-label\">Khoa</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberFaculty\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberEmail\" class=\"form-label\">Mail</label>
                                <input type=\"email\" class=\"form-control\" id=\"editMemberEmail\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberAddress\" class=\"form-label\">Địa chỉ</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberAddress\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberPhone\" class=\"form-label\">Số điện thoại</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberPhone\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberJoinDate\" class=\"form-label\">Ngày tham gia</label>
                                <input type=\"date\" class=\"form-control\" id=\"editMemberJoinDate\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberDOB\" class=\"form-label\">Ngày sinh</label>
                                <input type=\"date\" class=\"form-control\" id=\"editMemberDOB\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>

                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-users me-2\"></i> Danh sách thành viên</h5>
                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_members_new");
        yield "\" class=\"btn btn-success btn-sm mb-0\">
                            <i class=\"fas fa-plus me-2\"></i> Tạo mới
                        </a>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"membersTable\" class=\"table table-hover align-items-center mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Họ và tên</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">MSSV</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Số điện thoại</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DataTables sẽ tự động điền dữ liệu -->
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

<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- DataTables JS -->
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
        background: linear-gradient(90deg,rgb(0, 157, 255),rgb(127, 35, 247));
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
    \$('#membersTable').DataTable({
        \"ajax\": \"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_members_index");
        yield "\",
        \"columns\": [
            { \"data\": \"id\", \"className\": \"text-center\" },
            { \"data\": \"fullname\" },
            { \"data\": \"student_id\" },
            { \"data\": \"phone\" },
            {
                \"data\": null,
                \"className\": \"text-center\",
                \"render\": function(data, type, row) {
                    return `<button class=\"btn btn-primary btn-sm view-transaction bg-gradient-primary mb-0\"
                             data-id=\"\${row.id}\" data-fullname=\"\${row.fullname}\" data-student_id=\"\${row.student_id}\"
                             data-phone=\"\${row.phone}\" data-join_date=\"\${row.join_date}\" data-dob=\"\${row.dob}\"
                             data-gender=\"\${row.gender}\" data-classes=\"\${row.classes}\" data-faculty=\"\${row.faculty}\"
                             data-email=\"\${row.email}\" data-address=\"\${row.address}\"><i class=\"fas fa-eye\"></i> Xem</button>`;
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
                \$('#MemberId').text(data.id);
                \$('#MemberName').text(data.fullname);
                \$('#MemberStudentID').text(data.student_id);
                \$('#MemberPhoneNum').text(data.phone);
                \$('#MemberJoinDate').text(data.join_date);
                \$('#MemberDOB').text(data.dob);
                \$('#MemberGender').text(data.gender);
                \$('#MemberClasses').text(data.classes);
                \$('#MemberFaculty').text(data.faculty);
                \$('#MemberMail').text(data.email);
                \$('#MemberAddress').text(data.address);

                \$('#MemberDetail').hide().removeClass('d-none').slideDown();
                \$('html, body').animate({ scrollTop: 0 }, 'fast');

                // Set the edit button link
                \$('#editMember').data('id', data.id);
                \$('#editMember').data('fullname', data.fullname);
                \$('#editMember').data('gender', data.gender);
                \$('#editMember').data('student_id', data.student_id);
                \$('#editMember').data('classes', data.classes);
                \$('#editMember').data('faculty', data.faculty);
                \$('#editMember').data('email', data.email);
                \$('#editMember').data('address', data.address);
                \$('#editMember').data('phone', data.phone);
                \$('#editMember').data('join_date', data.join_date);
                \$('#editMember').data('dob', data.dob);
            });
        }
    });

    \$('#editMember').on('click', function() {
        \$('#editMemberId').text(\$(this).data('id'));
        \$('#editMemberFullname').val(\$(this).data('fullname'));
        \$('#editMemberGender').val(\$(this).data('gender'));
        \$('#editMemberStudentID').val(\$(this).data('student_id'));
        \$('#editMemberClasses').val(\$(this).data('classes'));
        \$('#editMemberFaculty').val(\$(this).data('faculty'));
        \$('#editMemberEmail').val(\$(this).data('email'));
        \$('#editMemberAddress').val(\$(this).data('address'));
        \$('#editMemberPhone').val(\$(this).data('phone'));
        \$('#editMemberJoinDate').val(\$(this).data('join_date'));
        \$('#editMemberDOB').val(\$(this).data('dob'));

        \$('#MemberDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
        \$('#editMemberForm').hide().removeClass('d-none').slideDown();
    });

    \$('#closeEditForm').on('click', function() {
        \$('#editMemberForm').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#memberEditForm').on('submit', function(e) {
        e.preventDefault();

        const memberId = \$('#editMemberId').text();
        const formData = {
            fullname: \$('#editMemberFullname').val(),
            gender: \$('#editMemberGender').val(),
            student_id: \$('#editMemberStudentID').val(),
            classes: \$('#editMemberClasses').val(),
            faculty: \$('#editMemberFaculty').val(),
            email: \$('#editMemberEmail').val(),
            address: \$('#editMemberAddress').val(),
            phone: \$('#editMemberPhone').val(),
            join_date: \$('#editMemberJoinDate').val(),
            dob: \$('#editMemberDOB').val()
        };

        \$.ajax({
            url: `/members/\${memberId}/edit`,
            method: 'POST',
            data: formData,
            success: function(response) {
                alert('Thông tin thành viên đã được cập nhật.');
                \$('#editMemberForm').slideUp(function() {
                    \$(this).addClass('d-none');
                });
                \$('#membersTable').DataTable().ajax.reload();
            },
            error: function(xhr, status, error) {
                alert('Đã xảy ra lỗi khi cập nhật thông tin thành viên.');
            }
        });
    });

    \$('#closeDetail').on('click', function() {
        \$('#MemberDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#deleteTransaction').on('click', function() {
        if (confirm('Bạn có chắc chắn muốn xóa thành viên này không?')) {
            // Add your delete logic here
            alert('Thành viên đã được xóa.');
            \$('#MemberDetail').slideUp(function() {
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
        return "z-old/members/index.html.twig";
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
        return array (  262 => 163,  190 => 94,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý thành viên{% endblock %}

{% block body %}
<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Chi tiết thành viên -->
                <div class=\"card mb-4 shadow-sm d-none\" id=\"MemberDetail\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Thông tin thành viên - ID: <span id=\"MemberId\"></span><span id=\"transactionType\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeDetail\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <p><strong>Họ và tên:</strong> <span id=\"MemberName\"></span></p>
                                <p><strong>Giới tính:</strong> <span id=\"MemberGender\"></span></p>
                                <p><strong>MSSV:</strong> <span id=\"MemberStudentID\"></span></p>
                                <p><strong>Lớp:</strong> <span id=\"MemberClasses\"></span></p>
                                <p><strong>Khoa:</strong> <span id=\"MemberFaculty\"></span></p>
                            </div>
                            <div class=\"col-md-6\">
                                <p><strong>Mail:</strong> <span id=\"MemberMail\"></span></p>
                                <p><strong>Địa chỉ:</strong> <span id=\"MemberAddress\"></span></p>
                                <p><strong>Số điện thoại:</strong> <span id=\"MemberPhoneNum\"></span></p>
                                <p><strong>Ngày tham gia:</strong> <span id=\"MemberJoinDate\"></span></p>
                                <p><strong>Ngày sinh:</strong> <span id=\"MemberDOB\"></span></p>
                            </div>
                        </div>
                        <button class=\"btn btn-primary btn-sm mt-3\" id=\"editMember\">Sửa thông tin</button>
                        <button class=\"btn btn-danger btn-sm mt-3\" id=\"deleteTransaction\">Xóa thành viên</button>
                    </div>
                </div>

                <!-- Form sửa thành viên -->
                <div class=\"card mt-4 mb-4 shadow-sm d-none\" id=\"editMemberForm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Sửa thông tin thành viên - ID: <span id=\"editMemberId\"></span></h6>
                        <button class=\"btn btn-danger btn-sm mb-0\" id=\"closeEditForm\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <form id=\"memberEditForm\">
                            <div class=\"mb-3\">
                                <label for=\"editMemberFullname\" class=\"form-label\">Họ và tên</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberFullname\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberGender\" class=\"form-label\">Giới tính</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberGender\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberStudentID\" class=\"form-label\">MSSV</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberStudentID\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberClasses\" class=\"form-label\">Lớp</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberClasses\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberFaculty\" class=\"form-label\">Khoa</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberFaculty\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberEmail\" class=\"form-label\">Mail</label>
                                <input type=\"email\" class=\"form-control\" id=\"editMemberEmail\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberAddress\" class=\"form-label\">Địa chỉ</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberAddress\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberPhone\" class=\"form-label\">Số điện thoại</label>
                                <input type=\"text\" class=\"form-control\" id=\"editMemberPhone\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberJoinDate\" class=\"form-label\">Ngày tham gia</label>
                                <input type=\"date\" class=\"form-control\" id=\"editMemberJoinDate\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"editMemberDOB\" class=\"form-label\">Ngày sinh</label>
                                <input type=\"date\" class=\"form-control\" id=\"editMemberDOB\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>

                <div class=\"card shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0 fw-bold\"><i class=\"fas fa-users me-2\"></i> Danh sách thành viên</h5>
                        <a href=\"{{ path('app_members_new') }}\" class=\"btn btn-success btn-sm mb-0\">
                            <i class=\"fas fa-plus me-2\"></i> Tạo mới
                        </a>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"membersTable\" class=\"table table-hover align-items-center mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Họ và tên</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">MSSV</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Số điện thoại</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- DataTables sẽ tự động điền dữ liệu -->
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

<!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- DataTables JS -->
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
        background: linear-gradient(90deg,rgb(0, 157, 255),rgb(127, 35, 247));
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
    \$('#membersTable').DataTable({
        \"ajax\": \"{{ path('app_members_index') }}\",
        \"columns\": [
            { \"data\": \"id\", \"className\": \"text-center\" },
            { \"data\": \"fullname\" },
            { \"data\": \"student_id\" },
            { \"data\": \"phone\" },
            {
                \"data\": null,
                \"className\": \"text-center\",
                \"render\": function(data, type, row) {
                    return `<button class=\"btn btn-primary btn-sm view-transaction bg-gradient-primary mb-0\"
                             data-id=\"\${row.id}\" data-fullname=\"\${row.fullname}\" data-student_id=\"\${row.student_id}\"
                             data-phone=\"\${row.phone}\" data-join_date=\"\${row.join_date}\" data-dob=\"\${row.dob}\"
                             data-gender=\"\${row.gender}\" data-classes=\"\${row.classes}\" data-faculty=\"\${row.faculty}\"
                             data-email=\"\${row.email}\" data-address=\"\${row.address}\"><i class=\"fas fa-eye\"></i> Xem</button>`;
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
                \$('#MemberId').text(data.id);
                \$('#MemberName').text(data.fullname);
                \$('#MemberStudentID').text(data.student_id);
                \$('#MemberPhoneNum').text(data.phone);
                \$('#MemberJoinDate').text(data.join_date);
                \$('#MemberDOB').text(data.dob);
                \$('#MemberGender').text(data.gender);
                \$('#MemberClasses').text(data.classes);
                \$('#MemberFaculty').text(data.faculty);
                \$('#MemberMail').text(data.email);
                \$('#MemberAddress').text(data.address);

                \$('#MemberDetail').hide().removeClass('d-none').slideDown();
                \$('html, body').animate({ scrollTop: 0 }, 'fast');

                // Set the edit button link
                \$('#editMember').data('id', data.id);
                \$('#editMember').data('fullname', data.fullname);
                \$('#editMember').data('gender', data.gender);
                \$('#editMember').data('student_id', data.student_id);
                \$('#editMember').data('classes', data.classes);
                \$('#editMember').data('faculty', data.faculty);
                \$('#editMember').data('email', data.email);
                \$('#editMember').data('address', data.address);
                \$('#editMember').data('phone', data.phone);
                \$('#editMember').data('join_date', data.join_date);
                \$('#editMember').data('dob', data.dob);
            });
        }
    });

    \$('#editMember').on('click', function() {
        \$('#editMemberId').text(\$(this).data('id'));
        \$('#editMemberFullname').val(\$(this).data('fullname'));
        \$('#editMemberGender').val(\$(this).data('gender'));
        \$('#editMemberStudentID').val(\$(this).data('student_id'));
        \$('#editMemberClasses').val(\$(this).data('classes'));
        \$('#editMemberFaculty').val(\$(this).data('faculty'));
        \$('#editMemberEmail').val(\$(this).data('email'));
        \$('#editMemberAddress').val(\$(this).data('address'));
        \$('#editMemberPhone').val(\$(this).data('phone'));
        \$('#editMemberJoinDate').val(\$(this).data('join_date'));
        \$('#editMemberDOB').val(\$(this).data('dob'));

        \$('#MemberDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
        \$('#editMemberForm').hide().removeClass('d-none').slideDown();
    });

    \$('#closeEditForm').on('click', function() {
        \$('#editMemberForm').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#memberEditForm').on('submit', function(e) {
        e.preventDefault();

        const memberId = \$('#editMemberId').text();
        const formData = {
            fullname: \$('#editMemberFullname').val(),
            gender: \$('#editMemberGender').val(),
            student_id: \$('#editMemberStudentID').val(),
            classes: \$('#editMemberClasses').val(),
            faculty: \$('#editMemberFaculty').val(),
            email: \$('#editMemberEmail').val(),
            address: \$('#editMemberAddress').val(),
            phone: \$('#editMemberPhone').val(),
            join_date: \$('#editMemberJoinDate').val(),
            dob: \$('#editMemberDOB').val()
        };

        \$.ajax({
            url: `/members/\${memberId}/edit`,
            method: 'POST',
            data: formData,
            success: function(response) {
                alert('Thông tin thành viên đã được cập nhật.');
                \$('#editMemberForm').slideUp(function() {
                    \$(this).addClass('d-none');
                });
                \$('#membersTable').DataTable().ajax.reload();
            },
            error: function(xhr, status, error) {
                alert('Đã xảy ra lỗi khi cập nhật thông tin thành viên.');
            }
        });
    });

    \$('#closeDetail').on('click', function() {
        \$('#MemberDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#deleteTransaction').on('click', function() {
        if (confirm('Bạn có chắc chắn muốn xóa thành viên này không?')) {
            // Add your delete logic here
            alert('Thành viên đã được xóa.');
            \$('#MemberDetail').slideUp(function() {
                \$(this).addClass('d-none');
            });
        }
    });
});
</script>
{% endblock %}
", "z-old/members/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\members\\index.html.twig");
    }
}
