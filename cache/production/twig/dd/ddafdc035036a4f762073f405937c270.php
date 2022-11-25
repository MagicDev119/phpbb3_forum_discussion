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

/* addons/call_to_action_body.html */
class __TwigTemplate_8aacabd7dc0780c8b88a2b472f27fc81 extends \Twig\Template
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
        echo "<div class=\"mastbottom\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-9\">
\t\t      <p class=\"call-to-action\">";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("CALL_TO_ACTION_FOOTER");
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t  <a href=\"http://goo.gl/LvmwlF\" class=\"btn btn-xl btn-danger pull-right\" title=\"\">";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("PURCHASE_NOW_BTN");
        echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/call_to_action_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "addons/call_to_action_body.html", "");
    }
}
