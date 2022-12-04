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

/* jumpbox_options.html */
class __TwigTemplate_01d25f9cb6076e86e140daacb05a8c7b extends \Twig\Template
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
        if (($context["S_DISPLAY_JUMPBOX"] ?? null)) {
            // line 2
            echo "<div id=\"jumpbox\" class=\"dropdown\">
  <button class=\"btn btn-default btn-block dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"true\">
   ";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_SELECT_FORUM");
            echo "
    <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu jumpbox-dropdown\" role=\"menu\" style=\"width: 100%;\">
  <!-- <li role=\"presentation\" class=\"dropdown-header\">Dropdown header</li> -->
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "jumpbox_forums", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 10
                echo "\t ";
                if ((twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_ID", [], "any", false, false, false, 10) !=  -1)) {
                    // line 11
                    echo "\t <li role=\"presentation\" class=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 11)) {
                        echo "jumpbox-sub-link";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "S_IS_CAT", [], "any", false, false, false, 11)) {
                        echo "jumpbox-cat-link";
                    } else {
                        echo "jumpbox-forum-link";
                    }
                    echo "\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "LINK", [], "any", false, false, false, 11);
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_NAME", [], "any", false, false, false, 11);
                    echo "</a></li>
\t ";
                }
                // line 13
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  </ul>
</div>\t
";
        } else {
        }
    }

    public function getTemplateName()
    {
        return "jumpbox_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 14,  82 => 13,  58 => 11,  55 => 10,  51 => 9,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jumpbox_options.html", "");
    }
}
