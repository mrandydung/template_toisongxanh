<?php

/* Balance/_balance_2_step1.html */
class __TwigTemplate_4eb30f64065bcbb4831b2a78ea71e78d492881162d92f79c8d4da32f8c0304f4 extends Twig_Template
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
        echo "<!-- Balance/_balance_2_step1.html -->
<div class=\"body_balance\">
    <div class=\"row\">
        <div class=\"col-md-offset-4 col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-12 box_1x\">
                    <p><strong>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cách thức giảm thải")), "html", null, true);
        echo "</strong></p>
                    <select class=\"form-control\">
                        <option>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Theo CO2")), "html", null, true);
        echo "</option>
                        <option>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Theo đóng góp")), "html", null, true);
        echo "</option>
                    </select>
                </div>
                <div class=\"col-md-12 box_1x\">
                    <p><strong>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số tiền đóng góp")), "html", null, true);
        echo "</strong></p>
                    <select class=\"form-control\">
                        <option>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("500.000 VNĐ")), "html", null, true);
        echo "</option>
                        <option>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("200.000 VNĐ")), "html", null, true);
        echo "</option>
                        <option>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khác")), "html", null, true);
        echo "</option>
                    </select>
                    <p class=\"padding_top\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập số tiền:")), "html", null, true);
        echo "</p>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
                        <span class=\"input-group-addon\" id=\"basic-addon2\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("VNĐ")), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <div class=\"col-md-12 box_1x\">
                    <p class=\"padding_top\"><strong>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập khối lượng CO2 muốn giảm thải:")), "html", null, true);
        echo "</strong></p>
                    <div class=\"input-group\">
                        <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
                        <span class=\"input-group-addon\" id=\"basic-addon2\">";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tấn")), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-offset-4 col-md-4\">
            <button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_2_step1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  80 => 30,  74 => 27,  67 => 23,  61 => 20,  56 => 18,  52 => 17,  48 => 16,  43 => 14,  36 => 10,  32 => 9,  27 => 7,  19 => 1,);
    }
}
