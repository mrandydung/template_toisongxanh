<?php

/* /Balance-step1/balance-step1.html */
class __TwigTemplate_80feb26cef20f75ae1e400ce03fe275d4fe268750545ca707389480bf4af3f36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("/Layout/layout.html");
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
        return "/Layout/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"/css/main.css\" rel=\"stylesheet\">
<link href=\"/css/balance.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_2x\">
    <div class=\"container\">
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p class=\"h3 blue_text\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trung hòa khí thải")), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <table class=\"step\">
                    <tbody>
                    <tr>
                        <td class=\"blue_bg\"><span class=\"h4\">1.</span><span>Tính toán lượng xả thải</span> </td>
                        <td class=\"red_bg\"><span class=\"h4\">2.</span><span>Chọn dự án tham gia</span> </td>
                        <td><span class=\"h4\">3.</span><span>Điền thông tin</span> </td>
                        <td><span class=\"h4\">4.</span><span>Thanh toán</span> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-offset-8 col-md-4\">
                <button class=\"btn_width round_btn btn_blue btn-lg\">Trung hòa khí thải</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Balance-step1/balance-step1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
