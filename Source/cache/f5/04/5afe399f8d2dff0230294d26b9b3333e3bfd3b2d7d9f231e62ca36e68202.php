<?php

/* _booking_step1_booking_form.html */
class __TwigTemplate_f5045afe399f8d2dff0230294d26b9b3333e3bfd3b2d7d9f231e62ca36e68202 extends Twig_Template
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
        echo "\t<form id=\"booking_form\" method=\"post\">
\t\t<div class=\"datxe2\">
            <div class=\"tabbable\">
                <ul class=\"nav-tabs datxe_tab\">
                    <li class=\"col-md-4 col-sm-4 col-xs-4 no-padding-left-right active\"><a href=\"#pane1\" data-toggle=\"tab\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe taxi")), "html", null, true);
        echo "</a></li>
                    <li class=\"col-md-4 col-sm-4 col-xs-4 no-padding-left-right\"><a href=\"#pane2\" data-toggle=\"tab\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tuyến phổ biến")), "html", null, true);
        echo "</a></li>
                    <li class=\"col-md-4 col-sm-4 col-xs-4 no-padding-left-right\"><a href=\"#pane3\" data-toggle=\"tab\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thuê xe trọn gói")), "html", null, true);
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div id=\"pane1\" class=\"tab-pane active\">
                        ";
        // line 11
        $this->env->loadTemplate("_booking_step1_booking_form_option.html")->display(array_merge($context, array("fname" => "taxi")));
        // line 12
        echo "                    </div>
                    <div id=\"pane2\" class=\"tab-pane\">
                        ";
        // line 14
        $this->env->loadTemplate("_booking_step1_booking_form_option.html")->display(array_merge($context, array("fname" => "popular")));
        // line 15
        echo "                    </div>
                    <div id=\"pane3\" class=\"tab-pane\">
                        ";
        // line 17
        $this->env->loadTemplate("_booking_step1_booking_form_option.html")->display(array_merge($context, array("fname" => "rental")));
        // line 18
        echo "                    </div>
                </div>
            </div>
\t\t\t<div class=\"clear\"></div>
        </div>
\t</form>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_booking_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  52 => 17,  48 => 15,  46 => 14,  42 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
