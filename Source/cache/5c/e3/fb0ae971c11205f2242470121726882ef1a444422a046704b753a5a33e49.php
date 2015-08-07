<?php

/* /Index/_index_parter.html */
class __TwigTemplate_5ce3fb0ae971c11205f2242470121726882ef1a444422a046704b753a5a33e49 extends Twig_Template
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
        echo "<!-- /Index/_index_parter.html -->
<div class=\"gray_bg box_2x parter\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p class=\"h1\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Đối tác")), "html", null, true);
        echo "</p>
                <ul>
                    <li><img src=\"img/parter/vietherb.png\"></li>
                    <li><img src=\"img/parter/vietherb.png\"></li>
                    <li><img src=\"img/parter/vietherb.png\"></li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Index/_index_parter.html";
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
