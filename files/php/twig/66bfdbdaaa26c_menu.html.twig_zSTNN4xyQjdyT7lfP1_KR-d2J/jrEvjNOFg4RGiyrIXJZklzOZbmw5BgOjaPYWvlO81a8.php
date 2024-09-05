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

/* themes/custom/cook_library_bootstrap_theme_311/templates/menu.html.twig */
class __TwigTemplate_b2c0342782f57933981f3cf2ca0ed6b26986f06ad62501acddf43fad81f81735 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo " 
";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 55, $this->source))), 2 => "nav"]))], 55, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 20
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 21
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 22
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 23
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu", 1 => "nav"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 25
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo ">
    ";
                }
                // line 27
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "      ";
                    // line 29
                    $context["item_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,                     // line 30
$context["item"], "is_expanded", [], "any", false, false, true, 30) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 30))) ? ("expanded") : ("")), 1 => ((((twig_get_attribute($this->env, $this->source,                     // line 31
$context["item"], "is_expanded", [], "any", false, false, true, 31) && (($context["menu_level"] ?? null) == 0)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 31))) ? ("dropdown") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 32
$context["item"], "in_active_trail", [], "any", false, false, true, 32)) ? ("active") : (""))];
                    // line 35
                    echo "      ";
                    if ((((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 35)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 35))) {
                        // line 36
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 36), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 36), 36, $this->source), "html", null, true);
                        echo ">
        <a href=\"";
                        // line 37
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        echo " <span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 39
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 39), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
                        echo ">
        ";
                        // line 40
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 40), 40, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), 40, $this->source)), "html", null, true);
                        echo "
      ";
                    }
                    // line 42
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 42)) {
                        // line 43
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 43), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "nav"], "method", false, false, true, 43), (($context["menu_level"] ?? null) + 1)], 43, $context, $this->getSourceContext()));
                        echo "
      ";
                    }
                    // line 45
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
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
        return "themes/custom/cook_library_bootstrap_theme_311/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 47,  129 => 45,  123 => 43,  120 => 42,  115 => 40,  110 => 39,  103 => 37,  98 => 36,  95 => 35,  93 => 32,  92 => 31,  91 => 30,  90 => 29,  88 => 28,  83 => 27,  77 => 25,  71 => 23,  68 => 22,  65 => 21,  49 => 20,  43 => 55,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/menu.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 20, "if" => 21, "for" => 27, "set" => 29);
        static $filters = array("clean_class" => 55, "escape" => 23);
        static $functions = array("link" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'for', 'set', 'import'],
                ['clean_class', 'escape'],
                ['link']
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
