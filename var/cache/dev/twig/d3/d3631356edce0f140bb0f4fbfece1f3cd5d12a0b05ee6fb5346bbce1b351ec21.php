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

/* dossier/Divs1pt8.html */
class __TwigTemplate_b2dfeb9c322d278f4e060ed67041790708f6f5495e03f0050d98cb96b4966414 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/Divs1pt8.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/Divs1pt8.html"));

        // line 1
        echo "
<div class=\"form-row\" id=\"miseAjourSCISARL\">

    <div class=\"form-holder\">
        <label> Le gérant et co-gérant(s) sont-ils associés ?  </label>
        <select class=\"form-control\" id=\"ouinonSCISARL\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option onclick=\"\" value=\"oui\">oui</option>
        </select>
    </div>
</div>


<div class=\"form-row\" id=\"miseAjourSCIakaho\">

    <div class=\"form-holder \">
        <label> Le gérant et co-gérant(s) sont-ils rémunérés ?</label>

        <select class=\"form-control\" id=\"ouinonSCIrenumeres\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option onclick=\"\" value=\"oui\">oui</option>
        </select>
    </div>
</div>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/Divs1pt8.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"form-row\" id=\"miseAjourSCISARL\">

    <div class=\"form-holder\">
        <label> Le gérant et co-gérant(s) sont-ils associés ?  </label>
        <select class=\"form-control\" id=\"ouinonSCISARL\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option onclick=\"\" value=\"oui\">oui</option>
        </select>
    </div>
</div>


<div class=\"form-row\" id=\"miseAjourSCIakaho\">

    <div class=\"form-holder \">
        <label> Le gérant et co-gérant(s) sont-ils rémunérés ?</label>

        <select class=\"form-control\" id=\"ouinonSCIrenumeres\">
            <option value=\"\"></option>
            <option value=\"non\">non</option>
            <option onclick=\"\" value=\"oui\">oui</option>
        </select>
    </div>
</div>




", "dossier/Divs1pt8.html", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\Divs1pt8.html");
    }
}
