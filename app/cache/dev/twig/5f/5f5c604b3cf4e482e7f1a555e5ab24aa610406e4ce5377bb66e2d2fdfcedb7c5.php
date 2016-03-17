<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9c56e57bfba5393aacd32b0d05884e0f47d1f06d97bc7361014e31184e22b958 extends Twig_Template
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
        $__internal_13dcfbf23602e302641192a061fa0d321b94687bde48dcda22ed451853e79dc0 = $this->env->getExtension("native_profiler");
        $__internal_13dcfbf23602e302641192a061fa0d321b94687bde48dcda22ed451853e79dc0->enter($__internal_13dcfbf23602e302641192a061fa0d321b94687bde48dcda22ed451853e79dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_13dcfbf23602e302641192a061fa0d321b94687bde48dcda22ed451853e79dc0->leave($__internal_13dcfbf23602e302641192a061fa0d321b94687bde48dcda22ed451853e79dc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
