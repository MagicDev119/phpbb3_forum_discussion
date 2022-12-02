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

/* overall_footer.html */
class __TwigTemplate_7f85d52bbebe52bbe0201322ae14043f extends \Twig\Template
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
        // line 2
        echo "
\t</div> <!-- page-body id in header -->
  </div> <!-- content-forum in header -->
 </div> <!-- container in header -->

";
        // line 7
        // line 8
        echo "
";
        // line 9
        if ((( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null)) && ($context["s_on_index"] ?? null))) {
            // line 10
            echo "    ";
            $location = "addons/sitesplat_login_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/sitesplat_login_body.html", "overall_footer.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 12
        echo "
\t<section class=\"section-page\">
        <div id=\"rtblock\" class=\"container\">
            ";
        // line 15
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "fltl", [], "any", false, false, false, 15))) {
        } else {
            $location = "addons/recent_topics_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/recent_topics_body.html", "overall_footer.html", 15)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 16
        echo "        </div>
    </section>

";
        // line 19
        echo "\t
  ";
        // line 20
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 21
            echo "     ";
            // line 22
            echo "  ";
        } else {
            echo " 
\t";
            // line 23
            $location = "addons/call_to_action_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("addons/call_to_action_body.html", "overall_footer.html", 23)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 24
            echo "  ";
        }
        // line 25
        echo "  
\t
\t";
        // line 27
        if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
            // line 28
            echo "\t\t";
            // line 29
            echo "\t";
        } else {
            // line 30
            echo "\t<div class=\"footer-block new-customize-wellnessherbs\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-list-block\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"https://www.wellnessherbs.com/\" class=\"footer-logo\">
\t\t\t\t\t\t\t<img src=\"";
            // line 36
            echo ($context["ROOT_PATH"] ?? null);
            echo "images/heavenly-logo-dark.svg\" src=\"";
            echo ($context["UPLOAD_ICON_SRC"] ?? null);
            echo "\" id=\"image_upload_icon\" alt=\"\" title=\"\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\"footer-about-info\">Our mission is to have people embrace a more holistic way to complete family
\t\t\t\t\t\t\twellness.</p>
\t\t\t\t\t\t<div class=\"social-link\">
\t\t\t\t\t\t\t<ul class=\"social-list list-inline\">
\t\t\t\t\t\t\t\t<li><a href=\"https://facebook.com/hherbals/posts\" target=\"_blank\" class=\"facebook\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/hherbals\" target=\"_blank\" class=\"twitter\"><i class=\"fa fa-twitter\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.linkedin.com/company/wellnessherbs/\" target=\"_blank\" class=\"linkedin\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.instagram.com/heavenlyherbalsinc/\" target=\"_blank\" class=\"instagram\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"//www.youtube.com/channel/UCcluXZp-O17fX5q0sJqNX_w\" target=\"_blank\" class=\"youtube\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-youtube\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"//www.pinterest.com/heavenlyherbals\" target=\"_blank\" class=\"pinterest\"><i
\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<ul class=\"payment-list list-inline mobile-visible text-center\">
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/paypel.webp\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Paypel\" width=\"50\" height=\"32\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/mscaed.webp\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Mscaed\" width=\"51\" height=\"33\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/visa.webp\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Visa\" width=\"50\" height=\"31\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/amaricam.webp\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Amaricam\" width=\"50\" height=\"31\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/discover.webp\"
\t\t\t\t\t\t\t\t\t\t\talt=\"Discover\" width=\"50\" height=\"33\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<div class=\"col-md-2 col-sm-4\">
\t\t\t\t\t\t<div class=\"footer-list\">
\t\t\t\t\t\t\t<h3 class=\"ftr-list-hdr about-us\">Information <span class=\"footer-list-dropdown\"><i
\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-plus\"></i></span></h3>
\t\t\t\t\t\t\t<ul class=\"list-unstyled footer-links about customer-service\" id=\"\">
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/contact-us\">Contact Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/disclaimer\">Disclaimer</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/ordering-and-shipping\">Ordering &amp; Shipping</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/our-guarantee\">Our Guarantee</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/our-products\">Our Products</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/who-we-are\">Who we are</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<div class=\"col-md-2 col-sm-4\">
\t\t\t\t\t\t<div class=\"footer-list\">
\t\t\t\t\t\t\t<h3 class=\"ftr-list-hdr\">Account <span class=\"footer-list-dropdown\"><i class=\"fa fa-plus\"></i></span></h3>
\t\t\t\t\t\t\t<ul class=\"list-unstyled footer-links customer-service\">
\t\t\t\t\t\t\t\t<li><a href=\"https://forum.wellnessherbs.com/ucp.php?mode=login&redirect=ucp.php%3Fmode%3Dregister\">Account</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/contact-us\">Ask our experts</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://affiliate.wellnessherbs.com/\">Become an Affiliate</a></li>
\t
\t
\t
\t\t\t\t\t\t\t\t<!-- <li><a href=\"https://www.wellnessherbs.com/index.php?route=kbgiftcard/kbgiftcard\">Gift Card</a></li> -->
\t
\t
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/privacy\">Privacy &amp; Security</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/return-add\">Returns</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"https://www.wellnessherbs.com/site-map\">Site Map</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t
\t\t\t\t\t<div class=\"col-md-4 col-sm-4\">
\t\t\t\t\t\t<div class=\"footer-list\">
\t\t\t\t\t\t\t<h3 class=\"ftr-list-hdr\">Contact Info <span class=\"footer-list-dropdown\"><i class=\"fa fa-plus\"></i></span>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"customer-service\">
\t\t\t\t\t\t\t\t<ul class=\"list-unstyled footer-links \">
\t\t\t\t\t\t\t\t\t<li>Address: 1069 Main St, Suite 337<br>
\t\t\t\t\t\t\t\t\t\tHolbrook, NY 11741<br>
\t\t\t\t\t\t\t\t\t\tU.S.A</li>
\t\t\t\t\t\t\t\t\t<li>Phone: <a href=\"tel:1.516.514.3536\">1.516.514.3536</a></li>
\t\t\t\t\t\t\t\t\t<li>Fax: 1.631.542.7664</li>
\t\t\t\t\t\t\t\t\t<li>Email: <a href=\"mailto:sales@heavenlyherbalsinc.com\">sales@heavenlyherbalsinc.com</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"payment-list list-inline mobile-disable\">
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/paypel.webp\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"Paypel\" width=\"50\" height=\"32\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/mscaed.webp\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"Mscaed\" width=\"51\" height=\"33\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/visa.webp\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"Visa\" width=\"50\" height=\"31\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/amaricam.webp\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"Amaricam\" width=\"50\" height=\"31\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/ep/catalog/view/theme/howashafi/image/images/discover.webp\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"Discover\" width=\"50\" height=\"33\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- <ul class=\"payment-list store-logo list-inline \">
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/lp/store-logo/bonanza-logo.webp\" alt=\"Paypel\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"60\" height=\"60\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/lp/store-logo/etsy-logo.webp\" alt=\"Mscaed\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"60\" height=\"60\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/lp/store-logo/ebay-logo.webp\" alt=\"Visa\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"60\" height=\"60\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\"><img loading=\"lazy\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://www.wellnessherbs.com/image/cache/wp/lp/store-logo/amazon-logo.webp\" alt=\"Amaricam\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"60\" height=\"60\"></a></li>
\t\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-bottom text-center\">
\t\t\t\t\t<p class=\"footer-btm-hdr-text\">Heavenly Herbals, Inc. provides these articles for information only. They are not
\t\t\t\t\t\tapproved or recommended by us, do not provide medical advice,diagnosis, or treatment, and are not meant to
\t\t\t\t\t\treplace professional medical advice or apply to any products. The information provided on this site is
\t\t\t\t\t\tintended for your general knowledge only and is not a substitute for professional medical advice or treatment
\t\t\t\t\t\tfor specific medical conditions.</p>
\t\t\t\t\t<p class=\"footer-btm-hdr-text text-center\">**These statements have not been, evaluated by the Food and Drug
\t\t\t\t\t\tAdministration. These products are not intended to diagnose, treat, cure or prevent any disease. <a
\t\t\t\t\t\t\thref=\"https://www.wellnessherbs.com/disclaimer\">Read more</a></p>
\t\t\t\t</div>
\t
\t\t\t\t<div class=\"copyright-inner\">
\t\t\t\t\t<p class=\"copyright-text\">© 2010-2022 <a href=\"https://www.wellnessherbs.com/\" title=\"Heavenly Herbals, Inc.\">Heavenly Herbals, Inc.</a> All
\t\t\t\t\t\tRights Reserved.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 184
        echo "
<a id=\"totop\" class=\"top-flat\" href=\"\" onclick=\"return false;\" style=\"display:none;\" aria-label=\"to-top\"></a>

<div class=\"hidden\">";
        // line 187
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        echo "</div> 

<!-- injected via core and ajax JS for the return confirmation actions -->
   <div id=\"page-footer\">
\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 191
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

\t<div id=\"phpbb_alert\" class=\"alert alert-default phpbb_alert\" data-l-err=\"";
        // line 195
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<h3 class=\"alert_title\">&nbsp;</h3>
\t\t <p class=\"alert_text\"></p>
\t</div>
\t
\t<div id=\"phpbb_confirm\" class=\"alert alert-default phpbb_alert\">
\t\t<button type=\"button\" class=\"close alert_close\" data-dismiss=\"alert\"><span class=\"awe-remove-circle\"></span></button>
\t\t<div class=\"alert_text\"></div>
\t</div>
  </div>\t
<!-- injected via core and ajax JS for the return confirmation actions -->

";
        // line 208
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ((($context["SCRIPT_NAME"] ?? null) == "viewforum") || (($context["SCRIPT_NAME"] ?? null) == "viewtopic")))) {
            // line 209
            echo "\t<div class=\"modal fade\" id=\"BreadcrumbMap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"BreadcrumbsLabel\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t  <div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"awe-remove-circle\"></span></button>
\t\t\t<h4 class=\"modal-title\" id=\"BreadcrumbsLabel\">";
            // line 214
            echo $this->extensions['phpbb\template\twig\extension']->lang("NAVIGATION");
            echo "</h4>
\t\t  </div>
\t\t  <div class=\"modal-body file-tree\">
\t\t   <ul>
\t\t\t<li class=\"root\"><a href=\"";
            // line 218
            echo ($context["U_INDEX"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
            echo "</a></li>
\t\t\t";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "navlinks", [], "any", false, false, false, 219));
            foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
                // line 220
                echo "\t\t\t";
                $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlinks"], "BREADCRUMB_NAME", [], "any", true, true, false, 220)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlinks"], "BREADCRUMB_NAME", [], "any", false, false, false, 220), twig_get_attribute($this->env, $this->source, $context["navlinks"], "FORUM_NAME", [], "any", false, false, false, 220))) : (twig_get_attribute($this->env, $this->source, $context["navlinks"], "FORUM_NAME", [], "any", false, false, false, 220)));
                // line 221
                echo "\t\t    ";
                $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_BREADCRUMB", [], "any", true, true, false, 221)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_BREADCRUMB", [], "any", false, false, false, 221), twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_VIEW_FORUM", [], "any", false, false, false, 221))) : (twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_VIEW_FORUM", [], "any", false, false, false, 221)));
                // line 222
                echo "\t\t\t\t<li><a href=\"";
                echo ($context["NAVLINK_LINK"] ?? null);
                echo "\">";
                echo ($context["NAVLINK_NAME"] ?? null);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "\t\t   </ul>
\t\t    <i class=\"icon-compass fa fa-compass\"></i>
\t\t  </div>
\t\t  <div class=\"modal-footer\">
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
";
        }
        // line 233
        echo "
";
        // line 234
        // line 235
        echo "
<script>
// this loads jquery asynchronously & in parallel
head.load(\"";
        // line 238
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/jquery-1.12.4.min.js\", \"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/bootstrap/336/js/bootstrap.min.js\", \"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/forum_fn.min.js\");
</script>

<!-- we use this event to load the JS scripts properly via the extension system -->
";
        // line 242
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 243
        echo "
<!-- injected via a module or an include -->
<script>
// some function that depends on bootstrap and jquery
head.ready(function () {
\t\$('.footable').footable();\$(\".selectpicker\").selectpicker();\$(\".selectpicker\").tooltip(\"disable\");var totop=\$(\"#totop\");totop.click(function(){\$(\"html, body\").stop(true,true).animate({scrollTop:0},500);return false});\$(window).scroll(function(){if(\$(this).scrollTop()>600){totop.fadeIn()}else{totop.fadeOut()}});\$(\"button[data-loading-text], input[data-loading-text], .btn-load\").click(function(){var e=\$(this);e.button(\"loading\");setTimeout(function(){e.button(\"reset\")},3e3)});
\t\$(\"input\").iCheck({checkboxClass:\"icheckbox_flat-aero\",radioClass:\"iradio_flat-aero\"});\$(\".btn-search\").click(function(){\$(\".search-input\").toggleClass(\"open\").find(\"input\").focus()});\$(\".close\").click(function(){\$(this).prev(\"input\").val(\"\").parents(\".search-input\").removeClass(\"open\")});\$(\".nav-tog\").click(function(){if(\$(this).hasClass(\"neutro\")){\$(this).removeClass(\"neutro\").addClass(\"open\")}else{\$(this).removeClass(\"open\").addClass(\"neutro\")}});
\t\$('input[data-reset-on-edit]').on('keyup', function() {\$(this.getAttribute('data-reset-on-edit')).val('');});
\t\$('a').tooltip({trigger : 'hover',container: 'body'})
    \$('#notification_list_button').click(function(){setTimeout(function(){\$(\".nano\").nanoScroller();},0);});\t
});
";
        // line 254
        if (($context["PROVIDER_TEMPLATE_FILE"] ?? null)) {
            // line 255
            echo "head.ready(function(){!function(n){n(\".oauth-content ul > li\").each(function(){var i=n(this).find(\"a\").text();n(this).find(\"a\").prepend('<i class=\"'+i+'\"></i>')})}(jQuery)});
";
        }
        // line 257
        echo "// some function that depends on bootstrap and jquery
";
        // line 258
        if ( !($context["HIDE_FOOTER"] ?? null)) {
            // line 259
            echo "head.load(\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/vendors/twitterFetcher.min.js\");
head.ready(\"twitterFetcher.min.js\",function(e){var e={profile:{screenName:\"";
            // line 260
            if (($context["FLATBOOTS_MINI_CMS_ENABLED"] ?? null)) {
                echo ($context["TWITTER_SCREEN_NAME"] ?? null);
            } else {
                echo "sitesplat";
            }
            echo "\"},domId:\"twitter-feed\",maxTweets:1,showUser:!1,useEmoji:1,showImages:!0,enableLinks:!0};twitterFetcher.fetch(e)});
";
        }
        // line 262
        if (($context["S_RECAPTCHA_AVAILABLE"] ?? null)) {
            // line 263
            echo "head.load(\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/vendors/inv-recaptcha.js\");
";
        }
        // line 265
        echo "</script>

<!-- injected via a module or an include -->

";
        // line 269
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 269);
        echo "

";
        // line 271
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 272
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 272)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 274
        echo "
";
        // line 275
        // line 276
        echo "
<!-- Google Analytics here -->
";
        // line 278
        echo ($context["GOOGLE_ANALYTICS"] ?? null);
        echo "

<script>
var coll = document.getElementsByClassName(\"footer-list-dropdown\");
\tvar i;

\tfor (i = 0; i < coll.length; i++) {
\t\tcoll[i].addEventListener(\"click\", function () {
\t\t\tthis.classList.toggle(\"active\");
\t\t\tif (this.parentElement.parentElement.classList.contains('collapsed')) {
\t\t\t\tfor (var j = 0; j < this.childNodes.length; j++) {
\t\t\t\t\tif (this.childNodes[j].className && this.childNodes[j].className.indexOf(\"fa-minus\") != -1) {
\t\t\t\t\t\tthis.childNodes[j].classList.remove('fa-minus')
\t\t\t\t\t\tthis.childNodes[j].classList.add('fa-plus')
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tthis.parentElement.parentElement.classList.remove('collapsed')
\t\t\t} else {
\t\t\t\tthis.parentElement.parentElement.classList.add('collapsed')
\t\t\t\tfor (var j = 0; j < this.childNodes.length; j++) {
\t\t\t\t\tif (this.childNodes[j].className && this.childNodes[j].className.indexOf(\"fa-plus\") != -1) {
\t\t\t\t\t\tthis.childNodes[j].classList.remove('fa-plus')
\t\t\t\t\t\tthis.childNodes[j].classList.add('fa-minus')
\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tvar content;
\t\t\tconsole.log(this.parentElement.parentElement.childNodes)
\t\t\tfor (var j = 0; j < this.parentElement.parentElement.childNodes.length; j++) {
\t\t\t\tif (this.parentElement.parentElement.childNodes[j].className && this.parentElement.parentElement.childNodes[j].className.indexOf(\"customer-service\") != -1) {
\t\t\t\t\tcontent = this.parentElement.parentElement.childNodes[j];
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\t// if (!content) continue;
\t\t\tif (content.style.maxHeight) {
\t\t\t\tcontent.style.maxHeight = null;
\t\t\t} else {
\t\t\t\tcontent.style.maxHeight = content.scrollHeight + \"px\";
\t\t\t}
\t\t});
\t}
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 278,  491 => 276,  490 => 275,  487 => 274,  474 => 272,  472 => 271,  467 => 269,  461 => 265,  455 => 263,  453 => 262,  444 => 260,  439 => 259,  437 => 258,  434 => 257,  430 => 255,  428 => 254,  415 => 243,  410 => 242,  399 => 238,  394 => 235,  393 => 234,  390 => 233,  379 => 224,  368 => 222,  365 => 221,  362 => 220,  358 => 219,  352 => 218,  345 => 214,  338 => 209,  336 => 208,  318 => 195,  303 => 191,  294 => 187,  289 => 184,  136 => 36,  128 => 30,  125 => 29,  123 => 28,  121 => 27,  117 => 25,  114 => 24,  102 => 23,  97 => 22,  95 => 21,  93 => 20,  90 => 19,  85 => 16,  70 => 15,  65 => 12,  51 => 10,  49 => 9,  46 => 8,  45 => 7,  38 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
