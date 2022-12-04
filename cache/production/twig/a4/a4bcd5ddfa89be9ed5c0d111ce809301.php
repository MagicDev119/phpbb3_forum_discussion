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

/* pagination_mobile.html */
class __TwigTemplate_19e0553b6195868ace5775fc19e89e62 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
            // line 2
            echo "<li>
<!-- Popover pagination hidden content -->
  <div class=\"pagination_content\" style=\"display: none\">
      <div class=\"page-jump-form\">
\t\t<div class=\"input-group input-group-sm\">
\t\t <input type=\"number\" class=\"inputbox form-control\" onkeypress=\"keyPage(this, event)\" title=\"";
            // line 7
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_PAGE");
            echo "\" data-per-page=\"";
            echo ($context["PER_PAGE"] ?? null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html_attr");
            echo "\" data-start-name=\"";
            echo ($context["START_NAME"] ?? null);
            echo "\" min=\"1\" max=\"999999\"/>
\t\t<div class=\"input-group-btn\">
\t\t <input type=\"button\" class=\"btn btn-default btn-sm\" value=\"";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" onclick=\"pageJump(\$(this.parentNode.parentNode).find('.inputbox'))\" />
\t\t</div>
\t\t</div>
\t\t</div>\t
  </div>  
  <!-- Popover pagination hidden title -->
  <div class=\"pagination_header\" style=\"display: none\">
     ";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_PAGE_NUMBER");
            echo "
  </div>
</li>
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
    \$(function(){
    // Enabling Popover pagination - JS (hidden content and title capturing)
    \$(\".pagination-trigger\").popover({
        sanitize: false,
\t\thtml : true,\t\t
        content: function() {
          return \$('.pagination_content').html();
        },
        title: function() {
          return \$('.pagination_header').html();
        }
    });
    });
});
</script>
";
        }
        // line 38
        echo "
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 40
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 40)) {
                // line 41
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 41);
                echo "\" rel=\"prev\" role=\"button\"><i class=\"fa fa-chevron-left\"></i></a></li>
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 42
$context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t<li class=\"active\"><a>";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 43);
                echo "</a></li>
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 44
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 44)) {
                // line 45
                echo "\t<li class=\"ellipsis\" role=\"separator\"><a>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                echo "</a></li>
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 46
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 46)) {
                // line 47
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 47);
                echo "\" rel=\"next\" role=\"button\"><i class=\"fa fa-chevron-right\"></i></a></li>
\t";
            } else {
                // line 49
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 49);
                echo "\" role=\"button\">";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 49);
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "pagination_mobile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 52,  129 => 49,  123 => 47,  121 => 46,  116 => 45,  114 => 44,  109 => 43,  107 => 42,  102 => 41,  99 => 40,  95 => 39,  92 => 38,  67 => 16,  57 => 9,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pagination_mobile.html", "");
    }
}
