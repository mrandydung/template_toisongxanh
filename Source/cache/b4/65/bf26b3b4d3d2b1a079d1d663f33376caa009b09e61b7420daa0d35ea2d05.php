<?php

/* _footer_booking.html */
class __TwigTemplate_b465bf26b3b4d3d2b1a079d1d663f33376caa009b09e61b7420daa0d35ea2d05 extends Twig_Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        $this->env->loadTemplate("_footer_item1.html")->display($context);
        // line 5
        echo "\t\t\t";
        $this->env->loadTemplate("_footer_item2.html")->display($context);
        // line 6
        echo "\t\t\t";
        $this->env->loadTemplate("_footer_item3.html")->display($context);
        // line 7
        echo "             
            
        </div>
    </div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "_footer_booking.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
