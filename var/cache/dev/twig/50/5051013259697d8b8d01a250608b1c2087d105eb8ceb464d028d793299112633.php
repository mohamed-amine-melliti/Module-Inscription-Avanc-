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

/* Divs/subscribe.html */
class __TwigTemplate_c2786d23652cb5094bb7edb70cdc66568dfba9403eee050660e81c7dc9829357 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/subscribe.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Divs/subscribe.html"));

        // line 1
        echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <!--         <h4 class=\"modal-title\">Modal Header</h4> -->
            </div>
            <div class=\"modal-body text-center\">
                <h1>Full screen Transparent Bootstrap Modal</h1>
                <p>FEEL FRREE TO GET YOUR MODAL CODE HERE FOLKS.</p>
                <a class=\"pre-order-btn\" href=\"#\">GET THE MODAL CODE</a>
            </div>
            <div class=\"modal-footer\">
                <!--         <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button> -->
            </div>
        </div>

    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Divs/subscribe.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <!--         <h4 class=\"modal-title\">Modal Header</h4> -->
            </div>
            <div class=\"modal-body text-center\">
                <h1>Full screen Transparent Bootstrap Modal</h1>
                <p>FEEL FRREE TO GET YOUR MODAL CODE HERE FOLKS.</p>
                <a class=\"pre-order-btn\" href=\"#\">GET THE MODAL CODE</a>
            </div>
            <div class=\"modal-footer\">
                <!--         <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button> -->
            </div>
        </div>

    </div>
</div>", "Divs/subscribe.html", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\Divs\\subscribe.html");
    }
}
