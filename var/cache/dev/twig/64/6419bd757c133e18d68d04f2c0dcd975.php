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

/* z-old/activities/new.html.twig */
class __TwigTemplate_5ea475ae3f307e6cbb4672d343baab8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/activities/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/activities/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/activities/new.html.twig", 1);
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

        yield "Tạo hoạt động mới";
        
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
                <div class=\"card mt-4 mb-4 shadow-sm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Tạo hoạt động mới</h6>
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_index");
        yield "\" class=\"btn btn-danger btn-sm mb-0\">Cancel</a>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Activity Title"]);
        yield "
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date"]);
        yield "
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "time", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Time"]);
        yield "
                                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "time", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Status"]);
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "location", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Location"]);
        yield "
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "location", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-3\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                            </div>
                        </div>
                        ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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
        return "z-old/activities/new.html.twig";
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
        return array (  192 => 54,  181 => 46,  177 => 45,  169 => 40,  165 => 39,  157 => 34,  153 => 33,  147 => 30,  143 => 29,  135 => 24,  131 => 23,  125 => 20,  121 => 19,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tạo hoạt động mới{% endblock %}

{% block body %}
<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card mt-4 mb-4 shadow-sm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Tạo hoạt động mới</h6>
                        <a href=\"{{ path('app_activities_index') }}\" class=\"btn btn-danger btn-sm mb-0\">Cancel</a>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.title, 'Activity Title', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.date, 'Date', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.time, 'Time', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.time, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.status, 'Status', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.status, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_label(form.location, 'Location', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.location, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-3\">
                                {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{% endblock %}
", "z-old/activities/new.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\activities\\new.html.twig");
    }
}
