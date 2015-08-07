<?php

/* booking.html */
class __TwigTemplate_132e05fd636b33bd462cfdb8cd86191b91af0863a481b09380a00e792364ea5a extends Twig_Template
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
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
\t\t";
        // line 7
        $this->env->loadTemplate("_header.html")->display($context);
        // line 8
        echo "
        <h1>BOOKING</h1>
        
\t\t";
        // line 11
        $this->env->loadTemplate("_footer.html")->display($context);
        // line 12
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "booking.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  34 => 11,  29 => 8,  27 => 7,  19 => 1,);
    }
}
