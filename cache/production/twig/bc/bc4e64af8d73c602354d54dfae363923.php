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

/* captcha_default.html */
class __TwigTemplate_c346ea84096993d8f1f3969c01664f6d extends \Twig\Template
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
        if ((($context["S_TYPE"] ?? null) == 1)) {
            // line 2
            echo "\t<div class=\"side-segment\"><h3>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRMATION");
            echo "</h3></div>
<div class=\"well\">
\t<p>";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_EXPLAIN");
            echo "</p>
\t<fieldset>
";
        }
        // line 7
        echo "<label class=\"control-label\" for=\"confirm_code\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_CODE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_CODE_EXPLAIN");
        echo "</span>
<img src=\"";
        // line 8
        echo ($context["CONFIRM_IMAGE_LINK"] ?? null);
        echo "\" alt=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_CODE");
        echo "\" />
<div class=\"space10\"></div>
<div class=\"";
        // line 10
        if (($context["S_CONFIRM_REFRESH"] ?? null)) {
            echo "input-group";
        } else {
            echo "nothing";
        }
        echo "\">
     <input class=\"form-control\" type=\"text\" name=\"confirm_code\" id=\"confirm_code\" maxlength=\"8\" tabindex=\"";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "CAPTCHA_TAB_INDEX", [], "any", false, false, false, 11);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_CODE");
        echo "\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_REG_PSWD_PLACEHOLDER");
        echo "\">
\t";
        // line 12
        if (($context["S_CONFIRM_REFRESH"] ?? null)) {
            // line 13
            echo "    <div class=\"input-group-btn\">
\t <button type=\"submit\" name=\"refresh_vc\" id=\"refresh_vc\" class=\"btn btn-default\" value=\"";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("VC_REFRESH");
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("VC_REFRESH");
            echo "\" ><i class=\"fa fa-retweet\"></i></button>
    </div>
\t";
        }
        // line 17
        echo "</div>
<input type=\"hidden\" name=\"confirm_id\" id=\"confirm_id\" value=\"";
        // line 18
        echo ($context["CONFIRM_ID"] ?? null);
        echo "\" />
";
        // line 19
        if ((($context["S_TYPE"] ?? null) == 1)) {
            // line 20
            echo "\t</fieldset>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  102 => 19,  98 => 18,  95 => 17,  87 => 14,  84 => 13,  82 => 12,  74 => 11,  66 => 10,  59 => 8,  51 => 7,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_default.html", "");
    }
}
