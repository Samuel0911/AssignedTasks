<?php

/* SAMUserBundle:User:messages/success.html.twig */
class __TwigTemplate_6d5320b463ecb8066cbb0c55254b2ca305b803358dc4fc726951b5a0aefe17f2 extends Twig_Template
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
        $__internal_0162577ee5f49773de925a0f559e9c88617c654485d027505251b96a41de8ccc = $this->env->getExtension("native_profiler");
        $__internal_0162577ee5f49773de925a0f559e9c88617c654485d027505251b96a41de8ccc->enter($__internal_0162577ee5f49773de925a0f559e9c88617c654485d027505251b96a41de8ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SAMUserBundle:User:messages/success.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 3
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t\t<div class=\"container\">";
            // line 4
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0162577ee5f49773de925a0f559e9c88617c654485d027505251b96a41de8ccc->leave($__internal_0162577ee5f49773de925a0f559e9c88617c654485d027505251b96a41de8ccc_prof);

    }

    public function getTemplateName()
    {
        return "SAMUserBundle:User:messages/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/* 	<div class="alert alert-success" role="alert">*/
/* 		<div class="container">{{ flashMessage }}</div>*/
/* 	</div>*/
/* {% endfor %}*/
