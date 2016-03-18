<?php

/* menu.html.twig */
class __TwigTemplate_6cb819abe9b6225173b3eee9e0ccd514c4b9c623654094794cc69155ed81cbd7 extends Twig_Template
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
        $__internal_b27fac8ff5b4b3ff372f5fd9b0d014ad54a77b4f5d1e03d6411a7fc3b2fd54c0 = $this->env->getExtension("native_profiler");
        $__internal_b27fac8ff5b4b3ff372f5fd9b0d014ad54a77b4f5d1e03d6411a7fc3b2fd54c0->enter($__internal_b27fac8ff5b4b3ff372f5fd9b0d014ad54a77b4f5d1e03d6411a7fc3b2fd54c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Assignments"), "html", null, true);
        echo " </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("About"), "html", null, true);
        echo "<span class=\"sr-only\">(current)</span></a></li>
                      
        
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Users"), "html", null, true);
        echo " <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sam_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("List Users"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sam_user_add");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New User"), "html", null, true);
        echo "</a></li>
            <!--
            TOMAR EN CUENTA EL CODIGO DE LA LINEA DE SEPARACION
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">One more separated link</a></li>-->
          </ul>
        </li>

      </ul>

<!--
      <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>

-->
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li role=\"separator\" class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_b27fac8ff5b4b3ff372f5fd9b0d014ad54a77b4f5d1e03d6411a7fc3b2fd54c0->leave($__internal_b27fac8ff5b4b3ff372f5fd9b0d014ad54a77b4f5d1e03d6411a7fc3b2fd54c0_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  55 => 23,  50 => 21,  43 => 17,  34 => 11,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#">{{ 'Assignments'|trans }} </a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="#">{{ 'About'|trans }}<span class="sr-only">(current)</span></a></li>*/
/*                       */
/*         */
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'Users'|trans }} <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{path('sam_user_index')}}">{{ 'List Users'|trans }}</a></li>*/
/*             <li><a href="{{path('sam_user_add')}}">{{ 'New User'|trans }}</a></li>*/
/*             <!--*/
/*             TOMAR EN CUENTA EL CODIGO DE LA LINEA DE SEPARACION*/
/*             <li><a href="#">Another action</a></li>*/
/*             <li><a href="#">Something else here</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="#">Separated link</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="#">One more separated link</a></li>-->*/
/*           </ul>*/
/*         </li>*/
/* */
/*       </ul>*/
/* */
/* <!--*/
/*       <form class="navbar-form navbar-left" role="search">*/
/*         <div class="form-group">*/
/*           <input type="text" class="form-control" placeholder="Search">*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default">Submit</button>*/
/*       </form>*/
/* */
/* -->*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="#">Link</a></li>*/
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="#">Action</a></li>*/
/*             <li><a href="#">Another action</a></li>*/
/*             <li><a href="#">Something else here</a></li>*/
/*             <li role="separator" class="divider"></li>*/
/*             <li><a href="#">Separated link</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/* */
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
