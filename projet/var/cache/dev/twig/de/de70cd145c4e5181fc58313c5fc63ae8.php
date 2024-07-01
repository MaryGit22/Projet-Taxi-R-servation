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

/* admin/index.html.twig */
class __TwigTemplate_b534e6ed78856f39ce874cefae503ed4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Back-Office";
        
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
        yield "\" alt=\"logo\"></div>
<h1 class=\"text-center my-3\">Gestion des Services</h1>
<div class=\"container\">
<table class=\"table table-hover\">
  <thead class=\"text-secondary\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Tarifs</th>
      <th scope=\"col\">Image</th>
      <th scope=\"col\">Sièges</th>
      <th scope=\"col\">Options de modification</th>
    </tr>
  </thead>
  <tbody>

   ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["taxis"]) || array_key_exists("taxis", $context) ? $context["taxis"] : (function () { throw new RuntimeError('Variable "taxis" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxi"]) {
            // line 23
            yield "    <tr class=\"table-info\">
      <td><strong>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "nom", [], "any", false, false, false, 24), "html", null, true);
            yield "</strong> </td>
      <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "prix", [], "any", false, false, false, 25), "html", null, true);
            yield "€/km</td>
      <td> <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/taxis/" . CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "photo", [], "any", false, false, false, 26))), "html", null, true);
            yield "\" width=\"70\" alt=\"Taxi\"></td>
      <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "sieges", [], "any", false, false, false, 27), "html", null, true);
            yield " </td>
      <td>
        <a class=\"btn btn-success\" href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taxi_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
        <a class=\"btn btn-danger\" href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taxi_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer?')\">
        <i class=\"fa-solid fa-trash\"></i></a>
      </td>
    </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "</tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
        return array (  135 => 35,  124 => 30,  120 => 29,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  100 => 23,  96 => 22,  78 => 7,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Back-Office{% endblock %}

{% block content %}
<div class=\"text-center mt-3\">
      <img src=\"{{ asset('photos/typo2.png')}}\" alt=\"logo\"></div>
<h1 class=\"text-center my-3\">Gestion des Services</h1>
<div class=\"container\">
<table class=\"table table-hover\">
  <thead class=\"text-secondary\">
    <tr>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\">Tarifs</th>
      <th scope=\"col\">Image</th>
      <th scope=\"col\">Sièges</th>
      <th scope=\"col\">Options de modification</th>
    </tr>
  </thead>
  <tbody>

   {% for taxi in taxis %}
    <tr class=\"table-info\">
      <td><strong>{{taxi.nom}}</strong> </td>
      <td>{{taxi.prix}}€/km</td>
      <td> <img src=\"{{ asset('photos/taxis/' ~ taxi.photo) }}\" width=\"70\" alt=\"Taxi\"></td>
      <td>{{taxi.sieges}} </td>
      <td>
        <a class=\"btn btn-success\" href=\"{{path('app_taxi_update', {id: taxi.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
        <a class=\"btn btn-danger\" href=\"{{path('app_taxi_delete', {id: taxi.id}) }}\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer?')\">
        <i class=\"fa-solid fa-trash\"></i></a>
      </td>
    </tr>
   {% endfor %}
</tbody>
</table>
{% endblock %}
", "admin/index.html.twig", "C:\\Users\\preet\\OneDrive\\Documents\\GitHub\\Projet-Taxi-Reservation\\projet\\templates\\admin\\index.html.twig");
    }
}
