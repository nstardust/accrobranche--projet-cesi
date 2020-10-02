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

/* @Page:/home/lemaycta/public_html/user/plugins/admin/pages/admin */
class __TwigTemplate_c4f7a87833e8bdb2d7906b603eb09db24fdb8103879704defffd608acc1030c3 extends \Twig\Template
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
        echo "<p>Woops! Looks like this page doesn't exist.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/home/lemaycta/public_html/user/plugins/admin/pages/admin";
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
        return new Source("<p>Woops! Looks like this page doesn't exist.</p>", "@Page:/home/lemaycta/public_html/user/plugins/admin/pages/admin", "");
    }
}
