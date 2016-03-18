<?php

/* layout.html.twig */
class __TwigTemplate_13c6a4d39aca24d565190bd53772ee002c165b20de275bd926fc85ef0f29509f extends Twig_Template
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
        $__internal_fe2be9173ec44290458e92c229b2ffb5b59175c1ea6cc74e7c9ed193432be6c2 = $this->env->getExtension("native_profiler");
        $__internal_fe2be9173ec44290458e92c229b2ffb5b59175c1ea6cc74e7c9ed193432be6c2->enter($__internal_fe2be9173ec44290458e92c229b2ffb5b59175c1ea6cc74e7c9ed193432be6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_fe2be9173ec44290458e92c229b2ffb5b59175c1ea6cc74e7c9ed193432be6c2->leave($__internal_fe2be9173ec44290458e92c229b2ffb5b59175c1ea6cc74e7c9ed193432be6c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c8011dbc80be68d00a3d84fb43ca9b5d5a9a7e4d17fcf341bc52c35a6158274 = $this->env->getExtension("native_profiler");
        $__internal_5c8011dbc80be68d00a3d84fb43ca9b5d5a9a7e4d17fcf341bc52c35a6158274->enter($__internal_5c8011dbc80be68d00a3d84fb43ca9b5d5a9a7e4d17fcf341bc52c35a6158274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignacion de Tareas!";
        
        $__internal_5c8011dbc80be68d00a3d84fb43ca9b5d5a9a7e4d17fcf341bc52c35a6158274->leave($__internal_5c8011dbc80be68d00a3d84fb43ca9b5d5a9a7e4d17fcf341bc52c35a6158274_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_282c8bc0c681380eac5c8aef1818a6585062364ec568539f1f99361bc801e304 = $this->env->getExtension("native_profiler");
        $__internal_282c8bc0c681380eac5c8aef1818a6585062364ec568539f1f99361bc801e304->enter($__internal_282c8bc0c681380eac5c8aef1818a6585062364ec568539f1f99361bc801e304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_282c8bc0c681380eac5c8aef1818a6585062364ec568539f1f99361bc801e304->leave($__internal_282c8bc0c681380eac5c8aef1818a6585062364ec568539f1f99361bc801e304_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_681263244b0d309631c7f89c1cb88a9532a621ebc625f8c2d423ec0499781d19 = $this->env->getExtension("native_profiler");
        $__internal_681263244b0d309631c7f89c1cb88a9532a621ebc625f8c2d423ec0499781d19->enter($__internal_681263244b0d309631c7f89c1cb88a9532a621ebc625f8c2d423ec0499781d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_681263244b0d309631c7f89c1cb88a9532a621ebc625f8c2d423ec0499781d19->leave($__internal_681263244b0d309631c7f89c1cb88a9532a621ebc625f8c2d423ec0499781d19_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ae5bd871beec557ccb2ca8533e926b26d4f3f2da228bad036dac3ea880b7c33 = $this->env->getExtension("native_profiler");
        $__internal_9ae5bd871beec557ccb2ca8533e926b26d4f3f2da228bad036dac3ea880b7c33->enter($__internal_9ae5bd871beec557ccb2ca8533e926b26d4f3f2da228bad036dac3ea880b7c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9ae5bd871beec557ccb2ca8533e926b26d4f3f2da228bad036dac3ea880b7c33->leave($__internal_9ae5bd871beec557ccb2ca8533e926b26d4f3f2da228bad036dac3ea880b7c33_prof);

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
