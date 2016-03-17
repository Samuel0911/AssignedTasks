<?php

/* SAMUserBundle:Default:index.html.twig */
class __TwigTemplate_89c210d19526d02f8815d69ce8aebdfbbcf70196ef269741429d9c6775741804 extends Twig_Template
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
        $__internal_41dfc0a913335d069af268b9e74d8a5fb419a75328a50735d2805143ef75abef = $this->env->getExtension("native_profiler");
        $__internal_41dfc0a913335d069af268b9e74d8a5fb419a75328a50735d2805143ef75abef->enter($__internal_41dfc0a913335d069af268b9e74d8a5fb419a75328a50735d2805143ef75abef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SAMUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_41dfc0a913335d069af268b9e74d8a5fb419a75328a50735d2805143ef75abef->leave($__internal_41dfc0a913335d069af268b9e74d8a5fb419a75328a50735d2805143ef75abef_prof);

    }

    public function getTemplateName()
    {
        return "SAMUserBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
