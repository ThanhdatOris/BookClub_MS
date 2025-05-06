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

/* proposals/index.html.twig */
class __TwigTemplate_dc283c5eb971daa5f5a5c8dace39b768 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proposals/index.html.twig", 1);
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

        yield "Đề xuất";
        
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
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 10
        yield "                <div class=\"row mb-4\">
                    ";
        // line 11
        $context["stats"] = [["title" => "Tổng đề xuất", "count" => Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 14
(isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 14, $this->source); })())), "style" => "bg-gradient-primary", "icon" => "fas fa-clipboard-list", "text_class" => ""], ["title" => "Đang chờ", "count" => Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env,         // line 21
(isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 21, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21) == "pending"); })), "style" => "bg-gradient-warning", "icon" => "fas fa-clock", "text_class" => "text-warning"], ["title" => "Đã duyệt", "count" => Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env,         // line 28
(isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 28, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28) == "approved"); })), "style" => "bg-gradient-success", "icon" => "fas fa-check", "text_class" => "text-success"], ["title" => "Đã từ chối", "count" => Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env,         // line 35
(isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 35, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35) == "rejected"); })), "style" => "bg-gradient-danger", "icon" => "fas fa-times", "text_class" => "text-danger"]];
        // line 41
        yield "                    
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 43
            yield "                        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
                            <div class=\"card h-100\">
                                <div class=\"card-body p-3\">
                                    <div class=\"row\">
                                        <div class=\"col-8\">
                                            <div class=\"numbers\">
                                                <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "title", [], "any", false, false, false, 49), "html", null, true);
            yield "</p>
                                                <h5 class=\"font-weight-bolder mb-0 ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "text_class", [], "any", false, false, false, 50), "html", null, true);
            yield "\">
                                                    ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 51), "html", null, true);
            yield " đề xuất
                                                </h5>
                                            </div>
                                        </div>
                                        <div class=\"col-4 text-end\">
                                            <div class=\"icon icon-shape ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "style", [], "any", false, false, false, 56), "html", null, true);
            yield " shadow text-center border-radius-md\">
                                                <i class=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "icon", [], "any", false, false, false, 57), "html", null, true);
            yield " text-lg opacity-10\" aria-hidden=\"true\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                </div>

                ";
        // line 68
        yield "                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Danh sách đề xuất</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"searchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm đề xuất...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"clearSearchBtn\" class=\"btn btn-sm btn-secondary mb-0 ms-2 d-none\">
                                        <i class=\"fas fa-times me-1\"></i> Xóa bộ lọc
                                    </button>
                                </div>
                                ";
        // line 79
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MEMBER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 80
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_new");
            yield "\" class=\"btn btn-sm btn-success mb-0\">
                                        <i class=\"fas fa-plus me-1\"></i> Tạo đề xuất mới
                                    </a>
                                ";
        }
        // line 84
        yield "                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 1080px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">ID</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Thể loại</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nội dung</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Trạng thái</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Ngày tạo</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center\">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody id=\"proposalsTableBody\">
                                    <!-- Populated via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                        <div class=\"navigation mt-4\">
                            ";
        // line 106
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 106, $this->source); })()), null, ["search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 106, $this->source); })())]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include table-layout.js -->
    <script src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tableLayout = new TableLayout({
                data: [
                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
            // line 121
            yield "                        {
                            id: '";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 122), "html", null, true);
            yield "',
                            type: '";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "type", [], "any", false, false, false, 123), "html", null, true);
            yield "',
                            content: '";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "content", [], "any", false, false, false, 124), "js"), "html", null, true);
            yield "',
                            status: '";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "status", [], "any", false, false, false, 125), "html", null, true);
            yield "',
                            createdAt: '";
            // line 126
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "createdAt", [], "any", false, false, false, 126)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "createdAt", [], "any", false, false, false, 126), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "',
                            detailUrl: '";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 127)]), "html", null, true);
            yield "',
                            actions: `
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info mb-0\" title=\"Xem chi tiết\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    ";
            // line 133
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "status", [], "any", false, false, false, 133) == "pending"))) {
                // line 134
                yield "                                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('Bạn có chắc chắn muốn duyệt đề xuất này?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 135))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-success mb-0\" title=\"Duyệt đề xuất\">
                                                <i class=\"fas fa-check\"></i>
                                            </button>
                                        </form>
                                        <form method=\"post\" action=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 140)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('Bạn có chắc chắn muốn từ chối đề xuất này?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 141))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-danger mb-0\" title=\"Từ chối đề xuất\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </form>
                                    ";
            }
            // line 147
            yield "                                </div>
                            `
                        },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['proposal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "                ],
                tableBodyId: 'proposalsTableBody',
                searchInputId: 'searchInput',
                clearSearchBtnId: 'clearSearchBtn',
                paginationId: 'proposalsPagination',
                columns: [
                    { field: 'id', class: 'text-center' },
                    {
                        field: 'type',
                        class: 'text-center',
                        formatter: (value) => {
                            if (value === 'general') return '<span class=\"badge bg-primary\">Chung</span>';
                            if (value === 'edit_profile') return '<span class=\"badge bg-info\">Sửa hồ sơ</span>';
                            return '<span class=\"badge bg-secondary\">Không xác định</span>';
                        }
                    },
                    {
                        field: 'content',
                        formatter: (value) => `<p class=\"text-sm mb-0\">\${value ? (value.length > 20 ? value.slice(0, 20) + '...' : value) : ''}</p>`
                    },
                    {
                        field: 'status',
                        class: 'text-center',
                        formatter: (value) => {
                            if (value === 'pending') return '<span class=\"badge bg-warning text-dark\">Đang chờ</span>';
                            if (value === 'approved') return '<span class=\"badge bg-success\">Đã duyệt</span>';
                            if (value === 'rejected') return '<span class=\"badge bg-danger\">Đã từ chối</span>';
                            return '<span class=\"badge bg-secondary\">Không xác định</span>';
                        }
                    },
                    {
                        field: 'createdAt',
                        class: 'text-center',
                        formatter: (value) => `<p class=\"text-sm mb-0\">\${value}</p>`
                    },
                    {
                        field: 'actions',
                        class: 'text-center'
                    }
                ],
                onRowClick: (row) => {
                    const detailUrl = row.getAttribute('data-url');
                    if (detailUrl) window.location.href = detailUrl;
                }
            });
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
        return "proposals/index.html.twig";
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
        return array (  310 => 151,  301 => 147,  292 => 141,  288 => 140,  280 => 135,  275 => 134,  273 => 133,  267 => 130,  261 => 127,  257 => 126,  253 => 125,  249 => 124,  245 => 123,  241 => 122,  238 => 121,  234 => 120,  226 => 115,  214 => 106,  190 => 84,  182 => 80,  180 => 79,  167 => 68,  163 => 65,  149 => 57,  145 => 56,  137 => 51,  133 => 50,  129 => 49,  121 => 43,  117 => 42,  114 => 41,  112 => 35,  111 => 28,  110 => 21,  109 => 14,  108 => 11,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Đề xuất{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                {# Thống kê tổng quan #}
                <div class=\"row mb-4\">
                    {% set stats = [
                        {
                            'title': 'Tổng đề xuất',
                            'count': proposals|length,
                            'style': 'bg-gradient-primary',
                            'icon': 'fas fa-clipboard-list',
                            'text_class': ''
                        },
                        {
                            'title': 'Đang chờ',
                            'count': proposals|filter(p => p.status == 'pending')|length,
                            'style': 'bg-gradient-warning',
                            'icon': 'fas fa-clock',
                            'text_class': 'text-warning'
                        },
                        {
                            'title': 'Đã duyệt',
                            'count': proposals|filter(p => p.status == 'approved')|length,
                            'style': 'bg-gradient-success',
                            'icon': 'fas fa-check',
                            'text_class': 'text-success'
                        },
                        {
                            'title': 'Đã từ chối',
                            'count': proposals|filter(p => p.status == 'rejected')|length,
                            'style': 'bg-gradient-danger',
                            'icon': 'fas fa-times',
                            'text_class': 'text-danger'
                        }
                    ] %}
                    
                    {% for stat in stats %}
                        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
                            <div class=\"card h-100\">
                                <div class=\"card-body p-3\">
                                    <div class=\"row\">
                                        <div class=\"col-8\">
                                            <div class=\"numbers\">
                                                <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">{{ stat.title }}</p>
                                                <h5 class=\"font-weight-bolder mb-0 {{ stat.text_class }}\">
                                                    {{ stat.count }} đề xuất
                                                </h5>
                                            </div>
                                        </div>
                                        <div class=\"col-4 text-end\">
                                            <div class=\"icon icon-shape {{ stat.style }} shadow text-center border-radius-md\">
                                                <i class=\"{{ stat.icon }} text-lg opacity-10\" aria-hidden=\"true\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                {# Bảng danh sách đề xuất #}
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Danh sách đề xuất</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"searchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm đề xuất...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"clearSearchBtn\" class=\"btn btn-sm btn-secondary mb-0 ms-2 d-none\">
                                        <i class=\"fas fa-times me-1\"></i> Xóa bộ lọc
                                    </button>
                                </div>
                                {% if is_granted('ROLE_MEMBER') and not is_granted('ROLE_ADMIN') %}
                                    <a href=\"{{ path('app_proposals_new') }}\" class=\"btn btn-sm btn-success mb-0\">
                                        <i class=\"fas fa-plus me-1\"></i> Tạo đề xuất mới
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 1080px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">ID</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Thể loại</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nội dung</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Trạng thái</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Ngày tạo</th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center\">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody id=\"proposalsTableBody\">
                                    <!-- Populated via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                        <div class=\"navigation mt-4\">
                            {{ knp_pagination_render(proposals, null, {'search': search}) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include table-layout.js -->
    <script src=\"{{ asset('js/table-layout.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tableLayout = new TableLayout({
                data: [
                    {% for proposal in proposals %}
                        {
                            id: '{{ proposal.id }}',
                            type: '{{ proposal.type }}',
                            content: '{{ proposal.content|e('js') }}',
                            status: '{{ proposal.status }}',
                            createdAt: '{{ proposal.createdAt ? proposal.createdAt|date('Y-m-d H:i:s') : '' }}',
                            detailUrl: '{{ path('app_proposals_show', {'id': proposal.id}) }}',
                            actions: `
                                <div class=\"d-flex justify-content-center gap-2\">
                                    <a href=\"{{ path('app_proposals_show', {'id': proposal.id}) }}\" class=\"btn btn-sm btn-info mb-0\" title=\"Xem chi tiết\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    {% if is_granted('ROLE_ADMIN') and proposal.status == 'pending' %}
                                        <form method=\"post\" action=\"{{ path('app_proposals_approve', {'id': proposal.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Bạn có chắc chắn muốn duyệt đề xuất này?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('approve' ~ proposal.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-success mb-0\" title=\"Duyệt đề xuất\">
                                                <i class=\"fas fa-check\"></i>
                                            </button>
                                        </form>
                                        <form method=\"post\" action=\"{{ path('app_proposals_reject', {'id': proposal.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Bạn có chắc chắn muốn từ chối đề xuất này?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ proposal.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-danger mb-0\" title=\"Từ chối đề xuất\">
                                                <i class=\"fas fa-times\"></i>
                                            </button>
                                        </form>
                                    {% endif %}
                                </div>
                            `
                        },
                    {% endfor %}
                ],
                tableBodyId: 'proposalsTableBody',
                searchInputId: 'searchInput',
                clearSearchBtnId: 'clearSearchBtn',
                paginationId: 'proposalsPagination',
                columns: [
                    { field: 'id', class: 'text-center' },
                    {
                        field: 'type',
                        class: 'text-center',
                        formatter: (value) => {
                            if (value === 'general') return '<span class=\"badge bg-primary\">Chung</span>';
                            if (value === 'edit_profile') return '<span class=\"badge bg-info\">Sửa hồ sơ</span>';
                            return '<span class=\"badge bg-secondary\">Không xác định</span>';
                        }
                    },
                    {
                        field: 'content',
                        formatter: (value) => `<p class=\"text-sm mb-0\">\${value ? (value.length > 20 ? value.slice(0, 20) + '...' : value) : ''}</p>`
                    },
                    {
                        field: 'status',
                        class: 'text-center',
                        formatter: (value) => {
                            if (value === 'pending') return '<span class=\"badge bg-warning text-dark\">Đang chờ</span>';
                            if (value === 'approved') return '<span class=\"badge bg-success\">Đã duyệt</span>';
                            if (value === 'rejected') return '<span class=\"badge bg-danger\">Đã từ chối</span>';
                            return '<span class=\"badge bg-secondary\">Không xác định</span>';
                        }
                    },
                    {
                        field: 'createdAt',
                        class: 'text-center',
                        formatter: (value) => `<p class=\"text-sm mb-0\">\${value}</p>`
                    },
                    {
                        field: 'actions',
                        class: 'text-center'
                    }
                ],
                onRowClick: (row) => {
                    const detailUrl = row.getAttribute('data-url');
                    if (detailUrl) window.location.href = detailUrl;
                }
            });
        });
    </script>
{% endblock %}", "proposals/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\proposals\\index.html.twig");
    }
}
