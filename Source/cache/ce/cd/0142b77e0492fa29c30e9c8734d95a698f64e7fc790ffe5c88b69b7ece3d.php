<?php

/* _booking_step1_selected_taxi_table.html */
class __TwigTemplate_cecd0142b77e0492fa29c30e9c8734d95a698f64e7fc790ffe5c88b69b7ece3d extends Twig_Template
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
        echo "<div class=\"table-responsive\">
\t<table class=\"table table-hover showxe\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Hãng</th>
\t\t\t\t<th class=\"hidden-xs\">Loại xe</th>
\t\t\t\t<th>Đánh giá</th>
\t\t\t\t<th>Số lượng</th>
\t\t\t\t<th class=\"hidden-xs\">Đơn giá</th>
\t\t\t\t<th>Thành tiền</th>
\t\t\t\t<th width=\"70px\"></th>
\t\t\t</tr>
\t\t</thead>
\t<tbody>
\t<tr>
\t\t";
        // line 16
        $this->env->loadTemplate("_booking_step1_selected_taxi_table_show_taxi.html")->display($context);
        // line 17
        echo "\t</tr>
\t<tr>
\t\t";
        // line 19
        $this->env->loadTemplate("_booking_step1_selected_taxi_table_show_taxi.html")->display($context);
        // line 20
        echo "\t</tr>
\t</tbody>
</table>
</div>";
    }

    public function getTemplateName()
    {
        return "_booking_step1_selected_taxi_table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 20,  42 => 19,  38 => 17,  36 => 16,  19 => 1,);
    }
}
