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

/* login/registre.html.twig */
class __TwigTemplate_ee41343d8096c715261da83ed204b02eee9e2e5d69fdf157be59e85e5d569c9d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/registre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/registre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/registre.html.twig", 1);
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

        echo "Hello registreController!";
        
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
        echo "    <section class=\"vh-100\" style=\"background-color:Gray;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">

                            <i >Créez un mot de passe pour  </i>
                            <p>activer votre abonnement </p>
                            <p>Plus que quelques étapes et c'est terminé ! </p>
                            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form-outline mb-4\">
";
        // line 19
        echo "                                <input  type=\"email\" class=\"form-control\" ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'widget');
        echo "

                            </div>

                            <div class=\"form-outline mb-4\">
                                <input type=\"password\" id=\"typePasswordX-2\" class=\"form-control \" ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), 'widget');
        echo "

                            </div>
";
        // line 29
        echo "
";
        // line 31
        echo "
                            <!-- Checkbox -->
                            <div class=\"form-check d-flex justify-content-start mb-4\">
                                <input
                                        class=\"form-check-input\"
                                        type=\"checkbox\"
                                        value=\"\"
                                        id=\"form1Example3\"
                                />
                                <label class=\"form-check-label\" for=\"form1Example3\">
                                    Je ne souhaite pas recevoir les offres spéciales de
                                    <p>  \"ALDINI\" par e-mail</p>
                                </label>
                            </div>

                            <button  class=\"btn btn-primary\"  type=\"submit\"> Suivant</button>

                            <hr class=\"my-4\">
                           ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 58
        echo "<script>
    \$('#registration_email').val('";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "')
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/registre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 59,  172 => 58,  162 => 57,  144 => 49,  124 => 31,  121 => 29,  115 => 24,  106 => 19,  101 => 16,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello registreController!{% endblock %}

{% block body %}
    <section class=\"vh-100\" style=\"background-color:Gray;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">

                            <i >Créez un mot de passe pour  </i>
                            <p>activer votre abonnement </p>
                            <p>Plus que quelques étapes et c'est terminé ! </p>
                            {{ form_start(form) }}
                            <div class=\"form-outline mb-4\">
{#                                <input type=\"email\"  class=\"form-control \" placeholder=\"Adresse email \" />#}
                                <input  type=\"email\" class=\"form-control\" {{ form_widget(form.email) }}

                            </div>

                            <div class=\"form-outline mb-4\">
                                <input type=\"password\" id=\"typePasswordX-2\" class=\"form-control \" {{ form_widget(form.password) }}

                            </div>
{#                            <div class=\"form-outline mb-4\">#}
{#                                <input type=\"password\" id=\"typePasswordX-2\" class=\"form-control \"  placeholder=\"confirmer votre  mot de passe  \"/>#}

{#                            </div>#}

                            <!-- Checkbox -->
                            <div class=\"form-check d-flex justify-content-start mb-4\">
                                <input
                                        class=\"form-check-input\"
                                        type=\"checkbox\"
                                        value=\"\"
                                        id=\"form1Example3\"
                                />
                                <label class=\"form-check-label\" for=\"form1Example3\">
                                    Je ne souhaite pas recevoir les offres spéciales de
                                    <p>  \"ALDINI\" par e-mail</p>
                                </label>
                            </div>

                            <button  class=\"btn btn-primary\"  type=\"submit\"> Suivant</button>

                            <hr class=\"my-4\">
                           {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block javascript %}
<script>
    \$('#registration_email').val('{{ email }}')
</script>
{% endblock %}", "login/registre.html.twig", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\login\\registre.html.twig");
    }
}
