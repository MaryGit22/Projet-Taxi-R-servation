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
class __TwigTemplate_8c1de7fb8e86f8634efc9228fc70b810 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "Pseudo", [], "any", false, false, false, 48)), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 60));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 66));
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
        return; yield '';
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        
";
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
        return array (  237 => 72,  222 => 82,  218 => 81,  214 => 80,  207 => 75,  205 => 72,  202 => 71,  193 => 68,  190 => 67,  186 => 66,  183 => 65,  174 => 62,  171 => 61,  166 => 60,  156 => 51,  151 => 49,  147 => 48,  143 => 47,  139 => 45,  134 => 44,  129 => 43,  127 => 42,  123 => 40,  116 => 36,  112 => 35,  106 => 31,  104 => 30,  101 => 29,  95 => 26,  92 => 25,  86 => 22,  83 => 21,  81 => 20,  76 => 18,  68 => 13,  56 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "C:\\Users\\preet\\OneDrive\\Documents\\GitHub\\Projet-Taxi-Reservation\\projet\\templates\\layout.html.twig");
    }
}
