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

/* themes/contrib/yg_photography/templates/navigation/menu--main.html.twig */
class __TwigTemplate_643074eda40a20204d5360496ac9ab79 extends \Twig\Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
        echo "

";
        // line 72
        echo "    </ul>
</div>
";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 34
                echo "     <div class=\"collapse navbar-collapse \" id=\"navbarCollapse\">
   <ul class=\"navbar-nav ml-auto\">
  ";
            }
            // line 37
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 38
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 39)) {
                        // line 40
                        echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" href=\"#\" id=\"navbarDropdownMenu-";
                        // line 41
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
                        // line 42
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                        echo "  <i class=\"fa fa-chevron-down\"></i>
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenu-";
                        // line 44
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                        echo "\">
              ";
                        // line 45
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 45), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 45, $context, $this->getSourceContext()));
                        echo "
            </div>
          </li>
      ";
                    } else {
                        // line 49
                        echo "            ";
                        // line 50
                        $context["classes"] = [0 => "nav-link", 1 => ((twig_get_attribute($this->env, $this->source,                         // line 52
$context["item"], "in_active_trail", [], "any", false, false, true, 52)) ? ("active") : (""))];
                        // line 55
                        echo "            ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 56
                            echo "              <li class=\"nav-item\">
                <a href=\"";
                            // line 57
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "\" 
                   ";
                            // line 58
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
                            echo ">
                    ";
                            // line 59
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                            echo "
                </a>
              </li>
            ";
                        } else {
                            // line 63
                            echo "              <a class=\"dropdown-item\" href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                            echo "\">
                ";
                            // line 64
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                            echo "
              </a>
            ";
                        }
                        // line 67
                        echo "      ";
                    }
                    // line 68
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "  ";
            }
            // line 70
            echo "  
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_photography/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 70,  161 => 69,  155 => 68,  152 => 67,  146 => 64,  141 => 63,  134 => 59,  130 => 58,  126 => 57,  123 => 56,  120 => 55,  118 => 52,  117 => 50,  115 => 49,  108 => 45,  104 => 44,  99 => 42,  95 => 41,  92 => 40,  89 => 39,  84 => 38,  81 => 37,  76 => 34,  73 => 33,  70 => 32,  55 => 31,  49 => 72,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_photography/templates/navigation/menu--main.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\yg_photography\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 38, "set" => 50);
        static $filters = array("escape" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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
