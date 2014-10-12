<?php

/* SrpvAdminBundle:TasaFongar:edit.html.twig */
class __TwigTemplate_748df6aca9dcc7f0d629f4ff943cf6fc157959c2d9d61b8f6aa7e2bf4fc07d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
     <div class=\"panel panel-default\">
    
        <div class=\"panel-heading\">
            <span class=\"glyphicon glyphicon-edit\"></span>
            <h3 class=\"panel-title\" style=\"display: inline;\"> Modificar Datos</h3>
        </div>
        
        <div id=\"yw0\" class=\"panel-body\">
            ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form', array("style" => "horizontal", "label_col" => 4, "widget_col" => 4));
        echo "
                
            ";
        // line 15
        if (array_key_exists("delete_form", $context)) {
            // line 16
            echo "                
                <br/>
                ";
            // line 18
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "
                
            ";
        }
        // line 21
        echo "        </div>
    </div>
    
    <div align=\"right\">
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tasafongar");
        echo "\" class=\"btn btn-success\" role=\"button\">Volver</a>  
    </div>
    <br>    
";
    }

    public function getTemplateName()
    {
        return "SrpvAdminBundle:TasaFongar:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  60 => 21,  54 => 18,  50 => 16,  48 => 15,  43 => 13,  31 => 4,  28 => 3,);
    }
}
