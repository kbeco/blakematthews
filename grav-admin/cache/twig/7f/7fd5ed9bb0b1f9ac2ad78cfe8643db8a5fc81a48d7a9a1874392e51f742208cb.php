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

/* contact.html.twig */
class __TwigTemplate_ec111b0977cc5e4ba58bca3d1e3dd842f8648374e1fbfa7dbfce7f0297bda4d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<article class=\"box post post-excerpt\">
  <header>
    <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
  </header>
   ";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

   ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simple_form", []), "enabled", [])) {
            // line 10
            echo "    ";
            $context["simple_form_config"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "simple_form", [])) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "simple_form", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "saturn", []), "simple_form", [])));
            // line 11
            echo "      ";
            echo call_user_func_array($this->env->getFunction('simple_form')->getCallable(), [($context["simple_form_config"] ?? null)]);
            echo "
   ";
        }
        // line 13
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  61 => 11,  58 => 10,  56 => 9,  51 => 7,  46 => 5,  42 => 3,  39 => 2,  22 => 1,);
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
{% block content %}
<article class=\"box post post-excerpt\">
  <header>
    <h2>{{ page.header.title }}</h2>
  </header>
   {{ page.content }}

   {% if config.plugins.simple_form.enabled %}
    {% set simple_form_config = page.header.simple_form ?: config.themes.saturn.simple_form %}
      {{ simple_form(simple_form_config) }}
   {% endif %}

</article>
{% endblock %}
", "contact.html.twig", "C:\\MAMP\\htdocs\\grav-admin\\user\\themes\\saturn\\templates\\contact.html.twig");
    }
}
