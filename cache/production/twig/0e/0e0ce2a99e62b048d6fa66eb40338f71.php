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
                echo "\t   <div class=\"panel panel-forum forum-list-body\">
\t     <div class=\"panel-heading\">
\t\t\t\t<ul class=\"breadcrumb\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">
\t\t\t\t\t<li><a href=\"";
                // line 25
                echo ($context["U_INDEX"] ?? null);
                echo "\" aria-label=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                echo "\"><span class=\"icon fa fa-solid fa-megaphone fa-fw\"></span></a></li>
\t\t\t\t\t";
                // line 26
                // line 27
                echo "\t\t\t\t\t<li ";
                echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 27);
                echo ">";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 27)) {
                    echo "<a
\t\t\t\t\t\thref=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 28);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 28);
                    echo "</a>";
                } elseif (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 28)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LINKS");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                }
                // line 29
                echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 30
                // line 31
                echo "\t\t\t\t</ul>
\t\t </div>
\t\t <div class=\"panel-inner\">
\t\t<table class=\"footable table table-striped table-primary table-hover\">
\t\t<thead>
\t\t";
                // line 36
                // line 37
                echo "\t\t\t<tr>
\t\t\t <th data-class=\"expand\">";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
                echo "</th>
\t\t\t <th class=\"large110\" data-hide=\"phone\">";
                // line 39
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_POSTS_STATISTICS");
                echo "</th>
\t\t\t <th class=\"large21\" data-hide=\"phone\">";
                // line 40
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</th>
\t\t\t</tr>
\t\t";
                // line 42
                echo "\t
\t\t</thead>
\t<tbody>
\t";
            }
            // line 46
            echo "\t";
            // line 47
            echo "\t
\t";
            // line 48
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t";
                // line 50
                echo "\t    <tr id=\"forum-";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 50);
                echo "\">
\t\t";
                // line 51
                // line 52
                echo "\t\t\t<td title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 52);
                echo "\">
\t\t\t";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "\t\t\t   ";
                    // line 55
                    echo "\t\t\t      <span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 55);
                    echo "</span>
\t\t\t   ";
                    // line 56
                    // line 57
                    echo "\t\t\t";
                } else {
                    // line 58
                    echo "\t\t\t<span class=\"icon-wrapper\">
\t\t\t <i class=\"row-icon-font icon-moon-default";
                    // line 59
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 59)) {
                        echo " icon-moon-link2";
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 59)) {
                        echo " forum-unread";
                    } else {
                        echo " forum-read";
                    }
                    echo "\"></i>
\t\t\t</span>
\t\t\t";
                }
                // line 62
                echo "\t\t\t<i class=\"row-icon-font-mini";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LOCKED_FORUM", [], "any", false, false, false, 62)) {
                    echo " icon-moon-lock forum-list-lock";
                }
                echo "\"></i>
\t\t\t";
                // line 63
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 63))) {
                    echo " <!-- <a class=\"btn-rss pull-right hidden-xs hidden-sm\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 63);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 63);
                    echo "\"><i class=\"fa fa-rss rss-color-forum\"></i></a> --> ";
                }
                // line 64
                echo "\t\t\t  <span class=\"desc-wrapper\">
\t\t\t  ";
                // line 65
                // line 66
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 66);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 66);
                echo "</a><br />
\t\t\t\t";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 67)) {
                    echo "<span class=\"description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 67);
                    echo "</span><br />";
                }
                // line 68
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "\t\t\t\t<span class=\"forum-mods\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_MODERATOR_STR", [], "any", false, false, false, 69);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 69);
                    echo "</span>
\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["forumrow"], "SUBFORUMS", [], "any", false, false, false, 71) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LIST_SUBFORUMS", [], "any", false, false, false, 71))) {
                    // line 72
                    echo "\t\t\t\t ";
                    // line 73
                    echo "\t\t\t\t <span class=\"subforums\">
\t\t\t\t  <strong>";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_SUBFORUM_STR", [], "any", false, false, false, 74);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>
                    ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 75));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        echo "\t
                        ";
                        // line 76
                        echo "\t\t\t\t\t
\t\t\t\t             ";
                        // line 77
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 77)) {
                            echo "<i class=\"fa fa-external-link-square\"></i>&nbsp;";
                        }
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 77);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 77)) {
                            echo " target=\"_blank\"";
                        }
                        echo " class=\"subforum";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 77)) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 77)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                        } elseif (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 77)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBFORUM_LINK");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 77);
                        echo "</a>";
                        if ( !twig_get_attribute($this->env, $this->source, $context["subforum"], "S_LAST_ROW", [], "any", false, false, false, 77)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        }
                        // line 78
                        echo "\t\t\t\t\t    ";
                        // line 79
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " 
\t\t\t\t </span>
\t\t\t\t ";
                    // line 81
                    // line 82
                    echo "\t\t\t\t";
                }
                // line 83
                echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "\t\t\t<td colspan=\"2\"><span class=\"stats-wrapper\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_REDIRECTS");
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 86);
                    echo "</span></td>
            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 87
$context["forumrow"], "BBSOI_SCAT", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "\t\t\t<td colspan=\"2\">&nbsp;</td>\t\t
            ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 89
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "\t\t\t<td>&nbsp;</td>\t\t
\t\t\t<td>&nbsp;</td>\t\t\t\t
\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 92
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "\t\t\t<td class=\"stats-col\">
\t\t\t <span class=\"stats-wrapper\">
\t\t\t ";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 95);
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo "&nbsp;<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 95);
                    echo "&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo " 
\t\t\t ";
                    // line 96
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "\t\t\t  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 97);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUMLIST_UNAPPROVED");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 98
$context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 98)) {
                        // line 99
                        echo "\t\t\t  <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 99);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUMLIST_UNAPPROVED_POST");
                        echo "\"><i class=\"fa fa-question-circle\"></i></a>
\t\t\t ";
                    }
                    // line 101
                    echo "\t\t\t ";
                    // line 102
                    echo "\t\t\t </span>
\t\t\t</td>\t
\t\t\t<td>
\t\t\t  <span class=\"last-wrapper text-overflow\">
\t\t\t   ";
                    // line 106
                    // line 107
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 107)) {
                        // line 108
                        echo "\t\t\t\t ";
                        // line 109
                        echo "\t\t\t\t <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 109);
                        echo "\" title=\"\" class=\"lastsubject\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 109);
                        echo "</a><br />
\t\t\t\t";
                    }
                    // line 111
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 111)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo "&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 111);
                        echo "
\t\t\t\t\t";
                        // line 112
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            echo "<a class=\"moderator-item\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 112);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("FORUMLIST_LASTPOST");
                            echo "\"><i class=\"mobile-post fa fa-sign-out\"></i></a>";
                        }
                        // line 113
                        echo "\t\t\t\t\t<br /><span class=\"forum-time\"><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 113);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 113);
                        echo "</time></span>
\t\t\t\t";
                    } else {
                        // line 115
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 115)) {
                            // line 116
                            echo "\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 116));
                            echo "
\t\t\t\t\t";
                        } else {
                            // line 118
                            echo "\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                            echo "
\t\t\t\t\t";
                        }
                        // line 120
                        echo "\t\t\t\t";
                    }
                    // line 121
                    echo "\t\t\t  </span>
\t\t\t</td>
\t\t\t";
                }
                // line 124
                echo "\t\t";
                echo "\t
\t\t</tr>
\t";
                // line 126
                echo "\t
\t";
            }
            // line 128
            echo "
\t";
            // line 129
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 129)) {
                // line 130
                echo "\t </tbody>
\t</table>
\t</div>
\t</div>
\t";
                // line 134
                // line 135
                echo "\t";
            }
            // line 136
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 138
            echo "\t<div class=\"well\">
\t\t<strong>";
            // line 139
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
        return array (  460 => 139,  457 => 138,  451 => 136,  448 => 135,  447 => 134,  441 => 130,  439 => 129,  436 => 128,  432 => 126,  427 => 124,  422 => 121,  419 => 120,  413 => 118,  407 => 116,  404 => 115,  396 => 113,  388 => 112,  380 => 111,  372 => 109,  370 => 108,  367 => 107,  366 => 106,  360 => 102,  358 => 101,  350 => 99,  348 => 98,  341 => 97,  339 => 96,  329 => 95,  325 => 93,  323 => 92,  319 => 90,  317 => 89,  314 => 88,  312 => 87,  305 => 86,  303 => 85,  299 => 83,  296 => 82,  295 => 81,  286 => 79,  284 => 78,  254 => 77,  251 => 76,  245 => 75,  240 => 74,  237 => 73,  235 => 72,  232 => 71,  223 => 69,  220 => 68,  214 => 67,  207 => 66,  206 => 65,  203 => 64,  191 => 63,  184 => 62,  171 => 59,  168 => 58,  165 => 57,  164 => 56,  159 => 55,  157 => 54,  155 => 53,  150 => 52,  149 => 51,  144 => 50,  142 => 49,  140 => 48,  137 => 47,  135 => 46,  129 => 42,  124 => 40,  120 => 39,  116 => 38,  113 => 37,  112 => 36,  105 => 31,  104 => 30,  101 => 29,  91 => 28,  84 => 27,  83 => 26,  77 => 25,  72 => 22,  69 => 21,  68 => 20,  65 => 19,  61 => 17,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
