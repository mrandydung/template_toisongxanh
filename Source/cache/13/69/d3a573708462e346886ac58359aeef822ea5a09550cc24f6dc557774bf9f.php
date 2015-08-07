<?php

/* Layout/_layout_payment.html */
class __TwigTemplate_1369d3a573708462e346886ac58359aeef822ea5a09550cc24f6dc557774bf9f extends Twig_Template
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
    <div class=\"col-md-4 box_1x\">
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
        <p class=\"h4 text-uppercase\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Phương thức thanh toán")), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-md-12\">
        <label><input type=\"radio\" name=\"payment\" value=\"payment_1\"> <strong>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán bằng thẻ ATM")), "html", null, true);
        echo "</strong></label>
        <div class=\"display_none pay_description_1\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
    </div>
    <div class=\"col-md-12\">
        <label><input type=\"radio\" name=\"payment\" value=\"payment_2\"> <strong>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán bằng thẻ quốc tế")), "html", null, true);
        echo "</strong></label>
        <div class=\"display_none pay_description_2\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
    </div>
    <div class=\"col-md-12\">
        <label><input type=\"radio\" name=\"payment\" value=\"payment_3\"> <strong>";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán chuyển khoản")), "html", null, true);
        echo "</strong></label>
        <div class=\"display_none pay_description_3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Layout/_layout_payment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  73 => 29,  63 => 22,  57 => 19,  48 => 13,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }
}
