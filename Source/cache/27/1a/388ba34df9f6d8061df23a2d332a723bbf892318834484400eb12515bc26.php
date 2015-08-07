<?php

/* _index_body_popular_place.html */
class __TwigTemplate_271a388ba34df9f6d8061df23a2d332a723bbf892318834484400eb12515bc26 extends Twig_Template
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
        echo "<div class=\"gray_bg box_lg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h3 style=\"text-align: center\">Tuyến đường phổ biến</h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4 box_md\">
                    ";
        // line 10
        $this->env->loadTemplate("_index_body_popular_place_item.html")->display($context);
        // line 11
        echo "                </div>
                <div class=\"col-md-4 col-sm-4 box_md\">
                    ";
        // line 13
        $this->env->loadTemplate("_index_body_popular_place_item.html")->display($context);
        // line 14
        echo "                </div>
                <div class=\"col-md-4 col-sm-4 box_md\">
                    ";
        // line 16
        $this->env->loadTemplate("_index_body_popular_place_item.html")->display($context);
        // line 17
        echo "                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "_index_body_popular_place.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  42 => 16,  38 => 14,  36 => 13,  32 => 11,  30 => 10,  19 => 1,);
    }
}
