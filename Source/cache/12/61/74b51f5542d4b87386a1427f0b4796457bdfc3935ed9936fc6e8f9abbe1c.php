<?php

/* /Balance/balance-step2.html */
class __TwigTemplate_126174b51f5542d4b87386a1427f0b4796457bdfc3935ed9936fc6e8f9abbe1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("/Layout/layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Layout/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"/css/balance.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_2x\">
    <div class=\"container\">
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p class=\"h3 blue_text\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trung hòa khí thải")), "html", null, true);
        echo "</p>
            </div>
        </div>
        ";
        // line 12
        $this->env->loadTemplate("/Balance/_balance_step.html")->display($context);
        // line 13
        echo "        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p class=\"blue_text\"><strong>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lượng khí thải thoát ra môi trường là:")), "html", null, true);
        echo "</strong></p>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p><strong>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Để trung hòa khí thải xin hãy chọn một trong những dự án dưới đây:")), "html", null, true);
        echo "</strong></p>
            </div>
            ";
        // line 22
        $this->env->loadTemplate("/Balance/_balance_step2_service.html")->display($context);
        // line 23
        echo "            ";
        $this->env->loadTemplate("/Balance/_balance_step2_service.html")->display($context);
        // line 24
        echo "            ";
        $this->env->loadTemplate("/Balance/_balance_step2_service.html")->display($context);
        // line 25
        echo "        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-offset-4 col-md-4\">
                <a href=\"../../balance-step3.php\"><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điền thông tin")), "html", null, true);
        echo "</button></a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Balance/balance-step2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  79 => 25,  76 => 24,  73 => 23,  71 => 22,  66 => 20,  58 => 15,  54 => 13,  52 => 12,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
