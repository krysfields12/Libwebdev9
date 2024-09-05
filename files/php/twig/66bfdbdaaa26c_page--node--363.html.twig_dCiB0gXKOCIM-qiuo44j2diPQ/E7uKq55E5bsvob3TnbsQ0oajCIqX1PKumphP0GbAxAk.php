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

/* themes/custom/cook_library_bootstrap_theme_311/templates/page--node--363.html.twig */
class __TwigTemplate_0547056fe6f24431c20018fb1f2ef9efe97449a2b179896fcf2866ead38ca3ce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'announcement' => [$this, 'block_announcement'],
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'top_bar' => [$this, 'block_top_bar'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "announcement", [], "any", false, false, true, 62)) {
            // line 63
            echo "    ";
            $this->displayBlock('announcement', $context, $blocks);
        }
        // line 67
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 67), "fluid_container", [], "any", false, false, true, 67)) ? ("container-fluid") : ("container"));
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 69) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 69))) {
            // line 70
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 114
        echo "
";
        // line 116
        $this->displayBlock('main', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 211)) {
            // line 212
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 63
    public function block_announcement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "announcement", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 70
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    ";
        // line 72
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["theme"] ?? null), "settings", [], "any", false, false, true, 74), "navbar_inverse", [], "any", false, false, true, 74)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "navbar_position", [], "any", false, false, true, 75)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "navbar_position", [], "any", false, false, true, 75), 75, $this->source)))) : (($context["container"] ?? null)))];
        // line 78
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">

      ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 80) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 80))) {
            // line 81
            echo "      <div class=\"row header\">
       <div class=\"col-md-4\">
        ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
       </div>
       <div class=\"col-md-8 navbar-header navbar-right hidden-sm hidden-xs\">
         ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
       </div>
      </div>
      ";
        }
        // line 90
        echo "     
    <div class=\"row\">
        ";
        // line 93
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 93)) {
            // line 94
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 101
        echo "     
      ";
        // line 103
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 103)) {
            // line 104
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse row\">
          ";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 108
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => "container"], "method", false, false, true, 108)) {
            // line 109
            echo "      ";
        }
        // line 110
        echo "    </div>
    </header>
  ";
    }

    // line 116
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 117, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">

      ";
        // line 120
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 120)) {
            // line 121
            echo "      <div class=\"row\">
        ";
            // line 122
            $this->displayBlock('top_bar', $context, $blocks);
            // line 127
            echo "      </div>
      ";
        }
        // line 129
        echo "
      <div class=\"row\">

      ";
        // line 133
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 133)) {
            // line 134
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 139
            echo "      ";
        }
        // line 140
        echo "
      ";
        // line 142
        echo "      ";
        // line 143
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 144
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 144) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 144))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 145
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 145) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 145)))) ? ("col-sm-11") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 146
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 146) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 146)))) ? ("col-sm-11") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 147
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 147)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 147)))) ? ("col-sm-12") : (""))];
        // line 150
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 150), 150, $this->source), "html", null, true);
        echo ">

        ";
        // line 153
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 153)) {
            // line 154
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 159
        if (($context["breadcrumb"] ?? null)) {
            // line 160
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 163
            echo "        ";
        }
        // line 164
        echo "
        ";
        // line 166
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 167
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 170
            echo "        ";
        }
        // line 171
        echo "
        ";
        // line 173
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 173)) {
            // line 174
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 177
            echo "        ";
        }
        // line 178
        echo "
        ";
        // line 180
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 196
        echo "      </section>

      ";
        // line 199
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 199)) {
            // line 200
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 205
            echo "      ";
        }
        // line 206
        echo "
      </div>
  </div>
";
    }

    // line 122
    public function block_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 134
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 154
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 160
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 161, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 167
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 168, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 174
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 180
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "          <a id=\"main-content\"></a>
<script>
  (function() {
    var cx = '003942011082489546824:rebbilpairc';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
          ";
        // line 194
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 200
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 202
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 212
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 213, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 214
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/page--node--363.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 214,  411 => 213,  407 => 212,  400 => 202,  397 => 201,  393 => 200,  387 => 194,  372 => 181,  368 => 180,  361 => 175,  357 => 174,  350 => 168,  346 => 167,  339 => 161,  335 => 160,  328 => 155,  324 => 154,  317 => 136,  314 => 135,  310 => 134,  303 => 124,  300 => 123,  296 => 122,  289 => 206,  286 => 205,  283 => 200,  280 => 199,  276 => 196,  273 => 180,  270 => 178,  267 => 177,  264 => 174,  261 => 173,  258 => 171,  255 => 170,  252 => 167,  249 => 166,  246 => 164,  243 => 163,  240 => 160,  238 => 159,  235 => 158,  232 => 157,  229 => 154,  226 => 153,  220 => 150,  218 => 147,  217 => 146,  216 => 145,  215 => 144,  214 => 143,  212 => 142,  209 => 140,  206 => 139,  203 => 134,  200 => 133,  195 => 129,  191 => 127,  189 => 122,  186 => 121,  183 => 120,  177 => 117,  173 => 116,  167 => 110,  164 => 109,  161 => 108,  155 => 105,  152 => 104,  149 => 103,  146 => 101,  137 => 95,  134 => 94,  131 => 93,  127 => 90,  120 => 86,  114 => 83,  110 => 81,  108 => 80,  102 => 78,  100 => 75,  99 => 74,  98 => 72,  96 => 71,  92 => 70,  85 => 64,  81 => 63,  75 => 212,  73 => 211,  70 => 210,  68 => 116,  65 => 114,  61 => 70,  59 => 69,  57 => 67,  53 => 63,  51 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/page--node--363.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/page--node--363.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 62, "block" => 63, "set" => 67);
        static $filters = array("escape" => 64, "clean_class" => 75, "t" => 95);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'clean_class', 't'],
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
