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

/* Divs/siOui.html */
class __TwigTemplate_25fcfc504fbf462817c5447e9bf7cba56d1587615f324072eb735d2af76062d1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/siOui.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/siOui.html"));

        // line 1
        echo "<div id=\"siOui\">

    <div id=\"siJuridiqueOui\">

        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label> Veuillez indiquer la date de création de l'entreprise ?</label>
                <input class=\"form-control\"  id=\"dateCreationEntreprise\"
                       type=\"date\" value=\"2022-06-01\">
            </div>
        </div>


        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label> Date de clôture du  1er  excercice </label>
\"
                <input class=\"form-control date_cloture_1_ex\" type=\"text\"
                       id=\"datecloture1ex\">

            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------------------------------>
    <div id=\"siJuridiqueNon\">
        <div id=\"divFordateSignature\">
            <div class=\"form-row\">
                <div class=\"form-holder form-holder-2\">
                    <label> \"Veuillez indiquer la date de signature des statuts\"</label>
                    <input class=\"form-control\" type=\"date\"
                           name=\"datesignatureStatus\"
                           value=\"2017-06-01\">
                </div>
            </div>
        </div>


        <div id=\"VeuillezIndiquerLaDateDeClotureDu1erExerciceComptable\">

            <div class=\"form-row\">
                <div class=\"form-holder form-holder-2\">


                    <label> Veuillez indiquer la date de cloture du 1er exercice comptable
                        (Bilan)</label>

                    <label class=\" badge bg-warning   \">Cela est défini dans les statuts
                        de
                        la société à
                        l'article Exercice social\"</label>

                    <input class=\"form-control\"  type=\"date\"
                           name=\"datesignatureStatus\"
                           value=\"2017-06-01\">

                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Divs/siOui.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"siOui\">

    <div id=\"siJuridiqueOui\">

        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label> Veuillez indiquer la date de création de l'entreprise ?</label>
                <input class=\"form-control\"  id=\"dateCreationEntreprise\"
                       type=\"date\" value=\"2022-06-01\">
            </div>
        </div>


        <div class=\"form-row\">
            <div class=\"form-holder form-holder-2\">
                <label> Date de clôture du  1er  excercice </label>
\"
                <input class=\"form-control date_cloture_1_ex\" type=\"text\"
                       id=\"datecloture1ex\">

            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------------------------------>
    <div id=\"siJuridiqueNon\">
        <div id=\"divFordateSignature\">
            <div class=\"form-row\">
                <div class=\"form-holder form-holder-2\">
                    <label> \"Veuillez indiquer la date de signature des statuts\"</label>
                    <input class=\"form-control\" type=\"date\"
                           name=\"datesignatureStatus\"
                           value=\"2017-06-01\">
                </div>
            </div>
        </div>


        <div id=\"VeuillezIndiquerLaDateDeClotureDu1erExerciceComptable\">

            <div class=\"form-row\">
                <div class=\"form-holder form-holder-2\">


                    <label> Veuillez indiquer la date de cloture du 1er exercice comptable
                        (Bilan)</label>

                    <label class=\" badge bg-warning   \">Cela est défini dans les statuts
                        de
                        la société à
                        l'article Exercice social\"</label>

                    <input class=\"form-control\"  type=\"date\"
                           name=\"datesignatureStatus\"
                           value=\"2017-06-01\">

                </div>
            </div>
        </div>
    </div>
</div>", "Divs/siOui.html", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\Divs\\siOui.html");
    }
}
