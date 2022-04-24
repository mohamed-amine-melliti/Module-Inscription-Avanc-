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

/* dossier/donneesExcerice.html.twig */
class __TwigTemplate_ab0fee28b166370f3f032f47c7442fc7663f85c4eb10cc76517b7a20a65160c6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dossier/donneesExcerice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 9
        echo "



";
        // line 17
        echo "



    ";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 30
        echo "









    <div class=\"container-fluid mt-12\">
        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateOuverture", [], "any", false, false, false, 43), 'label');
        echo " </label>
            <div class=\"col-sm-3\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateOuverture", [], "any", false, false, false, 45), 'widget', ["attr" => [" class" => "nom-dossier"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateCloture", [], "any", false, false, false, 50), 'label');
        echo " </label>
            <div class=\"col-sm-3\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateCloture", [], "any", false, false, false, 52), 'widget');
        echo "
            </div>
        </div>


        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "regimeTVA", [], "any", false, false, false, 58), 'label');
        echo " </label>
            <div class=\"col-sm-3\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "regimeTVA", [], "any", false, false, false, 60), 'widget');
        echo "
            </div>
        </div>





        ";
        // line 69
        echo "

        ";
        // line 72
        echo "

        ";
        // line 75
        echo "        <div>
    <span class=\"badge bg-warning \"> Veuillez confirmer votre exercice
        </span>
        </div>
        <div class=\"mt-2\">
            <button type=\"submit\" class=\"btn btn-primary\" onclick= \"submitForms()\" > Confirmer</button>
        </div>
        ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        <div class=\"\">
            <a class=\"btn btn-primary  \" type=\"submit\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ouvertureExcercice");
        echo "\">Revenir</a>
        </div>
    </div>

    <script>
        submitForms = function(){
            document.forms[\"form\"].submit();

        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "dossier/donneesExcerice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 84,  157 => 82,  148 => 75,  144 => 72,  140 => 69,  129 => 60,  124 => 58,  115 => 52,  110 => 50,  102 => 45,  97 => 43,  92 => 41,  79 => 30,  76 => 27,  73 => 22,  67 => 17,  61 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dossier/donneesExcerice.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\dossier\\donneesExcerice.html.twig");
    }
}
