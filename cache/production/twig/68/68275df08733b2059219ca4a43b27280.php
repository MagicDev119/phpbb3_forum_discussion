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

/* ucp_register.html */
class __TwigTemplate_805eeba989f227f7cb484c689ac8735e extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<script>
/* Change language */
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 6
        echo ($context["COOKIE_NAME"] ?? null);
        echo "_lang=' + lang_iso + '; path=";
        echo ($context["COOKIE_PATH"] ?? null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
</script>

";
        // line 12
        if (($context["PROVIDER_TEMPLATE_FILE"] ?? null)) {
            // line 13
            echo "    <div class=\"side-segment\"><h3>";
            echo ($context["SITENAME"] ?? null);
            echo "&nbsp;&#45;&nbsp;";
            echo $this->extensions['phpbb\template\twig\extension']->lang("OAUTH_REGISTRATION");
            echo "</h3></div>
\t<div class=\"well panel-w-form\">
\t\t\t";
            // line 15
            $this->loadTemplate(($context["PROVIDER_TEMPLATE_FILE"] ?? null), "ucp_register.html", 15)->display($context);
            // line 16
            echo "\t</div>
\t<div class=\"space10\"></div>
\t<div class=\"space10\"></div>
\t<div class=\"space10\"></div>
";
        }
        // line 21
        echo "

";
        // line 23
        // line 24
        echo "<div class=\"side-segment\"><h3>";
        echo ($context["SITENAME"] ?? null);
        echo "&nbsp;&#45;&nbsp;";
        echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
        echo "</h3></div>
<form id=\"register\" method=\"post\" action=\"";
        // line 25
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">
<fieldset>
<div class=\"well panel-w-form\">
\t";
        // line 28
        if (($context["ERROR"] ?? null)) {
            // line 29
            echo "\t <div class=\"alert alert-info\">";
            echo ($context["ERROR"] ?? null);
            echo "</div>
\t";
        }
        // line 31
        echo "\t
\t";
        // line 32
        if (($context["L_REG_COND"] ?? null)) {
            // line 33
            echo "\t <p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REG_COND");
            echo "</p>
\t";
        }
        // line 35
        echo "    
<div class=\"row\">
";
        // line 37
        // line 38
        echo "   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label for=\"username\" class=\"control-label\">";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME_EXPLAIN");
        echo "</span>
\t\t<div class=\"form-icon\">
\t\t\t<input class=\"form-control input-lg\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" value=\"";
        // line 42
        echo ($context["USERNAME"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_REG_USR_PLACEHOLDER");
        echo "\"/>
\t\t    <span class=\"fa fa-user login-form-icon\"></span>
\t\t </div> 
\t\t<div class=\"control-group\"></div>
\t</div>
   </div>
 
   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"email\">";
        // line 51
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_REGISTER_EMAIL_EXPLAIN");
        echo "</span>
          <div class=\"form-icon\">
\t\t    <input class=\"form-control input-lg\" type=\"text\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" value=\"";
        // line 53
        echo ($context["EMAIL"] ?? null);
        echo "\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_REG_EMAIL_PLACEHOLDER");
        echo "\" autocomplete=\"off\"/>
\t\t    <span class=\"icon-moon-email login-form-icon\"></span>
\t\t  </div>
\t\t  <div class=\"control-group\"></div>
\t</div> 
   </div> 
</div>

<div class=\"row\">   
   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"new_password\">";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD_EXPLAIN");
        echo "</span>
          <div class=\"form-icon\">
\t\t    <input class=\"form-control input-lg\" type=\"password\" name=\"new_password\" id=\"new_password\" size=\"25\" value=\"";
        // line 66
        echo ($context["PASSWORD"] ?? null);
        echo "\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_REG_PSWD_PLACEHOLDER");
        echo "\" autocomplete=\"off\"/>
\t\t  <span class=\"fa fa-key login-form-icon\"></span>
\t\t  </div>
\t\t  <div class=\"control-group\"></div>
\t</div> 
   </div>
   
   <div class=\"col-md-6\">
\t<div class=\"form-group\">
\t\t<label class=\"control-label\" for=\"password_confirm\">";
        // line 75
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><span class=\"help-block\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD_EXPLAIN_CONFIRM");
        echo "</span>
          <div class=\"form-icon\">
\t\t    <input class=\"form-control input-lg\" type=\"password\" name=\"password_confirm\" id=\"password_confirm\" size=\"25\" value=\"";
        // line 77
        echo ($context["PASSWORD_CONFIRM"] ?? null);
        echo "\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_REG_PSWD_PLACEHOLDER");
        echo "\" autocomplete=\"off\"/>
\t\t   <span class=\"fa fa-key login-form-icon\"></span>
\t\t  </div>
\t\t  <div class=\"control-group\"></div>
\t</div> 
   </div>
   ";
        // line 83
        // line 84
        echo "</div>

<div class=\"row\">
  <div class=\"col-md-6\">
\t<div class=\"form-group\"> 
\t<div class=\"control-group\">
\t   <label class=\"control-label\" for=\"lang\">";
        // line 90
        echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
       <div>
\t    <select class=\"selectpicker\" data-container=\"body\" name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 92
        echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
        echo "\">";
        echo ($context["S_LANG_OPTIONS"] ?? null);
        echo "</select>
\t</div> 
\t</div>
\t</div>
  </div>

  <div class=\"col-md-6\">
    <!-- /* from timezone_option.html */ -->\t
\t<div class=\"control-group\"> 
\t\t<label class=\"control-label\" for=\"timezone\">";
        // line 101
        echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_TIMEZONE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t<div class=\"controls controls-row\"> 
\t\t<select class=\"tz_select selectpicker\" data-container=\"body\" data-width=\"auto\" name=\"tz\" id=\"timezone\">
\t\t\t<option value=\"\">";
        // line 104
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "timezone_select", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 106
            echo "\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone_select"], "LABEL", [], "any", false, false, false, 106);
            echo "\" data-tz-value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone_select"], "VALUE", [], "any", false, false, false, 106);
            echo "\">
\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["timezone_select"], "timezone_options", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 108
                echo "\t\t\t\t<option title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_options"], "TITLE", [], "any", false, false, false, 108);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_options"], "VALUE", [], "any", false, false, false, 108);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["timezone_options"], "SELECTED", [], "any", false, false, false, 108)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone_options"], "LABEL", [], "any", false, false, false, 108);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t</optgroup>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t</select>
\t\t</div>
\t</div>
\t<!-- /* from timezone_option.html */ -->
   </div>
</div>
\t
\t
";
        // line 120
        // line 121
        echo "\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 121))) {
            // line 122
            echo "\t\t<strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ITEMS_REQUIRED");
            echo "</strong>
\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 123));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 124
                echo "\t<div class=\"control-group\"> 
\t  ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 125)) {
                    echo "<span class=\"error\">";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 125);
                    echo "</span>";
                }
                // line 126
                echo "\t\t<label class=\"control-label\"";
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 126)) {
                    echo " for=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 126);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_NAME", [], "any", false, false, false, 126);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "S_REQUIRED", [], "any", false, false, false, 126)) {
                    echo "&nbsp;&#42;";
                }
                echo "</label>";
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 126)) {
                    echo "<span class=\"help-block\">";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 126);
                    echo "</span>";
                }
                // line 127
                echo "\t\t  ";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD", [], "any", false, false, false, 127);
                echo "
\t</div> \t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t";
        }
        // line 131
        echo "\t
";
        // line 132
        echo "  \t
</div>
</fieldset>

";
        // line 136
        if (($context["CAPTCHA_TEMPLATE"] ?? null)) {
            // line 137
            echo "\t";
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 138
            echo "\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "ucp_register.html", 138)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 140
        echo "
";
        // line 141
        if (($context["S_COPPA"] ?? null)) {
            // line 142
            echo "\t<div class=\"alert alert-info fade in\">
\t\t<button class=\"close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<strong>";
            // line 144
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_COMPLIANCE");
            echo "</strong> <br>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_EXPLAIN");
            echo "
\t</div>
";
        }
        // line 147
        echo "
";
        // line 148
        // line 149
        echo "
\t<fieldset class=\"form-actions\">
\t\t";
        // line 151
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t<button type=\"submit\" class=\"btn btn-default\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 152
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "</button>
\t\t";
        // line 153
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 157
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 157)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 157,  429 => 153,  423 => 152,  419 => 151,  415 => 149,  414 => 148,  411 => 147,  403 => 144,  399 => 142,  397 => 141,  394 => 140,  380 => 138,  376 => 137,  374 => 136,  368 => 132,  365 => 131,  362 => 130,  352 => 127,  333 => 126,  327 => 125,  324 => 124,  320 => 123,  315 => 122,  312 => 121,  311 => 120,  301 => 112,  294 => 110,  277 => 108,  273 => 107,  266 => 106,  262 => 105,  258 => 104,  251 => 101,  237 => 92,  231 => 90,  223 => 84,  222 => 83,  211 => 77,  203 => 75,  189 => 66,  181 => 64,  165 => 53,  157 => 51,  141 => 42,  133 => 40,  129 => 38,  128 => 37,  124 => 35,  118 => 33,  116 => 32,  113 => 31,  107 => 29,  105 => 28,  97 => 25,  90 => 24,  89 => 23,  85 => 21,  78 => 16,  76 => 15,  68 => 13,  66 => 12,  55 => 6,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_register.html", "");
    }
}
