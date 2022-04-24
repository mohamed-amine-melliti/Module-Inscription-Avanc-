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

/* dossier/ouvertureDossierSection.html */
class __TwigTemplate_ab822b2d6801afe4a8f2c2bf9198f14bed9d22d67fe785520803d41d3dda2600 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/ouvertureDossierSection.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/ouvertureDossierSection.html"));

        // line 1
        echo "
<input type=\"hidden\" value=\"\">
<form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donneesExcerice");
        echo "\" method=\"post\">
    <input type=\"hidden\"  name=\"formjuridique\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">

    <div class=\"mt-4\" >

        <span class=\"badge bg-warning \"> S'agit il du 1er exercice comptable de  ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nomdeDossier"]) || array_key_exists("nomdeDossier", $context) ? $context["nomdeDossier"] : (function () { throw new RuntimeError('Variable "nomdeDossier" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "   ?
        </span>
        <select id=\"firstYesNo\" name=\"firstYesNo\">
            <option>oui</option>
            <option>non</option>
        </select>
    </div>

    <div id=\"siOui\"  >

        <div id=\"siJuridiqueOui\">
            <div class=\"form-group mt-4 col-4\" >
                <span class=\"badge bg-warning \"> \"Veuillez indiquer la date de création de l'entreprise\" </span>
            </div>

            <div class=\"form-group mt-4 col-4\" >
                <input id=\"date\" name=\"dateCreationEntreprise\" type=\"date\" value=\"2017-06-01\">
            </div>

            <label class=\" badge bg-warning col-3 \" >Date de clôture du 1er exercice</label>

            <div class=\"col-sm-3\">
                <input type=\"text\" name=\"datecloture1ex\"  class=\"date_cloture_1_ex\" id=\"date_cloture_1_ex\" >
            </div>


        </div>

        <div id=\"siJuridiqueNon\">
            <div  id=\"divFordateSignature\" class=\"form-group mt-4 col-4\" >
                <span class=\"badge bg-warning \"> \"Veuillez indiquer la date de signature des statuts\"</span>
                <input id=\"date2\" type=\"date\"  name=\"datesignatureStatus\" value=\"2017-06-01\">
            </div>


            <div id=\"VeuillezIndiquerLaDateDeClotureDu1erExerciceComptable\">

                <div class=\"form-group mt-4 col-4\" >


                    <span class=\"badge bg-warning \"> Veuillez indiquer la date de cloture du 1er exercice comptable (Bilan)</span>
                    <div class=\"form-group  col-6  \">

                        <label  class=\" badge bg-warning   \">Cela est défini dans les statuts de la société à l'article Exercice social\"</label>
                    </div>


                    <div class=\"form-group mt-4 col-6 m-lg-2 \">
                        <div class=\"col-6\">
                            <select name=\"jourCloture1erEerc\">
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>

                            </select>
                            <label  class=\" badge bg-warning col-3  \">Jour</label>
                        </div>



                    </div>

                    <div class=\"form-group  col-6 m-lg-2 \">
                        <input type=\"text\" name=\"anneeCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT\" class=\"annee\" id=\"annee\" >
                        <label class=\" badge bg-warning col-3  \">Année</label>
                    </div>

                    <div class=\"form-group mt-4 col-6 m-lg-2 \">
                        <div class=\"col-6\">
                            <select name=\"MoisCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT\">
                                <option>Janvier</option>
                                <option>février</option>
                                <option>mars</option>
                                <option>avril</option>
                                <option>mai</option>
                                <option>juin</option>
                                <option>juillet</option>
                                <option>aout</option>
                                <option>septembre</option>
                                <option>october</option>
                                <option>novembre</option>
                                <option>decembre</option>

                            </select>
                            <label class=\" badge bg-warning col-3  \">Mois</label>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
    </div>






    <div id=\"siNon\">
        <div class=\"form-group mt-4 col-4\" >

            <span class=\"badge bg-warning \"> Quelle est la date de fin du dernier bilan comptable déposé aux impôts ?</span>

        </div>
        <div class=\"form-group mt-4 col-4\" >
            <input id=\"dateFinDernierBilanComptable\" name=\"dateFinDernierBilanComptable\" type=\"date\" value=\"2017-06-01\">
        </div>


        ";
        // line 123
        echo "        ";
        // line 124
        echo "        ";
        // line 125
        echo "        ";
        // line 126
        echo "        ";
        // line 127
        echo "        ";
        // line 128
        echo "        ";
        // line 129
        echo "        ";
        // line 130
        echo "        ";
        // line 131
        echo "        ";
        // line 132
        echo "        ";
        // line 133
        echo "        ";
        // line 134
        echo "        <div class=\"form-group row mt-4 m-lg-2 \">
            <label  class=\" badge bg-warning col-3 \">Date d'ouverture du nouvel exercice</label>
            <div class=\"col-sm-3\">
                <input type=\"text\"  class=\"date_cloture_1_ex\"  name=\"nouvelExcerciceOuverture\" id=\"nouvelExcerciceOuverture\" >
            </div>
        </div>





        <div class=\"mt-4\" >
            <div id=\"siDifferentdeFormeJuridique\">
        <span class=\"badge bg-warning \" > La date de clôture change-t-elle sur ce nouvel exercice    ?
        </span>
                <select id=\"ClotureChangeOuNon\" name=\"ClotureChangeOuNon\">
                    <option>oui</option>
                    <option>non</option>

                </select>
            </div>
        </div>


        <div class=\"form-group row mt-4 m-lg-2 \">
            <label id=\"LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\" class=\" badge bg-warning col-3 \">Date de clôture du nouvel exercice</label>
            <div class=\"col-sm-3\">
                <input type=\"text\"  class=\"date_cloture_1_ex\" id=\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\" , name=\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\" >
            </div>
        </div>



        <div class=\"form-group row mt-4 m-lg-2 \">
            <label  class=\" badge bg-warning col-3 \" id=\"test\">Date de clôture du 1er exercice</label>
            <div class=\"col-sm-3\">
                <input type=\"text\"  class=\"date_cloture_1_ex\" name=\"nouvelExcerciceCloture\" id=\"nouvelExcerciceCloture\" >
            </div>

        </div>


        <!----------------------------------------------------------------------------------------
        ------------------------------------------------------------------------------------------>

        <div id=\"CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\">
            <div id=\"labelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\" class=\"form-group  col-6 \">

                <label  class=\" badge bg-warning   \">Veuillez indiquer la date de cloture du nouvel exercice</label>
            </div>




            <div class=\"form-group mt-4 col-6 m-lg-2 \">
                <div class=\"col-6\">
                    <select name=\"JOURclotureNouvelExNonOuiDifSCI\">
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <label f class=\" badge bg-warning col-3  \">Jour</label>
                </div>
            </div>


            <div class=\"form-group  col-6 m-lg-2 \">
                <input type=\"text\"  class=\"annee\" id=\"annee\"  name=\"AnneeclotureNouvelExNonOuiDifSCI\">
                <label  class=\" badge bg-warning col-3  \">Année</label>
            </div>

            <div class=\"form-group mt-4 col-6 m-lg-2 \">
                <div class=\"col-6\">
                    <select name=\"MoisclotureNouvelExNonOuiDifSCI\">
                        <option>Janvier</option>
                        <option>février</option>
                        <option>mars</option>
                        <option>avril</option>
                        <option>mai</option>
                        <option>juin</option>
                        <option>juillet</option>
                        <option>aout</option>
                        <option>septembre</option>
                        <option>october</option>
                        <option>novembre</option>
                        <option>decembre</option>

                    </select>
                    <label  class=\" badge bg-warning col-3  \">Mois</label>
                </div>
            </div>

        </div>
        <!----------------------------------------------------------------------------------------
        ------------------------------------------------------------------------------------------>


    </div>

    <div class=\"mt-4\" >

        <div id=\"one\">
        <span class=\"badge bg-warning \"> Merci de confirmer votre régime de TVA sur ce nouvel exercice
        </span>
        </div>
        <span class=\"badge bg-warning \"> (Pour le 1er exercice, le Memento Fiscal que vous avez reçu de votre SIE confirme le régime)
        </span>

        <select name=\"regime\">
            <option>Régime Mensuel - Réel Normal</option>
            <option>Régime Trimestriel - Mini Réel</option>
            <option>   Régime Simplifié déclaration à l'année </option>
        </select>
    </div>
    <div class=\"centre\">
        <button  class=\"btn btn-primary\"  type=\"submit\">Ouvrir l'exercice</button>
    </div>
</form>
</div>

<script src=";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "></script>


<script>

    \$(document).ready(function() {

        var form = \"";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ouvertureExcercice", ["formjuridique" => "text"]);
        echo "\";


        \$('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");
        \$('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");


        \$('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");
        \$('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");


        if( '";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 273, $this->source); })()), "html", null, true);
        echo "'==\"Entreprise individuelle\" ||
            '";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 274, $this->source); })()), "html", null, true);
        echo "'==\"EIRL\" ||
            '";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 275, $this->source); })()), "html", null, true);
        echo "'==\"Autoentrepreneur\" ||
            '";
        // line 276
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 276, $this->source); })()), "html", null, true);
        echo "'==\"SCI\"
        )
        {
            \$('#divFordateSignature').hide(\"fast\");

        }

        \$('div#siOui ').hide(\"fast\");
        \$('div#siNon ').hide(\"fast\");

        \$('div#tbenfijami3el7alet ').show(\"fast\");





        if( '";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 292, $this->source); })()), "html", null, true);
        echo "'==\"Entreprise individuelle\" ||
            '";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 293, $this->source); })()), "html", null, true);
        echo "'==\"EIRL\" ||
            '";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "'==\"Autoentrepreneur\" ||
            '";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "'==\"SCI\"
        )
        {
            \$('div#siJuridiqueOui').show(\"fast\");
            \$('div#siJuridiqueNon').hide(\"fast\");
            \$('div#siDifferentdeFormeJuridique').hide(\"fast\");
            \$('#nouvelExcerciceCloture').show(\"fast\");

            \$('div#VeuillezIndiquerLaDateDeClotureDu1erExerciceComptable').hide(\"fast\");
        }

        else {
            \$('div#siJuridiqueOui').hide(\"fast\");
            \$('div#siJuridiqueNon').show(\"fast\");

            \$('#nouvelExcerciceCloture').hide(\"fast\");
            \$('label#test').hide(\"fast\");
            \$('div#siDifferentdeFormeJuridique').show(\"fast\");
        }

    });
    /**********************1er partie [si Oui/Non]********************************/
    \$(document).on('change' ,'#firstYesNo', function(event ) {
        if( \$('#firstYesNo :selected').text()=='oui')
        {
            \$('div#siOui').show(\"slow\");
            \$('div#siNon').hide(\"slow\");
        }


        else if (\$('#firstYesNo :selected').text()=='non')
        {
            \$('div#siOui').hide(\"slow\");
            \$('div#siNon').show(\"slow\");


        }
    });
    /**********************2eme partie [date cloture]********************************/
    \$(document).on('change' ,'#date', function(event ){

        var date = new Date(\$('#date').val());
        var year = date.getFullYear();
        document.getElementById(\"date_cloture_1_ex\").value = \"31/12\"+'/'+year;
        //\$(\"#date_cloture_1_ex \").attr(\"disabled\",\"disabled\");




    });

    \$(document).on('change' ,'#dateFinDernierBilanComptable', function(event ){


        if( '";
        // line 349
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 349, $this->source); })()), "html", null, true);
        echo "'==\"Entreprise individuelle\" ||
            '";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 350, $this->source); })()), "html", null, true);
        echo "'==\"EIRL\" ||
            '";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 351, $this->source); })()), "html", null, true);
        echo "'==\"Autoentrepreneur\" ||
            '";
        // line 352
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 352, $this->source); })()), "html", null, true);
        echo "'==\"SCI\"
        )
        {
            var date = new Date(\$('#dateFinDernierBilanComptable').val());
            var year = date.getFullYear();
            year = year + 1;

            document.getElementById(\"nouvelExcerciceOuverture\").value = \"01/01\" + '/' + year;
            document.getElementById(\"nouvelExcerciceCloture\").value = \"31/12\" + '/' + year;

            //  \$(\"#nouvelExcerciceOuverture \").attr(\"disabled\", \"disabled\");
            //  \$(\"#nouvelExcerciceCloture \").attr(\"disabled\", \"disabled\");

        }

        else {


            \$(\"#divFordateSignature\").hide(\"fast\");

            var date = new Date(\$('#dateFinDernierBilanComptable').val());
            var day = date.getDate();
            var year = date.getFullYear();
            var month = date.getMonth() + 1;

            var day2 = date.getDate();
            var year2 = date.getFullYear();
            var month2 = date.getMonth();

            day=day+1;
            document.getElementById(\"nouvelExcerciceOuverture\").value = \"01\"+'/'+(month+1)+'/'+year;
            document.getElementById(\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\").value = day2+'/'+(month2+1)+'/'+(year2+1);



        }

    });

    /********** PARTIE 3 [date cloture chanegra-t-elle sur ce nouvel excercice] ***********************/

    \$(document).on('change' ,'#ClotureChangeOuNon', function(event ){

        if(\$('#ClotureChangeOuNon :selected').text()=='oui')
        {

            \$('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");

            \$('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').show(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').show(\"fast\");

        }

        else {
            \$('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').show(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').show(\"fast\");

            \$('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");

            var date = new Date(\$('#dateFinDernierBilanComptable').val());
            var day = date.getDate();
            var year = date.getFullYear();
            var month = date.getMonth();

            document.getElementById(\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\").value = day+'/'+(month+1)+'/'+(year+1);
        }


    });

</script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/ouvertureDossierSection.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 352,  452 => 351,  448 => 350,  444 => 349,  387 => 295,  383 => 294,  379 => 293,  375 => 292,  356 => 276,  352 => 275,  348 => 274,  344 => 273,  330 => 262,  320 => 255,  197 => 134,  195 => 133,  193 => 132,  191 => 131,  189 => 130,  187 => 129,  185 => 128,  183 => 127,  181 => 126,  179 => 125,  177 => 124,  175 => 123,  58 => 8,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<input type=\"hidden\" value=\"\">
<form action=\"{{ path('donneesExcerice') }}\" method=\"post\">
    <input type=\"hidden\"  name=\"formjuridique\" value=\"{{ formjuridique }}\">

    <div class=\"mt-4\" >

        <span class=\"badge bg-warning \"> S'agit il du 1er exercice comptable de  {{ nomdeDossier}}   ?
        </span>
        <select id=\"firstYesNo\" name=\"firstYesNo\">
            <option>oui</option>
            <option>non</option>
        </select>
    </div>

    <div id=\"siOui\"  >

        <div id=\"siJuridiqueOui\">
            <div class=\"form-group mt-4 col-4\" >
                <span class=\"badge bg-warning \"> \"Veuillez indiquer la date de création de l'entreprise\" </span>
            </div>

            <div class=\"form-group mt-4 col-4\" >
                <input id=\"date\" name=\"dateCreationEntreprise\" type=\"date\" value=\"2017-06-01\">
            </div>

            <label class=\" badge bg-warning col-3 \" >Date de clôture du 1er exercice</label>

            <div class=\"col-sm-3\">
                <input type=\"text\" name=\"datecloture1ex\"  class=\"date_cloture_1_ex\" id=\"date_cloture_1_ex\" >
            </div>


        </div>

        <div id=\"siJuridiqueNon\">
            <div  id=\"divFordateSignature\" class=\"form-group mt-4 col-4\" >
                <span class=\"badge bg-warning \"> \"Veuillez indiquer la date de signature des statuts\"</span>
                <input id=\"date2\" type=\"date\"  name=\"datesignatureStatus\" value=\"2017-06-01\">
            </div>


            <div id=\"VeuillezIndiquerLaDateDeClotureDu1erExerciceComptable\">

                <div class=\"form-group mt-4 col-4\" >


                    <span class=\"badge bg-warning \"> Veuillez indiquer la date de cloture du 1er exercice comptable (Bilan)</span>
                    <div class=\"form-group  col-6  \">

                        <label  class=\" badge bg-warning   \">Cela est défini dans les statuts de la société à l'article Exercice social\"</label>
                    </div>


                    <div class=\"form-group mt-4 col-6 m-lg-2 \">
                        <div class=\"col-6\">
                            <select name=\"jourCloture1erEerc\">
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>

                            </select>
                            <label  class=\" badge bg-warning col-3  \">Jour</label>
                        </div>



                    </div>

                    <div class=\"form-group  col-6 m-lg-2 \">
                        <input type=\"text\" name=\"anneeCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT\" class=\"annee\" id=\"annee\" >
                        <label class=\" badge bg-warning col-3  \">Année</label>
                    </div>

                    <div class=\"form-group mt-4 col-6 m-lg-2 \">
                        <div class=\"col-6\">
                            <select name=\"MoisCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT\">
                                <option>Janvier</option>
                                <option>février</option>
                                <option>mars</option>
                                <option>avril</option>
                                <option>mai</option>
                                <option>juin</option>
                                <option>juillet</option>
                                <option>aout</option>
                                <option>septembre</option>
                                <option>october</option>
                                <option>novembre</option>
                                <option>decembre</option>

                            </select>
                            <label class=\" badge bg-warning col-3  \">Mois</label>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
    </div>






    <div id=\"siNon\">
        <div class=\"form-group mt-4 col-4\" >

            <span class=\"badge bg-warning \"> Quelle est la date de fin du dernier bilan comptable déposé aux impôts ?</span>

        </div>
        <div class=\"form-group mt-4 col-4\" >
            <input id=\"dateFinDernierBilanComptable\" name=\"dateFinDernierBilanComptable\" type=\"date\" value=\"2017-06-01\">
        </div>


        {#    <div class=\"form-group mt-4 col-6 m-lg-2 \">#}
        {#        <input type=\"text\"  class=\"jour\" id=\"jour\" >#}
        {#        <label class=\" badge bg-warning col-3  \">Jour</label>#}
        {#    </div>#}
        {#    <div class=\"form-group  col-6 m-lg-2 \">#}
        {#        <input type=\"text\"  class=\"mois\" id=\"mois\" >#}
        {#        <label  class=\" badge bg-warning col-3  \">Mois</label>#}
        {#    </div>#}
        {#    <div class=\"form-group  col-6 m-lg-2 \">#}
        {#        <input type=\"text\"  class=\"annee\" id=\"annee\" >#}
        {#        <label  class=\" badge bg-warning col-3  \">Année</label>#}
        {#    </div>#}
        <div class=\"form-group row mt-4 m-lg-2 \">
            <label  class=\" badge bg-warning col-3 \">Date d'ouverture du nouvel exercice</label>
            <div class=\"col-sm-3\">
                <input type=\"text\"  class=\"date_cloture_1_ex\"  name=\"nouvelExcerciceOuverture\" id=\"nouvelExcerciceOuverture\" >
            </div>
        </div>





        <div class=\"mt-4\" >
            <div id=\"siDifferentdeFormeJuridique\">
        <span class=\"badge bg-warning \" > La date de clôture change-t-elle sur ce nouvel exercice    ?
        </span>
                <select id=\"ClotureChangeOuNon\" name=\"ClotureChangeOuNon\">
                    <option>oui</option>
                    <option>non</option>

                </select>
            </div>
        </div>


        <div class=\"form-group row mt-4 m-lg-2 \">
            <label id=\"LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\" class=\" badge bg-warning col-3 \">Date de clôture du nouvel exercice</label>
            <div class=\"col-sm-3\">
                <input type=\"text\"  class=\"date_cloture_1_ex\" id=\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\" , name=\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\" >
            </div>
        </div>



        <div class=\"form-group row mt-4 m-lg-2 \">
            <label  class=\" badge bg-warning col-3 \" id=\"test\">Date de clôture du 1er exercice</label>
            <div class=\"col-sm-3\">
                <input type=\"text\"  class=\"date_cloture_1_ex\" name=\"nouvelExcerciceCloture\" id=\"nouvelExcerciceCloture\" >
            </div>

        </div>


        <!----------------------------------------------------------------------------------------
        ------------------------------------------------------------------------------------------>

        <div id=\"CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\">
            <div id=\"labelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique\" class=\"form-group  col-6 \">

                <label  class=\" badge bg-warning   \">Veuillez indiquer la date de cloture du nouvel exercice</label>
            </div>




            <div class=\"form-group mt-4 col-6 m-lg-2 \">
                <div class=\"col-6\">
                    <select name=\"JOURclotureNouvelExNonOuiDifSCI\">
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <label f class=\" badge bg-warning col-3  \">Jour</label>
                </div>
            </div>


            <div class=\"form-group  col-6 m-lg-2 \">
                <input type=\"text\"  class=\"annee\" id=\"annee\"  name=\"AnneeclotureNouvelExNonOuiDifSCI\">
                <label  class=\" badge bg-warning col-3  \">Année</label>
            </div>

            <div class=\"form-group mt-4 col-6 m-lg-2 \">
                <div class=\"col-6\">
                    <select name=\"MoisclotureNouvelExNonOuiDifSCI\">
                        <option>Janvier</option>
                        <option>février</option>
                        <option>mars</option>
                        <option>avril</option>
                        <option>mai</option>
                        <option>juin</option>
                        <option>juillet</option>
                        <option>aout</option>
                        <option>septembre</option>
                        <option>october</option>
                        <option>novembre</option>
                        <option>decembre</option>

                    </select>
                    <label  class=\" badge bg-warning col-3  \">Mois</label>
                </div>
            </div>

        </div>
        <!----------------------------------------------------------------------------------------
        ------------------------------------------------------------------------------------------>


    </div>

    <div class=\"mt-4\" >

        <div id=\"one\">
        <span class=\"badge bg-warning \"> Merci de confirmer votre régime de TVA sur ce nouvel exercice
        </span>
        </div>
        <span class=\"badge bg-warning \"> (Pour le 1er exercice, le Memento Fiscal que vous avez reçu de votre SIE confirme le régime)
        </span>

        <select name=\"regime\">
            <option>Régime Mensuel - Réel Normal</option>
            <option>Régime Trimestriel - Mini Réel</option>
            <option>   Régime Simplifié déclaration à l'année </option>
        </select>
    </div>
    <div class=\"centre\">
        <button  class=\"btn btn-primary\"  type=\"submit\">Ouvrir l'exercice</button>
    </div>
</form>
</div>

<script src={{  asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}></script>


<script>

    \$(document).ready(function() {

        var form = \"{{ path('ouvertureExcercice',{'formjuridique': 'text'}) }}\";


        \$('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");
        \$('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");


        \$('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");
        \$('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");


        if( '{{ formjuridique }}'==\"Entreprise individuelle\" ||
            '{{ formjuridique }}'==\"EIRL\" ||
            '{{ formjuridique }}'==\"Autoentrepreneur\" ||
            '{{ formjuridique }}'==\"SCI\"
        )
        {
            \$('#divFordateSignature').hide(\"fast\");

        }

        \$('div#siOui ').hide(\"fast\");
        \$('div#siNon ').hide(\"fast\");

        \$('div#tbenfijami3el7alet ').show(\"fast\");





        if( '{{ formjuridique }}'==\"Entreprise individuelle\" ||
            '{{ formjuridique }}'==\"EIRL\" ||
            '{{ formjuridique }}'==\"Autoentrepreneur\" ||
            '{{ formjuridique }}'==\"SCI\"
        )
        {
            \$('div#siJuridiqueOui').show(\"fast\");
            \$('div#siJuridiqueNon').hide(\"fast\");
            \$('div#siDifferentdeFormeJuridique').hide(\"fast\");
            \$('#nouvelExcerciceCloture').show(\"fast\");

            \$('div#VeuillezIndiquerLaDateDeClotureDu1erExerciceComptable').hide(\"fast\");
        }

        else {
            \$('div#siJuridiqueOui').hide(\"fast\");
            \$('div#siJuridiqueNon').show(\"fast\");

            \$('#nouvelExcerciceCloture').hide(\"fast\");
            \$('label#test').hide(\"fast\");
            \$('div#siDifferentdeFormeJuridique').show(\"fast\");
        }

    });
    /**********************1er partie [si Oui/Non]********************************/
    \$(document).on('change' ,'#firstYesNo', function(event ) {
        if( \$('#firstYesNo :selected').text()=='oui')
        {
            \$('div#siOui').show(\"slow\");
            \$('div#siNon').hide(\"slow\");
        }


        else if (\$('#firstYesNo :selected').text()=='non')
        {
            \$('div#siOui').hide(\"slow\");
            \$('div#siNon').show(\"slow\");


        }
    });
    /**********************2eme partie [date cloture]********************************/
    \$(document).on('change' ,'#date', function(event ){

        var date = new Date(\$('#date').val());
        var year = date.getFullYear();
        document.getElementById(\"date_cloture_1_ex\").value = \"31/12\"+'/'+year;
        //\$(\"#date_cloture_1_ex \").attr(\"disabled\",\"disabled\");




    });

    \$(document).on('change' ,'#dateFinDernierBilanComptable', function(event ){


        if( '{{ formjuridique }}'==\"Entreprise individuelle\" ||
            '{{ formjuridique }}'==\"EIRL\" ||
            '{{ formjuridique }}'==\"Autoentrepreneur\" ||
            '{{ formjuridique }}'==\"SCI\"
        )
        {
            var date = new Date(\$('#dateFinDernierBilanComptable').val());
            var year = date.getFullYear();
            year = year + 1;

            document.getElementById(\"nouvelExcerciceOuverture\").value = \"01/01\" + '/' + year;
            document.getElementById(\"nouvelExcerciceCloture\").value = \"31/12\" + '/' + year;

            //  \$(\"#nouvelExcerciceOuverture \").attr(\"disabled\", \"disabled\");
            //  \$(\"#nouvelExcerciceCloture \").attr(\"disabled\", \"disabled\");

        }

        else {


            \$(\"#divFordateSignature\").hide(\"fast\");

            var date = new Date(\$('#dateFinDernierBilanComptable').val());
            var day = date.getDate();
            var year = date.getFullYear();
            var month = date.getMonth() + 1;

            var day2 = date.getDate();
            var year2 = date.getFullYear();
            var month2 = date.getMonth();

            day=day+1;
            document.getElementById(\"nouvelExcerciceOuverture\").value = \"01\"+'/'+(month+1)+'/'+year;
            document.getElementById(\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\").value = day2+'/'+(month2+1)+'/'+(year2+1);



        }

    });

    /********** PARTIE 3 [date cloture chanegra-t-elle sur ce nouvel excercice] ***********************/

    \$(document).on('change' ,'#ClotureChangeOuNon', function(event ){

        if(\$('#ClotureChangeOuNon :selected').text()=='oui')
        {

            \$('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");

            \$('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').show(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').show(\"fast\");

        }

        else {
            \$('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').show(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').show(\"fast\");

            \$('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");

            var date = new Date(\$('#dateFinDernierBilanComptable').val());
            var day = date.getDate();
            var year = date.getFullYear();
            var month = date.getMonth();

            document.getElementById(\"CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique\").value = day+'/'+(month+1)+'/'+(year+1);
        }


    });

</script>

", "dossier/ouvertureDossierSection.html", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\ouvertureDossierSection.html");
    }
}
