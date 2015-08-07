<?php

/* /Donate/donate.html */
class __TwigTemplate_af31ba8dc0cd98b096b7b16fcc2ca487ad27869e517212737003c0f8a9c10f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("Layout/layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layout/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"css/donate.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_3x\">
    <div class=\"container\">
        <div class=\"row box_2x\">
            <div class=\"col-md-12 text-center\">
                <p class=\"h2 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tham gia tài trợ")), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"row box_2x\">
            <div class=\"col-md-12\">
                <p class=\"h4 text-uppercase\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi là")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-2\">
                <label><input type=\"radio\" name=\"user\"/>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Cá nhân")), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-md-2\">
                <label><input type=\"radio\" name=\"user\"/>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(" Tổ chức")), "html", null, true);
        echo "</label>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p class=\"h4 text-uppercase\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hình thức tài trợ")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-4\">
                <select class=\"form-control\">
                    <option>Tài trợ tiền</option>
                    <option>Hình thức khác</option>
                </select>
            </div>
        </div>
        <div id=\"donate_money\">
            <div class=\"row box_2x\">
                <div class=\"col-md-12\">
                    <p class=\"h4 text-uppercase\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Chọn số tiền Tài trợ:")), "html", null, true);
        echo "</p>
                </div>
                ";
        // line 38
        $this->env->loadTemplate("Layout/_layout_select_money.html")->display($context);
        // line 39
        echo "            </div>
            <div class=\"row box_2x customer_info\">
                <div class=\"col-md-12\">
                    <p class=\"h4 text-uppercase\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin người tài trợ")), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 45
        $this->env->loadTemplate("Layout/_customer_info.html")->display($context);
        // line 46
        echo "                    ";
        $this->env->loadTemplate("Layout/_customer_creataccount.html")->display($context);
        // line 47
        echo "                </div>
                <div class=\"col-md-12\">
                    <div class=\"row padding_top\">
                        <div class=\"col-md-offset-2 col-md-10\">
                            <label>
                                <input type=\"checkbox\"> Tôi muốn nhận giấy chứng nhận tài trợ
                            </label>
                        </div>
                    </div>
                    <div class=\"row padding_top\">
                        <div class=\"col-md-offset-2 col-md-10\">
                            <label>
                                <input type=\"checkbox\" id=\"gift\"> Tôi muốn tặng giấy nhận tài trợ cho người khác
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6\" id=\"show_gift\">
                        ";
        // line 64
        $this->env->loadTemplate("Layout/_customer_info.html")->display($context);
        // line 65
        echo "                    </div>
                </div>
            </div>
            <div class=\"row box_2x\">
                ";
        // line 69
        $this->env->loadTemplate("Layout/_layout_paymethod.html")->display($context);
        // line 70
        echo "            </div>
        </div>
        <div id=\"donate_other\">
            <div class=\"row box_2x\">
                <div class=\"col-md-12\">
                    <p class=\"h4 text-uppercase\">";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mô tả")), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-12\">
                    <textarea class=\"form-control\" rows=\"3\"></textarea>
                </div>
            </div>
            <div class=\"row box_2x\">
                <div class=\"col-md-12\">
                    <p class=\"h4 text-uppercase\">";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin người tài trợ")), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-6\">
                    ";
        // line 86
        $this->env->loadTemplate("Layout/_customer_info.html")->display($context);
        // line 87
        echo "                    ";
        $this->env->loadTemplate("Layout/_customer_creataccount.html")->display($context);
        // line 88
        echo "                </div>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-offset-4 col-md-4\">
                <a href=\"balance-step4.php\"><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thanh toán")), "html", null, true);
        echo "</button></a>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "/Donate/donate.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 93,  170 => 88,  167 => 87,  165 => 86,  159 => 83,  148 => 75,  141 => 70,  139 => 69,  133 => 65,  131 => 64,  112 => 47,  109 => 46,  107 => 45,  101 => 42,  96 => 39,  94 => 38,  89 => 36,  74 => 24,  66 => 19,  60 => 16,  54 => 13,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
