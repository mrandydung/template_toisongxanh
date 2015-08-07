<?php

/* Project/_part_info.html */
class __TwigTemplate_b29cceffe13466fc7f73ac6ee941f651b760e80614973a4654e44ca48481b57d extends Twig_Template
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
        echo "<!-- /Project/_part_info.html -->
<div class=\"info\">
    <p class=\"h4 box_1x\"><strong><span class=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin đợt")), "html", null, true);
        echo "</span></strong></p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p><strong>Ngày bắt đầu:</strong> 02/07/2015</p>
            <p><strong>Địa điểm:</strong> Thái Nguyên</p>
        </div>
        <div class=\"col-md-6\">
            <p><strong>Số người tham gia:</strong></p>
            <p><strong>Thành tựu:</strong></p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Project/_part_info.html";
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
