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

/* z-old/members/new.html.twig */
class __TwigTemplate_f576323dc852febdebb8ad60b8f72862 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/members/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/members/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/members/new.html.twig", 1);
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

        yield "Thêm thành viên mới";
        
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
                        <h6 class=\"mb-0 text-primary\">Thêm thành viên mới</h6>
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_members_index");
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "fullname", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Full Name"]);
        yield "
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "fullname", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "student_id", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Student ID"]);
        yield "
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "student_id", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
                                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "phone_num", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Phone Number"]);
        yield "
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "phone_num", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "join_date", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Join Date"]);
        yield "
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "join_date", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "birth_date", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Birth Date"]);
        yield "
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "birth_date", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Classes", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Classes"]);
        yield "
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Classes", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Faculty", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Faculty"]);
        yield "
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Faculty", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "address", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Address"]);
        yield "
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "address", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "genders", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Gender"]);
        yield "
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "genders", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                            </div>
                        </div>
                        ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
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
        return "z-old/members/new.html.twig";
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
        return array (  234 => 72,  223 => 64,  219 => 63,  213 => 60,  209 => 59,  201 => 54,  197 => 53,  191 => 50,  187 => 49,  179 => 44,  175 => 43,  169 => 40,  165 => 39,  157 => 34,  153 => 33,  147 => 30,  143 => 29,  135 => 24,  131 => 23,  125 => 20,  121 => 19,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thêm thành viên mới{% endblock %}

{% block body %}
<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card mt-4 mb-4 shadow-sm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Thêm thành viên mới</h6>
                        <a href=\"{{ path('app_members_index') }}\" class=\"btn btn-danger btn-sm mb-0\">Cancel</a>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.fullname, 'Full Name', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.fullname, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.student_id, 'Student ID', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.student_id, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.phone_num, 'Phone Number', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.phone_num, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.join_date, 'Join Date', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.join_date, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.birth_date, 'Birth Date', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.birth_date, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.Classes, 'Classes', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.Classes, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.Faculty, 'Faculty', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.Faculty, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.address, 'Address', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(form.genders, 'Gender', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.genders, {'attr': {'class': 'form-control'}}) }}
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
", "z-old/members/new.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\members\\new.html.twig");
    }
}
