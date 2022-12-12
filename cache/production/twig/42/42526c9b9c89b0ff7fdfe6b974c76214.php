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

/* overall_header.html */
class __TwigTemplate_d6a2b53468b1ea488a9c02f93a4e86f7 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"designer\" content=\"SiteSplat https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat\">
<meta content=\"";
        // line 7
        echo ($context["SITENAME"] ?? null);
        echo "\" property=\"og:site_name\">
<meta name=\"Description\" content=\"";
        // line 8
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "\">
";
        // line 9
        // line 10
        echo "<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
";
        // line 11
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 12
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "&#40;";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo "&#41;&nbsp;";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "&nbsp;&#45;&nbsp;";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo "&nbsp;&#45;&nbsp;";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        echo "&nbsp;&#45;&nbsp;";
        echo ($context["SITENAME"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 16
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 17
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 18
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 19
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 20
            echo "    ";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                if (($context["S_BBEMOJI"] ?? null)) {
                    echo ($context["TOPIC_TITLE_UNPARSED"] ?? null);
                } else {
                    echo ($context["TOPIC_TITLE"] ?? null);
                }
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 21
        }
        // line 23
        echo "
";
        // line 24
        if (($context["U_CANONICAL"] ?? null)) {
            // line 25
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 27
        echo "
";
        // line 36
        echo "<!-- Fonts here below this comment -->
<link rel=\"stylesheet\" href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600'>
<link rel=\"stylesheet\" href='//fonts.googleapis.com/css?family=Asap+Condensed:600'>
<link rel=\"stylesheet\" href='";
        // line 39
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/owl-carousel/owl.carousel.min.css'>
<link rel=\"stylesheet\" href='";
        // line 40
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/owl-carousel/owl.theme.default.min.css'>

<!-- CSS files start here -->
<link rel=\"stylesheet\" href=\"";
        // line 43
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/stylesheet.css\">
";
        // line 44
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 45
            echo "<link rel=\"stylesheet\" href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css\">
";
        }
        // line 47
        // line 48
        echo "
";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 49);
        echo "

<!-- Remove the conditional below to use the custom CSS without FLATBOOTS Mini CMS Extension -->
<link rel=\"stylesheet\" href=\"";
        // line 52
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/custom.css\">
";
        // line 53
        // line 54
        echo "<!-- CSS files stop here -->

";
        // line 56
        // line 57
        echo "
<!-- magic dust -->
<!-- //cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js -->
<script rel=\"preload\" as=\"script\" src=\"";
        // line 60
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/head.load.min.js\"></script>

</head>
<body data-spy=\"scroll\" data-target=\".scrollspy\" id=\"phpbb\" class=\"section-";
        // line 63
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">
";
        // line 64
        // line 65
        echo "
<header class=\"header-block new-customize-wellnessherbs\">
\t<div class=\"header-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-5 col-xs-5\">
\t\t\t\t\t<nav class=\"navbar\">
\t\t\t\t\t\t<div class=\"top-header-nav\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav header-icon-list header-icon-margin\">
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"/\"><span><i class=\"icon icon-home3\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-original-title=\"Home\"></i></span><span class=\"hidden-xs header-text\">Home</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"https://www.wellnessherbs.com/who-we-are\"><span><i class=\"icon icon-iconmonstr-award-23-badge\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-original-title=\"About Us\"></i></span><span class=\"hidden-xs header-text\">About
\t\t\t\t\t\t\t\t\t\t\tUs</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"https://www.wellnessherbs.com/contact-us\"><span><i class=\"icon icon-mail\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"tooltip\" data-placement=\"bottom\" title=\"\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-original-title=\"Contact\"></i></span><span class=\"hidden-xs header-text\">Contact</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 text-right col-md-3 hidden-md hidden-sm hidden-xs\">
\t\t\t\t\t<div class=\"header-top-left-block\">
\t\t\t\t\t\t<i class=\"icon svg-icon-support\"></i>
\t\t\t\t\t\t<span class=\"ani\">

\t\t\t\t\t\t\t<a href=\"https://www.wellnessherbs.com/index.php?route=information/consultation\">Online Homeopathic Consultation</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-7 col-xs-7 full-with-M header-icon-mobile\">
\t\t\t\t\t<div class=\"right-top-panel\">
\t\t\t\t\t\t<nav class=\"navbar\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<div class=\"top-header-nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav pull-right header-icon-list header-icon-margin\">
\t\t\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"tel:1.516.514.3536\"><span><i class=\"fa fa-phone\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-placement=\"bottom\" title=\"\" data-original-title=\"1.516.514.3536\"></i></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"header-text hidden-xs hidden-sm\">1.516.514.3536</span></a></li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav header-social-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://facebook.com/hherbals/posts\" target=\"_blank\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/hherbals\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/company/wellnessherbs/\" target=\"_blank\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/heavenlyherbalsinc/\" target=\"_blank\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.youtube.com/channel/UCcluXZp-O17fX5q0sJqNX_w\" target=\"_blank\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.pinterest.com/heavenlyherbals\" target=\"_blank\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"header-bottom-part\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row mobile-flex\">
\t\t\t\t<div class=\"col-lg-3 col-md-2 col-sm-3 col-xs-3 right-padding logo-part-nav-left in-mobile\">
\t\t\t\t\t<div class=\"bottom-header-left-panel\">
\t\t\t\t\t\t<div class=\"logo-box\"> <a href=\"https://www.wellnessherbs.com/\"><img src=\"";
        // line 138
        echo ($context["ROOT_PATH"] ?? null);
        echo "images/heavenly-logo-dark.svg\"
\t\t\t\t\t\t\t\t\talt=\"Heavenly Herbals | Organic Herbal Supplements for Complete Wellness\"></a> </div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-12 mobile-search\">
\t\t\t\t\t<form method=\"get\" action=\"";
        // line 144
        echo ($context["U_SEARCH"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t\t\t<div class=\"input-group\" id=\"search\">
\t\t\t\t\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"text\" title=\"";
        // line 147
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
        echo "\" class=\"form-control search-box\" name=\"search\" value=\"\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
        echo "\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn-search-click\"><span class=\"fa fa-search\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\tSearch</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"form-control search-box\" name=\"search\" value=\"\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-search-click\"><span class=\"fa fa-search\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\tSearch</button>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-container\">
\t\t\t\t\t\t\t\t<div class=\"isearch-container\" role=\"isearch-container-";
        // line 161
        echo ($context["id"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t";
        // line 162
        echo ($context["content"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-loading\">
\t\t\t\t\t\t\t\t<div class=\"isearch-loading text-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-spin fa-circle-o-notch\"></i> ";
        // line 168
        echo ($context["text"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-nothing\">
\t\t\t\t\t\t\t\t<div class=\"isearch-nothing text-center\">";
        // line 173
        echo ($context["text"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-more\">
\t\t\t\t\t\t\t\t<a role=\"isearch-tab\" class=\"isearch-more text-center\" href=\"";
        // line 177
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["text"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-price\">
\t\t\t\t\t\t\t\t<span class=\"isearch-price-value\">";
        // line 181
        echo ($context["price"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-special\">
\t\t\t\t\t\t\t\t<span class=\"isearch-price-value isearch-price-special\">";
        // line 185
        echo ($context["special"] ?? null);
        echo "</span><br /><span class=\"isearch-old-value\">";
        echo ($context["price"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-product\">
\t\t\t\t\t\t\t\t<a role=\"isearch-tab\" href=\"";
        // line 189
        echo ($context["href"] ?? null);
        echo "\" class=\"isearch-product\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-left isearch-product-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 191
        echo ($context["image"] ?? null);
        echo "\" alt=\"";
        echo ($context["alt"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row isearch-product-info\">
\t\t            \t\t<div class=\"col-xs-8\">
\t\t               \t\t<h4 class=\"isearch-heading-product\">";
        // line 195
        echo ($context["name"] ?? null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"isearch-model\">";
        // line 196
        echo ($context["model"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t            \t\t<div class=\"col-xs-4 text-right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"isearch-price\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 200
        echo ($context["price"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t        \t\t\t</div>
\t\t    \t\t\t\t</a>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-suggestion\">
\t\t\t\t\t\t\t\t<a role=\"isearch-tab\" href=\"";
        // line 208
        echo ($context["href"] ?? null);
        echo "\" class=\"isearch-suggestion\">";
        echo ($context["keyword"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-heading-suggestion\">
\t\t\t\t\t\t\t\t<h3 class=\"isearch-heading isearch-heading-suggestion\">Search Term Suggestions</h3>
\t\t\t\t\t\t\t</script>

\t\t\t\t\t\t\t<script type=\"text/template\" role=\"isearch-heading-product\">
\t\t\t\t\t\t\t\t<h3 class=\"isearch-heading isearch-heading-product\">Top Product Results</h3>
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-5 col-sm-4 col-xs-9 logo-part-nav-right\">
\t\t\t\t\t<div class=\"search-block\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-10 col-sm-9 col-xs-10 left-padding text-right\">
\t\t\t\t\t\t\t\t<div class=\"top-header-nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav pull-right\">
\t\t\t\t\t\t\t\t\t\t";
        // line 227
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\"><span><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon svg-icon-login\"></i></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"header-text hidden-sm hidden-xs\">Login</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 231
            echo ($context["U_REGISTER"] ?? null);
            echo "\"><span><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon svg-icon-register\"></i></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"header-text hidden-sm hidden-xs\">Register</span></a></li>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 235
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-dashboard\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"header-text hidden-sm hidden-xs\">";
            // line 240
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu user-login-drop arrow-up header-icon-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-content navbar-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-7 col-xs-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 248
            if (($context["U_ACP"] ?? null)) {
                echo "<a class=\"btn btn-info btn-sm btn-block\" href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-user-md\"></i>&nbsp;";
                // line 249
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_PANEL_GENERAL");
                echo "</a>";
            }
            // line 250
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["U_MCP"] ?? null)) {
                echo "<a class=\"btn btn-warning btn-sm btn-block\" href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-legal\"></i>&nbsp;";
                // line 251
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR_PANEL_GENERAL");
                echo "</a>";
            }
            // line 252
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 259
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 260
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 263
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 265
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 266
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 270
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 273
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 274
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 282
        echo "\t\t\t\t\t\t\t\t\t\t<!-- <li class=\"hide-small\"><a href=\"https://www.wellnessherbs.com/wishlist\"><span><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon svg-icon-wishlist\"></i></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"header-text hidden-sm hidden-xs\">Favorites</span></a></li> -->

\t\t\t\t\t\t\t\t\t\t<li><a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"https://www.wellnessherbs.com/insight-blog\"><span><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon icon-blog-green\"></i></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"header-text hidden-xs hidden-sm\">Blog</span></a></li>


\t\t\t\t\t\t\t\t\t\t<li class=\"hide-small\"><a href=\"https://affiliate.wellnessherbs.com/\"><span><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon svg-icon-affiliate\"></i></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"header-text hidden-sm hidden-xs\">Affiliate</span></a></li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-2 left-padding text-right cart-block\">
\t\t\t\t\t\t\t\t<div id=\"cart\">
\t\t\t\t\t\t\t\t\t<a href=\"https://www.wellnessherbs.com/\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-block dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"basket-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span id=\"cart-total\">0</span> -->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>

";
        // line 319
        if ( !($context["HIDE_HEADER"] ?? null)) {
            // line 320
            if (($context["IN_BADGE"] ?? null)) {
                // line 321
                $location = "@sitesplat_badge/header_badge_teaser.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("@sitesplat_badge/header_badge_teaser.html", "overall_header.html", 321)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
            } else {
                // line 323
                $location = "addons/header_teaser_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("addons/header_teaser_body.html", "overall_header.html", 323)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
            }
        } else {
            // line 326
            echo "<div style=\"padding-top:30px;\" class=\"space-teaser\"></div>
";
        }
        // line 328
        echo "
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">

\t\t
    ";
        // line 334
        // line 335
        echo "\t<div class=\"breadcrumb-line clearfix\">
\t\t<ul class=\"breadcrumb\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">
\t\t";
        // line 337
        $value = " itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        $context['definition']->set('MICRODATA', $value);
        // line 338
        echo "        ";
        $context["navlink_position"] = 1;
        // line 339
        echo "\t\t";
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 340
            echo "\t\t   <li><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" aria-label=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "\"><span class=\"icon fa-solid fa-megaphone fa-fw\"></span></a></li>
\t\t   ";
            // line 341
            // line 342
            echo "\t\t   <li ";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 342);
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"item\"><span itemprop=\"name\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></li>
\t\t   ";
            // line 343
            echo " 
\t\t";
        } else {
            // line 345
            echo "\t\t   <li><a href=\"";
            echo ($context["U_INDEX"] ?? null);
            echo "\" aria-label=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
            echo "\"><span class=\"icon fa fa-solid fa-megaphone fa-fw\"></span></a></li>
\t\t   ";
            // line 346
            // line 347
            echo "\t\t   <li ";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 347);
            echo "><a href=\"";
            echo ($context["U_INDEX"] ?? null);
            echo "\" data-navbar-reference=\"index\" itemprop=\"item\"><span itemprop=\"name\">Board Announcements</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></li>
\t\t   ";
            // line 348
            echo " 
\t\t";
        }
        // line 350
        echo "
\t\t  ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "navlinks", [], "any", false, false, false, 351));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 352
            echo "\t\t   ";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlinks"], "BREADCRUMB_NAME", [], "any", true, true, false, 352)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlinks"], "BREADCRUMB_NAME", [], "any", false, false, false, 352), twig_get_attribute($this->env, $this->source, $context["navlinks"], "FORUM_NAME", [], "any", false, false, false, 352))) : (twig_get_attribute($this->env, $this->source, $context["navlinks"], "FORUM_NAME", [], "any", false, false, false, 352)));
            // line 353
            echo "\t\t   ";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_BREADCRUMB", [], "any", true, true, false, 353)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_BREADCRUMB", [], "any", false, false, false, 353), twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_VIEW_FORUM", [], "any", false, false, false, 353))) : (twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_VIEW_FORUM", [], "any", false, false, false, 353)));
            // line 354
            echo "\t\t   <li ";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 354);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 354)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 354);
            }
            echo "><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></li>\t\t 
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo " 
\t\t</ul>
\t\t";
        // line 357
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ((($context["SCRIPT_NAME"] ?? null) == "viewforum") || (($context["SCRIPT_NAME"] ?? null) == "viewtopic")))) {
            // line 358
            echo "\t\t<ul class=\"breadcrumb-buttons visible-xxs\">
\t\t    <li>
\t\t\t  <a href=\"#\" title=\"\" data-toggle=\"modal\" data-target=\"#BreadcrumbMap\">
\t\t\t   <i class=\"icon fa fa-sitemap\"></i>
\t\t\t  </a>
\t\t   </li>
\t\t</ul>
\t\t";
        }
        // line 366
        echo "\t\t";
        echo "  
\t</div>
    ";
        // line 368
        // line 369
        echo "\t
\t<div id=\"page-body\">
\t
\t";
        // line 372
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 373
            echo "\t<div class=\"alert alert-warning fade in\">
\t\t<button data-dismiss=\"alert\" class=\"close\"><span class=\"awe-remove-circle\"></span></button>
\t\t<i class=\"fa fa-info\"></i>&nbsp;<strong>";
            // line 375
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong>&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
\t</div>
\t";
        }
        // line 378
        echo "\t
    ";
        // line 379
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  813 => 379,  810 => 378,  801 => 375,  797 => 373,  795 => 372,  790 => 369,  789 => 368,  784 => 366,  774 => 358,  772 => 357,  768 => 355,  747 => 354,  744 => 353,  741 => 352,  737 => 351,  734 => 350,  730 => 348,  720 => 347,  719 => 346,  712 => 345,  708 => 343,  696 => 342,  695 => 341,  688 => 340,  685 => 339,  682 => 338,  679 => 337,  675 => 335,  674 => 334,  666 => 328,  662 => 326,  648 => 323,  635 => 321,  633 => 320,  631 => 319,  592 => 282,  581 => 274,  575 => 273,  570 => 270,  563 => 266,  557 => 265,  554 => 264,  552 => 263,  546 => 260,  540 => 259,  531 => 252,  527 => 251,  520 => 250,  516 => 249,  510 => 248,  499 => 240,  492 => 235,  485 => 231,  478 => 228,  476 => 227,  452 => 208,  441 => 200,  434 => 196,  430 => 195,  421 => 191,  416 => 189,  407 => 185,  400 => 181,  391 => 177,  384 => 173,  376 => 168,  367 => 162,  363 => 161,  344 => 147,  338 => 144,  329 => 138,  254 => 65,  253 => 64,  245 => 63,  239 => 60,  234 => 57,  233 => 56,  229 => 54,  228 => 53,  224 => 52,  218 => 49,  215 => 48,  214 => 47,  208 => 45,  206 => 44,  202 => 43,  196 => 40,  192 => 39,  187 => 36,  184 => 27,  178 => 25,  176 => 24,  173 => 23,  171 => 21,  154 => 20,  141 => 19,  130 => 18,  119 => 17,  108 => 16,  97 => 15,  86 => 14,  84 => 13,  66 => 12,  62 => 11,  59 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
