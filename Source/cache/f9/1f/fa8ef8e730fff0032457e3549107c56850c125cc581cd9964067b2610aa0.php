<?php

/* /Index/_index_customer.html */
class __TwigTemplate_f91ffa8ef8e730fff0032457e3549107c56850c125cc581cd9964067b2610aa0 extends Twig_Template
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
        echo "<!-- /Index/_index_customer.html -->
<div class=\"white_bg box_5x customer text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 box_2x\">
                <p class=\"h1\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đối tượng phục vụ")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-4 col-sm-4 box_2x\">
                <a href=\"customer.php\"><div class=\"red_bg box_2x\">
                    <p class=\"h4\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cá nhân")), "html", null, true);
        echo "</p>
                </div>
                    <div>
                        <img src=\"img/img_1.jpg\" width=\"100%\">
                    </div></a>
            </div>
            <div class=\"col-md-4 col-sm-4 box_2x\">
                <a href=\"customer.php\"><div class=\"red_bg box_2x\">
                    <p class=\"h4\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Công ty")), "html", null, true);
        echo "</p>
                </div>
                <div>
                    <img src=\"img/img_3.jpg\" width=\"100%\">
                </div></a>
            </div>
            <div class=\"col-md-4 col-sm-4 box_2x\">
                <a href=\"customer.php\"><div class=\"red_bg box_2x\">
                    <p class=\"h4\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tổ chức")), "html", null, true);
        echo "</p>
                </div>
                <div>
                    <img src=\"img/img_2.jpg\" width=\"100%\">
                </div></a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Index/_index_customer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  44 => 18,  33 => 10,  26 => 6,  19 => 1,);
    }
}
