<?php

/* _booking_step2_flight.html */
class __TwigTemplate_9311c6aa936e0bdc87479983a73b86119f06da884bd62411deb3e8f36649dfd0 extends Twig_Template
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
        echo "<div class=\"row\">
                    <div class=\" col-md-12\">
                        <div class=\"thongtinchuyenbay\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-12\">
                                        <h4>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin chuyến bay")), "html", null, true);
        echo " (?)</h4>
                                        <h6><a href=\"\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tra cứu chuyến bay")), "html", null, true);
        echo "</a></h6>
                                        <hr/>
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"col-md-3\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 padding_top\">
                                                ";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chuyến bay")), "html", null, true);
        echo ":
                                            </div>
                                            <div class=\"col-md-12\">
                                                <input class=\"form-control\" name=\"flight_form[flight]\"  id=\"flight_form_flight\"/>
                                            </div>
                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
                                        <div class=\"row padding_top\">
                                            <div class=\"col-md-12\">
                                                ";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Giờ hạ cánh")), "html", null, true);
        echo ":
                                            </div>
                                            <div class=\"col-md-12\">
                                                <input class=\"form-control\" name=\"flight_form[flight_time]\"  id=\"flight_form_flight_time\"/>
                                            </div>
                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
                                        <div class=\"row padding_top\">
                                            <div class=\"col-md-12\">
                                                ";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mã số chuyến bay")), "html", null, true);
        echo ":
                                            </div>
                                            <div class=\"col-md-12\">
                                                <input class=\"form-control\" name=\"flight_form[flight_code]\"  id=\"flight_form_flight_code\"/>
                                            </div>
                                        </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
                                        <div class=\"row padding_top\">
                                            <div class=\"col-md-12\">
                                                ";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ngày")), "html", null, true);
        echo ":
                                            </div>
                                            <div class=\"col-md-12\">
                                                <input class=\"form-control\" name=\"flight_form[flight_day]\"  id=\"flight_form_flight_day\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step2_flight.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 46,  68 => 36,  55 => 26,  42 => 16,  31 => 8,  27 => 7,  19 => 1,);
    }
}
