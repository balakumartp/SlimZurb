<?php

/* base.twig.html */
class __TwigTemplate_c1d262b32e9eeaf126aea5e2f3ae11e94735d30956048eae0156c91e88a71b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"\">
    ";
        // line 9
        $this->displayBlock('meta', $context, $blocks);
        // line 10
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Custom styles for this template -->
    <!--<link href=\"/css/app.css\" rel=\"stylesheet\">-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
\t<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\">-->
\t <link rel=\"stylesheet\" href=\"css/foundation.css\">
\t <link rel=\"stylesheet\" href=\"css/app.css\">
\t<style>
\t</style>
</head>
<body>
";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script src=\"js/what-input.js\"></script>
<script src=\"js/foundation.js\"></script>
<script src=\"js/app.js\"></script>
</body>
</html>
";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo "A Slim Framework application with ZURB Foundation 3";
    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Slim Project";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"container\">
";
        // line 27
        $this->displayBlock('container', $context, $blocks);
        // line 33
        echo "</div>
";
    }

    // line 27
    public function block_container($context, array $blocks = array())
    {
        echo " 
    <div class=\"row\">      
       <div class=\"col-sm-12\">
        </div> 
    </div>
";
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  95 => 33,  93 => 27,  90 => 26,  87 => 25,  81 => 10,  76 => 9,  70 => 7,  60 => 35,  58 => 25,  39 => 10,  37 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="{% block description %}A Slim Framework application with ZURB Foundation 3{% endblock %}">*/
/*     <meta name="author" content="">*/
/*     {% block meta %}{% endblock %}*/
/*     <title>{% block title %}Slim Project{% endblock %}</title>*/
/*     <!-- Custom styles for this template -->*/
/*     <!--<link href="/css/app.css" rel="stylesheet">-->*/
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* 	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">-->*/
/* 	 <link rel="stylesheet" href="css/foundation.css">*/
/* 	 <link rel="stylesheet" href="css/app.css">*/
/* 	<style>*/
/* 	</style>*/
/* </head>*/
/* <body>*/
/* {% block content %}*/
/* <div class="container">*/
/* {% block container %} */
/*     <div class="row">      */
/*        <div class="col-sm-12">*/
/*         </div> */
/*     </div>*/
/* {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* <script type="text/javascript" src="js/jquery.js"></script>*/
/* <script src="js/what-input.js"></script>*/
/* <script src="js/foundation.js"></script>*/
/* <script src="js/app.js"></script>*/
/* </body>*/
/* </html>*/
/* */
