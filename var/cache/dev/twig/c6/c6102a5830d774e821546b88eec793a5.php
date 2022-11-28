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
        echo "<nav>
    <div class=\"logo\">
        <a href=\"accueil\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Image/logo.png"), "html", null, true);
        echo "\"/></a>
    </div>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <div class=\"menu\">
        <div id=\"concert\"><a href=\"concert\">Concert</a></div>
        <div id=\"spectacle\"><a href=\"spectacle\">Spectacle</a></div>
        <div id=\"exposition\"><a href=\"exposition\">Exposition</a></div>
        <div id=\"theatre\"><a href=\"theatre\">Théâtre</a></div>
    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "        <div><a href=\"admin\"><i class=\"fa-solid fa-lock\"></i></a></div>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <div><a href=\"logout\">Déconnexion</a></div>
    ";
        } else {
            // line 21
            echo "        <div id=\"border\"><a href=\"login\"><i class=\"fa-solid fa-circle-user\"></i>   Connexion / </a>
            <a href=\"register\">Inscription</a></div>
    ";
        }
        // line 24
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
        return array (  81 => 24,  76 => 21,  72 => 19,  70 => 18,  67 => 17,  63 => 15,  61 => 14,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <div class=\"logo\">
        <a href=\"accueil\"><img src=\"{{ asset('Image/logo.png') }}\"/></a>
    </div>
    <div class=\"toggle\">
        <i class=\"fas fa-bars ouvrir\"></i>
        <i class=\"fas fa-times fermer\"></i>
    </div>
    <div class=\"menu\">
        <div id=\"concert\"><a href=\"concert\">Concert</a></div>
        <div id=\"spectacle\"><a href=\"spectacle\">Spectacle</a></div>
        <div id=\"exposition\"><a href=\"exposition\">Exposition</a></div>
        <div id=\"theatre\"><a href=\"theatre\">Théâtre</a></div>
    {% if is_granted(\"ROLE_ADMIN\") %}
        <div><a href=\"admin\"><i class=\"fa-solid fa-lock\"></i></a></div>
    {% endif %}

    {% if app.user %}
        <div><a href=\"logout\">Déconnexion</a></div>
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
