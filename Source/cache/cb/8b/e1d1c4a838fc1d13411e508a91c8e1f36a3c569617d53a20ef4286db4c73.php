<?php

/* _booking_step1_booking_form_option.html */
class __TwigTemplate_cb8be1d1c4a838fc1d13411e508a91c8e1f36a3c569617d53a20ef4286db4c73 extends Twig_Template
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
        echo "<div class=\"datxe2\">
\t\t\t\t\t\t<div class=\"col-md-12 col-sm-12 padding_top\">
                            <select class=\"form-control\" name=\"booking_form_";
        // line 3
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[area]\" id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_area\">
\t\t\t\t\t\t\t\t<option>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tỉnh/Thành Phố")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option>Bà Rịa Vũng Tàu</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
                        <div class=\"col-md-12 col-sm-12 padding_top\">
                            <select class=\"form-control\">
\t\t\t\t\t\t\t\t<option>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tuyến")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t<option>Trong thành phố</option>
\t\t\t\t\t\t\t\t<option>Liên tỉnh</option>
\t\t\t\t\t\t\t\t<option>Hà Nội - Nội Bài</option>
\t\t\t\t\t\t\t\t<option>Nội Bài - Hà Nội</option>
\t\t\t\t\t\t\t\t<option>Nội Bài - Tỉnh</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
                        <div class=\"col-md-12 col-sm-12 padding_top\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ đón khách")), "html", null, true);
        echo "\" name=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[pick_address]\"  id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_pick_address\"/>
                        </div>
                        <div class=\"col-md-12 col-sm-12 padding_top\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ trả khách")), "html", null, true);
        echo "\" name=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[to_address]\"  id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_to_address\"/>
                        </div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12 padding_top\">
                            <select class=\"form-control\" name=\"booking_form_";
        // line 28
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[type]\" id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_type\">
                                <option>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại xe")), "html", null, true);
        echo "</option>
                                <option>Xe 4 chỗ</option>
                                <option>Xe 7 chỗ</option>
                                <option>Xe 16 chỗ</option>
                            </select>
                        </div>\t\t\t\t\t\t
                        <div class=\"col-md-6 col-sm-6 padding_top\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ngày đi")), "html", null, true);
        echo "\" name=\"booking_form[day]\"  id=\"booking_form_day\"/>
                        </div>
                        <div class=\"col-md-12 col-sm-12 padding_top\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-xs-6\">
                                    <label for=\"booking_form_dimension1\">
                                        <input type=\"radio\" name=\"booking_form[dimension]\" value=\"1\" id=\"booking_form_dimension1\"/>
                                        ";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Một chiều")), "html", null, true);
        echo "
                                    </label>
                                </div>
                                <div class=\"col-md-6 col-xs-6\">
                                   <label for=\"booking_form_dimension2\">
                                        <input type=\"radio\" name=\"booking_form[dimension]\" value=\"2\" id=\"booking_form_dimension2\"/>
                                        ";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hai chiều")), "html", null, true);
        echo "
                                    </label>
                                </div> 
                            </div>
                        </div>
\t\t\t\t\t\t<div style=\"clear:both\"></div>
\t\t\t\t\t\t<div class=\"col-md-12\"><hr/></div>
\t\t\t\t\t\t<!--<div class=\"col-md-offset-2 col-md-3 suggest\">
\t\t\t\t\t\t\t<h5><a class=\"best\">Tốt nhất</a></h5>
\t\t\t\t\t\t\t<a class=\"btn btn_blue_outline btn-sm\">180.000Đ</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 suggest\">
\t\t\t\t\t\t\t<h5><a class=\"chip\">Rẻ nhất</a></h5>
\t\t\t\t\t\t\t<a class=\"btn btn_orange_outline btn-sm\">120.000Đ</a>
\t\t\t\t\t\t</div>-->
                        <div class=\"col-md-offset-8 col-md-4 col-sm-4 padding_top\">
                            <button class=\"btn btn_sm btn_blue\">";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt ngay")), "html", null, true);
        echo "</button>
                        </div>
\t\t\t\t\t\t<div style=\"clear: both\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_booking_form_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  116 => 49,  107 => 43,  97 => 36,  87 => 29,  79 => 28,  67 => 25,  55 => 22,  43 => 13,  31 => 4,  23 => 3,  19 => 1,);
    }
}
