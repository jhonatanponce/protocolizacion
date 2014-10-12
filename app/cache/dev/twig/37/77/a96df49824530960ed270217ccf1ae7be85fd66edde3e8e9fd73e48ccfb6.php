<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_3777a96df49824530960ed270217ccf1ae7be85fd66edde3e8e9fd73e48ccfb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 13
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- ******************************************************************************* -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 26
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 27
        echo "    <!-- ******************************************************************************* -->
    ";
        // line 29
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery-ui-1.11.0/jquery-ui.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery-ui-1.11.0/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>        
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jquery-ui-1.11.0/jquery-ui.js"), "html", null, true);
        echo "\"></script>     
";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "</head>
<body>
     <div class=\"container\">";
        // line 35
        if (array_key_exists("msg", $context)) {
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        }
        echo "</div>

    <div class=\"container\">         
        <div class=\"span12\">        
            <!-- Cintillo Encabezado -->
            <div id=\"content\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cintillo_gb60.png"), "html", null, true);
        echo "\" alt=\"Gobierno Bolivariano!\"/></div>            
        </div>  
    
        <div class=\"page-header\">
            <h1 align=\"center\">Sistema de Protocolización de Viviendas </h1>
        </div>
        
        <div class=\"well well-lg col-lg11 alert-danger\" align=\"center\">

            ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
        </div>
                    
    </div>
            <div class=\"container\" align=\"right\">
                <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\" class=\"btn btn-success\" role=\"button\">Inicio</a>
            </div>
       <br>     
            <div class=\"container panel-footer\" align=\"right\"><h6>Desarrollado por: GTI Banavih</h6></div>
     
</body>
</html>
";
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        echo ".:: SISPROV - Sistema de Protocolización de Viviendas ::. .:: Banavih ::.";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  131 => 32,  126 => 17,  120 => 16,  108 => 55,  101 => 50,  99 => 49,  87 => 40,  77 => 35,  73 => 33,  71 => 32,  67 => 31,  63 => 30,  58 => 29,  55 => 27,  53 => 26,  47 => 23,  38 => 18,  36 => 17,  32 => 16,  27 => 13,  23 => 1,);
    }
}
