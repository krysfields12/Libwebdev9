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

/* themes/custom/cook_library_bootstrap_theme_311/templates/user.html.twig */
class __TwigTemplate_2f898f4e48a01a66bb6ca1e158257d2e41bf35a5511490d5e4a5810d56cb2635 extends \Twig\Template
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
        // line 21
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_user_last_name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        $context["lname"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 22
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_user_first_name", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        $context["fname"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 23
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_user_title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        $context["utitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 24
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_dept", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        $context["dept"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 25
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_phone", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        $context["phone"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 26
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_public_email", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        $context["email"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 27
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pronouns", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        $context["pronouns"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_interests", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        $context["interests"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 29
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "user_picture", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        $context["picture"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 30
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_presentations", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        $context["presentations"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 31
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subject_areas", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        $context["subjectArea"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo "\t
";
        // line 32
        ob_start(function () { return ''; });
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_youcanbook_me", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        $context["youcanbookme"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source), "html", null, true);
        echo ">
  ";
        // line 34
        if (($context["content"] ?? null)) {
            // line 35
            echo "    <h1 class=\"page-header\" id=\"user\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(($context["fname"] ?? null), 35, $this->source))), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_striptags($this->sandbox->ensureToStringAllowed(($context["lname"] ?? null), 35, $this->source)));
            echo "</h1>
    <h2 class=\"user-title\">";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["utitle"] ?? null), 36, $this->source), "html", null, true);
            echo "</h2>
  <div class=\"col-md-3\">  
    ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["picture"] ?? null), 38, $this->source), "html", null, true);
            echo "
    <div class=\"info\">";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pronouns"] ?? null), 39, $this->source), "html", null, true);
            echo "</div>
    <div class=\"info\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 40, $this->source), "html", null, true);
            echo "</div>
    <div class=\"info\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 41, $this->source), "html", null, true);
            echo "</div>
    ";
            // line 42
            if (($context["dept"] ?? null)) {
                echo "<div class=\"info\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(($context["dept"] ?? null), 42, $this->source))), "html", null, true);
                echo "</div>";
            }
            // line 43
            echo "    ";
            if (($context["youcanbookme"] ?? null)) {
                echo "<div class=\"info\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youcanbookme"] ?? null), 43, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 44
            echo "  </div>
  <div class=\"col-md-9\">  
    ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_interests", [], "any", false, false, true, 46)) {
                echo "<div class=\"info\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_interests", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 47
            echo "    ";
            if (($context["subjectArea"] ?? null)) {
                echo "<div class=\"info\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subjectArea"] ?? null), 47, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 48
            echo "    ";
            if (($context["presentations"] ?? null)) {
                echo "<div class=\"info\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["presentations"] ?? null), 48, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 49
            echo "  </div>

  ";
        }
        // line 52
        echo "    
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/cook_library_bootstrap_theme_311/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 52,  179 => 49,  172 => 48,  165 => 47,  159 => 46,  155 => 44,  148 => 43,  142 => 42,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  121 => 36,  114 => 35,  112 => 34,  107 => 33,  103 => 32,  97 => 31,  91 => 30,  85 => 29,  79 => 28,  75 => 27,  69 => 26,  63 => 25,  57 => 24,  51 => 23,  45 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/cook_library_bootstrap_theme_311/templates/user.html.twig", "/var/www/html/libraries-towson-edu/themes/custom/cook_library_bootstrap_theme_311/templates/user.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 34);
        static $filters = array("escape" => 21, "trim" => 35, "striptags" => 35, "raw" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trim', 'striptags', 'raw'],
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
