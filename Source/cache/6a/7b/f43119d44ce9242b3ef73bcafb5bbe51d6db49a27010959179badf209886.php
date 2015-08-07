<?php

/* _account_bank_account_edit.html */
class __TwigTemplate_6a7bf43119d44ce9242b3ef73bcafb5bbe51d6db49a27010959179badf209886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t\t\t\t<div class=\"col-md-12 suathongtin\">
                        <h4>";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin tài khoản ngân hàng")), "html", null, true);
        echo "</h4>
                        <h6>";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("(Trong trượng hợp hoàn tiền khi hủy chỗ)")), "html", null, true);
        echo "</h6>
                        <hr/>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số tài khoản")), "html", null, true);
        echo ":</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" name=\"bank_account_form[account_number]\"  id=\"bank_account_form_account_number\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ngân hàng")), "html", null, true);
        echo ":</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" name=\"bank_account_form[bank]\"  id=\"bank_account_form_bank\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-2 control-label\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chi nhánh")), "html", null, true);
        echo ":</label>
                            <div class=\"col-sm-10\">
                                <input class=\"form-control\" name=\"bank_account_form[branch]\"  id=\"bank_account_form_branch\"/>
                            </div>
                        </div>
                    </div>";
    }

    public function getTemplateName()
    {
        return "_account_bank_account_edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  45 => 16,  34 => 8,  26 => 3,  22 => 2,  19 => 1,);
    }
}
