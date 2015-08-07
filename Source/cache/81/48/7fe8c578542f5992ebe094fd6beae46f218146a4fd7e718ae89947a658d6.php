<?php

/* shipping_partner.html */
class __TwigTemplate_81487fe8c578542f5992ebe094fd6beae46f218146a4fd7e718ae89947a658d6 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"css/customer.css\">
<div class=\"banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5 col-sm-6 loidan\">
                <h3 class=\"tittle\">Đối tác vận chuyển</h3>
                <p>Bên cạnh việc cung cấp dịch vụ đặt chỗ tiện lợi và tiết kiệm cho cá nhân khi cần đi lại trên chuyên tuyến trung tâm ra sân bay và ngược lại. Chúng tôi cũng nỗ lực để cung cấp một gói dịch vụ đặc biệt dành riêng cho các tổ chức trong bối cảnh kinh tế khó khăn và các ngân sách cần được sử dụng một cách hợp lý.</p>
            </div>
        </div>
    </div>
</div>
<div class=\"white_bg box_sm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 loiich\">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
            </div>
        </div>
        <div class=\"row box_lg\">
            <div class=\"col-md-8 col-sm-8 ic_content\">
                <div class=\"ic_description\">
                    <p class=\"hightlight\">Tittle</p>
                    <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 ic_img\">
                <img class=\"img-circle img-thumbnail\" src=\"http://placehold.it/250x250\">
            </div>
        </div>
        <div class=\"row box_lg\">
            <div class=\"col-md-4 col-sm-4 ic_img\">
                <img class=\"img-circle img-thumbnail\" src=\"http://placehold.it/250x250\">
            </div>
            <div class=\"col-md-8 col-sm-8 ic_content\">
                <div class=\"ic_description\">
                <p class=\"hightlight\">Tittle</p>
                <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class=\"row box_lg\">
            <div class=\"col-md-8 col-sm-8 ic_content\">
                <div class=\"ic_description\">
                    <p class=\"hightlight\">Tittle</p>
                    <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 ic_img\">
                <img class=\"img-circle img-thumbnail\" src=\"http://placehold.it/250x250\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-offset-4 col-md-4\">
                <button class=\"btn btn_blue btn_lg\" data-toggle=\"modal\" data-target=\"#dangki_shiper\">Đăng kí dịch vụ</button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 64
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "shipping_partner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 64,  52 => 5,  49 => 4,  44 => 3,  39 => 2,  11 => 1,);
    }
}
