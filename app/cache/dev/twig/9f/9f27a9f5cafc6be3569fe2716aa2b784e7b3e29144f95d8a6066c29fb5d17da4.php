<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_7d4a406af3a8ce907a7941ef6a8f6b470700658d719cb6a4032e7271bcd4439b extends Twig_Template
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
        $__internal_50b79540eee17d4d4db72d6435161658a2de8e2ff4d33c39de3416b03c0568c7 = $this->env->getExtension("native_profiler");
        $__internal_50b79540eee17d4d4db72d6435161658a2de8e2ff4d33c39de3416b03c0568c7->enter($__internal_50b79540eee17d4d4db72d6435161658a2de8e2ff4d33c39de3416b03c0568c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_50b79540eee17d4d4db72d6435161658a2de8e2ff4d33c39de3416b03c0568c7->leave($__internal_50b79540eee17d4d4db72d6435161658a2de8e2ff4d33c39de3416b03c0568c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
