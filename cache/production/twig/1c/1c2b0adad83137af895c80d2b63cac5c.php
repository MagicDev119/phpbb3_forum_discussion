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

/* login_body.html */
class __TwigTemplate_4a99430f75cd7b8b0e4968cf44cf0836 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "    ";
        if (($context["LOGIN_EXPLAIN"] ?? null)) {
            // line 3
            echo "        <div class=\"alert alert-info fade in\">
           <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 4
            echo ($context["LOGIN_EXPLAIN"] ?? null);
            echo "</strong>
        </div>
    ";
        }
        // line 7
        echo " 
    ";
        // line 8
        if (($context["LOGIN_ERROR"] ?? null)) {
            // line 9
            echo "         <div class=\"alert alert-danger fade in\">
           <i class=\"fa fa-warning\"></i><strong>&nbsp;";
            // line 10
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</strong>
         </div>
    ";
        }
        // line 13
        echo "\t
    <div class=\"panel-login panel-w-form login-full\">
            <div class=\"row\">
                ";
        // line 16
        if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !($context["S_ADMIN_AUTH"] ?? null))) {
            // line 17
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ACCOUNT");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 21
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_INFO");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 22
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 23
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"btn btn-default btn-reg-login\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        } elseif (        // line 25
($context["S_ADMIN_AUTH"] ?? null)) {
            // line 26
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_TIPS");
            echo "</span>
\t\t\t\t</div>
\t\t\t\t    <p>";
            // line 30
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_TIP_INTRO");
            echo "</p>
                    <ul>
\t\t\t\t\t<li>";
            // line 32
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_TIP_ONE");
            echo "</li>
\t\t\t\t    <li>";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_TIP_TWO");
            echo "</li>
\t\t\t\t\t<li>";
            // line 34
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADMIN_TIP_THREE");
            echo "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p>";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITESPLAT_URL");
            echo "</p>
                </div>
\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
            // line 41
            echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ACCOUNT_DISABLED");
            echo "</span>
\t\t\t\t</div>
                    <p>";
            // line 43
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION_DISABLED");
            echo "</p>
\t\t\t\t    <p><a href=\"";
            // line 44
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
            echo "</a>&nbsp;&#124;&nbsp;<a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
            echo "</a></p>
\t\t\t\t\t<p><a href=\"mailto:";
            // line 45
            echo ($context["BOARD_EMAIL"] ?? null);
            echo "?subject=Registrations%20Closed&body=Dear%20Admin,%20%0A%0AI%20Just%20wanted%20to%20let%20you%20know%20that%20the%20board%20registrations%20are%20closed.%20%0A%0AThis%20might%20be%20an%20error%20and%20I%20would%20like%20to%20register.%20%0A%0APlease%20let%20me%20know%20if%20this%20is%20possible.%0A%0AThanks!\" class=\"btn btn-default\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_WEBMASTER");
            echo "</a></p>
                </div>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"signin-text\">
\t\t\t\t\t<span>";
        // line 50
        echo $this->extensions['phpbb\template\twig\extension']->lang("SIGN_IN_ACCOUNT");
        echo "</span>
\t\t\t\t</div>
\t\t\t\t <form action=\"";
        // line 52
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"login\">
\t\t\t\t  <fieldset>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"sr-only\" for=\"";
        // line 55
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t<div class=\"form-icon\">
\t\t\t\t\t <input type=\"text\" class=\"form-control input-lg\" tabindex=\"1\" name=\"";
        // line 57
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" id=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "\">
\t\t\t\t\t <span class=\"fa fa-user login-form-icon\"></span>
\t\t\t\t\t</div> 
\t\t\t\t    </div> 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t <label class=\"sr-only\" for=\"";
        // line 62
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label>
\t\t\t\t\t  <div class=\"form-icon\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" tabindex=\"2\" id=\"";
        // line 64
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" name=\"";
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" placeholder=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo "\" autocomplete=\"off\">
\t\t\t\t\t\t<span class=\"fa fa-lock login-form-icon\"></span>
\t\t\t\t\t  </div> 
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t ";
        // line 69
        if (($context["S_DISPLAY_FULL_LOGIN"] ?? null)) {
            // line 70
            echo "\t\t\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 71
                echo "\t\t\t\t\t<div class=\"checkbox pull-right\">                                              
\t\t\t\t\t <label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\">";
                // line 72
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_REMEMBER");
                echo "</label>
\t\t\t\t\t <label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\">";
                // line 73
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_HIDE_ME");
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t ";
        }
        // line 77
        echo "\t\t\t\t\t<button type=\"submit\" class=\"btn btn btn-default\" tabindex=\"6\" name=\"login\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_ME_IN");
        echo "</button>
\t\t\t\t
\t\t\t\t  ";
        // line 79
        if ((($context["S_DISPLAY_FULL_LOGIN"] ?? null) && (($context["U_SEND_PASSWORD"] ?? null) || ($context["U_RESEND_ACTIVATION"] ?? null)))) {
            // line 80
            echo "\t\t\t\t    <div class=\"space10\"></div>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 82
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>";
            }
            // line 83
            echo "\t\t\t\t\t\t";
            if (($context["U_RESEND_ACTIVATION"] ?? null)) {
                echo "&nbsp;&#124;&nbsp;<a href=\"";
                echo ($context["U_RESEND_ACTIVATION"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESEND_ACTIVATION");
                echo "</a>";
            }
            // line 84
            echo "\t                </p>\t\t\t  
\t\t\t\t  ";
        }
        // line 86
        echo "\t\t\t\t  
\t\t\t\t    ";
        // line 87
        if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
            // line 88
            echo "\t\t\t\t\t\t<div class=\"space10\"></div>
\t\t\t\t\t\t";
            // line 89
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 90
            echo "\t\t\t\t\t\t";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "login_body.html", 90)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 91
            echo "\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t  ";
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t  ";
        // line 93
        echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
        echo "
\t\t\t\t  ";
        // line 94
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t\t  </fieldset>
\t\t\t\t  </form>
\t\t\t\t";
        // line 97
        // line 98
        echo "\t\t\t\t";
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["PROVIDER_TEMPLATE_FILE"] ?? null))) {
            // line 99
            echo "\t\t\t\t\t";
            $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "login_body.html", 99)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 100
            echo "\t\t\t\t";
        }
        // line 101
        echo "\t\t\t    </div>  
            </div>
    </div>
\t\t<script>
\t\t\tconsole.log(document.getElementById('username'))
\t\t\tdocument.getElementById('username').focus()
\t\t</script>
";
        // line 108
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 108)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 108,  353 => 101,  350 => 100,  337 => 99,  334 => 98,  333 => 97,  327 => 94,  323 => 93,  318 => 92,  315 => 91,  302 => 90,  299 => 89,  296 => 88,  294 => 87,  291 => 86,  287 => 84,  278 => 83,  270 => 82,  266 => 80,  264 => 79,  256 => 77,  253 => 76,  247 => 73,  243 => 72,  240 => 71,  237 => 70,  235 => 69,  223 => 64,  215 => 62,  201 => 57,  193 => 55,  187 => 52,  182 => 50,  178 => 48,  170 => 45,  160 => 44,  156 => 43,  151 => 41,  147 => 39,  141 => 36,  136 => 34,  132 => 33,  128 => 32,  123 => 30,  118 => 28,  114 => 26,  112 => 25,  105 => 23,  95 => 22,  91 => 21,  86 => 19,  82 => 17,  80 => 16,  75 => 13,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  55 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login_body.html", "");
    }
}
