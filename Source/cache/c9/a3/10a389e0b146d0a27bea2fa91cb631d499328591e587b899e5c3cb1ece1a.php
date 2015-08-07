<?php

/* _header_top_login.html */
class __TwigTemplate_c9a310a389e0b146d0a27bea2fa91cb631d499328591e587b899e5c3cb1ece1a extends Twig_Template
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
        echo "<div class=\"blue_bg head_\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6 box_xs\">
                        <img src=\"img/phone.png\" class=\"sm_icon\">04.66702266
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 box_xs\">
                        <img src=\"img/cellphone.png\" class=\"sm_icon\">+84934.531.266
                    </div>
                </div>
            </div>
            <div class=\"col-md-offset-3 col-md-5\">
                <div class=\"row\">
                    <div class=\"col-md-offset-4 col-md-4 col-sm-4 col-xs-4\" style=\"padding-top: 5px; padding-bottom: 5px;\">
                        <a href=\"account.html\"><img src=\"img/ava.jpg\" class=\"sm_avatar\">User account</a>
                    </div>
                    <div class=\"col-md-4 col-sm-4 col-xs-4 box_xs\">
                        <script type='text/javascript' >
                            \$(document).ready(function(){
                                \$('#popbox').popbox();
                            });
                        </script>
                        <div class='popbox' id=\"popbox\">
                            <a class='open' href='#'>
                                <img class=\"sm_icon\" src='img/quanlygiaodich.png' style='position:relative;'> Quản lý giao dịch
                            </a>

                            <div class='collapse_ql'>
                                <div class='box'>
                                    <div class='arrow'></div>
                                    <div class='arrow-border'></div>

                                    <div id=\"subForm\" class=\"popbox_style box_xs\">
                                        <p class=\"title\">Quản lý giao dịch</p>
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Nhập mã đặt xe\" />
                                        <div style=\"padding-top: 10px\"><input type=\"text\" class=\"form-control\" placeholder=\"Nhập số điện thoại\" /></div>
                                        <div style=\"padding-top: 10px\"><button class=\"btn btn_sm btn_orange\">Tra cứu</button></div>
                                        <div class=\"blue_bg huyve\">
                                            <p><span class=\"title\">HỦY VÉ ĐÃ ĐẶT</span> (Miễn phí)</p>
                                            <p>Soạn tin <span class=\"hightlight\">DES MãVé</span> Gửi <span class=\"hightlight\">8077</span> </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_header_top_login.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
