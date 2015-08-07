<?php

/* _index_body_booking_form.html */
class __TwigTemplate_8964ce66211ff9db55f5870765147109a20957986b0b307b8b166fbb63c5ceb6 extends Twig_Template
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
\t\t<div class=\"";
        // line 2
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        echo twig_escape_filter($this->env, $_class_, "html", null, true);
        echo "\">
            <div class=\"tabbable\">
                <ul class=\"nav-tabs nav\">
                    <li class=\"active\"><a href=\"#pane1\" data-toggle=\"tab\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe taxi")), "html", null, true);
        echo "</a></li>
                    <li class=\"\"><a href=\"#pane2\" data-toggle=\"tab\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tuyến phổ biến")), "html", null, true);
        echo "</a></li>
                    <li class=\"\"><a href=\"#pane3\" data-toggle=\"tab\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thuê xe trọn gói")), "html", null, true);
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div id=\"pane1\" class=\"tab-pane active\">
                        ";
        // line 11
        $this->env->loadTemplate("_index_body_booking_form_option.html")->display(array_merge($context, array("fname" => "taxi")));
        // line 12
        echo "                    </div>
                    <div id=\"pane2\" class=\"tab-pane\">
                        ";
        // line 14
        $this->env->loadTemplate("_index_body_booking_form_option.html")->display(array_merge($context, array("fname" => "popular")));
        // line 15
        echo "                    </div>
                    <div id=\"pane3\" class=\"tab-pane\">
                        ";
        // line 17
        $this->env->loadTemplate("_index_body_booking_form_option.html")->display(array_merge($context, array("fname" => "rental")));
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
        return "_index_body_booking_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  56 => 17,  52 => 15,  50 => 14,  46 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  22 => 2,  19 => 1,);
    }
}
