<?php

/* _booking_step2_warning.html */
class __TwigTemplate_ec0550c3857bcfa1d513e3796424874f9a79d63c63691b0d726989c0f013c75e extends Twig_Template
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
        echo "\t\t\t\t<div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"thongtinchuyenbay box_xs col-md-12\">
                    <p>- ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trong trường hợp bạn đi chung taxi, đối với chiều đi lên sân bay, taxi sẽ đến đón đúng địa điểm bạn yêu cầu trong khoảng thời gian +/-15 phút so với giờ bạn yêu cầu đón.")), "html", null, true);
        echo "</p>
                    <p>- ";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Airport Taxi sẽ thông báo chính xác thời gian đón trước 45 phút so với giờ khởi hành bạn chọn, và bạn cần chuẩn bị để khởi hành sớm hơn 15 phút hoặc muộn hơn 15 phút.")), "html", null, true);
        echo "</p>
                    <p>- ";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đối với chiều về từ sân bay, thời gian chờ tối đa là 15 phút so với thời gian bạn yêu cầu đón tại sân bay.")), "html", null, true);
        echo "</p>
                    <p>- ";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa điểm chờ là khu vực đón khách của Airrport Taxi, sảnh B, tầng 1, sân bay Nội bài.")), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step2_warning.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
