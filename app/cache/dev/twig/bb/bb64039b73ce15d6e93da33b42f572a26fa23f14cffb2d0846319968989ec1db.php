<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_be206490ee76a873b34a761f15df7da0ce130df6bc773f105f2f76ce4350b511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e303b56af51341dd951aeffb58f38beb6526bb46e0e734f1026949361d0a65c5 = $this->env->getExtension("native_profiler");
        $__internal_e303b56af51341dd951aeffb58f38beb6526bb46e0e734f1026949361d0a65c5->enter($__internal_e303b56af51341dd951aeffb58f38beb6526bb46e0e734f1026949361d0a65c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e303b56af51341dd951aeffb58f38beb6526bb46e0e734f1026949361d0a65c5->leave($__internal_e303b56af51341dd951aeffb58f38beb6526bb46e0e734f1026949361d0a65c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a205be8c6850b77c9af2da880f53450365fbde761f2a3d378b9300b1bad7da3 = $this->env->getExtension("native_profiler");
        $__internal_9a205be8c6850b77c9af2da880f53450365fbde761f2a3d378b9300b1bad7da3->enter($__internal_9a205be8c6850b77c9af2da880f53450365fbde761f2a3d378b9300b1bad7da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9a205be8c6850b77c9af2da880f53450365fbde761f2a3d378b9300b1bad7da3->leave($__internal_9a205be8c6850b77c9af2da880f53450365fbde761f2a3d378b9300b1bad7da3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88b76902f2fe781726598058cc637ea4b3ad81ba72c1d04eab7677090bf44f2e = $this->env->getExtension("native_profiler");
        $__internal_88b76902f2fe781726598058cc637ea4b3ad81ba72c1d04eab7677090bf44f2e->enter($__internal_88b76902f2fe781726598058cc637ea4b3ad81ba72c1d04eab7677090bf44f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_88b76902f2fe781726598058cc637ea4b3ad81ba72c1d04eab7677090bf44f2e->leave($__internal_88b76902f2fe781726598058cc637ea4b3ad81ba72c1d04eab7677090bf44f2e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e23bf87dc30ea5c62d96aa009ad7de9c88bc12abba610bc2731cb1cf42e3cc = $this->env->getExtension("native_profiler");
        $__internal_b4e23bf87dc30ea5c62d96aa009ad7de9c88bc12abba610bc2731cb1cf42e3cc->enter($__internal_b4e23bf87dc30ea5c62d96aa009ad7de9c88bc12abba610bc2731cb1cf42e3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_b4e23bf87dc30ea5c62d96aa009ad7de9c88bc12abba610bc2731cb1cf42e3cc->leave($__internal_b4e23bf87dc30ea5c62d96aa009ad7de9c88bc12abba610bc2731cb1cf42e3cc_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_80524b99bc896f50efaf8cee1d7b72083ad0621311c37c99243691f901269355 = $this->env->getExtension("native_profiler");
        $__internal_80524b99bc896f50efaf8cee1d7b72083ad0621311c37c99243691f901269355->enter($__internal_80524b99bc896f50efaf8cee1d7b72083ad0621311c37c99243691f901269355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_80524b99bc896f50efaf8cee1d7b72083ad0621311c37c99243691f901269355->leave($__internal_80524b99bc896f50efaf8cee1d7b72083ad0621311c37c99243691f901269355_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
