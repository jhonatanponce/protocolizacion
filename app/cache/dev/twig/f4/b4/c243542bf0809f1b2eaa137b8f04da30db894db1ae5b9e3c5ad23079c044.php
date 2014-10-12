<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_f4b4c243542bf0809f1b2eaa137b8f04da30db894db1ae5b9e3c5ad23079c044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu_base.html.twig");

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 22
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => 0));
        // line 23
        if ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array(), "any", true, true)) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass") == "current"))) {
            // line 24
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentClass" => "active"));
            // line 25
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("ancestorClass" => "active"));
        }
        // line 27
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes");
        // line 28
        $this->displayBlock("list", $context, $blocks);
    }

    // line 31
    public function block_list($context, array $blocks = array())
    {
        // line 32
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 33
            echo "    ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")))));
            // line 34
            echo "
    ";
            // line 35
            $context["listClass"] = "";
            // line 36
            echo "    ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "tabs"))) {
                // line 37
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 38
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "stacked-tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "justified-tabs"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "pills"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 44
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "justified-pills"))) {
                // line 45
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 46
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "stacked-pills"))) {
                // line 47
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 48
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "list"))) {
                // line 49
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 50
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "navbar"))) {
                // line 51
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 52
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "navbar-right"))) {
                // line 53
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 54
                echo "    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull") == "right"))) {
                // line 57
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . " pull-right"));
                // line 58
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull") == "left"))) {
                // line 59
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . "pull-left"));
                // line 60
                echo "    ";
            }
            // line 61
            echo "    
    ";
            // line 62
            $context["listClass"] = ((($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") == 0)) ? (((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")) . " nav")) : ((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass"))));
            // line 63
            echo "
    ";
            // line 64
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim((((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " ") . (isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass"))))));
            // line 65
            echo "
    <ul";
            // line 66
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 67
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 72
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && (((!$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren") === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras"), "dropdown") === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren") === true))))) {
            // line 75
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " dropdown-menu"))));
            // line 76
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 77
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_listList($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 86
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_children($context, array $blocks = array())
    {
        // line 93
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 94
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 96
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")))) {
            // line 97
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth") - 1)));
        }
        // line 99
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") + 1)));
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 105
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
    }

    // line 108
    public function block_item($context, array $blocks = array())
    {
        // line 109
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 111
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 112
            if (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")))) {
                // line 113
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor")))) {
                // line 115
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 117
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 118
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 120
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 121
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 123
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "list")) || (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))))) {
                // line 124
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "nav-header"));
            } elseif (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (((!$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren") === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras"), "dropdown") === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren") === true))))) {
                // line 126
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
            }
            // line 129
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 131
            if ((((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "navbar")) && $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider")))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))) {
                // line 132
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider"))))) {
                // line 134
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider"));
            }
            // line 137
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 138
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 141
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
            echo ">";
            // line 142
            if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider"))))) {
            } elseif ((((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1)) && (((!$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren") === true)) || (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras"), "dropdown") === true)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren") === true))))) {
                // line 144
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif ((((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1)) && (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras"), "dropdown") === false)) || $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array(0 => false), "method")))) {
                // line 146
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((array_key_exists("matcher", $context) && (!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method"))) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 148
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && (!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current"))) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 150
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 152
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 155
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 156
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 157
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 158
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style") == "list") || (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))))) {
                // line 159
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "style"), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 161
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 163
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 165
            echo "    </li>
";
        }
    }

    // line 169
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 171
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 172
        ob_start();
        // line 173
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes");
        // line 174
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("class" => trim(((($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class"), "")) : ("")) . " dropdown-toggle"))));
        // line 175
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("data-toggle" => "dropdown"));
        // line 176
        echo "    <a href=\"#\"";
        echo $this->getAttribute($this, "attributes", array(0 => (isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes"))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 180
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 181
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 187
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"));
        } else {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"), "html", null, true));
        }
    }

    // line 3
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 5,  455 => 4,  434 => 187,  424 => 185,  419 => 181,  416 => 180,  406 => 176,  403 => 175,  400 => 174,  397 => 173,  395 => 172,  392 => 171,  380 => 169,  370 => 163,  366 => 161,  358 => 157,  356 => 156,  354 => 155,  350 => 152,  346 => 150,  342 => 148,  338 => 146,  334 => 144,  331 => 142,  327 => 141,  324 => 138,  319 => 134,  316 => 132,  306 => 124,  304 => 123,  301 => 121,  299 => 120,  296 => 118,  291 => 115,  288 => 113,  286 => 112,  284 => 111,  282 => 109,  279 => 108,  275 => 105,  256 => 101,  239 => 100,  237 => 99,  234 => 97,  232 => 96,  228 => 93,  225 => 91,  216 => 86,  213 => 85,  211 => 84,  194 => 76,  191 => 75,  188 => 74,  186 => 73,  183 => 72,  175 => 67,  166 => 64,  161 => 62,  158 => 61,  155 => 60,  152 => 59,  146 => 57,  129 => 51,  117 => 47,  114 => 46,  105 => 43,  90 => 38,  84 => 36,  76 => 33,  65 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 6,  457 => 153,  453 => 151,  444 => 3,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 165,  368 => 112,  365 => 111,  362 => 159,  360 => 158,  355 => 106,  341 => 105,  337 => 103,  322 => 137,  314 => 131,  312 => 129,  309 => 126,  305 => 95,  298 => 91,  294 => 117,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 52,  128 => 49,  107 => 36,  93 => 39,  61 => 25,  273 => 104,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 94,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 83,  204 => 72,  179 => 69,  171 => 66,  163 => 63,  159 => 61,  143 => 56,  138 => 54,  135 => 53,  119 => 42,  102 => 42,  91 => 27,  78 => 21,  59 => 14,  28 => 3,  26 => 6,  46 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 23,  24 => 4,  21 => 2,  44 => 13,  31 => 5,  25 => 3,  19 => 1,  136 => 49,  126 => 50,  87 => 37,  77 => 35,  71 => 31,  67 => 28,  63 => 15,  58 => 24,  53 => 26,  38 => 6,  27 => 4,  23 => 1,  79 => 34,  72 => 16,  69 => 12,  47 => 9,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 49,  120 => 48,  115 => 39,  111 => 45,  108 => 44,  101 => 32,  98 => 31,  96 => 40,  83 => 25,  74 => 32,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 77,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 57,  154 => 58,  149 => 58,  147 => 58,  144 => 56,  141 => 55,  133 => 42,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 41,  95 => 28,  92 => 21,  86 => 24,  82 => 35,  80 => 19,  73 => 33,  64 => 14,  60 => 6,  57 => 11,  54 => 22,  51 => 17,  48 => 8,  45 => 17,  42 => 12,  39 => 11,  36 => 5,  33 => 4,  30 => 7,);
    }
}
