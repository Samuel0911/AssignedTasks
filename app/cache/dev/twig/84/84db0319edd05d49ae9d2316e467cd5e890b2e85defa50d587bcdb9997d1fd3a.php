<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a4aba0c711089f9f44df4dc083c39652746f461e945dd7259ed8dd07dbd6fb78 extends Twig_Template
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
        $__internal_6d5026a66bfa185eaf9b8c242d0259eacb614a765476b7aa810375a14c5c862d = $this->env->getExtension("native_profiler");
        $__internal_6d5026a66bfa185eaf9b8c242d0259eacb614a765476b7aa810375a14c5c862d->enter($__internal_6d5026a66bfa185eaf9b8c242d0259eacb614a765476b7aa810375a14c5c862d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6d5026a66bfa185eaf9b8c242d0259eacb614a765476b7aa810375a14c5c862d->leave($__internal_6d5026a66bfa185eaf9b8c242d0259eacb614a765476b7aa810375a14c5c862d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
