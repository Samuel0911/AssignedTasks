<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8496db48bb80e1820a1a33c72612694932cb57001ade370740964585ce5e3f2f extends Twig_Template
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
        $__internal_34d0bbd3f8a3424c89ce94e9a4fbea65a0c6f965b9d1c26c594eead545a2a294 = $this->env->getExtension("native_profiler");
        $__internal_34d0bbd3f8a3424c89ce94e9a4fbea65a0c6f965b9d1c26c594eead545a2a294->enter($__internal_34d0bbd3f8a3424c89ce94e9a4fbea65a0c6f965b9d1c26c594eead545a2a294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_34d0bbd3f8a3424c89ce94e9a4fbea65a0c6f965b9d1c26c594eead545a2a294->leave($__internal_34d0bbd3f8a3424c89ce94e9a4fbea65a0c6f965b9d1c26c594eead545a2a294_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
