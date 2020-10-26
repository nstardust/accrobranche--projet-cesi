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
class __TwigTemplate_b72088633928bd1cfc0b89019377834b8e9d826de75fc9807f859af9b000f472 extends \Twig\Template
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
        echo "<section style=\"display: flex; justify-content: space-around; padding: .75rem 0; background-color: #000;\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["language_selector"] ?? null), "current", []));
        echo "/privacy-policy\">Politique de confidentialité</a>
    <a href=\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["language_selector"] ?? null), "current", []));
        echo "/sitemap.xml\">Plan du site</a>
</section>
<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container ";
        // line 6
        echo ($context["grid_size"] ?? null);
        echo "\">
        <p><a href=\"\"><img src=\"";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("user/images/accrobranche_symbole.png");
        echo "\" style=\"width: 25px;margin-right: 10px\" alt=\"\">Accrobranché</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i>
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
        return array (  47 => 7,  43 => 6,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section style=\"display: flex; justify-content: space-around; padding: .75rem 0; background-color: #000;\">
    <a href=\"{{ url(language_selector.current) }}/privacy-policy\">Politique de confidentialité</a>
    <a href=\"{{ url(language_selector.current) }}/sitemap.xml\">Plan du site</a>
</section>
<section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p><a href=\"\"><img src=\"{{ url('user/images/accrobranche_symbole.png') }}\" style=\"width: 25px;margin-right: 10px\" alt=\"\">Accrobranché</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i>
            by <span class=\"text-primary\">Michaël LEMAY</span> and <span class=\"text-primary\">Pierre BEUSELINCK</span>.</p>
    </section>
</section>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}
