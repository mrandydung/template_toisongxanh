<?php

/* booking_step1.html */
class __TwigTemplate_471d3bfa50adae401f2e099483a470293daa51327f9c4ee54501786e05aa0032 extends Twig_Template
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
            <div class=\"col-md-6\">
\t\t\t";
        // line 9
        $this->env->loadTemplate("_booking_step1_booking_form.html")->display($context);
        echo "\t\t\t
            </div>
            <div class=\"col-md-6\">                
\t\t\t";
        // line 12
        $this->env->loadTemplate("_booking_step1_map.html")->display($context);
        // line 13
        echo "            </div>
        </div>
        ";
        // line 15
        $this->env->loadTemplate("_booking_step1_selected_taxi.html")->display($context);
        // line 16
        echo "        ";
        $this->env->loadTemplate("_booking_step1_add_address.html")->display($context);
        // line 17
        echo "\t\t";
        $this->env->loadTemplate("_booking_step1_name_banner.html")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("_booking_step1_airport_to.html")->display($context);
        // line 19
        echo "\t\t";
        $this->env->loadTemplate("_booking_step1_go_back.html")->display($context);
        // line 20
        echo "        <div class=\"row\">
            <div class=\"col-md-offset-8 col-md-4\">
                <button class=\"btn btn_blue btn_lg\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tiếp tục")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 28
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "booking_step1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  90 => 22,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  72 => 15,  68 => 13,  66 => 12,  60 => 9,  54 => 5,  51 => 4,  45 => 3,  39 => 2,  11 => 1,);
    }
}
