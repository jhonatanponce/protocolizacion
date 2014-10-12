<?php

/* SrpvAdminBundle:TasaFongar:index.html.twig */
class __TwigTemplate_91252e9fc11ef2b8b9547913cd1360e811076b9802560efd5efc3b52eb967c24 extends Twig_Template
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
            <span class=\"glyphicon glyphicon-list-alt\"></span>
            <h3 class=\"panel-title\" style=\"display: inline;\">";
        // line 9
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        }
        echo "</h3>
        </div>

        <div id=\"yw0\" class=\"panel-body\">    

            <table class=\"records_list table table-bordered table-striped table-hover\" border=\"1\">
                <thead>
                    <tr class=\"success\">
                        <th>Id</th>
                        <th>Estatus</th>
                        <th>Fecha Actualizacion</th>
                        <th>Fecha Creación</th>
                        <th>Observaciones</th>
                        <th>% Inicial</th>
                        <th>% Renovacion</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 29
            echo "                    <tr>
                        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tasafongar_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estatus"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActualizacion")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaActualizacion"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 33
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaCreacion")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaCreacion"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones"), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "porcentajeInicial"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "porcentajeRenovacion"), "html", null, true);
            echo "</td>
                        <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tasafongar_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tasafongar_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div align=\"right\">
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\" class=\"btn btn-success\" role=\"button\">Inicio</a>
        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("tasafongar_new");
        echo "\" class=\"btn btn-primary\">Crear Registro</a>
    </div>
    <br>
";
    }

    public function getTemplateName()
    {
        return "SrpvAdminBundle:TasaFongar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 55,  132 => 54,  125 => 49,  113 => 43,  107 => 40,  100 => 36,  96 => 35,  92 => 34,  86 => 33,  80 => 32,  76 => 31,  70 => 30,  67 => 29,  63 => 28,  39 => 9,  31 => 4,  28 => 3,);
    }
}
