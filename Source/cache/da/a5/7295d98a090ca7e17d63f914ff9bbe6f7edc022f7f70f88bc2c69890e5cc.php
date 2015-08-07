<?php

/* institutional_customers.html */
class __TwigTemplate_daa57295d98a090ca7e17d63f914ff9bbe6f7edc022f7f70f88bc2c69890e5cc extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"css/customer.css\">
<div class=\"banner2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5 col-sm-6 loidan\">
                <h3 class=\"tittle\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách hàng Tổ chức")), "html", null, true);
        echo "</h3>
                <p>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Bên cạnh việc cung cấp dịch vụ đặt chỗ tiện lợi và tiết kiệm cho cá nhân khi cần đi lại trên chuyên tuyến trung tâm ra sân bay và ngược lại. Chúng tôi cũng nỗ lực để cung cấp một gói dịch vụ đặc biệt dành riêng cho các tổ chức trong bối cảnh kinh tế khó khăn và các ngân sách cần được sử dụng một cách hợp lý")), "html", null, true);
        echo ".</p>
            </div>
        </div>
    </div>
</div>
<div class=\"white_bg box_sm\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 loiich\">
                <h3>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua")), "html", null, true);
        echo ".</h3>
            </div>
        </div>
        <div class=\"row box_lg\">
            <div class=\"col-md-8 col-sm-8 ic_content\">
                <div class=\"ic_description\">
                    <p class=\"hightlight\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tittle")), "html", null, true);
        echo "</p>
                    <p>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum")), "html", null, true);
        echo ".</p>
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
                <p class=\"hightlight\">";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tittle")), "html", null, true);
        echo "</p>
\t\t\t\t<p>";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum")), "html", null, true);
        echo ".</p>
                </div>
            </div>
        </div>
        <div class=\"row box_lg\">
            <div class=\"col-md-8 col-sm-8 ic_content\">
                <div class=\"ic_description\">
                    <p class=\"hightlight\">";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tittle")), "html", null, true);
        echo "</p>
                    <p>";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum")), "html", null, true);
        echo ".</p>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-4 ic_img\">
                <img class=\"img-circle img-thumbnail\" src=\"http://placehold.it/250x250\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-offset-4 col-md-4\">
                <button class=\"btn btn_blue btn_lg\">";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí dịch vụ")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 62
    public function block_test($context, array $blocks = array())
    {
        echo "Trang ";
    }

    public function getTemplateName()
    {
        return "institutional_customers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  122 => 56,  110 => 47,  106 => 46,  96 => 39,  92 => 38,  76 => 25,  72 => 24,  63 => 18,  51 => 9,  47 => 8,  40 => 3,  37 => 2,  11 => 1,);
    }
}
