<?php

/* _account_transaction.html */
class __TwigTemplate_38d4455906d4f0bbd3d9b617c51638d64d834a0bbdd55b1e736c18f9e7ecf429 extends Twig_Template
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
        echo "<table class=\"table table-striped giaodich_content\">
                    <thead>
                    <tr>
                        <th>Mã vé</th>
                        <th>Loại xe</th>
                        <th>Hình thức</th>
                        <th>Địa chỉ đón khách</th>
                        <th>Thời gian</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Tiết kiệm</th>
                        <th>CO2 xả thải (kg)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>";
        // line 16
        $this->env->loadTemplate("_account_transaction_infor.html")->display($context);
        echo "</tr>
                    <tr>";
        // line 17
        $this->env->loadTemplate("_account_transaction_infor.html")->display($context);
        echo "</tr>
                    <tr>";
        // line 18
        $this->env->loadTemplate("_account_transaction_infor.html")->display($context);
        echo "</tr>
                    </tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Tổng</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>200.000Đ</th>
                        <th>80.000Đ</th>
                        <th>12kg</th>
\t\t\t\t\t</tr>
                </table>
\t\t\t\t<label for=\"booking_step1_balance\"><input type=\"checkbox\" value=\"balance\" name=\"booking_step1[balance]\"  id=\"booking_step1_balance\"> Tôi muốn sử dụng dịch vụ trung hòa khí thải.</label>
\t\t\t\t<div class=\"col-md-12 box_sm balance_display\">
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
\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service1_3\"><input type=\"radio\" name=\"booking_step1[service1_1]\"  id=\"booking_step1_service1_3\"> <input type=\"text\" class=\"text-right money\"/> Đ</label>
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
\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service2_3\"><input type=\"radio\" name=\"booking_step1[service2_2]\"  id=\"booking_step1_service2_3\"> <input type=\"text\" class=\"text-right money\"/> Đ</label>
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
\t\t\t\t\t\t\t\t\t<label for=\"booking_step1_service3_3\"><input type=\"radio\" name=\"booking_step1[service3_3]\"  id=\"booking_step1_service3_3\"> <input type=\"text\" class=\"text-right money\"/> Đ</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t\t\t<div class=\"col-md-offset-8 col-md-4 box_sm\">
\t\t\t\t\t\t\t<a class=\"btn btn_blue\">Thực hiện</a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "_account_transaction.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }
}
