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

/* navbar.html.twig */
class __TwigTemplate_7c9ebfc30e71ab752bf842a29662c1c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        yield "<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <i class=\"fas fa-book-reader me-2\"></i>BookClub MS
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <i class=\"fas fa-home me-1\"></i>Trang chủ
                    </a>
                </li>
                ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            yield "\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i>Dashboard
                        </a>
                    </li>
                ";
        }
        // line 24
        yield "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 25
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-cog me-1\"></i>Quản lý
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"adminDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
            yield "\">
                                    <i class=\"fas fa-users me-1\"></i>Quản lý thành viên
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_index");
            yield "\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>Quản lý hoạt động
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_index");
            yield "\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i>Quản lý quỹ
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 48
        yield "            </ul>
            <ul class=\"navbar-nav\">
                ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-circle me-1\"></i>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            yield "
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["studentId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "studentId", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\">
                                    <i class=\"fas fa-id-card me-1\"></i>Hồ sơ
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt me-1\"></i>Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        } else {
            // line 70
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i>Đăng nhập
                        </a>
                    </li>
                ";
        }
        // line 76
        yield "            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navbar.html.twig";
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
        return array (  169 => 76,  161 => 71,  158 => 70,  148 => 63,  139 => 57,  132 => 53,  128 => 51,  126 => 50,  122 => 48,  112 => 41,  104 => 36,  96 => 31,  88 => 25,  85 => 24,  77 => 19,  74 => 18,  72 => 17,  65 => 13,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
            <i class=\"fas fa-book-reader me-2\"></i>BookClub MS
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_home') }}\">
                        <i class=\"fas fa-home me-1\"></i>Trang chủ
                    </a>
                </li>
                {% if is_granted('ROLE_ADMIN')%}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_dashboard') }}\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i>Dashboard
                        </a>
                    </li>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-cog me-1\"></i>Quản lý
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"adminDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_users_index') }}\">
                                    <i class=\"fas fa-users me-1\"></i>Quản lý thành viên
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_activities_index') }}\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>Quản lý hoạt động
                                </a>
                            </li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('app_funds_index') }}\">
                                    <i class=\"fas fa-money-bill-wave me-1\"></i>Quản lý quỹ
                                </a>
                            </li>
                        </ul>
                    </li>
                {% endif %}
            </ul>
            <ul class=\"navbar-nav\">
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-circle me-1\"></i>{{ app.user.name }}
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('profile', { studentId: app.user.studentId}) }}\">
                                    <i class=\"fas fa-id-card me-1\"></i>Hồ sơ
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"{{ path('logout') }}\">
                                    <i class=\"fas fa-sign-out-alt me-1\"></i>Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">
                            <i class=\"fas fa-sign-in-alt me-1\"></i>Đăng nhập
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->", "navbar.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\navbar.html.twig");
    }
}
