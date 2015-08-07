<?php

/* Balance/_balance_step2_service.html */
class __TwigTemplate_e4bfac65560b5778534479ce70cb4fff054bad1da8d87133209e414cdbecd9b9 extends Twig_Template
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
        echo "<!-- /Balance/_balance_step2_service.html -->
<div class=\"col-md-3 col-sm-6 box_1x text-center\">
    <label class=\"balance_choose\" name=\"balance_form[service]\">
        <a href=\"project.php\" target=\"_blank\"><div class=\"service\">
            <img src=\"../../img/tree.jpg\" width=\"100%\">
            <p class=\"h5 box_1x\"><a href=\"#\"><strong>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trồng cây gây rừng")), "html", null, true);
        echo "</strong></a></p>
        </div></a>
        <input type=\"radio\" name=\"booking_form[service]\">
    </label>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step2_service.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
