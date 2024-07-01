<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/confirmation_email.html.twig */
class __TwigTemplate_ed1257f7ec1b3e318fdb15ccdd80b21c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<h1>Hi! Please confirm your email</h1>

<p> Please confirm your email address by clicking the following link : <br> <br>
<a href = \"";
        // line 4
        echo (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 4, $this->source); })());
        echo "\">Confirm my Email</a>
This link will expire in ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["expiresAt"]) || array_key_exists("expiresAt", $context) ? $context["expiresAt"] : (function () { throw new RuntimeError('Variable "expiresAt" does not exist.', 5, $this->source); })()), "g"), "html", null, true);
        echo " hour(s).
</p>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Hi! Please confirm your email</h1>

<p> Please confirm your email address by clicking the following link : <br> <br>
<a href = \"{{ signedUrl|raw }}\">Confirm my Email</a>
This link will expire in {{ expiresAt|date('g') }} hour(s).
</p>

", "registration/confirmation_email.html.twig", "C:\\Users\\preet\\OneDrive\\Desktop\\projet\\templates\\registration\\confirmation_email.html.twig");
    }
}
