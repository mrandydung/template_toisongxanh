<?php

/* Project/_part_id.html */
class __TwigTemplate_e60c9755846ce8138f24780805b7a83bdbf4d8c02c38fb8c5ff78e552c0bc2be extends Twig_Template
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
        echo "<!-- /Project/_part_id.html -->
<div class=\"col-md-4 box_1x\">
    <a href=\"id.php\"><div class=\"project-child\">
        <img src=\"img/tree.jpg\" width=\"100%\">
        <p class=\"padding_top\"><strong>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("1256")), "html", null, true);
        echo "</strong></p>
    </div></a>
</div>";
    }

    public function getTemplateName()
    {
        return "Project/_part_id.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
