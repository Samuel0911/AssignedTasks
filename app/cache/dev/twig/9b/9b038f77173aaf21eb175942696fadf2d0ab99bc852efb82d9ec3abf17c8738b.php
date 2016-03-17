<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_eabdbeba449019e70f6f9fb6889cd7b93fbedad8ed3b4f8d0582f1efd3545a8c extends Twig_Template
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
        $__internal_c354dd445dba1e6c76289377d966e5c8fed963da263eacba804188772486862c = $this->env->getExtension("native_profiler");
        $__internal_c354dd445dba1e6c76289377d966e5c8fed963da263eacba804188772486862c->enter($__internal_c354dd445dba1e6c76289377d966e5c8fed963da263eacba804188772486862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c354dd445dba1e6c76289377d966e5c8fed963da263eacba804188772486862c->leave($__internal_c354dd445dba1e6c76289377d966e5c8fed963da263eacba804188772486862c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
