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

/* home/contact.html.twig */
class __TwigTemplate_79e24669a96e2e2eae9550766fb63361 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/contact.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Contact! ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"text-center mt-3\">
      <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/typo2.png"), "html", null, true);
        yield "\" alt=\"logo\"></div><br>
<div class = \"contact\">

<form method=\"post\" class=\"mt-3 text-center\">
    <div class=\"formcontact  text-center\">
        <h1 class=\"mb-3\">Laissez votre message</h1>
            <div>
                <label for=\"name\">
                <input type=\"text\" id=\"name\" placeholder=\"Nom\" class=\"input\">
                </label>
            </div><br>
            <div>
                <label for=\"surname\">
                <input type=\"text\" id=\"surname\" placeholder=\"Prénom\" class=\"input\">
                </label>
            </div><br>
            <div>
                <label for=\"mail\">
                <input type=\"email\" id=\"mail\" placeholder=\"Email\" class=\"input\">
                </label>
            </div><br>
            <div>
                <label for=\"msg\"></label>
                <textarea name=\"message\" id=\"msg\" cols=\"30\" rows=\"5\" placeholder=\"Message\" class=\"input\"></textarea>
            </div><br>
            <div>
                <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-danger\">
            </div>
        </div>
</form>
<div class=\"propos\">
<h1 class=\"mt-3 text-center\">A propos</h1><hr>
<div class=\"text-center\">
<img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/bienvenue.png"), "html", null, true);
        yield "\" class=\"mb-3\" alt=\"logo\"></div>
<p class=\"font\">
Réservez facilement en ligne et en quelques clics, votre chauffeur de taxi ou un exploitant de voiture de transport avec chauffeur VTC
 pour tous vos déplacements à Paris et ses alentours.</p><p class=\"font\"> Nous sommes spécialisés dans les transferts aéroports et gares ainsi que pour des courses courtes et longues distances avec un service haut de gamme. 
Disponible immédiatement, <strong> <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">bienvenuetransport.fr</strong></a>  propose des prestations adaptées à vos besoins. </p>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  121 => 44,  114 => 40,  78 => 7,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %} Contact! {% endblock %}

{% block content %}
<div class=\"text-center mt-3\">
      <img src=\"{{ asset('photos/typo2.png')}}\" alt=\"logo\"></div><br>
<div class = \"contact\">

<form method=\"post\" class=\"mt-3 text-center\">
    <div class=\"formcontact  text-center\">
        <h1 class=\"mb-3\">Laissez votre message</h1>
            <div>
                <label for=\"name\">
                <input type=\"text\" id=\"name\" placeholder=\"Nom\" class=\"input\">
                </label>
            </div><br>
            <div>
                <label for=\"surname\">
                <input type=\"text\" id=\"surname\" placeholder=\"Prénom\" class=\"input\">
                </label>
            </div><br>
            <div>
                <label for=\"mail\">
                <input type=\"email\" id=\"mail\" placeholder=\"Email\" class=\"input\">
                </label>
            </div><br>
            <div>
                <label for=\"msg\"></label>
                <textarea name=\"message\" id=\"msg\" cols=\"30\" rows=\"5\" placeholder=\"Message\" class=\"input\"></textarea>
            </div><br>
            <div>
                <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-danger\">
            </div>
        </div>
</form>
<div class=\"propos\">
<h1 class=\"mt-3 text-center\">A propos</h1><hr>
<div class=\"text-center\">
<img src=\"{{asset('photos/bienvenue.png')}}\" class=\"mb-3\" alt=\"logo\"></div>
<p class=\"font\">
Réservez facilement en ligne et en quelques clics, votre chauffeur de taxi ou un exploitant de voiture de transport avec chauffeur VTC
 pour tous vos déplacements à Paris et ses alentours.</p><p class=\"font\"> Nous sommes spécialisés dans les transferts aéroports et gares ainsi que pour des courses courtes et longues distances avec un service haut de gamme. 
Disponible immédiatement, <strong> <a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">bienvenuetransport.fr</strong></a>  propose des prestations adaptées à vos besoins. </p>
</div>
</div>
{% endblock %}", "home/contact.html.twig", "C:\\Users\\preet\\OneDrive\\Desktop\\projet\\templates\\home\\contact.html.twig");
    }
}
