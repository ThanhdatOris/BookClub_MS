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

/* attendances/index.html.twig */
class __TwigTemplate_9de0fbe96d4d91e0a7103eb53272c6f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "attendances/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "attendances/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "attendances/index.html.twig", 1);
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
        yield "    <div class=\"container-fluid py-4\">
        <!-- Thông báo flash -->
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
        <!-- Header và Danh sách điểm danh trong một card -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý điểm danh</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"attendancesSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm điểm danh...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"attendancesClearSearchBtn\" class=\"btn btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                </div>
                                <button type=\"button\" class=\"btn btn-success mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addAttendanceModal\">
                                    <i class=\"fas fa-plus me-1\"></i> Thêm điểm danh
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 400px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"userName\">Tên người dùng</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"activityTitle\">Hoạt động</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"status\">Trạng thái</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"remark\">Ghi chú</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"markedAt\">Thời gian điểm danh</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"markedBy\">Người điểm danh</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody id=\"attendancesTableBody\">
                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attendances"]) || array_key_exists("attendances", $context) ? $context["attendances"] : (function () { throw new RuntimeError('Variable "attendances" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["attendance"]) {
            // line 61
            yield "                                        <tr data-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attendances_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" style=\"cursor: pointer;\">
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">
                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "userId", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
            yield "</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "activityId", [], "any", false, false, false, 70), "title", [], "any", false, false, false, 70), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0 text-";
            // line 73
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "status", [], "any", false, false, false, 73) == "present")) ? ("success") : ("danger"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "status", [], "any", false, false, false, 73), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 76
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "remark", [], "any", true, true, false, 76) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "remark", [], "any", false, false, false, 76)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "remark", [], "any", false, false, false, 76), "html", null, true)) : ("N/A"));
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "markedAt", [], "any", false, false, false, 79), "Y-m-d H:i:s"), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "markedBy", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attendances_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info mb-0\" onclick=\"event.stopPropagation();\">Xem</a>
                                                <button type=\"button\" class=\"btn btn-sm btn-primary mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editAttendanceModal";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\" onclick=\"event.stopPropagation();\">Sửa</button>
                                                <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 87), "html", null, true);
            yield "\" data-csrf-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 87))), "html", null, true);
            yield "\" onclick=\"event.stopPropagation();\">Xóa</button>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                                        <tr>
                                            <td colspan=\"7\" class=\"text-center\">Không có điểm danh nào.</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['attendance'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                                </tbody>
                            </table>
                        </div>
                        <!-- Phân trang client-side -->
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            <nav>
                                <ul class=\"pagination\" id=\"attendancesPagination\"></ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Thêm điểm danh -->
        <div class=\"modal fade\" id=\"addAttendanceModal\" tabindex=\"-1\" aria-labelledby=\"addAttendanceModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addAttendanceModalLabel\">Thêm điểm danh</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"addAttendanceError\" class=\"alert alert-danger d-none\"></div>
                        ";
        // line 119
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 119, $this->source); })()), 'form_start', ["attr" => ["id" => "addAttendanceForm"]]);
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 121, $this->source); })()), "user_id", [], "any", false, false, false, 121), 'label');
        yield "
                                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 122, $this->source); })()), "user_id", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 123, $this->source); })()), "user_id", [], "any", false, false, false, 123), 'errors');
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 126, $this->source); })()), "activity_id", [], "any", false, false, false, 126), 'label');
        yield "
                                ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 127, $this->source); })()), "activity_id", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 128, $this->source); })()), "activity_id", [], "any", false, false, false, 128), 'errors');
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 131, $this->source); })()), "status", [], "any", false, false, false, 131), 'label');
        yield "
                                ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 132, $this->source); })()), "status", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 133, $this->source); })()), "status", [], "any", false, false, false, 133), 'errors');
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 136, $this->source); })()), "remark", [], "any", false, false, false, 136), 'label');
        yield "
                                ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 137, $this->source); })()), "remark", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 138, $this->source); })()), "remark", [], "any", false, false, false, 138), 'errors');
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 141, $this->source); })()), "marked_at", [], "any", false, false, false, 141), 'label');
        yield "
                                ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 142, $this->source); })()), "marked_at", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 143, $this->source); })()), "marked_at", [], "any", false, false, false, 143), 'errors');
        yield "</div>
                            </div>
                            ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 145, $this->source); })()), "marked_by", [], "any", false, false, false, 145), 'row', ["attr" => ["class" => "d-none"]]);
        yield "
                            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 146, $this->source); })()), "_token", [], "any", false, false, false, 146), 'row');
        yield "
                            <button type=\"submit\" class=\"btn btn-primary\" id=\"addAttendanceSubmitBtn\">
                                <span class=\"spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\" id=\"addAttendanceSpinner\"></span>
                                Lưu
                            </button>
                        ";
        // line 151
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addAttendanceForm"]) || array_key_exists("addAttendanceForm", $context) ? $context["addAttendanceForm"] : (function () { throw new RuntimeError('Variable "addAttendanceForm" does not exist.', 151, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa điểm danh -->
        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attendances"]) || array_key_exists("attendances", $context) ? $context["attendances"] : (function () { throw new RuntimeError('Variable "attendances" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["attendance"]) {
            // line 159
            yield "            <div class=\"modal fade\" id=\"editAttendanceModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 159), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editAttendanceModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 159), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editAttendanceModalLabel";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 163), "html", null, true);
            yield "\">Sửa điểm danh</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div id=\"editAttendanceError";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 167), "html", null, true);
            yield "\" class=\"alert alert-danger d-none\"></div>
                            ";
            // line 168
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 168, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 168), [], "array", false, false, false, 168), 'form_start', ["attr" => ["id" => ("editAttendanceForm" . CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 168))]]);
            yield "
                                <div class=\"mb-3\">
                                    ";
            // line 170
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 170, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 170), [], "array", false, false, false, 170), "user_id", [], "any", false, false, false, 170), 'label');
            yield "
                                    ";
            // line 171
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 171, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 171), [], "array", false, false, false, 171), "user_id", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 172
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 172, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 172), [], "array", false, false, false, 172), "user_id", [], "any", false, false, false, 172), 'errors');
            yield "</div>
                                </div>
                                <div class=\"mb-3\">
                                    ";
            // line 175
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 175, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 175), [], "array", false, false, false, 175), "activity_id", [], "any", false, false, false, 175), 'label');
            yield "
                                    ";
            // line 176
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 176, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 176), [], "array", false, false, false, 176), "activity_id", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 177
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 177, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 177), [], "array", false, false, false, 177), "activity_id", [], "any", false, false, false, 177), 'errors');
            yield "</div>
                                </div>
                                <div class=\"mb-3\">
                                    ";
            // line 180
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 180, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 180), [], "array", false, false, false, 180), "status", [], "any", false, false, false, 180), 'label');
            yield "
                                    ";
            // line 181
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 181, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 181), [], "array", false, false, false, 181), "status", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 182
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 182, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 182), [], "array", false, false, false, 182), "status", [], "any", false, false, false, 182), 'errors');
            yield "</div>
                                </div>
                                <div class=\"mb-3\">
                                    ";
            // line 185
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 185, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 185), [], "array", false, false, false, 185), "remark", [], "any", false, false, false, 185), 'label');
            yield "
                                    ";
            // line 186
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 186, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 186), [], "array", false, false, false, 186), "remark", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 187
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 187, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 187), [], "array", false, false, false, 187), "remark", [], "any", false, false, false, 187), 'errors');
            yield "</div>
                                </div>
                                <div class=\"mb-3\">
                                    ";
            // line 190
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 190, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 190), [], "array", false, false, false, 190), "marked_at", [], "any", false, false, false, 190), 'label');
            yield "
                                    ";
            // line 191
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 191, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 191), [], "array", false, false, false, 191), "marked_at", [], "any", false, false, false, 191), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 192
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 192, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 192), [], "array", false, false, false, 192), "marked_at", [], "any", false, false, false, 192), 'errors');
            yield "</div>
                                </div>
                                ";
            // line 194
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 194, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 194), [], "array", false, false, false, 194), "marked_by", [], "any", false, false, false, 194), 'row', ["attr" => ["class" => "d-none"]]);
            yield "
                                ";
            // line 195
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 195, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 195), [], "array", false, false, false, 195), "_token", [], "any", false, false, false, 195), 'row');
            yield "
                                <button type=\"submit\" class=\"btn btn-primary\" id=\"editAttendanceSubmitBtn";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 196), "html", null, true);
            yield "\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\" id=\"editAttendanceSpinner";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 197), "html", null, true);
            yield "\"></span>
                                    Cập nhật
                                </button>
                            ";
            // line 200
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editAttendanceForms"]) || array_key_exists("editAttendanceForms", $context) ? $context["editAttendanceForms"] : (function () { throw new RuntimeError('Variable "editAttendanceForms" does not exist.', 200, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 200), [], "array", false, false, false, 200), 'form_end');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['attendance'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "
        <!-- Include table-layout.js -->
        <script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>

        <!-- JavaScript để khởi tạo TableLayout -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const attendancesTable = new TableLayout({
                    data: [
                        ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attendances"]) || array_key_exists("attendances", $context) ? $context["attendances"] : (function () { throw new RuntimeError('Variable "attendances" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["attendance"]) {
            // line 216
            yield "                            {
                                userName: '";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "userId", [], "any", false, false, false, 217), "name", [], "any", false, false, false, 217), "js"), "html", null, true);
            yield "',
                                activityTitle: '";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "activityId", [], "any", false, false, false, 218), "title", [], "any", false, false, false, 218), "js"), "html", null, true);
            yield "',
                                status: '";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "status", [], "any", false, false, false, 219), "js"), "html", null, true);
            yield "',
                                remark: '";
            // line 220
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "remark", [], "any", false, false, false, 220)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "remark", [], "any", false, false, false, 220), "js"), "html", null, true)) : ("N/A"));
            yield "',
                                markedAt: '";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "markedAt", [], "any", false, false, false, 221), "Y-m-d H:i:s"), "html", null, true);
            yield "',
                                markedBy: '";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "markedBy", [], "any", false, false, false, 222), "name", [], "any", false, false, false, 222), "js"), "html", null, true);
            yield "',
                                detailUrl: '";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attendances_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 223)]), "html", null, true);
            yield "',
                                actions: `
                                    <a href=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attendances_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 225)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info mb-0\" onclick=\"event.stopPropagation();\">Xem</a>
                                    <button type=\"button\" class=\"btn btn-sm btn-primary mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editAttendanceModal";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 226), "html", null, true);
            yield "\" onclick=\"event.stopPropagation();\">Sửa</button>
                                    <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 227), "html", null, true);
            yield "\" data-csrf-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["attendance"], "id", [], "any", false, false, false, 227))), "html", null, true);
            yield "\" onclick=\"event.stopPropagation();\">Xóa</button>
                                `
                            },
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['attendance'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "                    ],
                    tableBodyId: 'attendancesTableBody',
                    searchInputId: 'attendancesSearchInput',
                    clearSearchBtnId: 'attendancesClearSearchBtn',
                    paginationId: 'attendancesPagination',
                    columns: [
                        {
                            field: 'userName',
                            formatter: (value) => `
                                <div class=\"d-flex px-2 py-1\">
                                    <div class=\"d-flex flex-column justify-content-center\">
                                        <h6 class=\"mb-0 text-sm\">\${value}</h6>
                                    </div>
                                </div>
                            `
                        },
                        { field: 'activityTitle' },
                        {
                            field: 'status',
                            formatter: (value) => `
                                <p class=\"text-xs font-weight-bold mb-0 text-\${value === 'present' ? 'success' : 'danger'}\">\${value}</p>
                            `
                        },
                        { field: 'remark' },
                        { field: 'markedAt', type: 'datetime' },
                        { field: 'markedBy' }
                    ],
                    onRowClick: (row) => {
                        const detailUrl = row.getAttribute('data-url');
                        if (detailUrl) window.location.href = detailUrl;
                    },
                    onDelete: (button) => {
                        if (!confirm('Bạn có chắc chắn muốn xóa điểm danh này?')) return;
                        const id = button.getAttribute('data-id');
                        const csrfToken = button.getAttribute('data-csrf-token');
                        fetch(`/attendances/\${id}`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `_token=\${csrfToken}`
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) window.location.reload();
                            else alert(data.error);
                        })
                        .catch(error => alert('Có lỗi xảy ra: ' + error.message));
                    },
                    scrollPositionKey: 'attendances_table_scroll_position'
                });

                // Xử lý form thêm điểm danh
                const addAttendanceForm = document.getElementById('addAttendanceForm');
                if (addAttendanceForm) {
                    const addAttendanceSubmitBtn = document.getElementById('addAttendanceSubmitBtn');
                    const addAttendanceSpinner = document.getElementById('addAttendanceSpinner');
                    const addAttendanceError = document.getElementById('addAttendanceError');

                    addAttendanceForm.addEventListener('submit', function (e) {
                        e.preventDefault();
                        const formData = new FormData(this);
                        attendancesTable.showLoading(addAttendanceSubmitBtn, addAttendanceSpinner);
                        attendancesTable.hideError(addAttendanceError);

                        fetch(this.action, {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            attendancesTable.hideLoading(addAttendanceSubmitBtn, addAttendanceSpinner);
                            if (data.success) window.location.reload();
                            else attendancesTable.showError(addAttendanceError, data.error);
                        })
                        .catch(error => {
                            attendancesTable.hideLoading(addAttendanceSubmitBtn, addAttendanceSpinner);
                            attendancesTable.showError(addAttendanceError, 'Có lỗi xảy ra: ' + error.message);
                        });
                    });
                }

                // Xử lý form sửa điểm danh
                document.querySelectorAll('[id^=\"editAttendanceForm\"]').forEach(form => {
                    const formId = form.id;
                    const submitBtn = document.getElementById('editAttendanceSubmitBtn' + formId.replace('editAttendanceForm', ''));
                    const spinner = document.getElementById('editAttendanceSpinner' + formId.replace('editAttendanceForm', ''));
                    const errorDiv = document.getElementById('editAttendanceError' + formId.replace('editAttendanceForm', ''));

                    form.addEventListener('submit', function (e) {
                        e.preventDefault();
                        const formData = new FormData(this);
                        attendancesTable.showLoading(submitBtn, spinner);
                        attendancesTable.hideError(errorDiv);

                        fetch(this.action, {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            attendancesTable.hideLoading(submitBtn, spinner);
                            if (data.success) window.location.reload();
                            else attendancesTable.showError(errorDiv, data.error);
                        })
                        .catch(error => {
                            attendancesTable.hideLoading(submitBtn, spinner);
                            attendancesTable.showError(errorDiv, 'Có lỗi xảy ra: ' + error.message);
                        });
                    });
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
        return "attendances/index.html.twig";
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
        return array (  582 => 231,  570 => 227,  566 => 226,  562 => 225,  557 => 223,  553 => 222,  549 => 221,  545 => 220,  541 => 219,  537 => 218,  533 => 217,  530 => 216,  526 => 215,  516 => 208,  512 => 206,  500 => 200,  494 => 197,  490 => 196,  486 => 195,  482 => 194,  477 => 192,  473 => 191,  469 => 190,  463 => 187,  459 => 186,  455 => 185,  449 => 182,  445 => 181,  441 => 180,  435 => 177,  431 => 176,  427 => 175,  421 => 172,  417 => 171,  413 => 170,  408 => 168,  404 => 167,  397 => 163,  387 => 159,  383 => 158,  373 => 151,  365 => 146,  361 => 145,  356 => 143,  352 => 142,  348 => 141,  342 => 138,  338 => 137,  334 => 136,  328 => 133,  324 => 132,  320 => 131,  314 => 128,  310 => 127,  306 => 126,  300 => 123,  296 => 122,  292 => 121,  287 => 119,  261 => 95,  252 => 91,  250 => 90,  240 => 87,  236 => 86,  232 => 85,  226 => 82,  220 => 79,  214 => 76,  206 => 73,  200 => 70,  192 => 65,  184 => 61,  179 => 60,  131 => 14,  122 => 12,  117 => 11,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý điểm danh{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <!-- Thông báo flash -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        <!-- Header và Danh sách điểm danh trong một card -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý điểm danh</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"attendancesSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm điểm danh...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"attendancesClearSearchBtn\" class=\"btn btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                </div>
                                <button type=\"button\" class=\"btn btn-success mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addAttendanceModal\">
                                    <i class=\"fas fa-plus me-1\"></i> Thêm điểm danh
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 400px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"userName\">Tên người dùng</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"activityTitle\">Hoạt động</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"status\">Trạng thái</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"remark\">Ghi chú</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"markedAt\">Thời gian điểm danh</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"markedBy\">Người điểm danh</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody id=\"attendancesTableBody\">
                                    {% for attendance in attendances %}
                                        <tr data-url=\"{{ path('app_attendances_show', {'id': attendance.id}) }}\" style=\"cursor: pointer;\">
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">
                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">{{ attendance.userId.name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ attendance.activityId.title }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0 text-{{ attendance.status == 'present' ? 'success' : 'danger' }}\">{{ attendance.status }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ attendance.remark ?? 'N/A' }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ attendance.markedAt|date('Y-m-d H:i:s') }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ attendance.markedBy.name }}</p>
                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"{{ path('app_attendances_show', {'id': attendance.id}) }}\" class=\"btn btn-sm btn-info mb-0\" onclick=\"event.stopPropagation();\">Xem</a>
                                                <button type=\"button\" class=\"btn btn-sm btn-primary mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editAttendanceModal{{ attendance.id }}\" onclick=\"event.stopPropagation();\">Sửa</button>
                                                <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"{{ attendance.id }}\" data-csrf-token=\"{{ csrf_token('delete' ~ attendance.id) }}\" onclick=\"event.stopPropagation();\">Xóa</button>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"7\" class=\"text-center\">Không có điểm danh nào.</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <!-- Phân trang client-side -->
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            <nav>
                                <ul class=\"pagination\" id=\"attendancesPagination\"></ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Thêm điểm danh -->
        <div class=\"modal fade\" id=\"addAttendanceModal\" tabindex=\"-1\" aria-labelledby=\"addAttendanceModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addAttendanceModalLabel\">Thêm điểm danh</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"addAttendanceError\" class=\"alert alert-danger d-none\"></div>
                        {{ form_start(addAttendanceForm, {'attr': {'id': 'addAttendanceForm'}}) }}
                            <div class=\"mb-3\">
                                {{ form_label(addAttendanceForm.user_id) }}
                                {{ form_widget(addAttendanceForm.user_id, {'attr': {'class': 'form-select'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addAttendanceForm.user_id) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(addAttendanceForm.activity_id) }}
                                {{ form_widget(addAttendanceForm.activity_id, {'attr': {'class': 'form-select'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addAttendanceForm.activity_id) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(addAttendanceForm.status) }}
                                {{ form_widget(addAttendanceForm.status, {'attr': {'class': 'form-select'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addAttendanceForm.status) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(addAttendanceForm.remark) }}
                                {{ form_widget(addAttendanceForm.remark, {'attr': {'class': 'form-control'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addAttendanceForm.remark) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(addAttendanceForm.marked_at) }}
                                {{ form_widget(addAttendanceForm.marked_at, {'attr': {'class': 'form-control'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addAttendanceForm.marked_at) }}</div>
                            </div>
                            {{ form_row(addAttendanceForm.marked_by, {'attr': {'class': 'd-none'}}) }}
                            {{ form_row(addAttendanceForm._token) }}
                            <button type=\"submit\" class=\"btn btn-primary\" id=\"addAttendanceSubmitBtn\">
                                <span class=\"spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\" id=\"addAttendanceSpinner\"></span>
                                Lưu
                            </button>
                        {{ form_end(addAttendanceForm) }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa điểm danh -->
        {% for attendance in attendances %}
            <div class=\"modal fade\" id=\"editAttendanceModal{{ attendance.id }}\" tabindex=\"-1\" aria-labelledby=\"editAttendanceModalLabel{{ attendance.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editAttendanceModalLabel{{ attendance.id }}\">Sửa điểm danh</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div id=\"editAttendanceError{{ attendance.id }}\" class=\"alert alert-danger d-none\"></div>
                            {{ form_start(editAttendanceForms[attendance.id], {'attr': {'id': 'editAttendanceForm' ~ attendance.id}}) }}
                                <div class=\"mb-3\">
                                    {{ form_label(editAttendanceForms[attendance.id].user_id) }}
                                    {{ form_widget(editAttendanceForms[attendance.id].user_id, {'attr': {'class': 'form-select'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editAttendanceForms[attendance.id].user_id) }}</div>
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(editAttendanceForms[attendance.id].activity_id) }}
                                    {{ form_widget(editAttendanceForms[attendance.id].activity_id, {'attr': {'class': 'form-select'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editAttendanceForms[attendance.id].activity_id) }}</div>
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(editAttendanceForms[attendance.id].status) }}
                                    {{ form_widget(editAttendanceForms[attendance.id].status, {'attr': {'class': 'form-select'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editAttendanceForms[attendance.id].status) }}</div>
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(editAttendanceForms[attendance.id].remark) }}
                                    {{ form_widget(editAttendanceForms[attendance.id].remark, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editAttendanceForms[attendance.id].remark) }}</div>
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(editAttendanceForms[attendance.id].marked_at) }}
                                    {{ form_widget(editAttendanceForms[attendance.id].marked_at, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editAttendanceForms[attendance.id].marked_at) }}</div>
                                </div>
                                {{ form_row(editAttendanceForms[attendance.id].marked_by, {'attr': {'class': 'd-none'}}) }}
                                {{ form_row(editAttendanceForms[attendance.id]._token) }}
                                <button type=\"submit\" class=\"btn btn-primary\" id=\"editAttendanceSubmitBtn{{ attendance.id }}\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\" id=\"editAttendanceSpinner{{ attendance.id }}\"></span>
                                    Cập nhật
                                </button>
                            {{ form_end(editAttendanceForms[attendance.id]) }}
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}

        <!-- Include table-layout.js -->
        <script src=\"{{ asset('js/table-layout.js') }}\"></script>

        <!-- JavaScript để khởi tạo TableLayout -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const attendancesTable = new TableLayout({
                    data: [
                        {% for attendance in attendances %}
                            {
                                userName: '{{ attendance.userId.name|e('js') }}',
                                activityTitle: '{{ attendance.activityId.title|e('js') }}',
                                status: '{{ attendance.status|e('js') }}',
                                remark: '{{ attendance.remark ? attendance.remark|e('js') : 'N/A' }}',
                                markedAt: '{{ attendance.markedAt|date('Y-m-d H:i:s') }}',
                                markedBy: '{{ attendance.markedBy.name|e('js') }}',
                                detailUrl: '{{ path('app_attendances_show', {'id': attendance.id}) }}',
                                actions: `
                                    <a href=\"{{ path('app_attendances_show', {'id': attendance.id}) }}\" class=\"btn btn-sm btn-info mb-0\" onclick=\"event.stopPropagation();\">Xem</a>
                                    <button type=\"button\" class=\"btn btn-sm btn-primary mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editAttendanceModal{{ attendance.id }}\" onclick=\"event.stopPropagation();\">Sửa</button>
                                    <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"{{ attendance.id }}\" data-csrf-token=\"{{ csrf_token('delete' ~ attendance.id) }}\" onclick=\"event.stopPropagation();\">Xóa</button>
                                `
                            },
                        {% endfor %}
                    ],
                    tableBodyId: 'attendancesTableBody',
                    searchInputId: 'attendancesSearchInput',
                    clearSearchBtnId: 'attendancesClearSearchBtn',
                    paginationId: 'attendancesPagination',
                    columns: [
                        {
                            field: 'userName',
                            formatter: (value) => `
                                <div class=\"d-flex px-2 py-1\">
                                    <div class=\"d-flex flex-column justify-content-center\">
                                        <h6 class=\"mb-0 text-sm\">\${value}</h6>
                                    </div>
                                </div>
                            `
                        },
                        { field: 'activityTitle' },
                        {
                            field: 'status',
                            formatter: (value) => `
                                <p class=\"text-xs font-weight-bold mb-0 text-\${value === 'present' ? 'success' : 'danger'}\">\${value}</p>
                            `
                        },
                        { field: 'remark' },
                        { field: 'markedAt', type: 'datetime' },
                        { field: 'markedBy' }
                    ],
                    onRowClick: (row) => {
                        const detailUrl = row.getAttribute('data-url');
                        if (detailUrl) window.location.href = detailUrl;
                    },
                    onDelete: (button) => {
                        if (!confirm('Bạn có chắc chắn muốn xóa điểm danh này?')) return;
                        const id = button.getAttribute('data-id');
                        const csrfToken = button.getAttribute('data-csrf-token');
                        fetch(`/attendances/\${id}`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `_token=\${csrfToken}`
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) window.location.reload();
                            else alert(data.error);
                        })
                        .catch(error => alert('Có lỗi xảy ra: ' + error.message));
                    },
                    scrollPositionKey: 'attendances_table_scroll_position'
                });

                // Xử lý form thêm điểm danh
                const addAttendanceForm = document.getElementById('addAttendanceForm');
                if (addAttendanceForm) {
                    const addAttendanceSubmitBtn = document.getElementById('addAttendanceSubmitBtn');
                    const addAttendanceSpinner = document.getElementById('addAttendanceSpinner');
                    const addAttendanceError = document.getElementById('addAttendanceError');

                    addAttendanceForm.addEventListener('submit', function (e) {
                        e.preventDefault();
                        const formData = new FormData(this);
                        attendancesTable.showLoading(addAttendanceSubmitBtn, addAttendanceSpinner);
                        attendancesTable.hideError(addAttendanceError);

                        fetch(this.action, {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            attendancesTable.hideLoading(addAttendanceSubmitBtn, addAttendanceSpinner);
                            if (data.success) window.location.reload();
                            else attendancesTable.showError(addAttendanceError, data.error);
                        })
                        .catch(error => {
                            attendancesTable.hideLoading(addAttendanceSubmitBtn, addAttendanceSpinner);
                            attendancesTable.showError(addAttendanceError, 'Có lỗi xảy ra: ' + error.message);
                        });
                    });
                }

                // Xử lý form sửa điểm danh
                document.querySelectorAll('[id^=\"editAttendanceForm\"]').forEach(form => {
                    const formId = form.id;
                    const submitBtn = document.getElementById('editAttendanceSubmitBtn' + formId.replace('editAttendanceForm', ''));
                    const spinner = document.getElementById('editAttendanceSpinner' + formId.replace('editAttendanceForm', ''));
                    const errorDiv = document.getElementById('editAttendanceError' + formId.replace('editAttendanceForm', ''));

                    form.addEventListener('submit', function (e) {
                        e.preventDefault();
                        const formData = new FormData(this);
                        attendancesTable.showLoading(submitBtn, spinner);
                        attendancesTable.hideError(errorDiv);

                        fetch(this.action, {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            attendancesTable.hideLoading(submitBtn, spinner);
                            if (data.success) window.location.reload();
                            else attendancesTable.showError(errorDiv, data.error);
                        })
                        .catch(error => {
                            attendancesTable.hideLoading(submitBtn, spinner);
                            attendancesTable.showError(errorDiv, 'Có lỗi xảy ra: ' + error.message);
                        });
                    });
                });
            });
        </script>
    </div>
{% endblock %}", "attendances/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\attendances\\index.html.twig");
    }
}
