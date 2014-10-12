<?php

/* ::login.html.twig */
class __TwigTemplate_06b4d9479260a419722874696a61e79d0600799be3588e4ed1755731d42357f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::inicio.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::inicio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "    <br/>
    <h2 class=\"alert alert-dismissable alert-success alert-link text-center\">
        <strong>Sistema de Protocolización de Viviendas</strong>
    </h2>
    ";
        // line 42
        echo "
    <form action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_login_check");
        echo "\" method=\"post\" class=\"box form-horizontal\" role=\"form\" id=\"form\">

        <div>
            ";
        // line 46
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array(), "any", true, true)) {
            // line 47
            echo "                <div class=\"alert alert-dismissable alert-danger\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    <strong>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "! </strong> 
                    Por favor intente de nuevo
                </div>
                <br/>
            ";
        }
        // line 54
        echo "            ";
        if (array_key_exists("ultimo_nombre", $context)) {
            echo " 
                ";
            // line 55
            $context["v_ultimo_nombre"] = (isset($context["ultimo_nombre"]) ? $context["ultimo_nombre"] : $this->getContext($context, "ultimo_nombre"));
            // line 56
            echo "            ";
        } else {
            // line 57
            echo "                ";
            $context["v_ultimo_nombre"] = null;
            // line 58
            echo "            ";
        }
        echo " 

            <div class=\"well well-lg col-lg11\">

                <div class=\"form-group\">
                    <label for=\"_usinsajo\" class=\"col-sm-4 control-label\">Usuario:</label>
                    <div class=\"col-sm-4\">
                        <input type=\"text\" class=\"form-control\" id=\"_usinsajo\" name=\"_usinsajo\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["v_ultimo_nombre"]) ? $context["v_ultimo_nombre"] : $this->getContext($context, "v_ultimo_nombre")), "html", null, true);
        echo "\" required placeholder=\"Ingrese su usuario...\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"_psinsajo\" class=\"col-sm-4 control-label\">Clave:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class=\"col-sm-4\">
                        <input type=\"password\" class=\"form-control\" id=\"_psinsajo\" name=\"_psinsajo\" required placeholder=\"Ingrese su clave...\">
                    </div>
                </div>

                <div class=\"form-group\" style=\"text-align: center\">
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"Conectarse\" value=\"Conectar\" id=\"conectarse\" rel=\"tooltip\" title=\"Conectar\">
                    <input type=\"reset\" class=\"btn btn-default\" name=\"reset\" value=\"Limpiar\" id=\"reset\" rel=\"tooltip\" title=\"Borrar\">
                </div> 
                    
            </div>
                    
        </div>
                    
    </form>

";
    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 65,  73 => 58,  70 => 57,  67 => 56,  65 => 55,  60 => 54,  52 => 49,  48 => 47,  46 => 46,  40 => 43,  37 => 42,  31 => 19,  28 => 18,);
    }
}
