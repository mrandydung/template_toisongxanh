<?php

/* _js.html */
class __TwigTemplate_2f69dd91fd178a48ed03fd8728f5fbc55633b5e54dce972270eaab260f284360 extends Twig_Template
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
    \$('.carousel').carousel({
        interval: 5000 //changes the speed
    })
\t
\t\$(document).ready(function(){
\t\t\$(\"#motchieu\").click(function(){
\t\t\t\$(\"#ngayve\").attr(\"disabled\",true);
\t\t\t\$(\"#giove\").attr(\"disabled\",true);
\t\t});
\t\t\$(\"#haichieu\").click(function(){
\t\t\t\$(\"#ngayve\").attr(\"disabled\",true);
\t\t\t\$(\"#giove\").attr(\"disabled\",true);
\t\t});
\t\t\$(\"#khuhoi\").click(function(){
\t\t\t\$(\"#ngayve\").removeAttr(\"disabled\");
\t\t\t\$(\"#giove\").removeAttr(\"disabled\");
\t\t});
\t\t\$('.book_noncheck').click(function(){
\t\t\t\$('.book_check').removeClass('book_check').addClass('book_noncheck');
\t\t\t\$(this).removeClass('book_noncheck').addClass('book_check');
\t\t});
\t\t\$('input[type=\"checkbox\"]').click(function(){
\t\t\tif(\$(this).attr(\"value\")==\"themdiachi1\"){
\t\t\t\$(\".themdiachi1\").toggle();
\t\t}
\t\t});
\t\t\$('#addnewitem').click(function(){
\t\t\t\$('#hienthiItem').append('  <div class=\"row\"> <div class=\"col-md-11 col-sm-11 col-xs-11\"> <label class=\"col-md-2 control-label box_sm\">Địa chỉ</label>     <div class=\"col-md-10 box_xs\"> <input type=\"text\" class=\"form-control\">        </div>  </div><div class=\"col-md-1 col-sm-1 col-xs-1 box_xs\" id=\"addnewitem\"><a><img src=\"img/btn_remove.png\"></a><span id=\"hienthiItem\"></span>  </div>  </div> ');
\t\t});
\t\t\$('input[type=\"checkbox\"]').click(function(){
            if(\$(this).attr(\"value\")==\"dat_ho\"){
                \$(\".datho\").toggle();
            }
        });
        \$('input[type=\"checkbox\"]').click(function(){
            if(\$(this).attr(\"value\")==\"hoadon\"){
                \$(\".hoadon\").toggle();
            }
\t\t\tif(\$(this).attr(\"value\")==\"balance\"){
\t\t\t\t\$(\".balance_display\").slideToggle(400);
\t\t\t}
\t\t\tif(\$(this).attr(\"value\")==\"dichvu1\"){
                \$(\".dichvu1\").slideToggle(400);
            }
\t\t\tif(\$(this).attr(\"value\")==\"dichvu2\"){
                \$(\".dichvu2\").slideToggle(400);
            }
\t\t\tif(\$(this).attr(\"value\")==\"dichvu3\"){
                \$(\".dichvu3\").slideToggle(400);
            }
        });
\t\t\$(\"#show_cost\").click(function(){
\t\t\t\$(\"#cost\").slideToggle(400);\t\t
\t\t});
\t\t\$('input[type=\"checkbox\"]').click(function(){
\t\t\t\tif(\$(this).attr(\"value\")==\"introduce_code\"){
\t\t\t\t\t\$(\"#customer_form_introduce_code\").toggle();
\t\t\t\t}
\t\t\t\tif(\$(this).attr(\"value\")==\"discount_code\"){
\t\t\t\t\t\$(\"#customer_form_discount_code\").toggle();
\t\t\t\t}
\t\t\t});\t
\t\t\t\$('input[type=\"radio\"]').click(function(){
\t\t\t\t\tif(\$(this).attr(\"value\")==\"online_pay\"){
\t\t\t\t\t\t\$(\"#payment_form_online_pay_info\").show();
\t\t\t\t\t\t\$(\"#payment_form_transfer_pay_info\").hide();
\t\t\t\t\t\t\$(\"#payment_form_pay_back_info\").hide();
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr(\"value\")==\"transfer_pay\"){
\t\t\t\t\t\t\$(\"#payment_form_online_pay_info\").hide();
\t\t\t\t\t\t\$(\"#payment_form_transfer_pay_info\").show();
\t\t\t\t\t\t\$(\"#payment_form_pay_back_info\").hide();
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr(\"value\")==\"pay_back\"){
\t\t\t\t\t\t\$(\"#payment_form_online_pay_info\").hide();
\t\t\t\t\t\t\$(\"#payment_form_transfer_pay_info\").hide();
\t\t\t\t\t\t\$(\"#payment_form_pay_back_info\").show();
\t\t\t\t\t}
\t\t\t\t\tif(\$(this).attr(\"value\")==\"balance\"){
\t\t\t\t\t\t\$(\".balance_display\").show(400);
\t\t\t\t\t}
\t\t\t\t});
\t\t\$(\".price_1\").click(function(){
\t\t\t\$(\".show_price_1\").slideToggle(400);\t\t
\t\t});\t
\t\t
\t\t\$(\"#widget\").click(function(){
\t\t\t\$('#widget_popup').bPopup({
\t\t\tmodalClose: true,
            fadeSpeed: 'slow', //can be a string ('slow'/'fast') or int
            followSpeed: 1500, //can be a string ('slow'/'fast') or int
            modalColor: 'black'
        });\t\t\t
\t\t});
\t
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "_js.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
