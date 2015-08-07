<?php

/* _header.html */
class __TwigTemplate_eeefecbaef74f93000cf5226ba7cf6f566b5ac53d639af27d8686028e1bd66f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset='utf-8'>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:700,400|Roboto+Slab' rel='stylesheet' type='text/css'>
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/css/main.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/menu.css\">
    <link href=\"/css/full-slider.css\" rel=\"stylesheet\">

    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <script src=\"/js/jquery-1.11.0.js\"></script>
    <script src=\"/js/menu_script.js\"></script>
    <script type='text/javascript' src='/js/quanli_script.js'></script>
    <script type='text/javascript'  src='/js/popbox.js'></script>
    <script src=\"/js/jquery.tabSlideOut.v1.3.js\"></script>
    <!-- jQuery Version 1.11.0 -->


    <!-- Bootstrap Core JavaScript -->
    <script src=\"/js/bootstrap.min.js\"></script>

    <!-- Script to Activate the Carousel -->

</head>

<body>

 
    <!-- Navigation -->
    ";
        // line 35
        $this->env->loadTemplate("_header_top.html")->display($context);
        // line 36
        echo "\t";
        $this->env->loadTemplate("_header_menu.html")->display($context);
    }

    public function getTemplateName()
    {
        return "_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 36,  55 => 35,  19 => 1,);
    }
}
