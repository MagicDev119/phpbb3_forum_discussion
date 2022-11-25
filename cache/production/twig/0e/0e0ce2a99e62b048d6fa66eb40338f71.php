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

/* forumlist_body.html */
class __TwigTemplate_a4e233455de1fd5afbe7abf108a3d01b extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 1));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 2
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 2) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 2))) {
                // line 3
                echo "\t    
\t\t<!-- Table footer not used at the moment
\t\t\t<tfoot>
             <tr>
                <th>Game Name</th>
                <th>Publisher</th>
                <th>Platform</th>
             </tr>
            </tfoot>
\t\tTable footer not used at the moment -->
\t\t\t
\t\t</table>
\t\t</div>
\t\t</div>
\t";
                // line 17
                echo "\t
\t";
            }
            // line 19
            echo "\t
    ";
            // line 20
            // line 21
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 21) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 21)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 21))) {
                // line 22
                echo "\t   <div class=\"panel panel-forum\">
\t     <div class=\"panel-heading\">
\t\t  ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 24)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 24);
                    echo "</a>";
                } elseif (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 24)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LINKS");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                }
                // line 25
                echo "\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t\t";
                // line 29
                // line 30
                echo "\t\t\t<tr>
\t\t\t <th data-class=\"expand\">";
                // line 31
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</th>
\t\t\t <th class=\"large110\" data-hide=\"phone\">";
                // line 32
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t <th class=\"large21\" data-hide=\"phone\">";
                // line 33
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</th>
\t\t\t</tr>
\t\t";
                // line 35
                echo "\t
\t\t</thead>
\t<tbody>
\t";
            }
            // line 39
            echo "\t";
            // line 40
            echo "\t
\t";
            // line 41
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 41)) {
                // line 42
                echo "\t";
                // line 43
                echo "\t    <tr id=\"forum-";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 43);
                echo "\">
\t\t";
                // line 44
                // line 45
                echo "\t\t\t<td title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 45);
                echo "\">
\t\t\t";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "\t\t\t   ";
                    // line 48
                    echo "\t\t\t      <span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 48);
                    echo "</span>
\t\t\t   ";
                    // line 49
                    // line 50
                    echo "\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t <i class=\"row-icon-font icon-moon-default";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 52)) {
                        echo " icon-moon-link2";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 52)) {
                        echo " forum-unread";
                    } else {
                        echo " forum-read";
                    }
                    echo "\"></i>
\t\t\t</span>
\t\t\t";
                }
                // line 55
                echo "\t\t\t<i class=\"row-icon-font-mini";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LOCKED_FORUM", [], "any", false, false, false, 55)) {
                    echo " icon-moon-lock forum-list-lock";
                }
                echo "\"></i>
\t\t\t";
                // line 56
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 56))) {
                    echo " <!-- <a class=\"btn-rss pull-right hidden-xs hidden-sm\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 56);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 56);
                    echo "\"><i class=\"fa fa-rss rss-color-forum\"></i></a> --> ";
                }
                // line 57
                echo "\t\t\t  <span class=\"desc-wrapper\">
\t\t\t  ";
                // line 58
                // line 59
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 59);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 59);
                echo "</a><br />
\t\t\t\t";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 60)) {
                    echo "<span class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 60);
                    echo "</span><br />";
                }
                // line 61
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "\t\t\t\t<span class=\"forum-mods\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_MODERATOR_STR", [], "any", false, false, false, 62);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 62);
                    echo "</span>
\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["forumrow"], "SUBFORUMS", [], "any", false, false, false, 64) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LIST_SUBFORUMS", [], "any", false, false, false, 64))) {
                    // line 65
                    echo "\t\t\t\t ";
                    // line 66
                    echo "\t\t\t\t <span class=\"subforums\">
\t\t\t\t  <strong>";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_SUBFORUM_STR", [], "any", false, false, false, 67);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>
                    ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 68));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        echo "\t
                        ";
                        // line 69
                        echo "\t\t\t\t\t
\t\t\t\t             ";
                        // line 70
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 70)) {
                            echo "<i class=\"fa fa-external-link-square\"></i>&nbsp;";
                        }
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 70);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 70)) {
                            echo " target=\"_blank\"";
                        }
                        echo " class=\"subforum";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 70)) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 70)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                        } elseif (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 70)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBFORUM_LINK");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 70);
                        echo "</a>";
                        if ( !twig_get_attribute($this->env, $this->source, $context["subforum"], "S_LAST_ROW", [], "any", false, false, false, 70)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        }
                        // line 71
                        echo "\t\t\t\t\t    ";
                        // line 72
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " 
\t\t\t\t </span>
\t\t\t\t ";
                    // line 74
                    // line 75
                    echo "\t\t\t\t";
                }
                // line 76
                echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "\t\t\t<td colspan=\"2\"><span class=\"stats-wrapper\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_REDIRECTS");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 79);
                    echo "</span></td>
            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 80
$context["forumrow"], "BBSOI_SCAT", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "\t\t\t<td colspan=\"2\">&nbsp;</td>\t\t
            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 82
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "\t\t\t<td>&nbsp;</td>\t\t
\t\t\t<td>&nbsp;</td>\t\t\t\t
\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 85
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "\t\t\t<td class=\"stats-col\">
\t\t\t <span class=\"stats-wrapper\">
\t\t\t ";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 88);
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo "&nbsp;<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 88);
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo " 
\t\t\t ";
                    // line 89
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 89)) {
                        // line 90
                        echo "\t\t\t  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 90);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUMLIST_UNAPPROVED");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 91
$context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "\t\t\t  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 92);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUMLIST_UNAPPROVED_POST");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    }
                    // line 94
                    echo "\t\t\t ";
                    // line 95
                    echo "\t\t\t </span>
\t\t\t</td>\t
\t\t\t<td>
\t\t\t  <span class=\"last-wrapper text-overflow\">
\t\t\t   ";
                    // line 99
                    // line 100
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 100)) {
                        // line 101
                        echo "\t\t\t\t ";
                        // line 102
                        echo "\t\t\t\t <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 102);
                        echo "\" title=\"\" class=\"lastsubject\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 102);
                        echo "</a><br />
\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 104)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo "&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 104);
                        echo "
\t\t\t\t\t";
                        // line 105
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            echo "<a class=\"moderator-item\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 105);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUMLIST_LASTPOST");
                            echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
                        }
                        // line 106
                        echo "\t\t\t\t\t<br /><span class=\"forum-time\"><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 106);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 106);
                        echo "</time></span>
\t\t\t\t";
                    } else {
                        // line 108
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 108)) {
                            // line 109
                            echo "\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 109));
                            echo "
\t\t\t\t\t";
                        } else {
                            // line 111
                            echo "\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                            echo "
\t\t\t\t\t";
                        }
                        // line 113
                        echo "\t\t\t\t";
                    }
                    // line 114
                    echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                }
                // line 117
                echo "\t\t";
                echo "\t
\t\t</tr>
\t";
                // line 119
                echo "\t
\t";
            }
            // line 121
            echo "
\t";
            // line 122
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 122)) {
                // line 123
                echo "\t </tbody>
\t</table>
\t</div>
\t</div>
\t";
                // line 127
                // line 128
                echo "\t";
            }
            // line 129
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "\t<div class=\"well\">
\t\t<strong>";
            // line 132
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 132,  439 => 131,  433 => 129,  430 => 128,  429 => 127,  423 => 123,  421 => 122,  418 => 121,  414 => 119,  409 => 117,  404 => 114,  401 => 113,  395 => 111,  389 => 109,  386 => 108,  378 => 106,  370 => 105,  362 => 104,  354 => 102,  352 => 101,  349 => 100,  348 => 99,  342 => 95,  340 => 94,  332 => 92,  330 => 91,  323 => 90,  321 => 89,  311 => 88,  307 => 86,  305 => 85,  301 => 83,  299 => 82,  296 => 81,  294 => 80,  287 => 79,  285 => 78,  281 => 76,  278 => 75,  277 => 74,  268 => 72,  266 => 71,  236 => 70,  233 => 69,  227 => 68,  222 => 67,  219 => 66,  217 => 65,  214 => 64,  205 => 62,  202 => 61,  196 => 60,  189 => 59,  188 => 58,  185 => 57,  173 => 56,  166 => 55,  153 => 52,  150 => 51,  147 => 50,  146 => 49,  141 => 48,  139 => 47,  137 => 46,  132 => 45,  131 => 44,  126 => 43,  124 => 42,  122 => 41,  119 => 40,  117 => 39,  111 => 35,  106 => 33,  102 => 32,  98 => 31,  95 => 30,  94 => 29,  88 => 25,  76 => 24,  72 => 22,  69 => 21,  68 => 20,  65 => 19,  61 => 17,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
