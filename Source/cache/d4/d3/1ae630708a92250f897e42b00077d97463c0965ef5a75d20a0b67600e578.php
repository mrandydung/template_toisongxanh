<?php

/* /Layout/layout.html */
class __TwigTemplate_d4d31ae630708a92250f897e42b00077d97463c0965ef5a75d20a0b67600e578 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/full-slider.css\" rel=\"stylesheet\">
    <link href=\"css/main.css\" rel=\"stylesheet\">
    <link href=\"css/animate.css\"rel=\"stylesheet\" >

    <!-- jQuery Version 1.11.0 -->
    <script src=\"js/jquery-1.11.0.js\"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/wow.min_.js\"></script>
    <script src=\"js/smoothPageScroll.js\"></script>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <script src=\"js/TweenMax.min.js\"></script>
    <script src=\"js/ScrollToPlugin.min.js\"></script>


</head>

<body>
    ";
        // line 33
        $this->env->loadTemplate("/Layout/_header.html")->display($context);
        // line 34
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "    ";
        $this->env->loadTemplate("/Layout/_footer.html")->display($context);
        // line 36
        echo "    ";
        $this->env->loadTemplate("/Layout/_js.html")->display($context);
        // line 37
        echo "    ";
        $this->env->loadTemplate("/Layout/_login_modal.html")->display($context);
        // line 38
        echo "    ";
        $this->env->loadTemplate("/Layout/_register_modal.html")->display($context);
        // line 39
        echo "</body>
</html>";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "/Layout/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 34,  71 => 39,  68 => 38,  65 => 37,  62 => 36,  59 => 35,  56 => 34,  54 => 33,  20 => 1,);
    }
}
