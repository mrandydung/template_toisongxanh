<?php

/* Balance/_balance_step1_user.html */
class __TwigTemplate_e54046dec1eb8a0a596a739360b44686bcf3a643d49578d976ffbb26b46493dd extends Twig_Template
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
        echo "<!-- /Balance/_balance_step1_user.html' %} -->
<div class=\"row box_1x\">
    <div class=\"col-md-offset-3 col-md-9\">
        <p class=\"text-uppercase\"><strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi là:")), "html", null, true);
        echo "</strong></p>
    </div>
    <div class=\"col-md-offset-4 col-md-2 col-sm-4 col-xs-6 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[user]\">
            <span class=\"canhan\"></span>
            <p class=\"h5 box_1x\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cá nhân")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[user]\">
        </label>
    </div>
    <div class=\"col-md-2 col-sm-4 col-xs-6 box_1x text-center\">
        <label class=\"balance_choose\" name=\"balance_form[user]\">
            <span class=\"tochuc\"></span>
            <p class=\"h5 box_1x\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tổ chức")), "html", null, true);
        echo "</p>
            <input type=\"radio\" name=\"booking_form[user]\">
        </label>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step1_user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  32 => 9,  24 => 4,  19 => 1,);
    }
}
