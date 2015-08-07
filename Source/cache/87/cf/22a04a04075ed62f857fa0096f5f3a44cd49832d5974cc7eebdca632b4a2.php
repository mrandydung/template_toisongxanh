<?php

/* layout_booking.html */
class __TwigTemplate_87cf22a04a04075ed62f857fa0096f5f3a44cd49832d5974cc7eebdca632b4a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'test' => array($this, 'block_test'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('test', $context, $blocks);
        echo "</title>
    </head>
    <body>
\t\t";
        // line 7
        $this->env->loadTemplate("_header.html")->display($context);
        // line 8
        echo "\t\t";
        $this->env->loadTemplate("_booking_login_remind.html")->display($context);
        // line 9
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "\t\t";
        $this->env->loadTemplate("_invite_right_bar.html")->display($context);
        // line 11
        echo "\t\t";
        $this->env->loadTemplate("_footer.html")->display($context);
        // line 12
        echo "    </body>
</html>";
    }

    // line 4
    public function block_test($context, array $blocks = array())
    {
        echo " yyyyy";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_booking.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 4,  46 => 12,  43 => 11,  40 => 10,  37 => 9,  34 => 8,  32 => 7,  26 => 4,  21 => 1,);
    }
}
