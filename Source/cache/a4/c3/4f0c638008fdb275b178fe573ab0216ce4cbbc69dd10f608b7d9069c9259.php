<?php

/* /Balance/_balance_payment.html */
class __TwigTemplate_a4c34f0c638008fdb275b178fe573ab0216ce4cbbc69dd10f608b7d9069c9259 extends Twig_Template
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
        echo "<!-- /Balance/_balance_payment.html -->
<div class=\"row\">
    <div class=\"col-md-12 box_1x\">
        <p><strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số tiền thanh toán")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("500.000 VNĐ")), "html", null, true);
        echo "</option>
            <option>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("200.000 VNĐ")), "html", null, true);
        echo "</option>
            <option>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khác")), "html", null, true);
        echo "</option>
        </select>
        <p class=\"padding_top\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập số tiền:")), "html", null, true);
        echo "</p>
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\" id=\"basic-addon2\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("VNĐ")), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12 box_1x\">
        <p><strong>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Phương thức thanh toán")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán online")), "html", null, true);
        echo "</option>
            <option>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán chuyển khoản")), "html", null, true);
        echo "</option>
        </select>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Balance/_balance_payment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  62 => 21,  57 => 19,  48 => 13,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }
}
