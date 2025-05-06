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

/* pagination/custom_pagination.html.twig */
class __TwigTemplate_f7dcda73e3b62f15edd451d79715ec68 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/custom_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/custom_pagination.html.twig"));

        // line 2
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            yield "    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 6
            yield "            ";
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 6, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 6, $this->source); })())))) {
                // line 7
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 8, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 8, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 8, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 8, $this->source); })())])), "html", null, true);
                yield "\" aria-label=\"First\">
                        <i class=\"fas fa-angle-double-left\"></i>
                    </a>
                </li>
            ";
            } else {
                // line 13
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-double-left\"></i>
                    </span>
                </li>
            ";
            }
            // line 19
            yield "
            ";
            // line 21
            yield "            ";
            if (array_key_exists("previous", $context)) {
                // line 22
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 23, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 23, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 23, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 23, $this->source); })())])), "html", null, true);
                yield "\" aria-label=\"Previous\">
                        <i class=\"fas fa-angle-left\"></i>
                    </a>
                </li>
            ";
            } else {
                // line 28
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-left\"></i>
                    </span>
                </li>
            ";
            }
            // line 34
            yield "
            ";
            // line 36
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 37
                yield "                ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 37, $this->source); })()))) {
                    // line 38
                    yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 39, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 39, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 39, $this->source); })()) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } else {
                    // line 42
                    yield "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                    </li>
                ";
                }
                // line 46
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "
            ";
            // line 49
            yield "            ";
            if (array_key_exists("next", $context)) {
                // line 50
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 51, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 51, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 51, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 51, $this->source); })())])), "html", null, true);
                yield "\" aria-label=\"Next\">
                        <i class=\"fas fa-angle-right\"></i>
                    </a>
                </li>
            ";
            } else {
                // line 56
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-right\"></i>
                    </span>
                </li>
            ";
            }
            // line 62
            yield "
            ";
            // line 64
            yield "            ";
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 64, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 64, $this->source); })())))) {
                // line 65
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 66, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 66, $this->source); })()), [ (string)(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 66, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 66, $this->source); })())])), "html", null, true);
                yield "\" aria-label=\"Last\">
                        <i class=\"fas fa-angle-double-right\"></i>
                    </a>
                </li>
            ";
            } else {
                // line 71
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-double-right\"></i>
                    </span>
                </li>
            ";
            }
            // line 77
            yield "        </ul>
    </nav>
";
        }
        // line 79
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pagination/custom_pagination.html.twig";
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
        return array (  193 => 79,  188 => 77,  180 => 71,  172 => 66,  169 => 65,  166 => 64,  163 => 62,  155 => 56,  147 => 51,  144 => 50,  141 => 49,  138 => 47,  132 => 46,  126 => 43,  123 => 42,  115 => 39,  112 => 38,  109 => 37,  104 => 36,  101 => 34,  93 => 28,  85 => 23,  82 => 22,  79 => 21,  76 => 19,  68 => 13,  60 => 8,  57 => 7,  54 => 6,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/pagination/custom_pagination.html.twig #}
{% if pageCount > 1 %}
    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center\">
            {# First #}
            {% if first is defined and current != first %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\" aria-label=\"First\">
                        <i class=\"fas fa-angle-double-left\"></i>
                    </a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-double-left\"></i>
                    </span>
                </li>
            {% endif %}

            {# Previous #}
            {% if previous is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" aria-label=\"Previous\">
                        <i class=\"fas fa-angle-left\"></i>
                    </a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-left\"></i>
                    </span>
                </li>
            {% endif %}

            {# Pages #}
            {% for page in pagesInRange %}
                {% if page != current %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% else %}
                    <li class=\"page-item active\">
                        <span class=\"page-link\">{{ page }}</span>
                    </li>
                {% endif %}
            {% endfor %}

            {# Next #}
            {% if next is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" aria-label=\"Next\">
                        <i class=\"fas fa-angle-right\"></i>
                    </a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-right\"></i>
                    </span>
                </li>
            {% endif %}

            {# Last #}
            {% if last is defined and current != last %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\" aria-label=\"Last\">
                        <i class=\"fas fa-angle-double-right\"></i>
                    </a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        <i class=\"fas fa-angle-double-right\"></i>
                    </span>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %} ", "pagination/custom_pagination.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\pagination\\custom_pagination.html.twig");
    }
}
