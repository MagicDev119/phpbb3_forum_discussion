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

/* posting_buttons.html */
class __TwigTemplate_b5f0c8e16579422b48e5b0085f8f230d extends \Twig\Template
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
        echo "<script>
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 3)) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]','[/flash]','[size=]','[/size]'";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_NAME", [], "any", false, false, false, 9);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}
</script>
<script src=\"";
        // line 27
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/editor.js\"></script>

";
        // line 29
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 30
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<label class=\"control-label\">";
            // line 31
            echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
\t<div id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></div>
</div>
<div class=\"space10\"></div>
";
            // line 35
            echo "  
";
            // line 36
            if ( !($context["S_BBCODEORDER"] ?? null)) {
                // line 37
                echo "<div id=\"imgurAnchor\" class=\"btn-toolbar posting-btns\" role=\"toolbar\">
";
                // line 38
                // line 39
                echo "\t<div class=\"btn-group\">
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"b\" name=\"addbbcode0\" onclick=\"bbstyle(0);\" title=\"";
                // line 40
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_B_HELP");
                echo "\"><i class=\"fa fa-bold\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"i\" name=\"addbbcode2\" onclick=\"bbstyle(2);\" title=\"";
                // line 41
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_I_HELP");
                echo "\"><i class=\"fa fa-italic\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"u\" name=\"addbbcode4\" onclick=\"bbstyle(4);\" title=\"";
                // line 42
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_U_HELP");
                echo "\"><i class=\"fa fa-underline\"></i></button>
\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"l\" name=\"addbbcode10\" onclick=\"bbstyle(10);\" title=\"";
                // line 46
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_L_HELP");
                echo "\"><i class=\"fa fa-list\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"o\" name=\"addbbcode12\" onclick=\"bbstyle(12);\" title=\"";
                // line 47
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_O_HELP");
                echo "\"><i class=\"fa fa-list-ol\"></i></button>
         <button class=\"btn btn-default\" type=\"button\" accesskey=\"y\" name=\"addlistitem\" onclick=\"bbstyle(-1);\" title=\"";
                // line 48
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_LISTITEM_HELP");
                echo "\"><i class=\"fa fa-asterisk\"></i></button>
    </div>

\t<div class=\"btn-group\">
\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"c\" name=\"addbbcode8\" onclick=\"bbstyle(8);\" title=\"";
                // line 52
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_C_HELP");
                echo "\"><i class=\"fa fa-code\"></i></button>
        ";
                // line 53
                if (($context["S_BBCODE_QUOTE"] ?? null)) {
                    // line 54
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"q\" name=\"addbbcode6\" onclick=\"bbstyle(6);\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_Q_HELP");
                    echo "\"><i class=\"fa fa-comment\"></i></button>
\t    ";
                }
                // line 55
                echo " 
\t\t";
                // line 56
                if (($context["S_BBCODE_IMG"] ?? null)) {
                    // line 57
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"p\" name=\"addbbcode14\" onclick=\"bbstyle(14);\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_P_HELP");
                    echo "\"><i class=\"fa fa-picture-o\"></i></button>
\t    ";
                }
                // line 59
                echo "\t    ";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 60
                    echo "\t     <button class=\"btn btn-default\" type=\"button\" accesskey=\"w\" name=\"addbbcode16\" onclick=\"bbstyle(16);\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_W_HELP");
                    echo "\"><i class=\"fa fa-link\"></i></button>
\t\t";
                }
                // line 62
                echo "\t</div>
\t
\t<div class=\"btn-group hidden-xs\">
\t\t<!--// flash no mooorrreeeeee --> 
\t\t <button class=\"btn btn-default\" type=\"button\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
                // line 66
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_COLOR");
                echo "\" onclick=\"change_palette();\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_S_HELP");
                echo "\"><i class=\"fa fa-tint\"></i></button>
\t
\t";
                // line 68
                // line 69
                echo "\t
";
                // line 77
                echo "\t
\t";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 79
                    echo "\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG", [], "any", false, false, false, 79) == "youtube")) {
                        // line 80
                        echo "\t <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 80);
                        echo "\" onclick=\"bbstyle(";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 80);
                        echo ");\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_HELPLINE", [], "any", false, false, false, 80);
                        echo "\"><i class=\"fa fa-youtube\"></i></button>
\t";
                    }
                    // line 82
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "\t
\t";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 85
                    echo "\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG", [], "any", false, false, false, 85) == "c")) {
                        // line 86
                        echo "\t <button class=\"btn btn-default\" type=\"button\" name=\"addbbcode";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 86);
                        echo "\" onclick=\"bbstyle(";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 86);
                        echo ");\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_HELPLINE", [], "any", false, false, false, 86);
                        echo "\"><i class=\"fa fa-text-width\"></i></button>
\t";
                    }
                    // line 88
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "   </div>

\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode20\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
                // line 91
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODE_F_HELP");
                echo "\">
\t\t<option value=\"50\">";
                // line 92
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_TINY");
                echo "</option>
\t\t<option value=\"85\">";
                // line 93
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_SMALL");
                echo "</option>
\t\t<option data-icon=\"fa fa-font\" value=\"100\" selected=\"selected\">";
                // line 94
                echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_NORMAL");
                echo "</option>
\t\t";
                // line 95
                if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 150))) {
                    // line 96
                    echo "\t\t\t<option value=\"150\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_LARGE");
                    echo "</option>
\t\t\t";
                    // line 97
                    if (( !($context["MAX_FONT_SIZE"] ?? null) || (($context["MAX_FONT_SIZE"] ?? null) >= 200))) {
                        // line 98
                        echo "\t\t\t\t<option value=\"200\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FONT_HUGE");
                        echo "</option>
\t\t\t";
                    }
                    // line 100
                    echo "\t\t";
                }
                // line 101
                echo "\t</select>
\t
\t<select class=\"selectpicker hidden-xs\" data-style=\"btn-default\" data-width=\"auto\" name=\"addbbcode_custom\" onchange=\"bbstyle(this.form.addbbcode_custom.options[this.form.addbbcode_custom.selectedIndex].value*1);this.form.addbbcode_custom.selectedIndex = 0;\">
\t  <option data-icon=\"fa fa-cog\" value=\"100\" selected=\"selected\">";
                // line 104
                echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODES");
                echo "</option>
      ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_tags", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 106
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_ID", [], "any", false, false, false, 106);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_HELPLINE", [], "any", false, false, false, 106);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_tags"], "BBCODE_TAG", [], "any", false, false, false, 106);
                    echo "</option>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "   
    </select>
";
                // line 109
                // line 110
                echo "</div>
";
            }
            // line 112
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 112,  319 => 110,  318 => 109,  314 => 107,  301 => 106,  297 => 105,  293 => 104,  288 => 101,  285 => 100,  279 => 98,  277 => 97,  272 => 96,  270 => 95,  266 => 94,  262 => 93,  258 => 92,  254 => 91,  250 => 89,  244 => 88,  234 => 86,  231 => 85,  227 => 84,  224 => 83,  218 => 82,  208 => 80,  205 => 79,  201 => 78,  198 => 77,  195 => 69,  194 => 68,  187 => 66,  181 => 62,  175 => 60,  172 => 59,  166 => 57,  164 => 56,  161 => 55,  155 => 54,  153 => 53,  149 => 52,  142 => 48,  138 => 47,  134 => 46,  127 => 42,  123 => 41,  119 => 40,  116 => 39,  115 => 38,  112 => 37,  110 => 36,  107 => 35,  99 => 31,  96 => 30,  94 => 29,  89 => 27,  82 => 23,  75 => 19,  54 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_buttons.html", "");
    }
}
