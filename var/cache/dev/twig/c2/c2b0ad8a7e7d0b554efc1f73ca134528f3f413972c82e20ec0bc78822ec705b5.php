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

/* dossier/DivsPopUp.html */
class __TwigTemplate_83fd6a439f7e37c075906d3873bc53232186f28aeffd4a3c1d1ad03881f62a50 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/DivsPopUp.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/DivsPopUp.html"));

        // line 1
        echo "<!-------------------------------------------------------------------->
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
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/DivsPopUp.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-------------------------------------------------------------------->
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
</div>", "dossier/DivsPopUp.html", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\DivsPopUp.html");
    }
}
