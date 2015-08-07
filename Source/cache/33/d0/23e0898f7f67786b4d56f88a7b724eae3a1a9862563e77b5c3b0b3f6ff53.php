<?php

/* promotion.html */
class __TwigTemplate_33d023e0898f7f67786b4d56f88a7b724eae3a1a9862563e77b5c3b0b3f6ff53 extends Twig_Template
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
        echo "<link href=\"css/khuyenmai.css\" rel=\"stylesheet\">
<div class=\"white_bg box_sm\">
    <div class=\"container khuyenmai\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p>Nếu bạn là nhà cung cấp dịch vụ vận chuyển, nhấn vào <a>đây</a> để đăng tin khuyến mãi</p>
            </div>
            ";
        // line 12
        $this->env->loadTemplate("_promotion_find.html")->display($context);
        // line 13
        echo "        </div>
        <div class=\"row box_sm\">
            <div class=\"col-md-12\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Điểm đi</th>
                        <th>Điểm đến</th>
                        <th>Giá chưa giảm</th>
                        <th>Giá khuyến mại</th>
                        <th>Ngày kết thúc</th>
                        <th>Đặt xe</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>";
        // line 29
        $this->env->loadTemplate("_promotion_show.html")->display($context);
        echo "</tr>
                    <tr>";
        // line 30
        $this->env->loadTemplate("_promotion_show.html")->display($context);
        echo "</tr>
                    <tr>";
        // line 31
        $this->env->loadTemplate("_promotion_show.html")->display($context);
        echo "</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 39
    public function block_test($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "promotion.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  89 => 31,  85 => 30,  81 => 29,  63 => 13,  61 => 12,  52 => 5,  49 => 4,  44 => 3,  39 => 2,  11 => 1,);
    }
}
