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

/* menu.html.twig */
class __TwigTemplate_c5c3543e3e127022bbc60fca6897ab9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 16px;
    }

    body {
        font-family: sans-serif;
    }

    header {
        position: absolute;
        width: 100%;
        height: 8vh;
        top: 0;
        left: 0;
        background: #000;
        color: #fff;
        padding: 0 2rem;
    }

    nav {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: solid black 3px;
    }

    .logo {
        font-size: 2rem;
    }
    .logo img{
        width: 120px;
    }

    .toggle {
        display: none;
    }

    .menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        width: 700px;
        margin-right: 90px;
    }

    .menu a {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .btn {
        border: 0;
        background: pink;
        font-size: 1rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        cursor: pointer;
    }

    .btn.btn-secondary {
        background: transparent;
        border: 2px solid pink;
        color: #000;
    }

    @media all and (max-width: 991px) {

        header {
            background: transparent;
        }

        .toggle {
            display: block;
            font-size: 2rem;
            cursor: pointer;
            position: relative;
            z-index: 20;
        }

        .logo {
            position: relative;
            z-index: 20;
        }

        .ouvrir {
            display: block;
            font-size: 100px;
            margin-right: 30px;
            margin-top: 10px;
        }

        .fermer {
            display: none;
            font-size: 110px;
            margin-right: 30px;
        }

        .open .ouvrir {
            display: none;
        }

        .open .fermer {
            display: block;
        }

        .menu {
            position: absolute;
            display: flex;
            top: 0;
            left: 0;
            width: 80%;
            height: 100vh;
            border-right: #000 solid 6px;
            background: #fff;
            flex-direction: column;
            justify-content: space-evenly;
            transform: translateX(-100%);
            transition: transform 1s;
        }
        .menu div {
            display: flex;
            width: 100%;
            height: 5vh;
            text-align: center;
        }
        .menu #concert:hover {
            background-color: #3FFFBA;
        }
        .menu #concert:hover a{
            color: #fff;
        }
        .menu #spectacle:hover {
            background-color: #FF4B3F;
        }
        .menu #spectacle:hover a{
            color: #fff;
        }
        .menu #exposition:hover {
            background-color: #FF9B3F;
        }
        .menu #exposition:hover a{
            color: #fff;
        }
        .menu #theatre:hover {
            background-color: #9747FF;
        }
        .menu #theatre:hover a{
            color: #fff;
        }
        .menu #border {
            border-top: #000 solid 6px;
            border-bottom: #000 solid 6px;
        }
        .menu a {
            font-size: 3rem;
            text-decoration: none;
            color: #000;
            margin: auto;
        }

        .btn {
            font-size: 2rem;
        }

        .open .menu {
            transform: translateX(0);
        }
    }
</style>
<nav>
    <div class=\"logo\">
        <a href=\"accueil\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Image/logo.png"), "html", null, true);
        echo "\"/></a>
    </div>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <div class=\"menu\">
        <div id=\"concert\"><a href=\"concert\">Concert</a></div>
        <div id=\"spectacle\"><a href=\"manifs\">Spectacle</a></div>
        <div id=\"exposition\"><a href=\"manifs\">Exposition</a></div>
        <div id=\"theatre\"><a href=\"manifs\">Théâtre</a></div>
    ";
        // line 194
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 195
            echo "        <div><a href=\"admin\"><i class=\"fa-solid fa-lock\"></i></a></div>
    ";
        }
        // line 197
        echo "
    ";
        // line 198
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "user", [], "any", false, false, false, 198)) {
            // line 199
            echo "        <div><a href=\"logout\"><button class=\"btn btn-secondary\">Déconnexion</button></a></div>
    ";
        } else {
            // line 201
            echo "        <div id=\"border\"><a href=\"login\"><i class=\"fa-solid fa-circle-user\"></i>   Connexion / </a>
            <a href=\"register\">Inscription</a></div>
    ";
        }
        // line 204
        echo "            <div><a href=\"panier\"><i class=\"fa-solid fa-cart-shopping\"></i> Panier</a></div>
    </div>
</nav>
<script>
    let toggle = document.querySelector('.toggle');
    let body = document.querySelector('body');

    toggle.addEventListener('click', function() {
        body.classList.toggle('open');
    })
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 204,  256 => 201,  252 => 199,  250 => 198,  247 => 197,  243 => 195,  241 => 194,  227 => 183,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 16px;
    }

    body {
        font-family: sans-serif;
    }

    header {
        position: absolute;
        width: 100%;
        height: 8vh;
        top: 0;
        left: 0;
        background: #000;
        color: #fff;
        padding: 0 2rem;
    }

    nav {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: solid black 3px;
    }

    .logo {
        font-size: 2rem;
    }
    .logo img{
        width: 120px;
    }

    .toggle {
        display: none;
    }

    .menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        width: 700px;
        margin-right: 90px;
    }

    .menu a {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .btn {
        border: 0;
        background: pink;
        font-size: 1rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        cursor: pointer;
    }

    .btn.btn-secondary {
        background: transparent;
        border: 2px solid pink;
        color: #000;
    }

    @media all and (max-width: 991px) {

        header {
            background: transparent;
        }

        .toggle {
            display: block;
            font-size: 2rem;
            cursor: pointer;
            position: relative;
            z-index: 20;
        }

        .logo {
            position: relative;
            z-index: 20;
        }

        .ouvrir {
            display: block;
            font-size: 100px;
            margin-right: 30px;
            margin-top: 10px;
        }

        .fermer {
            display: none;
            font-size: 110px;
            margin-right: 30px;
        }

        .open .ouvrir {
            display: none;
        }

        .open .fermer {
            display: block;
        }

        .menu {
            position: absolute;
            display: flex;
            top: 0;
            left: 0;
            width: 80%;
            height: 100vh;
            border-right: #000 solid 6px;
            background: #fff;
            flex-direction: column;
            justify-content: space-evenly;
            transform: translateX(-100%);
            transition: transform 1s;
        }
        .menu div {
            display: flex;
            width: 100%;
            height: 5vh;
            text-align: center;
        }
        .menu #concert:hover {
            background-color: #3FFFBA;
        }
        .menu #concert:hover a{
            color: #fff;
        }
        .menu #spectacle:hover {
            background-color: #FF4B3F;
        }
        .menu #spectacle:hover a{
            color: #fff;
        }
        .menu #exposition:hover {
            background-color: #FF9B3F;
        }
        .menu #exposition:hover a{
            color: #fff;
        }
        .menu #theatre:hover {
            background-color: #9747FF;
        }
        .menu #theatre:hover a{
            color: #fff;
        }
        .menu #border {
            border-top: #000 solid 6px;
            border-bottom: #000 solid 6px;
        }
        .menu a {
            font-size: 3rem;
            text-decoration: none;
            color: #000;
            margin: auto;
        }

        .btn {
            font-size: 2rem;
        }

        .open .menu {
            transform: translateX(0);
        }
    }
</style>
<nav>
    <div class=\"logo\">
        <a href=\"accueil\"><img src=\"{{ asset('Image/logo.png') }}\"/></a>
    </div>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <div class=\"menu\">
        <div id=\"concert\"><a href=\"concert\">Concert</a></div>
        <div id=\"spectacle\"><a href=\"manifs\">Spectacle</a></div>
        <div id=\"exposition\"><a href=\"manifs\">Exposition</a></div>
        <div id=\"theatre\"><a href=\"manifs\">Théâtre</a></div>
    {% if is_granted(\"ROLE_ADMIN\") %}
        <div><a href=\"admin\"><i class=\"fa-solid fa-lock\"></i></a></div>
    {% endif %}

    {% if app.user %}
        <div><a href=\"logout\"><button class=\"btn btn-secondary\">Déconnexion</button></a></div>
    {% else %}
        <div id=\"border\"><a href=\"login\"><i class=\"fa-solid fa-circle-user\"></i>   Connexion / </a>
            <a href=\"register\">Inscription</a></div>
    {% endif %}
            <div><a href=\"panier\"><i class=\"fa-solid fa-cart-shopping\"></i> Panier</a></div>
    </div>
</nav>
<script>
    let toggle = document.querySelector('.toggle');
    let body = document.querySelector('body');

    toggle.addEventListener('click', function() {
        body.classList.toggle('open');
    })
</script>", "menu.html.twig", "/var/www/sae301/templates/menu.html.twig");
    }
}
