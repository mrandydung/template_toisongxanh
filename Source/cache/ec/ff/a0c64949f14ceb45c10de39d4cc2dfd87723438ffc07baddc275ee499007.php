<?php

/* /Layout/_header_login.html */
class __TwigTemplate_ecffa0c64949f14ceb45c10de39d4cc2dfd87723438ffc07baddc275ee499007 extends Twig_Template
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
        <ul class=\"nav navbar-nav navbar-right language\">
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Tiếng Việt <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Tiếng Việt</a></li>
                    <li><a href=\"#\">English</a></li>
                </ul>
            </li>
        </ul>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><img src=\"img/logo.png\"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"avatar_user\"><img src=\"img/avatar.jpg\"></span>quynhvh@dichung.vn <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"account-info.php\"><span class=\"user_icon\"></span> ";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin người dùng")), "html", null, true);
        echo "</a></li>
                                <li><a href=\"account-transaction.php\"><span class=\"transaction_icon\"></span> ";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quản lí dịch vụ")), "html", null, true);
        echo "</a></li>
                                <li><a href=\"\"><span class=\"logout_icon\"></span> ";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng xuất")), "html", null, true);
        echo "</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <form class=\"search-wrapper cf\">
                        <input type=\"text\" placeholder=\"Mã giao dịch\" required=\"\">
                        <button type=\"submit\">Tìm</button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "/Layout/_header_login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 45,  67 => 44,  63 => 43,  19 => 1,);
    }
}
