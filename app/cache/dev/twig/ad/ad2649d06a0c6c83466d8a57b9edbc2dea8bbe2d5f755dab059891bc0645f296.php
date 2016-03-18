<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_32addce4207b93187ae0bf539ab319da912337a6518616a2a304ac7db1f8c4bb extends Twig_Template
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
        $__internal_f50a65ea92b33d5a1ed6354c39664c06b28cbd98f801f861d5255614f884a3bc = $this->env->getExtension("native_profiler");
        $__internal_f50a65ea92b33d5a1ed6354c39664c06b28cbd98f801f861d5255614f884a3bc->enter($__internal_f50a65ea92b33d5a1ed6354c39664c06b28cbd98f801f861d5255614f884a3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f50a65ea92b33d5a1ed6354c39664c06b28cbd98f801f861d5255614f884a3bc->leave($__internal_f50a65ea92b33d5a1ed6354c39664c06b28cbd98f801f861d5255614f884a3bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b24ea3c158e322d30927f7d53f69d7c44c12e065724dc1293e27492b401e3ecd = $this->env->getExtension("native_profiler");
        $__internal_b24ea3c158e322d30927f7d53f69d7c44c12e065724dc1293e27492b401e3ecd->enter($__internal_b24ea3c158e322d30927f7d53f69d7c44c12e065724dc1293e27492b401e3ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b24ea3c158e322d30927f7d53f69d7c44c12e065724dc1293e27492b401e3ecd->leave($__internal_b24ea3c158e322d30927f7d53f69d7c44c12e065724dc1293e27492b401e3ecd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef93266232a08dbfad200d90ccb8fc9c125d30f99bee51cfd3b469dc49ecb8fc = $this->env->getExtension("native_profiler");
        $__internal_ef93266232a08dbfad200d90ccb8fc9c125d30f99bee51cfd3b469dc49ecb8fc->enter($__internal_ef93266232a08dbfad200d90ccb8fc9c125d30f99bee51cfd3b469dc49ecb8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef93266232a08dbfad200d90ccb8fc9c125d30f99bee51cfd3b469dc49ecb8fc->leave($__internal_ef93266232a08dbfad200d90ccb8fc9c125d30f99bee51cfd3b469dc49ecb8fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e49339b3f2c49fb2a1917445b75285f7e62d1ba366293c61c89ce4b12b7aa3f6 = $this->env->getExtension("native_profiler");
        $__internal_e49339b3f2c49fb2a1917445b75285f7e62d1ba366293c61c89ce4b12b7aa3f6->enter($__internal_e49339b3f2c49fb2a1917445b75285f7e62d1ba366293c61c89ce4b12b7aa3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e49339b3f2c49fb2a1917445b75285f7e62d1ba366293c61c89ce4b12b7aa3f6->leave($__internal_e49339b3f2c49fb2a1917445b75285f7e62d1ba366293c61c89ce4b12b7aa3f6_prof);

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
