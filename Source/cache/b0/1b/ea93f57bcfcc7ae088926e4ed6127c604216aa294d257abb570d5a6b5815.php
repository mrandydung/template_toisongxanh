<?php

/* _invite_right_bar.html */
class __TwigTemplate_b01bea93f57bcfcc7ae088926e4ed6127c604216aa294d257abb570d5a6b5815 extends Twig_Template
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
        echo "<!-- Invite Friend -->
    <script type=\"text/javascript\">
    \$(function(){
        \$('.slide-out-div').tabSlideOut({
            tabHandle: '.handle',                     //class of the element that will become your tab
            pathToTabImage: '/img/invitefriend.png', //path to the image for the tab //Optionally can be set using css
            imageHeight: '50px',                     //height of tab image           //Optionally can be set using css
            imageWidth: '50px',                       //width of tab image            //Optionally can be set using css
            tabLocation: 'right',                      //side of screen where tab lives, top, right, bottom, or left
            speed: 300,                               //speed of animation
            action: 'hover',                          //options: 'click' or 'hover', action to trigger animation
            topPos: '300px',                          //position from the top/ use if tabLocation is left or right
            leftPos: '20px',                          //position from left/ use if tabLocation is bottom or top
            fixedPosition: true                      //options: true makes it stick(fixed position) on scroll
        });

    });

    </script>
    <div class=\"slide-out-div\">
        <a class=\"handle\" href=\"http://link-for-non-js-users.html\">Content</a>
        <a href=\"Invite_friend.html\">
            <div class=\"invite_friend\">
                <p class=\"hightlight\">Mời bạn bè</p>
            </div>
        </a>
    </div>";
    }

    public function getTemplateName()
    {
        return "_invite_right_bar.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
