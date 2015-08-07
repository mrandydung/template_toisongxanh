<?php

/* _booking_step2_dat_ho.html */
class __TwigTemplate_010d4fc1927bd406512ad01dd38b26c9a21ca7c0404a39804f35f3bb4180c070 extends Twig_Template
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
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 padding_top\">
\t\t\t\t<label for=\"dat_ho_form_enable\">
\t\t\t\t\t<input type=\"checkbox\" value=\"dat_ho\" name=\"dat_ho_form[enable]\"  id=\"dat_ho_form_enable\"/> ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi đặt hộ người khác")), "html", null, true);
        echo "
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-8 box_xs datho\">
\t\t\t\t<p>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Vui lòng cung cấp thông tin người đi")), "html", null, true);
        echo "</p>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\"><p>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Họ tên")), "html", null, true);
        echo "*:</p></div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"dat_ho_form[name]\" id=\"dat_ho_form_name\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row padding_top\">
\t\t\t\t\t<div class=\"col-md-3\"><p>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện thoại")), "html", null, true);
        echo "*:</p></div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"dat_ho_form[phone]\" id=\"dat_ho_form_phone\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row padding_top\">
\t\t\t\t\t<div class=\"col-md-3\"><p>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ")), "html", null, true);
        echo "*:</p></div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<input class=\"form-control\" name=\"dat_ho_form[address]\" id=\"dat_ho_form_address\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step2_dat_ho.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  45 => 16,  36 => 10,  31 => 8,  24 => 4,  19 => 1,);
    }
}
