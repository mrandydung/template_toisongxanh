<?php

/* brand_info_intro.html */
class __TwigTemplate_1826ce1f69c35ff4ea44806489169f3c0372c8472fa72e4c3056df1ef8caebf6 extends Twig_Template
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
                <h3>Thông tin hãng xe</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                <div class=\"brand-menu\">
                    <ul>
\t\t\t\t\t\t<li class=\"active\"><a>Giới thiệu</a></li>
\t\t\t\t\t\t<li><a href=\"/Brand-images.php\">Hình ảnh</a></li>
\t\t\t\t\t\t<li><a href=\"/Brand-rating.php\">Đánh giá</a></li>
\t\t\t\t\t\t<li><a>Chính sách</a></li>
\t\t\t\t\t</ul>
                </div>
            </div>
        </div>
\t\t<div class=\"row box_sm\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 27
        $this->env->loadTemplate("_brand_info_intro_content.html")->display($context);
        // line 28
        echo "\t\t\t</div>
\t\t</div>
    </div>
</div>
";
    }

    // line 33
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "brand_info_intro.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  78 => 28,  76 => 27,  52 => 5,  49 => 4,  44 => 3,  39 => 2,  11 => 1,);
    }
}
