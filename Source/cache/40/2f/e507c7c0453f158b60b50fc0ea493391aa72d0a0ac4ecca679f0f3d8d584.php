<?php

/* /Project/project.html */
class __TwigTemplate_402fe507c7c0453f158b60b50fc0ea493391aa72d0a0ac4ecca679f0f3d8d584 extends Twig_Template
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
        $this->env->loadTemplate("Project/_project_description.html")->display($context);
        // line 18
        echo "                ";
        $this->env->loadTemplate("Project/_project_part.html")->display($context);
        // line 19
        echo "            </div>
            <div class=\"col-md-4\">
                ";
        // line 21
        $this->env->loadTemplate("Project/_project_donator.html")->display($context);
        // line 22
        echo "                ";
        $this->env->loadTemplate("Project/_project_partner.html")->display($context);
        // line 23
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Project/project.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  72 => 22,  70 => 21,  66 => 19,  63 => 18,  61 => 17,  50 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
