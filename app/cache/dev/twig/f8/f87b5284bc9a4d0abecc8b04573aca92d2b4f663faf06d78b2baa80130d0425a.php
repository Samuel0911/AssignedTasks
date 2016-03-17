<?php

/* SAMUserBundle:User:index.html.twig */
class __TwigTemplate_f3cf74100854b3be77150ed4915ef5b8d9b2fadfa965e30aa2db4cb55be687f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SAMUserBundle:User:index.html.twig", 1);
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
        $__internal_00d8a0df08925da51c55bbb0644c50f19e49c1bfc57098c73f4a1a4a201c6a11 = $this->env->getExtension("native_profiler");
        $__internal_00d8a0df08925da51c55bbb0644c50f19e49c1bfc57098c73f4a1a4a201c6a11->enter($__internal_00d8a0df08925da51c55bbb0644c50f19e49c1bfc57098c73f4a1a4a201c6a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SAMUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00d8a0df08925da51c55bbb0644c50f19e49c1bfc57098c73f4a1a4a201c6a11->leave($__internal_00d8a0df08925da51c55bbb0644c50f19e49c1bfc57098c73f4a1a4a201c6a11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff164351f8484ed9e1f71af9be2cd77d6ccd33b8e9cab880318c5996a7f6f970 = $this->env->getExtension("native_profiler");
        $__internal_ff164351f8484ed9e1f71af9be2cd77d6ccd33b8e9cab880318c5996a7f6f970->enter($__internal_ff164351f8484ed9e1f71af9be2cd77d6ccd33b8e9cab880318c5996a7f6f970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"container\">
\t<div class=\"col-md-12\">
\t\t<div class=\"page-header\">
\t\t\t<h2 class=\"page-padding-none\">Users</h2>
\t\t</div>

\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<thead>\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Role</th>
\t\t\t\t\t\t<th>Created</th>
\t\t\t\t\t\t<th>Updated</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 35
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 36
                echo "\t\t\t\t\t\t\t\t<strong>Administrator</strong>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 37
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 38
                echo "\t\t\t\t\t\t\t\t<strong>User</strong>
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-info\" >View</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">Edit</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">Delete</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
\t\t\t\t</tbody>\t

\t\t\t</table>

\t\t</div>

\t</div>
</div>
";
        
        $__internal_ff164351f8484ed9e1f71af9be2cd77d6ccd33b8e9cab880318c5996a7f6f970->leave($__internal_ff164351f8484ed9e1f71af9be2cd77d6ccd33b8e9cab880318c5996a7f6f970_prof);

    }

    public function getTemplateName()
    {
        return "SAMUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  111 => 42,  107 => 41,  104 => 40,  100 => 38,  98 => 37,  95 => 36,  93 => 35,  88 => 33,  84 => 32,  80 => 31,  76 => 30,  73 => 29,  69 => 28,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {{ parent() }}*/
/* */
/* <div class="container">*/
/* 	<div class="col-md-12">*/
/* 		<div class="page-header">*/
/* 			<h2 class="page-padding-none">Users</h2>*/
/* 		</div>*/
/* */
/* 		<div class="table-responsive">*/
/* 			<table class="table table-striped table-hover">*/
/* 				<thead>					*/
/* 					<tr>*/
/* 						<th>Username</th>*/
/* 						<th>First Name</th>*/
/* 						<th>Last Name</th>*/
/* 						<th>Email</th>*/
/* 						<th>Role</th>*/
/* 						<th>Created</th>*/
/* 						<th>Updated</th>*/
/* 						<th>Actions</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for user in users %}*/
/* 					<tr>*/
/* 						<td>{{user.username}}</td>*/
/* 						<td>{{user.firstname}}</td>*/
/* 						<td>{{user.lastname}}</td>*/
/* 						<td>{{user.email}}</td>*/
/* 						<td>*/
/* 							{% if user.role == 'ROLE_ADMIN' %}*/
/* 								<strong>Administrator</strong>*/
/* 							{% elseif user.role == 'ROLE_USER' %}*/
/* 								<strong>User</strong>*/
/* 							{% endif %}*/
/* 						</td>*/
/* 						<td>{{user.createdAt|date('d-m-Y H:i')}}</td>*/
/* 						<td>{{user.updatedAt|date('d-m-Y H:i')}}</td>*/
/* 						<td class="actions">*/
/* 							<a href="#" class="btn btn-sm btn-info" >View</a>*/
/* 							<a href="#" class="btn btn-sm btn-primary">Edit</a>*/
/* 							<a href="#" class="btn btn-sm btn-danger btn-delete">Delete</a>*/
/* 						</td>*/
/* 					</tr>*/
/* */
/* 					{% endfor %}*/
/* */
/* 				</tbody>	*/
/* */
/* 			</table>*/
/* */
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* 	*/
