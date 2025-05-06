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

/* z-old/login/new.html.twig */
class __TwigTemplate_fc3b8b460c62450703c9a2fba0773986 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/login/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/login/new.html.twig"));

        // line 2
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 20
        yield "
";
        // line 21
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
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

        // line 3
        yield "  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/apple-icon.png"), "html", null, true);
        yield "\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/img/favicon.png"), "html", null, true);
        yield "\">
  <title>
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 9
        yield "  </title>
  <!--     Fonts and icons     -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
  <!-- Nucleo Icons -->
  <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
  <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/styles/argon-dashboard.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        yield "Đăng ký";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
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

        // line 22
        yield "  <div class=\"container position-sticky z-index-sticky top-0\">
      <div class=\"row\">
      <div class=\"col-12\">
          <!-- Navbar -->
          <nav class=\"navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4\">
          <div class=\"container-fluid\">
              <a class=\"navbar-brand font-weight-bolder ms-lg-0 ms-3 \" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
              BOOK CLUB CTUT
              </a>
              <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon mt-2\">
                  <span class=\"navbar-toggler-bar bar1\"></span>
                  <span class=\"navbar-toggler-bar bar2\"></span>
                  <span class=\"navbar-toggler-bar bar3\"></span>
              </span>
              </button>
              <div class=\"collapse navbar-collapse\" id=\"navigation\">
              <ul class=\"navbar-nav mx-auto\">
                  <li class=\"nav-item\">
                  <a class=\"nav-link d-flex align-items-center me-2 active\" aria-current=\"page\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">
                      <i class=\"fa fa-chart-pie opacity-6 text-dark me-1\"></i>
                      Dashboard
                  </a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">
                      <i class=\"fa fa-user opacity-6 text-dark me-1\"></i>
                      Profile
                  </a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        yield "\">
                      <i class=\"fas fa-user-circle opacity-6 text-dark me-1\"></i>
                      Đăng ký
                  </a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_index");
        yield "\">
                      <i class=\"fas fa-key opacity-6 text-dark me-1\"></i>
                      Đăng nhập
                  </a>
                  </li>
              </ul>
              <ul class=\"navbar-nav d-lg-block d-none\">
                  <li class=\"nav-item\">
                  <a href=\"https://ctuet.edu.vn\" class=\"btn btn-sm mb-0 me-1 btn-primary\">CTUT HOMEPAGE</a>
                  </li>
              </ul>
              </div>
          </div>
          </nav>
          <!-- End Navbar -->
      </div>
      </div>
  </div>
  <main class=\"main-content  mt-0\">
    <div class=\"page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg\" style=\"background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;\">
      <span class=\"mask bg-gradient-dark opacity-6\"></span>
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-5 text-center mx-auto\">
            <h1 class=\"text-white mb-2 mt-5\">Xin chào!</h1>
            <p class=\"text-lead text-white\">Tạo tài khoản để có thể xem được thông tin mới nhất.</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center\">
        <div class=\"col-xl-4 col-lg-5 col-md-7 mx-auto\">
          <div class=\"card z-index-0\">
            <div class=\"card-body\">
              <form role=\"form\">
                <div class=\"mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Họ và tên\" aria-label=\"Name\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Email\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Tên đăng nhập\" aria-label=\"Email\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"password\" class=\"form-control\" placeholder=\"Mật khảu\" aria-label=\"Password\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"password\" class=\"form-control\" placeholder=\"Xác nhận mật khẩu\" aria-label=\"Password\">
                </div>
                <div class=\"form-check form-check-info text-start\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\" checked>
                  <label class=\"form-check-label\" for=\"flexCheckDefault\">
                    Tôi đồng ý với <a href=\"https://thuvienphapluat.vn/van-ban/Cong-nghe-thong-tin/Nghi-dinh-13-2023-ND-CP-bao-ve-du-lieu-ca-nhan-465185.aspx\" class=\"text-dark font-weight-bolder\">Điểu khoản và điều kiện</a>
                  </label>
                </div>
                <div class=\"text-center\">
                  <button type=\"button\" class=\"btn bg-gradient-dark w-100 my-4 mb-2\">Đăng nhập</button>
                </div>
              </form>
              <p class=\"text-sm mt-3 mb-0\">Bạn đã có tài khoản? | <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_index");
        yield "\" class=\"text-dark font-weight-bolder\">Đăng nhập</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 126
        yield Twig\Extension\CoreExtension::include($this->env, $context, "footer.html.twig");
        yield "
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
        return "z-old/login/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  279 => 126,  270 => 120,  206 => 59,  197 => 53,  188 => 47,  179 => 41,  163 => 28,  155 => 22,  142 => 21,  119 => 8,  106 => 18,  95 => 9,  93 => 8,  88 => 6,  84 => 5,  80 => 3,  67 => 2,  56 => 21,  53 => 20,  51 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %} #}
{% block head %}
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('../assets/img/apple-icon.png') }}\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('../assets/img/favicon.png') }}\">
  <title>
    {% block title %}Đăng ký{% endblock %}
  </title>
  <!--     Fonts and icons     -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
  <!-- Nucleo Icons -->
  <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css\" rel=\"stylesheet\" />
  <link href=\"https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css\" rel=\"stylesheet\" />
  <!-- Font Awesome Icons -->
  <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
  <!-- CSS Files -->
  <link id=\"pagestyle\" href=\"{{ asset('../assets/styles/argon-dashboard.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
  <div class=\"container position-sticky z-index-sticky top-0\">
      <div class=\"row\">
      <div class=\"col-12\">
          <!-- Navbar -->
          <nav class=\"navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4\">
          <div class=\"container-fluid\">
              <a class=\"navbar-brand font-weight-bolder ms-lg-0 ms-3 \" href=\"{{ path('home') }}\">
              BOOK CLUB CTUT
              </a>
              <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon mt-2\">
                  <span class=\"navbar-toggler-bar bar1\"></span>
                  <span class=\"navbar-toggler-bar bar2\"></span>
                  <span class=\"navbar-toggler-bar bar3\"></span>
              </span>
              </button>
              <div class=\"collapse navbar-collapse\" id=\"navigation\">
              <ul class=\"navbar-nav mx-auto\">
                  <li class=\"nav-item\">
                  <a class=\"nav-link d-flex align-items-center me-2 active\" aria-current=\"page\" href=\"{{ path('home') }}\">
                      <i class=\"fa fa-chart-pie opacity-6 text-dark me-1\"></i>
                      Dashboard
                  </a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"{{ path('profile') }}\">
                      <i class=\"fa fa-user opacity-6 text-dark me-1\"></i>
                      Profile
                  </a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"{{ path('registration') }}\">
                      <i class=\"fas fa-user-circle opacity-6 text-dark me-1\"></i>
                      Đăng ký
                  </a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link me-2\" href=\"{{ path('app_login_index') }}\">
                      <i class=\"fas fa-key opacity-6 text-dark me-1\"></i>
                      Đăng nhập
                  </a>
                  </li>
              </ul>
              <ul class=\"navbar-nav d-lg-block d-none\">
                  <li class=\"nav-item\">
                  <a href=\"https://ctuet.edu.vn\" class=\"btn btn-sm mb-0 me-1 btn-primary\">CTUT HOMEPAGE</a>
                  </li>
              </ul>
              </div>
          </div>
          </nav>
          <!-- End Navbar -->
      </div>
      </div>
  </div>
  <main class=\"main-content  mt-0\">
    <div class=\"page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg\" style=\"background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;\">
      <span class=\"mask bg-gradient-dark opacity-6\"></span>
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-5 text-center mx-auto\">
            <h1 class=\"text-white mb-2 mt-5\">Xin chào!</h1>
            <p class=\"text-lead text-white\">Tạo tài khoản để có thể xem được thông tin mới nhất.</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      <div class=\"row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center\">
        <div class=\"col-xl-4 col-lg-5 col-md-7 mx-auto\">
          <div class=\"card z-index-0\">
            <div class=\"card-body\">
              <form role=\"form\">
                <div class=\"mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Họ và tên\" aria-label=\"Name\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Email\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Tên đăng nhập\" aria-label=\"Email\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"password\" class=\"form-control\" placeholder=\"Mật khảu\" aria-label=\"Password\">
                </div>
                <div class=\"mb-3\">
                  <input type=\"password\" class=\"form-control\" placeholder=\"Xác nhận mật khẩu\" aria-label=\"Password\">
                </div>
                <div class=\"form-check form-check-info text-start\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\" checked>
                  <label class=\"form-check-label\" for=\"flexCheckDefault\">
                    Tôi đồng ý với <a href=\"https://thuvienphapluat.vn/van-ban/Cong-nghe-thong-tin/Nghi-dinh-13-2023-ND-CP-bao-ve-du-lieu-ca-nhan-465185.aspx\" class=\"text-dark font-weight-bolder\">Điểu khoản và điều kiện</a>
                  </label>
                </div>
                <div class=\"text-center\">
                  <button type=\"button\" class=\"btn bg-gradient-dark w-100 my-4 mb-2\">Đăng nhập</button>
                </div>
              </form>
              <p class=\"text-sm mt-3 mb-0\">Bạn đã có tài khoản? | <a href=\"{{ path('app_login_index') }}\" class=\"text-dark font-weight-bolder\">Đăng nhập</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{ include ('footer.html.twig') }}
  </main>
{% endblock %}
", "z-old/login/new.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\login\\new.html.twig");
    }
}
