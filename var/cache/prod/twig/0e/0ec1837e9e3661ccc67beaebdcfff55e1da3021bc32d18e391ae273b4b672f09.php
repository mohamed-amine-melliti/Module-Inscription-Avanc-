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

/* login/index.html.twig */
class __TwigTemplate_fcae7f447fb9f2007fefd010df31d6fea34e33156a4bd51ba76296250b4168a6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello LoginController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (($context["error"] ?? null)) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <body>
    <section class=\"vh-100\" style=\"background-color:Gray;\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card shadow-2-strong\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">

                            <h3 class=\"mb-5\">S'identifier</h3>
                            ";
        // line 18
        if (($context["error"] ?? null)) {
            // line 19
            echo "                                <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 19), "security"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 21
        echo "                           <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                            <div class=\"form-outline mb-4\">
                                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control \" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"E-mail \" required />

                            </div>

                            <div class=\"form-outline mb-4\">
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control \"  placeholder=\"Mot de passe \" required/>

                            </div>

                            <!-- Checkbox -->
                            <div class=\"form-check d-flex justify-content-start mb-4\">
                                <input
                                        class=\"form-check-input\"
                                        type=\"checkbox\"
                                        value=\"\"
                                        id=\"form1Example3\"
                                />
                                <label class=\"form-check-label\" for=\"form1Example3\"> Se souvenir de moi  </label>
                            </div>

                            <button class=\"btn btn-primary  \" type=\"submit\">S'identifier</button>
                           </form>
";
        // line 48
        echo "
";
        // line 51
        echo "

";
        // line 54
        echo "
";
        // line 56
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>

";
    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 56,  124 => 54,  120 => 51,  117 => 48,  92 => 23,  86 => 21,  80 => 19,  78 => 18,  67 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/index.html.twig", "C:\\Users\\21629\\Desktop\\1803\\adlini\\templates\\login\\index.html.twig");
    }
}
