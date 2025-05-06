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

/* security/login.html.twig */
class __TwigTemplate_f5e124a5b1fe8c6b3f05239199c8820d extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 127
        yield "
";
        // line 128
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
        yield "    <title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- Fonts and icons -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon-_mA87V4.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-_mA87V4.png"), "html", null, true);
        yield "\">
    <!-- Fonts and icons -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    ";
        // line 13
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
    <!-- CSS Files -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
    <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link id=\"pagestyle\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/styles/argon-dashboard-SIGT4pJ.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-iN96iui.png"), "html", null, true);
        yield "') center/cover;
            opacity: 0.1;
            z-index: 0;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }
        .login-header {
            text-align: center;
            padding: 2.5rem 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        }
        .login-logo {
            width: 120px;
            height: auto;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }
        .login-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #344767;
            margin-bottom: 0.5rem;
        }
        .login-subtitle {
            color: #67748e;
            font-size: 0.875rem;
        }
        .google-btn {
            background: #fff;
            color: #344767;
            border: 1px solid #e9ecef;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .google-btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .google-btn i {
            color: #ea4335;
            font-size: 1.25rem;
            margin-right: 0.75rem;
        }
        .back-home {
            color: #344767;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .back-home:hover {
            color: #667eea;
        }
        .back-home i {
            margin-right: 0.5rem;
        }
        .alert {
            border: none;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
        .alert-danger {
            background: rgba(234, 67, 53, 0.1);
            color: #ea4335;
        }
        .alert-success {
            background: rgba(52, 199, 89, 0.1);
            color: #34c759;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 2
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

        yield "Đăng nhập";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
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

        // line 129
        yield "    <div class=\"login-container\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 col-md-7\">
                    <div class=\"card login-card\">
                        <div class=\"login-header\">
                            <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-ct-dark-mn76con.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"login-logo\">
                            <h4 class=\"login-title\">Book Club CTUT</h4>
                            <p class=\"login-subtitle\">Hệ thống quản lý CLB SV Yêu Thích Sách</p>
                        </div>
                        
                        <div class=\"card-body\">
                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "flashes", ["success"], "method", false, false, false, 141));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 142
            yield "                                <div class=\"alert alert-success\">
                                    <i class=\"fas fa-check-circle me-2\"></i>
                                    ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "
                            ";
        // line 148
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 148, $this->source); })())) {
            // line 149
            yield "                                <div class=\"alert alert-danger\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                                    ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 151, $this->source); })()), "messageKey", [], "any", false, false, false, 151), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 151, $this->source); })()), "messageData", [], "any", false, false, false, 151), "security"), "html", null, true);
            yield "
                                </div>
                            ";
        }
        // line 154
        yield "
                            ";
        // line 155
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "session", [], "any", false, false, false, 155), "get", ["login_error"], "method", false, false, false, 155)) {
            // line 156
            yield "                                <div class=\"alert alert-danger\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                                    ";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "session", [], "any", false, false, false, 158), "get", ["login_error"], "method", false, false, false, 158), "html", null, true);
            yield "
                                </div>
                                ";
            // line 160
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "session", [], "any", false, false, false, 160), "remove", ["login_error"], "method", false, false, false, 160);
            // line 161
            yield "                            ";
        }
        // line 162
        yield "
                            ";
        // line 163
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163)) {
            // line 164
            yield "                                <div class=\"alert alert-success\">
                                    <i class=\"fas fa-check-circle me-2\"></i>
                                    Bạn đã đăng nhập với tài khoản ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "studentId", [], "any", false, false, false, 166), "html", null, true);
            yield "
                                </div>
                                <div class=\"text-center\">
                                    <a href=\"";
            // line 169
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            yield "\" class=\"btn btn-outline-danger btn-sm\">
                                        <i class=\"fas fa-sign-out-alt me-2\"></i>Đăng xuất
                                    </a>
                                    <a href=\"";
            // line 172
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"fas fa-home me-2\"></i>Về trang chủ
                                    </a>
                                </div>
                            ";
        } else {
            // line 177
            yield "                                <div class=\"text-center\">
                                    <a href=\"";
            // line 178
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google_start");
            yield "\" class=\"btn google-btn btn-lg w-100 mb-0\">
                                        <i class=\"fab fa-google me-2\"></i>Đăng nhập bằng Google
                                    </a>
                                </div>
                            ";
        }
        // line 183
        yield "                        </div>

                        <div class=\"card-footer text-center py-1\">
                            <div class=\"text-center py-2\">
                                <a href=\"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"back-home\">
                                    <i class=\"fas fa-arrow-left\"></i>Quay lại trang chủ
                                </a>
                            </div>
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
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  380 => 187,  374 => 183,  366 => 178,  363 => 177,  355 => 172,  349 => 169,  343 => 166,  339 => 164,  337 => 163,  334 => 162,  331 => 161,  329 => 160,  324 => 158,  320 => 156,  318 => 155,  315 => 154,  309 => 151,  305 => 149,  303 => 148,  300 => 147,  291 => 144,  287 => 142,  283 => 141,  274 => 135,  266 => 129,  253 => 128,  230 => 2,  129 => 37,  108 => 19,  100 => 13,  92 => 7,  88 => 6,  80 => 2,  67 => 1,  56 => 128,  53 => 127,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
    <title>{% block title %}Đăng nhập{% endblock %}</title>
    <!-- Fonts and icons -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('assets/img/apple-icon-_mA87V4.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon-_mA87V4.png') }}\">
    <!-- Fonts and icons -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\" />
    <!-- Font Awesome Icons -->
    {# <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\" defer></script> #}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css\">
    <!-- CSS Files -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
    <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
    <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
    <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
    <link id=\"pagestyle\" href=\"{{ asset('assets/styles/argon-dashboard-SIGT4pJ.css') }}\" rel=\"stylesheet\" />
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('{{ asset('assets/img/bg-iN96iui.png') }}') center/cover;
            opacity: 0.1;
            z-index: 0;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }
        .login-header {
            text-align: center;
            padding: 2.5rem 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        }
        .login-logo {
            width: 120px;
            height: auto;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }
        .login-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #344767;
            margin-bottom: 0.5rem;
        }
        .login-subtitle {
            color: #67748e;
            font-size: 0.875rem;
        }
        .google-btn {
            background: #fff;
            color: #344767;
            border: 1px solid #e9ecef;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .google-btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .google-btn i {
            color: #ea4335;
            font-size: 1.25rem;
            margin-right: 0.75rem;
        }
        .back-home {
            color: #344767;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .back-home:hover {
            color: #667eea;
        }
        .back-home i {
            margin-right: 0.5rem;
        }
        .alert {
            border: none;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
        .alert-danger {
            background: rgba(234, 67, 53, 0.1);
            color: #ea4335;
        }
        .alert-success {
            background: rgba(52, 199, 89, 0.1);
            color: #34c759;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"login-container\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-5 col-md-7\">
                    <div class=\"card login-card\">
                        <div class=\"login-header\">
                            <img src=\"{{ asset('assets/img/logo-ct-dark-mn76con.png') }}\" alt=\"Logo\" class=\"login-logo\">
                            <h4 class=\"login-title\">Book Club CTUT</h4>
                            <p class=\"login-subtitle\">Hệ thống quản lý CLB SV Yêu Thích Sách</p>
                        </div>
                        
                        <div class=\"card-body\">
                            {% for message in app.flashes('success') %}
                                <div class=\"alert alert-success\">
                                    <i class=\"fas fa-check-circle me-2\"></i>
                                    {{ message }}
                                </div>
                            {% endfor %}

                            {% if error %}
                                <div class=\"alert alert-danger\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                                    {{ error.messageKey|trans(error.messageData, 'security') }}
                                </div>
                            {% endif %}

                            {% if app.session.get('login_error') %}
                                <div class=\"alert alert-danger\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                                    {{ app.session.get('login_error') }}
                                </div>
                                {% do app.session.remove('login_error') %}
                            {% endif %}

                            {% if app.user %}
                                <div class=\"alert alert-success\">
                                    <i class=\"fas fa-check-circle me-2\"></i>
                                    Bạn đã đăng nhập với tài khoản {{ app.user.studentId }}
                                </div>
                                <div class=\"text-center\">
                                    <a href=\"{{ path('logout') }}\" class=\"btn btn-outline-danger btn-sm\">
                                        <i class=\"fas fa-sign-out-alt me-2\"></i>Đăng xuất
                                    </a>
                                    <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-primary btn-sm\">
                                        <i class=\"fas fa-home me-2\"></i>Về trang chủ
                                    </a>
                                </div>
                            {% else %}
                                <div class=\"text-center\">
                                    <a href=\"{{ path('connect_google_start') }}\" class=\"btn google-btn btn-lg w-100 mb-0\">
                                        <i class=\"fab fa-google me-2\"></i>Đăng nhập bằng Google
                                    </a>
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"card-footer text-center py-1\">
                            <div class=\"text-center py-2\">
                                <a href=\"{{ path('app_home') }}\" class=\"back-home\">
                                    <i class=\"fas fa-arrow-left\"></i>Quay lại trang chủ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/login.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\security\\login.html.twig");
    }
}
