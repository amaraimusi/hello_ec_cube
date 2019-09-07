<?php

/* error.twig */
class __TwigTemplate_9ed22620fce9d8ed9eb655e25b1f295c593c37163a13918971be4f74808e2fad extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "error.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new Twig_Error_Runtime('Variable "eccube_config" does not exist.', 12, $this->source); })()), "locale", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["error_title"]) || array_key_exists("error_title", $context) ? $context["error_title"] : (function () { throw new Twig_Error_Runtime('Variable "error_title" does not exist.', 16, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["error_title"]) || array_key_exists("error_title", $context) ? $context["error_title"] : (function () { throw new Twig_Error_Runtime('Variable "error_title" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "</p>
                <p class=\"ec-404Role__description ec-reportDescription\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new Twig_Error_Runtime('Variable "error_message" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</p>
                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  71 => 32,  67 => 31,  63 => 30,  57 => 27,  45 => 18,  41 => 17,  37 => 16,  29 => 12,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
{#
This file is part of EC-CUBE

Copyright(c) LOCKON CO.,LTD. All Rights Reserved.

http://www.lockon.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<html lang=\"{{ eccube_config.locale }}\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ error_title }}</title>
    <link rel=\"icon\" href=\"{{ asset('assets/img/common/favicon.ico') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
</head>
<body>
<div class=\"ec-layoutRole\">
    <div class=\"ec-404Role\">
        <div class=\"ec-off4Grid\">
            <div class=\"ec-off4Grid__cell\">
                <div style=\"font-size:100px;text-align:center;\">
                    <div class=\"ec-404Role__icon ec-icon\">
                        <img src=\"{{ asset('assets/icon/exclamation-pale.svg') }}\" alt=\"\">
                    </div>
                </div>
                <p class=\"ec-404Role__title ec-reportHeading\">{{ error_title }}</p>
                <p class=\"ec-404Role__description ec-reportDescription\">{{ error_message }}</p>
                <a class=\"ec-blockBtn--cancel\" href=\"{{ url('homepage') }}\">{{ 'トップページへ'|trans }}</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
", "error.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\error.twig");
    }
}
