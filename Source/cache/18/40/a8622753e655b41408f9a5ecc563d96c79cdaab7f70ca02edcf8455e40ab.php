<?php

/* /Account/account-transaction.html */
class __TwigTemplate_1840a8622753e655b41408f9a5ecc563d96c79cdaab7f70ca02edcf8455e40ab extends Twig_Template
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
                        <li class=\"active\"><a><span class=\"transaction_icon\"></span> ";
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
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover text-center\">
                                <thead>
                                <tr>
                                    <th class=\"text-center\">Mã giao dịch</th>
                                    <th class=\"text-center\">Dự án</th>
                                    <th class=\"text-center\">Đợt</th>
                                    <th class=\"text-center\">Ngày giao dịch</th>
                                    <th class=\"text-center\">Số tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    ";
        // line 30
        $this->env->loadTemplate("Account/_transaction_project.html")->display($context);
        // line 31
        echo "                                </tr>
                                <tr>
                                    ";
        // line 33
        $this->env->loadTemplate("Account/_transaction_project.html")->display($context);
        // line 34
        echo "                                </tr>
                                <tr>
                                    ";
        // line 36
        $this->env->loadTemplate("Account/_transaction_project.html")->display($context);
        // line 37
        echo "                                </tr>
                                </tbody>
                            </table>
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
        return "/Account/account-transaction.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  88 => 36,  84 => 34,  82 => 33,  78 => 31,  76 => 30,  55 => 12,  51 => 11,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
