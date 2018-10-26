<?php

/* themes/nexus/templates/layout/page--front.html.twig */
class __TwigTemplate_dae1157de945e5e1472fa0bdb7206a11fa6bbd63ca4a3c2835b6a9f9ae966fcb extends Twig_Template
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
        $tags = array("if" => 64, "set" => 188);
        $filters = array("striptags" => 102, "t" => 106);
        $functions = array("attach_library" => 94);

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
        // line 53
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
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "second_header", array())) {
            // line 65
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "second_header", array()), "html", null, true));
            echo "
            ";
        }
        // line 67
        echo "          </div>
        </nav>
      </div>
    </div> 
    </div>
    
    <div class=\"row\">
      ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 75
            echo "        <div id=\"logo\" class=\"site-branding col-sm-6\">
          ";
            // line 76
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 79
        echo "      
    
      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "main_navigation", array())) {
            // line 86
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_navigation", array()), "html", null, true));
            echo "
            ";
        }
        // line 88
        echo "          </div>
        </nav>
      </div>
    </div>
  </header>
  ";
        // line 93
        if (($context["is_front"] ?? null)) {
            // line 94
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("nexus/slider-js"), "html", null, true));
            echo "
    ";
            // line 95
            if (($context["slideshow_display"] ?? null)) {
                // line 96
                echo "      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"";
                // line 99
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slide1_image"] ?? null), "html", null, true));
                echo "\"/>
            ";
                // line 100
                if ((($context["slide1_head"] ?? null) || ($context["slide1_desc"] ?? null))) {
                    // line 101
                    echo "              ";
                    if (($context["slide1_head"] ?? null)) {
                        // line 102
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_head"] ?? null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 104
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 105
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_head"] ?? null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_desc"] ?? null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 106
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide1_url"] ?? null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 109
                echo "          </li>
          <li>
            <img src=\"";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slide2_image"] ?? null), "html", null, true));
                echo "\"/>
            ";
                // line 112
                if ((($context["slide2_head"] ?? null) || ($context["slide2_desc"] ?? null))) {
                    // line 113
                    echo "              ";
                    if (($context["slide2_head"] ?? null)) {
                        // line 114
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_head"] ?? null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 116
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_head"] ?? null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_desc"] ?? null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 118
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide2_url"] ?? null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 121
                echo "          </li>
          <li>
            <img src=\"";
                // line 123
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["slide3_image"] ?? null), "html", null, true));
                echo "\"/>
            ";
                // line 124
                if ((($context["slide3_head"] ?? null) || ($context["slide3_desc"] ?? null))) {
                    // line 125
                    echo "              ";
                    if (($context["slide3_head"] ?? null)) {
                        // line 126
                        echo "                ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_head"] ?? null)), "html", null, true));
                        echo "
              ";
                    }
                    // line 128
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 129
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_head"] ?? null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_desc"] ?? null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 130
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags(($context["slide3_url"] ?? null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 133
                echo "          </li>
        </ul><!-- /slides -->
        <div class=\"doverlay\"></div>
      </div>
    ";
            }
            // line 138
            echo "  ";
        }
        // line 139
        echo "
  ";
        // line 140
        if ((($this->getAttribute(($context["page"] ?? null), "preface_first", array()) || $this->getAttribute(($context["page"] ?? null), "preface_second", array())) || $this->getAttribute(($context["page"] ?? null), "preface_third", array()))) {
            // line 141
            echo "    <div id=\"preface-area\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 144
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", array())) {
                // line 145
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . ($context["preface_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 146
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 149
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_second", array())) {
                // line 150
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . ($context["preface_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 151
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 154
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_third", array())) {
                // line 155
                echo "            <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("preface-block col-sm-" . ($context["preface_col"] ?? null)), "html", null, true));
                echo "\">
              ";
                // line 156
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "preface_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 159
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 163
        echo "

<section class=\"rheader\">
        ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", array()), "html", null, true));
        echo "
  </section>
  
  ";
        // line 169
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 170
            echo "    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 174
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 180
        echo "  
        ";
        // line 181
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "feefo_block", array()), "html", null, true));
        echo "


  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 187
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 188
            echo "          ";
            $context["primary_col"] = 8;
            // line 189
            echo "        ";
        } else {
            // line 190
            echo "          ";
            $context["primary_col"] = 12;
            // line 191
            echo "        ";
        }
        // line 192
        echo "        <div id=\"primary\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("content-area col-sm-" . ($context["primary_col"] ?? null)), "html", null, true));
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            ";
        // line 194
        if (($context["show_breadcrumbs"] ?? null)) {
            // line 195
            echo "              ";
            if (($context["breadcrumb"] ?? null)) {
                // line 196
                echo "                <div id=\"breadcrumbs\">
                  ";
                // line 197
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
                echo "
                </div>
              ";
            }
            // line 200
            echo "            ";
        }
        // line 201
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
        echo "
            ";
        // line 202
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 203
            echo "              <div id=\"content_top\">
                ";
            // line 204
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 207
        echo "            <div id=\"content-wrap\">
              ";
        // line 208
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
              ";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </div>
          </section>
        </div>
        ";
        // line 213
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 214
            echo "          <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
           ";
            // line 215
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 218
        echo "      </div>
    </div>
  </div>
        
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
        // line 231
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 232
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
            ";
        }
        // line 234
        echo "          </div>
        </nav>
      </div>
      
\t\t<div class=\"right-footer col-sm-4\">
\t\t\t<a href=\"https://www.facebook.com/liftseat4home/\" target=\"_blank\">
\t\t\t\t<img alt=\"Visit us on Facebook\" src=\"sites/default/files/fb.png\" width=\"47\" height=\"47\">
\t\t\t</a> 
\t\t\t
\t\t\t<img alt=\"Caregiver Friendly Award\" src=\"sites/default/files/care-giver.png\" style=\"margin: 0px 15px;\" width=\"91\" height=\"50\"> 
\t\t\t
\t\t\t<a href=\"https://www.bbb.org/chicago/business-reviews/chairs-orthopedic-and-lift/liftseat-corporation-inc-in-oak-brook-il-88710999\" target=\"_blank\">
\t\t\t
\t\t\t<img alt=\"BBB Accredited Business\" src=\"sites/default/files/acceredited-buss.png\" width=\"125\" height=\"48\">
\t\t\t</a>
\t\t\t
\t\t\t<img alt=\"Made in the USA\" src=\"sites/default/files/madeinusa.png\" style=\"margin: 0px 15px;\" width=\"68\" height=\"48\">
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
        return "themes/nexus/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 234,  432 => 232,  430 => 231,  415 => 218,  409 => 215,  406 => 214,  404 => 213,  397 => 209,  393 => 208,  390 => 207,  384 => 204,  381 => 203,  379 => 202,  374 => 201,  371 => 200,  365 => 197,  362 => 196,  359 => 195,  357 => 194,  351 => 192,  348 => 191,  345 => 190,  342 => 189,  339 => 188,  337 => 187,  328 => 181,  325 => 180,  316 => 174,  310 => 170,  308 => 169,  302 => 166,  297 => 163,  291 => 159,  285 => 156,  280 => 155,  277 => 154,  271 => 151,  266 => 150,  263 => 149,  257 => 146,  252 => 145,  250 => 144,  245 => 141,  243 => 140,  240 => 139,  237 => 138,  230 => 133,  222 => 130,  216 => 129,  213 => 128,  207 => 126,  204 => 125,  202 => 124,  198 => 123,  194 => 121,  186 => 118,  180 => 117,  177 => 116,  171 => 114,  168 => 113,  166 => 112,  162 => 111,  158 => 109,  150 => 106,  144 => 105,  141 => 104,  135 => 102,  132 => 101,  130 => 100,  126 => 99,  121 => 96,  119 => 95,  114 => 94,  112 => 93,  105 => 88,  99 => 86,  97 => 85,  89 => 79,  83 => 76,  80 => 75,  78 => 74,  69 => 67,  63 => 65,  61 => 64,  47 => 53,  43 => 51,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/nexus/templates/layout/page--front.html.twig", "/opt/lampp/htdocs/drupal9/themes/nexus/templates/layout/page--front.html.twig");
    }
}
