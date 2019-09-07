<?php

/* Block/login.twig */
class __TwigTemplate_74595bb9fe0456ab54f53c5c9e5a5f052abfcba049cc08f9518fe4fb98bf3f3b extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/login.twig"));

        // line 11
        echo "
<div class=\"ec-headerNav\">
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 14
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new Twig_Error_Runtime('Variable "BaseInfo" does not exist.', 20, $this->source); })()), "option_favorite_product", array())) {
                // line 21
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 28
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログアウト"), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        } else {
            // line 35
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録"), "html", null, true);
            echo "</span>
            </a>
        </div>
        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new Twig_Error_Runtime('Variable "BaseInfo" does not exist.', 41, $this->source); })()), "option_favorite_product", array())) {
                // line 42
                echo "            <div class=\"ec-headerNav__item\">
                <a href=\"";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り"), "html", null, true);
                echo "</span>
                </a>
            </div>
        ";
            }
            // line 49
            echo "        <div class=\"ec-headerNav__item\">
            <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
            echo "\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ログイン"), "html", null, true);
            echo "</span>
            </a>
        </div>
    ";
        }
        // line 56
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 56,  117 => 52,  112 => 50,  109 => 49,  102 => 45,  97 => 43,  94 => 42,  92 => 41,  86 => 38,  81 => 36,  78 => 35,  71 => 31,  66 => 29,  63 => 28,  56 => 24,  51 => 22,  48 => 21,  46 => 20,  40 => 17,  35 => 15,  32 => 14,  30 => 13,  26 => 11,);
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

<div class=\"ec-headerNav\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'マイページ'|trans }}</span>
            </a>
        </div>
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('logout') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'ログアウト'|trans }}</span>
            </a>
        </div>
    {% else %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('entry') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-user fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ '新規会員登録'|trans }}</span>
            </a>
        </div>
        {% if BaseInfo.option_favorite_product %}
            <div class=\"ec-headerNav__item\">
                <a href=\"{{ url('mypage_favorite') }}\">
                    <i class=\"ec-headerNav__itemIcon fas fa-heart fa-fw\"></i>
                    <span class=\"ec-headerNav__itemLink\">{{ 'お気に入り'|trans }}</span>
                </a>
            </div>
        {% endif %}
        <div class=\"ec-headerNav__item\">
            <a href=\"{{ url('mypage_login') }}\">
                <i class=\"ec-headerNav__itemIcon fas fa-lock fa-fw\"></i>
                <span class=\"ec-headerNav__itemLink\">{{ 'ログイン'|trans }}</span>
            </a>
        </div>
    {% endif %}
</div>
", "Block/login.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\Block\\login.twig");
    }
}
