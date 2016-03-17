<?php

/* layout.html.twig */
class __TwigTemplate_b2a31a48cbf705f85a803b1e4b1b50195c6c46e192eb2e2f5890b03eb0ba6ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52f3db86cbff856921dbcab274cff8c6cd3e3b47c0d87ea31871316e3d63f7a2 = $this->env->getExtension("native_profiler");
        $__internal_52f3db86cbff856921dbcab274cff8c6cd3e3b47c0d87ea31871316e3d63f7a2->enter($__internal_52f3db86cbff856921dbcab274cff8c6cd3e3b47c0d87ea31871316e3d63f7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
 ";
        
        $__internal_52f3db86cbff856921dbcab274cff8c6cd3e3b47c0d87ea31871316e3d63f7a2->leave($__internal_52f3db86cbff856921dbcab274cff8c6cd3e3b47c0d87ea31871316e3d63f7a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e77f433f6ce3ae11708423d66596e050ad7cb376e08e2f5c9e70a05c03425a04 = $this->env->getExtension("native_profiler");
        $__internal_e77f433f6ce3ae11708423d66596e050ad7cb376e08e2f5c9e70a05c03425a04->enter($__internal_e77f433f6ce3ae11708423d66596e050ad7cb376e08e2f5c9e70a05c03425a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de Tareas!";
        
        $__internal_e77f433f6ce3ae11708423d66596e050ad7cb376e08e2f5c9e70a05c03425a04->leave($__internal_e77f433f6ce3ae11708423d66596e050ad7cb376e08e2f5c9e70a05c03425a04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ecf41baa134ed33caabd3817691532361aac0242b9972adc549bbffafbf4c73 = $this->env->getExtension("native_profiler");
        $__internal_5ecf41baa134ed33caabd3817691532361aac0242b9972adc549bbffafbf4c73->enter($__internal_5ecf41baa134ed33caabd3817691532361aac0242b9972adc549bbffafbf4c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_5ecf41baa134ed33caabd3817691532361aac0242b9972adc549bbffafbf4c73->leave($__internal_5ecf41baa134ed33caabd3817691532361aac0242b9972adc549bbffafbf4c73_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b279903e0cd3ef0ea60d3df4eeb4eb4831cf4b9a58babeb712bf394350ea8e49 = $this->env->getExtension("native_profiler");
        $__internal_b279903e0cd3ef0ea60d3df4eeb4eb4831cf4b9a58babeb712bf394350ea8e49->enter($__internal_b279903e0cd3ef0ea60d3df4eeb4eb4831cf4b9a58babeb712bf394350ea8e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_b279903e0cd3ef0ea60d3df4eeb4eb4831cf4b9a58babeb712bf394350ea8e49->leave($__internal_b279903e0cd3ef0ea60d3df4eeb4eb4831cf4b9a58babeb712bf394350ea8e49_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0d030b6d9af94afc0ddee439ce56d790c7ec4826f6376b0b923dbddc15bab19 = $this->env->getExtension("native_profiler");
        $__internal_c0d030b6d9af94afc0ddee439ce56d790c7ec4826f6376b0b923dbddc15bab19->enter($__internal_c0d030b6d9af94afc0ddee439ce56d790c7ec4826f6376b0b923dbddc15bab19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c0d030b6d9af94afc0ddee439ce56d790c7ec4826f6376b0b923dbddc15bab19->leave($__internal_c0d030b6d9af94afc0ddee439ce56d790c7ec4826f6376b0b923dbddc15bab19_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 19,  115 => 18,  109 => 17,  99 => 14,  93 => 13,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 21,  50 => 17,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Asignacion de Tareas!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {{include('menu.html.twig')}}*/
/*         {% endblock %}*/
/*         */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery-1.12.1.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/*  */
