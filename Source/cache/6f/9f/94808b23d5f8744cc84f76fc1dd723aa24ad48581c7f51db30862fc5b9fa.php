<?php

/* _booking_step1_selected_taxi.html */
class __TwigTemplate_6f9f94808b23d5f8744cc84f76fc1dd723aa24ad48581c7f51db30862fc5b9fa extends Twig_Template
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
        echo "<div class=\"row padding_top\">
\t<div class=\"col-md-12 showxe_tab\">
\t\t<ul class=\"nav nav-tabs showxe_tab\">
\t\t\t<li class=\" active\"><a href=\"#dichung\" data-toggle=\"tab\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đi chung")), "html", null, true);
        echo "</a></li>
\t\t\t<li><a href=\"#dirieng\" data-toggle=\"tab\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đi riêng")), "html", null, true);
        echo "</a></li>
\t\t</ul>
\t\t<div class=\"tab-content\">
\t\t\t<div id=\"dichung\" class=\"tab-pane active\">
\t\t\t\t";
        // line 9
        $this->env->loadTemplate("_booking_step1_selected_taxi_table.html")->display($context);
        // line 10
        echo "\t\t\t</div>
\t\t\t<div id=\"dirieng\" class=\"tab-pane\">
\t\t\t\t";
        // line 12
        $this->env->loadTemplate("_booking_step1_selected_taxi_table.html")->display($context);
        // line 13
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_selected_taxi.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  41 => 12,  37 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
