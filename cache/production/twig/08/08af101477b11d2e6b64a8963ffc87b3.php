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

/* addons/sitesplat_login_body.html */
class __TwigTemplate_4536fd203c61f780503c76c77f997efa extends \Twig\Template
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
        echo "<div class=\"panel-login panel-w-form\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 4
        if (($context["S_REGISTER_ENABLED"] ?? null)) {
            // line 5
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 7
            echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ACCOUNT");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 10
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 11
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 18
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION_DISABLED");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 19
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
            // line 20
            echo ($context["BOARD_EMAIL"] ?? null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_WEBMASTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("SIGN_IN_ACCOUNT");
        echo "</span>
\t\t\t\t</div>
\t\t\t\t";
        // line 27
        // line 28
        echo "\t\t\t\t <form method=\"post\" action=\"";
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"username\">";
        // line 31
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label class=\"sr-only\" for=\"password\">";
        // line 38
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t    ";
        // line 44
        if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t<div class=\"checkbox pull-right\">
\t\t\t\t\t  <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\">";
            // line 46
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_REMEMBER");
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t    ";
        }
        // line 49
        echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" name=\"login\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "\" data-loading-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOADING_LOG_IN");
        echo "<i class='fa-spin fa fa-spinner fa-lg'></i>\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_ME_IN");
        echo "</button>
\t\t\t\t\t";
        // line 50
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t";
        // line 51
        echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
        echo "
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t\t  ";
        // line 54
        // line 55
        echo "\t\t\t\t";
        // line 56
        echo "\t\t\t    </div>  
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "addons/sitesplat_login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 56,  181 => 55,  180 => 54,  174 => 51,  170 => 50,  161 => 49,  155 => 46,  152 => 45,  150 => 44,  143 => 40,  137 => 38,  129 => 33,  123 => 31,  116 => 28,  115 => 27,  110 => 25,  106 => 23,  98 => 20,  88 => 19,  84 => 18,  79 => 16,  75 => 14,  67 => 11,  57 => 10,  53 => 9,  48 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "addons/sitesplat_login_body.html", "");
    }
}
