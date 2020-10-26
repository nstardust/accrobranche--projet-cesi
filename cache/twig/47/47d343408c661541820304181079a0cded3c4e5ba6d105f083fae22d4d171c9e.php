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

/* modular/text.html.twig */
class __TwigTemplate_97f5a334beb5f2c02d072d59d299ace0719514d4640b371b38d9f43290088138 extends \Twig\Template
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
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "
<section class=\"section modular-text ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo " bg-greyblue2\">
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns ";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", []), "align-right")) : ("align-right"));
        echo "\">
            ";
        // line 7
        if (($context["image"] ?? null)) {
            // line 8
            echo "            <div class=\"column col-6 col-md-12\">
                ";
            // line 9
            echo ($context["content"] ?? null);
            echo "
            </div>
            <div class=\"column col-6 col-md-12\">
                ";
            // line 12
            echo $this->getAttribute(($context["image"] ?? null), "html", []);
            echo "
            </div>
            ";
        } else {
            // line 15
            echo "            <div class=\"column col-12\">
                ";
            // line 16
            echo ($context["content"] ?? null);
            echo "
            </div>
            ";
        }
        // line 19
        echo "        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  69 => 16,  66 => 15,  60 => 12,  54 => 9,  51 => 8,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
{% set image = page.media.images|first %}

<section class=\"section modular-text {{ page.header.class}} bg-greyblue2\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns {{ page.header.image_align|default('align-right') }}\">
            {% if image %}
            <div class=\"column col-6 col-md-12\">
                {{ content|raw }}
            </div>
            <div class=\"column col-6 col-md-12\">
                {{ image.html|raw }}
            </div>
            {% else %}
            <div class=\"column col-12\">
                {{ content|raw }}
            </div>
            {% endif %}
        </div>
    </section>
</section>
", "modular/text.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\modular\\text.html.twig");
    }
}
