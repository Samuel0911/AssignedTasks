<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e8fcefbb2872cbcd593c0e31647a31353fb9db8288a6e367bf3e21d0d3814175 extends Twig_Template
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
        $__internal_4df6099f69756d0cab39ab05d2870911b3815948b4e5edf9be611c456436bbe1 = $this->env->getExtension("native_profiler");
        $__internal_4df6099f69756d0cab39ab05d2870911b3815948b4e5edf9be611c456436bbe1->enter($__internal_4df6099f69756d0cab39ab05d2870911b3815948b4e5edf9be611c456436bbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4df6099f69756d0cab39ab05d2870911b3815948b4e5edf9be611c456436bbe1->leave($__internal_4df6099f69756d0cab39ab05d2870911b3815948b4e5edf9be611c456436bbe1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
