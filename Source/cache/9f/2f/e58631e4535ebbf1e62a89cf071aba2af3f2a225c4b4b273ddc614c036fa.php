<?php

/* /Balance/thank-you.html */
class __TwigTemplate_9f2fe58631e4535ebbf1e62a89cf071aba2af3f2a225c4b4b273ddc614c036fa extends Twig_Template
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
        <div class=\"row box_5x\">
            <div class=\"col-md-12 text-center\">
                <p class=\"h2 blue_text text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cảm ơn bạn đã sử dụng dịch vụ")), "html", null, true);
        echo "</p>
                <p class=\"box_2x\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class=\"col-md-offset-4 col-md-4\">
                <a href=\"account-transaction.php\"><button class=\"btn btn_width btn_blue btn-lg\">Quản lý giao dịch</button></a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Balance/thank-you.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
