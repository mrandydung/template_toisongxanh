<?php

/* Customers/_customer_activity.html */
class __TwigTemplate_644050a3a8aed646ad17819075b8fdb6b9a75d28fd97fecea987414a23c9d8ec extends Twig_Template
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
        echo "<!-- /Customers/_customer_activity.html -->
<div class=\"row box_2x\">
    <div class=\"col-md-12 text-center\">
        <p class=\"h3\">Các hoạt động xả thải</p>
        <table class=\"activity\">
            <tr>
                <td><div class=\"tivi\"></div></td>
                <td><div class=\"dieuhoa\"></div></td>
                <td><div class=\"dichuyen\"></div></td>
            </tr>
        </table>
    </div>
    <div class=\"col-md-offset-4 col-md-4\">
        <a href=\"balance.php\"><button class=\"btn btn_width btn_blue btn-lg\">Trung hòa khí thải</button></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Customers/_customer_activity.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
