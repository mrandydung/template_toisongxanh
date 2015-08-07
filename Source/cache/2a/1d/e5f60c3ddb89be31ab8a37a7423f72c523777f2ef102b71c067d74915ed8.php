<?php

/* Project/_project_description.html */
class __TwigTemplate_2a1de5f60c3ddb89be31ab8a37a7423f72c523777f2ef102b71c067d74915ed8 extends Twig_Template
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
        echo "<!-- Project/_project_description.html -->
<div class=\"box_1x\">
    <p class=\"h4\"><strong><span class=\"title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Giới thiệu")), "html", null, true);
        echo "</span></strong></p>
</div>
";
        // line 5
        $this->env->loadTemplate("Project/_project_slide.html")->display($context);
        // line 6
        echo "        <div class=\"box_1x\">
            ";
        // line 7
        $this->env->loadTemplate("Project/_project_info.html")->display($context);
        // line 8
        echo "        </div>
        <div class=\"box_1x\">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>";
    }

    public function getTemplateName()
    {
        return "Project/_project_description.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
