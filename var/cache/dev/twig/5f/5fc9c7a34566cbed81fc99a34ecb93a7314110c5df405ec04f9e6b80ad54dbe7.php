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

/* Divs/navbar.html.twig */
class __TwigTemplate_d6c3e0c9b90d66f0a987cf6289451c5e7b8583a457f142db4cb3d1eaf40dcb54 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/navbar.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ALDINI </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">

            </ul>
            <ul>

            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Langue <img src=\"/images/logoterre.jpg\"  style=\"width:30px;height:20px;\"></a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Français</a>
                        <a class=\"dropdown-item\" href=\"#\">Anglais</a>

                    </div>
                </li>
                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link\"> Déconnexion </a>
                    </li>
                ";
        } else {
            // line 31
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link\"> S'identifier </a>
                    </li>
                ";
        }
        // line 35
        echo "            </ul>

        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Divs/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  89 => 32,  86 => 31,  80 => 28,  77 => 27,  75 => 26,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('home')}}\">ALDINI </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">

            </ul>
            <ul>

            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Langue <img src=\"/images/logoterre.jpg\"  style=\"width:30px;height:20px;\"></a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Français</a>
                        <a class=\"dropdown-item\" href=\"#\">Anglais</a>

                    </div>
                </li>
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('logout') }}\" class=\"nav-link\"> Déconnexion </a>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('login') }}\" class=\"nav-link\"> S'identifier </a>
                    </li>
                {% endif %}
            </ul>

        </div>
    </div>
</nav>", "Divs/navbar.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\Divs\\navbar.html.twig");
    }
}
