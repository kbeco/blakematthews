<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tools.html.twig */
class __TwigTemplate_ef81a07f07cf09fc3711628eb40c27a18dded6f0210260e5bb9a4a032ed2fb35 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "tools.html.twig", 1);
        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'content_top' => [$this, 'block_content_top'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["tools_slug"] = twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "basename", []));
        // line 4
        if ((($context["tools_slug"] ?? null) == "tools")) {
            $context["tools_slug"] = "direct-install";
        }
        // line 5
        $context["title"] = (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS") . ": ") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = [])
    {
        // line 8
        echo "    <h1><i class=\"fa fa-fw fa-briefcase\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", ($context["tools_slug"] ?? null))))), "html", null, true);
        echo "</h1>
";
    }

    // line 11
    public function block_content_top($context, array $blocks = [])
    {
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "tools", [])) > 1)) {
            // line 14
            echo "
    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "tools", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
                // line 18
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/tools/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["tool"]), "html", null, true);
                echo "\" ";
                if ((($context["tools_slug"] ?? null) == $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["tool"]))) {
                    echo "class=\"active\"";
                }
                echo ">
                ";
                // line 19
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["tool"])), "html", null, true);
                echo "
            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>

    ";
        }
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.tools", 1 => "admin.super"])) {
            // line 30
            echo "        ";
            try {
                $this->loadTemplate((("partials/tools-" . ($context["tools_slug"] ?? null)) . ".html.twig"), "tools.html.twig", 30)->display($context);
            } catch (LoaderError $e) {
                // ignore missing template
            }

            // line 31
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  113 => 30,  110 => 29,  107 => 28,  99 => 22,  90 => 19,  79 => 18,  75 => 17,  70 => 14,  68 => 13,  65 => 12,  62 => 11,  53 => 8,  50 => 7,  46 => 1,  44 => 5,  40 => 4,  38 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set tools_slug = uri.basename|e %}
{% if tools_slug == 'tools' %}{% set tools_slug = 'direct-install' %}{% endif %}
{% set title = \"PLUGIN_ADMIN.TOOLS\"|tu ~ \": \" ~ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|tu %}

{% block titlebar %}
    <h1><i class=\"fa fa-fw fa-briefcase\"></i> {{ \"PLUGIN_ADMIN.TOOLS\"|tu }} - {{ (\"PLUGIN_ADMIN.\" ~ tools_slug|underscorize|upper)|tu }}</h1>
{% endblock %}

{% block content_top %}

    {% if admin.tools|length > 1 %}

    <div class=\"form-tabs\">
        <div class=\"tabs-nav\">
        {% for tool in admin.tools %}
            <a href=\"{{ base_url_relative }}/tools/{{tool|hyphenize}}\" {% if tools_slug == tool|hyphenize %}class=\"active\"{% endif %}>
                {{ tool|tu|capitalize }}
            </a>
        {% endfor %}
        </div>
    </div>

    {% endif %}
{% endblock %}

{% block content %}
    {% if authorize(['admin.tools', 'admin.super']) %}
        {% include 'partials/tools-' ~ tools_slug ~ '.html.twig' ignore missing %}
    {% endif %}
{% endblock %}

", "tools.html.twig", "C:\\MAMP\\htdocs\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\tools.html.twig");
    }
}
