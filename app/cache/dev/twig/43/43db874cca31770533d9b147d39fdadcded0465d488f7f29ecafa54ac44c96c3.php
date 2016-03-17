<?php

/* SensioDistributionBundle::Configurator/form.html.twig */
class __TwigTemplate_7b0e5e512b18951007ee2fe304a2df1e317777e53bd84cde8aa9a365f6ef5e8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle::Configurator/form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72c1a3291fcb369f8dfda7ce58bdf7b750904ce3e5d09129cfc691dfbb786e2a = $this->env->getExtension("native_profiler");
        $__internal_72c1a3291fcb369f8dfda7ce58bdf7b750904ce3e5d09129cfc691dfbb786e2a->enter($__internal_72c1a3291fcb369f8dfda7ce58bdf7b750904ce3e5d09129cfc691dfbb786e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c1a3291fcb369f8dfda7ce58bdf7b750904ce3e5d09129cfc691dfbb786e2a->leave($__internal_72c1a3291fcb369f8dfda7ce58bdf7b750904ce3e5d09129cfc691dfbb786e2a_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_7a2753db264980c2f558d9442cdf19eb99cdade41ca8ec4d01bbe2707edc25b6 = $this->env->getExtension("native_profiler");
        $__internal_7a2753db264980c2f558d9442cdf19eb99cdade41ca8ec4d01bbe2707edc25b6->enter($__internal_7a2753db264980c2f558d9442cdf19eb99cdade41ca8ec4d01bbe2707edc25b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7a2753db264980c2f558d9442cdf19eb99cdade41ca8ec4d01bbe2707edc25b6->leave($__internal_7a2753db264980c2f558d9442cdf19eb99cdade41ca8ec4d01bbe2707edc25b6_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cc1fe27ee14bbaed977a174dcd2bc64afc1a17beb06d77791439d8bda6a23130 = $this->env->getExtension("native_profiler");
        $__internal_cc1fe27ee14bbaed977a174dcd2bc64afc1a17beb06d77791439d8bda6a23130->enter($__internal_cc1fe27ee14bbaed977a174dcd2bc64afc1a17beb06d77791439d8bda6a23130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cc1fe27ee14bbaed977a174dcd2bc64afc1a17beb06d77791439d8bda6a23130->leave($__internal_cc1fe27ee14bbaed977a174dcd2bc64afc1a17beb06d77791439d8bda6a23130_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cc67413c7a5f22abae742670248aad6078ef2ff3b8daafea08c19682dc46081f = $this->env->getExtension("native_profiler");
        $__internal_cc67413c7a5f22abae742670248aad6078ef2ff3b8daafea08c19682dc46081f->enter($__internal_cc67413c7a5f22abae742670248aad6078ef2ff3b8daafea08c19682dc46081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_cc67413c7a5f22abae742670248aad6078ef2ff3b8daafea08c19682dc46081f->leave($__internal_cc67413c7a5f22abae742670248aad6078ef2ff3b8daafea08c19682dc46081f_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
