<?php

/* _index_body_booking_form_option.html */
class __TwigTemplate_b194a840ac7b32362c2666f5aca02687c6bb6fcd74ac22bfce162b870cc13bea extends Twig_Template
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
        echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6 padding_top\">
\t\t\t\t\t\t\t\t\t\t<select class=\"datxe_form-control\" name=\"booking_form_";
        // line 5
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[area]\" id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_area\">
\t\t\t\t\t\t\t\t\t\t\t<option>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tỉnh/Thành Phố")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Bà Rịa Vũng Tàu</option>
\t\t\t\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6 padding_top\" name=\"booking_form_";
        // line 13
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[line]\" id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_line\">
\t\t\t\t\t\t\t\t\t\t<select class=\"datxe_form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tuyến")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Trong thành phố</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Liên tỉnh</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Hà Nội - Nội Bài</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Nội Bài - Hà Nội</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Nội Bài - Tỉnh</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"datxe_form-control\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ đón khách")), "html", null, true);
        echo "\" name=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[pick_address]\"  id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_pick_address\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"datxe_form-control\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ trả khách")), "html", null, true);
        echo "\" name=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[to_address]\"  id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_to_address\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-6 padding_top\">
\t\t\t\t\t\t\t\t\t\t<select class=\"datxe_form-control\" name=\"booking_form_";
        // line 38
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[type]\" id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_type\">
\t\t\t\t\t\t\t\t\t\t\t<option>";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại xe")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Xe 4 chỗ</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Xe 7 chỗ</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Xe 16 chỗ</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-xs-6 padding_top\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"datxe_form-control\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ngày")), "html", null, true);
        echo "\" name=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "[to_address]\"  id=\"booking_form_";
        if (isset($context["fname"])) { $_fname_ = $context["fname"]; } else { $_fname_ = null; }
        echo twig_escape_filter($this->env, $_fname_, "html", null, true);
        echo "_to_address\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"visible-xs\" style=\"clear:both\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 padding_top\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn_blue datxe_form-control\" id=\"show_cost\">Xem giá</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t<select class=\"ways\">
\t\t\t\t\t\t\t\t\t<option>Một chiều</option>
\t\t\t\t\t\t\t\t\t<option>Hai chiều</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-9 padding_top\" id=\"cost\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-offset-2 col-md-2\">
\t\t\t\t\t\t\t\t\t<div class=\"hidden-xs padding_top\" style=\"clear:both\"></div>
\t\t\t\t\t\t\t\t\t<h4>Chọn dịch vụ<h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6 suggest\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"best\">Đi riêng - rẻ nhất</h5>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn_blue btn-sm\">180.000Đ</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6 suggest\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"chip\">Đi ghép - rẻ nhất</h5>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn_orange btn-sm\">120.000Đ</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 show_all\">
\t\t\t\t\t\t\t\t\t<a>Xem tất cả</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_index_body_booking_form_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  104 => 39,  96 => 38,  80 => 31,  68 => 28,  52 => 15,  43 => 13,  33 => 6,  25 => 5,  19 => 1,);
    }
}
