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

/* mcp_notes_front.html */
class __TwigTemplate_5c5ce84d3d7335bcd654501546a09282 extends \Twig\Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_notes_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<form method=\"post\" id=\"mcp\" action=\"";
        echo ($context["U_POST_ACTION"] ?? null);
        echo "\">
<div class=\"side-segment\"><h3>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h3></div>
<div class=\"well\">
\t<fieldset>
\t<div class=\"control-group\"> 
\t   <label class=\"control-label\" for=\"username\">";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_USER");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t<div class=\"controls controls-row\"> 
       <input type=\"text\" class=\"form-control input-sm\" name=\"username\" id=\"username\">
\t   <strong><a href=\"";
        // line 10
        echo ($context["U_FIND_USERNAME"] ?? null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
        echo "</a></strong>
\t</div> 
\t</div>
\t</fieldset>
</div>

<fieldset class=\"form-actions\">
\t<button type=\"submit\" name=\"submituser\" value=\"";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"btn btn-default\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "</button>
\t";
        // line 18
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>
";
        // line 21
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_notes_front.html", 21)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_notes_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  86 => 18,  80 => 17,  68 => 10,  61 => 7,  54 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_notes_front.html", "");
    }
}
