<?php

/* Balance/_balance_step2.html */
class __TwigTemplate_9e404d3653e462169c36456d017bb40a259ff31ac171e1ee85645dad239c0179 extends Twig_Template
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
        echo "<!-- /Balance/_balance_step2.html -->
<div class=\"body_balance box_1x\">
    <div class=\"box_1x\">
        <div class=\"col-md-12\">
            <h4><strong>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Để trung hòa khí thải xin hãy chọn một trong những dự án dưới đây:")), "html", null, true);
        echo "</strong></h4>
        </div>
        ";
        // line 7
        $this->env->loadTemplate("Balance/_balance_step2_service.html")->display($context);
        // line 8
        echo "        ";
        $this->env->loadTemplate("Balance/_balance_step2_service.html")->display($context);
        // line 9
        echo "        ";
        $this->env->loadTemplate("Balance/_balance_step2_service.html")->display($context);
        // line 10
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"col-md-12\">
                <h4><strong>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chọn số tiền đóng góp:")), "html", null, true);
        echo "</strong></h4>
            </div>
            ";
        // line 16
        $this->env->loadTemplate("Layout/_layout_select_money.html")->display($context);
        // line 17
        echo "        </div>
    </div>
    <div class=\"row box_2x\">
        <div class=\"col-md-offset-4 col-md-4\">
            <a><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điền thông tin")), "html", null, true);
        echo "</button></a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  51 => 17,  49 => 16,  44 => 14,  38 => 10,  35 => 9,  32 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
