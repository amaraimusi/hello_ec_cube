<?php

/* __string_template__8a1d32886787d4c6fb5ca3a4aa4a067ff42cdf424adb8a72434b9d02496ebc55 */
class __TwigTemplate_9611a229b165d0bf5f90b9ee83aab39f24b42d542411310fff23f68d509aeca5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "__string_template__8a1d32886787d4c6fb5ca3a4aa4a067ff42cdf424adb8a72434b9d02496ebc55", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home"), "html", null, true);
    }

    // line 14
    public function block_sub_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
    <script>
        \$(function() {
            var options = {
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 25,
                        bottom: 0
                    }
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return '¥' + tooltipItem.yLabel.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                        }
                    }
                },
                scales: {
                    yAxes: [
                        {
                            id: 'y-axis-1',
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                callback: function(label, index, labels) {
                                    if (Math.floor(label) === label) {
                                        return '¥' + label.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                                    }
                                }
                            }
                        }
                    ]
                }
            };

            var priceBackgroundColor = 'rgba(58, 115, 188, 1)';
            var priceBorderColor = 'rgba(255, 255, 255, 0)';

            \$.ajax({
                url: '";
        // line 61
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage_sale");
        echo "',
                type: 'GET',
                dataType: 'json'
            }).done(function(datas) {

                for (var i = 0; i < datas.length; i++) {
                    var data = datas[i];

                    var labels = [];
                    var prices = [];
                    var priceBackgroundColors = [];
                    var priceBorderColors = [];
                    Object.keys(data).forEach(function(key) {
                        labels.push(key);
                        prices.push(data[key].price);
                        priceBackgroundColors.push(priceBackgroundColor);
                        priceBorderColors.push(priceBorderColor);
                    });

                    var ctx = \$('#chart-' + i)[0].getContext('2d');
                    ctx.canvas.height = 100;
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    type: 'bar',
                                    label: '";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_amount"), "html", null, true);
        echo "',
                                    data: prices,
                                    backgroundColor: priceBackgroundColors,
                                    borderColor: priceBorderColors,
                                    borderWidth: 1,
                                    yAxisID: 'y-axis-1'
                                }
                            ]
                        },
                        options: options
                    });
                }
            }).fail(function(data) {
            }).always(function() {
                \$('#loading').hide();
            });

        });

    </script>
";
    }

    // line 111
    public function block_main($context, array $blocks = array())
    {
        // line 112
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row\">
                    <div class=\"col-4 mb-4\">
                        <div id=\"order-status\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <a href=\"";
        // line 119
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\">
                                    <span class=\"card-title\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.order_status_title"), "html", null, true);
        echo "</span>
                                </a>
                            </div>
                            <div class=\"card-body p-0\">
                                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OrderStatuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderStatus"]) {
            // line 125
            echo "                                    <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                        <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", array("order_status_id" => twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", array()))), "html", null, true);
            echo "\" class=\"p-3 d-block\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col align-middle\">
                                                    <span class=\"align-middle\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "name", array()), "html", null, true);
            echo "</span>
                                                </div>
                                                <div class=\"col-auto text-right align-middle\">
                                                    <span class=\"h4 align-middle font-weight-normal text-dark\">";
            // line 132
            echo twig_escape_filter($this->env, ((( !twig_test_empty(($context["Orders"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["Orders"] ?? null), twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", array()), array(), "array", true, true))) ? ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["Orders"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", array())] ?? null) : null)) : (0)), "html", null, true);
            echo "</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                            </div>
                        </div><!-- /#order-status -->
                    </div>
                    <div class=\"col-8 mb-4\">
                        <div id=\"chart-statistics\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"row text-center border-bottom mb-3\">
                                    <div class=\"col-4 py-2 border-right\">
                                        <div class=\"h3\">
                                            ";
        // line 152
        $context["amount"] = ((twig_test_empty(($context["salesThisMonth"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesThisMonth"] ?? null), "order_amount", array())));
        // line 153
        echo "                                            ";
        $context["count"] = ((twig_test_empty(($context["salesThisMonth"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesThisMonth"] ?? null), "order_count", array())));
        // line 154
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", array("%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["amount"] ?? null)), "%count%" => twig_number_format_filter($this->env, ($context["count"] ?? null)))), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_this_month"), "html", null, true);
        echo "</small>
                                    </div>
                                    <div class=\"col-4 py-2 border-right\">
                                        <div class=\"h3\">
                                            ";
        // line 160
        $context["amount"] = ((twig_test_empty(($context["salesToday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesToday"] ?? null), "order_amount", array())));
        // line 161
        echo "                                            ";
        $context["count"] = ((twig_test_empty(($context["salesToday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesToday"] ?? null), "order_count", array())));
        // line 162
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", array("%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["amount"] ?? null)), "%count%" => twig_number_format_filter($this->env, ($context["count"] ?? null)))), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_today"), "html", null, true);
        echo "</small>
                                    </div>
                                    <div class=\"col-4 py-2\">
                                        <div class=\"h3\">
                                            ";
        // line 168
        $context["amount"] = ((twig_test_empty(($context["salesYesterday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesYesterday"] ?? null), "order_amount", array())));
        // line 169
        echo "                                            ";
        $context["count"] = ((twig_test_empty(($context["salesYesterday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesYesterday"] ?? null), "order_count", array())));
        // line 170
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", array("%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["amount"] ?? null)), "%count%" => twig_number_format_filter($this->env, ($context["count"] ?? null)))), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_yesterday"), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col text-center\">
                                        <div class=\"btn-group nav d-inline-flex\" id=\"pills-tab\" role=\"tablist\">
                                            <a class=\"nav-link active btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-weekly-tab\" data-toggle=\"pill\" href=\"#pills-weekly\" role=\"tab\" aria-controls=\"pills-weekly\" aria-selected=\"true\">
                                                ";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_weekly"), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-monthly-tab\" data-toggle=\"pill\" href=\"#pills-monthly\" role=\"tab\" aria-controls=\"pills-monthly\" aria-selected=\"false\">
                                                ";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_monthly"), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 pl-4 pr-4\" id=\"pills-year-tab\" data-toggle=\"pill\" href=\"#pills-year\" role=\"tab\" aria-controls=\"pills-year\" aria-selected=\"false\">
                                                ";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_yearly"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div id=\"loading\" class=\"text-center pt-5\">
                                            <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"tab-content\" id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-weekly\" role=\"tabpanel\" aria-labelledby=\"pills-weekly-tab\">
                                                <canvas id=\"chart-0\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-monthly\" role=\"tabpanel\" aria-labelledby=\"pills-monthly-tab\">
                                                <canvas id=\"chart-1\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-year\" role=\"tabpanel\" aria-labelledby=\"pills-year-tab\">
                                                <canvas id=\"chart-2\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /#chart-statistics -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col mb-4\">
                        <div id=\"shop-statistical\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"";
        // line 222
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage_nonstock");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-inbox fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_out_of_stock"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-right align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">";
        // line 231
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["countNonStockProducts"] ?? null)), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"";
        // line 237
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-cubes fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_products"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">";
        // line 246
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["countProducts"] ?? null)), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-left-0 border-right-0\">
                                    <a href=\"";
        // line 252
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage_customer");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-users fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_customers"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle font-weight-normal text-dark\">";
        // line 261
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["countCustomers"] ?? null)), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /#shop-statistical -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-plugin\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header border-bottom-0\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.recommend_plugins_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body py-0\" style=\"max-height: 395px; overflow-y: scroll\">
                                ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recommendedPlugins"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 278
            echo "                                    <div class=\"row py-3 border border-bottom-0 border-left-0 border-right-0\">
                                        <div class=\"col-5 col-md-4\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "id", array()), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "image", array()), "html", null, true);
            echo "\" class=\"w-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", array()), "html", null, true);
            echo "\">
                                            </a>
                                        </div>
                                        <div class=\"col-7 col-md-8 pl-0\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", array()), "html", null, true);
            echo "</a>
                                            <p class=\"m-0 pt-2\">
                                                ";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "short_description", array()), "html", null, true);
            echo "
                                            </p>
                                        </div>
                                    </div>
                                    ";
            // line 291
            echo twig_include($this->env, $context, "@admin/Store/plugin_detail_modal.twig", array("item" => $context["plugin"]));
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "                            </div>
                            <div class=\"card-footer\">
                                > <a href=\"";
        // line 295
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.recommend_plugins.owner_store"), "html", null, true);
        echo "</a>
                            </div>
                        </div><!-- /#ec-cube-plugin -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-news\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.news_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <iframe name=\"information\" class=\"link_list_wrap\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_info_url", array()), "html", null, true);
        echo "\" style=\"width:100%; border:0; min-height:300px;\"></iframe>
                            </div>
                        </div><!-- /#ec-cube-news -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.c-primaryCol -->
        </div><!-- /.c-contentsArea__primaryCol -->
    </div><!-- /.c-contentsArea__cols -->

";
    }

    public function getTemplateName()
    {
        return "__string_template__8a1d32886787d4c6fb5ca3a4aa4a067ff42cdf424adb8a72434b9d02496ebc55";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 307,  505 => 303,  492 => 295,  488 => 293,  472 => 291,  465 => 287,  458 => 285,  449 => 281,  445 => 280,  441 => 278,  424 => 277,  417 => 273,  402 => 261,  396 => 258,  387 => 252,  378 => 246,  372 => 243,  363 => 237,  354 => 231,  348 => 228,  339 => 222,  331 => 217,  304 => 193,  293 => 185,  287 => 182,  281 => 179,  271 => 172,  265 => 170,  262 => 169,  260 => 168,  253 => 164,  247 => 162,  244 => 161,  242 => 160,  235 => 156,  229 => 154,  226 => 153,  224 => 152,  214 => 145,  205 => 138,  193 => 132,  187 => 129,  181 => 126,  178 => 125,  174 => 124,  167 => 120,  163 => 119,  154 => 112,  151 => 111,  126 => 89,  95 => 61,  49 => 17,  46 => 16,  41 => 14,  35 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__8a1d32886787d4c6fb5ca3a4aa4a067ff42cdf424adb8a72434b9d02496ebc55", "");
    }
}
