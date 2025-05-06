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

/* home/index.html.twig */
class __TwigTemplate_146b6e75d3d5a4188846d440ebdacacd extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Trang chủ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .bg-gradient-primary {
            background-image: linear-gradient(90deg, #1cb5e0 0%, #000851 100%);
        }
        .bg-gradient-info {
            background-image: linear-gradient(90deg, #36d1c4 0%, #1e90ff 100%);
        }
        .bg-gradient-success {
            background-image: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
        }
        .bg-gradient-warning {
            background-image: linear-gradient(90deg, #f7971e 0%, #ffd200 100%);
        }
        .bg-gradient-danger {
            background-image: linear-gradient(90deg, #ff5f6d 0%, #ffc371 100%);
        }
        .bg-gradient-danger {
            background: linear-gradient(90deg, #ff5f6d 0%, #ffc371 100%);
        }
        .card {
            border-radius: 20px;
        }
        .card-body {
            text-align: center;
        }
        .welcome-section .icon {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 50%;
        }
        .argon-fb-embed {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(44, 62, 80, 0.08), 0 0.5px 1.5px rgba(44, 62, 80, 0.03);
            background: #fff;
            border: 1px solid #e9ecef;
            padding: 0;
        }
        .argon-fb-embed iframe {
            display: block;
            width: 100%;
            min-height: 400px;
            border: none;
            background: #fff;
        }
        .bg-clb {
            background: url('";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-clb.jpg"), "html", null, true);
        yield "') no-repeat center center / cover !important;
            position: relative;
        }
        .bg-clb::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: 1;
        }
        .bg-clb .card-body {
            position: relative;
            z-index: 2; /* Ensure text is above the overlay */
        }
        }
        .p-4 {
            padding: 2rem !important;
        }
        .h-100 {
            height: 100% !important;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "    <div class=\"welcome-section\">
        <h1>";
        // line 82
        yield "Chào mừng đến với BookClub MS";
        yield "</h1>
        <p class=\"text-muted\">";
        // line 83
        yield "Hệ thống quản lý câu lạc bộ sách dành cho sinh viên";
        yield "</p>
        <img src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/dh3.jpg"), "html", null, true);
        yield "\" alt=\"Banner\" class=\"welcome-banner shadow\">
        <div class=\"row\">
            <!-- Cột trái -->
            <div class=\"col-lg-6 mb-4\">
                <div class=\"p-4 bg-white shadow rounded-4 h-100 d-flex flex-column justify-content-between\">
                    <h5 class=\"fw-bold text-primary\">Thông tin nhanh</h5>

                    <div class=\"pb-2 mt-auto\">
                        <a href=\"path('app_home')\" target=\"_blankblank\" class=\"text-decoration-none\">
                            <div class=\"card shadow-sm h-100 bg-clb\">
                                <div class=\"card-body d-flex flex-column justify-content-between p-3\">
                                    <div class=\"d-flex align-items-center justify-content-between text-white text-start\">
                                        <div class=\"numbers\">
                                            <h6 class=\"text-white mb-1 font-weight-bold\">CLB Sinh Viên Yêu Thích Sách</h6>
                                            <p class=\"text-white text-sm mb-0\">Sách là đam mê</p>
                                        </div>
                                        <div class=\"icon icon-shape text-center rounded-circle ms-3\">
                                            <i class=\"fas fa-book text-white fs-3 opacity-10 top-0\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class=\"row\">
                        ";
        // line 110
        $context["quickLinks"] = [["url" => "https://drive.google.com/drive/folders/1rWeBXLT4zFY4GpDyvxcVOCfK8zJx7-TT?usp=drive_link", "target" => "_blank", "style" => "bg-gradient-danger", "icon" => "fas fa-folder-open", "title" => "Minh chứng điểm danh", "description" => "Tổng hợp minh chứng hoạt động"], ["url" => "https://www.facebook.com/profile.php?id=100048446863883", "target" => "_blank", "style" => "bg-gradient-info", "icon" => "fab fa-facebook", "title" => "Fanpage", "description" => "Cập nhật thông tin CLB"], ["url" => "https://zalo.me/g/ufsgge924", "target" => "_blank", "style" => "bg-gradient-success", "icon" => "fab fa-facebook-messenger", "title" => "Group Chat", "description" => "Trao đổi, thông báo nhanh"], ["url" => "mailto:bookclub.ctut@gmail.com", "target" => "_self", "style" => "bg-gradient-warning", "icon" => "fas fa-envelope", "title" => "Mail góp ý", "description" => "bookclub.ctut@gmail.com"]];
        // line 144
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quickLinks"]) || array_key_exists("quickLinks", $context) ? $context["quickLinks"] : (function () { throw new RuntimeError('Variable "quickLinks" does not exist.', 144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 145
            yield "                            <div class=\"col-12 pb-2\">
                                <a href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 146), "html", null, true);
            yield "\" target=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "target", [], "any", false, false, false, 146), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                    <div class=\"card shadow-sm h-100 ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "style", [], "any", false, false, false, 147), "html", null, true);
            yield "\">
                                        <div class=\"card-body d-flex flex-column justify-content-between p-3\">
                                            <div class=\"d-flex align-items-center justify-content-between text-white text-start\">
                                                <div class=\"numbers\">
                                                    <h6 class=\"text-white mb-1 font-weight-bold\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 151), "html", null, true);
            yield "</h6>
                                                    <p class=\"text-white text-sm mb-0\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "description", [], "any", false, false, false, 152), "html", null, true);
            yield "</p>
                                                </div>
                                                <div class=\"icon icon-shape text-center rounded-circle ms-3\">
                                                    <i class=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 155), "html", null, true);
            yield " text-white fs-3 opacity-10 top-0\" aria-hidden=\"true\"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "                    </div>
                    <div class=\"text-center mt-auto\">
                        <p class=\"text-muted mb-0 font-weight-bolder\">Câu lạc bộ sinh viên yêu thích sách</p>
                        <p class=\"text-muted mb-0\">Trường Đại học Kỹ thuật - Công nghệ Cần Thơ</p>
                    </div>
                </div>
            </div>
            <!-- Cột phải -->
            <div class=\"col-lg-6 mb-4\">
                <div class=\"p-4 bg-white shadow rounded-4 h-100 d-flex flex-column justify-content-between\">
                    <h5 class=\"mb-3 fw-bold text-primary\">Hoạt động gần đây từ Fanpage</h5>
                    <div class=\"argon-fb-embed flex-grow-1\">
                        <iframe 
                            src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F100048446863883&tabs=timeline&width=410&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\"
                            width=\"100%\"
                            height=\"500\"
                            style=\"border:none;overflow:hidden;\"
                            scrolling=\"no\"
                            frameborder=\"0\"
                            allowTransparency=\"true\"
                            allow=\"encrypted-media\">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 190
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190)) {
            // line 191
            yield "        ";
        } else {
            // line 192
            yield "            <div class=\"alert alert-warning text-dark\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i> Bạn chưa đăng nhập. Hãy đăng nhập để trải nghiệm đầy đủ hệ thống!
            </div>
            <a href=\"";
            // line 195
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary btn-lg w-100\">
                <i class=\"fab fa-google me-2\"></i> Đăng nhập bằng Google
            </a>
        ";
        }
        // line 199
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 203
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0\" nonce=\"YOUR_NONCE_VALUE\"></script>
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
        return "home/index.html.twig";
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
        return array (  361 => 203,  348 => 202,  336 => 199,  329 => 195,  324 => 192,  321 => 191,  319 => 190,  290 => 163,  276 => 155,  270 => 152,  266 => 151,  259 => 147,  253 => 146,  250 => 145,  245 => 144,  243 => 110,  214 => 84,  210 => 83,  206 => 82,  203 => 81,  190 => 80,  153 => 53,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trang chủ{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .bg-gradient-primary {
            background-image: linear-gradient(90deg, #1cb5e0 0%, #000851 100%);
        }
        .bg-gradient-info {
            background-image: linear-gradient(90deg, #36d1c4 0%, #1e90ff 100%);
        }
        .bg-gradient-success {
            background-image: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
        }
        .bg-gradient-warning {
            background-image: linear-gradient(90deg, #f7971e 0%, #ffd200 100%);
        }
        .bg-gradient-danger {
            background-image: linear-gradient(90deg, #ff5f6d 0%, #ffc371 100%);
        }
        .bg-gradient-danger {
            background: linear-gradient(90deg, #ff5f6d 0%, #ffc371 100%);
        }
        .card {
            border-radius: 20px;
        }
        .card-body {
            text-align: center;
        }
        .welcome-section .icon {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 50%;
        }
        .argon-fb-embed {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(44, 62, 80, 0.08), 0 0.5px 1.5px rgba(44, 62, 80, 0.03);
            background: #fff;
            border: 1px solid #e9ecef;
            padding: 0;
        }
        .argon-fb-embed iframe {
            display: block;
            width: 100%;
            min-height: 400px;
            border: none;
            background: #fff;
        }
        .bg-clb {
            background: url('{{ asset('assets/img/bg-clb.jpg') }}') no-repeat center center / cover !important;
            position: relative;
        }
        .bg-clb::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: 1;
        }
        .bg-clb .card-body {
            position: relative;
            z-index: 2; /* Ensure text is above the overlay */
        }
        }
        .p-4 {
            padding: 2rem !important;
        }
        .h-100 {
            height: 100% !important;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"welcome-section\">
        <h1>{{ 'Chào mừng đến với BookClub MS' }}</h1>
        <p class=\"text-muted\">{{ 'Hệ thống quản lý câu lạc bộ sách dành cho sinh viên' }}</p>
        <img src=\"{{ asset('assets/img/dh3.jpg') }}\" alt=\"Banner\" class=\"welcome-banner shadow\">
        <div class=\"row\">
            <!-- Cột trái -->
            <div class=\"col-lg-6 mb-4\">
                <div class=\"p-4 bg-white shadow rounded-4 h-100 d-flex flex-column justify-content-between\">
                    <h5 class=\"fw-bold text-primary\">Thông tin nhanh</h5>

                    <div class=\"pb-2 mt-auto\">
                        <a href=\"path('app_home')\" target=\"_blankblank\" class=\"text-decoration-none\">
                            <div class=\"card shadow-sm h-100 bg-clb\">
                                <div class=\"card-body d-flex flex-column justify-content-between p-3\">
                                    <div class=\"d-flex align-items-center justify-content-between text-white text-start\">
                                        <div class=\"numbers\">
                                            <h6 class=\"text-white mb-1 font-weight-bold\">CLB Sinh Viên Yêu Thích Sách</h6>
                                            <p class=\"text-white text-sm mb-0\">Sách là đam mê</p>
                                        </div>
                                        <div class=\"icon icon-shape text-center rounded-circle ms-3\">
                                            <i class=\"fas fa-book text-white fs-3 opacity-10 top-0\" aria-hidden=\"true\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class=\"row\">
                        {% set quickLinks = [
                            {
                                'url': 'https://drive.google.com/drive/folders/1rWeBXLT4zFY4GpDyvxcVOCfK8zJx7-TT?usp=drive_link',
                                'target': '_blank',
                                'style': 'bg-gradient-danger',
                                'icon': 'fas fa-folder-open',
                                'title': 'Minh chứng điểm danh',
                                'description': 'Tổng hợp minh chứng hoạt động'
                            },
                            {
                                'url': 'https://www.facebook.com/profile.php?id=100048446863883',
                                'target': '_blank',
                                'style': 'bg-gradient-info',
                                'icon': 'fab fa-facebook',
                                'title': 'Fanpage',
                                'description': 'Cập nhật thông tin CLB'
                            },
                            {
                                'url': 'https://zalo.me/g/ufsgge924',
                                'target': '_blank',
                                'style': 'bg-gradient-success',
                                'icon': 'fab fa-facebook-messenger',
                                'title': 'Group Chat',
                                'description': 'Trao đổi, thông báo nhanh'
                            },
                            {
                                'url': 'mailto:bookclub.ctut@gmail.com',
                                'target': '_self',
                                'style': 'bg-gradient-warning',
                                'icon': 'fas fa-envelope',
                                'title': 'Mail góp ý',
                                'description': 'bookclub.ctut@gmail.com'
                            }
                        ] %}
                        {% for link in quickLinks %}
                            <div class=\"col-12 pb-2\">
                                <a href=\"{{ link.url }}\" target=\"{{ link.target }}\" class=\"text-decoration-none\">
                                    <div class=\"card shadow-sm h-100 {{ link.style }}\">
                                        <div class=\"card-body d-flex flex-column justify-content-between p-3\">
                                            <div class=\"d-flex align-items-center justify-content-between text-white text-start\">
                                                <div class=\"numbers\">
                                                    <h6 class=\"text-white mb-1 font-weight-bold\">{{ link.title }}</h6>
                                                    <p class=\"text-white text-sm mb-0\">{{ link.description }}</p>
                                                </div>
                                                <div class=\"icon icon-shape text-center rounded-circle ms-3\">
                                                    <i class=\"{{ link.icon }} text-white fs-3 opacity-10 top-0\" aria-hidden=\"true\"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"text-center mt-auto\">
                        <p class=\"text-muted mb-0 font-weight-bolder\">Câu lạc bộ sinh viên yêu thích sách</p>
                        <p class=\"text-muted mb-0\">Trường Đại học Kỹ thuật - Công nghệ Cần Thơ</p>
                    </div>
                </div>
            </div>
            <!-- Cột phải -->
            <div class=\"col-lg-6 mb-4\">
                <div class=\"p-4 bg-white shadow rounded-4 h-100 d-flex flex-column justify-content-between\">
                    <h5 class=\"mb-3 fw-bold text-primary\">Hoạt động gần đây từ Fanpage</h5>
                    <div class=\"argon-fb-embed flex-grow-1\">
                        <iframe 
                            src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F100048446863883&tabs=timeline&width=410&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\"
                            width=\"100%\"
                            height=\"500\"
                            style=\"border:none;overflow:hidden;\"
                            scrolling=\"no\"
                            frameborder=\"0\"
                            allowTransparency=\"true\"
                            allow=\"encrypted-media\">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        
        {% if app.user %}
        {% else %}
            <div class=\"alert alert-warning text-dark\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i> Bạn chưa đăng nhập. Hãy đăng nhập để trải nghiệm đầy đủ hệ thống!
            </div>
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary btn-lg w-100\">
                <i class=\"fab fa-google me-2\"></i> Đăng nhập bằng Google
            </a>
        {% endif %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <div id=\"fb-root\"></div>
    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0\" nonce=\"YOUR_NONCE_VALUE\"></script>
{% endblock %}", "home/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\home\\index.html.twig");
    }
}
