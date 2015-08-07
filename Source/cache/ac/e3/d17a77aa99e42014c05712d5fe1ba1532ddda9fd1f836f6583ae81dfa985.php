<?php

/* _footer_item3.html */
class __TwigTemplate_ace3d17a77aa99e42014c05712d5fe1ba1532ddda9fd1f836f6583ae81dfa985 extends Twig_Template
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
        echo "<div class=\"col-md-4\">
                <div class=\"tittle\">Đăng kí nhận tin</div>
                <div class=\"content\">
                    <p>Đăng kí nhận tin mua bán , cho thuê căn hộ, cho thuê khách sạn và các dịch vụ qua email</p>
                    <div class=\"row\">
                        <div class=\"col-md-8 col-sm-8 col-xs-8\"><input class=\"form-control\" id=\"email_subscribe\" placeholder=\"Nhập Email\"></div>
                        <div class=\"col-md-4 col-sm-4 col-xs-4\"><button class=\"dangki\" id=\"submit_subscribe\">Đăng kí</button></div>
                    </div>
                </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "_footer_item3.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
