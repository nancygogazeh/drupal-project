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

/* themes/contrib/yg_freelancer/templates/layout/page.html.twig */
class __TwigTemplate_ea7731e3cdb32af3211ed2bbdf0bd2cc extends \Twig\Template
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
        echo "<div class=\"fh5co-loader\"></div>
<div id=\"page\"> 
  ";
        // line 3
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 4
        echo "  ";
        if (twig_in_filter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            // line 5
            echo "
    <header id=\"fh5co-header\" class=\"fh5co-cover js-fullheight\" role=\"banner\" style=\"background-image:url(";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_image"] ?? null), 6, $this->source), "html", null, true);
            echo ");\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 text-center\">
            <div class=\"display-t js-fullheight\">
              <div class=\"display-tc js-fullheight animate-box\" data-animate-effect=\"fadeIn\">
                <h1><span>";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["page"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null), 13, $this->source), "html", null, true);
            echo "</span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
</div>

<div id=\"fh5co-footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <p> &copy;2018. <a href=\"#\"> YG Freelancer</a>.&nbsp;All Rights Reserved.<br></p>
          <p>Designed by <a href=\"http://freehtml5.co\" target=\"_blank\">FreeHTML5.co</a>.  Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\"> Young Globes</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class=\"gototop js-top\">
    <a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up22\"></i></a>
  </div>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_freelancer/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  72 => 21,  61 => 13,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_freelancer/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\yg_freelancer\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 4);
        static $filters = array("render" => 4, "escape" => 6);
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape'],
                ['url']
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
