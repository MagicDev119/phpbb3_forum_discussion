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

/* display_options_viewforum.html */
class __TwigTemplate_47b07da18856831aa926798b57c3302a extends \Twig\Template
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
        echo "<fieldset class=\"controls-row\">
        <div class=\"sorting collapse\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t<form class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo ($context["S_FORUM_ACTION"] ?? null);
        echo "\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3\"> 
                         <label for=\"st\">";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 10
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "
                            </div>
\t\t\t\t\t\t</div>
\t                    <div class=\"col-md-3 col-sm-3\"> 
                          <label for=\"sk\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
                              ";
        // line 16
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "
                            </div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3\">  
                           <label for=\"sd\">";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("SORT_BY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
                            <div class=\"control-row\">
\t\t\t\t\t\t\t<div class=\"input-group\">
                             ";
        // line 23
        echo ($context["S_SELECT_SORT_DIR"] ?? null);
        echo "
\t\t\t\t\t\t\t <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" name=\"sort\" type=\"submit\">";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
        echo "</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>   
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"col-md-3 col-sm-3\"> 
                      <label accesskey=\"j\">";
        // line 32
        echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
                       <div class=\"control-row\">
                         ";
        // line 34
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "display_options_viewforum.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "                       </div>
\t\t\t\t\t</div>
                   </div>
                </div>
\t\t\t</div>
\t\t</div> 
</fieldset> ";
    }

    public function getTemplateName()
    {
        return "display_options_viewforum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  103 => 34,  97 => 32,  87 => 25,  82 => 23,  75 => 20,  68 => 16,  62 => 14,  55 => 10,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display_options_viewforum.html", "");
    }
}
