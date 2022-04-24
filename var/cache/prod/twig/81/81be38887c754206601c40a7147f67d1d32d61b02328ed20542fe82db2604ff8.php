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

/* dossier/ouvertureExcercie.html.twig */
class __TwigTemplate_7bb4ab586d352a5834e1b3226c9f19d5271e4b6566c1504e0182374d11a8d4d1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/ouvertureExcercie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    <input type=\"hidden\" value=\"\">
    <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donneesExcerice");
        echo "\" method=\"post\">
        <input type=\"hidden\"  name=\"formjuridique\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "\">

        <div class=\"mt-4\" >

        <span class=\"badge bg-warning \"> S'agit il du 1er exercice comptable de  ";
        // line 14
        echo twig_escape_filter($this->env, ($context["nomdeDossier"] ?? null), "html", null, true);
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

                <label for=\"staticEmail\" class=\" badge bg-warning col-3 \" >Date de clôture du 1er exercice</label>

                <div class=\"col-sm-3\">
                    <input type=\"text\" name=\"datecloture1ex\"  class=\"date_cloture_1_ex\" id=\"date_cloture_1_ex\" >
                </div>


            </div>

            <div id=\"siJuridiqueNon\">
                <div  id=\"divFordateSignature\" class=\"form-group mt-4 col-4\" >
                    <span class=\"badge bg-warning \"> \"Veuillez indiquer la date de signature des statuts\"</span>
                    <input id=\"date\" type=\"date\"  name=\"datesignatureStatus\" value=\"2017-06-01\">
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
                                <label for=\"staticEmail\" class=\" badge bg-warning col-3  \">Jour</label>
                            </div>



                        </div>

                        <div class=\"form-group  col-6 m-lg-2 \">
                            <input type=\"text\" name=\"anneeCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT\" class=\"annee\" id=\"annee\" >
                            <label for=\"staticEmail\" class=\" badge bg-warning col-3  \">Année</label>
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
                                <label for=\"staticEmail\" class=\" badge bg-warning col-3  \">Mois</label>
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
        // line 129
        echo "            ";
        // line 130
        echo "            ";
        // line 131
        echo "            ";
        // line 132
        echo "            ";
        // line 133
        echo "            ";
        // line 134
        echo "            ";
        // line 135
        echo "            ";
        // line 136
        echo "            ";
        // line 137
        echo "            ";
        // line 138
        echo "            ";
        // line 139
        echo "            ";
        // line 140
        echo "            <div class=\"form-group row mt-4 m-lg-2 \">
                <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">Date d'ouverture du nouvel exercice</label>
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
                <label for=\"staticEmail\" class=\" badge bg-warning col-3 \" id=\"test\">Date de clôture du 1er exercice</label>
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
                        <label for=\"staticEmail\" class=\" badge bg-warning col-3  \">Jour</label>
                    </div>
                </div>


                <div class=\"form-group  col-6 m-lg-2 \">
                    <input type=\"text\"  class=\"annee\" id=\"annee\"  name=\"AnneeclotureNouvelExNonOuiDifSCI\">
                    <label for=\"staticEmail\" class=\" badge bg-warning col-3  \">Année</label>
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
                        <label for=\"staticEmail\" class=\" badge bg-warning col-3  \">Mois</label>
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
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "></script>


    <script>

        \$(document).ready(function() {

            var form = \"";
        // line 268
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ouvertureExcercice", ["formjuridique" => "text"]);
        echo "\";


            \$('#CloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiNonEtDifferentduFormeJuridique').hide(\"fast\");


            \$('#CloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");
            \$('#LabelForCloturenouvelExcerciceSiOuiEtDifferentduFormeJuridique').hide(\"fast\");


            if( '";
        // line 279
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"Entreprise individuelle\" ||
                '";
        // line 280
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"EIRL\" ||
                '";
        // line 281
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"Autoentrepreneur\" ||
                '";
        // line 282
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"SCI\"
            )
            {
                \$('#divFordateSignature').hide(\"fast\");

            }

            \$('div#siOui ').hide(\"fast\");
            \$('div#siNon ').hide(\"fast\");

            \$('div#tbenfijami3el7alet ').show(\"fast\");





            if( '";
        // line 298
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"Entreprise individuelle\" ||
                '";
        // line 299
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"EIRL\" ||
                '";
        // line 300
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"Autoentrepreneur\" ||
                '";
        // line 301
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
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
        // line 355
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"Entreprise individuelle\" ||
                '";
        // line 356
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"EIRL\" ||
                '";
        // line 357
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
        echo "'==\"Autoentrepreneur\" ||
                '";
        // line 358
        echo twig_escape_filter($this->env, ($context["formjuridique"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "dossier/ouvertureExcercie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 358,  468 => 357,  464 => 356,  460 => 355,  403 => 301,  399 => 300,  395 => 299,  391 => 298,  372 => 282,  368 => 281,  364 => 280,  360 => 279,  346 => 268,  336 => 261,  213 => 140,  211 => 139,  209 => 138,  207 => 137,  205 => 136,  203 => 135,  201 => 134,  199 => 133,  197 => 132,  195 => 131,  193 => 130,  191 => 129,  74 => 14,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/ouvertureExcercie.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\dossier\\ouvertureExcercie.html.twig");
    }
}
