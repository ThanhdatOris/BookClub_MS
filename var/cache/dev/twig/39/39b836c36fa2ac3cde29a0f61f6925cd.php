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

/* funds/show.html.twig */
class __TwigTemplate_e9c45f37332370b2659a88360d474f06 extends Template
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
        // line 48
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funds/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funds/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "funds/show.html.twig", 48);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 50
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

        yield "Funds Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
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

        // line 53
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card\">
                <div class=\"card-header pb-0\">
                    <h6>Funds Details</h6>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Transaction Type</th>
                                <td>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 69, $this->source); })()), "transactionType", [], "any", false, false, false, 69), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Amount</th>
                                <td>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 73, $this->source); })()), "amount", [], "any", false, false, false, 73), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>";
        // line 77
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 77, $this->source); })()), "date", [], "any", false, false, false, 77)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 77, $this->source); })()), "date", [], "any", false, false, false, 77), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>";
        // line 85
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 85, $this->source); })()), "createdAt", [], "any", false, false, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 85, $this->source); })()), "createdAt", [], "any", false, false, false, 85), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>";
        // line 89
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 89, $this->source); })()), "updatedAt", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 89, $this->source); })()), "updatedAt", [], "any", false, false, false, 89), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer d-flex justify-content-between\">
                    <a href=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 95, $this->source); })()), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-sm me-2\">Quay lại</a>
                    <div class=\"d-flex\">
                        <a href=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fund"]) || array_key_exists("fund", $context) ? $context["fund"] : (function () { throw new RuntimeError('Variable "fund" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm me-2\">Edit</a>
                        ";
        // line 98
        yield Twig\Extension\CoreExtension::include($this->env, $context, "funds/_delete_form.html.twig");
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "funds/show.html.twig";
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
        return array (  174 => 98,  170 => 97,  165 => 95,  156 => 89,  149 => 85,  142 => 81,  135 => 77,  128 => 73,  121 => 69,  114 => 65,  100 => 53,  87 => 52,  64 => 50,  41 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Funds{% endblock %}

{% block body %}
    <h1>Funds</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fund.id }}</td>
            </tr>
            <tr>
                <th>Transaction_type</th>
                <td>{{ fund.transactionType }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ fund.amount }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ fund.date ? fund.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ fund.description }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ fund.createdAt ? fund.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>{{ fund.updatedAt ? fund.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_funds_index') }}\">back to list</a>

    <a href=\"{{ path('app_funds_edit', {'id': fund.id}) }}\">edit</a>

    {{ include('funds/_delete_form.html.twig') }}
{% endblock %} #}

{% extends 'base.html.twig' %}

{% block title %}Funds Details{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
            <div class=\"card\">
                <div class=\"card-header pb-0\">
                    <h6>Funds Details</h6>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ fund.id }}</td>
                            </tr>
                            <tr>
                                <th>Transaction Type</th>
                                <td>{{ fund.transactionType }}</td>
                            </tr>
                            <tr>
                                <th>Amount</th>
                                <td>{{ fund.amount }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{ fund.date ? fund.date|date('Y-m-d') : '' }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ fund.description }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ fund.createdAt ? fund.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ fund.updatedAt ? fund.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"card-footer d-flex justify-content-between\">
                    <a href=\"{{ referer }}\" class=\"btn btn-secondary btn-sm me-2\">Quay lại</a>
                    <div class=\"d-flex\">
                        <a href=\"{{ path('app_funds_edit', {'id': fund.id}) }}\" class=\"btn btn-primary btn-sm me-2\">Edit</a>
                        {{ include('funds/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "funds/show.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\funds\\show.html.twig");
    }
}
