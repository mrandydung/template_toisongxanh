<?php

/* Project/_project_info.html */
class __TwigTemplate_e7ecd84aaee517cc79747b3f86a3e8534fb34cdb3ab4944501977b87ab61fbf1 extends Twig_Template
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
        echo "<!-- /Project/_project_info.html -->
<div class=\"info\">
    <p class=\"h4 box_1x\"><strong><span class=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin dự án")), "html", null, true);
        echo "</span></strong></p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p><strong>Tên dự án:</strong>Trồng cây</p>
            <p><strong>Phân loại dự án:</strong> CO2</p>
            <p><strong>Địa điểm dự án:</strong> Thái Nguyên</p>
        </div>
        <div class=\"col-md-6\">
            <p><strong>Ngày bắt đầu dự án:</strong> 02/07/2015</p>
            <p><strong>Tình trạng dự án:</strong> Đang triển khai</p>
            <p><strong>Thành tựu đạt được:</strong></p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Project/_project_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
