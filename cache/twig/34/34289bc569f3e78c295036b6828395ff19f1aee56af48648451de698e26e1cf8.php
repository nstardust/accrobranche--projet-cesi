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

/* @Page:E:/Program Files (x86)/localhost/accrobranche/user/pages/02.evenement/nouvelles-actives-2020 */
class __TwigTemplate_38b29861a50cefced12571b762d8f19b2ec3cd7c4e4c2112ee6f210ebb1238a2 extends \Twig\Template
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
        return "@Page:E:/Program Files (x86)/localhost/accrobranche/user/pages/02.evenement/nouvelles-actives-2020";
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
<p>Avec la crise du Covid, nous avons eu tout le temps de trouver de nouvelles idées pour préparer cette nouvelle saison !</p>", "@Page:E:/Program Files (x86)/localhost/accrobranche/user/pages/02.evenement/nouvelles-actives-2020", "");
    }
}
