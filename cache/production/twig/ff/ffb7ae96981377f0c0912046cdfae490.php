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

/* viewforum_body.html */
class __TwigTemplate_cbdb90a1bedf3b701ea7199cccca0a40 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
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
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h3></div> 
";
        // line 5
        // line 6
        echo "
";
        // line 7
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 8
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 10
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 11
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
                }
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 12
            echo "</div>
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
";
        // line 26
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 27
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 28
                echo "      <ul class=\"pagination pagination-sm pull-right\">
\t    <li><a href=\"";
                // line 29
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"mark-read\" data-ajax=\"mark_forums_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_SUBFORUMS_READ");
                echo "</a></li>
      </ul>
<div class=\"space10\"></div>
";
            }
            // line 33
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 33)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 35
        echo "
";
        // line 36
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 36))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 37
            echo "<div class=\"row\"> 
   <div class=\"col-md-4 col-xs-7\">
\t";
            // line 39
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 40
                echo "\t<div class=\"pull-left\">
\t\t<form method=\"get\" id=\"topic-search\" action=\"";
                // line 41
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t<fieldset>
\t\t <div class=\"input-group input-group-sm\">
\t\t   <input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"search_keywords\" value=\"\" placeholder=\"";
                // line 44
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_FORUM");
                echo "\"/>
\t\t  <div class=\"input-group-btn\">
\t\t   <button class=\"btn btn-default\" type=\"submit\" value=\"";
                // line 46
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\"><span class=\"hidden-xs\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span><i class=\"visible-xs fa fa-search fa-btn-fx\"></i></button>
\t\t  </div>
\t\t </div>
\t\t ";
                // line 49
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t</fieldset>
\t\t</form>
\t</div>
\t";
            }
            // line 54
            echo "  </div>
  
  <div class=\"col-md-8\">
   <div class=\"pull-right\">\t 
     <ul class=\"pagination pagination-sm hidden-xs\">
\t    ";
            // line 59
            if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 60
                echo "\t\t  <li class=\"t-";
                if (($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t   <a class=\"t-icon\" href=\"";
                // line 61
                echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                echo "\" title=\"";
                echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"t-";
                if ( !($context["S_WATCHING_FORUM"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
                echo "\"></a>
\t\t  </li>
\t\t";
            }
            // line 64
            echo "\t\t";
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 64)))) {
                echo "<li><a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" data-ajax=\"mark_topics_read\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_TOPICS_READ");
                echo "</a></li>";
            }
            // line 65
            echo "\t\t <li><a>";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</a></li>
\t\t";
            // line 66
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 66))) {
                // line 67
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 67)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 68
                echo "\t\t";
            } else {
                // line 69
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 71
            echo "     </ul>
\t
\t<div class=\"visible-xs\"> 
     <ul class=\"pagination pagination-sm\">
\t";
            // line 75
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 75)) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
                // line 76
                echo "\t ";
                if ((($context["TOTAL_POSTS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                    echo "<li class=\"active\"><a>";
                    echo ($context["TOTAL_POSTS"] ?? null);
                    echo "</a></li>";
                } elseif ((($context["TOTAL_TOPICS"] ?? null) &&  !($context["NEWEST_USER"] ?? null))) {
                    echo "<li class=\"active\"><a>";
                    echo ($context["TOTAL_TOPICS"] ?? null);
                    echo "</a></li>";
                }
                // line 77
                echo "\t";
            }
            // line 78
            echo "\t</ul>
\t</div>
   </div>
   </div>
   
</div>
";
        }
        // line 85
        echo "
";
        // line 86
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
            echo "  
<div class=\"clearfix\">
   <div class=\"pull-left\">
     ";
            // line 89
            // line 90
            echo "   ";
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 91
                echo "    <a href=\"";
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                echo "</a>
\t";
            } else {
                // line 93
                echo "\t<a href=\"";
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC_NEW");
                echo "</a>
    ";
            }
            // line 95
            echo "\t ";
            // line 96
            echo "   </div>
</div>
";
        }
        // line 99
        echo "
   <div class=\"space10\"></div>
    <div class=\"space10\"></div>

";
        // line 103
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 104
            echo "\t<div class=\"alert alert-danger fade in\">
\t\t<strong>";
            // line 105
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_READ_ACCESS");
            echo "</strong>
\t</div>\t
";
            // line 107
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 108
                echo "  <section class=\"panel-login panel-w-form login-full\">
            <div class=\"row\">
                ";
                // line 110
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    // line 111
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                    // line 113
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ACCOUNT");
                    echo "</span>
\t\t\t\t</div>
                    <p>";
                    // line 115
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_INFO");
                    echo "</p>
\t\t\t\t    <p><a href=\"";
                    // line 116
                    echo ($context["U_TERMS_USE"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo ($context["U_PRIVACY"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
                    echo "</a></p>
\t\t\t\t\t<p><a href=\"";
                    // line 117
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\" class=\"btn btn-default\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                    echo "</a></p>
                </div>
\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                    // line 122
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ACCOUNT_DISABLED");
                    echo "</span>
\t\t\t\t</div>
                    <p>";
                    // line 124
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION_DISABLED");
                    echo "</p>
\t\t\t\t    <p><a href=\"";
                    // line 125
                    echo ($context["U_TERMS_USE"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
                    echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
                    echo ($context["U_PRIVACY"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
                    echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
                    // line 126
                    echo ($context["BOARD_EMAIL"] ?? null);
                    echo "?subject=Registrations Closed&body=Dear Admin, %0A%0AI Just wanted to let you know that the board registrations are closed. %0A%0AThis might be an error and I would like to register. %0A%0APlease let me know if this is possible.%0A%0AThanks!\" class=\"btn btn-default\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_WEBMASTER");
                    echo "</a></p>
                </div>
\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
                // line 131
                echo $this->extensions['phpbb\template\twig\extension']->lang("SIGN_IN_ACCOUNT");
                echo "</span>
\t\t\t\t</div>
\t\t\t\t <form role=\"form\" method=\"post\" action=\"";
                // line 133
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"username\">";
                // line 136
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
                // line 138
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
                echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label class=\"sr-only\" for=\"password\">";
                // line 143
                echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
                // line 145
                echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
                echo "\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t <p>
\t\t\t\t    ";
                // line 150
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    // line 151
                    echo "\t\t\t\t\t<div class=\"checkbox pull-right\">
\t\t\t\t\t  <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\">";
                    // line 152
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_REMEMBER");
                    echo "</label>
\t\t\t\t\t</div>
\t\t\t\t    ";
                }
                // line 155
                echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" name=\"login\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
                echo "\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING_LOG_IN");
                echo " <i class='fa-spin fa fa-spinner fa-lg'></i>\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_ME_IN");
                echo "</button>
\t\t\t\t\t";
                // line 156
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t\t";
                // line 157
                echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
                echo "
\t\t\t\t  </p>
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t    </div>  
            </div>
    </section>
";
            }
        }
        // line 166
        echo "
";
        // line 167
        // line 168
        echo "
";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 169));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 170
            echo "\t";
            if (( !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 170) &&  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 170))) {
                // line 171
                echo "\t</table>
\t</div>
\t</div>
\t";
            }
            // line 175
            echo "
\t";
            // line 176
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_FIRST_ROW", [], "any", false, false, false, 176) ||  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 176))) {
                // line 177
                echo "\t<div class=\"panel panel-forum\">
\t<div class=\"panel-heading\">
\t ";
                // line 179
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_TOPICS");
                } elseif ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_TYPE_SWITCH", [], "any", false, false, false, 179) && (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 179) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 179)))) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                }
                // line 180
                echo "\t</div>
\t<div class=\"panel-inner\">
\t<table class=\"footable table table-striped table-primary table-hover topics-table";
                // line 182
                if (( !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 182) &&  !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 182))) {
                    echo " topics-table-normal";
                }
                echo "\">
\t<thead>
\t\t<tr>
\t\t\t<th data-class=\"expand\">";
                // line 185
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</th>
\t\t\t<th class=\"large110\" data-hide=\"phone\">";
                // line 186
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t<th class=\"large21\" data-hide=\"phone\">";
                // line 187
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</th>
\t\t</tr>
\t</thead>\t\t
\t<tbody>
\t";
            }
            // line 192
            echo "\t    ";
            // line 193
            echo "\t\t<tr>
\t\t\t<td>
\t\t        ";
            // line 195
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 195) && ($context["S_TOPIC_ICONS"] ?? null))) {
                // line 196
                echo "\t\t\t\t<i class=\"topic-icon\" style=\"background-image: url('";
                if ( !($context["S_BBEMOJI"] ?? null)) {
                    echo ($context["T_ICONS_PATH"] ?? null);
                }
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 196);
                echo "'); background-repeat: no-repeat;\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 196);
                echo "\"></i>
\t\t\t\t";
            }
            // line 198
            echo "\t\t\t\t<span class=\"icon-wrapper\">
\t\t\t    <i class=\"row-icon-font icon-moon-default2";
            // line 199
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_ANNOUNCE", [], "any", false, false, false, 199)) {
                echo " icon-moon-voice2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 199)) {
                echo " icon-moon-podcast2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_STICKY", [], "any", false, false, false, 199)) {
                echo " icon-moon-pushpin2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_HAS_POLL", [], "any", false, false, false, 199)) {
                echo " icon-moon-poll";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_MOVED", [], "any", false, false, false, 199)) {
                echo " icon-moon-moved";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 199)) {
                echo " forum-unread";
            } else {
                echo " forum-read";
            }
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 199);
            echo "\"></i>
\t\t\t\t</span>
\t\t\t\t<i class=\"row-icon-font-mini";
            // line 201
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_LOCKED", [], "any", false, false, false, 201)) {
                echo " icon-moon-lock forumview-lock";
            }
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 201);
            echo "\"></i>
\t\t\t  <div class=\"desc-wrapper\">
\t\t\t  ";
            // line 203
            // line 204
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 204)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 204);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_FIRST_UNREAD");
                echo "\"><i class=\"topic-newest fa fa-asterisk\"></i></a>&nbsp;";
            }
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 204)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 204);
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 204);
                echo "</a>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 204);
            }
            // line 205
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 205) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 205))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 205);
                echo "\" title=\"";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 205)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED");
                }
                echo "\"><i class=\"fa fa-question-circle\"></i></a>";
            }
            // line 206
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 206)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_REPORT", [], "any", false, false, false, 206);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_ROW_REPORTED");
                echo "\"><i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
            }
            // line 207
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_DELETED", [], "any", false, false, false, 207)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 207);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_ROW_DELETED");
                echo "\"><i class=\"fa fa-exclamation-circle text-danger\"></i></a>";
            }
            echo "<br />
\t\t\t\t";
            // line 208
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 208))) {
                // line 209
                echo "\t\t\t\t    <ul class=\"pagination pagination-forum pagination-xs pull-right hidden-sm hidden-xs\">
\t\t\t\t\t\t";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 210));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 211
                    echo "\t\t\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 211)) {
                        // line 212
                        echo "\t\t\t\t\t\t ";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 212)) {
                        echo "<li class=\"active\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 212);
                        echo "</li>
\t\t\t\t\t\t ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 213
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 213)) {
                        echo "<li class=\"ellipsis\"><a>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                        echo "</a></li>
\t\t\t\t\t\t ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 214
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 214)) {
                        // line 215
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 216
                        echo "\t\t\t\t\t\t <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 216);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 216);
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    // line 218
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "\t\t\t\t\t</ul>\t\t
\t\t\t    ";
            }
            // line 221
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 221)) {
                echo "<i class=\"fa fa-paperclip fa-flip-horizontal\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_FORUM");
                echo "\"></i>";
            }
            // line 222
            echo "\t\t\t\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 222);
            echo " 
\t\t\t\t<small>&nbsp;&#45;&nbsp;<time datetime=\"";
            // line 223
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 223);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 223);
            echo "</time></small>
\t\t\t\t";
            // line 224
            if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POST_GLOBAL", [], "any", false, false, false, 224) && (($context["FORUM_ID"] ?? null) != twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_ID", [], "any", false, false, false, 224)))) {
                echo "<small>&nbsp;&#45;&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "&nbsp;<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_FORUM", [], "any", false, false, false, 224);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FORUM_NAME", [], "any", false, false, false, 224);
                echo "</a></small>";
            }
            // line 225
            echo "\t\t\t  ";
            echo "\t
\t\t\t  </div>
\t\t\t</td>
\t\t\t<td class=\"stats-col\">
\t\t\t <span class=\"stats-wrapper\">
\t\t\t ";
            // line 230
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 230);
            echo "&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
            echo "&nbsp;<br />";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "VIEWS", [], "any", false, false, false, 230);
            echo "&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
            echo "
\t\t\t </span>
\t\t\t</td>
\t\t\t<td> 
\t\t\t<span class=\"last-wrapper text-overflow\">
\t\t\t";
            // line 235
            // line 236
            echo "\t\t\t ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo "&nbsp;";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 236);
            echo "
\t\t\t ";
            // line 237
            if (( !($context["S_IS_BOT"] ?? null) && twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 237))) {
                echo "<a title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUMLIST_LASTPOST");
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_LAST_POST", [], "any", false, false, false, 237);
                echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
            }
            // line 238
            echo "\t\t\t <br /><small><time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 238);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 238);
            echo "</time></small>
\t\t\t</span>
\t\t\t</td>
\t\t</tr>
\t    ";
            // line 242
            // line 243
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_LAST_ROW", [], "any", false, false, false, 243)) {
                // line 244
                echo "\t </tbody>
\t</table>
\t</div>
    </div>
\t";
            }
            // line 249
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 251
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 252
                echo "\t<div class=\"well\">
\t\t<strong>";
                // line 253
                echo $this->extensions['phpbb\template\twig\extension']->lang(((($context["S_SORT_DAYS"] ?? null)) ? ("NO_TOPICS_TIME_FRAME") : ("NO_TOPICS")));
                echo "</strong>
\t</div>
\t";
            } elseif ( !            // line 255
($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 256
                echo "\t<div class=\"well\">
\t\t<strong>";
                // line 257
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS_IN_CATEGORY");
                echo "</strong>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "
";
        // line 262
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 262)) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 263
            echo "<div class=\"clearfix\">
 <div class=\"pull-left\">
";
            // line 265
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 266
                echo " ";
                // line 267
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 268
                    echo "    <a href=\"";
                    echo ($context["U_POST_NEW_TOPIC"] ?? null);
                    echo "\" role=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-lock\"></i>&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_LOCKED");
                    echo "</a>
\t";
                } else {
                    // line 270
                    echo "\t<a href=\"";
                    echo ($context["U_POST_NEW_TOPIC"] ?? null);
                    echo "\" role=\"button\" class=\"btn btn-default btn-load\" data-loading-text=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                    echo "&nbsp;<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-plus\"></i>&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC_NEW");
                    echo "</a>
";
                }
                // line 272
                echo " ";
            }
            // line 274
            echo "</div>

 <div class=\"pull-right\">
     <ul class=\"pagination pagination-sm hidden-xs pagination-bottom\">
\t  <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\">";
            // line 278
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</a></li>\t\t\t
      <li><a>";
            // line 279
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</a></li>
\t\t";
            // line 280
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 280))) {
                // line 281
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 281)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 282
                echo "\t\t";
            } else {
                // line 283
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 285
            echo "     </ul>
\t 
\t<div class=\"visible-xs\"> 
\t<ul class=\"pagination pagination-sm pagination-bottom\">
\t   <li><a href=\"javascript:void(0);\" data-target=\".sorting\" data-toggle=\"collapse\"><i class=\"fa fa-cog\"></i></a></li>\t\t\t
       ";
            // line 290
            if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
                // line 291
                echo "       <li><a class=\"pagination-trigger\" data-placement=\"top\">";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>
\t   ";
            }
            // line 293
            echo "\t   <li class=\"active\"><a>";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</a></li>
\t</ul>
\t</div>
 </div>
</div>

<div class=\"clearfix\">
   <div class=\"pull-right\">
\t<div class=\"visible-xs\"> 
\t <ul class=\"pagination pagination-sm pagination-bottom\">
\t   ";
            // line 303
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 303))) {
                // line 304
                echo "\t\t\t";
                $location = "pagination_mobile.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination_mobile.html", "viewforum_body.html", 304)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 305
                echo "\t\t";
            } else {
                // line 306
                echo "\t\t\t<li class=\"active\"><a>";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a></li>\t
\t\t";
            }
            // line 308
            echo "\t </ul>
\t</div>
   </div>
</div>\t
";
        }
        // line 313
        echo "\t
";
        // line 314
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "viewforum_body.html", 314)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 315
        echo "<div class=\"space10\"></div>


    ";
        // line 318
        if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 319
            echo "\t\t";
            $location = "display_options_viewforum.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options_viewforum.html", "viewforum_body.html", 319)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 320
            echo "\t";
        }
        // line 321
        echo "
";
        // line 322
        echo "\t
\t
";
        // line 324
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 325
            echo "<div class=\"row\">
";
            // line 326
            if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
                // line 327
                echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum panel-whois\">
<div class=\"panel-heading\"><a href=\"";
                // line 329
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></div>
 <div class=\"panel-body\">
\t<p>";
                // line 331
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "</p>
 </div> 
</div> 
</div> 
";
            }
            // line 336
            echo "
<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
<div class=\"panel panel-forum\">
<div class=\"panel-heading\">";
            // line 339
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_PERMISSIONS");
            echo "</div>
  <div class=\"panel-body\">
\t<p>";
            // line 341
            if ((($context["S_IS_POSTABLE"] ?? null) && twig_length_filter($this->env, ($context["rules"] ?? null)))) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "rules", [], "any", false, false, false, 341));
                foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["rules"], "RULE", [], "any", false, false, false, 341);
                    echo "<br />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_AVAILABLE");
            }
            echo "</p>
  </div> 
</div> 
 </div>
</div>
";
        }
        // line 347
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 347)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1091 => 347,  1070 => 341,  1065 => 339,  1060 => 336,  1052 => 331,  1045 => 329,  1041 => 327,  1039 => 326,  1036 => 325,  1034 => 324,  1030 => 322,  1027 => 321,  1024 => 320,  1011 => 319,  1009 => 318,  1004 => 315,  992 => 314,  989 => 313,  982 => 308,  976 => 306,  973 => 305,  960 => 304,  958 => 303,  944 => 293,  938 => 291,  936 => 290,  929 => 285,  923 => 283,  920 => 282,  907 => 281,  905 => 280,  901 => 279,  897 => 278,  891 => 274,  888 => 272,  878 => 270,  870 => 268,  868 => 267,  866 => 266,  864 => 265,  860 => 263,  858 => 262,  855 => 261,  845 => 257,  842 => 256,  840 => 255,  835 => 253,  832 => 252,  829 => 251,  823 => 249,  816 => 244,  813 => 243,  812 => 242,  802 => 238,  794 => 237,  787 => 236,  786 => 235,  772 => 230,  764 => 225,  753 => 224,  747 => 223,  740 => 222,  733 => 221,  729 => 219,  723 => 218,  715 => 216,  712 => 215,  710 => 214,  704 => 213,  697 => 212,  694 => 211,  690 => 210,  687 => 209,  685 => 208,  674 => 207,  665 => 206,  652 => 205,  634 => 204,  633 => 203,  624 => 201,  598 => 199,  595 => 198,  584 => 196,  582 => 195,  578 => 193,  576 => 192,  568 => 187,  564 => 186,  560 => 185,  552 => 182,  548 => 180,  540 => 179,  536 => 177,  534 => 176,  531 => 175,  525 => 171,  522 => 170,  517 => 169,  514 => 168,  513 => 167,  510 => 166,  498 => 157,  494 => 156,  485 => 155,  479 => 152,  476 => 151,  474 => 150,  466 => 145,  460 => 143,  452 => 138,  446 => 136,  440 => 133,  435 => 131,  431 => 129,  423 => 126,  413 => 125,  409 => 124,  404 => 122,  400 => 120,  392 => 117,  382 => 116,  378 => 115,  373 => 113,  369 => 111,  367 => 110,  363 => 108,  361 => 107,  356 => 105,  353 => 104,  351 => 103,  345 => 99,  340 => 96,  338 => 95,  328 => 93,  320 => 91,  317 => 90,  316 => 89,  310 => 86,  307 => 85,  298 => 78,  295 => 77,  284 => 76,  282 => 75,  276 => 71,  270 => 69,  267 => 68,  254 => 67,  252 => 66,  247 => 65,  238 => 64,  222 => 61,  213 => 60,  211 => 59,  204 => 54,  196 => 49,  188 => 46,  183 => 44,  177 => 41,  174 => 40,  172 => 39,  168 => 37,  166 => 36,  163 => 35,  149 => 33,  140 => 29,  137 => 28,  135 => 27,  133 => 26,  130 => 25,  126 => 23,  118 => 21,  115 => 20,  107 => 19,  105 => 18,  101 => 16,  99 => 15,  96 => 14,  92 => 12,  78 => 11,  72 => 10,  68 => 8,  66 => 7,  63 => 6,  62 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewforum_body.html", "");
    }
}
