<?php

/* invite-friend.html */
class __TwigTemplate_312a593c9a68e53ae24e4555ca264452a73ad0534597f73460c0ef2260b52ca9 extends Twig_Template
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
        echo "<div><img src=\"img/promotion.jpg\" width=\"100%\"></div>
<div class=\"gray_bg box_xs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h4>Bạn chưa đăng nhập !</h4>
                <p>- Để thực hiện chức năng mời bạn bè bạn cần phải đăng nhập hoặc đăng kí</p>
            </div>
            <div class=\"col-md-4\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 box_md\">
                        <button class=\"btn btn_blue btn_sm\">Đăng nhập</button>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6 box_md\">
                        <button class=\"btn btn_orange btn_sm\">Đăng kí</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"white_bg box_xs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"hightlight\">Bạn chưa có lời mời bạn bè nào</p>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 34
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "invite-friend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  40 => 3,  37 => 2,  11 => 1,);
    }
}
