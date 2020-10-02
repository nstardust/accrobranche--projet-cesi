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

/* @Page:/home/lemaycta/public_html/user/pages/02.evenement/ouverture-en-avril */
class __TwigTemplate_67a1d69a19ff12ef407114a6f6eb019e1aec9cf0db9655a1bc4be1d8282b1493 extends \Twig\Template
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
        echo "<h2>Réouverture le Mardi 21 Juillet</h2>
<p>Suivez le planning des événements <a href=\"http://localhost/accrobranche/fr/evenement/ete-2020\">ici</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/home/lemaycta/public_html/user/pages/02.evenement/ouverture-en-avril";
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
        return new Source("<h2>Réouverture le Mardi 21 Juillet</h2>
<p>Suivez le planning des événements <a href=\"http://localhost/accrobranche/fr/evenement/ete-2020\">ici</a></p>", "@Page:/home/lemaycta/public_html/user/pages/02.evenement/ouverture-en-avril", "");
    }
}
