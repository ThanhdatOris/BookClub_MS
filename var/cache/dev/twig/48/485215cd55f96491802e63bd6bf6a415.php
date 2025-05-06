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

/* security/access_denied.html.twig */
class __TwigTemplate_05deefc33a82428af40fe9de86c99b98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/access_denied.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/access_denied.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/access_denied.html.twig", 1);
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

        yield "Truy cập bị từ chối";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 text-center\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body p-5\">
                    <div class=\"mb-4\">
                        <i class=\"fas fa-lock fa-4x text-danger mb-3\"></i>
                        <h1 class=\"h3 mb-3 font-weight-bold\">Truy cập bị từ chối</h1>
                        <p class=\"text-muted mb-4\">
                            Bạn không có quyền truy cập vào trang này. Vui lòng kiểm tra lại quyền hạn của tài khoản.
                        </p>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"mb-3\">Bạn có thể:</h5>
                        <div class=\"d-flex justify-content-center gap-3\">
                            ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-home me-2\"></i>Về trang chủ
                                </a>
                                <a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"btn btn-info\">
                                    <i class=\"fas fa-user me-2\"></i>Xem hồ sơ
                                </a>
                            ";
        } else {
            // line 30
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-sign-in-alt me-2\"></i>Đăng nhập
                                </a>
                                <a href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn btn-success\">
                                    <i class=\"fas fa-user-plus me-2\"></i>Đăng ký
                                </a>
                            ";
        }
        // line 37
        yield "                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-muted small mb-0\">
                            Nếu bạn cho rằng đây là lỗi, vui lòng liên hệ với quản trị viên.
                        </p>
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
        return "security/access_denied.html.twig";
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
        return array (  148 => 37,  141 => 33,  134 => 30,  127 => 26,  120 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Truy cập bị từ chối{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 text-center\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body p-5\">
                    <div class=\"mb-4\">
                        <i class=\"fas fa-lock fa-4x text-danger mb-3\"></i>
                        <h1 class=\"h3 mb-3 font-weight-bold\">Truy cập bị từ chối</h1>
                        <p class=\"text-muted mb-4\">
                            Bạn không có quyền truy cập vào trang này. Vui lòng kiểm tra lại quyền hạn của tài khoản.
                        </p>
                    </div>

                    <div class=\"mb-4\">
                        <h5 class=\"mb-3\">Bạn có thể:</h5>
                        <div class=\"d-flex justify-content-center gap-3\">
                            {% if app.user %}
                                <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-home me-2\"></i>Về trang chủ
                                </a>
                                <a href=\"{{ path('app_profile') }}\" class=\"btn btn-info\">
                                    <i class=\"fas fa-user me-2\"></i>Xem hồ sơ
                                </a>
                            {% else %}
                                <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-sign-in-alt me-2\"></i>Đăng nhập
                                </a>
                                <a href=\"{{ path('app_register') }}\" class=\"btn btn-success\">
                                    <i class=\"fas fa-user-plus me-2\"></i>Đăng ký
                                </a>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <p class=\"text-muted small mb-0\">
                            Nếu bạn cho rằng đây là lỗi, vui lòng liên hệ với quản trị viên.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "security/access_denied.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\security\\access_denied.html.twig");
    }
}
