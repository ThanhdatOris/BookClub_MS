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

/* proposals/show.html.twig */
class __TwigTemplate_7cbad1ad4304596b11f96a30bd0700b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proposals/show.html.twig", 1);
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

        yield "Chi tiết đề xuất";
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"px-2\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"card-title mb-0\">Chi tiết đề xuất</h3>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"text-primary\">Thông tin đề xuất</h4>
                    <table class=\"table table-bordered table-hover\">
                        <tbody>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Loại đề xuất</th>
                                <td>";
        // line 19
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19) == "edit_profile")) ? ("Chỉnh sửa thông tin cá nhân") : ("Đề xuất chung"));
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người đề xuất</th>
                                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 23, $this->source); })()), "userId", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 23, $this->source); })()), "userId", [], "any", false, false, false, 23), "studentId", [], "any", false, false, false, 23), "html", null, true);
        yield ")</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Nội dung</th>
                                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 27, $this->source); })()), "content", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                            </tr>
                            ";
        // line 29
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 29, $this->source); })()), "type", [], "any", false, false, false, 29) == "edit_profile") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 29, $this->source); })()), "proposedChanges", [], "any", false, false, false, 29))) {
            // line 30
            yield "                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thông tin đề xuất chỉnh sửa</th>
                                    <td>
                                        <table class=\"table table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>Trường</th>
                                                    <th>Giá trị hiện tại</th>
                                                    <th>Giá trị đề xuất</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 42, $this->source); })()), "proposedChanges", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                // line 43
                yield "                                                    <tr>
                                                        <td>";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["field"]), "html", null, true);
                yield "</td>
                                                        <td>
                                                            ";
                // line 46
                if (($context["field"] == "name")) {
                    // line 47
                    yield "                                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 47, $this->source); })()), "userId", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                    yield "
                                                            ";
                } elseif ((                // line 48
$context["field"] == "email")) {
                    // line 49
                    yield "                                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 49, $this->source); })()), "userId", [], "any", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
                    yield "
                                                            ";
                } elseif ((                // line 50
$context["field"] == "class_id")) {
                    // line 51
                    yield "                                                                ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 51, $this->source); })()), "userId", [], "any", false, false, false, 51), "classId", [], "any", false, false, false, 51)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 51, $this->source); })()), "userId", [], "any", false, false, false, 51), "classId", [], "any", false, false, false, 51), "html", null, true)) : ("Chưa có"));
                    yield "
                                                            ";
                } elseif ((                // line 52
$context["field"] == "faculty")) {
                    // line 53
                    yield "                                                                ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 53, $this->source); })()), "userId", [], "any", false, false, false, 53), "faculty", [], "any", false, false, false, 53)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 53, $this->source); })()), "userId", [], "any", false, false, false, 53), "faculty", [], "any", false, false, false, 53), "html", null, true)) : ("Chưa có"));
                    yield "
                                                            ";
                } elseif ((                // line 54
$context["field"] == "contact_info")) {
                    // line 55
                    yield "                                                                ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 55, $this->source); })()), "userId", [], "any", false, false, false, 55), "contactInfo", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 55, $this->source); })()), "userId", [], "any", false, false, false, 55), "contactInfo", [], "any", false, false, false, 55), "html", null, true)) : ("Chưa có"));
                    yield "
                                                            ";
                }
                // line 57
                yield "                                                        </td>
                                                        <td>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            ";
        }
        // line 66
        yield "                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                <td>
                                    <span class=\"badge bg-";
        // line 69
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69) == "pending")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69) == "approved")) ? ("success") : ("danger"))));
        yield "\">
                                        ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 70, $this->source); })()), "status", [], "any", false, false, false, 70)), "html", null, true);
        yield "
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày tạo</th>
                                <td>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 76, $this->source); })()), "createdAt", [], "any", false, false, false, 76), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày cập nhật</th>
                                <td>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 80, $this->source); })()), "updatedAt", [], "any", false, false, false, 80), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>

                    ";
        // line 85
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85) == "pending"))) {
            // line 86
            yield "                        <h4 class=\"text-primary mt-4\">Duyệt đề xuất</h4>
                        <form method=\"post\" action=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn phê duyệt đề xuất này?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88))), "html", null, true);
            yield "\">
                        ";
            // line 89
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89) == "edit_profile") &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 89, $this->source); })()), "proposedChanges", [], "any", false, false, false, 89)))) {
                // line 90
                yield "                            <div class=\"mb-3\">
                                <label class=\"form-label\">Chọn các trường để phê duyệt:</label>
                                ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 92, $this->source); })()), "proposedChanges", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                    // line 93
                    yield "                                    <div class=\"form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\" name=\"approved_fields[]\" value=\"";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                    yield "\">
                                        <label class=\"form-check-label\">";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field"], "html", null, true);
                    yield ": ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "</label>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['field'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                yield "                            </div>
                        ";
            }
            // line 100
            yield "                        <button type=\"submit\" class=\"btn btn-success\">Phê duyệt</button>
                    </form>

                    <!-- Nút từ chối -->
                    <form method=\"post\" action=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn từ chối đề xuất này?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["proposal"]) || array_key_exists("proposal", $context) ? $context["proposal"] : (function () { throw new RuntimeError('Variable "proposal" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Từ chối</button>
                    </form>
                    ";
        }
        // line 109
        yield "                    <!-- Nút quay lại -->
                    <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_proposals_index");
        yield "\" class=\"btn btn-secondary\">Quay lại</a>
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
        return "proposals/show.html.twig";
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
        return array (  317 => 110,  314 => 109,  307 => 105,  303 => 104,  297 => 100,  293 => 98,  282 => 95,  278 => 94,  275 => 93,  271 => 92,  267 => 90,  265 => 89,  261 => 88,  257 => 87,  254 => 86,  252 => 85,  244 => 80,  237 => 76,  228 => 70,  224 => 69,  219 => 66,  212 => 61,  203 => 58,  200 => 57,  194 => 55,  192 => 54,  187 => 53,  185 => 52,  180 => 51,  178 => 50,  173 => 49,  171 => 48,  166 => 47,  164 => 46,  159 => 44,  156 => 43,  152 => 42,  138 => 30,  136 => 29,  131 => 27,  122 => 23,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chi tiết đề xuất{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"px-2\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"card-title mb-0\">Chi tiết đề xuất</h3>
                </div>
                <div class=\"card-body\">
                    <h4 class=\"text-primary\">Thông tin đề xuất</h4>
                    <table class=\"table table-bordered table-hover\">
                        <tbody>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Loại đề xuất</th>
                                <td>{{ proposal.type == 'edit_profile' ? 'Chỉnh sửa thông tin cá nhân' : 'Đề xuất chung' }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Người đề xuất</th>
                                <td>{{ proposal.userId.name }} ({{ proposal.userId.studentId }})</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Nội dung</th>
                                <td>{{ proposal.content }}</td>
                            </tr>
                            {% if proposal.type == 'edit_profile' and proposal.proposedChanges %}
                                <tr>
                                    <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Thông tin đề xuất chỉnh sửa</th>
                                    <td>
                                        <table class=\"table table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>Trường</th>
                                                    <th>Giá trị hiện tại</th>
                                                    <th>Giá trị đề xuất</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for field, value in proposal.proposedChanges %}
                                                    <tr>
                                                        <td>{{ field|capitalize }}</td>
                                                        <td>
                                                            {% if field == 'name' %}
                                                                {{ proposal.userId.name }}
                                                            {% elseif field == 'email' %}
                                                                {{ proposal.userId.email }}
                                                            {% elseif field == 'class_id' %}
                                                                {{ proposal.userId.classId ?: 'Chưa có' }}
                                                            {% elseif field == 'faculty' %}
                                                                {{ proposal.userId.faculty ?: 'Chưa có' }}
                                                            {% elseif field == 'contact_info' %}
                                                                {{ proposal.userId.contactInfo ?: 'Chưa có' }}
                                                            {% endif %}
                                                        </td>
                                                        <td>{{ value }}</td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            {% endif %}
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Trạng thái</th>
                                <td>
                                    <span class=\"badge bg-{{ proposal.status == 'pending' ? 'warning' : (proposal.status == 'approved' ? 'success' : 'danger') }}\">
                                        {{ proposal.status|capitalize }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày tạo</th>
                                <td>{{ proposal.createdAt|date('d/m/Y H:i:s') }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Ngày cập nhật</th>
                                <td>{{ proposal.updatedAt|date('d/m/Y H:i:s') }}</td>
                            </tr>
                        </tbody>
                    </table>

                    {% if is_granted('ROLE_ADMIN') and proposal.status == 'pending' %}
                        <h4 class=\"text-primary mt-4\">Duyệt đề xuất</h4>
                        <form method=\"post\" action=\"{{ path('app_proposals_approve', {'id': proposal.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn phê duyệt đề xuất này?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('approve' ~ proposal.id) }}\">
                        {% if proposal.type == 'edit_profile' and proposal.proposedChanges is not empty %}
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Chọn các trường để phê duyệt:</label>
                                {% for field, value in proposal.proposedChanges %}
                                    <div class=\"form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\" name=\"approved_fields[]\" value=\"{{ field }}\">
                                        <label class=\"form-check-label\">{{ field }}: {{ value }}</label>
                                    </div>
                                {% endfor %}
                            </div>
                        {% endif %}
                        <button type=\"submit\" class=\"btn btn-success\">Phê duyệt</button>
                    </form>

                    <!-- Nút từ chối -->
                    <form method=\"post\" action=\"{{ path('app_proposals_reject', {'id': proposal.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Bạn có chắc chắn muốn từ chối đề xuất này?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ proposal.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">Từ chối</button>
                    </form>
                    {% endif %}
                    <!-- Nút quay lại -->
                    <a href=\"{{ path('app_proposals_index') }}\" class=\"btn btn-secondary\">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "proposals/show.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\proposals\\show.html.twig");
    }
}
