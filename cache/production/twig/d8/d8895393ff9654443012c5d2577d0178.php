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

/* pagination.html */
class __TwigTemplate_19c64de015c15d654acd40bd39c6cff5 extends \Twig\Template
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
            echo "<li><a class=\"pagination-trigger\">";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>
<li class=\"pagination_wrapper\" style=\"display:none\">  
  <div class=\"pagination_header\">
\t";
            // line 5
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_PAGE_NUMBER");
            echo "
  </div> 
  <div class=\"pagination_content\">
      <div class=\"page-jump-form\">
\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t<input type=\"number\" class=\"inputbox form-control\" onkeypress=\"keyPage(this, event)\" title=\"";
            // line 10
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_PAGE");
            echo "\" data-per-page=\"";
            echo ($context["PER_PAGE"] ?? null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html_attr");
            echo "\" data-start-name=\"";
            echo ($context["START_NAME"] ?? null);
            echo "\" min=\"1\" max=\"999999\" />
\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-default btn-sm\" value=\"";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" onclick=\"pageJump(\$(this.parentNode.parentNode).find('.inputbox'))\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
  </div>    
</li>
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
    \$(function(){
    // Enabling Popover pagination - JS (hidden content and title capturing)
    \$(\".pagination-trigger\").popover({
        sanitize: false,
\t\thtml : true, 
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
        // line 37
        echo "
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 39
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 39)) {
                // line 40
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 40);
                echo "\" rel=\"prev\" role=\"button\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIOUS");
                echo "</a></li>
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 41
$context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 41)) {
                // line 42
                echo "\t<li class=\"active\"><a>";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 42);
                echo "</a></li>
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 43
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 43)) {
                // line 44
                echo "\t<li class=\"ellipsis\" role=\"separator\"><a>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                echo "</a></li>
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 45
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 45)) {
                // line 46
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 46);
                echo "\" rel=\"next\" role=\"button\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT");
                echo "</a></li>
\t";
            } else {
                // line 48
                echo "\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 48);
                echo "\" role=\"button\">";
                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 48);
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 51,  134 => 48,  126 => 46,  124 => 45,  119 => 44,  117 => 43,  112 => 42,  110 => 41,  103 => 40,  100 => 39,  96 => 38,  93 => 37,  65 => 12,  54 => 10,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pagination.html", "");
    }
}
