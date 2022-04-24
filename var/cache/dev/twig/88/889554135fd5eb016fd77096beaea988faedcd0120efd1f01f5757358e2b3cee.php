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
class __TwigTemplate_b12cfb2ca96061319c55c9b7ba18d2992e4e3de482587e9c53dd82d632b06e95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/mypdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/mypdf.html.twig"));

        // line 1
        echo "
<u><h4 style=\"text-align:center;\"> DECLARATION D'ACCEPTATION </h4></u>
<div >

    <p> ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "email", [], "any", false, false, false, 5), "html", null, true);
        echo "  a pris connaissance le  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 5, $this->source); })()), "d/m/Y"), "html", null, true);
        echo "  à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 5, $this->source); })()), "H:i:s"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "email", [], "any", false, false, false, 23), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  74 => 23,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<u><h4 style=\"text-align:center;\"> DECLARATION D'ACCEPTATION </h4></u>
<div >

    <p> {{app.user.email}}  a pris connaissance le  {{date | date('d/m/Y')  }}  à {{date | date('H:i:s')  }}  </p>
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
    <p> {{app.user.email}} a accepté nos Conditions d'utilisation,
        notre <u>Déclaration de confidentialité</u> et a reconnu avoir plus de
        18 ans. Il a pris connaissance qu'il peut renouveler son abonnement
        à chaque nouvel exercice ouvert.
        Les frais correspondants (actuellement 120 euros hors taxe par exercice) seront
        prélevés via le mode de paiement choisi. Il ne sera pas prélevé s'il n'ouvre
        pas de nouvel exercice. La suppression de son compte peut être exécutée
        sur simple demande par mail à suppression@aldini.fr
    </p>
</div>
", "login/mypdf.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\login\\mypdf.html.twig");
    }
}
