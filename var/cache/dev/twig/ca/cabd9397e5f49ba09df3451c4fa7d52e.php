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

/* security/error.html.twig */
class __TwigTemplate_82d99a286aff0399ea161df74d924d17 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/error.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 21
        yield "
";
        // line 22
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon-_mA87V4.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-_mA87V4.png"), "html", null, true);
        yield "\">
    <title>Không Tìm Thấy Trang</title>
    <!-- Fonts and icons -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\" defer></script>
    <!-- CSS Files -->
    <link id=\"pagestyle\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/argon-dashboard-SIGT4pJ.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <style>
        .sys-bg {
            background-image: url('";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-iN96iui.png"), "html", null, true);
        yield "');
            background-size: cover;
            background-position: center;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "
    <div class=\"min-height-300 bg-gradient-primary position-absolute w-100\" style=\"opacity: 0.8;\"></div>
    <main class=\"main-content position-relative border-radius-lg\">
        <div class=\"min-vh-100 sys-bg\">
            <div class=\"container h-100\">
                <div class=\"row h-100 justify-content-center align-items-center\">
                    <div class=\"col-lg-6 col-md-8 text-center\">
                        <div class=\"card card-plain shadow-lg bg-white border-radius-xl p-4\">
                            <!-- SVG cho số 404 -->
                            <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/error.png"), "html", null, true);
        yield "\" class=\"w-50 mx-auto mb-4\" alt=\"404\" />
                            <h2 class=\"font-weight-bolder text-dark mb-3\">Ôi! Không Tìm Thấy Trang</h2>
                            ";
        // line 34
        if ((isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 34, $this->source); })())) {
            // line 35
            yield "                                <div class=\"alert alert-danger text-center\">
                                    ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "
                                </div>
                            ";
        }
        // line 39
        yield "                            <p class=\"text-muted mb-4\">Liên hệ trực tiếp với Ban Chủ Nhiệm CLB để biết thêm thông tin về tài khoản của bạn</p>
                            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-primary btn-lg\">Quay Về Trang Chủ</a>
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
        return "security/error.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 40,  160 => 39,  154 => 36,  151 => 35,  149 => 34,  144 => 32,  133 => 23,  120 => 22,  103 => 15,  97 => 12,  87 => 5,  83 => 4,  79 => 2,  66 => 1,  55 => 22,  52 => 21,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('assets/img/apple-icon-_mA87V4.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon-_mA87V4.png') }}\">
    <title>Không Tìm Thấy Trang</title>
    <!-- Fonts and icons -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\" defer></script>
    <!-- CSS Files -->
    <link id=\"pagestyle\" href=\"{{ asset('assets/styles/argon-dashboard-SIGT4pJ.css') }}\" rel=\"stylesheet\" />
    <style>
        .sys-bg {
            background-image: url('{{ asset('assets/img/bg-iN96iui.png') }}');
            background-size: cover;
            background-position: center;
        }
    </style>
{% endblock %}

{% block body %}

    <div class=\"min-height-300 bg-gradient-primary position-absolute w-100\" style=\"opacity: 0.8;\"></div>
    <main class=\"main-content position-relative border-radius-lg\">
        <div class=\"min-vh-100 sys-bg\">
            <div class=\"container h-100\">
                <div class=\"row h-100 justify-content-center align-items-center\">
                    <div class=\"col-lg-6 col-md-8 text-center\">
                        <div class=\"card card-plain shadow-lg bg-white border-radius-xl p-4\">
                            <!-- SVG cho số 404 -->
                            <img src=\"{{ asset('assets/img/error.png') }}\" class=\"w-50 mx-auto mb-4\" alt=\"404\" />
                            <h2 class=\"font-weight-bolder text-dark mb-3\">Ôi! Không Tìm Thấy Trang</h2>
                            {% if login_error %}
                                <div class=\"alert alert-danger text-center\">
                                    {{ login_error }}
                                </div>
                            {% endif %}
                            <p class=\"text-muted mb-4\">Liên hệ trực tiếp với Ban Chủ Nhiệm CLB để biết thêm thông tin về tài khoản của bạn</p>
                            <a href=\"{{ path('app_home') }}\" class=\"btn btn-primary btn-lg\">Quay Về Trang Chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
{% endblock %}", "security/error.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\security\\error.html.twig");
    }
}
