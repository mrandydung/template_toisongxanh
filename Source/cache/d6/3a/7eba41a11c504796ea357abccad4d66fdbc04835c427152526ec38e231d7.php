<?php

/* _booking_step1_airport_to.html */
class __TwigTemplate_d63a7eba41a11c504796ea357abccad4d66fdbc04835c427152526ec38e231d7 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-md-4\">
\t\t<label for=\"airport_to\">
\t\t\t<input type=\"checkbox\" value=\"showdatxesanbay\" id=\"airport_to\"/> Tôi muốn đặt xe tại sân bay đến
\t\t</label>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_airport_to.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
