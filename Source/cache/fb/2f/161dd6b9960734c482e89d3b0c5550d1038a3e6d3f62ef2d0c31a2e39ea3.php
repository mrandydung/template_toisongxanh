<?php

/* Layout/_customer_creataccount.html */
class __TwigTemplate_fb2f161dd6b9960734c482e89d3b0c5550d1038a3e6d3f62ef2d0c31a2e39ea3 extends Twig_Template
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
        echo "<!-- /Layout/_customer_info.html -->
<div class=\"row padding_top\">
    <div class=\"col-md-offset-4 col-md-8\">
        <label>
            <input type=\"checkbox\" value=\"open_account\"> Tôi muốn mở tài khoản để theo dõi giao dịch
        </label>
    </div>
</div>
<div id=\"show_open_account\">
    <div class=\"row padding_top\">
        <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mật khẩu:")), "html", null, true);
        echo "</strong></p></div>
        <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
    </div>
    <div class=\"row padding_top\">
        <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập lại mật khẩu:")), "html", null, true);
        echo "</strong></p></div>
        <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Layout/_customer_creataccount.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  31 => 11,  19 => 1,);
    }
}
