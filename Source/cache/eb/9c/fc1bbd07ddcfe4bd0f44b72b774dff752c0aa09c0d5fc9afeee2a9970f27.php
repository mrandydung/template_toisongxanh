<?php

/* /Balance/balance-step3.html */
class __TwigTemplate_eb9cfc1bbd07ddcfe4bd0f44b72b774dff752c0aa09c0d5fc9afeee2a9970f27 extends Twig_Template
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
        echo "        <div class=\"row box_1x customer_info\">
            <div class=\"col-md-offset-2 col-md-6\">
                ";
        // line 15
        $this->env->loadTemplate("Layout/_customer_info.html")->display($context);
        // line 16
        echo "                <div class=\"row padding_top\">
                    <div class=\"col-md-offset-4 col-md-8\">
                        <label>
                            <input type=\"checkbox\" value=\"open_account\"> Tôi muốn mở tài khoản để theo dõi giao dịch
                        </label>
                    </div>
                </div>
                <div id=\"show_open_account\">
                    <div class=\"row padding_top\">
                        <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mật khẩu:")), "html", null, true);
        echo "</strong></p></div>
                        <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
                    </div>
                    <div class=\"row padding_top\">
                        <div class=\"col-md-4 col-sm-4 col-xs-3 text-right\"><p><strong>";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhập lại mật khẩu:")), "html", null, true);
        echo "</strong></p></div>
                        <div class=\"col-md-8 col-sm-8 col-xs-9\"><input type=\"text\" class=\"form-control\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-offset-4 col-md-4\">
                <a href=\"balance-step4.php\"><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo "</button></a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Balance/balance-step3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 37,  78 => 29,  71 => 25,  60 => 16,  58 => 15,  54 => 13,  52 => 12,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
