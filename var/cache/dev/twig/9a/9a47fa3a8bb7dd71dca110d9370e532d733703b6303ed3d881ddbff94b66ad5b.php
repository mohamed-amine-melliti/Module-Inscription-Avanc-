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

/* dossier/ouvertureDossier.html.twig */
class __TwigTemplate_86a461d997756370c2fd909994d7582b1342126f74ee1d017c68ed2cb1dd54ad extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/ouvertureDossier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/ouvertureDossier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/ouvertureDossier.html.twig", 1);
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

        echo "Hello DossierController!";
        
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
        echo "
    <head>

        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex, nofollow\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <script src=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.5.1.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functionsPrincipales.js"), "html", null, true);
        echo "></script>

        ";
        // line 19
        $this->displayBlock('scripts', $context, $blocks);
        // line 25
        echo "    </head>

    <link rel=\"stylesheet\" href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/controlesaisie.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/popUpAwelMat7el.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/tandhimLesDivs.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\"
          href=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css"), "html", null, true);
        echo ">

    <div id=\"pageMessages\">
    </div>

    <!-------------------------------------------------------------------->
    <div class=\"container\">

        <div id=\"myPopupSecteurActiviteFehaOuiWallaNon\" class=\"popup hide\">
            <div class=\"popup-header\">
                <span class=\"close toggle\" data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">close</span>
                <span class=\"close toggle\" data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">close</span>
            </div>


            <div class=\"popup-body\">

                <div id=\"msgSecteurActiviteFehaOuiWallaNon\">


                </div>
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsrSecteurActiviteFehaOuiWallaNon\" class=\"toggle button\"
                        data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">oui
                </button>
                <button id=\"jnsrSecteurActiviteFehaOuiWallaNon\" class=\"toggle button\"
                        data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">non
                </button>
            </div>

        </div>
    </div>

    <!-------------------------------------------------------------->
    <div class=\"container\">

        <div id=\"myPopupSecteurActivite\" class=\"popup hide\">
            <div class=\"popup-header\">
                <span class=\"close toggle\" data-target=\"myPopupSecteurActivite\">close</span>
                <span class=\"close toggle\" data-target=\"myPopupSecteurActivite\">close</span>
            </div>


            <div class=\"popup-body\">
                <div id=\"msgSecteurActivite\">
                </div>
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsrSecteurActivite\" class=\"toggle button\" data-target=\"myPopupSecteurActivite\">oui</button>
                <button id=\"jnsrSecteurActivite\" class=\"toggle button\" data-target=\"myPopupSecteurActivite\">non</button>
            </div>

        </div>
    </div>
    <!-------------------------------------------------------------->
    <div class=\"container\">

        <div id=\"myPopupFinal\" class=\"popup hide\">

            <div class=\"popup-header\">
                <span class=\"close toggle\" data-target=\"myPopupFinal\">close</span>
            </div>


            <div class=\"popup-body\">
                <div id=\"msgfinalefinale\">
                    \"Confirmez-vous la création du dossier ? ATTENTION VOUS ÊTES SUR LE POINT DE DECLENCHER VOTRE
                    ABONNEMENT\"

                </div>
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsrfinale\" type=\"submit\" onclick=\"submitForms()\" class=\"toggle button btn btn-primary\"
                        data-target=\"myPopupFinal\">Confirmer
                </button>
                <button id=\"jnsrfinale\" class=\"toggle button\" data-target=\"myPopupFinal\">Revenir</button>
            </div>
        </div>
    </div>



    <div class=\"container\">

        <div id=\"myPopup\" class=\"popup hide\">

            <div class=\"popup-header\">
                Message
                <span class=\"close toggle\" data-target=\"myPopup\">close</span>
            </div>

            <div class=\"popup-body\" id=\"mosalah\">
                Vous avez choisi cette option .
                <div id=\"msg\">

                </div>
                êtes-vous sûr ?
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsr\" class=\"toggle button\" data-target=\"myPopup\">Confirmer</button>
                <button id=\"jnsr\" class=\"toggle button\" data-target=\"myPopup\">Revenir</button>
            </div>
        </div>
    </div>
    <!--------------------->

    <div class=\"container\">

        <div id=\"myPopupCategImposition\" class=\"popup hide\">
            <div class=\"popup-header\">
                Message
                <span class=\"close toggle\" data-target=\"myPopupCategImposition\">close</span>
            </div>
            <div class=\"popup-body\" id=\"\">
                Vous avez choisi cette option .
                <div id=\"msgCategImposition\">

                </div>
                êtes-vous sûr ?
            </div>
            <div class=\"popup-footer\">
                <button id=\"jsrCategImposition\" class=\"toggle button\" data-target=\"myPopupCategImposition\">Confirmer
                </button>
                <button id=\"jnsrCategImposition\" class=\"toggle button\" data-target=\"myPopupCategImposition\">Revenir
                </button>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------->

    <div class=\"overlay \">
        <div class=\"modelBox animated swing\">
            <div align=\"right\"><a href=\"#\" class=\" btn-close\" style=\"color: red;\">X</a></div>
            <div class=\"mText\">

                Afin de commencer à utiliser ALDINI, veuillez compléter les champs suivants pour créer votre dossier

            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------->
    ";
        // line 179
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), 'form_start', ["attr" => ["id" => "dossier", "class" => "validate-form ms-5"]]);
        echo "

    <div class=\" col-11\">
        <div class=\"card-group\">
            <mark>

                <p style=\"color: red\"> ATTENTION ! LES INFORMATIONS RENTREES SUR CETTE PAGE DOIVENT ÊTRE EXACTES ET
                    STRICTEMENT CONFORMES AUX INFORMATIONS
                    MENTIONNEES SUR VOTRE K-BIS ET VOTRE MEMENTO FISCAL
                    CAR ELLES IMPACTENT IRREVERSIBLEMENT VOTRE COMPTABILITE
                    UNE FOIS LES INFORMATIONS VALIDEES SUR CETTE PAGE, LE DOSSIER NE SERA PLUS MODIFIABLE POUR LES
                    CHAMPS AVEC *
                </p>
            </mark>

        </div>
    </div>

    <div class=\"col-sm-3 mt-4\">
        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "secteurActivite", [], "any", false, false, false, 199), 'label', ["label_attr" => ["class" => "foo"], "label" => "Secteur d'activité"]);
        echo "
            ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "secteurActivite", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <!-------------------Divs mte3 secteur Activité ---------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaCafeResto\">
        Avec débit de tabac ?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonSecteurActivite\">
                <option value=\"\"></option>
                <option value=\"non\">non</option>
                <option onclick=\"redirect();\" value=\"oui\">oui</option>
            </select>
        </div>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaTransportPerso\">
        Exercez-vous une activité de taxi sous licence?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonTransportPerso\">
                <option value=\"\"></option>
                <option value=\"oui\">oui</option>
                <option value=\"non\">non</option>
            </select>
        </div>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaTransportPersoThenya\">
        Exercez-vous une activité de VTC, chauffeur privé ou autre transport collectif de personnes?
        <select class=\"form-control\" id=\"ouinonTransportPersoThenya\" style=\"width: 110%;\">
            <option value=\"\"></option>
            <option onclick=\"createAlert('Opps!','.','REPONSE INCOHERENTE','danger',true,false,'pageMessages');fasa5KolChaywM3ahaSecteurActivite();\"
                    value=\"non\">non
            </option>
            <option onclick=\"createAlert('Opps!','.','ATTENTION ! VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL','danger',true,false,'pageMessages');\"
                    value=\"oui\">oui
            </option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaImmobilier\">
        Exercez-vous une activité d'agent immobilier ? (différent d'une activité de SCI)
        <select class=\"form-control\" id=\"ouinonImmobilier\" style=\"width: 110%;\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option id=\"matloubaBa3din\" value=\"oui\">oui</option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaImmobilierThenya\">
        Exercez-vous uniquement une activité d'intermédiaire de vente?
        <select class=\"form-control\" id=\"ouinonImmobilierThenya\" style=\"width: 110%;\">
            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option onclick=\"createAlert('Opps!','.','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE.','danger',true,false,'pageMessages');redirect();\"
                    value=\"non\">non
            </option>
        </select>
    </div>
    <!------------------------------------------------------------------------------>


    <div class=\"col-sm-3 nopadding\">
        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"panel panel-default\">
                ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "nomDossier", [], "any", false, false, false, 264), 'widget', ["attr" => [" class" => "nom-dossier", "style" => "text-transform:uppercase"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "raisonSociale", [], "any", false, false, false, 269), 'row', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "formeJuridique", [], "any", false, false, false, 274), 'row', ["attr" => ["class" => " toggle button  form-control", "data-target" => "myPopup"]]);
        echo "


            <link rel=\"stylesheet\" href=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/intlTelInput.css"), "html", null, true);
        echo "\">

            <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/intlTelInput.js"), "html", null, true);
        echo "\"></script>


        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "capitalSocial", [], "any", false, false, false, 286), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "nbAssocies", [], "any", false, false, false, 292), 'label', ["label_attr" => ["class" => "foo"], "label" => "Nombre d'associés"]);
        echo "
            ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "nbAssocies", [], "any", false, false, false, 293), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "adressSiegeSocial", [], "any", false, false, false, 299), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div id=\"hediDivMte3codePostale\" class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%;  float: left; \">

                ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "codePostale", [], "any", false, false, false, 307), 'label');
        echo "
                ";
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "codePostale", [], "any", false, false, false, 308), 'widget', ["attr" => ["class" => "form-control validate ", "maxlength" => "5"]]);
        echo "

            </div>


            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span class=\"message\" id=\"messageCodePostale\">Un code postal doit inclure 5 chiffres</span>
            </div>


        </div>


        <div id=\"hediDivMte3Ville\" class=\"form-group\" style=\"width: 110%; margin-bottom: 56px\">
            ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "ville", [], "any", false, false, false, 322), 'label');
        echo "
            ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "ville", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"col\">
                ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "numeroTel", [], "any", false, false, false, 329), 'label');
        echo "
            </div>

            <div class=\"form-group\" style=\"width: 110%;\">
                ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "numeroTel", [], "any", false, false, false, 333), 'widget', ["attr" => ["class" => "form-control intl-tel-input", "maxlength" => "9", "onkeyup" => "Validate(this.id,\"integer\");"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messageTel\" class=\"message\">Ce numéro de téléphone n'est pas valide</span>
            </div>
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%; height: 100px; float: left;\">
                ";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "adressMail", [], "any", false, false, false, 345), 'row', ["attr" => ["class" => "form-control", "style" => "text-transform:lowercase", "type" => "mail"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messageMail\" class=\"message\">Ceci n'est pas une adresse email valide</span>
            </div>

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            <div style=\"width: 100%; height: 100px; float: left;\">
                ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "siret", [], "any", false, false, false, 356), 'row', ["attr" => ["class" => "form-control validate", "maxlength" => "14"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messagesiret\" class=\"message\">Un numéro siret doit inclure 14 chiffre</span>
            </div>
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "franchiseEnBaseTva", [], "any", false, false, false, 367), 'row', ["attr" => ["class" => " toggleTVA button  form-control ", "data-target" => "myPopup"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%; height: 100px; float: left;\">
                ";
        // line 374
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "numeroTVAintracommunaitre", [], "any", false, false, false, 374), 'row', ["attr" => ["class" => "form-control validate", "maxlength" => "13"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messagenumeroTVAintracommunaitre\" class=\"message\">Un numéro TVA intracommunaitre doit étre sous la forme \"FR+11 chiffres\"</span>
            </div>
        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "typeImposition", [], "any", false, false, false, 384), 'row', ["attr" => ["class" => " toggleTypeImpo button  form-control", "data-target" => "myPopup"]]);
        echo "

        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "categorieImposition", [], "any", false, false, false, 391), 'row', ["attr" => ["class" => " toggleCategorieImpo button  form-control", "data-target" => "myPopupCategImposition"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "regimeMicro", [], "any", false, false, false, 397), 'row', ["attr" => ["class" => " toggleRegMicro button  form-control", "data-target" => "myPopup"]]);
        echo "

        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "nomGerant", [], "any", false, false, false, 404), 'label', ["label_attr" => ["id" => "foo1"]]);
        echo "
            ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "nomGerant", [], "any", false, false, false, 405), 'widget', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 411
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "prenomGerant", [], "any", false, false, false, 411), 'label', ["label_attr" => ["id" => "foo2"]]);
        echo "
            ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "prenomGerant", [], "any", false, false, false, 412), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 418
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "capital", [], "any", false, false, false, 418), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
            <span id=\"messageCapital\" class=\"message\">Ceci n'est pas une chiffre capitale valide</span>
        </div>


    </div>


    <div id=\"education_fields\">

    </div>


    <!------------------------------------------------------------------------>
    <div id=\"rubrique\" class=\"dynamic-field\" id=\"dynamic-field-1\">
        <div class=\"row\">
            <div class=\"col-sm-3 nopadding\">

                <ul class=\"Cogerants\" id=\"cemenu\"
                    data-index=\"";
        // line 441
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "coGerant", [], "any", false, false, false, 441)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 441, $this->source); })()), "coGerant", [], "any", false, false, false, 441)), "vars", [], "any", false, false, false, 441), "name", [], "any", false, false, false, 441) + 1), "html", null, true))) : (print (0)));
        echo "\"
                    data-prototype=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 442, $this->source); })()), "coGerant", [], "any", false, false, false, 442), "vars", [], "any", false, false, false, 442), "prototype", [], "any", false, false, false, 442), 'widget'), "html_attr");
        echo "\">
                    ";
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "coGerant", [], "any", false, false, false, 443));
        foreach ($context['_seq'] as $context["_key"] => $context["Cogerant"]) {
            // line 444
            echo "
                        <li>
                            ";
            // line 446
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["Cogerant"], "nomCogerant", [], "any", false, false, false, 446), 'row', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
            echo "
                        </li>

                        <li>
                            ";
            // line 450
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["Cogerant"], "prenomCogerant", [], "any", false, false, false, 450), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                        </li>

                        <li>
                            ";
            // line 454
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["Cogerant"], "participation", [], "any", false, false, false, 454), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                        </li>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cogerant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "
                </ul>
                <button id=\"ajouterCogerant\" type=\"button\" class=\"add_item_link\"
                        data-collection-holder-class=\"Cogerants\">Ajouter co-gérant
                </button>
            </div>
        </div>
    </div>


    <div class=\"col-sm-3\" id=\"miseAjourSCIakaho\">
        Le gérant et co-gérant(s) sont-ils rémunérés ?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonSCIrenumeres\">
                <option value=\"\"></option>
                <option value=\"non\">non</option>
                <option onclick=\"\" value=\"oui\">oui</option>
            </select>
        </div>
    </div>


    <div class=\"col-sm-3\" id=\"miseAjourSCISARL\">
        Le gérant et co-gérant(s) sont-ils associés ?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonSCISARL\">
                <option value=\"\"></option>
                <option value=\"non\">non</option>
                <option onclick=\"\" value=\"oui\">oui</option>
            </select>
        </div>
    </div>



    <div class=\"col-sm-3 nopadding\">
        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 495, $this->source); })()), "regimeIndependants", [], "any", false, false, false, 495), 'label', ["label_attr" => ["id" => "foo3"]]);
        echo "
            ";
        // line 496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 496, $this->source); })()), "regimeIndependants", [], "any", false, false, false, 496), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>


    <button id=\"finalbutton\" class=\"btn btn-primary\" data-target=\"myPopupFinal\">Finaliser</button>
    ";
        // line 502
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 502, $this->source); })()), 'form_end');
        echo "

    <!----------------HNE TOUFA ELFORM--------------------------->

    <div class=\"col-sm-3 nopadding\">
        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"input-group\">

                <!----<div class=\"input-group-btn\">
                    <button class=\"btn btn-success\" type=\"button\"  onclick=\"education_fields();\"> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </button>
                </div>--->
            </div>
        </div>
    </div>
    <div class=\"clear\"></div>

    </div>


    <!----------------SAISIE ------------------------------------->

    <script>

        submitForms = function () {
            document.forms[0].submit();
            document.forms[1].submit();
        }

    </script>

    <script>
        const addFormToCollection = (e) => {
            const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

            const item = document.createElement('li');
            item.innerHTML = collectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    collectionHolder.dataset.index
                );

            collectionHolder.appendChild(item);
            addTagFormDeleteLink(item);


            collectionHolder.dataset.index++;

        };
    </script>
    <script>

        document.querySelectorAll('.add_item_link').forEach(btn => {
            btn.addEventListener(\"click\", addFormToCollection)
        });
    </script>

    <script>
        const addTagFormDeleteLink = (item) => {
            const removeFormButton = document.createElement('button');
            removeFormButton.innerText = 'Supprimer cogérant';

            item.append(removeFormButton);

            removeFormButton.addEventListener('click', (e) => {
                e.preventDefault();
                // remove the li for the tag form
                item.remove();
            });
        }
    </script>


    <script>
        document
            .querySelectorAll('ul.Cogerants ')
            .forEach((Cogerant) => {
                addTagFormDeleteLink(Cogerant)
            })

    </script>

    <script type=\"text/javascript\">
        window.alert = function () {
        };
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) \$('head > link').filter(':first').replaceWith('<link rel=\"stylesheet\" href=\"' + css + '\" type=\"text/css\" />');
            else \$('head > link').filter(':first').replaceWith(defaultCSS);
        }

        \$(document).ready(function () {
            var iframe_height = parseInt(\$('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });

    </script>
    <script>


        var room = 1;

        function education_fields() {

            room++;
            var objTo = document.getElementById('education_fields')
            var divtest = document.createElement(\"div\");
            divtest.setAttribute(\"class\", \"form-group removeclass\" + room);
            var rdiv = 'removeclass' + room;
            divtest.innerHTML = '<div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"> <input type=\"text\" class=\"form-control\" id=\"Schoolname\" name=\"Schoolname[]\" value=\"\" placeholder=\"Nom cogerant\"></div></div><div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"> <input type=\"text\" class=\"form-control\" id=\"Major\" name=\"Major[]\" value=\"\" placeholder=\"Prenom cogerant\"></div></div><div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"> <input type=\"text\" class=\"form-control\" id=\"Degree\" name=\"Degree[]\" value=\"\" placeholder=\"Participation\"></div></div><div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"><div class=\"input-group\"> <div class=\"input-group-btn\"> <button class=\"btn btn-danger\" type=\"button\" onclick=\"remove_education_fields(' + room + ');\"> <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span> </button></div></div></div></div><div class=\"clear\"></div>';

            objTo.appendChild(divtest)
        }

        function remove_education_fields(rid) {
            \$('.removeclass' + rid).remove();
        }
    </script>

    <!------------------------------------------------------------->
    <script src=";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popUpAwelMat7el.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/miseAjour1-7.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/controleSaisie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions7achtiBehom.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popUpSecteurActivite.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/multipleCogerant.js"), "html", null, true);
        echo "></script>
    <!-----------------------------------------API codepostale--------------------------------------- --------------------->

    <script src=";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.1.1.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"), "html", null, true);
        echo "></script>
    <link rel=\"stylesheet\" href=";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/monstylesheet.css"), "html", null, true);
        echo ">
    <script src=";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VilleAutoComplete.js"), "html", null, true);
        echo "></script>

    <!------------------------------------------------------------------------------------------------------->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 20
        echo "
            <script src=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-1.10.2.min.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"), "html", null, true);
        echo "></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dossier/ouvertureDossier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  929 => 22,  925 => 21,  922 => 20,  912 => 19,  897 => 636,  893 => 635,  889 => 634,  885 => 633,  881 => 632,  875 => 629,  871 => 628,  867 => 627,  863 => 626,  859 => 625,  855 => 624,  730 => 502,  721 => 496,  717 => 495,  678 => 458,  668 => 454,  661 => 450,  654 => 446,  650 => 444,  646 => 443,  642 => 442,  638 => 441,  612 => 418,  603 => 412,  599 => 411,  590 => 405,  586 => 404,  576 => 397,  567 => 391,  557 => 384,  544 => 374,  534 => 367,  520 => 356,  506 => 345,  491 => 333,  484 => 329,  475 => 323,  471 => 322,  454 => 308,  450 => 307,  439 => 299,  430 => 293,  426 => 292,  417 => 286,  407 => 279,  402 => 277,  396 => 274,  388 => 269,  380 => 264,  313 => 200,  309 => 199,  286 => 179,  136 => 32,  132 => 31,  127 => 29,  123 => 28,  119 => 27,  115 => 25,  113 => 19,  108 => 17,  104 => 16,  100 => 15,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DossierController!{% endblock %}

{% block body %}

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex, nofollow\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


        <script src={{ asset('https://code.jquery.com/jquery-3.5.1.min.js') }}></script>
        <script src={{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}></script>
        <script src={{ asset('js/functionsPrincipales.js') }}></script>

        {% block scripts %}

            <script src={{ asset('https://code.jquery.com/jquery-1.10.2.min.js') }}></script>
            <script src={{ asset(\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\") }}></script>

        {% endblock %}
    </head>

    <link rel=\"stylesheet\" href={{ asset(\"css/controlesaisie.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"css/popUpAwelMat7el.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"css/tandhimLesDivs.css\") }}>
    <link rel=\"stylesheet\"
          href={{ asset(\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css\") }}>

    <div id=\"pageMessages\">
    </div>

    <!-------------------------------------------------------------------->
    <div class=\"container\">

        <div id=\"myPopupSecteurActiviteFehaOuiWallaNon\" class=\"popup hide\">
            <div class=\"popup-header\">
                <span class=\"close toggle\" data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">close</span>
                <span class=\"close toggle\" data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">close</span>
            </div>


            <div class=\"popup-body\">

                <div id=\"msgSecteurActiviteFehaOuiWallaNon\">


                </div>
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsrSecteurActiviteFehaOuiWallaNon\" class=\"toggle button\"
                        data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">oui
                </button>
                <button id=\"jnsrSecteurActiviteFehaOuiWallaNon\" class=\"toggle button\"
                        data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">non
                </button>
            </div>

        </div>
    </div>

    <!-------------------------------------------------------------->
    <div class=\"container\">

        <div id=\"myPopupSecteurActivite\" class=\"popup hide\">
            <div class=\"popup-header\">
                <span class=\"close toggle\" data-target=\"myPopupSecteurActivite\">close</span>
                <span class=\"close toggle\" data-target=\"myPopupSecteurActivite\">close</span>
            </div>


            <div class=\"popup-body\">
                <div id=\"msgSecteurActivite\">
                </div>
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsrSecteurActivite\" class=\"toggle button\" data-target=\"myPopupSecteurActivite\">oui</button>
                <button id=\"jnsrSecteurActivite\" class=\"toggle button\" data-target=\"myPopupSecteurActivite\">non</button>
            </div>

        </div>
    </div>
    <!-------------------------------------------------------------->
    <div class=\"container\">

        <div id=\"myPopupFinal\" class=\"popup hide\">

            <div class=\"popup-header\">
                <span class=\"close toggle\" data-target=\"myPopupFinal\">close</span>
            </div>


            <div class=\"popup-body\">
                <div id=\"msgfinalefinale\">
                    \"Confirmez-vous la création du dossier ? ATTENTION VOUS ÊTES SUR LE POINT DE DECLENCHER VOTRE
                    ABONNEMENT\"

                </div>
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsrfinale\" type=\"submit\" onclick=\"submitForms()\" class=\"toggle button btn btn-primary\"
                        data-target=\"myPopupFinal\">Confirmer
                </button>
                <button id=\"jnsrfinale\" class=\"toggle button\" data-target=\"myPopupFinal\">Revenir</button>
            </div>
        </div>
    </div>



    <div class=\"container\">

        <div id=\"myPopup\" class=\"popup hide\">

            <div class=\"popup-header\">
                Message
                <span class=\"close toggle\" data-target=\"myPopup\">close</span>
            </div>

            <div class=\"popup-body\" id=\"mosalah\">
                Vous avez choisi cette option .
                <div id=\"msg\">

                </div>
                êtes-vous sûr ?
            </div>

            <div class=\"popup-footer\">
                <button id=\"jsr\" class=\"toggle button\" data-target=\"myPopup\">Confirmer</button>
                <button id=\"jnsr\" class=\"toggle button\" data-target=\"myPopup\">Revenir</button>
            </div>
        </div>
    </div>
    <!--------------------->

    <div class=\"container\">

        <div id=\"myPopupCategImposition\" class=\"popup hide\">
            <div class=\"popup-header\">
                Message
                <span class=\"close toggle\" data-target=\"myPopupCategImposition\">close</span>
            </div>
            <div class=\"popup-body\" id=\"\">
                Vous avez choisi cette option .
                <div id=\"msgCategImposition\">

                </div>
                êtes-vous sûr ?
            </div>
            <div class=\"popup-footer\">
                <button id=\"jsrCategImposition\" class=\"toggle button\" data-target=\"myPopupCategImposition\">Confirmer
                </button>
                <button id=\"jnsrCategImposition\" class=\"toggle button\" data-target=\"myPopupCategImposition\">Revenir
                </button>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------->

    <div class=\"overlay \">
        <div class=\"modelBox animated swing\">
            <div align=\"right\"><a href=\"#\" class=\" btn-close\" style=\"color: red;\">X</a></div>
            <div class=\"mText\">

                Afin de commencer à utiliser ALDINI, veuillez compléter les champs suivants pour créer votre dossier

            </div>
        </div>
    </div>

    <!-------------------------------------------------------------------->
    {{ form_start(form , {'attr': {'id': 'dossier','class': 'validate-form ms-5'}}) }}

    <div class=\" col-11\">
        <div class=\"card-group\">
            <mark>

                <p style=\"color: red\"> ATTENTION ! LES INFORMATIONS RENTREES SUR CETTE PAGE DOIVENT ÊTRE EXACTES ET
                    STRICTEMENT CONFORMES AUX INFORMATIONS
                    MENTIONNEES SUR VOTRE K-BIS ET VOTRE MEMENTO FISCAL
                    CAR ELLES IMPACTENT IRREVERSIBLEMENT VOTRE COMPTABILITE
                    UNE FOIS LES INFORMATIONS VALIDEES SUR CETTE PAGE, LE DOSSIER NE SERA PLUS MODIFIABLE POUR LES
                    CHAMPS AVEC *
                </p>
            </mark>

        </div>
    </div>

    <div class=\"col-sm-3 mt-4\">
        <div class=\"form-group\" style=\"width: 110%;\">
            {{ form_label(form.secteurActivite,\"Secteur d'activité\" , {'label_attr': {'class' : 'foo'}}) }}
            {{ form_widget(form.secteurActivite,{'attr': {'class': 'form-control'}} ) }}
        </div>
    </div>
    <!-------------------Divs mte3 secteur Activité ---------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaCafeResto\">
        Avec débit de tabac ?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonSecteurActivite\">
                <option value=\"\"></option>
                <option value=\"non\">non</option>
                <option onclick=\"redirect();\" value=\"oui\">oui</option>
            </select>
        </div>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaTransportPerso\">
        Exercez-vous une activité de taxi sous licence?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonTransportPerso\">
                <option value=\"\"></option>
                <option value=\"oui\">oui</option>
                <option value=\"non\">non</option>
            </select>
        </div>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaTransportPersoThenya\">
        Exercez-vous une activité de VTC, chauffeur privé ou autre transport collectif de personnes?
        <select class=\"form-control\" id=\"ouinonTransportPersoThenya\" style=\"width: 110%;\">
            <option value=\"\"></option>
            <option onclick=\"createAlert('Opps!','.','REPONSE INCOHERENTE','danger',true,false,'pageMessages');fasa5KolChaywM3ahaSecteurActivite();\"
                    value=\"non\">non
            </option>
            <option onclick=\"createAlert('Opps!','.','ATTENTION ! VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL','danger',true,false,'pageMessages');\"
                    value=\"oui\">oui
            </option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaImmobilier\">
        Exercez-vous une activité d'agent immobilier ? (différent d'une activité de SCI)
        <select class=\"form-control\" id=\"ouinonImmobilier\" style=\"width: 110%;\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option id=\"matloubaBa3din\" value=\"oui\">oui</option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaImmobilierThenya\">
        Exercez-vous uniquement une activité d'intermédiaire de vente?
        <select class=\"form-control\" id=\"ouinonImmobilierThenya\" style=\"width: 110%;\">
            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option onclick=\"createAlert('Opps!','.','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE.','danger',true,false,'pageMessages');redirect();\"
                    value=\"non\">non
            </option>
        </select>
    </div>
    <!------------------------------------------------------------------------------>


    <div class=\"col-sm-3 nopadding\">
        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"panel panel-default\">
                {{ form_widget (form.nomDossier ,{'attr': {' class':'nom-dossier', 'style':'text-transform:uppercase' }}) }}
            </div>
        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            {{ form_row(form.raisonSociale ,{'attr': {'class': 'form-control', 'style':'text-transform:uppercase',}} ) }}
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            {{ form_row(form.formeJuridique ,{'attr': {'class': ' toggle button  form-control' , 'data-target':'myPopup'}} ) }}


            <link rel=\"stylesheet\" href=\"{{ asset('css/intlTelInput.css') }}\">

            <script src=\"{{ asset('js/intlTelInput.js') }}\"></script>


        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_row(form.capitalSocial ,{'attr': {'class': 'form-control'}} ) }}

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_label(form.nbAssocies,\"Nombre d'associés\" , {'label_attr': {'class' : 'foo'}}) }}
            {{ form_widget(form.nbAssocies ,{'attr': {'class': 'form-control'}} ) }}

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_row(form.adressSiegeSocial ,{'attr': {'class': 'form-control'}} ) }}

        </div>

        <div id=\"hediDivMte3codePostale\" class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%;  float: left; \">

                {{ form_label(form.codePostale) }}
                {{ form_widget(form.codePostale,{'attr': {'class': 'form-control validate '  , 'maxlength':'5' }} ) }}

            </div>


            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span class=\"message\" id=\"messageCodePostale\">Un code postal doit inclure 5 chiffres</span>
            </div>


        </div>


        <div id=\"hediDivMte3Ville\" class=\"form-group\" style=\"width: 110%; margin-bottom: 56px\">
            {{ form_label(form.ville) }}
            {{ form_widget(form.ville ,{'attr': {'class': 'form-control', 'style':'text-transform:uppercase'}} ) }}
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"col\">
                {{ form_label(form.numeroTel) }}
            </div>

            <div class=\"form-group\" style=\"width: 110%;\">
                {{ form_widget(form.numeroTel ,{'attr': {'class': 'form-control intl-tel-input', 'maxlength':'9', 'onkeyup':'Validate(this.id,\"integer\");' }} ) }}
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messageTel\" class=\"message\">Ce numéro de téléphone n'est pas valide</span>
            </div>
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%; height: 100px; float: left;\">
                {{ form_row(form.adressMail ,{'attr': {'class': 'form-control', 'style':'text-transform:lowercase','type':'mail'}} ) }}
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messageMail\" class=\"message\">Ceci n'est pas une adresse email valide</span>
            </div>

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            <div style=\"width: 100%; height: 100px; float: left;\">
                {{ form_row(form.siret ,{'attr': {'class': 'form-control validate' , 'maxlength':'14' }} ) }}
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messagesiret\" class=\"message\">Un numéro siret doit inclure 14 chiffre</span>
            </div>
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_row(form.franchiseEnBaseTva ,{'attr': {'class': ' toggleTVA button  form-control ' , 'data-target':'myPopup'}} ) }}

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%; height: 100px; float: left;\">
                {{ form_row(form.numeroTVAintracommunaitre ,{'attr': {'class': 'form-control validate', 'maxlength':'13'  }} ) }}
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messagenumeroTVAintracommunaitre\" class=\"message\">Un numéro TVA intracommunaitre doit étre sous la forme \"FR+11 chiffres\"</span>
            </div>
        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_row(form.typeImposition ,{'attr': {'class': ' toggleTypeImpo button  form-control' , 'data-target':'myPopup'}} ) }}

        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_row(form.categorieImposition ,{'attr': {'class': ' toggleCategorieImpo button  form-control' , 'data-target':'myPopupCategImposition'}} ) }}

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_row(form.regimeMicro ,{'attr': {'class': ' toggleRegMicro button  form-control' , 'data-target':'myPopup'}}) }}

        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_label(form.nomGerant ,'',{'label_attr': {'id': 'foo1',}}) }}
            {{ form_widget(form.nomGerant ,{'attr': {'class': 'form-control', 'style':'text-transform:uppercase'}} ) }}

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_label(form.prenomGerant,'',{'label_attr': {'id': 'foo2'}}) }}
            {{ form_widget(form.prenomGerant ,{'attr': {'class': 'form-control'}} ) }}

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            {{ form_row(form.capital,{'attr': {'class': 'form-control'}} ) }}

        </div>

        <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
            <span id=\"messageCapital\" class=\"message\">Ceci n'est pas une chiffre capitale valide</span>
        </div>


    </div>


    <div id=\"education_fields\">

    </div>


    <!------------------------------------------------------------------------>
    <div id=\"rubrique\" class=\"dynamic-field\" id=\"dynamic-field-1\">
        <div class=\"row\">
            <div class=\"col-sm-3 nopadding\">

                <ul class=\"Cogerants\" id=\"cemenu\"
                    data-index=\"{{ form.coGerant|length > 0 ? form.coGerant|last.vars.name + 1 : 0 }}\"
                    data-prototype=\"{{ form_widget(form.coGerant.vars.prototype)|e('html_attr') }}\">
                    {% for Cogerant in form.coGerant %}

                        <li>
                            {{ form_row(Cogerant.nomCogerant,{'attr': {'class': 'form-control', 'style':'text-transform:uppercase'}}) }}
                        </li>

                        <li>
                            {{ form_row(Cogerant.prenomCogerant,{'attr': {'class': 'form-control'}}) }}
                        </li>

                        <li>
                            {{ form_row(Cogerant.participation,{'attr': {'class': 'form-control'}}) }}
                        </li>

                    {% endfor %}

                </ul>
                <button id=\"ajouterCogerant\" type=\"button\" class=\"add_item_link\"
                        data-collection-holder-class=\"Cogerants\">Ajouter co-gérant
                </button>
            </div>
        </div>
    </div>


    <div class=\"col-sm-3\" id=\"miseAjourSCIakaho\">
        Le gérant et co-gérant(s) sont-ils rémunérés ?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonSCIrenumeres\">
                <option value=\"\"></option>
                <option value=\"non\">non</option>
                <option onclick=\"\" value=\"oui\">oui</option>
            </select>
        </div>
    </div>


    <div class=\"col-sm-3\" id=\"miseAjourSCISARL\">
        Le gérant et co-gérant(s) sont-ils associés ?
        <div class=\"form-group\" style=\"width: 110%;\">
            <select class=\"form-control\" id=\"ouinonSCISARL\">
                <option value=\"\"></option>
                <option value=\"non\">non</option>
                <option onclick=\"\" value=\"oui\">oui</option>
            </select>
        </div>
    </div>



    <div class=\"col-sm-3 nopadding\">
        <div class=\"form-group\" style=\"width: 110%;\">
            {{ form_label(form.regimeIndependants ,'',{'label_attr': {'id': 'foo3'}}) }}
            {{ form_widget(form.regimeIndependants ,{'attr': {'class': 'form-control'}} ) }}
        </div>
    </div>


    <button id=\"finalbutton\" class=\"btn btn-primary\" data-target=\"myPopupFinal\">Finaliser</button>
    {{ form_end(form) }}

    <!----------------HNE TOUFA ELFORM--------------------------->

    <div class=\"col-sm-3 nopadding\">
        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"input-group\">

                <!----<div class=\"input-group-btn\">
                    <button class=\"btn btn-success\" type=\"button\"  onclick=\"education_fields();\"> <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> </button>
                </div>--->
            </div>
        </div>
    </div>
    <div class=\"clear\"></div>

    </div>


    <!----------------SAISIE ------------------------------------->

    <script>

        submitForms = function () {
            document.forms[0].submit();
            document.forms[1].submit();
        }

    </script>

    <script>
        const addFormToCollection = (e) => {
            const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

            const item = document.createElement('li');
            item.innerHTML = collectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    collectionHolder.dataset.index
                );

            collectionHolder.appendChild(item);
            addTagFormDeleteLink(item);


            collectionHolder.dataset.index++;

        };
    </script>
    <script>

        document.querySelectorAll('.add_item_link').forEach(btn => {
            btn.addEventListener(\"click\", addFormToCollection)
        });
    </script>

    <script>
        const addTagFormDeleteLink = (item) => {
            const removeFormButton = document.createElement('button');
            removeFormButton.innerText = 'Supprimer cogérant';

            item.append(removeFormButton);

            removeFormButton.addEventListener('click', (e) => {
                e.preventDefault();
                // remove the li for the tag form
                item.remove();
            });
        }
    </script>


    <script>
        document
            .querySelectorAll('ul.Cogerants ')
            .forEach((Cogerant) => {
                addTagFormDeleteLink(Cogerant)
            })

    </script>

    <script type=\"text/javascript\">
        window.alert = function () {
        };
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) \$('head > link').filter(':first').replaceWith('<link rel=\"stylesheet\" href=\"' + css + '\" type=\"text/css\" />');
            else \$('head > link').filter(':first').replaceWith(defaultCSS);
        }

        \$(document).ready(function () {
            var iframe_height = parseInt(\$('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });

    </script>
    <script>


        var room = 1;

        function education_fields() {

            room++;
            var objTo = document.getElementById('education_fields')
            var divtest = document.createElement(\"div\");
            divtest.setAttribute(\"class\", \"form-group removeclass\" + room);
            var rdiv = 'removeclass' + room;
            divtest.innerHTML = '<div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"> <input type=\"text\" class=\"form-control\" id=\"Schoolname\" name=\"Schoolname[]\" value=\"\" placeholder=\"Nom cogerant\"></div></div><div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"> <input type=\"text\" class=\"form-control\" id=\"Major\" name=\"Major[]\" value=\"\" placeholder=\"Prenom cogerant\"></div></div><div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"> <input type=\"text\" class=\"form-control\" id=\"Degree\" name=\"Degree[]\" value=\"\" placeholder=\"Participation\"></div></div><div class=\"col-sm-3 nopadding\"><div class=\"form-group\" style=\"width: 110%;\"><div class=\"input-group\"> <div class=\"input-group-btn\"> <button class=\"btn btn-danger\" type=\"button\" onclick=\"remove_education_fields(' + room + ');\"> <span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span> </button></div></div></div></div><div class=\"clear\"></div>';

            objTo.appendChild(divtest)
        }

        function remove_education_fields(rid) {
            \$('.removeclass' + rid).remove();
        }
    </script>

    <!------------------------------------------------------------->
    <script src={{ asset('js/popUpAwelMat7el.js') }}></script>
    <script src={{ asset('js/miseAjour1-7.js') }}></script>
    <script src={{ asset('js/controleSaisie.js') }}></script>
    <script src={{ asset('js/functions7achtiBehom.js') }}></script>
    <script src={{ asset('js/popUpSecteurActivite.js') }}></script>
    <script src={{ asset('js/multipleCogerant.js') }}></script>
    <!-----------------------------------------API codepostale--------------------------------------- --------------------->

    <script src={{ asset('https://code.jquery.com/jquery-3.1.1.min.js') }}></script>
    <script src={{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js') }}></script>
    <link rel=\"stylesheet\" href={{ asset(\"https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css\") }}>
    <link rel=\"stylesheet\" href={{ asset(\"css/monstylesheet.css\") }}>
    <script src={{ asset('js/VilleAutoComplete.js') }}></script>

    <!------------------------------------------------------------------------------------------------------->

{% endblock %}", "dossier/ouvertureDossier.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\ouvertureDossier.html.twig");
    }
}
