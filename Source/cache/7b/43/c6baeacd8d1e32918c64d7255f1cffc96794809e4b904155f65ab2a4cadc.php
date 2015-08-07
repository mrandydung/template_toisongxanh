<?php

/* /Balance/balance-step4.html */
class __TwigTemplate_7b43c6baeacd8d1e32918c64d7255f1cffc96794809e4b904155f65ab2a4cadc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("Layout/layout.html");
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
        return "Layout/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"css/balance.css\" rel=\"stylesheet\">
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
        $this->env->loadTemplate("Balance/_balance_step.html")->display($context);
        // line 13
        echo "        <div class=\"row\">
            <div class=\"col-md-3 box_1x\">
                <p><strong>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số tiền thanh toán")), "html", null, true);
        echo "</strong></p>
                <select class=\"form-control\">
                    <option>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("500.000 VNĐ")), "html", null, true);
        echo "</option>
                    <option>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("200.000 VNĐ")), "html", null, true);
        echo "</option>
                    <option>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khác")), "html", null, true);
        echo "</option>
                </select>
                <p class=\"padding_top\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập số tiền:")), "html", null, true);
        echo "</p>
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
                    <span class=\"input-group-addon\" id=\"basic-addon2\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("VNĐ")), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 box_1x\">
                <p><strong>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Phương thức thanh toán")), "html", null, true);
        echo "</strong></p>
                <select class=\"form-control\">
                    <option>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán online")), "html", null, true);
        echo "</option>
                    <option>";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán chuyển khoản")), "html", null, true);
        echo "</option>
                </select>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-offset-4 col-md-4\">
                <button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Balance/balance-step4.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  100 => 33,  96 => 32,  91 => 30,  82 => 24,  76 => 21,  71 => 19,  67 => 18,  63 => 17,  58 => 15,  54 => 13,  52 => 12,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
