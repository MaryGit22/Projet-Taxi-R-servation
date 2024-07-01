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

/* layout.html.twig */
class __TwigTemplate_b10cd2e0ce3e0b6e66baf3919e3a3544 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/logo5.png"), "html", null, true);
        yield "\" alt=\"logo\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active text-light\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil <i class=\"fa-solid fa-house\"></i>
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
              <li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taxis");
        yield "\">Véhicules</a>
\t\t\t\t\t\t\t</li>
        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 21
            yield "        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
            yield "\">Reservation <i class=\"fa-solid fa-taxi\"></i></a>
        </li> 
        ";
        } else {
            // line 25
            yield "        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Reservation <i class=\"fa-solid fa-taxi\"></i></a>
        </li> 
        ";
        }
        // line 29
        yield "        
        ";
        // line 30
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 31
            yield "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-light\" data-bs-toggle=\"dropdown\" href=\"\" 
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin</a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\">Back-Office</a>
              <a class=\"dropdown-item\" href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taxis_add");
            yield "\">Ajout d'un véhicule</a>
            </div>
          </li>
        ";
        }
        // line 40
        yield "      </ul>
      <form class=\"d-flex\">
      ";
        // line 42
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            yield "                <a class=\"nav-link text-light\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><i class=\"fa-solid fa-user fa-2xl\"></i></a>
                <a class=\"nav-link\" href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\"><button type=\"button\" class=\"btn btn-outline-light\">S'inscrire</button></a>
        ";
        } else {
            // line 45
            yield "\t
                <div class=\"text-light\">Bienvenue 
                <a class=\"text-decoration-none text-light\"href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            yield "\">
                <strong>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "Pseudo", [], "any", false, false, false, 48)), "html", null, true);
            yield "</strong> </a></div>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><button type=\"button\" class=\"btn btn-outline-light\">Déconnexion</button></a>
\t\t\t\t";
        }
        // line 51
        yield "        <input class=\"form-control bg-dark text-light\" type=\"search\" placeholder=\"Search\">
        <button class=\"btn btn-light my-2 my-sm-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

<main class=\"container mb-5\">
  ";
        // line 60
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "flashes", ["error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 61
            yield "\t\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t\t";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "
\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "flashes", ["success"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 67
            yield "\t\t\t<div class=\"alert alert-success text-center\">
\t\t\t\t\t";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "
";
        // line 72
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 75
        yield "</main>

<footer class=\"fixed-bottom footer text-light\">
<div class=\"flex\">
\t\t<div class=\"mb-0 py-1\">
      <a class=\"text-light text-decoration-none\" href= \"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">A propos</a> &nbsp; | &nbsp; 
      <a class=\"text-light text-decoration-none\" href= \"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
        yield "\">Mention Légales</a> &nbsp; | &nbsp; 
      <a class=\"text-light text-decoration-none\" href= \"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contactez-nous</a>
    </div>
    <div class=\" mb-0 py-1\">
      <a href=\"https://fr-fr.facebook.com/\" class=\"text-light\"><i class=\"fa-brands fa-facebook fa-lg\"></i></a> |
      <a href=\"https://twitter.com/?lang=fr\" class=\"text-light\"><i class=\"fa-brands fa-twitter fa-lg\"></i></a> |
      <a href=\"https://fr.linkedin.com/\" class=\"text-light\"><i class=\"fa-brands fa-linkedin fa-lg\"></i></a> 
  </div>
</div>
\t</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 73
        yield "        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html.twig";
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
        return array (  256 => 73,  249 => 72,  231 => 82,  227 => 81,  223 => 80,  216 => 75,  214 => 72,  211 => 71,  202 => 68,  199 => 67,  195 => 66,  192 => 65,  183 => 62,  180 => 61,  175 => 60,  165 => 51,  160 => 49,  156 => 48,  152 => 47,  148 => 45,  143 => 44,  138 => 43,  136 => 42,  132 => 40,  125 => 36,  121 => 35,  115 => 31,  113 => 30,  110 => 29,  104 => 26,  101 => 25,  95 => 22,  92 => 21,  90 => 20,  85 => 18,  77 => 13,  65 => 6,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\"><img src=\"{{ asset('photos/logo5.png')}}\" alt=\"logo\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active text-light\" href=\"{{ path('app_home') }}\">Accueil <i class=\"fa-solid fa-house\"></i>
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
              <li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-light\" href=\"{{ path('app_taxis') }}\">Véhicules</a>
\t\t\t\t\t\t\t</li>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('app_booking')}}\">Reservation <i class=\"fa-solid fa-taxi\"></i></a>
        </li> 
        {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link text-light\" href=\"{{ path('app_login')}}\">Reservation <i class=\"fa-solid fa-taxi\"></i></a>
        </li> 
        {% endif %}
        
        {% if is_granted('IS_AUTHENTICATED_FULLY') and is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-light\" data-bs-toggle=\"dropdown\" href=\"\" 
                            role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin</a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"{{ path('app_admin')}}\">Back-Office</a>
              <a class=\"dropdown-item\" href=\"{{ path('app_taxis_add')}}\">Ajout d'un véhicule</a>
            </div>
          </li>
        {% endif %}
      </ul>
      <form class=\"d-flex\">
      {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
                <a class=\"nav-link text-light\" href=\"{{ path('app_login')}}\"><i class=\"fa-solid fa-user fa-2xl\"></i></a>
                <a class=\"nav-link\" href=\"{{ path('app_register')}}\"><button type=\"button\" class=\"btn btn-outline-light\">S'inscrire</button></a>
        {% else %}\t
                <div class=\"text-light\">Bienvenue 
                <a class=\"text-decoration-none text-light\"href=\"{{ path('app_profil')}}\">
                <strong>{{app.user.Pseudo | capitalize}}</strong> </a></div>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout') }}\"><button type=\"button\" class=\"btn btn-outline-light\">Déconnexion</button></a>
\t\t\t\t{% endif %}
        <input class=\"form-control bg-dark text-light\" type=\"search\" placeholder=\"Search\">
        <button class=\"btn btn-light my-2 my-sm-0\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

<main class=\"container mb-5\">
  {# pour afficher les messages error et success #}
\t{% for message in app.flashes('error') %}
\t\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success text-center\">
\t\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

{% block content %}
        
{% endblock %}
</main>

<footer class=\"fixed-bottom footer text-light\">
<div class=\"flex\">
\t\t<div class=\"mb-0 py-1\">
      <a class=\"text-light text-decoration-none\" href= \"{{ path('app_contact')}}\">A propos</a> &nbsp; | &nbsp; 
      <a class=\"text-light text-decoration-none\" href= \"{{ path('app_cgu')}}\">Mention Légales</a> &nbsp; | &nbsp; 
      <a class=\"text-light text-decoration-none\" href= \"{{ path('app_contact')}}\">Contactez-nous</a>
    </div>
    <div class=\" mb-0 py-1\">
      <a href=\"https://fr-fr.facebook.com/\" class=\"text-light\"><i class=\"fa-brands fa-facebook fa-lg\"></i></a> |
      <a href=\"https://twitter.com/?lang=fr\" class=\"text-light\"><i class=\"fa-brands fa-twitter fa-lg\"></i></a> |
      <a href=\"https://fr.linkedin.com/\" class=\"text-light\"><i class=\"fa-brands fa-linkedin fa-lg\"></i></a> 
  </div>
</div>
\t</footer>
{% endblock %}
", "layout.html.twig", "C:\\Users\\preet\\OneDrive\\Documents\\GitHub\\Projet-Taxi-Reservation\\projet\\templates\\layout.html.twig");
    }
}
