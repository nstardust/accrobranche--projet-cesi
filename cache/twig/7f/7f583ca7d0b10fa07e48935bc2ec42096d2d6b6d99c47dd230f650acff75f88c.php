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

/* partials/homepage-list-item.html.twig */
class __TwigTemplate_18839222043fd6672b6109a4750898262351ca61b282238c650803f593063063 extends \Twig\Template
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
        echo "<div class=\"tile tile-centered\" style=\"padding: .8rem;\">
    <div class=\"tile-title col-4 col-sm-12\">
            ";
        // line 3
        $this->loadTemplate("partials/blog/date.html.twig", "partials/homepage-list-item.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
    <div class=\"tile-content col-4 col-sm-12 text-center\">
        <p class=\"m-0\">";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</p>
    </div>
    <div class=\"tile-action col-4 col-sm-12 text-center\">
        <a href=\"";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\" class=\"btn btn-success\">Voir l'évènement</a>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/homepage-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tile tile-centered\" style=\"padding: .8rem;\">
    <div class=\"tile-title col-4 col-sm-12\">
            {% include 'partials/blog/date.html.twig' %}
    </div>
    <div class=\"tile-content col-4 col-sm-12 text-center\">
        <p class=\"m-0\">{{ page.title }}</p>
    </div>
    <div class=\"tile-action col-4 col-sm-12 text-center\">
        <a href=\"{{ page.url }}\" class=\"btn btn-success\">Voir l'évènement</a>
    </div>
</div>

", "partials/homepage-list-item.html.twig", "E:\\Program Files (x86)\\localhost\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\partials\\homepage-list-item.html.twig");
    }
}
