<?php

/* /Index/_index_banner.html */
class __TwigTemplate_bb84bfc53a856a27060d885e548ccfee0e332417ac962726a7e94c8d5461e4e5 extends Twig_Template
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
        echo "<!-- /Index/_index_banner.html -->
<header id=\"myCarousel\" class=\"banner_slide carousel slide\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
        <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class=\"carousel-inner\">
        <div class=\"item active\">
            <!-- Set the first background image using inline CSS below. -->
            <div class=\"fill\" style=\"background-image:url('img/banner.jpg');\"></div>
        </div>
        <div class=\"item\">
            <!-- Set the second background image using inline CSS below. -->
            <div class=\"fill\" style=\"background-image:url('img/banner.jpg');\"></div>
        </div>
        <div class=\"item\">
            <!-- Set the third background image using inline CSS below. -->
            <div class=\"fill\" style=\"background-image:url('img/banner.jpg');\"></div>
        </div>
        <div class=\"slogan\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 wow fadeIn\"  data-wow-duration=\"1.5s\" data-wow-delay=\"0.9s\" data-appear-top-offset=\"-300\">
                        <h1>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lorem ipsum dolor sit amet, consectetur adipiscing elit")), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"col-md-offset-3 col-md-3 col-sm-offset-2 col-sm-4 col-xs-6 box_1x wow bounceInDown\"  data-wow-duration=\"1.5s\" data-wow-delay=\"0.1s\">
                        <a href=\"balance.php\"><button class=\"btn_width btn_blue btn-lg round_btn\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trung hòa khí thải")), "html", null, true);
        echo "</button></a>
                    </div>
                    <div class=\"col-md-3 col-sm-4 col-xs-6 box_1x wow bounceInDown\"  data-wow-duration=\"1.5s\" data-wow-delay=\"0.3s\">
                        <a href=\"list-project.php\"><button class=\"btn_width btn_white btn-lg round_btn\">";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hoạt động")), "html", null, true);
        echo "</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
        <span class=\"icon-prev\"></span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
        <span class=\"icon-next\"></span>
    </a>

</header>";
    }

    public function getTemplateName()
    {
        return "/Index/_index_banner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 34,  54 => 31,  48 => 28,  19 => 1,);
    }
}
