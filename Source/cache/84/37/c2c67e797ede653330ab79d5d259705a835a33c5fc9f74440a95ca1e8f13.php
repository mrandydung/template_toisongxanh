<?php

/* _index_body_slide.html */
class __TwigTemplate_8437c2c67e797ede653330ab79d5d259705a835a33c5fc9f74440a95ca1e8f13 extends Twig_Template
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
        echo "<!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <!-- Set the first background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('img/banner.jpg');\"></div>
                <!--<div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>-->
            </div>
            <div class=\"item\">
                <!-- Set the second background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <!--<div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>-->
            </div>
            <div class=\"item\">
                <!-- Set the third background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <!--<div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>-->
            </div>
        </div>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
\t\t";
    }

    public function getTemplateName()
    {
        return "_index_body_slide.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
