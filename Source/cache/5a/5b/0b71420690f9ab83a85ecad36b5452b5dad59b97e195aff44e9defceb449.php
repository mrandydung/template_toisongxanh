<?php

/* _widget_datxe_list.html */
class __TwigTemplate_5a5b0b71420690f9ab83a85ecad36b5452b5dad59b97e195aff44e9defceb449 extends Twig_Template
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
        echo "<link href=\"/css/brand.css\" rel=\"stylesheet\">

<div class=\"white_bg box_md\">
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t<h4 class=\"addition_text\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe tại sân bay đến")), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t</div>
        ";
        // line 12
        $this->env->loadTemplate("_booking_step1_selected_taxi.html")->display($context);
        // line 13
        echo "        <div class=\"row padding_top\">
            <div class=\"col-md-offset-8 col-md-4\">
                <button class=\"btn btn_blue btn_lg\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tiếp tục")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        // line 20
        $this->env->loadTemplate("_brand_detail_modal.html")->display($context);
    }

    // line 22
    public function block_test($context, array $blocks = array())
    {
        echo "Đặt xe";
    }

    public function getTemplateName()
    {
        return "_widget_datxe_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  68 => 20,  60 => 15,  56 => 13,  54 => 12,  48 => 9,  40 => 3,  37 => 2,  11 => 1,);
    }
}
