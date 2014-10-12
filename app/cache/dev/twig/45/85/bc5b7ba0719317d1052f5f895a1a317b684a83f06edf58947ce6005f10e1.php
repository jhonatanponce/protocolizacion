<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_4585bc5b7ba0719317d1052f5f895a1a317b684a83f06edf58947ce6005f10e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 189,  422 => 184,  408 => 176,  329 => 131,  233 => 87,  803 => 487,  792 => 485,  784 => 482,  771 => 481,  706 => 471,  694 => 467,  675 => 462,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  597 => 442,  528 => 406,  525 => 405,  518 => 402,  513 => 400,  202 => 94,  1077 => 657,  1069 => 654,  1055 => 648,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  970 => 607,  959 => 602,  955 => 600,  947 => 597,  937 => 593,  935 => 592,  926 => 589,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  874 => 562,  870 => 560,  864 => 558,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  828 => 538,  810 => 529,  800 => 523,  788 => 484,  780 => 513,  770 => 507,  740 => 491,  724 => 484,  718 => 482,  702 => 469,  698 => 468,  686 => 465,  682 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  622 => 442,  616 => 447,  603 => 439,  591 => 436,  578 => 432,  563 => 410,  559 => 427,  553 => 425,  546 => 423,  542 => 421,  534 => 418,  530 => 417,  514 => 415,  289 => 113,  271 => 190,  251 => 182,  378 => 157,  367 => 155,  361 => 146,  345 => 147,  340 => 145,  302 => 125,  276 => 193,  248 => 94,  197 => 71,  417 => 143,  411 => 140,  405 => 137,  388 => 134,  382 => 131,  371 => 156,  359 => 123,  347 => 119,  293 => 198,  281 => 114,  274 => 110,  210 => 77,  185 => 66,  167 => 71,  153 => 56,  20 => 1,  307 => 128,  336 => 129,  253 => 100,  165 => 60,  160 => 36,  127 => 35,  49 => 12,  172 => 62,  118 => 49,  170 => 84,  148 => 38,  100 => 36,  88 => 30,  200 => 72,  192 => 50,  190 => 59,  180 => 70,  150 => 55,  142 => 44,  137 => 33,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1051 => 647,  1048 => 646,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  971 => 304,  967 => 606,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 590,  928 => 286,  924 => 285,  921 => 284,  908 => 278,  902 => 276,  900 => 275,  897 => 274,  891 => 571,  888 => 570,  884 => 568,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 539,  826 => 247,  824 => 537,  822 => 245,  819 => 244,  815 => 531,  812 => 530,  808 => 235,  806 => 488,  797 => 229,  795 => 228,  791 => 226,  789 => 225,  786 => 224,  774 => 509,  754 => 499,  751 => 206,  748 => 205,  745 => 475,  742 => 474,  735 => 198,  732 => 487,  726 => 191,  723 => 472,  704 => 182,  701 => 180,  696 => 476,  692 => 474,  690 => 466,  683 => 170,  681 => 169,  678 => 463,  673 => 461,  671 => 465,  658 => 158,  654 => 155,  649 => 153,  645 => 458,  643 => 149,  636 => 446,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  609 => 129,  594 => 127,  592 => 126,  589 => 124,  584 => 122,  577 => 116,  575 => 114,  574 => 431,  565 => 430,  562 => 108,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  536 => 419,  522 => 92,  519 => 91,  502 => 87,  472 => 79,  470 => 78,  463 => 76,  446 => 197,  443 => 74,  429 => 188,  425 => 64,  410 => 59,  399 => 56,  394 => 168,  383 => 49,  377 => 129,  373 => 156,  357 => 37,  349 => 34,  339 => 130,  326 => 138,  321 => 135,  317 => 17,  263 => 294,  260 => 293,  255 => 101,  250 => 81,  245 => 270,  242 => 269,  222 => 83,  212 => 224,  207 => 75,  178 => 64,  3037 => 912,  3028 => 911,  3025 => 910,  3020 => 907,  3005 => 906,  2998 => 905,  2995 => 904,  2992 => 903,  2989 => 902,  2986 => 901,  2983 => 900,  2980 => 899,  2975 => 896,  2954 => 895,  2929 => 894,  2926 => 893,  2923 => 892,  2918 => 889,  2909 => 887,  2906 => 886,  2903 => 885,  2900 => 884,  2897 => 883,  2894 => 882,  2891 => 881,  2888 => 880,  2885 => 879,  2882 => 878,  2879 => 877,  2876 => 876,  2873 => 875,  2870 => 874,  2867 => 873,  2864 => 872,  2861 => 871,  2856 => 870,  2853 => 869,  2850 => 868,  2845 => 863,  2839 => 862,  2833 => 860,  2830 => 859,  2825 => 858,  2822 => 857,  2819 => 856,  2814 => 853,  2811 => 852,  2807 => 850,  2805 => 849,  2802 => 848,  2793 => 846,  2789 => 845,  2782 => 844,  2778 => 842,  2775 => 841,  2773 => 840,  2770 => 839,  2767 => 838,  2764 => 837,  2762 => 836,  2759 => 835,  2756 => 834,  2753 => 833,  2750 => 832,  2747 => 831,  2739 => 827,  2736 => 826,  2733 => 825,  2730 => 824,  2725 => 821,  2720 => 820,  2717 => 819,  2714 => 818,  2709 => 815,  2703 => 813,  2700 => 812,  2694 => 810,  2691 => 809,  2685 => 807,  2682 => 806,  2676 => 804,  2673 => 803,  2667 => 801,  2665 => 800,  2662 => 799,  2656 => 797,  2653 => 796,  2650 => 795,  2647 => 794,  2642 => 791,  2636 => 789,  2634 => 788,  2610 => 787,  2607 => 786,  2604 => 785,  2601 => 784,  2599 => 783,  2596 => 782,  2590 => 780,  2588 => 779,  2585 => 778,  2579 => 776,  2577 => 775,  2574 => 774,  2568 => 772,  2566 => 771,  2563 => 770,  2557 => 768,  2555 => 767,  2552 => 766,  2549 => 765,  2546 => 764,  2544 => 763,  2541 => 762,  2535 => 760,  2532 => 759,  2530 => 758,  2527 => 757,  2524 => 756,  2521 => 755,  2518 => 754,  2515 => 753,  2512 => 752,  2509 => 751,  2506 => 750,  2503 => 749,  2496 => 745,  2492 => 744,  2487 => 743,  2484 => 742,  2481 => 741,  2474 => 736,  2471 => 735,  2464 => 732,  2461 => 731,  2456 => 728,  2451 => 725,  2449 => 724,  2444 => 722,  2441 => 721,  2430 => 719,  2427 => 718,  2425 => 717,  2422 => 716,  2419 => 715,  2417 => 714,  2414 => 713,  2411 => 712,  2408 => 711,  2405 => 710,  2402 => 709,  2399 => 708,  2396 => 707,  2393 => 706,  2390 => 705,  2387 => 704,  2384 => 703,  2381 => 702,  2379 => 701,  2376 => 700,  2373 => 699,  2370 => 698,  2367 => 697,  2364 => 696,  2359 => 693,  2353 => 691,  2350 => 690,  2347 => 689,  2344 => 688,  2341 => 687,  2338 => 686,  2335 => 685,  2332 => 684,  2327 => 681,  2321 => 679,  2317 => 677,  2311 => 675,  2308 => 674,  2302 => 672,  2300 => 671,  2295 => 670,  2289 => 668,  2286 => 667,  2280 => 665,  2278 => 664,  2273 => 663,  2270 => 662,  2267 => 661,  2264 => 660,  2261 => 659,  2258 => 658,  2255 => 657,  2252 => 656,  2249 => 655,  2246 => 654,  2243 => 653,  2240 => 652,  2237 => 651,  2234 => 650,  2231 => 649,  2226 => 646,  2222 => 645,  2218 => 643,  2213 => 641,  2209 => 640,  2205 => 639,  2200 => 638,  2194 => 635,  2190 => 634,  2186 => 633,  2180 => 632,  2175 => 631,  2173 => 630,  2167 => 629,  2164 => 628,  2161 => 627,  2159 => 626,  2156 => 625,  2153 => 624,  2150 => 623,  2147 => 622,  2144 => 621,  2141 => 620,  2138 => 619,  2135 => 618,  2132 => 617,  2129 => 616,  2126 => 615,  2123 => 614,  2120 => 613,  2117 => 612,  2114 => 611,  2112 => 610,  2109 => 609,  2106 => 608,  2103 => 607,  2100 => 606,  2097 => 605,  2089 => 601,  2087 => 597,  2084 => 596,  2081 => 595,  2076 => 591,  2071 => 588,  2052 => 586,  2049 => 585,  2046 => 584,  2043 => 583,  2040 => 582,  2037 => 581,  2034 => 580,  2031 => 579,  2028 => 578,  2026 => 577,  2023 => 576,  2020 => 575,  2017 => 574,  2014 => 573,  2011 => 572,  2008 => 571,  2006 => 570,  2003 => 569,  2000 => 568,  1997 => 567,  1995 => 566,  1992 => 565,  1989 => 564,  1986 => 563,  1984 => 562,  1981 => 561,  1978 => 560,  1975 => 559,  1972 => 558,  1969 => 557,  1966 => 556,  1963 => 555,  1960 => 554,  1957 => 553,  1955 => 552,  1952 => 551,  1949 => 550,  1946 => 549,  1943 => 548,  1921 => 543,  1918 => 542,  1915 => 541,  1907 => 538,  1903 => 537,  1898 => 536,  1895 => 535,  1887 => 531,  1884 => 530,  1881 => 529,  1878 => 528,  1870 => 524,  1867 => 523,  1864 => 522,  1861 => 521,  1856 => 518,  1843 => 516,  1832 => 514,  1829 => 513,  1826 => 512,  1823 => 511,  1820 => 510,  1817 => 509,  1814 => 508,  1811 => 507,  1808 => 506,  1805 => 505,  1802 => 504,  1799 => 503,  1791 => 499,  1788 => 498,  1785 => 497,  1782 => 496,  1774 => 492,  1771 => 491,  1768 => 490,  1765 => 489,  1757 => 485,  1754 => 484,  1751 => 483,  1748 => 482,  1739 => 476,  1736 => 475,  1733 => 474,  1730 => 473,  1727 => 472,  1719 => 468,  1716 => 467,  1713 => 466,  1710 => 465,  1702 => 461,  1699 => 460,  1696 => 459,  1693 => 458,  1686 => 453,  1684 => 449,  1681 => 448,  1678 => 447,  1675 => 446,  1667 => 442,  1664 => 441,  1661 => 440,  1658 => 439,  1650 => 435,  1647 => 434,  1645 => 433,  1642 => 432,  1639 => 431,  1634 => 428,  1630 => 426,  1624 => 425,  1619 => 424,  1615 => 423,  1610 => 422,  1607 => 421,  1604 => 420,  1598 => 418,  1595 => 417,  1592 => 416,  1589 => 415,  1584 => 412,  1579 => 409,  1577 => 408,  1576 => 407,  1575 => 406,  1574 => 405,  1569 => 404,  1566 => 403,  1560 => 401,  1557 => 400,  1554 => 399,  1551 => 398,  1546 => 395,  1540 => 392,  1536 => 391,  1532 => 390,  1528 => 389,  1523 => 388,  1520 => 387,  1514 => 385,  1511 => 384,  1508 => 383,  1505 => 382,  1489 => 378,  1486 => 377,  1483 => 376,  1467 => 372,  1464 => 371,  1461 => 370,  1456 => 367,  1452 => 365,  1447 => 362,  1445 => 361,  1440 => 359,  1437 => 358,  1431 => 356,  1425 => 354,  1423 => 353,  1420 => 352,  1414 => 350,  1408 => 348,  1404 => 346,  1402 => 345,  1398 => 344,  1382 => 343,  1379 => 342,  1376 => 341,  1373 => 340,  1370 => 339,  1367 => 338,  1364 => 337,  1361 => 336,  1358 => 335,  1355 => 334,  1352 => 333,  1349 => 332,  1346 => 331,  1343 => 330,  1341 => 329,  1338 => 328,  1330 => 326,  1325 => 324,  1318 => 323,  1315 => 322,  1312 => 321,  1309 => 320,  1307 => 319,  1304 => 318,  1301 => 317,  1298 => 316,  1295 => 315,  1292 => 314,  1289 => 313,  1286 => 312,  1283 => 311,  1280 => 310,  1278 => 309,  1275 => 308,  1273 => 307,  1270 => 306,  1267 => 305,  1264 => 304,  1261 => 303,  1256 => 300,  1252 => 299,  1249 => 298,  1245 => 296,  1240 => 293,  1238 => 292,  1233 => 290,  1230 => 289,  1224 => 287,  1218 => 285,  1216 => 284,  1213 => 283,  1207 => 281,  1201 => 279,  1197 => 277,  1195 => 276,  1191 => 275,  1175 => 274,  1172 => 273,  1169 => 272,  1166 => 271,  1163 => 270,  1160 => 269,  1157 => 268,  1154 => 267,  1151 => 266,  1148 => 265,  1145 => 264,  1142 => 263,  1139 => 262,  1136 => 261,  1134 => 260,  1131 => 259,  1123 => 257,  1118 => 255,  1111 => 254,  1108 => 253,  1105 => 252,  1102 => 251,  1099 => 250,  1097 => 249,  1094 => 248,  1091 => 247,  1088 => 246,  1085 => 245,  1082 => 244,  1079 => 243,  1076 => 242,  1073 => 656,  1070 => 240,  1067 => 239,  1064 => 651,  1061 => 237,  1059 => 236,  1056 => 235,  1053 => 234,  1050 => 233,  1047 => 232,  1044 => 645,  1039 => 228,  1025 => 227,  1013 => 627,  1006 => 222,  1004 => 624,  999 => 220,  996 => 219,  978 => 218,  975 => 609,  972 => 608,  963 => 604,  960 => 210,  957 => 301,  951 => 207,  949 => 206,  944 => 205,  941 => 595,  938 => 203,  925 => 201,  923 => 588,  916 => 280,  913 => 198,  910 => 197,  907 => 196,  904 => 277,  898 => 191,  892 => 190,  886 => 188,  880 => 566,  877 => 185,  873 => 184,  868 => 183,  865 => 182,  862 => 557,  857 => 178,  851 => 176,  845 => 174,  842 => 173,  839 => 172,  836 => 543,  831 => 168,  827 => 166,  825 => 165,  820 => 163,  817 => 162,  809 => 160,  807 => 528,  804 => 233,  801 => 232,  798 => 156,  796 => 521,  793 => 227,  790 => 519,  787 => 152,  785 => 151,  782 => 221,  779 => 216,  776 => 148,  773 => 147,  768 => 144,  764 => 505,  762 => 504,  755 => 139,  752 => 138,  750 => 137,  747 => 136,  739 => 200,  737 => 490,  734 => 132,  731 => 131,  728 => 192,  725 => 129,  722 => 128,  719 => 187,  717 => 186,  714 => 185,  711 => 124,  708 => 123,  705 => 480,  699 => 179,  689 => 116,  687 => 173,  684 => 114,  676 => 467,  668 => 464,  663 => 160,  661 => 159,  656 => 460,  652 => 154,  648 => 102,  644 => 100,  640 => 448,  634 => 97,  631 => 96,  628 => 444,  626 => 443,  623 => 93,  620 => 136,  617 => 135,  614 => 133,  611 => 89,  608 => 88,  605 => 87,  602 => 445,  599 => 128,  596 => 84,  593 => 83,  590 => 82,  587 => 434,  579 => 118,  576 => 115,  573 => 75,  570 => 112,  567 => 110,  564 => 72,  556 => 104,  551 => 424,  545 => 407,  543 => 63,  538 => 62,  535 => 61,  532 => 60,  527 => 416,  523 => 404,  520 => 54,  507 => 52,  505 => 88,  485 => 49,  482 => 48,  477 => 82,  471 => 44,  468 => 43,  465 => 77,  462 => 202,  454 => 38,  452 => 37,  449 => 198,  441 => 196,  439 => 195,  436 => 32,  433 => 31,  421 => 62,  418 => 26,  415 => 180,  412 => 60,  401 => 172,  389 => 160,  386 => 159,  375 => 10,  369 => 8,  363 => 153,  353 => 149,  351 => 141,  348 => 140,  343 => 146,  335 => 134,  333 => 115,  330 => 23,  328 => 139,  325 => 129,  323 => 128,  320 => 127,  318 => 121,  315 => 125,  313 => 110,  310 => 793,  308 => 109,  303 => 122,  300 => 121,  297 => 200,  295 => 11,  292 => 103,  290 => 119,  287 => 5,  280 => 194,  277 => 683,  272 => 648,  270 => 102,  267 => 101,  265 => 105,  262 => 98,  259 => 103,  257 => 83,  249 => 181,  244 => 541,  236 => 534,  231 => 72,  226 => 84,  206 => 64,  201 => 74,  196 => 92,  184 => 63,  181 => 65,  174 => 74,  156 => 58,  151 => 152,  134 => 47,  124 => 32,  121 => 50,  104 => 31,  14 => 1,  81 => 24,  70 => 19,  113 => 40,  110 => 38,  62 => 14,  34 => 4,  459 => 40,  455 => 4,  434 => 187,  424 => 28,  419 => 181,  416 => 180,  406 => 22,  403 => 21,  400 => 174,  397 => 55,  395 => 135,  392 => 17,  380 => 160,  370 => 45,  366 => 7,  358 => 151,  356 => 122,  354 => 329,  350 => 120,  346 => 33,  342 => 137,  338 => 135,  334 => 141,  331 => 140,  327 => 141,  324 => 112,  319 => 134,  316 => 132,  306 => 113,  304 => 123,  301 => 121,  299 => 120,  296 => 121,  291 => 115,  288 => 118,  286 => 112,  284 => 100,  282 => 3,  279 => 108,  275 => 105,  256 => 96,  239 => 535,  237 => 91,  234 => 90,  232 => 88,  228 => 93,  225 => 60,  216 => 79,  213 => 78,  211 => 56,  194 => 70,  191 => 69,  188 => 90,  186 => 72,  183 => 71,  175 => 58,  166 => 54,  161 => 58,  158 => 80,  155 => 47,  152 => 46,  146 => 45,  129 => 122,  117 => 37,  114 => 36,  105 => 34,  90 => 27,  84 => 25,  76 => 34,  65 => 17,  480 => 47,  474 => 80,  469 => 158,  461 => 6,  457 => 39,  453 => 199,  444 => 3,  440 => 148,  437 => 70,  435 => 69,  430 => 30,  427 => 65,  423 => 63,  413 => 134,  409 => 23,  407 => 138,  402 => 58,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 48,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 38,  355 => 143,  341 => 117,  337 => 27,  322 => 137,  314 => 16,  312 => 124,  309 => 129,  305 => 108,  298 => 120,  294 => 117,  285 => 100,  283 => 115,  278 => 106,  268 => 300,  264 => 84,  258 => 187,  252 => 283,  247 => 80,  241 => 90,  229 => 85,  220 => 81,  214 => 231,  177 => 69,  169 => 168,  140 => 140,  132 => 34,  128 => 42,  107 => 37,  93 => 28,  61 => 12,  273 => 317,  269 => 107,  254 => 590,  243 => 88,  240 => 73,  238 => 85,  235 => 89,  230 => 244,  227 => 86,  224 => 241,  221 => 80,  219 => 58,  217 => 67,  208 => 76,  204 => 75,  179 => 431,  171 => 73,  163 => 82,  159 => 57,  143 => 56,  138 => 47,  135 => 46,  119 => 40,  102 => 30,  91 => 34,  78 => 24,  59 => 13,  28 => 3,  26 => 3,  46 => 10,  94 => 21,  89 => 30,  85 => 23,  75 => 18,  68 => 30,  56 => 12,  24 => 3,  21 => 2,  44 => 10,  31 => 3,  25 => 4,  19 => 1,  136 => 71,  126 => 40,  87 => 26,  77 => 25,  71 => 13,  67 => 16,  63 => 18,  58 => 13,  53 => 11,  38 => 7,  27 => 3,  23 => 1,  79 => 21,  72 => 18,  69 => 16,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 56,  145 => 74,  139 => 139,  131 => 31,  123 => 42,  120 => 31,  115 => 40,  111 => 47,  108 => 33,  101 => 33,  98 => 29,  96 => 35,  83 => 33,  74 => 22,  66 => 25,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 4,  209 => 65,  203 => 73,  199 => 93,  193 => 59,  189 => 66,  187 => 48,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 47,  149 => 20,  147 => 54,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 41,  122 => 39,  116 => 39,  112 => 39,  109 => 52,  106 => 51,  103 => 89,  99 => 31,  95 => 27,  92 => 31,  86 => 28,  82 => 26,  80 => 27,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
