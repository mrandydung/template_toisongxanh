<?php

/* Project/_part_id.html */
class __TwigTemplate_2fc24073443e9622d782fd1c401c63b07c86b7e2f04f13a1ca1689adf2787ab0 extends Twig_Template
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
