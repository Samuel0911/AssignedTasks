<?php

/* SAMUserBundle:User:add.html.twig */
class __TwigTemplate_c0ada2ab792f493220d491f9cc60879cb58838cf1d4e635e3eeec4549f631762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SAMUserBundle:User:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09970e007bb49fda25c5f4d627769b30bfddde8a83600a5b5ff7702b9e796472 = $this->env->getExtension("native_profiler");
        $__internal_09970e007bb49fda25c5f4d627769b30bfddde8a83600a5b5ff7702b9e796472->enter($__internal_09970e007bb49fda25c5f4d627769b30bfddde8a83600a5b5ff7702b9e796472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SAMUserBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09970e007bb49fda25c5f4d627769b30bfddde8a83600a5b5ff7702b9e796472->leave($__internal_09970e007bb49fda25c5f4d627769b30bfddde8a83600a5b5ff7702b9e796472_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3852a59a78e155d0f81e47787e8a5fc7cd7659ded7750b340150afd0dfdf339d = $this->env->getExtension("native_profiler");
        $__internal_3852a59a78e155d0f81e47787e8a5fc7cd7659ded7750b340150afd0dfdf339d->enter($__internal_3852a59a78e155d0f81e47787e8a5fc7cd7659ded7750b340150afd0dfdf339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("New User", array(), "messages");
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => " form")));
        echo "
\t\t\t\t\t
\t\t\t\t\t<fieldset>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your User Name")));
        echo "
\t\t\t\t\t\t\t<!-- validaciones user name -->
\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your First name")));
        echo "
\t\t\t\t\t\t\t<!-- validaciones user name -->
\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your Last name")));
        echo "
\t\t\t\t\t\t\t<!-- validaciones last name -->
\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your Email")));
        echo "
\t\t\t\t\t\t\t<!-- validaciones email -->
\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your Password")));
        echo "
\t\t\t\t\t\t\t<!-- validaciones password -->
\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t<!-- validaciones role -->
\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo $this->env->getExtension('translator')->getTranslator()->trans("Active", array(), "messages");
        echo "\t
\t\t\t\t\t\t\t\t<!-- validaciones isActive del checkbox-->
\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t</fieldset>

\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create User", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t\t</p>

\t\t\t\t";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_3852a59a78e155d0f81e47787e8a5fc7cd7659ded7750b340150afd0dfdf339d->leave($__internal_3852a59a78e155d0f81e47787e8a5fc7cd7659ded7750b340150afd0dfdf339d_prof);

    }

    public function getTemplateName()
    {
        return "SAMUserBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 71,  175 => 68,  165 => 61,  159 => 59,  151 => 54,  146 => 52,  142 => 51,  135 => 47,  130 => 45,  126 => 44,  119 => 40,  114 => 38,  110 => 37,  103 => 33,  98 => 31,  94 => 30,  87 => 26,  82 => 24,  78 => 23,  71 => 19,  66 => 17,  62 => 16,  54 => 11,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{{ parent() }}*/
/* 	<div class="main container">*/
/* 		<div class="row well">*/
/* 			<div class="col-md-6">*/
/* 				<div class="page-header">*/
/* 					<h2>{% trans %}New User{% endtrans %}</h2>*/
/* 				</div>*/
/* 				{{ form_start(form, {'attr' : {'novalidate' : 'novalidate', 'role' : ' form'}}) }}*/
/* 					*/
/* 					<fieldset>*/
/* */
/* 						<div class="form-group">*/
/* 							{{ form_label(form.username) }}*/
/* 							{{ form_widget(form.username, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your User Name'}}) }}*/
/* 							<!-- validaciones user name -->*/
/* 							<span class="text-danger">{{ form_errors(form.username) }}</span>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							{{ form_label(form.firstName) }}*/
/* 							{{ form_widget(form.firstName, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your First name'}}) }}*/
/* 							<!-- validaciones user name -->*/
/* 							<span class="text-danger">{{ form_errors(form.firstName) }}</span>*/
/* 						</div>*/
/* 						*/
/* 						<div class="form-group">*/
/* 							{{ form_label(form.lastName) }}*/
/* 							{{ form_widget(form.lastName, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your Last name'}}) }}*/
/* 							<!-- validaciones last name -->*/
/* 							<span class="text-danger">{{ form_errors(form.lastName) }}</span>*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							{{ form_label(form.email) }}*/
/* 							{{ form_widget(form.email, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your Email'}}) }}*/
/* 							<!-- validaciones email -->*/
/* 							<span class="text-danger">{{ form_errors(form.email) }}</span>*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							{{ form_label(form.password) }}*/
/* 							{{ form_widget(form.password, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your Password'}}) }}*/
/* 							<!-- validaciones password -->*/
/* 							<span class="text-danger">{{ form_errors(form.password) }}</span>*/
/* 						</div>*/
/* */
/* 						<div class="form-group">*/
/* 							{{ form_label(form.role) }}*/
/* 							{{ form_widget(form.role, { 'attr' : {'class' : 'form-control' }}) }}*/
/* 							<!-- validaciones role -->*/
/* 							<span class="text-danger">{{ form_errors(form.role) }}</span>*/
/* 						</div>*/
/* */
/* 						<div class="checkbox">*/
/* 							<label>*/
/* 								{{ form_widget(form.isActive) }}{% trans %}Active{% endtrans %}	*/
/* 								<!-- validaciones isActive del checkbox-->*/
/* 								<span class="text-danger">{{ form_errors(form.isActive) }}</span>*/
/* 							</label>																					*/
/* 						</div>*/
/* */
/* 					</fieldset>*/
/* */
/* 					<p>*/
/* 						{{ form_widget(form.save, {'label' : 'Create User', 'attr' : {'class': 'btn btn-success'}}) }}*/
/* 					</p>*/
/* */
/* 				{{ form_end(form) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
