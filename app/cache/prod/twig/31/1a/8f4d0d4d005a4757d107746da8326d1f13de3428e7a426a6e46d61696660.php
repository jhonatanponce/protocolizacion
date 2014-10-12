<?php

/* ::inicio.html.twig */
class __TwigTemplate_311a8f4d0d4d005a4757d107746da8326d1f13de3428e7a426a6e46d61696660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
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

    // line 17
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 21
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
        // line 22
        echo "        <br/>
        <h2 class=\"alert alert-dismissable alert-success alert-link text-center\">
            <strong>Sistema de Protocolización de Viviendas</strong>
        </h2>
        <div class=\"text-center\">
            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icono_home.png"), "html", null, true);
        echo "\" alt=\"Gobierno Bolivariano!\"/>
        </div>
        
    ";
    }

    public function getTemplateName()
    {
        return "::inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 27,  44 => 22,  38 => 21,  35 => 19,  30 => 17,);
    }
}
