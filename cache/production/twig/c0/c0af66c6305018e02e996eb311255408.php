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

/* ucp_agreement.html */
class __TwigTemplate_23315bb2ae94542f7cca4a39c3809a15 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        if ((($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null))) {
            // line 3
            echo "<div class=\"side-segment\"><h3>";
            echo ($context["SITENAME"] ?? null);
            echo "&nbsp;&#45;&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
            echo "</h3></div>
 ";
            // line 4
            if (($context["S_LANG_OPTIONS"] ?? null)) {
                // line 5
                echo "<script>
/* Change language */
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 9
                echo ($context["COOKIE_NAME"] ?? null);
                echo "_lang=' + lang_iso + '; path=";
                echo ($context["COOKIE_PATH"] ?? null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}
</script>
    <div class=\"language-selection\">
\t <form method=\"post\" action=\"";
                // line 15
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\" id=\"register\">
\t\t\t<label class=\"sr-only\" for=\"lang\">";
                // line 16
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label>
\t\t\t <select class=\"selectpicker\" data-style=\"btn-default btn-sm\" data-container=\"body\" name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                // line 17
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo "\">";
                echo ($context["S_LANG_OPTIONS"] ?? null);
                echo "</select>
\t\t\t";
                // line 18
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t </form>
\t</div>
";
            }
            // line 22
            echo "
 <form method=\"post\" action=\"";
            // line 23
            echo ($context["S_UCP_ACTION"] ?? null);
            echo "\" id=\"agreement\">
\t<div class=\"well\">
\t\t<p>";
            // line 25
            if (($context["S_SHOW_COPPA"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_OF_USE");
            }
            echo "</p>
\t</div>
\t\t<fieldset>
\t\t";
            // line 28
            // line 29
            echo "\t\t\t";
            if (($context["S_SHOW_COPPA"] ?? null)) {
                // line 30
                echo "\t\t\t <input type=\"submit\" class=\"btn btn-default\" name=\"coppa_no\" id=\"coppa_no\" value=\"";
                echo ($context["L_COPPA_NO"] ?? null);
                echo "\" />
\t\t\t <input type=\"submit\" class=\"btn btn-default\" name=\"coppa_yes\" id=\"coppa_yes\" value=\"";
                // line 31
                echo ($context["L_COPPA_YES"] ?? null);
                echo "\" />
\t\t\t";
            } else {
                // line 33
                echo "             <button type=\"submit\" class=\"btn btn-block btn-success btn-lg\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("AGREE");
                echo "\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING");
                echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-check\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("AGREE");
                echo "</button>
\t\t\t <button type=\"submit\" class=\"btn btn-block btn-danger btn-lg\" name=\"not_agreed\" value=\"";
                // line 34
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_AGREE");
                echo "\" data-loading-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CANCELLING");
                echo "<i class='fa-spin fa fa-spinner fa-lg icon-white'></i>\"><i class=\"fa fa-times\"></i>&nbsp;";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_AGREE");
                echo "</button>
\t\t\t";
            }
            // line 36
            echo "\t\t";
            // line 37
            echo "\t\t\t";
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t";
            // line 38
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t<div class=\"space10\"></div>
 </form>
";
        } elseif (        // line 42
($context["S_AGREEMENT"] ?? null)) {
            // line 43
            echo "\t <div class=\"side-segment\"><h3>";
            echo ($context["SITENAME"] ?? null);
            echo "&nbsp;&#45;&nbsp;";
            echo ($context["AGREEMENT_TITLE"] ?? null);
            echo "</h3></div>
\t<div class=\"well\">
\t\t<p>";
            // line 45
            echo ($context["AGREEMENT_TEXT"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 48
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 48,  173 => 45,  165 => 43,  163 => 42,  156 => 38,  151 => 37,  149 => 36,  140 => 34,  131 => 33,  126 => 31,  121 => 30,  118 => 29,  117 => 28,  107 => 25,  102 => 23,  99 => 22,  92 => 18,  86 => 17,  81 => 16,  77 => 15,  66 => 9,  60 => 5,  58 => 4,  51 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_agreement.html", "");
    }
}
