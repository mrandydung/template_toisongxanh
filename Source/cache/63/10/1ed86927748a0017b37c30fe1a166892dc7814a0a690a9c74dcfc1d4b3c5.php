<?php

/* brand_info_rating.html */
class __TwigTemplate_63101ed86927748a0017b37c30fe1a166892dc7814a0a690a9c74dcfc1d4b3c5 extends Twig_Template
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
<link rel=\"stylesheet\" href=\"/css/galleriffic-2.css\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"/js/jquery-1.3.2.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery.galleriffic.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery.opacityrollover.js\"></script>
<!-- We only want the thunbnails to display when javascript is disabled -->
<script type=\"text/javascript\">
\tdocument.write('<style>.noscript { display: none; }</style>');
</script>
<div class=\"white_bg box_md\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <h3>Thông tin hãng xe</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                <div class=\"brand-menu\">
\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#intro\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Giới thiệu</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#images\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Hình ảnh</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#rating\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Đánh giá</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#term\" aria-controls=\"settings\" role=\"tab\" data-toggle=\"tab\">Chính sách</a></li>
\t\t\t\t    </ul>
                </div>
\t\t\t\t<!-- Tab panes -->
\t\t\t\t  <div class=\"tab-content\">
\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"intro\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row box_sm\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t";
        // line 34
        $this->env->loadTemplate("_brand_info_intro_content.html")->display($context);
        // line 35
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"images\">
\t\t\t\t\t\t<div class=\"row box_sm\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t";
        // line 41
        $this->env->loadTemplate("_brand_info_images_content.html")->display($context);
        // line 42
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"rating\">
\t\t\t\t\t\t<div class=\"row box_sm\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 48
        $this->env->loadTemplate("_brand_info_rating_brand.html")->display($context);
        // line 49
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 51
        $this->env->loadTemplate("_brand_info_rating_rating.html")->display($context);
        // line 52
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row box_sm\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"rated_title\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-uppercase\">Bài viết</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 59
        $this->env->loadTemplate("_brand_info_rating_rated.html")->display($context);
        // line 60
        echo "\t\t\t\t\t\t\t\t";
        $this->env->loadTemplate("_brand_info_rating_rated.html")->display($context);
        // line 61
        echo "\t\t\t\t\t\t\t\t";
        $this->env->loadTemplate("_brand_info_rating_rated.html")->display($context);
        // line 62
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"term\">
\t\t\t\t\t\t<div class=\"row box_sm\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t";
        // line 68
        $this->env->loadTemplate("_brand_info_intro_content.html")->display($context);
        // line 69
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "brand_info_rating.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 69,  125 => 68,  117 => 62,  114 => 61,  111 => 60,  109 => 59,  100 => 52,  98 => 51,  94 => 49,  92 => 48,  84 => 42,  82 => 41,  74 => 35,  72 => 34,  39 => 3,  36 => 2,  11 => 1,);
    }
}
