<?php

/* block.twig */
class __TwigTemplate_11dd13f0f15a4cd2c7a9d9b67b1ab1872a3cf154e24eb317526c41e61382dba9 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "block.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Blocks"]) || array_key_exists("Blocks", $context) ? $context["Blocks"] : (function () { throw new Twig_Error_Runtime('Variable "Blocks" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Block"]) {
            // line 12
            echo "    <!-- ▼";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", array()), "html", null, true);
            echo " -->
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["Block"], "use_controller", array())) {
                // line 14
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(("block_" . twig_get_attribute($this->env, $this->source, $context["Block"], "file_name", array()))));
                echo "
    ";
            } else {
                // line 16
                echo "        ";
                echo $this->extensions['Eccube\Twig\Extension\TwigIncludeExtension']->include_dispatch($context, (("Block/" . twig_get_attribute($this->env, $this->source, $context["Block"], "file_name", array())) . ".twig"));
                echo "
    ";
            }
            // line 18
            echo "    <!-- ▲";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Block"], "name", array()), "html", null, true);
            echo " -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  43 => 16,  37 => 14,  35 => 13,  30 => 12,  26 => 11,);
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
{% for Block in Blocks %}
    <!-- ▼{{ Block.name }} -->
    {% if Block.use_controller %}
        {{ render(path('block_' ~ Block.file_name)) }}
    {% else %}
        {{ include_dispatch('Block/' ~ Block.file_name ~ '.twig') }}
    {% endif %}
    <!-- ▲{{ Block.name }} -->
{% endfor %}
", "block.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\block.twig");
    }
}
