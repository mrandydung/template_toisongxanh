<?php

/* _widget_customer_info.html */
class __TwigTemplate_38d532a5b4fa6149ffa787789ed0cd07dda21337e54f974856d6bec964584bb7 extends Twig_Template
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"white_bg box_md\">
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
                ";
        // line 7
        $this->env->loadTemplate("_booking_step2_customer_info.html")->display($context);
        // line 8
        echo "\t\t\t\t<div class=\"row\"><hr/></div>
                ";
        // line 9
        $this->env->loadTemplate("_booking_step2_payment.html")->display($context);
        // line 10
        echo "\t\t\t\t<!--<div class=\"row\"><hr/></div>
                ";
        // line 11
        $this->env->loadTemplate("_booking_step2_verify.html")->display($context);
        // line 12
        echo "                <div class=\"row padding_top\">
\t\t\t\t\t<label for=\"customer_form_term\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"customer_form[term]\"  id=\"customer_form_term\"> ";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi đồng ý với")), "html", null, true);
        echo " <a href=\"\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chính sách vận chuyển")), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("của")), "html", null, true);
        echo " dichungtaxi.com
\t\t\t\t\t</label>
                </div>-->
            </div>
\t\t</div>
        <div class=\"row padding_top\">\t\t
\t\t\t<div class=\"col-md-12 text-center padding_top\">
\t\t\t\t<p>Bấm <strong>thanh toán</strong> đồng nghĩa với việc bạn đã đồng ý với <a>Chính sách vận chuyển</a> của dichungtaxi.com</p>
\t\t\t</div>
            <div class=\"col-md-offset-4 col-md-4\">
                <button class=\"btn btn_blue btn_lg\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 30
    public function block_test($context, array $blocks = array())
    {
        echo "Đặt xe";
    }

    public function getTemplateName()
    {
        return "_widget_customer_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  79 => 24,  62 => 14,  58 => 12,  56 => 11,  53 => 10,  51 => 9,  48 => 8,  46 => 7,  40 => 3,  37 => 2,  11 => 1,);
    }
}
