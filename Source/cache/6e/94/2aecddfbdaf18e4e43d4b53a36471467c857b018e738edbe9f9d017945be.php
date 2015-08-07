<?php

/* Balance/_balance_step1_kind3.html */
class __TwigTemplate_6e942aecddfbdaf18e4e43d4b53a36471467c857b018e738edbe9f9d017945be extends Twig_Template
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
        echo "<!-- Balance/_balance_step1_kind3.html -->
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lương rác thải trung bình:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Kg/Tháng</span>
        </div>
    </div>
    <div class=\"col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại rác thải:")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rác thải sinh hoạt")), "html", null, true);
        echo "</option>
            <option>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rác thải công nghiệp")), "html", null, true);
        echo "</option>
            <option>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rác thải phân hủy")), "html", null, true);
        echo "</option>
            <option>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rác thải y tế")), "html", null, true);
        echo "</option>
        </select>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step1_kind3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  57 => 22,  53 => 21,  49 => 20,  44 => 18,  34 => 11,  24 => 4,  19 => 1,);
    }
}
