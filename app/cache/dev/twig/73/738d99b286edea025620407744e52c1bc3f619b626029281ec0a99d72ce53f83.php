<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c0fb95e4f443c155d74a005610193d837f7d24d6e1fab01d250959638d2305b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6b531a098b6c79e156c811d23cba3049a1681ea29add7fe4c5121ce20118cc9 = $this->env->getExtension("native_profiler");
        $__internal_a6b531a098b6c79e156c811d23cba3049a1681ea29add7fe4c5121ce20118cc9->enter($__internal_a6b531a098b6c79e156c811d23cba3049a1681ea29add7fe4c5121ce20118cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b531a098b6c79e156c811d23cba3049a1681ea29add7fe4c5121ce20118cc9->leave($__internal_a6b531a098b6c79e156c811d23cba3049a1681ea29add7fe4c5121ce20118cc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9010668e93ae58fdb555cb17c293794fe3356292f89e28b035021f2b5e14d6d4 = $this->env->getExtension("native_profiler");
        $__internal_9010668e93ae58fdb555cb17c293794fe3356292f89e28b035021f2b5e14d6d4->enter($__internal_9010668e93ae58fdb555cb17c293794fe3356292f89e28b035021f2b5e14d6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9010668e93ae58fdb555cb17c293794fe3356292f89e28b035021f2b5e14d6d4->leave($__internal_9010668e93ae58fdb555cb17c293794fe3356292f89e28b035021f2b5e14d6d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_819af2b696afaeca4f706e0aeb23f6ff4e7128c304ec667856d219bbee51d295 = $this->env->getExtension("native_profiler");
        $__internal_819af2b696afaeca4f706e0aeb23f6ff4e7128c304ec667856d219bbee51d295->enter($__internal_819af2b696afaeca4f706e0aeb23f6ff4e7128c304ec667856d219bbee51d295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_819af2b696afaeca4f706e0aeb23f6ff4e7128c304ec667856d219bbee51d295->leave($__internal_819af2b696afaeca4f706e0aeb23f6ff4e7128c304ec667856d219bbee51d295_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5e1f16e67b80ac898518a9f43b54d533d6469825f51fc8e087c9bac14a923fc = $this->env->getExtension("native_profiler");
        $__internal_b5e1f16e67b80ac898518a9f43b54d533d6469825f51fc8e087c9bac14a923fc->enter($__internal_b5e1f16e67b80ac898518a9f43b54d533d6469825f51fc8e087c9bac14a923fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b5e1f16e67b80ac898518a9f43b54d533d6469825f51fc8e087c9bac14a923fc->leave($__internal_b5e1f16e67b80ac898518a9f43b54d533d6469825f51fc8e087c9bac14a923fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
