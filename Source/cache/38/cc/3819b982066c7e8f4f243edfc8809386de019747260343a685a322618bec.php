<?php

/* _index_body_discount.html */
class __TwigTemplate_38cc3819b982066c7e8f4f243edfc8809386de019747260343a685a322618bec extends Twig_Template
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
        echo "<div class=\"white_bg box_xs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- it works the same with all jquery version from 1.x to 2.x -->
                    <!-- use jssor.slider.mini.js (40KB) or jssor.sliderc.mini.js (32KB, with caption, no slideshow) or jssor.sliders.mini.js (28KB, no caption, no slideshow) instead for release -->
                    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
                    <script type=\"text/javascript\" src=\"/js/jssor.core.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jssor.utils.js\"></script>
                    <script type=\"text/javascript\" src=\"/js/jssor.slider.js\"></script>
                    <script>
                        jQuery(document).ready(function (\$) {
                            var options = {
                                \$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                                \$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                                \$AutoPlayInterval: 0,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                                \$PauseOnHover: 4,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                                \$ArrowKeyNavigation: true,   \t\t\t            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                                \$SlideEasing: \$JssorEasing\$.\$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is \$JssorEasing\$.\$EaseOutQuad
                                \$SlideDuration: 5000,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                                \$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                                \$SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                                //\$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                                \$SlideSpacing: 0, \t\t\t\t\t                //[Optional] Space between each slide in pixels, default value is 0
                                \$DisplayPieces: 7,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                                \$ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                                \$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                                \$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                                \$DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the \$DragOrientation should be the same as \$PlayOrientation when \$DisplayPieces is greater than 1, or parking position is not 0)
                            };

                            var jssor_slider1 = new \$JssorSlider\$(\"slider1_container\", options);

                            //responsive code begin
                            //you can remove responsive code if you don't want the slider scales while window resizes
                            function ScaleSlider() {
                                var bodyWidth = document.body.clientWidth;
                                if (bodyWidth)
                                    jssor_slider1.\$SetScaleWidth(Math.min(bodyWidth, 980));
                                else
                                    window.setTimeout(ScaleSlider, 30);
                            }

                            ScaleSlider();

                            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                                \$(window).bind('resize', ScaleSlider);
                            }


                            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                            //    \$(window).bind(\"orientationchange\", ScaleSlider);
                            //}
                            //responsive code end
                        });
                    </script>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id=\"slider1_container\" style=\"position: relative; top: 0px; left: 0px; width: 980px; height: 60px; overflow: hidden; \">

                        <!-- Loading Screen -->
                        <div u=\"loading\" style=\"position: absolute; top: 0px; left: 0px;\">
                            <div style=\"filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;\">
                            </div>
                            <div style=\"position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;\">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u=\"slides\" style=\"cursor: move; position: absolute; left: 0px; top: 0px; width: 980px; height: 60px; overflow: hidden;\">
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                            <div class=\"khuyenmai\">
                                <p class=\"title\"><a>Hà Nội - Nam Định</a></p>
                                <h6 class=\"giacu\">1.000.000 Đ</h6>
                                <p class=\"title giamoi\">800.000 Đ</p>
                            </div>
                        </div>
                        <a style=\"display: none\" href=\"http://www.jssor.com\">javascript</a>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "_index_body_discount.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
