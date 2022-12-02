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

/* mcp_queue.html */
class __TwigTemplate_311780f6dd451509ea918b6ef7bf324e extends \Twig\Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_queue.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form id=\"mcp\" method=\"post\" action=\"";
        echo ($context["S_MCP_ACTION"] ?? null);
        echo "\">
<div class=\"side-segment\"><h3>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h3></div>
\t<p>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
        echo "</p>
<div class=\"row\">
    
\t<div class=\"col-md-4\">
\t   <fieldset class=\"form-group\">
\t  <div class=\"input-group\">
\t\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"f\" id=\"fo\">";
        // line 10
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select>  
\t\t<span class=\"input-group-btn\">
\t\t<button type=\"submit\" name=\"sort\" class=\"btn btn-default\">";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
        echo "</button>
\t\t</span>
\t\t</div>
\t\t";
        // line 15
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t </fieldset>
   </div>
   
   <div class=\"col-md-8\">
\t\t<ul class=\"pagination pagination-sm pull-right\">
\t\t <li><a>";
        // line 21
        echo ($context["TOTAL"] ?? null);
        echo "</a></li>
\t\t";
        // line 22
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 22))) {
            // line 23
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_queue.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "\t\t";
        } else {
            // line 25
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t\t";
        }
        // line 27
        echo "       </ul>
\t</div>   
   
</div>


";
        // line 33
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 33))) {
            echo "\t
 <div class=\"panel panel-forum\">
\t  <div class=\"panel-heading\">
\t    <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUEUE");
            echo "
\t  </div>
\t <div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
      <thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 42
            if (($context["S_TOPICS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST");
            }
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 43
            if ( !($context["S_TOPICS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
            echo "</th>
\t\t    <th class=\"table-check\">";
            // line 44
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
            echo "</th>
\t\t</tr>
\t  </thead>
\t  <tbody>
\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 49
                echo "
\t\t";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETED_TOPIC", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "\t\t <p>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETED_TOPIC");
                    echo "</p>
\t\t";
                } else {
                    // line 53
                    echo "\t  <tr>
\t\t<td>
\t\t<a href=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_VIEW_DETAILS", [], "any", false, false, false, 55);
                    echo "\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 55);
                    echo "</a><br />
\t\t";
                    // line 56
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 56)) {
                        echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_FORUM");
                        echo "\"></i>";
                    }
                    echo " 
\t\t ";
                    // line 57
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 57);
                    echo "&nbsp;&#45;&nbsp;
\t\t <small>";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_TIME", [], "any", false, false, false, 58);
                    echo "</small>
\t\t</td>
\t\t<td>
\t\t";
                    // line 61
                    if (($context["S_TOPICS"] ?? null)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo "&nbsp;<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_TOPIC", [], "any", false, false, false, 61);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "TOPIC_TITLE", [], "any", false, false, false, 61);
                        echo "</a>";
                    }
                    echo "<br>
\t\t";
                    // line 62
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "&nbsp;<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_VIEWFORUM", [], "any", false, false, false, 62);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "FORUM_NAME", [], "any", false, false, false, 62);
                    echo "</a>
\t\t</td>
\t\t<td class=\"table-check\">
\t\t <div class=\"checker\">
\t\t  ";
                    // line 66
                    if (($context["S_TOPICS"] ?? null)) {
                        // line 67
                        echo "\t\t  <input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "TOPIC_ID", [], "any", false, false, false, 67);
                        echo "\" id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "TOPIC_ID", [], "any", false, false, false, 67);
                        echo "\"><label for=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "TOPIC_ID", [], "any", false, false, false, 67);
                        echo "\"></label>\t\t\t
\t\t  ";
                    } else {
                        // line 69
                        echo "\t\t  <input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 69);
                        echo "\" id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 69);
                        echo "\"><label for=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 69);
                        echo "\"></label>
\t\t  ";
                    }
                    // line 71
                    echo "\t\t </div>
\t\t</td>
\t   </tr>
\t\t";
                }
                // line 75
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t  </tbody>
\t</table>
\t</div>
 </div>
";
        } else {
            // line 81
            echo "\t<div class=\"alert alert-info fade in\">
        <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 82
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFO_BOX");
            echo "</strong>&nbsp;
\t\t";
            // line 83
            if (($context["S_RESTORE"] ?? null)) {
                // line 84
                echo "\t\t\t";
                if (($context["S_TOPICS"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPICS_DELETED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS_DELETED");
                }
                // line 85
                echo "\t\t";
            } else {
                // line 86
                echo "\t\t\t";
                if (($context["S_TOPICS"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPICS_QUEUE");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS_QUEUE");
                }
                // line 87
                echo "\t\t";
            }
            // line 88
            echo "\t</div>
";
        }
        // line 90
        echo "\t
";
        // line 91
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 91))) {
            echo "\t
<!-- // quick and dirtyyyyyyyy for now -->
\t";
            // line 93
            if (($context["TOPIC_ID"] ?? null)) {
                echo "<input type=\"checkbox\" class=\"radio\" name=\"t\" id=\"t\" value=\"";
                echo ($context["TOPIC_ID"] ?? null);
                echo "\" checked=\"checked\"><label class=\"checkbox-inline\" for=\"t\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ONLY_TOPIC");
                echo "</label>";
            }
            // line 94
            echo " <div class=\"space10\"></div>
 <script>
head.ready(function () { 
 \$('#t').on('ifUnchecked', function(event){
\t\$('#mcp').submit();
  });
}); 
 </script>
";
        }
        // line 103
        echo "\t
 <div class=\"clearfix\">
\t";
        // line 105
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 105))) {
            // line 106
            echo "\t<div class=\"pull-left\">
\t <fieldset class=\"display-actions\">
\t\t";
            // line 108
            if (($context["S_RESTORE"] ?? null)) {
                // line 109
                echo "\t\t<div class=\"btn-group\">
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[delete]\" value=\"";
                // line 110
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "\"><i class=\"fa fa-trash-o\"></i></button>
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[restore]\" value=\"";
                // line 111
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "\"><i class=\"fa fa-refresh\"></i></button>
\t\t</div>
\t\t";
            } else {
                // line 114
                echo "\t\t<div class=\"btn-group\">
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[approve]\" id=\"action[approve]\" title=\"";
                // line 115
                echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                echo "\"><i class=\"fa fa-thumbs-up\"></i></button>
\t\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[disapprove]\" id=\"action[disapprove]\" title=\"";
                // line 116
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                echo "\"><i class=\"fa fa-thumbs-down\"></i></button>
\t\t</div>
\t\t";
            }
            // line 119
            echo "
\t\t<div class=\"btn-group\">
\t\t";
            // line 121
            if (($context["S_TOPICS"] ?? null)) {
                // line 122
                echo "\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\" class=\"btn btn-default\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\" class=\"btn btn-default\" title=\"";
                // line 123
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t";
            } else {
                // line 125
                echo "\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'post_id_list', true); return false;\" class=\"btn btn-default\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t\t <a href=\"javascript:void(0);\" onclick=\"marklist('mcp', 'post_id_list', false); return false;\" class=\"btn btn-default\" title=\"";
                // line 126
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t\t";
            }
            // line 128
            echo "\t\t</div>\t
\t </fieldset>
\t</div>
    ";
        }
        // line 132
        echo "\t
\t<ul class=\"pagination pagination-sm pull-right\">
\t <li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
        // line 134
        echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
        echo "</a></li>
\t\t<li><a>";
        // line 135
        echo ($context["TOTAL"] ?? null);
        echo "</a></li>
\t ";
        // line 136
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 136))) {
            // line 137
            echo "\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_queue.html", 137)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 138
            echo "\t ";
        } else {
            // line 139
            echo "\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t ";
        }
        // line 141
        echo "\t</ul>
 </div>
\t
\t<div class=\"space10\"></div>
";
        // line 145
        $location = "display_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("display_options.html", "mcp_queue.html", 145)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 146
        echo "
</form>

";
        // line 149
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_queue.html", 149)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_queue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 149,  458 => 146,  446 => 145,  440 => 141,  434 => 139,  431 => 138,  418 => 137,  416 => 136,  412 => 135,  408 => 134,  404 => 132,  398 => 128,  393 => 126,  388 => 125,  383 => 123,  378 => 122,  376 => 121,  372 => 119,  366 => 116,  362 => 115,  359 => 114,  351 => 111,  345 => 110,  342 => 109,  340 => 108,  336 => 106,  334 => 105,  330 => 103,  319 => 94,  311 => 93,  306 => 91,  303 => 90,  299 => 88,  296 => 87,  289 => 86,  286 => 85,  279 => 84,  277 => 83,  273 => 82,  270 => 81,  263 => 76,  257 => 75,  251 => 71,  241 => 69,  231 => 67,  229 => 66,  217 => 62,  205 => 61,  199 => 58,  193 => 57,  185 => 56,  179 => 55,  175 => 53,  169 => 51,  167 => 50,  164 => 49,  160 => 48,  153 => 44,  146 => 43,  138 => 42,  129 => 36,  123 => 33,  115 => 27,  109 => 25,  106 => 24,  93 => 23,  91 => 22,  87 => 21,  78 => 15,  72 => 12,  67 => 10,  58 => 4,  54 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_queue.html", "");
    }
}
