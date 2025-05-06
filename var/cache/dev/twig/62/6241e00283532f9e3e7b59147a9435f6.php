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

/* activities/index.html copy.twig */
class __TwigTemplate_5cf15fcabb521c54eecd338a299b216b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activities/index.html copy.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activities/index.html copy.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activities/index.html copy.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container-fluid\">
        <!-- Statistics Cards -->
        <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Tổng</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalActivities"]) || array_key_exists("totalActivities", $context) ? $context["totalActivities"] : (function () { throw new RuntimeError('Variable "totalActivities" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\">
                                    <i class=\"fas fa-calendar opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Đang diễn ra</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ongoingActivities"]) || array_key_exists("ongoingActivities", $context) ? $context["ongoingActivities"] : (function () { throw new RuntimeError('Variable "ongoingActivities" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                                    <i class=\"fas fa-play opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Sắp diễn ra</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pendingActivities"]) || array_key_exists("pendingActivities", $context) ? $context["pendingActivities"] : (function () { throw new RuntimeError('Variable "pendingActivities" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\">
                                    <i class=\"fas fa-clock opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Đã kết thúc</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["completedActivities"]) || array_key_exists("completedActivities", $context) ? $context["completedActivities"] : (function () { throw new RuntimeError('Variable "completedActivities" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-info shadow text-center border-radius-md\">
                                    <i class=\"fas fa-check opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                ";
        // line 118
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 119
            yield "                                    <button type=\"button\" class=\"btn btn-sm btn-success mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addActivityModal\">
                                        <i class=\"fas fa-plus me-1\"></i> Thêm hoạt động
                                    </button>
                                ";
        }
        // line 123
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
        // line 154
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 154, $this->source); })()), null, ["search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 154, $this->source); })())]);
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
        // line 171
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 171, $this->source); })()), 'form_start', ["attr" => ["id" => "addActivityForm"]]);
        yield "
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 174, $this->source); })()), "title", [], "any", false, false, false, 174), 'row', ["label" => "Tiêu đề", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 175, $this->source); })()), "date", [], "any", false, false, false, 175), 'row', ["label" => "Ngày", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 176, $this->source); })()), "time", [], "any", false, false, false, 176), 'row', ["label" => "Thời gian", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 179, $this->source); })()), "location", [], "any", false, false, false, 179), 'row', ["label" => "Địa điểm", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 180, $this->source); })()), "status", [], "any", false, false, false, 180), 'row', ["label" => "Trạng thái", "attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 181, $this->source); })()), "image", [], "any", false, false, false, 181), 'row', ["label" => "Hình ảnh", "attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 184, $this->source); })()), "description", [], "any", false, false, false, 184), 'row', ["label" => "Mô tả", "attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
                            <button type=\"submit\" class=\"btn btn-sm btn-success w-100\">
                                <span class=\"spinner-border spinner-border-sm d-none\" id=\"addActivitySpinner\"></span>
                                Thêm hoạt động
                            </button>
                        ";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addActivityForm"]) || array_key_exists("addActivityForm", $context) ? $context["addActivityForm"] : (function () { throw new RuntimeError('Variable "addActivityForm" does not exist.', 189, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa hoạt động -->
        ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 197
            yield "            <div class=\"modal fade\" id=\"editActivityModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 197), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editActivityModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 197), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editActivityModalLabel";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 201), "html", null, true);
            yield "\">Chỉnh sửa hoạt động: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 201), "html", null, true);
            yield "</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"alert alert-danger d-none\" id=\"editActivityError";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 205), "html", null, true);
            yield "\"></div>
                            ";
            // line 206
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 206, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 206), [], "array", false, false, false, 206), 'form_start', ["attr" => ["id" => ("editActivityForm" . CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 206)), "class" => "needs-validation"]]);
            yield "
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        ";
            // line 209
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 209, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 209), [], "array", false, false, false, 209), "title", [], "any", false, false, false, 209), 'row', ["label" => "Tiêu đề", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
            // line 210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 210, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 210), [], "array", false, false, false, 210), "date", [], "any", false, false, false, 210), 'row', ["label" => "Ngày", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
            // line 211
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 211, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 211), [], "array", false, false, false, 211), "time", [], "any", false, false, false, 211), 'row', ["label" => "Thời gian", "attr" => ["class" => "form-control"]]);
            yield "
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
            // line 214
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 214, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 214), [], "array", false, false, false, 214), "location", [], "any", false, false, false, 214), 'row', ["label" => "Địa điểm", "attr" => ["class" => "form-control"]]);
            yield "
                                        ";
            // line 215
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 215, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 215), [], "array", false, false, false, 215), "status", [], "any", false, false, false, 215), 'row', ["label" => "Trạng thái", "attr" => ["class" => "form-control"]]);
            yield "
                                        <div class=\"mb-3\">
                                            ";
            // line 217
            if (CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 217)) {
                // line 218
                yield "                                                <div class=\"current-image mb-2\">
                                                    <label class=\"form-label\">Hình ảnh hiện tại:</label>
                                                    <div class=\"d-flex align-items-center\">
                                                        <img src=\"";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/activities/" . CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 221))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 221), "html", null, true);
                yield "\" class=\"img-thumbnail me-2\" style=\"max-height: 100px;\">
                                                        <div class=\"form-text\">";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 222), "html", null, true);
                yield "</div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 226
            yield "                                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 226, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 226), [], "array", false, false, false, 226), "image", [], "any", false, false, false, 226), 'label', ["label" => "Thay đổi hình ảnh"]);
            yield "
                                            ";
            // line 227
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 227, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 227), [], "array", false, false, false, 227), "image", [], "any", false, false, false, 227), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*", "onchange" => (("previewImage(this, \"imagePreview" . CoreExtension::getAttribute($this->env, $this->source,             // line 231
$context["activity"], "id", [], "any", false, false, false, 231)) . "\")")]]);
            // line 233
            yield "
                                            <div id=\"imagePreview";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 234), "html", null, true);
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
            // line 244
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 244, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 244), [], "array", false, false, false, 244), "description", [], "any", false, false, false, 244), 'row', ["label" => "Mô tả", "attr" => ["class" => "form-control", "rows" => 4]]);
            yield "
                                <button type=\"submit\" class=\"btn btn-sm btn-primary w-100\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" id=\"editActivitySpinner";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 246), "html", null, true);
            yield "\"></span>
                                    Lưu thay đổi
                                </button>
                            ";
            // line 249
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editActivityForms"]) || array_key_exists("editActivityForms", $context) ? $context["editActivityForms"] : (function () { throw new RuntimeError('Variable "editActivityForms" does not exist.', 249, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 249), [], "array", false, false, false, 249), 'form_end');
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
        // line 255
        yield "
        <!-- Modal: Điểm danh -->
        ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 257, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 258
            yield "            <div class=\"modal fade\" id=\"attendanceModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 258), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"attendanceModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 258), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-gradient-primary text-white\">
                            <h5 class=\"modal-title text-white\" id=\"attendanceModalLabel";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 262), "html", null, true);
            yield "\">Điểm danh: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 262), "html", null, true);
            yield "</h5>
                            <button type=\"button\" class=\"btn-close text-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-md-6\">
                                    <p><strong>ID Hoạt động:</strong> ";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 268), "html", null, true);
            yield "</p>
                                    <p><strong>Tên Hoạt động:</strong> ";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 269), "html", null, true);
            yield "</p>
                                </div>
                                <div class=\"col-md-6 text-end\">
                                    <p><strong>Số lượng tham gia:</strong> <span id=\"participantCount";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 272), "html", null, true);
            yield "\">Đang tải...</span></p>
                                    <p><strong>Tổng số đã điểm danh:</strong> <span id=\"attendedCount";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 273), "html", null, true);
            yield "\">Đang tải...</span></p>
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <input type=\"text\" id=\"participantSearch";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 277), "html", null, true);
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
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 290), "html", null, true);
            yield "\">
                                        <!-- Populated via JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"alert alert-danger d-none mt-3\" id=\"attendanceError";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 295), "html", null, true);
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
        // line 304
        yield "
        <!-- Include table-layout.js -->
        <script src=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>

        <!-- JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const isAdmin = ";
        // line 311
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) ? ("true") : ("false"));
        yield ";
                const activitiesData = [
                    ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 313, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 314
            yield "                        {
                            id: '";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 315), "html", null, true);
            yield "',
                            title: '";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 316), "js"), "html", null, true);
            yield "',
                            date: '";
            // line 317
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 317)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date", [], "any", false, false, false, 317), "Y-m-d"), "html", null, true)) : ("N/A"));
            yield "',
                            location: '";
            // line 318
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "location", [], "any", false, false, false, 318)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "location", [], "any", false, false, false, 318), "js"), "html", null, true)) : ("N/A"));
            yield "',
                            status: '";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 319), "js"), "html", null, true);
            yield "',
                            createdBy: '";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "createdBy", [], "any", false, false, false, 320), "name", [], "any", false, false, false, 320), "js"), "html", null, true);
            yield "',
                            description: '";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 321)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 321)) : ("N/A")), "js"), "html", null, true);
            yield "',
                            time: '";
            // line 322
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "time", [], "any", false, false, false, 322)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "time", [], "any", false, false, false, 322), "H:i"), "html", null, true)) : ("N/A"));
            yield "',
                            image: '";
            // line 323
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 323)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/activities/" . CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "image", [], "any", false, false, false, 323))), "js"), "html", null, true)) : (""));
            yield "',
                            participantsCount: ";
            // line 324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["activityParticipants"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 324), [], "array", true, true, false, 324)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityParticipants"]) || array_key_exists("activityParticipants", $context) ? $context["activityParticipants"] : (function () { throw new RuntimeError('Variable "activityParticipants" does not exist.', 324, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 324), [], "array", false, false, false, 324), [])) : ([]))), "html", null, true);
            yield ",
                            hasJoined: ";
            // line 325
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "user", [], "any", false, false, false, 325)) {
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["activityParticipants"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 325), [], "array", true, true, false, 325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activityParticipants"]) || array_key_exists("activityParticipants", $context) ? $context["activityParticipants"] : (function () { throw new RuntimeError('Variable "activityParticipants" does not exist.', 325, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 325), [], "array", false, false, false, 325), [])) : ([])), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 325, $this->source); })()), "userId", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "user", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325)); })) > 0)) ? ("true") : ("false"));
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
        // line 328
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
        // line 542
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 542, $this->source); })()), "user", [], "any", false, false, false, 542)) {
            // line 543
            yield "                        alert('Vui lòng đăng nhập để tham gia hoạt động.');
                        window.location.href = '";
            // line 544
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "';
                        return;
                    ";
        }
        // line 547
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
        // line 694
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 694, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 695
            yield "                    handleFormSubmit('editActivityForm";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 695), "html", null, true);
            yield "', 'editActivitySpinner";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 695), "html", null, true);
            yield "', 'editActivityError";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 695), "html", null, true);
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
        // line 701
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
        // line 814
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

    // line 903
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

        // line 904
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
        return "activities/index.html copy.twig";
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
        return array (  1253 => 904,  1240 => 903,  1141 => 814,  1026 => 701,  1009 => 695,  1005 => 694,  856 => 547,  850 => 544,  847 => 543,  845 => 542,  629 => 328,  616 => 325,  612 => 324,  608 => 323,  604 => 322,  600 => 321,  596 => 320,  592 => 319,  588 => 318,  584 => 317,  580 => 316,  576 => 315,  573 => 314,  569 => 313,  564 => 311,  556 => 306,  552 => 304,  537 => 295,  529 => 290,  513 => 277,  506 => 273,  502 => 272,  496 => 269,  492 => 268,  481 => 262,  471 => 258,  467 => 257,  463 => 255,  451 => 249,  445 => 246,  440 => 244,  427 => 234,  424 => 233,  422 => 231,  421 => 227,  416 => 226,  409 => 222,  403 => 221,  398 => 218,  396 => 217,  391 => 215,  387 => 214,  381 => 211,  377 => 210,  373 => 209,  367 => 206,  363 => 205,  354 => 201,  344 => 197,  340 => 196,  330 => 189,  322 => 184,  316 => 181,  312 => 180,  308 => 179,  302 => 176,  298 => 175,  294 => 174,  288 => 171,  268 => 154,  235 => 123,  229 => 119,  227 => 118,  186 => 80,  162 => 59,  138 => 38,  114 => 17,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý hoạt động{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <!-- Statistics Cards -->
        <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Tổng</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        {{ totalActivities }}
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-primary shadow text-center border-radius-md\">
                                    <i class=\"fas fa-calendar opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Đang diễn ra</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        {{ ongoingActivities }}
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-success shadow text-center border-radius-md\">
                                    <i class=\"fas fa-play opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Sắp diễn ra</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        {{ pendingActivities }}
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-warning shadow text-center border-radius-md\">
                                    <i class=\"fas fa-clock opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body p-3\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <div class=\"numbers\">
                                    <p class=\"text-sm mb-0 text-uppercase font-weight-bold text-muted\">Đã kết thúc</p>
                                    <h3 class=\"font-weight-bold mb-0\">
                                        {{ completedActivities }}
                                    </h3>
                                </div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <div class=\"icon icon-shape bg-gradient-info shadow text-center border-radius-md\">
                                    <i class=\"fas fa-check opacity-10\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
{% endblock %}", "activities/index.html copy.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\activities\\index.html copy.twig");
    }
}
