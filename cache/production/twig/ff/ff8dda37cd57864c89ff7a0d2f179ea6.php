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

/* display_options.html */
class __TwigTemplate_535d0b5f48278bf9dd162e74d8a800f8 extends \Twig\Template
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
        echo "<div class=\"hidden-xs\">
\t<fieldset class=\"controls-row\">
        <div class=\"sorting collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 7
        if (($context["S_SORT_OPTIONS"] ?? null)) {
            echo "\t
\t\t\t\t\t    <div class=\"col-md-6 col-sm-6\"> 
                         <label for=\"sk\">";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              <select class=\"selectpicker\" data-width=\"auto\" data-container=\"body\" name=\"sk\" id=\"sk\">";
            // line 11
            echo ($context["S_SORT_OPTIONS"] ?? null);
            echo "</select>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\"> 
                         <label for=\"sd\">";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_DIRECTION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              <div class=\"input-group\">
\t\t\t\t\t\t\t     <select class=\"selectpicker\" data-style=\"btn btn-default form-control\" data-width=\"auto\" data-container=\"body\" name=\"sd\" id=\"sd\">";
            // line 18
            echo ($context["S_ORDER_SELECT"] ?? null);
            echo "</select>
\t\t\t\t\t\t\t    <span class=\"input-group-btn\">
                                 <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "</button>
\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t  </div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 25
            echo "\t
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                         <label for=\"st\">";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 29
            echo ($context["S_SELECT_SORT_DAYS"] ?? null);
            echo "
                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-4 col-sm-4\"> 
                          <label for=\"sk\">";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
            echo "</label>
                            <div class=\"control-row\">
                              ";
            // line 35
            echo ($context["S_SELECT_SORT_KEY"] ?? null);
            echo "
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4\"> 
                           <label for=\"sd\">";
            // line 39
            echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
            echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
            // line 42
            echo ($context["S_SELECT_SORT_DIR"] ?? null);
            echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
            // line 44
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "</button>
\t\t\t\t\t\t\t </span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 49
        echo "\t
\t\t\t\t\t</div>
                </div>
\t\t\t</div>
\t\t</div> 
\t</fieldset> 
</div>



";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  124 => 44,  119 => 42,  113 => 39,  106 => 35,  101 => 33,  94 => 29,  88 => 27,  84 => 25,  75 => 20,  70 => 18,  63 => 15,  56 => 11,  50 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display_options.html", "");
    }
}
