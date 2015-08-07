<?php

/* _booking_step2_invoice.html */
class __TwigTemplate_5cb356446089d953afb63cc964e87d196aece71b37e14050b3568941fdcc8c9c extends Twig_Template
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
        echo "\t\t\t\t<div class=\"row\">
                    <div class=\"col-md-12\">
                        <label for=\"invoice_form_enable\">
\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"hoadon\" name=\"invoice_form[enable]\"  id=\"invoice_form_enable\"/> ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi muốn xuất hóa đơn")), "html", null, true);
        echo "
\t\t\t\t\t\t</label>
                    </div>
                    <div class=\"col-md-12 box_xs hoadon\">
                        <div class=\"row\">
                            <div class=\"col-md-6 padding_top\">
                                <label for=\"invoice_form_compay_name\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tên công ty")), "html", null, true);
        echo "*:</label>
                                <input class=\"form-control\" name=\"invoice_form[compay_name]\" id=\"invoice_form_compay_name\"/>
                            </div>
                            <div class=\"col-md-6 padding_top\">
                                <label for=\"invoice_form_compay_address\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ công ty")), "html", null, true);
        echo "*:</label>
                                <input class=\"form-control\" name=\"invoice_form[compay_address]\" id=\"invoice_form_compay_address\"/>
                            </div>
                            <div class=\"col-md-6 padding_top\">
                                <label for=\"invoice_form_tax_code\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mã số thuế")), "html", null, true);
        echo "*:</label>
                                <input class=\"form-control\" name=\"invoice_form[tax_code]\" id=\"invoice_form_tax_code\"/>
                            </div>
                            <div class=\"col-md-6 padding_top\">
                                <label for=\"invoice_form_invoice_address\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ nhận hóa đơn")), "html", null, true);
        echo " <span class=\"hightlight\">(?)</span> :</label>
                                <input class=\"form-control\" name=\"invoice_form[invoice_address]\" id=\"invoice_form_invoice_address\"/>
                            </div>
                        </div>
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step2_invoice.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  47 => 18,  40 => 14,  33 => 10,  24 => 4,  19 => 1,);
    }
}
