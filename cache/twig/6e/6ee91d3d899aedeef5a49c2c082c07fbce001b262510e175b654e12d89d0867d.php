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

/* modular/instagram.html.twig */
class __TwigTemplate_cc7eb135e032f7f325c3b635f19b54d77626d373c739c9f0f566824aa952d1a2 extends \Twig\Template
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
        $context["images"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []);
        // line 3
        echo "
<section class=\"section modular-blog ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo " bg-greyblue2\">
    <section class=\"container-fluid ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">

        ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
        ";
        // line 8
        if (($context["images"] ?? null)) {
            // line 9
            echo "            <div class=\"columns\" id=\"instafeed\" style=\"";
            if ((twig_length_filter($this->env, ($context["images"] ?? null)) != 1)) {
                echo " align-content: space-around; ";
            } else {
                echo " justify-content: center; ";
            }
            echo "\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 11
                echo "                <div class=\"column col-xs-6 col-sm-4 col-md-3 col-lg-2 col-3\" ";
                if ((twig_length_filter($this->env, ($context["images"] ?? null)) != 1)) {
                    echo "style=\"flex: auto;\"";
                }
                echo ">
                    <a href=\"";
                // line 12
                echo ("https://www.instagram.com/p/" . $this->getAttribute($context["image"], "basename", []));
                echo "\" target=\"_blank\">
                        <img src=\"";
                // line 13
                echo $this->getAttribute($context["image"], "url", []);
                echo "\" class=\"img-fluid\" alt=\"\"/>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            </div>
        ";
        }
        // line 19
        echo "
    </section>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/instagram.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  86 => 17,  76 => 13,  72 => 12,  65 => 11,  61 => 10,  52 => 9,  50 => 8,  46 => 7,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
{% set images = page.media.images %}

<section class=\"section modular-blog {{ page.header.class}} bg-greyblue2\">
    <section class=\"container-fluid {{ grid_size }}\">

        {{ content|raw }}
        {% if images %}
            <div class=\"columns\" id=\"instafeed\" style=\"{% if images|length != 1 %} align-content: space-around; {% else %} justify-content: center; {% endif %}\">
            {% for image in images %}
                <div class=\"column col-xs-6 col-sm-4 col-md-3 col-lg-2 col-3\" {% if images|length != 1 %}style=\"flex: auto;\"{% endif %}>
                    <a href=\"{{ 'https://www.instagram.com/p/'~image.basename }}\" target=\"_blank\">
                        <img src=\"{{image.url|raw}}\" class=\"img-fluid\" alt=\"\"/>
                    </a>
                </div>
            {% endfor %}
            </div>
        {% endif %}

    </section>
</section>", "modular/instagram.html.twig", "E:\\Program Files (x86)\\localhost\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\modular\\instagram.html.twig");
    }
}
