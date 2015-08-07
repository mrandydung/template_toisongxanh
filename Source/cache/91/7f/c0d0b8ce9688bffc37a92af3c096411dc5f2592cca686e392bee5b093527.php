<?php

/* _index_body_slogen.html */
class __TwigTemplate_917fc0d0b8ce9688bffc37a92af3c096411dc5f2592cca686e392bee5b093527 extends Twig_Template
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
        echo "<!-- Page Content -->
    <div class=\"white_bg\">
        <div class=\"container box_sm\">
            <div class=\"col-md-4 col-sm-4 benefit\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                        <p class=\"box_sm\"><img src=\"img/vanminh.png\" width=\"100%\"></p>
                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-9\">
                        <h4>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Văn minh, tiết kiệm")), "html", null, true);
        echo "</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu velit lorem. Morbi laoreet tortor quis lectus vehicula molestie. </p>

                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 benefit\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                        <p class=\"box_sm\"><img src=\"img/tietkiem.png\" width=\"100%\"></p>
                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-9\">
                        <h4>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán linh hoạt")), "html", null, true);
        echo "</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu velit lorem. Morbi laoreet tortor quis lectus vehicula molestie. </p>

                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 benefit\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-3 col-xs-3\">
                        <p class=\"box_sm\"><img src=\"img/dichvu.png\" width=\"100%\"></p>
                    </div>
                    <div class=\"col-md-9 col-sm-9 col-xs-9\">
                        <h4>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Dịch vụ khách hàng")), "html", null, true);
        echo "</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu velit lorem. Morbi laoreet tortor quis lectus vehicula molestie. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "_index_body_slogen.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 34,  45 => 22,  30 => 10,  19 => 1,);
    }
}
