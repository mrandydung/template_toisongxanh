<?php

/* _brand_info_images_content.html */
class __TwigTemplate_5bef390d4b82628aa2c08de8a2d11fea808f896887b3e70765eca44ffa19b76e extends Twig_Template
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
        echo "<!--_brand_info_images_content.html-->
<!-- Start Advanced Gallery Html Containers -->
\t\t\t\t\t\t\t\t<div id=\"gallery\" class=\"content\">
\t\t\t\t\t\t\t\t\t<!--<div id=\"controls\" class=\"controls\"></div>-->
\t\t\t\t\t\t\t\t\t<div class=\"slideshow-container\">
\t\t\t\t\t\t\t\t\t\t<div id=\"loading\" class=\"loader\"></div>
\t\t\t\t\t\t\t\t\t\t<div id=\"slideshow\" class=\"slideshow\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--<div id=\"caption\" class=\"caption-container\"></div>-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"thumbs\" class=\"navigation\">
\t\t\t\t\t\t\t\t\t<ul class=\"thumbs noscript\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"thumb\" name=\"leaf\" href=\"/img/cab/taxi-group/taxigroup-taxi-4-cho-lg.png\" title=\"Title #0\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/cab/taxi-group/taxigroup-taxi-4-cho.png\" alt=\"Title #0\" />\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<p>Xe 4 chỗ</p>
\t\t\t\t\t\t\t\t\t\t\t<!--<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/img/cab/taxi-group/taxigroup-taxi-4-cho-lg.png\">Download Original</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-title\">Mai Linh 4 chỗ</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"thumb\" name=\"leaf\" href=\"/img/cab/taxi-group/taxigroup-taxi-7-cho-lg.png\" title=\"Title #0\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/img/cab/taxi-group/taxigroup-taxi-7-cho.png\" alt=\"Title #0\" />\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<p>Xe 7 chỗ</p>
\t\t\t\t\t\t\t\t\t\t\t<!--<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"download\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/img/cab/mai-linh/mai-linh-taxi-7-cho-lg.png\">Download Original</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-title\">Mai Linh 7 chỗ</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-desc\">Description</div>
\t\t\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\tjQuery(document).ready(function(\$) {
\t\t\t\t\t\t\t\t\t\t// We only want these styles applied when javascript is enabled
\t\t\t\t\t\t\t\t\t\t\$('div.navigation').css({'width' : '30%', 'float' : 'none', 'margin' : 'o auto',});
\t\t\t\t\t\t\t\t\t\t\$('div.content').css('display', 'block');

\t\t\t\t\t\t\t\t\t\t// Initially set opacity on thumbs and add
\t\t\t\t\t\t\t\t\t\t// additional styling for hover effect on thumbs
\t\t\t\t\t\t\t\t\t\tvar onMouseOutOpacity = 0.67;
\t\t\t\t\t\t\t\t\t\t\$('#thumbs ul.thumbs li').opacityrollover({
\t\t\t\t\t\t\t\t\t\t\tmouseOutOpacity:   onMouseOutOpacity,
\t\t\t\t\t\t\t\t\t\t\tmouseOverOpacity:  1.0,
\t\t\t\t\t\t\t\t\t\t\tfadeSpeed:         'fast',
\t\t\t\t\t\t\t\t\t\t\texemptionSelector: '.selected'
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t// Initialize Advanced Galleriffic Gallery
\t\t\t\t\t\t\t\t\t\tvar gallery = \$('#thumbs').galleriffic({
\t\t\t\t\t\t\t\t\t\t\tdelay:                     2500,
\t\t\t\t\t\t\t\t\t\t\tnumThumbs:                 15,
\t\t\t\t\t\t\t\t\t\t\tpreloadAhead:              10,
\t\t\t\t\t\t\t\t\t\t\tenableTopPager:            true,
\t\t\t\t\t\t\t\t\t\t\tenableBottomPager:         true,
\t\t\t\t\t\t\t\t\t\t\tmaxPagesToShow:            7,
\t\t\t\t\t\t\t\t\t\t\timageContainerSel:         '#slideshow',
\t\t\t\t\t\t\t\t\t\t\tcontrolsContainerSel:      '#controls',
\t\t\t\t\t\t\t\t\t\t\tcaptionContainerSel:       '#caption',
\t\t\t\t\t\t\t\t\t\t\tloadingContainerSel:       '#loading',
\t\t\t\t\t\t\t\t\t\t\trenderSSControls:          true,
\t\t\t\t\t\t\t\t\t\t\trenderNavControls:         true,
\t\t\t\t\t\t\t\t\t\t\tplayLinkText:              'Play Slideshow',
\t\t\t\t\t\t\t\t\t\t\tpauseLinkText:             'Pause Slideshow',
\t\t\t\t\t\t\t\t\t\t\tprevLinkText:              '&lsaquo; Previous Photo',
\t\t\t\t\t\t\t\t\t\t\tnextLinkText:              'Next Photo &rsaquo;',
\t\t\t\t\t\t\t\t\t\t\tnextPageLinkText:          'Next &rsaquo;',
\t\t\t\t\t\t\t\t\t\t\tprevPageLinkText:          '&lsaquo; Prev',
\t\t\t\t\t\t\t\t\t\t\tenableHistory:             false,
\t\t\t\t\t\t\t\t\t\t\tautoStart:                 false,
\t\t\t\t\t\t\t\t\t\t\tsyncTransitions:           true,
\t\t\t\t\t\t\t\t\t\t\tdefaultTransitionDuration: 900,
\t\t\t\t\t\t\t\t\t\t\tonSlideChange:             function(prevIndex, nextIndex) {
\t\t\t\t\t\t\t\t\t\t\t\t// 'this' refers to the gallery, which is an extension of \$('#thumbs')
\t\t\t\t\t\t\t\t\t\t\t\tthis.find('ul.thumbs').children()
\t\t\t\t\t\t\t\t\t\t\t\t\t.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
\t\t\t\t\t\t\t\t\t\t\t\t\t.eq(nextIndex).fadeTo('fast', 1.0);
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tonPageTransitionOut:       function(callback) {
\t\t\t\t\t\t\t\t\t\t\t\tthis.fadeTo('fast', 0.0, callback);
\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\tonPageTransitionIn:        function() {
\t\t\t\t\t\t\t\t\t\t\t\tthis.fadeTo('fast', 1.0);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>";
    }

    public function getTemplateName()
    {
        return "_brand_info_images_content.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
