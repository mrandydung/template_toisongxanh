<?php

/* _booking_step3_customer_info.html */
class __TwigTemplate_1a28a944cc9c0a75e04a3e50a7e360a1fce40ed397bdfe8175a6f2e2bad42393 extends Twig_Template
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
        echo "<div class=\"col-md-12\">
                <div class=\"\">
                    <h4>";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin khách hàng")), "html", null, true);
        echo "</h4>
                    <table width=\"100%\">
                        <tr>
                            <td><p>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Họ tên")), "html", null, true);
        echo ":</p></td>
                            <td><p>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thời gian đặt")), "html", null, true);
        echo ":</p></td>
                        </tr>
                        <tr>
                            <td><p>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số điện thoại")), "html", null, true);
        echo ":</p></td>
                            <td><p>Email:</p></td>
                        </tr>
                        <tr>
                            <td><p>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ")), "html", null, true);
        echo ":</p></td>
                            <td><p>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ghi chú")), "html", null, true);
        echo ":</p></td>
                        </tr>
                    </table>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step3_customer_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,  39 => 10,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
