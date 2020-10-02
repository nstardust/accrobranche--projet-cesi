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

/* @Page:/home/lemaycta/public_html/user/pages/02.evenement/nouvelles-actives-2020 */
class __TwigTemplate_7ddb7eb9b65235e8d9d7dd0885289004b45b9a4354fae4d8291d423dba69b308 extends \Twig\Template
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
        echo "<h2>Nouvelle années, nouvelles activités</h2>
<p>Avec la crise du Covid, nous avons eu tout le temps de trouver de nouvelles idées pour préparer cette nouvelle saison !</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/home/lemaycta/public_html/user/pages/02.evenement/nouvelles-actives-2020";
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
        return new Source("<h2>Nouvelle années, nouvelles activités</h2>
<p>Avec la crise du Covid, nous avons eu tout le temps de trouver de nouvelles idées pour préparer cette nouvelle saison !</p>", "@Page:/home/lemaycta/public_html/user/pages/02.evenement/nouvelles-actives-2020", "");
    }
}
