<?php

/* _header_menu.html */
class __TwigTemplate_3866ea840c6798de49ebf15165ea996a2b116268b3b04f9d0463b063191cd449 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\"><img src=\"img/logo.png\"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id='cssmenu'>
                    <ul>
                        <li class=\"active\"><a href='index.html'>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trang chủ")), "html", null, true);
        echo "</a></li>
                        <li><a href='#'>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hướng dẫn đặt xe")), "html", null, true);
        echo "</a></li>
                        <li><a href='#'>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tra cứu chuyến bay")), "html", null, true);
        echo "</a></li>
                        <li class='has-sub'><a href='#'>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách hàng")), "html", null, true);
        echo "</a>
                            <ul>
                                <li><a href='regular_customers.html'>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách hàng thường xuyên")), "html", null, true);
        echo "</a></li>
                                <li><a href='institutional_customers.html'>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách hàng tổ chức")), "html", null, true);
        echo "</a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đối tác")), "html", null, true);
        echo "</a>
                            <ul>
                                <li><a href='#'>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đối tác quảng bá")), "html", null, true);
        echo "</a></li>
                                <li><a href='#'>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đối tác vận chuyển")), "html", null, true);
        echo "</a></li>
                            </ul>
                        </li>
                        <li><a href='contact.html'>";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khuyến mãi")), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </nav>";
    }

    public function getTemplateName()
    {
        return "_header_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  67 => 23,  63 => 22,  58 => 20,  52 => 17,  48 => 16,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
