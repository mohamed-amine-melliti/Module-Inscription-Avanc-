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

/* home/index.html.twig */
class __TwigTemplate_9da76275276e6e7ccb61d5a9a62f5a597c8548ea900099a94b0c236352203dd1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello HomeController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<section class=\"vh-100\" style=\"background-color:beige;\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
                    <div class=\"card-body  text-center\">

                        <p> Texte d'accroche </p>
                        <p>à définir plus tard </p>

                        <div class=\"form-outline \">
                            <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registre");
        echo "\" method=\"post\">
                            <input  type=\"email\" id=\"email\" name=\"email\"  class=\"form-control \"   placeholder=\"Adresse email a rentrer \">
                            <button  class=\"btn btn-primary\"  type=\"submit\">Commencer</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
                        ";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\home\\index.html.twig");
    }
}
