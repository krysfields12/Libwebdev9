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

/* themes/custom/cook_library_bootstrap_theme_311/templates/page--front.html.twig */
class __TwigTemplate_8082fda62f302b944afd77b9d9e89bcc75428563193c03cea49b63f9b10620b2 extends \Twig\Template
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
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "announcement", [], "any", false, false, true, 63)) {
            // line 64
            echo "    ";
            $this->displayBlock('announcement', $context, $blocks);
        }
        // line 68
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 68), "fluid_container", [], "any", false, false, true, 68)) ? ("container-fluid") : ("container"));
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 70) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 70))) {
            // line 71
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 115
        echo "
";
        // line 117
        $this->displayBlock('main', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 199)) {
            // line 200
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 64
    public function block_announcement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "announcement", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 71
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "    ";
        // line 73
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "navbar_inverse", [], "any", false, false, true, 75)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
($context["theme"] ?? null), "settings", [], "any", false, false, true, 76), "navbar_position", [], "any", false, false, true, 76)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 76), "navbar_position", [], "any", false, false, true, 76), 76, $this->source)))) : (($context["container"] ?? null)))];
        // line 79
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">

      ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 81) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 81))) {
            // line 82
            echo "      <div class=\"row header\">
       <div class=\"col-md-4\">
        ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
       </div>
       <div class=\"col-md-8 navbar-header navbar-right hidden-sm hidden-xs\">
         ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
       </div>
      </div>
      ";
        }
        // line 91
        echo "     
    <div class=\"row\">
        ";
        // line 94
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 94)) {
            // line 95
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 102
        echo "     
      ";
        // line 104
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 104)) {
            // line 105
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 109
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => "container"], "method", false, false, true, 109)) {
            // line 110
            echo "      ";
        }
        // line 111
        echo "    </div>
    </header>
  ";
    }

    // line 117
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 118, $this->source), "html", null, true);
        echo " js-quickedit-main-content\" id=\"main-content\">
    <div class=\"row\">

      ";
        // line 122
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 122)) {
            // line 123
            echo "        ";
            $this->displayBlock('top_bar', $context, $blocks);
            // line 130
            echo "      ";
        }
        // line 131
        echo "
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
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 145) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 145)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 146
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 146) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 146)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 147
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
        // line 160
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 161
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 164
            echo "        ";
        }
        // line 165
        echo "
        ";
        // line 167
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 168
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 171
            echo "        ";
        }
        // line 172
        echo "
        ";
        // line 174
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 174)) {
            // line 175
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 178
            echo "        ";
        }
        // line 179
        echo "
        ";
        // line 181
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "      </section>

      ";
        // line 188
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 188)) {
            // line 189
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 194
            echo "      ";
        }
        // line 195
        echo "    </div>
  </div>
";
    }

    // line 123
    public function block_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "          <div class=\"col-sm-12 front-heading\" role=\"heading\">
            ";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
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

    // line 161
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 162, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 168
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 169, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 175
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 181
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "          <a id=\"main-content\"></a>
          ";
        // line 183
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 189
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 200
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 201, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 202
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 202,  397 => 201,  393 => 200,  386 => 191,  383 => 190,  379 => 189,  373 => 183,  370 => 182,  366 => 181,  359 => 176,  355 => 175,  348 => 169,  344 => 168,  337 => 162,  333 => 161,  326 => 155,  322 => 154,  315 => 136,  312 => 135,  308 => 134,  299 => 125,  296 => 124,  292 => 123,  286 => 195,  283 => 194,  280 => 189,  277 => 188,  273 => 185,  270 => 181,  267 => 179,  264 => 178,  261 => 175,  258 => 174,  255 => 172,  252 => 171,  249 => 168,  246 => 167,  243 => 165,  240 => 164,  237 => 161,  234 => 160,  231 => 158,  228 => 157,  225 => 154,  222 => 153,  216 => 150,  214 => 147,  213 => 146,  212 => 145,  211 => 144,  210 => 143,  208 => 142,  205 => 140,  202 => 139,  199 => 134,  196 => 133,  193 => 131,  190 => 130,  187 => 123,  184 => 122,  177 => 118,  173 => 117,  167 => 111,  164 => 110,  161 => 109,  155 => 106,  152 => 105,  149 => 104,  146 => 102,  137 => 96,  134 => 95,  131 => 94,  127 => 91,  120 => 87,  114 => 84,  110 => 82,  108 => 81,  102 => 79,  100 => 76,  99 => 75,  98 => 73,  96 => 72,  92 => 71,  85 => 65,  81 => 64,  75 => 200,  73 => 199,  70 => 198,  68 => 117,  65 => 115,  61 => 71,  59 => 70,  57 => 68,  53 => 64,  51 => 63,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/page--front.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 63, "block" => 64, "set" => 68);
        static $filters = array("escape" => 65, "clean_class" => 76, "t" => 96);
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
