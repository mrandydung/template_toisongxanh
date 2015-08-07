<?php

/* _login_modal.html */
class __TwigTemplate_70053778c25b74a5c157af33f1451486eb205520ded60df377df958f225b92d6 extends Twig_Template
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
        echo "<!-- Modal đăng nhập -->
<div class=\"modal fade\" id=\"dangnhap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body dangnhap\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t\t<p>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số điện thoại")), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 padding_top\">
\t\t\t\t\t\t<input class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mật khẩu")), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 padding_top\">
\t\t\t\t\t\t<input class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 box_xs\">
\t\t\t\t\t\t<hr/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<p style=\"text-align: center\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hoặc")), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5 box_xs\">
\t\t\t\t\t\t<hr/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\" style=\"text-align: center\">
\t\t\t\t\t\t<a><img src=\"img/loginfb.png\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"clear: both\"></div>
\t\t\t\t</div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t\t\t\t\t<button class=\"btn btn_orange btn_sm\">";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<button class=\"btn btn_blue btn_sm\">";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_login_modal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 44,  73 => 41,  56 => 27,  44 => 18,  35 => 12,  27 => 7,  19 => 1,);
    }
}
