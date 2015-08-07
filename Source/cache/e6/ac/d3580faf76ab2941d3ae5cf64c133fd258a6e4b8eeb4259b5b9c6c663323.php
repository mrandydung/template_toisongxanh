<?php

/* /Index/_index_activities.html */
class __TwigTemplate_e6acd3580faf76ab2941d3ae5cf64c133fd258a6e4b8eeb4259b5b9c6c663323 extends Twig_Template
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
        echo "<!-- /Index/_index_activities.html -->
<div class=\"gray_bg box_5x activities text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 box_2x\">
                <p class=\"h1\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hoạt động của chúng tôi")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-4 col-sm-4 box_2x wow fadeInLeft\" data-wow-duration=\"2s\" data-wow-delay=\"0.1s\" data-wow-offset=\"200\">
                <div class=\"knowlege\"></div>
                <p class=\"h4 box_2x\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nâng cao nhận thức")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-4 col-sm-4 box_2x wow fadeInLeft\" data-wow-duration=\"1.5s\" data-wow-delay=\"0.4s\" data-wow-offset=\"200\">
                <div class=\"deploy\"></div>
                <p class=\"h4 box_2x\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Triển khai các dự án giảm thải")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-4 col-sm-4 box_2x wow fadeInLeft\" data-wow-duration=\"1s\" data-wow-delay=\"0.7s\" data-wow-offset=\"200\">
                <div class=\"research\"></div>
                <p class=\"h4 box_2x\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nghiên cứu và bảo tồn tài nguyên rừng")), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Index/_index_activities.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  40 => 14,  33 => 10,  26 => 6,  19 => 1,);
    }
}
