<?php

/* _booking_step1_balance.html */
class __TwigTemplate_6027559a3ae7a5024918e172b23b96842bdbf9a4b5f45581980545b82d8d57c5 extends Twig_Template
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
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"thongtinchuyenbay\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h4>Bạn có biết</h4>
\t\t\t\t\t\t<p>Chuyến đi của bạn dài 30km với thời gian dự tính 30 phút. Trong suốt chuyến đi của bạn lượng khí CO2 thải ra môi trường là: 0.009mg</p>
\t\t\t\t\t\t<p>Là một doanh nghiệp xã hội, Dichung khuyến khích bạn sử dụng dịch vụ trung hòa khí thải ra môi trường.</p>
\t\t\t\t\t\t<label for=\"booking_step1_balance\"><input type=\"checkbox\" value=\"balance\" name=\"booking_step1[balance]\"  id=\"booking_step1_balance\"> Tôi đồng ý sử dụng dịch vụ trung hòa khí thải.</label>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 balance_display\">
\t\t\t\t\t\t<select class=\"form-control\" name=\"booking_step1[balance]\"  id=\"booking_step1_balance\">
\t\t\t\t\t\t\t<option>Sử dụng dịch vụ 1</option>
\t\t\t\t\t\t\t<option>Sử dụng dịch vụ 1</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"row padding_top\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_1\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_1\"> 500.000Đ</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_2\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_2\"> 200.000Đ</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_3\"><input value=\"balance\" type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_3\"> Khác </label>
\t\t\t\t\t\t\t\t<div class=\"balance_display\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t  <span class=\"input-group-addon\" id=\"basic-addon2\">VNĐ</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t<!--<div class=\"col-md-12 box_sm balance_display\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"balance\">
\t\t\t\t\t\t\t\t<div><label for=\"booking_step1_service1\"><input type=\"checkbox\" value=\"dichvu1\" name=\"booking_step1[service1]\"  id=\"booking_step1_service1\"> Tôi đồng ý sử dụng dịch vụ 1.</label></div>
\t\t\t\t\t\t\t\t<div class=\"dichvu1\">
\t\t\t\t\t\t\t\t\t<div class=\"costs recommend\">
\t\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_1\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_1\"> 500.000Đ</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"costs\">
\t\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_2\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_2\"> 200.000Đ</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"costs\">
\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_3\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_3\"> Khác </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-right\"/> Đ
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"balance\">
\t\t\t\t\t\t\t\t<div><label for=\"booking_step1_service2\"><input type=\"checkbox\" value=\"dichvu2\" name=\"booking_step1[service2]\"  id=\"booking_step1_service2\"> Tôi đồng ý sử dụng dịch vụ 2.</label></div>
\t\t\t\t\t\t\t\t<div class=\"dichvu2\">
\t\t\t\t\t\t\t\t\t<div class=\"costs recommend\">
\t\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service2_1\"><input type=\"radio\" name=\"booking_step1[service2_2]\"  id=\"booking_step1_service2_1\"> 500.000Đ</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"costs\">
\t\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service2_2\"><input type=\"radio\" name=\"booking_step1[service2_2]\"  id=\"booking_step1_service2_2\"> 200.000Đ</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"costs\">
\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_3\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_3\"> Khác </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-right\"/> Đ
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"balance\">
\t\t\t\t\t\t\t\t<div><label for=\"booking_step1_service3\"><input type=\"checkbox\" value=\"dichvu3\" name=\"booking_step1[service3]\"  id=\"booking_step1_service3\"> Tôi đồng ý sử dụng dịch vụ 3.</label></div>
\t\t\t\t\t\t\t\t<div class=\"dichvu3\">
\t\t\t\t\t\t\t\t\t<div class=\"costs recommend\">
\t\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service3_1\"><input type=\"radio\" name=\"booking_step1[service3_3]\"  id=\"booking_step1_service3_1\"> 500.000Đ</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"costs\">
\t\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service3_2\"><input type=\"radio\" name=\"booking_step1[service3_3]\"  id=\"booking_step1_service3_2\"> 200.000Đ</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"costs\">
\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_3\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_3\"> Khác </label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-right\"/> Đ
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>-->
\t\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_balance.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
