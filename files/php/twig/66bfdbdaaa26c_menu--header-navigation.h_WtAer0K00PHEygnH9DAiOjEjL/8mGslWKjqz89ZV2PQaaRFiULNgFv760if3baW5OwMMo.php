<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/cook_library_bootstrap_theme_311/templates/menu--header-navigation.html.twig */
class __TwigTemplate_baf01aebd7d840b68b15be236346a09fbde663e5140d4e4efa720d2d7b1a8578 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 24, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "  ";
            $macros["menus"] = $this;
            // line 28
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 29
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "nav", 2 => "navbar-nav"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo ">
    ";
                } elseif ((                // line 31
($context["menu_level"] ?? null) == 1)) {
                    // line 32
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu", 1 => ("menu-level" . $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 32, $this->source))], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo ">
    ";
                } elseif ((                // line 33
($context["menu_level"] ?? null) > 1)) {
                    // line 34
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "dropdown-menu", 1 => "container", 2 => "row"], "method", false, false, true, 34), "addClass", [0 => "menu-level-higher"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 36
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "      ";
                    // line 38
                    $context["item_classes"] = [0 => twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                     // line 39
$context["item"], "title", [], "any", false, false, true, 39), 39, $this->source), [" " => ($context["nospace"] ?? null), "&" => ($context["noampersand"] ?? null)]), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 40
$context["item"], "is_expanded", [], "any", false, false, true, 40)) ? ("expanded") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "is_expanded", [], "any", false, false, true, 41) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 42
$context["item"], "in_active_trail", [], "any", false, false, true, 42)) ? ("active") : (""))];
                    // line 45
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 45))) {
                        // line 46
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 46), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 47
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                        echo " </a>
      ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 48
$context["item"], "is_expanded", [], "any", false, false, true, 48) == 1)) {
                        // line 49
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 49), "removeClass", [0 => "dropdown-toggle"], "method", false, false, true, 49), "addClass", [0 => "col-md-sunrise", 1 => "dropdown-header"], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                        echo " id=\"special-2\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                        echo "
      ";
                    } else {
                        // line 51
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 52
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                        echo "\"><span id=\"title\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                        echo "</span>
<span id=\"";
                        // line 53
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), [" " => ($context["nospace"] ?? null), "&" => ($context["noampersand"] ?? null)]), "html", null, true);
                        echo "\">
        </span>
        </a>
      ";
                    }
                    // line 57
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57)) {
                        // line 58
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 58), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "nav", 1 => "navbar-nav", 2 => "col-md-12", 3 => "col-lg-8"], "method", false, false, true, 58), (($context["menu_level"] ?? null) + 1)], 58, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 60
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/menu--header-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 62,  159 => 60,  153 => 58,  150 => 57,  143 => 53,  137 => 52,  132 => 51,  124 => 49,  122 => 48,  116 => 47,  111 => 46,  108 => 45,  106 => 42,  105 => 41,  104 => 40,  103 => 39,  102 => 38,  100 => 37,  95 => 36,  89 => 34,  87 => 33,  82 => 32,  80 => 31,  75 => 30,  72 => 29,  69 => 28,  66 => 27,  51 => 26,  44 => 24,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/menu--header-navigation.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/menu--header-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 36, "set" => 38);
        static $filters = array("escape" => 30, "replace" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'replace'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
