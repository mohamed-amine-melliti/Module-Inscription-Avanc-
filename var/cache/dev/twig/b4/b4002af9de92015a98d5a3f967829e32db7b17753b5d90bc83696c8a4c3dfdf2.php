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

/* Divs/siNon.html */
class __TwigTemplate_eaf2168d81bfcdb46a275b458d4faa92bcc6940d5f8e2ac5c03784c37e8b8ee9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/siNon.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/siNon.html"));

        // line 1
        echo "<div id=\"siNon\">


    <div class=\"form-row\">
        <div class=\"form-holder form-holder-2\">
            <label> Quelle est la date de fin du dernier bilan comptable déposé aux impôts ?</label>

            <input id=\"dateFinDernierBilanComptable\" name=\"dateFinDernierBilanComptable\" type=\"date\"
                   value=\"2022-01-01\">
        </div>
    </div>

    <div id=\"siEgaldeFormeJuridique\" >

        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label>Date d'ouverture du nouvel exercice</label>
                <input type=\"text\" class=\"date_cloture_1_ex\" name=\"nouvelExcerciceOuverture\"
                       id=\"nouvelExcerciceOuverture\">
            </div>
        </div>

        <div class=\"form-row \">
            <div class=\"form-holder form-holder-2\">
                <label id=\"test\">Date de clôture du 1er
                    exercice</label>

                <input type=\"text\" class=\"date_cloture_1_ex\" name=\"nouvelExcerciceCloture\"
                       id=\"nouvelExcerciceCloture\">
            </div>
        </div>

    </div>


    <div id=\"siDifferentdeFormeJuridique\" >


        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label>Date d'ouverture du nouvel exercice</label>
                <input type=\"text\"
                       id=\"nouvelExcerciceOuverturesiDifferentdeFormeJuridique\">
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label> La date de clôture change-t-elle sur ce nouvel exercice ? </label>
                <select class=\"form-control\" id=\"ClotureChangeOuNon\" name=\"ClotureChangeOuNon\">
                    <option value=\"\"></option>
                    <option>oui</option>
                    <option>non</option>
                </select>
            </div>
        </div>


    </div>
    <!----------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------>


    <div class=\"form-row\" id=\"DivdateClotureNvExcerciceSIdiffJuridiqueEtNon\">
        <div class=\"form-holder form-holder-2\">
            <label>Date de clôture du nouvel exercice</label>
            <input type=\"date\"
                   id=\"dateClotureNvExcerciceSIdiffJuridiqueEtNon\">
        </div>
    </div>


    <div class=\"form-row\" id=\"DivdateClotureNvExcerciceSIdiffJuridiqueEtOui\">
        <div class=\"form-holder form-holder-2\">
            <label>Veuillez indiquer la date de cloture du nouvel exercice Cela est défini dans les statuts de la société à l'article Exercice social</label>
            <input type=\"date\"
                   id=\"dateClotureNvExcerciceSIdiffJuridiqueEtOui\">
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------>

    <div class=\"form-row\" id=\"CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\">
        <div class=\"form-holder form-holder-2\">
            <label id=\"labelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\">Veuillez indiquer la date de
                cloture
                du nouvel exercice</label>

            <input class=\"form-control\" id=\"date\" name=\"dateCreationEntreprise\"
                   type=\"date\" value=\"2022-06-01\">
        </div>
    </div>
    <!----------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------>


</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Divs/siNon.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"siNon\">


    <div class=\"form-row\">
        <div class=\"form-holder form-holder-2\">
            <label> Quelle est la date de fin du dernier bilan comptable déposé aux impôts ?</label>

            <input id=\"dateFinDernierBilanComptable\" name=\"dateFinDernierBilanComptable\" type=\"date\"
                   value=\"2022-01-01\">
        </div>
    </div>

    <div id=\"siEgaldeFormeJuridique\" >

        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label>Date d'ouverture du nouvel exercice</label>
                <input type=\"text\" class=\"date_cloture_1_ex\" name=\"nouvelExcerciceOuverture\"
                       id=\"nouvelExcerciceOuverture\">
            </div>
        </div>

        <div class=\"form-row \">
            <div class=\"form-holder form-holder-2\">
                <label id=\"test\">Date de clôture du 1er
                    exercice</label>

                <input type=\"text\" class=\"date_cloture_1_ex\" name=\"nouvelExcerciceCloture\"
                       id=\"nouvelExcerciceCloture\">
            </div>
        </div>

    </div>


    <div id=\"siDifferentdeFormeJuridique\" >


        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label>Date d'ouverture du nouvel exercice</label>
                <input type=\"text\"
                       id=\"nouvelExcerciceOuverturesiDifferentdeFormeJuridique\">
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label> La date de clôture change-t-elle sur ce nouvel exercice ? </label>
                <select class=\"form-control\" id=\"ClotureChangeOuNon\" name=\"ClotureChangeOuNon\">
                    <option value=\"\"></option>
                    <option>oui</option>
                    <option>non</option>
                </select>
            </div>
        </div>


    </div>
    <!----------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------>


    <div class=\"form-row\" id=\"DivdateClotureNvExcerciceSIdiffJuridiqueEtNon\">
        <div class=\"form-holder form-holder-2\">
            <label>Date de clôture du nouvel exercice</label>
            <input type=\"date\"
                   id=\"dateClotureNvExcerciceSIdiffJuridiqueEtNon\">
        </div>
    </div>


    <div class=\"form-row\" id=\"DivdateClotureNvExcerciceSIdiffJuridiqueEtOui\">
        <div class=\"form-holder form-holder-2\">
            <label>Veuillez indiquer la date de cloture du nouvel exercice Cela est défini dans les statuts de la société à l'article Exercice social</label>
            <input type=\"date\"
                   id=\"dateClotureNvExcerciceSIdiffJuridiqueEtOui\">
        </div>
    </div>

    <!----------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------>

    <div class=\"form-row\" id=\"CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\">
        <div class=\"form-holder form-holder-2\">
            <label id=\"labelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\">Veuillez indiquer la date de
                cloture
                du nouvel exercice</label>

            <input class=\"form-control\" id=\"date\" name=\"dateCreationEntreprise\"
                   type=\"date\" value=\"2022-06-01\">
        </div>
    </div>
    <!----------------------------------------------------------------------------------------
    ------------------------------------------------------------------------------------------>


</div>", "Divs/siNon.html", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\Divs\\siNon.html");
    }
}
