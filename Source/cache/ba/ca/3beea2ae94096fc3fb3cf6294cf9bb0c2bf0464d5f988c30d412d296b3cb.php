<?php

/* Balance/_balance_step1_kind.html */
class __TwigTemplate_baca3beea2ae94096fc3fb3cf6294cf9bb0c2bf0464d5f988c30d412d296b3cb extends Twig_Template
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
        echo "<!-- /Balance/_balance_step1_kind.html -->
<div class=\"step1_kind row box_1x\">
    <div class=\"col-md-offset-3 col-md-9\">
        <p class=\"text-uppercase\"><strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại phương tiện:")), "html", null, true);
        echo "</strong></p>
    </div>
    <div class=\"col-md-offset-4 col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[kind]\">
            <span class=\"oto\"></span>
            <p class=\"h5 box_1x\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xe riêng")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[kind]\" id=\"kind_1\">
        </label>
    </div>
    <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[kind]\">
            <span class=\"maybay\"></span>
            <p class=\"h5 box_1x\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hãng vận chuyển")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[kind]\" id=\"kind_2\">
        </label>
    </div>
    <!--
    <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[kind]\">
            <span class=\"tauhoa\"></span>
            <p class=\"h5 box_1x\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đường sắt")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[kind]\" id=\"kind_3\">
        </label>
    </div>
    <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[kind]\">
            <span class=\"tauthuy\"></span>
            <p class=\"h5 box_1x\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đường thủy")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[kind]\" id=\"kind_4\">
        </label>
    </div> -->
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step1_kind.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  53 => 24,  42 => 16,  32 => 9,  24 => 4,  19 => 1,);
    }
}
