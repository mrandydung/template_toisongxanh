<?php

/* /Index/_index_story.html */
class __TwigTemplate_3a1e552fc1afd7efeca2bffe4409d57b6cf1177bb9c94a37b9dbf555c743393f extends Twig_Template
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
        echo "<!-- /Index/_index_story.html -->
<div class=\"white_bg box_5x stories text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"h1\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tôi sống xanh")), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-12 box_2x\">
                <div id=\"carousel-example-generic\" class=\"story_slide carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                    </ol>-->

                    <!-- Wrapper for slides -->
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"item active\">
                            <div class=\"carousel-caption my_carousel\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <p class=\"text-uppercase blue_text box_1x\">Kenneth Edwards</p>
                                <div class=\"avatar\"><img src=\"img/avatar.jpg\" class=\"img-circle\"></div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"carousel-caption my_carousel\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <p class=\"text-uppercase blue_text box_1x\">Kenneth Edwards</p>
                                <div class=\"avatar\"><img src=\"img/avatar.jpg\" class=\"img-circle\"></div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"carousel-caption my_carousel\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <p class=\"text-uppercase blue_text box_1x\">Kenneth Edwards</p>
                                <div class=\"avatar\"><img src=\"img/avatar.jpg\" class=\"img-circle\"></div>
                            </div>
                        </div>
                    </div>

                    <p><a href=\"list-story.php\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Xem tất cả")), "html", null, true);
        echo "</a></p>

                    <!-- Controls -->
                    <a class=\"left\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"right\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Index/_index_story.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 42,  26 => 6,  19 => 1,);
    }
}
