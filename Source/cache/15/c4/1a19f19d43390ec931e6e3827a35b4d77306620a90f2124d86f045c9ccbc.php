<?php

/* _account_user_infor.html */
class __TwigTemplate_15c41a19f19d43390ec931e6e3827a35b4d77306620a90f2124d86f045c9ccbc extends Twig_Template
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
        echo "<div class=\"account_info\">
                    <div class=\"avatar\">
                        <img src=\"img/ava.jpg\" class=\"md_avatar\">
                        <div style=\"position: absolute;bottom: 5px;z-index: 20;right: 5px;cursor: pointer;\">
                            <img src=\"img/account/edit_ava.png\">
                        </div>
                    </div>
                    <p style=\"text-align: right\"><a href=\"\" class=\"logout\">Đăng xuất</a></p>
                    <p style=\"padding-top: 5px\"><img src=\"img/account/account.png\" class=\"sm_icon\"> User Account</p>
                    <p><img src=\"img/account/phone.png\" class=\"sm_icon\"> Số điện thoại <span style=\"float: right\"><img src=\"img/account/verifi.png\"></span> </p>
                    <p><img src=\"img/account/mail.png\" class=\"sm_icon\"> Useraccount@gmail.com</p>
                    <p><img src=\"img/account/cmt.png\" class=\"sm_icon\"> Số chứng minh nhân dân</p>
                    <p><img src=\"img/account/location.png\" class=\"sm_icon\"> Số 165 Thái Hà, Hà Nội</p>
                </div>";
    }

    public function getTemplateName()
    {
        return "_account_user_infor.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
