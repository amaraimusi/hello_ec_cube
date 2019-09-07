<?php

/* @admin/error.twig */
class __TwigTemplate_8062e67bc4bc07fafe6761d102421933d68e682ab8dfb6e03d5de6c897a6c615 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"ja\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, ($context["error_title"] ?? null), "html", null, true);
        echo "</title>
    <meta name=\"robots\" content=\"noindex,nofollow\"/>
    <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico", "admin"), "html", null, true);
        echo "\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css", "admin"), "html", null, true);
        echo "\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
</head>
<body id=\"error-page\" class=\"bg-light\">

<div class=\"c-container\">
    <div class=\"c-contentsArea\">


        <div class=\"container\" style=\"margin-top: 150px;\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 offset-sm-3\">

                    <div class=\"text-center p-5 bg-white\">
                        <h3><i class=\"fa fa-exclamation-triangle fa-lg ml-1\"></i>";
        // line 36
        echo twig_escape_filter($this->env, ($context["error_title"] ?? null), "html", null, true);
        echo "</h3>
                        <p>";
        // line 37
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 38
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage");
        echo "\" class=\"btn btn-info btn-lg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.error.go_to_login"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js", "admin"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@admin/error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 49,  69 => 38,  65 => 37,  61 => 36,  44 => 22,  37 => 18,  32 => 16,  26 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@admin/error.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\admin\\error.twig");
    }
}
