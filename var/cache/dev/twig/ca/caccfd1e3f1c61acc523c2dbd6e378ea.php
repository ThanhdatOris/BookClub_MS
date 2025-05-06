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

/* z-old/funding/testindex.html.twig */
class __TwigTemplate_c99184ba993f67f05167ea03c93d4883 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/funding/testindex.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "z-old/funding/testindex.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "z-old/funding/testindex.html.twig", 1);
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

        yield "Quản lý Giao Dịch Quỹ";
        
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
        yield "<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card mb-4 shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 fw-bold\"><i class=\"fas fa-list-ul me-2\"></i> Danh sách giao dịch quỹ</h6>
                        <div>
                            <select id=\"filterType\" class=\"form-select form-select-sm d-inline w-auto\">
                                <option value=\"\">Tất cả loại</option>
                                <option value=\"Thu\">Thu</option>
                                <option value=\"Chi\">Chi</option>
                            </select>
                            <input type=\"date\" id=\"filterDateFrom\" class=\"form-control form-control-sm d-inline w-auto\">
                            <input type=\"date\" id=\"filterDateTo\" class=\"form-control form-control-sm d-inline w-auto\">
                            <button class=\"btn btn-secondary btn-sm\" id=\"applyFilters\">Lọc</button>
                        </div>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"fundingTable\" class=\"table table-hover align-items-center mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Loại</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Số tiền</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Mô tả</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Ngày</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funding_new");
        yield "\" class=\"btn btn-success btn-sm mt-3\">+ Thêm giao dịch</a>
                    </div>
                </div>

                <!-- Chi tiết giao dịch -->
                <div class=\"card mt-4 shadow-sm d-none\" id=\"transactionDetail\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Chi tiết giao dịch - <span id=\"transactionType\"></span></h6>
                        <button class=\"btn btn-danger btn-sm\" id=\"closeDetail\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <p><strong>Số tiền:</strong> <span id=\"transactionAmount\"></span></p>
                        <p><strong>Mô tả:</strong> <span id=\"transactionDescription\"></span></p>
                        <p><strong>Ngày:</strong> <span id=\"transactionDate\"></span></p>
                        <button class=\"btn btn-warning btn-sm\" id=\"editTransaction\">Chỉnh sửa</button>
                        <button class=\"btn btn-danger btn-sm\" id=\"deleteTransaction\">Xóa giao dịch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
\$(document).ready(function() {
    let fundingTable = \$('#fundingTable').DataTable({
        \"ajax\": \"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_funding_index");
        yield "\",
        \"columns\": [
            { \"data\": \"id\" },
            { \"data\": \"type\" },
            { \"data\": \"amount\" },
            { \"data\": \"description\" },
            { \"data\": \"date\" },
            {
                \"data\": null,
                \"className\": \"text-center align-middle\",
                \"render\": function(data, type, row) {
                    return `<button class=\"btn btn-primary btn-sm view-transaction\" 
                             data-id=\"\${row.id}\" data-type=\"\${row.type}\" 
                             data-amount=\"\${row.amount}\" data-description=\"\${row.description}\" 
                             data-date=\"\${row.date}\">Xem</button>`;
                }
            }
        ],
        \"scrollX\": true,
        \"autoWidth\": false,
        \"order\": [[0, \"asc\"]],
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/1.11.5/i18n/Vietnamese.json\"
        }
    });

    \$('#fundingTable tbody').on('click', '.view-transaction', function() {
        let transactionType = \$(this).data('type');
        let transactionAmount = \$(this).data('amount');
        let transactionDescription = \$(this).data('description');
        let transactionDate = \$(this).data('date');

        \$('#transactionType').text(transactionType);
        \$('#transactionAmount').text(transactionAmount);
        \$('#transactionDescription').text(transactionDescription);
        \$('#transactionDate').text(transactionDate);
        \$('#transactionDetail').hide().removeClass('d-none').slideDown();
    });

    \$('#closeDetail').on('click', function() {
        \$('#transactionDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#applyFilters').on('click', function() {
        let type = \$('#filterType').val();
        let dateFrom = \$('#filterDateFrom').val();
        let dateTo = \$('#filterDateTo').val();
        
        fundingTable.column(1).search(type);
        if (dateFrom && dateTo) {
            fundingTable.column(4).search(dateFrom + '|' + dateTo, true, false);
        } else {
            fundingTable.column(4).search('');
        }
        fundingTable.draw();
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
        return "z-old/funding/testindex.html.twig";
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
        return array (  165 => 66,  136 => 40,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quản lý Giao Dịch Quỹ{% endblock %}

{% block body %}
<main class=\"main-content position-relative border-radius-lg\">
    <div class=\"container-fluid py-4\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card mb-4 shadow-lg\">
                    <div class=\"card-header bg-gradient-primary text-white pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 fw-bold\"><i class=\"fas fa-list-ul me-2\"></i> Danh sách giao dịch quỹ</h6>
                        <div>
                            <select id=\"filterType\" class=\"form-select form-select-sm d-inline w-auto\">
                                <option value=\"\">Tất cả loại</option>
                                <option value=\"Thu\">Thu</option>
                                <option value=\"Chi\">Chi</option>
                            </select>
                            <input type=\"date\" id=\"filterDateFrom\" class=\"form-control form-control-sm d-inline w-auto\">
                            <input type=\"date\" id=\"filterDateTo\" class=\"form-control form-control-sm d-inline w-auto\">
                            <button class=\"btn btn-secondary btn-sm\" id=\"applyFilters\">Lọc</button>
                        </div>
                    </div>
                    <div class=\"card-body px-4 pt-3 pb-2\">
                        <div class=\"table-responsive\">
                            <table id=\"fundingTable\" class=\"table table-hover align-items-center mb-0\">
                                <thead class=\"table-light\">
                                    <tr>
                                        <th class=\"text-secondary text-xs font-weight-bold\">ID</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Loại</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Số tiền</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Mô tả</th>
                                        <th class=\"text-secondary text-xs font-weight-bold\">Ngày</th>
                                        <th class=\"text-secondary text-xs font-weight-bold text-center\">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <a href=\"{{ path('app_funding_new') }}\" class=\"btn btn-success btn-sm mt-3\">+ Thêm giao dịch</a>
                    </div>
                </div>

                <!-- Chi tiết giao dịch -->
                <div class=\"card mt-4 shadow-sm d-none\" id=\"transactionDetail\">
                    <div class=\"card-header pb-3 d-flex justify-content-between align-items-center\">
                        <h6 class=\"mb-0 text-primary\">Chi tiết giao dịch - <span id=\"transactionType\"></span></h6>
                        <button class=\"btn btn-danger btn-sm\" id=\"closeDetail\">Đóng</button>
                    </div>
                    <div class=\"card-body px-4 pt-0 pb-2\">
                        <p><strong>Số tiền:</strong> <span id=\"transactionAmount\"></span></p>
                        <p><strong>Mô tả:</strong> <span id=\"transactionDescription\"></span></p>
                        <p><strong>Ngày:</strong> <span id=\"transactionDate\"></span></p>
                        <button class=\"btn btn-warning btn-sm\" id=\"editTransaction\">Chỉnh sửa</button>
                        <button class=\"btn btn-danger btn-sm\" id=\"deleteTransaction\">Xóa giao dịch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
\$(document).ready(function() {
    let fundingTable = \$('#fundingTable').DataTable({
        \"ajax\": \"{{ path('app_funding_index') }}\",
        \"columns\": [
            { \"data\": \"id\" },
            { \"data\": \"type\" },
            { \"data\": \"amount\" },
            { \"data\": \"description\" },
            { \"data\": \"date\" },
            {
                \"data\": null,
                \"className\": \"text-center align-middle\",
                \"render\": function(data, type, row) {
                    return `<button class=\"btn btn-primary btn-sm view-transaction\" 
                             data-id=\"\${row.id}\" data-type=\"\${row.type}\" 
                             data-amount=\"\${row.amount}\" data-description=\"\${row.description}\" 
                             data-date=\"\${row.date}\">Xem</button>`;
                }
            }
        ],
        \"scrollX\": true,
        \"autoWidth\": false,
        \"order\": [[0, \"asc\"]],
        \"language\": {
            \"url\": \"//cdn.datatables.net/plug-ins/1.11.5/i18n/Vietnamese.json\"
        }
    });

    \$('#fundingTable tbody').on('click', '.view-transaction', function() {
        let transactionType = \$(this).data('type');
        let transactionAmount = \$(this).data('amount');
        let transactionDescription = \$(this).data('description');
        let transactionDate = \$(this).data('date');

        \$('#transactionType').text(transactionType);
        \$('#transactionAmount').text(transactionAmount);
        \$('#transactionDescription').text(transactionDescription);
        \$('#transactionDate').text(transactionDate);
        \$('#transactionDetail').hide().removeClass('d-none').slideDown();
    });

    \$('#closeDetail').on('click', function() {
        \$('#transactionDetail').slideUp(function() {
            \$(this).addClass('d-none');
        });
    });

    \$('#applyFilters').on('click', function() {
        let type = \$('#filterType').val();
        let dateFrom = \$('#filterDateFrom').val();
        let dateTo = \$('#filterDateTo').val();
        
        fundingTable.column(1).search(type);
        if (dateFrom && dateTo) {
            fundingTable.column(4).search(dateFrom + '|' + dateTo, true, false);
        } else {
            fundingTable.column(4).search('');
        }
        fundingTable.draw();
    });
});
</script>
{% endblock %}", "z-old/funding/testindex.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\z-old\\funding\\testindex.html.twig");
    }
}
