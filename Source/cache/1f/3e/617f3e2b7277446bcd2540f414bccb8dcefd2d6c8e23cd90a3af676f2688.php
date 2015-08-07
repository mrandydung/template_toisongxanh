<?php

/* booking.html */
class __TwigTemplate_1f3e617f3e2b7277446bcd2540f414bccb8dcefd2d6c8e23cd90a3af676f2688 extends Twig_Template
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
        ";
        // line 9
        $this->env->loadTemplate("_formBooking.html")->display($context);
        // line 10
        echo "        
\t\t";
        // line 11
        $this->env->loadTemplate("_footer_booking.html")->display($context);
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
        return array (  39 => 12,  37 => 11,  34 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
