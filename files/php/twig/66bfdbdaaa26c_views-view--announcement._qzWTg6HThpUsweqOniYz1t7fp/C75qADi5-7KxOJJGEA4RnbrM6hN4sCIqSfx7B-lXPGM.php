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

/* themes/custom/cook_library_bootstrap_theme_311/templates/views-view--announcement.html.twig */
class __TwigTemplate_8a8fa8e48bf713e9dcfec1e1c4730e920292dac662188a480cb03ff29ad96d5f extends \Twig\Template
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
        // line 36
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null), 40, $this->source)), 4 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : (""))];
        // line 44
        if (($context["rows"] ?? null)) {
            // line 45
            echo "<div class=\"alert alert-danger alert-dismissible col-sm-12\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            echo " role=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
  ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 49, $this->source), "html", null, true);
            echo "
  ";
            // line 50
            if (($context["title"] ?? null)) {
                // line 51
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 51, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 53
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 53, $this->source), "html", null, true);
            echo "
  ";
            // line 54
            if (($context["header"] ?? null)) {
                // line 55
                echo "    <div class=\"view-header\">
      ";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 56, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 59
            echo "  ";
            if (($context["exposed"] ?? null)) {
                // line 60
                echo "    <div class=\"view-filters form-group\">
      ";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 61, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 64
            echo "  ";
            if (($context["attachment_before"] ?? null)) {
                // line 65
                echo "    <div class=\"attachment attachment-before\">
      ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 66, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 69
            echo "
  ";
            // line 70
            if (($context["rows"] ?? null)) {
                // line 71
                echo "    <div class=\"view-content\">
      ";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 72, $this->source), "html", null, true);
                echo "
    </div>
  ";
            } elseif (            // line 74
($context["empty"] ?? null)) {
                // line 75
                echo "    <div class=\"view-empty\">
      ";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 76, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 79
            echo "
  ";
            // line 80
            if (($context["pager"] ?? null)) {
                // line 81
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 81, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 83
            echo "  ";
            if (($context["attachment_after"] ?? null)) {
                // line 84
                echo "    <div class=\"attachment attachment-after\">
      ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 85, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 88
            echo "  ";
            if (($context["more"] ?? null)) {
                // line 89
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 89, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 91
            echo "  ";
            if (($context["footer"] ?? null)) {
                // line 92
                echo "    <div class=\"view-footer\">
      ";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 93, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 96
            echo "  ";
            if (($context["feed_icons"] ?? null)) {
                // line 97
                echo "    <div class=\"feed-icons\">
      ";
                // line 98
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 98, $this->source), "html", null, true);
                echo "
    </div>
  ";
            }
            // line 101
            echo "</div>
";
        }
        // line 103
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/views-view--announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 103,  187 => 101,  181 => 98,  178 => 97,  175 => 96,  169 => 93,  166 => 92,  163 => 91,  157 => 89,  154 => 88,  148 => 85,  145 => 84,  142 => 83,  136 => 81,  134 => 80,  131 => 79,  125 => 76,  122 => 75,  120 => 74,  115 => 72,  112 => 71,  110 => 70,  107 => 69,  101 => 66,  98 => 65,  95 => 64,  89 => 61,  86 => 60,  83 => 59,  77 => 56,  74 => 55,  72 => 54,  67 => 53,  61 => 51,  59 => 50,  55 => 49,  47 => 45,  45 => 44,  43 => 41,  42 => 40,  41 => 39,  40 => 38,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/views-view--announcement.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/views-view--announcement.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 36, "if" => 44);
        static $filters = array("clean_class" => 38, "escape" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
