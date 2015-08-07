<?php

/* _booking_step1_go_back.html */
class __TwigTemplate_a91dffb10b4c9f8efcf9cd2df525ecd7466432dd1189cff4aa3d8ac2de215eb6 extends Twig_Template
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
\t\t<label for=\"go_back\">
\t\t\t<input type=\"checkbox\" value=\"showdatxesanbay\" id=\"go_back\"/> Tôi muốn đặt xe chiều ngược lại
\t\t</label>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_go_back.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
