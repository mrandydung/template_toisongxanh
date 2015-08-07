<?php

/* /Project/all-donator.html */
class __TwigTemplate_b80c61477d596b1920f8e184b11f3d05046a1643f7978881e442697c433e1c45 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"/css/project.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_3x project_title\">
    <div class=\"container\">
        <div class=\"row box_1x\">
            <div class=\"col-md-12 box_1x\">
                <p class=\"h3 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Danh sách những người đóng góp")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-12 padding_top\">
                <p class=\"h4 text-uppercase red_text\">Công Văn Quang</p>
                <p class=\"h5\">500.000 Đ</p>
                <hr/>
                <p class=\"h4 text-uppercase red_text\">Công Văn Quang</p>
                <p class=\"h5\">500.000 Đ</p>
                <hr/>
                <p class=\"h4 text-uppercase red_text\">Công Văn Quang</p>
                <p class=\"h5\">500.000 Đ</p>
                <hr/>
                <p class=\"h4 text-uppercase red_text\">Công Văn Quang</p>
                <p class=\"h5\">500.000 Đ</p>
                <hr/>
                <p class=\"h4 text-uppercase red_text\">Công Văn Quang</p>
                <p class=\"h5\">500.000 Đ</p>
                <hr/>
            </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Project/all-donator.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
