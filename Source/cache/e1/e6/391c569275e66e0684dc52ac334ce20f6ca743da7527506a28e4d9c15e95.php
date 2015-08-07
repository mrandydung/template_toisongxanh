<?php

/* _booking_step1_add_address.html */
class __TwigTemplate_e1e6391c569275e66e0684dc52ac334ce20f6ca743da7527506a28e4d9c15e95 extends Twig_Template
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
\t<div class=\"col-md-4 padding_top\">
\t\t<label for=\"themdiachi1\">
\t\t\t<input type=\"checkbox\" value=\"themdiachi1\" id=\"themdiachi1\"/> Tôi muốn đón thêm người tại địa chỉ khác
\t\t</label>
\t</div>
\t<div class=\"col-md-8 col-sm-8 themdiachi1\" id=\"hienthiItem\" style=\"display:none\">
\t\t<div class=\"row\" >
\t\t\t<div class=\"col-md-11 col-sm-11 col-xs-11\">
\t\t\t\t<label class=\"col-md-2 control-label box_sm\">Địa chỉ</label>
\t\t\t\t<div class=\"col-md-10 box_xs\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-1 col-sm-1 col-xs-1 box_xs\" id=\"addnewitem\">
\t\t\t\t<a><img src=\"img/btn_add.png\"></a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_add_address.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
