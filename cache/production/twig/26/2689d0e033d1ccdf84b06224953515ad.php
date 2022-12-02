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

/* mcp_header.html */
class __TwigTemplate_5cfc01915b0a0d974c34981a2a467a4d extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<h2>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
        echo "</h2>
";
        // line 3
        if (($context["U_MCP"] ?? null)) {
            // line 4
            echo "\t<p>
\t\t&#91;&nbsp;<a href=\"";
            // line 5
            echo ($context["U_MCP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "</a>";
            if (($context["U_MCP_FORUM"] ?? null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo ($context["U_MCP_FORUM"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_FORUM");
                echo "</a>";
            }
            // line 6
            echo "\t\t";
            if (($context["U_MCP_TOPIC"] ?? null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo ($context["U_MCP_TOPIC"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_TOPIC");
                echo "</a>";
            }
            // line 7
            echo "\t\t";
            if (($context["U_MCP_POST"] ?? null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo ($context["U_MCP_POST"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_POST");
                echo "</a>";
            }
            echo "&nbsp;&#93;
\t</p>
";
        }
        // line 10
        echo "<div class=\"panel has-nav-tabs no-border\">
\t<ul class=\"nav nav-tabs\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "l_block1", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 13
            echo "\t\t<li";
            if (twig_get_attribute($this->env, $this->source, $context["l_block1"], "S_SELECTED", [], "any", false, false, false, 13)) {
                echo " class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["l_block1"], "U_TITLE", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["l_block1"], "L_TITLE", [], "any", false, false, false, 13);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</ul>

<div class=\"panel-content\">
 <div class=\"panel-body\">
  <div class=\"row\">
  
  <!-- col-md-12 ends in mcp_footer
   <div class=\"col-md-12\">
   -->
  
    <div class=\"col-md-3\">
\t\t<div class=\"list-group\">
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "l_block1", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 28
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["l_block1"], "S_SELECTED", [], "any", false, false, false, 28)) {
                // line 29
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l_block1"], "l_block2", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 30
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "S_SELECTED", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "\t\t\t\t <a class=\"list-group-item active\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "U_TITLE", [], "any", false, false, false, 31);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "L_TITLE", [], "any", false, false, false, 31);
                        if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 31)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 31);
                            echo ")";
                        }
                        echo "</a>
\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t <a class=\"list-group-item\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "U_TITLE", [], "any", false, false, false, 33);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "L_TITLE", [], "any", false, false, false, 33);
                        if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 33)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 33);
                            echo ")";
                        }
                        echo "</a>
\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t";
            }
            // line 37
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</div>
\t</div>

   <div class=\"col-md-9\">
\t<div class=\"tab-content\">
\t\t";
        // line 43
        if (($context["MESSAGE"] ?? null)) {
            // line 44
            echo "\t\t<div class=\"content\">
\t\t\t<h2>";
            // line 45
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 46
            echo ($context["MESSAGE"] ?? null);
            echo "</p>
\t\t\t<p>";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "return_links", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                echo twig_get_attribute($this->env, $this->source, $context["return_links"], "MESSAGE_LINK", [], "any", false, false, false, 47);
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
        // line 50
        echo "\t\t
\t";
        // line 51
        if (($context["CONFIRM_MESSAGE"] ?? null)) {
            // line 52
            echo "\t\t<form id=\"confirm\" method=\"post\" action=\"";
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\"";
            echo ($context["S_FORM_ENCTYPE"] ?? null);
            echo ">
\t\t\t<div class=\"well\">
\t\t\t\t<h2>";
            // line 54
            echo $this->extensions['phpbb\template\twig\extension']->lang("PLEASE_CONFIRM");
            echo "</h2>
\t\t\t\t<p>";
            // line 55
            echo ($context["CONFIRM_MESSAGE"] ?? null);
            echo "</p>
\t\t\t\t<fieldset>
\t\t\t\t\t";
            // line 57
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"";
            // line 58
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</button>
\t\t\t\t\t<button class=\"btn btn-default\" type=\"cancel\" value=\"";
            // line 59
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</button>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</form>
\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 59,  246 => 58,  242 => 57,  237 => 55,  233 => 54,  225 => 52,  223 => 51,  220 => 50,  206 => 47,  202 => 46,  198 => 45,  195 => 44,  193 => 43,  186 => 38,  180 => 37,  177 => 36,  171 => 35,  158 => 33,  145 => 31,  142 => 30,  137 => 29,  134 => 28,  130 => 27,  116 => 15,  101 => 13,  97 => 12,  93 => 10,  80 => 7,  71 => 6,  59 => 5,  56 => 4,  54 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_header.html", "");
    }
}
