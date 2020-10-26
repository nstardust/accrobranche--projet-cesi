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

/* item.html.twig */
class __TwigTemplate_700247f11ba53e806ba9a5839025879b03db415ff0d83b9e29e558239f076640 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 3
        $context["show_breadcrumbs"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc($context, "show_breadcrumbs", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 4
        $context["show_sidebar"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc($context, "show_sidebar", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 5
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc($context, "show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 6
        $context["hero_image_name"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_hero($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        if (($context["hero_image_name"] ?? null)) {
            // line 10
            echo "        ";
            $context["hero_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), ($context["hero_image_name"] ?? null), [], "array");
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
            <h2>";
            // line 13
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
            echo "</h2>
            ";
            // line 14
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "item.html.twig", 14)->display($context);
            // line 15
            echo "        ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 16
            echo "        ";
            $this->loadTemplate("partials/hero.html.twig", "item.html.twig", 16)->display(twig_array_merge($context, ["id" => "blog-hero"]));
            // line 17
            echo "
    ";
        }
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        // line 22
        echo "<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container ";
        // line 23
        echo ($context["grid_size"] ?? null);
        echo "\">
        ";
        // line 24
        $this->loadTemplate("partials/blog/date.html.twig", "item.html.twig", 24)->display($context);
        // line 25
        echo "
        ";
        // line 26
        if ((($context["show_breadcrumbs"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []))) {
            // line 27
            echo "            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 27)->display($context);
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        ";
        // line 30
        $this->loadTemplate("item.html.twig", "item.html.twig", 30, "1467701745")->display($context);
        // line 38
        echo "
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  96 => 24,  92 => 23,  89 => 22,  86 => 21,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
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
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">
        {% include 'partials/blog/date.html.twig' %}

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}
", "item.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_700247f11ba53e806ba9a5839025879b03db415ff0d83b9e29e558239f076640___1467701745 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "item.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_item($context, array $blocks = [])
    {
        // line 32
        echo "                ";
        $this->loadTemplate("partials/blog-item.html.twig", "item.html.twig", 32)->display($context);
        // line 33
        echo "            ";
    }

    // line 34
    public function block_sidebar($context, array $blocks = [])
    {
        // line 35
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 35)->display($context);
        // line 36
        echo "            ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 36,  230 => 35,  227 => 34,  223 => 33,  220 => 32,  217 => 31,  207 => 30,  114 => 38,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  101 => 26,  98 => 25,  96 => 24,  92 => 23,  89 => 22,  86 => 21,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
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
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}
{% set show_breadcrumbs = header_var('show_breadcrumbs', [page, blog])|defined(true) %}
{% set show_sidebar = header_var('show_sidebar', [page, blog])|defined(true)  %}
{% set show_pagination = header_var('show_pagination', [page, blog])|defined(true) %}
{% set hero_image_name = page.header.hero_image %}

{% block hero %}
    {% if hero_image_name %}
        {% set hero_image = page.media[hero_image_name] %}
        {% set content %}
            <h1>{{ page.title }}</h1>
            <h2>{{ page.header.subtitle }}</h2>
            {% include 'partials/blog/taxonomy.html.twig' %}
        {% endset %}
        {% include 'partials/hero.html.twig' with {id: 'blog-hero'} %}

    {% endif %}
{% endblock %}

{% block body %}
<section id=\"body-wrapper\" class=\"section blog-listing\">
    <section class=\"container {{ grid_size }}\">
        {% include 'partials/blog/date.html.twig' %}

        {% if show_breadcrumbs and config.plugins.breadcrumbs.enabled %}
            {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        {% embed 'partials/layout.html.twig' %}
            {% block item %}
                {% include 'partials/blog-item.html.twig' %}
            {% endblock %}
            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}

    </section>
</section>
{% endblock %}
", "item.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\item.html.twig");
    }
}
