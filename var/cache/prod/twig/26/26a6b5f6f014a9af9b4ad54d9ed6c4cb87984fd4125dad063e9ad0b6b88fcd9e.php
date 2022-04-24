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
class __TwigTemplate_6ce8b4f032f9cbf91408f22497379d1e99400404d5109e50b4ef19e0c039aaeb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login/registre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello registreController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                            <div class=\"form-outline mb-4\">
";
        // line 19
        echo "                                <input  type=\"email\" class=\"form-control\" ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 19), 'widget');
        echo "

                            </div>

                            <div class=\"form-outline mb-4\">
                                <input type=\"password\" id=\"typePasswordX-2\" class=\"form-control \" ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 24), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 57
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "<script>
    \$('#registration_email').val('";
        // line 59
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "')
</script>
";
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
        return array (  133 => 59,  130 => 58,  126 => 57,  114 => 49,  94 => 31,  91 => 29,  85 => 24,  76 => 19,  71 => 16,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/registre.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\login\\registre.html.twig");
    }
}
