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

/* users/show.html.twig */
class __TwigTemplate_8cda2ffc940006a96e3e52ed4a79e9d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/show.html.twig", 1);
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

        yield "Thành viên";
        
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
        yield "    <div class=\"container mt-5\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "success")) ? ("success") : ("warning"));
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h3 class=\"mb-0 text-white\">Chi tiết thành viên</h3>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">ID</th>
                            <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">MSSV</th>
                            <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "studentId", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Họ tên</th>
                            <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Email</th>
                            <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Vai trò</th>
                            <td>
                                ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42) == "ROLE_ADMIN")) {
            // line 43
            yield "                                    Quản Lý
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "role", [], "any", false, false, false, 44) == "ROLE_TREASURER")) {
            // line 45
            yield "                                    Thủ Quỹ
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "role", [], "any", false, false, false, 46) == "ROLE_MEMBER")) {
            // line 47
            yield "                                    Thành Viên
                                ";
        } else {
            // line 49
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "role", [], "any", false, false, false, 49), "html", null, true);
            yield "
                                ";
        }
        // line 51
        yield "                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Trạng thái</th>
                            <td>
                                ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56) == "active")) {
            // line 57
            yield "                                    Đang hoạt động
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58) == "inactive")) {
            // line 59
            yield "                                    Không hoạt động
                                ";
        } else {
            // line 61
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61), "html", null, true);
            yield "
                                ";
        }
        // line 63
        yield "                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Mã lớp</th>
                            <td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "classId", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Khoa</th>
                            <td>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "faculty", [], "any", false, false, false, 71), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Thông tin liên hệ</th>
                            <td>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "contactInfo", [], "any", false, false, false, 75), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Ngày tạo</th>
                            <td>";
        // line 79
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "createdAt", [], "any", false, false, false, 79)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "createdAt", [], "any", false, false, false, 79), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Ngày sửa</th>
                            <td>";
        // line 83
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "updatedAt", [], "any", false, false, false, 83)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "updatedAt", [], "any", false, false, false, 83), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <div class=\"d-flex justify-content-start\">
                    <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
        yield "\" class=\"btn btn-secondary me-2\">
                        <i class=\"fas fa-arrow-left\"></i> Quay lại danh sách
                    </a>
                    ";
        // line 93
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 94
            yield "                        <a href=\"#\" class=\"btn btn-warning me-2 ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)))) {
                yield "disabled";
            }
            yield "\" 
                           ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)))) {
                yield "data-bs-toggle=\"modal\" data-bs-target=\"#editUserModal\"";
            }
            yield ">
                            <i class=\"fas fa-edit\"></i> Chỉnh sửa
                        </a>
                        <button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteUserModal\">
                            <i class=\"fas fa-trash\"></i> Xóa
                        </button>
                    ";
        }
        // line 102
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Chỉnh sửa -->
    ";
        // line 108
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108))))) {
            // line 109
            yield "        <div class=\"modal fade\" id=\"editUserModal\" tabindex=\"-1\" aria-labelledby=\"editUserModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"editUserModalLabel\">Chỉnh sửa thành viên</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 117
            yield Twig\Extension\CoreExtension::include($this->env, $context, "users/_form.html.twig", ["form" => (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 117, $this->source); })()), "button_label" => "Cập nhật"]);
            yield "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 123
        yield "
    <!-- Modal: Xóa -->
    ";
        // line 125
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 126
            yield "        <div class=\"modal fade\" id=\"deleteUserModal\" tabindex=\"-1\" aria-labelledby=\"deleteUserModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteUserModalLabel\">Xác nhận xóa</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        Bạn có chắc chắn muốn vô hiệu hóa thành viên này không?
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Hủy</button>
                        <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger\">Vô hiệu hóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "users/show.html.twig";
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
        return array (  344 => 139,  340 => 138,  326 => 126,  324 => 125,  320 => 123,  311 => 117,  301 => 109,  299 => 108,  291 => 102,  279 => 95,  272 => 94,  270 => 93,  264 => 90,  254 => 83,  247 => 79,  240 => 75,  233 => 71,  226 => 67,  220 => 63,  214 => 61,  210 => 59,  208 => 58,  205 => 57,  203 => 56,  196 => 51,  190 => 49,  186 => 47,  184 => 46,  181 => 45,  179 => 44,  176 => 43,  174 => 42,  166 => 37,  159 => 33,  152 => 29,  145 => 25,  133 => 15,  127 => 14,  117 => 10,  112 => 9,  107 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thành viên{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label == 'success' ? 'success' : 'warning' }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h3 class=\"mb-0 text-white\">Chi tiết thành viên</h3>
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">ID</th>
                            <td>{{ user.id }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">MSSV</th>
                            <td>{{ user.studentId }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Họ tên</th>
                            <td>{{ user.name }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Email</th>
                            <td>{{ user.email }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Vai trò</th>
                            <td>
                                {% if user.role == 'ROLE_ADMIN' %}
                                    Quản Lý
                                {% elseif user.role == 'ROLE_TREASURER' %}
                                    Thủ Quỹ
                                {% elseif user.role == 'ROLE_MEMBER' %}
                                    Thành Viên
                                {% else %}
                                    {{ user.role }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Trạng thái</th>
                            <td>
                                {% if user.status == 'active' %}
                                    Đang hoạt động
                                {% elseif user.status == 'inactive' %}
                                    Không hoạt động
                                {% else %}
                                    {{ user.status }}
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Mã lớp</th>
                            <td>{{ user.classId }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Khoa</th>
                            <td>{{ user.faculty }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Thông tin liên hệ</th>
                            <td>{{ user.contactInfo }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Ngày tạo</th>
                            <td>{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Ngày sửa</th>
                            <td>{{ user.updatedAt ? user.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <div class=\"d-flex justify-content-start\">
                    <a href=\"{{ path('app_users_index') }}\" class=\"btn btn-secondary me-2\">
                        <i class=\"fas fa-arrow-left\"></i> Quay lại danh sách
                    </a>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"#\" class=\"btn btn-warning me-2 {% if app.user and app.user.id == user.id %}disabled{% endif %}\" 
                           {% if app.user and app.user.id != user.id %}data-bs-toggle=\"modal\" data-bs-target=\"#editUserModal\"{% endif %}>
                            <i class=\"fas fa-edit\"></i> Chỉnh sửa
                        </a>
                        <button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteUserModal\">
                            <i class=\"fas fa-trash\"></i> Xóa
                        </button>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Chỉnh sửa -->
    {% if is_granted('ROLE_ADMIN') and (app.user is null or app.user.id != user.id) %}
        <div class=\"modal fade\" id=\"editUserModal\" tabindex=\"-1\" aria-labelledby=\"editUserModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"editUserModalLabel\">Chỉnh sửa thành viên</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        {{ include('users/_form.html.twig', { form: editForm, button_label: 'Cập nhật' }) }}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

    <!-- Modal: Xóa -->
    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"modal fade\" id=\"deleteUserModal\" tabindex=\"-1\" aria-labelledby=\"deleteUserModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteUserModalLabel\">Xác nhận xóa</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        Bạn có chắc chắn muốn vô hiệu hóa thành viên này không?
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Hủy</button>
                        <form method=\"post\" action=\"{{ path('app_users_delete', {'id': user.id}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger\">Vô hiệu hóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}", "users/show.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\users\\show.html.twig");
    }
}
