<?php

/* _account_user_infor_edit.html */
class __TwigTemplate_7bef0caff61b4819b1a44a90f90426a7562c50f3074b05e557df73d5c3085890 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin bắt buộc")), "html", null, true);
        echo "</h4>
                        <hr/>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tên đầy đủ")), "html", null, true);
        echo ":</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" name=\"account_form_edit[name]\"  id=\"account_form_edit_name\">
                            </div>
                        </div>
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">Email:</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" name=\"account_form_edit[mail]\"  id=\"account_form_edit_mail\">
                            </div>
                        </div>
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ")), "html", null, true);
        echo ":</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" name=\"account_form_edit[address]\"  id=\"account_form_edit_address\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mật khẩu")), "html", null, true);
        echo ":</label>
                            <div class=\"col-sm-8\">
                                <p>D********** <span class=\"add_text\"><a data-toggle=\"modal\" data-target=\"#sua\">Sửa</a></span></p>
                            </div>
                        </div>
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điện thoại")), "html", null, true);
        echo ":</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" name=\"account_form_edit[phone]\"  id=\"account_form_edit_phone\">
                            </div>
                        </div>
                        <div class=\"row suathongtin\">
                            <label class=\"col-sm-4 control-label\">CMND:</label>
                            <div class=\"col-sm-8\">
                                <input class=\"form-control\" name=\"account_form_edit[id_card]\"  id=\"account_form_edit_id_card\">
                            </div>
                        </div>
                    </div>";
    }

    public function getTemplateName()
    {
        return "_account_user_infor_edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 33,  56 => 27,  45 => 19,  30 => 7,  22 => 2,  19 => 1,);
    }
}
