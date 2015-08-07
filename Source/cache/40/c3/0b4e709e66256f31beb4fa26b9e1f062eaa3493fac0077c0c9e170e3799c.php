<?php

/* Balance/_balance_step1_activity.html */
class __TwigTemplate_40c30b4e709e66256f31beb4fa26b9e1f062eaa3493fac0077c0c9e170e3799c extends Twig_Template
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
        echo "<!-- /Balance/_balance_step1_activity.html' %} -->
<div class=\"row box_1x\">
    <div class=\"col-md-offset-3 col-md-9\">
        <p class=\"text-uppercase\"><strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hoạt động xả thải:")), "html", null, true);
        echo "</strong></p>
    </div>
    <div class=\"col-md-offset-3 col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[activity]\">
            <span class=\"dilai\"></span>
            <p class=\"h5 box_1x\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đi lại")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[activity]\" id=\"activity_1\">
        </label>
    </div>
    <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[activity]\">
            <span class=\"sinhhoat\"></span>
            <p class=\"h5 box_1x\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sử dụng điện")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[activity]\" id=\"activity_2\">
        </label>
    </div>
    <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[activity]\">
            <span class=\"sukien\"></span>
            <p class=\"h5 box_1x\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tiêu dùng")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[activity]\" id=\"activity_3\">
        </label>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step1_activity.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  42 => 16,  32 => 9,  24 => 4,  19 => 1,);
    }
}
