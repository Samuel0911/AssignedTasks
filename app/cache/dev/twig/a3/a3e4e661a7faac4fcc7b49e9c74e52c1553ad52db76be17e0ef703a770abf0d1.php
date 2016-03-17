<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_77679d97e0fe3be4ae353625e06990eab5254a268b55e0583ea043af5360bdff extends Twig_Template
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
        $__internal_fc6795a9687c1425329d03a3cd06b21174cfd38f6be82874501f03119abbfbc5 = $this->env->getExtension("native_profiler");
        $__internal_fc6795a9687c1425329d03a3cd06b21174cfd38f6be82874501f03119abbfbc5->enter($__internal_fc6795a9687c1425329d03a3cd06b21174cfd38f6be82874501f03119abbfbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc6795a9687c1425329d03a3cd06b21174cfd38f6be82874501f03119abbfbc5->leave($__internal_fc6795a9687c1425329d03a3cd06b21174cfd38f6be82874501f03119abbfbc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
