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

/* partials/footer.html.twig */
class __TwigTemplate_450f564448d9b1ba2e8fdb872b98967e9df3d69f7458200faa1e5971e28d45d8 extends \Twig\Template
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
        echo "<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 2
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p><a href=\"\">Accrobranché</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i>
            by <span class=\"text-primary\">Michaël LEMAY</span> and <span class=\"text-primary\">Pierre BEUSELINCK</span>.</p>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p><a href=\"\">Accrobranché</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i>
            by <span class=\"text-primary\">Michaël LEMAY</span> and <span class=\"text-primary\">Pierre BEUSELINCK</span>.</p>
    </section>
</section>
", "partials/footer.html.twig", "E:\\Program Files (x86)\\localhost\\accrobranche\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
