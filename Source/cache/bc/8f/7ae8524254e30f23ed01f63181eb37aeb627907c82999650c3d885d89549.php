<?php

/* Layout/_layout_paymethod.html */
class __TwigTemplate_bc8f7ae8524254e30f23ed01f63181eb37aeb627907c82999650c3d885d89549 extends Twig_Template
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
        echo "<!-- Layout/_layout_paymethod.html -->
    <div class=\"col-md-12\">
        <p class=\"h4 text-uppercase\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lựa chọn hình thức thanh toán")), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-md-12\">
        <label><input type=\"radio\" name=\"payment\" id=\"payment_1\"> <strong>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán bằng thẻ ATM")), "html", null, true);
        echo "</strong></label>
        <div class=\"display_none pay_description_1\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
    </div>
    <div class=\"col-md-12\">
        <label><input type=\"radio\" name=\"payment\" id=\"payment_2\"> <strong>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán bằng thẻ quốc tế")), "html", null, true);
        echo "</strong></label>
        <div class=\"display_none pay_description_2\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
    </div>
    <div class=\"col-md-12\">
        <label><input type=\"radio\" name=\"payment\" id=\"payment_3\"> <strong>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán chuyển khoản")), "html", null, true);
        echo "</strong></label>
        <div class=\"display_none pay_description_3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
    </div>";
    }

    public function getTemplateName()
    {
        return "Layout/_layout_paymethod.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  39 => 13,  29 => 6,  23 => 3,  19 => 1,);
    }
}
