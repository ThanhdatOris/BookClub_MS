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

/* base.html.twig */
class __TwigTemplate_59b6fb8805449fb87610fcb9a464b4df extends Template
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
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 44
        yield "</head>

<body class=\"g-sidenav-show bg-gray-100\">
    <div class=\"min-height-300 sys-bg position-absolute w-100\"></div>
    <aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4\" id=\"sidenav-main\" style=\"z-index: 1;\">
        <div class=\"sidenav-header\">
            <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
            <a class=\"navbar-brand m-0\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark-mn76con.png"), "html", null, true);
        yield "\" width=\"26px\" height=\"26px\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
                <span class=\"ms-1 font-weight-bold\">BOOK CLUB CTUT</span>
            </a>
        </div>
        <hr class=\"horizontal dark mt-0\" style=\"height: 3px;\" tabindex=\"-1\">
        <div class=\"collapse navbar-collapse w-auto\" id=\"sidenav-collapse-main\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60) == "app_home")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"fas fa-home text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Trang chủ</span>
                    </a>
                </li>
                ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
            // line 68
            yield "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 69
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 70
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "attributes", [], "any", false, false, false, 70), "get", ["_route"], "method", false, false, false, 70) == "app_dashboard")) ? ("active") : (""));
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
                yield "\">
                                <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-tachometer-alt text-dark text-sm opacity-10\"></i>
                                </div>
                                <span class=\"nav-link-text ms-1\">Dashboard</span>
                            </a>
                        </li>
                    ";
            }
            // line 78
            yield "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 79
                yield "                        <li class=\"nav-item mt-3\">
                            <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Quản lý</h6>
                        </li>
                    ";
            }
            // line 83
            yield "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 84
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 85
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", ["_route"], "method", false, false, false, 85) == "app_users_index")) ? ("active") : (""));
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
                yield "\">
                                <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-users text-dark text-sm opacity-10\"></i>
                                </div>
                                <span class=\"nav-link-text ms-1\">Thành viên</span>
                            </a>
                        </li>
                    ";
            }
            // line 93
            yield "                    ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TREASURER"))) {
                // line 94
                yield "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 95
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "attributes", [], "any", false, false, false, 95), "get", ["_route"], "method", false, false, false, 95) == "app_funds_index")) ? ("active") : (""));
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_index");
                yield "\">
                                <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-money-bill-wave text-dark text-sm opacity-10\"></i>
                                </div>
                                <span class=\"nav-link-text ms-1\">Quỹ</span>
                            </a>
                        </li>
                    ";
            }
            // line 103
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 104
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "attributes", [], "any", false, false, false, 104), "get", ["_route"], "method", false, false, false, 104) == "app_activities_index")) ? ("active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_index");
            yield "\">
                            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-calendar-alt text-dark text-sm opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Hoạt động</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 112
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "request", [], "any", false, false, false, 112), "attributes", [], "any", false, false, false, 112), "get", ["_route"], "method", false, false, false, 112) == "app_proposals_index")) ? ("active") : (""));
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_index");
            yield "\">
                            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-file-alt text-dark text-sm opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Đề xuất</span>
                        </a>
                    </li>
                    ";
            // line 119
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 120
                yield "                        <li class=\"nav-item mt-3\">
                            <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Tài khoản</h6>
                        </li>
                    ";
            }
            // line 124
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
            // line 125
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "request", [], "any", false, false, false, 125), "attributes", [], "any", false, false, false, 125), "get", ["_route"], "method", false, false, false, 125) == "profile")) ? ("active") : (""));
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["studentId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "studentId", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\">
                            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-user text-dark text-sm opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Hồ sơ</span>
                        </a>
                    </li>
                ";
        }
        // line 133
        yield "            </ul>
        </div>
        <div class=\"sidenav-footer mx-3 d-none d-lg-block\">
            <div class=\"card card-plain shadow-none\" id=\"sidenavCard\">
            <img class=\"w-50 mx-auto\" src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/icon-documentation-DcItuRq.svg"), "html", null, true);
        yield "\" alt=\"sidebar_illustration\">
            <div class=\"card-body text-center p-3 w-100 pt-0\">
                <div class=\"docs-info\">
                <h6 class=\"mb-0\">Book Club CTUT</h6>
                <p class=\"text-xs font-weight-bold mb-0\">Management System</p>
                </div>
            </div>
            </div>
        </div>
    </aside>
    <main class=\"main-content position-relative border-radius-lg\">
        <div class=\"container-fluid py-4\">
            ";
        // line 149
        yield from $this->loadTemplate("navbar.html.twig", "base.html.twig", 149)->unwrap()->yield($context);
        // line 150
        yield "            ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 151
        yield "            ";
        yield from $this->loadTemplate("footer.html.twig", "base.html.twig", 151)->unwrap()->yield($context);
        // line 152
        yield "        </div>
    </main>

    <!-- JavaScript Files -->
    <script src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min-_Dnnqxc.js"), "html", null, true);
        yield "\" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Toggle sidebar on mobile
            const iconNavbarSidenav = document.getElementById('iconNavbarSidenav');
            const iconSidenav = document.getElementById('iconSidenav');
            const sidenav = document.getElementById('sidenav-main');
            const body = document.body;

            if (iconNavbarSidenav) {
                iconNavbarSidenav.addEventListener('click', function () {
                    if (!body.classList.contains('g-sidenav-pinned')) {
                        body.classList.add('g-sidenav-pinned');
                        sidenav.classList.add('active');
                    } else {
                        body.classList.remove('g-sidenav-pinned');
                        sidenav.classList.remove('active');
                    }
                });
            }

            if (iconSidenav) {
                iconSidenav.addEventListener('click', function () {
                    body.classList.remove('g-sidenav-pinned');
                    sidenav.classList.remove('active');
                });
            }

            // Đóng sidebar khi click bên ngoài trên mobile
            document.addEventListener('click', function (event) {
                if (body.classList.contains('g-sidenav-pinned') && !sidenav.contains(event.target) && !iconNavbarSidenav.contains(event.target)) {
                    body.classList.remove('g-sidenav-pinned');
                    sidenav.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon-_mA87V4.png"), "html", null, true);
        yield "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-_mA87V4.png"), "html", null, true);
        yield "\">
        <title>
            ";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 12
        yield "        </title>
        <!-- Fonts and icons -->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\" />
        <!-- Font Awesome Icons -->
        ";
        // line 18
        yield "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
        <!-- CSS Files -->
        <link id=\"pagestyle\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/argon-dashboard-SIGT4pJ.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        <style>
            .sys-bg {
                background-image: url('";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-iN96iui.png"), "html", null, true);
        yield "');
                background-size: cover;
                background-position: center;
            }

            .table-hover tbody tr:hover {
                background-color: #f5f5f5; /* Màu nền khi hover */
                cursor: pointer;
            }

            .table-hover tbody tr:active {
                background-color: #e0e0e0; /* Màu nền khi nhấp */
            }
        </style>
        ";
        // line 38
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 43
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        yield "Book Club CTUT";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        yield "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
            <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/custom.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  431 => 150,  418 => 41,  414 => 39,  401 => 38,  378 => 11,  367 => 43,  365 => 38,  348 => 24,  341 => 20,  337 => 18,  330 => 12,  328 => 11,  323 => 9,  319 => 8,  315 => 6,  302 => 5,  251 => 156,  245 => 152,  242 => 151,  239 => 150,  237 => 149,  222 => 137,  216 => 133,  203 => 125,  200 => 124,  194 => 120,  192 => 119,  180 => 112,  167 => 104,  164 => 103,  151 => 95,  148 => 94,  145 => 93,  132 => 85,  129 => 84,  126 => 83,  120 => 79,  117 => 78,  104 => 70,  101 => 69,  98 => 68,  96 => 67,  84 => 60,  73 => 52,  69 => 51,  60 => 44,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('assets/img/apple-icon-_mA87V4.png') }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon-_mA87V4.png') }}\">
        <title>
            {% block title %}Book Club CTUT{% endblock %}
        </title>
        <!-- Fonts and icons -->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\" />
        <!-- Font Awesome Icons -->
        {# <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\" defer></script> #}
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
        <!-- CSS Files -->
        <link id=\"pagestyle\" href=\"{{ asset('assets/styles/argon-dashboard-SIGT4pJ.css') }}\" rel=\"stylesheet\" />
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        <style>
            .sys-bg {
                background-image: url('{{ asset('assets/img/bg-iN96iui.png') }}');
                background-size: cover;
                background-position: center;
            }

            .table-hover tbody tr:hover {
                background-color: #f5f5f5; /* Màu nền khi hover */
                cursor: pointer;
            }

            .table-hover tbody tr:active {
                background-color: #e0e0e0; /* Màu nền khi nhấp */
            }
        </style>
        {% block stylesheets %}
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/styles/custom.css') }}\" rel=\"stylesheet\">
        {% endblock %}
    {% endblock %}
</head>

<body class=\"g-sidenav-show bg-gray-100\">
    <div class=\"min-height-300 sys-bg position-absolute w-100\"></div>
    <aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4\" id=\"sidenav-main\" style=\"z-index: 1;\">
        <div class=\"sidenav-header\">
            <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
            <a class=\"navbar-brand m-0\" href=\"{{ path('app_home') }}\">
                <img src=\"{{ asset('assets/img/logo-ct-dark-mn76con.png')}}\" width=\"26px\" height=\"26px\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
                <span class=\"ms-1 font-weight-bold\">BOOK CLUB CTUT</span>
            </a>
        </div>
        <hr class=\"horizontal dark mt-0\" style=\"height: 3px;\" tabindex=\"-1\">
        <div class=\"collapse navbar-collapse w-auto\" id=\"sidenav-collapse-main\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"{{ path('app_home') }}\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"fas fa-home text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Trang chủ</span>
                    </a>
                </li>
                {% if app.user %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {{ app.request.attributes.get('_route') == 'app_dashboard' ? 'active' : '' }}\" href=\"{{ path('app_dashboard') }}\">
                                <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-tachometer-alt text-dark text-sm opacity-10\"></i>
                                </div>
                                <span class=\"nav-link-text ms-1\">Dashboard</span>
                            </a>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item mt-3\">
                            <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Quản lý</h6>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {{ app.request.attributes.get('_route') == 'app_users_index' ? 'active' : '' }}\" href=\"{{ path('app_users_index') }}\">
                                <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-users text-dark text-sm opacity-10\"></i>
                                </div>
                                <span class=\"nav-link-text ms-1\">Thành viên</span>
                            </a>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_TREASURER') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {{ app.request.attributes.get('_route') == 'app_funds_index' ? 'active' : '' }}\" href=\"{{ path('app_funds_index') }}\">
                                <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-money-bill-wave text-dark text-sm opacity-10\"></i>
                                </div>
                                <span class=\"nav-link-text ms-1\">Quỹ</span>
                            </a>
                        </li>
                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.attributes.get('_route') == 'app_activities_index' ? 'active' : '' }}\" href=\"{{ path('app_activities_index') }}\">
                            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-calendar-alt text-dark text-sm opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Hoạt động</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.attributes.get('_route') == 'app_proposals_index' ? 'active' : '' }}\" href=\"{{ path('app_proposals_index') }}\">
                            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-file-alt text-dark text-sm opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Đề xuất</span>
                        </a>
                    </li>
                    {% if is_granted('ROLE_ADMIN')%}
                        <li class=\"nav-item mt-3\">
                            <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Tài khoản</h6>
                        </li>
                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.attributes.get('_route') == 'profile' ? 'active' : '' }}\" href=\"{{ path('profile', { studentId: app.user.studentId}) }}\">
                            <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-user text-dark text-sm opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Hồ sơ</span>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
        <div class=\"sidenav-footer mx-3 d-none d-lg-block\">
            <div class=\"card card-plain shadow-none\" id=\"sidenavCard\">
            <img class=\"w-50 mx-auto\" src=\"{{ asset('assets/img/illustrations/icon-documentation-DcItuRq.svg') }}\" alt=\"sidebar_illustration\">
            <div class=\"card-body text-center p-3 w-100 pt-0\">
                <div class=\"docs-info\">
                <h6 class=\"mb-0\">Book Club CTUT</h6>
                <p class=\"text-xs font-weight-bold mb-0\">Management System</p>
                </div>
            </div>
            </div>
        </div>
    </aside>
    <main class=\"main-content position-relative border-radius-lg\">
        <div class=\"container-fluid py-4\">
            {% include 'navbar.html.twig' %}
            {% block body %}{% endblock %}
            {% include 'footer.html.twig' %}
        </div>
    </main>

    <!-- JavaScript Files -->
    <script src=\"{{ asset('assets/js/plugins/chartjs.min-_Dnnqxc.js') }}\" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Toggle sidebar on mobile
            const iconNavbarSidenav = document.getElementById('iconNavbarSidenav');
            const iconSidenav = document.getElementById('iconSidenav');
            const sidenav = document.getElementById('sidenav-main');
            const body = document.body;

            if (iconNavbarSidenav) {
                iconNavbarSidenav.addEventListener('click', function () {
                    if (!body.classList.contains('g-sidenav-pinned')) {
                        body.classList.add('g-sidenav-pinned');
                        sidenav.classList.add('active');
                    } else {
                        body.classList.remove('g-sidenav-pinned');
                        sidenav.classList.remove('active');
                    }
                });
            }

            if (iconSidenav) {
                iconSidenav.addEventListener('click', function () {
                    body.classList.remove('g-sidenav-pinned');
                    sidenav.classList.remove('active');
                });
            }

            // Đóng sidebar khi click bên ngoài trên mobile
            document.addEventListener('click', function (event) {
                if (body.classList.contains('g-sidenav-pinned') && !sidenav.contains(event.target) && !iconNavbarSidenav.contains(event.target)) {
                    body.classList.remove('g-sidenav-pinned');
                    sidenav.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>", "base.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\base.html.twig");
    }
}
