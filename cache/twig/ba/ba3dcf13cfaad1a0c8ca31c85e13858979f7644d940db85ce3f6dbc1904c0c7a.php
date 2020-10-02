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

/* @Page:E:/Program Files (x86)/localhost/accrobranche/user/pages/01.accrobranche/01._hero */
class __TwigTemplate_abe0b537cf693cc3ccbddd0dd495e223bbf80af3954bf5e70819edcf25ba72a7 extends \Twig\Template
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
        echo "<section id=\"\" class=\"section modular-hero hero parallax text-light \"
style=\"overflow: hidden;\">
    <div class=\"image-overlay\">
                                        <video src=\"/accrobranche/user/themes/quark/video/171120_002.mp4\" preload=\"auto\" autoplay=\"autoplay\" loop=\"loop\" muted=\"muted\"></video>
            </div>
    <section class=\"container \" style=\"text-align: center\">
        <h1>Accrobranché !</h1>
<h2>Le site de référence d'accrobranche dans le Nord</h2>
<p><a href=\"/accrobranche/fr/evenement\" class=\"btn btn-success btn-lg\">En savoir plus</a></p>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:E:/Program Files (x86)/localhost/accrobranche/user/pages/01.accrobranche/01._hero";
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
        return new Source("<section id=\"\" class=\"section modular-hero hero parallax text-light \"
style=\"overflow: hidden;\">
    <div class=\"image-overlay\">
                                        <video src=\"/accrobranche/user/themes/quark/video/171120_002.mp4\" preload=\"auto\" autoplay=\"autoplay\" loop=\"loop\" muted=\"muted\"></video>
            </div>
    <section class=\"container \" style=\"text-align: center\">
        <h1>Accrobranché !</h1>
<h2>Le site de référence d'accrobranche dans le Nord</h2>
<p><a href=\"/accrobranche/fr/evenement\" class=\"btn btn-success btn-lg\">En savoir plus</a></p>
    </section>
    <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
", "@Page:E:/Program Files (x86)/localhost/accrobranche/user/pages/01.accrobranche/01._hero", "");
    }
}
