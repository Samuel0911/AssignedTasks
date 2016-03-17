<?php

/* base.html.twig */
class __TwigTemplate_164e4221fd76613d6ac5c75e87534d7b3c40161f9548f2d6217b34e0aadac27c extends Twig_Template
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
        $__internal_f2ef58c5973bccc8c9a9d3e527e6a732a0d55b67780555165d92c9672eec12bf = $this->env->getExtension("native_profiler");
        $__internal_f2ef58c5973bccc8c9a9d3e527e6a732a0d55b67780555165d92c9672eec12bf->enter($__internal_f2ef58c5973bccc8c9a9d3e527e6a732a0d55b67780555165d92c9672eec12bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f2ef58c5973bccc8c9a9d3e527e6a732a0d55b67780555165d92c9672eec12bf->leave($__internal_f2ef58c5973bccc8c9a9d3e527e6a732a0d55b67780555165d92c9672eec12bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ce56ea48c404e68b821e197d62e77b25408684f49c817807b75b2fc63c8e6d1 = $this->env->getExtension("native_profiler");
        $__internal_4ce56ea48c404e68b821e197d62e77b25408684f49c817807b75b2fc63c8e6d1->enter($__internal_4ce56ea48c404e68b821e197d62e77b25408684f49c817807b75b2fc63c8e6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4ce56ea48c404e68b821e197d62e77b25408684f49c817807b75b2fc63c8e6d1->leave($__internal_4ce56ea48c404e68b821e197d62e77b25408684f49c817807b75b2fc63c8e6d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e478a045e667cd00b2e7b3fd341e92d50b4400996c2b623b5ba26b9e1459d90a = $this->env->getExtension("native_profiler");
        $__internal_e478a045e667cd00b2e7b3fd341e92d50b4400996c2b623b5ba26b9e1459d90a->enter($__internal_e478a045e667cd00b2e7b3fd341e92d50b4400996c2b623b5ba26b9e1459d90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e478a045e667cd00b2e7b3fd341e92d50b4400996c2b623b5ba26b9e1459d90a->leave($__internal_e478a045e667cd00b2e7b3fd341e92d50b4400996c2b623b5ba26b9e1459d90a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0301e810ad4e6395dbefe58ed65bf81667b3e96608e2b7b1fc25003987e07cbb = $this->env->getExtension("native_profiler");
        $__internal_0301e810ad4e6395dbefe58ed65bf81667b3e96608e2b7b1fc25003987e07cbb->enter($__internal_0301e810ad4e6395dbefe58ed65bf81667b3e96608e2b7b1fc25003987e07cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0301e810ad4e6395dbefe58ed65bf81667b3e96608e2b7b1fc25003987e07cbb->leave($__internal_0301e810ad4e6395dbefe58ed65bf81667b3e96608e2b7b1fc25003987e07cbb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_830794c71cfdbb275db4ff24a67b52d15cd363f003c98cf424d1a15cf675ce4f = $this->env->getExtension("native_profiler");
        $__internal_830794c71cfdbb275db4ff24a67b52d15cd363f003c98cf424d1a15cf675ce4f->enter($__internal_830794c71cfdbb275db4ff24a67b52d15cd363f003c98cf424d1a15cf675ce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_830794c71cfdbb275db4ff24a67b52d15cd363f003c98cf424d1a15cf675ce4f->leave($__internal_830794c71cfdbb275db4ff24a67b52d15cd363f003c98cf424d1a15cf675ce4f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
