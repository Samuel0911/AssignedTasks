<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_138c4f29b7891c50988a51a341f9985c7d5b86dbb024c772931155ef079ef23d extends Twig_Template
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
        $__internal_9d73d23ab4c173961602ad651dd662e5583df80fa781ee7ddc67e6795e00b608 = $this->env->getExtension("native_profiler");
        $__internal_9d73d23ab4c173961602ad651dd662e5583df80fa781ee7ddc67e6795e00b608->enter($__internal_9d73d23ab4c173961602ad651dd662e5583df80fa781ee7ddc67e6795e00b608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9d73d23ab4c173961602ad651dd662e5583df80fa781ee7ddc67e6795e00b608->leave($__internal_9d73d23ab4c173961602ad651dd662e5583df80fa781ee7ddc67e6795e00b608_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
