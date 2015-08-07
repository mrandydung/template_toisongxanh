<?php

/* Balance/_balance_step1_kind2.html */
class __TwigTemplate_3ea2953b7823fec154c050065bb3a49bcb414b493519d039c9989c07ad89254e extends Twig_Template
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
        echo "<!-- _balance_step1_kind2.html -->
<div class=\"step1_kind row box_1x\">
    <div class=\"col-md-offset-2 col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thời gian muốn trung hòa:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Tháng</span>
        </div>
    </div>
    <div class=\"col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Giá điện tính theo:")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hộ gia đình")), "html", null, true);
        echo "</option>
            <option>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện kinh doanh")), "html", null, true);
        echo "</option>
            <option>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện sản xuất")), "html", null, true);
        echo "</option>
            <option>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đối tượng ưu đãi (trường học, bệnh viện ...)")), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tiền điện trung bình:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">VNĐ/tháng</span>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step1_kind2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  34 => 11,  24 => 4,  19 => 1,);
    }
}
