<?php

/* Layout/_layout_select_money.html */
class __TwigTemplate_48367063ba4a3db897ffb655f84e9b24cd70b22852f15d9562d4373f73b5bf1f extends Twig_Template
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
        echo "<div class=\"col-md-12\">
    <div class=\"row\">
        <div class=\"col-md-12 select_money\">
            <label><input type=\"radio\" name=\"donation_money\"/> 350.000 VNĐ</label>
            <label><input type=\"radio\" name=\"donation_money\"/> 200.000 VNĐ</label>
            <label><input type=\"radio\" name=\"donation_money\"/> 100.000 VNĐ</label>
            <label><input type=\"radio\" name=\"donation_money\"/> 50.000 VNĐ</label>
            <label><input type=\"radio\" name=\"donation_money\"/> 30.000 VNĐ</label>
        </div>
        <div class=\"col-md-2\">
            <label><input type=\"radio\" name=\"donation_money\"/> Số khác</label>
        </div>
        <div class=\"col-md-4\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Nhập số tiền\">
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\">VNĐ</button>
                    </span>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Layout/_layout_select_money.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
