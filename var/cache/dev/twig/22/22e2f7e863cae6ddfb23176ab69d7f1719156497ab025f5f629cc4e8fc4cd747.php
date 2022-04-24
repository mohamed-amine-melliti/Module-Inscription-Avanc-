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
class __TwigTemplate_4144444e6b6ef559659a3f02f53012dd2ae8d6e69e50fc600c8fdc47e36d7e8a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/donneesExcerice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/donneesExcerice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/donneesExcerice.html.twig", 1);
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

        echo "Hello ";
        
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateOuverture", [], "any", false, false, false, 43), 'label');
        echo " </label>
            <div class=\"col-sm-3\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "dateOuverture", [], "any", false, false, false, 45), 'widget', ["attr" => [" class" => "nom-dossier"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "dateCloture", [], "any", false, false, false, 50), 'label');
        echo " </label>
            <div class=\"col-sm-3\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "dateCloture", [], "any", false, false, false, 52), 'widget');
        echo "
            </div>
        </div>


        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "regimeTVA", [], "any", false, false, false, 58), 'label');
        echo " </label>
            <div class=\"col-sm-3\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "regimeTVA", [], "any", false, false, false, 60), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  192 => 84,  187 => 82,  178 => 75,  174 => 72,  170 => 69,  159 => 60,  154 => 58,  145 => 52,  140 => 50,  132 => 45,  127 => 43,  122 => 41,  109 => 30,  106 => 27,  103 => 22,  97 => 17,  91 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello {% endblock %}

{% block body %}

{#    {{ dump(dateCreationEntreprise)  }}#}
{#    {{ dump(datecloture1ex)  }}#}




{#  formjuridique SCI ET NON #}
{#    {{ dump(dateFinDernierBilanComptable)  }}#}
{#    {{ dump(nouvelExcerciceOuverture)  }}#}
{#    {{ dump(nouvelExcerciceCloture)  }}#}




    {#  formjuridique #SCI ET oui #}

{#    {{ dump(datesignatureStatus)  }}#}
{#    {{ dump(jourCloture1erEerc)  }}#}
{#    {{ dump(anneeCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT)  }}#}
{#    {{ dump(MoisCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT)  }}#}

{#    #}{#  formjuridique #SCI ET nn #}
{#    {{ dump(MoisCloture1erExcerciceSIFORMEJURIDIQUEDIFFERENT)  }}#}










    <div class=\"container-fluid mt-12\">
        {{form_start(form)}}
        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">{{ form_label(form.dateOuverture)}} </label>
            <div class=\"col-sm-3\">
                {{ form_widget(form.dateOuverture , {'attr': {' class':'nom-dossier' }})}}
            </div>
        </div>

        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">{{ form_label(form.dateCloture)}} </label>
            <div class=\"col-sm-3\">
                {{ form_widget(form.dateCloture)}}
            </div>
        </div>


        <div class=\"form-group row mt-4 m-lg-2 \">
            <label for=\"staticEmail\" class=\" badge bg-warning col-3 \">{{ form_label(form.regimeTVA)}} </label>
            <div class=\"col-sm-3\">
                {{ form_widget(form.regimeTVA)}}
            </div>
        </div>





        {#    <div class=\"form-group\">#}


        {#        {{ form_row(form.dateOuverture  )}}#}


        {#    </div>#}
        <div>
    <span class=\"badge bg-warning \"> Veuillez confirmer votre exercice
        </span>
        </div>
        <div class=\"mt-2\">
            <button type=\"submit\" class=\"btn btn-primary\" onclick= \"submitForms()\" > Confirmer</button>
        </div>
        {{form_end(form)}}
        <div class=\"\">
            <a class=\"btn btn-primary  \" type=\"submit\" href=\"{{ path('ouvertureExcercice') }}\">Revenir</a>
        </div>
    </div>

    <script>
        submitForms = function(){
            document.forms[\"form\"].submit();

        }

    </script>
{% endblock %}", "dossier/donneesExcerice.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\donneesExcerice.html.twig");
    }
}
