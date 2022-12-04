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

/* posting_editor.html */
class __TwigTemplate_6e83e6a0c3c2c57d25366a2c9b841cb9 extends \Twig\Template
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
        echo "<fieldset>
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            // line 3
            echo "\t<div class=\"space10\"></div>
\t <div class=\"space10\"></div>
\t<div class=\"alert alert-info fade in\">
       ";
            // line 6
            echo ($context["ERROR"] ?? null);
            echo "
    </div>
\t";
        }
        // line 9
        echo "
\t";
        // line 10
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 11
            echo "\t<div class=\"hidden-xs\">
\t <div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"icon\">";
            // line 13
            echo $this->extensions['phpbb\template\twig\extension']->lang("ICON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t <div class=\"controls controls-row\"> 
      <div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\"><label for=\"icon\">";
            // line 15
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPIC_ICON");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_PM_ICON");
            }
            echo "</label></div>
     ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_icon", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<div class=\"radio\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 16);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 16);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "S_ICON_CHECKED", [], "any", false, false, false, 16);
                echo " tabindex=\"1\"><label for=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 16);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_IMG", [], "any", false, false, false, 16);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_WIDTH", [], "any", false, false, false, 16);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_HEIGHT", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ALT", [], "any", false, false, false, 16);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ALT", [], "any", false, false, false, 16);
                echo "\" /></label></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t </div> 
\t </div>
\t</div>
\t";
        }
        // line 21
        echo "
\t";
        // line 22
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 23
            echo "\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
            // line 24
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t<div class=\"controls controls-row\"> 
\t<div class=\"input-icon left\">
\t  <i class=\"fa fa-user\"></i>
       <input type=\"text\" class=\"form-control input-sm\" placeholder=\"\" tabindex=\"1\" name=\"username\" id=\"username\" value=\"";
            // line 28
            echo ($context["USERNAME"] ?? null);
            echo "\">
\t </div> 
\t</div> 
\t</div>
\t";
        }
        // line 33
        echo "
    ";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 37
            echo "\t<div class=\"control-group\"> 
\t<label class=\"control-label\" for=\"subject\">";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t<div class=\"row\">
\t <div class=\"";
            // line 40
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "col-md-12";
            } else {
                echo "col-xs-12 col-lg-8";
            }
            echo "\">
     ";
            // line 41
            echo "  
\t   <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
            // line 42
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "\" name=\"subject\" id=\"subject\" maxlength=\"";
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "100";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\">
\t ";
            // line 43
            // line 44
            echo "\t </div> 
\t </div> 
\t </div>
\t ";
            // line 47
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 48
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 49
                echo "\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 49)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 50
                echo "\t ";
            }
            // line 51
            echo "\t";
        }
        // line 52
        echo "
    ";
        // line 53
        // line 54
        echo "\t
\t ";
        // line 55
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 55)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 56
        echo "
\t <div class=\"space10\"></div>

 <div class=\"row\">
\t";
        // line 60
        // line 61
        echo "    <div class=\"";
        if (($context["S_EDIT_DRAFT"] ?? null)) {
            echo "col-md-12";
        } else {
            echo "col-md-8";
        }
        echo "\"> 
      <span id=\"dragNdrop\">
\t   <textarea class=\"form-control\" rows=\"10\" ";
        // line 63
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" ";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" placeholder=\"\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["IMGUR_IMAGE"] ?? null);
        echo ($context["GYAZO_IMAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t  </span> 
\t</div>
\t";
        // line 66
        // line 67
        echo "
\t<div class=\"col-md-4\">
    ";
        // line 69
        echo "\t
\t\t";
        // line 70
        if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 70)))) {
            // line 71
            echo "\t\t<strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SMILIES");
            echo "
\t\t  ";
            // line 72
            if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
                // line 73
                echo "\t\t\t<a class=\"btn-link btn-xs\" href=\"";
                echo ($context["U_MORE_SMILIES"] ?? null);
                echo "\" onclick=\"popup(this.href, 450, 350, '_phpbbsmilies'); return false;\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MORE_SMILIES");
                echo "\"><i class=\"fa fa-plus\"></i></a>
\t\t  ";
            }
            // line 75
            echo "\t\t</strong><br />
\t\t\t";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 77
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "A_SMILEY_CODE", [], "any", false, false, false, 77);
                echo "', true); return false;\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_IMG", [], "any", false, false, false, 77);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_WIDTH", [], "any", false, false, false, 77);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_HEIGHT", [], "any", false, false, false, 77);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_CODE", [], "any", false, false, false, 77);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_DESC", [], "any", false, false, false, 77);
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t";
        }
        // line 80
        echo "\t";
        echo "\t
\t<div class=\"hidden-xs\">\t
\t\t";
        // line 82
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 83
            echo "\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 83))) {
                echo "<hr />";
            }
            // line 84
            echo "\t\t";
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t";
            // line 85
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 86
                echo "\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t";
                // line 87
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t";
                // line 88
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t";
            }
            // line 90
            echo "\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t";
        }
        // line 92
        echo "\t\t";
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 93
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 94
            echo "\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<strong><a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 95
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<strong><a href=\"#topic-review\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 96
            echo "\t\t";
        }
        // line 97
        echo "\t </div>
\t</div>
 </div>
 ";
        // line 100
        // line 101
        echo "</fieldset>

";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", [], "any", false, false, false, 103) == 1)) {
            // line 104
            echo "
";
            // line 105
            if (($context["S_COMPOSE_PM"] ?? null)) {
                // line 106
                echo "</div> <!-- // needed for posting_pm_layout.html to close the tabbed panel -->
";
            }
            // line 107
            echo "\t

<div class=\"space10\"></div>

\t";
            // line 111
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 111) == 1))) {
                // line 112
                echo "\t\t<fieldset class=\"form-actions\">
\t\t\t";
                // line 113
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t";
                // line 114
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 115
                // line 116
                echo "\t\t\t";
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                    echo "\" onclick=\"load_draft = true;\"><span class=\"hidden-xs\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                    echo "</span><i class=\"visible-xs fa fa-upload fa-btn-fx\"></i></button>";
                }
                // line 117
                echo "\t\t\t";
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVING");
                    echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DRAFT");
                    echo "\"><span class=\"hidden-xs\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DRAFT");
                    echo "</span><i class=\"visible-xs fa fa-floppy-o fa-btn-fx\"></i></button>";
                }
                // line 118
                echo "\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
                echo "\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " >";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
                echo "</button>
\t\t\t<button type=\"submit\" class=\"btn btn-default\" data-loading-text=\"";
                // line 119
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                echo "&nbsp;<i class='fa fa-spin fa-spinner fa-lg icon-white'></i>\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "</button>
\t\t</fieldset>
\t";
            }
            // line 122
            echo "\t
<div class=\"space10\"></div>

";
            // line 125
            if ((($context["S_SHOW_ATTACH_BOX"] ?? null) && ($context["FILTERS"] ?? null))) {
                // line 126
                echo "<script>
function addClass(e,s){e.classList?e.classList.add(s):e.className+=\" \"+s}function removeClass(e,s){e.classList?e.classList.remove(s):e.className=e.className.replace(new RegExp(\"(^|\\\\b)\"+s.split(\" \").join(\"|\")+\"(\\\\b|\$)\",\"gi\"),\" \")}function txtDropClicked(){removeClassesOnFocus(!1),addClass(document.getElementById(\"message\"),\"dropzone-wrap\"),addClass(document.getElementById(\"dragNdrop\"),\"dropzone-content\")}function removeClassesOnFocus(e){var s=e===!1?document.getElementById(\"message\"):e.target;removeClass(s,\"dropzone-wrap\"),removeClass(s.parentNode,\"dropzone-content\")}window.addEventListener(\"load\",function(){document.getElementById(\"ToggleTxTDrop\").addEventListener(\"click\",txtDropClicked),document.getElementById(\"message\").addEventListener(\"focus\",removeClassesOnFocus)});
</script>
";
            }
            // line 130
            echo "
    <!-- // panel has-nav-tabs no-border with tab start tag here posting_layout.html -->
    <!-- // we also need to hide the tabbed panel if in drafts and the PM attach option is disabled -->
\t<div";
            // line 133
            if ((($context["S_SHOW_DRAFTS"] ?? null) &&  !($context["S_SHOW_ATTACH_BOX"] ?? null))) {
                echo " style=\"display:none;\"";
            }
            echo " class=\"panel has-nav-tabs panel-default\">
\t\t\t<ul class=\"nav nav-tabs\">\t
\t\t\t\t<li ";
            // line 135
            if (($context["S_SHOW_DRAFTS"] ?? null)) {
                echo "style=\"display:none;\"";
            }
            echo " class=\"";
            if ((($context["IMGUR_DELETEHASH"] ?? null) || ($context["GYAZO_DIRECT_LINK"] ?? null))) {
            } else {
                echo "active";
            }
            echo "\"><a data-toggle=\"tab\" href=\"#options-panel-below\"><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</span></a></li>
\t\t\t\t";
            // line 136
            if ((($context["S_SHOW_ATTACH_BOX"] ?? null) && ($context["FILTERS"] ?? null))) {
                echo "<li class=\"";
                if (($context["S_SHOW_DRAFTS"] ?? null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-attach-body-html\" id=\"ToggleTxTDrop\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_ATTACHMENT");
                echo "</span></a></li>";
            }
            // line 137
            echo "\t\t\t\t";
            if (((($context["SCRIPT_NAME"] ?? null) == "posting") && ($context["IN_IMGUR"] ?? null))) {
                echo "<li class=\"";
                if (($context["IMGUR_DELETEHASH"] ?? null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-imgur-html\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("IMGUR_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 138
            echo "\t\t\t\t";
            if (((($context["SCRIPT_NAME"] ?? null) == "posting") && ($context["IN_GYAZO"] ?? null))) {
                echo "<li class=\"";
                if (($context["GYAZO_DIRECT_LINK"] ?? null)) {
                    echo "active";
                }
                echo "\"><a data-toggle=\"tab\" href=\"#posting-gyazo-html\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GYAZO_UPLOAD_TITLE");
                echo "</span></a></li>";
            } else {
            }
            // line 139
            echo "\t\t\t\t";
            if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                echo "<li class=\"\"><a data-toggle=\"tab\" href=\"#posting-poll-html\"><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_POLL");
                echo "</span></a></li>";
            }
            // line 140
            echo "\t\t\t";
            // line 141
            echo "\t\t\t</ul>
\t
    <div class=\"tab-content panel-content\">
\t   
\t\t<div class=\"panel-body tab-pane";
            // line 145
            if ((($context["IMGUR_DELETEHASH"] ?? null) || ($context["GYAZO_DIRECT_LINK"] ?? null))) {
            } else {
                echo " active";
            }
            echo "\" id=\"options-panel-below\">
\t\t
\t\t";
            // line 147
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 147) == 1))) {
                // line 148
                echo "\t\t<fieldset>
\t\t";
                // line 149
                // line 150
                echo "\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 151
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo ($context["S_BBCODE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_bbcode\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_BBCODE");
                    echo "</label>
\t\t\t";
                }
                // line 153
                echo "\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 154
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo ($context["S_SMILIES_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_smilies\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_SMILIES");
                    echo "</label>
\t\t\t";
                }
                // line 156
                echo "\t\t\t";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 157
                    echo "\t\t\t <input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"disable_magic_url\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_MAGIC_URL");
                    echo "</label>
\t\t\t";
                }
                // line 159
                echo "\t\t\t";
                if (($context["S_SIG_ALLOWED"] ?? null)) {
                    // line 160
                    echo "\t\t\t <input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo ($context["S_SIGNATURE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"attach_sig\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_SIG");
                    echo "</label>
\t\t\t";
                }
                // line 162
                echo "\t\t\t";
                if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
                    // line 163
                    echo "\t\t\t <input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo ($context["S_NOTIFY_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"notify\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_REPLY");
                    echo "</label>
\t\t\t";
                }
                // line 165
                echo "\t\t\t";
                if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
                    // line 166
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"lock_topic\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_TOPIC");
                    echo "</label>
\t\t\t";
                }
                // line 168
                echo "\t\t\t";
                if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
                    // line 169
                    echo "\t\t\t <input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo ($context["S_LOCK_POST_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"lock_post\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST");
                    echo "&nbsp;&#91;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST_EXPLAIN");
                    echo "&#93;</label>
\t\t\t";
                }
                // line 171
                echo "\t\t\t";
                if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 172
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 174
                echo "\t\t\t";
                if ((($context["S_SOFTDELETE_ALLOWED"] ?? null) || ($context["S_DELETE_ALLOWED"] ?? null))) {
                    // line 175
                    echo "\t\t\t <input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    echo ($context["S_SOFTDELETE_CHECKED"] ?? null);
                    echo "><label class=\"check-control\" for=\"delete\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_SOFT");
                    echo "&nbsp;&#91;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_SOFT_WARN");
                    echo "&#93;</label>
\t\t\t <input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\"><label class=\"check-control\" for=\"delete_permanent\">";
                    // line 176
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_PERMANENT");
                    echo "&nbsp;&#91;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_PERMANENT_WARN");
                    echo "&#93;</label>\t
\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 179
                echo "\t\t\t
\t\t\t";
                // line 180
                if (($context["S_TYPE_TOGGLE"] ?? null)) {
                    // line 181
                    echo "\t\t    <div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_type-0\">";
                    // line 182
                    if (($context["S_EDIT_POST"] ?? null)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC_AS");
                    }
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label>
\t         <div class=\"controls controls-row\"> 
             ";
                    // line 184
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_type", [], "any", false, false, false, 184));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        // line 185
                        echo "\t\t\t  <input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 185);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 185);
                        echo "\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "S_CHECKED", [], "any", false, false, false, 185);
                        echo "><label class=\"radio-inline\" for=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 185);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "L_TOPIC_TYPE", [], "any", false, false, false, 185);
                        echo "</label>
\t\t\t ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "\t         </div> 
\t\t\t <div class=\"space10\"></div>
\t        </div>
\t\t\t";
                }
                // line 191
                echo "
\t\t\t";
                // line 192
                if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 193
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"topic_time_limit\">";
                    // line 194
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label><span class=\"help-block\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</span>
\t\t\t<div class=\"input-group col-xs-8 col-sm-2 col-md-2\">
\t\t       <input type=\"number\" class=\"form-control input-sm\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 196
                    echo ($context["TOPIC_TIME_LIMIT"] ?? null);
                    echo "\">
\t\t      <span class=\"input-group-addon\">";
                    // line 197
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DAYS");
                    echo "</span>
\t         </div>
\t\t\t <div class=\"space10\"></div>
\t       </div>
\t\t\t";
                }
                // line 202
                echo "\t\t\t
\t\t\t";
                // line 203
                if (($context["S_EDIT_REASON"] ?? null)) {
                    // line 204
                    echo "\t\t\t<div class=\"control-group\"> 
\t         <label class=\"control-label\" for=\"edit_reason\">";
                    // line 205
                    echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label>
\t        <div class=\"row\"> 
\t\t\t<div class=\"col-xs-8 col-sm-5 col-md-5\"> 
             <input type=\"text\" class=\"form-control input-sm\" placeholder=\"";
                    // line 208
                    echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_LINK_PLACEHOLDER");
                    echo "\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    echo ($context["EDIT_REASON"] ?? null);
                    echo "\">
\t        </div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
                }
                // line 213
                echo "\t\t ";
                echo "\t
\t\t</fieldset>
\t\t";
            }
            // line 216
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 216,  770 => 213,  760 => 208,  753 => 205,  750 => 204,  748 => 203,  745 => 202,  737 => 197,  733 => 196,  725 => 194,  722 => 193,  720 => 192,  717 => 191,  711 => 187,  694 => 185,  690 => 184,  680 => 182,  677 => 181,  675 => 180,  672 => 179,  664 => 176,  655 => 175,  652 => 174,  648 => 172,  645 => 171,  635 => 169,  632 => 168,  624 => 166,  621 => 165,  613 => 163,  610 => 162,  602 => 160,  599 => 159,  591 => 157,  588 => 156,  580 => 154,  577 => 153,  569 => 151,  566 => 150,  565 => 149,  562 => 148,  560 => 147,  552 => 145,  546 => 141,  544 => 140,  537 => 139,  525 => 138,  513 => 137,  503 => 136,  490 => 135,  483 => 133,  478 => 130,  472 => 126,  470 => 125,  465 => 122,  455 => 119,  442 => 118,  431 => 117,  420 => 116,  419 => 115,  415 => 114,  411 => 113,  408 => 112,  406 => 111,  400 => 107,  396 => 106,  394 => 105,  391 => 104,  389 => 103,  385 => 101,  384 => 100,  379 => 97,  376 => 96,  369 => 95,  360 => 94,  355 => 93,  352 => 92,  346 => 90,  341 => 88,  337 => 87,  332 => 86,  330 => 85,  325 => 84,  320 => 83,  318 => 82,  313 => 80,  310 => 79,  291 => 77,  287 => 76,  284 => 75,  276 => 73,  274 => 72,  269 => 71,  267 => 70,  264 => 69,  260 => 67,  259 => 66,  243 => 63,  233 => 61,  232 => 60,  226 => 56,  214 => 55,  211 => 54,  210 => 53,  207 => 52,  204 => 51,  201 => 50,  188 => 49,  184 => 48,  182 => 47,  177 => 44,  176 => 43,  162 => 42,  159 => 41,  151 => 40,  145 => 38,  142 => 37,  140 => 36,  137 => 35,  136 => 34,  133 => 33,  125 => 28,  117 => 24,  114 => 23,  112 => 22,  109 => 21,  103 => 17,  76 => 16,  68 => 15,  62 => 13,  58 => 11,  56 => 10,  53 => 9,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_editor.html", "");
    }
}
