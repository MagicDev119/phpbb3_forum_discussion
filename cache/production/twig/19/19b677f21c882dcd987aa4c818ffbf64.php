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

/* addons/recent_topics_body.html */
class __TwigTemplate_a0854d30c3b2a05ea5f0e92f5d002a0a extends \Twig\Template
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
        echo "<!-- Recent Lazy Topics Loader Section -->
\t\t\t<div class=\"carousel-wrapper row text-center\">
        <div class=\"owl-theme owl-carousel\">
            <div class=\"item\">
                <div class=\"panel panel-post\">
\t\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t\t<img src=\"";
        // line 7
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "thumb", [], "any", false, false, false, 7);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t   <div class=\"title\">
\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "name", [], "any", false, false, false, 11);
        echo "</h6>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "rating", [], "any", false, false, false, 13) >= 0.5)) {
            // line 14
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "rating", [], "any", false, false, false, 18) >= 1.5)) {
            // line 19
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "rating", [], "any", false, false, false, 23) >= 2.5)) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "rating", [], "any", false, false, false, 28) >= 3.5)) {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "rating", [], "any", false, false, false, 33) >= 4.5)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "price", [], "any", false, false, false, 40);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "special", [], "any", false, false, false, 41);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t</div>
\t\t\t\t   <!-- <div class=\"content-post\">
\t\t\t\t    <p>We have created lots of YouTube videos just so you can achieve [...]</p>  
\t\t\t\t   </div> -->
\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t<a href=\"";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS"] ?? null), "href", [], "any", false, false, false, 49);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t</div>               
\t\t\t   </div>
            </div>
            
           <div class=\"item\">
                <div class=\"panel panel-post\">
\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "thumb", [], "any", false, false, false, 57);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t   <div class=\"title\">
\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "name", [], "any", false, false, false, 61);
        echo "</h6>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "rating", [], "any", false, false, false, 63) >= 0.5)) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "rating", [], "any", false, false, false, 68) >= 1.5)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "rating", [], "any", false, false, false, 73) >= 2.5)) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "rating", [], "any", false, false, false, 78) >= 3.5)) {
            // line 79
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "rating", [], "any", false, false, false, 83) >= 4.5)) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "price", [], "any", false, false, false, 90);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 91
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "special", [], "any", false, false, false, 91);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t<!-- <span class=\"jp-views\">&nbsp;-&nbsp;By&nbsp;<a style=\"color: #C8E44F; font-weight: bold;\" href=\"#\" class=\"text-warning\" title=\"\">SiteSplat</a></span> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</header>
\t\t\t       </div>
\t\t\t\t   <!-- <div class=\"content-post\">
\t\t\t\t    <p>The best flat phpBB theme around. Period. Fine craftmanship and [...]</p>  
\t\t\t\t   </div> -->
\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t<a href=\"";
        // line 100
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_1"] ?? null), "href", [], "any", false, false, false, 100);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t</div>               
\t\t\t   </div>
            </div>
            
            <div class=\"item\">
                <div class=\"panel panel-post\">
\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t<img src=\"";
        // line 108
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "thumb", [], "any", false, false, false, 108);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t   <div class=\"title\">
\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t  <h6 class=\"inverse-font\">";
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "name", [], "any", false, false, false, 112);
        echo "</h6>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 114
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "rating", [], "any", false, false, false, 114) >= 0.5)) {
            // line 115
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "rating", [], "any", false, false, false, 119) >= 1.5)) {
            // line 120
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 122
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "rating", [], "any", false, false, false, 124) >= 2.5)) {
            // line 125
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "rating", [], "any", false, false, false, 129) >= 3.5)) {
            // line 130
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 134
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "rating", [], "any", false, false, false, 134) >= 4.5)) {
            // line 135
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 137
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 141
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "price", [], "any", false, false, false, 141);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 142
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "special", [], "any", false, false, false, 142);
        echo "</del></small></span>
\t\t\t\t\t\t <!-- <span class=\"jp-views\">&nbsp;-&nbsp;By&nbsp;<a style=\"color: #D65B49; font-weight: bold;\" href=\"#\" class=\"text-warning\" title=\"\">Jane lou</a></span> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>
\t\t\t       </div>
\t\t\t\t   <!-- <div class=\"content-post\">
\t\t\t\t    <p>All you need is right here. Content tag, SEO, listing, Pizza and spaghetti [...]</p>  
\t\t\t\t   </div> -->
\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t<a href=\"";
        // line 151
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_2"] ?? null), "href", [], "any", false, false, false, 151);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t</div>               
\t\t\t   </div>
            </div>

            <div class=\"item\">
                <div class=\"panel panel-post\">
\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t<img src=\"";
        // line 159
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "thumb", [], "any", false, false, false, 159);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t   <div class=\"title\">
\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t  <h6 class=\"inverse-font\">";
        // line 163
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "name", [], "any", false, false, false, 163);
        echo "</h6>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "rating", [], "any", false, false, false, 165) >= 0.5)) {
            // line 166
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "rating", [], "any", false, false, false, 170) >= 1.5)) {
            // line 171
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 173
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 175
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "rating", [], "any", false, false, false, 175) >= 2.5)) {
            // line 176
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 178
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "rating", [], "any", false, false, false, 180) >= 3.5)) {
            // line 181
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 183
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "rating", [], "any", false, false, false, 185) >= 4.5)) {
            // line 186
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t";
        } else {
            // line 188
            echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t";
        }
        // line 190
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 192
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "price", [], "any", false, false, false, 192);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 193
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "special", [], "any", false, false, false, 193);
        echo "</del></small></span>
\t\t\t\t\t\t <!-- <span class=\"jp-views\">&nbsp;-&nbsp;By&nbsp;<a style=\"color: #6AB3EB; font-weight: bold;\" href=\"#\" class=\"text-warning\" title=\"\">Larry Page</a></span> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</header>
\t\t\t       </div>
\t\t\t\t   <!-- <div class=\"content-post\">
\t\t\t\t    <p>this should be fantastic. but what about links,images, bbcodes etc etc? [...]</p>  
\t\t\t\t   </div> -->
\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t<a href=\"";
        // line 202
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_3"] ?? null), "href", [], "any", false, false, false, 202);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t</div>               
\t\t\t   </div>
            </div>

\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"panel panel-post\">
\t\t\t\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 210
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "thumb", [], "any", false, false, false, 210);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 214
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "name", [], "any", false, false, false, 214);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 216
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "rating", [], "any", false, false, false, 216) >= 0.5)) {
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 219
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "rating", [], "any", false, false, false, 221) >= 1.5)) {
            // line 222
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 224
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 226
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "rating", [], "any", false, false, false, 226) >= 2.5)) {
            // line 227
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "rating", [], "any", false, false, false, 231) >= 3.5)) {
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 234
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 236
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "rating", [], "any", false, false, false, 236) >= 4.5)) {
            // line 237
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 243
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "price", [], "any", false, false, false, 243);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 244
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "special", [], "any", false, false, false, 244);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 249
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_4"] ?? null), "href", [], "any", false, false, false, 249);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"panel panel-post\">
\t\t\t\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 257
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "thumb", [], "any", false, false, false, 257);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 261
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "name", [], "any", false, false, false, 261);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 263
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "rating", [], "any", false, false, false, 263) >= 0.5)) {
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 266
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 268
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "rating", [], "any", false, false, false, 268) >= 1.5)) {
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 271
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 273
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "rating", [], "any", false, false, false, 273) >= 2.5)) {
            // line 274
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 276
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 278
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "rating", [], "any", false, false, false, 278) >= 3.5)) {
            // line 279
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 281
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 283
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "rating", [], "any", false, false, false, 283) >= 4.5)) {
            // line 284
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 286
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 288
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 290
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "price", [], "any", false, false, false, 290);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 291
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "special", [], "any", false, false, false, 291);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 296
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_5"] ?? null), "href", [], "any", false, false, false, 296);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"panel panel-post\">
\t\t\t\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 304
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "thumb", [], "any", false, false, false, 304);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 308
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "name", [], "any", false, false, false, 308);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 310
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "rating", [], "any", false, false, false, 310) >= 0.5)) {
            // line 311
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 313
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 315
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "rating", [], "any", false, false, false, 315) >= 1.5)) {
            // line 316
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 318
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 320
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "rating", [], "any", false, false, false, 320) >= 2.5)) {
            // line 321
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 323
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 325
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "rating", [], "any", false, false, false, 325) >= 3.5)) {
            // line 326
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 328
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 330
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "rating", [], "any", false, false, false, 330) >= 4.5)) {
            // line 331
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 333
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 335
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 337
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "price", [], "any", false, false, false, 337);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 338
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "special", [], "any", false, false, false, 338);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 343
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_6"] ?? null), "href", [], "any", false, false, false, 343);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"panel panel-post\">
\t\t\t\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 351
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "thumb", [], "any", false, false, false, 351);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 355
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "name", [], "any", false, false, false, 355);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 357
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "rating", [], "any", false, false, false, 357) >= 0.5)) {
            // line 358
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 360
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 362
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "rating", [], "any", false, false, false, 362) >= 1.5)) {
            // line 363
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 365
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 367
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "rating", [], "any", false, false, false, 367) >= 2.5)) {
            // line 368
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 370
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 372
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "rating", [], "any", false, false, false, 372) >= 3.5)) {
            // line 373
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 375
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 377
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "rating", [], "any", false, false, false, 377) >= 4.5)) {
            // line 378
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 380
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 382
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 384
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "price", [], "any", false, false, false, 384);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 385
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "special", [], "any", false, false, false, 385);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 390
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_7"] ?? null), "href", [], "any", false, false, false, 390);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"panel panel-post\">
\t\t\t\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 398
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "thumb", [], "any", false, false, false, 398);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 402
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "name", [], "any", false, false, false, 402);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 404
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "rating", [], "any", false, false, false, 404) >= 0.5)) {
            // line 405
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 407
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 409
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "rating", [], "any", false, false, false, 409) >= 1.5)) {
            // line 410
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 412
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 414
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "rating", [], "any", false, false, false, 414) >= 2.5)) {
            // line 415
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 417
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 419
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "rating", [], "any", false, false, false, 419) >= 3.5)) {
            // line 420
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 422
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 424
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "rating", [], "any", false, false, false, 424) >= 4.5)) {
            // line 425
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 427
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 429
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 431
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "price", [], "any", false, false, false, 431);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 432
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "special", [], "any", false, false, false, 432);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 437
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_8"] ?? null), "href", [], "any", false, false, false, 437);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"panel panel-post\">
\t\t\t\t\t\t\t\t<div class=\"content-post\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 445
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "thumb", [], "any", false, false, false, 445);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t\t\t\t<header class=\"entry-header text-left\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"inverse-font\">";
        // line 449
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "name", [], "any", false, false, false, 449);
        echo "</h6>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 451
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "rating", [], "any", false, false, false, 451) >= 0.5)) {
            // line 452
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 454
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 456
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "rating", [], "any", false, false, false, 456) >= 1.5)) {
            // line 457
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 459
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 461
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "rating", [], "any", false, false, false, 461) >= 2.5)) {
            // line 462
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 464
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 466
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "rating", [], "any", false, false, false, 466) >= 3.5)) {
            // line 467
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 469
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 471
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "rating", [], "any", false, false, false, 471) >= 4.5)) {
            // line 472
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 474
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 476
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"day\">";
        // line 478
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "price", [], "any", false, false, false, 478);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"month\"><small><del>";
        // line 479
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "special", [], "any", false, false, false, 479);
        echo "</del></small></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-bottom\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 484
        echo twig_get_attribute($this->env, $this->source, ($context["BEST_SELLING_PRODUCTS_9"] ?? null), "href", [], "any", false, false, false, 484);
        echo "\" class=\"btn btn-xs btn-link\" data-original-title=\"\" title=\"\">READ MORE</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t</div>
\t\t <!-- <div class=\"col-md-12\">
         <button class=\"btn btn-default btn-block btn-lazy\">LOAD MORE POSTS</button>
\t\t </div> -->
        </div>
\t\t\t\t<script>
\t\t\t\t\t// some function that depends on bootstrap and jquery
\t\t\t\t\thead.ready(function () {
\t\t\t\t\t\t\$(\".owl-carousel\").owlCarousel({
\t\t\t\t\t\t\tmargin: 10,
\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\tnavText: [\"<div class='nav-button owl-prev'>‹</div>\", \"<div class='nav-button owl-next'>›</div>\"],
\t\t\t\t\t\t\tresponsive: {
\t\t\t\t\t\t\t\t0: {
\t\t\t\t\t\t\t\t\titems: 2
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t600: {
\t\t\t\t\t\t\t\t\titems: 3
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t1000: {
\t\t\t\t\t\t\t\t\titems: 4
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>
<!-- Recent Lazy Topics Loader Section -->";
    }

    public function getTemplateName()
    {
        return "addons/recent_topics_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  979 => 484,  971 => 479,  967 => 478,  963 => 476,  959 => 474,  955 => 472,  952 => 471,  948 => 469,  944 => 467,  941 => 466,  937 => 464,  933 => 462,  930 => 461,  926 => 459,  922 => 457,  919 => 456,  915 => 454,  911 => 452,  909 => 451,  904 => 449,  897 => 445,  886 => 437,  878 => 432,  874 => 431,  870 => 429,  866 => 427,  862 => 425,  859 => 424,  855 => 422,  851 => 420,  848 => 419,  844 => 417,  840 => 415,  837 => 414,  833 => 412,  829 => 410,  826 => 409,  822 => 407,  818 => 405,  816 => 404,  811 => 402,  804 => 398,  793 => 390,  785 => 385,  781 => 384,  777 => 382,  773 => 380,  769 => 378,  766 => 377,  762 => 375,  758 => 373,  755 => 372,  751 => 370,  747 => 368,  744 => 367,  740 => 365,  736 => 363,  733 => 362,  729 => 360,  725 => 358,  723 => 357,  718 => 355,  711 => 351,  700 => 343,  692 => 338,  688 => 337,  684 => 335,  680 => 333,  676 => 331,  673 => 330,  669 => 328,  665 => 326,  662 => 325,  658 => 323,  654 => 321,  651 => 320,  647 => 318,  643 => 316,  640 => 315,  636 => 313,  632 => 311,  630 => 310,  625 => 308,  618 => 304,  607 => 296,  599 => 291,  595 => 290,  591 => 288,  587 => 286,  583 => 284,  580 => 283,  576 => 281,  572 => 279,  569 => 278,  565 => 276,  561 => 274,  558 => 273,  554 => 271,  550 => 269,  547 => 268,  543 => 266,  539 => 264,  537 => 263,  532 => 261,  525 => 257,  514 => 249,  506 => 244,  502 => 243,  498 => 241,  494 => 239,  490 => 237,  487 => 236,  483 => 234,  479 => 232,  476 => 231,  472 => 229,  468 => 227,  465 => 226,  461 => 224,  457 => 222,  454 => 221,  450 => 219,  446 => 217,  444 => 216,  439 => 214,  432 => 210,  421 => 202,  409 => 193,  405 => 192,  401 => 190,  397 => 188,  393 => 186,  390 => 185,  386 => 183,  382 => 181,  379 => 180,  375 => 178,  371 => 176,  368 => 175,  364 => 173,  360 => 171,  357 => 170,  353 => 168,  349 => 166,  347 => 165,  342 => 163,  335 => 159,  324 => 151,  312 => 142,  308 => 141,  304 => 139,  300 => 137,  296 => 135,  293 => 134,  289 => 132,  285 => 130,  282 => 129,  278 => 127,  274 => 125,  271 => 124,  267 => 122,  263 => 120,  260 => 119,  256 => 117,  252 => 115,  250 => 114,  245 => 112,  238 => 108,  227 => 100,  215 => 91,  211 => 90,  207 => 88,  203 => 86,  199 => 84,  196 => 83,  192 => 81,  188 => 79,  185 => 78,  181 => 76,  177 => 74,  174 => 73,  170 => 71,  166 => 69,  163 => 68,  159 => 66,  155 => 64,  153 => 63,  148 => 61,  141 => 57,  130 => 49,  119 => 41,  115 => 40,  111 => 38,  107 => 36,  103 => 34,  100 => 33,  96 => 31,  92 => 29,  89 => 28,  85 => 26,  81 => 24,  78 => 23,  74 => 21,  70 => 19,  67 => 18,  63 => 16,  59 => 14,  57 => 13,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "addons/recent_topics_body.html", "");
    }
}
