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

/* dossier/index.html.twig */
class __TwigTemplate_978b7cfbe3b28092ef3151c8d9c0c6efd12aebc4810f2c6a3c0f2232f21e5ed5 extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/index.html.twig", 1);
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
        echo "<div class=\"container mt-4\">
    <span class=\"badge bg-warning\">CREEZ VOS DOSSIERS </span>

    <div class=\"container mt-xl-4\">
    <div class=\"input-group mb-3\">
        <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ouvertureDossier");
        echo "\" method=\"post\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Nouveau dossier\" id=\"nomdossier\" , name=\"nomdossier\" style=\"text-transform:uppercase\">
        <button class=\"btn btn-primary\"  type=\"submit\">Créer</button>
        </form>
    </div>
    </div>



</div>


";
    }

    // line 25
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "dossier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  83 => 25,  66 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/index.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\dossier\\index.html.twig");
    }
}
