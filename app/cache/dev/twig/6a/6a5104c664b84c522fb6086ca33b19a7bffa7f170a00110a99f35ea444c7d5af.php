<?php

/* SAMUserBundle:User:add.html.twig */
class __TwigTemplate_0511d9ee6a41a858bd7bae59fb063fa268592ad02f824bd59b5301cf6547cd35 extends Twig_Template
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
        $__internal_27c3b4bd84d9aa7ea1d1cf0dc5e7194687db8e1e397611d416bca096cd0dc70c = $this->env->getExtension("native_profiler");
        $__internal_27c3b4bd84d9aa7ea1d1cf0dc5e7194687db8e1e397611d416bca096cd0dc70c->enter($__internal_27c3b4bd84d9aa7ea1d1cf0dc5e7194687db8e1e397611d416bca096cd0dc70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SAMUserBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c3b4bd84d9aa7ea1d1cf0dc5e7194687db8e1e397611d416bca096cd0dc70c->leave($__internal_27c3b4bd84d9aa7ea1d1cf0dc5e7194687db8e1e397611d416bca096cd0dc70c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e1b767fd8915dce8dfdb30bce435ee793e7ec85f3d75b36f59321ff4bbe78e2 = $this->env->getExtension("native_profiler");
        $__internal_3e1b767fd8915dce8dfdb30bce435ee793e7ec85f3d75b36f59321ff4bbe78e2->enter($__internal_3e1b767fd8915dce8dfdb30bce435ee793e7ec85f3d75b36f59321ff4bbe78e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>New User</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => " form")));
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
        echo "Active\t
\t\t\t\t\t\t\t\t<!-- validaciones isActive del checkbox-->
\t\t\t\t\t\t\t\t<span class=\"text-danger\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
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
        
        $__internal_3e1b767fd8915dce8dfdb30bce435ee793e7ec85f3d75b36f59321ff4bbe78e2->leave($__internal_3e1b767fd8915dce8dfdb30bce435ee793e7ec85f3d75b36f59321ff4bbe78e2_prof);

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
        return array (  177 => 71,  171 => 68,  161 => 61,  156 => 59,  148 => 54,  143 => 52,  139 => 51,  132 => 47,  127 => 45,  123 => 44,  116 => 40,  111 => 38,  107 => 37,  100 => 33,  95 => 31,  91 => 30,  84 => 26,  79 => 24,  75 => 23,  68 => 19,  63 => 17,  59 => 16,  51 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/* 					<h2>New User</h2>*/
/* 				</div>*/
/* 				{{ form_start(form, {'attr' : {'role' : ' form'}}) }}*/
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
/* 								{{ form_widget(form.isActive) }}Active	*/
/* 								<!-- validaciones isActive del checkbox-->*/
/* 								<span class="text-danger">{{ form_errors(form.role) }}</span>*/
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
