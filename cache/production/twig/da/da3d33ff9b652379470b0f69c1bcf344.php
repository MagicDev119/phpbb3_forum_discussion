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

/* mcp_front.html */
class __TwigTemplate_a0ec23dabb1e47188258ef0778370501 extends \Twig\Template
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
        $this->loadTemplate("mcp_header.html", "mcp_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"tab-pane active\">


";
        // line 5
        echo "  
";
        // line 6
        if (($context["S_SHOW_UNAPPROVED"] ?? null)) {
            // line 7
            echo "<form id=\"mcp_queue\" method=\"post\" action=\"";
            echo ($context["S_MCP_QUEUE_ACTION"] ?? null);
            echo "\">
\t<div class=\"side-segment\"><h3>";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_UNAPPROVED");
            echo "</h3></div>
\t\t
\t ";
            // line 10
            if (($context["S_HAS_UNAPPROVED_POSTS"] ?? null)) {
                echo "<p>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNAPPROVED_TOTAL");
                echo "</p>";
            }
            // line 11
            echo "
\t";
            // line 12
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "unapproved", [], "any", false, false, false, 12))) {
                echo "\t
 <div class=\"panel panel-forum\">
   <div class=\"panel-heading\">
\t <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 15
                echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_UNAPPROVED");
                echo "
\t</div>
\t<div class=\"panel-inner\">
    <table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_DETAILS");
                echo "</th>
\t\t\t<th data-hide=\"phone\">";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo "&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo "</th>
\t\t\t<th data-hide=\"phone\">";
                // line 23
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "unapproved", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["unapproved"]) {
                    // line 28
                    echo "\t    <tr>
\t\t\t<td>
\t\t\t    <a href=\"";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "U_POST_DETAILS", [], "any", false, false, false, 30);
                    echo "\" class=\"topictitle\">&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "SUBJECT", [], "any", false, false, false, 30);
                    echo "</a>";
                    if (twig_get_attribute($this->env, $this->source, $context["unapproved"], "ATTACH_ICON_IMG", [], "any", false, false, false, 30)) {
                        echo "&nbsp;<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_FORUM");
                        echo "\"></i>";
                    }
                    echo "<br />
\t\t\t    ";
                    // line 31
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "AUTHOR_FULL", [], "any", false, false, false, 31);
                    echo "&nbsp;&#45;&nbsp;<small>";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "POST_TIME", [], "any", false, false, false, 31);
                    echo "</small>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                    // line 34
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "&nbsp;<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "U_TOPIC", [], "any", false, false, false, 34);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "TOPIC_TITLE", [], "any", false, false, false, 34);
                    echo "</a>&nbsp;&#91;<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "U_MCP_TOPIC", [], "any", false, false, false, 34);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE");
                    echo "</a>&#93;<br />
\t\t\t\t";
                    // line 35
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "&nbsp;";
                    if (twig_get_attribute($this->env, $this->source, $context["unapproved"], "U_FORUM", [], "any", false, false, false, 35)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "U_FORUM", [], "any", false, false, false, 35);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "FORUM_NAME", [], "any", false, false, false, 35);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "FORUM_NAME", [], "any", false, false, false, 35);
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["unapproved"], "U_MCP_FORUM", [], "any", false, false, false, 35)) {
                        echo " [<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "U_MCP_FORUM", [], "any", false, false, false, 35);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE");
                        echo "</a>]";
                    }
                    // line 36
                    echo "\t\t\t</td>
\t\t\t<td><input type=\"checkbox\" id=\"un-";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "POST_ID", [], "any", false, false, false, 37);
                    echo "\" name=\"post_id_list[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "POST_ID", [], "any", false, false, false, 37);
                    echo "\"><label for=\"un-";
                    echo twig_get_attribute($this->env, $this->source, $context["unapproved"], "POST_ID", [], "any", false, false, false, 37);
                    echo "\"></label></td>
\t\t</tr>\t\t\t
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unapproved'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t</tbody>
\t</table>
\t</div>
\t</div>
\t";
            } else {
                // line 45
                echo "\t<div class=\"alert alert-info fade in\">
        <i class=\"fa fa-warning\"></i>&nbsp;<strong>";
                // line 46
                echo $this->extensions['phpbb\template\twig\extension']->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_UNAPPROVED_POSTS_ZERO");
                echo "
     </div> 
\t";
            }
            // line 49
            echo "\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "

";
            // line 51
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "unapproved", [], "any", false, false, false, 51))) {
                // line 52
                echo "<div class=\"clearfix\">
\t<div class=\"pull-left\">
\t<fieldset>
\t";
                // line 55
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t<div class=\"btn-group\">
\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[approve]\" id=\"action[approve]\" value=\"";
                // line 57
                echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                echo "\" title=\"\" data-original-title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                echo "\"><i class=\"fa fa-thumbs-up\"></i></button>
\t <button class=\"btn btn-default\" type=\"submit\" name=\"action[disapprove]\" id=\"action[disapprove]\" value=\"";
                // line 58
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                echo "\" title=\"\" data-original-title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                echo "\"><i class=\"fa fa-thumbs-down\"></i></button>
\t</div>
\t
\t<div class=\"btn-group\">
\t<a href=\"javascript:;\" onclick=\"marklist('mcp_queue', 'post_id_list', true); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
                // line 62
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
                echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:;\" onclick=\"marklist('mcp_queue', 'post_id_list', false); return false;\" class=\"btn btn-default\" title=\"\" data-original-title=\"";
                // line 63
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
                echo "\"><i class=\"fa fa-square-o\"></i></a>
\t</div>
    </fieldset>
\t</div>
</div>
";
            }
            // line 69
            echo "</form>
<div class=\"space10\"></div>
 <div class=\"space10\"></div>
";
        }
        // line 73
        echo "

";
        // line 75
        // line 76
        if (($context["S_SHOW_REPORTS"] ?? null)) {
            // line 77
            echo "  <div class=\"space10\"></div>
   <div class=\"space10\"></div>
\t<div class=\"side-segment\"><h3>";
            // line 79
            echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_REPORTED");
            echo "</h3></div>
\t\t";
            // line 80
            if (($context["S_HAS_REPORTS"] ?? null)) {
                echo "<p>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTS_TOTAL");
                echo "</p>";
            }
            // line 81
            echo "
\t";
            // line 82
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "report", [], "any", false, false, false, 82))) {
                // line 83
                echo "\t <div class=\"panel panel-forum\">
\t <div class=\"panel-heading\">
\t <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 85
                echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_REPORTED");
                echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 91
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_DETAILS");
                echo "</th>
\t\t\t<th data-hide=\"phone\">";
                // line 92
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTER");
                echo "&nbsp;&amp;&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "report", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 97
                    echo "\t\t\t <tr>
\t\t\t\t<td>
\t\t\t\t<a href=\"";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "U_POST_DETAILS", [], "any", false, false, false, 99);
                    echo "#reports\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "SUBJECT", [], "any", false, false, false, 99);
                    echo "</a>";
                    if (twig_get_attribute($this->env, $this->source, $context["report"], "ATTACH_ICON_IMG", [], "any", false, false, false, 99)) {
                        echo "&nbsp;<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_FORUM");
                        echo "\"></i>";
                    }
                    echo "<br />
\t\t\t\t";
                    // line 100
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "AUTHOR_FULL", [], "any", false, false, false, 100);
                    echo "&nbsp;&#45;&nbsp;<small>&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "POST_TIME", [], "any", false, false, false, 100);
                    echo "</small>
\t\t\t\t</td>
\t\t\t
\t\t\t\t<td class=\"center\">
\t\t\t\t";
                    // line 104
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED");
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "REPORTER_FULL", [], "any", false, false, false, 104);
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_ON_DATE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "&nbsp;<small>";
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "REPORT_TIME", [], "any", false, false, false, 104);
                    echo "</small> <br />
\t\t\t\t";
                    // line 105
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "&nbsp;<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "U_FORUM", [], "any", false, false, false, 105);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["report"], "FORUM_NAME", [], "any", false, false, false, 105);
                    echo "</a>
\t\t\t\t</td>
\t\t     </tr>\t
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "\t</tbody>
\t</table>
\t</div>
\t</div>
\t";
            } else {
                // line 114
                echo "\t<div class=\"alert alert-info fade in\">
        <i class=\"fa fa-warning\"></i>&nbsp;<strong>";
                // line 115
                echo $this->extensions['phpbb\template\twig\extension']->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_REPORTS_ZERO");
                echo "
    </div> 
\t";
            }
        }
        // line 119
        echo "

";
        // line 121
        // line 122
        if (($context["S_SHOW_PM_REPORTS"] ?? null)) {
            // line 123
            echo "\t\t<div class=\"side-segment\"><h3>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_REPORTED_PMS");
            echo "</h3></div>
\t\t";
            // line 124
            if (($context["S_HAS_PM_REPORTS"] ?? null)) {
                echo "<p>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PM_REPORTS_TOTAL");
                echo "</p>";
            }
            // line 125
            echo "
";
            // line 126
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pm_report", [], "any", false, false, false, 126))) {
                // line 127
                echo " <div class=\"panel panel-forum\">
    <div class=\"panel-heading\">
\t <i class=\"fa fa-bolt\"></i>&nbsp;";
                // line 129
                echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_REPORTED_PMS");
                echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 135
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_DETAILS");
                echo "</th>
\t\t\t<th data-hide=\"phone\">";
                // line 136
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTER");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pm_report", [], "any", false, false, false, 140));
                foreach ($context['_seq'] as $context["_key"] => $context["pm_report"]) {
                    // line 141
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t<a href=\"";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["pm_report"], "U_PM_DETAILS", [], "any", false, false, false, 143);
                    echo "\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["pm_report"], "PM_SUBJECT", [], "any", false, false, false, 143);
                    echo "</a>";
                    if (twig_get_attribute($this->env, $this->source, $context["pm_report"], "ATTACH_ICON_IMG", [], "any", false, false, false, 143)) {
                        echo "&nbsp;<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_FORUM");
                        echo "\"></i>";
                    }
                    echo "<br />
\t\t\t";
                    // line 144
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_BY_AUTHOR");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["pm_report"], "PM_AUTHOR_FULL", [], "any", false, false, false, 144);
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_TO");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["pm_report"], "RECIPIENTS", [], "any", false, false, false, 144);
                    echo "&nbsp;&#45;
\t\t\t<small>";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["pm_report"], "PM_TIME", [], "any", false, false, false, 145);
                    echo "</small>
\t\t\t</td>
\t\t\t
\t\t\t<td class=\"center\">
\t\t\t";
                    // line 149
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED");
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["pm_report"], "REPORTER_FULL", [], "any", false, false, false, 149);
                    echo " 
\t\t\t<br />";
                    // line 150
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_ON_DATE");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "&nbsp;<small>";
                    echo twig_get_attribute($this->env, $this->source, $context["pm_report"], "REPORT_TIME", [], "any", false, false, false, 150);
                    echo "</small>
\t\t\t</td>
\t\t</tr>\t
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "\t\t</tbody>
\t</table>
\t</div>
\t</div>
\t";
            } else {
                // line 159
                echo "\t<div class=\"alert alert-info fade in\">
        <i class=\"fa fa-warning\"></i>&nbsp;<strong>";
                // line 160
                echo $this->extensions['phpbb\template\twig\extension']->lang("INFO_BOX");
                echo "</strong>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_PM_REPORTS_ZERO");
                echo "
     </div> 
\t";
            }
        }
        // line 164
        echo "

";
        // line 166
        // line 167
        if (($context["S_SHOW_LOGS"] ?? null)) {
            // line 168
            echo "  <div class=\"space10\"></div>
\t<div class=\"side-segment\"><h3>";
            // line 169
            echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_LOGS");
            echo "</h3></div>
 <div class=\"panel panel-forum\">
    <div class=\"panel-heading\">
\t <i class=\"fa fa-bolt\"></i>&nbsp;";
            // line 172
            echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_LOGS");
            echo "
\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
            // line 178
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
            echo "</th>
\t\t\t<th class=\"large23\" data-hide=\"phone\">";
            // line 179
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_DETAIL_U_IP");
            echo "</th>
\t\t\t<th data-hide=\"phone\">";
            // line 180
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_DETAILS_LOG");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "log", [], "any", false, false, false, 184));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 185
                echo "\t\t<tr>
\t\t\t<td>";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["log"], "ACTION", [], "any", false, false, false, 186);
                echo "</td>
\t\t\t<td>";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["log"], "USERNAME", [], "any", false, false, false, 187);
                echo "<br>";
                echo twig_get_attribute($this->env, $this->source, $context["log"], "IP", [], "any", false, false, false, 187);
                echo "<br><small>";
                echo twig_get_attribute($this->env, $this->source, $context["log"], "TIME", [], "any", false, false, false, 187);
                echo "</small></td>
\t\t\t<td>
\t\t\t";
                // line 189
                if (twig_get_attribute($this->env, $this->source, $context["log"], "U_VIEW_TOPIC", [], "any", false, false, false, 189)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["log"], "U_VIEW_TOPIC", [], "any", false, false, false, 189);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPIC");
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPIC");
                    echo "</a>";
                }
                echo "<br>
\t\t\t";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["log"], "U_VIEWLOGS", [], "any", false, false, false, 190)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["log"], "U_VIEWLOGS", [], "any", false, false, false, 190);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPIC_LOGS");
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPIC_LOGS");
                    echo "</a>";
                }
                // line 191
                echo "\t\t\t</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 194
                echo "\t\t<tr>
\t\t\t<td colspan=\"0\">";
                // line 195
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_ENTRIES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "\t\t</tbody>
\t</table>
\t</div>
</div>
";
        }
        // line 203
        // line 204
        echo "
</div>
";
        // line 206
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_front.html", 206)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 206,  623 => 204,  622 => 203,  615 => 198,  606 => 195,  603 => 194,  596 => 191,  586 => 190,  574 => 189,  565 => 187,  561 => 186,  558 => 185,  553 => 184,  546 => 180,  542 => 179,  538 => 178,  529 => 172,  523 => 169,  520 => 168,  518 => 167,  517 => 166,  513 => 164,  504 => 160,  501 => 159,  494 => 154,  481 => 150,  473 => 149,  466 => 145,  456 => 144,  444 => 143,  440 => 141,  436 => 140,  429 => 136,  425 => 135,  416 => 129,  412 => 127,  410 => 126,  407 => 125,  401 => 124,  396 => 123,  394 => 122,  393 => 121,  389 => 119,  380 => 115,  377 => 114,  370 => 109,  355 => 105,  342 => 104,  331 => 100,  319 => 99,  315 => 97,  311 => 96,  302 => 92,  298 => 91,  289 => 85,  285 => 83,  283 => 82,  280 => 81,  274 => 80,  270 => 79,  266 => 77,  264 => 76,  263 => 75,  259 => 73,  253 => 69,  244 => 63,  240 => 62,  231 => 58,  225 => 57,  220 => 55,  215 => 52,  213 => 51,  207 => 49,  199 => 46,  196 => 45,  189 => 40,  176 => 37,  173 => 36,  153 => 35,  140 => 34,  130 => 31,  118 => 30,  114 => 28,  110 => 27,  103 => 23,  97 => 22,  93 => 21,  84 => 15,  78 => 12,  75 => 11,  69 => 10,  64 => 8,  59 => 7,  57 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_front.html", "");
    }
}
