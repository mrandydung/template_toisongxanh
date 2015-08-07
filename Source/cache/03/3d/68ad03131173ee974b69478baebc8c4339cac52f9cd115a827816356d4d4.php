<?php

/* /Balance/balance-step1.html */
class __TwigTemplate_033d68ad03131173ee974b69478baebc8c4339cac52f9cd115a827816356d4d4 extends Twig_Template
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
        echo "<link href=\"/css/main.css\" rel=\"stylesheet\">
<link href=\"/css/balance.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_2x\">
    <div class=\"container\">
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p class=\"h3 blue_text\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trung hòa khí thải")), "html", null, true);
        echo "</p>
            </div>
        </div>
        ";
        // line 13
        $this->env->loadTemplate("/Balance/_balance_step.html")->display($context);
        // line 14
        echo "        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p><strong>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại phương tiện:")), "html", null, true);
        echo "</strong></p>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
                <label class=\"balance_choose\" name=\"balance_form[kind]\">
                    <span class=\"oto\"></span>
                    <p class=\"h5 box_1x\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ô tô")), "html", null, true);
        echo "</p>
                    <input type=\"radio\" name=\"booking_form[kind]\">
                </label>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
                <label class=\"balance_choose\" name=\"balance_form[kind]\">
                    <span class=\"dilai\"></span>
                    <p class=\"h5 box_1x\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xe máy")), "html", null, true);
        echo "</p>
                    <input type=\"radio\" name=\"booking_form[kind]\">
                </label>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-4 box_1x text-center\">
                <label class=\"balance_choose\" name=\"balance_form[kind]\">
                    <span class=\"maybay\"></span>
                    <p class=\"h5 box_1x\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Máy bay")), "html", null, true);
        echo "</p>
                    <input type=\"radio\" name=\"booking_form[kind]\">
                </label>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p><strong>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số km đã đi:")), "html", null, true);
        echo "</strong></p>
                <input type=\"text\" class=\"text-right\"> km
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p><strong>";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại nhiên liệu:")), "html", null, true);
        echo "</strong></p>
            </div>
            <div class=\"col-md-2\">
                <select class=\"form-control\">
                    <option>";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xăng")), "html", null, true);
        echo "</option>
                    <option>";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Dầu")), "html", null, true);
        echo "</option>
                </select>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-offset-4 col-md-4\">
                <a href=\"../../balance-step2.php\"><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tính toán xả thải")), "html", null, true);
        echo "</button></a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Balance/balance-step1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 59,  117 => 53,  113 => 52,  106 => 48,  97 => 42,  87 => 35,  77 => 28,  67 => 21,  59 => 16,  55 => 14,  53 => 13,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
