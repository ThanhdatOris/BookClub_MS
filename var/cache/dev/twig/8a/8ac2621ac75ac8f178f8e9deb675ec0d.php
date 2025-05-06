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

/* users/index.html.twig */
class __TwigTemplate_74ababd5dcac49deb6430f49f6967e01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/index.html.twig", 1);
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
        yield "    ";
        // line 7
        yield "    ";
        $context["form_fields"] = ["student_id" =>         // line 8
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "student_id", [], "any", false, false, false, 8), 'row'), "name" =>         // line 9
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), 'row'), "email" =>         // line 10
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'row'), "gender" =>         // line 11
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "gender", [], "any", false, false, false, 11), 'row'), "faculty" =>         // line 12
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "faculty", [], "any", false, false, false, 12), 'row'), "class_id" =>         // line 13
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "class_id", [], "any", false, false, false, 13), 'row'), "role" =>         // line 14
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "role", [], "any", false, false, false, 14), 'row'), "contact_info" =>         // line 15
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "contact_info", [], "any", false, false, false, 15), 'row')];
        // line 17
        yield "
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <!-- Thống kê -->
            <div class=\"col-12 px-0\">
                <div class=\"row mb-md-4\">
                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Tổng số</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 31, $this->source); })()), "html", null, true);
        yield " thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-info shadow text-center border-radius-md\">
                                            <i class=\"fas fa-users text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Hoạt động</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_users"]) || array_key_exists("active_users", $context) ? $context["active_users"] : (function () { throw new RuntimeError('Variable "active_users" does not exist.', 53, $this->source); })()), "html", null, true);
        yield " thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-check text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Ngưng hoạt động</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactive_users"]) || array_key_exists("inactive_users", $context) ? $context["inactive_users"] : (function () { throw new RuntimeError('Variable "inactive_users" does not exist.', 75, $this->source); })()), "html", null, true);
        yield " thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-danger shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-times text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mb-4\">
                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Quản lý</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["admin_users"]) || array_key_exists("admin_users", $context) ? $context["admin_users"] : (function () { throw new RuntimeError('Variable "admin_users" does not exist.', 99, $this->source); })()), "html", null, true);
        yield " thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-shield text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Thủ quỹ</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["treasurer_users"]) || array_key_exists("treasurer_users", $context) ? $context["treasurer_users"] : (function () { throw new RuntimeError('Variable "treasurer_users" does not exist.', 121, $this->source); })()), "html", null, true);
        yield " thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-tie text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Thành viên</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                ";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["member_users"]) || array_key_exists("member_users", $context) ? $context["member_users"] : (function () { throw new RuntimeError('Variable "member_users" does not exist.', 143, $this->source); })()), "html", null, true);
        yield " thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dynamic Content Container -->
            <div id=\"dynamicContent\" class=\"mb-4 px-0\">
                <div class=\"card\">
                    <div class=\"card-body text-center py-4\">
                        <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                        <h5>Chọn thành viên để xem chi tiết</h5>
                        <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm thành viên\" để tạo mới</p>
                    </div>
                </div>
            </div>

            <!-- Bảng thành viên -->
            <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý thành viên</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                <input type=\"text\" id=\"usersSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm thành viên...\" style=\"max-width: 300px;\">
                                <button type=\"button\" id=\"usersClearSearchBtn\" class=\"btn btn-sm btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                            </div>
                            ";
        // line 180
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 181
            yield "                                <button type=\"button\" class=\"btn btn-success mb-0\" onclick=\"showAddUserForm()\">
                                    <i class=\"fas fa-plus me-2\"></i>Thêm thành viên
                                </button>
                            ";
        }
        // line 185
        yield "                        </div>
                    </div>
                </div>

                    <div class=\"card-body px-0 pt-0 pb-2\">
                    <!-- Bảng dữ liệu -->
                    <div class=\"table-responsive p-0 px-3\">
                        <table class=\"table align-items-center mb-0\">
                                <thead>
                                    <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Mã sinh viên</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Họ tên thành viên</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Khoa</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Vai trò</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody id=\"usersTableBody\">
                                <!-- TableLayout sẽ fill dữ liệu -->
                                </tbody>
                            </table>
                        </div>
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            <nav>
                            <ul class=\"pagination\" id=\"usersPagination\"></ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const usersData = ";
        // line 220
        yield (isset($context["users_json"]) || array_key_exists("users_json", $context) ? $context["users_json"] : (function () { throw new RuntimeError('Variable "users_json" does not exist.', 220, $this->source); })());
        yield ";
            const dynamicContent = document.getElementById('dynamicContent');
            const formFields = ";
        // line 222
        yield json_encode((isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 222, $this->source); })()));
        yield ";

            // Khởi tạo TableLayout
            const usersTable = new TableLayout({
                data: usersData,
                tableBodyId: 'usersTableBody',
                searchInputId: 'usersSearchInput',
                clearSearchBtnId: 'usersClearSearchBtn',
                paginationId: 'usersPagination',
                itemsPerPage: 10,
                columns: [
                    { 
                        field: 'studentId', 
                        formatter: (value) => `<div class='text-center'><div class='badge bg-gradient-primary text-white fw-bold text-uppercase text-secondary text-xxs font-weight-bolder'>\${value}</div></div>`
                    },
                    {
                        field: 'name',
                        formatter: (value, item) => `
                            <div class='d-flex px-2 py-1'>
                                <div><img src='";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default.png"), "html", null, true);
        yield "' class='avatar avatar-sm me-3'></div>
                                <div class='d-flex flex-column justify-content-center'>
                                    <h6 class='mb-0 text-sm'>\${item.name}</h6>
                                    <p class='text-xs text-secondary mb-0'>\${item.email}</p>
                                </div>
                            </div>`
                    },
                    {
                        field: 'faculty',
                        formatter: (value) => `<p class='text-xs font-weight-bold mb-0'>\${value}</p>`
                    },
                    {
                        field: 'role',
                        formatter: (value) => {
                            if (value === 'ROLE_ADMIN') return `<div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\"><i class=\"fas fa-user-shield text-lg opacity-10\" aria-hidden=\"true\"></i></div>`;
                            if (value === 'ROLE_TREASURER') return `<div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\"><i class=\"fas fa-user-tie text-lg opacity-10\" aria-hidden=\"true\"></i></div>`;
                            return `<div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\"><i class=\"fas fa-user text-lg opacity-10\" aria-hidden=\"true\"></i></div>`;
                        }
                    },
                    {
                        field: 'status',
                        formatter: (value) => value === 'active'
                            ? `<div class=\"text-center\"><i class='fas fa-check-circle text-success'></i></div>`
                            : `<div class=\"text-center\"><i class='fas fa-times-circle text-danger'></i></div>`
                    }
                ],
                rowAttributes: (item) => ({
                    'data-id': item.id,
                    'style': 'cursor: pointer'
                }),
                onRowClick: (row) => {
                    const userId = row.getAttribute('data-id');
                    if (userId) {
                        const user = usersData.find(u => u.id == userId);
                        if (user) {
                            showUserDetail(user);
                            let userDetailContainer = document.getElementById('dynamicContent');
                            window.scrollTo(0, dynamicContent.offsetTop);
                        }
                    }
                }
            });

            // Hàm hiển thị form thêm thành viên
            window.showAddUserForm = function() {
                const formStart = `";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), 'form_start', ["attr" => ["id" => "addUserForm", "novalidate" => "novalidate"]]), "js"), "html", null, true);
        // line 291
        yield "`;
                
                const formEnd = `";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), 'form_end', ["render_rest" => false]), "js"), "html", null, true);
        yield "`;

                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <h5 class=\"mb-0\">Thêm thành viên mới</h5>
                            <button type=\"button\" class=\"btn-close\" onclick=\"hideForm()\"></button>
                        </div>
                        <div class=\"card-body\">
                            \${formStart}
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    ";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 305, $this->source); })()), "student_id", [], "any", false, false, false, 305), "js"), "html", null, true);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 308, $this->source); })()), "name", [], "any", false, false, false, 308), "js"), "html", null, true);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 311, $this->source); })()), "email", [], "any", false, false, false, 311), "js"), "html", null, true);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 314, $this->source); })()), "gender", [], "any", false, false, false, 314), "js"), "html", null, true);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 317, $this->source); })()), "faculty", [], "any", false, false, false, 317), "js"), "html", null, true);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 320, $this->source); })()), "class_id", [], "any", false, false, false, 320), "js"), "html", null, true);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 323, $this->source); })()), "role", [], "any", false, false, false, 323), "js"), "html", null, true);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_fields"]) || array_key_exists("form_fields", $context) ? $context["form_fields"] : (function () { throw new RuntimeError('Variable "form_fields" does not exist.', 326, $this->source); })()), "contact_info", [], "any", false, false, false, 326), "js"), "html", null, true);
        yield "
                                </div>
                            </div>
                            <div class=\"d-flex justify-content-end gap-2 mt-4\">
                                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideForm()\">Đóng</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Thêm thành viên</button>
                            </div>
                            \${formEnd}
                        </div>
                    </div>
                `;

                // Khởi tạo form handler
                initAddUserForm();
            };

            // Hàm khởi tạo xử lý form thêm thành viên
            function initAddUserForm() {
                const form = document.getElementById('addUserForm');
                if (form) {
                    form.addEventListener('submit', async function(e) {
                        e.preventDefault();
                        try {
                            const formData = new FormData(this);
                            const response = await fetch(this.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            });

                            const data = await response.json();
                            if (data.success) {
                                alert(data.message);
                                window.location.reload();
                            } else {
                                alert(data.error || 'Có lỗi xảy ra khi thêm thành viên');
                            }
                        } catch (error) {
                            console.error('Lỗi khi gửi form:', error);
                            alert('Có lỗi xảy ra khi thêm thành viên. Vui lòng thử lại sau.');
                        }
                    });
                }
            }

            // Hàm hiển thị chi tiết thành viên
            window.showUserDetail = function(user) {
                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <h5 class=\"mb-0\">Chi tiết thành viên</h5>
                            <button type=\"button\" class=\"btn-close\" onclick=\"hideForm()\"></button>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row g-4\">
                                <!-- Avatar và thông tin cơ bản -->
                                <div class=\"col-md-4 text-center\">
                                    <img src=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default.png"), "html", null, true);
        yield "\" class=\"rounded-circle shadow-sm mb-3\" style=\"width: 120px; height: 120px; object-fit: cover;\">
                                    <h5 class=\"fw-bold mb-1\">\${user.name}</h5>
                                    <p class=\"text-muted small mb-2\">\${user.studentId}</p>
                                    <span class=\"badge bg-\${user.role === 'ROLE_ADMIN' ? 'primary' : user.role === 'ROLE_TREASURER' ? 'warning' : 'success'} px-3 py-2\">
                                        \${user.role === 'ROLE_ADMIN' ? 'Quản lý' : user.role === 'ROLE_TREASURER' ? 'Thủ quỹ' : 'Thành viên'}
                                    </span>
                                </div>

                                <!-- Thông tin chi tiết -->
                                <div class=\"col-md-8\">
                                    <div class=\"row g-3\">
                                        <!-- Thông tin cá nhân -->
                                        <div class=\"col-12\">
                                            <div class=\"card border-0 shadow-sm\">
                                                <div class=\"card-body\">
                                                    <h6 class=\"fw-bold mb-3\">Thông tin cá nhân</h6>
                                                    <div class=\"row g-3\">
                                                        <div class=\"col-12\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-envelope me-2\"></i>Email</p>
                                                            <p class=\"mb-0 text-break\" style=\"word-wrap: break-word; max-width: 100%;\">\${user.email}</p>
                                                        </div>
                                                        <div class=\"col-sm-8\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-university me-2\"></i>Khoa</p>
                                                            <p class=\"mb-0\">\${user.faculty || '<span class=\"text-danger\">Chưa cập nhật</span>'}</p>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-users me-2\"></i>Lớp</p>
                                                            <p class=\"mb-0\">\${user.classId || '<span class=\"text-danger\">Chưa cập nhật</span>'}</p>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-venus-mars me-2\"></i>Giới tính</p>
                                                            <p class=\"mb-0\">\${user.gender === 'male' ? 'Nam' : user.gender === 'female' ? 'Nữ' : 'Khác'}</p>
                                                        </div>
                                                        <div class=\"col-12\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-phone-alt me-2\"></i>Liên hệ</p>
                                                            <p class=\"mb-0\">\${user.contactInfo || '<span class=\"text-danger\">Chưa cập nhật</span>'}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Thống kê hoạt động -->
                                        <div class=\"col-12\">
                                            <div class=\"card border-0 shadow-sm\">
                                                <div class=\"card-body\">
                                                    <h6 class=\"fw-bold mb-3\">Thống kê hoạt động</h6>
                                                    <div class=\"row g-3\">
                                                        <div class=\"col-sm-6\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"bg-primary bg-opacity-10 border-radius-md p-3 me-3\">
                                                                    <i class=\"fas fa-calendar text-primary\"></i>
                                                                </div>
                                                                <div>
                                                                    <h3 class=\"fw-bold mb-0\">\${user.participatedActivities ? user.participatedActivities.length : '0'}</h3>
                                                                    <p class=\"text-muted small mb-0\">Tổng hoạt động</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"bg-success bg-opacity-10 border-radius-md p-3 me-3\">
                                                                    <i class=\"fas fa-check text-success\"></i>
                                                                </div>
                                                                <div>
                                                                    <h3 class=\"fw-bold mb-0\">\${user.participatedActivities ? user.participatedActivities.filter(a => a.status === 'attended').length : '0'}</h3>
                                                                    <p class=\"text-muted small mb-0\">Đã điểm danh</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    ";
        // line 461
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 462
            yield "                                    <div class=\"d-flex justify-content-end gap-2 mt-4\">
                                        <a href=\"";
            // line 463
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => "\${user.id}"]);
            yield "\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-edit me-2\"></i>Chỉnh sửa
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 466
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_toggle_status", ["id" => "\${user.id}"]);
            yield "\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 467
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("toggle-status"), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn \${user.status === 'active' ? 'btn-danger' : 'btn-success'}\">
                                                <i class=\"fas \${user.status === 'active' ? 'fa-user-times' : 'fa-user-check'} me-2\"></i>
                                                \${user.status === 'active' ? 'Vô hiệu hóa' : 'Kích hoạt'}
                                            </button>
                                        </form>
                                    </div>
                                    ";
        }
        // line 475
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                `;
            };

            // Hàm ẩn form/chi tiết
            window.hideForm = function() {
                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-body text-center py-4\">
                            <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                            <h5>Chọn thành viên để xem chi tiết</h5>
                            <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm thành viên\" để tạo mới</p>
                        </div>
                    </div>
                `;
            };
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
        return "users/index.html.twig";
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
        return array (  649 => 475,  638 => 467,  634 => 466,  628 => 463,  625 => 462,  623 => 461,  544 => 385,  482 => 326,  476 => 323,  470 => 320,  464 => 317,  458 => 314,  452 => 311,  446 => 308,  440 => 305,  425 => 293,  421 => 291,  419 => 286,  371 => 241,  349 => 222,  344 => 220,  338 => 217,  304 => 185,  298 => 181,  296 => 180,  256 => 143,  231 => 121,  206 => 99,  179 => 75,  154 => 53,  129 => 31,  113 => 17,  111 => 15,  110 => 14,  109 => 13,  108 => 12,  107 => 11,  106 => 10,  105 => 9,  104 => 8,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý thành viên{% endblock %}

{% block body %}
    {# Lưu form view vào biến để tái sử dụng #}
    {% set form_fields = {
        'student_id': form_row(form.student_id),
        'name': form_row(form.name),
        'email': form_row(form.email),
        'gender': form_row(form.gender),
        'faculty': form_row(form.faculty),
        'class_id': form_row(form.class_id),
        'role': form_row(form.role),
        'contact_info': form_row(form.contact_info)
    } %}

    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <!-- Thống kê -->
            <div class=\"col-12 px-0\">
                <div class=\"row mb-md-4\">
                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Tổng số</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                {{ total_users }} thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-info shadow text-center border-radius-md\">
                                            <i class=\"fas fa-users text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Hoạt động</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                {{ active_users }} thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-check text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Ngưng hoạt động</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                {{ inactive_users }} thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-danger shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-times text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mb-4\">
                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Quản lý</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                {{ admin_users }} thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-shield text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Thủ quỹ</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                {{ treasurer_users }} thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user-tie text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-xl-4 col-md-4 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body p-3\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"numbers\">
                                            <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Thành viên</p>
                                            <h5 class=\"font-weight-bolder mb-0\">
                                                {{ member_users }} thành viên
                                            </h5>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                                            <i class=\"fas fa-user text-lg opacity-10\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dynamic Content Container -->
            <div id=\"dynamicContent\" class=\"mb-4 px-0\">
                <div class=\"card\">
                    <div class=\"card-body text-center py-4\">
                        <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                        <h5>Chọn thành viên để xem chi tiết</h5>
                        <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm thành viên\" để tạo mới</p>
                    </div>
                </div>
            </div>

            <!-- Bảng thành viên -->
            <div class=\"card mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý thành viên</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                <input type=\"text\" id=\"usersSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm thành viên...\" style=\"max-width: 300px;\">
                                <button type=\"button\" id=\"usersClearSearchBtn\" class=\"btn btn-sm btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                            </div>
                            {% if is_granted('ROLE_ADMIN') %}
                                <button type=\"button\" class=\"btn btn-success mb-0\" onclick=\"showAddUserForm()\">
                                    <i class=\"fas fa-plus me-2\"></i>Thêm thành viên
                                </button>
                            {% endif %}
                        </div>
                    </div>
                </div>

                    <div class=\"card-body px-0 pt-0 pb-2\">
                    <!-- Bảng dữ liệu -->
                    <div class=\"table-responsive p-0 px-3\">
                        <table class=\"table align-items-center mb-0\">
                                <thead>
                                    <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Mã sinh viên</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Họ tên thành viên</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Khoa</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Vai trò</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody id=\"usersTableBody\">
                                <!-- TableLayout sẽ fill dữ liệu -->
                                </tbody>
                            </table>
                        </div>
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            <nav>
                            <ul class=\"pagination\" id=\"usersPagination\"></ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"{{ asset('js/table-layout.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const usersData = {{ users_json|raw }};
            const dynamicContent = document.getElementById('dynamicContent');
            const formFields = {{ form_fields|json_encode|raw }};

            // Khởi tạo TableLayout
            const usersTable = new TableLayout({
                data: usersData,
                tableBodyId: 'usersTableBody',
                searchInputId: 'usersSearchInput',
                clearSearchBtnId: 'usersClearSearchBtn',
                paginationId: 'usersPagination',
                itemsPerPage: 10,
                columns: [
                    { 
                        field: 'studentId', 
                        formatter: (value) => `<div class='text-center'><div class='badge bg-gradient-primary text-white fw-bold text-uppercase text-secondary text-xxs font-weight-bolder'>\${value}</div></div>`
                    },
                    {
                        field: 'name',
                        formatter: (value, item) => `
                            <div class='d-flex px-2 py-1'>
                                <div><img src='{{ asset('img/default.png') }}' class='avatar avatar-sm me-3'></div>
                                <div class='d-flex flex-column justify-content-center'>
                                    <h6 class='mb-0 text-sm'>\${item.name}</h6>
                                    <p class='text-xs text-secondary mb-0'>\${item.email}</p>
                                </div>
                            </div>`
                    },
                    {
                        field: 'faculty',
                        formatter: (value) => `<p class='text-xs font-weight-bold mb-0'>\${value}</p>`
                    },
                    {
                        field: 'role',
                        formatter: (value) => {
                            if (value === 'ROLE_ADMIN') return `<div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\"><i class=\"fas fa-user-shield text-lg opacity-10\" aria-hidden=\"true\"></i></div>`;
                            if (value === 'ROLE_TREASURER') return `<div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\"><i class=\"fas fa-user-tie text-lg opacity-10\" aria-hidden=\"true\"></i></div>`;
                            return `<div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\"><i class=\"fas fa-user text-lg opacity-10\" aria-hidden=\"true\"></i></div>`;
                        }
                    },
                    {
                        field: 'status',
                        formatter: (value) => value === 'active'
                            ? `<div class=\"text-center\"><i class='fas fa-check-circle text-success'></i></div>`
                            : `<div class=\"text-center\"><i class='fas fa-times-circle text-danger'></i></div>`
                    }
                ],
                rowAttributes: (item) => ({
                    'data-id': item.id,
                    'style': 'cursor: pointer'
                }),
                onRowClick: (row) => {
                    const userId = row.getAttribute('data-id');
                    if (userId) {
                        const user = usersData.find(u => u.id == userId);
                        if (user) {
                            showUserDetail(user);
                            let userDetailContainer = document.getElementById('dynamicContent');
                            window.scrollTo(0, dynamicContent.offsetTop);
                        }
                    }
                }
            });

            // Hàm hiển thị form thêm thành viên
            window.showAddUserForm = function() {
                const formStart = `{{ form_start(form, {
                    'attr': {
                        'id': 'addUserForm',
                        'novalidate': 'novalidate'
                    }
                })|e('js') }}`;
                
                const formEnd = `{{ form_end(form, {'render_rest': false})|e('js') }}`;

                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <h5 class=\"mb-0\">Thêm thành viên mới</h5>
                            <button type=\"button\" class=\"btn-close\" onclick=\"hideForm()\"></button>
                        </div>
                        <div class=\"card-body\">
                            \${formStart}
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    {{ form_fields.student_id|e('js') }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_fields.name|e('js') }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_fields.email|e('js') }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_fields.gender|e('js') }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_fields.faculty|e('js') }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_fields.class_id|e('js') }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_fields.role|e('js') }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_fields.contact_info|e('js') }}
                                </div>
                            </div>
                            <div class=\"d-flex justify-content-end gap-2 mt-4\">
                                <button type=\"button\" class=\"btn btn-secondary\" onclick=\"hideForm()\">Đóng</button>
                                <button type=\"submit\" class=\"btn btn-primary\">Thêm thành viên</button>
                            </div>
                            \${formEnd}
                        </div>
                    </div>
                `;

                // Khởi tạo form handler
                initAddUserForm();
            };

            // Hàm khởi tạo xử lý form thêm thành viên
            function initAddUserForm() {
                const form = document.getElementById('addUserForm');
                if (form) {
                    form.addEventListener('submit', async function(e) {
                        e.preventDefault();
                        try {
                            const formData = new FormData(this);
                            const response = await fetch(this.action, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            });

                            const data = await response.json();
                            if (data.success) {
                                alert(data.message);
                                window.location.reload();
                            } else {
                                alert(data.error || 'Có lỗi xảy ra khi thêm thành viên');
                            }
                        } catch (error) {
                            console.error('Lỗi khi gửi form:', error);
                            alert('Có lỗi xảy ra khi thêm thành viên. Vui lòng thử lại sau.');
                        }
                    });
                }
            }

            // Hàm hiển thị chi tiết thành viên
            window.showUserDetail = function(user) {
                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <h5 class=\"mb-0\">Chi tiết thành viên</h5>
                            <button type=\"button\" class=\"btn-close\" onclick=\"hideForm()\"></button>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row g-4\">
                                <!-- Avatar và thông tin cơ bản -->
                                <div class=\"col-md-4 text-center\">
                                    <img src=\"{{ asset('img/default.png') }}\" class=\"rounded-circle shadow-sm mb-3\" style=\"width: 120px; height: 120px; object-fit: cover;\">
                                    <h5 class=\"fw-bold mb-1\">\${user.name}</h5>
                                    <p class=\"text-muted small mb-2\">\${user.studentId}</p>
                                    <span class=\"badge bg-\${user.role === 'ROLE_ADMIN' ? 'primary' : user.role === 'ROLE_TREASURER' ? 'warning' : 'success'} px-3 py-2\">
                                        \${user.role === 'ROLE_ADMIN' ? 'Quản lý' : user.role === 'ROLE_TREASURER' ? 'Thủ quỹ' : 'Thành viên'}
                                    </span>
                                </div>

                                <!-- Thông tin chi tiết -->
                                <div class=\"col-md-8\">
                                    <div class=\"row g-3\">
                                        <!-- Thông tin cá nhân -->
                                        <div class=\"col-12\">
                                            <div class=\"card border-0 shadow-sm\">
                                                <div class=\"card-body\">
                                                    <h6 class=\"fw-bold mb-3\">Thông tin cá nhân</h6>
                                                    <div class=\"row g-3\">
                                                        <div class=\"col-12\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-envelope me-2\"></i>Email</p>
                                                            <p class=\"mb-0 text-break\" style=\"word-wrap: break-word; max-width: 100%;\">\${user.email}</p>
                                                        </div>
                                                        <div class=\"col-sm-8\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-university me-2\"></i>Khoa</p>
                                                            <p class=\"mb-0\">\${user.faculty || '<span class=\"text-danger\">Chưa cập nhật</span>'}</p>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-users me-2\"></i>Lớp</p>
                                                            <p class=\"mb-0\">\${user.classId || '<span class=\"text-danger\">Chưa cập nhật</span>'}</p>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-venus-mars me-2\"></i>Giới tính</p>
                                                            <p class=\"mb-0\">\${user.gender === 'male' ? 'Nam' : user.gender === 'female' ? 'Nữ' : 'Khác'}</p>
                                                        </div>
                                                        <div class=\"col-12\">
                                                            <p class=\"text-muted small mb-1\"><i class=\"fas fa-phone-alt me-2\"></i>Liên hệ</p>
                                                            <p class=\"mb-0\">\${user.contactInfo || '<span class=\"text-danger\">Chưa cập nhật</span>'}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Thống kê hoạt động -->
                                        <div class=\"col-12\">
                                            <div class=\"card border-0 shadow-sm\">
                                                <div class=\"card-body\">
                                                    <h6 class=\"fw-bold mb-3\">Thống kê hoạt động</h6>
                                                    <div class=\"row g-3\">
                                                        <div class=\"col-sm-6\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"bg-primary bg-opacity-10 border-radius-md p-3 me-3\">
                                                                    <i class=\"fas fa-calendar text-primary\"></i>
                                                                </div>
                                                                <div>
                                                                    <h3 class=\"fw-bold mb-0\">\${user.participatedActivities ? user.participatedActivities.length : '0'}</h3>
                                                                    <p class=\"text-muted small mb-0\">Tổng hoạt động</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-sm-6\">
                                                            <div class=\"d-flex align-items-center\">
                                                                <div class=\"bg-success bg-opacity-10 border-radius-md p-3 me-3\">
                                                                    <i class=\"fas fa-check text-success\"></i>
                                                                </div>
                                                                <div>
                                                                    <h3 class=\"fw-bold mb-0\">\${user.participatedActivities ? user.participatedActivities.filter(a => a.status === 'attended').length : '0'}</h3>
                                                                    <p class=\"text-muted small mb-0\">Đã điểm danh</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {% if is_granted('ROLE_ADMIN') %}
                                    <div class=\"d-flex justify-content-end gap-2 mt-4\">
                                        <a href=\"{{ path('app_users_edit', {'id': '\${user.id}'}) }}\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-edit me-2\"></i>Chỉnh sửa
                                        </a>
                                        <form method=\"post\" action=\"{{ path('app_users_toggle_status', {'id': '\${user.id}'}) }}\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status') }}\">
                                            <button type=\"submit\" class=\"btn \${user.status === 'active' ? 'btn-danger' : 'btn-success'}\">
                                                <i class=\"fas \${user.status === 'active' ? 'fa-user-times' : 'fa-user-check'} me-2\"></i>
                                                \${user.status === 'active' ? 'Vô hiệu hóa' : 'Kích hoạt'}
                                            </button>
                                        </form>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            };

            // Hàm ẩn form/chi tiết
            window.hideForm = function() {
                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-body text-center py-4\">
                            <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                            <h5>Chọn thành viên để xem chi tiết</h5>
                            <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm thành viên\" để tạo mới</p>
                        </div>
                    </div>
                `;
            };
        });
    </script>
{% endblock %}", "users/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\users\\index.html.twig");
    }
}
