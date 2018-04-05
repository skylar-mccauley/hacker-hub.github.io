<?php

/* forms/fields/pages/pages.html.twig */
class __TwigTemplate_b9f5de3d432151e16df6be0e5ddec0befc2a169dc17f3e37beda0ff920874d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pages/pages.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 18
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    data-grav-disabled=\"";
        // line 20
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 24
    public function block_input($context, array $blocks = array())
    {
        // line 25
        echo "
    ";
        // line 26
        $context["start_page"] = (($this->getAttribute(($context["field"] ?? null), "start_route", array())) ? ($this->getAttribute(($context["pages"] ?? null), "find", array(0 => $this->getAttribute(($context["field"] ?? null), "start_route", array())), "method")) : (null));
        // line 27
        echo "    ";
        $context["show_all"] = ((($this->getAttribute(($context["field"] ?? null), "show_all", array()) === false)) ? (false) : (true));
        // line 28
        echo "    ";
        $context["show_fullpath"] = ((($this->getAttribute(($context["field"] ?? null), "show_fullpath", array()) === true)) ? (true) : (false));
        // line 29
        echo "    ";
        $context["show_slug"] = ((($this->getAttribute(($context["field"] ?? null), "show_slug", array()) === true)) ? (true) : (false));
        // line 30
        echo "    ";
        $context["show_modular"] = ((($this->getAttribute(($context["field"] ?? null), "show_modular", array()) === true)) ? (true) : (false));
        // line 31
        echo "    ";
        $context["limit_levels"] = (($this->getAttribute(($context["field"] ?? null), "limit_levels", array())) ? ($this->getAttribute(($context["field"] ?? null), "limit_levels", array())) : (false));
        // line 32
        echo "
    ";
        // line 33
        $context["page_list"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", array()), "getList", array(0 => ($context["start_page"] ?? null), 1 => 0, 2 => true, 3 => ($context["show_all"] ?? null), 4 => ($context["show_fullpath"] ?? null), 5 => ($context["show_slug"] ?? null), 6 => ($context["show_modular"] ?? null), 7 => ($context["limit_levels"] ?? null)), "method");
        // line 34
        echo "
    <div class=\"form-select-wrapper ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">
        <select class=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                ";
        // line 37
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 38
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 39
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 40
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 41
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 42
        echo "                >
        ";
        // line 43
        if ($this->getAttribute(($context["field"] ?? null), "show_root", array())) {
            // line 44
            echo "            <option value=\"/\">/ (root)</option>
        ";
        }
        // line 46
        echo "        ";
        echo $this->getAttribute($this, "page_options", array(0 => $context, 1 => ($context["page_list"] ?? null)), "method");
        echo "
        </select>
    </div>
";
    }

    // line 3
    public function getpage_options($__globals__ = null, $__pages_list__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "globals" => $__globals__,
            "pages_list" => $__pages_list__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["field"] = $this->getAttribute(($context["globals"] ?? null), "field", array());
            // line 5
            echo "    ";
            $context["value"] = $this->getAttribute(($context["globals"] ?? null), "value", array());
            // line 6
            echo "    ";
            if (($this->getAttribute(($context["field"] ?? null), "options", array()) && (($context["depth"] ?? null) == 0))) {
                // line 7
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 8
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["value"]), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "    ";
            }
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages_list"] ?? null));
            foreach ($context['_seq'] as $context["page_route"] => $context["option"]) {
                // line 13
                echo "        <option ";
                if ((($context["page_route"] == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", array()) && twig_in_filter($context["page_route"], ($context["value"] ?? null))))) {
                    echo "selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $context["page_route"], "html", null, true);
                echo "\">";
                echo $context["option"];
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['page_route'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/pages/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 13,  175 => 12,  172 => 11,  169 => 10,  158 => 8,  153 => 7,  150 => 6,  147 => 5,  144 => 4,  131 => 3,  122 => 46,  118 => 44,  116 => 43,  113 => 42,  108 => 41,  103 => 40,  98 => 39,  93 => 38,  89 => 37,  83 => 36,  79 => 35,  76 => 34,  74 => 33,  71 => 32,  68 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  54 => 26,  51 => 25,  48 => 24,  42 => 21,  38 => 20,  32 => 18,  29 => 17,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% macro page_options(globals, pages_list) %}
    {% set field = globals.field %}
    {% set value = globals.value %}
    {% if field.options and depth == 0 %}
        {% for key, value in field.options %}
            <option value=\"{{ key|e('html_attr') }}\">{{ value|t }}</option>
        {% endfor %}
    {% endif %}

    {% for page_route, option in pages_list %}
        <option {% if page_route == value or (field.multiple and page_route in value) %}selected=\"selected\"{% endif %} value=\"{{ page_route }}\">{{ option|raw }}</option>
    {% endfor %}
{% endmacro %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode|e('html_attr') }}\"
    data-grav-field=\"select\"
    data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
    data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
{% endblock %}

{% block input %}

    {% set start_page = field.start_route ? pages.find(field.start_route) : null %}
    {% set show_all = field.show_all is same as(false) ? false : true %}
    {% set show_fullpath = field.show_fullpath is same as(true) ? true : false %}
    {% set show_slug = field.show_slug is same as(true) ? true : false %}
    {% set show_modular = field.show_modular is same as(true) ? true : false %}
    {% set limit_levels = field.limit_levels ?: false %}

    {% set page_list = grav.pages.getList(start_page, 0, true, show_all, show_fullpath, show_slug, show_modular, limit_levels) %}

    <div class=\"form-select-wrapper {{ field.size }}\">
        <select class=\"{{ field.classes }}\" name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                >
        {% if field.show_root %}
            <option value=\"/\">/ (root)</option>
        {% endif %}
        {{ _self.page_options(_context, page_list) }}
        </select>
    </div>
{% endblock %}

", "forms/fields/pages/pages.html.twig", "C:\\UniformServer\\UniServerZ\\www\\blog\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\pages\\pages.html.twig");
    }
}
