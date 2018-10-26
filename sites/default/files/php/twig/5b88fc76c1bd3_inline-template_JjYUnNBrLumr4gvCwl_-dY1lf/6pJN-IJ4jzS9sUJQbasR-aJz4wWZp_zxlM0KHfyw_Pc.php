<?php

/* {# inline_template_start #}<script type="text/javascript">
  if (typeof(LikeBtn) != "undefined") {
    LikeBtn.init();
  }
</script>


  <div style="text-align:left" class="likebtn_container">
    <span class="likebtn-wrapper" data-identifier="node_54_field_like_index_0" data-engine="drupal" data-engine_v="8.5.3" data-plugin_v="2.4"  data-theme="github"  data-share_size="small"  data-popup_width="173" ></span>
  </div>

<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script> */
class __TwigTemplate_5f8b778fdb00422a8189e6548778872a1d4fdc4ebec8c598e73a8b569b824316 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<script type=\"text/javascript\">
  if (typeof(LikeBtn) != \"undefined\") {
    LikeBtn.init();
  }
</script>


  <div style=\"text-align:left\" class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" data-identifier=\"node_54_field_like_index_0\" data-engine=\"drupal\" data-engine_v=\"8.5.3\" data-plugin_v=\"2.4\"  data-theme=\"github\"  data-share_size=\"small\"  data-popup_width=\"173\" ></span>
  </div>

<script>(function(d,e,s){if(d.getElementById(\"likebtn_wjs\"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id=\"likebtn_wjs\";a.src=s;m.parentNode.insertBefore(a, m)})(document,\"script\",\"//w.likebtn.com/js/w/widget.js\");</script>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<script type=\"text/javascript\">
  if (typeof(LikeBtn) != \"undefined\") {
    LikeBtn.init();
  }
</script>


  <div style=\"text-align:left\" class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" data-identifier=\"node_54_field_like_index_0\" data-engine=\"drupal\" data-engine_v=\"8.5.3\" data-plugin_v=\"2.4\"  data-theme=\"github\"  data-share_size=\"small\"  data-popup_width=\"173\" ></span>
  </div>

<script>(function(d,e,s){if(d.getElementById(\"likebtn_wjs\"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id=\"likebtn_wjs\";a.src=s;m.parentNode.insertBefore(a, m)})(document,\"script\",\"//w.likebtn.com/js/w/widget.js\");</script>";
    }

    public function getDebugInfo()
    {
        return array (  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<script type=\"text/javascript\">
  if (typeof(LikeBtn) != \"undefined\") {
    LikeBtn.init();
  }
</script>


  <div style=\"text-align:left\" class=\"likebtn_container\">
    <span class=\"likebtn-wrapper\" data-identifier=\"node_54_field_like_index_0\" data-engine=\"drupal\" data-engine_v=\"8.5.3\" data-plugin_v=\"2.4\"  data-theme=\"github\"  data-share_size=\"small\"  data-popup_width=\"173\" ></span>
  </div>

<script>(function(d,e,s){if(d.getElementById(\"likebtn_wjs\"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id=\"likebtn_wjs\";a.src=s;m.parentNode.insertBefore(a, m)})(document,\"script\",\"//w.likebtn.com/js/w/widget.js\");</script>", "");
    }
}
