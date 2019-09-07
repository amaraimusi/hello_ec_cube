<?php

/* __string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434 */
class __TwigTemplate_b78ba294c4da2306bbe113a60183ee706d6d27db99ea8c8e15b03b1bd24ab771 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), array(0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"), true);
        // line 11
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_login");
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "login_id", array()), 'widget', array("id" => "login_id", "attr" => array("placeholder" => "admin.login.login_id", "autofocus" => true)));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "password", array()), 'widget', array("attr" => array("placeholder" => "admin.login.password")));
        echo "
                        </div>
                        ";
        // line 31
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "                            <div class=\"form-group\">
                                <span class=\"text-danger\">";
            // line 33
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 33, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 33, $this->source); })()), "messageData", array()), "validators"), "html", null, true));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), 'rest');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  116 => 43,  107 => 37,  102 => 36,  96 => 33,  93 => 32,  91 => 31,  86 => 29,  80 => 26,  75 => 24,  71 => 23,  67 => 22,  63 => 21,  56 => 16,  47 => 15,  37 => 11,  35 => 13,  15 => 11,);
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
{% extends '@admin/login_frame.twig' %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block main %}

    <div class=\"container\" style=\"margin-top: 150px;\">
        <div class=\"row\">
            <div class=\"col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4\">
                <div class=\"text-center p-5 bg-white\">
                    {{ include('@admin/alert.twig') }}
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"{{ path('admin_login') }}\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                        <p><img src=\"{{ asset('assets/img/logo2.png', 'admin') }}\" width=\"106\"></p>
                        <div class=\"form-group\">
                            {{ form_widget(form.login_id, {'id': 'login_id', 'attr': {'placeholder': 'admin.login.login_id', 'autofocus': true}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_widget(form.password, {'attr': {'placeholder': 'admin.login.password'}}) }}
                        </div>
                        {% if error %}
                            <div class=\"form-group\">
                                <span class=\"text-danger\">{{ error.messageKey|trans(error.messageData, 'validators')|nl2br }}</span>
                            </div>
                        {% endif %}
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">{{ 'admin.login.login'|trans }}</button>
                        {{ form_rest(form) }}
                    </form>
                </div>
            </div>
            <div class=\"col-12\">
                <p class=\"text-center mt-3\">
                    <small>Copyright &copy; 2000-{{ \"now\"|date(\"Y\") }} LOCKON CO.,LTD. All Rights Reserved.</small>
                </p>
            </div>
        </div>
    </div>

{% endblock %}
", "__string_template__612fb9b1c10d82b87a5f229e6dfd2f2d9a0ca4f61ef7f3cb5654a1f03bde5434", "");
    }
}
