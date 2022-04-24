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

/* dossier/insert.php */
class __TwigTemplate_f3fce34185afbab6b9bdb479c45e354b2264c829d7c4ba146af81acacf0a9d58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/insert.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/insert.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    \$conn = mysqli_connect(\"localhost\", \"root\", \"\", \"staff\");

    // Check connection
    if(\$conn === false){
        die(\"ERROR: Could not connect. \"
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    \$first_name = \$_REQUEST['first_name'];
    \$last_name = \$_REQUEST['last_name'];
    \$gender = \$_REQUEST['gender'];
    \$address = \$_REQUEST['address'];
    \$email = \$_REQUEST['email'];

    // Performing insert query execution
    // here our table name is college
    \$sql = \"INSERT INTO college VALUES ('\$first_name',
\t\t\t'\$last_name','\$gender','\$address','\$email')\";

    if(mysqli_query(\$conn, \$sql)){
        echo \"<h3>data stored in a database successfully.\"
            . \" Please browse your localhost php my admin\"
            . \" to view the updated data</h3>\";

        echo nl2br(\"\\n\$first_name\\n \$last_name\\n \"
            . \"\$gender\\n \$address\\n \$email\");
    } else{
        echo \"ERROR: Hush! Sorry \$sql. \"
            . mysqli_error(\$conn);
    }

    // Close connection
    mysqli_close(\$conn);
    ?>
</center>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/insert.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    \$conn = mysqli_connect(\"localhost\", \"root\", \"\", \"staff\");

    // Check connection
    if(\$conn === false){
        die(\"ERROR: Could not connect. \"
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    \$first_name = \$_REQUEST['first_name'];
    \$last_name = \$_REQUEST['last_name'];
    \$gender = \$_REQUEST['gender'];
    \$address = \$_REQUEST['address'];
    \$email = \$_REQUEST['email'];

    // Performing insert query execution
    // here our table name is college
    \$sql = \"INSERT INTO college VALUES ('\$first_name',
\t\t\t'\$last_name','\$gender','\$address','\$email')\";

    if(mysqli_query(\$conn, \$sql)){
        echo \"<h3>data stored in a database successfully.\"
            . \" Please browse your localhost php my admin\"
            . \" to view the updated data</h3>\";

        echo nl2br(\"\\n\$first_name\\n \$last_name\\n \"
            . \"\$gender\\n \$address\\n \$email\");
    } else{
        echo \"ERROR: Hush! Sorry \$sql. \"
            . mysqli_error(\$conn);
    }

    // Close connection
    mysqli_close(\$conn);
    ?>
</center>
</body>

</html>
", "dossier/insert.php", "C:\\Users\\21629\\Desktop\\VendrediAldini\\adlini\\templates\\dossier\\insert.php");
    }
}
