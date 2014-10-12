<?php

/* ::base.html.twig */
class __TwigTemplate_31f099385c1eb24c19bf3c56cad37d20a7067941ed57d99b2b3c6f8227bf0018 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'user' => array($this, 'block_user'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 17
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- ******************************************************************************* -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Bootstrap -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

        <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
        ";
        // line 30
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 31
        echo "        <!-- ******************************************************************************* -->
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </head>
    
    <body>
    
        <div class=\"container\">         
            <div class=\"span12\">

                <!-- Cintillo Encabezado -->
                <div id=\"content\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cintillo_gb60.png"), "html", null, true);
        echo "\" alt=\"Gobierno Bolivariano!\"/></div>
                <!-- Fin Cintillo Encabezado -->

                <!-- Menu -->
                ";
        // line 45
        $this->displayBlock('menu', $context, $blocks);
        // line 85
        echo "                <!-- Fin Menu -->   
             </div>  

            <!-- Body -->
            ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "
            <!-- Pie de Página -->
            ";
        // line 106
        $this->displayBlock('footer', $context, $blocks);
        // line 112
        echo "            <!-- Fin Pie de Página -->

        </div>

    <!-- ******************************************************************************* -->
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- ******************************************************************************* -->

    </body>
</html>";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo ".:: SISPROV - Sistema de Protocolización de Viviendas ::. .:: Banavih ::.";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        // line 46
        echo "                <br/>
                <div class=\"navbar navbar-default\">
                    <div class=\"navbar-collapse collapse navbar-inverse-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Inicio</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tasas<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("tasafongar");
        echo "\">Fongar</a></li>
                                    <li><a href=\"#\">FAOV</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                    <li class=\"divider\"></li>
                                    <li class=\"dropdown-header\">Dropdown header</li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li><a href=\"#\">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Usuario y Salir -->
                        <div class=\"text-right text-danger:over\">

                            ";
        // line 67
        $this->displayBlock('user', $context, $blocks);
        // line 78
        echo "
                        </div>
                        <!-- Fin Usuario y Salir -->                            
                    </div>
                </div>

                ";
    }

    // line 67
    public function block_user($context, array $blocks = array())
    {
        // line 68
        echo "                                <span class=\"glyphicon glyphicon-off\">
                                   <a href=\"";
        // line 69
        echo "\" class=\"text-info\">Salir</a>
                                </span>
                                <br>
                                asdasd
                                ";
        // line 73
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "nombre", array(), "any", true, true)) {
            // line 74
            echo "                                    <span class=\"glyphicon glyphicon-user\">&nbsp;app.user.nombre</span>
                                ";
        }
        // line 76
        echo "
                            ";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        // line 90
        echo "                ";
        if (array_key_exists("msg", $context)) {
            // line 91
            echo "                    <div class=\"alert alert-dismissable ";
            if (array_key_exists("css_msg", $context)) {
                echo twig_escape_filter($this->env, (isset($context["css_msg"]) ? $context["css_msg"] : null), "html", null, true);
            }
            echo "\">   
                    
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                        ";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
            echo "
                    
                    </div>
                ";
        }
        // line 98
        echo "                ";
        $this->displayBlock('main', $context, $blocks);
        // line 101
        echo "            <!-- Fin de Body -->

            ";
    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        // line 99
        echo "
                ";
    }

    // line 106
    public function block_footer($context, array $blocks = array())
    {
        // line 107
        echo "                <br/>
                <div class=\"panel-footer\" align=\"right\">
                    <strong>Sistema de Protocolización de Viviendas</strong>
                    <h6>Desarrollado por: GTI Banavih</h6></div>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 107,  240 => 106,  235 => 99,  232 => 98,  226 => 101,  223 => 98,  216 => 94,  207 => 91,  204 => 90,  201 => 89,  196 => 76,  192 => 74,  190 => 73,  184 => 69,  181 => 68,  178 => 67,  168 => 78,  166 => 67,  150 => 54,  143 => 50,  137 => 46,  134 => 45,  129 => 32,  124 => 21,  118 => 20,  109 => 120,  104 => 118,  94 => 106,  90 => 104,  88 => 89,  82 => 85,  73 => 41,  61 => 32,  58 => 31,  56 => 30,  50 => 27,  41 => 22,  35 => 20,  30 => 17,  27 => 1,  136 => 55,  132 => 54,  125 => 49,  113 => 43,  107 => 40,  100 => 36,  96 => 112,  92 => 34,  86 => 33,  80 => 45,  76 => 31,  70 => 30,  67 => 29,  63 => 33,  39 => 21,  31 => 4,  28 => 3,);
    }
}
