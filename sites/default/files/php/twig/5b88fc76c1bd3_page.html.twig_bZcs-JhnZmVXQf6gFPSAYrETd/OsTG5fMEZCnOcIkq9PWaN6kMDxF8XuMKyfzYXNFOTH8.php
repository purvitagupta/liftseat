<?php

/* themes/nexus/templates/layout/page.html.twig */
class __TwigTemplate_646c9254037e1d0ec5d6feb7a6705d48a354cb60733d3c51428ea87cf8ed2f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 63, "set" => 182);
        $filters = array("striptags" => 101, "t" => 105);
        $functions = array("attach_library" => 93);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('striptags', 't'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 51
        echo "
 
<section class=\"theader\">
        ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
        echo "
  </section>
  
  <div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
\t
\t<div class=\"col-sm-12 mainmenu\">
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "second_header", array())) {
            // line 64
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "second_header", array()), "html", null, true));
            echo "
            ";
        }
        // line 66
        echo "          </div>
        </nav>
      </div>
    </div> 
    </div>

<div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
    <div class=\"row\">
      ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 76
            echo "        <div id=\"logo\" class=\"site-branding col-sm-6\">
          ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 80
        echo "      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "main_navigation", array())) {
            // line 85
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_navigation", array()), "html", null, true));
            echo "
            ";
        }
        // line 87
        echo "          </div>
        </nav>
      </div>
    </div>
  </header>
  ";
        // line 92
        if (($context["is_front"] ?? null)) {
            // line 93
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("nexus/slider-js"), "html", null, true));
            echo "
    ";
            // line 94
            if (($context["slideshow_display"] ?? null)) {
                // line 95
                echo "      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"";
                // line 98
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slide1_image"] ?? null), "html", null, true));
                echo "\"/>
            ";
                // line 99
                if ((($context["slide1_head"] ?? null) || ($context["slide1_desc"] ?? null))) {
                    // line 100
                    echo "              ";
                    if (($context["slide1_head"] ?? null)) {
                        // line 101
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_head"] ?? null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 103
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 104
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_head"] ?? null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_desc"] ?? null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 105
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_url"] ?? null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 108
                echo "          </li>
          <li>
            <img src=\"";
                // line 110
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slide2_image"] ?? null), "html", null, true));
                echo "\"/>
            ";
                // line 111
                if ((($context["slide2_head"] ?? null) || ($context["slide2_desc"] ?? null))) {
                    // line 112
                    echo "              ";
                    if (($context["slide2_head"] ?? null)) {
                        // line 113
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_head"] ?? null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 115
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 116
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_head"] ?? null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_desc"] ?? null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_url"] ?? null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 120
                echo "          </li>
          <li>
            <img src=\"";
                // line 122
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slide3_image"] ?? null), "html", null, true));
                echo "\"/>
            ";
                // line 123
                if ((($context["slide3_head"] ?? null) || ($context["slide3_desc"] ?? null))) {
                    // line 124
                    echo "              ";
                    if (($context["slide3_head"] ?? null)) {
                        // line 125
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_head"] ?? null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 127
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 128
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_head"] ?? null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_desc"] ?? null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 129
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_url"] ?? null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 132
                echo "          </li>
        </ul><!-- /slides -->
        <div class=\"doverlay\"></div>
      </div>
    ";
            }
            // line 137
            echo "  ";
        }
        // line 138
        echo "
  ";
        // line 139
        if ((($this->getAttribute(($context["page"] ?? null), "preface_first", array()) || $this->getAttribute(($context["page"] ?? null), "preface_second", array())) || $this->getAttribute(($context["page"] ?? null), "preface_third", array()))) {
            // line 140
            echo "    <div id=\"preface-area\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 143
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", array())) {
                // line 144
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . ($context["preface_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 145
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 148
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", array())) {
                // line 149
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . ($context["preface_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 150
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 153
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", array())) {
                // line 154
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . ($context["preface_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 155
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 158
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 162
        echo "

  ";
        // line 164
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 165
            echo "    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 169
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 175
        echo "  
  ";
        // line 176
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "feefo_block", array()), "html", null, true));
        echo "

  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 181
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 182
            echo "          ";
            $context["primary_col"] = 8;
            // line 183
            echo "        ";
        } else {
            // line 184
            echo "          ";
            $context["primary_col"] = 12;
            // line 185
            echo "        ";
        }
        // line 186
        echo "        <div id=\"primary\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("content-area col-sm-" . ($context["primary_col"] ?? null)), "html", null, true));
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            ";
        // line 188
        if (($context["show_breadcrumbs"] ?? null)) {
            // line 189
            echo "              ";
            if (($context["breadcrumb"] ?? null)) {
                // line 190
                echo "                <div id=\"breadcrumbs\">
                  ";
                // line 191
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
                echo "
                </div>
              ";
            }
            // line 194
            echo "            ";
        }
        // line 195
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
        echo "
            ";
        // line 196
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 197
            echo "              <div id=\"content_top\">
                ";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 201
        echo "            <div id=\"content-wrap\">
              ";
        // line 202
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
              ";
        // line 203
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </div>
          </section>
        </div>
        ";
        // line 207
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 208
            echo "          <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
           ";
            // line 209
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 212
        echo "      </div>
    </div>
  </div>


  ";
        // line 217
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 218
            echo "    <div id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 221
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 222
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . ($context["footer_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 223
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 226
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 227
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . ($context["footer_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 228
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 231
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 232
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . ($context["footer_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 233
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 236
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 237
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("footer-block col-sm-" . ($context["footer_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 238
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 241
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 245
        echo "
 <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"container\">
      <div class=\"row\">
\t\t
\t\t
\t\t<div class=\"col-sm-8 left-footer\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 255
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 256
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
            ";
        }
        // line 258
        echo "          </div>
        </nav>
      </div>
      
\t\t<div class=\"right-footer col-sm-4\">
\t\t\t<a href=\"https://www.facebook.com/liftseat4home/\" target=\"_blank\">
\t\t\t\t<img alt=\"Visit us on Facebook\" src=\"";
        // line 264
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "sites/default/files/fb.png\" width=\"47\" height=\"47\">
\t\t\t</a> 
\t\t\t
\t\t\t<img alt=\"Caregiver Friendly Award\" src=\"";
        // line 267
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "sites/default/files/care-giver.png\" style=\"margin: 0px 15px;\" width=\"91\" height=\"50\"> 
\t\t\t
\t\t\t<a href=\"https://www.bbb.org/chicago/business-reviews/chairs-orthopedic-and-lift/liftseat-corporation-inc-in-oak-brook-il-88710999\" target=\"_blank\">
\t\t\t
\t\t\t<img alt=\"BBB Accredited Business\" src=\"";
        // line 271
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "sites/default/files/acceredited-buss.png\" width=\"125\" height=\"48\">
\t\t\t</a>
\t\t\t
\t\t\t<img alt=\"Made in the USA\" src=\"";
        // line 274
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "sites/default/files/madeinusa.png\" style=\"margin: 0px 15px;\" width=\"68\" height=\"48\">
\t\t<div>
\t</div>
\t</div>
\t
\t\t\t
    </div>
\t\t<div class=\"fcred col-sm-12\">
\t©2018 LiftSeat Corporation. All rights reserved.</div>
\t\t
    </div>
  </footer>    
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 274,  522 => 271,  515 => 267,  509 => 264,  501 => 258,  495 => 256,  493 => 255,  481 => 245,  475 => 241,  469 => 238,  464 => 237,  461 => 236,  455 => 233,  450 => 232,  447 => 231,  441 => 228,  436 => 227,  433 => 226,  427 => 223,  422 => 222,  420 => 221,  415 => 218,  413 => 217,  406 => 212,  400 => 209,  397 => 208,  395 => 207,  388 => 203,  384 => 202,  381 => 201,  375 => 198,  372 => 197,  370 => 196,  365 => 195,  362 => 194,  356 => 191,  353 => 190,  350 => 189,  348 => 188,  342 => 186,  339 => 185,  336 => 184,  333 => 183,  330 => 182,  328 => 181,  320 => 176,  317 => 175,  308 => 169,  302 => 165,  300 => 164,  296 => 162,  290 => 158,  284 => 155,  279 => 154,  276 => 153,  270 => 150,  265 => 149,  262 => 148,  256 => 145,  251 => 144,  249 => 143,  244 => 140,  242 => 139,  239 => 138,  236 => 137,  229 => 132,  221 => 129,  215 => 128,  212 => 127,  206 => 125,  203 => 124,  201 => 123,  197 => 122,  193 => 120,  185 => 117,  179 => 116,  176 => 115,  170 => 113,  167 => 112,  165 => 111,  161 => 110,  157 => 108,  149 => 105,  143 => 104,  140 => 103,  134 => 101,  131 => 100,  129 => 99,  125 => 98,  120 => 95,  118 => 94,  113 => 93,  111 => 92,  104 => 87,  98 => 85,  96 => 84,  90 => 80,  84 => 77,  81 => 76,  79 => 75,  68 => 66,  62 => 64,  60 => 63,  48 => 54,  43 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nexus/templates/layout/page.html.twig", "/opt/lampp/htdocs/drupal9/themes/nexus/templates/layout/page.html.twig");
    }
}
