<?php

/* @admin/nav.twig */
class __TwigTemplate_d89388136e3c8781af9f303aec42c379458e2e15f36212d3156be6362357e099 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@admin/nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@admin/nav.twig"));

        // line 11
        echo "<nav>
    <ul class=\"c-mainNavArea__nav\">
        <!-- ホーム -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_homepage");
        echo "\">
                <i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i>
                <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home"), "html", null, true);
        echo "</span>
            </a>
        </li>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eccubeNav"]) || array_key_exists("eccubeNav", $context) ? $context["eccubeNav"] : (function () { throw new Twig_Error_Runtime('Variable "eccubeNav" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["key1"] => $context["level1"]) {
            // line 21
            echo "            <li class=\"c-mainNavArea__navItem\">
                ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, $context["level1"], "children", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "children", array())) > 0))) {
                // line 23
                echo "                    <a class=\"c-mainNavArea__navItemTitle";
                echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 23, $this->source); })())), 0, array(), "array") != $context["key1"])) ? (" collapsed") : (""));
                echo "\"
                       data-toggle=\"collapse\" href=\"#nav-";
                // line 24
                echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                echo "\"
                       aria-expanded=\"";
                // line 25
                echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 25, $this->source); })())), 0, array(), "array") == $context["key1"])) ? ("true") : ("false"));
                echo "\"
                       aria-controls=\"nav-";
                // line 26
                echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                echo "\">
                        <i class=\"fa ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "icon", array()), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                        <span>";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level1"], "name", array())), "html", null, true);
                echo "</span>
                    </a>
                    <ul class=\"collapse ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 30, $this->source); })())), 0, array(), "array") == $context["key1"])) {
                    echo " show";
                }
                echo "\" id=\"nav-";
                echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                echo "\">
                        ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["level1"], "children", array()));
                foreach ($context['_seq'] as $context["key2"] => $context["level2"]) {
                    // line 32
                    echo "                            <li>
                                ";
                    // line 33
                    if ((twig_get_attribute($this->env, $this->source, $context["level2"], "children", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "children", array())) > 0))) {
                        // line 34
                        echo "                                    <a class=\"c-mainNavArea__navItemSubTitle";
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 34, $this->source); })())), 1, array(), "array") != $context["key2"])) ? (" collapsed") : (""));
                        echo "\"
                                       data-toggle=\"collapse\" href=\"#nav-";
                        // line 35
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "\"
                                       aria-expanded=\"";
                        // line 36
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 36, $this->source); })())), 1, array(), "array") != $context["key2"])) ? ("true") : ("false"));
                        echo "\"
                                       aria-controls=\"nav-";
                        // line 37
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "\">
                                        <span>";
                        // line 38
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level2"], "name", array())), "html", null, true);
                        echo "</span>
                                    </a>
                                    <ul class=\"collapse";
                        // line 40
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 40, $this->source); })())), 1, array(), "array") == $context["key2"])) ? (" show") : (""));
                        echo "\" id=\"nav-";
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "\">
                                        ";
                        // line 41
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["level2"], "children", array()));
                        foreach ($context['_seq'] as $context["key3"] => $context["level3"]) {
                            // line 42
                            echo "                                            <li>
                                                <a href=\"";
                            // line 43
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level3"], "url", array()), ((twig_get_attribute($this->env, $this->source, $context["level3"], "param", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, $context["level3"], "param", array())) : (array()))), "html", null, true);
                            echo "\"";
                            echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 43, $this->source); })())), 2, array(), "array") == $context["key3"])) ? (" class=\"is-active\"") : (""));
                            echo ">
                                                    <span>";
                            // line 44
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level3"], "name", array())), "html", null, true);
                            echo "</span>
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key3'], $context['level3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 50
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level2"], "url", array()), ((twig_get_attribute($this->env, $this->source, $context["level2"], "param", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, $context["level2"], "param", array())) : (array()))), "html", null, true);
                        echo "\"";
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new Twig_Error_Runtime('Variable "menus" does not exist.', 50, $this->source); })())), 1, array(), "array") == $context["key2"])) ? (" class=\"is-active\"") : (""));
                        echo ">
                                        <span>";
                        // line 51
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level2"], "name", array())), "html", null, true);
                        echo "</span>
                                    </a>
                                ";
                    }
                    // line 54
                    echo "                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['level2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                    </ul>
                ";
            } else {
                // line 58
                echo "                    <a class=\"c-mainNavArea__navItemTitle\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level1"], "url", array()), ((twig_get_attribute($this->env, $this->source, $context["level1"], "param", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, $context["level1"], "param", array())) : (array()))), "html", null, true);
                echo "\">
                        <i class=\"fa ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "icon", array()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level1"], "name", array())), "html", null, true);
                echo "</span>
                    </a>
                ";
            }
            // line 63
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['level1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        <!-- 情報 -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle collapsed\" data-toggle=\"collapse\" href=\"#others\" aria-expanded=\"false\"
               aria-controls=\"others\">
                <i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
                <span>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info"), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"collapse\" id=\"others\">
                <li>
                    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new Twig_Error_Runtime('Variable "eccube_config" does not exist.', 74, $this->source); })()), "eccube_official_site_url", array()), "html", null, true);
        echo "\" target=\"_blank\">
                        <span>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info.official_site"), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new Twig_Error_Runtime('Variable "eccube_config" does not exist.', 79, $this->source); })()), "eccube_community_site_url", array()), "html", null, true);
        echo "\" target=\"_blank\">
                        <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info.community"), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new Twig_Error_Runtime('Variable "eccube_config" does not exist.', 84, $this->source); })()), "eccube_document_url", array()), "html", null, true);
        echo "\" target=\"_blank\">
                        <span>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info.document"), "html", null, true);
        echo "</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 85,  235 => 84,  228 => 80,  224 => 79,  217 => 75,  213 => 74,  206 => 70,  199 => 65,  192 => 63,  186 => 60,  182 => 59,  177 => 58,  173 => 56,  166 => 54,  160 => 51,  153 => 50,  149 => 48,  139 => 44,  133 => 43,  130 => 42,  126 => 41,  120 => 40,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  98 => 34,  96 => 33,  93 => 32,  89 => 31,  81 => 30,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  60 => 24,  55 => 23,  53 => 22,  50 => 21,  46 => 20,  40 => 17,  35 => 15,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
This file is part of EC-CUBE

Copyright(c) LOCKON CO.,LTD. All Rights Reserved.

http://www.lockon.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<nav>
    <ul class=\"c-mainNavArea__nav\">
        <!-- ホーム -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle\" href=\"{{ url('admin_homepage') }}\">
                <i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i>
                <span>{{ 'admin.home'|trans }}</span>
            </a>
        </li>
        {% for key1, level1 in eccubeNav %}
            <li class=\"c-mainNavArea__navItem\">
                {% if level1.children is defined and level1.children|length > 0 %}
                    <a class=\"c-mainNavArea__navItemTitle{{ active_menus(menus)[0] != key1 ? ' collapsed' }}\"
                       data-toggle=\"collapse\" href=\"#nav-{{ key1 }}\"
                       aria-expanded=\"{{ active_menus(menus)[0] == key1 ? 'true' : 'false' }}\"
                       aria-controls=\"nav-{{ key1 }}\">
                        <i class=\"fa {{ level1.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        <span>{{ level1.name|trans }}</span>
                    </a>
                    <ul class=\"collapse {% if active_menus(menus)[0] == key1 %} show{% endif %}\" id=\"nav-{{ key1 }}\">
                        {% for key2, level2 in level1.children %}
                            <li>
                                {% if level2.children is defined and level2.children|length > 0 %}
                                    <a class=\"c-mainNavArea__navItemSubTitle{{ active_menus(menus)[1] != key2 ? ' collapsed' }}\"
                                       data-toggle=\"collapse\" href=\"#nav-{{ key2 }}\"
                                       aria-expanded=\"{{ active_menus(menus)[1] != key2 ? 'true' : 'false' }}\"
                                       aria-controls=\"nav-{{ key2 }}\">
                                        <span>{{ level2.name|trans }}</span>
                                    </a>
                                    <ul class=\"collapse{{ active_menus(menus)[1] == key2 ? ' show' }}\" id=\"nav-{{ key2 }}\">
                                        {% for key3, level3 in level2.children %}
                                            <li>
                                                <a href=\"{{ url(level3.url, level3.param is defined ? level3.param : []) }}\"{{ active_menus(menus)[2] == key3 ? ' class=\"is-active\"' }}>
                                                    <span>{{ level3.name|trans }}</span>
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    <a href=\"{{ url(level2.url, level2.param is defined ? level2.param : []) }}\"{{ active_menus(menus)[1] == key2 ? ' class=\"is-active\"' }}>
                                        <span>{{ level2.name|trans }}</span>
                                    </a>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <a class=\"c-mainNavArea__navItemTitle\" href=\"{{ url(level1.url, level1.param is defined ? level1.param : []) }}\">
                        <i class=\"fa {{ level1.icon }}\" aria-hidden=\"true\"></i>
                        <span>{{ level1.name|trans }}</span>
                    </a>
                {% endif %}
            </li>
        {% endfor %}
        <!-- 情報 -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle collapsed\" data-toggle=\"collapse\" href=\"#others\" aria-expanded=\"false\"
               aria-controls=\"others\">
                <i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
                <span>{{ 'admin.info'|trans }}</span>
            </a>
            <ul class=\"collapse\" id=\"others\">
                <li>
                    <a href=\"{{ eccube_config.eccube_official_site_url }}\" target=\"_blank\">
                        <span>{{ 'admin.info.official_site'|trans }}</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ eccube_config.eccube_community_site_url }}\" target=\"_blank\">
                        <span>{{ 'admin.info.community'|trans }}</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ eccube_config.eccube_document_url }}\" target=\"_blank\">
                        <span>{{ 'admin.info.document'|trans }}</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
", "@admin/nav.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\admin\\nav.twig");
    }
}
