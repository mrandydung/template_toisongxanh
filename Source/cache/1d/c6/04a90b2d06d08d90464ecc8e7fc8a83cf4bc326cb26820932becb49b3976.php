<?php

/* /Project/id.html */
class __TwigTemplate_1dc604a90b2d06d08d90464ecc8e7fc8a83cf4bc326cb26820932becb49b3976 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"css/main.css\" rel=\"stylesheet\">
<link href=\"css/project.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_3x project_title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"h3 blue_text text-uppercase\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trồng cây gây rừng")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-12 box_1x\">
                <p><a href=\"account-transaction.php\"><span class=\"avatar_user\"><img src=\"img/avatar.jpg\"></span>Công Văn Quang</a></p>
            </div>
            <div class=\"col-md-3 box_1x\">
                <a><div class=\"project-child\">
                    <img src=\"img/tree.jpg\" width=\"100%\">
                    <p class=\"padding_top\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("12/6/2015")), "html", null, true);
        echo "</strong></p>
                </div></a>
            </div>
            <div class=\"col-md-3 box_1x\">
                <a><div class=\"project-child\">
                    <img src=\"img/tree.jpg\" width=\"100%\">
                    <p class=\"padding_top\"><strong>";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("12/1/2015")), "html", null, true);
        echo "</strong></p>
                </div></a>
            </div>
            <div class=\"col-md-3 box_1x\">
                <a><div class=\"project-child\">
                    <img src=\"img/tree.jpg\" width=\"100%\">
                    <p class=\"padding_top\"><strong>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("12/6/2014")), "html", null, true);
        echo "</strong></p>
                </div></a>
            </div>
            <div class=\"col-md-3 box_1x\">
                <a><div class=\"project-child\">
                    <img src=\"img/tree.jpg\" width=\"100%\">
                    <p class=\"padding_top\"><strong>";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("12/1/2014")), "html", null, true);
        echo "</strong></p>
                </div></a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Project/id.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  76 => 30,  67 => 24,  58 => 18,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
