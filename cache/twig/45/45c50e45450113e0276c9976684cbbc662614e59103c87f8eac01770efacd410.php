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

/* @Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/02.evenement/ouverture-en-avril */
class __TwigTemplate_35f69a4b9eb81957fe09571a6084c9cf97f4aff687f0c231c0eeefe6d7d2fa7e extends \Twig\Template
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
<p>Suivez le planning des événements <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/ete-2020\">ici</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/02.evenement/ouverture-en-avril";
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
<p>Suivez le planning des événements <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/ete-2020\">ici</a></p>", "@Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/02.evenement/ouverture-en-avril", "");
    }
}
