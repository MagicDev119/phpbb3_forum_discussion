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

/* addons/header_teaser_body.html */
class __TwigTemplate_0d9daa4eea1eac2f9da7b9c50378e04a extends \Twig\Template
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
        echo "<div class=\"flat-header\">
<div class=\"masthead\"></div>
    <div class=\"wrapper-head\">
\t <div class=\"container\">
\t \t";
        // line 5
        if (((($context["TEASER_TITLE"] ?? null) != "") || (($context["TEASER_TEXT"] ?? null) != ""))) {
            // line 6
            echo "\t \t\t<h1>";
            echo ($context["TEASER_TITLE"] ?? null);
            echo "</h1>
       \t\t<p>";
            // line 7
            echo ($context["TEASER_TEXT"] ?? null);
            echo "</p>
\t \t";
        } else {
            // line 9
            echo "\t\t\t<h1>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FLATBOOTS_INTRO");
            echo "&nbsp;<a class=\"label label-call\" href=\"https://getbootstrap.com/\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOOTSTRAP_VERSION");
            echo "</a></h1>
\t\t\t<p>";
            // line 10
            echo $this->extensions['phpbb\template\twig\extension']->lang("FLATBOOTS_EXPLAIN");
            echo "</p>
        ";
        }
        // line 12
        echo "     </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/header_teaser_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  62 => 10,  55 => 9,  50 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "addons/header_teaser_body.html", "");
    }
}
