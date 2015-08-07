<?php

/* /Layout/_login_modal.html */
class __TwigTemplate_89fa30f3e0fe0e23495bcb6a80d991beff44ea46b8c9d8475a034326922754cb extends Twig_Template
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
        echo "<!-- Login Modal -->
<div class=\"modal fade\" id=\"dangnhap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog modal-sm\" role=\"document\">
        <div class=\"modal-content log_modal\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close modal_close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"glyphicon glyphicon-remove-circle\" aria-hidden=\"true\"></span></button>
                <h3 class=\"text-center\">Đăng nhập</h3>
                <p class=\"text-center\">Bằng mạng xã hội</p>
                <div class=\"row\">
                    <!-- <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <button class=\"log_google\">Google</button>
                    </div> -->
                    <div class=\"col-md-12\">
                        <button class=\"log_facebook\">Facebook</button>
                    </div>
                </div>
                <div class=\"row padding_top\">
                    <div class=\"col-md-5 col-sm-5 col-xs-5\"><hr/></div>
                    <div class=\"col-md-2 col-sm-2 col-xs-2\">Hoặc</div>
                    <div class=\"col-md-5 col-sm-5 col-xs-5\"><hr/></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <form class=\"log\">
                            <input placeholder=\"Email\" type=\"text\" required=\"\">
                            <input placeholder=\"Mật khẩu\" type=\"password\" required=\"\">
                        </form>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <button class=\"btn btn_width btn_blue round_btn\">Đăng nhập</button>
                    </div>
                    <div class=\"col-md-12 padding_top\">
                        <p><a>Quên mật khẩu</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Layout/_login_modal.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
