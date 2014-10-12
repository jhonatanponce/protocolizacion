<?php

/* SrpvAdminBundle:TasaFongar:new.html.twig */
class __TwigTemplate_71a7f16f89925fe0022f400e4c50a277c5cd896f477968ac742997c6c167cafa extends Twig_Template
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
            <span class=\"glyphicon glyphicon-plus-sign\"></span>
            <h3 class=\"panel-title\" style=\"display: inline;\">Agregar Tasa Fongar</h3>
        </div>
        
        <div id=\"yw0\" class=\"panel-body\">

            <div class=\"form-group\">
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("style" => "horizontal", "label_col" => 4, "widget_col" => 4));
        echo "
            </div>
        </div>
    </div>
    <div align=\"right\">
        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("tasafongar");
        echo "\" class=\"btn btn-success\" role=\"button\">Volver</a>
    </div>
    <br>         
";
    }

    public function getTemplateName()
    {
        return "SrpvAdminBundle:TasaFongar:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  45 => 15,  31 => 4,  28 => 3,);
    }
}
