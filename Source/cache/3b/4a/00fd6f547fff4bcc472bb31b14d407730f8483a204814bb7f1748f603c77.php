<?php

/* booking_step3.html */
class __TwigTemplate_3b4a00fd6f547fff4bcc472bb31b14d407730f8483a204814bb7f1748f603c77 extends Twig_Template
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
        echo "<div class=\"white_bg box_sm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3 style=\"text-align: center\">Quý khách vui lòng kiểm tra thông tin phía dưới</h3>
            </div>
            ";
        // line 11
        $this->env->loadTemplate("_booking_step3_customer_info.html")->display($context);
        // line 12
        echo "            <div class=\"col-md-12 box_xs\">
\t\t\t\t<a class=\"price_1\">
\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t<h4>Hà Nội - Trong thành phố</h4>
\t\t\t\t\t\t<h3>200.000 Đ</h3>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div class=\"show_price_1\">\t\t\t
\t\t\t\t\t";
        // line 20
        $this->env->loadTemplate("_booking_step3_ticket_info.html")->display($context);
        // line 21
        echo "\t\t\t\t\t";
        $this->env->loadTemplate("_booking_step3_driver_info.html")->display($context);
        // line 22
        echo "\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<hr/>
\t\t\t\t<div class=\"total_price\">
\t\t\t\t\t<h4>Tổng thanh toán</h4>
\t\t\t\t\t<h3>200.000 Đ</h3>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"col-md-12 box_md\">
                <h3 style=\"text-align: center\">Cảm ơn quý khách đã sử dụng dịch vụ của dichung.vn</h3>\t\t\t\t
\t\t\t\t<div class=\"col-md-offset-3 col-md-3 padding_top\">
\t\t\t\t\t<a class=\"btn btn_blue\">Đặt xe chiều về</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 padding_top\">
\t\t\t\t\t<a class=\"btn btn_orange\">Đặt xe tại sân bay đến</a>
\t\t\t\t</div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 44
    public function block_test($context, array $blocks = array())
    {
        echo "Đặt xe";
    }

    public function getTemplateName()
    {
        return "booking_step3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  79 => 22,  76 => 21,  74 => 20,  64 => 12,  62 => 11,  54 => 5,  51 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
