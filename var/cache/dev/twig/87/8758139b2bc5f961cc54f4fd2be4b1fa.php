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

/* z-old/default/setting.html.twig */
class __TwigTemplate_94496e39040d0853d67f48fbf676b6f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/default/setting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/default/setting.html.twig"));

        // line 1
        yield "<div class=\"fixed-plugin\">
    <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
    <i class=\"fa fa-cog py-2\"> </i>
    </a>
    <div class=\"card shadow-lg\">
    <div class=\"card-header pb-0 pt-3 \">
        <div class=\"float-start\">
        <h5 class=\"mt-3 mb-0\">Cài đặt</h5>
        <p>Tùy chỉnh giao diện hệ thống.</p>
        </div>
        <div class=\"float-end mt-4\">
        <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
            <i class=\"fa fa-close\"></i>
        </button>
        </div>
        <!-- End Toggle Button -->
    </div>
    <hr class=\"horizontal dark my-1\">
    <div class=\"card-body pt-sm-3 pt-0 overflow-auto\">
        <!-- Sidebar Backgrounds -->
        <div>
        <h6 class=\"mb-0\">Sidebar Colors</h6>
        </div>
        <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
        <div class=\"badge-colors my-2 text-start\">
            <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
        </div>
        </a>
        <!-- Sidenav Type -->
        <div class=\"mt-3\">
        <h6 class=\"mb-0\">Sidenav Type</h6>
        <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
        </div>
        <div class=\"d-flex\">
        <button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
        <button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\" onclick=\"sidebarType(this)\">Dark</button>
        </div>
        <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class=\"d-flex my-3\">
        <h6 class=\"mb-0\">Navbar Fixed</h6>
        <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
        </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        <div class=\"mt-2 mb-5 d-flex\">
        <h6 class=\"mb-0\">Light / Dark</h6>
        <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
        </div>
    </div>
    </div>
</div>
    <!--   Core JS Files   -->
<script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min-Dg1zdfO.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min-mJlmV6i.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.min-o7a4jZG.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/smooth-scrollbar.min-fzt6rUB.js"), "html", null, true);
        yield "\"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
        damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/argon-dashboard.min-9OEnVK4.js"), "html", null, true);
        yield "\"></script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "z-old/default/setting.html.twig";
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
        return array (  136 => 75,  122 => 64,  118 => 63,  114 => 62,  110 => 61,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"fixed-plugin\">
    <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
    <i class=\"fa fa-cog py-2\"> </i>
    </a>
    <div class=\"card shadow-lg\">
    <div class=\"card-header pb-0 pt-3 \">
        <div class=\"float-start\">
        <h5 class=\"mt-3 mb-0\">Cài đặt</h5>
        <p>Tùy chỉnh giao diện hệ thống.</p>
        </div>
        <div class=\"float-end mt-4\">
        <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
            <i class=\"fa fa-close\"></i>
        </button>
        </div>
        <!-- End Toggle Button -->
    </div>
    <hr class=\"horizontal dark my-1\">
    <div class=\"card-body pt-sm-3 pt-0 overflow-auto\">
        <!-- Sidebar Backgrounds -->
        <div>
        <h6 class=\"mb-0\">Sidebar Colors</h6>
        </div>
        <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
        <div class=\"badge-colors my-2 text-start\">
            <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
            <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
        </div>
        </a>
        <!-- Sidenav Type -->
        <div class=\"mt-3\">
        <h6 class=\"mb-0\">Sidenav Type</h6>
        <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
        </div>
        <div class=\"d-flex\">
        <button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
        <button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\" onclick=\"sidebarType(this)\">Dark</button>
        </div>
        <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class=\"d-flex my-3\">
        <h6 class=\"mb-0\">Navbar Fixed</h6>
        <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
        </div>
        </div>
        <hr class=\"horizontal dark my-sm-4\">
        <div class=\"mt-2 mb-5 d-flex\">
        <h6 class=\"mb-0\">Light / Dark</h6>
        <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
            <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
        </div>
    </div>
    </div>
</div>
    <!--   Core JS Files   -->
<script src=\"{{ asset('assets/js/core/popper.min-Dg1zdfO.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/bootstrap.min-mJlmV6i.js') }}\"></script>
<script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.min-o7a4jZG.js') }}\"></script>
<script src=\"{{ asset('assets/js/plugins/smooth-scrollbar.min-fzt6rUB.js') }}\"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
        damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src=\"{{ asset('assets/js/argon-dashboard.min-9OEnVK4.js') }}\"></script>", "z-old/default/setting.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\default\\setting.html.twig");
    }
}
