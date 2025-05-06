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

/* funds/index.html.twig */
class __TwigTemplate_7164973485ed454fc8bd0f9695c0059c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funds/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "funds/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "funds/index.html.twig", 1);
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

        yield "Quản lý quỹ";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/funds.css"), "html", null, true);
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
        ";
        // line 13
        yield "        <div class=\"row mb-4\">
            ";
        // line 14
        $context["stats"] = [["title" => "Tổng số dư", "count" => ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(        // line 17
(isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 17, $this->source); })()), 0, ",", ".") . " VNĐ"), "style" => "bg-gradient-warning", "icon" => "fas fa-wallet", "text_class" => "text-warning"], ["title" => "Tổng thu", "count" => ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(        // line 24
(isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 24, $this->source); })()), 0, ",", ".") . " VNĐ"), "style" => "bg-gradient-success", "icon" => "fas fa-arrow-down", "text_class" => "text-success"], ["title" => "Tổng chi", "count" => ($this->extensions['Twig\Extension\CoreExtension']->formatNumber(        // line 31
(isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 31, $this->source); })()), 0, ",", ".") . " VNĐ"), "style" => "bg-gradient-danger", "icon" => "fas fa-arrow-up", "text_class" => "text-danger"], ["title" => "Giao dịch", "count" => (CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 38, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 38) . " giao dịch"), "style" => "bg-gradient-info", "icon" => "fas fa-exchange-alt", "text_class" => ""]];
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

        <!-- Biểu đồ biến động quỹ -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
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
        </div>

        <!-- Dynamic Content -->
        <div id=\"dynamicContent\" class=\"mb-4 px-0\">
            <div class=\"card\">
                <div class=\"card-body text-center py-4\">
                    <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                    <h5>Chọn một giao dịch để xem chi tiết</h5>
                    <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm giao dịch\" để tạo mới</p>
                </div>
            </div>
        </div>

        <!-- Bảng hiển thị dữ liệu -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý quỹ</h6>
                    <div class=\"d-flex align-items-center\">
                        <div class=\"d-flex align-items-center me-2 mb-0\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-transparent border-end-0\">
                                    <i class=\"fas fa-search text-secondary\"></i>
                                </span>
                                <input type=\"text\" id=\"fundsSearchInput\" class=\"form-control border-start-0\" placeholder=\"Tìm kiếm giao dịch...\" style=\"max-width: 300px;\">
                            </div>
                            <button type=\"button\" id=\"fundsClearSearchBtn\" class=\"btn btn-sm btn-outline-secondary mb-0 ms-2 d-none\">
                                <i class=\"fas fa-times me-1\"></i>Xóa bộ lọc
                            </button>
                        </div>
                        ";
        // line 125
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TREASURER")) {
            // line 126
            yield "                            <button type=\"button\" class=\"btn btn-sm btn-success mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addFundModal\">
                                <i class=\"fas fa-plus me-1\"></i> Thêm giao dịch
                            </button>
                        ";
        }
        // line 130
        yield "                    </div>
                </div>
            </div>
            <div class=\"card-body px-0 pt-0 pb-2\">
                <div class=\"table-responsive p-0 px-3\" style=\"max-height: 1080px; overflow-y: auto;\">
                    <table class=\"table table-hover align-items-center mb-0\">
                        <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mô tả</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Loại giao dịch</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Số tiền</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id=\"fundsTableBody\">
                            <!-- Populated via JavaScript -->
                        </tbody>
                    </table>
                </div>
                <div class=\"navigation mt-4\">
                    ";
        // line 152
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 152, $this->source); })()), null, ["search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 152, $this->source); })())]);
        yield "
                </div>
            </div>
        </div>

        <!-- Modal: Thêm giao dịch -->
        <div class=\"modal fade\" id=\"addFundModal\" tabindex=\"-1\" aria-labelledby=\"addFundModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addFundModalLabel\">Thêm giao dịch mới</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert alert-danger d-none\" id=\"addFundError\"></div>
                        ";
        // line 167
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 167, $this->source); })()), 'form_start', ["attr" => ["id" => "addFundForm", "class" => "needs-validation"]]);
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 169, $this->source); })()), "transaction_type", [], "any", false, false, false, 169), 'label');
        yield "
                                ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 170, $this->source); })()), "transaction_type", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 171, $this->source); })()), "transaction_type", [], "any", false, false, false, 171), 'errors');
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 174, $this->source); })()), "amount", [], "any", false, false, false, 174), 'label');
        yield "
                                <div class=\"input-group\">
                                    ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 176, $this->source); })()), "amount", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "step" => "1000"]]);
        yield "
                                    <span class=\"input-group-text\">VNĐ</span>
                                </div>
                                <div class=\"text-danger\">";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 179, $this->source); })()), "amount", [], "any", false, false, false, 179), 'errors');
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 182
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 182, $this->source); })()), "date", [], "any", false, false, false, 182), 'label');
        yield "
                                ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 183, $this->source); })()), "date", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 184, $this->source); })()), "date", [], "any", false, false, false, 184), 'errors');
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 187, $this->source); })()), "description", [], "any", false, false, false, 187), 'label');
        yield "
                                ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 188, $this->source); })()), "description", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control", "rows" => "3"]]);
        yield "
                                <div class=\"text-danger\">";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 189, $this->source); })()), "description", [], "any", false, false, false, 189), 'errors');
        yield "</div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary w-100\">
                                <span class=\"spinner-border spinner-border-sm d-none\" id=\"addFundSpinner\"></span>
                                Lưu
                            </button>
                        ";
        // line 195
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addFundForm"]) || array_key_exists("addFundForm", $context) ? $context["addFundForm"] : (function () { throw new RuntimeError('Variable "addFundForm" does not exist.', 195, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa giao dịch -->
        ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fund"]) {
            // line 203
            yield "            <div class=\"modal fade\" id=\"editFundModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 203), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"editFundModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 203), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editFundModalLabel";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 207), "html", null, true);
            yield "\">Sửa giao dịch #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 207), "html", null, true);
            yield "</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"alert alert-danger d-none\" id=\"editFundError";
            // line 211
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 211), "html", null, true);
            yield "\"></div>
                            ";
            // line 212
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 212, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 212), [], "array", false, false, false, 212), 'form_start', ["attr" => ["id" => ("editFundForm" . CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 212)), "class" => "needs-validation"]]);
            yield "
                                <div class=\"mb-3\">
                                    ";
            // line 214
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 214, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 214), [], "array", false, false, false, 214), "transaction_type", [], "any", false, false, false, 214), 'label');
            yield "
                                    ";
            // line 215
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 215, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 215), [], "array", false, false, false, 215), "transaction_type", [], "any", false, false, false, 215), 'widget', ["attr" => ["class" => "form-select"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 216
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 216, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 216), [], "array", false, false, false, 216), "transaction_type", [], "any", false, false, false, 216), 'errors');
            yield "</div>
                                </div>
                                <div class=\"mb-3\">
                                    ";
            // line 219
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 219, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 219), [], "array", false, false, false, 219), "amount", [], "any", false, false, false, 219), 'label');
            yield "
                                    <div class=\"input-group\">
                                        ";
            // line 221
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 221, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 221), [], "array", false, false, false, 221), "amount", [], "any", false, false, false, 221), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "step" => "1000"]]);
            yield "
                                        <span class=\"input-group-text\">VNĐ</span>
                                    </div>
                                    <div class=\"text-danger\">";
            // line 224
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 224, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 224), [], "array", false, false, false, 224), "amount", [], "any", false, false, false, 224), 'errors');
            yield "</div>
                                </div>
                                <div class=\"mb-3\">
                                    ";
            // line 227
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 227, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 227), [], "array", false, false, false, 227), "date", [], "any", false, false, false, 227), 'label');
            yield "
                                    ";
            // line 228
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 228, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 228), [], "array", false, false, false, 228), "date", [], "any", false, false, false, 228), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 229
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 229, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 229), [], "array", false, false, false, 229), "date", [], "any", false, false, false, 229), 'errors');
            yield "</div>
                                </div>
                                <div class=\"mb-3\">
                                    ";
            // line 232
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 232, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 232), [], "array", false, false, false, 232), "description", [], "any", false, false, false, 232), 'label');
            yield "
                                    ";
            // line 233
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 233, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 233), [], "array", false, false, false, 233), "description", [], "any", false, false, false, 233), 'widget', ["attr" => ["class" => "form-control", "rows" => "3"]]);
            yield "
                                    <div class=\"text-danger\">";
            // line 234
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 234, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 234), [], "array", false, false, false, 234), "description", [], "any", false, false, false, 234), 'errors');
            yield "</div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary w-100\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" id=\"editFundSpinner";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 237), "html", null, true);
            yield "\"></span>
                                    Lưu thay đổi
                                </button>
                            ";
            // line 240
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["editFundForms"]) || array_key_exists("editFundForms", $context) ? $context["editFundForms"] : (function () { throw new RuntimeError('Variable "editFundForms" does not exist.', 240, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 240), [], "array", false, false, false, 240), 'form_end');
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fund'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        yield "
        <!-- Modal: Xóa giao dịch -->
        ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 248, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fund"]) {
            // line 249
            yield "            <div class=\"modal fade\" id=\"deleteFundModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 249), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteFundModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 249), "html", null, true);
            yield "\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-danger text-white\">
                            <h5 class=\"modal-title\" id=\"deleteFundModalLabel";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 253), "html", null, true);
            yield "\">Xóa giao dịch #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 253), "html", null, true);
            yield "</h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <p>Bạn có chắc chắn muốn xóa giao dịch này?</p>
                            <div class=\"alert alert-warning\">
                                <strong>Thông tin giao dịch:</strong><br>
                                Ngày: ";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "date", [], "any", false, false, false, 260), "d/m/Y"), "html", null, true);
            yield "<br>
                                Loại: ";
            // line 261
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "transactionType", [], "any", false, false, false, 261) == "income")) ? ("Thu") : ("Chi"));
            yield "<br>
                                Số tiền: ";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "amount", [], "any", false, false, false, 262), 0, ",", "."), "html", null, true);
            yield " VNĐ<br>
                                Mô tả: ";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "description", [], "any", false, false, false, 263), "html", null, true);
            yield "
                            </div>
                            <form method=\"post\" action=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 265)]), "html", null, true);
            yield "\" id=\"deleteFundForm";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 265), "html", null, true);
            yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 266))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger w-100\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" id=\"deleteFundSpinner";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 268), "html", null, true);
            yield "\"></span>
                                    Xóa
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fund'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        yield "    </div>

    <script src=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isTreasurer = ";
        // line 282
        yield (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TREASURER")) ? ("true") : ("false"));
        yield ";
            const fundsData = [
                ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 284, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fund"]) {
            // line 285
            yield "                    {
                        id: '";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 286), "html", null, true);
            yield "',
                        date: '";
            // line 287
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "date", [], "any", false, false, false, 287)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "date", [], "any", false, false, false, 287), "Y-m-d"), "html", null, true)) : (""));
            yield "',
                        description: '";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "description", [], "any", false, false, false, 288), "js"), "html", null, true);
            yield "',
                        transaction_type: '";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "transactionType", [], "any", false, false, false, 289), "html", null, true);
            yield "',
                        amount: '";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "amount", [], "any", false, false, false, 290), 0, ",", "."), "html", null, true);
            yield " VNĐ',
                        createdBy: '";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "createdBy", [], "any", false, false, false, 291), "name", [], "any", false, false, false, 291), "js"), "html", null, true);
            yield "',
                        createdAt: '";
            // line 292
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "createdAt", [], "any", false, false, false, 292)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "createdAt", [], "any", false, false, false, 292), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "',
                        updatedAt: '";
            // line 293
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "updatedAt", [], "any", false, false, false, 293)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "updatedAt", [], "any", false, false, false, 293), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "'
                    },
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fund'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        yield "            ];

            console.log('Funds Data:', fundsData); // Debug data

            try {
                const fundsTable = new TableLayout({
                    data: fundsData,
                    tableBodyId: 'fundsTableBody',
                    searchInputId: 'fundsSearchInput',
                    clearSearchBtnId: 'fundsClearSearchBtn',
                    paginationId: 'fundsPagination',
                    columns: [
                        { field: 'id' },
                        { field: 'date', type: 'date' },
                        {
                            field: 'description',
                            formatter: (value, data) => `<p class=\"text-xs font-weight-bold mb-0\" data-id=\"\${data.id}\">\${value.length > 20 ? value.slice(0, 20) + '...' : value}</p>`
                        },
                        {
                            field: 'transaction_type',
                            formatter: (value, data) => `
                                <span class=\"badge bg-\${value === 'income' ? 'success' : 'danger'}\" data-id=\"\${data.id}\">
                                    \${value === 'income' ? 'Thu' : 'Chi'}
                                </span>
                            `
                        },
                        { field: 'amount' },
                        {
                            field: 'actions',
                            formatter: (value, data) => `
                                <div class=\"d-flex justify-content-center\" data-id=\"\${data.id}\">
                                    \${isTreasurer ? `
                                        <button type=\"button\" class=\"btn btn-sm btn-info text-white me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#editFundModal\${data.id}\">
                                            <i class=\"fas fa-edit me-1\"></i> Sửa
                                        </button>
                                        <button type=\"button\" class=\"btn btn-sm btn-danger text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteFundModal\${data.id}\">
                                            <i class=\"fas fa-trash me-1\"></i> Xóa
                                        </button>
                                    ` : ''}
                                </div>
                            `
                        }
                    ],
                    onRowClick: (row) => {
                        const fundId = row.getAttribute('data-id');
                        if (!fundId) return;
                        const fund = fundsData.find(f => f.id === fundId);
                        if (fund) displayFundDetails(fund);
                        dynamicContent.scrollIntoView({ behavior: 'smooth' });
                    }
                });

                console.log('Table initialized:', fundsTable); // Debug table initialization
            } catch (error) {
                console.error('Error initializing table:', error); // Debug error
            }

            let currentFundId = null;

            function displayFundDetails(fund) {
                if (!fund || currentFundId === fund.id) return;
                currentFundId = fund.id;
                const dynamicContent = document.getElementById('dynamicContent');
                if (!dynamicContent) return;
                
                const buttons = isTreasurer ? `
                    <button type=\"button\" class=\"btn btn-sm btn-info text-white me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#editFundModal\${fund.id}\">
                        <i class=\"fas fa-edit me-1\"></i> Sửa
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteFundModal\${fund.id}\">
                        <i class=\"fas fa-trash me-1\"></i> Xóa
                    </button>
                ` : '';

                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <h6 class=\"mb-0\">Giao dịch #\${fund.id}</h6>
                            <button type=\"button\" class=\"btn-close\" onclick=\"resetDynamicContent()\"></button>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <p><strong>Ngày:</strong> \${fund.date}</p>
                                    <p><strong>Loại giao dịch:</strong> 
                                        <span class=\"badge bg-\${fund.transaction_type === 'income' ? 'success' : 'danger'}\">
                                            \${fund.transaction_type === 'income' ? 'Thu' : 'Chi'}
                                        </span>
                                    </p>
                                    <p><strong>Số tiền:</strong> \${fund.amount}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <p><strong>Người tạo:</strong> \${fund.createdBy}</p>
                                    <p><strong>Ngày tạo:</strong> \${fund.createdAt}</p>
                                    <p><strong>Ngày cập nhật:</strong> \${fund.updatedAt}</p>
                                </div>
                            </div>
                            <div class=\"mt-3\">
                                <p><strong>Mô tả:</strong></p>
                                <p>\${fund.description}</p>
                            </div>
                            <div class=\"mt-3\">
                                \${buttons}
                            </div>
                        </div>
                    </div>
                `;
            }

            function resetDynamicContent() {
                currentFundId = null;
                document.getElementById('dynamicContent').innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-body text-center py-4\">
                            <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                            <h5>Chọn một giao dịch để xem chi tiết</h5>
                            <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm giao dịch\" để tạo mới</p>
                        </div>
                    </div>
                `;
            }

            // Xử lý form thêm giao dịch
            const addFundForm = document.getElementById('addFundForm');
            if (addFundForm) {
                addFundForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const spinner = document.getElementById('addFundSpinner');
                    const errorDiv = document.getElementById('addFundError');
                    
                    spinner.classList.remove('d-none');
                    errorDiv.classList.add('d-none');
                    
                    const formData = new FormData(this);
                    
                    fetch('";
        // line 431
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_new");
        yield "', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            window.location.href = data.redirect;
                        } else {
                            errorDiv.textContent = data.error || 'Có lỗi xảy ra';
                            errorDiv.classList.remove('d-none');
                        }
                    })
                    .catch(error => {
                        errorDiv.textContent = 'Có lỗi xảy ra khi xử lý yêu cầu';
                        errorDiv.classList.remove('d-none');
                    })
                    .finally(() => {
                        spinner.classList.add('d-none');
                    });
                });
            }

            // Xử lý form sửa giao dịch
            ";
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 455, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fund"]) {
            // line 456
            yield "                const editFundForm";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 456), "html", null, true);
            yield " = document.getElementById('editFundForm";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 456), "html", null, true);
            yield "');
                if (editFundForm";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 457), "html", null, true);
            yield ") {
                    editFundForm";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 458), "html", null, true);
            yield ".addEventListener('submit', function(e) {
                        e.preventDefault();
                        const spinner = document.getElementById('editFundSpinner";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 460), "html", null, true);
            yield "');
                        const errorDiv = document.getElementById('editFundError";
            // line 461
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 461), "html", null, true);
            yield "');
                        
                        spinner.classList.remove('d-none');
                        errorDiv.classList.add('d-none');
                        
                        const formData = new FormData(this);
                        
                        fetch('";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 468)]), "html", null, true);
            yield "', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = data.redirect;
                            } else {
                                errorDiv.textContent = data.error || 'Có lỗi xảy ra';
                                errorDiv.classList.remove('d-none');
                            }
                        })
                        .catch(error => {
                            errorDiv.textContent = 'Có lỗi xảy ra khi xử lý yêu cầu';
                            errorDiv.classList.remove('d-none');
                        })
                        .finally(() => {
                            spinner.classList.add('d-none');
                        });
                    });
                }
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fund'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 491
        yield "
            // Xử lý form xóa giao dịch
            ";
        // line 493
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["funds"]) || array_key_exists("funds", $context) ? $context["funds"] : (function () { throw new RuntimeError('Variable "funds" does not exist.', 493, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fund"]) {
            // line 494
            yield "                const deleteFundForm";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 494), "html", null, true);
            yield " = document.getElementById('deleteFundForm";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 494), "html", null, true);
            yield "');
                if (deleteFundForm";
            // line 495
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 495), "html", null, true);
            yield ") {
                    deleteFundForm";
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 496), "html", null, true);
            yield ".addEventListener('submit', function(e) {
                        e.preventDefault();
                        const spinner = document.getElementById('deleteFundSpinner";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 498), "html", null, true);
            yield "');
                        
                        spinner.classList.remove('d-none');
                        
                        const formData = new FormData(this);
                        
                        fetch('";
            // line 504
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funds_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fund"], "id", [], "any", false, false, false, 504)]), "html", null, true);
            yield "', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = data.redirect;
                            } else {
                                alert(data.error || 'Có lỗi xảy ra');
                            }
                        })
                        .catch(error => {
                            alert('Có lỗi xảy ra khi xử lý yêu cầu');
                        })
                        .finally(() => {
                            spinner.classList.add('d-none');
                        });
                    });
                }
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fund'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 525
        yield "        });
    </script>

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
        return "funds/index.html.twig";
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
        return array (  907 => 525,  880 => 504,  871 => 498,  866 => 496,  862 => 495,  855 => 494,  851 => 493,  847 => 491,  818 => 468,  808 => 461,  804 => 460,  799 => 458,  795 => 457,  788 => 456,  784 => 455,  757 => 431,  620 => 296,  611 => 293,  607 => 292,  603 => 291,  599 => 290,  595 => 289,  591 => 288,  587 => 287,  583 => 286,  580 => 285,  576 => 284,  571 => 282,  565 => 279,  561 => 277,  546 => 268,  541 => 266,  535 => 265,  530 => 263,  526 => 262,  522 => 261,  518 => 260,  506 => 253,  496 => 249,  492 => 248,  488 => 246,  476 => 240,  470 => 237,  464 => 234,  460 => 233,  456 => 232,  450 => 229,  446 => 228,  442 => 227,  436 => 224,  430 => 221,  425 => 219,  419 => 216,  415 => 215,  411 => 214,  406 => 212,  402 => 211,  393 => 207,  383 => 203,  379 => 202,  369 => 195,  360 => 189,  356 => 188,  352 => 187,  346 => 184,  342 => 183,  338 => 182,  332 => 179,  326 => 176,  321 => 174,  315 => 171,  311 => 170,  307 => 169,  302 => 167,  284 => 152,  260 => 130,  254 => 126,  252 => 125,  193 => 68,  179 => 60,  175 => 59,  167 => 54,  163 => 53,  159 => 52,  151 => 46,  147 => 45,  144 => 44,  142 => 38,  141 => 31,  140 => 24,  139 => 17,  138 => 14,  135 => 13,  132 => 11,  119 => 10,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý quỹ{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/funds.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        {# Thống kê tổng quan #}
        <div class=\"row mb-4\">
            {% set stats = [
                {
                    'title': 'Tổng số dư',
                    'count': balance|number_format(0, ',', '.') ~ ' VNĐ',
                    'style': 'bg-gradient-warning',
                    'icon': 'fas fa-wallet',
                    'text_class': 'text-warning'
                },
                {
                    'title': 'Tổng thu',
                    'count': totalIncome|number_format(0, ',', '.') ~ ' VNĐ',
                    'style': 'bg-gradient-success',
                    'icon': 'fas fa-arrow-down',
                    'text_class': 'text-success'
                },
                {
                    'title': 'Tổng chi',
                    'count': totalExpense|number_format(0, ',', '.') ~ ' VNĐ',
                    'style': 'bg-gradient-danger',
                    'icon': 'fas fa-arrow-up',
                    'text_class': 'text-danger'
                },
                {
                    'title': 'Giao dịch',
                    'count': funds.getTotalItemCount ~ ' giao dịch',
                    'style': 'bg-gradient-info',
                    'icon': 'fas fa-exchange-alt',
                    'text_class': ''
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

        <!-- Biểu đồ biến động quỹ -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
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
        </div>

        <!-- Dynamic Content -->
        <div id=\"dynamicContent\" class=\"mb-4 px-0\">
            <div class=\"card\">
                <div class=\"card-body text-center py-4\">
                    <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                    <h5>Chọn một giao dịch để xem chi tiết</h5>
                    <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm giao dịch\" để tạo mới</p>
                </div>
            </div>
        </div>

        <!-- Bảng hiển thị dữ liệu -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý quỹ</h6>
                    <div class=\"d-flex align-items-center\">
                        <div class=\"d-flex align-items-center me-2 mb-0\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-transparent border-end-0\">
                                    <i class=\"fas fa-search text-secondary\"></i>
                                </span>
                                <input type=\"text\" id=\"fundsSearchInput\" class=\"form-control border-start-0\" placeholder=\"Tìm kiếm giao dịch...\" style=\"max-width: 300px;\">
                            </div>
                            <button type=\"button\" id=\"fundsClearSearchBtn\" class=\"btn btn-sm btn-outline-secondary mb-0 ms-2 d-none\">
                                <i class=\"fas fa-times me-1\"></i>Xóa bộ lọc
                            </button>
                        </div>
                        {% if is_granted('ROLE_TREASURER') %}
                            <button type=\"button\" class=\"btn btn-sm btn-success mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addFundModal\">
                                <i class=\"fas fa-plus me-1\"></i> Thêm giao dịch
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
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">ID</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Mô tả</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Loại giao dịch</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Số tiền</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id=\"fundsTableBody\">
                            <!-- Populated via JavaScript -->
                        </tbody>
                    </table>
                </div>
                <div class=\"navigation mt-4\">
                    {{ knp_pagination_render(funds, null, {'search': search}) }}
                </div>
            </div>
        </div>

        <!-- Modal: Thêm giao dịch -->
        <div class=\"modal fade\" id=\"addFundModal\" tabindex=\"-1\" aria-labelledby=\"addFundModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"addFundModalLabel\">Thêm giao dịch mới</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"alert alert-danger d-none\" id=\"addFundError\"></div>
                        {{ form_start(addFundForm, {'attr': {'id': 'addFundForm', 'class': 'needs-validation'}}) }}
                            <div class=\"mb-3\">
                                {{ form_label(addFundForm.transaction_type) }}
                                {{ form_widget(addFundForm.transaction_type, {'attr': {'class': 'form-select'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addFundForm.transaction_type) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(addFundForm.amount) }}
                                <div class=\"input-group\">
                                    {{ form_widget(addFundForm.amount, {'attr': {'class': 'form-control', 'min': '0', 'step': '1000'}}) }}
                                    <span class=\"input-group-text\">VNĐ</span>
                                </div>
                                <div class=\"text-danger\">{{ form_errors(addFundForm.amount) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(addFundForm.date) }}
                                {{ form_widget(addFundForm.date, {'attr': {'class': 'form-control'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addFundForm.date) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                {{ form_label(addFundForm.description) }}
                                {{ form_widget(addFundForm.description, {'attr': {'class': 'form-control', 'rows': '3'}}) }}
                                <div class=\"text-danger\">{{ form_errors(addFundForm.description) }}</div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary w-100\">
                                <span class=\"spinner-border spinner-border-sm d-none\" id=\"addFundSpinner\"></span>
                                Lưu
                            </button>
                        {{ form_end(addFundForm) }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Sửa giao dịch -->
        {% for fund in funds %}
            <div class=\"modal fade\" id=\"editFundModal{{ fund.id }}\" tabindex=\"-1\" aria-labelledby=\"editFundModalLabel{{ fund.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"editFundModalLabel{{ fund.id }}\">Sửa giao dịch #{{ fund.id }}</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"alert alert-danger d-none\" id=\"editFundError{{ fund.id }}\"></div>
                            {{ form_start(editFundForms[fund.id], {'attr': {'id': 'editFundForm' ~ fund.id, 'class': 'needs-validation'}}) }}
                                <div class=\"mb-3\">
                                    {{ form_label(editFundForms[fund.id].transaction_type) }}
                                    {{ form_widget(editFundForms[fund.id].transaction_type, {'attr': {'class': 'form-select'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editFundForms[fund.id].transaction_type) }}</div>
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(editFundForms[fund.id].amount) }}
                                    <div class=\"input-group\">
                                        {{ form_widget(editFundForms[fund.id].amount, {'attr': {'class': 'form-control', 'min': '0', 'step': '1000'}}) }}
                                        <span class=\"input-group-text\">VNĐ</span>
                                    </div>
                                    <div class=\"text-danger\">{{ form_errors(editFundForms[fund.id].amount) }}</div>
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(editFundForms[fund.id].date) }}
                                    {{ form_widget(editFundForms[fund.id].date, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editFundForms[fund.id].date) }}</div>
                                </div>
                                <div class=\"mb-3\">
                                    {{ form_label(editFundForms[fund.id].description) }}
                                    {{ form_widget(editFundForms[fund.id].description, {'attr': {'class': 'form-control', 'rows': '3'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(editFundForms[fund.id].description) }}</div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary w-100\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" id=\"editFundSpinner{{ fund.id }}\"></span>
                                    Lưu thay đổi
                                </button>
                            {{ form_end(editFundForms[fund.id]) }}
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}

        <!-- Modal: Xóa giao dịch -->
        {% for fund in funds %}
            <div class=\"modal fade\" id=\"deleteFundModal{{ fund.id }}\" tabindex=\"-1\" aria-labelledby=\"deleteFundModalLabel{{ fund.id }}\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header bg-danger text-white\">
                            <h5 class=\"modal-title\" id=\"deleteFundModalLabel{{ fund.id }}\">Xóa giao dịch #{{ fund.id }}</h5>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"modal-body\">
                            <p>Bạn có chắc chắn muốn xóa giao dịch này?</p>
                            <div class=\"alert alert-warning\">
                                <strong>Thông tin giao dịch:</strong><br>
                                Ngày: {{ fund.date|date('d/m/Y') }}<br>
                                Loại: {{ fund.transactionType == 'income' ? 'Thu' : 'Chi' }}<br>
                                Số tiền: {{ fund.amount|number_format(0, ',', '.') }} VNĐ<br>
                                Mô tả: {{ fund.description }}
                            </div>
                            <form method=\"post\" action=\"{{ path('app_funds_delete', {'id': fund.id}) }}\" id=\"deleteFundForm{{ fund.id }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fund.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger w-100\">
                                    <span class=\"spinner-border spinner-border-sm d-none\" id=\"deleteFundSpinner{{ fund.id }}\"></span>
                                    Xóa
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <script src=\"{{ asset('js/table-layout.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isTreasurer = {{ is_granted('ROLE_TREASURER') ? 'true' : 'false' }};
            const fundsData = [
                {% for fund in funds %}
                    {
                        id: '{{ fund.id }}',
                        date: '{{ fund.date ? fund.date|date('Y-m-d') : '' }}',
                        description: '{{ fund.description|e('js') }}',
                        transaction_type: '{{ fund.transactionType }}',
                        amount: '{{ fund.amount|number_format(0, ',', '.') }} VNĐ',
                        createdBy: '{{ fund.createdBy.name|e('js') }}',
                        createdAt: '{{ fund.createdAt ? fund.createdAt|date('Y-m-d H:i:s') : '' }}',
                        updatedAt: '{{ fund.updatedAt ? fund.updatedAt|date('Y-m-d H:i:s') : '' }}'
                    },
                {% endfor %}
            ];

            console.log('Funds Data:', fundsData); // Debug data

            try {
                const fundsTable = new TableLayout({
                    data: fundsData,
                    tableBodyId: 'fundsTableBody',
                    searchInputId: 'fundsSearchInput',
                    clearSearchBtnId: 'fundsClearSearchBtn',
                    paginationId: 'fundsPagination',
                    columns: [
                        { field: 'id' },
                        { field: 'date', type: 'date' },
                        {
                            field: 'description',
                            formatter: (value, data) => `<p class=\"text-xs font-weight-bold mb-0\" data-id=\"\${data.id}\">\${value.length > 20 ? value.slice(0, 20) + '...' : value}</p>`
                        },
                        {
                            field: 'transaction_type',
                            formatter: (value, data) => `
                                <span class=\"badge bg-\${value === 'income' ? 'success' : 'danger'}\" data-id=\"\${data.id}\">
                                    \${value === 'income' ? 'Thu' : 'Chi'}
                                </span>
                            `
                        },
                        { field: 'amount' },
                        {
                            field: 'actions',
                            formatter: (value, data) => `
                                <div class=\"d-flex justify-content-center\" data-id=\"\${data.id}\">
                                    \${isTreasurer ? `
                                        <button type=\"button\" class=\"btn btn-sm btn-info text-white me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#editFundModal\${data.id}\">
                                            <i class=\"fas fa-edit me-1\"></i> Sửa
                                        </button>
                                        <button type=\"button\" class=\"btn btn-sm btn-danger text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteFundModal\${data.id}\">
                                            <i class=\"fas fa-trash me-1\"></i> Xóa
                                        </button>
                                    ` : ''}
                                </div>
                            `
                        }
                    ],
                    onRowClick: (row) => {
                        const fundId = row.getAttribute('data-id');
                        if (!fundId) return;
                        const fund = fundsData.find(f => f.id === fundId);
                        if (fund) displayFundDetails(fund);
                        dynamicContent.scrollIntoView({ behavior: 'smooth' });
                    }
                });

                console.log('Table initialized:', fundsTable); // Debug table initialization
            } catch (error) {
                console.error('Error initializing table:', error); // Debug error
            }

            let currentFundId = null;

            function displayFundDetails(fund) {
                if (!fund || currentFundId === fund.id) return;
                currentFundId = fund.id;
                const dynamicContent = document.getElementById('dynamicContent');
                if (!dynamicContent) return;
                
                const buttons = isTreasurer ? `
                    <button type=\"button\" class=\"btn btn-sm btn-info text-white me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#editFundModal\${fund.id}\">
                        <i class=\"fas fa-edit me-1\"></i> Sửa
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger text-white\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteFundModal\${fund.id}\">
                        <i class=\"fas fa-trash me-1\"></i> Xóa
                    </button>
                ` : '';

                dynamicContent.innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <h6 class=\"mb-0\">Giao dịch #\${fund.id}</h6>
                            <button type=\"button\" class=\"btn-close\" onclick=\"resetDynamicContent()\"></button>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <p><strong>Ngày:</strong> \${fund.date}</p>
                                    <p><strong>Loại giao dịch:</strong> 
                                        <span class=\"badge bg-\${fund.transaction_type === 'income' ? 'success' : 'danger'}\">
                                            \${fund.transaction_type === 'income' ? 'Thu' : 'Chi'}
                                        </span>
                                    </p>
                                    <p><strong>Số tiền:</strong> \${fund.amount}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <p><strong>Người tạo:</strong> \${fund.createdBy}</p>
                                    <p><strong>Ngày tạo:</strong> \${fund.createdAt}</p>
                                    <p><strong>Ngày cập nhật:</strong> \${fund.updatedAt}</p>
                                </div>
                            </div>
                            <div class=\"mt-3\">
                                <p><strong>Mô tả:</strong></p>
                                <p>\${fund.description}</p>
                            </div>
                            <div class=\"mt-3\">
                                \${buttons}
                            </div>
                        </div>
                    </div>
                `;
            }

            function resetDynamicContent() {
                currentFundId = null;
                document.getElementById('dynamicContent').innerHTML = `
                    <div class=\"card\">
                        <div class=\"card-body text-center py-4\">
                            <i class=\"fas fa-info-circle fs-2 text-info mb-3\"></i>
                            <h5>Chọn một giao dịch để xem chi tiết</h5>
                            <p class=\"text-muted mb-0\">Hoặc click vào nút \"Thêm giao dịch\" để tạo mới</p>
                        </div>
                    </div>
                `;
            }

            // Xử lý form thêm giao dịch
            const addFundForm = document.getElementById('addFundForm');
            if (addFundForm) {
                addFundForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const spinner = document.getElementById('addFundSpinner');
                    const errorDiv = document.getElementById('addFundError');
                    
                    spinner.classList.remove('d-none');
                    errorDiv.classList.add('d-none');
                    
                    const formData = new FormData(this);
                    
                    fetch('{{ path('app_funds_new') }}', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            window.location.href = data.redirect;
                        } else {
                            errorDiv.textContent = data.error || 'Có lỗi xảy ra';
                            errorDiv.classList.remove('d-none');
                        }
                    })
                    .catch(error => {
                        errorDiv.textContent = 'Có lỗi xảy ra khi xử lý yêu cầu';
                        errorDiv.classList.remove('d-none');
                    })
                    .finally(() => {
                        spinner.classList.add('d-none');
                    });
                });
            }

            // Xử lý form sửa giao dịch
            {% for fund in funds %}
                const editFundForm{{ fund.id }} = document.getElementById('editFundForm{{ fund.id }}');
                if (editFundForm{{ fund.id }}) {
                    editFundForm{{ fund.id }}.addEventListener('submit', function(e) {
                        e.preventDefault();
                        const spinner = document.getElementById('editFundSpinner{{ fund.id }}');
                        const errorDiv = document.getElementById('editFundError{{ fund.id }}');
                        
                        spinner.classList.remove('d-none');
                        errorDiv.classList.add('d-none');
                        
                        const formData = new FormData(this);
                        
                        fetch('{{ path('app_funds_edit', {'id': fund.id}) }}', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = data.redirect;
                            } else {
                                errorDiv.textContent = data.error || 'Có lỗi xảy ra';
                                errorDiv.classList.remove('d-none');
                            }
                        })
                        .catch(error => {
                            errorDiv.textContent = 'Có lỗi xảy ra khi xử lý yêu cầu';
                            errorDiv.classList.remove('d-none');
                        })
                        .finally(() => {
                            spinner.classList.add('d-none');
                        });
                    });
                }
            {% endfor %}

            // Xử lý form xóa giao dịch
            {% for fund in funds %}
                const deleteFundForm{{ fund.id }} = document.getElementById('deleteFundForm{{ fund.id }}');
                if (deleteFundForm{{ fund.id }}) {
                    deleteFundForm{{ fund.id }}.addEventListener('submit', function(e) {
                        e.preventDefault();
                        const spinner = document.getElementById('deleteFundSpinner{{ fund.id }}');
                        
                        spinner.classList.remove('d-none');
                        
                        const formData = new FormData(this);
                        
                        fetch('{{ path('app_funds_delete', {'id': fund.id}) }}', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = data.redirect;
                            } else {
                                alert(data.error || 'Có lỗi xảy ra');
                            }
                        })
                        .catch(error => {
                            alert('Có lỗi xảy ra khi xử lý yêu cầu');
                        })
                        .finally(() => {
                            spinner.classList.add('d-none');
                        });
                    });
                }
            {% endfor %}
        });
    </script>

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
{% endblock %}", "funds/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\funds\\index.html.twig");
    }
}
