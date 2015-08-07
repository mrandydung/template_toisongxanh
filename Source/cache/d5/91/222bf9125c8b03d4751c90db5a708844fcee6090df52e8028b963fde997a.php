<?php

/* Layout/_layout_payment.html */
class __TwigTemplate_d591222bf9125c8b03d4751c90db5a708844fcee6090df52e8028b963fde997a extends Twig_Template
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
        echo "<!-- /Layout/_layout_payment.html -->
<div class=\"row\">
    <div class=\"col-md-12 select_money\">
        <label><input type=\"radio\" name=\"donation_money\"/> 350.000 VNĐ</label>
        <label><input type=\"radio\" name=\"donation_money\"/> 200.000 VNĐ</label>
        <label><input type=\"radio\" name=\"donation_money\"/> 100.000 VNĐ</label>
        <label><input type=\"radio\" name=\"donation_money\"/> 50.000 VNĐ</label>
        <label><input type=\"radio\" name=\"donation_money\"/> 30.000 VNĐ</label>
    </div>
    <div class=\"col-md-2\">
        <label><input type=\"radio\" name=\"donation_money\"/> Số khác</label>
    </div>
    <div class=\"col-md-4\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Nhập số tiền\">
        <span class=\"input-group-btn\">
            <button class=\"btn btn-default\" type=\"button\">VNĐ</button>
        </span>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Layout/_layout_payment.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
