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

/* security/student_id.html.twig */
class __TwigTemplate_51e7b1acbdcafedd5d7465eaa7767347 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/student_id.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/student_id.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon-_mA87V4.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-_mA87V4.png"), "html", null, true);
        yield "\">
    <title>Book Club CTUT - Nhập mã sinh viên</title>
    <!-- Fonts and icons -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\" defer></script>
    <!-- CSS Files -->
    <link id=\"pagestyle\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/argon-dashboard-SIGT4pJ.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
</head>

<body class=\"bg-gray-200\">
    <main class=\"main-content mt-0\">
        <div class=\"page-header align-items-start min-vh-100\" style=\"background-image: url('";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-iN96iui.png"), "html", null, true);
        yield "'); background-size: cover; background-position: center;\">
            <span class=\"mask bg-gradient-dark opacity-6\"></span>
            <div class=\"container my-auto\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-8 col-12 mx-auto\">
                        <div class=\"card z-index-0 fadeIn3 fadeInBottom\">
                            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                                <div class=\"bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1\">
                                    <h4 class=\"text-white font-weight-bolder text-center mt-2 mb-0\">Nhập mã sinh viên</h4>
                                    <div class=\"row mt-3\">
                                        <div class=\"col-12 text-center\">
                                            <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark-mn76con.png"), "html", null, true);
        yield "\" width=\"40px\" height=\"40px\" alt=\"logo\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 37
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 37, $this->source); })())) {
            // line 38
            yield "                                    <div class=\"alert alert-danger text-white\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "</div>
                                ";
        }
        // line 40
        yield "
                                <p>Vui lòng nhập mã sinh viên của bạn để hoàn tất đăng nhập.</p>

                                <form role=\"form\" method=\"post\" class=\"text-start\">
                                    <div class=\"input-group input-group-outline my-3\">
                                        <label class=\"form-label\">Mã sinh viên</label>
                                        <input type=\"text\" name=\"student_id\" class=\"form-control\" required autofocus>
                                    </div>
                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn bg-gradient-primary w-100 my-4 mb-2\">Xác nhận</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/student_id.html.twig";
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
        return array (  109 => 40,  103 => 38,  101 => 37,  92 => 31,  78 => 20,  70 => 15,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('assets/img/apple-icon-_mA87V4.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon-_mA87V4.png') }}\">
    <title>Book Club CTUT - Nhập mã sinh viên</title>
    <!-- Fonts and icons -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\" defer></script>
    <!-- CSS Files -->
    <link id=\"pagestyle\" href=\"{{ asset('assets/styles/argon-dashboard-SIGT4pJ.css') }}\" rel=\"stylesheet\" />
</head>

<body class=\"bg-gray-200\">
    <main class=\"main-content mt-0\">
        <div class=\"page-header align-items-start min-vh-100\" style=\"background-image: url('{{ asset('assets/img/bg-iN96iui.png') }}'); background-size: cover; background-position: center;\">
            <span class=\"mask bg-gradient-dark opacity-6\"></span>
            <div class=\"container my-auto\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-8 col-12 mx-auto\">
                        <div class=\"card z-index-0 fadeIn3 fadeInBottom\">
                            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                                <div class=\"bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1\">
                                    <h4 class=\"text-white font-weight-bolder text-center mt-2 mb-0\">Nhập mã sinh viên</h4>
                                    <div class=\"row mt-3\">
                                        <div class=\"col-12 text-center\">
                                            <img src=\"{{ asset('assets/img/logo-ct-dark-mn76con.png') }}\" width=\"40px\" height=\"40px\" alt=\"logo\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                {% if error %}
                                    <div class=\"alert alert-danger text-white\">{{ error }}</div>
                                {% endif %}

                                <p>Vui lòng nhập mã sinh viên của bạn để hoàn tất đăng nhập.</p>

                                <form role=\"form\" method=\"post\" class=\"text-start\">
                                    <div class=\"input-group input-group-outline my-3\">
                                        <label class=\"form-label\">Mã sinh viên</label>
                                        <input type=\"text\" name=\"student_id\" class=\"form-control\" required autofocus>
                                    </div>
                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn bg-gradient-primary w-100 my-4 mb-2\">Xác nhận</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>", "security/student_id.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\security\\student_id.html.twig");
    }
}
