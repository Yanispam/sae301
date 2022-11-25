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
    }

    .logo {
        font-size: 2rem;
    }

    .toggle {
        display: none;
    }

    .menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        width: 550px;
    }

    .menu li a {
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
            top: 0;
            left: 0;
            width: 80%;
            height: 100vh;
            background: #fff;
            flex-direction: column;
            padding: 2rem;
            justify-content: space-evenly;
            transform: translateX(-100%);
            transition: transform 1s;
        }

        .menu li a {
            font-size: 2rem;
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
        <i class=\"fas fa-rocket\"></i>
    </div>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <ul class=\"menu\">
        <li><a href=\"accueil\">Accueil</a></li>
        <li><a href=\"manifs\">Manifestations</a></li>
    ";
        // line 150
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 151
            echo "        <li><a href=\"admin\">Administration</a></li>
    ";
        }
        // line 153
        echo "
    ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154)) {
            // line 155
            echo "        <li><a href=\"logout\"><button class=\"btn btn-secondary\">Déconnexion</button></a></li>
    ";
        } else {
            // line 157
            echo "        <li><a href=\"login\"><button class=\"btn btn-secondary\">Connexion</button></a></li>
        <li><a href=\"register\"><button class=\"btn\">Inscription</button></a></li>
    ";
        }
        // line 160
        echo "    </ul>
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
        return array (  214 => 160,  209 => 157,  205 => 155,  203 => 154,  200 => 153,  196 => 151,  194 => 150,  43 => 1,);
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
    }

    .logo {
        font-size: 2rem;
    }

    .toggle {
        display: none;
    }

    .menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        width: 550px;
    }

    .menu li a {
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
            top: 0;
            left: 0;
            width: 80%;
            height: 100vh;
            background: #fff;
            flex-direction: column;
            padding: 2rem;
            justify-content: space-evenly;
            transform: translateX(-100%);
            transition: transform 1s;
        }

        .menu li a {
            font-size: 2rem;
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
        <i class=\"fas fa-rocket\"></i>
    </div>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <ul class=\"menu\">
        <li><a href=\"accueil\">Accueil</a></li>
        <li><a href=\"manifs\">Manifestations</a></li>
    {% if is_granted(\"ROLE_ADMIN\") %}
        <li><a href=\"admin\">Administration</a></li>
    {% endif %}

    {% if app.user %}
        <li><a href=\"logout\"><button class=\"btn btn-secondary\">Déconnexion</button></a></li>
    {% else %}
        <li><a href=\"login\"><button class=\"btn btn-secondary\">Connexion</button></a></li>
        <li><a href=\"register\"><button class=\"btn\">Inscription</button></a></li>
    {% endif %}
    </ul>
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
