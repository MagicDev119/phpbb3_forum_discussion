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

/* simple_footer.html */
class __TwigTemplate_16805c434b6751c3757bc23fa06bd2f8 extends \Twig\Template
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
        echo "
   <div class=\"clearfix\">
\t\t<p class=\"debug-output\"><small>
\t\t";
        // line 4
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        // line 5
        echo "\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 6
        echo "\t\t<!-- ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FLATBOOTS_VERSION");
        echo " -->
\t\t</small></p>
\t</div>

<!-- injected via core and ajax JS for the return confirmation actions -->
    <div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>
\t<div id=\"loading_indicator\"></div>

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"close alert_close\"><span class=\"awe-remove-circle\"></span></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>
\t
\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<a href=\"#\" class=\"close alert_close\"><span class=\"awe-remove-circle\"></span></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
<!-- injected via core and ajax JS for the return confirmation actions -->


";
        // line 29
        // line 30
        echo "
<script>
// this loads jquery asynchronously & in parallel
// CDN links
// //ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js
// //stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js
// //";
        // line 36
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js
// //";
        // line 37
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/jquery-3.4.1.min.js
// //";
        // line 38
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/jquery-2.2.4.min.js
head.load(\"";
        // line 39
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/jquery-3.4.1.min.js\", \"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js\", \"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/forum_fn.min.js\");
</script>

<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 43
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 44
        echo "
<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});\$(\".btn-search\").click(function(){\$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()});\$(\".close\").click(function(){\$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")});\$(\".nav-tog\").click(function(){if(\$(this).hasClass(\"neutro\")){\$(this).removeClass(\"neutro\").addClass(\"open\")}else{\$(this).removeClass(\"open\").addClass(\"neutro\")}});
\t\$('input[data-reset-on-edit]').on('keyup', function() {\$(this.getAttribute('data-reset-on-edit')).val('');});
\t\$('a').tooltip({trigger : 'hover',container: 'body'})\t
});
</script>

<!-- injected via a module or an include -->

";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 58);
        echo "

";
        // line 60
        // line 61
        // line 62
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 62,  153 => 61,  152 => 60,  147 => 58,  131 => 44,  126 => 43,  115 => 39,  111 => 38,  107 => 37,  103 => 36,  95 => 30,  94 => 29,  76 => 16,  60 => 11,  51 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simple_footer.html", "");
    }
}
