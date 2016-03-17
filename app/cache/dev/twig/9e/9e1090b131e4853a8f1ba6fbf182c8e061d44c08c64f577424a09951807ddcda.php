<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a3084ba48b9d2ddb1c25d3df148f7d56be0987ff0fc161ce8061ca048c1c580a extends Twig_Template
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
        $__internal_47b9d107a3021d451d894b214827f0800823de2f602d738324756e29b3dd2061 = $this->env->getExtension("native_profiler");
        $__internal_47b9d107a3021d451d894b214827f0800823de2f602d738324756e29b3dd2061->enter($__internal_47b9d107a3021d451d894b214827f0800823de2f602d738324756e29b3dd2061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_47b9d107a3021d451d894b214827f0800823de2f602d738324756e29b3dd2061->leave($__internal_47b9d107a3021d451d894b214827f0800823de2f602d738324756e29b3dd2061_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
