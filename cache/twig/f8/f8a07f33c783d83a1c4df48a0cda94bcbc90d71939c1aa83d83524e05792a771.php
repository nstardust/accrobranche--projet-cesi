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

/* modular/video.html.twig */
class __TwigTemplate_3444dc88298f2e23d33aaf3825b23ed1f1ad10f4a47ea950a709d3fc9b95ae40 extends \Twig\Template
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
        echo "<section id=\"";
        echo ($context["id"] ?? null);
        echo "\" class=\"section modular-hero hero ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_classes", []);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), "parallax", [])) ? ("parallax") : (""));
        echo "\"
style=\"overflow: hidden;\">
    <div class=\"image-overlay\">
        ";
        // line 4
        $context["video"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc($context, "custom_video_screen");
        // line 5
        echo "        ";
        if (($context["video"] ?? null)) {
            // line 6
            echo "            ";
            $context["video_file"] = $this->getAttribute(twig_first($this->env, ($context["video"] ?? null)), "name", []);
            // line 7
            echo "            <video src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://video/" . ($context["video_file"] ?? null)));
            echo "\" preload=\"auto\" autoplay=\"autoplay\" loop=\"loop\" muted=\"muted\"></video>
        ";
        }
        // line 9
        echo "    </div>
    <section class=\"container ";
        // line 10
        echo ($context["grid_size"] ?? null);
        echo "\" style=\"text-align: ";
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "hero_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "hero_align", []), "center")) : ("center"));
        echo "\">
        ";
        // line 11
        echo ($context["content"] ?? null);
        echo "
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  58 => 10,  55 => 9,  49 => 7,  46 => 6,  43 => 5,  41 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{ id }}\" class=\"section modular-hero hero {{ page.header.hero_classes }} {{ page.header.background.parallax ? 'parallax' : '' }}\"
style=\"overflow: hidden;\">
    <div class=\"image-overlay\">
        {% set video = theme_var('custom_video_screen') %}
        {% if video %}
            {% set video_file = (video|first).name %}
            <video src=\"{{ url('theme://video/' ~ video_file)  }}\" preload=\"auto\" autoplay=\"autoplay\" loop=\"loop\" muted=\"muted\"></video>
        {% endif %}
    </div>
    <section class=\"container {{ grid_size }}\" style=\"text-align: {{ page.header.hero_align|default('center') }}\">
        {{ content|raw }}
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
", "modular/video.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\modular\\video.html.twig");
    }
}
