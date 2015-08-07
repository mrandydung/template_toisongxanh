<?php

/* _account_plan.html */
class __TwigTemplate_2d9f17a1091af7ef6c32d778b83828258ed5f46b70ddb99a18fbf06131d49029 extends Twig_Template
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
        echo "<div class=\"row statistical\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>Khối lượng CO2 xả thải</p>
\t\t\t\t\t\t<h4>12kg</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>Khối lượng CO2 đã trung hòa</p>
\t\t\t\t\t\t<h4>6kg</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>Khối lượng CO2 còn lại</p>
\t\t\t\t\t\t<h4>6kg</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t\t\t<div class=\"account_info\">
\t\t\t\t\t\t\t<p class=\"h4\">123456 <a><img src=\"img/arrow_small.png\" style=\"vertical-align:1px\"/></a></p>
\t\t\t\t\t\t\t<p class=\"h6\">4 ảnh <span class=\"space\">&#8226;</span> 15/2/2015</p>
\t\t\t\t\t\t\t";
        // line 20
        $this->env->loadTemplate("_account_plan_slide.html")->display($context);
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"id_info\">
\t\t\t\t\t\t\t\t<p><strong>Loại cây:</strong> </p>
\t\t\t\t\t\t\t\t<p><strong>Số lượng:</strong> </p>
\t\t\t\t\t\t\t\t<p><strong>Địa chỉ:</strong> </p>
\t\t\t\t\t\t\t\t<p><strong>Tọa độ:</strong> </p>
\t\t\t\t\t\t\t\t<p><strong>Mã giao dịch liên quan:</strong>  235648, 203458</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "_account_plan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 20,  19 => 1,);
    }
}
