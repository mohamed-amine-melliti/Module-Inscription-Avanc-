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

/* base.html.twig */
class __TwigTemplate_23a5a1c65e2707ecb2ff33ee1575e43ad95655c740d771fcd4ac1865235dd8b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">


    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ALDINI </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">




";
        // line 34
        echo "                </ul>
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
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "                <li class=\"nav-item\">
                    <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link\"> Déconnexion </a>
                </li>
                    ";
        } else {
            // line 52
            echo "                        <li class=\"nav-item\">
                            <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link\"> S'identifier </a>
                        </li>
                ";
        }
        // line 56
        echo "            </ul>

            </div>
        </div>
    </nav>

        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
";
        // line 68
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 70
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 73
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 76
        $this->displayBlock('javascript', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "
        ";
    }

    // line 76
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 77,  163 => 76,  158 => 63,  154 => 62,  147 => 5,  141 => 78,  139 => 76,  132 => 73,  127 => 70,  122 => 68,  119 => 66,  117 => 62,  109 => 56,  103 => 53,  100 => 52,  94 => 49,  91 => 48,  89 => 47,  74 => 34,  60 => 13,  50 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\base.html.twig");
    }
}
