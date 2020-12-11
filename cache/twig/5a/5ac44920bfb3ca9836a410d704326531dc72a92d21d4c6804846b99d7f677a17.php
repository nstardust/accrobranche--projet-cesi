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

/* modular/banner.html.twig */
class __TwigTemplate_289bb96d6905d7c104465092b3f2be29eec4acd9c50d888bbdd90bc5a1bfa10d extends \Twig\Template
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
    <section class=\"container-fluid modular-banner ";
        // line 4
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns ";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", []), "align-right")) : ("align-right"));
        echo "\" ";
        if (($context["image"] ?? null)) {
            echo "style=\"background-image: url('";
            echo $this->getAttribute(($context["image"] ?? null), "url", []);
            echo "');\"";
        }
        echo ">
            <div class=\"column\">
                ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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

    <section class=\"container-fluid modular-banner {{ grid_size }}\">
        <div class=\"columns {{ page.header.image_align|default('align-right') }}\" {% if image %}style=\"background-image: url('{{ image.url|raw }}');\"{% endif %}>
            <div class=\"column\">
                {{ content|raw }}
            </div>
        </div>
    </section>", "modular/banner.html.twig", "E:\\Program Files (x86)\\localhost\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\modular\\banner.html.twig");
    }
}
