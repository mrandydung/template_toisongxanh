<?php

/* /Layout/_header.html */
class __TwigTemplate_33353056035babaace6928919ab824dcff365e759ea032ed9d6d3132fff615dc extends Twig_Template
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
        echo "<!-- _header.html -->
<div class=\"decor\">
    <div class=\"head_decor green_bg\"></div>
    <div class=\"head_decor dark_puple_bg\"></div>
    <div class=\"head_decor blue_bg\"></div>
    <div class=\"head_decor blue_gray_bg\"></div>
    <div class=\"head_decor red_bg\"></div>
    <div class=\"head_decor green_bg\"></div>
    <div class=\"head_decor dark_puple_bg\"></div>
    <div class=\"head_decor blue_bg\"></div>
    <div class=\"head_decor blue_gray_bg\"></div>
    <div class=\"head_decor red_bg\"></div>
</div>
<nav class=\"navbar navbar-inverse greenlive_navbar\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"nav navbar-nav navbar-right language\">
            <div class=\"btn-group\" data-toggle=\"buttons\">
                <label class=\"btn btn_blue active\">
                    <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\" checked=\"\"> VN
                </label>
                <label class=\"btn btn_blue\">
                    <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\"> EN
                </label>
            </div>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.php\"><img src=\"img/logo.png\"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a data-toggle=\"modal\" data-target=\"#dangki\">";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
        echo "</a>
                </li>
                <li>
                    <a data-toggle=\"modal\" data-target=\"#dangnhap\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</a>
                </li>
                <!-- <li>
                    <form class=\"search-wrapper cf\">
                        <input type=\"text\" placeholder=\"Mã giao dịch\" required=\"\">
                        <button type=\"submit\">";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tìm")), "html", null, true);
        echo "</button>
                    </form>
                </li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "/Layout/_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 48,  66 => 43,  60 => 40,  19 => 1,);
    }
}
