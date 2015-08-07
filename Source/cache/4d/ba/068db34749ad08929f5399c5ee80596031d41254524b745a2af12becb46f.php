<?php

/* index.html */
class __TwigTemplate_4dba068db34749ad08929f5399c5ee80596031d41254524b745a2af12becb46f extends Twig_Template
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
        <h1>INDEX</h1>
        
\t\t";
        // line 11
        $this->env->loadTemplate("_footer.html")->display($context);
        // line 12
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
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
