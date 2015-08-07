<?php

/* _booking_step2_payment.html */
class __TwigTemplate_a4a1b886d9f645dca6e47f5b98ebc033502c459c4876126ad30891c3c8292495 extends Twig_Template
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
        echo "
<div class=\"row box_md\">
\t<div class=\"col-md-12\">
\t\t<h4 class=\"addition_text\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo " <small><a href=\"\">(";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xem hướng dẫn")), "html", null, true);
        echo ")</a></small> </h4>
\t\t<div class=\"row box_xs\">
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t<label for=\"customer_form_introduce_code_checkbox\">
\t\t\t\t\t<input type=\"checkbox\" name=\"customer_form[introduce_code_checkbox]\" id=\"customer_form_introduce_code_checkbox\" value=\"introduce_code\"/>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Tôi có mã giới thiệu")), "html", null, true);
        echo ":
\t\t\t\t</label>
\t\t\t\t<input class=\"form-control\" name=\"customer_form[introduce_code]\"  id=\"customer_form_introduce_code\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t<label for=\"customer_form_discount_code_checkbox\">
\t\t\t\t\t<input type=\"checkbox\" name=\"customer_form[discount_code_checkbox]\" id=\"customer_form_discount_code_checkbox\" value=\"discount_code\"/>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Tôi có mã giảm giá")), "html", null, true);
        echo ":
\t\t\t\t</label>
\t\t\t\t<input class=\"form-control\" name=\"customer_form[discount_code]\"  id=\"customer_form_discount_code\">
\t\t\t</div>
\t\t</div>
\t\t<hr/>
\t\t<div class=\"row box_xs\">
\t\t\t<div class=\"col-md-4 col-ms-4 col-xs-4\">
\t\t\t\t<label for=\"payment_form_online_pay\">
\t\t\t\t\t<input type=\"radio\" name=\"thanhtoan\"  name=\"payment_form[online_pay]\"  id=\"payment_form_online_pay\" value=\"online_pay\"/> Thanh toán online
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-ms-4 col-xs-4\">
\t\t\t\t<label for=\"payment_form_transfer_pay\">
\t\t\t\t\t<input type=\"radio\" name=\"thanhtoan\"  name=\"payment_form[transfer_pay]\"  id=\"payment_form_transfer_pay\" value=\"transfer_pay\"/> Chuyển khoản
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-ms-4 col-xs-4\">
\t\t\t\t<label for=\"payment_form_pay_back\">
\t\t\t\t\t<input type=\"radio\" name=\"thanhtoan\"   name=\"payment_form[pay_back]\"  id=\"payment_form_pay_back\" value=\"pay_back\"> Thanh toán sau
\t\t\t\t</label>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-12\" id=\"payment_form_online_pay_info\">
\t\t<h5>Quý khách đã lựa chọn hình thức thanh toán online </h5>\t\t
\t\t<p>Quý khách có thể chuyển tiền vào tài khoản</p>
\t\t<table width=\"100%\" class=\"text-center\">
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<p>Số: 123456</p>
\t\t\t\t\t<p>Ngân hàng: Techcomback Hai Bà Trưng</p>
\t\t\t\t\t<p>Chủ tài khoản: Công ty cổ phần đi chung</p>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Hoặc</p>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Số: 123456</p>
\t\t\t\t\t<p>Ngân hàng: 12354</p>
\t\t\t\t\t<p>Chủ tài khoản: Công ty cổ phần đi chung</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div class=\"col-md-12\" id=\"payment_form_transfer_pay_info\">
\t\t<h5>Quý khách đã lựa chọn hình thức thanh toán chuyển khoản </h5>\t\t
\t\t<p>Quý khách có thể chuyển tiền vào tài khoản</p>
\t\t<table width=\"100%\" class=\"text-center\">
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<p>Số: 123456</p>
\t\t\t\t\t<p>Ngân hàng: Techcomback Hai Bà Trưng</p>
\t\t\t\t\t<p>Chủ tài khoản: Công ty cổ phần đi chung</p>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Hoặc</p>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Số: 123456</p>
\t\t\t\t\t<p>Ngân hàng: 12354</p>
\t\t\t\t\t<p>Chủ tài khoản: Công ty cổ phần đi chung</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div class=\"col-md-12\" id=\"payment_form_pay_back_info\">
\t\t<h5>Quý khách đã lựa chọn hình thức thanh toán trả sau </h5>\t\t
\t\t<p>Quý khách có thể chuyển tiền vào tài khoản</p>
\t\t<table width=\"100%\" class=\"text-center\">
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<p>Số: 123456</p>
\t\t\t\t\t<p>Ngân hàng: Techcomback Hai Bà Trưng</p>
\t\t\t\t\t<p>Chủ tài khoản: Công ty cổ phần đi chung</p>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Hoặc</p>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<p>Số: 123456</p>
\t\t\t\t\t<p>Ngân hàng: 12354</p>
\t\t\t\t\t<p>Chủ tài khoản: Công ty cổ phần đi chung</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step2_payment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  33 => 8,  24 => 4,  19 => 1,);
    }
}
