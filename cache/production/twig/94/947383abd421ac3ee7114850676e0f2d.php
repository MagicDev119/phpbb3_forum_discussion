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

/* posting_attach_body.html */
class __TwigTemplate_2bb148444ac52f1cd607645345ca1af2 extends \Twig\Template
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
        echo "<div class=\"panel-body tab-pane ";
        if (($context["S_SHOW_DRAFTS"] ?? null)) {
            echo "active";
        }
        echo "\" id=\"posting-attach-body-html\">
\t<p>";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_ATTACHMENT_EXPLAIN");
        echo "
\t\t<span class=\"hidden\" id=\"drag-n-drop-message\">&nbsp;";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span>
\t\t";
        // line 4
        if ( !twig_test_empty(($context["MAX_ATTACHMENT_FILESIZE"] ?? null))) {
            echo "<p>";
            echo ($context["MAX_ATTACHMENT_FILESIZE"] ?? null);
            echo "</p>";
        }
        // line 5
        echo "\t</p>\t
<div class=\"clearfix\" id=\"attach-panel\">
    <fieldset id=\"attach-panel-basic\">
\t<label for=\"fileupload\">";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILENAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t <input type=\"file\" name=\"fileupload\" id=\"fileupload\" class=\"inputbox form-control\" /> 
\t <input type=\"submit\" name=\"add_file\" value=\"";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FILE");
        echo "\" class=\"btn btn-default\" onclick=\"upload = true;\" />
\t 
\t<label for=\"filecomment\">";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_COMMENT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t <textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox form-control\">";
        // line 13
        echo ($context["FILE_COMMENT"] ?? null);
        echo "</textarea>
\t</fieldset>

\t<div id=\"attach-panel-multi\">
\t <button type=\"button\" class=\"btn btn-default\" value=\"";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\"><i class=\"fa fa-cloud-upload\"></i>&nbsp;";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_ADD_FILES");
        echo "</button>
\t";
        // line 18
        // line 19
        echo "\t</div>

\t<div id=\"file-list-container\" class=\"";
        // line 21
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 21))) {
            echo " hidden";
        }
        echo "\">
\t <div id=\"file-list\">
\t\t<div class=\"attach-row panel panel-default panel-body\" id=\"attach-row-tpl\">
\t\t   <button type=\"button\" value=\"";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
        echo "\" class=\"close file-delete\"><i class=\"awe-remove-circle\"></i></button>\t
\t\t\t<div class=\"attach-name\">  
\t\t\t\t<span class=\"pull-left file-name text-overflow\"></span>
\t\t\t\t <span class=\"file-size\"></span>
\t\t\t\t  <span class=\"file-status\"></span>
\t\t\t\t   ";
        // line 29
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 30
            echo "\t\t\t\t    <button type=\"button\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
            echo "\" class=\"btn-link hidden file-inline-bbcode\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
            echo "</button>
\t\t\t\t   ";
        }
        // line 32
        echo "\t\t\t\t<div class=\"attach-comment\">
\t\t\t\t <textarea rows=\"1\" maxlength=\"45\" class=\"inputbox form-control form-plupload\" placeholder=\"";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_DESCRIPTION");
        echo "\"></textarea>
\t\t\t\t</div>
\t\t    </div>
\t\t\t<span class=\"file-progress progress\">
\t\t\t <span class=\"file-progress-bar progress-bar progress-bar-info progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\"></span>
\t\t\t</span>\t\t\t\t
\t\t</div>
\t\t
\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attach_row", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 42
            echo "\t\t<div class=\"attach-row panel panel-default panel-body\" data-attach-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ATTACH_ID", [], "any", false, false, false, 42);
            echo "\">
\t\t  ";
            // line 43
            // line 44
            echo "\t\t   <button type=\"button\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_FILE");
            echo "\" class=\"close file-delete\"><i class=\"awe-remove-circle\"></i></button>\t
\t\t  ";
            // line 45
            echo "\t
\t\t\t<div class=\"attach-name\">  
\t\t\t\t<span class=\"pull-left file-name text-overflow\"><a href=\"";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "U_VIEW_ATTACHMENT", [], "any", false, false, false, 47);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILENAME", [], "any", false, false, false, 47);
            echo "</a></span>
\t\t\t\t <span class=\"file-size\">";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILESIZE", [], "any", false, false, false, 48);
            echo "</span>
\t\t\t\t  <span class=\"file-status file-uploaded\"></span>
\t\t\t\t  ";
            // line 50
            if ((($context["S_BBCODE_ALLOWED"] ?? null) && ($context["S_INLINE_ATTACHMENT_OPTIONS"] ?? null))) {
                // line 51
                echo "\t\t\t\t   <button type=\"button\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PLACE_INLINE");
                echo "\" class=\"btn-link file-inline-bbcode\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PLUPLOAD_PLACE_INLINE");
                echo "</button>
\t\t\t\t  ";
            }
            // line 53
            echo "\t\t\t\t<div class=\"attach-comment\">
\t\t\t\t <textarea name=\"comment_list[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "ASSOC_INDEX", [], "any", false, false, false, 54);
            echo "]\" rows=\"1\" class=\"inputbox form-control form-plupload\" placeholder=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_DESCRIPTION");
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "FILE_COMMENT", [], "any", false, false, false, 54);
            echo "</textarea>
\t\t\t     ";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["attach_row"], "S_HIDDEN", [], "any", false, false, false, 55);
            echo "
\t\t\t\t</div>
\t\t    </div>\t
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t </div>
\t</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 60,  188 => 55,  180 => 54,  177 => 53,  169 => 51,  167 => 50,  162 => 48,  156 => 47,  152 => 45,  147 => 44,  146 => 43,  141 => 42,  137 => 41,  126 => 33,  123 => 32,  115 => 30,  113 => 29,  105 => 24,  97 => 21,  93 => 19,  92 => 18,  86 => 17,  79 => 13,  74 => 12,  69 => 10,  63 => 8,  58 => 5,  52 => 4,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_attach_body.html", "");
    }
}
