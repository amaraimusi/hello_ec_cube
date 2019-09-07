<?php

/* default_frame.twig */
class __TwigTemplate_c5919d3204e989af5f5edd89ef84dca2ddfc8c62589824dd07ab8fc09edef6ff extends Twig_Template
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
        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", array()), "html", null, true);
        if (((isset($context["subtitle"]) || array_key_exists("subtitle", $context)) &&  !twig_test_empty(($context["subtitle"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        } elseif (((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty(($context["title"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        echo "</title>
    ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", array()))) {
            // line 19
            echo "        <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 21
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", array()))) {
            // line 22
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 24
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", array()))) {
            // line 25
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 27
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_robots", array()))) {
            // line 28
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_robots", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 30
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", array()))) {
            // line 31
            echo "        ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", array())));
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
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", array())) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", array())));
            echo "
    ";
        }
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", array("snippets" => ($context["plugin_assets"] ?? null)));
        }
        // line 55
        echo "</head>
<body id=\"page_";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (((isset($context["body_class"]) || array_key_exists("body_class", $context))) ? (_twig_default_filter(($context["body_class"] ?? null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", array())) {
            // line 59
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", array())));
            echo "
";
        }
        // line 61
        echo "
<div class=\"ec-layoutRole\">
    ";
        // line 64
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", array())) {
            // line 65
            echo "        <div class=\"ec-layoutRole__header\">
            ";
            // line 66
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", array())));
            echo "
        </div>
    ";
        }
        // line 69
        echo "
    ";
        // line 71
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", array())) {
            // line 72
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 73
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", array())));
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
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", array())) {
            // line 80
            echo "            <div class=\"ec-ec-layoutRole__left\">
                ";
            // line 81
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", array())));
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
        if ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", array()) == 2)) {
            // line 87
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 88
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", array()) == 3)) {
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
        echo twig_escape_filter($this->env, ($context["layoutRoleMain"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 94
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", array())) {
            // line 95
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 96
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", array())));
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
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", array())) {
            // line 105
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 106
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", array())));
            echo "
                </div>
            ";
        }
        // line 109
        echo "        </div>

        ";
        // line 112
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", array())) {
            // line 113
            echo "            <div class=\"ec-layoutRole__mainRight\">
                ";
            // line 114
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", array())));
            echo "
            </div>
        ";
        }
        // line 117
        echo "    </div>

    ";
        // line 120
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", array())) {
            // line 121
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 122
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", array())));
            echo "
        </div>
    ";
        }
        // line 125
        echo "
    ";
        // line 127
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", array())) {
            // line 128
            echo "        <div class=\"ec-layoutRole__footer\">
            ";
            // line 129
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", array())));
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
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", array())) {
            // line 139
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", array())));
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
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", array())) {
            // line 151
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", array("Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", array())));
            echo "
";
        }
        // line 154
        if ((isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context))) {
            // line 155
            echo "    ";
            echo twig_include($this->env, $context, "snippet.twig", array("snippets" => ($context["plugin_snippets"] ?? null)));
            echo "
";
        }
        // line 157
        echo "</body>
</html>
";
    }

    // line 38
    public function block_stylesheet($context, array $blocks = array())
    {
    }

    // line 101
    public function block_main($context, array $blocks = array())
    {
    }

    // line 148
    public function block_javascript($context, array $blocks = array())
    {
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
        return array (  379 => 148,  374 => 101,  369 => 38,  363 => 157,  357 => 155,  355 => 154,  349 => 151,  347 => 150,  345 => 148,  341 => 147,  336 => 146,  334 => 145,  328 => 142,  325 => 141,  319 => 139,  316 => 138,  309 => 132,  303 => 129,  300 => 128,  297 => 127,  294 => 125,  288 => 122,  285 => 121,  282 => 120,  278 => 117,  272 => 114,  269 => 113,  266 => 112,  262 => 109,  256 => 106,  253 => 105,  250 => 104,  247 => 102,  244 => 101,  241 => 99,  235 => 96,  232 => 95,  229 => 94,  225 => 92,  222 => 91,  219 => 90,  216 => 89,  213 => 88,  210 => 87,  207 => 86,  205 => 85,  202 => 84,  196 => 81,  193 => 80,  190 => 79,  186 => 76,  180 => 73,  177 => 72,  174 => 71,  171 => 69,  165 => 66,  162 => 65,  159 => 64,  155 => 61,  149 => 59,  147 => 58,  141 => 56,  138 => 55,  133 => 54,  131 => 53,  125 => 51,  122 => 50,  110 => 39,  108 => 38,  104 => 37,  96 => 33,  90 => 31,  87 => 30,  81 => 28,  78 => 27,  72 => 25,  69 => 24,  63 => 22,  60 => 21,  54 => 19,  52 => 18,  41 => 17,  37 => 16,  29 => 12,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default_frame.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\default_frame.twig");
    }
}
