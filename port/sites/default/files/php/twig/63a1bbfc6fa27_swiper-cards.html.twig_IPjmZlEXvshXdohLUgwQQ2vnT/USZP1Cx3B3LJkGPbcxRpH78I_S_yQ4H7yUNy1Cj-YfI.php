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

/* modules/contrib/swiper_cards/templates/swiper-cards.html.twig */
class __TwigTemplate_3ae714b84c162dc859c4913a90c71f27 extends \Twig\Template
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
        echo "
 ";
        // line 25
        $context["classes"] = [0 => "swiper-card-slider"];
        // line 29
        echo " ";
        if (( !twig_test_empty(($context["swiper_cards_data"] ?? null)) || (twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "swiper_card_header", [], "any", false, false, true, 29) != ""))) {
            // line 30
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "swiper_card_header", [], "any", false, false, true, 30) != "")) {
                // line 31
                echo "    <div class=\"swiper-card-header-sec\">
      ";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "swiper_card_header", [], "any", false, false, true, 32), 32, $this->source));
                echo "
    </div>
  ";
            }
            // line 35
            echo "
  ";
            // line 36
            if ((($context["swiper_card_layout"] ?? null) == "layout_1")) {
                // line 37
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("swiper_cards/swiper_cards"), "html", null, true);
                echo "
    <div";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
                echo ">

    ";
                // line 41
                echo "    <div class=\"swipercardsblock-container-layout-1\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 41) != "")) {
                    echo "style=\"background-color: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo ">
      <div class=\"swiper-container-layout-1\">
        <div class=\"swiper-wrapper\">
          ";
                // line 44
                if ( !twig_test_empty(($context["swiper_cards_data"] ?? null))) {
                    // line 45
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["swiper_cards_data"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["swiper_card"]) {
                        // line 46
                        echo "              <div class=\"swiper-slide\">
                ";
                        // line 47
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 47) != "")) {
                            // line 48
                            echo "                  <div class=\"picture\">
                    <img src=\"";
                            // line 49
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                            echo "\" alt=\"\">
                  </div>
                ";
                        }
                        // line 52
                        echo "                <div class=\"detail\">
                  ";
                        // line 53
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 53) != "")) {
                            // line 54
                            echo "                    <h3>";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                            echo "</h3>
                  ";
                        }
                        // line 56
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 56) != "")) {
                            // line 57
                            echo "                    <span>";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                            echo "</span>
                  ";
                        }
                        // line 59
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59) != "")) {
                            // line 60
                            echo "                    ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), 60, $this->source));
                            echo "
                  ";
                        }
                        // line 62
                        echo "                </div>
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['swiper_card'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "          ";
                }
                // line 66
                echo "        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    </div>
    ";
                // line 71
                echo "
  ";
            } elseif ((            // line 72
($context["swiper_card_layout"] ?? null) == "layout_2")) {
                // line 73
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("swiper_cards/swiper_cards_bundle"), "html", null, true);
                echo "
    ";
                // line 75
                echo "    <div class=\"swipercardsblock-container-layout-2 swiper-card-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created_at"] ?? null), 75, $this->source), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 75) != "")) {
                    echo "style=\"background-color: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo ">
      <div class=\"swiper sc-layout-4\">
        <div class=\"swiper-wrapper\">

          ";
                // line 79
                if ( !twig_test_empty(($context["swiper_cards_data"] ?? null))) {
                    // line 80
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["swiper_cards_data"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["swiper_card"]) {
                        // line 81
                        echo "              <div class=\"swiper-slide\">
                ";
                        // line 82
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 82) != "")) {
                            // line 83
                            echo "                  <div class=\"img\" style=\"background-image: url(";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                            echo ")\"></div>
                ";
                        }
                        // line 85
                        echo "                <div class=\"swiper-content-container\">
                  ";
                        // line 86
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 86) != "")) {
                            // line 87
                            echo "                    <div class=\"name\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                            echo "</div>
                  ";
                        }
                        // line 89
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 89) != "")) {
                            // line 90
                            echo "                    <div class=\"title\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                            echo "</div>
                  ";
                        }
                        // line 92
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 92), "value", [], "any", false, false, true, 92) != "")) {
                            // line 93
                            echo "                    <div class=\"desc\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 93), "value", [], "any", false, false, true, 93), 93, $this->source));
                            echo "
                    </div>
                  ";
                        }
                        // line 96
                        echo "                </div>
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['swiper_card'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "          ";
                }
                // line 100
                echo "
        </div>
      </div>
    </div>
    ";
                // line 105
                echo "
  </div>
";
            } elseif ((            // line 107
($context["swiper_card_layout"] ?? null) == "layout_3")) {
                // line 108
                echo "  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("swiper_cards/swiper_cards"), "html", null, true);
                echo "
  <section class=\"sc-slide-block\" ";
                // line 109
                if ((twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 109) != "")) {
                    echo "style=\"background-color: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo ">
    <div class=\"swipercardsblock-container-layout-3\">
      <div class=\"swiper-container\">
        <ul class=\"swiper-wrapper sc-slide_list\">
          ";
                // line 113
                if ( !twig_test_empty(($context["swiper_cards_data"] ?? null))) {
                    // line 114
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["swiper_cards_data"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["swiper_card"]) {
                        // line 115
                        echo "              <li class=\"swiper-slide sc-slide_item\" data-swiper-autoplay=\"1500\" data-swiper-slide-index=\"0\">
                <div class=\"swiper-card-li-container\">";
                        // line 116
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 116) != "")) {
                            // line 117
                            echo "                  <img src=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                            echo "\" class=\"sc-slide_img\" alt=\"\">
                ";
                        }
                        // line 119
                        echo "                <div class=\"sc-slide_info clearfix\">
                  <div class=\"sc-slide-info_descr\">
                    ";
                        // line 121
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 121) != "")) {
                            // line 122
                            echo "                      <small class=\"sc-slide-info_category\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
                            echo "</small>
                    ";
                        }
                        // line 124
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 124) != "")) {
                            // line 125
                            echo "                      <h3 class=\"sc-slide-info_title\">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                            echo "\"</h3>
                    ";
                        }
                        // line 127
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 127), "value", [], "any", false, false, true, 127) != "")) {
                            // line 128
                            echo "                      ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 128), "value", [], "any", false, false, true, 128), 128, $this->source));
                            echo "
                    ";
                        }
                        // line 130
                        echo "                  </div>
                </div>
              </div>
            </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['swiper_card'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "        ";
                }
                // line 136
                echo "      </ul>
    </div>
  </div>
</section>

";
            } elseif ((            // line 141
($context["swiper_card_layout"] ?? null) == "layout_4")) {
                // line 142
                echo "  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("swiper_cards/swiper_cards"), "html", null, true);
                echo "
  <div class=\"swipercardsblock-container-layout-4\" ";
                // line 143
                if ((twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 143) != "")) {
                    echo "style=\"background-color: ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["default_data"] ?? null), "background_color", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                    echo "\" ";
                }
                echo ">
    <div class=\"swiper-container-l4\">
      <div class=\"swiper-wrapper\">
        ";
                // line 146
                if ( !twig_test_empty(($context["swiper_cards_data"] ?? null))) {
                    // line 147
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["swiper_cards_data"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["swiper_card"]) {
                        // line 148
                        echo "            <div class=\"swiper-slide\">
              <div class=\"swiper-content\">
                ";
                        // line 150
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 150) != "")) {
                            // line 151
                            echo "                  <div class=\"swiper-image-container\">
                    <img src=\"";
                            // line 152
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "image_url", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                            echo "\">
                  </div>
                ";
                        }
                        // line 155
                        echo "                <div class=\"swiper-contents-wrapper\">
                  ";
                        // line 156
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 156) != "")) {
                            // line 157
                            echo "                    <h2>";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_title", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
                            echo "</h2>
                  ";
                        }
                        // line 159
                        echo "                  <h3>The city that never sleeps.</h3>
                  ";
                        // line 160
                        if ((twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 160) != "")) {
                            // line 161
                            echo "                    <p>";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_subtitle", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
                            echo "</p>
                  ";
                        }
                        // line 163
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 163), "value", [], "any", false, false, true, 163) != "")) {
                            // line 164
                            echo "                    ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["swiper_card"], "card_description", [], "any", false, false, true, 164), "value", [], "any", false, false, true, 164), 164, $this->source));
                            echo "
                  ";
                        }
                        // line 166
                        echo "                </div>
              </div>
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['swiper_card'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 170
                    echo "        ";
                }
                // line 171
                echo "      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/swiper_cards/templates/swiper-cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 171,  410 => 170,  401 => 166,  395 => 164,  392 => 163,  386 => 161,  384 => 160,  381 => 159,  375 => 157,  373 => 156,  370 => 155,  364 => 152,  361 => 151,  359 => 150,  355 => 148,  350 => 147,  348 => 146,  338 => 143,  333 => 142,  331 => 141,  324 => 136,  321 => 135,  311 => 130,  305 => 128,  302 => 127,  296 => 125,  293 => 124,  287 => 122,  285 => 121,  281 => 119,  275 => 117,  273 => 116,  270 => 115,  265 => 114,  263 => 113,  252 => 109,  247 => 108,  245 => 107,  241 => 105,  235 => 100,  232 => 99,  224 => 96,  217 => 93,  214 => 92,  208 => 90,  205 => 89,  199 => 87,  197 => 86,  194 => 85,  188 => 83,  186 => 82,  183 => 81,  178 => 80,  176 => 79,  162 => 75,  157 => 73,  155 => 72,  152 => 71,  146 => 66,  143 => 65,  135 => 62,  129 => 60,  126 => 59,  120 => 57,  117 => 56,  111 => 54,  109 => 53,  106 => 52,  100 => 49,  97 => 48,  95 => 47,  92 => 46,  87 => 45,  85 => 44,  74 => 41,  69 => 38,  64 => 37,  62 => 36,  59 => 35,  53 => 32,  50 => 31,  47 => 30,  44 => 29,  42 => 25,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/swiper_cards/templates/swiper-cards.html.twig", "C:\\xampp\\htdocs\\port\\modules\\contrib\\swiper_cards\\templates\\swiper-cards.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 29, "for" => 45);
        static $filters = array("raw" => 32, "escape" => 37);
        static $functions = array("attach_library" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['raw', 'escape'],
                ['attach_library']
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
