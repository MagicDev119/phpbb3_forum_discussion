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

/* memberlist_body.html */
class __TwigTemplate_a5ed07f279ac81802391c8d983984de4 extends \Twig\Template
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
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 2
            echo "\t";
            $location = "simple_header_ACP.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header_ACP.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo ($context["S_FORM_NAME"] ?? null);
            echo "\" data-field-name=\"";
            echo ($context["S_FIELD_NAME"] ?? null);
            echo "\">

";
        } elseif (        // line 6
($context["S_SEARCH_USER"] ?? null)) {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "\t
\t";
            // line 8
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 9
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">

";
        } else {
            // line 12
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 12)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 13
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
";
        }
        // line 15
        echo "
\t";
        // line 16
        if (($context["S_SHOW_GROUP"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"side-segment\"><h3";
            if (($context["GROUP_COLOR"] ?? null)) {
                echo " style=\"color:#";
                echo ($context["GROUP_COLOR"] ?? null);
                echo ";\"";
            }
            echo ">";
            echo ($context["GROUP_NAME"] ?? null);
            echo "</h3></div> 
\t\t";
            // line 18
            if (($context["U_MANAGE"] ?? null)) {
                // line 19
                echo "\t\t<p><a class=\"btn btn-sm btn-default\" href=\"";
                echo ($context["U_MANAGE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 21
            echo "\t\t<p>";
            echo ($context["GROUP_DESC"] ?? null);
            echo "&nbsp;";
            echo ($context["GROUP_TYPE"] ?? null);
            echo "</p>
\t\t\t";
            // line 22
            if (($context["AVATAR_IMG"] ?? null)) {
                echo ($context["AVATAR_IMG"] ?? null);
            }
            // line 23
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo ($context["RANK_IMG"] ?? null);
            }
            // line 24
            echo "\t\t\t";
            if (($context["GROUP_RANK"] ?? null)) {
                echo ($context["GROUP_RANK"] ?? null);
            }
            // line 25
            echo "\t";
        } else {
            // line 26
            echo "\t\t<div class=\"side-segment\"><h3>";
            echo ($context["PAGE_TITLE"] ?? null);
            if (($context["SEARCH_WORDS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "&nbsp;<a href=\"";
                echo ($context["U_SEARCH_WORDS"] ?? null);
                echo "\">";
                echo ($context["SEARCH_WORDS"] ?? null);
                echo "</a>";
            }
            echo "</h3></div> 
    <div class=\"clearfix\">
\t\t<div class=\"pull-left\">
            <ul class=\"pagination pagination-sm members-search\">
\t        ";
            // line 30
            if ((($context["U_FIND_MEMBER"] ?? null) &&  !($context["S_SEARCH_USER"] ?? null))) {
                echo "<li class=\"\"><a href=\"";
                echo ($context["U_FIND_MEMBER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "</a></li>";
            } elseif (((($context["S_SEARCH_USER"] ?? null) && ($context["U_HIDE_FIND_MEMBER"] ?? null)) &&  !($context["S_IN_SEARCH_POPUP"] ?? null))) {
                echo "<li class=\"\"><a href=\"";
                echo ($context["U_HIDE_FIND_MEMBER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("HIDE_MEMBER_SEARCH");
                echo "</a></li>";
            }
            // line 31
            echo "\t        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "first_char", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 32
                echo "\t\t\t\t\t<li class=\"\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "U_SORT", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["first_char"], "DESC", [], "any", false, false, false, 32);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t</ul>
\t\t</div> 
\t";
            // line 36
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                // line 37
                echo "\t\t<div class=\"pop-up-search-pagination\">
\t\t\t<ul class=\"pagination pagination-sm pull-right\">
\t\t\t\t <li><a>";
                // line 39
                echo ($context["TOTAL_USERS"] ?? null);
                echo "</a></li>
\t\t\t\t";
                // line 40
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 40))) {
                    // line 41
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "memberlist_body.html", 41)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 42
                    echo "\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t\t<li class=\"active\"><a>";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "</a></li>\t
\t\t\t\t";
                }
                // line 45
                echo "\t\t\t</ul>
\t\t</div>\t
\t";
            }
            // line 48
            echo "\t<script>
\thead.ready(function () {
\t  \$('.members-search a[href=\"' +location.pathname + location.search +'\"]').closest('li').addClass('active');
\t});
\t</script>
\t</div> \t
\t\t<div class=\"space10\"></div> \t
\t";
        }
        // line 56
        echo "\t
\t";
        // line 57
        if (((($context["S_LEADERS_SET"] ?? null) ||  !($context["S_SHOW_GROUP"] ?? null)) ||  !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 57)))) {
            // line 58
            echo "\t<div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-group\"></i>&nbsp;";
            // line 60
            echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERS");
            echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table id=\"memberlist\" class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t   <tr>
\t\t<th data-class=\"expand\"><a href=\"";
            // line 66
            echo ($context["U_SORT_USERNAME"] ?? null);
            echo "\">";
            if ((($context["S_SHOW_GROUP"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 66)))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_LEADER");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            }
            echo "</a>&#44;<a href=\"";
            echo ($context["U_SORT_RANK"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo "</a></th>
\t\t<th data-hide=\"phone\"><a href=\"";
            // line 67
            echo ($context["U_SORT_POSTS"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
            echo "</a></th>
\t\t<th data-hide=\"phone\">";
            // line 68
            echo $this->extensions['phpbb\template\twig\extension']->lang("OTHER");
            echo "</th>
\t\t<th data-hide=\"phone\"><a href=\"";
            // line 69
            echo ($context["U_SORT_JOINED"] ?? null);
            echo "#memberlist\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
            echo "</a></th>
        ";
            // line 70
            if (($context["U_SORT_ACTIVE"] ?? null)) {
                // line 71
                echo "        <th data-hide=\"phone\"><a href=\"";
                echo ($context["U_SORT_ACTIVE"] ?? null);
                echo "#memberlist\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                echo "</a></th>
\t\t";
            }
            // line 73
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 77
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "memberrow", [], "any", false, false, false, 77));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 78
            echo "\t\t";
            if (($context["S_SHOW_GROUP"] ?? null)) {
                // line 79
                echo "\t\t";
                if (( !twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_GROUP_LEADER", [], "any", false, false, false, 79) &&  !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_MEMBER_HEADER", [], "any", false, false, false, 79))) {
                    // line 80
                    echo "\t\t";
                    if ((($context["S_LEADERS_SET"] ?? null) && twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_FIRST_ROW", [], "any", false, false, false, 80))) {
                        // line 81
                        echo "\t\t<tr>
\t\t\t<td colspan=\"";
                        // line 82
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t</tr>
\t\t";
                    }
                    // line 85
                    if (($context["S_LEADERS_SET"] ?? null)) {
                        // line 86
                        echo "\t\t</tbody>
\t\t</table>
\t\t</div>
    </div>
";
                    }
                    // line 91
                    echo "   <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  <i class=\"fa fa-group\"></i>&nbsp;";
                    // line 93
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERS");
                    echo "
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t<thead>
\t<tr>
\t";
                    // line 99
                    if ( !($context["S_LEADERS_SET"] ?? null)) {
                        // line 100
                        echo "\t\t<th data-class=\"expand\"><a href=\"";
                        echo ($context["U_SORT_USERNAME"] ?? null);
                        echo "\">";
                        if (($context["S_SHOW_GROUP"] ?? null)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                        }
                        echo "</a><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        echo "<a href=\"";
                        echo ($context["U_SORT_RANK"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                        echo "</a></span></th>
\t\t<th data-hide=\"phone\"><a href=\"";
                        // line 101
                        echo ($context["U_SORT_POSTS"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo "</a></th>
\t\t<th data-hide=\"phone\">";
                        // line 102
                        echo $this->extensions['phpbb\template\twig\extension']->lang("OTHER");
                        echo "</th>
\t    <th data-hide=\"phone\"><a href=\"";
                        // line 103
                        echo ($context["U_SORT_JOINED"] ?? null);
                        echo "#memberlist\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                        echo "</a></th>
\t\t";
                        // line 104
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            // line 105
                            echo "\t\t<th><a href=\"";
                            echo ($context["U_SORT_ACTIVE"] ?? null);
                            echo "#memberlist\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
                            echo "</a></th>
\t\t";
                        }
                        // line 107
                        echo "\t";
                    } elseif (($context["S_SHOW_GROUP"] ?? null)) {
                        // line 108
                        echo "\t\t<th><i class=\"fa fa-group\"></i>&nbsp;";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th>&nbsp;</th>
\t\t<th>&nbsp;</th>
\t\t<th>&nbsp;</th>
\t\t";
                        // line 112
                        if (($context["U_SORT_ACTIVE"] ?? null)) {
                            echo "<th class=\"active_sort\">&nbsp;</th>";
                        }
                        // line 113
                        echo "\t";
                    }
                    // line 114
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t";
                    // line 117
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 118
                    echo "\t\t";
                }
                // line 119
                echo "\t";
            }
            // line 120
            echo "\t<tr>
\t\t<td>";
            // line 121
            if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
                echo "<span><input type=\"checkbox\" name=\"user\" id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME", [], "any", false, false, false, 121);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME", [], "any", false, false, false, 121);
                echo "\"><label for=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME", [], "any", false, false, false, 121);
                echo "\"></label></span>";
            }
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "USERNAME_FULL", [], "any", false, false, false, 121);
            if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
                echo "&nbsp;&#91;&nbsp;<a style=\"font-weight:bold;border-bottom: 1px dashed #ccc;\" href=\"#\" onclick=\"insert_single_user('#results', '";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "A_USERNAME", [], "any", false, false, false, 121);
                echo "'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT");
                echo "</a>&nbsp;&#93;";
            }
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "S_INACTIVE", [], "any", false, false, false, 121)) {
                echo "&nbsp;&#40;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("INACTIVE");
                echo "&#41;";
            }
            echo "<br>";
            if (twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 121)) {
                echo "<span class=\"rank-img\">";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_IMG", [], "any", false, false, false, 121);
                echo "</span>";
            } else {
                echo "<small>";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "RANK_TITLE", [], "any", false, false, false, 121);
                echo "</small>";
            }
            echo "</td>
\t\t<td>";
            // line 122
            if ((twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 122) && ($context["S_DISPLAY_SEARCH"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "U_SEARCH_USER", [], "any", false, false, false, 122);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 122);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "POSTS", [], "any", false, false, false, 122);
            }
            echo "</td>
\t\t<td>
\t\t<ul class=\"list-inline\" style=\"margin-bottom: 0;\">
\t\t";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 126
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 126)) {
                    // line 127
                    echo "               ";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 127)) {
                        // line 128
                        echo "                <li><a class=\"default-contact\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 128);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_DESC", [], "any", false, false, false, 128);
                        echo "\"><i class=\"icon-moon-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 128);
                        echo "\"></i></a></li>
               ";
                    }
                    // line 129
                    echo "\t\t\t\t
            ";
                }
                // line 131
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t\t</ul>
        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["memberrow"], "custom_fields", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 134
                echo "\t\t ";
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 134)) {
                    // line 135
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 135);
                    echo "&#44;&nbsp;
\t\t ";
                }
                // line 137
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t
\t\t</td>
\t\t<td>";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "JOINED", [], "any", false, false, false, 139);
            echo "</td>
        ";
            // line 140
            if (($context["S_VIEWONLINE"] ?? null)) {
                // line 141
                echo "        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["memberrow"], "LAST_ACTIVE", [], "any", false, false, false, 141);
                echo "</td>
\t    ";
            }
            // line 143
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            echo "\t<tr>
\t\t<td colspan=\"";
            // line 146
            if (($context["S_VIEWONLINE"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t</tbody>
\t</table>
\t </div>
  </div>
";
        // line 153
        if ((($context["S_IN_SEARCH_POPUP"] ?? null) &&  !($context["S_SELECT_SINGLE"] ?? null))) {
            // line 154
            echo "<div class=\"pull-left\">
\t<fieldset>
\t<div class=\"btn-group\">
\t<a href=\"javascript:;\" onclick=\"marklist('results', 'user', true); return false;\" class=\"btn btn-default\" title=\"";
            // line 157
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "\"><i class=\"fa fa-check-square-o\"></i></a>
\t<a href=\"javascript:;\" onclick=\"marklist('results', 'user', false); return false;\" class=\"btn btn-default\" title=\"";
            // line 158
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "\"><i class=\"fa fa-square-o\"></i></a>
\t</div>
\t<button class=\"btn btn-default\" type=\"submit\" title=\"";
            // line 160
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_MARKED");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_MARKED");
            echo "</button>
    </fieldset>
</div>
<div class=\"space10\"></div>
<div class=\"space10\"></div>
";
        }
        // line 166
        echo "
";
        // line 167
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 168
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 169
            echo ($context["S_MODE_ACTION"] ?? null);
            echo "\">
";
        }
        // line 171
        echo "
";
        // line 172
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 173
            echo "<div class=\"clearfix\">
\t<div class=\"pull-left\">
\t<label class=\"sr-only\" for=\"sk\">";
            // line 175
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_SORT_METHOD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label> 
\t\t<div class=\"control-row\">
\t\t <div class=\"input-group\">
\t\t\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"sk\" id=\"sk\">";
            // line 178
            echo ($context["S_MODE_SELECT"] ?? null);
            echo "</select>
\t\t\t<select class=\"selectpicker\" data-container=\"body\" data-width=\"auto\" data-style=\"btn btn-default form-control\" name=\"sd\" id=\"sd\">";
            // line 179
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select> 
\t\t   <div class=\"input-group-btn\">\t
\t\t\t<button type=\"submit\" name=\"sort\" value=\"";
            // line 181
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" class=\"btn btn-default\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "</button>
\t\t   </div>
\t\t </div>\t
\t\t</div>
\t</div>
\t<div class=\"pop-up-search-pagination\">
\t\t<ul class=\"pagination pagination-sm pull-right pagination-bottom\">
\t\t\t    <li><a>";
            // line 188
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 189
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 189))) {
                // line 190
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 190)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 191
                echo "\t\t\t";
            } else {
                // line 192
                echo "\t\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t\t";
            }
            // line 194
            echo "\t\t</ul>
\t</div>
</div>\t\t
";
        }
        // line 198
        echo "
</form>


";
        // line 202
        if (($context["S_IN_SEARCH_POPUP"] ?? null)) {
            // line 203
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 203)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 205
            echo "<div class=\"row\">
<div class=\"col-md-4\">
";
            // line 207
            $location = "jumpbox_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox_options.html", "memberlist_body.html", 207)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 208
            echo "</div>

<div class=\"col-md-8\">
    <ul class=\"pagination pagination-sm pull-right pagination-bottom\">
\t\t <li><a>";
            // line 212
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</a></li>
\t\t";
            // line 213
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 213))) {
                // line 214
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 214)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 215
                echo "\t\t";
            } else {
                // line 216
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 218
            echo "    </ul>
</div>\t
</div>

";
            // line 222
            $location = "jump_links.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jump_links.html", "memberlist_body.html", 222)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 223
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 223)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 223,  810 => 222,  804 => 218,  798 => 216,  795 => 215,  782 => 214,  780 => 213,  776 => 212,  770 => 208,  758 => 207,  754 => 205,  740 => 203,  738 => 202,  732 => 198,  726 => 194,  720 => 192,  717 => 191,  704 => 190,  702 => 189,  698 => 188,  686 => 181,  681 => 179,  677 => 178,  670 => 175,  666 => 173,  664 => 172,  661 => 171,  656 => 169,  653 => 168,  651 => 167,  648 => 166,  637 => 160,  632 => 158,  628 => 157,  623 => 154,  621 => 153,  615 => 149,  600 => 146,  597 => 145,  591 => 143,  585 => 141,  583 => 140,  579 => 139,  570 => 137,  564 => 135,  561 => 134,  557 => 133,  554 => 132,  548 => 131,  544 => 129,  534 => 128,  531 => 127,  528 => 126,  524 => 125,  508 => 122,  473 => 121,  470 => 120,  467 => 119,  464 => 118,  461 => 117,  456 => 114,  453 => 113,  449 => 112,  441 => 108,  438 => 107,  430 => 105,  428 => 104,  422 => 103,  418 => 102,  412 => 101,  395 => 100,  393 => 99,  384 => 93,  380 => 91,  373 => 86,  371 => 85,  361 => 82,  358 => 81,  355 => 80,  352 => 79,  349 => 78,  343 => 77,  337 => 73,  329 => 71,  327 => 70,  321 => 69,  317 => 68,  311 => 67,  297 => 66,  288 => 60,  284 => 58,  282 => 57,  279 => 56,  269 => 48,  264 => 45,  258 => 43,  255 => 42,  242 => 41,  240 => 40,  236 => 39,  232 => 37,  230 => 36,  226 => 34,  215 => 32,  210 => 31,  196 => 30,  180 => 26,  177 => 25,  172 => 24,  167 => 23,  163 => 22,  156 => 21,  148 => 19,  146 => 18,  135 => 17,  133 => 16,  130 => 15,  124 => 13,  111 => 12,  104 => 9,  92 => 8,  77 => 7,  75 => 6,  65 => 4,  52 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_body.html", "");
    }
}
