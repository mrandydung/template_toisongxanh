<?php

/* _booking_step1_log.html */
class __TwigTemplate_22c3f56c186a013fc03943fe31a41c6e5b2d44dcf4d060622886b47700f39207 extends Twig_Template
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
        echo "<script>
\$(document).ready(function(){
    \$(\"#collapseOne\").click(function(){
        \$(\"#collapseOneBody\").slideToggle(300);
    });
});
</script>
\t\t\t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t  <div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
\t\t\t\t  <h4 class=\"panel-title\">
\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\" id=\"collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\" class=\"collapsed\">
\t\t\t\t\t  Hà Nội - Nội Bài
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"edit_trip\"></a>
\t\t\t\t  </h4>
\t\t\t\t</div>
\t\t\t\t<div id=\"collapseOneBody\" class=\"panel-collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"check_datxe\">\t\t\t\t
\t\t\t\t\t\t\t<h4>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thông tin chuyến đi")), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p class=\"hightlight\">Hà Nội - Trong thành phố</p>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điểm đi")), "html", null, true);
        echo ":</p>
\t\t\t\t\t\t\t\t\t<p>";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Điểm đến")), "html", null, true);
        echo ":</p>
\t\t\t\t\t\t\t\t\t<p>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Thời gian")), "html", null, true);
        echo ":</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hãng")), "html", null, true);
        echo ":</p>
\t\t\t\t\t\t\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loại xe")), "html", null, true);
        echo ":</p>
\t\t\t\t\t\t\t\t\t<p>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Số lượng")), "html", null, true);
        echo ":</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Một chiều")), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t<p>";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hình thức")), "html", null, true);
        echo ":</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<p>";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Địa chỉ đón thêm")), "html", null, true);
        echo ":</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<h3 class=\"text-right\">200.000 VNĐ</h3>
\t\t\t\t\t\t\t<div style=\"clear: both\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "_booking_step1_log.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  80 => 36,  76 => 35,  70 => 32,  66 => 31,  62 => 30,  56 => 27,  52 => 26,  48 => 25,  41 => 21,  19 => 1,);
    }
}
