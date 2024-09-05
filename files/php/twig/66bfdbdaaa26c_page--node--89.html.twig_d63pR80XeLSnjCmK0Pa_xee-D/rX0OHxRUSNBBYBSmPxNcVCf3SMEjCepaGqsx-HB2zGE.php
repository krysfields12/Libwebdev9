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

/* themes/custom/cook_library_bootstrap_theme_311/templates/page--node--89.html.twig */
class __TwigTemplate_fc4333c21f4b49380cbb2b1bac7dcd33955ff7e02b082834f4e87dcec1df78d8 extends \Twig\Template
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
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'lower_bar' => [$this, 'block_lower_bar'],
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
        // line 252
        echo "
";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 253)) {
            // line 254
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
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 141) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 141))) ? ("col-sm-6") : ("")), 1 => "landing-page", 2 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 143
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 143)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 143)))) ? ("col-sm-12") : (""))];
        // line 146
        echo "      <p class=\"col-sm-12 intro-text\">Albert S. Cook Library is the campus library for Towson University. We provide the resources, services, and spaces that our community needs in order to find, evaluate, and use information appropriately and ethically.</p>
      </div>

      <div class=\"row initiative initiative-one\">
      <section class=\"col-sm-12\">
         <div class=\"statement-container\">
           <p class=\"statement\">You have to write a research paper and aren&rsquo;t sure where to start.</p>
         </div>
      </section>
      </div>

     <div class=\"row initiative initiative-two\">
     <section class=\"col-sm-12\">
         <div class=\"statement-container\">
           <p class=\"statement\">Your study group needs a quiet place to prepare for that big exam tomorrow.</p>
         </div>
      </section>
      </div>

      <div class=\"row initiative initiative-three\">
      <section class=\"col-sm-12\">
         <div class=\"statement-container\">
           <p class=\"statement\">You want to learn all about your campus organization&rsquo;s history.</p>
         </div>
      </section>
      </div>

      <div class=\"row initiative initiative-four\">
      <section class=\"col-sm-12\">
         <div class=\"statement-container\">
           <p class=\"statement\">You can&rsquo;t wait to talk about a great new movie you just saw.</p>
         </div>
      </section>
      </div>

      <div class=\"row\">
      <section";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 182), 182, $this->source), "html", null, true);
        echo ">

        ";
        // line 185
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 185)) {
            // line 186
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 189
            echo "        ";
        }
        // line 190
        echo "
        ";
        // line 192
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 193
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 196
            echo "        ";
        }
        // line 197
        echo "
        ";
        // line 199
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 199)) {
            // line 200
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 203
            echo "        ";
        }
        // line 204
        echo "
        <div class=\"row\">
        <div class=\"col-md-9 col-sm-12\">
        ";
        // line 208
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 212
        echo "        </div>
        
        ";
        // line 215
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 215)) {
            // line 216
            echo "         ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 222
            echo "        ";
        }
        // line 223
        echo "         </div>

      </section>
     </div>
</div>
</div>
<div class=\"row\">
  <aside class=\"meet-the-dean\">
      <figure role=\"group\">
        <figcaption>Suzanna Yaukey, Dean of University Libraries</figcaption>
        <img alt=\"Suzanna Yaukey, Dean of University Libraries\" data-entity-type=\"file\" height=\"220\" src=\"sites/default/files/styles/medium/public/pictures/2020-08/conrad-suzanna-sq.jpg\" />
      </figure>
    <div class=\"featured-item-content\">
      <h2 class=\"sr-only\">Message from the Dean</h2>
      <p><span class=\"fancy-begin-quote\">&ldquo;</span>Welcome to Cook Library - your place to connect, learn, and explore. As the campus center of intellectual inquiry, Cook Library is here to enrich your academic experience, whether in-person or virtually.&rdquo;</p>
    </div>
  </aside>
</div>
<div class=\"row\">
      ";
        // line 243
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "lower_bar", [], "any", false, false, true, 243)) {
            // line 244
            echo "        ";
            $this->displayBlock('lower_bar', $context, $blocks);
            // line 249
            echo "      ";
        }
        // line 250
        echo "</div>
";
    }

    // line 122
    public function block_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "          <div role=\"heading\" class=\"col-sm-12\">
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

    // line 186
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 193
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 194, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 200
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 208
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 209
        echo "          <a id=\"main-content\"></a>
          ";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 216
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 217
        echo "          <button class=\"btn btn-primary hidden visible-xs\" type=\"button\" data-toggle=\"collapse\" data-target=\"#subnavigation\" aria-expanded=\"false\" aria-controls=\"subnavigation\" id=\"subnavigation-control\"><i class=\"fa fa-bars\"></i>Sub Menu</button>
          <div class=\"col-md-3 col-sm-12 col-xs-12 subnavigation collapse dont-collapse-sm\" id=\"subnavigation\">
            ";
        // line 219
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
        echo "
          </div>
         ";
    }

    // line 244
    public function block_lower_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "          <div class=\"col-sm-12\">
            ";
        // line 246
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "lower_bar", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 254
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 255
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 255, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 256
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/page--node--89.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 256,  453 => 255,  449 => 254,  442 => 246,  439 => 245,  435 => 244,  428 => 219,  424 => 217,  420 => 216,  414 => 210,  411 => 209,  407 => 208,  400 => 201,  396 => 200,  389 => 194,  385 => 193,  378 => 187,  374 => 186,  367 => 133,  364 => 132,  360 => 131,  353 => 124,  350 => 123,  346 => 122,  341 => 250,  338 => 249,  335 => 244,  332 => 243,  311 => 223,  308 => 222,  305 => 216,  302 => 215,  298 => 212,  295 => 208,  290 => 204,  287 => 203,  284 => 200,  281 => 199,  278 => 197,  275 => 196,  272 => 193,  269 => 192,  266 => 190,  263 => 189,  260 => 186,  257 => 185,  252 => 182,  214 => 146,  212 => 143,  211 => 141,  210 => 140,  208 => 139,  205 => 137,  202 => 136,  199 => 131,  196 => 130,  193 => 128,  190 => 127,  187 => 122,  184 => 121,  177 => 117,  173 => 116,  167 => 110,  164 => 109,  161 => 108,  155 => 105,  152 => 104,  149 => 103,  146 => 101,  137 => 95,  134 => 94,  131 => 93,  127 => 90,  120 => 86,  114 => 83,  110 => 81,  108 => 80,  102 => 78,  100 => 75,  99 => 74,  98 => 72,  96 => 71,  92 => 70,  85 => 64,  81 => 63,  75 => 254,  73 => 253,  70 => 252,  68 => 116,  65 => 114,  61 => 70,  59 => 69,  57 => 67,  53 => 63,  51 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/page--node--89.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/page--node--89.html.twig");
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
