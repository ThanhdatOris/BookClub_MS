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

/* profile/index.html.twig */
class __TwigTemplate_e23046c4b451d1cecb0bf89ebfffd6df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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

        yield "Tài khoản cá nhân - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <div class=\"col-md-8\">
                        <h3 class=\"card-title mb-0\">Tài khoản cá nhân</h3>
                        <p class=\"mb-0 fw-bold text-sm\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-4 text-end d-flex justify-content-end\">
                        ";
        // line 16
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TREASURER")))) {
            // line 17
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["studentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "studentId", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm mb-0\">Chỉnh sửa thông tin</a>
                        ";
        } else {
            // line 19
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_suggest", ["studentId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "studentId", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm mb-0\">Đề xuất chỉnh sửa</a>
                        ";
        }
        // line 21
        yield "                    </div>
                </div>
                <div class=\"card-body\">
                    <!-- Thông tin cá nhân -->
                    <h4 class=\"text-primary mb-3\">Thông tin cá nhân</h4>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <tbody>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tên</th>
                                    <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Email</th>
                                    <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mã sinh viên</th>
                                    <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "studentId", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Lớp</th>
                                    <td>";
        // line 43
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "classId", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "classId", [], "any", false, false, false, 43), "html", null, true)) : ("Chưa có thông tin"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Khoa</th>
                                    <td>";
        // line 47
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "faculty", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "faculty", [], "any", false, false, false, 47), "html", null, true)) : ("Chưa có thông tin"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thông tin liên hệ</th>
                                    <td>";
        // line 51
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "contactInfo", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "contactInfo", [], "any", false, false, false, 51), "html", null, true)) : ("Chưa có thông tin"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                    <td>
                                        <span class=\"badge bg-";
        // line 56
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56) == "active")) ? ("success") : ("danger"));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56), "html", null, true);
        yield "</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày tạo</th>
                                    <td>";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "createdAt", [], "any", false, false, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "createdAt", [], "any", false, false, false, 61), "d/m/Y H:i:s"), "html", null, true)) : ("Chưa có thông tin"));
        yield "</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày cập nhật</th>
                                    <td>";
        // line 65
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "updatedAt", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "updatedAt", [], "any", false, false, false, 65), "d/m/Y H:i:s"), "html", null, true)) : ("Chưa có thông tin"));
        yield "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Lịch sử hoạt động -->
                    <div class=\"alert alert-info text-white\">
                        <p class=\"mb-0\"><strong>Số hoạt động đã tham gia:</strong> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activityCount"]) || array_key_exists("activityCount", $context) ? $context["activityCount"] : (function () { throw new RuntimeError('Variable "activityCount" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                    <h4 class=\"text-primary mt-4 mb-3\">Lịch sử hoạt động</h4>
                    ";
        // line 76
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participatedActivities"]) || array_key_exists("participatedActivities", $context) ? $context["participatedActivities"] : (function () { throw new RuntimeError('Variable "participatedActivities" does not exist.', 76, $this->source); })())) > 0)) {
            // line 77
            yield "                        <div class=\"card\">
                            <div class=\"card-header pb-0\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Danh sách hoạt động đã tham gia</h6>
                                    <div class=\"d-flex align-items-center\">
                                        <input type=\"text\" id=\"historySearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm hoạt động...\" style=\"max-width: 300px;\">
                                        <button type=\"button\" id=\"historyClearSearchBtn\" class=\"btn btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body px-0 pt-0 pb-2\">
                                <div class=\"table-responsive p-0 px-3\" style=\"max-height: 400px; overflow-y: auto;\">
                                    <table class=\"table table-hover align-items-center mb-0\">
                                        <thead>
                                            <tr>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tiêu đề</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày diễn ra</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thời gian</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Địa điểm</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thời gian tham gia</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"historyTableBody\"></tbody>
                                    </table>
                                </div>
                                <div class=\"navigation mt-4 d-flex justify-content-center\">
                                    <nav>
                                        <ul class=\"pagination\" id=\"historyPagination\"></ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    ";
        } else {
            // line 112
            yield "                        <div class=\"alert alert-warning\">
                            <p class=\"mb-0\">Chưa tham gia hoạt động nào.</p>
                        </div>
                    ";
        }
        // line 116
        yield "                </div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const historyTable = new TableLayout({
                data: [
                    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participatedActivities"]) || array_key_exists("participatedActivities", $context) ? $context["participatedActivities"] : (function () { throw new RuntimeError('Variable "participatedActivities" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 127
            yield "                        {
                            id: '";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
            yield "',
                            title: '";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 129), "title", [], "any", false, false, false, 129), "js"), "html", null, true);
            yield "',
                            date: '";
            // line 130
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 130), "date", [], "any", false, false, false, 130)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 130), "date", [], "any", false, false, false, 130), "d/m/Y"), "html", null, true)) : ("Chưa xác định"));
            yield "',
                            time: '";
            // line 131
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 131), "time", [], "any", false, false, false, 131)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 131), "time", [], "any", false, false, false, 131), "H:i"), "html", null, true)) : ("Chưa xác định"));
            yield "',
                            location: '";
            // line 132
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 132), "location", [], "any", false, false, false, 132)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 132), "location", [], "any", false, false, false, 132), "js"), "html", null, true)) : ("Chưa xác định"));
            yield "',
                            status: '";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 133), "status", [], "any", false, false, false, 133), "js"), "html", null, true);
            yield "',
                            joinedAt: '";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "joinedAt", [], "any", false, false, false, 134), "d/m/Y H:i:s"), "html", null, true);
            yield "',
                            detailUrl: '";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "',
                            leaveCsrfToken: '";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("leave" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "activityId", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136))), "html", null, true);
            yield "'
                        },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                ],
                tableBodyId: 'historyTableBody',
                searchInputId: 'historySearchInput',
                clearSearchBtnId: 'historyClearSearchBtn',
                paginationId: 'historyPagination',
                columns: [
                    {
                        field: 'title',
                        formatter: (value, data) => `
                            <div class=\"d-flex px-2 py-1\" data-url=\"\${data.detailUrl}\">
                                <div class=\"d-flex flex-column justify-content-center\">
                                    <h6 class=\"mb-0 text-sm\">\${value.length > 25 ? value.slice(0, 25) + '...' : value}</h6>
                                </div>
                            </div>
                        `
                    },
                    { field: 'date', type: 'date' },
                    { field: 'time' },
                    {
                        field: 'location',
                        formatter: (value) => `<p class=\"text-xs font-weight-bold mb-0\">\${value.length > 20 ? value.slice(0, 20) + '...' : value}</p>`
                    },
                    {
                        field: 'status',
                        formatter: (value) => {
                            const statusMap = {
                                'planned': 'primary',
                                'ongoing': 'success',
                                'completed': 'info',
                                'cancelled': 'danger'
                            };
                            const color = statusMap[value] || 'secondary';
                            return `<span class=\"badge bg-\${color}\">\${value}</span>`;
                        }
                    },
                    { field: 'joinedAt', type: 'datetime' },
                    {
                        field: 'id',
                        formatter: (value, data) => `
                            <div class=\"text-center\">
                                \${data.status === 'planned' ? `
                                    <button type=\"button\" class=\"btn btn-sm btn-warning leave-btn mb-0\" 
                                            data-id=\"\${data.id}\" 
                                            data-csrf-token=\"\${data.leaveCsrfToken}\"
                                            onclick=\"event.stopPropagation();\">
                                        Hủy tham gia
                                    </button>
                                ` : ''}
                            </div>
                        `
                    }
                ],
                onRowClick: (row) => {
                    const detailUrl = row.getAttribute('data-url');
                    if (detailUrl) {
                        window.location.href = detailUrl;
                    } else {
                        console.error('No detail URL found for row:', row);
                    }
                },
                scrollPositionKey: 'history_table_scroll_position'
            });

            // Xử lý hủy tham gia
            document.addEventListener('click', (e) => {
                const leaveBtn = e.target.closest('.leave-btn');
                if (leaveBtn) {
                    if (confirm('Bạn có chắc chắn muốn hủy tham gia hoạt động này?')) {
                        const activityId = leaveBtn.getAttribute('data-id');
                        const csrfToken = leaveBtn.getAttribute('data-csrf-token');
                        const formData = new FormData();
                        formData.append('_token', csrfToken);

                        fetch(`/activity_participant/leave/\${activityId}`, {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => {
                                if (response.redirected) {
                                    window.location.href = response.url;
                                } else {
                                    return response.text().then(text => {
                                        throw new Error('Có lỗi xảy ra khi hủy tham gia: ' + text.slice(0, 50));
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Leave error:', error);
                                alert('Lỗi: ' + error.message);
                            });
                    }
                }
            });
        });
    </script>
</div>
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
        return "profile/index.html.twig";
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
        return array (  327 => 139,  318 => 136,  314 => 135,  310 => 134,  306 => 133,  302 => 132,  298 => 131,  294 => 130,  290 => 129,  286 => 128,  283 => 127,  279 => 126,  271 => 121,  264 => 116,  258 => 112,  221 => 77,  219 => 76,  213 => 73,  202 => 65,  195 => 61,  185 => 56,  177 => 51,  170 => 47,  163 => 43,  156 => 39,  149 => 35,  142 => 31,  130 => 21,  124 => 19,  118 => 17,  116 => 16,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tài khoản cá nhân - {{ user.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <div class=\"col-md-8\">
                        <h3 class=\"card-title mb-0\">Tài khoản cá nhân</h3>
                        <p class=\"mb-0 fw-bold text-sm\">{{ user.name }}</p>
                    </div>
                    <div class=\"col-md-4 text-end d-flex justify-content-end\">
                        {% if app.user and app.user.id == user.id and (is_granted('ROLE_ADMIN') or is_granted('ROLE_TREASURER')) %}
                            <a href=\"{{ path('profile_edit', {'studentId': user.studentId}) }}\" class=\"btn btn-light btn-sm mb-0\">Chỉnh sửa thông tin</a>
                        {% else %}
                            <a href=\"{{ path('profile_suggest', {'studentId': user.studentId}) }}\" class=\"btn btn-warning btn-sm mb-0\">Đề xuất chỉnh sửa</a>
                        {% endif %}
                    </div>
                </div>
                <div class=\"card-body\">
                    <!-- Thông tin cá nhân -->
                    <h4 class=\"text-primary mb-3\">Thông tin cá nhân</h4>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <tbody>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tên</th>
                                    <td>{{ user.name }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Email</th>
                                    <td>{{ user.email }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mã sinh viên</th>
                                    <td>{{ user.studentId }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Lớp</th>
                                    <td>{{ user.classId ?: 'Chưa có thông tin' }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Khoa</th>
                                    <td>{{ user.faculty ?: 'Chưa có thông tin' }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thông tin liên hệ</th>
                                    <td>{{ user.contactInfo ?: 'Chưa có thông tin' }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                    <td>
                                        <span class=\"badge bg-{{ user.status == 'active' ? 'success' : 'danger' }}\">{{ user.status }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày tạo</th>
                                    <td>{{ user.createdAt ? user.createdAt|date('d/m/Y H:i:s') : 'Chưa có thông tin' }}</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày cập nhật</th>
                                    <td>{{ user.updatedAt ? user.updatedAt|date('d/m/Y H:i:s') : 'Chưa có thông tin' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Lịch sử hoạt động -->
                    <div class=\"alert alert-info text-white\">
                        <p class=\"mb-0\"><strong>Số hoạt động đã tham gia:</strong> {{ activityCount }}</p>
                    </div>
                    <h4 class=\"text-primary mt-4 mb-3\">Lịch sử hoạt động</h4>
                    {% if participatedActivities|length > 0 %}
                        <div class=\"card\">
                            <div class=\"card-header pb-0\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Danh sách hoạt động đã tham gia</h6>
                                    <div class=\"d-flex align-items-center\">
                                        <input type=\"text\" id=\"historySearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm hoạt động...\" style=\"max-width: 300px;\">
                                        <button type=\"button\" id=\"historyClearSearchBtn\" class=\"btn btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body px-0 pt-0 pb-2\">
                                <div class=\"table-responsive p-0 px-3\" style=\"max-height: 400px; overflow-y: auto;\">
                                    <table class=\"table table-hover align-items-center mb-0\">
                                        <thead>
                                            <tr>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tiêu đề</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày diễn ra</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thời gian</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Địa điểm</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thời gian tham gia</th>
                                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"historyTableBody\"></tbody>
                                    </table>
                                </div>
                                <div class=\"navigation mt-4 d-flex justify-content-center\">
                                    <nav>
                                        <ul class=\"pagination\" id=\"historyPagination\"></ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning\">
                            <p class=\"mb-0\">Chưa tham gia hoạt động nào.</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <script src=\"{{ asset('js/table-layout.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const historyTable = new TableLayout({
                data: [
                    {% for participant in participatedActivities %}
                        {
                            id: '{{ participant.activityId.id }}',
                            title: '{{ participant.activityId.title|e('js') }}',
                            date: '{{ participant.activityId.date ? participant.activityId.date|date('d/m/Y') : 'Chưa xác định' }}',
                            time: '{{ participant.activityId.time ? participant.activityId.time|date('H:i') : 'Chưa xác định' }}',
                            location: '{{ participant.activityId.location ? participant.activityId.location|e('js') : 'Chưa xác định' }}',
                            status: '{{ participant.activityId.status|e('js') }}',
                            joinedAt: '{{ participant.joinedAt|date('d/m/Y H:i:s') }}',
                            detailUrl: '{{ path('app_activities_show', {'id': participant.activityId.id}) }}',
                            leaveCsrfToken: '{{ csrf_token('leave' ~ participant.activityId.id) }}'
                        },
                    {% endfor %}
                ],
                tableBodyId: 'historyTableBody',
                searchInputId: 'historySearchInput',
                clearSearchBtnId: 'historyClearSearchBtn',
                paginationId: 'historyPagination',
                columns: [
                    {
                        field: 'title',
                        formatter: (value, data) => `
                            <div class=\"d-flex px-2 py-1\" data-url=\"\${data.detailUrl}\">
                                <div class=\"d-flex flex-column justify-content-center\">
                                    <h6 class=\"mb-0 text-sm\">\${value.length > 25 ? value.slice(0, 25) + '...' : value}</h6>
                                </div>
                            </div>
                        `
                    },
                    { field: 'date', type: 'date' },
                    { field: 'time' },
                    {
                        field: 'location',
                        formatter: (value) => `<p class=\"text-xs font-weight-bold mb-0\">\${value.length > 20 ? value.slice(0, 20) + '...' : value}</p>`
                    },
                    {
                        field: 'status',
                        formatter: (value) => {
                            const statusMap = {
                                'planned': 'primary',
                                'ongoing': 'success',
                                'completed': 'info',
                                'cancelled': 'danger'
                            };
                            const color = statusMap[value] || 'secondary';
                            return `<span class=\"badge bg-\${color}\">\${value}</span>`;
                        }
                    },
                    { field: 'joinedAt', type: 'datetime' },
                    {
                        field: 'id',
                        formatter: (value, data) => `
                            <div class=\"text-center\">
                                \${data.status === 'planned' ? `
                                    <button type=\"button\" class=\"btn btn-sm btn-warning leave-btn mb-0\" 
                                            data-id=\"\${data.id}\" 
                                            data-csrf-token=\"\${data.leaveCsrfToken}\"
                                            onclick=\"event.stopPropagation();\">
                                        Hủy tham gia
                                    </button>
                                ` : ''}
                            </div>
                        `
                    }
                ],
                onRowClick: (row) => {
                    const detailUrl = row.getAttribute('data-url');
                    if (detailUrl) {
                        window.location.href = detailUrl;
                    } else {
                        console.error('No detail URL found for row:', row);
                    }
                },
                scrollPositionKey: 'history_table_scroll_position'
            });

            // Xử lý hủy tham gia
            document.addEventListener('click', (e) => {
                const leaveBtn = e.target.closest('.leave-btn');
                if (leaveBtn) {
                    if (confirm('Bạn có chắc chắn muốn hủy tham gia hoạt động này?')) {
                        const activityId = leaveBtn.getAttribute('data-id');
                        const csrfToken = leaveBtn.getAttribute('data-csrf-token');
                        const formData = new FormData();
                        formData.append('_token', csrfToken);

                        fetch(`/activity_participant/leave/\${activityId}`, {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => {
                                if (response.redirected) {
                                    window.location.href = response.url;
                                } else {
                                    return response.text().then(text => {
                                        throw new Error('Có lỗi xảy ra khi hủy tham gia: ' + text.slice(0, 50));
                                    });
                                }
                            })
                            .catch(error => {
                                console.error('Leave error:', error);
                                alert('Lỗi: ' + error.message);
                            });
                    }
                }
            });
        });
    </script>
</div>
{% endblock %}", "profile/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\profile\\index.html.twig");
    }
}
