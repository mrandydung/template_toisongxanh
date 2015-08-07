<?php

/* _booking_step2_customer_info.html */
class __TwigTemplate_625d05569d4f952d134d8998936c9eb4810b2f96d9401c5af9bb433b41dd3e34 extends Twig_Template
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
<h4 class=\"addition_text\">Thông tin khách hàng</h4>
\t<div class=\"row\">
\t\t<div class=\"col-md-4 padding_top\">
\t\t\t<div class=\"has-error\">
\t\t\t\t<label class=\"control-label\" for=\"customer_form_name\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Họ tên")), "html", null, true);
        echo "*:</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"customer_form[name]\"  id=\"customer_form_name\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4 padding_top\">
\t\t\t<div class=\"has-error\">
\t\t\t\t<label class=\"control-label\" for=\"customer_form_phone\">";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện thoại liên hệ")), "html", null, true);
        echo "*:</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"customer_form[phone]\"  id=\"customer_form_phone\"/>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4 padding_top\">
\t\t\t<label for=\"customer_form_email\">Email:</label>
\t\t\t<input class=\"form-control\" name=\"customer_form[email]\"  id=\"customer_form_email\">
\t\t</div>
\t\t<div class=\"col-md-12 padding_top\">
\t\t\t<label for=\"customer_form_address\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ bổ sung (số nhà, tên đường)")), "html", null, true);
        echo ":</label>
\t\t\t<input class=\"form-control\" name=\"customer_form[address]\"  id=\"customer_form_address\">
\t\t</div>\t\t\t\t
\t\t<div class=\"col-md-12 padding_top\">
\t\t\t<label>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ghi chú")), "html", null, true);
        echo ":</label>
\t\t\t<textarea class=\"form-control\" rows=\"3\"></textarea>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step2_customer_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 25,  47 => 21,  35 => 12,  26 => 6,  19 => 1,);
    }
}
