<?php

/* BraincraftedBootstrapBundle::flash.html.twig */
class __TwigTemplate_7d87f8e6861f1b077bca72cd61a4d78514e0dc63a040a8dbd41b3734be35f294 extends Twig_Template
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
        if ((!array_key_exists("translation_domain", $context))) {
            // line 2
            echo "    ";
            $context["translation_domain"] = null;
        }
        // line 4
        if ((!array_key_exists("close", $context))) {
            // line 5
            echo "    ";
            $context["close"] = false;
        }
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert alert-warning\">
        ";
            // line 10
            if ((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close"))) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 17
            if ((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close"))) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 23
            echo "    <div class=\"alert alert-info\">
        ";
            // line 24
            if ((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close"))) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "    <div class=\"alert alert-success\">
        ";
            // line 31
            if ((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close"))) {
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            }
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  110 => 30,  62 => 16,  34 => 8,  459 => 5,  455 => 4,  434 => 187,  424 => 185,  419 => 181,  416 => 180,  406 => 176,  403 => 175,  400 => 174,  397 => 173,  395 => 172,  392 => 171,  380 => 169,  370 => 163,  366 => 161,  358 => 157,  356 => 156,  354 => 155,  350 => 152,  346 => 150,  342 => 148,  338 => 146,  334 => 144,  331 => 142,  327 => 141,  324 => 138,  319 => 134,  316 => 132,  306 => 124,  304 => 123,  301 => 121,  299 => 120,  296 => 118,  291 => 115,  288 => 113,  286 => 112,  284 => 111,  282 => 109,  279 => 108,  275 => 105,  256 => 101,  239 => 100,  237 => 99,  234 => 97,  232 => 96,  228 => 93,  225 => 91,  216 => 86,  213 => 85,  211 => 84,  194 => 76,  191 => 75,  188 => 74,  186 => 73,  183 => 72,  175 => 67,  166 => 64,  161 => 62,  158 => 61,  155 => 60,  152 => 59,  146 => 57,  129 => 51,  117 => 32,  114 => 46,  105 => 43,  90 => 38,  84 => 36,  76 => 33,  65 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 6,  457 => 153,  453 => 151,  444 => 3,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 165,  368 => 112,  365 => 111,  362 => 159,  360 => 158,  355 => 106,  341 => 105,  337 => 103,  322 => 137,  314 => 131,  312 => 129,  309 => 126,  305 => 95,  298 => 91,  294 => 117,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 52,  128 => 49,  107 => 36,  93 => 25,  61 => 25,  273 => 104,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 94,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 83,  204 => 72,  179 => 69,  171 => 66,  163 => 63,  159 => 61,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 42,  91 => 27,  78 => 21,  59 => 14,  28 => 3,  26 => 6,  46 => 7,  94 => 28,  89 => 24,  85 => 25,  75 => 17,  68 => 14,  56 => 23,  24 => 4,  21 => 2,  44 => 13,  31 => 7,  25 => 4,  19 => 1,  136 => 49,  126 => 50,  87 => 37,  77 => 35,  71 => 31,  67 => 28,  63 => 15,  58 => 15,  53 => 26,  38 => 9,  27 => 5,  23 => 1,  79 => 21,  72 => 16,  69 => 18,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 48,  115 => 39,  111 => 45,  108 => 44,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 32,  66 => 15,  55 => 14,  52 => 21,  50 => 10,  43 => 6,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 77,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 58,  147 => 58,  144 => 56,  141 => 55,  133 => 42,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 34,  106 => 29,  103 => 28,  99 => 41,  95 => 28,  92 => 21,  86 => 23,  82 => 22,  80 => 19,  73 => 33,  64 => 14,  60 => 6,  57 => 11,  54 => 22,  51 => 17,  48 => 8,  45 => 11,  42 => 12,  39 => 11,  36 => 5,  33 => 4,  30 => 7,);
    }
}
