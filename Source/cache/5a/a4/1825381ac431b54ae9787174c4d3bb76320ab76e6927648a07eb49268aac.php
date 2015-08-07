<?php

/* /Balance/balance_2.html */
class __TwigTemplate_5aa41825381ac431b54ae9787174c4d3bb76320ab76e6927648a07eb49268aac extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<link href=\"css/balance.css\" rel=\"stylesheet\">
    <div class=\"gray_bg box_2x\">
        <div class=\"container\">
            <div class=\"row box_1x\">
                <div class=\"col-md-12 text-center\">
                    <p class=\"h2 blue_text text-uppercase\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trung hòa khí thải")), "html", null, true);
        echo "</p>
                </div>
            </div>

            ";
        // line 13
        $this->env->loadTemplate("Balance/_balance_2_step1.html")->display($context);
        // line 14
        echo "            ";
        $this->env->loadTemplate("Balance/_balance_2_step3.html")->display($context);
        // line 15
        echo "            ";
        $this->env->loadTemplate("Balance/_balance_step4.html")->display($context);
        // line 16
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/Balance/balance_2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  55 => 14,  53 => 13,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
