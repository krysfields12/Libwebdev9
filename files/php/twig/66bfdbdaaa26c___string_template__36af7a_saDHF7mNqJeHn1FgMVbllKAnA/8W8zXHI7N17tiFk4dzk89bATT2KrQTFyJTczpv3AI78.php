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

/* __string_template__36af7a38574d795820fcada1d2b945de79eacc030239bb98d57a708461a0efff */
class __TwigTemplate_4c956f92a4deb3662b74b061639b26fa8eabd89faa40e3b4859031bafd4ebef2 extends \Twig\Template
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
        // line 1
        echo "<div class=\"feature col-md-3 col-sm-8 offset-sm-4 col-xs-11\">
";
        // line 2
        if ((($context["field_external_link"] ?? null) == "Yes")) {
            echo " 
<a href=\"";
            // line 3
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_featured_action_link"] ?? null), 3, $this->source), "html", null, true);
            echo "\" class=\"feature-image\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_spotlight_image"] ?? null), 3, $this->source), "html", null, true);
            echo "</a>
";
        } else {
            // line 5
            echo "<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 5, $this->source), "html", null, true);
            echo "\" class=\"feature-image\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_spotlight_image"] ?? null), 5, $this->source), "html", null, true);
            echo "</a>
";
        }
        // line 7
        echo "<br/>
";
        // line 8
        if ((($context["field_external_link"] ?? null) == "Yes")) {
            echo " 
<a href=\"";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_featured_action_link"] ?? null), 9, $this->source), "html", null, true);
            echo "\" class=\"feature-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 9, $this->source), "html", null, true);
            echo "</a>
";
        } else {
            // line 11
            echo "<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 11, $this->source), "html", null, true);
            echo "\" class=\"feature-link\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 11, $this->source), "html", null, true);
            echo "</a>
";
        }
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__36af7a38574d795820fcada1d2b945de79eacc030239bb98d57a708461a0efff";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 13,  75 => 11,  68 => 9,  64 => 8,  61 => 7,  53 => 5,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__36af7a38574d795820fcada1d2b945de79eacc030239bb98d57a708461a0efff", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
