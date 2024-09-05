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

/* themes/custom/cook_library_bootstrap_theme_311/templates/block--searchbox.html.twig */
class __TwigTemplate_dabaee25612899fb64a3e71d91803860193d956ddc35849e3b139d8b6a5cf895 extends \Twig\Template
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
        // line 38
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 40
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 40), 40, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 41
($context["plugin_id"] ?? null), 41, $this->source))), 3 => "col-lg-2 col-md-2 col-sm-12"];
        // line 45
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ">
  ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 46, $this->source), "html", null, true);
        echo "
  ";
        // line 47
        if (($context["label"] ?? null)) {
            // line 48
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 48, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 50
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 50, $this->source), "html", null, true);
        echo "
  <div class=\"site-search-box\">
    <form action=\"/search\" class=\"form-inline\">
      <label for=\"site-search-input\" class=\"visually-hidden\">Search this site</label>
      <input type=\"text\" placeholder=\"Search this site...\" name=\"sitesearch\" id=\"site-search-input\">
      <button type=\"submit\" value=\"Search\" name=\"\" class=\"site-search-button btn btn-primary\">
        <span class=\"sr-only\">Search</span><span class=\"icon glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
      </button>
    </form>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/block--searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 50,  54 => 48,  52 => 47,  48 => 46,  43 => 45,  41 => 41,  40 => 40,  39 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/block--searchbox.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/block--searchbox.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 38, "if" => 47);
        static $filters = array("clean_class" => 40, "escape" => 45);
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
