<?php

/* widget.html */
class __TwigTemplate_91a2fc7afa2fd7240f1a7bf9d40f5c54259eec8a14e0b8723df3a00ab61ae882 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " <script src=\"/js/jquery.bpopup.min.js\"></script>
    <link href=\"/css/widget.css\" rel=\"stylesheet\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t";
        // line 9
        $this->env->loadTemplate("_widget_custom_box.html")->display($context);
        // line 10
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t<h4 class=\"addition_text\">Xem trước</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<p>Click vào nút để xem</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-offset-4 col-md-4\">
\t\t\t\t\t\t<!-- Button that triggers the popup -->
\t\t\t\t\t\t<button class=\"btn btn_blue\" id=\"widget\">Đặt xe</button>\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 20
        $this->env->loadTemplate("_widget_popup.html")->display($context);
        // line 21
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t<h4 class=\"addition_text\">Xem trước</h4>
\t\t\t\t";
        // line 26
        $this->env->loadTemplate("_widget_long_table.html")->display($context);
        // line 27
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 box_xs\">
\t\t\t\t<h4 class=\"addition_text\">Xem trước</h4>
\t\t\t\t";
        // line 30
        $this->env->loadTemplate("_widget_short_table.html")->display($context);
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-offset-4 col-md-4 padding_top\">
\t\t\t\t<a class=\"btn btn_orange btn_lg\">Lấy code</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 box_xs\">
\t\t\t\t<textarea class=\"form-control\" rows=\"5\"></textarea>
\t\t\t\t<a>Copy code</a>
\t\t\t</div>
\t\t</div>
\t</div>
  </div>
<!--<div class=\"modal fade\" id=\"widget\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Đặt xe</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input class=\"form-control\" placeholder=\"Điểm đi\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input class=\"form-control\" placeholder=\"Điểm đến\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t<option>Loại xe</option>
\t\t\t\t\t<option>Xe 4 chỗ</option>
\t\t\t\t\t<option>Xe 7 chỗ</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 padding_top\">
\t\t\t\t<input class=\"form-control\" placeholder=\"Ngày\">
\t\t\t</div>
\t\t\t<div class=\"col-md-12 padding_top\">
\t\t\t\t<a class=\"btn btn_blue\">Xem giá</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<hr/>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 suggest\">
\t\t\t\t<h5 class=\"best\">Đi riêng - rẻ nhất</h5>
\t\t\t\t<a class=\"btn btn_blue_outline btn-sm\">180.000Đ</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 suggest\">
\t\t\t\t<h5 class=\"chip\">Đi chung - rẻ nhất</h5>
\t\t\t\t<a class=\"btn btn_orange_outline btn-sm\">150.000Đ</a>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 show_all\">
\t\t\t\t<a>Xem tất cả</a>
\t\t\t</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
      </div>-->
      <!--<div class=\"modal-footer\">
        <div class=\"row\">
\t\t\t<div class=\"col-md-offset-8 col-md-4\">
\t\t\t\t<button type=\"button\" class=\"btn btn_blue\">Tiếp tục</button>
\t\t\t</div>
\t\t</div>
      </div>-->
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "widget.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  76 => 30,  71 => 27,  69 => 26,  62 => 21,  60 => 20,  48 => 10,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}
