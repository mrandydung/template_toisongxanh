<?php

/* Project/_list_project.html */
class __TwigTemplate_76401c5dc50761e963fc6608eef29e9235165369e18f83f7dc9e187f903def0a extends Twig_Template
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
        echo "
<div class=\"project\">
    <div class=\"project_show\">
        <img src=\"http://placehold.it/600x400\" width=\"100%\"/>
        <div class=\"title\">
            <p class=\"text-uppercase\"><strong>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trồng cây")), "html", null, true);
        echo "</strong></p>
        </div>
    </div>
    <a href=\"project.php\"><button class=\"btn btn_white btn-md round_btn seemore_btn\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xem thêm")), "html", null, true);
        echo "</button></a>
</div>";
    }

    public function getTemplateName()
    {
        return "Project/_list_project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  26 => 6,  19 => 1,);
    }
}