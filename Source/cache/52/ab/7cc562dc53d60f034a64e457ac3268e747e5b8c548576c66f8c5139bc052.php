<?php

/* _header_top.html */
class __TwigTemplate_52ab7cc562dc53d60f034a64e457ac3268e747e5b8c548576c66f8c5139bc052 extends Twig_Template
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
                <div class=\"col-md-offset-3 col-md-5 box_xs\">
                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-4 col-xs-4\">
                            <a data-toggle=\"modal\" data-target=\"#dangki\"><img src=\"img/dangki.png\" class=\"sm_icon\"> ";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"col-md-4 col-sm-4 col-xs-4\">
                            <a data-toggle=\"modal\" data-target=\"#dangnhap\"><img src=\"img/dangnhap.png\" class=\"sm_icon\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng nhập")), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"col-md-4 col-sm-4 col-xs-4\">
                            <script type='text/javascript' >
                                \$(document).ready(function(){
                                    \$('#popbox').popbox();
                                });
                            </script>
                            <div class='popbox' id=\"popbox\">
                                <a class='open' href='#'>
                                    <img class=\"sm_icon\" src='img/quanlygiaodich.png' style='position:relative;'> ";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quản lý giao dịch")), "html", null, true);
        echo "
                                </a>

                                <div class='collapse_ql'>
                                    <div class='box'>
                                        <div class='arrow'></div>
                                        <div class='arrow-border'></div>

                                        <div id=\"subForm\" class=\"popbox_style box_xs\">
                                            <p class=\"title\">";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Quản lý giao dịch")), "html", null, true);
        echo "</p>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Nhập mã đặt xe\" />
                                            <div style=\"padding-top: 10px\"><input type=\"text\" class=\"form-control\" placeholder=\"Nhập số điện thoại\" /></div>
                                            <div style=\"padding-top: 10px\"><button class=\"btn btn_sm btn_orange\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tra cứu")), "html", null, true);
        echo "</button></div>
                                            <div class=\"blue_bg huyve\">
                                                <p><span class=\"title\">";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("HỦY VÉ ĐÃ ĐẶT")), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("miễn phí")), "html", null, true);
        echo "</p>
                                                <p>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Soạn tin")), "html", null, true);
        echo " <span class=\"hightlight\">DES ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mãvé")), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gửi")), "html", null, true);
        echo " <span class=\"hightlight\">8077</span> </p>
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
        return "_header_top.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 45,  79 => 44,  74 => 42,  68 => 39,  56 => 30,  43 => 20,  37 => 17,  19 => 1,);
    }
}
