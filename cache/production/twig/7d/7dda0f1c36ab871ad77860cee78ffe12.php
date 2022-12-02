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

/* simple_header_ACP.html */
class __TwigTemplate_f22ae261e94b3bd9504c51b21bcdeaf3 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"designer\" content=\"SiteSplat https://themeforest.net/user/themesplat/portfolio?ref=ThemeSplat\">
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        echo ($context["PAGE_TITLE"] ?? null);
        echo "&nbsp;&#45;&nbsp;";
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "&nbsp;&#45;&nbsp;";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo "&nbsp;&#45;&nbsp;";
        }
        echo ($context["SITENAME"] ?? null);
        echo "</title>
<!-- Google free font here -->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet'>
<link href='//fonts.googleapis.com/css?family=Asap+Condensed:600' rel='stylesheet'>

<!-- CSS files start here-->
<link href=\"";
        // line 14
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/stylesheet.css\" rel=\"stylesheet\">
";
        // line 15
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 16);
        echo "
";
        // line 17
        // line 18
        echo "<link href=\"";
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/custom.css\" rel=\"stylesheet\">
<!-- CSS files -->

<!-- magic dust -->
<!-- //cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js -->
<script src=\"";
        // line 23
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/vendors/head.load.min.js\"></script>


";
        // line 26
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 27
        echo "
";
        // line 28
        // line 29
        echo "
";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 30);
        echo "

";
        // line 32
        // line 33
        echo "
</head>

<body id=\"phpbb\" class=\"section-";
        // line 36
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 38
        // line 39
        echo "
<div class=\"dormient\">
<div class=\"container\">
  <!-- start content -->
  <div id=\"content-forum\">
   
   <div id=\"page-body\">
\t <main role=\"main\">";
    }

    public function getTemplateName()
    {
        return "simple_header_ACP.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  127 => 38,  118 => 36,  113 => 33,  112 => 32,  107 => 30,  104 => 29,  103 => 28,  100 => 27,  97 => 26,  91 => 23,  82 => 18,  81 => 17,  77 => 16,  76 => 15,  72 => 14,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simple_header_ACP.html", "");
    }
}
