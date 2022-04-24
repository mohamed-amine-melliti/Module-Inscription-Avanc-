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
class __TwigTemplate_56ad29b99bf3efdb91ba72ae9d60619d5af844dd5c436791a05125c946708ee3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/confirmationF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/confirmationF.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/confirmationF.html.twig", 1);
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

        echo "Hello registreController!";
        
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  125 => 43,  121 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello registreController!{% endblock %}

{% block body %}
<div class=\"container mt-4\" >
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

{#        <div>#}
{#                      <p> (génération d'une déclaration d'acceptaion envoyée a <u>acceptaion@aldini.fr )</u> </p>#}
{#        </div>#}

</div>
{#     <button class=\"btn btn-primary  \" type=\"submit\">Je m'abonne </button>#}
     <a  class=\"btn btn-primary\" href=\"{{ path('email') }}\" type=\"submit\">J'accepte</a>

 </div>

{% endblock %}", "login/confirmationF.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\login\\confirmationF.html.twig");
    }
}
