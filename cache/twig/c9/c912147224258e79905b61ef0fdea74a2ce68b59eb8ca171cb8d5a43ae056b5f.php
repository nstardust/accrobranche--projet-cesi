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

/* @Page:/home/lemaycta/public_html/user/pages/02.evenement/ete-2020 */
class __TwigTemplate_165430083c7221939949430d32af5bc10f1e35981fd5bc7f957580ac7c4fef7d extends \Twig\Template
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
        echo "<h2>You can see how I lived before I met you.</h2>
<p>Whoa a real live robot; or is that some kind of cheesy New Year's costume? Michelle, I don't regret this, but I both rue and lament it. OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can.</p>
<p>Hey, you add a one and two zeros to that or we walk! Ummm…to eBay? Quite possible. We live long and are celebrated poopers. No, just a regular mistake. <strong>Meh</strong>. Now, now. Perfectly symmetrical violence never solved anything.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/home/lemaycta/public_html/user/pages/02.evenement/ete-2020";
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
        return new Source("<h2>You can see how I lived before I met you.</h2>
<p>Whoa a real live robot; or is that some kind of cheesy New Year's costume? Michelle, I don't regret this, but I both rue and lament it. OK, this has gotta stop. I'm going to remind Fry of his humanity the way only a woman can.</p>
<p>Hey, you add a one and two zeros to that or we walk! Ummm…to eBay? Quite possible. We live long and are celebrated poopers. No, just a regular mistake. <strong>Meh</strong>. Now, now. Perfectly symmetrical violence never solved anything.</p>", "@Page:/home/lemaycta/public_html/user/pages/02.evenement/ete-2020", "");
    }
}
