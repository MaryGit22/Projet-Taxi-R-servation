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

/* home/mention.html.twig */
class __TwigTemplate_93673ba71888b75d06e16a8de2445991 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mention.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/mention.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Mentions Légales ";
        
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
<h1 class=\"text-center my-4\">Mentions Légales</h1>

<div class=\" container mention mx-auto mt-5\">
    <h3>Éditeur du Site : </h3> <hr>

        <p>Responsable éditorial : Mary TAMBY </p>

        <p>151 Av. Gallieni, 93170 Bagnolet </p>

        <p>Téléphone : 07 83 13 04 56</p>

        <p>Email : admin@admin.fr </p>

        <p>Site Web : www.bienvenuetransport.fr </p>


    <h3> Conditions d’utilisation : </h3> <hr>

        <p> bienvenuetransport.fr est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable.</p>

        <p> Nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…</p>

        <p>L’agence web Bienvenue Transport met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet.</p>

        <p> Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de Bienvenue Transport , et signaler toutes 
            modifications du site qu’il jugerait utile. Bienvenue Transport n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>

    <h3>Cookies : </h3> <hr>
        <p> Le site www.bienvenuetransport.fr peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage. 
            Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. </p>

        <p> Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire 
            et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies. </p>

    <h3>  Liens hypertextes :</h3> <hr>
        <p>Les sites internet peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. 
        BIENVENUE TRANSPORT ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet.</p>

        <p>Bienvenue Transport ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. 
        Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou 
        sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. 
        Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.</p>
            
        <p>Les utilisateurs, les abonnés et les visiteurs des sites internet  ne peuvent pas mettre en place un hyperlien en direction de ce site sans 
        l’autorisation expresse et préalable de BIENVENUE TRANSPORT.</p>
            
        <p>Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de BIENVENUE TRANSPORT, 
        il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien.</p>
            
        <p>La BIENVENUE TRANSPORT se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>

    <h3> Propriété intellectuelle :</h3> <hr>

        <p>Tout le contenu du présent site www.bienvenuetransport.fr, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, 
        sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.</p>

        <p> Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de BIENVENUE TRANSPORT. 
        Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. 
        Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>

    <h3>Déclaration à la CNIL :</h3> <hr>

        <p>Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, 
        ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés <a href=\"https://www.cnil.fr/\">(www.cnil.fr)</a>.</p>

    <h3>Données personnelles :</h3> <hr>

        <p>De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet www.bienvenuetransport.fr.</p>

        <p> ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être 
        amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, 
        et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».<p>

        <p>Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, 
        notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information.</p>

        <p>Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site internet, 
        notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès.</p>

        <p>De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. 
        Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/mention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %} Mentions Légales {% endblock %}

{% block content %}
<div class=\"text-center mt-3\">
      <img src=\"{{ asset('photos/typo2.png')}}\" alt=\"logo\"></div>
<h1 class=\"text-center my-4\">Mentions Légales</h1>

<div class=\" container mention mx-auto mt-5\">
    <h3>Éditeur du Site : </h3> <hr>

        <p>Responsable éditorial : Mary TAMBY </p>

        <p>151 Av. Gallieni, 93170 Bagnolet </p>

        <p>Téléphone : 07 83 13 04 56</p>

        <p>Email : admin@admin.fr </p>

        <p>Site Web : www.bienvenuetransport.fr </p>


    <h3> Conditions d’utilisation : </h3> <hr>

        <p> bienvenuetransport.fr est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable.</p>

        <p> Nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…</p>

        <p>L’agence web Bienvenue Transport met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet.</p>

        <p> Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de Bienvenue Transport , et signaler toutes 
            modifications du site qu’il jugerait utile. Bienvenue Transport n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>

    <h3>Cookies : </h3> <hr>
        <p> Le site www.bienvenuetransport.fr peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage. 
            Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. </p>

        <p> Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire 
            et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies. </p>

    <h3>  Liens hypertextes :</h3> <hr>
        <p>Les sites internet peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. 
        BIENVENUE TRANSPORT ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet.</p>

        <p>Bienvenue Transport ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. 
        Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou 
        sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. 
        Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.</p>
            
        <p>Les utilisateurs, les abonnés et les visiteurs des sites internet  ne peuvent pas mettre en place un hyperlien en direction de ce site sans 
        l’autorisation expresse et préalable de BIENVENUE TRANSPORT.</p>
            
        <p>Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de BIENVENUE TRANSPORT, 
        il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien.</p>
            
        <p>La BIENVENUE TRANSPORT se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>

    <h3> Propriété intellectuelle :</h3> <hr>

        <p>Tout le contenu du présent site www.bienvenuetransport.fr, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, 
        sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.</p>

        <p> Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de BIENVENUE TRANSPORT. 
        Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. 
        Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>

    <h3>Déclaration à la CNIL :</h3> <hr>

        <p>Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, 
        ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés <a href=\"https://www.cnil.fr/\">(www.cnil.fr)</a>.</p>

    <h3>Données personnelles :</h3> <hr>

        <p>De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet www.bienvenuetransport.fr.</p>

        <p> ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être 
        amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, 
        et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».<p>

        <p>Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, 
        notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information.</p>

        <p>Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site internet, 
        notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès.</p>

        <p>De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. 
        Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

</div>
{% endblock %}", "home/mention.html.twig", "C:\\Users\\preet\\OneDrive\\Desktop\\projet\\templates\\home\\mention.html.twig");
    }
}
