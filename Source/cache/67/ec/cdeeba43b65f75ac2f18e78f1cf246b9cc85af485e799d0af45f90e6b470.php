<?php

/* /Story/list-story.html */
class __TwigTemplate_67eccdeeba43b65f75ac2f18e78f1cf246b9cc85af485e799d0af45f90e6b470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("/Layout/layout.html");
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
        return "/Layout/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"/css/story.css\" rel=\"stylesheet\">
<div class=\"gray_bg box_2x\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center box_2x\">
                <p class=\"h2 blue_text\">Câu chuyện sống xanh</p>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 12
        $this->env->loadTemplate("/Story/_list-story_story.html")->display($context);
        // line 13
        echo "        </div>
        <div class=\"row\">
            ";
        // line 15
        $this->env->loadTemplate("/Story/_list-story_story.html")->display($context);
        // line 16
        echo "        </div>
        <div class=\"row\">
            ";
        // line 18
        $this->env->loadTemplate("/Story/_list-story_story.html")->display($context);
        // line 19
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Story/list-story.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  62 => 18,  58 => 16,  56 => 15,  52 => 13,  50 => 12,  39 => 3,  36 => 2,  11 => 1,);
    }
}
