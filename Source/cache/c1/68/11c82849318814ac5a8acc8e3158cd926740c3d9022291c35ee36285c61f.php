<?php

/* Balance/_balance_step1.html */
class __TwigTemplate_c16811c82849318814ac5a8acc8e3158cd926740c3d9022291c35ee36285c61f extends Twig_Template
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
        echo "<!-- /Balance/_balance_step1.html -->
<div class=\"body_balance box_1x\">
    ";
        // line 3
        $this->env->loadTemplate("Balance/_balance_step1_user.html")->display($context);
        // line 4
        echo "    ";
        $this->env->loadTemplate("Balance/_balance_step1_activity.html")->display($context);
        // line 5
        echo "    <div id=\"show_kind1\">
        ";
        // line 6
        $this->env->loadTemplate("Balance/_balance_step1_kind.html")->display($context);
        // line 7
        echo "        ";
        $this->env->loadTemplate("Balance/_balance_step1_data.html")->display($context);
        // line 8
        echo "    </div>
    <div id=\"show_kind2\">
        ";
        // line 10
        $this->env->loadTemplate("Balance/_balance_step1_kind2.html")->display($context);
        // line 11
        echo "    </div>
    <div id=\"show_kind3\">
        ";
        // line 13
        $this->env->loadTemplate("Balance/_balance_step1_kind3.html")->display($context);
        // line 14
        echo "    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-12 text-center\">
            <h4 class=\"blue_text text-uppercase\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Lượng khí thải thoát ra môi trường là:")), "html", null, true);
        echo "</strong></h4>
        </div>
    </div>
    <div class=\"row box_1x\">
        <div class=\"col-md-offset-4 col-md-4\">
            <a><button class=\"btn_width round_btn btn_blue btn-lg\">";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Trung hòa khí thải")), "html", null, true);
        echo "</button></a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Balance/_balance_step1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  53 => 17,  48 => 14,  46 => 13,  42 => 11,  40 => 10,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
