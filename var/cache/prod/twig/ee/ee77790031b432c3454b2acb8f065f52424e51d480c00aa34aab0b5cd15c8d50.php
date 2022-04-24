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
class __TwigTemplate_ebe786fcc3e8ed73ecef169b2ab15c49762155cd45032cddeaa52eb12680794e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login/definitionPaiement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello LoginController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["mode"] ?? null), "html", null, true);
        echo "\"  id=\"validation\"   class=\"btn btn-primary\"  type=\"submit\" >S'abonner</a>
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
        return array (  125 => 65,  94 => 37,  73 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/definitionPaiement.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\login\\definitionPaiement.html.twig");
    }
}
