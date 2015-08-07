<?php

/* _index_body.html */
class __TwigTemplate_7739d89f198c2a0a1258e2dec7b95c4c1d742d2827d6effd8e05df6f3b104425 extends Twig_Template
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
        echo "<div class=\"banner\">
\t<header id=\"myCarousel\" class=\"carousel slide\">
\t";
        // line 3
        $this->env->loadTemplate("_index_body_slide.html")->display($context);
        // line 4
        echo "\t 
\t";
        // line 5
        $this->env->loadTemplate("_index_body_booking_form.html")->display($context);
        // line 6
        echo "\t</header>

</div>
";
        // line 9
        $this->env->loadTemplate("_index_body_slogen.html")->display($context);
        // line 10
        $this->env->loadTemplate("_index_body_popular_place.html")->display($context);
        // line 11
        $this->env->loadTemplate("_index_body_stat.html")->display($context);
        // line 12
        $this->env->loadTemplate("_index_body_discount.html")->display($context);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "_index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
