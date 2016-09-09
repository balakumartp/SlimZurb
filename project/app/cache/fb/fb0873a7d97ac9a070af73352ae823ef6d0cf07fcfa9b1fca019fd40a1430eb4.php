<?php

/* login.twig.html */
class __TwigTemplate_3777e580de7de821534ffce6ffdaee90fd7a7ee0ba384974789363e38a2b64d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "login.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t           <div class=\"row\">
               <div class=\"large-4 medium-4 columns\">
\t\t\t\t\t<div>
\t\t\t\t\t<h2>Login  </h2>
\t\t\t\t\t\t 
\t\t\t\t\t\t\t";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "password_status"), "method"), 0, array()) == 1)) {
            // line 10
            echo "\t\t\t\t\t\t\t\t<div class=\"success\">
\t\t\t\t\t\t\t\tValid Password
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t ";
        }
        // line 14
        echo "\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t \t";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "getMessage", array(0 => "password_status"), "method"), 0, array()) == 2)) {
            // line 16
            echo "\t\t\t\t\t\t\t\t<div class=\"failure\">
\t\t\t\t\t\t\t\tNot Valid, try Again
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t ";
        }
        // line 20
        echo "\t\t\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<form id=\"LoginForm\" method=\"POST\"  action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("postlogin"), "html", null, true);
        echo "\" >
                    <div class=\"row\">
\t\t\t\t\t<div class=\"large-4 columns\">
                        <label >User Name</label> 
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" placeholder=\"User Name\"  />
                    </div>
\t\t\t\t\t</div>
                    <div class=\"row\">
                    <div class=\"large-4 columns\">
                        <label>Password</label> 
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\"    />
\t\t\t\t    </div>
\t\t\t\t\t</div>
                   <div class=\"row\" >
                   <div class=\"large-4 columns\">
                            <input type=\"submit\" name=\"login\" id=\"login\" value=\"Submit\">  
                    </div>
\t\t\t\t\t</div> 
                    </form>
      
 ";
    }

    public function getTemplateName()
    {
        return "login.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  64 => 20,  58 => 16,  56 => 15,  53 => 14,  47 => 10,  45 => 9,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig.html" %}*/
/* {% block title %}{{ page.title }}{% endblock %}*/
/* {% block content %}*/
/* 	           <div class="row">*/
/*                <div class="large-4 medium-4 columns">*/
/* 					<div>*/
/* 					<h2>Login  </h2>*/
/* 						 */
/* 							{% if flash.getMessage('password_status').0 == 1 %}*/
/* 								<div class="success">*/
/* 								Valid Password*/
/* 								</div>*/
/* 							 {%endif %}*/
/* 							 */
/* 							 	{% if flash.getMessage('password_status').0 == 2 %}*/
/* 								<div class="failure">*/
/* 								Not Valid, try Again*/
/* 								</div>*/
/* 							 {%endif %}*/
/* 							 */
/* 					</div>*/
/* 				</div>	*/
/* 				</div>*/
/* 					*/
/* 					<form id="LoginForm" method="POST"  action="{{ path_for('postlogin') }}" >*/
/*                     <div class="row">*/
/* 					<div class="large-4 columns">*/
/*                         <label >User Name</label> */
/*                         <input type="text" class="form-control" id="username" name="username" placeholder="User Name"  />*/
/*                     </div>*/
/* 					</div>*/
/*                     <div class="row">*/
/*                     <div class="large-4 columns">*/
/*                         <label>Password</label> */
/*                         <input type="password" class="form-control" id="password" name="password" placeholder="Password"    />*/
/* 				    </div>*/
/* 					</div>*/
/*                    <div class="row" >*/
/*                    <div class="large-4 columns">*/
/*                             <input type="submit" name="login" id="login" value="Submit">  */
/*                     </div>*/
/* 					</div> */
/*                     </form>*/
/*       */
/*  {% endblock %}*/
/* */
