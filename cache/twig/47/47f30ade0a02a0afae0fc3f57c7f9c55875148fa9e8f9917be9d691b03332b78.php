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

/* partials/language-selector.html.twig */
class __TwigTemplate_438ed76776782ea8a7456f6154890e731af6df938bb3e21fe1984dec90e72d4d extends \Twig\Template
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
        echo "<div class=\"language-selector\">
  <button class=\"btn\" type=\"button\" data-dropdown=\"langSelectorList\">
    ";
        // line 3
        if ((($this->getAttribute(($context["language_display"] ?? null), "button", []) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "button", []) == "flag"))) {
            // line 4
            echo "    <img alt=\"";
            echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$this->getAttribute(($context["language_selector"] ?? null), "current", [])]));
            echo "\" src=\"";
            echo (($context["path_flags"] ?? null) . $this->getAttribute(($context["language_selector"] ?? null), "current", []));
            echo ".png\" />
    ";
        }
        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["language_display"] ?? null), "button", []) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "button", []) == "name"))) {
            // line 7
            echo "    ";
            echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$this->getAttribute(($context["language_selector"] ?? null), "current", [])]));
            echo "
    ";
        }
        // line 9
        echo "    <i class=\"fa fa-caret-down\"></i>
  </button>

  <ul class=\"dropdown-menu\" id=\"langSelectorList\">
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["language_selector"] ?? null), "languages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 14
            echo "
    ";
            // line 15
            $context["show_language"] = true;
            // line 16
            echo "    ";
            if (($context["language"] == $this->getAttribute(($context["language_selector"] ?? null), "current", []))) {
                // line 17
                echo "        ";
                $context["lang_url"] = ($this->getAttribute(($context["page"] ?? null), "url", []) . "/");
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["language"]], "method"));
                // line 20
                echo "        ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["language_selector"] ?? null), "page_route", [])) . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 21
                echo "        ";
                $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "language_selector", []), "untranslated_pages_behavior", []);
                // line 22
                echo "        ";
                if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                    // line 23
                    echo "            ";
                    $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["language_selector"] ?? null), "translated_pages", []), $context["language"], [], "array");
                    // line 24
                    echo "            ";
                    if (( !($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", []))) {
                        // line 25
                        echo "                ";
                        if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                            // line 26
                            echo "                    ";
                            $context["lang_url"] = (($context["base_lang_url"] ?? null) . "/");
                            // line 27
                            echo "                ";
                        } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                            // line 28
                            echo "                    ";
                            $context["show_language"] = false;
                            // line 29
                            echo "                ";
                        }
                        // line 30
                        echo "            ";
                    }
                    // line 31
                    echo "        ";
                }
                // line 32
                echo "    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (($context["show_language"] ?? null)) {
                // line 35
                echo "      ";
                if ((($context["lang_url"] ?? null) != $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($this->getAttribute(($context["language_selector"] ?? null), "current", []) . "/")))) {
                    // line 36
                    echo "
        <li>
          <a href=\"";
                    // line 38
                    echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", []));
                    echo "\">
            ";
                    // line 39
                    if ((($this->getAttribute(($context["language_display"] ?? null), "select", []) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "select", []) == "flag"))) {
                        // line 40
                        echo "            <img alt=\"";
                        echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]));
                        echo "\" src=\"";
                        echo (($context["path_flags"] ?? null) . $context["language"]);
                        echo ".png\" />
            ";
                    }
                    // line 42
                    echo "            ";
                    if ((($this->getAttribute(($context["language_display"] ?? null), "select", []) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "select", []) == "name"))) {
                        // line 43
                        echo "            ";
                        echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), [$context["language"]]));
                        echo "
            ";
                    }
                    // line 45
                    echo "          </a>
        </li>

      ";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/language-selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 52,  163 => 50,  160 => 49,  154 => 45,  148 => 43,  145 => 42,  137 => 40,  135 => 39,  131 => 38,  127 => 36,  124 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  66 => 15,  63 => 14,  59 => 13,  53 => 9,  47 => 7,  44 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"language-selector\">
  <button class=\"btn\" type=\"button\" data-dropdown=\"langSelectorList\">
    {% if language_display.button == 'default' or language_display.button == 'flag' %}
    <img alt=\"{{ native_name(language_selector.current)|capitalize }}\" src=\"{{ path_flags ~ language_selector.current }}.png\" />
    {% endif %}
    {% if language_display.button == 'default' or language_display.button == 'name' %}
    {{ native_name(language_selector.current)|capitalize }}
    {% endif %}
    <i class=\"fa fa-caret-down\"></i>
  </button>

  <ul class=\"dropdown-menu\" id=\"langSelectorList\">
{% for language in language_selector.languages %}

    {% set show_language = true %}
    {% if language == language_selector.current %}
        {% set lang_url = page.url ~ '/' %}
    {% else %}
        {% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
        {% set lang_url = base_lang_url ~ language_selector.page_route ~ page.urlExtension %}
        {% set untranslated_pages_behavior = grav.config.plugins.language_selector.untranslated_pages_behavior %}
        {% if untranslated_pages_behavior != 'none' %}
            {% set translated_page = language_selector.translated_pages[language] %}
            {% if (not translated_page) or (not translated_page.published) %}
                {% if untranslated_pages_behavior == 'redirect' %}
                    {% set lang_url = base_lang_url ~ '/' %}
                {% elseif untranslated_pages_behavior == 'hide' %}
                    {% set show_language = false %}
                {% endif %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if show_language %}
      {% if lang_url != url(language_selector.current~'/') %}

        <li>
          <a href=\"{{ lang_url ~ uri.params }}\">
            {% if language_display.select == 'default' or language_display.select == 'flag' %}
            <img alt=\"{{ native_name(language)|capitalize }}\" src=\"{{ path_flags ~ language }}.png\" />
            {% endif %}
            {% if language_display.select == 'default' or language_display.select == 'name' %}
            {{ native_name(language)|capitalize }}
            {% endif %}
          </a>
        </li>

      {% endif %}
    {% endif %}

{% endfor %}
  </ul>
</div>
", "partials/language-selector.html.twig", "C:\\xampp\\htdocs\\accrobranche--projet-cesi\\user\\plugins\\language-selector\\templates\\partials\\language-selector.html.twig");
    }
}
