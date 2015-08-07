<?php

/* /Balance/balance-step4.html */
class __TwigTemplate_9bd28a5e780e9b0cdd3e963cceffde37b5b83d7b261f7044d63b945bda3958c1 extends Twig_Template
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
        echo "<link href=\"css/main.css\" rel=\"stylesheet\">
<link href=\"css/balance.css\" rel=\"stylesheet\">
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
        $this->env->loadTemplate("Balance/_balance_step.html")->display($context);
        // line 14
        echo "        <div class=\"row\">
            <div class=\"col-md-3 box_1x\">
                <p><strong>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số tiền thanh toán")), "html", null, true);
        echo "</strong></p>
                <select class=\"form-control\">
                    <option>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("500.000 VNĐ")), "html", null, true);
        echo "</option>
                    <option>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("200.000 VNĐ")), "html", null, true);
        echo "</option>
                    <option>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khác")), "html", null, true);
        echo "</option>
                </select>
                <p class=\"padding_top\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập số tiền:")), "html", null, true);
        echo "</p>
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control text-right\" aria-describedby=\"basic-addon2\">
                    <span class=\"input-group-addon\" id=\"basic-addon2\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("VNĐ")), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 box_1x\">
                <p><strong>";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Phương thức thanh toán")), "html", null, true);
        echo "</strong></p>
                <select class=\"form-control\">
                    <option>";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán online")), "html", null, true);
        echo "</option>
                    <option>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán chuyển khoản")), "html", null, true);
        echo "</option>
                </select>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-offset-4 col-md-4\">
                <button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 40
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
        return array (  110 => 40,  101 => 34,  97 => 33,  92 => 31,  83 => 25,  77 => 22,  72 => 20,  68 => 19,  64 => 18,  59 => 16,  55 => 14,  53 => 13,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
