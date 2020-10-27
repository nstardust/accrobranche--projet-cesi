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

/* modular/blog.html.twig */
class __TwigTemplate_a62e131515c3bf7cb52e92ce033cd25304b12b365404c59a9cba4be572d52236 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc($context, "grid-size");
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 3
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc($context, "blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc($context, "blog-page"))], "method");
        // line 4
        echo "
<section class=\"section modular-blog modular-blog--hp ";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo " bg-greyblue2\">
    <section class=\"container ";
        // line 6
        echo ($context["grid_size"] ?? null);
        echo "\">

        ";
        // line 8
        echo ($context["content"] ?? null);
        echo "

        ";
        // line 10
        $this->loadTemplate("modular/blog.html.twig", "modular/blog.html.twig", 10, "1613412493")->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 25
        echo "        <div class=\"text-center\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($this->getAttribute(($context["language_selector"] ?? null), "current", []) . "/evenement"));
        echo "\">
                ";
        // line 27
        if (($this->getAttribute(($context["language_selector"] ?? null), "current", []) == "fr")) {
            // line 28
            echo "                    Voir tout les événements
                ";
        } elseif (($this->getAttribute(        // line 29
($context["language_selector"] ?? null), "current", []) == "en")) {
            // line 30
            echo "                    See all events
                ";
        }
        // line 32
        echo "            </a>
        </div>
    </section>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  69 => 30,  67 => 29,  64 => 28,  62 => 27,  58 => 26,  55 => 25,  53 => 10,  48 => 8,  43 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}

<section class=\"section modular-blog modular-blog--hp {{ page.header.class}} bg-greyblue2\">
    <section class=\"container {{ grid_size }}\">

        {{ content|raw }}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                    {% for child in collection %}
                        {% include 'partials/homepage-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}
                </div>

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        <div class=\"text-center\">
            <a href=\"{{ url(language_selector.current ~ '/evenement') }}\">
                {% if language_selector.current == 'fr' %}
                    Voir tout les événements
                {% elseif language_selector.current == 'en' %}
                    See all events
                {% endif %}
            </a>
        </div>
    </section>
</section>", "modular/blog.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\modular\\blog.html.twig");
    }
}


/* modular/blog.html.twig */
class __TwigTemplate_a62e131515c3bf7cb52e92ce033cd25304b12b365404c59a9cba4be572d52236___1613412493 extends \Twig\Template
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
        // line 10
        return "partials/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/layout.html.twig", "modular/blog.html.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_item($context, array $blocks = [])
    {
        // line 12
        echo "
                <div class=\"bricklayer\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 15
            echo "                        ";
            $this->loadTemplate("partials/homepage-list-item.html.twig", "modular/blog.html.twig", 15)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"]]));
            // line 16
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </div>

            ";
    }

    // line 21
    public function block_sidebar($context, array $blocks = [])
    {
        // line 22
        echo "                ";
        $this->loadTemplate("partials/sidebar.html.twig", "modular/blog.html.twig", 22)->display($context);
        // line 23
        echo "            ";
    }

    public function getTemplateName()
    {
        return "modular/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 23,  219 => 22,  216 => 21,  210 => 17,  196 => 16,  193 => 15,  176 => 14,  172 => 12,  169 => 11,  159 => 10,  73 => 32,  69 => 30,  67 => 29,  64 => 28,  62 => 27,  58 => 26,  55 => 25,  53 => 10,  48 => 8,  43 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set collection = page.collection() %}
{% set blog = page.find(header_var('blog_url')|defined(theme_var('blog-page'))) %}

<section class=\"section modular-blog modular-blog--hp {{ page.header.class}} bg-greyblue2\">
    <section class=\"container {{ grid_size }}\">

        {{ content|raw }}

        {% embed 'partials/layout.html.twig' with {blog: page} %}
            {% block item %}

                <div class=\"bricklayer\">
                    {% for child in collection %}
                        {% include 'partials/homepage-list-item.html.twig' with {blog: page, page: child} %}
                    {% endfor %}
                </div>

            {% endblock %}

            {% block sidebar %}
                {% include 'partials/sidebar.html.twig' %}
            {% endblock %}
        {% endembed %}
        <div class=\"text-center\">
            <a href=\"{{ url(language_selector.current ~ '/evenement') }}\">
                {% if language_selector.current == 'fr' %}
                    Voir tout les événements
                {% elseif language_selector.current == 'en' %}
                    See all events
                {% endif %}
            </a>
        </div>
    </section>
</section>", "modular/blog.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\modular\\blog.html.twig");
    }
}
