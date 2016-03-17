<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cede801f064560025d8bc346d7fe81c531ae5badcff8f902e6a738afc6f2b00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f0b5183dd3a7168c630d8abf2be92a60f684ed75bc63d75e060dc8c4c5435543 = $this->env->getExtension("native_profiler");
        $__internal_f0b5183dd3a7168c630d8abf2be92a60f684ed75bc63d75e060dc8c4c5435543->enter($__internal_f0b5183dd3a7168c630d8abf2be92a60f684ed75bc63d75e060dc8c4c5435543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0b5183dd3a7168c630d8abf2be92a60f684ed75bc63d75e060dc8c4c5435543->leave($__internal_f0b5183dd3a7168c630d8abf2be92a60f684ed75bc63d75e060dc8c4c5435543_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc807ed75143f3bbbea7fdb8556e961cc2b1698b6809f191e60029eb84a303d = $this->env->getExtension("native_profiler");
        $__internal_1cc807ed75143f3bbbea7fdb8556e961cc2b1698b6809f191e60029eb84a303d->enter($__internal_1cc807ed75143f3bbbea7fdb8556e961cc2b1698b6809f191e60029eb84a303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1cc807ed75143f3bbbea7fdb8556e961cc2b1698b6809f191e60029eb84a303d->leave($__internal_1cc807ed75143f3bbbea7fdb8556e961cc2b1698b6809f191e60029eb84a303d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef52da82fe72324b75a6fb61fbc76108c518ce7ccb5ecf54f681aa3d5a25ebcb = $this->env->getExtension("native_profiler");
        $__internal_ef52da82fe72324b75a6fb61fbc76108c518ce7ccb5ecf54f681aa3d5a25ebcb->enter($__internal_ef52da82fe72324b75a6fb61fbc76108c518ce7ccb5ecf54f681aa3d5a25ebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ef52da82fe72324b75a6fb61fbc76108c518ce7ccb5ecf54f681aa3d5a25ebcb->leave($__internal_ef52da82fe72324b75a6fb61fbc76108c518ce7ccb5ecf54f681aa3d5a25ebcb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
