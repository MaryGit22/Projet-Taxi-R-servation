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

/* admin/index.html.twig */
class __TwigTemplate_8dee11c7a11db9d4a4628e56e1c6b639 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Back-Office";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"text-center mt-3\">
      <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/typo2.png"), "html", null, true);
        echo "\" alt=\"logo\"></div>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["taxis"]) || array_key_exists("taxis", $context) ? $context["taxis"] : (function () { throw new RuntimeError('Variable "taxis" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxi"]) {
            // line 23
            echo "    <tr class=\"table-info\">
      <td><strong>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxi"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</strong> </td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxi"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "€/km</td>
      <td> <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/taxis/" . twig_get_attribute($this->env, $this->source, $context["taxi"], "photo", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" width=\"70\" alt=\"Taxi\"></td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxi"], "sieges", [], "any", false, false, false, 27), "html", null, true);
            echo " </td>
      <td>
        <a class=\"btn btn-success\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taxi_update", ["id" => twig_get_attribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
        <a class=\"btn btn-danger\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taxi_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["taxi"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer?')\">
        <i class=\"fa-solid fa-trash\"></i></a>
      </td>
    </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  122 => 30,  118 => 29,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
", "admin/index.html.twig", "C:\\Users\\preet\\OneDrive\\Desktop\\projet\\templates\\admin\\index.html.twig");
    }
}
