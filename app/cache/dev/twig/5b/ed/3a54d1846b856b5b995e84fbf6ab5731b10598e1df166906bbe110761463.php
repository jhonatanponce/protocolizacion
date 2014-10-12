<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_5bed3a54d1846b856b5b995e84fbf6ab5731b10598e1df166906bbe110761463 extends Twig_Template
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
        echo "<h1>
    ERROR
</h1>

<h1>
    ";
        // line 6
        echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true)));
        echo "
</h1>


<strong>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,  136 => 49,  131 => 32,  126 => 17,  120 => 16,  108 => 55,  101 => 50,  99 => 49,  87 => 40,  77 => 35,  73 => 33,  71 => 32,  67 => 31,  63 => 30,  58 => 29,  55 => 27,  53 => 26,  47 => 23,  38 => 18,  36 => 17,  32 => 16,  27 => 13,  23 => 1,  57 => 12,  54 => 11,  43 => 8,  40 => 7,  33 => 10,  30 => 3,);
    }
}
