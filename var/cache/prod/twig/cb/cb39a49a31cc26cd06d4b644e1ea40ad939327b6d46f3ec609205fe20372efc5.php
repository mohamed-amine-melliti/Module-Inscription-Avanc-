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

/* dossier/indexE.html.twig */
class __TwigTemplate_b594d73637e776f6e8159ef5fbab63d8a76e874396fc3b751475ca53310c2f4f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/indexE.html.twig", 1);
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
        echo "    <div class=\"container mt-4\">
    <span class=\"badge bg-warning\">CREEZ VOS DOSSIERS </span>

    <div class=\"container mt-xl-4\">
        <div class=\"input-group mb-3\">
            <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ouvertureDossier");
        echo "\" method=\"post\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Nouveau dossier\" id=\"nomdossier\"  name=\"nomdossier\"  style=\"text-transform:uppercase\">
                <button class=\"btn btn-primary\"  type=\"submit\">Créer</button>
            </form>
        </div>
    </div>
    ";
        // line 17
        if (($context["dossiers"] ?? null)) {
            // line 18
            echo "        <div class=\"container mt-xl-4\" style=\"text-align-all: justify\">

            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dossiers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
                // line 21
                echo "
                ";
                // line 23
                echo "                <div class=\"col-8\" >

                    <ul class=\"list-group mt-6\">
                        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                            ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "raisonSociale", [], "any", false, false, false, 27), "html", null, true);
                echo "
                            <p style=\"color: #30f504\"> Créé &#9989;  </p>
                        </li>
                    </ul>
                </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
        </div>


        </div>
    ";
        }
        // line 40
        echo "

";
    }

    // line 44
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "dossier/indexE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 45,  121 => 44,  115 => 40,  107 => 34,  94 => 27,  88 => 23,  85 => 21,  81 => 20,  77 => 18,  75 => 17,  66 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/indexE.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\dossier\\indexE.html.twig");
    }
}
