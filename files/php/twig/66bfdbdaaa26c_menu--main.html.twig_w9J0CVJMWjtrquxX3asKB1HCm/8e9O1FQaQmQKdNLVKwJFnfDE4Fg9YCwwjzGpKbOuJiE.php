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

/* themes/custom/cook_library_bootstrap_theme_311/templates/menu--main.html.twig */
class __TwigTemplate_b677270b3c49b0695fde409037b1d1a15c4adb174754d04bbe4ed0f24e1694cf extends \Twig\Template
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
$context["item"], "in_active_trail", [], "any", false, false, true, 42)) ? ("active") : ("")), 4 => (((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "title", [], "any", false, false, true, 43) == "Services")) ? ("dropdown-header") : ("")), 5 => (((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "title", [], "any", false, false, true, 44) == "Hours")) ? ("hidden-lg hidden-md") : ("")), 6 => (((twig_get_attribute($this->env, $this->source,                     // line 45
$context["item"], "title", [], "any", false, false, true, 45) == "Ask a Librarian")) ? ("hidden-lg hidden-md") : ("")), 7 => (((twig_get_attribute($this->env, $this->source,                     // line 46
$context["item"], "title", [], "any", false, false, true, 46) == "Sign in")) ? ("hidden-lg hidden-md") : ("")), 8 => (((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "title", [], "any", false, false, true, 47) == "Support the Library")) ? ("hidden-lg hidden-md") : (""))];
                    // line 50
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 50))) {
                        // line 51
                        echo "        
        <li";
                        // line 52
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 52), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 53
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                        echo " <span class=\"caret\"></span></a>
        ";
                        // line 57
                        echo "      ";
                    } elseif ((((twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57) == "Services") || (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57) == "Using the Libraries")) || (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57) == "Spaces"))) {
                        // line 58
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 58), "removeClass", [0 => "dropdown-toggle"], "method", false, false, true, 58), "addClass", [0 => "dropdown-header", 1 => "col-md-4"], "method", false, false, true, 58), 58, $this->source), "html", null, true);
                        echo " id=\"special\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                        echo "
      ";
                    } else {
                        // line 60
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 60), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 61
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                        echo "<span id=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                         // line 62
$context["item"], "title", [], "any", false, false, true, 62), 62, $this->source), [" " => ($context["nospace"] ?? null), "&" => ($context["noampersand"] ?? null)]), "html", null, true);
                        echo "\"></span>
        </a>
      ";
                    }
                    // line 65
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 65)) {
                        // line 66
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 66), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "nav", 1 => "navbar-nav", 2 => "col-md-12", 3 => "col-lg-8"], "method", false, false, true, 66), (($context["menu_level"] ?? null) + 1)], 66, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 68
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
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
        return "themes/custom/cook_library_bootstrap_theme_311/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 70,  165 => 68,  159 => 66,  156 => 65,  150 => 62,  145 => 61,  140 => 60,  132 => 58,  129 => 57,  123 => 53,  119 => 52,  116 => 51,  113 => 50,  111 => 47,  110 => 46,  109 => 45,  108 => 44,  107 => 43,  106 => 42,  105 => 41,  104 => 40,  103 => 39,  102 => 38,  100 => 37,  95 => 36,  89 => 34,  87 => 33,  82 => 32,  80 => 31,  75 => 30,  72 => 29,  69 => 28,  66 => 27,  51 => 26,  44 => 24,  41 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/menu--main.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/menu--main.html.twig");
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
