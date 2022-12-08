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

/* faq_body.html */
class __TwigTemplate_916fddca584cfc965419111ef0fef841 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "faq_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "  <h2>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_TITLE");
        echo "</h2>
<div class=\"panel-group\" id=\"f";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["faq_block"] ?? null), "S_ROW_COUNT", [], "any", false, false, false, 3);
        echo "r";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["faq_block"] ?? null), "faq_row", [], "any", false, false, false, 3), "S_ROW_COUNT", [], "any", false, false, false, 3);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "faq_block", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 5
            echo "<div class=\"space10\"></div>
 <div class=\"space10\"></div>
  <div class=\"space10\"></div>
<div class=\"side-segment\">
<h3>";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "BLOCK_TITLE", [], "any", false, false, false, 9);
            echo "</h3>
</div>
";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["faq_block"], "faq_row", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 12
                echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        <a data-toggle=\"collapse\" data-parent=\"f";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "S_ROW_COUNT", [], "any", false, false, false, 15);
                echo "r";
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "S_ROW_COUNT", [], "any", false, false, false, 15);
                echo "\" href=\"#f";
                echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "S_ROW_COUNT", [], "any", false, false, false, 15);
                echo "r";
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "S_ROW_COUNT", [], "any", false, false, false, 15);
                echo "\">
          ";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "FAQ_QUESTION", [], "any", false, false, false, 16);
                echo "
        </a>
      </h4>
    </div>
    <div id=\"f";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["faq_block"], "S_ROW_COUNT", [], "any", false, false, false, 20);
                echo "r";
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "S_ROW_COUNT", [], "any", false, false, false, 20);
                echo "\" class=\"panel-collapse collapse\">
      <div class=\"panel-body\">
        ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["faq_row"], "FAQ_ANSWER", [], "any", false, false, false, 22);
                echo "
      </div>
    </div>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
<div class=\"row\">
<div class=\"col-md-6\">
<div class=\"space10\"></div>
";
        // line 32
        $location = "jumpbox_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox_options.html", "faq_body.html", 32)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 33
        echo "<div class=\"space10\"></div>
</div>
</div>

";
        // line 37
        $location = "jump_links.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jump_links.html", "faq_body.html", 37)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 38
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "faq_body.html", 38)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "faq_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 38,  149 => 37,  143 => 33,  131 => 32,  125 => 28,  119 => 27,  108 => 22,  101 => 20,  94 => 16,  84 => 15,  79 => 12,  75 => 11,  70 => 9,  64 => 5,  60 => 4,  54 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "faq_body.html", "");
    }
}
