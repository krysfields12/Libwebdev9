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

/* themes/custom/cook_library_bootstrap_theme_311/templates/html.html.twig */
class __TwigTemplate_4a19ea1968b09adc9ce8de54cfa8a5d78186737e795126a33b14ed9ddcc052e6 extends \Twig\Template
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
        // line 48
        $context["body_classes"] = [0 => ((        // line 49
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 50, $this->source))))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 51
($context["path_info"] ?? null), "args", [], "any", false, false, true, 51)) ? (("path-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["path_info"] ?? null), "args", [], "any", false, false, true, 51), 51, $this->source))) : ("")), 3 => ((        // line 52
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 52, $this->source)))) : ("")), 4 => ((        // line 53
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 5 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "navbar_position", [], "any", false, false, true, 54)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "navbar_position", [], "any", false, false, true, 54), 54, $this->source))) : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 55
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 55)) ? ("has-glyphicons") : (""))];
        // line 58
        echo "<!DOCTYPE html>
<html ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 59, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source));
        echo "\">
    <title>";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 62, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 63, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 64, $this->source));
        echo "\">
  </head>
  <body";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
<!-- Begin chat slider -->
  <div id=\"live-chat\" class=\"hidden\">
    <div class=\"header clearfix\">
      <a href=\"#\" id=\"chat-open\"><span class=\"sr-only\">Open&nbsp;</span>Chat with a Librarian</a>
      <div class=\"chat-message-counter\" role=\"alert\">1<span class=\"sr-only\">&nbsp;message from a librarian</span></div><a href=\"#\" id=\"chat-close\" aria-label=\"Close invitation to chat with a librarian\"><i class=\"fa fa-times close-symbol\" aria-hidden></i></a>
    </div>

    <div class=\"chat\" id=\"chat\" style=\"display: none\">
      <div class=\"chat-history\">
\t<div class=\"chat-message clearfix\">
          <img src=\"/sites/default/files/manu-promo-photos/DocHeadset.png\" alt=\"\" width=\"50\" height=\"50\">
\t<div class=\"chat-message-content clearfix\">
\t  <h5>Ask a Librarian</h5>
          <p>How can I help you today?</p>
\t</div> <!-- end chat-message-content -->
        </div> <!-- end chat-message -->
      <hr>
      </div> <!-- end chat-history -->
      <p class=\"chat-feedback\">A live human is ready to help.</p>
      <div class=\"chat-footer\">
      <a href=\"#\" onClick=\"window.open('/ask/?queue=slider','Chat','resizable,height=800,width=440'); return false;\" class=\"btn btn-success\">Launch chat</a><a href=\"#\" class=\"chat-close-option btn btn-default\">No thanks!</a>
      </div>
      
    </div> <!-- end chat -->
  </div> <!-- end live-chat -->
<!-- End chat slider -->

    ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 97, $this->source), "html", null, true);
        echo "
    ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 98, $this->source), "html", null, true);
        echo "
    ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 99, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 100, $this->source));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 100,  118 => 99,  114 => 98,  110 => 97,  78 => 68,  73 => 66,  68 => 64,  64 => 63,  60 => 62,  56 => 61,  51 => 59,  48 => 58,  46 => 55,  45 => 54,  44 => 53,  43 => 52,  42 => 51,  41 => 50,  40 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/html.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48);
        static $filters = array("clean_class" => 50, "escape" => 59, "raw" => 61, "safe_join" => 62, "t" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
