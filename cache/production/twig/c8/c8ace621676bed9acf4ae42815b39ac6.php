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

/* viewtopic_topic_tools.html */
class __TwigTemplate_fb12bc0f5ff89ddccea273dab62d5c9c extends \Twig\Template
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
        // line 2
        if (( !($context["S_IS_BOT"] ?? null) && (((((($context["U_WATCH_TOPIC"] ?? null) || ($context["U_BOOKMARK_TOPIC"] ?? null)) || ($context["U_BUMP_TOPIC"] ?? null)) || ($context["U_EMAIL_TOPIC"] ?? null)) || ($context["U_PRINT_TOPIC"] ?? null)) || ($context["S_DISPLAY_TOPIC_TOOLS"] ?? null)))) {
            // line 3
            echo "<div class=\"btn-group hidden-xs\">
   \t";
            // line 4
            if (($context["U_EMAIL_TOPIC"] ?? null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo ($context["U_EMAIL_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_TOPIC");
                echo "\"><i class=\"fa fa-envelope\"></i></a>";
            }
            // line 5
            echo "\t";
            if (($context["U_PRINT_TOPIC"] ?? null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo ($context["U_PRINT_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\"><i class=\"fa fa-print\"></i></a>";
            }
            // line 6
            echo "</div>

<div class=\"btn-group t-";
            // line 8
            if (($context["S_WATCHING_TOPIC"] ?? null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\">
\t";
            // line 9
            if (($context["U_WATCH_TOPIC"] ?? null)) {
                // line 10
                echo "\t   <a href=\"";
                echo ($context["U_WATCH_TOPIC"] ?? null);
                echo "\" class=\"watch-topic-link btn btn-default t-icon\" title=\"";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"btn-group t-";
                if ( !($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_TOPIC_TOGGLE"] ?? null);
                echo "\" data-update-all=\".watch-topic-link\"></a>
\t";
            }
            // line 12
            echo "\t";
            if (($context["U_BOOKMARK_TOPIC"] ?? null)) {
                // line 13
                echo "\t <a href=\"";
                echo ($context["U_BOOKMARK_TOPIC"] ?? null);
                echo "\" class=\"bookmark-link t-icon btn btn-default t-";
                if (($context["S_BOOKMARKED_TOPIC"] ?? null)) {
                    echo "bookmarked";
                } else {
                    echo "bookmark";
                }
                echo "\" title=\"";
                if (($context["S_BOOKMARKED_TOPIC"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BOOKMARK_TOPIC_REMOVE");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BOOKMARK_TOPIC");
                }
                echo "\" data-ajax=\"alt_text\" data-toggle-url=\"";
                echo ($context["S_BOOKMARK_TOGGLE"] ?? null);
                echo "\" data-update-all=\".bookmark-link\"></a>
\t";
            }
            // line 15
            echo "</div>
";
            // line 16
            if (($context["U_BUMP_TOPIC"] ?? null)) {
                echo "<a class=\"btn btn-default\" href=\"";
                echo ($context["U_BUMP_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\"><i class=\"fa fa-legal\"></i></a>";
            }
        }
        // line 18
        // line 19
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 19,  125 => 18,  116 => 16,  113 => 15,  93 => 13,  90 => 12,  74 => 10,  72 => 9,  64 => 8,  60 => 6,  51 => 5,  43 => 4,  40 => 3,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_topic_tools.html", "");
    }
}
