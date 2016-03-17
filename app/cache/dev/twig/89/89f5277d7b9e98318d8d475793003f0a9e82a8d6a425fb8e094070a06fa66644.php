<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7b0e78eac94c50684397b76a4a69ee522f684d42aa8d9e80af74cc293b0f5d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_614ff6f3f302b4700ce5d59e83391b42a224f16e88cfcbc653aa5374dfb61eed = $this->env->getExtension("native_profiler");
        $__internal_614ff6f3f302b4700ce5d59e83391b42a224f16e88cfcbc653aa5374dfb61eed->enter($__internal_614ff6f3f302b4700ce5d59e83391b42a224f16e88cfcbc653aa5374dfb61eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_614ff6f3f302b4700ce5d59e83391b42a224f16e88cfcbc653aa5374dfb61eed->leave($__internal_614ff6f3f302b4700ce5d59e83391b42a224f16e88cfcbc653aa5374dfb61eed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd908686e683af899e1ec2fb9f77e5a64c86e83d8a7a807defc65cee4988c44f = $this->env->getExtension("native_profiler");
        $__internal_dd908686e683af899e1ec2fb9f77e5a64c86e83d8a7a807defc65cee4988c44f->enter($__internal_dd908686e683af899e1ec2fb9f77e5a64c86e83d8a7a807defc65cee4988c44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dd908686e683af899e1ec2fb9f77e5a64c86e83d8a7a807defc65cee4988c44f->leave($__internal_dd908686e683af899e1ec2fb9f77e5a64c86e83d8a7a807defc65cee4988c44f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
