<?php

/* /Project/list.html */
class __TwigTemplate_bccbdbc968b86192dd6b21076b8895306a9cbb9f2c432694b9dd525755b20414 extends Twig_Template
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
        echo "<link href=\"css/project.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_3x\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p class=\"h3 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Các dự án")), "html", null, true);
        echo "</p>
                <p class=\"box_1x\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum")), "html", null, true);
        // line 12
        echo "</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-offset-9 col-md-3\">
                <select class=\"form-control\">
                    <option>Phân loại 1</option>
                    <option>Phân loại 2</option>
                    <option>Phân loại 3</option>
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 box_2x\">
                ";
        // line 26
        $this->env->loadTemplate("Project/_list_project.html")->display($context);
        // line 27
        echo "            </div>
            <div class=\"col-md-4 box_2x\">
                ";
        // line 29
        $this->env->loadTemplate("Project/_list_project.html")->display($context);
        // line 30
        echo "            </div>
            <div class=\"col-md-4 box_2x\">
                ";
        // line 32
        $this->env->loadTemplate("Project/_list_project.html")->display($context);
        // line 33
        echo "            </div>
            <div class=\"col-md-4 box_2x\">
                ";
        // line 35
        $this->env->loadTemplate("Project/_list_project.html")->display($context);
        // line 36
        echo "            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Project/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  89 => 35,  85 => 33,  83 => 32,  79 => 30,  77 => 29,  73 => 27,  71 => 26,  55 => 12,  50 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
