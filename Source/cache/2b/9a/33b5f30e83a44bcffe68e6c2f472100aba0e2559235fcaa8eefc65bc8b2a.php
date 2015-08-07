<?php

/* account.html */
class __TwigTemplate_2b9a33b5f30e83a44bcffe68e6c2f472100aba0e2559235fcaa8eefc65bc8b2a extends Twig_Template
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
        echo "    <link rel=\"stylesheet\" href=\"css/account.css\">
\t
<div class=\"white_bg\">
    <div class=\"container box_md\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                ";
        // line 11
        $this->env->loadTemplate("_account_user_infor.html")->display($context);
        // line 12
        echo "            </div>
            <div class=\"col-md-9\">
            <ul class=\"nav nav-tabs account\">
\t\t\t\t<li class=\"col-md-offset-3 active\"><a href=\"#thongtin\" data-toggle=\"tab\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thay đổi thông tin")), "html", null, true);
        echo "</a></li>
                <li><a href=\"#giaodich\" data-toggle=\"tab\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Giao dịch")), "html", null, true);
        echo "</a></li>
                <li><a href=\"#balance\" data-toggle=\"tab\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sổ tay trung hòa khí thải")), "html", null, true);
        echo "</a></li>
            </ul>
            <div class=\"tab-content giaodich\">\t\t\t
            <div id=\"thongtin\" class=\"tab-pane table-responsive active\">
                <div class=\"row\">
                    ";
        // line 22
        $this->env->loadTemplate("_account_user_infor_edit.html")->display($context);
        // line 23
        echo "                    ";
        $this->env->loadTemplate("_account_bank_account_edit.html")->display($context);
        // line 24
        echo "                    ";
        $this->env->loadTemplate("_account_other_user_infor.html")->display($context);
        // line 25
        echo "                    ";
        $this->env->loadTemplate("_account_receive_infor.html")->display($context);
        // line 26
        echo "                    <div class=\"col-md-offset-9 col-md-3\"><button class=\"btn btn_blue btn_sm\">Thay đổi</button> </div>
                </div>
            </div>
            <div id=\"giaodich\" class=\"tab-pane table-responsive\">
                ";
        // line 30
        $this->env->loadTemplate("_account_transaction.html")->display($context);
        // line 31
        echo "            </div>
\t\t\t<div id=\"balance\" class=\"tab-pane table-responsive\">
                ";
        // line 33
        $this->env->loadTemplate("_account_plan.html")->display($context);
        // line 34
        echo "            </div>
            </div>
            <div style=\"clear: both\"></div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 42
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "account.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  108 => 34,  106 => 33,  102 => 31,  100 => 30,  94 => 26,  91 => 25,  88 => 24,  85 => 23,  83 => 22,  75 => 17,  71 => 16,  67 => 15,  62 => 12,  60 => 11,  52 => 5,  49 => 4,  44 => 3,  39 => 2,  11 => 1,);
    }
}
