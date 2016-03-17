<?php

/* menu.html.twig */
class __TwigTemplate_f124881fbf74c73456b9c7dd163f729f8dc57d35bb07e9ebbe2e840bf447e3e6 extends Twig_Template
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
        $__internal_a5aee09ae7ef67a764599fee1227c9dc9469b152a0ec1767487f6dd9a23017a2 = $this->env->getExtension("native_profiler");
        $__internal_a5aee09ae7ef67a764599fee1227c9dc9469b152a0ec1767487f6dd9a23017a2->enter($__internal_a5aee09ae7ef67a764599fee1227c9dc9469b152a0ec1767487f6dd9a23017a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
      <a class=\"navbar-brand\" href=\"#\">Assignments</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Quienes Somos <span class=\"sr-only\">(current)</span></a></li>
                      
        
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Users <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sam_user_index");
        echo "\">List Users</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("sam_user_add");
        echo "\">New User</a></li>
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
        
        $__internal_a5aee09ae7ef67a764599fee1227c9dc9469b152a0ec1767487f6dd9a23017a2->leave($__internal_a5aee09ae7ef67a764599fee1227c9dc9469b152a0ec1767487f6dd9a23017a2_prof);

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
        return array (  50 => 24,  46 => 23,  22 => 1,);
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
/*       <a class="navbar-brand" href="#">Assignments</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="#">Quienes Somos <span class="sr-only">(current)</span></a></li>*/
/*                       */
/*         */
/*         <li class="dropdown">*/
/*           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Users <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu">*/
/*             <li><a href="{{path('sam_user_index')}}">List Users</a></li>*/
/*             <li><a href="{{path('sam_user_add')}}">New User</a></li>*/
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
