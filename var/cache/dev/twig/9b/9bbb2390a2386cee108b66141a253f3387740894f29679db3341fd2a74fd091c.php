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

/* login/definitionPaiement.html.twig */
class __TwigTemplate_ed89a9fec38383ae80f35de5d537172cfb96891f149dac526f3018120cbe3ad9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/definitionPaiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/definitionPaiement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/definitionPaiement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello LoginController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"mt-4\">
        <div class=\"alert alert-dismissible alert-warning\">

            <h5 class=\"alert-heading\">DEFINISSEZ VOTRE MODE DE PAIEMENT</h5>
            <p class=\"mb-0 mt-4\">Votre abonnement commencera après la création de votre dossier (étape suivante)</p>
            <p class=\" mt-4\" style=\"font-weight: bold\"> Sans engagement au-delà de l'exercice ouvert</p>
            <p style=\"font-weight: bold\">Renouvellement d'abonnement actionnable en ligne à tout moment </p>
        </div>
    </div>
    <div class=\"col-6\" >

        ";
        // line 17
        $context["mode"] = "null";
        // line 18
        echo "
        <h4> Serveur sécurisé <img src=\"/images/lock.png\"  style=\"width:18px;height:18px;\"> </h4>
        <ul class=\"list-group mt-4\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Carte Bancaire <img src=\"/images/logovisamastercard.jpg\"  style=\"width:150px;height:30px;\">
                <input id=\"creditcard\" name=\"payment\" type=\"radio\"  value=\"creditcard\" >
            </li>
        </ul>
    </div>
    <div class=\"col-6\" >

        <ul class=\"list-group mt-4\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                PayPal  <img src=\"/images/logopaypal.png\"  style=\"width:80px;height:30px;\">
                <input  id=\"paypal\" name=\"payment\" type=\"radio\" value=\"paypal\">
            </li>
        </ul>
    </div>
    <div class=\"container-fluid mt-4\">
        <a  data-key=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["mode"]) || array_key_exists("mode", $context) ? $context["mode"] : (function () { throw new RuntimeError('Variable "mode" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\"  id=\"validation\"   class=\"btn btn-primary\"  type=\"submit\">S'abonner</a>
    </div>

    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

    <script >
        \$(document).ready(function(){


            \$('a#validation').click( function(e) {

                var mode=\"\";

                if(document.getElementById(\"creditcard\").checked ){
                    mode=\"creditcard\";
                    console.log(mode);

                }
                else if(document.getElementById(\"paypal\").checked)
                {
                    mode=\"paypal\";
                    console.log(mode);

                }


                var url = '";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier", ["type" => "mode"]);
        echo "';
                url = url.replace(\"mode\", mode);


                \$('a#validation').attr( \"href\", url);

            } );
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/definitionPaiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 65,  124 => 37,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LoginController!{% endblock %}

{% block body %}
    <div class=\"mt-4\">
        <div class=\"alert alert-dismissible alert-warning\">

            <h5 class=\"alert-heading\">DEFINISSEZ VOTRE MODE DE PAIEMENT</h5>
            <p class=\"mb-0 mt-4\">Votre abonnement commencera après la création de votre dossier (étape suivante)</p>
            <p class=\" mt-4\" style=\"font-weight: bold\"> Sans engagement au-delà de l'exercice ouvert</p>
            <p style=\"font-weight: bold\">Renouvellement d'abonnement actionnable en ligne à tout moment </p>
        </div>
    </div>
    <div class=\"col-6\" >

        {% set mode = 'null' %}

        <h4> Serveur sécurisé <img src=\"/images/lock.png\"  style=\"width:18px;height:18px;\"> </h4>
        <ul class=\"list-group mt-4\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                Carte Bancaire <img src=\"/images/logovisamastercard.jpg\"  style=\"width:150px;height:30px;\">
                <input id=\"creditcard\" name=\"payment\" type=\"radio\"  value=\"creditcard\" >
            </li>
        </ul>
    </div>
    <div class=\"col-6\" >

        <ul class=\"list-group mt-4\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                PayPal  <img src=\"/images/logopaypal.png\"  style=\"width:80px;height:30px;\">
                <input  id=\"paypal\" name=\"payment\" type=\"radio\" value=\"paypal\">
            </li>
        </ul>
    </div>
    <div class=\"container-fluid mt-4\">
        <a  data-key=\"{{ mode }}\"  id=\"validation\"   class=\"btn btn-primary\"  type=\"submit\">S'abonner</a>
    </div>

    </div>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

    <script >
        \$(document).ready(function(){


            \$('a#validation').click( function(e) {

                var mode=\"\";

                if(document.getElementById(\"creditcard\").checked ){
                    mode=\"creditcard\";
                    console.log(mode);

                }
                else if(document.getElementById(\"paypal\").checked)
                {
                    mode=\"paypal\";
                    console.log(mode);

                }


                var url = '{{ path(\"dossier\", {'type': 'mode'}) }}';
                url = url.replace(\"mode\", mode);


                \$('a#validation').attr( \"href\", url);

            } );
        });
    </script>

{% endblock %}", "login/definitionPaiement.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\login\\definitionPaiement.html.twig");
    }
}
