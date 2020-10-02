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
class __TwigTemplate_afb1b28d972268dc371513a0c8cd2c3d54fa9ea0ca89fe4257a96181ad5497d0 extends \Twig\Template
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
", "partials/footer.html.twig", "/home/lemaycta/public_html/user/themes/quark/templates/partials/footer.html.twig");
    }
}
