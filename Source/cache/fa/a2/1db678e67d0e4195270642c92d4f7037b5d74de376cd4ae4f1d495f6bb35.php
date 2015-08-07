<?php

/* /Customers/customer.html */
class __TwigTemplate_faa21db678e67d0e4195270642c92d4f7037b5d74de376cd4ae4f1d495f6bb35 extends Twig_Template
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
        echo "<link href=\"css/customer.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_2x\">
    <div class=\"container\">
        <div class=\"row box_2x\">
            <div class=\"col-md-12 text-center\">
                <p class=\"h2 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tiêu đề")), "html", null, true);
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
        ";
        // line 15
        $this->env->loadTemplate("Customers/_customer_activity.html")->display($context);
        // line 16
        echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <hr/>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center box_2x\">
                <p class=\"h3\"><a href=\"list-story.php\">Câu chuyện sống xanh</a></p>
            </div>
            <div class=\"col-md-4 box_1x\">
                ";
        // line 26
        $this->env->loadTemplate("Customers/_customer_testimonal.html")->display($context);
        // line 27
        echo "            </div>
            <div class=\"col-md-4 box_1x\">
                ";
        // line 29
        $this->env->loadTemplate("Customers/_customer_testimonal.html")->display($context);
        // line 30
        echo "            </div>
            <div class=\"col-md-4 box_1x\">
                ";
        // line 32
        $this->env->loadTemplate("Customers/_customer_testimonal.html")->display($context);
        // line 33
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Customers/customer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  86 => 32,  82 => 30,  80 => 29,  76 => 27,  74 => 26,  62 => 16,  60 => 15,  55 => 12,  50 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
