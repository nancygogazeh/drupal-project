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

/* themes/contrib/boldy/templates/page.html.twig */
class __TwigTemplate_b12429be729c46d0d502283c0f595279 extends \Twig\Template
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
        // line 79
        echo "<div id=\"mainWrapper\"> <!-- BEGIN MAINWRAPPER -->
  <div id=\"wrapper\" class=\"clearfix\"> <!-- BEGIN WRAPPER -->
    <header id=\"header\" role=\"banner\" aria-label=\"";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\"> <!-- BEGIN HEADER -->
    ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 82)) {
            // line 83
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 85
        echo "    <div id=\"mainMenu\"> <!-- BEGIN MAIN MENU -->
      ";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
        echo "
      ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "
      ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_bar", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
        echo "
    </div> <!-- END MAIN MENU -->
    ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 90)) {
            // line 91
            echo "    <div id=\"topSearch\"> <!-- BEGIN TOP SEARCH -->
      ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
    </div> <!-- END TOP SEARCH -->
    ";
        }
        // line 95
        echo "    <div id=\"topSocial\"> <!-- BEGIN TOP SOCIAL LINKS -->
      <h2 class=\"visually-hidden\">Social media menu</h2>
      <ul>
      ";
        // line 98
        if (($context["boldy_linkedin_link"] ?? null)) {
            // line 99
            echo "        <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["boldy_linkedin_link"] ?? null), 99, $this->source), "html", null, true);
            echo "\" class=\"linkedin\" title=\"Join us on LinkedIn!\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_logo"] ?? null), 99, $this->source), "html", null, true);
            echo "\" alt=\"LinkedIn\" /></a></li>
      ";
        }
        // line 101
        echo "      ";
        if (($context["boldy_twitter_user"] ?? null)) {
            // line 102
            echo "        <li><a href=\"http://www.twitter.com/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["boldy_twitter_user"] ?? null), 102, $this->source), "html", null, true);
            echo "\" class=\"twitter\" title=\"Follow Us on Twitter!\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_logo"] ?? null), 102, $this->source), "html", null, true);
            echo "\" alt=\"Follow Us on Twitter!\" /></a></li>
      ";
        }
        // line 104
        echo "      ";
        if (($context["boldy_facebook_link"] ?? null)) {
            // line 105
            echo "        <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["boldy_facebook_link"] ?? null), 105, $this->source), "html", null, true);
            echo "\" class=\"twitter\" title=\"Join Us on Facebook!\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_logo"] ?? null), 105, $this->source), "html", null, true);
            echo "\" alt=\"Join Us on Facebook!\" /></a></li>
      ";
        }
        // line 107
        echo "        <li><a href=\"/rss\" title=\"RSS\" class=\"rss\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_logo"] ?? null), 107, $this->source), "html", null, true);
        echo "\" alt=\"Subcribe to Our RSS Feed\" /></a></li>
      </ul>
    </div> <!-- END TOP SOCIAL LINKS -->
    </header> <!-- END HEADER -->
    ";
        // line 111
        if (($context["messages"] ?? null)) {
            // line 112
            echo "    <div id=\"messages\"><div class=\"section clearfix\">
      ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 113, $this->source), "html", null, true);
            echo "
    </div></div> <!-- /.section, /#messages -->
    ";
        }
        // line 116
        echo "
    <div id=\"main-content\"> <!-- BEGIN CONTENT -->
      ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 118)) {
            // line 119
            echo "      <aside id=\"slider-wrapper\">
        <div id=\"slider\"> <!-- BEGIN SLIDER -->
          ";
            // line 121
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
        </div> <!-- END SLIDER -->
      </aside>
      ";
        }
        // line 125
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mission", [], "any", false, false, true, 125)) {
            // line 126
            echo "      <aside id=\"blurb\"> <!-- BEGIN BLURB -->
        <p><a href=\"";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["boldy_blurb_link"] ?? null), 127, $this->source), "html", null, true);
            echo "\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["boldy_blurb_button"] ?? null), 127, $this->source), "html", null, true);
            echo "\" alt=\"Contact Us\" /></a></p>
        ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mission", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
      </aside> <!-- END BLURB -->
      ";
        }
        // line 131
        echo "      <!-- begin home boxes -->
      ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_boxes", [], "any", false, false, true, 132)) {
            // line 133
            echo "      <aside id=\"homeBoxes\" class=\"clearfix\">
        ";
            // line 134
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home_boxes", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "
      </aside> <!-- end home boxes -->
      ";
        }
        // line 137
        echo "      <!-- END HOME CONTENT -->
      <div id=\"colLeft\"> <!-- Begin #colLeft -->
        <main id=\"content\" class=\"column\" role=\"main\"><section class=\"section\">
          ";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 140)) {
            echo "<div id=\"highlighted\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 141
        echo "          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 142, $this->source), "html", null, true);
        echo "
          ";
        // line 143
        if (($context["title"] ?? null)) {
            // line 144
            echo "          <h1 class=\"title\" id=\"page-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 144, $this->source), "html", null, true);
            echo "</h1>
          ";
        }
        // line 146
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 146, $this->source), "html", null, true);
        echo "
          ";
        // line 147
        if (($context["tabs"] ?? null)) {
            // line 148
            echo "          <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs"));
            echo "\">
            ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 149, $this->source), "html", null, true);
            echo "
          </nav>
          ";
        }
        // line 152
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 152, $this->source), "html", null, true);
        echo "
          ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "
          ";
        // line 154
        if (($context["action_links"] ?? null)) {
            // line 155
            echo "          <ul class=\"action-links\">
            ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 156, $this->source), "html", null, true);
            echo "
          </ul>
          ";
        }
        // line 159
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 159)) {
            // line 160
            echo "          <div id=\"content-top\" class=\"region region-content_top\">
            ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "
          </div> <!-- /#content-top -->
          ";
        }
        // line 164
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 164)) {
            // line 165
            echo "          <div id=\"content-area\" class=\"clear-block\">
            ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 169
        echo "          ";
        if (($context["feed_icons"] ?? null)) {
            // line 170
            echo "          <div class=\"feed-icons\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 170, $this->source), "html", null, true);
            echo "</div>
          ";
        }
        // line 172
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 172)) {
            // line 173
            echo "          <div id=\"content-bottom\" class=\"region region-content_bottom\">
            ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
          </div> <!-- /#content-bottom -->
          ";
        }
        // line 177
        echo "        </section></main> <!-- /.section, /#content -->
      </div> <!-- End #colLeft -->
      ";
        // line 179
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 179)) {
            // line 180
            echo "      <div id=\"colRight\"> <!-- Begin #colRight -->
        <aside class=\"section\">
          ";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "
        </aside>
      </div> <!-- End #colRight -->
      ";
        }
        // line 186
        echo "    </div> <!-- END MAIN-CONTENT -->
  </div> <!-- END WRAPPER -->
  <div id=\"footer\"> <!-- BEGIN FOOTER -->
  ";
        // line 189
        if (($context["boldy_footer_actions"] ?? null)) {
            // line 190
            echo "    <div style=\"width:960px; margin: 0 auto; position:relative;\">
      <a href=\"#\" id=\"showHide\" ";
            // line 191
            if ((($context["boldy_actions_hide"] ?? null) == "hidden")) {
                echo " style=\"background-position:0 -16px\"";
            }
            echo ">Show/Hide Footer Actions</a>
    </div>
    <div id=\"footerActions\" ";
            // line 193
            if ((($context["boldy_actions_hide"] ?? null) == "hidden")) {
                echo " 'style=\"display:none\" ";
            }
            echo ">
      <div id=\"footerActionsInner\">
        ";
            // line 195
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_actions_left", [], "any", false, false, true, 195)) {
                // line 196
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_actions_left", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 198
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_actions_right", [], "any", false, false, true, 198)) {
                // line 199
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_actions_right", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 201
            echo "      </div>
    </div>
  ";
        }
        // line 204
        echo "    <div id=\"footerWidgets\">
      <div id=\"footerWidgetsInner\">
      ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 206)) {
            // line 207
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 209
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_message", [], "any", false, false, true, 209)) {
            // line 210
            echo "        <div id=\"copyright\"> <!-- BEGIN COPYRIGHT -->
          ";
            // line 211
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_message", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
            echo "
        </div> <!-- END COPYRIGHT -->
      ";
        }
        // line 214
        echo "      </div>
    </div>
  </div> <!-- END FOOTER -->
</div> <!-- END MAINWRAPPER -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/boldy/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 214,  377 => 211,  374 => 210,  371 => 209,  365 => 207,  363 => 206,  359 => 204,  354 => 201,  348 => 199,  345 => 198,  339 => 196,  337 => 195,  330 => 193,  323 => 191,  320 => 190,  318 => 189,  313 => 186,  306 => 182,  302 => 180,  300 => 179,  296 => 177,  290 => 174,  287 => 173,  284 => 172,  278 => 170,  275 => 169,  269 => 166,  266 => 165,  263 => 164,  257 => 161,  254 => 160,  251 => 159,  245 => 156,  242 => 155,  240 => 154,  236 => 153,  231 => 152,  225 => 149,  220 => 148,  218 => 147,  213 => 146,  207 => 144,  205 => 143,  201 => 142,  198 => 141,  192 => 140,  187 => 137,  181 => 134,  178 => 133,  176 => 132,  173 => 131,  167 => 128,  161 => 127,  158 => 126,  155 => 125,  148 => 121,  144 => 119,  142 => 118,  138 => 116,  132 => 113,  129 => 112,  127 => 111,  119 => 107,  111 => 105,  108 => 104,  100 => 102,  97 => 101,  89 => 99,  87 => 98,  82 => 95,  76 => 92,  73 => 91,  71 => 90,  66 => 88,  62 => 87,  58 => 86,  55 => 85,  49 => 83,  47 => 82,  43 => 81,  39 => 79,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/boldy/templates/page.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\boldy\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 82);
        static $filters = array("t" => 81, "escape" => 83);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
