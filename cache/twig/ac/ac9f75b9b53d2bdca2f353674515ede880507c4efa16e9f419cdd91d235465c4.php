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

/* sitemap.xml.twig */
class __TwigTemplate_2b402a32493e705d29865f7e273490cabffad3f061aa10f55410a7b27d1e1c73 extends \Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"";
        // line 2
        echo $this->getAttribute(($context["uri"] ?? null), "rootUrl", []);
        echo "/user/plugins/sitemap/sitemap.xsl\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sitemap"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "  <url>
    <loc>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "location", []));
            echo "</loc>
";
            // line 7
            if ($this->getAttribute($context["entry"], "translated", [])) {
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "translated", []));
                foreach ($context['_seq'] as $context["language"] => $context["page_route"]) {
                    // line 9
                    echo "    <xhtml:link rel=\"alternate\" hreflang=\"";
                    echo $context["language"];
                    echo "\" href=\"";
                    echo $this->getAttribute(($context["uri"] ?? null), "rootUrl", [0 => true], "method");
                    echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["language"]], "method");
                    echo $context["page_route"];
                    echo "\" />
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['language'], $context['page_route'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 12
            if ($this->getAttribute($context["entry"], "lastmod", [])) {
                // line 13
                echo "    <lastmod>";
                echo $this->getAttribute($context["entry"], "lastmod", []);
                echo "</lastmod>
";
            }
            // line 15
            if ($this->getAttribute($context["entry"], "changefreq", [])) {
                // line 16
                echo "    <changefreq>";
                echo $this->getAttribute($context["entry"], "changefreq", []);
                echo "</changefreq>
";
            }
            // line 18
            if ($this->getAttribute($context["entry"], "priority", [])) {
                // line 19
                echo "    <priority>";
                echo twig_number_format_filter($this->env, $this->getAttribute($context["entry"], "priority", []), 1);
                echo "</priority>
";
            }
            // line 21
            echo "  </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</urlset>
";
    }

    public function getTemplateName()
    {
        return "sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  93 => 21,  87 => 19,  85 => 18,  79 => 16,  77 => 15,  71 => 13,  69 => 12,  55 => 9,  51 => 8,  49 => 7,  45 => 6,  42 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"{{ uri.rootUrl }}/user/plugins/sitemap/sitemap.xsl\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
{% for entry in sitemap %}
  <url>
    <loc>{{ entry.location|e }}</loc>
{% if entry.translated %}
{% for language, page_route in entry.translated %}
    <xhtml:link rel=\"alternate\" hreflang=\"{{ language }}\" href=\"{{uri.rootUrl(true)}}{{grav.language.getLanguageURLPrefix(language)}}{{ page_route }}\" />
{% endfor %}
{% endif %}
{% if entry.lastmod %}
    <lastmod>{{ entry.lastmod }}</lastmod>
{% endif %}
{% if entry.changefreq %}
    <changefreq>{{ entry.changefreq }}</changefreq>
{% endif %}
{% if entry.priority %}
    <priority>{{ entry.priority|number_format(1) }}</priority>
{% endif %}
  </url>
{% endfor %}
</urlset>
", "sitemap.xml.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\plugins\\sitemap\\templates\\sitemap.xml.twig");
    }
}
