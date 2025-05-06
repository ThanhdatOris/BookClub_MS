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

/* custom_pagination.html.twig */
class __TwigTemplate_546f8b60abd4ce513cd7018926b9d36d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "custom_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "custom_pagination.html.twig"));

        // line 2
        yield "<nav aria-label=\"Page navigation\">
    <ul class=\"pagination justify-content-center\">
        ";
        // line 5
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "previous", [], "any", true, true, false, 5)) {
            // line 6
            yield "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 7, $this->source); })()), "route", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 7, $this->source); })()), "previous", [], "any", false, false, false, 7)), "html", null, true);
            yield "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
        ";
        } else {
            // line 12
            yield "            <li class=\"page-item disabled\">
                <span class=\"page-link\">&laquo;</span>
            </li>
        ";
        }
        // line 16
        yield "
        ";
        // line 18
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()), "pages", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            yield "            ";
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), "current", [], "any", false, false, false, 19))) {
                // line 20
                yield "                <li class=\"page-item active\">
                    <span class=\"page-link\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</span>
                </li>
            ";
            } elseif (            // line 23
true) {
                // line 24
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 25, $this->source); })()), "route", [], "any", false, false, false, 25), $context["page"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            } else {
                // line 28
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">...</span>
                </li>
            ";
            }
            // line 32
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
        ";
        // line 35
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "next", [], "any", true, true, false, 35)) {
            // line 36
            yield "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()), "route", [], "any", false, false, false, 37), CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 37, $this->source); })()), "next", [], "any", false, false, false, 37)), "html", null, true);
            yield "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        ";
        } else {
            // line 42
            yield "            <li class=\"page-item disabled\">
                <span class=\"page-link\">&raquo;</span>
            </li>
        ";
        }
        // line 46
        yield "    </ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "custom_pagination.html.twig";
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
        return array (  139 => 46,  133 => 42,  125 => 37,  122 => 36,  119 => 35,  116 => 33,  110 => 32,  104 => 28,  96 => 25,  93 => 24,  91 => 23,  86 => 21,  83 => 20,  80 => 19,  75 => 18,  72 => 16,  66 => 12,  58 => 7,  55 => 6,  52 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# filepath: templates/pagination/custom_pagination.html.twig #}
<nav aria-label=\"Page navigation\">
    <ul class=\"pagination justify-content-center\">
        {# Nút \"Previous\" #}
        {% if pagination.previous is defined %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path(pagination.route, pagination.previous) }}\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\">&laquo;</span>
            </li>
        {% endif %}

        {# Các trang #}
        {% for page in pagination.pages %}
            {% if page == pagination.current %}
                <li class=\"page-item active\">
                    <span class=\"page-link\">{{ page }}</span>
                </li>
            {% elseif page is defined %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path(pagination.route, page) }}\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <span class=\"page-link\">...</span>
                </li>
            {% endif %}
        {% endfor %}

        {# Nút \"Next\" #}
        {% if pagination.next is defined %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path(pagination.route, pagination.next) }}\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        {% else %}
            <li class=\"page-item disabled\">
                <span class=\"page-link\">&raquo;</span>
            </li>
        {% endif %}
    </ul>
</nav>", "custom_pagination.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\custom_pagination.html.twig");
    }
}
