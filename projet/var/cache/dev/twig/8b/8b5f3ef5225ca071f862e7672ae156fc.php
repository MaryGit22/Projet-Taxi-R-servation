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

/* taxis/taxi.html.twig */
class __TwigTemplate_508426a8de356be14b7feb8ec95ee875 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxis/taxi.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "taxis/taxi.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"text-center mt-3\">
      <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/typo2.png"), "html", null, true);
        echo "\" alt=\"logo\"></div>
    <div class=\"taxi text-center mt-3 pt-3 mx-auto\">
    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/taxis/" . twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 11, $this->source); })()), "photo", [], "any", false, false, false, 11))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Responsive image\">
    <div class=\"container col-4 my-3 mx-auto\">
    <div class=\"row d-flex justify-content-center text-center\">  
        <h4 class=\"font card-title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</h4>
        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
        echo " 
        <h5 class=\"text-danger\">Sièges : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 16, $this->source); })()), "sieges", [], "any", false, false, false, 16), "html", null, true);
        echo " </h5>
        <h5>Tarif :
        <strong>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "html", null, true);
        echo "€</strong>/km
        </h5>
        </div>
    </div>
    </div>

    ";
        // line 24
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "     <h4 class=\"mt-4\">Avis <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i>: </h4>
     ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 26, $this->source); })()), "commentaires", [], "any", false, false, false, 26)));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                echo " 
        <div class=\"border-primary border rounded container py-3 mb-2\">
            <h6 class=\"text-muted\">";
                // line 28
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateDeCreation", [], "any", false, false, false, 28), "d/m/Y à H\\hi"), "html", null, true);
                echo "</h6>
            <p>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "avis", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
             <a class=\"text-success\" href=\"";
                // line 30
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" style=\"text-decoration: none\">
               <i class=\"fa-solid fa-pen-to-square\"></i>
            </a>
            <a class=\"text-danger\" href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\"  style=\"text-decoration: none\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ?')\" >
                <i class=\"fa-solid fa-trash\"></i>
            </a>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        } else {
            echo "\t
   <div>
        <h4 class=\"mt-4\">Commentaires<i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> : </h4>
        ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new RuntimeError('Variable "formCommentaire" does not exist.', 41, $this->source); })()), 'form');
            echo "
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 42, $this->source); })()), "commentaires", [], "any", false, false, false, 42)));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                echo " 
        <div class=\"border-primary border rounded container py-3 mb-2\">
            <h6 class=\"text-muted\">";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateDeCreation", [], "any", false, false, false, 44), "d/m/Y à H\\hi"), "html", null, true);
                echo "</h6>
            <p>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "avis", [], "any", false, false, false, 45), "html", null, true);
                echo "</p>
            <a class=\"btn btn-success\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_modifier", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" style=\"text-decoration: none\">
               Modifier
            </a> 
            <a class=\"btn btn-danger\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\"  onClick=\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ?')\" >
                Supprimer
            </a>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </div>
    
     
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "taxis/taxi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 54,  182 => 49,  176 => 46,  172 => 45,  168 => 44,  161 => 42,  157 => 41,  150 => 38,  139 => 33,  133 => 30,  129 => 29,  125 => 28,  118 => 26,  115 => 25,  113 => 24,  104 => 18,  99 => 16,  95 => 15,  91 => 14,  85 => 11,  80 => 9,  77 => 8,  70 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
    {{taxi.nom}}
{% endblock %}

{% block content %}
<div class=\"text-center mt-3\">
      <img src=\"{{ asset('photos/typo2.png')}}\" alt=\"logo\"></div>
    <div class=\"taxi text-center mt-3 pt-3 mx-auto\">
    <img src=\"{{ asset('photos/taxis/' ~ taxi.photo) }}\" class=\"img-fluid\" alt=\"Responsive image\">
    <div class=\"container col-4 my-3 mx-auto\">
    <div class=\"row d-flex justify-content-center text-center\">  
        <h4 class=\"font card-title\">{{taxi.nom}}</h4>
        {{taxi.description}} 
        <h5 class=\"text-danger\">Sièges : {{taxi.sieges}} </h5>
        <h5>Tarif :
        <strong>{{taxi.prix}}€</strong>/km
        </h5>
        </div>
    </div>
    </div>

    {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
     <h4 class=\"mt-4\">Avis <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i>: </h4>
     {% for commentaire in taxi.commentaires | reverse %} 
        <div class=\"border-primary border rounded container py-3 mb-2\">
            <h6 class=\"text-muted\">{{ commentaire.dateDeCreation | date(\"d/m/Y \\à H\\\\hi\") }}</h6>
            <p>{{ commentaire.avis }}</p>
             <a class=\"text-success\" href=\"{{ path('app_login') }}\" style=\"text-decoration: none\">
               <i class=\"fa-solid fa-pen-to-square\"></i>
            </a>
            <a class=\"text-danger\" href=\"{{ path('app_login')}}\"  style=\"text-decoration: none\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ?')\" >
                <i class=\"fa-solid fa-trash\"></i>
            </a>
        </div>
        {% endfor %}
    {% else %}\t
   <div>
        <h4 class=\"mt-4\">Commentaires<i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> : </h4>
        {{ form(formCommentaire) }}
        {% for commentaire in taxi.commentaires | reverse %} 
        <div class=\"border-primary border rounded container py-3 mb-2\">
            <h6 class=\"text-muted\">{{ commentaire.dateDeCreation | date(\"d/m/Y \\à H\\\\hi\") }}</h6>
            <p>{{ commentaire.avis }}</p>
            <a class=\"btn btn-success\" href=\"{{ path('app_commentaire_modifier', {id:commentaire.id}) }}\" style=\"text-decoration: none\">
               Modifier
            </a> 
            <a class=\"btn btn-danger\" href=\"{{ path('app_commentaire_supprimer', {id:commentaire.id}) }}\"  onClick=\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ?')\" >
                Supprimer
            </a>
        </div>
        {% endfor %}
    </div>
    
     
    {% endif %}
{% endblock %}", "taxis/taxi.html.twig", "C:\\Users\\preet\\OneDrive\\Desktop\\projet\\templates\\taxis\\taxi.html.twig");
    }
}
