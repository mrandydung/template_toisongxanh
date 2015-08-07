<?php

/* _booking_step1_name_banner.html */
class __TwigTemplate_6b253bd34010d38b56c14a1270b49b540c9464f1015fb40baafaace25d91f5ed extends Twig_Template
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
        echo "<div class=\"row\">
            <div class=\"col-md-4\">
                <label for=\"name_banner\">
\t\t\t\t\t<input type=\"checkbox\" id=\"name_banner\"/> ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi muốn đón bằng biển tên")), "html", null, true);
        echo "
\t\t\t\t</label>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_name_banner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
