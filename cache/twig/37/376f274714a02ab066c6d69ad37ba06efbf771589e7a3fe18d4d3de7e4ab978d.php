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

/* @Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/01.accrobranche/02._banner */
class __TwigTemplate_540d994e64f2d632ae8e27dd16265b03d47cc3f80f088f7ea7431d4d9d0c07ab extends \Twig\Template
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
        echo "
    <section class=\"container-fluid modular-banner grid-lg\">
        <div class=\"columns align-right\" style=\"background-image: url('/accrobranche--projet-cesi/user/pages/01.accrobranche/02._banner/header_informations_essentielles.jpg');\">
            <div class=\"column\">
                <h2>Informations Coronavirus</h2>
<p>Toutes les informations sont sur : <a href=\"https://www.santepubliquefrance.fr/dossiers/coronavirus-covid-19\" target=\"_blank\">santepubliquefrance.fr</a></p>
            </div>
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "@Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/01.accrobranche/02._banner";
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
        return new Source("
    <section class=\"container-fluid modular-banner grid-lg\">
        <div class=\"columns align-right\" style=\"background-image: url('/accrobranche--projet-cesi/user/pages/01.accrobranche/02._banner/header_informations_essentielles.jpg');\">
            <div class=\"column\">
                <h2>Informations Coronavirus</h2>
<p>Toutes les informations sont sur : <a href=\"https://www.santepubliquefrance.fr/dossiers/coronavirus-covid-19\" target=\"_blank\">santepubliquefrance.fr</a></p>
            </div>
        </div>
    </section>", "@Page:E:/Program Files (x86)/localhost/accrobranche--projet-cesi/user/pages/01.accrobranche/02._banner", "");
    }
}
