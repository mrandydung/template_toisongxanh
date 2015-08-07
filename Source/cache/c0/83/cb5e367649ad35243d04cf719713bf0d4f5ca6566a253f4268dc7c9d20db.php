<?php

/* Project/_part_image.html */
class __TwigTemplate_c083cb5e367649ad35243d04cf719713bf0d4f5ca6566a253f4268dc7c9d20db extends Twig_Template
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
        echo "<!-- /Project/_part_image.html -->
<p class=\"h4\"><strong><span class=\"title\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hình ảnh cập nhật")), "html", null, true);
        echo "</span></strong></p>
<div class=\"row\">
    <div class=\"col-md-4 box_1x\">
        <a><div class=\"project-child\">
            <img src=\"img/tree.jpg\" width=\"100%\">
            <p class=\"padding_top\"><strong>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("12/07/2015")), "html", null, true);
        echo "</strong></p>
        </div></a>
    </div>
    <div class=\"col-md-4 box_1x\">
        <a><div class=\"project-child\">
            <img src=\"img/tree.jpg\" width=\"100%\">
            <p class=\"padding_top\"><strong>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("12/07/2015")), "html", null, true);
        echo "</strong></p>
        </div></a>
    </div>
    <div class=\"col-md-4 box_1x\">
        <a><div class=\"project-child\">
            <img src=\"img/tree.jpg\" width=\"100%\">
            <p class=\"padding_top\"><strong>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("12/07/2015")), "html", null, true);
        echo "</strong></p>
        </div></a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Project/_part_image.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  39 => 13,  30 => 7,  22 => 2,  19 => 1,);
    }
}
