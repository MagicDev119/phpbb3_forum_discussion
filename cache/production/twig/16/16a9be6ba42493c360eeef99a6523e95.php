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

/* jump_links.html */
class __TwigTemplate_0775605bd603db29b73411e306f3fc85 extends \Twig\Template
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
        if (($context["S_VIEWTOPIC"] ?? null)) {
            // line 2
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 4
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_FORUM");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        } elseif (        // line 7
($context["S_VIEWFORUM"] ?? null)) {
            // line 8
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 10
            echo ($context["U_INDEX"] ?? null);
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_INDEX");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        } elseif (        // line 13
($context["SEARCH_TOPIC"] ?? null)) {
            // line 14
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 16
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        } elseif (        // line 19
($context["S_SEARCH_ACTION"] ?? null)) {
            // line 20
            echo "<div class=\"space10\"></div>
<div class=\"pull-left\">
\t<a href=\"";
            // line 22
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\"><i class=\"fa fa-chevron-left\"></i>&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</a>
</div>
<div class=\"space10\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "jump_links.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  81 => 20,  79 => 19,  71 => 16,  67 => 14,  65 => 13,  57 => 10,  53 => 8,  51 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jump_links.html", "");
    }
}
