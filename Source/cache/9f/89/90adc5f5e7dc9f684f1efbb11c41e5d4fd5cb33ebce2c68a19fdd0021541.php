<?php

/* list-brand.html */
class __TwigTemplate_9f8990adc5f5e7dc9f684f1efbb11c41e5d4fd5cb33ebce2c68a19fdd0021541 extends Twig_Template
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
    }

    // line 3
    public function block_booking_step($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<link href=\"/css/brand.css\" rel=\"stylesheet\">
<div class=\"white_bg box_md\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <h3>Hãng xe</h3>
            </div>
        </div>
\t\t<div class=\"row box_sm\">
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 15
        $this->env->loadTemplate("_list_brand_brand.html")->display($context);
        // line 16
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 18
        $this->env->loadTemplate("_list_brand_brand.html")->display($context);
        // line 19
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 21
        $this->env->loadTemplate("_list_brand_brand.html")->display($context);
        // line 22
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 24
        $this->env->loadTemplate("_list_brand_brand.html")->display($context);
        // line 25
        echo "\t\t\t</div>
\t\t</div>
    </div>
</div>
";
    }

    // line 30
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "list-brand.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  84 => 25,  82 => 24,  78 => 22,  76 => 21,  72 => 19,  70 => 18,  66 => 16,  64 => 15,  52 => 5,  49 => 4,  44 => 3,  39 => 2,  11 => 1,);
    }
}
