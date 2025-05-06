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

/* z-old/members/edit.html.twig */
class __TwigTemplate_6b2b728bb640d48d9b00e87d4b79ef70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/members/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/members/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/members/edit.html.twig", 1);
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

        yield "Sửa thông tin thành viên";
        
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
                        <h6 class=\"mb-0 text-primary\">Sửa thông tin thành viên - ID: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["member"]) || array_key_exists("member", $context) ? $context["member"] : (function () { throw new RuntimeError('Variable "member" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</h6>
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_members_index");
        yield "\" class=\"btn btn-danger btn-sm mb-0\">Đóng</a>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fullname", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Họ và tên"]);
        yield "
                                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "fullname", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "gender", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Giới tính"]);
        yield "
                                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "gender", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "student_id", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "MSSV"]);
        yield "
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "student_id", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "classes", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Lớp"]);
        yield "
                                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "classes", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "faculty", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Khoa"]);
        yield "
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "faculty", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Mail"]);
        yield "
                                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "address", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Địa chỉ"]);
        yield "
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "address", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "phone", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Số điện thoại"]);
        yield "
                                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "phone", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "join_date", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ngày tham gia"]);
        yield "
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "join_date", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "dob", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Ngày sinh"]);
        yield "
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "dob", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu thay đổi</button>
                        ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
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
        return "z-old/members/edit.html.twig";
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
        return array (  223 => 58,  217 => 55,  213 => 54,  207 => 51,  203 => 50,  197 => 47,  193 => 46,  187 => 43,  183 => 42,  177 => 39,  173 => 38,  167 => 35,  163 => 34,  157 => 31,  153 => 30,  147 => 27,  143 => 26,  137 => 23,  133 => 22,  127 => 19,  123 => 18,  118 => 16,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sửa thông tin thành viên{% endblock %}

{% block body %}
<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card mt-4 mb-4 shadow-sm\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Sửa thông tin thành viên - ID: {{ member.id }}</h6>
                        <a href=\"{{ path('app_members_index') }}\" class=\"btn btn-danger btn-sm mb-0\">Đóng</a>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        {{ form_start(form) }}
                            <div class=\"mb-3\">
                                {{ form_label(form.fullname, 'Họ và tên', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.fullname, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.gender, 'Giới tính', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.gender, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.student_id, 'MSSV', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.student_id, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.classes, 'Lớp', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.classes, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.faculty, 'Khoa', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.faculty, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.email, 'Mail', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.address, 'Địa chỉ', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.phone, 'Số điện thoại', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.join_date, 'Ngày tham gia', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.join_date, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(form.dob, 'Ngày sinh', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.dob, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Lưu thay đổi</button>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{% endblock %}
", "z-old/members/edit.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\members\\edit.html.twig");
    }
}
