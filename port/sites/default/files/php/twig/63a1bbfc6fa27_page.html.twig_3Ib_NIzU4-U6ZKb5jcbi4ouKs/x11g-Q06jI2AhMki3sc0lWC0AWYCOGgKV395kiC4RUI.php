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

/* themes/contrib/mobidic/templates/page.html.twig */
class __TwigTemplate_b8f8fcc7f4bd51fbffb0453744da23a3 extends \Twig\Template
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
        echo "<div id=\"page-preloader\">
  <div class=\"spinner\">
  <div class=\"cube1\"></div>
  <div class=\"cube2\"></div>
</div>
</div>
<a name=\"Top\" id=\"Top\"></a>

<div id=\"color\" class=\"default\">
  ";
        // line 10
        if (($context["is_front"] ?? null)) {
            // line 11
            echo "  <div class=\"top_block\">
    <div class=\"maimMenu\">
        <a href=\"#navbar\" id=\"toggle\"><span></span></a>
        <div id=\"navbar\" class=\"navbar\">
            <div id=\"primary-navigation\" class=\"site-navigation primary-navigation\" role=\"navigation\">
                ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
            </div>
        </div>
    </div>
    <div class=\"logo\">";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</div>
    <div class=\"panet1\"></div>
    <div class=\"clud\"></div>
  </div>
    ";
        } else {
            // line 25
            echo "    <div class=\"second_header\">
      <div class=\"maimMenu\">
          <a href=\"#navbar\" id=\"toggle\"><span></span></a>
          <div id=\"navbar\" class=\"navbar\">
              <div id=\"primary-navigation\" class=\"site-navigation primary-navigation\" role=\"navigation\">
                  ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "
              </div>
          </div>
      </div>
      <div class=\"second_logo\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</div>
    </div>
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if (($context["is_front"] ?? null)) {
            // line 39
            echo "  <div class=\"center_block\">
    <div class=\"cloth1\"></div>
    <div class=\"cloth2\"></div>
    
    ";
            // line 43
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 43) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 43)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 43)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 43))) {
                // line 44
                echo "  <div class=\" container\">
    <div class=\"row\">
      ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 46)) {
                    // line 47
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 47) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 47)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 47))) {
                        // line 48
                        echo "          <div class=\"col-lg-3\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 49
($context["page"] ?? null), "top2", [], "any", false, false, true, 49) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 49))) {
                        // line 50
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 51
($context["page"] ?? null), "top2", [], "any", false, false, true, 51) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 51))) {
                        // line 52
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 53
($context["page"] ?? null), "top3", [], "any", false, false, true, 53) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 53))) {
                        // line 54
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 55
($context["page"] ?? null), "top2", [], "any", false, false, true, 55) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 55)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 55))) {
                        // line 56
                        echo "            <div class=\"col-lg-6\">
          ";
                    } else {
                        // line 58
                        echo "          <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\"><div class=\"blog_post\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blog_post", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                        echo "</div></div>
            <div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-12\">
        ";
                    }
                    // line 61
                    echo "          <div class=\"top1\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "</div>
        </div>
      ";
                }
                // line 64
                echo "
      ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 65)) {
                    // line 66
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 66) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 66)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 66))) {
                        // line 67
                        echo "          <div class=\"col-lg-3\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 68
($context["page"] ?? null), "top1", [], "any", false, false, true, 68) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 68))) {
                        // line 69
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 70
($context["page"] ?? null), "top1", [], "any", false, false, true, 70) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 70))) {
                        // line 71
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 72
($context["page"] ?? null), "top3", [], "any", false, false, true, 72) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 72))) {
                        // line 73
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 74
($context["page"] ?? null), "top1", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 74))) {
                        // line 75
                        echo "            <div class=\"col-lg-6\">
          ";
                    } else {
                        // line 77
                        echo "            <div class=\"col-lg-12\">
        ";
                    }
                    // line 79
                    echo "          <div class=\"top2\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                    echo "</div>
        </div>
      ";
                }
                // line 82
                echo "
      ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 83)) {
                    // line 84
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 84) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 84)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 84))) {
                        // line 85
                        echo "          <div class=\"col-lg-3\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 86
($context["page"] ?? null), "top1", [], "any", false, false, true, 86) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 86))) {
                        // line 87
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 88
($context["page"] ?? null), "top1", [], "any", false, false, true, 88) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 88))) {
                        // line 89
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 90
($context["page"] ?? null), "top2", [], "any", false, false, true, 90) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 90))) {
                        // line 91
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 92
($context["page"] ?? null), "top1", [], "any", false, false, true, 92) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 92)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 92))) {
                        // line 93
                        echo "            <div class=\"col-lg-6\">
          ";
                    } else {
                        // line 95
                        echo "            <div class=\"col-lg-12\">
        ";
                    }
                    // line 97
                    echo "          <div class=\"top3\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
                    echo "</div>
        </div>
      ";
                }
                // line 100
                echo "
      ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 101)) {
                    // line 102
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top1", [], "any", false, false, true, 102) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 102)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 102))) {
                        // line 103
                        echo "          <div class=\"col-lg-3\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 104
($context["page"] ?? null), "top1", [], "any", false, false, true, 104) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 104))) {
                        // line 105
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 106
($context["page"] ?? null), "top1", [], "any", false, false, true, 106) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 106))) {
                        // line 107
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 108
($context["page"] ?? null), "top2", [], "any", false, false, true, 108) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 108))) {
                        // line 109
                        echo "            <div class=\"col-lg-4\">
          ";
                    } elseif (((twig_get_attribute($this->env, $this->source,                     // line 110
($context["page"] ?? null), "top1", [], "any", false, false, true, 110) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top2", [], "any", false, false, true, 110)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top3", [], "any", false, false, true, 110))) {
                        // line 111
                        echo "            <div class=\"col-lg-6\">
          ";
                    } else {
                        // line 113
                        echo "            <div class=\"col-lg-12\">
        ";
                    }
                    // line 115
                    echo "          <div class=\"top4\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top4", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                    echo "</div>
        </div>
      ";
                }
                // line 118
                echo "
    </div>
  </div>
";
            }
        }
        // line 123
        echo "
  </div>

    ";
        // line 126
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 127
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 130
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 131
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 132
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 132, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 132, $this->source), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 135
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 136
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 136, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 136, $this->source), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 139
            echo "
        ";
            // line 140
            if (($context["site_slogan"] ?? null)) {
                // line 141
                echo "          <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 141, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 143
            echo "      </div>

   ";
        }
        // line 146
        echo "
  <!--  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button> -->

  </div>
  </div>
</header>

";
        // line 158
        if (($context["is_front"] ?? null)) {
            // line 159
            echo "  <div class=\"prlx\"></div>

<div class=\"city_block\">
  <div class=\"city1\"></div>
  <div class=\"city2\">
    <div class=\"container\">
      <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
        ";
            // line 166
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_block", [], "any", false, false, true, 166)) {
                // line 167
                echo "          <section id=\"left_block\" class=\"\">
            <div class=\"left_block\">
              ";
                // line 169
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_block", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
                echo "
            </div>
          </section>
        ";
            }
            // line 173
            echo "      </div>
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
        ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 175)) {
                // line 176
                echo "          <section id=\"slideshow\" class=\"slideshow\">
            <div class=\"\">
              ";
                // line 178
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                echo "
            </div>
          </section>
        ";
            }
            // line 182
            echo "      </div>
      <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
        ";
            // line 184
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_block", [], "any", false, false, true, 184)) {
                // line 185
                echo "          <section id=\"right_block\" class=\"\">
            <div class=\"right_block\">
              ";
                // line 187
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_block", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
                echo "
            </div>
          </section>
        ";
            }
            // line 191
            echo "      </div>
    
    </div>
  </div>
  <!-- <div class=\"city3\"></div> -->
</div>
";
        }
        // line 198
        echo "




<div class=\"page\">
  
  ";
        // line 205
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_information", [], "any", false, false, true, 205)) {
            // line 206
            echo "    <div class=\"post_information\">
        <div class=\"container\">
          ";
            // line 208
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "post_information", [], "any", false, false, true, 208), 208, $this->source), "html", null, true);
            echo "
        </div>
    </div>
  ";
        }
        // line 212
        echo "

  ";
        // line 214
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_info", [], "any", false, false, true, 214)) {
            // line 215
            echo "    <div class=\"post_info\">
      <div class=\"bg_efect_top\">
        <div class=\"section_one trnsform3d scale3d\"></div>
      </div>
      <div class=\"section_two\">
          <div class=\"top_info\">";
            // line 220
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_info", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
            echo "</div>
      </div>
    </div>
  ";
        }
        // line 224
        echo "

";
        // line 226
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 226) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 226)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 226)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 226))) {
            // line 227
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 229
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 229)) {
                // line 230
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 230) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 230)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 230))) {
                    // line 231
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 232
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 232) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 232))) {
                    // line 233
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 234
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 234) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 234))) {
                    // line 235
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 236
($context["page"] ?? null), "top_content3", [], "any", false, false, true, 236) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 236))) {
                    // line 237
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 238
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 238) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 238)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 238))) {
                    // line 239
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 241
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 243
                echo "          <div class=\"top_content1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 243), 243, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 246
            echo "
      ";
            // line 247
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 247)) {
                // line 248
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 248) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 248)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 248))) {
                    // line 249
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 250
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 250) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 250))) {
                    // line 251
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 252
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 252) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 252))) {
                    // line 253
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 254
($context["page"] ?? null), "top_content3", [], "any", false, false, true, 254) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 254))) {
                    // line 255
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 256
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 256) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 256)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 256))) {
                    // line 257
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 259
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 261
                echo "          <div class=\"top_content2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 263
            echo "  

      ";
            // line 265
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 265)) {
                // line 266
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 266) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 266)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 266))) {
                    // line 267
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 268
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 268) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 268))) {
                    // line 269
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 270
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 270) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 270))) {
                    // line 271
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 272
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 272) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 272))) {
                    // line 273
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 274
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 274) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 274)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 274))) {
                    // line 275
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 277
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 279
                echo "          <div class=\"top_content3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 282
            echo "
      ";
            // line 283
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 283)) {
                // line 284
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content1", [], "any", false, false, true, 284) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 284)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 284))) {
                    // line 285
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 286
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 286) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 286))) {
                    // line 287
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 288
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 288) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 288))) {
                    // line 289
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 290
($context["page"] ?? null), "top_content2", [], "any", false, false, true, 290) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 290))) {
                    // line 291
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 292
($context["page"] ?? null), "top_content1", [], "any", false, false, true, 292) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content2", [], "any", false, false, true, 292)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content3", [], "any", false, false, true, 292))) {
                    // line 293
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 295
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 297
                echo "          <div class=\"top4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content4", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 300
            echo "
    </div>
  </div>
";
        }
        // line 304
        echo "
";
        // line 305
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 305) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 305)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 305)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 305))) {
            // line 306
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 308
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 308)) {
                // line 309
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 309) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 309)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 309))) {
                    // line 310
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 311
($context["page"] ?? null), "line2", [], "any", false, false, true, 311) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 311))) {
                    // line 312
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 313
($context["page"] ?? null), "line2", [], "any", false, false, true, 313) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 313))) {
                    // line 314
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 315
($context["page"] ?? null), "line3", [], "any", false, false, true, 315) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 315))) {
                    // line 316
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 317
($context["page"] ?? null), "line2", [], "any", false, false, true, 317) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 317)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 317))) {
                    // line 318
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 320
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 322
                echo "          <div class=\"line1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 322), 322, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 325
            echo "
      ";
            // line 326
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 326)) {
                // line 327
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 327) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 327)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 327))) {
                    // line 328
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 329
($context["page"] ?? null), "line1", [], "any", false, false, true, 329) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 329))) {
                    // line 330
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 331
($context["page"] ?? null), "line1", [], "any", false, false, true, 331) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 331))) {
                    // line 332
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 333
($context["page"] ?? null), "line3", [], "any", false, false, true, 333) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 333))) {
                    // line 334
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 335
($context["page"] ?? null), "line1", [], "any", false, false, true, 335) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 335)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 335))) {
                    // line 336
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 338
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 340
                echo "          <div class=\"line2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 340), 340, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 342
            echo "  

      ";
            // line 344
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 344)) {
                // line 345
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 345) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 345)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 345))) {
                    // line 346
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 347
($context["page"] ?? null), "line1", [], "any", false, false, true, 347) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 347))) {
                    // line 348
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 349
($context["page"] ?? null), "line1", [], "any", false, false, true, 349) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 349))) {
                    // line 350
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 351
($context["page"] ?? null), "line2", [], "any", false, false, true, 351) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 351))) {
                    // line 352
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 353
($context["page"] ?? null), "line1", [], "any", false, false, true, 353) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 353)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 353))) {
                    // line 354
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 356
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 358
                echo "          <div class=\"line3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 358), 358, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 361
            echo "
      ";
            // line 362
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 362)) {
                // line 363
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line1", [], "any", false, false, true, 363) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 363)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 363))) {
                    // line 364
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 365
($context["page"] ?? null), "line1", [], "any", false, false, true, 365) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 365))) {
                    // line 366
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 367
($context["page"] ?? null), "line1", [], "any", false, false, true, 367) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 367))) {
                    // line 368
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 369
($context["page"] ?? null), "line2", [], "any", false, false, true, 369) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 369))) {
                    // line 370
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 371
($context["page"] ?? null), "line1", [], "any", false, false, true, 371) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line2", [], "any", false, false, true, 371)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line3", [], "any", false, false, true, 371))) {
                    // line 372
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 374
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 376
                echo "          <div class=\"line4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "line4", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 379
            echo "
    </div>
  </div>
";
        }
        // line 383
        echo "
";
        // line 384
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 384)) {
            // line 385
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
            // line 388
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 388), 388, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 393
        echo "
";
        // line 394
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 394) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 394)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 394)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 394))) {
            // line 395
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 397)) {
                // line 398
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 398) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 398)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 398))) {
                    // line 399
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 400
($context["page"] ?? null), "feature2", [], "any", false, false, true, 400) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 400))) {
                    // line 401
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 402
($context["page"] ?? null), "feature2", [], "any", false, false, true, 402) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 402))) {
                    // line 403
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 404
($context["page"] ?? null), "feature3", [], "any", false, false, true, 404) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 404))) {
                    // line 405
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 406
($context["page"] ?? null), "feature2", [], "any", false, false, true, 406) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 406)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 406))) {
                    // line 407
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 409
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 411
                echo "          <div class=\"feature1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 414
            echo "
      ";
            // line 415
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 415)) {
                // line 416
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 416) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 416)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 416))) {
                    // line 417
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 418
($context["page"] ?? null), "feature1", [], "any", false, false, true, 418) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 418))) {
                    // line 419
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 420
($context["page"] ?? null), "feature1", [], "any", false, false, true, 420) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 420))) {
                    // line 421
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 422
($context["page"] ?? null), "feature3", [], "any", false, false, true, 422) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 422))) {
                    // line 423
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 424
($context["page"] ?? null), "feature1", [], "any", false, false, true, 424) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 424)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 424))) {
                    // line 425
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 427
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 429
                echo "          <div class=\"feature2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 429), 429, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 432
            echo "
      ";
            // line 433
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 433)) {
                // line 434
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 434) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 434)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 434))) {
                    // line 435
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 436
($context["page"] ?? null), "feature1", [], "any", false, false, true, 436) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 436))) {
                    // line 437
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 438
($context["page"] ?? null), "feature1", [], "any", false, false, true, 438) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 438))) {
                    // line 439
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 440
($context["page"] ?? null), "feature2", [], "any", false, false, true, 440) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 440))) {
                    // line 441
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 442
($context["page"] ?? null), "feature1", [], "any", false, false, true, 442) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 442)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 442))) {
                    // line 443
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 445
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 447
                echo "          <div class=\"feature3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 447), 447, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 450
            echo "
      ";
            // line 451
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 451)) {
                // line 452
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature1", [], "any", false, false, true, 452) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 452)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 452))) {
                    // line 453
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 454
($context["page"] ?? null), "feature1", [], "any", false, false, true, 454) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 454))) {
                    // line 455
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 456
($context["page"] ?? null), "feature1", [], "any", false, false, true, 456) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 456))) {
                    // line 457
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 458
($context["page"] ?? null), "feature2", [], "any", false, false, true, 458) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 458))) {
                    // line 459
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 460
($context["page"] ?? null), "feature1", [], "any", false, false, true, 460) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature2", [], "any", false, false, true, 460)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature3", [], "any", false, false, true, 460))) {
                    // line 461
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 463
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 465
                echo "          <div class=\"feature4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "feature4", [], "any", false, false, true, 465), 465, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 468
            echo "
    </div>
  </div>
";
        }
        // line 472
        echo "
";
        // line 473
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 473) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 473)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 473)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 473))) {
            // line 474
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 476
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 476)) {
                // line 477
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 477) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 477)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 477))) {
                    // line 478
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 479
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 479) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 479))) {
                    // line 480
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 481
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 481) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 481))) {
                    // line 482
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 483
($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 483) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 483))) {
                    // line 484
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 485
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 485) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 485)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 485))) {
                    // line 486
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 488
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 490
                echo "          <div class=\"contenttop1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 490), 490, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 493
            echo "
      ";
            // line 494
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 494)) {
                // line 495
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 495) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 495)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 495))) {
                    // line 496
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 497
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 497) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 497))) {
                    // line 498
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 499
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 499) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 499))) {
                    // line 500
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 501
($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 501) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 501))) {
                    // line 502
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 503
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 503) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 503)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 503))) {
                    // line 504
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 506
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 508
                echo "          <div class=\"contenttop2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 508), 508, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 511
            echo "
      ";
            // line 512
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 512)) {
                // line 513
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 513) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 513)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 513))) {
                    // line 514
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 515
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 515) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 515))) {
                    // line 516
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 517
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 517) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 517))) {
                    // line 518
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 519
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 519) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 519))) {
                    // line 520
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 521
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 521) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 521)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 521))) {
                    // line 522
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 524
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 526
                echo "          <div class=\"contenttop3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 526), 526, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 529
            echo "
      ";
            // line 530
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 530)) {
                // line 531
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 531) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 531)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 531))) {
                    // line 532
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 533
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 533) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 533))) {
                    // line 534
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 535
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 535) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 535))) {
                    // line 536
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 537
($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 537) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 537))) {
                    // line 538
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 539
($context["page"] ?? null), "contenttop1", [], "any", false, false, true, 539) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop2", [], "any", false, false, true, 539)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop3", [], "any", false, false, true, 539))) {
                    // line 540
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 542
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 544
                echo "          <div class=\"contenttop4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttop4", [], "any", false, false, true, 544), 544, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 547
            echo "
    </div>
  </div>
";
        }
        // line 551
        echo "
 


  
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 559
        if (($context["front_page"] ?? null)) {
            // line 560
            echo "
            ";
            // line 561
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 561)) {
                // line 562
                echo "              <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 563
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 563), 563, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 566
            echo "        
            <div class=\"content col-lg-";
            // line 567
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 567), 567, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 567), 567, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12\">
              ";
            // line 568
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 568), 568, $this->source), "html", null, true);
            echo "

              ";
            // line 570
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 570, $this->source), "html", null, true);
            echo "
              ";
            // line 571
            if (($context["title"] ?? null)) {
                // line 572
                echo "                <h4>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 572, $this->source), "html", null, true);
                echo "</h4>
              ";
            }
            // line 574
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 574, $this->source), "html", null, true);
            echo "

              ";
            // line 576
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 576, $this->source), "html", null, true);
            echo "

              ";
            // line 578
            if (($context["action_links"] ?? null)) {
                // line 579
                echo "                <nav class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 579, $this->source), "html", null, true);
                echo "</nav>
              ";
            }
            // line 581
            echo "
              ";
            // line 582
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 582), 582, $this->source), "html", null, true);
            echo "
              ";
            // line 583
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 583, $this->source), "html", null, true);
            echo "
            </div>

            ";
            // line 586
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 586)) {
                // line 587
                echo "              <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 588
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 588), 588, $this->source), "html", null, true);
                echo "
              </aside>
            ";
            }
            // line 591
            echo "
        ";
        } else {
            // line 593
            echo "
          ";
            // line 594
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 594)) {
                // line 595
                echo "            <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 596
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 596), 596, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 599
            echo "    
          <div class=\"content col-lg-";
            // line 600
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 600), 600, $this->source), "html", null, true);
            echo " col-md-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_content_width", [], "any", false, false, true, 600), 600, $this->source), "html", null, true);
            echo " col-sm-12 col-xs-12\">
            ";
            // line 601
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 601), 601, $this->source), "html", null, true);
            echo "

            ";
            // line 603
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 603, $this->source), "html", null, true);
            echo "

             ";
            // line 605
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 605, $this->source), "html", null, true);
            echo "
              ";
            // line 606
            if (($context["title"] ?? null)) {
                // line 607
                echo "                <h2>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 607, $this->source), "html", null, true);
                echo "</h2>
              ";
            }
            // line 609
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 609, $this->source), "html", null, true);
            echo "

            ";
            // line 611
            if (($context["action_links"] ?? null)) {
                // line 612
                echo "              <nav class=\"action-links\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 612, $this->source), "html", null, true);
                echo "</nav>
            ";
            }
            // line 614
            echo "              <div class=\"test_class\">
            ";
            // line 615
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 615), 615, $this->source), "html", null, true);
            echo "
            </div>
            ";
            // line 617
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 617, $this->source), "html", null, true);
            echo "
          </div>

          ";
            // line 620
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 620)) {
                // line 621
                echo "            <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 622
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 622), 622, $this->source), "html", null, true);
                echo "
            </aside>
          ";
            }
            // line 625
            echo "        ";
        }
        echo "     
      </div>
    </div>

  ";
        // line 629
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 629)) {
            // line 630
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 632
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 632), 632, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 636
        echo "
  ";
        // line 637
        if (($context["messages"] ?? null)) {
            // line 638
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 640
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 640, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 644
        echo "
  ";
        // line 645
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 645)) {
            // line 646
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 648
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 648), 648, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 652
        echo "
  ";
        // line 653
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 653) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 653)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 653)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 653))) {
            // line 654
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 656
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 656)) {
                // line 657
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 657) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 657)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 657))) {
                    // line 658
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 659
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 659) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 659))) {
                    // line 660
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 661
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 661) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 661))) {
                    // line 662
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 663
($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 663) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 663))) {
                    // line 664
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 665
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 665) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 665)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 665))) {
                    // line 666
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 668
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 670
                echo "          <div class=\"contentbottom1\">
            <div class=\"bottom_info_one\">
              ";
                // line 672
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 672), 672, $this->source), "html", null, true);
                echo "
            </div>
            <div class=\"bg_efect\">
              <div class=\"bottom_info_two trnsform3d scale3d\"></div>
            </div>
          </div>
        </div>
      ";
            }
            // line 680
            echo "
      ";
            // line 681
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 681)) {
                // line 682
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 682) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 682)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 682))) {
                    // line 683
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 684
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 684) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 684))) {
                    // line 685
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 686
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 686) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 686))) {
                    // line 687
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 688
($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 688) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 688))) {
                    // line 689
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 690
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 690) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 690)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 690))) {
                    // line 691
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 693
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 695
                echo "          <div class=\"contentbottom2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 695), 695, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 698
            echo "
      ";
            // line 699
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 699)) {
                // line 700
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 700) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 700)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 700))) {
                    // line 701
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 702
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 702) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 702))) {
                    // line 703
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 704
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 704) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 704))) {
                    // line 705
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 706
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 706) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 706))) {
                    // line 707
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 708
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 708) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 708)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 708))) {
                    // line 709
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 711
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 713
                echo "          <div class=\"contentbottom3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 713), 713, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 716
            echo "
      ";
            // line 717
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 717)) {
                // line 718
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 718) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 718)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 718))) {
                    // line 719
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 720
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 720) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 720))) {
                    // line 721
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 722
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 722) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 722))) {
                    // line 723
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 724
($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 724) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 724))) {
                    // line 725
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 726
($context["page"] ?? null), "contentbottom1", [], "any", false, false, true, 726) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom2", [], "any", false, false, true, 726)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom3", [], "any", false, false, true, 726))) {
                    // line 727
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 729
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 731
                echo "          <div class=\"contentbottom4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottom4", [], "any", false, false, true, 731), 731, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 734
            echo "
    </div>
  </div>
";
        }
        // line 738
        echo "
";
        // line 739
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 739) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 739)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 739)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 739))) {
            // line 740
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 742
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 742)) {
                // line 743
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 743) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 743)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 743))) {
                    // line 744
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 745
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 745) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 745))) {
                    // line 746
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 747
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 747) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 747))) {
                    // line 748
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 749
($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 749) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 749))) {
                    // line 750
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 751
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 751) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 751)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 751))) {
                    // line 752
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 754
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 756
                echo "          <div class=\"bottom_line1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 756), 756, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 759
            echo "
      ";
            // line 760
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 760)) {
                // line 761
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 761) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 761)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 761))) {
                    // line 762
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 763
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 763) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 763))) {
                    // line 764
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 765
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 765) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 765))) {
                    // line 766
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 767
($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 767) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 767))) {
                    // line 768
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 769
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 769) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 769)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 769))) {
                    // line 770
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 772
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 774
                echo "          <div class=\"bottom_line2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 774), 774, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 777
            echo "
      ";
            // line 778
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 778)) {
                // line 779
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 779) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 779)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 779))) {
                    // line 780
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 781
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 781) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 781))) {
                    // line 782
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 783
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 783) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 783))) {
                    // line 784
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 785
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 785) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 785))) {
                    // line 786
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 787
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 787) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 787)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 787))) {
                    // line 788
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 790
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 792
                echo "          <div class=\"bottom_line3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 792), 792, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 795
            echo "
      ";
            // line 796
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 796)) {
                // line 797
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 797) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 797)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 797))) {
                    // line 798
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 799
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 799) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 799))) {
                    // line 800
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 801
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 801) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 801))) {
                    // line 802
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 803
($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 803) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 803))) {
                    // line 804
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 805
($context["page"] ?? null), "bottom_line1", [], "any", false, false, true, 805) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line2", [], "any", false, false, true, 805)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line3", [], "any", false, false, true, 805))) {
                    // line 806
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 808
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 810
                echo "          <div class=\"bottom_line4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_line4", [], "any", false, false, true, 810), 810, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 813
            echo "
    </div>
  </div>
";
        }
        // line 817
        echo "
";
        // line 818
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 818) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 818)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 818)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 818))) {
            // line 819
            echo "  <div class=\"team\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 822
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 822)) {
                // line 823
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 823) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 823)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 823))) {
                    // line 824
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 825
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 825) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 825))) {
                    // line 826
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 827
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 827) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 827))) {
                    // line 828
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 829
($context["page"] ?? null), "bottom3", [], "any", false, false, true, 829) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 829))) {
                    // line 830
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 831
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 831) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 831)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 831))) {
                    // line 832
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 834
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 836
                echo "          <div class=\"bottom1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 836), 836, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 839
            echo "
      ";
            // line 840
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 840)) {
                // line 841
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 841) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 841)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 841))) {
                    // line 842
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 843
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 843) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 843))) {
                    // line 844
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 845
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 845) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 845))) {
                    // line 846
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 847
($context["page"] ?? null), "bottom3", [], "any", false, false, true, 847) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 847))) {
                    // line 848
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 849
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 849) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 849)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 849))) {
                    // line 850
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 852
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 854
                echo "          <div class=\"bottom2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 854), 854, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 857
            echo "
      ";
            // line 858
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 858)) {
                // line 859
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 859) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 859)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 859))) {
                    // line 860
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 861
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 861) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 861))) {
                    // line 862
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 863
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 863) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 863))) {
                    // line 864
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 865
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 865) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 865))) {
                    // line 866
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 867
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 867) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 867)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 867))) {
                    // line 868
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 870
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 872
                echo "          <div class=\"bottom3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 872), 872, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 875
            echo "
      ";
            // line 876
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 876)) {
                // line 877
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom1", [], "any", false, false, true, 877) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 877)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 877))) {
                    // line 878
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 879
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 879) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 879))) {
                    // line 880
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 881
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 881) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 881))) {
                    // line 882
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 883
($context["page"] ?? null), "bottom2", [], "any", false, false, true, 883) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 883))) {
                    // line 884
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 885
($context["page"] ?? null), "bottom1", [], "any", false, false, true, 885) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom2", [], "any", false, false, true, 885)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom3", [], "any", false, false, true, 885))) {
                    // line 886
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 888
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 890
                echo "          <div class=\"bottom4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom4", [], "any", false, false, true, 890), 890, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 893
            echo "
    </div>
  </div>
  </div>
";
        }
        // line 898
        echo "
";
        // line 899
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 899) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 899)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 899)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 899))) {
            // line 900
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 902
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 902)) {
                // line 903
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 903) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 903)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 903))) {
                    // line 904
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 905
($context["page"] ?? null), "last2", [], "any", false, false, true, 905) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 905))) {
                    // line 906
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 907
($context["page"] ?? null), "last2", [], "any", false, false, true, 907) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 907))) {
                    // line 908
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 909
($context["page"] ?? null), "last3", [], "any", false, false, true, 909) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 909))) {
                    // line 910
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 911
($context["page"] ?? null), "last2", [], "any", false, false, true, 911) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 911)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 911))) {
                    // line 912
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 914
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 916
                echo "          <div class=\"last1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 916), 916, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 919
            echo "
      ";
            // line 920
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 920)) {
                // line 921
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 921) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 921)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 921))) {
                    // line 922
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 923
($context["page"] ?? null), "last1", [], "any", false, false, true, 923) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 923))) {
                    // line 924
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 925
($context["page"] ?? null), "last1", [], "any", false, false, true, 925) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 925))) {
                    // line 926
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 927
($context["page"] ?? null), "last3", [], "any", false, false, true, 927) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 927))) {
                    // line 928
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 929
($context["page"] ?? null), "last1", [], "any", false, false, true, 929) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 929)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 929))) {
                    // line 930
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 932
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 934
                echo "          <div class=\"last2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 934), 934, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 937
            echo "
      ";
            // line 938
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 938)) {
                // line 939
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 939) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 939)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 939))) {
                    // line 940
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 941
($context["page"] ?? null), "last1", [], "any", false, false, true, 941) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 941))) {
                    // line 942
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 943
($context["page"] ?? null), "last1", [], "any", false, false, true, 943) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 943))) {
                    // line 944
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 945
($context["page"] ?? null), "last2", [], "any", false, false, true, 945) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 945))) {
                    // line 946
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 947
($context["page"] ?? null), "last1", [], "any", false, false, true, 947) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 947)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 947))) {
                    // line 948
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 950
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 952
                echo "          <div class=\"last3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 952), 952, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 955
            echo "
      ";
            // line 956
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 956)) {
                // line 957
                echo "        ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last1", [], "any", false, false, true, 957) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 957)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 957))) {
                    // line 958
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 959
($context["page"] ?? null), "last1", [], "any", false, false, true, 959) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 959))) {
                    // line 960
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 961
($context["page"] ?? null), "last1", [], "any", false, false, true, 961) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 961))) {
                    // line 962
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 963
($context["page"] ?? null), "last2", [], "any", false, false, true, 963) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 963))) {
                    // line 964
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 965
($context["page"] ?? null), "last1", [], "any", false, false, true, 965) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last2", [], "any", false, false, true, 965)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last3", [], "any", false, false, true, 965))) {
                    // line 966
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 968
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 970
                echo "          <div class=\"last4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "last4", [], "any", false, false, true, 970), 970, $this->source), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 973
            echo "
    </div>
  </div>
";
        }
        // line 977
        echo "
  ";
        // line 978
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 978)) {
            // line 979
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 983
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first_1", [], "any", false, false, true, 983), 983, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 989
        echo "
  ";
        // line 990
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 990) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 990)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 990)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 990))) {
            // line 991
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 995
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_1", [], "any", false, false, true, 995), 995, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 998
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_2", [], "any", false, false, true, 998), 998, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 1001
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_3", [], "any", false, false, true, 1001), 1001, $this->source), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 1004
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second_4", [], "any", false, false, true, 1004), 1004, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 1010
        echo "
  ";
        // line 1011
        if (($context["breadcrumb"] ?? null)) {
            // line 1012
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 1014
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 1014, $this->source), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 1018
        echo "  <!-- <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>   -->        
</div>
<!-- <div class=\"bullun\"></div> -->
  <footer id=\"footer\" class=\"site-footer\" role=\"contentinfo\">
  
    <div class=\"gross\"></div>
      
    ";
        // line 1025
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1025)) {
            // line 1026
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1028
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1028), 1028, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 1032
        echo "
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"layout-container\">
        ";
        // line 1036
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1036) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1036)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1036)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1036))) {
            // line 1037
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 1038
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 1038), 1038, $this->source), "html", null, true);
            echo "
            ";
            // line 1039
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 1039), 1039, $this->source), "html", null, true);
            echo "
            ";
            // line 1040
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 1040), 1040, $this->source), "html", null, true);
            echo "
            ";
            // line 1041
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 1041), 1041, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1044
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1044)) {
            // line 1045
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 1046
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 1046), 1046, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1049
        echo "      </div>
      </div>
    </div>

    ";
        // line 1053
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1053) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1053)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1053)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1053))) {
            // line 1054
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1056
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1056)) {
                // line 1057
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1057) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1057)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1057))) {
                    // line 1058
                    echo "              <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1059
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1059) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1059))) {
                    // line 1060
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1061
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1061) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1061))) {
                    // line 1062
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1063
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1063) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1063))) {
                    // line 1064
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1065
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1065) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1065)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1065))) {
                    // line 1066
                    echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                } else {
                    // line 1068
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1070
                echo "              <div class=\"footer1\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1070), 1070, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1073
            echo "
          ";
            // line 1074
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1074)) {
                // line 1075
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1075) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1075)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1075))) {
                    // line 1076
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1077
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1077) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1077))) {
                    // line 1078
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1079
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1079) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1079))) {
                    // line 1080
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1081
($context["page"] ?? null), "footer3", [], "any", false, false, true, 1081) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1081))) {
                    // line 1082
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1083
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1083) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1083)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1083))) {
                    // line 1084
                    echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                } else {
                    // line 1086
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1088
                echo "              <div class=\"footer2\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1088), 1088, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1091
            echo "
          ";
            // line 1092
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1092)) {
                // line 1093
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1093) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1093)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1093))) {
                    // line 1094
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1095
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1095) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1095))) {
                    // line 1096
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1097
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1097) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1097))) {
                    // line 1098
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1099
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1099) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1099))) {
                    // line 1100
                    echo "                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1101
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1101) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1101)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1101))) {
                    // line 1102
                    echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              ";
                } else {
                    // line 1104
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1106
                echo "              <div class=\"footer3\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1106), 1106, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1109
            echo "
          ";
            // line 1110
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1110)) {
                // line 1111
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer1", [], "any", false, false, true, 1111) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1111)) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1111))) {
                    // line 1112
                    echo "              <div class=\"ol-lg-3 col-md-3 col-sm-3 col-xs-12\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1113
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1113) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1113))) {
                    // line 1114
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1115
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1115) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1115))) {
                    // line 1116
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 1117
($context["page"] ?? null), "footer2", [], "any", false, false, true, 1117) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1117))) {
                    // line 1118
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 1119
($context["page"] ?? null), "footer1", [], "any", false, false, true, 1119) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer2", [], "any", false, false, true, 1119)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer3", [], "any", false, false, true, 1119))) {
                    // line 1120
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1122
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1124
                echo "              <div class=\"footer4\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer4", [], "any", false, false, true, 1124), 1124, $this->source), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1127
            echo "
          </div>

        ";
        }
        // line 1131
        echo "
        
        </div>
        <div class=\"bottom_footer\">
        <div class=\"container\">
          <div class=\"row\">
              ";
        // line 1137
        if (($context["show_hide_copyright"] ?? null)) {
            // line 1138
            echo "                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"copyright\">
                        <a href=\"";
            // line 1140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_url"] ?? null), 1140, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                          ";
            // line 1141
            echo t("Copyright @copyright_date @copyright_developedby", array("@copyright_date" =>             // line 1142
($context["copyright_date"] ?? null), "@copyright_developedby" => ($context["copyright_developedby"] ?? null), ));
            // line 1144
            echo "                        </a>
                    </div>
                </div>
              ";
        }
        // line 1148
        echo "
              <!-- <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                <div class=\"switchButton\">
                    <span class=\"bt-blue scrollup\"></span>
                    <span class=\"bt-lghtGre scrollup\"></span>
                    <span class=\"bt-orange scrollup\"></span>
                    <span class=\"bt-red scrollup\"></span>
                    <span class=\"bt-green scrollup\"></span>
                </div>
              </div> -->

              ";
        // line 1159
        if (($context["show_hide_icon"] ?? null)) {
            // line 1160
            echo "              <div class=\"socBox col-lg-6\">
                <ul class=\"socIcons\">
                    ";
            // line 1162
            $context["soc"] = ["fa-twitter" =>             // line 1163
($context["twitter"] ?? null), "fa-facebook" =>             // line 1164
($context["facebook"] ?? null), "fa-flickr" =>             // line 1165
($context["flickr"] ?? null), "fa-linkedin" =>             // line 1166
($context["linkedin"] ?? null), "fa-play" =>             // line 1167
($context["youtube"] ?? null), "fa-pinterest" =>             // line 1168
($context["pinterest"] ?? null), "fa-google-plus" =>             // line 1169
($context["google"] ?? null), "fa-dribbble" =>             // line 1170
($context["dribbble"] ?? null), "fa-vimeo-square" =>             // line 1171
($context["vimeo"] ?? null), "fa-instagram" =>             // line 1172
($context["instagram"] ?? null), "fa-vk" =>             // line 1173
($context["vk"] ?? null)];
            // line 1175
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 1176
                echo "                        ";
                if ($context["value"]) {
                    // line 1177
                    echo "                          <li>
                              <a href=\"";
                    // line 1178
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 1178, $this->source), "html", null, true);
                    echo "\" target=\"_blank\">
                                  <i class=\"fa ";
                    // line 1179
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 1179, $this->source), "html", null, true);
                    echo "\"></i>
                              </a>
                          </li>
                        ";
                }
                // line 1183
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1184
            echo "                </ul>
            </div>
          ";
        }
        // line 1187
        echo "
          </div>
        </div>
        </div>
  </footer>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/mobidic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2624 => 1187,  2619 => 1184,  2613 => 1183,  2606 => 1179,  2602 => 1178,  2599 => 1177,  2596 => 1176,  2591 => 1175,  2589 => 1173,  2588 => 1172,  2587 => 1171,  2586 => 1170,  2585 => 1169,  2584 => 1168,  2583 => 1167,  2582 => 1166,  2581 => 1165,  2580 => 1164,  2579 => 1163,  2578 => 1162,  2574 => 1160,  2572 => 1159,  2559 => 1148,  2553 => 1144,  2551 => 1142,  2550 => 1141,  2546 => 1140,  2542 => 1138,  2540 => 1137,  2532 => 1131,  2526 => 1127,  2519 => 1124,  2515 => 1122,  2511 => 1120,  2509 => 1119,  2506 => 1118,  2504 => 1117,  2501 => 1116,  2499 => 1115,  2496 => 1114,  2494 => 1113,  2491 => 1112,  2488 => 1111,  2486 => 1110,  2483 => 1109,  2476 => 1106,  2472 => 1104,  2468 => 1102,  2466 => 1101,  2463 => 1100,  2461 => 1099,  2458 => 1098,  2456 => 1097,  2453 => 1096,  2451 => 1095,  2448 => 1094,  2445 => 1093,  2443 => 1092,  2440 => 1091,  2433 => 1088,  2429 => 1086,  2425 => 1084,  2423 => 1083,  2420 => 1082,  2418 => 1081,  2415 => 1080,  2413 => 1079,  2410 => 1078,  2408 => 1077,  2405 => 1076,  2402 => 1075,  2400 => 1074,  2397 => 1073,  2390 => 1070,  2386 => 1068,  2382 => 1066,  2380 => 1065,  2377 => 1064,  2375 => 1063,  2372 => 1062,  2370 => 1061,  2367 => 1060,  2365 => 1059,  2362 => 1058,  2359 => 1057,  2357 => 1056,  2353 => 1054,  2351 => 1053,  2345 => 1049,  2339 => 1046,  2336 => 1045,  2333 => 1044,  2327 => 1041,  2323 => 1040,  2319 => 1039,  2315 => 1038,  2312 => 1037,  2310 => 1036,  2304 => 1032,  2297 => 1028,  2293 => 1026,  2291 => 1025,  2282 => 1018,  2275 => 1014,  2271 => 1012,  2269 => 1011,  2266 => 1010,  2257 => 1004,  2251 => 1001,  2245 => 998,  2239 => 995,  2233 => 991,  2231 => 990,  2228 => 989,  2219 => 983,  2213 => 979,  2211 => 978,  2208 => 977,  2202 => 973,  2195 => 970,  2191 => 968,  2187 => 966,  2185 => 965,  2182 => 964,  2180 => 963,  2177 => 962,  2175 => 961,  2172 => 960,  2170 => 959,  2167 => 958,  2164 => 957,  2162 => 956,  2159 => 955,  2152 => 952,  2148 => 950,  2144 => 948,  2142 => 947,  2139 => 946,  2137 => 945,  2134 => 944,  2132 => 943,  2129 => 942,  2127 => 941,  2124 => 940,  2121 => 939,  2119 => 938,  2116 => 937,  2109 => 934,  2105 => 932,  2101 => 930,  2099 => 929,  2096 => 928,  2094 => 927,  2091 => 926,  2089 => 925,  2086 => 924,  2084 => 923,  2081 => 922,  2078 => 921,  2076 => 920,  2073 => 919,  2066 => 916,  2062 => 914,  2058 => 912,  2056 => 911,  2053 => 910,  2051 => 909,  2048 => 908,  2046 => 907,  2043 => 906,  2041 => 905,  2038 => 904,  2035 => 903,  2033 => 902,  2029 => 900,  2027 => 899,  2024 => 898,  2017 => 893,  2010 => 890,  2006 => 888,  2002 => 886,  2000 => 885,  1997 => 884,  1995 => 883,  1992 => 882,  1990 => 881,  1987 => 880,  1985 => 879,  1982 => 878,  1979 => 877,  1977 => 876,  1974 => 875,  1967 => 872,  1963 => 870,  1959 => 868,  1957 => 867,  1954 => 866,  1952 => 865,  1949 => 864,  1947 => 863,  1944 => 862,  1942 => 861,  1939 => 860,  1936 => 859,  1934 => 858,  1931 => 857,  1924 => 854,  1920 => 852,  1916 => 850,  1914 => 849,  1911 => 848,  1909 => 847,  1906 => 846,  1904 => 845,  1901 => 844,  1899 => 843,  1896 => 842,  1893 => 841,  1891 => 840,  1888 => 839,  1881 => 836,  1877 => 834,  1873 => 832,  1871 => 831,  1868 => 830,  1866 => 829,  1863 => 828,  1861 => 827,  1858 => 826,  1856 => 825,  1853 => 824,  1850 => 823,  1848 => 822,  1843 => 819,  1841 => 818,  1838 => 817,  1832 => 813,  1825 => 810,  1821 => 808,  1817 => 806,  1815 => 805,  1812 => 804,  1810 => 803,  1807 => 802,  1805 => 801,  1802 => 800,  1800 => 799,  1797 => 798,  1794 => 797,  1792 => 796,  1789 => 795,  1782 => 792,  1778 => 790,  1774 => 788,  1772 => 787,  1769 => 786,  1767 => 785,  1764 => 784,  1762 => 783,  1759 => 782,  1757 => 781,  1754 => 780,  1751 => 779,  1749 => 778,  1746 => 777,  1739 => 774,  1735 => 772,  1731 => 770,  1729 => 769,  1726 => 768,  1724 => 767,  1721 => 766,  1719 => 765,  1716 => 764,  1714 => 763,  1711 => 762,  1708 => 761,  1706 => 760,  1703 => 759,  1696 => 756,  1692 => 754,  1688 => 752,  1686 => 751,  1683 => 750,  1681 => 749,  1678 => 748,  1676 => 747,  1673 => 746,  1671 => 745,  1668 => 744,  1665 => 743,  1663 => 742,  1659 => 740,  1657 => 739,  1654 => 738,  1648 => 734,  1641 => 731,  1637 => 729,  1633 => 727,  1631 => 726,  1628 => 725,  1626 => 724,  1623 => 723,  1621 => 722,  1618 => 721,  1616 => 720,  1613 => 719,  1610 => 718,  1608 => 717,  1605 => 716,  1598 => 713,  1594 => 711,  1590 => 709,  1588 => 708,  1585 => 707,  1583 => 706,  1580 => 705,  1578 => 704,  1575 => 703,  1573 => 702,  1570 => 701,  1567 => 700,  1565 => 699,  1562 => 698,  1555 => 695,  1551 => 693,  1547 => 691,  1545 => 690,  1542 => 689,  1540 => 688,  1537 => 687,  1535 => 686,  1532 => 685,  1530 => 684,  1527 => 683,  1524 => 682,  1522 => 681,  1519 => 680,  1508 => 672,  1504 => 670,  1500 => 668,  1496 => 666,  1494 => 665,  1491 => 664,  1489 => 663,  1486 => 662,  1484 => 661,  1481 => 660,  1479 => 659,  1476 => 658,  1473 => 657,  1471 => 656,  1467 => 654,  1465 => 653,  1462 => 652,  1455 => 648,  1451 => 646,  1449 => 645,  1446 => 644,  1439 => 640,  1435 => 638,  1433 => 637,  1430 => 636,  1423 => 632,  1419 => 630,  1417 => 629,  1409 => 625,  1403 => 622,  1400 => 621,  1398 => 620,  1392 => 617,  1387 => 615,  1384 => 614,  1378 => 612,  1376 => 611,  1370 => 609,  1364 => 607,  1362 => 606,  1358 => 605,  1353 => 603,  1348 => 601,  1342 => 600,  1339 => 599,  1333 => 596,  1330 => 595,  1328 => 594,  1325 => 593,  1321 => 591,  1315 => 588,  1312 => 587,  1310 => 586,  1304 => 583,  1300 => 582,  1297 => 581,  1291 => 579,  1289 => 578,  1284 => 576,  1278 => 574,  1272 => 572,  1270 => 571,  1266 => 570,  1261 => 568,  1255 => 567,  1252 => 566,  1246 => 563,  1243 => 562,  1241 => 561,  1238 => 560,  1236 => 559,  1226 => 551,  1220 => 547,  1213 => 544,  1209 => 542,  1205 => 540,  1203 => 539,  1200 => 538,  1198 => 537,  1195 => 536,  1193 => 535,  1190 => 534,  1188 => 533,  1185 => 532,  1182 => 531,  1180 => 530,  1177 => 529,  1170 => 526,  1166 => 524,  1162 => 522,  1160 => 521,  1157 => 520,  1155 => 519,  1152 => 518,  1150 => 517,  1147 => 516,  1145 => 515,  1142 => 514,  1139 => 513,  1137 => 512,  1134 => 511,  1127 => 508,  1123 => 506,  1119 => 504,  1117 => 503,  1114 => 502,  1112 => 501,  1109 => 500,  1107 => 499,  1104 => 498,  1102 => 497,  1099 => 496,  1096 => 495,  1094 => 494,  1091 => 493,  1084 => 490,  1080 => 488,  1076 => 486,  1074 => 485,  1071 => 484,  1069 => 483,  1066 => 482,  1064 => 481,  1061 => 480,  1059 => 479,  1056 => 478,  1053 => 477,  1051 => 476,  1047 => 474,  1045 => 473,  1042 => 472,  1036 => 468,  1029 => 465,  1025 => 463,  1021 => 461,  1019 => 460,  1016 => 459,  1014 => 458,  1011 => 457,  1009 => 456,  1006 => 455,  1004 => 454,  1001 => 453,  998 => 452,  996 => 451,  993 => 450,  986 => 447,  982 => 445,  978 => 443,  976 => 442,  973 => 441,  971 => 440,  968 => 439,  966 => 438,  963 => 437,  961 => 436,  958 => 435,  955 => 434,  953 => 433,  950 => 432,  943 => 429,  939 => 427,  935 => 425,  933 => 424,  930 => 423,  928 => 422,  925 => 421,  923 => 420,  920 => 419,  918 => 418,  915 => 417,  912 => 416,  910 => 415,  907 => 414,  900 => 411,  896 => 409,  892 => 407,  890 => 406,  887 => 405,  885 => 404,  882 => 403,  880 => 402,  877 => 401,  875 => 400,  872 => 399,  869 => 398,  867 => 397,  863 => 395,  861 => 394,  858 => 393,  850 => 388,  845 => 385,  843 => 384,  840 => 383,  834 => 379,  827 => 376,  823 => 374,  819 => 372,  817 => 371,  814 => 370,  812 => 369,  809 => 368,  807 => 367,  804 => 366,  802 => 365,  799 => 364,  796 => 363,  794 => 362,  791 => 361,  784 => 358,  780 => 356,  776 => 354,  774 => 353,  771 => 352,  769 => 351,  766 => 350,  764 => 349,  761 => 348,  759 => 347,  756 => 346,  753 => 345,  751 => 344,  747 => 342,  740 => 340,  736 => 338,  732 => 336,  730 => 335,  727 => 334,  725 => 333,  722 => 332,  720 => 331,  717 => 330,  715 => 329,  712 => 328,  709 => 327,  707 => 326,  704 => 325,  697 => 322,  693 => 320,  689 => 318,  687 => 317,  684 => 316,  682 => 315,  679 => 314,  677 => 313,  674 => 312,  672 => 311,  669 => 310,  666 => 309,  664 => 308,  660 => 306,  658 => 305,  655 => 304,  649 => 300,  642 => 297,  638 => 295,  634 => 293,  632 => 292,  629 => 291,  627 => 290,  624 => 289,  622 => 288,  619 => 287,  617 => 286,  614 => 285,  611 => 284,  609 => 283,  606 => 282,  599 => 279,  595 => 277,  591 => 275,  589 => 274,  586 => 273,  584 => 272,  581 => 271,  579 => 270,  576 => 269,  574 => 268,  571 => 267,  568 => 266,  566 => 265,  562 => 263,  555 => 261,  551 => 259,  547 => 257,  545 => 256,  542 => 255,  540 => 254,  537 => 253,  535 => 252,  532 => 251,  530 => 250,  527 => 249,  524 => 248,  522 => 247,  519 => 246,  512 => 243,  508 => 241,  504 => 239,  502 => 238,  499 => 237,  497 => 236,  494 => 235,  492 => 234,  489 => 233,  487 => 232,  484 => 231,  481 => 230,  479 => 229,  475 => 227,  473 => 226,  469 => 224,  462 => 220,  455 => 215,  453 => 214,  449 => 212,  442 => 208,  438 => 206,  436 => 205,  427 => 198,  418 => 191,  411 => 187,  407 => 185,  405 => 184,  401 => 182,  394 => 178,  390 => 176,  388 => 175,  384 => 173,  377 => 169,  373 => 167,  371 => 166,  362 => 159,  360 => 158,  346 => 146,  341 => 143,  335 => 141,  333 => 140,  330 => 139,  320 => 136,  317 => 135,  307 => 132,  304 => 131,  301 => 130,  297 => 127,  295 => 126,  290 => 123,  283 => 118,  276 => 115,  272 => 113,  268 => 111,  266 => 110,  263 => 109,  261 => 108,  258 => 107,  256 => 106,  253 => 105,  251 => 104,  248 => 103,  245 => 102,  243 => 101,  240 => 100,  233 => 97,  229 => 95,  225 => 93,  223 => 92,  220 => 91,  218 => 90,  215 => 89,  213 => 88,  210 => 87,  208 => 86,  205 => 85,  202 => 84,  200 => 83,  197 => 82,  190 => 79,  186 => 77,  182 => 75,  180 => 74,  177 => 73,  175 => 72,  172 => 71,  170 => 70,  167 => 69,  165 => 68,  162 => 67,  159 => 66,  157 => 65,  154 => 64,  147 => 61,  140 => 58,  136 => 56,  134 => 55,  131 => 54,  129 => 53,  126 => 52,  124 => 51,  121 => 50,  119 => 49,  116 => 48,  113 => 47,  111 => 46,  107 => 44,  105 => 43,  99 => 39,  97 => 38,  94 => 37,  88 => 34,  81 => 30,  74 => 25,  66 => 20,  59 => 16,  52 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/mobidic/templates/page.html.twig", "C:\\xampp\\htdocs\\port\\themes\\contrib\\mobidic\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "trans" => 1141, "set" => 1162, "for" => 1175);
        static $filters = array("escape" => 16, "t" => 132);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'set', 'for'],
                ['escape', 't'],
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
