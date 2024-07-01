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

/* taxis/index.html.twig */
class __TwigTemplate_cb6562251149f339ea70792269aee243 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxis/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "taxis/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Taxis";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<div class=\"text-center mt-3\">
      <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/typo2.png"), "html", null, true);
        echo "\" alt=\"logo\"></div>
<h1 class=\"font text-center my-3\"><i class=\"fa-solid fa-taxi\"></i>  Services du Taxis  <i class=\"fa-solid fa-taxi\"></i></h1>

<div class=\"zoom row d-flex justify-content-center text-center\">

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxis"]) || array_key_exists("taxis", $context) ? $context["taxis"] : (function () { throw new RuntimeError('Variable "taxis" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxi"]) {
            // line 14
            echo "
<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taxi", ["id" => twig_get_attribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"cards border border-primary rounded m-5 py-2 text-decoration-none\" 
style=\"width: 30rem;\">  

<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/taxis/" . twig_get_attribute($this->env, $this->source, $context["taxi"], "photo", [], "any", false, false, false, 18))), "html", null, true);
            echo "\"  alt=\"Taxi\">
<h4 class=\"font mt-3\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxi"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo " </h4>

</a>                 
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " </div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "taxis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  102 => 19,  98 => 18,  92 => 15,  89 => 14,  85 => 13,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Taxis{% endblock %}

{% block content %}

<div class=\"text-center mt-3\">
      <img src=\"{{ asset('photos/typo2.png')}}\" alt=\"logo\"></div>
<h1 class=\"font text-center my-3\"><i class=\"fa-solid fa-taxi\"></i>  Services du Taxis  <i class=\"fa-solid fa-taxi\"></i></h1>

<div class=\"zoom row d-flex justify-content-center text-center\">

{% for taxi in taxis %}

<a href=\"{{ path('app_taxi', {id: taxi.id}) }}\" class=\"cards border border-primary rounded m-5 py-2 text-decoration-none\" 
style=\"width: 30rem;\">  

<img src=\"{{ asset('photos/taxis/' ~ taxi.photo) }}\"  alt=\"Taxi\">
<h4 class=\"font mt-3\">{{taxi.nom}} </h4>

</a>                 
        
{% endfor %}
 </div> 
{% endblock %}
", "taxis/index.html.twig", "C:\\Users\\preet\\OneDrive\\Desktop\\projet\\templates\\taxis\\index.html.twig");
    }
}
