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

/* profile/suggestions.html.twig */
class __TwigTemplate_fe06f50bffe47e40c8938ae402cc5783 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/suggestions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/suggestions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/suggestions.html.twig", 1);
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

        yield "Danh sách đề xuất chỉnh sửa";
        
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
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-header pb-0\">
                    <h6>Danh sách đề xuất chỉnh sửa</h6>
                </div>
                <div class=\"card-body px-0 pt-0 pb-2\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            yield "                        <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            yield "                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
                    <!-- Form tìm kiếm -->
                    <form method=\"get\" class=\"mb-4\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Tìm kiếm...\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-primary\">Tìm</button>
                        </div>
                    </form>

                    <div class=\"table-responsive p-0\" style=\"max-height: 400px; overflow-y: auto;\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người đề xuất</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người dùng</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Đề xuất</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["suggestion"]) {
            // line 42
            yield "                                    <tr>
                                        <td>";
            // line 43
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "suggestedBy", [], "any", false, false, false, 43)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "suggestedBy", [], "any", false, false, false, 43), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "suggestedBy", [], "any", false, false, false, 43), "html", null, true)));
            yield "</td>
                                        <td>";
            // line 44
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "user", [], "any", false, false, false, 44)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "user", [], "any", false, false, false, 44), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "user", [], "any", false, false, false, 44), "html", null, true)));
            yield "</td>
                                        <td>";
            // line 45
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "suggestion", [], "any", false, false, false, 45)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "suggestion", [], "any", false, false, false, 45), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "suggestion", [], "any", false, false, false, 45), "html", null, true)));
            yield "</td>
                                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "status", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["suggestion"], "status", [], "any", false, false, false, 48) == "pending")) {
                // line 49
                yield "                                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_suggestions_approve", ["index" => (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 49, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 49) * 10) - 10) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 49))]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-success\">Phê duyệt</a>
                                                <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_suggestions_reject", ["index" => (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 50, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 50) * 10) - 10) + CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 50))]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-danger\">Từ chối</a>
                                            ";
            }
            // line 52
            yield "                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "                                    <tr>
                                        <td colspan=\"5\" class=\"text-center\">Chưa có đề xuất chỉnh sửa nào.</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['suggestion'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                            </tbody>
                        </table>
                    </div>

                    <!-- Phân trang -->
                    <div class=\"navigation mt-4\">
                        ";
        // line 65
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 65, $this->source); })()), null, ["search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 65, $this->source); })())]);
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
        return "profile/suggestions.html.twig";
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
        return array (  246 => 65,  238 => 59,  229 => 55,  227 => 54,  213 => 52,  208 => 50,  203 => 49,  201 => 48,  196 => 46,  192 => 45,  188 => 44,  184 => 43,  181 => 42,  163 => 41,  143 => 24,  137 => 20,  128 => 18,  123 => 17,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Danh sách đề xuất chỉnh sửa{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-header pb-0\">
                    <h6>Danh sách đề xuất chỉnh sửa</h6>
                </div>
                <div class=\"card-body px-0 pt-0 pb-2\">
                    {% for flash_message in app.flashes('success') %}
                        <div class=\"alert alert-success\">{{ flash_message }}</div>
                    {% endfor %}
                    {% for flash_message in app.flashes('error') %}
                        <div class=\"alert alert-danger\">{{ flash_message }}</div>
                    {% endfor %}

                    <!-- Form tìm kiếm -->
                    <form method=\"get\" class=\"mb-4\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Tìm kiếm...\" value=\"{{ search }}\">
                            <button type=\"submit\" class=\"btn btn-primary\">Tìm</button>
                        </div>
                    </form>

                    <div class=\"table-responsive p-0\" style=\"max-height: 400px; overflow-y: auto;\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người đề xuất</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người dùng</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Đề xuất</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for suggestion in suggestions %}
                                    <tr>
                                        <td>{{ suggestion.suggestedBy|length > 20 ? suggestion.suggestedBy|slice(0, 20) ~ '...' : suggestion.suggestedBy }}</td>
                                        <td>{{ suggestion.user|length > 20 ? suggestion.user|slice(0, 20) ~ '...' : suggestion.user }}</td>
                                        <td>{{ suggestion.suggestion|length > 50 ? suggestion.suggestion|slice(0, 50) ~ '...' : suggestion.suggestion }}</td>
                                        <td>{{ suggestion.status }}</td>
                                        <td>
                                            {% if suggestion.status == 'pending' %}
                                                <a href=\"{{ path('admin_suggestions_approve', {'index': suggestions.getCurrentPageNumber * 10 - 10 + loop.index0}) }}\" class=\"btn btn-sm btn-success\">Phê duyệt</a>
                                                <a href=\"{{ path('admin_suggestions_reject', {'index': suggestions.getCurrentPageNumber * 10 - 10 + loop.index0}) }}\" class=\"btn btn-sm btn-danger\">Từ chối</a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"5\" class=\"text-center\">Chưa có đề xuất chỉnh sửa nào.</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    <!-- Phân trang -->
                    <div class=\"navigation mt-4\">
                        {{ knp_pagination_render(suggestions, null, {'search': search}) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "profile/suggestions.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\profile\\suggestions.html.twig");
    }
}
