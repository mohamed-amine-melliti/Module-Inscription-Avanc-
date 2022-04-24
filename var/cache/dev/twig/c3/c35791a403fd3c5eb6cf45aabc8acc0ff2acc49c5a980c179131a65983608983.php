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

/* dossier/DivsSecteurActivite.html */
class __TwigTemplate_ba575192d25ee7264347324b758389a3c04342d5ed500de1ffd3f36b9ad553c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/DivsSecteurActivite.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/DivsSecteurActivite.html"));

        // line 1
        echo "



<!-------------------Divs mte3 secteur Activité ---------------------------->
<div class=\"form-row\" id=\"lazemTet5abaCafeResto\">

    <div class=\"form-holder form-holder-2\">
        <label>Avec débit de tabac ? </label>
        <select class=\"form-control\" id=\"ouinonSecteurActivite\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option onclick=\"redirect();\" value=\"oui\">oui</option>
        </select>
    </div>
</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaTransportPerso\">

    <div class=\"form-holder form-holder-2\">
        <label>Exercez-vous une activité de taxi sous licence? </label>

        <select class=\"form-control\" id=\"ouinonTransportPerso\">
            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option value=\"non\">non</option>
        </select>
    </div>

</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaTransportPersoThenya\">
    <div class=\"form-holder form-holder-2\">
        <label> Exercez-vous une activité de VTC, chauffeur privé ou autre transport collectif de personnes? </label>
        <select class=\"form-control\" id=\"ouinonTransportPersoThenya\">


            <option value=\"\"></option>
            <option onclick=\"createAlert('Opps!','.','REPONSE INCOHERENTE','danger',true,false,'pageMessages');fasa5KolChaywM3ahaSecteurActivite();\"
                    value=\"non\">non
            </option>
            <option onclick=\"createAlert('Opps!','.','ATTENTION ! VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL','danger',true,false,'pageMessages');\"
                    value=\"oui\">oui
            </option>
        </select>
    </div>
</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaImmobilier\">
    <div class=\"form-holder form-holder-2\">
        <label>Exercez-vous une activité d'agent immobilier ? (différent d'une activité de SCI) </label>
        <select class=\"form-control\" id=\"ouinonImmobilier\">
            <label> Exercez-vous une activité d'agent immobilier ? (différent d'une activité de SCI)</label>
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option id=\"matloubaBa3din\" value=\"oui\">oui</option>
        </select>
    </div>
</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaImmobilierThenya\">

    <div class=\"form-holder form-holder-2\">
        <label>Exercez-vous uniquement une activité d'intermédiaire de vente? </label>

        <select class=\"form-control\" id=\"ouinonImmobilierThenya\">

            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option onclick=\"createAlert('Opps!','.','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE.','danger',true,false,'pageMessages');redirect();\"
                    value=\"non\">non
            </option>
        </select>
    </div>
</div>
<!------------------------------------------------------------------------------>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/DivsSecteurActivite.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



<!-------------------Divs mte3 secteur Activité ---------------------------->
<div class=\"form-row\" id=\"lazemTet5abaCafeResto\">

    <div class=\"form-holder form-holder-2\">
        <label>Avec débit de tabac ? </label>
        <select class=\"form-control\" id=\"ouinonSecteurActivite\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option onclick=\"redirect();\" value=\"oui\">oui</option>
        </select>
    </div>
</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaTransportPerso\">

    <div class=\"form-holder form-holder-2\">
        <label>Exercez-vous une activité de taxi sous licence? </label>

        <select class=\"form-control\" id=\"ouinonTransportPerso\">
            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option value=\"non\">non</option>
        </select>
    </div>

</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaTransportPersoThenya\">
    <div class=\"form-holder form-holder-2\">
        <label> Exercez-vous une activité de VTC, chauffeur privé ou autre transport collectif de personnes? </label>
        <select class=\"form-control\" id=\"ouinonTransportPersoThenya\">


            <option value=\"\"></option>
            <option onclick=\"createAlert('Opps!','.','REPONSE INCOHERENTE','danger',true,false,'pageMessages');fasa5KolChaywM3ahaSecteurActivite();\"
                    value=\"non\">non
            </option>
            <option onclick=\"createAlert('Opps!','.','ATTENTION ! VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL','danger',true,false,'pageMessages');\"
                    value=\"oui\">oui
            </option>
        </select>
    </div>
</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaImmobilier\">
    <div class=\"form-holder form-holder-2\">
        <label>Exercez-vous une activité d'agent immobilier ? (différent d'une activité de SCI) </label>
        <select class=\"form-control\" id=\"ouinonImmobilier\">
            <label> Exercez-vous une activité d'agent immobilier ? (différent d'une activité de SCI)</label>
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option id=\"matloubaBa3din\" value=\"oui\">oui</option>
        </select>
    </div>
</div>
<!--------------------------------------------->
<div class=\"form-row\" id=\"lazemTet5abaImmobilierThenya\">

    <div class=\"form-holder form-holder-2\">
        <label>Exercez-vous uniquement une activité d'intermédiaire de vente? </label>

        <select class=\"form-control\" id=\"ouinonImmobilierThenya\">

            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option onclick=\"createAlert('Opps!','.','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE.','danger',true,false,'pageMessages');redirect();\"
                    value=\"non\">non
            </option>
        </select>
    </div>
</div>
<!------------------------------------------------------------------------------>", "dossier/DivsSecteurActivite.html", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\DivsSecteurActivite.html");
    }
}
