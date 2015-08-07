<?php

/* /Layout/_js.html */
class __TwigTemplate_630a873265ddad940eb3c03b1a3e6dfc678f961a9c7f1baf77dcfc84f7de6301 extends Twig_Template
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
        echo "
<!-- Script to Activate the Carousel -->
<script>
    \$('.banner_slide').carousel({
        interval: 5000 //changes the speed
    });
    \$('.story_silde').carousel({
        interval: 100 //changes the speed
    });
\t\$(document).ready(function(){
\t\t\$('input[type=\"checkbox\"]').click(function(){
            if(\$(this).attr(\"value\")==\"open_account\"){
                \$(\"#show_open_account\").slideToggle(400);
            }
            if(\$(this).attr(\"id\")==\"gift\"){
                \$(\"#show_gift\").slideToggle(400);
            }
        });
        \$('input[type=\"radio\"]').click(function(){
            if(\$(this).attr(\"id\")==\"activity_1\"){
                \$(\"#show_kind1\").show(400);
                \$(\"#show_kind2\").hide(400);
                \$(\"#show_kind3\").hide(400);
            }
            if(\$(this).attr(\"id\")==\"activity_2\"){
                \$(\"#show_kind1\").hide(400);
                \$(\"#show_kind2\").show(400);
                \$(\"#show_kind3\").hide(400);
            }
            if(\$(this).attr(\"id\")==\"activity_3\"){
                \$(\"#show_kind1\").hide(400);
                \$(\"#show_kind2\").hide(400);
                \$(\"#show_kind3\").show(400);
            }
            if(\$(this).attr(\"value\")==\"balance\"){
                \$(\".balance_display\").show(400);
            }
            if(\$(this).attr(\"id\")==\"kind_1\"){
                \$(\".step1_data_1\").show(400);
                \$(\".step1_data_2\").hide(400);
                \$(\".step1_data_3\").hide(400);
                \$(\".step1_data_4\").hide(400);
            }
            if(\$(this).attr(\"id\")==\"kind_2\"){
                \$(\".step1_data_1\").hide(400);
                \$(\".step1_data_2\").show(400);
                \$(\".step1_data_3\").hide(400);
                \$(\".step1_data_4\").hide(400);
            }
            if(\$(this).attr(\"id\")==\"kind_3\"){
                \$(\".step1_data_1\").hide(400);
                \$(\".step1_data_2\").hide(400);
                \$(\".step1_data_3\").show(400);
                \$(\".step1_data_4\").hide(400);
            }
            if(\$(this).attr(\"id\")==\"kind_4\"){
                \$(\".step1_data_1\").hide(400);
                \$(\".step1_data_2\").hide(400);
                \$(\".step1_data_3\").hide(400);
                \$(\".step1_data_4\").show(400);
            }
            if(\$(this).attr(\"id\")==\"payment_1\"){
                \$(\".pay_description_1\").show(400);
                \$(\".pay_description_2\").hide(400);
                \$(\".pay_description_3\").hide(400);
            }
            if(\$(this).attr(\"id\")==\"payment_2\"){
                \$(\".pay_description_2\").show(400);
                \$(\".pay_description_1\").hide(400);
                \$(\".pay_description_3\").hide(400);
            }
            if(\$(this).attr(\"id\")==\"payment_3\"){
                \$(\".pay_description_3\").show(400);
                \$(\".pay_description_2\").hide(400);
                \$(\".pay_description_1\").hide(400);
            }
        });
\t
\t});
</script>
<script>
    new WOW().init();
</script>
<script>
    \$(function(){

        var \$window = \$(window);
        var scrollTime = 0.7;
        var scrollDistance = 170;

        \$window.on(\"mousewheel DOMMouseScroll\", function(event){

            event.preventDefault();

            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
            var scrollTop = \$window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta*scrollDistance);

            TweenMax.to(\$window, scrollTime, {
                scrollTo : { y: finalScroll, autoKill:true },
                ease: Power1.easeOut,
                overwrite: 5
            });

        });
    });
</script>
<script>
    \$(function(){
        \$.fn.scrollToTop = function(){
            \$(this).hide().removeAttr(\"href\");   // Xóa thuộc tính \"href\" trong phần HTML
            if(\$(window).scrollTop()!=\"0\"){ \$(this).fadeIn(\"slow\") }
            var scrollDiv=\$(this);
            \$(window).scroll(function(){   // Sự kiện trượt trang web
                if (\$(window).width() < 400) {
                    \$(\".toTop\").hide();
                    return;
                }
                if (\$(document).scrollTop() < \$(window).height()) {
                    \$(\".toTop\").fadeOut(\"slow\");   // ẩn nút
                } else {
                    \$(\".toTop\").fadeIn(\"slow\");    // Hiện nút
                }
            });
            \$(this).click(function(){ // Sự kiện click nút
                \$(\"html, body\").animate({scrollTop:0}, \"slow\")   // Tạo hiệu ứng chuyển mượt
            });
        }
    });
    \$(function() { \$(\".toTop\").scrollToTop(); });

    // Khi resize cửa sổ trình duyệt
    \$(window).resize(function () {
        if (\$(window).width() < 400) {
            \$(\".toTop\").hide();
            return;
        }
    });

</script>";
    }

    public function getTemplateName()
    {
        return "/Layout/_js.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
