<?php

/* Form/form_div_layout.twig */
class __TwigTemplate_d3eefcbc45707256dc3fa69b64bec37324de9dc309b73c941dac706522d62ba1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 15
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "Form/form_div_layout.twig", 15);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'form_label' => array($this, 'block_form_label'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_form_errors($context, array $blocks = array())
    {
        // line 18
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "<p class=\"ec-errorMessage\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                echo "</p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 25
    public function block_form_label($context, array $blocks = array())
    {
        // line 26
        $this->displayParentBlock("form_label", $context, $blocks);
        // line 27
        if (($context["required"] ?? null)) {
            // line 28
            echo "<span class=\"ec-required\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>";
        }
    }

    // line 32
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == "hidden"))) {
            // line 34
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $this->displayParentBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 40
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 41
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == "hidden"))) {
            // line 42
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            $this->displayParentBlock("textarea_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 48
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 49
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == "hidden"))) {
            // line 50
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 52
            echo "        ";
            $this->displayParentBlock("radio_widget", $context, $blocks);
            echo "
        <label for=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
            <span>";
            // line 54
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
            echo "</span>
        </label>
    ";
        }
    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 61
        if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == "hidden"))) {
            // line 62
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 64
            echo "        ";
            $this->displayParentBlock("checkbox_widget", $context, $blocks);
            echo "
        ";
            // line 65
            if ( !(null === ($context["label"] ?? null))) {
                // line 66
                echo "            <label for=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">
                <span>";
                // line 67
                echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null))))) : ("")), "html", null, true);
                echo "</span>
            </label>
        ";
            }
            // line 70
            echo "    ";
        }
    }

    // line 73
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 74
        if (($context["id"] ?? null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 75
        echo "name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 76
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 77
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 78
        $this->displayBlock("attributes", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "Form/form_div_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 78,  190 => 77,  186 => 76,  182 => 75,  176 => 74,  173 => 73,  168 => 70,  162 => 67,  157 => 66,  155 => 65,  150 => 64,  144 => 62,  142 => 61,  139 => 60,  131 => 54,  127 => 53,  122 => 52,  116 => 50,  114 => 49,  111 => 48,  103 => 44,  97 => 42,  95 => 41,  92 => 40,  84 => 36,  78 => 34,  75 => 33,  72 => 32,  65 => 28,  63 => 27,  61 => 26,  58 => 25,  47 => 20,  43 => 19,  41 => 18,  38 => 17,  15 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Form/form_div_layout.twig", "C:\\Users\\user\\git\\hello_ec_cube\\src\\Eccube\\Resource\\template\\default\\Form\\form_div_layout.twig");
    }
}
