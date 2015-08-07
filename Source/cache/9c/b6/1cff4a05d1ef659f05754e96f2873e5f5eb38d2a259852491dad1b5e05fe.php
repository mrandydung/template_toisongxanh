<?php

/* Donate/_all-donator_donator.html */
class __TwigTemplate_9cb61cff4a05d1ef659f05754e96f2873e5f5eb38d2a259852491dad1b5e05fe extends Twig_Template
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
    <div class=\"col-md-1 col-sm-1 col-xs-2\">
        <img src=\"img/avatar.jpg\" class=\"img-rounded\" width=\"100%\">
    </div>
    <div class=\"col-md-11 col-sm-11 col-xs-10 donator_info\">
        <p><a href=\"id.php\" class=\"h4 text-uppercase red_text\">Công Văn Quang</a></p>
        <p><small><span class=\"location\"></span> Hà Nội</small></p>
        <p class=\"h5\"><span class=\"money\"></span> 500.000 Đ</p>
    </div>
</div>
<hr/>";
    }

    public function getTemplateName()
    {
        return "Donate/_all-donator_donator.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
