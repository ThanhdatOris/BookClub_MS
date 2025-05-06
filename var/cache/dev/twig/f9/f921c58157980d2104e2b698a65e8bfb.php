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

/* z-old/funding/index.html.twig */
class __TwigTemplate_50aac54b84a8b084ed5b3a6c24d67e78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/funding/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/funding/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/funding/index.html.twig", 1);
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

        yield "Quản lý quỹ";
        
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
        <!-- Header -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6>Quản lý quỹ</h6>
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addFundModal\">
                                Thêm giao dịch
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Danh sách giao dịch -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Loại giao dịch</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Số tiền</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mô tả</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người tạo</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fund"]) {
            // line 50
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">
                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "transactionType", [], "any", false, false, false, 54), "html", null, true);
            yield "</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "amount", [], "any", false, false, false, 59), "VND"), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "date", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 65
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "description", [], "any", false, false, false, 65)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "description", [], "any", false, false, false, 65), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "description", [], "any", false, false, false, 65), "html", null, true)));
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "createdBy", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#editFundModal";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\">Sửa</button>
                                                <form method=\"post\" action=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn xóa giao dịch này?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 73))), "html", null, true);
            yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Không có giao dịch nào.</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fund'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Thêm giao dịch -->
        <div class=\"modal fade\" id=\"addFundModal\" tabindex=\"-1\" aria-labelledby=\"addFundModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addFundModalLabel\">Thêm giao dịch</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"post\" action=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_new");
        yield "\">
                            <div class=\"mb-3\">
                                <label for=\"transaction_type\" class=\"form-label\">Loại giao dịch</label>
                                <select id=\"transaction_type\" name=\"transaction_type\" class=\"form-select\" required>
                                    <option value=\"income\">Thu</option>
                                    <option value=\"expense\">Chi</option>
                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"amount\" class=\"form-label\">Số tiền</label>
                                <input type=\"number\" id=\"amount\" name=\"amount\" class=\"form-control\" step=\"0.001\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"date\" class=\"form-label\">Ngày</label>
                                <input type=\"date\" id=\"date\" name=\"date\" class=\"form-control\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"description\" class=\"form-label\">Mô tả</label>
                                <textarea id=\"description\" name=\"description\" class=\"form-control\"></textarea>
                            </div>
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("fund_new"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa giao dịch -->
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fund"]) {
            // line 130
            yield "            <div class=\"modal fade\" id=\"editFundModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 130), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editFundModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 130), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editFundModalLabel";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 134), "html", null, true);
            yield "\">Sửa giao dịch</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\">
                                <div class=\"mb-3\">
                                    <label for=\"transaction_type_";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 140), "html", null, true);
            yield "\" class=\"form-label\">Loại giao dịch</label>
                                    <select id=\"transaction_type_";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 141), "html", null, true);
            yield "\" name=\"transaction_type\" class=\"form-select\" required>
                                        <option value=\"income\" ";
            // line 142
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "transactionType", [], "any", false, false, false, 142) == "income")) ? ("selected") : (""));
            yield ">Thu</option>
                                        <option value=\"expense\" ";
            // line 143
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "transactionType", [], "any", false, false, false, 143) == "expense")) ? ("selected") : (""));
            yield ">Chi</option>
                                    </select>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"amount_";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 147), "html", null, true);
            yield "\" class=\"form-label\">Số tiền</label>
                                    <input type=\"number\" id=\"amount_";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 148), "html", null, true);
            yield "\" name=\"amount\" class=\"form-control\" step=\"0.001\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "amount", [], "any", false, false, false, 148), "html", null, true);
            yield "\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"date_";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 151), "html", null, true);
            yield "\" class=\"form-label\">Ngày</label>
                                    <input type=\"date\" id=\"date_";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 152), "html", null, true);
            yield "\" name=\"date\" class=\"form-control\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "date", [], "any", false, false, false, 152), "Y-m-d"), "html", null, true);
            yield "\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"description_";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 155), "html", null, true);
            yield "\" class=\"form-label\">Mô tả</label>
                                    <textarea id=\"description_";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 156), "html", null, true);
            yield "\" name=\"description\" class=\"form-control\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "description", [], "any", false, false, false, 156), "html", null, true);
            yield "</textarea>
                                </div>
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("fund_edit" . CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 158))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-primary\">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fund'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "    </div>
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
        return "z-old/funding/index.html.twig";
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
        return array (  388 => 166,  374 => 158,  367 => 156,  363 => 155,  355 => 152,  351 => 151,  343 => 148,  339 => 147,  332 => 143,  328 => 142,  324 => 141,  320 => 140,  315 => 138,  308 => 134,  298 => 130,  294 => 129,  282 => 120,  259 => 100,  240 => 83,  231 => 79,  229 => 78,  219 => 73,  215 => 72,  211 => 71,  205 => 68,  199 => 65,  193 => 62,  187 => 59,  179 => 54,  173 => 50,  168 => 49,  131 => 14,  122 => 12,  117 => 11,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý quỹ{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <!-- Thông báo flash -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        <!-- Header -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6>Quản lý quỹ</h6>
                            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addFundModal\">
                                Thêm giao dịch
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Danh sách giao dịch -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Loại giao dịch</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Số tiền</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mô tả</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người tạo</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for fund in funds %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">
                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">{{ fund.transactionType }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ fund.amount|format_currency('VND') }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ fund.date|date('Y-m-d') }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ fund.description|length > 50 ? fund.description|slice(0, 50) ~ '...' : fund.description }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ fund.createdBy.name }}</p>
                                            </td>
                                            <td>
                                                <button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#editFundModal{{ fund.id }}\">Sửa</button>
                                                <form method=\"post\" action=\"{{ path('app_funds_delete', {'id': fund.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn xóa giao dịch này?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fund.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Không có giao dịch nào.</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Thêm giao dịch -->
        <div class=\"modal fade\" id=\"addFundModal\" tabindex=\"-1\" aria-labelledby=\"addFundModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addFundModalLabel\">Thêm giao dịch</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form method=\"post\" action=\"{{ path('app_funds_new') }}\">
                            <div class=\"mb-3\">
                                <label for=\"transaction_type\" class=\"form-label\">Loại giao dịch</label>
                                <select id=\"transaction_type\" name=\"transaction_type\" class=\"form-select\" required>
                                    <option value=\"income\">Thu</option>
                                    <option value=\"expense\">Chi</option>
                                </select>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"amount\" class=\"form-label\">Số tiền</label>
                                <input type=\"number\" id=\"amount\" name=\"amount\" class=\"form-control\" step=\"0.001\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"date\" class=\"form-label\">Ngày</label>
                                <input type=\"date\" id=\"date\" name=\"date\" class=\"form-control\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"description\" class=\"form-label\">Mô tả</label>
                                <textarea id=\"description\" name=\"description\" class=\"form-control\"></textarea>
                            </div>
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('fund_new') }}\">
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa giao dịch -->
        {% for fund in funds %}
            <div class=\"modal fade\" id=\"editFundModal{{ fund.id }}\" tabindex=\"-1\" aria-labelledby=\"editFundModalLabel{{ fund.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editFundModalLabel{{ fund.id }}\">Sửa giao dịch</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <form method=\"post\" action=\"{{ path('app_funds_edit', {'id': fund.id}) }}\">
                                <div class=\"mb-3\">
                                    <label for=\"transaction_type_{{ fund.id }}\" class=\"form-label\">Loại giao dịch</label>
                                    <select id=\"transaction_type_{{ fund.id }}\" name=\"transaction_type\" class=\"form-select\" required>
                                        <option value=\"income\" {{ fund.transactionType == 'income' ? 'selected' : '' }}>Thu</option>
                                        <option value=\"expense\" {{ fund.transactionType == 'expense' ? 'selected' : '' }}>Chi</option>
                                    </select>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"amount_{{ fund.id }}\" class=\"form-label\">Số tiền</label>
                                    <input type=\"number\" id=\"amount_{{ fund.id }}\" name=\"amount\" class=\"form-control\" step=\"0.001\" value=\"{{ fund.amount }}\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"date_{{ fund.id }}\" class=\"form-label\">Ngày</label>
                                    <input type=\"date\" id=\"date_{{ fund.id }}\" name=\"date\" class=\"form-control\" value=\"{{ fund.date|date('Y-m-d') }}\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"description_{{ fund.id }}\" class=\"form-label\">Mô tả</label>
                                    <textarea id=\"description_{{ fund.id }}\" name=\"description\" class=\"form-control\">{{ fund.description }}</textarea>
                                </div>
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('fund_edit' ~ fund.id) }}\">
                                <button type=\"submit\" class=\"btn btn-primary\">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "z-old/funding/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\funding\\index.html.twig");
    }
}
