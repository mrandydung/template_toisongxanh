<?php

/* Balance/_balance_2_step3.html */
class __TwigTemplate_70037b87f4962f1ab293e46fdfcf3f978954ef7674704142934368d2ab5233a0 extends Twig_Template
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
        echo "<!-- /Balance/_balance_step3.html-->
<div class=\"body_balance\">
    <div class=\"row\">
        <div class=\"col-md-offset-4 col-md-4\">
            <div class=\"row\">
                <div class=\"col-md-12 box_1x\">
                    <p class=\"padding_top\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số tiền tương ứng với")), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1 tấn CO2")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("là:")), "html", null, true);
        echo "</p>
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\" disabled>
                        <span class=\"input-group-addon\" id=\"basic-addon2\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("VNĐ")), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 box_1x\">
                    <p><strong>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Phương thức thanh toán")), "html", null, true);
        echo "</strong></p>
                    <select class=\"form-control\">
                        <option>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán online")), "html", null, true);
        echo "</option>
                        <option>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán chuyển khoản")), "html", null, true);
        echo "</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-offset-4 col-md-4\">
            <button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_2_step3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  55 => 19,  51 => 18,  46 => 16,  37 => 10,  27 => 7,  19 => 1,);
    }
}
