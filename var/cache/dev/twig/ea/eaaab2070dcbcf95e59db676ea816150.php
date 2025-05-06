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

/* dashboard/index.html.twig */
class __TwigTemplate_20fa35ccd2341b530941529485295a7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        yield "Dashboard";
        
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
        yield "
<div class=\"container-fluid py-4\">
    <!-- Chào user -->
    ";
        // line 20
        yield "
    <!-- Thống kê nhanh -->
    <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_index");
        yield "\" class=\"text-decoration-none\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Số dư quỹ</p>
                                    <h5 class=\"font-weight-bolder mb-0\">
                                        ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatCurrency(Twig\Extension\CoreExtension::round((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 32, $this->source); })()), 0, "floor"), "VND"), "html", null, true);
        yield "
                                    </h5>
                                    <div class=\"d-flex align-items-center mt-2\">
                                        <span class=\"text-success text-sm me-2\">
                                            <i class=\"fas fa-arrow-up\"></i> ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatCurrency(Twig\Extension\CoreExtension::round((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 36, $this->source); })()), 0, "floor"), "VND"), "html", null, true);
        yield "
                                        </span>
                                        <span class=\"text-danger text-sm\">
                                            <i class=\"fas fa-arrow-down\"></i> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatCurrency(Twig\Extension\CoreExtension::round((isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 39, $this->source); })()), 0, "floor"), "VND"), "html", null, true);
        yield "
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle\">
                                    <i class=\"fas fa-money-bill-wave text-lg opacity-10\" aria-hidden=\"true\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        yield "\" class=\"text-decoration-none\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Thành viên</p>
                                    <h5 class=\"font-weight-bolder mb-0\">
                                        ";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalMembers"]) || array_key_exists("totalMembers", $context) ? $context["totalMembers"] : (function () { throw new RuntimeError('Variable "totalMembers" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "
                                    </h5>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle\">
                                    <i class=\"fas fa-users text-lg opacity-10\" aria-hidden=\"true\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
            <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_index");
        yield "\" class=\"text-decoration-none\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Hoạt động mới</p>
                                    <h5 class=\"font-weight-bolder mb-0\">
                                        +";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newActivities"]) || array_key_exists("newActivities", $context) ? $context["newActivities"] : (function () { throw new RuntimeError('Variable "newActivities" does not exist.', 86, $this->source); })()), "html", null, true);
        yield "
                                    </h5>
                                    <p class=\"text-sm text-muted mb-0\">Tổng: ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalActivities"]) || array_key_exists("totalActivities", $context) ? $context["totalActivities"] : (function () { throw new RuntimeError('Variable "totalActivities" does not exist.', 88, $this->source); })()), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-success shadow-success text-center rounded-circle\">
                                    <i class=\"fas fa-calendar-alt text-lg opacity-10\" aria-hidden=\"true\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-xl-3 col-sm-6\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-body p-3\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"numbers\">
                                <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Lượt tham gia</p>
                                <h5 class=\"font-weight-bolder mb-0\">
                                    ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["participationCount"]) || array_key_exists("participationCount", $context) ? $context["participationCount"] : (function () { throw new RuntimeError('Variable "participationCount" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "
                                </h5>
                            </div>
                        </div>
                        <div class=\"col-4 text-end\">
                            <div class=\"icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle\">
                                <i class=\"fas fa-user-friends text-lg opacity-10\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Biểu đồ và carousel -->
    <div class=\"row mt-4\">
        <div class=\"col-lg-7 mb-lg-0 mb-4\">
            <div class=\"card z-index-2 h-100 shadow-sm\">
                <div class=\"card-header bg-transparent\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h6 class=\"text-capitalize mb-0\">Biến động quỹ</h6>
                        <div class=\"btn-group\">
                            <select id=\"timeRange\" class=\"form-select form-select-sm\">
                                <option value=\"7\">7 ngày gần nhất</option>
                                <option value=\"30\">30 ngày gần nhất</option>
                                <option value=\"90\">3 tháng gần nhất</option>
                                <option value=\"180\">6 tháng gần nhất</option>
                                <option value=\"365\">1 năm gần nhất</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"card-body p-3\">
                    <div class=\"chart\" style=\"position: relative; height: 300px;\">
                        <canvas id=\"fundChart\" style=\"width: 100%; height: 100%;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-5\">
            <div class=\"card card-carousel overflow-hidden h-100 p-0 shadow-sm\">
                <div id=\"carouselExampleCaptions\" class=\"carousel slide h-100\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-inner border-radius-lg h-100\">
                        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentActivities"]) || array_key_exists("recentActivities", $context) ? $context["recentActivities"] : (function () { throw new RuntimeError('Variable "recentActivities" does not exist.', 153, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 154
            yield "                            <div class=\"carousel-item h-100 ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 154)) ? ("active") : (""));
            yield "\">
                                <img src=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/activities/" . CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 155))), "html", null, true);
            yield "\" class=\"d-block w-100 h-100 object-fit-cover\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 155), "html", null, true);
            yield "\">
                                <div class=\"carousel-caption d-none d-md-block bottom-0 text-start start-0 w-100\">
                                    <a href=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activities_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                        <div class=\"bg-dark bg-gradient-primary p-3\">
                                            <div class=\"icon icon-shape icon-sm bg-white text-center border-radius-md mb-3\">
                                                <i class=\"fas fa-calendar-alt text-dark opacity-10\"></i>
                                            </div>
                                            <h5 class=\"text-white mb-1\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 162), "html", null, true);
            yield "</h5>
                                            <p class=\"text-white\">";
            // line 163
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 163)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 163), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 163), "html", null, true)));
            yield "</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 168
        if (!$context['_iterated']) {
            // line 169
            yield "                            <div class=\"carousel-item h-100 active\">
                                <img src=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg-laPfGiy.jpg"), "html", null, true);
            yield "\" class=\"d-block w-100 h-100 object-fit-cover\" alt=\"No activities\">
                                <div class=\"carousel-caption\">
                                    <div class=\"bg-dark bg-opacity-75 p-3 rounded\">
                                        <h5 class=\"text-white mb-1\">Chưa có hoạt động</h5>
                                        <p class=\"mb-0\">Không có hoạt động nào để hiển thị.</p>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "                    </div>
                    <button class=\"carousel-control-prev w-5 me-3 bg-gradient-primary\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next w-5 me-3 bg-gradient-primary\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bảng đề xuất -->
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Đề xuất đang chờ xử lý</h6>
                        <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_index");
        yield "\" class=\"btn btn-sm btn-primary mb-0\">Xem tất cả</a>
                    </div>
                </div>
                <div class=\"card-body px-0 pt-0 pb-2\">
                    <div class=\"table-responsive p-0 px-3\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tiêu đề</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người đề xuất</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày tạo</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pendingProposals"]) || array_key_exists("pendingProposals", $context) ? $context["pendingProposals"] : (function () { throw new RuntimeError('Variable "pendingProposals" does not exist.', 215, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
            // line 216
            yield "                                    <tr>
                                        <td>
                                            <div class=\"d-flex px-2 py-1\">
                                                <div class=\"d-flex flex-column justify-content-center\">
                                                    ";
            // line 220
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "type", [], "any", false, false, false, 220) == "edit_profile")) {
                // line 221
                yield "                                                        <h6 class=\"mb-0 text-sm\">
                                                            <span class=\"badge bg-primary\">Chỉnh sửa thông tin</span>
                                                        </h6>
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 224
$context["proposal"], "type", [], "any", false, false, false, 224) == "general")) {
                // line 225
                yield "                                                        <h6 class=\"mb-0 text-sm\">
                                                            <span class=\"badge bg-success\">Đề xuất chung</span>
                                                        </h6>
                                                    ";
            } else {
                // line 229
                yield "                                                        <h6 class=\"mb-0 text-sm\">
                                                            <span class=\"badge bg-secondary\">";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "type", [], "any", false, false, false, 230), "html", null, true);
                yield "</span>
                                                        </h6>
                                                    ";
            }
            // line 233
            yield "                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex px-2 py-1\">
                                                <div class=\"d-flex flex-column justify-content-center\">
                                                    <h6 class=\"mb-0 text-sm\">";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "userId", [], "any", false, false, false, 239), "name", [], "any", false, false, false, 239), "html", null, true);
            yield "</h6>
                                                    <p class=\"text-xs text-secondary mb-0\">";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "userId", [], "any", false, false, false, 240), "studentId", [], "any", false, false, false, 240), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "createdAt", [], "any", false, false, false, 245), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            <a href=\"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 248)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info mb-0\">Xem</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 251
        if (!$context['_iterated']) {
            // line 252
            yield "                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-3\">Không có đề xuất nào đang chờ xử lý</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['proposal'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM đã được tải');
        console.log('Chart.js version:', Chart.version);
        
        const fundChart = document.getElementById('fundChart');
        if (!fundChart) {
            console.error('Không tìm thấy phần tử fundChart');
            return;
        }

        const ctx = fundChart.getContext('2d');
        if (!ctx) {
            console.error('Không thể lấy context của canvas');
            return;
        }

        // Hàm định dạng ngày
        const formatDate = (dateStr) => {
            const date = new Date(dateStr);
            return date.toLocaleDateString('vi-VN', { 
                day: '2-digit',
                month: '2-digit'
            });
        };

        // Hàm formatCurrency giống extension PHP
        function formatCurrency(amount) {
            amount = Number(amount);
            if (amount >= 1000000) {
                return (Math.round(amount / 100000) / 10) + ' triệu';
            } else if (amount >= 1000) {
                return (Math.round(amount / 100) / 10) + ' nghìn';
            }
            return amount.toLocaleString('vi-VN');
        }

        // Khởi tạo biểu đồ
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [
                    {
                        label: 'Thu',
                        data: [],
                        backgroundColor: 'rgba(40, 167, 69, 0.8)',
                        borderColor: '#28a745',
                        borderWidth: 1,
                        yAxisID: 'y'
                    },
                    {
                        label: 'Chi',
                        data: [],
                        backgroundColor: 'rgba(220, 53, 69, 0.8)',
                        borderColor: '#dc3545',
                        borderWidth: 1,
                        yAxisID: 'y'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(context) {
                                const date = new Date(context[0].label);
                                return date.toLocaleDateString('vi-VN', {
                                    weekday: 'long',
                                    day: '2-digit',
                                    month: '2-digit',
                                    year: 'numeric'
                                });
                            },
                            label: function(context) {
                                return `\${context.dataset.label}: \${formatCurrency(context.raw)}`;
                            }
                        }
                    },
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        },
                        ticks: {
                            callback: function(value) {
                                return formatCurrency(value);
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            callback: function(value, index, values) {
                                return formatDate(this.getLabelForValue(value));
                            }
                        }
                    }
                }
            }
        });

        console.log('Biểu đồ đã được khởi tạo:', chart);

        // Hàm cập nhật dữ liệu biểu đồ
        const updateChartData = async (days) => {
            try {
                console.log('Bắt đầu cập nhật dữ liệu cho', days, 'ngày');
                const endDate = new Date();
                const startDate = new Date();
                startDate.setDate(endDate.getDate() - days);

                console.log('Ngày bắt đầu:', startDate.toISOString());
                console.log('Ngày kết thúc:', endDate.toISOString());

                const response = await fetch(`/api/funds/chart?startDate=\${startDate.toISOString()}&endDate=\${endDate.toISOString()}`);
                console.log('Đã gửi request API, status:', response.status);

                if (!response.ok) {
                    throw new Error(`HTTP error! status: \${response.status}`);
                }

                const data = await response.json();
                console.log('Dữ liệu nhận được từ API:', data);

                if (data.error) {
                    console.error('Lỗi từ API:', data.error);
                    return;
                }

                if (!data.labels || !data.income || !data.expense) {
                    console.error('Dữ liệu không đầy đủ:', data);
                    return;
                }

                console.log('Cập nhật dữ liệu cho biểu đồ');
                chart.data.labels = data.labels;
                chart.data.datasets[0].data = data.income;
                chart.data.datasets[1].data = data.expense.map(value => -value); // Chuyển chi thành số âm
                
                console.log('Gọi chart.update()');
                chart.update();
                console.log('Biểu đồ đã được cập nhật');
            } catch (error) {
                console.error('Lỗi khi cập nhật dữ liệu:', error);
            }
        };

        // Xử lý sự kiện khi thay đổi khoảng thời gian
        const timeRangeSelect = document.getElementById('timeRange');
        if (timeRangeSelect) {
            console.log('Đã tìm thấy phần tử timeRange');
            timeRangeSelect.addEventListener('change', function() {
                console.log('Đã thay đổi khoảng thời gian:', this.value);
                updateChartData(parseInt(this.value));
            });

            // Khởi tạo dữ liệu ban đầu với giá trị được chọn trong filter
            console.log('Bắt đầu khởi tạo dữ liệu ban đầu');
            updateChartData(parseInt(timeRangeSelect.value));
        } else {
            console.error('Không tìm thấy phần tử timeRange');
        }
    });
</script>
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
        return "dashboard/index.html.twig";
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
        return array (  471 => 256,  462 => 252,  460 => 251,  452 => 248,  446 => 245,  438 => 240,  434 => 239,  426 => 233,  420 => 230,  417 => 229,  411 => 225,  409 => 224,  404 => 221,  402 => 220,  396 => 216,  391 => 215,  373 => 200,  350 => 179,  335 => 170,  332 => 169,  330 => 168,  312 => 163,  308 => 162,  300 => 157,  293 => 155,  288 => 154,  270 => 153,  223 => 109,  199 => 88,  194 => 86,  183 => 78,  165 => 63,  154 => 55,  135 => 39,  129 => 36,  122 => 32,  111 => 24,  105 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}

<div class=\"container-fluid py-4\">
    <!-- Chào user -->
    {# <div class=\"card shadow-sm mb-4 pb-0\">
        <div class=\"card-body\">
            {% if user is not null %}
                <h3 class=\"text-dark\">👋 Chào <span class=\"text-primary\">{{ user.name }}</span> (<span class=\"text-muted\">{{ user.studentId }}</span>)!</h3>
                <p class=\"text-dark mb-0\">🎓 Vai trò: <span class=\"badge bg-info text-dark\">{{ user.role|replace({'ROLE_': ''})|capitalize }}</span></p>
            {% else %}
                <h3 class=\"text-dark\">Chào bạn!</h3>
                <p class=\"text-dark\">Vui lòng <a href=\"{{ path('app_login') }}\" class=\"text-primary\">đăng nhập</a> để tiếp tục.</p>
            {% endif %}
        </div>
    </div> #}

    <!-- Thống kê nhanh -->
    <div class=\"row\">
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
            <a href=\"{{ path('app_funds_index') }}\" class=\"text-decoration-none\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Số dư quỹ</p>
                                    <h5 class=\"font-weight-bolder mb-0\">
                                        {{ balance|round(0, 'floor')|format_currency('VND') }}
                                    </h5>
                                    <div class=\"d-flex align-items-center mt-2\">
                                        <span class=\"text-success text-sm me-2\">
                                            <i class=\"fas fa-arrow-up\"></i> {{ totalIncome|round(0, 'floor')|format_currency('VND') }}
                                        </span>
                                        <span class=\"text-danger text-sm\">
                                            <i class=\"fas fa-arrow-down\"></i> {{ totalExpense|round(0, 'floor')|format_currency('VND') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle\">
                                    <i class=\"fas fa-money-bill-wave text-lg opacity-10\" aria-hidden=\"true\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
            <a href=\"{{ path('app_users_index') }}\" class=\"text-decoration-none\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Thành viên</p>
                                    <h5 class=\"font-weight-bolder mb-0\">
                                        {{ totalMembers }}
                                    </h5>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle\">
                                    <i class=\"fas fa-users text-lg opacity-10\" aria-hidden=\"true\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
            <a href=\"{{ path('app_activities_index') }}\" class=\"text-decoration-none\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Hoạt động mới</p>
                                    <h5 class=\"font-weight-bolder mb-0\">
                                        +{{ newActivities }}
                                    </h5>
                                    <p class=\"text-sm text-muted mb-0\">Tổng: {{ totalActivities }}</p>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-success shadow-success text-center rounded-circle\">
                                    <i class=\"fas fa-calendar-alt text-lg opacity-10\" aria-hidden=\"true\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-xl-3 col-sm-6\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-body p-3\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"numbers\">
                                <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">Lượt tham gia</p>
                                <h5 class=\"font-weight-bolder mb-0\">
                                    {{ participationCount }}
                                </h5>
                            </div>
                        </div>
                        <div class=\"col-4 text-end\">
                            <div class=\"icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle\">
                                <i class=\"fas fa-user-friends text-lg opacity-10\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Biểu đồ và carousel -->
    <div class=\"row mt-4\">
        <div class=\"col-lg-7 mb-lg-0 mb-4\">
            <div class=\"card z-index-2 h-100 shadow-sm\">
                <div class=\"card-header bg-transparent\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h6 class=\"text-capitalize mb-0\">Biến động quỹ</h6>
                        <div class=\"btn-group\">
                            <select id=\"timeRange\" class=\"form-select form-select-sm\">
                                <option value=\"7\">7 ngày gần nhất</option>
                                <option value=\"30\">30 ngày gần nhất</option>
                                <option value=\"90\">3 tháng gần nhất</option>
                                <option value=\"180\">6 tháng gần nhất</option>
                                <option value=\"365\">1 năm gần nhất</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"card-body p-3\">
                    <div class=\"chart\" style=\"position: relative; height: 300px;\">
                        <canvas id=\"fundChart\" style=\"width: 100%; height: 100%;\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-5\">
            <div class=\"card card-carousel overflow-hidden h-100 p-0 shadow-sm\">
                <div id=\"carouselExampleCaptions\" class=\"carousel slide h-100\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-inner border-radius-lg h-100\">
                        {% for activity in recentActivities %}
                            <div class=\"carousel-item h-100 {{ loop.first ? 'active' : '' }}\">
                                <img src=\"{{ asset('uploads/activities/' ~ activity.image) }}\" class=\"d-block w-100 h-100 object-fit-cover\" alt=\"{{ activity.title }}\">
                                <div class=\"carousel-caption d-none d-md-block bottom-0 text-start start-0 w-100\">
                                    <a href=\"{{ path('app_activities_show', {'id': activity.id}) }}\" class=\"text-decoration-none\">
                                        <div class=\"bg-dark bg-gradient-primary p-3\">
                                            <div class=\"icon icon-shape icon-sm bg-white text-center border-radius-md mb-3\">
                                                <i class=\"fas fa-calendar-alt text-dark opacity-10\"></i>
                                            </div>
                                            <h5 class=\"text-white mb-1\">{{ activity.title }}</h5>
                                            <p class=\"text-white\">{{ activity.description|length > 100 ? activity.description|slice(0, 100) ~ '...' : activity.description }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"carousel-item h-100 active\">
                                <img src=\"{{ asset('assets/img/bg-laPfGiy.jpg') }}\" class=\"d-block w-100 h-100 object-fit-cover\" alt=\"No activities\">
                                <div class=\"carousel-caption\">
                                    <div class=\"bg-dark bg-opacity-75 p-3 rounded\">
                                        <h5 class=\"text-white mb-1\">Chưa có hoạt động</h5>
                                        <p class=\"mb-0\">Không có hoạt động nào để hiển thị.</p>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <button class=\"carousel-control-prev w-5 me-3 bg-gradient-primary\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next w-5 me-3 bg-gradient-primary\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bảng đề xuất -->
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Đề xuất đang chờ xử lý</h6>
                        <a href=\"{{ path('app_proposals_index') }}\" class=\"btn btn-sm btn-primary mb-0\">Xem tất cả</a>
                    </div>
                </div>
                <div class=\"card-body px-0 pt-0 pb-2\">
                    <div class=\"table-responsive p-0 px-3\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tiêu đề</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người đề xuất</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày tạo</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for proposal in pendingProposals %}
                                    <tr>
                                        <td>
                                            <div class=\"d-flex px-2 py-1\">
                                                <div class=\"d-flex flex-column justify-content-center\">
                                                    {% if proposal.type == 'edit_profile' %}
                                                        <h6 class=\"mb-0 text-sm\">
                                                            <span class=\"badge bg-primary\">Chỉnh sửa thông tin</span>
                                                        </h6>
                                                    {% elseif proposal.type == 'general' %}
                                                        <h6 class=\"mb-0 text-sm\">
                                                            <span class=\"badge bg-success\">Đề xuất chung</span>
                                                        </h6>
                                                    {% else %}
                                                        <h6 class=\"mb-0 text-sm\">
                                                            <span class=\"badge bg-secondary\">{{ proposal.type }}</span>
                                                        </h6>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"d-flex px-2 py-1\">
                                                <div class=\"d-flex flex-column justify-content-center\">
                                                    <h6 class=\"mb-0 text-sm\">{{ proposal.userId.name }}</h6>
                                                    <p class=\"text-xs text-secondary mb-0\">{{ proposal.userId.studentId }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"text-secondary text-xs font-weight-bold\">{{ proposal.createdAt|date('d/m/Y H:i') }}</span>
                                        </td>
                                        <td class=\"align-middle text-center\">
                                            <a href=\"{{ path('app_proposals_show', {'id': proposal.id}) }}\" class=\"btn btn-sm btn-info mb-0\">Xem</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\" class=\"text-center py-3\">Không có đề xuất nào đang chờ xử lý</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM đã được tải');
        console.log('Chart.js version:', Chart.version);
        
        const fundChart = document.getElementById('fundChart');
        if (!fundChart) {
            console.error('Không tìm thấy phần tử fundChart');
            return;
        }

        const ctx = fundChart.getContext('2d');
        if (!ctx) {
            console.error('Không thể lấy context của canvas');
            return;
        }

        // Hàm định dạng ngày
        const formatDate = (dateStr) => {
            const date = new Date(dateStr);
            return date.toLocaleDateString('vi-VN', { 
                day: '2-digit',
                month: '2-digit'
            });
        };

        // Hàm formatCurrency giống extension PHP
        function formatCurrency(amount) {
            amount = Number(amount);
            if (amount >= 1000000) {
                return (Math.round(amount / 100000) / 10) + ' triệu';
            } else if (amount >= 1000) {
                return (Math.round(amount / 100) / 10) + ' nghìn';
            }
            return amount.toLocaleString('vi-VN');
        }

        // Khởi tạo biểu đồ
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [
                    {
                        label: 'Thu',
                        data: [],
                        backgroundColor: 'rgba(40, 167, 69, 0.8)',
                        borderColor: '#28a745',
                        borderWidth: 1,
                        yAxisID: 'y'
                    },
                    {
                        label: 'Chi',
                        data: [],
                        backgroundColor: 'rgba(220, 53, 69, 0.8)',
                        borderColor: '#dc3545',
                        borderWidth: 1,
                        yAxisID: 'y'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(context) {
                                const date = new Date(context[0].label);
                                return date.toLocaleDateString('vi-VN', {
                                    weekday: 'long',
                                    day: '2-digit',
                                    month: '2-digit',
                                    year: 'numeric'
                                });
                            },
                            label: function(context) {
                                return `\${context.dataset.label}: \${formatCurrency(context.raw)}`;
                            }
                        }
                    },
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        },
                        ticks: {
                            callback: function(value) {
                                return formatCurrency(value);
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            callback: function(value, index, values) {
                                return formatDate(this.getLabelForValue(value));
                            }
                        }
                    }
                }
            }
        });

        console.log('Biểu đồ đã được khởi tạo:', chart);

        // Hàm cập nhật dữ liệu biểu đồ
        const updateChartData = async (days) => {
            try {
                console.log('Bắt đầu cập nhật dữ liệu cho', days, 'ngày');
                const endDate = new Date();
                const startDate = new Date();
                startDate.setDate(endDate.getDate() - days);

                console.log('Ngày bắt đầu:', startDate.toISOString());
                console.log('Ngày kết thúc:', endDate.toISOString());

                const response = await fetch(`/api/funds/chart?startDate=\${startDate.toISOString()}&endDate=\${endDate.toISOString()}`);
                console.log('Đã gửi request API, status:', response.status);

                if (!response.ok) {
                    throw new Error(`HTTP error! status: \${response.status}`);
                }

                const data = await response.json();
                console.log('Dữ liệu nhận được từ API:', data);

                if (data.error) {
                    console.error('Lỗi từ API:', data.error);
                    return;
                }

                if (!data.labels || !data.income || !data.expense) {
                    console.error('Dữ liệu không đầy đủ:', data);
                    return;
                }

                console.log('Cập nhật dữ liệu cho biểu đồ');
                chart.data.labels = data.labels;
                chart.data.datasets[0].data = data.income;
                chart.data.datasets[1].data = data.expense.map(value => -value); // Chuyển chi thành số âm
                
                console.log('Gọi chart.update()');
                chart.update();
                console.log('Biểu đồ đã được cập nhật');
            } catch (error) {
                console.error('Lỗi khi cập nhật dữ liệu:', error);
            }
        };

        // Xử lý sự kiện khi thay đổi khoảng thời gian
        const timeRangeSelect = document.getElementById('timeRange');
        if (timeRangeSelect) {
            console.log('Đã tìm thấy phần tử timeRange');
            timeRangeSelect.addEventListener('change', function() {
                console.log('Đã thay đổi khoảng thời gian:', this.value);
                updateChartData(parseInt(this.value));
            });

            // Khởi tạo dữ liệu ban đầu với giá trị được chọn trong filter
            console.log('Bắt đầu khởi tạo dữ liệu ban đầu');
            updateChartData(parseInt(timeRangeSelect.value));
        } else {
            console.error('Không tìm thấy phần tử timeRange');
        }
    });
</script>
{% endblock %}", "dashboard/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\dashboard\\index.html.twig");
    }
}
