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

/* activities/index.html.twig */
class __TwigTemplate_c65391320b0ad7ae878966f6d6ed5514 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activities/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activities/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activities/index.html.twig", 1);
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

        yield "Quản lý hoạt động";
        
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/activities.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    <div class=\"container-fluid\">
        <!-- Statistics Cards -->
        <div class=\"row mb-4\">
            ";
        // line 14
        $context["stats"] = [["title" => "Tổng số hoạt động", "count" =>         // line 17
(isset($context["totalActivities"]) || array_key_exists("totalActivities", $context) ? $context["totalActivities"] : (function () { throw new RuntimeError('Variable "totalActivities" does not exist.', 17, $this->source); })()), "style" => "bg-gradient-primary", "icon" => "fas fa-calendar", "text_class" => "text-primary"], ["title" => "Hoạt động đang diễn ra", "count" =>         // line 24
(isset($context["ongoingActivities"]) || array_key_exists("ongoingActivities", $context) ? $context["ongoingActivities"] : (function () { throw new RuntimeError('Variable "ongoingActivities" does not exist.', 24, $this->source); })()), "style" => "bg-gradient-success", "icon" => "fas fa-play", "text_class" => "text-success"], ["title" => "Hoạt động sắp diễn ra", "count" =>         // line 31
(isset($context["pendingActivities"]) || array_key_exists("pendingActivities", $context) ? $context["pendingActivities"] : (function () { throw new RuntimeError('Variable "pendingActivities" does not exist.', 31, $this->source); })()), "style" => "bg-gradient-warning", "icon" => "fas fa-clock", "text_class" => "text-warning"], ["title" => "Hoạt động đã kết thúc", "count" =>         // line 38
(isset($context["completedActivities"]) || array_key_exists("completedActivities", $context) ? $context["completedActivities"] : (function () { throw new RuntimeError('Variable "completedActivities" does not exist.', 38, $this->source); })()), "style" => "bg-gradient-info", "icon" => "fas fa-check", "text_class" => "text-info"]];
        // line 44
        yield "            
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 46
            yield "                <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
                    <div class=\"card h-100\">
                        <div class=\"card-body p-3\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"numbers\">
                                        <p class=\"text-sm mb-0 text-uppercase font-weight-bold\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "title", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                                        <h5 class=\"font-weight-bolder mb-0 ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "text_class", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                                            ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 54), "html", null, true);
            yield "
                                        </h5>
                                    </div>
                                </div>
                                <div class=\"col-4 text-end\">
                                    <div class=\"icon icon-shape ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "style", [], "any", false, false, false, 59), "html", null, true);
            yield " shadow text-center border-radius-md\">
                                        <i class=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "icon", [], "any", false, false, false, 60), "html", null, true);
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
        // line 68
        yield "        </div>

        <!-- Dynamic Content -->
        <div id=\"dynamicContent\" class=\"mb-4 px-0\">
            <div class=\"card\">
                <div class=\"card-body text-center py-4\">
                    <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                    <h5>Chọn một hoạt động để xem chi tiết</h5>
                    <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm hoạt động\" để tạo mới</p>
                </div>
            </div>
        </div>

        <!-- Activity Management -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý hoạt động</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"activitiesSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm hoạt động...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"activitiesClearSearchBtn\" class=\"btn btn-sm btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                </div>
                                ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 94
            yield "                                    <button type=\"button\" class=\"btn btn-sm btn-success mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addActivityModal\">
                                        <i class=\"fas fa-plus me-1\"></i> Thêm hoạt động
                                    </button>
                                ";
        }
        // line 98
        yield "                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 1080px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"title\">Tiêu đề</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"date\">Ngày</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"location\">Địa điểm</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"status\">Trạng thái</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"createdBy\">Người tạo</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id=\"activitiesTableBody\">
                                    <!-- Populated via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            ";
        // line 129
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 129, $this->source); })()), null, ["search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 129, $this->source); })())]);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Thêm hoạt động -->
        <div class=\"modal fade\" id=\"addActivityModal\" tabindex=\"-1\" aria-labelledby=\"addActivityModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addActivityModalLabel\">Thêm hoạt động mới</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert alert-danger d-none\" id=\"addActivityError\"></div>
                        ";
        // line 146
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 146, $this->source); })()), 'form_start', ["attr" => ["id" => "addActivityForm"]]);
        yield "
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 149, $this->source); })()), "title", [], "any", false, false, false, 149), 'row', ["label" => "Tiêu đề", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 150, $this->source); })()), "date", [], "any", false, false, false, 150), 'row', ["label" => "Ngày", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 151, $this->source); })()), "time", [], "any", false, false, false, 151), 'row', ["label" => "Thời gian", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 154, $this->source); })()), "location", [], "any", false, false, false, 154), 'row', ["label" => "Địa điểm", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 155, $this->source); })()), "status", [], "any", false, false, false, 155), 'row', ["label" => "Trạng thái", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 156, $this->source); })()), "image", [], "any", false, false, false, 156), 'row', ["label" => "Hình ảnh", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 159, $this->source); })()), "description", [], "any", false, false, false, 159), 'row', ["label" => "Mô tả", "attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
                            <button type=\"submit\" class=\"btn btn-sm btn-success w-100\">
                                <span class=\"spinner-border spinner-border-sm d-none\" id=\"addActivitySpinner\"></span>
                                Thêm hoạt động
                            </button>
                        ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 164, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa hoạt động -->
        ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 172
            yield "            <div class=\"modal fade\" id=\"editActivityModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 172), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editActivityModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 172), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editActivityModalLabel";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 176), "html", null, true);
            yield "\">Chỉnh sửa hoạt động: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 176), "html", null, true);
            yield "</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"alert alert-danger d-none\" id=\"editActivityError";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 180), "html", null, true);
            yield "\"></div>
                            ";
            // line 181
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 181, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 181), [], "array", false, false, false, 181), 'form_start', ["attr" => ["id" => ("editActivityForm" . CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 181)), "class" => "needs-validation"]]);
            yield "
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        ";
            // line 184
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 184, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 184), [], "array", false, false, false, 184), "title", [], "any", false, false, false, 184), 'row', ["label" => "Tiêu đề", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
            // line 185
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 185, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 185), [], "array", false, false, false, 185), "date", [], "any", false, false, false, 185), 'row', ["label" => "Ngày", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
            // line 186
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 186, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 186), [], "array", false, false, false, 186), "time", [], "any", false, false, false, 186), 'row', ["label" => "Thời gian", "attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
            // line 189
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 189, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 189), [], "array", false, false, false, 189), "location", [], "any", false, false, false, 189), 'row', ["label" => "Địa điểm", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
            // line 190
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 190, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 190), [], "array", false, false, false, 190), "status", [], "any", false, false, false, 190), 'row', ["label" => "Trạng thái", "attr" => ["class" => "form-control"]]);
            yield "
                                        <div class=\"mb-3\">
                                            ";
            // line 192
            if (CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 192)) {
                // line 193
                yield "                                                <div class=\"current-image mb-2\">
                                                    <label class=\"form-label\">Hình ảnh hiện tại:</label>
                                                    <div class=\"d-flex align-items-center\">
                                                        <img src=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/activities/" . CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 196))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 196), "html", null, true);
                yield "\" class=\"img-thumbnail me-2\" style=\"max-height: 100px;\">
                                                        <div class=\"form-text\">";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 197), "html", null, true);
                yield "</div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 201
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 201, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 201), [], "array", false, false, false, 201), "image", [], "any", false, false, false, 201), 'label', ["label" => "Thay đổi hình ảnh"]);
            yield "
                                            ";
            // line 202
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 202, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 202), [], "array", false, false, false, 202), "image", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*", "onchange" => (("previewImage(this, \"imagePreview" . CoreExtension::getAttribute($this->env, $this->source,             // line 206
$context["activity"], "id", [], "any", false, false, false, 206)) . "\")")]]);
            // line 208
            yield "
                                            <div id=\"imagePreview";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 209), "html", null, true);
            yield "\" class=\"mt-2 d-none\">
                                                <label class=\"form-label\">Xem trước:</label>
                                                <img src=\"\" alt=\"Preview\" class=\"img-thumbnail\" style=\"max-height: 100px;\">
                                            </div>
                                            <div class=\"form-text\">
                                                Chấp nhận file: JPG, PNG, GIF (tối đa 5MB)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
            // line 219
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 219, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 219), [], "array", false, false, false, 219), "description", [], "any", false, false, false, 219), 'row', ["label" => "Mô tả", "attr" => ["class" => "form-control", "rows" => 4]]);
            yield "
                                <button type=\"submit\" class=\"btn btn-sm btn-primary w-100\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" id=\"editActivitySpinner";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 221), "html", null, true);
            yield "\"></span>
                                    Lưu thay đổi
                                </button>
                            ";
            // line 224
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 224, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 224), [], "array", false, false, false, 224), 'form_end');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield "
        <!-- Modal: Điểm danh -->
        ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 232, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 233
            yield "            <div class=\"modal fade\" id=\"attendanceModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 233), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"attendanceModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 233), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-gradient-primary text-white\">
                            <h5 class=\"modal-title text-white\" id=\"attendanceModalLabel";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 237), "html", null, true);
            yield "\">Điểm danh: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 237), "html", null, true);
            yield "</h5>
                            <button type=\"button\" class=\"btn-close text-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <p><strong>ID Hoạt động:</strong> ";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 243), "html", null, true);
            yield "</p>
                                    <p><strong>Tên Hoạt động:</strong> ";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 244), "html", null, true);
            yield "</p>
                                </div>
                                <div class=\"col-md-6 text-end\">
                                    <p><strong>Số lượng tham gia:</strong> <span id=\"participantCount";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 247), "html", null, true);
            yield "\">Đang tải...</span></p>
                                    <p><strong>Tổng số đã điểm danh:</strong> <span id=\"attendedCount";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 248), "html", null, true);
            yield "\">Đang tải...</span></p>
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"text\" id=\"participantSearch";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 252), "html", null, true);
            yield "\" class=\"form-control\" placeholder=\"Tìm kiếm thành viên...\">
                            </div>
                            <h6 class=\"text-uppercase text-secondary font-weight-bold\">Danh sách tham gia:</h6>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered align-items-center mb-0\">
                                    <thead class=\"bg-light\">
                                        <tr>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID Người dùng</th>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mã sinh viên</th>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tên</th>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Điểm danh</th>
                                        </tr>
                                    </thead>
                                    <tbody id=\"participantList";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 265), "html", null, true);
            yield "\">
                                        <!-- Populated via JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"alert alert-danger d-none mt-3\" id=\"attendanceError";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 270), "html", null, true);
            yield "\"></div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-sm btn-secondary\" data-bs-dismiss=\"modal\">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        yield "
        <!-- Include table-layout.js -->
        <script src=\"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>

        <!-- JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const isAdmin = ";
        // line 286
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("true") : ("false"));
        yield ";
                const activitiesData = [
                    ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 288, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 289
            yield "                        {
                            id: '";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 290), "html", null, true);
            yield "',
                            title: '";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 291), "js"), "html", null, true);
            yield "',
                            date: '";
            // line 292
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 292)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 292), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "',
                            location: '";
            // line 293
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "location", [], "any", false, false, false, 293)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "location", [], "any", false, false, false, 293), "js"), "html", null, true)) : ("N/A"));
            yield "',
                            status: '";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 294), "js"), "html", null, true);
            yield "',
                            createdBy: '";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "createdBy", [], "any", false, false, false, 295), "name", [], "any", false, false, false, 295), "js"), "html", null, true);
            yield "',
                            description: '";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 296)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 296)) : ("N/A")), "js"), "html", null, true);
            yield "',
                            time: '";
            // line 297
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "time", [], "any", false, false, false, 297)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "time", [], "any", false, false, false, 297), "H:i"), "html", null, true)) : ("N/A"));
            yield "',
                            image: '";
            // line 298
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 298)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/activities/" . CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 298))), "js"), "html", null, true)) : (""));
            yield "',
                            participantsCount: ";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["activityParticipants"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 299), [], "array", true, true, false, 299)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityParticipants"]) || array_key_exists("activityParticipants", $context) ? $context["activityParticipants"] : (function () { throw new RuntimeError('Variable "activityParticipants" does not exist.', 299, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 299), [], "array", false, false, false, 299), [])) : ([]))), "html", null, true);
            yield ",
                            hasJoined: ";
            // line 300
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "user", [], "any", false, false, false, 300)) {
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["activityParticipants"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 300), [], "array", true, true, false, 300)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityParticipants"]) || array_key_exists("activityParticipants", $context) ? $context["activityParticipants"] : (function () { throw new RuntimeError('Variable "activityParticipants" does not exist.', 300, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 300), [], "array", false, false, false, 300), [])) : ([])), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 300, $this->source); })()), "userId", [], "any", false, false, false, 300), "id", [], "any", false, false, false, 300) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "user", [], "any", false, false, false, 300), "id", [], "any", false, false, false, 300)); })) > 0)) ? ("true") : ("false"));
            } else {
                yield "false";
            }
            yield ",
                        },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        yield "                ];

                console.log('Activities Data:', activitiesData);

                const activitiesTable = new TableLayout({
                    data: activitiesData,
                    tableBodyId: 'activitiesTableBody',
                    searchInputId: 'activitiesSearchInput',
                    clearSearchBtnId: 'activitiesClearSearchBtn',
                    paginationId: 'activitiesPagination',
                    columns: [
                        {
                            field: 'title',
                            formatter: (value, data) => `
                                <div class=\"d-flex px-2 py-1\" data-id=\"\${data.id}\">
                                    <div class=\"d-flex flex-column justify-content-center\" data-id=\"\${data.id}\">
                                        <h6 class=\"mb-0 text-sm\" data-id=\"\${data.id}\">\${value.length > 25 ? value.slice(0, 25) + '...' : value}</h6>
                                    </div>
                                </div>
                            `
                        },
                        { field: 'date', type: 'date' },
                        {
                            field: 'location',
                            formatter: (value, data) => `<p class=\"text-xs font-weight-bold mb-0\" data-id=\"\${data.id}\">\${value.length > 20 ? value.slice(0, 20) + '...' : value}</p>`
                        },
                        {
                            field: 'status',
                            formatter: (value, data) => `
                                <span class=\"badge bg-\${value === 'planned' ? 'primary' : (value === 'ongoing' ? 'success' : (value === 'completed' ? 'info' : 'danger'))}\" data-id=\"\${data.id}\">\${value}</span>
                            `
                        },
                        { field: 'createdBy' }
                    ],
                    onRowClick: (row) => {
                        const activityId = row.getAttribute('data-id');
                        if (!activityId) {
                            console.error('Invalid row clicked:', row);
                            return;
                        }
                        let userDetailContainer = document.getElementById('dynamicContent');
                        window.scrollTo(0, userDetailContainer.offsetTop);
                        const activity = activitiesData.find(a => a.id === activityId);
                        if (activity) displayActivityDetails(activity);
                        else console.error('Activity not found for ID:', activityId);
                    },
                    onDelete: button => {
                        if (!confirm('Bạn có chắc chắn muốn hủy hoạt động này?')) return;
                        const id = button.getAttribute('data-id');
                        const csrfToken = button.getAttribute('data-csrf-token');
                        fetch(`/activities/\${id}/cancel`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `_token=\${csrfToken}`
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) window.location.href = data.redirect;
                                else alert(data.error || 'Có lỗi xảy ra.');
                            })
                            .catch(error => alert('Lỗi: ' + error.message));
                    },
                    scrollPositionKey: 'activities_table_scroll_position'
                });

                // Listener thủ công cho click hàng
                document.getElementById('activitiesTableBody').addEventListener('click', (e) => {
                    const activityId = e.target.getAttribute('data-id');
                    if (!activityId) {
                        console.error('Invalid element clicked:', e.target);
                        return;
                    }
                    console.log('Row clicked:', activityId);
                    const activity = activitiesData.find(a => a.id === activityId);
                    if (activity) {
                        displayActivityDetails(activity);
                    } else {
                        console.error('Activity not found for ID:', activityId);
                    }
                });

                let currentActivityId = null;

                function displayActivityDetails(activity) {
                    if (!activity || currentActivityId === activity.id) return;
                    currentActivityId = activity.id;
                    const dynamicContent = document.getElementById('dynamicContent');
                    if (!dynamicContent) return console.error(\"Element 'dynamicContent' not found.\");

                    const buttons = isAdmin ? `
                        <button type=\"button\" class=\"btn btn-sm btn-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#editActivityModal\${activity.id}\">Chỉnh sửa</button>
                        \${activity.status !== 'cancelled' ? `
                            <button type=\"button\" class=\"btn btn-sm btn-success attendance-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#attendanceModal\${activity.id}\" data-id=\"\${activity.id}\">Điểm danh</button>
                        ` : ''}
                    ` : (activity.status === 'planned' || activity.status === 'ongoing') && !activity.hasJoined ? `
                        <button type=\"button\" class=\"btn btn-sm btn-info join-btn me-2\" data-id=\"\${activity.id}\">Tham gia</button>
                    ` : '';

                    dynamicContent.innerHTML = `
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h6 class=\"mb-0\">\${activity.title}</h6>
                                <button type=\"button\" class=\"btn-close\" aria-label=\"Đóng\" onclick=\"resetDynamicContent()\"></button>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <p><strong>Mô tả:</strong> \${activity.description}</p>
                                        <p><strong>Thời gian:</strong> \${activity.time} - \${activity.date}</p>
                                        <p><strong>Địa điểm:</strong> \${activity.location}</p>
                                        <p><strong>Số người tham gia:</strong> \${activity.participantsCount}</p>
                                        <div class=\"d-flex\">\${buttons}</div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        \${activity.image ? `
                                            <div class=\"text-center\">
                                                <img src=\"\${activity.image}\" class=\"img-fluid rounded\" alt=\"\${activity.title}\" style=\"max-height: 200px;\">
                                            </div>
                                        ` : ''}
                                    </div>
                                </div>
                                <div id=\"subDynamicContent\"></div>
                            </div>
                        </div>
                    `
                }

                function resetDynamicContent() {
                    currentActivityId = null;
                    document.getElementById('dynamicContent').innerHTML = `
                        <div class=\"card\">
                            <div class=\"card-body text-center py-4\">
                                <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                                <h5>Chọn một hoạt động để xem chi tiết</h5>
                                <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm hoạt động\" để tạo mới</p>
                            </div>
                        </div>
                    `;
                }

                function loadAttendanceModal(activityId) {
                    const elements = {
                        list: document.getElementById(`participantList\${activityId}`),
                        count: document.getElementById(`participantCount\${activityId}`),
                        attended: document.getElementById(`attendedCount\${activityId}`),
                        error: document.getElementById(`attendanceError\${activityId}`),
                        search: document.getElementById(`participantSearch\${activityId}`)
                    };

                    elements.list.innerHTML = '<tr><td colspan=\"4\">Đang tải...</td></tr>';
                    elements.count.textContent = elements.attended.textContent = 'Đang tải...';
                    elements.error.classList.add('d-none');

                    fetch(`/activities/\${activityId}/participants`)
                        .then(response => response.json())
                        .then(data => {
                            if (!data.success) throw new Error(data.error || 'Không thể tải dữ liệu.');
                            elements.count.textContent = data.totalParticipants;
                            elements.attended.textContent = data.totalAttended;
                            elements.list.innerHTML = data.participants.map(p => `
                                <tr>
                                    <td>\${p.id}</td>
                                    <td>\${p.studentId || 'N/A'}</td>
                                    <td>\${p.name}</td>
                                    <td>
                                        <button class=\"btn btn-sm btn-\${p.attended ? 'success' : 'danger'} attendance-toggle-btn mb-0\"
                                                data-activity-id=\"\${activityId}\"
                                                data-user-id=\"\${p.id}\"
                                                data-status=\"\${p.attended ? 'present' : 'absent'}\"
                                                \${isAdmin ? '' : 'disabled'}>
                                            \${p.attended ? 'Có mặt' : 'Vắng'}
                                        </button>
                                    </td>
                                </tr>
                            `).join('');

                            elements.search.addEventListener('input', () => {
                                const query = elements.search.value.toLowerCase();
                                Array.from(elements.list.children).forEach(row => {
                                    row.style.display = row.textContent.toLowerCase().includes(query) ? '' : 'none';
                                });
                            });

                            elements.list.querySelectorAll('.attendance-toggle-btn').forEach(btn => {
                                btn.addEventListener('click', () => {
                                    const userId = btn.getAttribute('data-user-id');
                                    const newStatus = btn.getAttribute('data-status') === 'present' ? 'absent' : 'present';
                                    fetch('/activities/attendance/toggle', {
                                        method: 'POST',
                                        headers: { 'Content-Type': 'application/json' },
                                        body: JSON.stringify({ activity_id: activityId, user_id: userId, status: newStatus })
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) loadAttendanceModal(activityId);
                                            else throw new Error(data.error || 'Không thể cập nhật trạng thái.');
                                        })
                                        .catch(error => {
                                            elements.error.textContent = 'Lỗi: ' + error.message;
                                            elements.error.classList.remove('d-none');
                                        });
                                });
                            });
                        })
                        .catch(error => {
                            elements.list.innerHTML = '<tr><td colspan=\"4\">Lỗi: Không thể tải dữ liệu.</td></tr>';
                            elements.count.textContent = elements.attended.textContent = 'N/A';
                            elements.error.textContent = 'Lỗi: ' + error.message;
                            elements.error.classList.remove('d-none');
                        });
                }

                function handleJoinActivity(activityId) {
                    if (isAdmin) return alert('Admin không thể tham gia hoạt động.');
                    ";
        // line 517
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 517, $this->source); })()), "user", [], "any", false, false, false, 517)) {
            // line 518
            yield "                        alert('Vui lòng đăng nhập để tham gia hoạt động.');
                        window.location.href = '";
            // line 519
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "';
                        return;
                    ";
        }
        // line 522
        yield "                    fetch(`/activities/\${activityId}/join`, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' }
                    })
                        .then(response => {
                            if (!response.ok) {
                                return response.text().then(text => {
                                    throw new Error('Phản hồi không phải JSON: ' + text.slice(0, 50));
                                });
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                alert('Tham gia hoạt động thành công!');
                                const activity = activitiesData.find(a => a.id === activityId);
                                if (activity) {
                                    activity.hasJoined = true;
                                    activity.participantsCount++;
                                    activitiesTable.renderTable();
                                    displayActivityDetails(activity);
                                }
                            } else {
                                alert(data.error || 'Không thể tham gia hoạt động.');
                            }
                        })
                        .catch(error => {
                            console.error('Join error:', error);
                            alert('Lỗi: ' + error.message);
                        });
                }

                function handleFormSubmit(formId, spinnerId, errorId, callback) {
                    const form = document.getElementById(formId);
                    if (!form) return;
                    
                    form.addEventListener('submit', async e => {
                        e.preventDefault();
                        const submitBtn = form.querySelector('button[type=\"submit\"]');
                        const spinner = document.getElementById(spinnerId);
                        const errorDiv = document.getElementById(errorId);
                        
                        try {
                            // Show loading state
                            submitBtn.disabled = true;
                            spinner.classList.remove('d-none');
                            if (errorDiv) errorDiv.classList.add('d-none');

                            const formData = new FormData(form);
                            
                            const response = await fetch(form.action, {
                                method: 'POST',
                                body: formData
                            });

                            if (!response.ok) {
                                throw new Error(`HTTP error! status: \${response.status}`);
                            }

                            const contentType = response.headers.get(\"content-type\");
                            if (contentType && contentType.indexOf(\"application/json\") !== -1) {
                                const data = await response.json();
                                
                                if (data.success) {
                                    if (data.redirect) {
                                        window.location.href = data.redirect;
                                    } else if (callback) {
                                        callback(data);
                                    }
                                    // Hiển thị thông báo thành công
                                    showToast('success', 'Thao tác thành công!');
                                } else {
                                    throw new Error(data.error || 'Có lỗi xảy ra khi xử lý yêu cầu.');
                                }
                            } else {
                                window.location.href = response.url;
                            }
                        } catch (error) {
                            console.error('Error:', error);
                            if (errorDiv) {
                                errorDiv.textContent = error.message || 'Có lỗi xảy ra. Vui lòng thử lại.';
                                errorDiv.classList.remove('d-none');
                            }
                            // Hiển thị thông báo lỗi
                            showToast('error', error.message || 'Có lỗi xảy ra. Vui lòng thử lại.');
                        } finally {
                            // Reset loading state
                            submitBtn.disabled = false;
                            spinner.classList.add('d-none');
                        }
                    });
                }

                // Thêm hàm hiển thị toast
                function showToast(type, message) {
                    const toastContainer = document.getElementById('toastContainer') || createToastContainer();
                    const toast = document.createElement('div');
                    toast.className = `toast align-items-center text-white bg-\${type === 'success' ? 'success' : 'danger'} border-0`;
                    toast.setAttribute('role', 'alert');
                    toast.setAttribute('aria-live', 'assertive');
                    toast.setAttribute('aria-atomic', 'true');
                    
                    toast.innerHTML = `
                        <div class=\"d-flex\">
                            <div class=\"toast-body\">
                                \${message}
                            </div>
                            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                        </div>
                    `;
                    
                    toastContainer.appendChild(toast);
                    const bsToast = new bootstrap.Toast(toast);
                    bsToast.show();
                    
                    // Tự động xóa toast sau 5 giây
                    setTimeout(() => {
                        toast.remove();
                    }, 5000);
                }

                function createToastContainer() {
                    const container = document.createElement('div');
                    container.id = 'toastContainer';
                    container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
                    document.body.appendChild(container);
                    return container;
                }

                document.addEventListener('click', e => {
                    const attendanceBtn = e.target.closest('.attendance-btn');
                    if (attendanceBtn) {
                        if (!isAdmin) return alert('Chỉ admin mới có thể điểm danh.');
                        loadAttendanceModal(attendanceBtn.getAttribute('data-id'));
                    }
                    const joinBtn = e.target.closest('.join-btn');
                    if (joinBtn) {
                        const id = joinBtn.getAttribute('data-id');
                        handleJoinActivity(id);
                    }
                });

                handleFormSubmit('addActivityForm', 'addActivitySpinner', 'addActivityError', data => {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    }
                });
                ";
        // line 669
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 669, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 670
            yield "                    handleFormSubmit('editActivityForm";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 670), "html", null, true);
            yield "', 'editActivitySpinner";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 670), "html", null, true);
            yield "', 'editActivityError";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 670), "html", null, true);
            yield "', data => {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        }
                    });
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        yield "
                // Xử lý sự kiện cho modal sửa hoạt động
                document.querySelectorAll('[data-bs-toggle=\"modal\"]').forEach(button => {
                    if (button.getAttribute('data-bs-target')?.startsWith('#editActivityModal')) {
                        button.addEventListener('click', () => {
                            const activityId = button.getAttribute('data-bs-target').replace('#editActivityModal', '');
                            const activity = activitiesData.find(a => a.id === activityId);
                            if (!activity) return;

                            const subDynamicContent = document.getElementById('subDynamicContent');
                            if (subDynamicContent) {
                                subDynamicContent.innerHTML = `
                                    <div class=\"modal fade\" id=\"editActivityModal\${activityId}\" tabindex=\"-1\" aria-labelledby=\"editActivityModalLabel\${activityId}\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"editActivityModalLabel\${activityId}\">Chỉnh sửa hoạt động: \${activity.title}</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"alert alert-danger d-none\" id=\"editActivityError\${activityId}\"></div>
                                                    <form id=\"editActivityForm\${activityId}\" class=\"needs-validation\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editTitle\${activityId}\" class=\"form-label\">Tiêu đề</label>
                                                                    <input type=\"text\" class=\"form-control\" id=\"editTitle\${activityId}\" name=\"title\" value=\"\${activity.title}\" required>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editDate\${activityId}\" class=\"form-label\">Ngày</label>
                                                                    <input type=\"date\" class=\"form-control\" id=\"editDate\${activityId}\" name=\"date\" value=\"\${activity.date}\" required>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editTime\${activityId}\" class=\"form-label\">Thời gian</label>
                                                                    <input type=\"time\" class=\"form-control\" id=\"editTime\${activityId}\" name=\"time\" value=\"\${activity.time}\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editLocation\${activityId}\" class=\"form-label\">Địa điểm</label>
                                                                    <input type=\"text\" class=\"form-control\" id=\"editLocation\${activityId}\" name=\"location\" value=\"\${activity.location}\" required>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editStatus\${activityId}\" class=\"form-label\">Trạng thái</label>
                                                                    <select class=\"form-control\" id=\"editStatus\${activityId}\" name=\"status\" required>
                                                                        <option value=\"planned\" \${activity.status === 'planned' ? 'selected' : ''}>Dự kiến</option>
                                                                        <option value=\"ongoing\" \${activity.status === 'ongoing' ? 'selected' : ''}>Đang diễn ra</option>
                                                                        <option value=\"completed\" \${activity.status === 'completed' ? 'selected' : ''}>Đã hoàn thành</option>
                                                                        <option value=\"cancelled\" \${activity.status === 'cancelled' ? 'selected' : ''}>Đã hủy</option>
                                                                    </select>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label class=\"form-label\">Hình ảnh</label>
                                                                    \${activity.image ? `
                                                                        <div class=\"current-image mb-2\">
                                                                            <label class=\"form-label\">Hình ảnh hiện tại:</label>
                                                                            <div class=\"d-flex align-items-center\">
                                                                                <img src=\"\${activity.image}\" alt=\"\${activity.title}\" class=\"img-thumbnail me-2\" style=\"max-height: 100px;\">
                                                                                <div class=\"form-text\">\${activity.image.split('/').pop()}</div>
                                                                            </div>
                                                                        </div>
                                                                    ` : ''}
                                                                    <input type=\"file\" class=\"form-control\" id=\"editImage\${activityId}\" name=\"image\" accept=\"image/*\" onchange=\"previewImage(this, 'imagePreview\${activityId}')\">
                                                                    <div id=\"imagePreview\${activityId}\" class=\"mt-2 d-none\">
                                                                        <label class=\"form-label\">Xem trước:</label>
                                                                        <img src=\"\" alt=\"Preview\" class=\"img-thumbnail\" style=\"max-height: 100px;\">
                                                                    </div>
                                                                    <div class=\"form-text\">
                                                                        Chấp nhận file: JPG, PNG, GIF (tối đa 5MB)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"mb-3\">
                                                            <label for=\"editDescription\${activityId}\" class=\"form-label\">Mô tả</label>
                                                            <textarea class=\"form-control\" id=\"editDescription\${activityId}\" name=\"description\" rows=\"4\" required>\${activity.description}</textarea>
                                                        </div>
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary w-100\">
                                                            <span class=\"spinner-border spinner-border-sm d-none\" id=\"editActivitySpinner\${activityId}\"></span>
                                                            Lưu thay đổi
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;

                                // Khởi tạo modal
                                const modal = new bootstrap.Modal(document.getElementById(`editActivityModal\${activityId}`));
                                modal.show();

                                // Xử lý submit form
                                const form = document.getElementById(`editActivityForm\${activityId}`);
                                if (form) {
                                    form.addEventListener('submit', async function(e) {
                                        e.preventDefault();
                                        if (!this.checkValidity()) {
                                            e.stopPropagation();
                                            this.classList.add('was-validated');
                                            return;
                                        }

                                        const submitBtn = this.querySelector('button[type=\"submit\"]');
                                        const spinner = document.getElementById(`editActivitySpinner\${activityId}`);
                                        const errorDiv = document.getElementById(`editActivityError\${activityId}`);

                                        try {
                                            submitBtn.disabled = true;
                                            spinner.classList.remove('d-none');
                                            if (errorDiv) errorDiv.classList.add('d-none');

                                            const formData = new FormData(this);
                                            formData.append('_token', '";
        // line 789
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit"), "html", null, true);
        yield "');

                                            const response = await fetch(`/activities/\${activityId}/edit`, {
                                                method: 'POST',
                                                body: formData
                                            });

                                            if (!response.ok) {
                                                throw new Error(`HTTP error! status: \${response.status}`);
                                            }

                                            const data = await response.json();
                                            
                                            if (data.success) {
                                                if (data.redirect) {
                                                    window.location.href = data.redirect;
                                                } else {
                                                    modal.hide();
                                                    const activity = activitiesData.find(a => a.id === activityId);
                                                    if (activity) {
                                                        activity.title = formData.get('title');
                                                        activity.date = formData.get('date');
                                                        activity.time = formData.get('time');
                                                        activity.location = formData.get('location');
                                                        activity.status = formData.get('status');
                                                        activity.description = formData.get('description');
                                                        if (data.image) {
                                                            activity.image = data.image;
                                                        }
                                                        activitiesTable.renderTable();
                                                        displayActivityDetails(activity);
                                                    }
                                                }
                                                showToast('success', 'Cập nhật hoạt động thành công!');
                                            } else {
                                                throw new Error(data.error || 'Có lỗi xảy ra khi cập nhật hoạt động.');
                                            }
                                        } catch (error) {
                                            console.error('Error:', error);
                                            if (errorDiv) {
                                                errorDiv.textContent = error.message || 'Có lỗi xảy ra. Vui lòng thử lại.';
                                                errorDiv.classList.remove('d-none');
                                            }
                                            showToast('error', error.message || 'Có lỗi xảy ra khi cập nhật hoạt động.');
                                        } finally {
                                            submitBtn.disabled = false;
                                            spinner.classList.add('d-none');
                                        }
                                    });
                                }
                            }
                        });
                    }
                });
            });

            function previewImage(input, previewId) {
                const preview = document.getElementById(previewId);
                const previewImg = preview.querySelector('img');
                
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                        preview.classList.remove('d-none');
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                } else {
                    previewImg.src = '';
                    preview.classList.add('d-none');
                }
            }

            // Thêm validation cho form
            document.querySelectorAll('form.needs-validation').forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                });
            });
        </script>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 878
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

        // line 879
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusFilter = document.getElementById('statusFilter');
        const searchInput = document.getElementById('activitiesSearchInput');
        const clearButton = document.getElementById('activitiesClearSearchBtn');

        function updateFilters() {
            const searchValue = searchInput.value.trim();
            const statusValue = statusFilter.value;
            const params = new URLSearchParams(window.location.search);

            if (searchValue) {
                params.set('search', searchValue);
            } else {
                params.delete('search');
            }

            if (statusValue) {
                params.set('status', statusValue);
            } else {
                params.delete('status');
            }

            window.location.href = `\${window.location.pathname}?\${params.toString()}`;
        }

        statusFilter.addEventListener('change', updateFilters);
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                updateFilters();
            }
        });

        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            statusFilter.value = '';
            updateFilters();
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
        return "activities/index.html.twig";
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
        return array (  1246 => 879,  1233 => 878,  1134 => 789,  1019 => 676,  1002 => 670,  998 => 669,  849 => 522,  843 => 519,  840 => 518,  838 => 517,  622 => 303,  609 => 300,  605 => 299,  601 => 298,  597 => 297,  593 => 296,  589 => 295,  585 => 294,  581 => 293,  577 => 292,  573 => 291,  569 => 290,  566 => 289,  562 => 288,  557 => 286,  549 => 281,  545 => 279,  530 => 270,  522 => 265,  506 => 252,  499 => 248,  495 => 247,  489 => 244,  485 => 243,  474 => 237,  464 => 233,  460 => 232,  456 => 230,  444 => 224,  438 => 221,  433 => 219,  420 => 209,  417 => 208,  415 => 206,  414 => 202,  409 => 201,  402 => 197,  396 => 196,  391 => 193,  389 => 192,  384 => 190,  380 => 189,  374 => 186,  370 => 185,  366 => 184,  360 => 181,  356 => 180,  347 => 176,  337 => 172,  333 => 171,  323 => 164,  315 => 159,  309 => 156,  305 => 155,  301 => 154,  295 => 151,  291 => 150,  287 => 149,  281 => 146,  261 => 129,  228 => 98,  222 => 94,  220 => 93,  193 => 68,  179 => 60,  175 => 59,  167 => 54,  163 => 53,  159 => 52,  151 => 46,  147 => 45,  144 => 44,  142 => 38,  141 => 31,  140 => 24,  139 => 17,  138 => 14,  133 => 11,  120 => 10,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý hoạt động{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/activities.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <!-- Statistics Cards -->
        <div class=\"row mb-4\">
            {% set stats = [
                {
                    'title': 'Tổng số hoạt động',
                    'count': totalActivities,
                    'style': 'bg-gradient-primary',
                    'icon': 'fas fa-calendar',
                    'text_class': 'text-primary'
                },
                {
                    'title': 'Hoạt động đang diễn ra',
                    'count': ongoingActivities,
                    'style': 'bg-gradient-success',
                    'icon': 'fas fa-play',
                    'text_class': 'text-success'
                },
                {
                    'title': 'Hoạt động sắp diễn ra',
                    'count': pendingActivities,
                    'style': 'bg-gradient-warning',
                    'icon': 'fas fa-clock',
                    'text_class': 'text-warning'
                },
                {
                    'title': 'Hoạt động đã kết thúc',
                    'count': completedActivities,
                    'style': 'bg-gradient-info',
                    'icon': 'fas fa-check',
                    'text_class': 'text-info'
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
                                            {{ stat.count }}
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

        <!-- Dynamic Content -->
        <div id=\"dynamicContent\" class=\"mb-4 px-0\">
            <div class=\"card\">
                <div class=\"card-body text-center py-4\">
                    <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                    <h5>Chọn một hoạt động để xem chi tiết</h5>
                    <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm hoạt động\" để tạo mới</p>
                </div>
            </div>
        </div>

        <!-- Activity Management -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý hoạt động</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"activitiesSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm hoạt động...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"activitiesClearSearchBtn\" class=\"btn btn-sm btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                </div>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <button type=\"button\" class=\"btn btn-sm btn-success mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addActivityModal\">
                                        <i class=\"fas fa-plus me-1\"></i> Thêm hoạt động
                                    </button>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 1080px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"title\">Tiêu đề</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"date\">Ngày</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"location\">Địa điểm</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"status\">Trạng thái</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"createdBy\">Người tạo</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id=\"activitiesTableBody\">
                                    <!-- Populated via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            {{ knp_pagination_render(activities, null, {'search': search}) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Thêm hoạt động -->
        <div class=\"modal fade\" id=\"addActivityModal\" tabindex=\"-1\" aria-labelledby=\"addActivityModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addActivityModalLabel\">Thêm hoạt động mới</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert alert-danger d-none\" id=\"addActivityError\"></div>
                        {{ form_start(addActivityForm, {'attr': {'id': 'addActivityForm'}}) }}
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    {{ form_row(addActivityForm.title, {'label': 'Tiêu đề', 'attr': {'class': 'form-control'}}) }}
                                    {{ form_row(addActivityForm.date, {'label': 'Ngày', 'attr': {'class': 'form-control'}}) }}
                                    {{ form_row(addActivityForm.time, {'label': 'Thời gian', 'attr': {'class': 'form-control'}}) }}
                                </div>
                                <div class=\"col-md-6\">
                                    {{ form_row(addActivityForm.location, {'label': 'Địa điểm', 'attr': {'class': 'form-control'}}) }}
                                    {{ form_row(addActivityForm.status, {'label': 'Trạng thái', 'attr': {'class': 'form-control'}}) }}
                                    {{ form_row(addActivityForm.image, {'label': 'Hình ảnh', 'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            {{ form_row(addActivityForm.description, {'label': 'Mô tả', 'attr': {'class': 'form-control', 'rows': 4}}) }}
                            <button type=\"submit\" class=\"btn btn-sm btn-success w-100\">
                                <span class=\"spinner-border spinner-border-sm d-none\" id=\"addActivitySpinner\"></span>
                                Thêm hoạt động
                            </button>
                        {{ form_end(addActivityForm) }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa hoạt động -->
        {% for activity in activities %}
            <div class=\"modal fade\" id=\"editActivityModal{{ activity.id }}\" tabindex=\"-1\" aria-labelledby=\"editActivityModalLabel{{ activity.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editActivityModalLabel{{ activity.id }}\">Chỉnh sửa hoạt động: {{ activity.title }}</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"alert alert-danger d-none\" id=\"editActivityError{{ activity.id }}\"></div>
                            {{ form_start(editActivityForms[activity.id], {'attr': {'id': 'editActivityForm' ~ activity.id, 'class': 'needs-validation'}}) }}
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        {{ form_row(editActivityForms[activity.id].title, {'label': 'Tiêu đề', 'attr': {'class': 'form-control'}}) }}
                                        {{ form_row(editActivityForms[activity.id].date, {'label': 'Ngày', 'attr': {'class': 'form-control'}}) }}
                                        {{ form_row(editActivityForms[activity.id].time, {'label': 'Thời gian', 'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        {{ form_row(editActivityForms[activity.id].location, {'label': 'Địa điểm', 'attr': {'class': 'form-control'}}) }}
                                        {{ form_row(editActivityForms[activity.id].status, {'label': 'Trạng thái', 'attr': {'class': 'form-control'}}) }}
                                        <div class=\"mb-3\">
                                            {% if activity.image %}
                                                <div class=\"current-image mb-2\">
                                                    <label class=\"form-label\">Hình ảnh hiện tại:</label>
                                                    <div class=\"d-flex align-items-center\">
                                                        <img src=\"{{ asset('uploads/activities/' ~ activity.image) }}\" alt=\"{{ activity.title }}\" class=\"img-thumbnail me-2\" style=\"max-height: 100px;\">
                                                        <div class=\"form-text\">{{ activity.image }}</div>
                                                    </div>
                                                </div>
                                            {% endif %}
                                            {{ form_label(editActivityForms[activity.id].image, 'Thay đổi hình ảnh') }}
                                            {{ form_widget(editActivityForms[activity.id].image, {
                                                'attr': {
                                                    'class': 'form-control',
                                                    'accept': 'image/*',
                                                    'onchange': 'previewImage(this, \"imagePreview' ~ activity.id ~ '\")'
                                                }
                                            }) }}
                                            <div id=\"imagePreview{{ activity.id }}\" class=\"mt-2 d-none\">
                                                <label class=\"form-label\">Xem trước:</label>
                                                <img src=\"\" alt=\"Preview\" class=\"img-thumbnail\" style=\"max-height: 100px;\">
                                            </div>
                                            <div class=\"form-text\">
                                                Chấp nhận file: JPG, PNG, GIF (tối đa 5MB)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{ form_row(editActivityForms[activity.id].description, {'label': 'Mô tả', 'attr': {'class': 'form-control', 'rows': 4}}) }}
                                <button type=\"submit\" class=\"btn btn-sm btn-primary w-100\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" id=\"editActivitySpinner{{ activity.id }}\"></span>
                                    Lưu thay đổi
                                </button>
                            {{ form_end(editActivityForms[activity.id]) }}
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}

        <!-- Modal: Điểm danh -->
        {% for activity in activities %}
            <div class=\"modal fade\" id=\"attendanceModal{{ activity.id }}\" tabindex=\"-1\" aria-labelledby=\"attendanceModalLabel{{ activity.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-gradient-primary text-white\">
                            <h5 class=\"modal-title text-white\" id=\"attendanceModalLabel{{ activity.id }}\">Điểm danh: {{ activity.title }}</h5>
                            <button type=\"button\" class=\"btn-close text-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <p><strong>ID Hoạt động:</strong> {{ activity.id }}</p>
                                    <p><strong>Tên Hoạt động:</strong> {{ activity.title }}</p>
                                </div>
                                <div class=\"col-md-6 text-end\">
                                    <p><strong>Số lượng tham gia:</strong> <span id=\"participantCount{{ activity.id }}\">Đang tải...</span></p>
                                    <p><strong>Tổng số đã điểm danh:</strong> <span id=\"attendedCount{{ activity.id }}\">Đang tải...</span></p>
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"text\" id=\"participantSearch{{ activity.id }}\" class=\"form-control\" placeholder=\"Tìm kiếm thành viên...\">
                            </div>
                            <h6 class=\"text-uppercase text-secondary font-weight-bold\">Danh sách tham gia:</h6>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered align-items-center mb-0\">
                                    <thead class=\"bg-light\">
                                        <tr>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID Người dùng</th>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mã sinh viên</th>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Tên</th>
                                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Điểm danh</th>
                                        </tr>
                                    </thead>
                                    <tbody id=\"participantList{{ activity.id }}\">
                                        <!-- Populated via JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"alert alert-danger d-none mt-3\" id=\"attendanceError{{ activity.id }}\"></div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-sm btn-secondary\" data-bs-dismiss=\"modal\">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}

        <!-- Include table-layout.js -->
        <script src=\"{{ asset('js/table-layout.js') }}\"></script>

        <!-- JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const isAdmin = {{ is_granted('ROLE_ADMIN') ? 'true' : 'false' }};
                const activitiesData = [
                    {% for activity in activities %}
                        {
                            id: '{{ activity.id }}',
                            title: '{{ activity.title|e('js') }}',
                            date: '{{ activity.date ? activity.date|date('Y-m-d') : 'N/A' }}',
                            location: '{{ activity.location ? activity.location|e('js') : 'N/A' }}',
                            status: '{{ activity.status|e('js') }}',
                            createdBy: '{{ activity.createdBy.name|e('js') }}',
                            description: '{{ (activity.description ?: 'N/A')|e('js') }}',
                            time: '{{ activity.time ? activity.time|date('H:i') : 'N/A' }}',
                            image: '{{ activity.image ? asset('uploads/activities/' ~ activity.image)|e('js') : '' }}',
                            participantsCount: {{ activityParticipants[activity.id]|default([])|length }},
                            hasJoined: {% if app.user %}{{ activityParticipants[activity.id]|default([])|filter(p => p.userId.id == app.user.id)|length > 0 ? 'true' : 'false' }}{% else %}false{% endif %},
                        },
                    {% endfor %}
                ];

                console.log('Activities Data:', activitiesData);

                const activitiesTable = new TableLayout({
                    data: activitiesData,
                    tableBodyId: 'activitiesTableBody',
                    searchInputId: 'activitiesSearchInput',
                    clearSearchBtnId: 'activitiesClearSearchBtn',
                    paginationId: 'activitiesPagination',
                    columns: [
                        {
                            field: 'title',
                            formatter: (value, data) => `
                                <div class=\"d-flex px-2 py-1\" data-id=\"\${data.id}\">
                                    <div class=\"d-flex flex-column justify-content-center\" data-id=\"\${data.id}\">
                                        <h6 class=\"mb-0 text-sm\" data-id=\"\${data.id}\">\${value.length > 25 ? value.slice(0, 25) + '...' : value}</h6>
                                    </div>
                                </div>
                            `
                        },
                        { field: 'date', type: 'date' },
                        {
                            field: 'location',
                            formatter: (value, data) => `<p class=\"text-xs font-weight-bold mb-0\" data-id=\"\${data.id}\">\${value.length > 20 ? value.slice(0, 20) + '...' : value}</p>`
                        },
                        {
                            field: 'status',
                            formatter: (value, data) => `
                                <span class=\"badge bg-\${value === 'planned' ? 'primary' : (value === 'ongoing' ? 'success' : (value === 'completed' ? 'info' : 'danger'))}\" data-id=\"\${data.id}\">\${value}</span>
                            `
                        },
                        { field: 'createdBy' }
                    ],
                    onRowClick: (row) => {
                        const activityId = row.getAttribute('data-id');
                        if (!activityId) {
                            console.error('Invalid row clicked:', row);
                            return;
                        }
                        let userDetailContainer = document.getElementById('dynamicContent');
                        window.scrollTo(0, userDetailContainer.offsetTop);
                        const activity = activitiesData.find(a => a.id === activityId);
                        if (activity) displayActivityDetails(activity);
                        else console.error('Activity not found for ID:', activityId);
                    },
                    onDelete: button => {
                        if (!confirm('Bạn có chắc chắn muốn hủy hoạt động này?')) return;
                        const id = button.getAttribute('data-id');
                        const csrfToken = button.getAttribute('data-csrf-token');
                        fetch(`/activities/\${id}/cancel`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `_token=\${csrfToken}`
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) window.location.href = data.redirect;
                                else alert(data.error || 'Có lỗi xảy ra.');
                            })
                            .catch(error => alert('Lỗi: ' + error.message));
                    },
                    scrollPositionKey: 'activities_table_scroll_position'
                });

                // Listener thủ công cho click hàng
                document.getElementById('activitiesTableBody').addEventListener('click', (e) => {
                    const activityId = e.target.getAttribute('data-id');
                    if (!activityId) {
                        console.error('Invalid element clicked:', e.target);
                        return;
                    }
                    console.log('Row clicked:', activityId);
                    const activity = activitiesData.find(a => a.id === activityId);
                    if (activity) {
                        displayActivityDetails(activity);
                    } else {
                        console.error('Activity not found for ID:', activityId);
                    }
                });

                let currentActivityId = null;

                function displayActivityDetails(activity) {
                    if (!activity || currentActivityId === activity.id) return;
                    currentActivityId = activity.id;
                    const dynamicContent = document.getElementById('dynamicContent');
                    if (!dynamicContent) return console.error(\"Element 'dynamicContent' not found.\");

                    const buttons = isAdmin ? `
                        <button type=\"button\" class=\"btn btn-sm btn-primary me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#editActivityModal\${activity.id}\">Chỉnh sửa</button>
                        \${activity.status !== 'cancelled' ? `
                            <button type=\"button\" class=\"btn btn-sm btn-success attendance-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#attendanceModal\${activity.id}\" data-id=\"\${activity.id}\">Điểm danh</button>
                        ` : ''}
                    ` : (activity.status === 'planned' || activity.status === 'ongoing') && !activity.hasJoined ? `
                        <button type=\"button\" class=\"btn btn-sm btn-info join-btn me-2\" data-id=\"\${activity.id}\">Tham gia</button>
                    ` : '';

                    dynamicContent.innerHTML = `
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h6 class=\"mb-0\">\${activity.title}</h6>
                                <button type=\"button\" class=\"btn-close\" aria-label=\"Đóng\" onclick=\"resetDynamicContent()\"></button>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <p><strong>Mô tả:</strong> \${activity.description}</p>
                                        <p><strong>Thời gian:</strong> \${activity.time} - \${activity.date}</p>
                                        <p><strong>Địa điểm:</strong> \${activity.location}</p>
                                        <p><strong>Số người tham gia:</strong> \${activity.participantsCount}</p>
                                        <div class=\"d-flex\">\${buttons}</div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        \${activity.image ? `
                                            <div class=\"text-center\">
                                                <img src=\"\${activity.image}\" class=\"img-fluid rounded\" alt=\"\${activity.title}\" style=\"max-height: 200px;\">
                                            </div>
                                        ` : ''}
                                    </div>
                                </div>
                                <div id=\"subDynamicContent\"></div>
                            </div>
                        </div>
                    `
                }

                function resetDynamicContent() {
                    currentActivityId = null;
                    document.getElementById('dynamicContent').innerHTML = `
                        <div class=\"card\">
                            <div class=\"card-body text-center py-4\">
                                <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                                <h5>Chọn một hoạt động để xem chi tiết</h5>
                                <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm hoạt động\" để tạo mới</p>
                            </div>
                        </div>
                    `;
                }

                function loadAttendanceModal(activityId) {
                    const elements = {
                        list: document.getElementById(`participantList\${activityId}`),
                        count: document.getElementById(`participantCount\${activityId}`),
                        attended: document.getElementById(`attendedCount\${activityId}`),
                        error: document.getElementById(`attendanceError\${activityId}`),
                        search: document.getElementById(`participantSearch\${activityId}`)
                    };

                    elements.list.innerHTML = '<tr><td colspan=\"4\">Đang tải...</td></tr>';
                    elements.count.textContent = elements.attended.textContent = 'Đang tải...';
                    elements.error.classList.add('d-none');

                    fetch(`/activities/\${activityId}/participants`)
                        .then(response => response.json())
                        .then(data => {
                            if (!data.success) throw new Error(data.error || 'Không thể tải dữ liệu.');
                            elements.count.textContent = data.totalParticipants;
                            elements.attended.textContent = data.totalAttended;
                            elements.list.innerHTML = data.participants.map(p => `
                                <tr>
                                    <td>\${p.id}</td>
                                    <td>\${p.studentId || 'N/A'}</td>
                                    <td>\${p.name}</td>
                                    <td>
                                        <button class=\"btn btn-sm btn-\${p.attended ? 'success' : 'danger'} attendance-toggle-btn mb-0\"
                                                data-activity-id=\"\${activityId}\"
                                                data-user-id=\"\${p.id}\"
                                                data-status=\"\${p.attended ? 'present' : 'absent'}\"
                                                \${isAdmin ? '' : 'disabled'}>
                                            \${p.attended ? 'Có mặt' : 'Vắng'}
                                        </button>
                                    </td>
                                </tr>
                            `).join('');

                            elements.search.addEventListener('input', () => {
                                const query = elements.search.value.toLowerCase();
                                Array.from(elements.list.children).forEach(row => {
                                    row.style.display = row.textContent.toLowerCase().includes(query) ? '' : 'none';
                                });
                            });

                            elements.list.querySelectorAll('.attendance-toggle-btn').forEach(btn => {
                                btn.addEventListener('click', () => {
                                    const userId = btn.getAttribute('data-user-id');
                                    const newStatus = btn.getAttribute('data-status') === 'present' ? 'absent' : 'present';
                                    fetch('/activities/attendance/toggle', {
                                        method: 'POST',
                                        headers: { 'Content-Type': 'application/json' },
                                        body: JSON.stringify({ activity_id: activityId, user_id: userId, status: newStatus })
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) loadAttendanceModal(activityId);
                                            else throw new Error(data.error || 'Không thể cập nhật trạng thái.');
                                        })
                                        .catch(error => {
                                            elements.error.textContent = 'Lỗi: ' + error.message;
                                            elements.error.classList.remove('d-none');
                                        });
                                });
                            });
                        })
                        .catch(error => {
                            elements.list.innerHTML = '<tr><td colspan=\"4\">Lỗi: Không thể tải dữ liệu.</td></tr>';
                            elements.count.textContent = elements.attended.textContent = 'N/A';
                            elements.error.textContent = 'Lỗi: ' + error.message;
                            elements.error.classList.remove('d-none');
                        });
                }

                function handleJoinActivity(activityId) {
                    if (isAdmin) return alert('Admin không thể tham gia hoạt động.');
                    {% if not app.user %}
                        alert('Vui lòng đăng nhập để tham gia hoạt động.');
                        window.location.href = '{{ path('app_login') }}';
                        return;
                    {% endif %}
                    fetch(`/activities/\${activityId}/join`, {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' }
                    })
                        .then(response => {
                            if (!response.ok) {
                                return response.text().then(text => {
                                    throw new Error('Phản hồi không phải JSON: ' + text.slice(0, 50));
                                });
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                alert('Tham gia hoạt động thành công!');
                                const activity = activitiesData.find(a => a.id === activityId);
                                if (activity) {
                                    activity.hasJoined = true;
                                    activity.participantsCount++;
                                    activitiesTable.renderTable();
                                    displayActivityDetails(activity);
                                }
                            } else {
                                alert(data.error || 'Không thể tham gia hoạt động.');
                            }
                        })
                        .catch(error => {
                            console.error('Join error:', error);
                            alert('Lỗi: ' + error.message);
                        });
                }

                function handleFormSubmit(formId, spinnerId, errorId, callback) {
                    const form = document.getElementById(formId);
                    if (!form) return;
                    
                    form.addEventListener('submit', async e => {
                        e.preventDefault();
                        const submitBtn = form.querySelector('button[type=\"submit\"]');
                        const spinner = document.getElementById(spinnerId);
                        const errorDiv = document.getElementById(errorId);
                        
                        try {
                            // Show loading state
                            submitBtn.disabled = true;
                            spinner.classList.remove('d-none');
                            if (errorDiv) errorDiv.classList.add('d-none');

                            const formData = new FormData(form);
                            
                            const response = await fetch(form.action, {
                                method: 'POST',
                                body: formData
                            });

                            if (!response.ok) {
                                throw new Error(`HTTP error! status: \${response.status}`);
                            }

                            const contentType = response.headers.get(\"content-type\");
                            if (contentType && contentType.indexOf(\"application/json\") !== -1) {
                                const data = await response.json();
                                
                                if (data.success) {
                                    if (data.redirect) {
                                        window.location.href = data.redirect;
                                    } else if (callback) {
                                        callback(data);
                                    }
                                    // Hiển thị thông báo thành công
                                    showToast('success', 'Thao tác thành công!');
                                } else {
                                    throw new Error(data.error || 'Có lỗi xảy ra khi xử lý yêu cầu.');
                                }
                            } else {
                                window.location.href = response.url;
                            }
                        } catch (error) {
                            console.error('Error:', error);
                            if (errorDiv) {
                                errorDiv.textContent = error.message || 'Có lỗi xảy ra. Vui lòng thử lại.';
                                errorDiv.classList.remove('d-none');
                            }
                            // Hiển thị thông báo lỗi
                            showToast('error', error.message || 'Có lỗi xảy ra. Vui lòng thử lại.');
                        } finally {
                            // Reset loading state
                            submitBtn.disabled = false;
                            spinner.classList.add('d-none');
                        }
                    });
                }

                // Thêm hàm hiển thị toast
                function showToast(type, message) {
                    const toastContainer = document.getElementById('toastContainer') || createToastContainer();
                    const toast = document.createElement('div');
                    toast.className = `toast align-items-center text-white bg-\${type === 'success' ? 'success' : 'danger'} border-0`;
                    toast.setAttribute('role', 'alert');
                    toast.setAttribute('aria-live', 'assertive');
                    toast.setAttribute('aria-atomic', 'true');
                    
                    toast.innerHTML = `
                        <div class=\"d-flex\">
                            <div class=\"toast-body\">
                                \${message}
                            </div>
                            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                        </div>
                    `;
                    
                    toastContainer.appendChild(toast);
                    const bsToast = new bootstrap.Toast(toast);
                    bsToast.show();
                    
                    // Tự động xóa toast sau 5 giây
                    setTimeout(() => {
                        toast.remove();
                    }, 5000);
                }

                function createToastContainer() {
                    const container = document.createElement('div');
                    container.id = 'toastContainer';
                    container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
                    document.body.appendChild(container);
                    return container;
                }

                document.addEventListener('click', e => {
                    const attendanceBtn = e.target.closest('.attendance-btn');
                    if (attendanceBtn) {
                        if (!isAdmin) return alert('Chỉ admin mới có thể điểm danh.');
                        loadAttendanceModal(attendanceBtn.getAttribute('data-id'));
                    }
                    const joinBtn = e.target.closest('.join-btn');
                    if (joinBtn) {
                        const id = joinBtn.getAttribute('data-id');
                        handleJoinActivity(id);
                    }
                });

                handleFormSubmit('addActivityForm', 'addActivitySpinner', 'addActivityError', data => {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    }
                });
                {% for activity in activities %}
                    handleFormSubmit('editActivityForm{{ activity.id }}', 'editActivitySpinner{{ activity.id }}', 'editActivityError{{ activity.id }}', data => {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        }
                    });
                {% endfor %}

                // Xử lý sự kiện cho modal sửa hoạt động
                document.querySelectorAll('[data-bs-toggle=\"modal\"]').forEach(button => {
                    if (button.getAttribute('data-bs-target')?.startsWith('#editActivityModal')) {
                        button.addEventListener('click', () => {
                            const activityId = button.getAttribute('data-bs-target').replace('#editActivityModal', '');
                            const activity = activitiesData.find(a => a.id === activityId);
                            if (!activity) return;

                            const subDynamicContent = document.getElementById('subDynamicContent');
                            if (subDynamicContent) {
                                subDynamicContent.innerHTML = `
                                    <div class=\"modal fade\" id=\"editActivityModal\${activityId}\" tabindex=\"-1\" aria-labelledby=\"editActivityModalLabel\${activityId}\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"editActivityModalLabel\${activityId}\">Chỉnh sửa hoạt động: \${activity.title}</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"alert alert-danger d-none\" id=\"editActivityError\${activityId}\"></div>
                                                    <form id=\"editActivityForm\${activityId}\" class=\"needs-validation\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editTitle\${activityId}\" class=\"form-label\">Tiêu đề</label>
                                                                    <input type=\"text\" class=\"form-control\" id=\"editTitle\${activityId}\" name=\"title\" value=\"\${activity.title}\" required>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editDate\${activityId}\" class=\"form-label\">Ngày</label>
                                                                    <input type=\"date\" class=\"form-control\" id=\"editDate\${activityId}\" name=\"date\" value=\"\${activity.date}\" required>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editTime\${activityId}\" class=\"form-label\">Thời gian</label>
                                                                    <input type=\"time\" class=\"form-control\" id=\"editTime\${activityId}\" name=\"time\" value=\"\${activity.time}\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editLocation\${activityId}\" class=\"form-label\">Địa điểm</label>
                                                                    <input type=\"text\" class=\"form-control\" id=\"editLocation\${activityId}\" name=\"location\" value=\"\${activity.location}\" required>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label for=\"editStatus\${activityId}\" class=\"form-label\">Trạng thái</label>
                                                                    <select class=\"form-control\" id=\"editStatus\${activityId}\" name=\"status\" required>
                                                                        <option value=\"planned\" \${activity.status === 'planned' ? 'selected' : ''}>Dự kiến</option>
                                                                        <option value=\"ongoing\" \${activity.status === 'ongoing' ? 'selected' : ''}>Đang diễn ra</option>
                                                                        <option value=\"completed\" \${activity.status === 'completed' ? 'selected' : ''}>Đã hoàn thành</option>
                                                                        <option value=\"cancelled\" \${activity.status === 'cancelled' ? 'selected' : ''}>Đã hủy</option>
                                                                    </select>
                                                                </div>
                                                                <div class=\"mb-3\">
                                                                    <label class=\"form-label\">Hình ảnh</label>
                                                                    \${activity.image ? `
                                                                        <div class=\"current-image mb-2\">
                                                                            <label class=\"form-label\">Hình ảnh hiện tại:</label>
                                                                            <div class=\"d-flex align-items-center\">
                                                                                <img src=\"\${activity.image}\" alt=\"\${activity.title}\" class=\"img-thumbnail me-2\" style=\"max-height: 100px;\">
                                                                                <div class=\"form-text\">\${activity.image.split('/').pop()}</div>
                                                                            </div>
                                                                        </div>
                                                                    ` : ''}
                                                                    <input type=\"file\" class=\"form-control\" id=\"editImage\${activityId}\" name=\"image\" accept=\"image/*\" onchange=\"previewImage(this, 'imagePreview\${activityId}')\">
                                                                    <div id=\"imagePreview\${activityId}\" class=\"mt-2 d-none\">
                                                                        <label class=\"form-label\">Xem trước:</label>
                                                                        <img src=\"\" alt=\"Preview\" class=\"img-thumbnail\" style=\"max-height: 100px;\">
                                                                    </div>
                                                                    <div class=\"form-text\">
                                                                        Chấp nhận file: JPG, PNG, GIF (tối đa 5MB)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"mb-3\">
                                                            <label for=\"editDescription\${activityId}\" class=\"form-label\">Mô tả</label>
                                                            <textarea class=\"form-control\" id=\"editDescription\${activityId}\" name=\"description\" rows=\"4\" required>\${activity.description}</textarea>
                                                        </div>
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary w-100\">
                                                            <span class=\"spinner-border spinner-border-sm d-none\" id=\"editActivitySpinner\${activityId}\"></span>
                                                            Lưu thay đổi
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;

                                // Khởi tạo modal
                                const modal = new bootstrap.Modal(document.getElementById(`editActivityModal\${activityId}`));
                                modal.show();

                                // Xử lý submit form
                                const form = document.getElementById(`editActivityForm\${activityId}`);
                                if (form) {
                                    form.addEventListener('submit', async function(e) {
                                        e.preventDefault();
                                        if (!this.checkValidity()) {
                                            e.stopPropagation();
                                            this.classList.add('was-validated');
                                            return;
                                        }

                                        const submitBtn = this.querySelector('button[type=\"submit\"]');
                                        const spinner = document.getElementById(`editActivitySpinner\${activityId}`);
                                        const errorDiv = document.getElementById(`editActivityError\${activityId}`);

                                        try {
                                            submitBtn.disabled = true;
                                            spinner.classList.remove('d-none');
                                            if (errorDiv) errorDiv.classList.add('d-none');

                                            const formData = new FormData(this);
                                            formData.append('_token', '{{ csrf_token('edit') }}');

                                            const response = await fetch(`/activities/\${activityId}/edit`, {
                                                method: 'POST',
                                                body: formData
                                            });

                                            if (!response.ok) {
                                                throw new Error(`HTTP error! status: \${response.status}`);
                                            }

                                            const data = await response.json();
                                            
                                            if (data.success) {
                                                if (data.redirect) {
                                                    window.location.href = data.redirect;
                                                } else {
                                                    modal.hide();
                                                    const activity = activitiesData.find(a => a.id === activityId);
                                                    if (activity) {
                                                        activity.title = formData.get('title');
                                                        activity.date = formData.get('date');
                                                        activity.time = formData.get('time');
                                                        activity.location = formData.get('location');
                                                        activity.status = formData.get('status');
                                                        activity.description = formData.get('description');
                                                        if (data.image) {
                                                            activity.image = data.image;
                                                        }
                                                        activitiesTable.renderTable();
                                                        displayActivityDetails(activity);
                                                    }
                                                }
                                                showToast('success', 'Cập nhật hoạt động thành công!');
                                            } else {
                                                throw new Error(data.error || 'Có lỗi xảy ra khi cập nhật hoạt động.');
                                            }
                                        } catch (error) {
                                            console.error('Error:', error);
                                            if (errorDiv) {
                                                errorDiv.textContent = error.message || 'Có lỗi xảy ra. Vui lòng thử lại.';
                                                errorDiv.classList.remove('d-none');
                                            }
                                            showToast('error', error.message || 'Có lỗi xảy ra khi cập nhật hoạt động.');
                                        } finally {
                                            submitBtn.disabled = false;
                                            spinner.classList.add('d-none');
                                        }
                                    });
                                }
                            }
                        });
                    }
                });
            });

            function previewImage(input, previewId) {
                const preview = document.getElementById(previewId);
                const previewImg = preview.querySelector('img');
                
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                        preview.classList.remove('d-none');
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                } else {
                    previewImg.src = '';
                    preview.classList.add('d-none');
                }
            }

            // Thêm validation cho form
            document.querySelectorAll('form.needs-validation').forEach(form => {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                });
            });
        </script>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusFilter = document.getElementById('statusFilter');
        const searchInput = document.getElementById('activitiesSearchInput');
        const clearButton = document.getElementById('activitiesClearSearchBtn');

        function updateFilters() {
            const searchValue = searchInput.value.trim();
            const statusValue = statusFilter.value;
            const params = new URLSearchParams(window.location.search);

            if (searchValue) {
                params.set('search', searchValue);
            } else {
                params.delete('search');
            }

            if (statusValue) {
                params.set('status', statusValue);
            } else {
                params.delete('status');
            }

            window.location.href = `\${window.location.pathname}?\${params.toString()}`;
        }

        statusFilter.addEventListener('change', updateFilters);
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                updateFilters();
            }
        });

        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            statusFilter.value = '';
            updateFilters();
        });
    });
</script>
{% endblock %}", "activities/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\activities\\index.html.twig");
    }
}
