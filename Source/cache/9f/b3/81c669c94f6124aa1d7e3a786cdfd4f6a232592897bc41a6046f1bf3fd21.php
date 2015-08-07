<?php

/* booking_step1_airport_to.html */
class __TwigTemplate_9fb381c669c94f6124aa1d7e3a786cdfd4f6a232592897bc41a6046f1bf3fd21 extends Twig_Template
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
        echo "<link href=\"/css/brand.css\" rel=\"stylesheet\">
<div class=\"white_bg\">
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h4 class=\"addition_text\">Thông tin chuyến đi đã đặt</h4>\t\t\t\t
\t\t\t\t";
        // line 11
        $this->env->loadTemplate("_booking_step1_log.html")->display($context);
        // line 12
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"white_bg box_md\">
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t<h4 class=\"addition_text\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe tại sân bay đến")), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t</div>
        <div class=\"row\">
            <div class=\"col-md-6\">
\t\t\t";
        // line 25
        $this->env->loadTemplate("_booking_step1_booking_form_option.html")->display($context);
        echo "\t\t\t
            </div>
            <div class=\"col-md-6\">                
\t\t\t";
        // line 28
        $this->env->loadTemplate("_booking_step1_map.html")->display($context);
        // line 29
        echo "            </div>
        </div>
\t\t";
        // line 31
        $this->env->loadTemplate("_booking_step2_flight.html")->display($context);
        // line 32
        echo "        ";
        $this->env->loadTemplate("_booking_step1_selected_taxi.html")->display($context);
        // line 33
        echo "        ";
        $this->env->loadTemplate("_booking_step1_add_address.html")->display($context);
        // line 34
        echo "\t\t";
        $this->env->loadTemplate("_booking_step1_name_banner.html")->display($context);
        // line 35
        echo "\t\t";
        $this->env->loadTemplate("_booking_step1_go_back.html")->display($context);
        // line 36
        echo "\t\t";
        $this->env->loadTemplate("_booking_step1_balance.html")->display($context);
        // line 37
        echo "        <div class=\"row padding_top\">
            <div class=\"col-md-offset-8 col-md-4\">
                <button class=\"btn btn_blue btn_lg\">";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tiếp tục")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        // line 44
        $this->env->loadTemplate("_brand_detail_modal.html")->display($context);
    }

    // line 46
    public function block_test($context, array $blocks = array())
    {
        echo "Đặt xe";
    }

    public function getTemplateName()
    {
        return "booking_step1_airport_to.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  123 => 44,  115 => 39,  111 => 37,  108 => 36,  105 => 35,  102 => 34,  99 => 33,  96 => 32,  94 => 31,  90 => 29,  88 => 28,  82 => 25,  74 => 20,  64 => 12,  62 => 11,  54 => 5,  51 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
