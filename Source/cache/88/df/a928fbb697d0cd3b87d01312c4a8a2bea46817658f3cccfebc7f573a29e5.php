<?php

/* _brand_detail_modal.html */
class __TwigTemplate_88dfa928fbb697d0cd3b87d01312c4a8a2bea46817658f3cccfebc7f573a29e5 extends Twig_Template
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
        echo "<!--_brand_detail_modal.html-->
<div class=\"modal fade\" id=\"brand_detail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Hãng xe Mai Linh</h4>
      </div>
      <div class=\"modal-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div role=\"tabpanel\">

\t\t\t\t\t  <!-- Nav tabs -->
\t\t\t\t\t  <ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#intro\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Giới thiệu</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#picture\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\">Hình ảnh</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#rating\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Đánh giá</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a href=\"#term\" aria-controls=\"settings\" role=\"tab\" data-toggle=\"tab\">Chính sách</a></li>
\t\t\t\t\t  </ul>

\t\t\t\t\t  <!-- Tab panes -->
\t\t\t\t\t  <div class=\"tab-content\">
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"intro\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t\t\t\t\t\t";
        // line 27
        $this->env->loadTemplate("_brand_info_intro_content.html")->display($context);
        // line 28
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"picture\">...</div>
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"rating\">
\t\t\t\t\t\t\t<div class=\"row box_sm\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t";
        // line 35
        $this->env->loadTemplate("_brand_info_rating_brand.html")->display($context);
        // line 36
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        $this->env->loadTemplate("_brand_info_rating_rating.html")->display($context);
        // line 39
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row box_sm\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"rated_title\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-uppercase\">Bài viết</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 46
        $this->env->loadTemplate("_brand_info_rating_rated.html")->display($context);
        // line 47
        echo "\t\t\t\t\t\t\t\t\t";
        $this->env->loadTemplate("_brand_info_rating_rated.html")->display($context);
        // line 48
        echo "\t\t\t\t\t\t\t\t\t";
        $this->env->loadTemplate("_brand_info_rating_rated.html")->display($context);
        // line 49
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"term\">...</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
      </div>
      <div class=\"modal-footer\">
        <div class=\"row\">
\t\t\t<div class=\"col-md-offset-10 col-md-2\">
\t\t\t\t<button type=\"button\" class=\"btn btn_blue\">Đóng</button>
\t\t\t</div>
\t\t</div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_brand_detail_modal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 49,  80 => 48,  77 => 47,  75 => 46,  66 => 39,  64 => 38,  60 => 36,  58 => 35,  49 => 28,  47 => 27,  19 => 1,);
    }
}
