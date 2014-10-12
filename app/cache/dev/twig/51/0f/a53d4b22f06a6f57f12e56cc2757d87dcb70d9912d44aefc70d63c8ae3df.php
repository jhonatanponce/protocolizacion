<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_510fa53d4b22f06a6f57f12e56cc2757d87dcb70d9912d44aefc70d63c8ae3df extends Twig_Template
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
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  31 => 4,  25 => 3,  19 => 1,  136 => 49,  126 => 17,  87 => 40,  77 => 35,  71 => 32,  67 => 31,  63 => 30,  58 => 29,  53 => 26,  38 => 18,  27 => 13,  23 => 1,  79 => 21,  72 => 13,  69 => 12,  47 => 23,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 32,  123 => 41,  120 => 16,  115 => 39,  111 => 38,  108 => 55,  101 => 50,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  55 => 27,  52 => 21,  50 => 14,  43 => 9,  41 => 8,  35 => 5,  32 => 16,  29 => 6,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 49,  95 => 28,  92 => 29,  86 => 24,  82 => 22,  80 => 24,  73 => 33,  64 => 19,  60 => 6,  57 => 12,  54 => 22,  51 => 9,  48 => 9,  45 => 17,  42 => 6,  39 => 6,  36 => 17,  33 => 4,  30 => 3,);
    }
}
