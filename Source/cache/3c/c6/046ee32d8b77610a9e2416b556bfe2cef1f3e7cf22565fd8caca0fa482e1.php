<?php

/* Layout/_customer_info.html */
class __TwigTemplate_3cc6046ee32d8b77610a9e2416b556bfe2cef1f3e7cf22565fd8caca0fa482e1 extends Twig_Template
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
        echo "
<!-- /Layout/_customer_info.html -->
<div class=\"row padding_top\">
    <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Họ tên:")), "html", null, true);
        echo "</strong></p></div>
    <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
</div>
<div class=\"row padding_top\">
    <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Email:")), "html", null, true);
        echo "</strong></p></div>
    <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
</div>
<div class=\"row padding_top\">
    <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện thoại:")), "html", null, true);
        echo "</strong></p></div>
    <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
</div>
<div class=\"row padding_top\">
    <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quốc gia:")), "html", null, true);
        echo "</strong></p></div>
    <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
</div>
<div class=\"row padding_top\">
    <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thành phố:")), "html", null, true);
        echo "</strong></p></div>
    <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
</div>
<div class=\"row padding_top\">
    <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ:")), "html", null, true);
        echo "</strong></p></div>
    <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
</div>
<div class=\"row padding_top\">
    <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ghi chú:")), "html", null, true);
        echo "</strong></p></div>
    <div class=\"col-md-8 col-sm-8 col-xs-9\"><textarea type=\"text\" class=\"form-control\" rows=\"3\"></textarea></div>
</div>";
    }

    public function getTemplateName()
    {
        return "Layout/_customer_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 28,  59 => 24,  52 => 20,  45 => 16,  38 => 12,  31 => 8,  24 => 4,  19 => 1,);
    }
}
