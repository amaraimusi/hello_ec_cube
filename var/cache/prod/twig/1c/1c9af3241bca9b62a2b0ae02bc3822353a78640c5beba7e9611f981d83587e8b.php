<?php

/* __string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434 */
class __TwigTemplate_9822c94532c9c30a38336f6848e9e8b0016048d82ac00fc3571689077d5a8f1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@admin/login_frame.twig", "__string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434", 11);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@admin/login_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"), true);
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "
    <div class=\"container\" style=\"margin-top: 150px;\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4\">
                <div class=\"text-center p-5 bg-white\">
                    ";
        // line 21
        echo twig_include($this->env, $context, "@admin/alert.twig");
        echo "
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_login");
        echo "\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                        <p><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo2.png", "admin"), "html", null, true);
        echo "\" width=\"106\"></p>
                        <div class=\"form-group\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_id", array()), 'widget', array("id" => "login_id", "attr" => array("placeholder" => "admin.login.login_id", "autofocus" => true)));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", array()), 'widget', array("attr" => array("placeholder" => "admin.login.password")));
        echo "
                        </div>
                        ";
        // line 31
        if (($context["error"] ?? null)) {
            // line 32
            echo "                            <div class=\"form-group\">
                                <span class=\"text-danger\">";
            // line 33
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "validators"), "html", null, true));
            echo "</span>
                            </div>
                        ";
        }
        // line 36
        echo "                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.login.login"), "html", null, true);
        echo "</button>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                    </form>
                </div>
            </div>
            <div class=\"col-12\">
                <p class=\"text-center mt-3\">
                    <small>Copyright &copy; 2000-";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " LOCKON CO.,LTD. All Rights Reserved.</small>
                </p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 43,  89 => 37,  84 => 36,  78 => 33,  75 => 32,  73 => 31,  68 => 29,  62 => 26,  57 => 24,  53 => 23,  49 => 22,  45 => 21,  38 => 16,  35 => 15,  31 => 11,  29 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434", "");
    }
}
