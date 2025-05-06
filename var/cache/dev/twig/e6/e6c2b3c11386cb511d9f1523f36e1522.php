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

/* activity_participant/index.html.twig */
class __TwigTemplate_1fa29a503435deb2b0da0ffdcc62f109 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity_participant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity_participant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activity_participant/index.html.twig", 1);
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

        yield "Quản lý người tham gia";
        
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
        yield "    <div class=\"container-fluid py-4\">
        <!-- Thông báo flash -->
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
        <!-- Header và Danh sách người tham gia trong một card -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý người tham gia: ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        yield "</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"participantsSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm người tham gia...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"participantsClearSearchBtn\" class=\"btn btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 400px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"userName\">Tên người tham gia</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"studentId\">Mã sinh viên</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"joinedAt\">Ngày tham gia</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"status\">Trạng thái</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody id=\"participantsTableBody\">
                                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 52
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">
                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "userId", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            yield "</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "userId", [], "any", false, false, false, 61), "studentId", [], "any", false, false, false, 61), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "joinedAt", [], "any", false, false, false, 64), "Y-m-d H:i:s"), "html", null, true);
            yield "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0 text-";
            // line 67
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "status", [], "any", false, false, false, 67) == "confirmed")) ? ("success") : ("danger"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "status", [], "any", false, false, false, 67), "html", null, true);
            yield "</p>
                                            </td>
                                            <td class=\"text-center\">
                                                <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\" data-csrf-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 70))), "html", null, true);
            yield "\">Xóa</button>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 73
        if (!$context['_iterated']) {
            // line 74
            yield "                                        <tr>
                                            <td colspan=\"5\" class=\"text-center\">Không có người tham gia nào.</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                                </tbody>
                            </table>
                        </div>
                        <!-- Phân trang client-side -->
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            <nav>
                                <ul class=\"pagination\" id=\"participantsPagination\"></ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include table-layout.js -->
        <script src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/table-layout.js"), "html", null, true);
        yield "\"></script>

        <!-- JavaScript để khởi tạo TableLayout -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const participantsTable = new TableLayout({
                    data: [
                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 101
            yield "                            {
                                userName: '";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "userId", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "js"), "html", null, true);
            yield "',
                                studentId: '";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "userId", [], "any", false, false, false, 103), "studentId", [], "any", false, false, false, 103), "js"), "html", null, true);
            yield "',
                                joinedAt: '";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "joinedAt", [], "any", false, false, false, 104), "Y-m-d H:i:s"), "html", null, true);
            yield "',
                                status: '";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "status", [], "any", false, false, false, 105), "js"), "html", null, true);
            yield "',
                                actions: `
                                    <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 107), "html", null, true);
            yield "\" data-csrf-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 107))), "html", null, true);
            yield "\">Xóa</button>
                                `
                            },
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['participant'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "                    ],
                    tableBodyId: 'participantsTableBody',
                    searchInputId: 'participantsSearchInput',
                    clearSearchBtnId: 'participantsClearSearchBtn',
                    paginationId: 'participantsPagination',
                    columns: [
                        {
                            field: 'userName',
                            formatter: (value) => `
                                <div class=\"d-flex px-2 py-1\">
                                    <div class=\"d-flex flex-column justify-content-center\">
                                        <h6 class=\"mb-0 text-sm\">\${value}</h6>
                                    </div>
                                </div>
                            `
                        },
                        { field: 'studentId' },
                        { field: 'joinedAt', type: 'datetime' },
                        {
                            field: 'status',
                            formatter: (value) => `
                                <p class=\"text-xs font-weight-bold mb-0 text-\${value === 'confirmed' ? 'success' : 'danger'}\">\${value}</p>
                            `
                        }
                    ],
                    onDelete: (button) => {
                        if (!confirm('Bạn có chắc chắn muốn xóa người tham gia này?')) return;
                        const id = button.getAttribute('data-id');
                        const csrfToken = button.getAttribute('data-csrf-token');
                        fetch(`/activity_participant/delete/\${id}`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `_token=\${csrfToken}`
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) window.location.href = data.redirect;
                            else alert(data.error);
                        })
                        .catch(error => alert('Có lỗi xảy ra: ' + error.message));
                    },
                    scrollPositionKey: 'participants_table_scroll_position'
                });
            });
        </script>
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
        return "activity_participant/index.html.twig";
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
        return array (  296 => 111,  284 => 107,  279 => 105,  275 => 104,  271 => 103,  267 => 102,  264 => 101,  260 => 100,  250 => 93,  233 => 78,  224 => 74,  222 => 73,  212 => 70,  204 => 67,  198 => 64,  192 => 61,  184 => 56,  178 => 52,  173 => 51,  140 => 21,  131 => 14,  122 => 12,  117 => 11,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý người tham gia{% endblock %}

{% block body %}
    <div class=\"container-fluid py-4\">
        <!-- Thông báo flash -->
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">{{ message }}</div>
        {% endfor %}

        <!-- Header và Danh sách người tham gia trong một card -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header pb-0\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h6 class=\"text-uppercase text-secondary font-weight-bold mb-0\">Quản lý người tham gia: {{ activity.title }}</h6>
                            <div class=\"d-flex align-items-center\">
                                <div class=\"d-flex align-items-center me-2 mb-0\">
                                    <input type=\"text\" id=\"participantsSearchInput\" class=\"form-control me-2\" placeholder=\"Tìm kiếm người tham gia...\" style=\"max-width: 300px;\">
                                    <button type=\"button\" id=\"participantsClearSearchBtn\" class=\"btn btn-secondary mb-0 ms-2 d-none\">Xóa bộ lọc</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pt-0 pb-2\">
                        <div class=\"table-responsive p-0 px-3\" style=\"max-height: 400px; overflow-y: auto;\">
                            <table class=\"table table-hover align-items-center mb-0\">
                                <thead>
                                    <tr>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"userName\">Tên người tham gia</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"studentId\">Mã sinh viên</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"joinedAt\">Ngày tham gia</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            <a href=\"#\" class=\"sort-link\" data-sort=\"status\">Trạng thái</a>
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody id=\"participantsTableBody\">
                                    {% for participant in participants %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">
                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">{{ participant.userId.name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ participant.userId.studentId }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ participant.joinedAt|date('Y-m-d H:i:s') }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0 text-{{ participant.status == 'confirmed' ? 'success' : 'danger' }}\">{{ participant.status }}</p>
                                            </td>
                                            <td class=\"text-center\">
                                                <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"{{ participant.id }}\" data-csrf-token=\"{{ csrf_token('delete' ~ participant.id) }}\">Xóa</button>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"5\" class=\"text-center\">Không có người tham gia nào.</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <!-- Phân trang client-side -->
                        <div class=\"navigation mt-4 d-flex justify-content-center\">
                            <nav>
                                <ul class=\"pagination\" id=\"participantsPagination\"></ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include table-layout.js -->
        <script src=\"{{ asset('js/table-layout.js') }}\"></script>

        <!-- JavaScript để khởi tạo TableLayout -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const participantsTable = new TableLayout({
                    data: [
                        {% for participant in participants %}
                            {
                                userName: '{{ participant.userId.name|e('js') }}',
                                studentId: '{{ participant.userId.studentId|e('js') }}',
                                joinedAt: '{{ participant.joinedAt|date('Y-m-d H:i:s') }}',
                                status: '{{ participant.status|e('js') }}',
                                actions: `
                                    <button type=\"button\" class=\"btn btn-sm btn-danger mb-0 delete-btn\" data-id=\"{{ participant.id }}\" data-csrf-token=\"{{ csrf_token('delete' ~ participant.id) }}\">Xóa</button>
                                `
                            },
                        {% endfor %}
                    ],
                    tableBodyId: 'participantsTableBody',
                    searchInputId: 'participantsSearchInput',
                    clearSearchBtnId: 'participantsClearSearchBtn',
                    paginationId: 'participantsPagination',
                    columns: [
                        {
                            field: 'userName',
                            formatter: (value) => `
                                <div class=\"d-flex px-2 py-1\">
                                    <div class=\"d-flex flex-column justify-content-center\">
                                        <h6 class=\"mb-0 text-sm\">\${value}</h6>
                                    </div>
                                </div>
                            `
                        },
                        { field: 'studentId' },
                        { field: 'joinedAt', type: 'datetime' },
                        {
                            field: 'status',
                            formatter: (value) => `
                                <p class=\"text-xs font-weight-bold mb-0 text-\${value === 'confirmed' ? 'success' : 'danger'}\">\${value}</p>
                            `
                        }
                    ],
                    onDelete: (button) => {
                        if (!confirm('Bạn có chắc chắn muốn xóa người tham gia này?')) return;
                        const id = button.getAttribute('data-id');
                        const csrfToken = button.getAttribute('data-csrf-token');
                        fetch(`/activity_participant/delete/\${id}`, {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                            body: `_token=\${csrfToken}`
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) window.location.href = data.redirect;
                            else alert(data.error);
                        })
                        .catch(error => alert('Có lỗi xảy ra: ' + error.message));
                    },
                    scrollPositionKey: 'participants_table_scroll_position'
                });
            });
        </script>
    </div>
{% endblock %}", "activity_participant/index.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\activity_participant\\index.html.twig");
    }
}
