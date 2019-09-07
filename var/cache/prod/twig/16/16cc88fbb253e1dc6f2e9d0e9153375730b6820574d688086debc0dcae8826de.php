<?php

/* error.twig */
class __TwigTemplate_5223aa9b377dd3de98cf6223e2b6880a5d05a08f24fad6a63c942f6a8ad09aa4 extends Twig_Template
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
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, ($context["error_title"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"ec-layoutRole\">
    <div class=\"ec-404Role\">
        <div class=\"ec-off4Grid\">
            <div class=\"ec-off4Grid__cell\">
                <div style=\"font-size:100px;text-align:center;\">
                    <div class=\"ec-404Role__icon ec-icon\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-pale.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <p class=\"ec-404Role__title ec-reportHeading\">";
        // line 30
        echo twig_escape_filter($this->env, ($context["error_title"] ?? null), "html", null, true);
        echo "</p>
                <p class=\"ec-404Role__description ec-reportDescription\">";
        // line 31
        echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
        echo "</p>
                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 32
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 32,  64 => 31,  60 => 30,  54 => 27,  42 => 18,  38 => 17,  34 => 16,  26 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\error.twig");
    }
}
