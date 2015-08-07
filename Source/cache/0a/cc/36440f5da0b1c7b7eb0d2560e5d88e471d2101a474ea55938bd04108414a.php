<?php

/* _booking_step.html */
class __TwigTemplate_0acc36440f5da0b1c7b7eb0d2560e5d88e471d2101a474ea55938bd04108414a extends Twig_Template
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
        echo "<div class=\"white_bg box_md\">
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<table class=\"progress_bar\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"active-old\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đặt xe taxi")), "html", null, true);
        echo " </td>
\t\t\t\t\t\t<td class=\"active\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điền thông tin cá nhân")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td class=\"\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hoàn tất")), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
