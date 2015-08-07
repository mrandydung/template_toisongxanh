<?php

/* Balance/_balance_step3.html */
class __TwigTemplate_a78bf4a9e7030c64362f9a45fec1aa59be3ff2dcd6a5ee5ece4c1dae4f5f9787 extends Twig_Template
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
<div class=\"body_balance box_1x\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-12 text-center\">
                <h4>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lựa chọn hình thức thanh toán")), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"col-md-12\">
                <label><input type=\"radio\" name=\"payment\" id=\"payment_1\"> <strong>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán bằng thẻ ATM")), "html", null, true);
        echo "</strong></label>
                <div class=\"display_none pay_description_1\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
            </div>
            <div class=\"col-md-12\">
                <label><input type=\"radio\" name=\"payment\" id=\"payment_2\"> <strong>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán bằng thẻ quốc tế")), "html", null, true);
        echo "</strong></label>
                <div class=\"display_none pay_description_2\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
            </div>
            <div class=\"col-md-12\">
                <label><input type=\"radio\" name=\"payment\" id=\"payment_3\"> <strong>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán chuyển khoản")), "html", null, true);
        echo "</strong></label>
                <div class=\"display_none pay_description_3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
            </div>
        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-offset-4 col-md-4\">
            <a href=\"thank-you.php\"><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hoàn tất")), "html", null, true);
        echo "</button></a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 33,  52 => 23,  42 => 16,  32 => 9,  26 => 6,  19 => 1,);
    }
}
