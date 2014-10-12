<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_2585fb9302247fc9dc3722e21e5a60a42f7996feaae9f35bafd0f8b45bfa2fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<strong>Explanation:</strong>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                echo twig_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 83,  230 => 82,  227 => 81,  224 => 79,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  171 => 64,  163 => 62,  159 => 61,  143 => 55,  138 => 54,  135 => 53,  119 => 42,  102 => 32,  91 => 27,  78 => 22,  59 => 14,  28 => 3,  26 => 6,  46 => 7,  94 => 28,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  24 => 4,  21 => 2,  44 => 12,  31 => 5,  25 => 3,  19 => 1,  136 => 49,  126 => 17,  87 => 25,  77 => 35,  71 => 19,  67 => 17,  63 => 15,  58 => 29,  53 => 26,  38 => 13,  27 => 4,  23 => 1,  79 => 18,  72 => 16,  69 => 12,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 41,  120 => 16,  115 => 39,  111 => 38,  108 => 36,  101 => 24,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 4,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 71,  193 => 73,  189 => 71,  187 => 70,  182 => 70,  176 => 64,  173 => 65,  168 => 62,  164 => 58,  162 => 57,  154 => 58,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 41,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 19,  73 => 33,  64 => 17,  60 => 6,  57 => 16,  54 => 12,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
