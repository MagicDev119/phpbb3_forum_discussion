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

/* memberlist_search.html */
class __TwigTemplate_da651a481abf33650ad681b3f80dedb8 extends \Twig\Template
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
        echo "<div class=\"side-segment\"><h3>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
        echo "</h3></div>
<form method=\"post\" action=\"";
        // line 2
        echo ($context["S_MODE_ACTION"] ?? null);
        echo "\" id=\"search_memberlist\">
<div class=\"clearfix\">
<div class=\"well\">
 <p>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME_EXPLAIN");
        echo "</p>
";
        // line 6
        // line 7
        echo "\t
<div class=\"row\">
\t<div class=\"col-md-6\">
\t<fieldset>
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\"";
        // line 14
        if (($context["U_LIVE_SEARCH"] ?? null)) {
            echo " autocomplete=\"off\" data-filter=\"phpbb.search.filter\" data-ajax=\"member_search\" data-min-length=\"3\" data-url=\"";
            echo ($context["U_LIVE_SEARCH"] ?? null);
            echo "\" data-results=\"#user-search\"";
        }
        echo " placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\" name=\"username\" id=\"username\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\">
\t";
        // line 15
        if (($context["U_LIVE_SEARCH"] ?? null)) {
            // line 16
            echo "\t\t<div class=\"dropdown live-search hidden\" id=\"user-search\">
\t\t\t<ul class=\"list-unstyled dropdown-contents search-results\">
\t\t\t\t<li class=\"search-result-tpl\"><span class=\"search-result\"></span></li>
\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 21
        echo "\t\t\t
\t</div> 
\t</div>
\t
\t";
        // line 25
        if (($context["S_EMAIL_SEARCH_ALLOWED"] ?? null)) {
            // line 26
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"email\">";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL");
            echo "\" name=\"email\" id=\"email\" value=\"";
            echo ($context["EMAIL"] ?? null);
            echo "\">
\t</div> 
\t</div>
\t";
        }
        // line 33
        echo "\t
\t";
        // line 34
        if (($context["S_JABBER_ENABLED"] ?? null)) {
            // line 35
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"jabber\">";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_JABBER");
            echo "\" name=\"jabber\" id=\"jabber\" value=\"";
            echo ($context["JABBER"] ?? null);
            echo "\">
\t</div> 
\t</div>
\t";
        }
        // line 42
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"joined\">";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
\t\t<select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" name=\"joined_select\">";
        // line 46
        echo ($context["S_JOINED_TIME_OPTIONS"] ?? null);
        echo "</select>
\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 47
        echo $this->extensions['phpbb\template\twig\extension']->lang("YEAR_MONTH_DAY_PLACEHOLDER");
        echo "\" name=\"joined\" id=\"joined\" value=\"";
        echo ($context["JOINED"] ?? null);
        echo "\">
\t</div>
\t</div>
\t
\t";
        // line 51
        if (($context["S_IP_SEARCH_ALLOWED"] ?? null)) {
            // line 52
            echo "    <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"ip\">";
            // line 53
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_IP");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 55
            echo $this->extensions['phpbb\template\twig\extension']->lang("IP_PLACEHOLDER");
            echo "\" name=\"ip\" id=\"ip\" value=\"";
            echo ($context["IP"] ?? null);
            echo "\">
\t</div> 
\t</div>
    ";
        }
        // line 59
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"search_group_id\">";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
      <select class=\"selectpicker\" name=\"search_group_id\" id=\"search_group_id\">";
        // line 63
        echo ($context["S_GROUP_SELECT"] ?? null);
        echo "</select>
\t</div> 
\t</div>
\t
\t</fieldset>
    </div>
\t
\t<div class=\"col-md-6\">
\t<fieldset>
\t
\t";
        // line 73
        if (($context["S_VIEWONLINE"] ?? null)) {
            // line 74
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"active\">";
            // line 75
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
\t\t<select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" name=\"active_select\">";
            // line 77
            echo ($context["S_ACTIVE_TIME_OPTIONS"] ?? null);
            echo "</select>
\t\t<input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 78
            echo $this->extensions['phpbb\template\twig\extension']->lang("YEAR_MONTH_DAY_PLACEHOLDER");
            echo "\" name=\"active\" id=\"active\" value=\"";
            echo ($context["ACTIVE"] ?? null);
            echo "\">
\t</div>
\t</div>
\t";
        }
        // line 82
        echo "
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"count\">";
        // line 84
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
\t\t<select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" name=\"count_select\">";
        // line 86
        echo ($context["S_COUNT_OPTIONS"] ?? null);
        echo "</select>
\t\t<input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
        // line 87
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_PLACEHOLDER");
        echo "\" name=\"count\" id=\"count\" value=\"";
        echo ($context["COUNT"] ?? null);
        echo "\">
\t</div>
\t</div>

\t";
        // line 91
        // line 92
        echo "\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"sk\">";
        // line 94
        echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
      <select class=\"selectpicker\" data-width=\"auto\" name=\"sk\" id=\"sk\">";
        // line 96
        echo ($context["S_SORT_OPTIONS"] ?? null);
        echo "</select>
\t</div> 
\t</div>
\t
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"sk\">";
        // line 101
        echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t<div class=\"input-group col-md-12 col-sm-12 col-xs-12\">
      <select class=\"selectpicker\" data-width=\"auto\" name=\"sd\">";
        // line 103
        echo ($context["S_ORDER_SELECT"] ?? null);
        echo "</select>
\t</div> 
\t</div>
\t
\t";
        // line 107
        // line 108
        echo "\t
\t</fieldset>
\t</div>
</div>
\t

</div>
\t<fieldset class=\"form-actions\">
\t\t<button type=\"submit\" name=\"submit\" value=\"";
        // line 116
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
        echo "\" class=\"btn btn-default\" data-loading-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCHING");
        echo " <i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
        echo "</button>
\t\t";
        // line 117
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</div>
</form>
<div class=\"space10\"></div>";
    }

    public function getTemplateName()
    {
        return "memberlist_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 117,  293 => 116,  283 => 108,  282 => 107,  275 => 103,  269 => 101,  261 => 96,  255 => 94,  251 => 92,  250 => 91,  241 => 87,  237 => 86,  231 => 84,  227 => 82,  218 => 78,  214 => 77,  208 => 75,  205 => 74,  203 => 73,  190 => 63,  184 => 61,  180 => 59,  171 => 55,  165 => 53,  162 => 52,  160 => 51,  151 => 47,  147 => 46,  141 => 44,  137 => 42,  128 => 38,  122 => 36,  119 => 35,  117 => 34,  114 => 33,  105 => 29,  99 => 27,  96 => 26,  94 => 25,  88 => 21,  80 => 16,  78 => 15,  66 => 14,  60 => 12,  53 => 7,  52 => 6,  48 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_search.html", "");
    }
}
