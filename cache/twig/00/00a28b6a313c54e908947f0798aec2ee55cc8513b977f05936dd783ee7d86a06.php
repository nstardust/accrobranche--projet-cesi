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

/* @Page:/home/lemaycta/public_html/user/pages/01.accrobranche/03._callout */
class __TwigTemplate_acc8008fbaa54f382f701e9ffd7c818bfa5a8b19095afdbaa7866304d4140341 extends \Twig\Template
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
        echo "
<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-lg\">
        <div class=\"columns right\">
                        <div class=\"column col-6 col-md-12\">
                <h2><strong>Your Content</strong> Unchained!</h2>
<p>No longer are you a <em>help captive by your CMS</em>. Grav <strong>empowers</strong> you to create anything from a <a href=\"https://demo.getgrav.org/onepage-skeleton\" target=\"_blank\">simple one-page site</a>, to a <a href=\"https://demo.getgrav.org/blog-skeleton\" target=\"_blank\">beautiful blog</a>, to a powerful and feature-rich <a href=\"https://demo.getgrav.org/shop-skeleton\" target=\"_blank\">shop site</a>, to pretty much anything you can dream up!</p>
<p><a href=\"https://getgrav.org\" class=\"btn btn-primary btn-lg\">Find out more...</a></p>
            </div>
            <div class=\"column col-6 col-md-12\">
                <img alt=\"\" src=\"/user/pages/01.accrobranche/03._callout/jeep.jpg\" />
            </div>
                    </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:/home/lemaycta/public_html/user/pages/01.accrobranche/03._callout";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-lg\">
        <div class=\"columns right\">
                        <div class=\"column col-6 col-md-12\">
                <h2><strong>Your Content</strong> Unchained!</h2>
<p>No longer are you a <em>help captive by your CMS</em>. Grav <strong>empowers</strong> you to create anything from a <a href=\"https://demo.getgrav.org/onepage-skeleton\" target=\"_blank\">simple one-page site</a>, to a <a href=\"https://demo.getgrav.org/blog-skeleton\" target=\"_blank\">beautiful blog</a>, to a powerful and feature-rich <a href=\"https://demo.getgrav.org/shop-skeleton\" target=\"_blank\">shop site</a>, to pretty much anything you can dream up!</p>
<p><a href=\"https://getgrav.org\" class=\"btn btn-primary btn-lg\">Find out more...</a></p>
            </div>
            <div class=\"column col-6 col-md-12\">
                <img alt=\"\" src=\"/user/pages/01.accrobranche/03._callout/jeep.jpg\" />
            </div>
                    </div>
    </section>
</section>
", "@Page:/home/lemaycta/public_html/user/pages/01.accrobranche/03._callout", "");
    }
}
