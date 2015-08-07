<?php

/* howitwork.html */
class __TwigTemplate_4cf1d4e92c6d6b81f7eb961e183f363b2d08050fb0d9220d5d3bd91f5f7f8ba5 extends Twig_Template
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
        echo "<div class=\"white_bg box_sm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <h3>Hướng dẫn đặt xe trên dichungtaxi.com</h3>
            </div>
        </div>
        <div class=\"row box_lg\">
            <div class=\"col-md-12 col-sm-12\">
                <div class=\"ic_description\">
                    <p class=\"hightlight\">Tittle</p>
                    <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-offset-4 col-md-4\">
                <button class=\"btn btn_blue btn_lg\">Đặt xe ngay</button>
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
        return "howitwork.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  52 => 5,  49 => 4,  44 => 3,  39 => 2,  11 => 1,);
    }
}
