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

/* themes/contrib/boldy/templates/block--system-branding-block.html.twig */
class __TwigTemplate_908910a6245e15885eb554ba7af0ee6b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method", false, false, true, 16);
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/contrib/boldy/templates/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "  <div id=\"logo\"> <!-- BEGIN SITE BRANDING -->
    ";
        // line 19
        if (($context["site_logo"] ?? null)) {
            // line 20
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 21, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name_and_slogan"] ?? null), 21, $this->source), "html", null, true);
            echo "\" />
      </a>
    ";
        }
        // line 24
        echo "    ";
        if ((($context["site_site"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 25
            echo "      ";
            if (($context["site_logo"] ?? null)) {
                // line 26
                echo "        <span class=\"visually-hidden\">
      ";
            }
            // line 28
            echo "      ";
            if (($context["site_name"] ?? null)) {
                // line 29
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 29, $this->source), "html", null, true);
                echo "</a>
      ";
            }
            // line 31
            echo "        ";
            if (($context["site_slogan"] ?? null)) {
                // line 32
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 32, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 34
            echo "      ";
            if (($context["site_logo"] ?? null)) {
                // line 35
                echo "        </span>
      ";
            }
            // line 37
            echo "    ";
        }
        // line 38
        echo "  </div> <!-- END SITE BRANDING -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/boldy/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  114 => 37,  110 => 35,  107 => 34,  101 => 32,  98 => 31,  88 => 29,  85 => 28,  81 => 26,  78 => 25,  75 => 24,  67 => 21,  60 => 20,  58 => 19,  55 => 18,  51 => 17,  46 => 1,  44 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/boldy/templates/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\boldy\\templates\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 19);
        static $filters = array("t" => 20, "escape" => 21);
        static $functions = array("path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
                ['path']
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
