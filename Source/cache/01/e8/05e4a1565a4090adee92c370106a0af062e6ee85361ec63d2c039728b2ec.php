<?php

/* customers_regular.html */
class __TwigTemplate_01e805e4a1565a4090adee92c370106a0af062e6ee85361ec63d2c039728b2ec extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"css/customer.css\">
<div class=\"banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-5 col-sm-6 loidan\">
                <h3 class=\"tittle\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách hàng thường xuyên")), "html", null, true);
        echo "</h3>
                <p>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chương trình Khách hàng thường xuyên mong muốn đem tới những ưu đãi cho những khách hàng thường xuyên sử dụng dịch vụ vận chuyển của Taxi Airport. Nếu bạn là Hội viên của Chương trình Khách hàng thường xuyên, sau mỗi chuyến đi với  Taxi Airport hoặc sau mỗi lần sử dụng sản phẩm, dịch vụ của các")), "html", null, true);
        echo ".</p>
            </div>
        </div>
    </div>
</div>
<div class=\"white_bg box_sm loiich\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lợi ích khi tham gia chương trình Khách hàng Thường xuyên")), "html", null, true);
        echo "</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6 box_sm\">
                <div class=\"box_outer\">
                <div class=\"box_md\"><img src=\"img/30discount.png\"></div>
                <p>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Khách hàng sử dụng dịch vụ 10 lần (mỗi chiều tính là 1 lần) thì sẽ được giảm 30% cước phí cho lần sử dụng dịch vụ thứ 11 ( không áp dụng cho các chuyến đi chung taxi, minibus)")), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 box_sm\">
                <div class=\"box_outer\">
                    <div class=\"box_md\"><img src=\"img/notification.png\"></div>
                    <p>";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nhận thông báo thường xuyên về các chương trình khuyến mãi, giảm giá của  Taxi Airport và ưu tiên đăng ký tham gia nếu có nhu cầu")), "html", null, true);
        echo ".</p>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 box_sm\">
                <div class=\"box_outer\">
                    <div class=\"box_md\"><img src=\"img/uutien.png\"></div>
                    <p>";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Được ưu tiên/ đảm bảo có xe trong những trường hợp lễ/ tết/ thời tiết không thuận lợi...mà có thể xảy ra trường hợp cháy xe")), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6 box_sm\">
                <div class=\"box_outer\">
                    <div class=\"box_md\"><img src=\"img/50.png\"></div>
                    <p>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Bạn sẽ được phiếu giảm giá 50.000đ mỗi khi bạn bè của bạn thực hiện chuyến đi đầu tiên")), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-offset-2 col-md-4 col-sm-6 box_xs\">
                <button class=\"btn btn_orange btn_lg\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mời bạn bè")), "html", null, true);
        echo "</button>
            </div>
            <div class=\"col-md-4 col-sm-6 box_xs\">
                <button class=\"btn btn_blue btn_lg\">";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đăng kí")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 60
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "customers_regular.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  127 => 54,  121 => 51,  112 => 45,  103 => 39,  94 => 33,  85 => 27,  75 => 20,  63 => 11,  59 => 10,  52 => 5,  49 => 4,  44 => 3,  39 => 2,  11 => 1,);
    }
}
