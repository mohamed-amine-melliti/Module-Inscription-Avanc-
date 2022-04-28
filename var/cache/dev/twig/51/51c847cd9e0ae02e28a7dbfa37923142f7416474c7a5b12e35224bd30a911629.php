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

/* dossier/newOuvertureExcercice.html.twig */
class __TwigTemplate_ac437cc9bb8004f7e6de2effce04b72fdbcf972b3468c5a3b52b1764b650d614 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/newOuvertureExcercice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/newOuvertureExcercice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Inscription Aldini</title>

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    ";
        // line 10
        $this->loadTemplate("Divs/navbar.html.twig", "dossier/newOuvertureExcercice.html.twig", 10)->display($context);
        // line 11
        echo "
    <!-- Font-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/nunito-font.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"fonts/material-design-iconic-font/css/material-design-iconic-font.min.css\">
    <!-- Main Style Css -->
    <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
<style>
    select {  text-align-last:center; }

</style>
<div class=\"page-content\">
    <div class=\"wizard-v5-content\">
        <div class=\"wizard-form\">

            <form class=\"form-register\" action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("donneesExcerice");
        echo "\" method=\"post\">
                <input type=\"hidden\" id=\"myjuridique\" name=\"formjuridique\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["formjuridique"]) || array_key_exists("formjuridique", $context) ? $context["formjuridique"] : (function () { throw new RuntimeError('Variable "formjuridique" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\">

                <div id=\"form-total\">
                    <!-- SECTION 1 -->
                    <h2>
                        <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                        <span class=\"step-text\">Ouverture Excercice</span>
                    </h2>
                    <section>
                        <div class=\"inner\">

                            <div class=\"form-row\" id=\"\">
                                <div class=\"form-holder form-holder-2\">
                                    <label> S'agit il du 1er exercice comptable de ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nomdeDossier"]) || array_key_exists("nomdeDossier", $context) ? $context["nomdeDossier"] : (function () { throw new RuntimeError('Variable "nomdeDossier" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " ?</label>
                                    <select class=\"form-control\" id=\"firstYesNo\">
                                        <option value=\"\"></option>
                                        <option value=\"non\">non</option>
                                        <option value=\"oui\">oui</option>
                                    </select>
                                </div>
                            </div>


                            ";
        // line 52
        $this->loadTemplate("Divs/siOui.html", "dossier/newOuvertureExcercice.html.twig", 52)->display($context);
        // line 53
        echo "
                            ";
        // line 54
        $this->loadTemplate("Divs/siNon.html", "dossier/newOuvertureExcercice.html.twig", 54)->display($context);
        // line 55
        echo "

                            <div class=\"form-row\" id=\"\">
                                <div class=\"form-holder form-holder-2\">
                                    <label> Merci de confirmer votre régime de TVA sur ce nouvel exercice (Pour le 1er
                                        exercice, le Memento Fiscal que vous avez reçu de votre SIE confirme le
                                        régime)</label>
                                    <select name=\"regime\" id=\"regime\">
                                        <option value=\"\"></option>
                                        <option>Régime Mensuel - Réel Normal</option>
                                        <option>Régime Trimestriel - Mini Réel</option>
                                        <option> Régime Simplifié déclaration à l'année</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- SECTION 2 -->

                    <!-- SECTION 3 -->
                    <h2>
                        <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                        <span class=\"step-text\">Données Excercice</span>
                    </h2>
                    <section>
                        <div class=\"inner\">
                            <h3></h3>
                            <div class=\"form-row table-responsive\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr class=\"space-row\">
                                        <th>Date ouverture de l'exercice</th>
                                        <td id=\"fullname-val\"></td>
                                    </tr>
                                    <tr class=\"space-row\">
                                        <th>Date clôture de l'exercice</th>
                                        <td id=\"email-val\"></td>
                                    </tr>
                                    <tr class=\"space-row\">
                                        <th>Régime de TVA de l'exercice</th>
                                        <td id=\"phone-val\"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>


<script src=";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.steps.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>


<script src=";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ouvertureExcercice.js"), "html", null, true);
        echo "></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/newOuvertureExcercice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 116,  181 => 113,  177 => 112,  173 => 111,  115 => 55,  113 => 54,  110 => 53,  108 => 52,  95 => 42,  79 => 29,  75 => 28,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Inscription Aldini</title>

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    {% include  'Divs/navbar.html.twig' %}

    <!-- Font-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/nunito-font.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"fonts/material-design-iconic-font/css/material-design-iconic-font.min.css\">
    <!-- Main Style Css -->
    <link rel=\"stylesheet\" href=\"css/style.css\"/>
</head>
<body>
<style>
    select {  text-align-last:center; }

</style>
<div class=\"page-content\">
    <div class=\"wizard-v5-content\">
        <div class=\"wizard-form\">

            <form class=\"form-register\" action=\"{{ path('donneesExcerice') }}\" method=\"post\">
                <input type=\"hidden\" id=\"myjuridique\" name=\"formjuridique\" value=\"{{ formjuridique }}\">

                <div id=\"form-total\">
                    <!-- SECTION 1 -->
                    <h2>
                        <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                        <span class=\"step-text\">Ouverture Excercice</span>
                    </h2>
                    <section>
                        <div class=\"inner\">

                            <div class=\"form-row\" id=\"\">
                                <div class=\"form-holder form-holder-2\">
                                    <label> S'agit il du 1er exercice comptable de {{ nomdeDossier }} ?</label>
                                    <select class=\"form-control\" id=\"firstYesNo\">
                                        <option value=\"\"></option>
                                        <option value=\"non\">non</option>
                                        <option value=\"oui\">oui</option>
                                    </select>
                                </div>
                            </div>


                            {% include 'Divs/siOui.html' %}

                            {% include 'Divs/siNon.html' %}


                            <div class=\"form-row\" id=\"\">
                                <div class=\"form-holder form-holder-2\">
                                    <label> Merci de confirmer votre régime de TVA sur ce nouvel exercice (Pour le 1er
                                        exercice, le Memento Fiscal que vous avez reçu de votre SIE confirme le
                                        régime)</label>
                                    <select name=\"regime\" id=\"regime\">
                                        <option value=\"\"></option>
                                        <option>Régime Mensuel - Réel Normal</option>
                                        <option>Régime Trimestriel - Mini Réel</option>
                                        <option> Régime Simplifié déclaration à l'année</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- SECTION 2 -->

                    <!-- SECTION 3 -->
                    <h2>
                        <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                        <span class=\"step-text\">Données Excercice</span>
                    </h2>
                    <section>
                        <div class=\"inner\">
                            <h3></h3>
                            <div class=\"form-row table-responsive\">
                                <table class=\"table\">
                                    <tbody>
                                    <tr class=\"space-row\">
                                        <th>Date ouverture de l'exercice</th>
                                        <td id=\"fullname-val\"></td>
                                    </tr>
                                    <tr class=\"space-row\">
                                        <th>Date clôture de l'exercice</th>
                                        <td id=\"email-val\"></td>
                                    </tr>
                                    <tr class=\"space-row\">
                                        <th>Régime de TVA de l'exercice</th>
                                        <td id=\"phone-val\"></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>


<script src={{ asset('js/jquery-3.3.1.min.js') }}></script>
<script src={{ asset('js/jquery.steps.js') }}></script>
<script src={{ asset('js/main.js') }}></script>


<script src={{ asset('js/ouvertureExcercice.js') }}></script>

</body>
</html>", "dossier/newOuvertureExcercice.html.twig", "C:\\Users\\21629\\Desktop\\copie\\adlini\\templates\\dossier\\newOuvertureExcercice.html.twig");
    }
}
