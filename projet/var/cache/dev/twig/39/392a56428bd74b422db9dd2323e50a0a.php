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

/* taxis/taxi.html.twig */
class __TwigTemplate_e5658a17279a253e2cc623165fe9e68c extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "<div class=\"text-center mt-3\">
      <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/typo2.png"), "html", null, true);
        yield "\" alt=\"logo\"></div>
    <div class=\"taxi text-center mt-3 pt-3 mx-auto\">
    <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/taxis/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 11, $this->source); })()), "photo", [], "any", false, false, false, 11))), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Responsive image\">
    <div class=\"container col-4 my-3 mx-auto\">
    <div class=\"row d-flex justify-content-center text-center\">  
        <h4 class=\"font card-title\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "</h4>
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
        yield " 
        <h5 class=\"text-danger\">Sièges : ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 16, $this->source); })()), "sieges", [], "any", false, false, false, 16), "html", null, true);
        yield " </h5>
        <h5>Tarif :
        <strong>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "html", null, true);
        yield "€</strong>/km
        </h5>
        </div>
    </div>
    </div>

    ";
        // line 24
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            yield "     <h4 class=\"mt-4\">Avis <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i>: </h4>
     ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 26, $this->source); })()), "commentaires", [], "any", false, false, false, 26)));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                yield " 
        <div class=\"border-primary border rounded container py-3 mb-2\">
            <h6 class=\"text-muted\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "dateDeCreation", [], "any", false, false, false, 28), "d/m/Y à H\\hi"), "html", null, true);
                yield "</h6>
            <p>";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "avis", [], "any", false, false, false, 29), "html", null, true);
                yield "</p>
             <a class=\"text-success\" href=\"";
                // line 30
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" style=\"text-decoration: none\">
               <i class=\"fa-solid fa-pen-to-square\"></i>
            </a>
            <a class=\"text-danger\" href=\"";
                // line 33
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\"  style=\"text-decoration: none\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ?')\" >
                <i class=\"fa-solid fa-trash\"></i>
            </a>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "    ";
        } else {
            yield "\t
   <div>
        <h4 class=\"mt-4\">Commentaires<i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> <i class=\"fa-regular fa-star text-warning\"></i> : </h4>
        ";
            // line 41
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new RuntimeError('Variable "formCommentaire" does not exist.', 41, $this->source); })()), 'form');
            yield "
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["taxi"]) || array_key_exists("taxi", $context) ? $context["taxi"] : (function () { throw new RuntimeError('Variable "taxi" does not exist.', 42, $this->source); })()), "commentaires", [], "any", false, false, false, 42)));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                yield " 
        <div class=\"border-primary border rounded container py-3 mb-2\">
            <h6 class=\"text-muted\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "dateDeCreation", [], "any", false, false, false, 44), "d/m/Y à H\\hi"), "html", null, true);
                yield "</h6>
            <p>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "avis", [], "any", false, false, false, 45), "html", null, true);
                yield "</p>
            <a class=\"btn btn-success\" href=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\" style=\"text-decoration: none\">
               Modifier
            </a> 
            <a class=\"btn btn-danger\" href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\"  onClick=\"return confirm('êtes vous sûr de vouloir supprimer le commentaire ?')\" >
                Supprimer
            </a>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "    </div>
    
     
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "taxis/taxi.html.twig";
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
        return array (  195 => 54,  184 => 49,  178 => 46,  174 => 45,  170 => 44,  163 => 42,  159 => 41,  152 => 38,  141 => 33,  135 => 30,  131 => 29,  127 => 28,  120 => 26,  117 => 25,  115 => 24,  106 => 18,  101 => 16,  97 => 15,  93 => 14,  87 => 11,  82 => 9,  79 => 8,  72 => 7,  61 => 4,  54 => 3,  37 => 1,);
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
{% endblock %}", "taxis/taxi.html.twig", "C:\\Users\\preet\\OneDrive\\Documents\\GitHub\\Projet-Taxi-Reservation\\projet\\templates\\taxis\\taxi.html.twig");
    }
}
