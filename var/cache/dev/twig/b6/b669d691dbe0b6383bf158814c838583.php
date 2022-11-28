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

/* concert/index.html.twig */
class __TwigTemplate_0f75655eb368e3dd82492ed58b112644 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "concert/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "concert/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les concerts";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .carte:hover {
        box-shadow: 10px 10px 0px 0px #3FFFBA,10px 10px 0px 2.5px black;
        transform: translateX(-10px);
        transition: 500ms;
    }
    .img {
        background-color: grey;
        background-image: url(\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Image/gospel.jpeg"), "html", null, true);
        echo "\");
        background-size: cover;
        margin: auto;
        width: 94%;
        height: 68%;
    }
    #concert {
        background-color: #3FFFBA;
        padding: 23px;
    }
    #concert a{
        color: #fff;
    }
</style>
    <div id=\"titre\">
        <h2>Concerts</h2>
    </div>
<div id=\"manifs\">
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "concert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les concerts{% endblock %}

{% block body %}
<style>
    .carte:hover {
        box-shadow: 10px 10px 0px 0px #3FFFBA,10px 10px 0px 2.5px black;
        transform: translateX(-10px);
        transition: 500ms;
    }
    .img {
        background-color: grey;
        background-image: url(\"{{ asset('Image/gospel.jpeg') }}\");
        background-size: cover;
        margin: auto;
        width: 94%;
        height: 68%;
    }
    #concert {
        background-color: #3FFFBA;
        padding: 23px;
    }
    #concert a{
        color: #fff;
    }
</style>
    <div id=\"titre\">
        <h2>Concerts</h2>
    </div>
<div id=\"manifs\">
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
    <div class=\"carte\">
        <div class=\"img\">

        </div>
        <div class=\"texte\">
            <h4>AIMÉE – LA TOURNÉE</h4>
            <p>artiste</p>
            <p>artiste</p>
            <p>artiste</p>
        </div>
        <button>Réserver</button>
    </div>
</div>
{% endblock %}
", "concert/index.html.twig", "/var/www/sae301/templates/concert/index.html.twig");
    }
}
