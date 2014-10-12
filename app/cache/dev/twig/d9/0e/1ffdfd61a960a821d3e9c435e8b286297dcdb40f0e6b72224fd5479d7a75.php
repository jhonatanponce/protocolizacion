<?php

/* SrpvAdminBundle:TasaFongar:show.html.twig */
class __TwigTemplate_d90e1ffdfd61a960a821d3e9c435e8b286297dcdb40f0e6b72224fd5479d7a75 extends Twig_Template
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
            <span class=\"glyphicon glyphicon-record\"></span>
            <h3 class=\"panel-title\" style=\"display: inline;\">Detalle Tasa Fongar</h3>
        </div>

        <div id=\"yw0\" class=\"panel-body table-responsive\">

            <table class=\"records_list table table-bordered table-striped table-hover\" border=\"1\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Estatus</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fecha Actualizacion</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActualizacion"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Fecha Creacion</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaCreacion"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Observaciones</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Porcentaje Inicial</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "porcentajeInicial"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Porcentaje Renovación</th>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "porcentajeRenovacion"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <div class=\"delete\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 51
        if (array_key_exists("delete_form", $context)) {
            // line 52
            echo "                            ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "
                        ";
        }
        // line 53
        echo " 
                    </div>
                    <div class=\"col-md-2\">
                        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tasafongar_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Modificar</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <div align=\"right\">
        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("tasafongar");
        echo "\" class=\"btn btn-success\" role=\"button\">Volver</a>
    </div>

    <br>            
";
    }

    public function getTemplateName()
    {
        return "SrpvAdminBundle:TasaFongar:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 64,  115 => 56,  110 => 53,  104 => 52,  102 => 51,  90 => 42,  83 => 38,  76 => 34,  69 => 30,  62 => 26,  55 => 22,  48 => 18,  31 => 4,  28 => 3,);
    }
}
