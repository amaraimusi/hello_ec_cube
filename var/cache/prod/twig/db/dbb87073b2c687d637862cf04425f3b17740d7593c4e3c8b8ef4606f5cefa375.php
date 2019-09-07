<?php

/* Block/cart.twig */
class __TwigTemplate_8575f29a945619852c566cfe710d45f5cd9cbb9967458383546b7ad5dad00ada extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalQuantity"] ?? null)), "html", null, true);
        echo "</span>
        </i>
        <div class=\"ec-cartNavi__label\">
            <div class=\"ec-cartNavi__price\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["totalPrice"] ?? null)), "html", null, true);
        echo "</div>
        </div>
    </div>
    ";
        // line 23
        if ((($context["totalQuantity"] ?? null) > 0)) {
            // line 24
            echo "        <div class=\"ec-cartNaviIsset\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Carts"] ?? null));
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
                    $context["Product"] = twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "Product", array());
                    // line 29
                    echo "                    <div class=\"ec-cartNaviIsset__cart\">
                        <div class=\"ec-cartNaviIsset__cartImage\">
                            <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "MainListImage", array())), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", array()), "html", null, true);
                    echo "\">
                        </div>
                        <div class=\"ec-cartNaviIsset__cartContent\">
                            <div class=\"ec-cartNaviIsset__cartContentTitle\">";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", array()), "html", null, true);
                    echo "
                                <div class=\"ec-font-size-1\">
                                    ";
                    // line 36
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", array()), "id", array()))) {
                        // line 37
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", array()), "ClassName", array()), "name", array()), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 39
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", array()), "id", array()))) {
                        // line 40
                        echo "                                        <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", array()), "ClassName", array()), "name", array()), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", array()), "html", null, true);
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
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
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
        return array (  163 => 65,  156 => 61,  152 => 59,  145 => 55,  139 => 54,  136 => 53,  130 => 52,  118 => 48,  113 => 46,  109 => 45,  104 => 42,  96 => 40,  93 => 39,  85 => 37,  83 => 36,  78 => 34,  70 => 31,  66 => 29,  63 => 28,  60 => 27,  55 => 26,  51 => 25,  48 => 24,  46 => 23,  40 => 20,  34 => 17,  29 => 14,  27 => 13,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/cart.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\Block\\cart.twig");
    }
}
