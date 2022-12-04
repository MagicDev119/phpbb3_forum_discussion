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

/* viewtopic_body.html */
class __TwigTemplate_cdef8c82d305681fd5b06b10eec5be28 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "<div class=\"side-segment\"><h3>";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h3></div>
<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 6
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 7
        // line 8
        echo "
";
        // line 9
        if (($context["MODERATORS"] ?? null)) {
            // line 10
            echo "<p>
\t<strong>";
            // line 11
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong>&nbsp;";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 14
        echo "
";
        // line 15
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 16
            echo "<div class=\"alert alert-info fade in\">
\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t";
            // line 18
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 19
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\"><i class=\"fa fa-link fa-rotate-90\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo " 
\t\t<strong>";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong>&nbsp;";
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "</div>
";
        }
        // line 25
        echo "
<div class=\"row\">
<div class=\"col-md-4 col-xs-6\">
";
        // line 28
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 29
            echo "  <div class=\"pull-left\">
\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 30
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t <fieldset>
\t<div class=\"input-group input-group-sm\">
      <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TOPIC");
            echo "\">
      <div class=\"input-group-btn\">
        <button class=\"btn btn-default\" type=\"submit\" value=\"";
            // line 35
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\"><span class=\"hidden-xs\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
\t  </div>
    </div>
\t ";
            // line 38
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t</fieldset>
    </form>
   </div>
";
        }
        // line 43
        echo "</div>

<div class=\"col-md-8\">
  <div class=\"pull-right\">\t 
     <ul class=\"pagination pagination-sm hidden-xs\">
\t\t <li class=\"active\"><a>";
        // line 48
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</a></li>
\t\t ";
        // line 49
        if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li><a href=\"";
            echo ($context["U_VIEW_UNREAD_POST"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_UNREAD_POST");
            echo "</a></li>";
        }
        // line 50
        echo "\t\t";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 50)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 51
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 51)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 52
            echo "\t\t";
        } else {
            // line 53
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t\t";
        }
        // line 55
        echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
        // line 59
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 59)) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 60
            echo "\t";
            if ((($context["TOTAL_POSTS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                echo "<li class=\"active\"><a>";
                echo ($context["TOTAL_POSTS"] ?? null);
                echo "</a></li>";
            } elseif ((($context["TOTAL_TOPICS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                echo "<li class=\"active\"><a>";
                echo ($context["TOTAL_TOPICS"] ?? null);
                echo "</a></li>";
            }
            // line 61
            echo "\t";
        }
        // line 62
        echo "\t</ul>
\t</div>
  </div>
</div> 

</div>

";
        // line 69
        // line 70
        echo "<div class=\"clearfix\">
    <div class=\"pull-left\">
   \t";
        // line 72
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 73
            echo "\t ";
            // line 74
            echo "\t";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 75
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 77
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY");
                echo "</a>
    ";
            }
            // line 79
            echo "\t ";
            // line 80
            echo "\t";
        }
        // line 81
        echo "   </div>
   <div class=\"pull-right\">
    ";
        // line 83
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 84
        echo "   </div>
</div>
";
        // line 86
        // line 87
        echo "
<div class=\"space10\"></div>
 <div class=\"space10\"></div>

";
        // line 91
        // line 92
        echo " 
";
        // line 93
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 94
            echo "<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" data-refresh=\"true\" class=\"topic_poll\">
<fieldset>
<div class=\"panel panel-default panel-poll\">
 <div class=\"panel-heading\">
    <h3>";
            // line 98
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h3>
\t";
            // line 99
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                // line 100
                echo "\t<div class=\"alert alert-info fade in\">
     <i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 101
                echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_LENGTH");
                echo "
    </div>
\t";
            }
            // line 104
            echo " </div>
<div class=\"panel-body\">
<div class=\"inner\">
";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "poll_option", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 108
                // line 109
                echo "<div class=\"clearfix";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 109)) {
                    echo " voted";
                }
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_MOST_VOTES", [], "any", false, false, false, 109)) {
                    echo " most-votes";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 109)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 109);
                echo "\">
<div class=\"pull-left\">
";
                // line 111
                if (($context["S_CAN_VOTE"] ?? null)) {
                    // line 112
                    echo " <label for=\"vote_";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 112);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 112);
                    echo "</label>
";
                } else {
                    // line 114
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 114);
                    echo "
";
                }
                // line 116
                echo "
<div class=\"poll_option_select pull-left\">
";
                // line 118
                if (($context["S_CAN_VOTE"] ?? null)) {
                    // line 119
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        // line 120
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 120);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 120);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 120)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
";
                    } else {
                        // line 122
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 122);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 122);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 122)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                }
                // line 124
                echo "</div>
</div>
   <div class=\"poll_option_percent";
                // line 126
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo " pull-right\">
    <span class=\"badge";
                // line 127
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 127)) {
                    echo " badge-info";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 127)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo ">";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 127) == 0)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VOTES");
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 127);
                }
                echo "</span>
   </div>
<div class=\"space-poll\"></div>   
<div class=\"resultbar";
                // line 130
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo " progress progress-fix clearfix\">
 <div role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" class=\"progress-bar progress-bar-striped";
                // line 131
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 131) < 20)) {
                    echo " pollbar1 progress-bar-danger";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 131) < 40)) {
                    echo " pollbar2 progress-bar-warning";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 131) < 60)) {
                    echo " pollbar3 progress-bar-info";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 131) < 80)) {
                    echo " pollbar4 progress-bar-primary";
                } else {
                    echo " pollbar5 progress-bar-success active";
                }
                echo "\" style=\"width:";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 131);
                echo ";min-width:2em;\">";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 131);
                echo "</div>
</div>
</div>
";
                // line 134
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "</div>
</div>
<div class=\"panel-footer\">
  <div class=\"clearfix\">
    <ul class=\"list-unstyled pull-left\">
\t";
            // line 141
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 142
                echo "    <li class=\"poll_view_results\"><a href=\"";
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_RESULTS");
                echo "</a></li>
\t";
            }
            // line 144
            echo "\t<li class=\"poll_total_votes";
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t <span class=\"resultbar\">";
            // line 145
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_VOTES");
            echo "&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "&nbsp;<span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></span>
\t</li>
\t";
            // line 147
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 148
                echo "\t<li class=\"poll_max_votes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_VOTES");
                echo "</li>
\t";
            }
            // line 150
            echo "\t</ul>
\t <div class=\"vote-submitted hidden\">&nbsp;<span class=\"label label-success\">";
            // line 151
            echo $this->extensions['phpbb\template\twig\extension']->lang("VOTE_SUBMITTED");
            echo "</span></div>
\t";
            // line 152
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 153
                echo "\t<div class=\"poll_vote pull-right\">
\t <div class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 154
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT_VOTE");
                echo "\" class=\"btn btn-default btn-poll\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CASTING_VOTE");
                echo "\" autocomplete=\"off\" /></div>
\t</div>
\t";
            }
            // line 157
            echo "  </div>
</div>
    ";
            // line 159
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t ";
            // line 160
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
</div>
</fieldset>
</form>
";
        }
        // line 165
        // line 166
        echo "
<div class=\"postrow_container\">
";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 168));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 169
            // line 170
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 170)) {
                // line 171
                echo "   <a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 171);
                    echo "\"";
                }
                echo "></a>
  ";
            }
            // line 173
            echo "<div id=\"p";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 173);
            echo "\" class=\"clearfix\">\t
    ";
            // line 174
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 174)) {
                // line 175
                echo "\t <div class=\"ignore alert alert-default\" id=\"post_hidden";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 175);
                echo "\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 175)) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t  ";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DELETED_MESSAGE", [], "any", false, false, false, 176);
                echo "<br />
\t  <strong>";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DISPLAY", [], "any", false, false, false, 177);
                echo "</strong>
\t </div>
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 179
$context["postrow"], "S_IGNORE_POST", [], "any", false, false, false, 179)) {
                // line 180
                echo "\t <div class=\"ignore alert alert-warning\" id=\"post_hidden";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 180);
                echo "\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 180)) {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t\t";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_IGNORE_POST", [], "any", false, false, false, 181);
                echo "<br />
\t\t<strong>";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DISPLAY", [], "any", false, false, false, 182);
                echo "</strong>
\t </div>
\t";
            }
            // line 185
            echo "\t
";
            // line 186
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_PRIVATE", [], "any", false, false, false, 186)) {
                // line 187
                echo "\t<div class=\"ignore alert alert-default\">
\t\t<article>
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div id=\"profile";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 190);
                echo "\">
\t\t\t\t\t<div class=\"avatar-over pull-left\">
\t\t\t\t\t\t";
                // line 192
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 192)) {
                    // line 193
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 193)) {
                        echo "<a data-toggle=\"modal\" data-target=\"#mini";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 193);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_MINI_PROFILE");
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 193);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 193);
                    }
                    // line 194
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 195
                    echo "\t\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#mini";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 195);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("USER_MINI_PROFILE");
                    echo "\"><img src=\"";
                    echo ($context["T_THEME_PATH"] ?? null);
                    echo "/images/no_avatar.gif\" alt=\"\"></a>
\t\t\t\t\t\t";
                }
                // line 197
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 197)) {
                    echo "<span class=\"status ";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "STATUS_COLOR", [], "any", false, false, false, 197);
                    echo "\"></span>";
                }
                // line 198
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-muted pull-left\">
\t\t\t\t\t";
                // line 202
                echo $this->extensions['phpbb\template\twig\extension']->lang("BY");
                echo "&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 202);
                echo "<span class=\"hidden-xs\">&nbsp;&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 202);
                echo "</span>\t
\t\t\t\t</div>
\t\t\t\t<br /><br /><strong>";
                // line 204
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_POST_NO_CONTENT");
                echo "</strong>
\t\t\t</div>
\t\t</article>
\t</div>
";
            } else {
                // line 209
                echo "\t
 <article ";
                // line 210
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 210)) {
                    echo "style=\"display: none;\"";
                }
                echo ">
  <div class=\"panel";
                // line 211
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 211) % 2 != 0))) {
                    echo " alt-odd";
                }
                echo " forum-answer";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 211)) {
                    echo " mobile-online";
                }
                echo "\">
    <div class=\"panel-heading\">
\t <div class=\"clearfix\">
         <div id=\"profile";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 214);
                echo "\">
\t\t\t<div class=\"avatar-over";
                // line 215
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 215) % 2 == 0)))) {
                    echo " pull-right";
                } else {
                    echo " pull-left";
                }
                echo "\">
\t\t\t\t";
                // line 216
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 216)) {
                    // line 217
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 217)) {
                        echo "<a data-toggle=\"modal\" data-target=\"#mini";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 217);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_MINI_PROFILE");
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 217);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 217);
                    }
                    // line 218
                    echo "\t\t\t\t";
                } else {
                    // line 219
                    echo "\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#mini";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 219);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("USER_MINI_PROFILE");
                    echo "\"><img src=\"";
                    echo ($context["T_THEME_PATH"] ?? null);
                    echo "/images/no_avatar.gif\" alt=\"\"></a>
\t\t\t\t";
                }
                // line 221
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 221)) {
                    echo "<span class=\"status ";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "STATUS_COLOR", [], "any", false, false, false, 221);
                    echo "\"></span>";
                }
                // line 222
                echo "\t\t\t</div>
         </div>
\t\t<div class=\"side-segment\"><h3 style=\"border-bottom: 4px solid #e5e5e5;\">";
                // line 224
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 224)) {
                    echo "<img class=\"post-icon\" src=\"";
                    if ( !($context["S_BBEMOJI"] ?? null)) {
                        echo ($context["T_ICONS_PATH"] ?? null);
                    }
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 224);
                    echo "\" width=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_WIDTH", [], "any", false, false, false, 224);
                    echo "\" height=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_HEIGHT", [], "any", false, false, false, 224);
                    echo "\" alt=\"\"/>";
                }
                echo "<a href=\"#p";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 224);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 224);
                echo "</a><span class=\"pull-right post-id hidden-xs\">";
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 224);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST");
                echo "\">&#35;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 224);
                echo "</a></span></h3></div>    
\t\t<div class=\"clearfix\">
\t\t<div class=\"text-muted";
                // line 226
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 226) % 2 != 0))) {
                    echo " alt-odd-time";
                }
                echo " ";
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 226) % 2 == 0)))) {
                    echo " pull-right prof-right";
                } else {
                    echo " pull-left";
                }
                echo "\">
\t\t";
                // line 227
                // line 228
                echo "\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BY");
                if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 228)) {
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 228);
                } else {
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 228);
                }
                echo "<span class=\"hidden-xs\">&nbsp;&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;<time datetime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE_RFC3339", [], "any", false, false, false, 228);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 228);
                echo "</time></span>\t
\t\t";
                // line 229
                // line 230
                echo "\t\t</div>
\t\t<div class=\"";
                // line 231
                if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 231) % 2 == 0)))) {
                    echo "pull-left";
                } else {
                    echo "pull-right";
                }
                echo "\">
\t\t<div role=\"toolbar\" class=\"btn-toolbar\">
\t\t";
                // line 233
                // line 234
                echo "\t\t";
                // line 235
                echo "\t\t 
\t\t    ";
                // line 236
                if (( !($context["S_IS_BOT"] ?? null) && ($context["S_REGISTERED_USER"] ?? null))) {
                    // line 237
                    echo "\t\t\t";
                    $value = (((((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 237) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 237)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 237));
                    $context['definition']->set('SHOW_POST_BUTTONS', $value);
                    // line 238
                    echo "\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_POST_BUTTONS", [], "any", false, false, false, 238)) {
                        // line 239
                        echo "                <div class=\"btn-group btn-group-sm\" role=\"group\">
\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\"></i>&nbsp;<i class=\"fa fa-level-down\"></i></button>
\t\t\t\t <ul class=\"dropdown-menu";
                        // line 241
                        if (((($context["MINI_PROFILE_POSITION"] ?? null) == "right") || ((($context["MINI_PROFILE_POSITION"] ?? null) == "alternate") && (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 241) % 2 == 0)))) {
                            echo " dropdown-menu-left";
                        } else {
                            echo " dropdown-menu-right";
                        }
                        echo "\" role=\"menu\">
\t\t\t\t  ";
                        // line 242
                        // line 243
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 243)) {
                            echo "<li class=\"visible-xs\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 243);
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-comments\"></i>&nbsp;";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                            echo "</a></li>";
                        }
                        // line 244
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 244)) {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 244);
                            echo "\" title=\"\" role=\"button\" class=\"qlr-trigger\"><i class=\"fa fa-pencil\"></i>&nbsp;";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
                            echo "</a></li>";
                        }
                        // line 245
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 245)) {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 245);
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-times\"></i>&nbsp;";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                            echo "</a></li>";
                        }
                        // line 246
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 246)) {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 246);
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_POST");
                            echo "</a></li>";
                        }
                        // line 247
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 247)) {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 247);
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-minus-circle\"></i>&nbsp;";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                            echo "</a></li>";
                        }
                        // line 248
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 248)) {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 248);
                            echo "\" title=\"\" role=\"button\"><i class=\"fa fa-info-circle\"></i>&nbsp;";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                            echo "</a></li>";
                        }
                        // line 249
                        echo "\t\t\t\t  ";
                        // line 250
                        echo "\t\t\t\t </ul>
\t\t\t\t</div>
\t\t\t\t";
                        // line 252
                        if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 252)) {
                            // line 253
                            echo "                <div class=\"btn-group btn-group-sm hidden-xs visible-sm visible-md visible-lg\" role=\"group\">
                 <a class=\"btn btn-default btn-sm\" href=\"";
                            // line 254
                            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 254);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_WITH_QUOTE");
                            echo "\" role=\"button\"><i class=\"fa fa-comments\"></i></a>
                </div>
\t\t\t\t";
                        }
                        // line 257
                        echo "\t\t\t";
                    }
                    // line 258
                    echo "\t\t    ";
                }
                // line 259
                echo "\t\t 
\t\t";
                // line 260
                // line 261
                echo "\t\t</div>
\t\t</div>
\t\t</div>  
\t\t
\t </div>
\t</div>
\t\t\t
    <div class=\"panel-body\">
        <div class=\"clearfix\">
\t\t\t<div class=\"postbody\">
                <div id=\"post_content";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 271);
                echo "\">
\t\t\t\t";
                // line 272
                // line 273
                echo "\t\t\t\t\t <span class=\"post-date pull-left visible-xs\">&#45;&nbsp;<i class=\"fa fa-clock-o\"></i>&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 273);
                echo "</span>
\t\t\t\t\t <span class=\"post-id pull-right visible-xs\"><a href=\"";
                // line 274
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 274);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST");
                echo "\">&#35;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 274);
                echo "</a></span>
\t\t\t\t";
                // line 275
                // line 276
                echo "\t\t        
\t\t\t\t\t";
                // line 277
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_UNAPPROVED", [], "any", false, false, false, 277)) {
                    // line 278
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_CAN_APPROVE", [], "any", false, false, false, 278)) {
                        // line 279
                        echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 279);
                        echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                        // line 282
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_ACTION");
                        echo "</strong>
\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                        // line 283
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                        echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                        // line 284
                        echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                        echo "\" name=\"action[approve]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                        // line 285
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 285);
                        echo "\" />
\t\t\t\t\t\t\t";
                        // line 286
                        echo ($context["S_FORM_TOKEN"] ?? null);
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
                    } else {
                        // line 290
                        echo "\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                        // line 291
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_EXPLAIN");
                        echo "</strong>
\t\t\t\t\t</div>
\t\t\t        ";
                    }
                    // line 294
                    echo "\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 294)) {
                    // line 295
                    echo "\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 295);
                    echo "\">
\t\t\t\t\t\t<div class=\"alert alert-warning fade in\">
\t\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t\t<i class=\"fa fa-warning\"></i><strong>&nbsp;";
                    // line 298
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DELETED_ACTION");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 299
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETE_PERMANENT", [], "any", false, false, false, 299)) {
                        // line 300
                        echo "\t\t\t\t\t\t\t <input class=\"btn btn-danger btn-sm\" type=\"submit\" value=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                        echo "\" name=\"action[delete]\" />
\t\t\t\t\t\t\t";
                    }
                    // line 301
                    echo " 
\t\t\t\t\t\t\t <input class=\"btn btn-success btn-sm\" type=\"submit\" value=\"";
                    // line 302
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                    echo "\" name=\"action[restore]\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 303
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 303);
                    echo "\" />
\t\t\t\t\t\t\t";
                    // line 304
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t";
                }
                // line 308
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 309
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 309)) {
                    // line 310
                    echo "\t\t\t\t\t<div style=\"margin-top:20px;\" class=\"alert alert-danger fade in\">
\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t\t\t\t<i class=\"fa fa-warning\"></i>
\t\t\t\t\t\t<a href=\"";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MCP_REPORT", [], "any", false, false, false, 313);
                    echo "\"><strong>&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPORTED");
                    echo "</strong></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 316
                echo "\t\t\t\t\t
\t\t\t\t\t<span class=\"hidden hook-bfr-message\"></span>
\t\t\t\t\t<div class=\"content\">";
                // line 318
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 318);
                echo "</div>
\t\t\t\t\t
\t\t\t\t\t";
                // line 320
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 320)) {
                    // line 321
                    echo "\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t";
                    // line 322
                    if (($context["BBLIGHTBOX_PLUGIN"] ?? null)) {
                        // line 323
                        echo "\t\t\t\t\t    ";
                        $location = "@sitesplat_bblightbox/bblightbox_layout.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("@sitesplat_bblightbox/bblightbox_layout.html", "viewtopic_body.html", 323)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 324
                        echo "\t\t\t\t\t";
                    } else {
                        // line 325
                        echo "\t\t\t\t\t\t<div class=\"attachbox\">
\t\t\t\t\t\t  <h5>";
                        // line 326
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                        echo "</h5>
\t\t\t\t\t\t\t   ";
                        // line 327
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "attachment", [], "any", false, false, false, 327));
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 327);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 328
                        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 330
                    echo "\t\t\t\t\t</div>\t
\t\t\t\t\t";
                }
                // line 332
                echo "\t\t\t\t\t
\t\t\t\t\t  ";
                // line 333
                // line 334
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DISPLAY_NOTICE", [], "any", false, false, false, 334)) {
                    echo "<div class=\"rules\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
                    echo "</div>";
                }
                // line 335
                echo "\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 335) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 335)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 335))) {
                    // line 336
                    echo "\t\t\t\t\t\t<div class=\"notice text-muted\">
\t\t\t\t\t\t <small>";
                    // line 337
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 337);
                    echo "</small>
\t\t\t\t\t\t ";
                    // line 338
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 338)) {
                        echo "<small><strong>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo "</strong>&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 338);
                        echo "</small>";
                    }
                    // line 339
                    echo "\t\t\t\t\t\t <div><small>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 339);
                    echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 342
                echo "\t\t\t\t\t  ";
                // line 343
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 343) || twig_get_attribute($this->env, $this->source, $context["postrow"], "STEAM_SIG_ENABLED", [], "any", false, false, false, 343))) {
                    // line 344
                    echo "\t\t\t\t\t <div class=\"clearfix\"></div>
\t\t\t\t\t <p class=\"separator text-center hidden-xs\"><i class=\"fa fa-ellipsis-h fa-2x\"></i></p>
\t\t\t\t\t <div id=\"sig";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 346);
                    echo "\" class=\"hidden-xs post-signature\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 346);
                    echo "</div>
\t\t\t\t\t  ";
                    // line 347
                    // line 348
                    echo "\t\t\t\t\t";
                }
                // line 349
                echo "                </div>
\t\t\t\t";
                // line 350
                // line 351
                echo "\t\t\t</div>
        </div>
    </div>

\t";
                // line 355
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_LAST_ROW", [], "any", false, false, false, 355) && ($context["S_QUICK_REPLY"] ?? null))) {
                    // line 356
                    echo "\t <div class=\"panel-footer\">
\t\t <div class=\"clearfix\">
            <div class=\"text-center\">
\t\t\t<div id=\"hidden-div\">
             <button id=\"show_button\" class=\"btn btn-primary btn-sm collapsed\" data-toggle=\"collapse\" data-target=\".quick-reply\"><i class=\"fa fa-pencil\"></i> ";
                    // line 360
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUICKREPLY");
                    echo "</button>
            </div>
\t\t\t</div>
            <div class=\"text-center\">
                <div class=\"quick-reply collapse\">
\t\t\t\t\t";
                    // line 365
                    if (($context["S_SNAPPY"] ?? null)) {
                        $location = "@sitesplat_snappy/snappy_quickreply_editor.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("@sitesplat_snappy/snappy_quickreply_editor.html", "viewtopic_body.html", 365)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                    } else {
                        $location = "quickreply_editor.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 365)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                    }
                    // line 366
                    echo "                </div>
            </div>
          </div>
\t </div>
\t ";
                }
                // line 371
                echo "\t ";
                // line 372
                echo "  </div>
  
 </article>
 ";
                // line 375
                echo "\t
";
            }
            // line 376
            echo "<!-- // this is for the private post above at 185 -->\t
 
 <!-- /.MODAL PROFILE POSTER STARTS HERE -->
    <div class=\"modal fade\" id=\"mini";
            // line 379
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 379);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t <div class=\"modal-dialog\">
\t  <div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\">";
            // line 384
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_MINI_PROFILE");
            echo "</h4>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<div class=\"row profile-data\">
\t\t\t<!-- Left Side Start -->
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-3 col-xs-12 text-center\">
\t\t\t\t    <!-- Profile Avatar Start -->
\t\t\t\t\t<div class=\"profile-avatar\">
\t\t\t\t\t\t";
            // line 392
            // line 393
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 393)) {
                // line 394
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 394)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 394);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 394);
                    echo "</a>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 394);
                }
                // line 395
                echo "\t\t\t\t\t    ";
            } else {
                // line 396
                echo "\t\t\t\t\t\t<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\">
\t\t\t\t\t\t";
            }
            // line 398
            echo "\t\t\t\t\t\t";
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Profile Avatar End -->  
                ";
            // line 401
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 402
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 402) && twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 402))) {
                // line 403
                echo "\t\t\t\t\t<div class=\"profile-rank text-center\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 403);
                echo "</div>
\t\t\t\t\t";
            }
            // line 404
            echo "\t
\t\t\t\t";
            // line 405
            echo "\t
\t\t\t\t\t";
            // line 406
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 406)) {
                // line 407
                echo "\t\t\t\t\t<a class=\"btn btn-sm btn-default\" title=\"\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 407);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("USER_MINI_PROFILE_VIEW_FULL");
                echo "</a>
\t\t\t\t\t";
            }
            // line 409
            echo "\t\t\t\t</div>
\t\t\t\t<!-- Left Side End -->
\t\t\t\t<!-- Right Side Start -->
\t\t\t\t<div class=\"col-lg-8 col-md-8 col-sm-9 col-xs-12\">
\t\t\t\t <h3>";
            // line 413
            if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 413)) {
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 413);
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 413);
            }
            echo "</h3>\t\t\t\t\t\t 
\t\t\t\t\t<ul class=\"icon-list list-unstyled\">
\t\t\t\t\t ";
            // line 415
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 415) && twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 415))) {
                echo "<li><i class=\"fa fa-sitemap\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 415);
                echo "</li>";
            }
            // line 416
            echo "\t\t\t\t\t ";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 416) != "")) {
                echo "<li><i class=\"fa fa-comments\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 416);
                echo "</li>";
            }
            // line 417
            echo "\t\t\t\t\t ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 417)) {
                echo "<li><i class=\"fa fa-calendar\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 417);
                echo "</li>";
            }
            // line 418
            echo "\t\t\t\t\t <li><i class=\"fa fa-retweet\"></i>&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_STATUS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "&nbsp;";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 418) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_IGNORE_POST", [], "any", false, false, false, 418))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("OFF_LINE");
            }
            echo "</li>
                     ";
            // line 419
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 419)) {
                echo "<li><i class=\"fa fa-bolt\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 419);
                echo "</li>";
            }
            // line 420
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t ";
            // line 421
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_PROFILE_FIELD1", [], "any", false, false, false, 421)) {
                // line 422
                echo "\t\t\t\t\t <!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t <li><i class=\"fa fa-star\"></i> 
\t\t\t\t\t ";
                // line 424
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_NAME", [], "any", false, false, false, 424);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_VALUE", [], "any", false, false, false, 424);
                echo "
\t\t\t\t\t </li>
\t\t\t\t\t ";
            }
            // line 427
            echo "
\t\t\t\t\t";
            // line 428
            // line 429
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "custom_fields", [], "any", false, false, false, 429));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 430
                echo "\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 430)) {
                    // line 431
                    echo "\t\t\t\t\t\t <li class=\"profile-custom-field profile-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 431);
                    echo "\"><i class=\"fa fa-star\"></i>&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 431);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 431);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 433
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            echo "\t\t\t\t\t";
            // line 435
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t <!-- Right Side End -->
            </div>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t    ";
            // line 441
            // line 442
            echo "\t\t\t ";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 442)))) {
                // line 443
                echo "\t\t\t<div class=\"clearfix\">
\t\t\t\t<ul class=\"mini-profile-contact\">
\t\t\t\t";
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 445));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 446
                    echo "\t\t\t\t ";
                    $context["REMAINDER"] = (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 446) % 4);
                    // line 447
                    echo "\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || (twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 447) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_NUM_ROWS", [], "any", false, false, false, 447) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 448
                    echo "\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 449
                        echo "\t\t\t\t";
                    }
                    // line 450
                    echo "\t\t\t\t<li><a class=\"default-contact\" href=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 450)) {
                        echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 450);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 450);
                    }
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 450);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 450) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t <i class=\"icon-moon-";
                    // line 451
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 451);
                    echo "\"></i>
\t\t\t\t </a>
\t\t\t\t</li>
\t\t\t\t";
                    // line 454
                    if (((($context["REMAINDER"] ?? null) == 3) || twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 454))) {
                        // line 455
                        echo "\t\t\t\t";
                    }
                    // line 456
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 457
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
            }
            // line 460
            echo "\t\t\t";
            // line 461
            echo "\t\t</div>
\t   </div><!-- /.modal-content -->
\t </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
 <!-- /.MODAL PROFILE POSTER STOPS HERE -->
 
</div>
";
            // line 468
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "</div>


<div class=\"clearfix\">
 ";
        // line 474
        // line 475
        echo "  <div class=\"pull-left\">
   \t";
        // line 476
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 477
            echo "\t ";
            // line 478
            echo "\t";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 479
                echo "     <a class=\"btn btn-danger\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t";
            } else {
                // line 481
                echo "\t <a class=\"btn btn-default btn-load\" href=\"";
                echo ($context["U_POST_REPLY_TOPIC"] ?? null);
                echo "\" role=\"button\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY");
                echo "</a>
    ";
            }
            // line 483
            echo "\t ";
            // line 484
            echo "\t";
        }
        // line 485
        echo "  </div>

 <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs pagination-bottom\">
\t ";
        // line 489
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 489))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR_OPTIONS");
            echo "</a></li>";
        }
        // line 490
        echo "\t";
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 490)))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</a></li>";
        }
        echo "\t\t\t\t
     ";
        // line 491
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 491)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 492
            echo "\t  <li class=\"active\"><a>";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</a></li>
\t\t\t";
            // line 493
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 493)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 494
            echo "\t\t";
        } else {
            // line 495
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t ";
        }
        // line 497
        echo "     </ul>
\t 
\t<div class=\"visible-xs\"> 
\t<ul class=\"pagination pagination-sm pagination-bottom\">
\t ";
        // line 501
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 501))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting-topic-mod\" data-toggle=\"collapse\"><i class=\"fa fa-gavel\"></i></a></li>";
        }
        // line 502
        echo "\t ";
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 502)))) {
            echo "<li><a title=\"\" href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>";
        }
        echo "\t\t\t\t
\t <li><a class=\"pagination-trigger\" data-placement=\"top\">";
        // line 503
        echo ($context["PAGE_NUMBER"] ?? null);
        echo "</a></li>
\t <li class=\"active\"><a>";
        // line 504
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</a></li>
\t</ul>
\t</div>
 </div>
</div>

<div class=\"clearfix\">
   <div class=\"pull-right\">
\t<div class=\"visible-xs\"> 
\t <ul class=\"pagination pagination-sm pagination-bottom\">
\t ";
        // line 514
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 514)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 515
            echo "\t\t\t";
            $location = "pagination_mobile.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination_mobile.html", "viewtopic_body.html", 515)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 516
            echo "\t\t";
        } else {
            // line 517
            echo "\t\t\t<li class=\"active\"><a>";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a></li>\t
\t ";
        }
        // line 519
        echo "\t </ul>
\t</div>
   </div>
</div>

";
        // line 524
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewtopic_body.html", 524)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 525
        echo "<div class=\"space10\"></div>

\t";
        // line 527
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 527))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 528
            echo "\t\t";
            $location = "display_options_viewtopic.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options_viewtopic.html", "viewtopic_body.html", 528)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 529
            echo "\t";
        }
        // line 530
        echo "
";
        // line 531
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 531))) {
            // line 532
            echo "\t<div class=\"controls-row\">
       <div class=\"sorting-topic-mod collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
                   <div class=\"row\">
\t\t\t\t\t    <div class=\"col-md-6 col-sm-6\"> 
                         <label>";
            // line 538
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 540
            $location = "jumpbox_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox_options.html", "viewtopic_body.html", 540)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 541
            echo "                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-6 col-sm-6\"> 
\t\t\t\t\t\t <label>";
            // line 544
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
                          ";
            // line 545
            $location = "quickmod_tools.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickmod_tools.html", "viewtopic_body.html", 545)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 546
            echo "\t\t\t\t\t\t</div>
                    </div>
                </div>
\t\t\t</div>
\t\t</div>
\t</div> 
";
        }
        // line 553
        echo "
";
        // line 554
        // line 555
        echo "
";
        // line 556
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 557
            echo "<div class=\"row\">
";
            // line 558
            if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
                // line 559
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum panel-whois\">
<div class=\"panel-heading\"><i class=\"fa fa-users\"></i>&nbsp;<a href=\"";
                // line 561
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></div>
 <div class=\"panel-body\">
\t<p>";
                // line 563
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "</p>
 </div> 
</div> 
</div> 
";
            }
            // line 568
            echo "
";
            // line 569
            if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
                // line 570
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum\">
<div class=\"panel-heading\"><i class=\"fa fa-bar-chart-o\"></i>&nbsp;";
                // line 572
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PERMISSIONS");
                echo "</div>
  <div class=\"panel-body\">
\t<p>";
                // line 574
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rules", [], "any", false, false, false, 574));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["rules"], "RULE", [], "any", false, false, false, 574);
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</p>
  </div> 
</div> 
 </div>
";
            }
            // line 579
            echo "</div>
";
        }
        // line 581
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 581)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1874 => 581,  1870 => 579,  1854 => 574,  1849 => 572,  1845 => 570,  1843 => 569,  1840 => 568,  1832 => 563,  1825 => 561,  1821 => 559,  1819 => 558,  1816 => 557,  1814 => 556,  1811 => 555,  1810 => 554,  1807 => 553,  1798 => 546,  1786 => 545,  1781 => 544,  1776 => 541,  1764 => 540,  1758 => 538,  1750 => 532,  1748 => 531,  1745 => 530,  1742 => 529,  1729 => 528,  1727 => 527,  1723 => 525,  1711 => 524,  1704 => 519,  1698 => 517,  1695 => 516,  1682 => 515,  1680 => 514,  1667 => 504,  1663 => 503,  1656 => 502,  1652 => 501,  1646 => 497,  1640 => 495,  1637 => 494,  1625 => 493,  1620 => 492,  1618 => 491,  1609 => 490,  1603 => 489,  1597 => 485,  1594 => 484,  1592 => 483,  1582 => 481,  1574 => 479,  1571 => 478,  1569 => 477,  1567 => 476,  1564 => 475,  1563 => 474,  1557 => 470,  1544 => 468,  1535 => 461,  1533 => 460,  1528 => 457,  1522 => 456,  1519 => 455,  1517 => 454,  1511 => 451,  1496 => 450,  1493 => 449,  1490 => 448,  1486 => 447,  1483 => 446,  1479 => 445,  1475 => 443,  1472 => 442,  1471 => 441,  1463 => 435,  1461 => 434,  1455 => 433,  1444 => 431,  1441 => 430,  1436 => 429,  1435 => 428,  1432 => 427,  1423 => 424,  1419 => 422,  1417 => 421,  1414 => 420,  1405 => 419,  1393 => 418,  1383 => 417,  1373 => 416,  1364 => 415,  1355 => 413,  1349 => 409,  1341 => 407,  1339 => 406,  1336 => 405,  1333 => 404,  1327 => 403,  1325 => 402,  1322 => 401,  1316 => 398,  1310 => 396,  1307 => 395,  1296 => 394,  1293 => 393,  1292 => 392,  1281 => 384,  1273 => 379,  1268 => 376,  1264 => 375,  1259 => 372,  1257 => 371,  1250 => 366,  1224 => 365,  1216 => 360,  1210 => 356,  1208 => 355,  1202 => 351,  1201 => 350,  1198 => 349,  1195 => 348,  1194 => 347,  1188 => 346,  1184 => 344,  1181 => 343,  1179 => 342,  1172 => 339,  1163 => 338,  1159 => 337,  1156 => 336,  1153 => 335,  1146 => 334,  1145 => 333,  1142 => 332,  1138 => 330,  1134 => 328,  1125 => 327,  1121 => 326,  1118 => 325,  1115 => 324,  1102 => 323,  1100 => 322,  1097 => 321,  1095 => 320,  1090 => 318,  1086 => 316,  1078 => 313,  1073 => 310,  1071 => 309,  1068 => 308,  1061 => 304,  1057 => 303,  1053 => 302,  1050 => 301,  1044 => 300,  1042 => 299,  1038 => 298,  1031 => 295,  1028 => 294,  1022 => 291,  1019 => 290,  1012 => 286,  1008 => 285,  1004 => 284,  1000 => 283,  996 => 282,  989 => 279,  986 => 278,  984 => 277,  981 => 276,  980 => 275,  972 => 274,  967 => 273,  966 => 272,  962 => 271,  950 => 261,  949 => 260,  946 => 259,  943 => 258,  940 => 257,  932 => 254,  929 => 253,  927 => 252,  923 => 250,  921 => 249,  912 => 248,  903 => 247,  894 => 246,  885 => 245,  876 => 244,  867 => 243,  866 => 242,  858 => 241,  854 => 239,  851 => 238,  847 => 237,  845 => 236,  842 => 235,  840 => 234,  839 => 233,  830 => 231,  827 => 230,  826 => 229,  810 => 228,  809 => 227,  797 => 226,  770 => 224,  766 => 222,  759 => 221,  749 => 219,  746 => 218,  733 => 217,  731 => 216,  723 => 215,  719 => 214,  707 => 211,  701 => 210,  698 => 209,  690 => 204,  681 => 202,  675 => 198,  668 => 197,  658 => 195,  655 => 194,  642 => 193,  640 => 192,  635 => 190,  630 => 187,  628 => 186,  625 => 185,  619 => 182,  615 => 181,  606 => 180,  604 => 179,  599 => 177,  595 => 176,  586 => 175,  584 => 174,  579 => 173,  569 => 171,  566 => 170,  565 => 169,  548 => 168,  544 => 166,  543 => 165,  535 => 160,  531 => 159,  527 => 157,  519 => 154,  516 => 153,  514 => 152,  510 => 151,  507 => 150,  501 => 148,  499 => 147,  490 => 145,  483 => 144,  475 => 142,  473 => 141,  466 => 136,  461 => 134,  441 => 131,  435 => 130,  415 => 127,  409 => 126,  405 => 124,  393 => 122,  381 => 120,  379 => 119,  377 => 118,  373 => 116,  367 => 114,  359 => 112,  357 => 111,  338 => 109,  337 => 108,  333 => 107,  328 => 104,  322 => 101,  319 => 100,  317 => 99,  313 => 98,  305 => 94,  303 => 93,  300 => 92,  299 => 91,  293 => 87,  292 => 86,  288 => 84,  276 => 83,  272 => 81,  269 => 80,  267 => 79,  257 => 77,  249 => 75,  246 => 74,  244 => 73,  242 => 72,  238 => 70,  237 => 69,  228 => 62,  225 => 61,  214 => 60,  212 => 59,  206 => 55,  200 => 53,  197 => 52,  184 => 51,  181 => 50,  173 => 49,  169 => 48,  162 => 43,  154 => 38,  146 => 35,  141 => 33,  135 => 30,  132 => 29,  130 => 28,  125 => 25,  121 => 23,  113 => 21,  110 => 20,  102 => 19,  100 => 18,  96 => 16,  94 => 15,  91 => 14,  78 => 11,  75 => 10,  73 => 9,  70 => 8,  69 => 7,  63 => 6,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
