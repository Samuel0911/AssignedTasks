<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9e0da0d6252f81d4297151a00ade5fdd21e1a188c6e07213581eed854d9147dc extends Twig_Template
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
        $__internal_73999b2541b6bd46d59da26a9c94b3e29153debe837850255dd240f4ee73c9ee = $this->env->getExtension("native_profiler");
        $__internal_73999b2541b6bd46d59da26a9c94b3e29153debe837850255dd240f4ee73c9ee->enter($__internal_73999b2541b6bd46d59da26a9c94b3e29153debe837850255dd240f4ee73c9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_73999b2541b6bd46d59da26a9c94b3e29153debe837850255dd240f4ee73c9ee->leave($__internal_73999b2541b6bd46d59da26a9c94b3e29153debe837850255dd240f4ee73c9ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
