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

/* @Twig/error.html.twig */
class __TwigTemplate_ca033f91df102c5c27d8ebaea1eb7b96 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/error.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #e74c3c;
        }
    </style>
</head>
<body>
    ";
        // line 17
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 17, $this->source); })()) == 404)) {
            // line 18
            yield "        <h1>Page Not Found</h1>
        <p>We couldn't find the page you were looking for.</p>
    ";
        } elseif ((        // line 20
(isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 20, $this->source); })()) == 500)) {
            // line 21
            yield "        <h1>Internal Server Error</h1>
        <p>Something went wrong on our end. Please try again later.</p>
    ";
        } else {
            // line 24
            yield "        <h1>Oops! Something went wrong.</h1>
        <p>Error Code: ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "</p>
        <p>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "</p>
    ";
        }
        // line 28
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Twig/error.html.twig";
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
        return array (  91 => 28,  86 => 26,  82 => 25,  79 => 24,  74 => 21,  72 => 20,  68 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #e74c3c;
        }
    </style>
</head>
<body>
    {% if status_code == 404 %}
        <h1>Page Not Found</h1>
        <p>We couldn't find the page you were looking for.</p>
    {% elseif status_code == 500 %}
        <h1>Internal Server Error</h1>
        <p>Something went wrong on our end. Please try again later.</p>
    {% else %}
        <h1>Oops! Something went wrong.</h1>
        <p>Error Code: {{ status_code }}</p>
        <p>{{ status_text }}</p>
    {% endif %}
</body>
</html>
", "@Twig/error.html.twig", "C:\\laragon\\www\\BookClub_MS\\templates\\bundles\\TwigBundle\\error.html.twig");
    }
}
