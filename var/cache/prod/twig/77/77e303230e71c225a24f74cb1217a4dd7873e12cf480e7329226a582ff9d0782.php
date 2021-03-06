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

/* divs7achtiBehom.html.twig */
class __TwigTemplate_508edab10728b33f63cc081f33c91a7d216d71ea33fbb212cbe73344c30a2eab extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "divs7achtiBehom.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello DossierController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <head>

        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex, nofollow\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 13
        $this->displayBlock('scripts', $context, $blocks);
        // line 57
        echo "    </head>

    <style>


        form-control {
            padding: 50px 50px 0;
            margin: 0 auto;
            width: 300px;
        }
    </style>

    <style>
        #pageMessages {
            position: fixed;
            bottom: 15px;
            right: 15px;
            width: 30%;
        }

        .alert {
            position: relative;
        }

        .alert .close {
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 1em;
        }

        .alert .fa {
            margin-right: .3em;
        }
    </style>


    <script src=";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/controleSaisie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functions7achtiBehom.js"), "html", null, true);
        echo "></script>

    <script src=";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popUpSecteurActivite.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"), "html", null, true);
        echo "></script>

    <script src=";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/VilleAutoComplete.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://vicopo.selfbuild.fr/vicopo-jquery.min.js"), "html", null, true);
        echo "></script>


    <link rel=\"stylesheet\" href=";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/controlesaisie.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/tandhimLesDivs.css"), "html", null, true);
        echo ">

    <link rel=\"stylesheet\"
          href=";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css"), "html", null, true);
        echo ">


    <script>
        function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
            var iconMap = {
                info: \"fa fa-info-circle\",
                success: \"fa fa-thumbs-up\",
                warning: \"fa fa-exclamation-triangle\",
                danger: \"fa ffa fa-exclamation-circle\"
            };

            autoDismiss = true;
            var iconAdded = false;

            var alertClasses = [\"alert\", \"animated\", \"flipInX\"];
            alertClasses.push(\"alert-\" + severity.toLowerCase());

            if (dismissible) {
                alertClasses.push(\"alert-dismissible\");
            }

            var msgIcon = \$(\"<i />\", {
                \"class\": iconMap[severity] // you need to quote \"class\" since it's a reserved keyword
            });

            var msg = \$(\"<div />\", {
                \"class\": alertClasses.join(\" \") // you need to quote \"class\" since it's a reserved keyword
            });

            if (title) {
                var msgTitle = \$(\"<h4 />\", {
                    html: title
                }).appendTo(msg);

                if (!iconAdded) {
                    msgTitle.prepend(msgIcon);
                    iconAdded = true;
                }
            }

            if (summary) {
                var msgSummary = \$(\"<strong />\", {
                    html: summary
                }).appendTo(msg);

                if (!iconAdded) {
                    msgSummary.prepend(msgIcon);
                    iconAdded = true;
                }
            }

            if (details) {
                var msgDetails = \$(\"<p />\", {
                    html: details
                }).appendTo(msg);

                if (!iconAdded) {
                    msgDetails.prepend(msgIcon);
                    iconAdded = true;
                }
            }


            if (dismissible) {
                var msgClose = \$(\"<span />\", {
                    \"class\": \"close\", // you need to quote \"class\" since it's a reserved keyword
                    \"data-dismiss\": \"alert\",
                    html: \"<i class='fa fa-times-circle'></i>\"
                }).appendTo(msg);
            }

            \$('#' + appendToId).prepend(msg);

            if (autoDismiss) {
                setTimeout(function () {
                    msg.addClass(\"flipOutX\");
                    setTimeout(function () {
                        msg.remove();
                    }, 2000);
                }, 2000);
            }
        }

    </script>

    <div id=\"pageMessages\">
    </div>
    <style>

        .container {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
        }

        .container2 {
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -100px;
        }

        #msgfinalefinale {

            color: red;
        }

        #mosalah {

            color: red;
        }
    </style>
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
                        data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">OUI
                </button>
                <button id=\"jnsrSecteurActiviteFehaOuiWallaNon\" class=\"toggle button\"
                        data-target=\"myPopupSecteurActiviteFehaOuiWallaNon\">NON
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
                <button id=\"jsrSecteurActivite\" class=\"toggle button\" data-target=\"myPopupSecteurActivite\">OUI</button>
                <button id=\"jnsrSecteurActivite\" class=\"toggle button\" data-target=\"myPopupSecteurActivite\">NON</button>
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
                    \"Confirmez-vous la cr??ation du dossier ? ATTENTION VOUS ??TES SUR LE POINT DE DECLENCHER VOTRE
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
                Etes-vous s??r ?
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
                Etes-vous s??r ?
            </div>
            <div class=\"popup-footer\">
                <button id=\"jsrCategImposition\" class=\"toggle button\" data-target=\"myPopupCategImposition\">Confirmer
                </button>
                <button id=\"jnsrCategImposition\" class=\"toggle button\" data-target=\"myPopupCategImposition\">Revenir
                </button>
            </div>
        </div>
    </div>
    <!-------------------->
    <div class=\"m\"
    ";
        // line 354
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "dossier", "class" => "validate-form"]]);
        echo "


    <div class=\"flex-md-row\">
        <div class=\" col-11\">
            <div class=\"card-group\">
                <mark>
                    <h5> FELICITATIONS ! VOUS AVEZ REJOINT LA COMMUNAUTE DES ABONNES D'ALDINI !</h5>
                    <p> Afin de commencer ?? utiliser ALDINI, veuillez compl??ter les champs suivants pour cr??er votre
                        dossier.</p>
                    <p style=\"color: red\"> ATTENTION ! LES INFORMATIONS RENTREES SUR CETTE PAGE DOIVENT ??TRE EXACTES ET
                        STRICTEMENT CONFORMES AUX INFORMATIONS
                        MENTIONNEES SUR VOTRE K-BIS ET VOTRE MEMENTO FISCAL
                        CAR ELLES IMPACTENT IRREVERSIBLEMENT VOTRE COMPTABILITE
                        UNE FOIS LES INFORMATIONS VALIDEES SUR CETTE PAGE, LE DOSSIER NE SERA PLUS MODIFIABLE POUR LES
                        CHAMPS AVEC *
                    </p>
                    ";
        // line 372
        echo "                </mark>
            </div>
        </div>
    </div>

    <div class=\"col-sm-3 mt-4\">
        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secteurActivite", [], "any", false, false, false, 379), 'label', ["label_attr" => ["class" => "foo"], "label" => "Secteur d'activit??"]);
        echo "
            ";
        // line 380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secteurActivite", [], "any", false, false, false, 380), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

    </div>
    <!-------------------Divs mte3 secteur Activit?? ---------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaCafeResto\">
        Avec d??bit de tabac ?
        <select class=\"form-control\" id=\"ouinonSecteurActivite\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option onclick=\"redirect();\" value=\"oui\">oui</option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaTransportPerso\">
        Exercez-vous une activit?? de taxi sous licence?
        <select class=\"form-control\" id=\"ouinonTransportPerso\">
            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option value=\"non\">non</option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaTransportPersoThenya\">
        Exercez-vous une activit?? de VTC, chauffeur priv?? ou autre transport collectif de personnes?
        <select class=\"form-control\" id=\"ouinonTransportPersoThenya\">
            <option value=\"\"></option>
            <option onclick=\"createAlert('Opps!','Attention','REPONSE INCOHERENTE','danger',true,false,'pageMessages');fasa5KolChay();\"
                    value=\"non\">non
            </option>
            <option onclick=\"createAlert('Opps!','Attention','ATTENTION ! VOTRE ACTIVITE ETANT REGLEMENTEE, VOTRE COMPTABILITE NECESSITE UN COMMISSAIRE AUX COMPTES OU, A DEFAUT, UN EXPERT-COMPTABLE POUR LES CAPACITES FINANCIERES A JUSTIFIER AU DREAL','danger',true,false,'pageMessages');\"
                    value=\"oui\">oui
            </option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaImmobilier\">
        Exercez-vous une activit?? d'agent immobilier ? (diff??rent d'une activit?? de SCI)
        <select class=\"form-control\" id=\"ouinonImmobilier\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option id=\"matloubaBa3din\" value=\"oui\">oui</option>
        </select>
    </div>
    <!--------------------------------------------->
    <div class=\"col-sm-3\" id=\"lazemTet5abaImmobilierThenya\">
        Exercez-vous uniquement une activit?? d'interm??diaire de vente?
        <select class=\"form-control\" id=\"ouinonImmobilierThenya\">
            <option value=\"\"></option>
            <option value=\"oui\">oui</option>
            <option onclick=\"createAlert('Opps!','Attention','DESOLE ! NOUS NE POUVONS PAS TRAITER CETTE ACTIVITE.','danger',true,false,'pageMessages');redirect();\"
                    value=\"non\">non
            </option>
        </select>
    </div>
    <!------------------------------------------------------------------------------>

    <div class=\"col-sm-3 nopadding\">
        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"panel panel-default\">
                ";
        // line 440
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomDossier", [], "any", false, false, false, 440), 'widget', ["attr" => [" class" => "nom-dossier", "style" => "text-transform:uppercase"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 445
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "raisonSociale", [], "any", false, false, false, 445), 'row', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "formeJuridique", [], "any", false, false, false, 450), 'row', ["attr" => ["class" => " toggle button  form-control", "data-target" => "myPopup"]]);
        echo "

            <!------------------------------------------------------------->
            <style>


                .hide {
                    visibility: hidden;
                    opacity: 0;
                    transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
                    -moz-transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
                    -o-transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
                    -webkit-transform: translateX(-50%) translateY(-50%) scale(0.8) !important;
                }

                .close {
                    position: absolute;
                    right: 0;
                    top: 0;
                    width: 25px;
                    height: 25px;
                    font-size: 0;
                    cursor: pointer;
                }

                .close:before, .close:after {
                    content: '';
                    position: absolute;
                    background: #767676;
                    -moz-border-radius: 1px;
                    -webkit-border-radius: 1px;
                    -o-border-radius: 1px;
                    border-radius: 1px;
                    left: 14px;
                    right: 14px;
                    top: 30px;
                    height: 3px;
                    -webkit-transform: rotate(45deg);
                    -moz-transform: rotate(45deg);
                    -o-transform: rotate(45deg);
                    transform: rotate(45deg);
                    transition: all 100ms ease-in;
                    -moz-transition: all 100ms ease-in;
                    -webkit-transition: all 100ms ease-in;
                    -o-transition: all 100ms ease-in;
                }

                .close:after {
                    -moz-transform: rotate(-45deg);
                    -webkit-transform: rotate(-45deg);
                    -o-transform: rotate(-45deg);
                    transform: rotate(-45deg);
                }

                .popup {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    -webkit-transform: translateX(-50%) translateY(-50%);
                    -moz-transform: translateX(-50%) translateY(-50%);
                    -o-transform: translateX(-50%) translateY(-50%);
                    transform: translateX(-50%) translateY(-50%);
                    background: #FAFDFF;
                    -moz-border-radius: 5px;
                    -o-border-radius: 5px;
                    -webkit-border-radius: 5px;
                    border-radius: 5px;
                    width: 600px;
                    box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.09), 0px 11px 12px 7px rgba(0, 0, 0, 0.02);
                    -moz-transition: all 120ms;
                    -webkit-transition: all 120ms;
                    -o-transition: all 120ms;
                    transition: all 120ms;
                    z-index: 99;
                    padding: 25px;
                    color: #5E5E5E;
                }

                @media screen and (max-width: 50px) {
                    .popup {
                        width: 50%;
                    }
                }

                .popup-header {
                    text-transform: uppercase;
                    font-size: 10px;
                }

                .popup-body {
                    padding: 15px 0;
                }

                .button {
                    padding: 10px 15px;
                    border: 1px solid #F5F5F5;
                    text-transform: uppercase;
                    box-shadow: 1px 2px 3px #F5F5F5;
                    color: #5E5E5E;
                    cursor: pointer;
                    transition: all 120ms ease-in;
                    outline: none;
                }

                .button:hover {
                    box-shadow: 1px 3px 5px #E9E9E9;
                    transform: translateY(-1px);
                }

                .button:active, .button:visited {
                    transform: translateY(1px);
                    outline: none;
                    box-shadow: 1px 2px 3px #F5F5F5;
                }

            </style>

            <link rel=\"stylesheet\" href=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/intlTelInput.css"), "html", null, true);
        echo "\">

            <script src=";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/intlTelInput.js"), "html", null, true);
        echo "></script>


            <script>
                /********PART 1***********/
                \$(document).ready(function () {


                    \$('label[for=\"dossier_regimeIndependants\"]').empty().append(\"Le g??rant et co-g??rant(s) sont-ils soumis au r??gime des ind??pendants ?\");
                    \$('label[for=\"dossier_typeImposition\"]').empty().append(\"Type d'imposition*\");
                    \$('label[for=\"dossier_franchiseEnBaseTva\"]').empty().append(\"??tes-vous en franchise en base de TVA (pas de TVA)*\");
                    \$('label[for=\"dossier_regimeMicro\"]').empty().append(\"??tes-vous en r??gime micro ?*\");
                    \$('label[for=\"dossier_categorieImposition\"]').empty().append(\"Cat??gorie d'imposition*\");
                    \$('label[for=\"dossier_capital\"]').empty().append(\"% Capital\");

                    \$('#dossier_regimeIndependants ').hide();
                    \$('#foo3').hide();


                    \$('#foo1').text(\"Nom G??rant\");
                    \$('#foo2').text(\"Pr??nom G??rant\");


                    \$('label[for=\"dossier_capitalSocial\"]').hide();
                    \$('#dossier_capitalSocial').hide();
                    \$(\"[id^=lazemTet5aba]\").hide();
//                    !\$(\"[id^=lazemTet5aba]:not(#lazemTet5abaTransportPerso)\").hide();

                    \$('#dossier_nbAssocies').hide();
                    \$('label[for=\"dossier_nbAssocies\"]').hide();

                    \$('#dossier_numeroTVAintracommunaitre').hide();


                    \$('label[for=\"dossier_numeroTVAintracommunaitre\"]').hide();

                    /**************/
                    var input = document.querySelector(\"#dossier_numeroTel\");
                    var iti = window.intlTelInput(input, {
                        // separateDialCode:true,
                        utilsScript: \"https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js\",
                    });
                    // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
                    window.iti = iti;
                    /**************/
                });
                /*********PART 2 [Forme Juridique]***********/

                \$(document).on('change', '.toggle', function (event) {


                    event.preventDefault();


                    \$('#msg').text(\$('#dossier_formeJuridique :selected').text());


                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');


                    return false;
                });

                \$(document).on('click', '#jsr', function (event) {

                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');

                    var tawCategImpo = \$('#dossier_categorieImposition :selected').text();
                    awed3abiCategorieImposition();
                    \$('#dossier_categorieImposition').val(tawCategImpo);

                    var tawSecteur = \$('#dossier_secteurActivite :selected').text();
                    awedSecteurActivite();
                    \$('#dossier_secteurActivite').val(tawSecteur);


                    if (
                        \$('#dossier_formeJuridique :selected').text() == 'EURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'EIRL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur'


                    ) {
                        awedRegimeIndependant();
                        \$(\"#dossier_regimeIndependants option[value='non']\").remove();

                    } else {


                        awedRegimeIndependant();


                    }


                    /***************************************************************************/
                    if (!(\$('#dossier_formeJuridique :selected').text() == 'SARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SCI')) {
                        \$('#ajouterCogerant').hide();

                    } else {
                        \$('#ajouterCogerant').show();
                    }

                    if (\$('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Association lucrative'
                    ) {
                        awed3abiTypeImposition();
                        \$('#dossier_typeImposition').val(\"IS\");
                        \$(\"#dossier_typeImposition option[value='IR']\").remove();

                    } else if (\$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle'
                    ) {
                        awed3abiTypeImposition();
                        \$('#dossier_typeImposition').val(\"IR\");
                        \$(\"#dossier_typeImposition option[value='IS']\").remove();


                    } else {
                        var tawtypeImpo = \$('#dossier_typeImposition :selected').text();
                        var tawCategImpo = \$('#dossier_categorieImposition :selected').text();

                        awed3abiTypeImposition();

                        \$('#dossier_typeImposition').val(tawtypeImpo);
                        \$('#dossier_categorieImposition').val(tawCategImpo);
                    }

                    /*******************************************************************************/
                    if (\$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur') {

                        \$(\"#dossier_regimeMicro option[value='non']\").remove();
                    } else {
                        awed3abiRegimeMicro();
                    }
                    /*******************************************************************************/

                    if (\$('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Association lucrative' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur'
                    ) {
                        \$(\"#dossier_franchiseEnBaseTva option[value='non']\").remove();
                    } else {
                        var taw = \$('#dossier_franchiseEnBaseTva :selected').text();
                        awed3abiFranchise();
                        \$('#dossier_franchiseEnBaseTva').val(taw);
                    }
                    /**************************************************/


                    if (\$('#dossier_formeJuridique :selected').text() == 'SARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELARL') {
                        \$('label[for=\"dossier_nbAssocies\"]').empty();
                        \$('label[for=\"dossier_nbAssocies\"]').append(\"Nombre d'associ??s\");
                    }

                    if (\$('#dossier_formeJuridique :selected').text() == 'SAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELAS') {
                        \$('label[for=\"dossier_nbAssocies\"]').empty();
                        \$('label[for=\"dossier_nbAssocies\"]').append(\"Nombre d'actionnaires\");

                    }

                    if (
                        \$('#dossier_formeJuridique :selected').text() == 'SARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'EURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SASU' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SCI' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELASU'
                    ) {
                        \$('label[for=\"dossier_capitalSocial\"]').show();
                        \$('#dossier_capitalSocial').show(\"slow\");

                    }


                    if (
                        \$('#dossier_formeJuridique :selected').text() == 'SELARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELASU'
                    ) {
                        \$('#dossier_secteurActivite').val(\"Profession Lib??rale\");
                    }

                    /************************************************/

                    if (
                        \$('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
                        \$('#dossier_formeJuridique :selected').text() == 'EIRL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Association lucrative' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle'
                    ) {
                        \$('#dossier_capitalSocial ').hide();
                        \$('label[for=\"dossier_capitalSocial\"]').hide();
                    }


                    if ((\$('#dossier_formeJuridique :selected').text() == 'SARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'EURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
                        \$('#dossier_formeJuridique :selected').text() == 'EIRL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur')) {

                        if (
                            \$('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
                            \$('#dossier_formeJuridique :selected').text() == 'EIRL' ||
                            \$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur') {
                            \$('label[for=\"dossier_regimeIndependants\"]').empty().append(\"L'entrepreneur est-il soumis au r??gime des ind??pendants ?\");

                        }

                        \$('#dossier_regimeIndependants ').show(\"fast\");
                        \$('#foo3').show(\"fast\");


                    } else {
                        \$('#dossier_regimeIndependants ').hide();
                        \$('#foo3').hide();

                    }
                    /***********************************************************/

                    if (\$('#dossier_formeJuridique :selected').text() == 'SAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SASU' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELASU' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Association lucrative'
                    ) {
                        \$('#foo1').text(\"Nom Pr??sident\");
                        \$('#foo2').text(\"Prenom Pr??sident\");
                        \$('div#rubrique ').hide(\"fast\");

                    }


                    /***************************/
                    else if (\$('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle' ||
                        \$('#dossier_formeJuridique :selected').text() == 'EIRL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur'
                    ) {
                        \$('#foo1').text(\"Nom Entrepreneur\");
                        \$('#foo2').text(\"Prenom Entrepreneur\");
                        \$('div#rubrique ').hide(\"fast\");

                    }
                    /***************************/

                    else {

                        \$('#foo1').text(\"Nom G??rant\");
                        \$('#foo2').text(\"Prenom G??rant\");


                        \$('div#rubrique ').show();

                    }
                    /***********************************************************/


                    if (\$('#dossier_formeJuridique :selected').text() == 'SAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELAS') {

                        \$('#dossier_nbAssocies').show();
                        \$('label[for=\"dossier_nbAssocies\"]').show();


                        //\$('#dossier_categorieImposition').val(\"BNC\");


                    } else {
                        \$('#dossier_nbAssocies').hide();
                        \$('label[for=\"dossier_nbAssocies\"]').hide();
                    }

                    if (\$('#dossier_formeJuridique :selected').text() == 'Association Loi 1901 non lucrative') {


                        \$('#dossier_categorieImposition').val(\"Sans\");

                        \$(\"#dossier_categorieImposition option[value='BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BA']\").remove();

                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();

                    } else if (\$('#dossier_formeJuridique :selected').text() == 'Association lucrative') {

                        //   \$('#dossier_categorieImposition').val(\"Sans\");


                        \$(\"#dossier_categorieImposition option[value='BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BA']\").remove();

                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();
                    } else if (\$('#dossier_formeJuridique :selected').text() == 'Entreprise individuelle') {


                        \$(\"#dossier_categorieImposition option[value='Sans']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();

                    } else if (\$('#dossier_formeJuridique :selected').text() == 'Autoentrepreneur') {

                        \$(\"#dossier_categorieImposition option[value='Sans']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();

                    } else if (\$('#dossier_formeJuridique :selected').text() == 'EURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SARL'
                    ) {

                        \$(\"#dossier_categorieImposition option[value='Sans']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();

                    } else if (\$('#dossier_formeJuridique :selected').text() == 'SAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SASU'
                    ) {
                        \$(\"#dossier_categorieImposition option[value='Sans']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();
                    } else if (\$('#dossier_formeJuridique :selected').text() == 'SCI') {


                        \$(\"#dossier_categorieImposition option[value='Sans']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();
                    } else if (\$('#dossier_formeJuridique :selected').text() == 'EIRL') {
                        \$(\"#dossier_categorieImposition option[value='Sans']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();

                    } else if (\$('#dossier_formeJuridique :selected').text() == 'SELARL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELEURL' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELAS' ||
                        \$('#dossier_formeJuridique :selected').text() == 'SELASU') {
                        \$(\"#dossier_categorieImposition option[value='BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='BA']\").remove();

                        \$(\"#dossier_categorieImposition option[value='Sans']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Revenus Fonciers']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BIC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BNC']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-BA']\").remove();
                        \$(\"#dossier_categorieImposition option[value='Micro-Foncier']\").remove();

                    }

                });
                /********************************/
                \$(document).on('click', '#jsrCategImposition', function (event) {
                    // \$('#msgCategImposition').text(\$('#dossier_categorieImposition :selected').text() );
                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');
                    //awedSecteurActivite();


                });

                \$(document).on('click', '#jnsrCategImposition', function (event) {
                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');
                });

                /********************************/

                \$(document).on('click', '#jnsr', function (event) {
                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');
                });

                \$(document).on('click', '#jnsrfinale', function (event) {
                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');
                });

                \$(document).on('click', '#finalbutton', function (event) {
                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');
                });


                /*********PART 3 (forme juridique + nb associes) ***********/

                \$(document).on('click', '#dossier_nbAssocies', function (event) {

                    if (\$('#dossier_nbAssocies :selected').text() == '1') {
                        if (\$('#dossier_formeJuridique :selected').text() == 'SARL') {
                            \$('#dossier_formeJuridique').val('EURL');
                        } else if (\$('#dossier_formeJuridique :selected').text() == 'SAS') {
                            \$('#dossier_formeJuridique').val('SASU');
                        } else if (\$('#dossier_formeJuridique :selected').text() == 'SELARL') {
                            \$('#dossier_formeJuridique').val('SELEURL');

                        } else if (\$('#dossier_formeJuridique :selected').text() == 'SELAS') {
                            \$('#dossier_formeJuridique').val('SELASU');

                        }
                    }
                });
                /*********PART 4 [Franchise TVA]***********/

                \$(document).on('change', '.toggleTVA', function (event) {
                    event.preventDefault();
                    \$('#msg').text(\$('#dossier_franchiseEnBaseTva :selected').text());

                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');


                    if (\$('#dossier_franchiseEnBaseTva :selected').text() == \"oui\") {

                        \$('#dossier_franchiseEnBaseTva').val(\"oui\");

                        \$('#dossier_numeroTVAintracommunaitre').show(\"fast\");
                        \$('label[for=\"dossier_numeroTVAintracommunaitre\"]').show(\"fast\");

                    } else if (\$('#dossier_franchiseEnBaseTva :selected').text() == \"non\") {
                        \$('#dossier_franchiseEnBaseTva').val(\"non\");

                        \$('#dossier_numeroTVAintracommunaitre').hide(\"fast\");
                        \$('label[for=\"dossier_numeroTVAintracommunaitre\"]').hide(\"fast\");

                    }

                    return false;

                });

                /*********PART 5 [TYPE  D'IMPOSITION]***********/
                \$(document).on('change', '.toggleTypeImpo', function (event) {
                    event.preventDefault();
                    \$('#msg').text(\$('#dossier_typeImposition :selected').text());

                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');

                    console.log(\$('#dossier_typeImposition :selected').text())

                    return false;

                });
                /*********PART 6 [R??gime Micro]***********/

                \$(document).on('change', '.toggleRegMicro', function (event) {
                    event.preventDefault();
                    \$('#msg').text(\$('#dossier_regimeMicro :selected').text());


                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');

                    if (\$('#dossier_regimeMicro :selected').text() == \"oui\") {
                        createAlert('Opps!', 'Attention', 'Pour rappel , la tenue de comptablilit?? n\"est pas obligatoire en r??gime micro.', 'danger', true, false, 'pageMessages');

                        if (\$('#dossier_categorieImposition :selected').text() == 'BIC') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"Micro-BIC\", \"Micro-BIC\"));
                            \$('#dossier_categorieImposition').val(\"Micro-BIC\");

                        } else if (\$('#dossier_categorieImposition :selected').text() == 'BNC') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"Micro-BNC\", \"Micro-BNC\"));
                            \$('#dossier_categorieImposition').val(\"Micro-BNC\");
                        } else if (\$('#dossier_categorieImposition :selected').text() == 'BA') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"Micro-BA\", \"Micro-BA\"));
                            \$('#dossier_categorieImposition').val(\"Micro-BA\");
                        } else if (\$('#dossier_categorieImposition :selected').text() == 'Revenus Fonciers') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"Micro-Foncier\", \"Micro-Foncier\"));
                            \$('#dossier_categorieImposition').val(\"Micro-Foncier\");
                        }

                    } else if (\$('#dossier_regimeMicro :selected').text() == \"non\") {

                        if (\$('#dossier_categorieImposition :selected').text() == 'Micro-BIC') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"BIC\", \"BIC\"));
                            \$('#dossier_categorieImposition').val(\"BIC\");

                        } else if (\$('#dossier_categorieImposition :selected').text() == 'Micro-BNC') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"BNC\", \"BNC\"));
                            \$('#dossier_categorieImposition').val(\"BNC\");
                        } else if (\$('#dossier_categorieImposition :selected').text() == 'Micro-BA') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"BA\", \"BA\"));
                            \$('#dossier_categorieImposition').val(\"BA\");
                        } else if (\$('#dossier_categorieImposition :selected').text() == 'Micro-Foncier') {
                            \$(\"#dossier_categorieImposition\").append(new Option(\"Revenus Fonciers\", \"Revenus Fonciers\"));
                            \$('#dossier_categorieImposition').val(\"Revenus Fonciers\");
                        }

                    }


                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');

                    return false;

                });


                /*********PART 7 [Cat??gorie Imposition]***********/
                \$(document).on('change', '.toggleCategorieImpo', function (event) {
                    event.preventDefault();

                    \$('#msgCategImposition').text(\$('#dossier_categorieImposition :selected').text());

                    var target = \$(this).data('target');
                    \$('#' + target).toggleClass('hide');

                    console.log(\$('#dossier_categorieImposition :selected').text());

                    return false;

                });

                /*********PART 8 [Secteur d'activit?? ]***********/

                \$(document).on('change', '#dossier_categorieImposition', function (event) {
                    event.preventDefault();


                    return false;
                });

                /*********PART 9 [r??gime ind??pendants]***********/
                \$(document).on('blur', '#dossier_capital', function (event) {


                });
                /***************************/


                /*********PART 10 []***********/

            </script>

            <!--------------------------Controle de saisie----------------------------------->
            <style>
                .error {
                    color: #ff0000;
                    font-family: serif;
                }
            </style>


            <!------------------------------------------------------------->


        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "capitalSocial", [], "any", false, false, false, 1163), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbAssocies", [], "any", false, false, false, 1169), 'label', ["label_attr" => ["class" => "foo"], "label" => "Nombre d'associ??s"]);
        echo "
            ";
        // line 1170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbAssocies", [], "any", false, false, false, 1170), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adressSiegeSocial", [], "any", false, false, false, 1176), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%;  float: left; \">

                ";
        // line 1185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "codePostale", [], "any", false, false, false, 1185), 'label');
        echo "
                ";
        // line 1186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "codePostale", [], "any", false, false, false, 1186), 'widget', ["attr" => ["class" => "form-control validate ", "maxlength" => "5"]]);
        echo "

            </div>

            <ul>
                <li data-vicopo=\"#dossier_ville, #dossier_codePostale\"
                    data-vicopo-click='{\"#dossier_codePostale\": \"codePostal\", \"#dossier_ville\": \"ville\"}'>
                    <strong data-vicopo-code-postal></strong>
                    <span data-vicopo-ville></span>
                </li>
            </ul>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span class=\"message\" id=\"messageCodePostale\">5 chiffres obligatoires</span>
            </div>

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 1205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 1205), 'label');
        echo "
            ";
        // line 1206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ville", [], "any", false, false, false, 1206), 'widget', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            <div class=\"col\">
                ";
        // line 1212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numeroTel", [], "any", false, false, false, 1212), 'label');
        echo "
            </div>

            <div style=\"width: 100%; height: 100px; float: left;\">
                ";
        // line 1216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numeroTel", [], "any", false, false, false, 1216), 'widget', ["attr" => ["class" => "form-control intl-tel-input", "maxlength" => "10", "onkeyup" => "Validate(this.id,\"integer\");"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messageTel\" class=\"message\">Ce Num??ro de t??l??phone n'est pas valide</span>
            </div>
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            <div style=\"width: 100%; height: 100px; float: left;\">
                ";
        // line 1227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "adressMail", [], "any", false, false, false, 1227), 'row', ["attr" => ["class" => "form-control", "style" => "text-transform:lowercase", "type" => "mail"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messageMail\" class=\"message\">adresse mail non valide </span>
            </div>
        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            <div style=\"width: 100%; height: 100px; float: left;\">
                ";
        // line 1237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "siret", [], "any", false, false, false, 1237), 'row', ["attr" => ["class" => "form-control validate", "maxlength" => "14"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messagesiret\" class=\"message\">Un num??ro Siret doit inclure 14 chiffres</span>
            </div>
        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "franchiseEnBaseTva", [], "any", false, false, false, 1248), 'row', ["attr" => ["class" => " toggleTVA button  form-control ", "data-target" => "myPopup"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            <div style=\"width: 100%; height: 100px; float: left;\">
                ";
        // line 1255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "numeroTVAintracommunaitre", [], "any", false, false, false, 1255), 'row', ["attr" => ["class" => "form-control validate", "maxlength" => "13"]]);
        echo "
            </div>

            <div class=\"input-holder\" style=\"margin-left: 50%; height: 100px;\">
                <span id=\"messagenumeroTVAintracommunaitre\" class=\"message\">Un num??ro TVA intracommunaitre doit ??tre sous la forme \"FR+11 chiffres\"</span>
            </div>
        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "typeImposition", [], "any", false, false, false, 1265), 'row', ["attr" => ["class" => " toggleTypeImpo button  form-control", "data-target" => "myPopup"]]);
        echo "

        </div>


        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categorieImposition", [], "any", false, false, false, 1272), 'row', ["attr" => ["class" => " toggleCategorieImpo button  form-control", "data-target" => "myPopupCategImposition"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "regimeMicro", [], "any", false, false, false, 1278), 'row', ["attr" => ["class" => " toggleRegMicro button  form-control", "data-target" => "myPopup"]]);
        echo "

        </div>


        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 1284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomGerant", [], "any", false, false, false, 1284), 'label', ["label_attr" => ["id" => "foo1"]]);
        echo "

            ";
        // line 1286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nomGerant", [], "any", false, false, false, 1286), 'widget', ["attr" => ["class" => "form-control", "style" => "text-transform:uppercase"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">
            ";
        // line 1291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenomGerant", [], "any", false, false, false, 1291), 'label', ["label_attr" => ["id" => "foo2"]]);
        echo "

            ";
        // line 1293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenomGerant", [], "any", false, false, false, 1293), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>

        <div class=\"form-group\" style=\"width: 110%;\">

            ";
        // line 1299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "capital", [], "any", false, false, false, 1299), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>


    </div>
    </div>



    <div class=\"panel panel-default\">


        <div class=\"panel-body\">

            <div id=\"education_fields\">

            </div>


            <!------------------------------------------------------------------------>
            <div class=\"dynamic-field\" id=\"dynamic-field-1\">
                <div class=\"row\" id=\"rubrique\">
                    <div class=\"col-sm-3 nopadding\">
                        <h3>
                            CoGerant
                        </h3>
                        <ul class=\"Cogerants\" id=\"cemenu\"
                            data-index=\"";
        // line 1327
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coGerant", [], "any", false, false, false, 1327)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coGerant", [], "any", false, false, false, 1327)), "vars", [], "any", false, false, false, 1327), "name", [], "any", false, false, false, 1327) + 1), "html", null, true))) : (print (0)));
        echo "\"
                            data-prototype=\"";
        // line 1328
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coGerant", [], "any", false, false, false, 1328), "vars", [], "any", false, false, false, 1328), "prototype", [], "any", false, false, false, 1328), 'widget'), "html_attr");
        echo "\">
                            ";
        // line 1329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "coGerant", [], "any", false, false, false, 1329));
        foreach ($context['_seq'] as $context["_key"] => $context["Cogerant"]) {
            // line 1330
            echo "
                                <li>
                                    ";
            // line 1332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["Cogerant"], "nomCogerant", [], "any", false, false, false, 1332), 'row');
            echo " </li>
                                <li>
                                    ";
            // line 1334
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["Cogerant"], "prenomCogerant", [], "any", false, false, false, 1334), 'row');
            echo " </li>
                                <li>
                                    ";
            // line 1336
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["Cogerant"], "participation", [], "any", false, false, false, 1336), 'row');
            echo " </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cogerant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1338
        echo "
                        </ul>
                        <button onclick=\"TestCapital();\" id=\"ajouterCogerant\" type=\"button\" class=\"add_item_link\"
                                data-collection-holder-class=\"Cogerants\">Ajouter co-g??rant
                        </button>

                        ";
        // line 1345
        echo "                        ";
        // line 1346
        echo "                        ";
        // line 1347
        echo "                        ";
        // line 1348
        echo "                        ";
        // line 1349
        echo "                        ";
        // line 1350
        echo "                        ";
        // line 1351
        echo "                        ";
        // line 1352
        echo "                        ";
        // line 1353
        echo "                        ";
        // line 1354
        echo "
                        ";
        // line 1356
        echo "                        ";
        // line 1357
        echo "                        ";
        // line 1358
        echo "                        ";
        // line 1359
        echo "                        ";
        // line 1360
        echo "                    </div>


                </div>


                <div class=\"col-sm-3 nopadding\">
                    <div class=\"form-group\" style=\"width: 110%;\">
                        ";
        // line 1368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "regimeIndependants", [], "any", false, false, false, 1368), 'label', ["label_attr" => ["id" => "foo3"]]);
        echo "
                        ";
        // line 1369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "regimeIndependants", [], "any", false, false, false, 1369), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>


                <button id=\"finalbutton\" class=\"btn btn-primary\" data-target=\"myPopupFinal\">Finaliser</button>


                ";
        // line 1377
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


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

                // Simple Validation - By Chad Humphrey - hmphry.com
                // Released under the MIT license

                // Get all forms
                var simpleValidation = function () {

                    var validateForm = \$('form[name=\"dossier\"]')

                    // Gets all forms to Validate
                    validateForm.each(function () {
                        // Defining basic variables, bro
                        var validateForm = \$(this);
                        var validate = {};
                        var validateThis = \$(this).find('.validate');
                        var validatingLength = \$(this).find('.validate').length;
                        var submitBtn = \$(this).find('.submit');

                        // For Loop Getting Elements to Validate
                        for (var i = 1; i <= validatingLength; i++) {
                            // Adding Inputs to object, false for default
                            validate['input' + i] = false;
                        }

                        \$('#dossier_numeroTel').blur(function () {
                            var index = \$(this).prevAll().length + 1;
                            var validateThisVal = \$(this).val();
                            var validateThisType = \$(this).attr('type');

                            const re = /^(\\+\\d{1,2}\\s)?\\(?\\d{3}\\)?[\\s.-]?\\d{3}[\\s.-]?\\d{4}\$/;
                            const reg = new RegExp('^[0-9]+\$');


                            if (validateThisVal.length < 10) {
                                \$(this).addClass('not-valid');
                                \$('span#messageTel').show();
                                \$(this).removeClass('is-valid');
                                return validate['input' + index] = false;
                            } else {
                                \$(this).addClass('is-valid');
                                \$(this).removeClass('not-valid');
                                \$('span#messageTel').hide();
                                return validate['input' + index] = true;
                            }

                        });


                        \$('#dossier_adressMail').blur(function () {
                            var index = \$(this).prevAll().length + 1;
                            var validateThisVal = \$(this).val();
                            var validateThisType = \$(this).attr('type');

                            var reg = /^([a-zA-Z0-9_.+-])+\\@(([a-zA-Z0-9-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;


                            // Condition to see if  exists
                            if (!validateThisVal.match(reg)) {
                                \$(this).addClass('not-valid');
                                \$('span#messageMail').show();
                                \$(this).removeClass('is-valid');

                            } else {
                                \$(this).addClass('is-valid');
                                \$(this).removeClass('not-valid');
                                \$('span#messageMail').hide();
                                return validate['input' + index] = true;
                            }


                        });

                        \$('#dossier_numeroTVAintracommunaitre').blur(function () {
                            var index = \$(this).prevAll().length + 1;
                            var validateThisVal = \$(this).val();
                            var validateThisType = \$(this).attr('type');

                            const reg = new RegExp('[fr|FR]{2}[0-9]{11}');


                            // Condition to see if  exists
                            if (!validateThisVal.match(reg)) {
                                \$(this).addClass('not-valid');
                                \$('span#messagenumeroTVAintracommunaitre').show();
                                \$(this).removeClass('is-valid');
                                return validate['input' + index] = false;
                            } else if (validateThisVal.length < 13) {
                                \$(this).addClass('not-valid');
                                \$('span#messagenumeroTVAintracommunaitre').show();
                                \$(this).removeClass('is-valid');
                                return validate['input' + index] = false;
                            } else {
                                \$(this).addClass('is-valid');
                                \$(this).removeClass('not-valid');
                                \$('span#messagenumeroTVAintracommunaitre').hide();
                                return validate['input' + index] = true;
                            }


                        });

                        \$('#dossier_siret').blur(function () {
                            var index = \$(this).prevAll().length + 1;
                            var validateThisVal = \$(this).val();
                            var validateThisType = \$(this).attr('type');

                            const reg = new RegExp('^[0-9]+\$');


                            // Condition to see if  exists
                            if (!validateThisVal.match(reg)) {
                                \$(this).addClass('not-valid');
                                \$('span#messagesiret').show();
                                \$(this).removeClass('is-valid');
                                return validate['input' + index] = false;
                            } else if (validateThisVal.length < 14) {
                                \$(this).addClass('not-valid');
                                \$('span#messagesiret').show();
                                \$(this).removeClass('is-valid');
                                return validate['input' + index] = false;
                            } else {
                                \$(this).addClass('is-valid');
                                \$(this).removeClass('not-valid');
                                \$('span#messagesiret').hide();
                                return validate['input' + index] = true;
                            }


                        });

                        /********numero Tel********/


                        /*****************/

                        \$('#dossier_codePostale').blur(function () {
                            var index = \$(this).prevAll().length + 1;
                            var validateThisVal = \$(this).val();
                            var validateThisType = \$(this).attr('type');

                            const re = /^(\\+\\d{1,2}\\s)?\\(?\\d{3}\\)?[\\s.-]?\\d{3}[\\s.-]?\\d{4}\$/;
                            const reg = new RegExp('^[0-9]+\$');


                            // Condition to see if  exists
                            if (!validateThisVal.match(reg)) {
                                \$(this).addClass('not-valid');
                                \$('span#messageCodePostale').show();
                                \$(this).removeClass('is-valid');
                                return validate['input' + index] = false;
                            } else if (validateThisVal.length < 5) {
                                \$(this).addClass('not-valid');
                                \$('span#messageCodePostale').show();
                                \$(this).removeClass('is-valid');
                                return validate['input' + index] = false;
                            } else {
                                \$(this).addClass('is-valid');
                                \$(this).removeClass('not-valid');
                                \$('span#messageCodePostale').hide();
                                return validate['input' + index] = true;
                            }

                        });

                        /**********Zedetha taw controle saisie capitale + participation ***********/


                        /******ho************************************************************************/

                        validateForm.submit(function (event) {
                            // Prevents Default
                            event.preventDefault();

                            // Logging form errors
                            var falseCtn = 0;
                            for (var i = 1; i <= validatingLength; i++) {
                                if (validate['input' + i] == false) {
                                    falseCtn++;
                                }
                            }

                            // Checking if any falses exist
                            if (falseCtn > 0) {
                                \$(this).unbind('submit').submit();
                                \$(this).click();
                            } else {
                            }
                        });

                    });

                };

                simpleValidation();


                submitForms = function () {

                    document.forms[0].submit();
                    document.forms[1].submit();
                }
                //endmodif
            </script>
            <script>
                \$('#dossier_nomDossier').val('";
        // line 1602
        echo twig_escape_filter($this->env, ($context["nomDossier"] ?? null), "html", null, true);
        echo "')
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
                    removeFormButton.innerText = 'Supprimer le  co-g??rant';

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
            <!------------------------------------------------------------->

";
    }

    // line 13
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//code.jquery.com/jquery-1.10.2.min.js"), "html", null, true);
        echo "></script>

            <script src=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"), "html", null, true);
        echo "></script>

            <script src=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"), "html", null, true);
        echo "></script>



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
        ";
    }

    public function getTemplateName()
    {
        return "divs7achtiBehom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1865 => 18,  1860 => 16,  1854 => 14,  1850 => 13,  1790 => 1602,  1562 => 1377,  1551 => 1369,  1547 => 1368,  1537 => 1360,  1535 => 1359,  1533 => 1358,  1531 => 1357,  1529 => 1356,  1526 => 1354,  1524 => 1353,  1522 => 1352,  1520 => 1351,  1518 => 1350,  1516 => 1349,  1514 => 1348,  1512 => 1347,  1510 => 1346,  1508 => 1345,  1500 => 1338,  1492 => 1336,  1487 => 1334,  1482 => 1332,  1478 => 1330,  1474 => 1329,  1470 => 1328,  1466 => 1327,  1435 => 1299,  1426 => 1293,  1421 => 1291,  1413 => 1286,  1408 => 1284,  1399 => 1278,  1390 => 1272,  1380 => 1265,  1367 => 1255,  1357 => 1248,  1343 => 1237,  1330 => 1227,  1316 => 1216,  1309 => 1212,  1300 => 1206,  1296 => 1205,  1274 => 1186,  1270 => 1185,  1258 => 1176,  1249 => 1170,  1245 => 1169,  1236 => 1163,  639 => 569,  634 => 567,  514 => 450,  506 => 445,  498 => 440,  435 => 380,  431 => 379,  422 => 372,  402 => 354,  155 => 110,  151 => 109,  145 => 106,  141 => 105,  135 => 102,  131 => 101,  126 => 99,  122 => 98,  118 => 97,  113 => 95,  109 => 94,  70 => 57,  68 => 13,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "divs7achtiBehom.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\divs7achtiBehom.html.twig");
    }
}
