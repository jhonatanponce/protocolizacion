<?php

/* ComunesSecurityBundle:Security:indexAdmin.html.twig */
class __TwigTemplate_e9595abb2bd6ad6601c5312a7646ef24e61af889ad56ef02c92e02a00315522a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 16
    public function block_main($context, array $blocks = array())
    {
        // line 42
        echo "
    <div>
        HOLA MUNDO
    </div>
";
    }

    public function getTemplateName()
    {
        return "ComunesSecurityBundle:Security:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 42,  28 => 16,);
    }
}
