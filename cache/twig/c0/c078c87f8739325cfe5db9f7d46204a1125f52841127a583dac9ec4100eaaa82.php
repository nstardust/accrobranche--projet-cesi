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

/* @Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/03.evenement */
class __TwigTemplate_d2ce28fabc1b13b3935e80b51e7c864c72cddba7b74a1cddaec6ec0ee28c249c extends \Twig\Template
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
        echo "<h1>Événements Accro-branché</h1>";
    }

    public function getTemplateName()
    {
        return "@Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/03.evenement";
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
        return new Source("<h1>Événements Accro-branché</h1>", "@Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/03.evenement", "");
    }
}
