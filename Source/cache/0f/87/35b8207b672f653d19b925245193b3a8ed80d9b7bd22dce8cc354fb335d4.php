<?php

/* /Balance/balance.html */
class __TwigTemplate_0f8735b8207b672f653d19b925245193b3a8ed80d9b7bd22dce8cc354fb335d4 extends Twig_Template
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
        echo "<link href=\"css/balance.css\" rel=\"stylesheet\">
    <div class=\"gray_bg box_2x\">
        <div class=\"container\">
            <div class=\"row box_1x\">
                <div class=\"col-md-12 text-center\">
                    <p class=\"h2 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trung hòa khí thải")), "html", null, true);
        echo "</p>
                </div>
            </div>
            ";
        // line 11
        $this->env->loadTemplate("Balance/_balance_step1.html")->display($context);
        // line 12
        echo "            ";
        $this->env->loadTemplate("Balance/_balance_step2.html")->display($context);
        // line 13
        echo "            ";
        $this->env->loadTemplate("Balance/_balance_step4.html")->display($context);
        // line 14
        echo "            ";
        $this->env->loadTemplate("Balance/_balance_step3.html")->display($context);
        // line 15
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/Balance/balance.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
