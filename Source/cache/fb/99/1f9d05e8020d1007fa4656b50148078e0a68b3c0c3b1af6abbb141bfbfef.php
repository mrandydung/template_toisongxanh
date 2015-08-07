<?php

/* /Donate/all-donator.html */
class __TwigTemplate_fb991f9d05e8020d1007fa4656b50148078e0a68b3c0c3b1af6abbb141bfbfef extends Twig_Template
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
        echo "<link href=\"/css/donate.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_3x project_title\">
    <div class=\"container\">
        <div class=\"row box_1x\">
            <div class=\"col-md-12 box_1x\">
                <p class=\"h3 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Danh sách những người đóng góp")), "html", null, true);
        echo "</p>
                <p>135 người đóng góp</p>
            </div>
            <div class=\"col-md-12\">
                ";
        // line 12
        $this->env->loadTemplate("Donate/_all-donator_donator.html")->display($context);
        // line 13
        echo "            </div>
            <div class=\"col-md-12\">
                ";
        // line 15
        $this->env->loadTemplate("Donate/_all-donator_donator.html")->display($context);
        // line 16
        echo "            </div>
            <div class=\"col-md-12\">
                ";
        // line 18
        $this->env->loadTemplate("Donate/_all-donator_donator.html")->display($context);
        // line 19
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Donate/all-donator.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  65 => 18,  61 => 16,  59 => 15,  55 => 13,  53 => 12,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
