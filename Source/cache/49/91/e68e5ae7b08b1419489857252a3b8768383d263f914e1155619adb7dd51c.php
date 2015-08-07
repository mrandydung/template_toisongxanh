<?php

/* Project/_project_partner.html */
class __TwigTemplate_4991e68e5ae7b08b1419489857252a3b8768383d263f914e1155619adb7dd51c extends Twig_Template
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
        echo "<div class=\"partner\">
    <p class=\"h4 box_1x\"><strong><span class=\"title\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tài trợ")), "html", null, true);
        echo "</span></strong></p>
    <div class=\"row box_1x\">
        <div class=\"col-md-4 col-sm-4 col-xs-4\">
            <img src=\"http://placehold.it/57x57\">
        </div>
        <div class=\"col-md-8 col-sm-8 col-xs-8\">
            <p class=\"text-uppercase\">Vietherb</p>
        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-4 col-sm-4 col-xs-4\">
            <img src=\"http://placehold.it/57x57\">
        </div>
        <div class=\"col-md-8 col-sm-8 col-xs-8\">
            <p class=\"text-uppercase\">Vietherb</p>
        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-4 col-sm-4 col-xs-4\">
            <img src=\"http://placehold.it/57x57\">
        </div>
        <div class=\"col-md-8 col-sm-8 col-xs-8\">
            <p class=\"text-uppercase\">Vietherb</p>
        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-4 col-sm-4 col-xs-4\">
            <img src=\"http://placehold.it/57x57\">
        </div>
        <div class=\"col-md-8 col-sm-8 col-xs-8\">
            <p class=\"text-uppercase\">Vietherb</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Project/_project_partner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
