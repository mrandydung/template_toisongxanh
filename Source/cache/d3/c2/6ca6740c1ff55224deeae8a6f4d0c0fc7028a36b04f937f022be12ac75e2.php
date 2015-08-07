<?php

/* _register_modal.html */
class __TwigTemplate_d3c26ca6740c1ff55224deeae8a6f4d0c0fc7028a36b04f937f022be12ac75e2 extends Twig_Template
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
        echo "<!-- Modal đăng kí -->
<div class=\"modal fade\" id=\"dangki\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body dangnhap\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-5 padding_top\"><p>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số điện thoại")), "html", null, true);
        echo "</p></div>
\t\t\t\t\t<div class=\"col-md-7 padding_top\"><input class=\"form-control\"></div>
\t\t\t\t\t<div class=\"col-md-5 padding_top\"><p>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mật khẩu")), "html", null, true);
        echo "</p></div>
\t\t\t\t\t<div class=\"col-md-7 padding_top\"><input class=\"form-control\"></div>
\t\t\t\t\t<div class=\"col-md-5 padding_top\"><p>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xác nhận mật khẩu")), "html", null, true);
        echo "</p></div>
\t\t\t\t\t<div class=\"col-md-7 padding_top\"><input class=\"form-control\"></div>
\t\t\t\t\t<div class=\"col-md-offset-5 col-md-7 padding_top\"><img src=\"http://placehold.it/100x50\"></div>
\t\t\t\t\t<div class=\"col-md-5 padding_top\"><p>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập mã xác minh")), "html", null, true);
        echo "</p></div>
\t\t\t\t\t<div class=\"col-md-4 padding_top\"><input class=\"form-control\"></div>
\t\t\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t\t<label><input type=\"checkbox\"> ";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi đồng ý với")), "html", null, true);
        echo " <a>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("chính sách sử dụng dịch vụ")), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("và")), "html", null, true);
        echo " <a>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("chính sách bảo vệ quyền riêng tư")), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("của dichung.vn")), "html", null, true);
        echo "</label></div>
\t\t\t\t\t<div style=\"clear: both\"></div>
\t\t\t\t\t<div class=\"col-md-5 box_sm\"><hr/></div>
\t\t\t\t\t<div class=\"col-md-2 box_xs\"><p style=\"text-align: center\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hoặc")), "html", null, true);
        echo "</p></div>
\t\t\t\t\t<div class=\"col-md-5 box_sm\"><hr/></div>
\t\t\t\t\t<div class=\"col-md-12\" style=\"text-align: center\"><a><img src=\"img/loginfb.png\"></a></div>
\t\t\t\t\t<div style=\"clear: both\"></div>
\t\t\t\t</div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t\t\t\t\t<button class=\"btn btn_blue btn_sm\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<button class=\"btn btn_orange btn_sm\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
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
        return "_register_modal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  82 => 33,  70 => 24,  56 => 21,  50 => 18,  44 => 15,  39 => 13,  34 => 11,  27 => 7,  19 => 1,);
    }
}
