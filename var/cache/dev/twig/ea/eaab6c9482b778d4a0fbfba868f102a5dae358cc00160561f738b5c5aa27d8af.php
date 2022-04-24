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

/* dossier/newOuvertureDossier.html.twig */
class __TwigTemplate_bb9a210fb41258636a0a22b47a41d60a66fd8dc0fad56af8d2781047b5fb6a3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/newOuvertureDossier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/newOuvertureDossier.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Inscription Aldini</title>
    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <!-- 5edmti-->
    ";
        // line 9
        $this->loadTemplate("Divs/navbar.html.twig", "dossier/newOuvertureDossier.html.twig", 9)->display($context);
        // line 10
        echo "
    <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/monstylesheet.css"), "html", null, true);
        echo ">


    <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/controlesaisie.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/popUpAwelMat7el.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/tandhimLesDivs.css"), "html", null, true);
        echo ">

    <link rel=\"stylesheet\"
          href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css"), "html", null, true);
        echo ">
    <!-- Font-->

    <link rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nunito-font.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\"
          href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo ">

    <!-- Main Style Css -->
    <link rel=\"stylesheet\" href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/intlTelInput.css"), "html", null, true);
        echo "\">


    <!---------------Create Alerte ---------------------------------------------------------------------------------------->
    <script src=";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"), "html", null, true);
        echo "></script>

    <!--- <link rel=\"stylesheet\" href=";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"), "html", null, true);
        echo "> ---->

    <link rel=\"stylesheet\" href=";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\"
          href=";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo ">
    <!---------------Create Alerte ---------------------------------------------------------------------------------------->

    <!-- Page Ouverture Dossier-->

</head>


<body>
";
        // line 50
        $this->loadTemplate("Divs/subscribe.html", "dossier/newOuvertureDossier.html.twig", 50)->display($context);
        // line 51
        echo "

<div class=\"page-content\">
    <div class=\"wizard-v5-content\">
        <div class=\"wizard-form\">
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_start', ["attr" => ["id" => "dossier", "class" => "form-register"]]);
        echo "
            <div id=\"form-total\">


                <!-- SECTION 3 -->
                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">CREEZ VOS DOSSIERS</span>
                </h2>

                ";
        // line 66
        $this->loadTemplate("Divs/navigation.html", "dossier/newOuvertureDossier.html.twig", 66)->display($context);
        // line 67
        echo "
                <section>
                    <div class=\"inner\">

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"\">Nom Dossier : </label>
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "nomDossier", [], "any", false, false, false, 74), 'widget', ["attr" => [" class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
                            </div>
                        </div>

                    </div>
                </section>

                <!-- SECTION 1 -->
                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">Ouverture Dossier</span>
                </h2>
                <section>

                    <div class=\"inner\">

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"\">Secteur d'activité : </label>
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "secteurActivite", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        ";
        // line 97
        $this->loadTemplate("dossier/DivsSecteurActivite.html", "dossier/newOuvertureDossier.html.twig", 97)->display($context);
        // line 98
        echo "
                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "raisonSociale", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "formeJuridique", [], "any", false, false, false, 107), 'row', ["attr" => ["class" => " toggle button  form-control", "data-target" => "myPopup"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\" id=\"DivCapitalSocial\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "capitalSocial", [], "any", false, false, false, 113), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\" id=\"DivNbAssocie\">
                            <div class=\"form-holder form-holder-2\">

                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "nbAssocies", [], "any", false, false, false, 120), 'label', ["label_attr" => ["class" => "foo"], "label" => "Nombre d'associés"]);
        echo "
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "nbAssocies", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>


                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "adressSiegeSocial", [], "any", false, false, false, 128), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">

                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "codePostale", [], "any", false, false, false, 135), 'label');
        echo "
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "codePostale", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control validate ", "maxlength" => "5"]]);
        echo "


                                <span class=\"message\">Un code postal doit inclure 5 chiffres</span>


                            </div>

                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"\">Ville</label>
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "ville", [], "any", false, false, false, 149), 'widget', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
                                <span><i class=\"zmdi zmdi-pin\"></i></span>
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"email\">Numéro téléphone : </label>
                                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "numeroTel", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control intl-tel-input", "maxlength" => "9", "onkeyup" => "Validate(this.id,\"integer\");"]]);
        echo "
                                <span id=\"messageTel\" class=\"message\">Ce numéro de téléphone n'est pas valide</span>
                            </div>

                        </div>


                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "adressMail", [], "any", false, false, false, 166), 'row', ["attr" => ["class" => "form-control", "style" => "text-transform:lowercase", "type" => "mail"]]);
        echo "

                                <span id=\"messageMail\" class=\"message\">Ceci n'est pas une adresse email valide</span>
                            </div>

                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "siret", [], "any", false, false, false, 175), 'row', ["attr" => ["class" => "form-control validate", "maxlength" => "14"]]);
        echo "

                                <span id=\"messagesiret\" class=\"message\">Un numéro siret doit inclure 14 chiffre</span>
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "franchiseEnBaseTva", [], "any", false, false, false, 183), 'row', ["attr" => ["class" => " toggleTVA button  form-control ", "data-target" => "myPopup"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "numeroTVAintracommunaitre", [], "any", false, false, false, 189), 'row', ["attr" => ["class" => "form-control validate", "maxlength" => "13"]]);
        echo "

                                <span id=\"messagenumeroTVAintracommunaitre\" class=\"message\">Un numéro TVA intracommunaitre doit étre sous la forme \"FR+11 chiffres\"</span>

                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "typeImposition", [], "any", false, false, false, 198), 'row', ["attr" => ["class" => " toggleTypeImpo button  form-control", "data-target" => "myPopup"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "categorieImposition", [], "any", false, false, false, 204), 'row', ["attr" => ["class" => " toggleCategorieImpo button  form-control", "data-target" => "myPopupCategImposition"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "regimeMicro", [], "any", false, false, false, 210), 'row', ["attr" => ["class" => " toggleRegMicro button  form-control", "data-target" => "myPopup"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\">

                            <div class=\"form-holder\">
                                ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "nomGerant", [], "any", false, false, false, 217), 'label', ["label_attr" => ["id" => "foo1"]]);
        echo "
                                ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "nomGerant", [], "any", false, false, false, 218), 'widget', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
                            </div>

                            <div class=\"form-holder\">
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "prenomGerant", [], "any", false, false, false, 222), 'label', ["label_attr" => ["id" => "foo2"]]);
        echo "
                                ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "prenomGerant", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "capital", [], "any", false, false, false, 230), 'label', ["label_attr" => ["id" => "foo2"], "label" => "% Capital"]);
        echo "

                                ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "capital", [], "any", false, false, false, 232), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span id=\"messageCapital\"
                                      class=\"message\">Ceci n'est pas une chiffre capitale valide</span>
                            </div>
                        </div>

                        ";
        // line 238
        $this->loadTemplate("dossier/Divs1pt7MiseAjour.html", "dossier/newOuvertureDossier.html.twig", 238)->display($context);
        // line 239
        echo "
                    </div>

                </section>
                <!-- SECTION 2 -->

                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">Ouverture Dossier - Step 2 -</span>
                </h2>
                <section>
                    <div class=\"inner\">

                        <form id=\"formCogerant\" class=\"form-inline\" name=\"form\" role=\"form\"
                              action=\"";
        // line 253
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ouvertureDossier");
        echo "\">
                            <div class=\"form-row fieldGroup\" id=\"p_scents\">

                                <div class=\"form-holder\">
                                    <label>Nom Cogérant </label>
                                    <input type=\"text\" class=\"form-control input-step-2\" id=\"nomCogerant(1)\"
                                           name=\"nomCogerant(1)\" style=\"text-transform: uppercase\">
                                </div>

                                <div class=\"form-holder\">
                                    <label>Prénom Cogérant </label>
                                    <input type=\"text\" class=\"form-control input-step-2\" id=\"prenomCogerant(1)\"
                                           name=\"prenomCogerant(1)\">
                                </div>

                                <div class=\"form-holder\">
                                    <label>%Capital </label>
                                    <input type=\"text\" class=\"form-control input-step-2\" id=\"capitalCogerant(1)\"
                                           name=\"capitalCogerant(1)\">
                                </div>


                            </div>

                            <input type=\"hidden\" id=\"nb_elements\" name=\"nb_elements\" value=1>

                            <button href=\"javascript:void(0)\" class=\"ui primary right floated button addMore\"
                                    type=\"button\" id=\"addCogerant\">
                                Ajouter Cogérant
                            </button>
                        </form>


                    </div>
                </section>


                <!-- SECTION 2 -->
                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">Ouverture Dossier -Step 3-</span>
                </h2>
                <section>
                    <div class=\"inner\">

                        ";
        // line 298
        $this->loadTemplate("dossier/Divs1pt8.html", "dossier/newOuvertureDossier.html.twig", 298)->display($context);
        // line 299
        echo "

                        <div class=\"form-row\">
                            <div class=\"form-holder\">
                                ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "regimeIndependants", [], "any", false, false, false, 303), 'label', ["label_attr" => ["id" => "foo3"]]);
        echo "
                                ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "regimeIndependants", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        ";
        // line 308
        $this->loadTemplate("dossier/Divs1pt8Part2.html", "dossier/newOuvertureDossier.html.twig", 308)->display($context);
        // line 309
        echo "
                    </div>
                </section>
                ";
        // line 312
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), 'form_end');
        echo "


            </div>

        </div>
    </div>
</div>



<script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.steps.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>


<!------------------------------------------------------------->
<script src=";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functionsPrincipales.js"), "html", null, true);
        echo "></script>

<script src=";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/miseAjour1-7.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions7achtiBehom.js"), "html", null, true);
        echo "></script>

<script src=";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/controleSaisie.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popUpSecteurActivite.js"), "html", null, true);
        echo "></script>

<script src=";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/multipleCogerant.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/intlTelInput.js"), "html", null, true);
        echo "\"></script>

<!-----------------------------------------API codepostale------------------------------------------------------------->
<script src=";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"), "html", null, true);
        echo "></script>

<script src=";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VilleAutoComplete.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/apiSirene.js"), "html", null, true);
        echo "></script>





<!--------------------------------------------------------------------------------------------------------------------->
<div id=\"pageMessages\">
</div>
";
        // line 353
        $this->loadTemplate("dossier/DivsPopUp.html", "dossier/newOuvertureDossier.html.twig", 353)->display($context);
        // line 354
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/newOuvertureDossier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 354,  595 => 353,  583 => 344,  579 => 343,  574 => 341,  568 => 338,  564 => 337,  559 => 335,  555 => 334,  550 => 332,  546 => 331,  541 => 329,  534 => 325,  530 => 324,  526 => 323,  512 => 312,  507 => 309,  505 => 308,  498 => 304,  494 => 303,  488 => 299,  486 => 298,  438 => 253,  422 => 239,  420 => 238,  411 => 232,  406 => 230,  396 => 223,  392 => 222,  385 => 218,  381 => 217,  371 => 210,  362 => 204,  353 => 198,  341 => 189,  332 => 183,  321 => 175,  309 => 166,  297 => 157,  286 => 149,  270 => 136,  266 => 135,  256 => 128,  246 => 121,  242 => 120,  232 => 113,  223 => 107,  214 => 101,  209 => 98,  207 => 97,  200 => 93,  178 => 74,  169 => 67,  167 => 66,  154 => 56,  147 => 51,  145 => 50,  133 => 41,  128 => 39,  123 => 37,  118 => 35,  114 => 34,  107 => 30,  103 => 29,  97 => 26,  92 => 24,  86 => 21,  82 => 20,  76 => 17,  72 => 16,  68 => 15,  62 => 12,  58 => 11,  55 => 10,  53 => 9,  43 => 1,);
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
    <!-- 5edmti-->
    {% include  'Divs/navbar.html.twig' %}

    <link rel=\"stylesheet\" href={{ asset(\"https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"css/monstylesheet.css\") }}>


    <link rel=\"stylesheet\" href={{ asset(\"css/controlesaisie.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"css/popUpAwelMat7el.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"css/tandhimLesDivs.css\") }}>

    <link rel=\"stylesheet\"
          href={{ asset(\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css\") }}>
    <!-- Font-->

    <link rel=\"stylesheet\" href={{ asset(\"css/nunito-font.css\") }}>
    <link rel=\"stylesheet\"
          href={{ asset(\"fonts/material-design-iconic-font/css/material-design-iconic-font.min.css\") }}>

    <!-- Main Style Css -->
    <link rel=\"stylesheet\" href={{ asset(\"css/style.css\") }}>
    <link rel=\"stylesheet\" href=\"{{ asset('css/intlTelInput.css') }}\">


    <!---------------Create Alerte ---------------------------------------------------------------------------------------->
    <script src={{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}></script>
    <script src={{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}></script>

    <!--- <link rel=\"stylesheet\" href={{ asset(\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\") }}> ---->

    <link rel=\"stylesheet\" href={{ asset(\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css\") }}>
    <link rel=\"stylesheet\"
          href={{ asset(\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\") }}>
    <!---------------Create Alerte ---------------------------------------------------------------------------------------->

    <!-- Page Ouverture Dossier-->

</head>


<body>
{% include 'Divs/subscribe.html' %}


<div class=\"page-content\">
    <div class=\"wizard-v5-content\">
        <div class=\"wizard-form\">
            {{ form_start(form, {'attr': {'id': 'dossier','class': 'form-register'}} ) }}
            <div id=\"form-total\">


                <!-- SECTION 3 -->
                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">CREEZ VOS DOSSIERS</span>
                </h2>

                {% include 'Divs/navigation.html' %}

                <section>
                    <div class=\"inner\">

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"\">Nom Dossier : </label>
                                {{ form_widget (form.nomDossier ,{'attr': {' class':'form-control', 'style':'text-transform:uppercase' }}) }}
                            </div>
                        </div>

                    </div>
                </section>

                <!-- SECTION 1 -->
                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">Ouverture Dossier</span>
                </h2>
                <section>

                    <div class=\"inner\">

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"\">Secteur d'activité : </label>
                                {{ form_widget(form.secteurActivite,{'attr': {'class': 'form-control'}} ) }}
                            </div>
                        </div>

                        {% include 'dossier/DivsSecteurActivite.html' %}

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.raisonSociale ,{'attr': {'class': 'form-control', 'style':'text-transform:uppercase'}} ) }}
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.formeJuridique ,{'attr': {'class': ' toggle button  form-control' , 'data-target':'myPopup'}} ) }}
                            </div>
                        </div>

                        <div class=\"form-row\" id=\"DivCapitalSocial\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.capitalSocial ,{'attr': {'class': 'form-control'}} ) }}
                            </div>
                        </div>

                        <div class=\"form-row\" id=\"DivNbAssocie\">
                            <div class=\"form-holder form-holder-2\">

                                {{ form_label(form.nbAssocies,\"Nombre d'associés\" , {'label_attr': {'class' : 'foo'}}) }}
                                {{ form_widget(form.nbAssocies ,{'attr': {'class': 'form-control'}} ) }}
                            </div>
                        </div>


                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.adressSiegeSocial ,{'attr': {'class': 'form-control'}} ) }}
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">

                                {{ form_label(form.codePostale) }}
                                {{ form_widget(form.codePostale,{'attr': {'class': 'form-control validate '  , 'maxlength':'5' }} ) }}


                                <span class=\"message\">Un code postal doit inclure 5 chiffres</span>


                            </div>

                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"\">Ville</label>
                                {{ form_widget(form.ville ,{'attr': {'class': 'form-control', 'style':'text-transform:uppercase'}} ) }}
                                <span><i class=\"zmdi zmdi-pin\"></i></span>
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                <label for=\"email\">Numéro téléphone : </label>
                                {{ form_widget(form.numeroTel ,{'attr': {'class': 'form-control intl-tel-input', 'maxlength':'9', 'onkeyup':'Validate(this.id,\"integer\");' }} ) }}
                                <span id=\"messageTel\" class=\"message\">Ce numéro de téléphone n'est pas valide</span>
                            </div>

                        </div>


                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.adressMail ,{'attr': {'class': 'form-control', 'style':'text-transform:lowercase','type':'mail'}} ) }}

                                <span id=\"messageMail\" class=\"message\">Ceci n'est pas une adresse email valide</span>
                            </div>

                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.siret ,{'attr': {'class': 'form-control validate' , 'maxlength':'14' }} ) }}

                                <span id=\"messagesiret\" class=\"message\">Un numéro siret doit inclure 14 chiffre</span>
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.franchiseEnBaseTva ,{'attr': {'class': ' toggleTVA button  form-control ' , 'data-target':'myPopup'}} ) }}
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.numeroTVAintracommunaitre ,{'attr': {'class': 'form-control validate', 'maxlength':'13'  }} ) }}

                                <span id=\"messagenumeroTVAintracommunaitre\" class=\"message\">Un numéro TVA intracommunaitre doit étre sous la forme \"FR+11 chiffres\"</span>

                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.typeImposition ,{'attr': {'class': ' toggleTypeImpo button  form-control' , 'data-target':'myPopup'}} ) }}
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.categorieImposition ,{'attr': {'class': ' toggleCategorieImpo button  form-control' , 'data-target':'myPopupCategImposition'}} ) }}
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_row(form.regimeMicro ,{'attr': {'class': ' toggleRegMicro button  form-control' , 'data-target':'myPopup'}}) }}
                            </div>
                        </div>

                        <div class=\"form-row\">

                            <div class=\"form-holder\">
                                {{ form_label(form.nomGerant ,'',{'label_attr': {'id': 'foo1',}}) }}
                                {{ form_widget(form.nomGerant ,{'attr': {'class': 'form-control', 'style':'text-transform:uppercase'}} ) }}
                            </div>

                            <div class=\"form-holder\">
                                {{ form_label(form.prenomGerant,'',{'label_attr': {'id': 'foo2'}}) }}
                                {{ form_widget(form.prenomGerant ,{'attr': {'class': 'form-control'}} ) }}
                            </div>

                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-holder form-holder-2\">
                                {{ form_label(form.capital,'% Capital',{'label_attr': {'id': 'foo2'}}) }}

                                {{ form_widget(form.capital,{'attr': {'class': 'form-control'}} ) }}
                                <span id=\"messageCapital\"
                                      class=\"message\">Ceci n'est pas une chiffre capitale valide</span>
                            </div>
                        </div>

                        {% include 'dossier/Divs1pt7MiseAjour.html' %}

                    </div>

                </section>
                <!-- SECTION 2 -->

                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">Ouverture Dossier - Step 2 -</span>
                </h2>
                <section>
                    <div class=\"inner\">

                        <form id=\"formCogerant\" class=\"form-inline\" name=\"form\" role=\"form\"
                              action=\"{{ path('ouvertureDossier') }}\">
                            <div class=\"form-row fieldGroup\" id=\"p_scents\">

                                <div class=\"form-holder\">
                                    <label>Nom Cogérant </label>
                                    <input type=\"text\" class=\"form-control input-step-2\" id=\"nomCogerant(1)\"
                                           name=\"nomCogerant(1)\" style=\"text-transform: uppercase\">
                                </div>

                                <div class=\"form-holder\">
                                    <label>Prénom Cogérant </label>
                                    <input type=\"text\" class=\"form-control input-step-2\" id=\"prenomCogerant(1)\"
                                           name=\"prenomCogerant(1)\">
                                </div>

                                <div class=\"form-holder\">
                                    <label>%Capital </label>
                                    <input type=\"text\" class=\"form-control input-step-2\" id=\"capitalCogerant(1)\"
                                           name=\"capitalCogerant(1)\">
                                </div>


                            </div>

                            <input type=\"hidden\" id=\"nb_elements\" name=\"nb_elements\" value=1>

                            <button href=\"javascript:void(0)\" class=\"ui primary right floated button addMore\"
                                    type=\"button\" id=\"addCogerant\">
                                Ajouter Cogérant
                            </button>
                        </form>


                    </div>
                </section>


                <!-- SECTION 2 -->
                <h2>
                    <span class=\"step-icon\"><i class=\"zmdi zmdi-check\"></i></span>
                    <span class=\"step-text\">Ouverture Dossier -Step 3-</span>
                </h2>
                <section>
                    <div class=\"inner\">

                        {% include 'dossier/Divs1pt8.html' %}


                        <div class=\"form-row\">
                            <div class=\"form-holder\">
                                {{ form_label(form.regimeIndependants ,'',{'label_attr': {'id': 'foo3'}}) }}
                                {{ form_widget(form.regimeIndependants ,{'attr': {'class': 'form-control'}} ) }}
                            </div>
                        </div>

                        {% include 'dossier/Divs1pt8Part2.html' %}

                    </div>
                </section>
                {{ form_end(form) }}


            </div>

        </div>
    </div>
</div>



<script src={{ asset('js/jquery-3.3.1.min.js') }}></script>
<script src={{ asset('js/jquery.steps.js') }}></script>
<script src={{ asset('js/main.js') }}></script>


<!------------------------------------------------------------->
<script src={{ asset('js/functionsPrincipales.js') }}></script>

<script src={{ asset('js/miseAjour1-7.js') }}></script>
<script src={{ asset('js/functions7achtiBehom.js') }}></script>

<script src={{ asset('js/controleSaisie.js') }}></script>
<script src={{ asset('js/popUpSecteurActivite.js') }}></script>

<script src={{ asset('js/multipleCogerant.js') }}></script>
<script src=\"{{ asset('js/intlTelInput.js') }}\"></script>

<!-----------------------------------------API codepostale------------------------------------------------------------->
<script src={{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js') }}></script>

<script src={{ asset('js/VilleAutoComplete.js') }}></script>
<script src={{ asset('js/apiSirene.js') }}></script>





<!--------------------------------------------------------------------------------------------------------------------->
<div id=\"pageMessages\">
</div>
{% include 'dossier/DivsPopUp.html' %}

</body>

</html>", "dossier/newOuvertureDossier.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\newOuvertureDossier.html.twig");
    }
}
