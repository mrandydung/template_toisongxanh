<?php

/* index.html */
class __TwigTemplate_8cd3aa4ec4398371bd535eab62842e38a9a12d1521551d0cb67b4575f5d3c762 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"css/home.css\" rel=\"stylesheet\">
    ";
        // line 5
        $this->env->loadTemplate("/Index/_index_banner.html")->display($context);
        // line 6
        echo "    ";
        $this->env->loadTemplate("/Index/_index_benefit.html")->display($context);
        // line 7
        echo "    ";
        $this->env->loadTemplate("/Index/_index_activities.html")->display($context);
        // line 8
        echo "    ";
        $this->env->loadTemplate("/Index/_index_customer.html")->display($context);
        // line 9
        $this->env->loadTemplate("/Index/_index_startic.html")->display($context);
        // line 10
        $this->env->loadTemplate("/Index/_index_story.html")->display($context);
        // line 11
        $this->env->loadTemplate("/Index/_index_parter.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  55 => 10,  53 => 9,  50 => 8,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
