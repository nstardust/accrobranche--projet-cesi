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

/* @Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/03.evenement/ouverture-en-juillet */
class __TwigTemplate_14cb3830f40e98f04f5691389d4d9c44d265d914814b5a1dca914ea722f43b06 extends \Twig\Template
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
<p>Suivez le planning des événements <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/nouvelles-actives-2020\">ici</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/03.evenement/ouverture-en-juillet";
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
<p>Suivez le planning des événements <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/nouvelles-actives-2020\">ici</a></p>", "@Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/03.evenement/ouverture-en-juillet", "");
    }
}