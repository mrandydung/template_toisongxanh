<?php

/* booking_step2.html */
class __TwigTemplate_e91c4584d31aefd402e414ca9911bab476a0810d2c68b0b1dbc115f52d36bf3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'login_remind' => array($this, 'block_login_remind'),
            'booking_step' => array($this, 'block_booking_step'),
            'body' => array($this, 'block_body'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_login_remind($context, array $blocks = array())
    {
        $this->env->loadTemplate("_booking_login_remind.html")->display($context);
    }

    // line 3
    public function block_booking_step($context, array $blocks = array())
    {
        $this->env->loadTemplate("_booking_step.html")->display($context);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"white_bg box_md\">
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
                ";
        // line 9
        $this->env->loadTemplate("_booking_step2_customer_info.html")->display($context);
        // line 10
        echo "                ";
        $this->env->loadTemplate("_booking_step2_dat_ho.html")->display($context);
        // line 11
        echo "                <div class=\"row\"><hr/></div>
\t\t\t\t";
        // line 12
        $this->env->loadTemplate("_booking_step2_invoice.html")->display($context);
        // line 13
        echo "\t\t\t\t<div class=\"row\"><hr/></div>
                ";
        // line 14
        $this->env->loadTemplate("_booking_step2_payment.html")->display($context);
        // line 15
        echo "\t\t\t\t<!--<div class=\"row\"><hr/></div>
                ";
        // line 16
        $this->env->loadTemplate("_booking_step2_verify.html")->display($context);
        // line 17
        echo "                <div class=\"row padding_top\">
\t\t\t\t\t<label for=\"customer_form_term\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"customer_form[term]\"  id=\"customer_form_term\"> ";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi đồng ý với")), "html", null, true);
        echo " <a href=\"\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chính sách vận chuyển")), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("của")), "html", null, true);
        echo " dichungtaxi.com
\t\t\t\t\t</label>
                </div>-->
            </div>
            <div class=\"col-md-4\">\t\t\t\t
\t\t\t\t";
        // line 24
        $this->env->loadTemplate("_booking_step2_log.html")->display($context);
        // line 25
        echo "                ";
        $this->env->loadTemplate("_booking_step2_warning.html")->display($context);
        // line 26
        echo "            </div>
\t\t</div>
        <div class=\"row padding_top\">
            <div class=\"col-md-offset-4 col-md-4\">
                <button class=\"btn btn_blue btn_lg\">";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo "</button>
            </div>
\t\t\t<div class=\"col-md-12 text-center padding_top\">
\t\t\t\t<p>Bấm <strong>thanh toán</strong> đồng nghĩa với việc bạn đã đồng ý với <a>Chính sách vận chuyển</a> của dichungtaxi.com</p>
\t\t\t</div>
        </div>
    </div>
</div>
";
    }

    // line 39
    public function block_test($context, array $blocks = array())
    {
        echo "Đặt xe";
    }

    public function getTemplateName()
    {
        return "booking_step2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  107 => 30,  101 => 26,  98 => 25,  96 => 24,  84 => 19,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  68 => 12,  65 => 11,  62 => 10,  60 => 9,  54 => 5,  51 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
