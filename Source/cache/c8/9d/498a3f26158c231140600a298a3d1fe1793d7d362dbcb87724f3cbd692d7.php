<?php

/* _footer.html */
class __TwigTemplate_c89d498a3f26158c231140600a298a3d1fe1793d7d362dbcb87724f3cbd692d7 extends Twig_Template
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
        echo "<div class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"tittle\">Giới thiệu</div>
                <div class=\"content\">
                    <p><a href=\"/gioi-thieu.html\">Về chúng tôi</a></p>
                    <p><a href=\"/tin-tuc.html\">Tin tức</a></p>
                    <p><a href=\"/tuyen-dung.html\">Tuyển dụng</a></p>
                </div>
            </div>
             <div class=\"col-md-4\">
    <div class=\"tittle\">Liên hệ</div>
    <div class=\"content\">
        <p><img src=\"/assets/viethousing/img/phone.png\" class=\"sm_icon\">Phone: (+84) 8 6298 8885 </p>
        <p><img src=\"/assets/viethousing/img/mail.png\" class=\"sm_icon\">Email: email@gmail.com</p>
        <p><img src=\"/assets/viethousing/img/location.png\" class=\"sm_icon\">Địa chỉ: 155 Hai Bà Trưng, Phường 6, Quận 3, TP HCM</p>
    </div>
</div>
            <div class=\"col-md-4\">
                <div class=\"tittle\">Đăng kí nhận tin</div>
                <div class=\"content\">
                    <p>Đăng kí nhận tin mua bán , cho thuê căn hộ, cho thuê khách sạn và các dịch vụ qua email</p>
                    <div class=\"row\">
                        <div class=\"col-md-8 col-sm-8 col-xs-8\"><input class=\"form-control\" id=\"email_subscribe\" placeholder=\"Nhập Email\"></div>
                        <div class=\"col-md-4 col-sm-4 col-xs-4\"><button class=\"dangki\" id=\"submit_subscribe\">Đăng kí</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "_footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
