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

/* @Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/02.evenement/nouvelles-actives-2020 */
class __TwigTemplate_f29f7bddf38b422cbb82fbb26f0de6052d0c283c75ef618b8997a4f4d14d9649 extends \Twig\Template
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
        echo "<h2>Nouvelle année, nouvelles activités</h2>
<p>Avec la crise Covid, nous avons eu amplement le temps de trouver de nouvelles idées pour préparer cette nouvelle saison!</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/02.evenement/nouvelles-actives-2020";
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
        return new Source("<h2>Nouvelle année, nouvelles activités</h2>
<p>Avec la crise Covid, nous avons eu amplement le temps de trouver de nouvelles idées pour préparer cette nouvelle saison!</p>", "@Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/02.evenement/nouvelles-actives-2020", "");
    }
}
