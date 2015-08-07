<?php

/* /Account/account-info.html */
class __TwigTemplate_ffb73dfe70eb84932f7c09b7ebc8c30cffc6032ff5ea22d696f1b64d10b6a4e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("/Layout/layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/Layout/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"css/account.css\" rel=\"stylesheet\">
    <div class=\"gray_bg box_3x account_info\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul>
                        <li class=\"active\"><a><span class=\"user_icon\"></span> ";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin người dùng")), "html", null, true);
        echo "</a></li>
                        <li><a href=\"account-transaction.php\"><span class=\"transaction_icon\"></span> ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quản lí giao dịch")), "html", null, true);
        echo "</a></li>
                        <li><a href=\"account-config.php\"><span class=\"config_icon\"></span> ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cài đặt")), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"info_content box_2x\">
                        <div class=\"col-md-3\">
                            <img src=\"img/avatar.jpg\" width=\"100%\">
                            <div class=\"box_1x text-center\">
                                <button class=\"btn btn_blue\">Chọn ảnh đại diện</button>
                            </div>
                        </div>
                        <div class=\"col-md-8\">
                            ";
        // line 24
        $this->env->loadTemplate("Layout/_customer_info.html")->display($context);
        // line 25
        echo "                        </div>
                        <div class=\"col-md-offset-4 col-md-4 box_1x\">
                            <button class=\"btn btn_width round_btn btn_blue\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cập nhật")), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/Account/account-info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  72 => 25,  70 => 24,  55 => 12,  51 => 11,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
