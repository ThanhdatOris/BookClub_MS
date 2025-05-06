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

/* activities/show.html.twig */
class __TwigTemplate_812fdeb499352a6468b6c103d4501b03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activities/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activities/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activities/show.html.twig", 1);
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

        yield "Chi tiết hoạt động";
        
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
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <h6>Chi tiết hoạt động: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <p><strong>Tiêu đề:</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                                <p><strong>Mô tả:</strong> ";
        // line 17
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["activity"] ?? null), "description", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true)) : ("N/A"));
        yield "</p>
                                <p><strong>Ngày:</strong> ";
        // line 18
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true)) : ("N/A"));
        yield "</p>
                                <p><strong>Thời gian:</strong> ";
        // line 19
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 19, $this->source); })()), "time", [], "any", false, false, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 19, $this->source); })()), "time", [], "any", false, false, false, 19), "H:i"), "html", null, true)) : ("N/A"));
        yield "</p>
                                <p><strong>Địa điểm:</strong> ";
        // line 20
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["activity"] ?? null), "location", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 20, $this->source); })()), "location", [], "any", false, false, false, 20)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 20, $this->source); })()), "location", [], "any", false, false, false, 20), "html", null, true)) : ("N/A"));
        yield "</p>
                                <p><strong>Trạng thái:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                                <p><strong>Người tạo:</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 22, $this->source); })()), "createdBy", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>
                                <p><strong>Ngày tạo:</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 23, $this->source); })()), "createdAt", [], "any", false, false, false, 23), "Y-m-d H:i:s"), "html", null, true);
        yield "</p>
                                <p><strong>Ngày cập nhật:</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 24, $this->source); })()), "updatedAt", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true);
        yield "</p>
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 27, $this->source); })()), "image", [], "any", false, false, false, 27)) {
            // line 28
            yield "                                    <p><strong>Hình ảnh:</strong></p>
                                    <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"img-fluid\" style=\"max-width: 300px;\">
                                ";
        } else {
            // line 31
            yield "                                    <p><strong>Hình ảnh:</strong> Không có</p>
                                ";
        }
        // line 33
        yield "                            </div>
                        </div>
                        <div class=\"mt-4\">
                            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_index");
        yield "\" class=\"btn btn-secondary\">Quay lại</a>
                            ";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TREASURER"))) {
            // line 38
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_participant_index", ["activityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Quản lý người tham gia</a>
                            ";
        }
        // line 40
        yield "                            ";
        if ((isset($context["hasJoined"]) || array_key_exists("hasJoined", $context) ? $context["hasJoined"] : (function () { throw new RuntimeError('Variable "hasJoined" does not exist.', 40, $this->source); })())) {
            // line 41
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_participant_leave", ["activityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn hủy tham gia hoạt động này?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("leave" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-warning\">Hủy tham gia</button>
                                </form>
                            ";
        } else {
            // line 46
            yield "                                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activity_participant_join", ["activityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("join" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-success\">Tham gia</button>
                                </form>
                            ";
        }
        // line 51
        yield "                        </div>
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
        return "activities/show.html.twig";
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
        return array (  213 => 51,  206 => 47,  201 => 46,  194 => 42,  189 => 41,  186 => 40,  180 => 38,  178 => 37,  174 => 36,  169 => 33,  165 => 31,  158 => 29,  155 => 28,  153 => 27,  147 => 24,  143 => 23,  139 => 22,  135 => 21,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chi tiết hoạt động{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <h6>Chi tiết hoạt động: {{ activity.title }}</h6>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <p><strong>Tiêu đề:</strong> {{ activity.title }}</p>
                                <p><strong>Mô tả:</strong> {{ activity.description ?? 'N/A' }}</p>
                                <p><strong>Ngày:</strong> {{ activity.date ? activity.date|date('Y-m-d') : 'N/A' }}</p>
                                <p><strong>Thời gian:</strong> {{ activity.time ? activity.time|date('H:i') : 'N/A' }}</p>
                                <p><strong>Địa điểm:</strong> {{ activity.location ?? 'N/A' }}</p>
                                <p><strong>Trạng thái:</strong> {{ activity.status }}</p>
                                <p><strong>Người tạo:</strong> {{ activity.createdBy.name }}</p>
                                <p><strong>Ngày tạo:</strong> {{ activity.createdAt|date('Y-m-d H:i:s') }}</p>
                                <p><strong>Ngày cập nhật:</strong> {{ activity.updatedAt|date('Y-m-d H:i:s') }}</p>
                            </div>
                            <div class=\"col-md-6\">
                                {% if activity.image %}
                                    <p><strong>Hình ảnh:</strong></p>
                                    <img src=\"{{ asset('uploads/images/' ~ activity.image) }}\" alt=\"{{ activity.title }}\" class=\"img-fluid\" style=\"max-width: 300px;\">
                                {% else %}
                                    <p><strong>Hình ảnh:</strong> Không có</p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"mt-4\">
                            <a href=\"{{ path('app_activities_index') }}\" class=\"btn btn-secondary\">Quay lại</a>
                            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_TREASURER') %}
                                <a href=\"{{ path('app_activity_participant_index', {'activityId': activity.id}) }}\" class=\"btn btn-info\">Quản lý người tham gia</a>
                            {% endif %}
                            {% if hasJoined %}
                                <form method=\"post\" action=\"{{ path('app_activity_participant_leave', {'activityId': activity.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn hủy tham gia hoạt động này?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('leave' ~ activity.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-warning\">Hủy tham gia</button>
                                </form>
                            {% else %}
                                <form method=\"post\" action=\"{{ path('app_activity_participant_join', {'activityId': activity.id}) }}\" style=\"display:inline;\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('join' ~ activity.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-success\">Tham gia</button>
                                </form>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "activities/show.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\activities\\show.html.twig");
    }
}
