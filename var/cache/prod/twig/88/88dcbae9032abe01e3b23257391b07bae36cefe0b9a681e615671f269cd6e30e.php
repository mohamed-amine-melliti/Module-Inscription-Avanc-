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

/* login/confirmationF.html.twig */
class __TwigTemplate_8e8ed59b4ea02392771836dc3e45c3780781a01ff3f5d8fd7b64d4c1a5d9a16a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login/confirmationF.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello registreController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container mt-4\" >
 <div class=\"flex-md-row\">
    <div class=\" col-10\">
        <div class=\"card-group\">
            <mark>
    <p> Texte d'accroche à définir plus tard\t</p>
    <p> L'abonnement comprend les prestations et livrables suivants :</p>
    <p> > La saisie comptable courante</p>
    <p> > Le questionnaire de fin d'exercice comptable </p>
    <p> > Le cadrage annuel de TVA (régimes réels) </p>
    <p> > La déclaration annuelle de TVA CA12 (régime simplifié) </p>
    <p> > La balance comptable exportable </p>
    <p> > Le grand livre général </p>
    <p> > Les journaux d'écritures exportables\t </p>
    <p> > Le tableau des immobilisations  </p>
    <p> > Le compte de résultat\t </p>
    <p> > Le bilan </p>
            </mark>

<div>
 <p>En cochant la case ci-dessous, vous acceptez nos <u>Conditions d'utilisation</u>,
  notre <u>Déclaration de confidentialité</u> et vous reconnaissez avoir plus de
   18 ans. Vous pouvez renouveler votre abonnement à chaque nouvel exercice ouvert.
 Les frais correspondants (actuellement 120 euros hors taxe par exercice) seront
  prélevés via le mode de paiement choisi. Vous ne serez pas prélevé si vous n'ouvrez
  pas de nouvel exercice. La suppression de votre compte peut être exécutée
     sur simple demande par mail à <u>suppression@aldini.fr</u>
          </p>
</div>
</div>

";
        // line 40
        echo "
</div>
";
        // line 43
        echo "     <a  class=\"btn btn-primary\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("email");
        echo "\" type=\"submit\">J'accepte</a>

 </div>

";
    }

    public function getTemplateName()
    {
        return "login/confirmationF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 43,  91 => 40,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/confirmationF.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\login\\confirmationF.html.twig");
    }
}
