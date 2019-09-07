<?php

/* Block/cart.twig */
class __TwigTemplate_9bafe9263208571609af165e8f59e8c8efd721c17c32ca4744cd4d45b7740e14 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Block/cart.twig"));

        // line 11
        $context["Carts"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_all_carts();
        // line 12
        $context["totalPrice"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_carts_total_price();
        // line 13
        $context["totalQuantity"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_carts_total_quantity();
        // line 14
        echo "<div class=\"ec-cartNaviWrap\">
    <div class=\"ec-cartNavi\">
        <i class=\"ec-cartNavi__icon fas fa-shopping-cart\">
            <span class=\"ec-cartNavi__badge\">";
        // line 17
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new Twig_Error_Runtime('Variable "totalQuantity" does not exist.', 17, $this->source); })())), "html", null, true);
        echo "</span>
        </i>
        <div class=\"ec-cartNavi__label\">
            <div class=\"ec-cartNavi__price\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new Twig_Error_Runtime('Variable "totalPrice" does not exist.', 20, $this->source); })())), "html", null, true);
        echo "</div>
        </div>
    </div>
    ";
        // line 23
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new Twig_Error_Runtime('Variable "totalQuantity" does not exist.', 23, $this->source); })()) > 0)) {
            // line 24
            echo "        <div class=\"ec-cartNaviIsset\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new Twig_Error_Runtime('Variable "Carts" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Cart"]) {
                // line 26
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 27
                    echo "                    ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", array());
                    // line 28
                    echo "                    ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 28, $this->source); })()), "Product", array());
                    // line 29
                    echo "                    <div class=\"ec-cartNaviIsset__cart\">
                        <div class=\"ec-cartNaviIsset__cartImage\">
                            <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new Twig_Error_Runtime('Variable "Product" does not exist.', 31, $this->source); })()), "MainListImage", array())), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new Twig_Error_Runtime('Variable "Product" does not exist.', 31, $this->source); })()), "name", array()), "html", null, true);
                    echo "\">
                        </div>
                        <div class=\"ec-cartNaviIsset__cartContent\">
                            <div class=\"ec-cartNaviIsset__cartContentTitle\">";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new Twig_Error_Runtime('Variable "Product" does not exist.', 34, $this->source); })()), "name", array()), "html", null, true);
                    echo "
                                <div class=\"ec-font-size-1\">
                                    ";
                    // line 36
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 36, $this->source); })()), "ClassCategory1", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 36, $this->source); })()), "ClassCategory1", array()), "id", array()))) {
                        // line 37
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 37, $this->source); })()), "ClassCategory1", array()), "ClassName", array()), "name", array()), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 37, $this->source); })()), "ClassCategory1", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 39
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 39, $this->source); })()), "ClassCategory2", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 39, $this->source); })()), "ClassCategory2", array()), "id", array()))) {
                        // line 40
                        echo "                                        <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 40, $this->source); })()), "ClassCategory2", array()), "ClassName", array()), "name", array()), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new Twig_Error_Runtime('Variable "ProductClass" does not exist.', 40, $this->source); })()), "ClassCategory2", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 42
                    echo "                                </div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentPrice\">
                                ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", array())), "html", null, true);
                    echo "
                                <div class=\"ec-cartNaviIsset__cartContentTax\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                    echo "</div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentNumber\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", array())), "html", null, true);
                    echo "</div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            <div class=\"ec-cartNaviIsset__action\">
                <a class=\"ec-blockBtn--action\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
            echo "</a>
                <a class=\"ec-blockBtn ec-cartNavi--cancel\">";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("キャンセル"), "html", null, true);
            echo "</a>
            </div>
        </div>
    ";
        } else {
            // line 59
            echo "        <div class=\"ec-cartNaviNull\">
            <div class=\"ec-cartNaviNull__message\">
                <p>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在カート内に商品はございません。"), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
        // line 65
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  159 => 61,  155 => 59,  148 => 55,  142 => 54,  139 => 53,  133 => 52,  121 => 48,  116 => 46,  112 => 45,  107 => 42,  99 => 40,  96 => 39,  88 => 37,  86 => 36,  81 => 34,  73 => 31,  69 => 29,  66 => 28,  63 => 27,  58 => 26,  54 => 25,  51 => 24,  49 => 23,  43 => 20,  37 => 17,  32 => 14,  30 => 13,  28 => 12,  26 => 11,);
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
{% set Carts = get_all_carts() %}
{% set totalPrice = get_carts_total_price() %}
{% set totalQuantity = get_carts_total_quantity() %}
<div class=\"ec-cartNaviWrap\">
    <div class=\"ec-cartNavi\">
        <i class=\"ec-cartNavi__icon fas fa-shopping-cart\">
            <span class=\"ec-cartNavi__badge\">{{ totalQuantity|number_format }}</span>
        </i>
        <div class=\"ec-cartNavi__label\">
            <div class=\"ec-cartNavi__price\">{{ totalPrice|price }}</div>
        </div>
    </div>
    {% if totalQuantity > 0 %}
        <div class=\"ec-cartNaviIsset\">
            {% for Cart in Carts %}
                {% for CartItem in Cart.CartItems %}
                    {% set ProductClass = CartItem.ProductClass %}
                    {% set Product = ProductClass.Product %}
                    <div class=\"ec-cartNaviIsset__cart\">
                        <div class=\"ec-cartNaviIsset__cartImage\">
                            <img src=\"{{ asset(Product.MainListImage|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\">
                        </div>
                        <div class=\"ec-cartNaviIsset__cartContent\">
                            <div class=\"ec-cartNaviIsset__cartContentTitle\">{{ Product.name }}
                                <div class=\"ec-font-size-1\">
                                    {% if ProductClass.ClassCategory1 and ProductClass.ClassCategory1.id %}
                                        {{ ProductClass.ClassCategory1.ClassName.name }}：{{ ProductClass.ClassCategory1 }}
                                    {% endif %}
                                    {% if ProductClass.ClassCategory2 and ProductClass.ClassCategory2.id %}
                                        <br>{{ ProductClass.ClassCategory2.ClassName.name }}：{{ ProductClass.ClassCategory2 }}
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentPrice\">
                                {{ CartItem.price|price }}
                                <div class=\"ec-cartNaviIsset__cartContentTax\">{{ '税込'|trans }}</div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentNumber\">{{ '数量'|trans }} {{ CartItem.quantity|number_format }}</div>
                        </div>
                    </div>
                {% endfor %}
            {% endfor %}
            <div class=\"ec-cartNaviIsset__action\">
                <a class=\"ec-blockBtn--action\" href=\"{{ url('cart') }}\">{{ 'カートへ進む'|trans }}</a>
                <a class=\"ec-blockBtn ec-cartNavi--cancel\">{{ 'キャンセル'|trans }}</a>
            </div>
        </div>
    {% else %}
        <div class=\"ec-cartNaviNull\">
            <div class=\"ec-cartNaviNull__message\">
                <p>{{ '現在カート内に商品はございません。'|trans }}</p>
            </div>
        </div>
    {% endif %}
</div>
", "Block/cart.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\Block\\cart.twig");
    }
}
