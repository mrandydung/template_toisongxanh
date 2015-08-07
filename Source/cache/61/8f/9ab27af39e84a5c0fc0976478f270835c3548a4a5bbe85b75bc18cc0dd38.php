<?php

/* Balance/_balance_step4.html */
class __TwigTemplate_618f9ab27af39e84a5c0fc0976478f270835c3548a4a5bbe85b75bc18cc0dd38 extends Twig_Template
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
        echo "<!-- /Balance/_balance_step4.html -->
<div class=\"body_balance box_1x\">
    <div class=\"row box_1x customer_info\">
        <div class=\"col-md-12 text-center\">
            <h4><a class=\"blue_text\" data-toggle=\"modal\" data-target=\"#dangnhap\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("hoặc điền thông tin phía dưới để tiếp tục")), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"col-md-offset-2 col-md-6\">
            ";
        // line 8
        $this->env->loadTemplate("Layout/_customer_info.html")->display($context);
        // line 9
        echo "            ";
        $this->env->loadTemplate("Layout/_customer_creataccount.html")->display($context);
        // line 10
        echo "        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-offset-4 col-md-4\">
            <a><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("thanh toán")), "html", null, true);
        echo "</button></a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step4.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  38 => 10,  35 => 9,  33 => 8,  25 => 5,  19 => 1,);
    }
}
