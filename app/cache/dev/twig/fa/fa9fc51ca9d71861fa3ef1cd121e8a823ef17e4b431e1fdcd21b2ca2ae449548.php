<?php

/* SAMUserBundle:User:index.html.twig */
class __TwigTemplate_b081af4d8d48df79c0a8e77fcb35abe2b63b28a8e61d732374f4ebb598ec3df9 extends Twig_Template
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
        $__internal_2be1423efb15595c3faefba8805251dec4952dc30cbd808e1aa1dd7177d11fef = $this->env->getExtension("native_profiler");
        $__internal_2be1423efb15595c3faefba8805251dec4952dc30cbd808e1aa1dd7177d11fef->enter($__internal_2be1423efb15595c3faefba8805251dec4952dc30cbd808e1aa1dd7177d11fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SAMUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be1423efb15595c3faefba8805251dec4952dc30cbd808e1aa1dd7177d11fef->leave($__internal_2be1423efb15595c3faefba8805251dec4952dc30cbd808e1aa1dd7177d11fef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd459b7de871efa866e4b4c7207d6d6c2148ff1489422979269062f2cbe1f364 = $this->env->getExtension("native_profiler");
        $__internal_dd459b7de871efa866e4b4c7207d6d6c2148ff1489422979269062f2cbe1f364->enter($__internal_dd459b7de871efa866e4b4c7207d6d6c2148ff1489422979269062f2cbe1f364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t
\t";
        // line 8
        echo "\t";
        echo twig_include($this->env, $context, "SAMUserBundle:User:messages/success.html.twig");
        echo "

<div class=\"container\">
\t<div class=\"col-md-12\">
\t\t<div class=\"page-header\">
\t\t\t<h2 class=\"page-padding-none\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Users"), "html", null, true);
        echo "</h2>
\t\t</div>

\t\t<div class=\"table-responsive\">
\t\t\t";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Total records:", array(), "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t<thead>\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Username"), "u.username");
        // line 22
        echo " </th>
\t\t\t\t\t\t<th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("First Name"), "u.firstName");
        // line 24
        echo " </th>
\t\t\t\t\t\t<th>";
        // line 25
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Last Name"), "u.lastName");
        // line 26
        echo " </th>
\t\t\t\t\t\t<th>";
        // line 27
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Email"), "u.email");
        // line 28
        echo " </th>
\t\t\t\t\t\t<th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Role"), "u.role");
        // line 30
        echo " </th>
\t\t\t\t\t\t<th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Created"), "u.createdAt");
        // line 32
        echo " </th>
\t\t\t\t\t\t<th>";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Updated"), "u.updatedAt");
        // line 34
        echo " </th>\t\t\t\t
\t\t\t\t\t\t<th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 46
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Administrator"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 48
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-info\" >";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View"), "html", null, true);
            echo " </a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
\t\t\t\t</tbody>\t

\t\t\t</table>
\t\t\t";
        // line 67
        echo "\t\t\t<div class=\"navigation\">
\t\t\t\t";
        // line 68
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t</div>

\t</div>
</div>
";
        
        $__internal_dd459b7de871efa866e4b4c7207d6d6c2148ff1489422979269062f2cbe1f364->leave($__internal_dd459b7de871efa866e4b4c7207d6d6c2148ff1489422979269062f2cbe1f364_prof);

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
        return array (  194 => 68,  191 => 67,  185 => 62,  174 => 57,  170 => 56,  166 => 55,  161 => 53,  157 => 52,  154 => 51,  148 => 49,  146 => 48,  141 => 47,  139 => 46,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  119 => 40,  115 => 39,  108 => 35,  105 => 34,  103 => 33,  100 => 32,  98 => 31,  95 => 30,  93 => 29,  90 => 28,  88 => 27,  85 => 26,  83 => 25,  80 => 24,  78 => 23,  75 => 22,  73 => 21,  64 => 17,  57 => 13,  48 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	{{ parent() }}*/
/* 	*/
/* 	{# importamos la traudccion de los mensajes success #}*/
/* 	{{ include('SAMUserBundle:User:messages/success.html.twig') }}*/
/* */
/* <div class="container">*/
/* 	<div class="col-md-12">*/
/* 		<div class="page-header">*/
/* 			<h2 class="page-padding-none">{{ 'Users'|trans }}</h2>*/
/* 		</div>*/
/* */
/* 		<div class="table-responsive">*/
/* 			{% trans %} Total records: {% endtrans %} {{ pagination.getTotalItemCount }}*/
/* 			<table class="table table-striped table-hover">*/
/* 				<thead>					*/
/* 					<tr>*/
/* 						<th>{{ knp_pagination_sortable(pagination, 'Username'|trans,*/
/* 							'u.username') }} </th>*/
/* 						<th>{{ knp_pagination_sortable(pagination, 'First Name'|trans,*/
/* 							'u.firstName') }} </th>*/
/* 						<th>{{ knp_pagination_sortable(pagination, 'Last Name'|trans,*/
/* 							'u.lastName') }} </th>*/
/* 						<th>{{ knp_pagination_sortable(pagination, 'Email'|trans,*/
/* 							'u.email') }} </th>*/
/* 						<th>{{ knp_pagination_sortable(pagination, 'Role'|trans,*/
/* 							'u.role') }} </th>*/
/* 						<th>{{ knp_pagination_sortable(pagination, 'Created'|trans,*/
/* 							'u.createdAt') }} </th>*/
/* 						<th>{{ knp_pagination_sortable(pagination, 'Updated'|trans,*/
/* 							'u.updatedAt') }} </th>				*/
/* 						<th>{{ 'Actions'|trans }}</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{% for user in pagination %}*/
/* 					<tr>*/
/* 						<td>{{user.username}}</td>*/
/* 						<td>{{user.firstname}}</td>*/
/* 						<td>{{user.lastname}}</td>*/
/* 						<td>{{user.email}}</td>*/
/* 						<td>*/
/* 							{% if user.role == 'ROLE_ADMIN' %}*/
/* 								<strong>{{ 'Administrator'|trans }}</strong>*/
/* 							{% elseif user.role == 'ROLE_USER' %}*/
/* 								<strong>{{ 'User'|trans }}</strong>*/
/* 							{% endif %}*/
/* 						</td>*/
/* 						<td>{{user.createdAt|date('d-m-Y H:i')}}</td>*/
/* 						<td>{{user.updatedAt|date('d-m-Y H:i')}}</td>*/
/* 						<td class="actions">*/
/* 							<a href="#" class="btn btn-sm btn-info" >{{ 'View'|trans }} </a>*/
/* 							<a href="#" class="btn btn-sm btn-primary">{{ 'Edit'|trans }}</a>*/
/* 							<a href="#" class="btn btn-sm btn-danger btn-delete">{{ 'Delete'|trans }}</a>*/
/* 						</td>*/
/* 					</tr>*/
/* */
/* 					{% endfor %}*/
/* */
/* 				</tbody>	*/
/* */
/* 			</table>*/
/* 			{# display navigation mostramos los numeros de paginas #}*/
/* 			<div class="navigation">*/
/* 				{{ knp_pagination_render(pagination) }}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* 	*/
