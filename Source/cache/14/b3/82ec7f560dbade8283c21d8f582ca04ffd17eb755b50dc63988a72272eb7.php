<?php

/* /Account/account-config.html */
class __TwigTemplate_14b382ec7f560dbade8283c21d8f582ca04ffd17eb755b50dc63988a72272eb7 extends Twig_Template
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
                        <li><a href=\"account-info.php\"><span class=\"user_icon\"></span> ";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin người dùng")), "html", null, true);
        echo "</a></li>
                        <li><a href=\"account-transaction.php\"><span class=\"transaction_icon\"></span> ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quản lí giao dịch")), "html", null, true);
        echo "</a></li>
                        <li class=\"active\"><a><span class=\"config_icon\"></span> ";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cài đặt")), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                <div class=\"col-md-9\">
                    <div class=\"info_content box_2x\">
                        <div class=\"col-md-12\">
                            <p><label><input type=\"checkbox\"> Hiển thị thông tin cá nhân</label></p>
                            <p><label><input type=\"checkbox\"> Hiển thị quản lý giao dịch</label></p>
                        </div>
                        <div class=\"col-md-offset-4 col-md-4 box_1x\">
                            <button class=\"btn btn_width round_btn btn_blue\">";
        // line 22
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
        return "/Account/account-config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  55 => 12,  51 => 11,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
