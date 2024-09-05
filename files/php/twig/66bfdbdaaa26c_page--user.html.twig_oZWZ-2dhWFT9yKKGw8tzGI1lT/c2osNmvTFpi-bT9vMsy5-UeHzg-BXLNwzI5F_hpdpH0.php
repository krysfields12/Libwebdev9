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

/* themes/custom/cook_library_bootstrap_theme_311/templates/page--user.html.twig */
class __TwigTemplate_1486907e5000456dc8ab8904837270f5af5dd5e429295d1988e210b295a0bef6 extends \Twig\Template
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
        // line 194
        echo "
";
        // line 195
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 195)) {
            // line 196
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
       <div class=\"col-md-4 col-lg-5\">
        ";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
       </div>
       <div class=\"col-md-8 col-lg-7 navbar-header navbar-right hidden-sm hidden-xs\">
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
        echo " js-quickedit-main-content\" id=\"main-content\">
    <div class=\"row\">

      ";
        // line 121
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 121)) {
            // line 122
            echo "        ";
            $this->displayBlock('top_bar', $context, $blocks);
            // line 127
            echo "      ";
        }
        // line 128
        echo "
      ";
        // line 130
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130)) {
            // line 131
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 136
            echo "      ";
        }
        // line 137
        echo "
      ";
        // line 139
        echo "      ";
        // line 140
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 141
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 141) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 141))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 142
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 142) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 142)))) ? ("col-sm-11") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 143
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 143) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 143)))) ? ("col-sm-11") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 144
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 144)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 144)))) ? ("col-sm-12") : (""))];
        // line 147
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 147), 147, $this->source), "html", null, true);
        echo ">

        ";
        // line 150
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 150)) {
            // line 151
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 156
        if (($context["breadcrumb"] ?? null)) {
            // line 157
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 160
            echo "        ";
        }
        // line 161
        echo "
        ";
        // line 163
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 164
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 167
            echo "        ";
        }
        // line 168
        echo "
        ";
        // line 170
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 170)) {
            // line 171
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 174
            echo "        ";
        }
        // line 175
        echo "
        ";
        // line 177
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 181
        echo "      </section>

      ";
        // line 184
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 184)) {
            // line 185
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 190
            echo "      ";
        }
        // line 191
        echo "    </div>
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

    // line 131
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 151
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 157
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 158, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 164
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 165, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 171
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 177
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "          <a id=\"main-content\"></a>
          ";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 185
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 187
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 196
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 197, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 198
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/page--user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 198,  394 => 197,  390 => 196,  383 => 187,  380 => 186,  376 => 185,  370 => 179,  367 => 178,  363 => 177,  356 => 172,  352 => 171,  345 => 165,  341 => 164,  334 => 158,  330 => 157,  323 => 152,  319 => 151,  312 => 133,  309 => 132,  305 => 131,  298 => 124,  295 => 123,  291 => 122,  285 => 191,  282 => 190,  279 => 185,  276 => 184,  272 => 181,  269 => 177,  266 => 175,  263 => 174,  260 => 171,  257 => 170,  254 => 168,  251 => 167,  248 => 164,  245 => 163,  242 => 161,  239 => 160,  236 => 157,  234 => 156,  231 => 155,  228 => 154,  225 => 151,  222 => 150,  216 => 147,  214 => 144,  213 => 143,  212 => 142,  211 => 141,  210 => 140,  208 => 139,  205 => 137,  202 => 136,  199 => 131,  196 => 130,  193 => 128,  190 => 127,  187 => 122,  184 => 121,  177 => 117,  173 => 116,  167 => 110,  164 => 109,  161 => 108,  155 => 105,  152 => 104,  149 => 103,  146 => 101,  137 => 95,  134 => 94,  131 => 93,  127 => 90,  120 => 86,  114 => 83,  110 => 81,  108 => 80,  102 => 78,  100 => 75,  99 => 74,  98 => 72,  96 => 71,  92 => 70,  85 => 64,  81 => 63,  75 => 196,  73 => 195,  70 => 194,  68 => 116,  65 => 114,  61 => 70,  59 => 69,  57 => 67,  53 => 63,  51 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/page--user.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/page--user.html.twig");
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
