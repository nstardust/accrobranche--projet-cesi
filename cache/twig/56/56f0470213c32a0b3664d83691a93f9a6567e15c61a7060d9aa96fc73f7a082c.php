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

/* @Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/01.accrobranche/04._callout */
class __TwigTemplate_4cf0ae1df265de00397303cc20d40c06fcddf28606686f864a4b015a8955639e extends \Twig\Template
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
<section class=\"section modular-text  bg-greyblue2\">
    <section class=\"container grid-lg\">
        <div class=\"columns right\">
                        <div class=\"column col-6 col-md-12\">
                <h2><strong>Les sorties</strong> en plein air !</h2>
<p>Les meilleurs activités sont chez <strong>Accro-branché</strong> ! On vous réserve de nombreuses <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/nouvelles-actives-2020\">surprise</a>; consultez notre <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/ete-2020\">agenda</a>, et réservez vos sorties en <a href=\"tel:+33647983007\">nous contactant</a>, par téléphone !</p>
<p><a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement\" class=\"btn btn-primary btn-lg\">En savoir plus...</a></p>
            </div>
            <div class=\"column col-6 col-md-12\">
                <img alt=\"\" src=\"/accrobranche--projet-cesi/user/pages/01.accrobranche/04._callout/insta_post_carrement.jpg\" />
            </div>
                    </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/01.accrobranche/04._callout";
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
<section class=\"section modular-text  bg-greyblue2\">
    <section class=\"container grid-lg\">
        <div class=\"columns right\">
                        <div class=\"column col-6 col-md-12\">
                <h2><strong>Les sorties</strong> en plein air !</h2>
<p>Les meilleurs activités sont chez <strong>Accro-branché</strong> ! On vous réserve de nombreuses <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/nouvelles-actives-2020\">surprise</a>; consultez notre <a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement/ete-2020\">agenda</a>, et réservez vos sorties en <a href=\"tel:+33647983007\">nous contactant</a>, par téléphone !</p>
<p><a href=\"http://localhost/accrobranche--projet-cesi/fr/evenement\" class=\"btn btn-primary btn-lg\">En savoir plus...</a></p>
            </div>
            <div class=\"column col-6 col-md-12\">
                <img alt=\"\" src=\"/accrobranche--projet-cesi/user/pages/01.accrobranche/04._callout/insta_post_carrement.jpg\" />
            </div>
                    </div>
    </section>
</section>
", "@Page:C:/xampp/htdocs/accrobranche--projet-cesi/user/pages/01.accrobranche/04._callout", "");
    }
}
