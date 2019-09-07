<?php

/* default_frame.twig */
class __TwigTemplate_4b3e9d53587a302d0f12ae18a79022f967ef279f41f9b7f2694f603364e4f31c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default_frame.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new Twig_Error_Runtime('Variable "eccube_config" does not exist.', 12, $this->source); })()), "locale", array()), "html", null, true);
        echo "\">
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <title>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new Twig_Error_Runtime('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", array()), "html", null, true);
        if (((isset($context["subtitle"]) || array_key_exists("subtitle", $context)) &&  !twig_test_empty((isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new Twig_Error_Runtime('Variable "subtitle" does not exist.', 17, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new Twig_Error_Runtime('Variable "subtitle" does not exist.', 17, $this->source); })()), "html", null, true);
        } elseif (((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 17, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 17, $this->source); })()), "html", null, true);
        }
        echo "</title>
    ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 18, $this->source); })()), "author", array()))) {
            // line 19
            echo "        <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 19, $this->source); })()), "author", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 21
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 21, $this->source); })()), "description", array()))) {
            // line 22
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 22, $this->source); })()), "description", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 24
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 24, $this->source); })()), "keyword", array()))) {
            // line 25
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 25, $this->source); })()), "keyword", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 27
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 27, $this->source); })()), "meta_robots", array()))) {
            // line 28
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 28, $this->source); })()), "meta_robots", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 30
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 30, $this->source); })()), "meta_tags", array()))) {
            // line 31
            echo "        ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new Twig_Error_Runtime('Variable "Page" does not exist.', 31, $this->source); })()), "meta_tags", array())));
            echo "
    ";
        }
        // line 33
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 38
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 39
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    ";
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 50, $this->source); })()), "Head", array())) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 51, $this->source); })()), "Head", array())));
            echo "
    ";
        }
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", array("snippets" => (isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context) ? $context["plugin_assets"] : (function () { throw new Twig_Error_Runtime('Variable "plugin_assets" does not exist.', 54, $this->source); })())));
        }
        // line 55
        echo "</head>
<body id=\"page_";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (((isset($context["body_class"]) || array_key_exists("body_class", $context))) ? (_twig_default_filter((isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new Twig_Error_Runtime('Variable "body_class" does not exist.', 56, $this->source); })()), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 58, $this->source); })()), "BodyAfter", array())) {
            // line 59
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 59, $this->source); })()), "BodyAfter", array())));
            echo "
";
        }
        // line 61
        echo "
<div class=\"ec-layoutRole\">
    ";
        // line 64
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 64, $this->source); })()), "Header", array())) {
            // line 65
            echo "        <div class=\"ec-layoutRole__header\">
            ";
            // line 66
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 66, $this->source); })()), "Header", array())));
            echo "
        </div>
    ";
        }
        // line 69
        echo "
    ";
        // line 71
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 71, $this->source); })()), "ContentsTop", array())) {
            // line 72
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 73
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 73, $this->source); })()), "ContentsTop", array())));
            echo "
        </div>
    ";
        }
        // line 76
        echo "
    <div class=\"ec-layoutRole__contents\">
        ";
        // line 79
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 79, $this->source); })()), "SideLeft", array())) {
            // line 80
            echo "            <div class=\"ec-ec-layoutRole__left\">
                ";
            // line 81
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 81, $this->source); })()), "SideLeft", array())));
            echo "
            </div>
        ";
        }
        // line 84
        echo "
        ";
        // line 85
        $context["layoutRoleMain"] = "ec-layoutRole__main";
        // line 86
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 86, $this->source); })()), "ColumnNum", array()) == 2)) {
            // line 87
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 88
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 88, $this->source); })()), "ColumnNum", array()) == 3)) {
            // line 89
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainBetweenColumn";
            // line 90
            echo "        ";
        }
        // line 91
        echo "
        <div class=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["layoutRoleMain"]) || array_key_exists("layoutRoleMain", $context) ? $context["layoutRoleMain"] : (function () { throw new Twig_Error_Runtime('Variable "layoutRoleMain" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 94
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 94, $this->source); })()), "MainTop", array())) {
            // line 95
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 96
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 96, $this->source); })()), "MainTop", array())));
            echo "
                </div>
            ";
        }
        // line 99
        echo "
            ";
        // line 101
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "
            ";
        // line 104
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 104, $this->source); })()), "MainBottom", array())) {
            // line 105
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 106
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 106, $this->source); })()), "MainBottom", array())));
            echo "
                </div>
            ";
        }
        // line 109
        echo "        </div>

        ";
        // line 112
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 112, $this->source); })()), "SideRight", array())) {
            // line 113
            echo "            <div class=\"ec-layoutRole__mainRight\">
                ";
            // line 114
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 114, $this->source); })()), "SideRight", array())));
            echo "
            </div>
        ";
        }
        // line 117
        echo "    </div>

    ";
        // line 120
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 120, $this->source); })()), "ContentsBottom", array())) {
            // line 121
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 122
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 122, $this->source); })()), "ContentsBottom", array())));
            echo "
        </div>
    ";
        }
        // line 125
        echo "
    ";
        // line 127
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 127, $this->source); })()), "Footer", array())) {
            // line 128
            echo "        <div class=\"ec-layoutRole__footer\">
            ";
            // line 129
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 129, $this->source); })()), "Footer", array())));
            echo "
        </div>
    ";
        }
        // line 132
        echo "</div><!-- ec-layoutRole -->

<div class=\"ec-overlayRole\"></div>
<div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
<div class=\"ec-drawerRole\">
    ";
        // line 138
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 138, $this->source); })()), "Drawer", array())) {
            // line 139
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 139, $this->source); })()), "Drawer", array())));
            echo "
    ";
        }
        // line 141
        echo "</div>
<div class=\"ec-blockTopBtn pagetop\">";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ページトップへ"), "html", null, true);
        echo "</div>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
";
        // line 145
        $this->loadTemplate("@common/lang.twig", "default_frame.twig", 145)->display($context);
        // line 146
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eccube.js"), "html", null, true);
        echo "\"></script>
";
        // line 148
        $this->displayBlock('javascript', $context, $blocks);
        // line 150
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 150, $this->source); })()), "CloseBodyBefore", array())) {
            // line 151
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new Twig_Error_Runtime('Variable "Layout" does not exist.', 151, $this->source); })()), "CloseBodyBefore", array())));
            echo "
";
        }
        // line 154
        if ((isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context))) {
            // line 155
            echo "    ";
            echo twig_include($this->env, $context, "snippet.twig", array("snippets" => (isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context) ? $context["plugin_snippets"] : (function () { throw new Twig_Error_Runtime('Variable "plugin_snippets" does not exist.', 155, $this->source); })())));
            echo "
";
        }
        // line 157
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 148
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 148,  386 => 101,  375 => 38,  366 => 157,  360 => 155,  358 => 154,  352 => 151,  350 => 150,  348 => 148,  344 => 147,  339 => 146,  337 => 145,  331 => 142,  328 => 141,  322 => 139,  319 => 138,  312 => 132,  306 => 129,  303 => 128,  300 => 127,  297 => 125,  291 => 122,  288 => 121,  285 => 120,  281 => 117,  275 => 114,  272 => 113,  269 => 112,  265 => 109,  259 => 106,  256 => 105,  253 => 104,  250 => 102,  247 => 101,  244 => 99,  238 => 96,  235 => 95,  232 => 94,  228 => 92,  225 => 91,  222 => 90,  219 => 89,  216 => 88,  213 => 87,  210 => 86,  208 => 85,  205 => 84,  199 => 81,  196 => 80,  193 => 79,  189 => 76,  183 => 73,  180 => 72,  177 => 71,  174 => 69,  168 => 66,  165 => 65,  162 => 64,  158 => 61,  152 => 59,  150 => 58,  144 => 56,  141 => 55,  136 => 54,  134 => 53,  128 => 51,  125 => 50,  113 => 39,  111 => 38,  107 => 37,  99 => 33,  93 => 31,  90 => 30,  84 => 28,  81 => 27,  75 => 25,  72 => 24,  66 => 22,  63 => 21,  57 => 19,  55 => 18,  44 => 17,  40 => 16,  32 => 12,  29 => 1,);
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
<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
    <title>{{ BaseInfo.shop_name }}{% if subtitle is defined and subtitle is not empty %} / {{ subtitle }}{% elseif title is defined and title is not empty %} / {{ title }}{% endif %}</title>
    {% if Page.author is not empty %}
        <meta name=\"author\" content=\"{{ Page.author }}\">
    {% endif %}
    {% if Page.description is not empty %}
        <meta name=\"description\" content=\"{{ Page.description }}\">
    {% endif %}
    {% if Page.keyword is not empty %}
        <meta name=\"keywords\" content=\"{{ Page.keyword }}\">
    {% endif %}
    {% if Page.meta_robots is not empty %}
        <meta name=\"robots\" content=\"{{ Page.meta_robots }}\">
    {% endif %}
    {% if Page.meta_tags is not empty %}
        {{ include(template_from_string(Page.meta_tags)) }}
    {% endif %}
    <link rel=\"icon\" href=\"{{ asset('assets/img/common/favicon.ico') }}\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    {% block stylesheet %}{% endblock %}
    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    {# Layout: HEAD #}
    {% if Layout.Head %}
        {{ include('block.twig', {'Blocks': Layout.Head}) }}
    {% endif %}
    {# プラグイン用styleseetやmetatagなど #}
    {% if plugin_assets is defined %}{{ include('@admin/snippet.twig', { snippets: plugin_assets }) }}{% endif %}
</head>
<body id=\"page_{{ app.request.get('_route') }}\" class=\"{{ body_class|default('other_page') }}\">
{# Layout: BODY_AFTER #}
{% if Layout.BodyAfter %}
    {{ include('block.twig', {'Blocks': Layout.BodyAfter}) }}
{% endif %}

<div class=\"ec-layoutRole\">
    {# Layout: HEADER #}
    {% if Layout.Header %}
        <div class=\"ec-layoutRole__header\">
            {{ include('block.twig', {'Blocks': Layout.Header}) }}
        </div>
    {% endif %}

    {# Layout: CONTENTS_TOP #}
    {% if Layout.ContentsTop %}
        <div class=\"ec-layoutRole__contentTop\">
            {{ include('block.twig', {'Blocks': Layout.ContentsTop}) }}
        </div>
    {% endif %}

    <div class=\"ec-layoutRole__contents\">
        {# Layout: SIDE_LEFT #}
        {% if Layout.SideLeft %}
            <div class=\"ec-ec-layoutRole__left\">
                {{ include('block.twig', {'Blocks': Layout.SideLeft}) }}
            </div>
        {% endif %}

        {% set layoutRoleMain = 'ec-layoutRole__main' %}
        {% if Layout.ColumnNum == 2 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainWithColumn' %}
        {% elseif Layout.ColumnNum == 3 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainBetweenColumn' %}
        {% endif %}

        <div class=\"{{ layoutRoleMain }}\">
            {# Layout: MAIN_TOP #}
            {% if Layout.MainTop %}
                <div class=\"ec-layoutRole__mainTop\">
                    {{ include('block.twig', {'Blocks': Layout.MainTop}) }}
                </div>
            {% endif %}

            {# MAIN AREA #}
            {% block main %}{% endblock %}

            {# Layout: MAIN_Bottom #}
            {% if Layout.MainBottom %}
                <div class=\"ec-layoutRole__mainBottom\">
                    {{ include('block.twig', {'Blocks': Layout.MainBottom}) }}
                </div>
            {% endif %}
        </div>

        {# Layout: SIDE_RIGHT #}
        {% if Layout.SideRight %}
            <div class=\"ec-layoutRole__mainRight\">
                {{ include('block.twig', {'Blocks': Layout.SideRight}) }}
            </div>
        {% endif %}
    </div>

    {# Layout: CONTENTS_BOTTOM #}
    {% if Layout.ContentsBottom %}
        <div class=\"ec-layoutRole__contentBottom\">
            {{ include('block.twig', {'Blocks': Layout.ContentsBottom}) }}
        </div>
    {% endif %}

    {# Layout: CONTENTS_FOOTER #}
    {% if Layout.Footer %}
        <div class=\"ec-layoutRole__footer\">
            {{ include('block.twig', {'Blocks': Layout.Footer}) }}
        </div>
    {% endif %}
</div><!-- ec-layoutRole -->

<div class=\"ec-overlayRole\"></div>
<div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
<div class=\"ec-drawerRole\">
    {# Layout: DRAWER #}
    {% if Layout.Drawer %}
        {{ include('block.twig', {'Blocks': Layout.Drawer}) }}
    {% endif %}
</div>
<div class=\"ec-blockTopBtn pagetop\">{{'ページトップへ'|trans}}</div>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
{% include('@common/lang.twig') %}
<script src=\"{{ asset('assets/js/function.js') }}\"></script>
<script src=\"{{ asset('assets/js/eccube.js') }}\"></script>
{% block javascript %}{% endblock %}
{# Layout: CLOSE_BODY_BEFORE #}
{% if Layout.CloseBodyBefore %}
    {{ include('block.twig', {'Blocks': Layout.CloseBodyBefore}) }}
{% endif %}
{# プラグイン用Snippet #}
{% if plugin_snippets is defined %}
    {{ include('snippet.twig', { snippets: plugin_snippets }) }}
{% endif %}
</body>
</html>
", "default_frame.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\default_frame.twig");
    }
}
