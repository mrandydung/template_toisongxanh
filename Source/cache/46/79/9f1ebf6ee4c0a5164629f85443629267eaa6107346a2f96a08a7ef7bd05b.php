<?php

/* /Project/part.html */
class __TwigTemplate_46799f1ebf6ee4c0a5164629f85443629267eaa6107346a2f96a08a7ef7bd05b extends Twig_Template
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
<div class=\"gray_bg box_3x project_title\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <p class=\"h3 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trồng cây gây rừng")), "html", null, true);
        echo "</p>
                <p><a>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Dự án")), "html", null, true);
        echo "</a> > <a>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đợt 1")), "html", null, true);
        echo "</a></p>
            </div>
            <div class=\"col-md-4\">
                <a href=\"donate.php\"><button class=\"btn btn-lg btn_width btn_blue\">Đóng góp</button></a>
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-8\">
                ";
        // line 17
        $this->env->loadTemplate("Project/_part_description.html")->display($context);
        // line 18
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 20
        $this->env->loadTemplate("Project/_project_donator.html")->display($context);
        // line 21
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Project/part.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  69 => 20,  65 => 18,  63 => 17,  50 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
