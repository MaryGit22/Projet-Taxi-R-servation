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

/* home/index.html.twig */
class __TwigTemplate_a8b723e759c2c5ea285f0bf258e0f774 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
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
        yield "
<section class=\"image\"></section>

<div class=\" background py-3 container\">

<h2 class=\"titre text-center text-align-justify\">Un Taxi pour tous vos déplacements <br>
Simple & Rapide</h2>

<h2 class=\"titre my-3\">LES TAXIS</h2>
<p class=\"text-light\"> Les avantages :</p>
<ul class=\"text-light\">
<li>Le service est disponible 7j/7, 24h/24</li>
<li>Mode de transport très répandu et facile d'accès</li>
<li>Gamme de services très variée</li>
</ul>
<br>
<h2 class=\"titre my-3\">SÉCURITÉ</h2>
<p class=\"text-light\">Un exploitant de taxi doit donc détenir une \"autorisation de stationnement\" (licence) pour pouvoir exercer son activité. 
    Sur la plaque obligatoire apposée sur l'aile avant droite de la voiture figure le numéro d'autorisation du stationnement et la commune de rattachement. 
    Cette autorisation détermine une zone de prise en charge des clients, plus ou moins importante à l'intérieur de chaque région ou département</p>
<p class=\"text-light\">Le chauffeur de taxi, exploitant ou salarié, est obligatoirement diplômé d'un certificat de capacité professionnelle. Il doit faire figurer au bas de son pare-brise, 
    sa carte professionnelle précisant le ou les départements dans lesquels il peut exercer sa profession.</p>
<p class=\"text-light\">Les taxis ont l'obligation d'accepter une personne handicapée dans leur véhicule, et de les aider à s'installer en cas de besoin. 
    Les chiens guides d'aveugle ont l'autorisation de monter sans qu'un supplément ne soit demandé à son propriétaire.</p>
<br>
<h2 class=\"titre my-3\">RÉSERVATION ET TARIF</h2>
<p class=\"text-light\"> Il existe 4 possibilités de prendre un taxi :</p>
<ul class=\"text-light\">
<li> Réserver un taxi via une centrale d'appel.</li>
<li> Attendre un taxi à une borne près du lieu où l'on se trouve dans les zones urbaines.</li>
<li> Héler un taxi dans la rue.</li>
<li> Planifier son trajet via la plateforme <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">bienvenuetransport.fr</a>  qui permet de réserver un chauffeur après avoir comparé différentes offres, et de bénéficier d'un prix fixe connu à l'avance.</li>
</ul>
<br>
<h2 class=\"titre my-3\">- Taxi conventionné</h2>
<p class=\"text-light\">Le taxi conventionné est un taxi agréé par la Caisse Primaire d’Assurance Maladie (CPAM). Le taxi conventionné garanti à ses clients un transport assis professionnalisé (TAP). La CPAM rembourse 65% du trajet pour une prise en charge partielle ou 100% pour une prise en charge totale.

Vous n’avez rien à régler. Les transmissions s’effectuent entre les chauffeurs et la CPAM directement.</p>
<br>
<h2 class=\"titre my-3\">LE VÉHICULE</h2>
<p class=\"text-light\">Diverses options/services peuvent être fournis lors d'une réservation</p>
<ul class=\"text-light\">
<li>La climatisation</li>
<li>Boisson</li>
<li>Journaux</li>
<li>Equipement GPS avec affichage de trafic en temps réel</li>
</ul>

<div class=\"picto text-light d-flex text-center mt-3\"> 
<div class=\"\"><img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/bebe.png"), "html", null, true);
        yield "\" alt=\"picto\"><br>
Rehausseur (siège enfant)</div>
<div><img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/wifi.png"), "html", null, true);
        yield "\" alt=\"picto\"><br>
Connexion wifi</div>
<div><img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/chauffeur.png"), "html", null, true);
        yield "\" alt=\"picto\"><br>
Un chauffeur bilingue</div>
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
        return "home/index.html.twig";
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
        return array (  139 => 59,  134 => 57,  129 => 55,  108 => 37,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block content %}

<section class=\"image\"></section>

<div class=\" background py-3 container\">

<h2 class=\"titre text-center text-align-justify\">Un Taxi pour tous vos déplacements <br>
Simple & Rapide</h2>

<h2 class=\"titre my-3\">LES TAXIS</h2>
<p class=\"text-light\"> Les avantages :</p>
<ul class=\"text-light\">
<li>Le service est disponible 7j/7, 24h/24</li>
<li>Mode de transport très répandu et facile d'accès</li>
<li>Gamme de services très variée</li>
</ul>
<br>
<h2 class=\"titre my-3\">SÉCURITÉ</h2>
<p class=\"text-light\">Un exploitant de taxi doit donc détenir une \"autorisation de stationnement\" (licence) pour pouvoir exercer son activité. 
    Sur la plaque obligatoire apposée sur l'aile avant droite de la voiture figure le numéro d'autorisation du stationnement et la commune de rattachement. 
    Cette autorisation détermine une zone de prise en charge des clients, plus ou moins importante à l'intérieur de chaque région ou département</p>
<p class=\"text-light\">Le chauffeur de taxi, exploitant ou salarié, est obligatoirement diplômé d'un certificat de capacité professionnelle. Il doit faire figurer au bas de son pare-brise, 
    sa carte professionnelle précisant le ou les départements dans lesquels il peut exercer sa profession.</p>
<p class=\"text-light\">Les taxis ont l'obligation d'accepter une personne handicapée dans leur véhicule, et de les aider à s'installer en cas de besoin. 
    Les chiens guides d'aveugle ont l'autorisation de monter sans qu'un supplément ne soit demandé à son propriétaire.</p>
<br>
<h2 class=\"titre my-3\">RÉSERVATION ET TARIF</h2>
<p class=\"text-light\"> Il existe 4 possibilités de prendre un taxi :</p>
<ul class=\"text-light\">
<li> Réserver un taxi via une centrale d'appel.</li>
<li> Attendre un taxi à une borne près du lieu où l'on se trouve dans les zones urbaines.</li>
<li> Héler un taxi dans la rue.</li>
<li> Planifier son trajet via la plateforme <a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">bienvenuetransport.fr</a>  qui permet de réserver un chauffeur après avoir comparé différentes offres, et de bénéficier d'un prix fixe connu à l'avance.</li>
</ul>
<br>
<h2 class=\"titre my-3\">- Taxi conventionné</h2>
<p class=\"text-light\">Le taxi conventionné est un taxi agréé par la Caisse Primaire d’Assurance Maladie (CPAM). Le taxi conventionné garanti à ses clients un transport assis professionnalisé (TAP). La CPAM rembourse 65% du trajet pour une prise en charge partielle ou 100% pour une prise en charge totale.

Vous n’avez rien à régler. Les transmissions s’effectuent entre les chauffeurs et la CPAM directement.</p>
<br>
<h2 class=\"titre my-3\">LE VÉHICULE</h2>
<p class=\"text-light\">Diverses options/services peuvent être fournis lors d'une réservation</p>
<ul class=\"text-light\">
<li>La climatisation</li>
<li>Boisson</li>
<li>Journaux</li>
<li>Equipement GPS avec affichage de trafic en temps réel</li>
</ul>

<div class=\"picto text-light d-flex text-center mt-3\"> 
<div class=\"\"><img src=\"{{ asset('photos/bebe.png')}}\" alt=\"picto\"><br>
Rehausseur (siège enfant)</div>
<div><img src=\"{{ asset('photos/wifi.png')}}\" alt=\"picto\"><br>
Connexion wifi</div>
<div><img src=\"{{ asset('photos/chauffeur.png')}}\" alt=\"picto\"><br>
Un chauffeur bilingue</div>
</div>

</div>

{% endblock %}", "home/index.html.twig", "C:\\Users\\preet\\OneDrive\\Desktop\\projet\\templates\\home\\index.html.twig");
    }
}
