<?php

/* _booking_login_remind.html */
class __TwigTemplate_104d2771466ebfc0f949b34d37bdee8e96257d5d8d81f19c794d30b9d0407418 extends Twig_Template
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
        echo "<div class=\"gray_bg box_xs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h4>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Bạn chưa đăng nhập !")), "html", null, true);
        echo "</h4>
                <p>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("- Đăng nhập để được cộng điểm khách hàng thường xuyên và hưởng lợi ích của khách hàng thường xuyên của dichung.vn")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-4\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 box_md\">
                        <button class=\"btn btn_blue btn_sm\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 box_md\">
                        <button class=\"btn btn_orange btn_sm\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_login_remind.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  37 => 11,  29 => 6,  25 => 5,  19 => 1,);
    }
}
