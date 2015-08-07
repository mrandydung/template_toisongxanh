<?php

/* province.html */
class __TwigTemplate_2695c7a25e7e4a729a91c72b22d5b264dec9575b2bc6b6d09a30bc48044d733a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("layout.html");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"/css/brand.css\" rel=\"stylesheet\">
<div class=\"white_bg box_md\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <h3>Tỉnh Bắc Giang</h3>
            </div>
        </div>
\t\t<div class=\"row box_sm\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h4 class=\"text-uppercase\">Các hãng taxi ở tỉnh Bắc Giang</h4>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 16
        $this->env->loadTemplate("_province_list_taxi.html")->display($context);
        // line 17
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 19
        $this->env->loadTemplate("_province_list_taxi.html")->display($context);
        // line 20
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 22
        $this->env->loadTemplate("_province_list_taxi.html")->display($context);
        // line 23
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t";
        // line 25
        $this->env->loadTemplate("_province_list_taxi.html")->display($context);
        // line 26
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"row box_xs\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h4 class=\"text-uppercase\">Giới thiệu về tỉnh Bắc Giang</h4>
\t\t\t\t<p><strong>Tiêu đề</strong></p>
\t\t\t\t<p class=\"province_content\">Bắc Giang là một tỉnh thuộc vùng đông bắc Việt Nam. Về quy hoạch kinh tế trước đây Bắc Giang nằm trong vùng trung du và miền núi phía bắc, từ năm 2012 là tỉnh nằm trong quy hoạch vùng thủ đô Hà Nội. Bắc Giang giáp với nhiều tỉnh thành, phía bắc giáp Lạng Sơn, phía đông giáp Quảng Ninh, phía tây giáp Thái Nguyên và Hà Nội, phía nam giáp Bắc Ninh và Hải Dương. Tỉnh lỵ là thành phố Bắc Giang, cách trung tâm thủ đô Hà Nội 51 km.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row box_xs\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h4 class=\"text-uppercase\">Điểm chú ý</h4>
\t\t\t\t<p><strong>Tiêu đề</strong></p>
\t\t\t\t<p class=\"province_content\">Bắc Giang là một tỉnh thuộc vùng đông bắc Việt Nam. Về quy hoạch kinh tế trước đây Bắc Giang nằm trong vùng trung du và miền núi phía bắc, từ năm 2012 là tỉnh nằm trong quy hoạch vùng thủ đô Hà Nội. Bắc Giang giáp với nhiều tỉnh thành, phía bắc giáp Lạng Sơn, phía đông giáp Quảng Ninh, phía tây giáp Thái Nguyên và Hà Nội, phía nam giáp Bắc Ninh và Hải Dương. Tỉnh lỵ là thành phố Bắc Giang, cách trung tâm thủ đô Hà Nội 51 km.</p>
\t\t\t\t<br/>
\t\t\t\t<p><strong>Tiêu đề</strong></p>
\t\t\t\t<p class=\"province_content\">Bắc Giang là một tỉnh thuộc vùng đông bắc Việt Nam. Về quy hoạch kinh tế trước đây Bắc Giang nằm trong vùng trung du và miền núi phía bắc, từ năm 2012 là tỉnh nằm trong quy hoạch vùng thủ đô Hà Nội. Bắc Giang giáp với nhiều tỉnh thành, phía bắc giáp Lạng Sơn, phía đông giáp Quảng Ninh, phía tây giáp Thái Nguyên và Hà Nội, phía nam giáp Bắc Ninh và Hải Dương. Tỉnh lỵ là thành phố Bắc Giang, cách trung tâm thủ đô Hà Nội 51 km.</p>
\t\t\t</div>
\t\t</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "province.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  72 => 25,  68 => 23,  66 => 22,  62 => 20,  60 => 19,  56 => 17,  54 => 16,  39 => 3,  36 => 2,  11 => 1,);
    }
}
