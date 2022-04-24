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

/* login/mypdf.html.twig */
class __TwigTemplate_65cc81123f7ce99c197825d3ba8e65a8855c400f3388a924e402c65d29f39bc9 extends Template
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
        // line 1
        echo "
<u><h4 style=\"text-align:center;\"> DECLARATION D'ACCEPTATION </h4></u>
<div >

    <p> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "email", [], "any", false, false, false, 5), "html", null, true);
        echo "  a pris connaissance le  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "d/m/Y"), "html", null, true);
        echo "  à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "H:i:s"), "html", null, true);
        echo "  </p>
</div>

<p> que\t</p>
<p> L'abonnement comprend les prestations et livrables suivants : </p>
<p> > La saisie comptable courante</p>
<p> > Le questionnaire de fin d'exercice comptable </p>
<p> > Le cadrage annuel de TVA (régime réel) </p>
<p> > La déclaration annuelle de TVA CA12 (régime simplifié) </p>
<p> > La balance comptable exportable </p>
<p> > Le grand livre général </p>
<p> > Les journaux d'écritures exportables\t </p>
<p> > Le tableau des immobilisations  </p>
<p> > Le compte de résultat\t </p>
<p> > Le bilan </p>


<div>
    <p> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
        echo " a accepté nos Conditions d'utilisation,
        notre <u>Déclaration de confidentialité</u> et a reconnu avoir plus de
        18 ans. Il a pris connaissance qu'il peut renouveler son abonnement
        à chaque nouvel exercice ouvert.
        Les frais correspondants (actuellement 120 euros hors taxe par exercice) seront
        prélevés via le mode de paiement choisi. Il ne sera pas prélevé s'il n'ouvre
        pas de nouvel exercice. La suppression de son compte peut être exécutée
        sur simple demande par mail à suppression@aldini.fr
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "login/mypdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/mypdf.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\login\\mypdf.html.twig");
    }
}
