<?php

/* Balance/_balance_step1_data.html */
class __TwigTemplate_38a3d478b5c04eec61ab5c2ce512d98278ec63e1559afa6b7f17b17d422ece39 extends Twig_Template
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
        echo "<!-- _balance_step1_data.html -->
<div class=\"step1_data_1 row box_1x\">
    <div class=\"col-md-offset-2 col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số km đã đi:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Km</span>
        </div>
    </div>
    <div class=\"col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại phương tiện:")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xe máy")), "html", null, true);
        echo "</option>
            <option>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ô tô")), "html", null, true);
        echo "</option>
            <option>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xe khách")), "html", null, true);
        echo "</option>
            <option>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Minibus")), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"col-md-2\">
        <p class=\"text-uppercase\"><strong>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại nhiên liệu:")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xăng")), "html", null, true);
        echo "</option>
            <option>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Dầu")), "html", null, true);
        echo "</option>
            <option>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện")), "html", null, true);
        echo "</option>
            <option>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khí hóa lỏng")), "html", null, true);
        echo "</option>
        </select>
    </div>
</div>
<div class=\"step1_data_2 row box_1x\">
    <div class=\"col-md-offset-2 col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khoảng cách:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Km</span>
        </div>
    </div>
    <div class=\"col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại phương tiện:")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Máy bay thương mại")), "html", null, true);
        echo "</option>
            <option>";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Máy bay loại nhỏ")), "html", null, true);
        echo "</option>
            <option>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trực thăng")), "html", null, true);
        echo "</option>
            <option>";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thủy phi cơ")), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"col-md-2\">
        <p class=\"text-uppercase\"><strong>";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số người đi:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Người</span>
        </div>
    </div>
</div>
<div class=\"step1_data_3 row box_1x\">
    <div class=\"col-md-offset-2 col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khoảng cách:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Km</span>
        </div>
    </div>
    <div class=\"col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại phương tiện:")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tàu chạy dầu")), "html", null, true);
        echo "</option>
            <option>";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tàu điện")), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"col-md-2\">
        <p class=\"text-uppercase\"><strong>";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số người đi:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Người</span>
        </div>
    </div>
</div>
<div class=\"step1_data_4 row box_1x\">
    <div class=\"col-md-offset-2 col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 79
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khoảng cách:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Km</span>
        </div>
    </div>
    <div class=\"col-md-3\">
        <p class=\"text-uppercase\"><strong>";
        // line 86
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại phương tiện:")), "html", null, true);
        echo "</strong></p>
        <select class=\"form-control\">
            <option>";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Phà")), "html", null, true);
        echo "</option>
            <option>";
        // line 89
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tàu du lịch")), "html", null, true);
        echo "</option>
            <option>";
        // line 90
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tàu cao tốc")), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"col-md-2\">
        <p class=\"text-uppercase\"><strong>";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số người đi:")), "html", null, true);
        echo "</strong></p>
        <div class=\"input-group\">
            <input type=\"number\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
            <span class=\"input-group-addon\">Người</span>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step1_data.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 94,  191 => 90,  187 => 89,  183 => 88,  178 => 86,  168 => 79,  156 => 70,  149 => 66,  145 => 65,  140 => 63,  130 => 56,  118 => 47,  111 => 43,  107 => 42,  103 => 41,  99 => 40,  94 => 38,  84 => 31,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  58 => 20,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  34 => 11,  24 => 4,  19 => 1,);
    }
}
