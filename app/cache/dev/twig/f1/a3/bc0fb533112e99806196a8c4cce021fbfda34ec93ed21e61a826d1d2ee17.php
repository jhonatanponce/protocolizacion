<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f1a3bc0fb533112e99806196a8c4cce021fbfda34ec93ed21e61a826d1d2ee17 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  24 => 3,  21 => 2,  44 => 7,  31 => 4,  25 => 3,  19 => 1,  136 => 49,  126 => 17,  87 => 40,  77 => 35,  71 => 32,  67 => 31,  63 => 30,  58 => 29,  53 => 26,  38 => 18,  27 => 4,  23 => 1,  79 => 18,  72 => 16,  69 => 12,  47 => 23,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 32,  123 => 41,  120 => 16,  115 => 39,  111 => 38,  108 => 55,  101 => 24,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  55 => 27,  52 => 21,  50 => 8,  43 => 9,  41 => 7,  35 => 7,  32 => 16,  29 => 4,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 49,  95 => 28,  92 => 21,  86 => 24,  82 => 22,  80 => 24,  73 => 33,  64 => 12,  60 => 6,  57 => 12,  54 => 22,  51 => 9,  48 => 9,  45 => 17,  42 => 6,  39 => 6,  36 => 17,  33 => 5,  30 => 3,);
    }
}
