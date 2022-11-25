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

/* index_body.html */
class __TwigTemplate_173b5ee4f06660ba5edbe35e017c1f55 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        // line 5
        echo "
";
        // line 6
        // line 7
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 8
            echo "<div class=\"panel panel-forum panel-stats\">
 <div class=\"panel-heading\">";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_STATISTICS");
            echo "</div>
 <div class=\"panel-body\">
    <div class=\"row\">
\t  <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-acqua\">";
            // line 13
            echo ($context["SITESPLAT_CURRENTLY_ONLINE"] ?? null);
            echo "&nbsp;<a data-toggle=\"collapse\" data-target=\".sorting\" href=\"javascript:void(0);\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
            echo "\"><i class=\"fa fa-angle-double-down\"></i></a></span><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-seppia\">";
            // line 16
            echo ($context["SITESPLAT_RECORD_ONLINE"] ?? null);
            echo "</span><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_MOST_USERS_ONLINE");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-melograno\">";
            // line 19
            echo ($context["SITESPLAT_TOTAL_POSTS"] ?? null);
            echo "</span><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_TOTAL_POSTS");
            echo "</strong>
\t   </div>
\t   
\t <div class=\"visible-xs space10\"></div>
\t  <div class=\"visible-xs space10\"></div>
\t  
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-drank\">";
            // line 26
            echo ($context["SITESPLAT_TOTAL_TOPICS"] ?? null);
            echo "</span><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_TOTAL_TOPICS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-orange\">";
            // line 29
            echo ($context["SITESPLAT_TOTAL_USERS"] ?? null);
            echo "</span><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_TOTAL_USERS");
            echo "</strong>
\t   </div>
\t   <div class=\"col-md-2 col-sm-2 col-xs-4 text-center\">
\t    <span class=\"output text-red\">";
            // line 32
            echo ($context["SITESPLAT_NEWEST_USER"] ?? null);
            echo "</span><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_NEWEST_MEMBER");
            echo "</strong>
\t   </div> 
\t</div>
 </div>
 ";
            // line 36
            if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
                // line 37
                echo "\t<div class=\"panel-footer sorting collapse\">
\t <div class=\"row\">
\t ";
                // line 39
                // line 40
                echo "\t   <div class=\"col-md-6\">
\t\t<span class=\"stats-heading\">";
                // line 41
                echo ($context["TOTAL_USERS_ONLINE"] ?? null);
                echo "&nbsp;&#40;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
                echo "&#41;&nbsp;";
                if (($context["U_VIEWONLINE"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_VIEWONLINE"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                    echo "\"><i class=\"fa fa-question-circle\"></i></a>";
                }
                echo "</span>
\t\t";
                // line 42
                if (($context["LEGEND"] ?? null)) {
                    // line 43
                    echo "\t\t  <div class=\"space10\"></div>
\t\t <small>";
                    // line 44
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "&nbsp;";
                    echo ($context["LEGEND"] ?? null);
                    echo "</small>
\t\t";
                }
                // line 46
                echo "\t   </div>
\t   ";
                // line 47
                echo " 
\t   <div class=\"col-md-12\">\t
\t\t";
                // line 49
                // line 50
                echo "\t\t <div class=\"space10\"></div>
\t\t";
                // line 51
                if (($context["U_VIEWONLINE"] ?? null)) {
                    echo "<p>";
                    echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                    echo "</p>";
                }
                // line 52
                echo "\t\t";
                // line 53
                echo "\t 
\t\t";
                // line 54
                if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
                    // line 55
                    echo "\t\t ";
                    // line 56
                    echo "\t\t  ";
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 56))) {
                        echo "<p>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_BIRTHDAYS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo "&nbsp;<strong>";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 56));
                        foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                            echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 56);
                            if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 56) !== "")) {
                                echo "&nbsp;&#40;";
                                echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 56);
                                echo "&#41;";
                            }
                            if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 56)) {
                                echo "&#44;&nbsp;";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</strong></p>";
                    }
                    // line 57
                    echo "\t\t ";
                    // line 58
                    echo "\t\t";
                }
                // line 59
                echo "\t   </div>
\t  ";
                // line 60
                echo " 
\t </div>
\t</div>
 ";
            }
            // line 64
            echo "</div>
";
        }
        // line 66
        // line 67
        $context["s_on_index"] = true;
        // line 68
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 68)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 69,  243 => 68,  241 => 67,  240 => 66,  236 => 64,  230 => 60,  227 => 59,  224 => 58,  222 => 57,  197 => 56,  195 => 55,  193 => 54,  190 => 53,  188 => 52,  182 => 51,  179 => 50,  178 => 49,  174 => 47,  171 => 46,  163 => 44,  160 => 43,  158 => 42,  144 => 41,  141 => 40,  140 => 39,  136 => 37,  134 => 36,  125 => 32,  117 => 29,  109 => 26,  97 => 19,  89 => 16,  79 => 13,  72 => 9,  69 => 8,  67 => 7,  66 => 6,  63 => 5,  62 => 4,  50 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
