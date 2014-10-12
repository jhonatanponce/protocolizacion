<?php

/* BraincraftedBootstrapBundle:Bootstrap:bootstrap.scss.twig */
class __TwigTemplate_d4c967d0c0416a30f3a8f5bb03912257c3039d4482a7a5bf9f87b2fecabec981 extends Twig_Template
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
        echo "// Core variables and mixins
@import \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["variables_file"]) ? $context["variables_file"] : $this->getContext($context, "variables_file")), "html", null, true);
        echo "\";
@import \"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/mixins\";

// Reset and dependencies
@import \"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/normalize\";
@import \"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/print\";
@import \"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/glyphicons\";

// Core CSS
@import \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/scaffolding\";
@import \"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/type\";
@import \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/code\";
@import \"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/grid\";
@import \"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/tables\";
@import \"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/forms\";
@import \"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/buttons\";

// Components
@import \"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/component-animations\";
@import \"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/dropdowns\";
@import \"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/button-groups\";
@import \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/input-groups\";
@import \"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/navs\";
@import \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/navbar\";
@import \"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/breadcrumbs\";
@import \"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/pagination\";
@import \"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/pager\";
@import \"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/labels\";
@import \"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/badges\";
@import \"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/jumbotron\";
@import \"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/thumbnails\";
@import \"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/alerts\";
@import \"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/progress-bars\";
@import \"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/media\";
@import \"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/list-group\";
@import \"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/panels\";
@import \"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/responsive-embed\";
@import \"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/wells\";
@import \"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/close\";

// Components w/ JavaScript
@import \"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/modals\";
@import \"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/tooltip\";
@import \"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/popovers\";
@import \"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/carousel\";

// Utility classes
@import \"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/utilities\";
@import \"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["assets_dir"]) ? $context["assets_dir"] : $this->getContext($context, "assets_dir")), "html", null, true);
        echo "/stylesheets/bootstrap/responsive-utilities\";
";
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Bootstrap:bootstrap.scss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 45,  148 => 38,  100 => 26,  88 => 23,  200 => 52,  192 => 50,  190 => 49,  180 => 49,  150 => 37,  142 => 35,  137 => 33,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  971 => 304,  967 => 303,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 285,  921 => 284,  908 => 278,  902 => 276,  900 => 275,  897 => 274,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 250,  826 => 247,  824 => 246,  822 => 245,  819 => 244,  815 => 239,  812 => 238,  808 => 235,  806 => 234,  797 => 229,  795 => 228,  791 => 226,  789 => 225,  786 => 224,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  735 => 198,  732 => 197,  726 => 191,  723 => 190,  704 => 182,  701 => 180,  696 => 178,  692 => 175,  690 => 174,  683 => 170,  681 => 169,  678 => 168,  673 => 165,  671 => 164,  658 => 158,  654 => 155,  649 => 153,  645 => 150,  643 => 149,  636 => 145,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  609 => 129,  594 => 127,  592 => 126,  589 => 124,  584 => 122,  577 => 116,  575 => 114,  574 => 113,  565 => 109,  562 => 108,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  536 => 95,  522 => 92,  519 => 91,  502 => 87,  472 => 79,  470 => 78,  463 => 76,  446 => 75,  443 => 74,  429 => 66,  425 => 64,  410 => 59,  399 => 56,  394 => 54,  383 => 49,  377 => 47,  373 => 46,  357 => 37,  349 => 34,  339 => 28,  326 => 21,  321 => 18,  317 => 17,  263 => 294,  260 => 293,  255 => 284,  250 => 274,  245 => 270,  242 => 269,  222 => 238,  212 => 224,  207 => 216,  178 => 184,  3037 => 912,  3028 => 911,  3025 => 910,  3020 => 907,  3005 => 906,  2998 => 905,  2995 => 904,  2992 => 903,  2989 => 902,  2986 => 901,  2983 => 900,  2980 => 899,  2975 => 896,  2954 => 895,  2929 => 894,  2926 => 893,  2923 => 892,  2918 => 889,  2909 => 887,  2906 => 886,  2903 => 885,  2900 => 884,  2897 => 883,  2894 => 882,  2891 => 881,  2888 => 880,  2885 => 879,  2882 => 878,  2879 => 877,  2876 => 876,  2873 => 875,  2870 => 874,  2867 => 873,  2864 => 872,  2861 => 871,  2856 => 870,  2853 => 869,  2850 => 868,  2845 => 863,  2839 => 862,  2833 => 860,  2830 => 859,  2825 => 858,  2822 => 857,  2819 => 856,  2814 => 853,  2811 => 852,  2807 => 850,  2805 => 849,  2802 => 848,  2793 => 846,  2789 => 845,  2782 => 844,  2778 => 842,  2775 => 841,  2773 => 840,  2770 => 839,  2767 => 838,  2764 => 837,  2762 => 836,  2759 => 835,  2756 => 834,  2753 => 833,  2750 => 832,  2747 => 831,  2739 => 827,  2736 => 826,  2733 => 825,  2730 => 824,  2725 => 821,  2720 => 820,  2717 => 819,  2714 => 818,  2709 => 815,  2703 => 813,  2700 => 812,  2694 => 810,  2691 => 809,  2685 => 807,  2682 => 806,  2676 => 804,  2673 => 803,  2667 => 801,  2665 => 800,  2662 => 799,  2656 => 797,  2653 => 796,  2650 => 795,  2647 => 794,  2642 => 791,  2636 => 789,  2634 => 788,  2610 => 787,  2607 => 786,  2604 => 785,  2601 => 784,  2599 => 783,  2596 => 782,  2590 => 780,  2588 => 779,  2585 => 778,  2579 => 776,  2577 => 775,  2574 => 774,  2568 => 772,  2566 => 771,  2563 => 770,  2557 => 768,  2555 => 767,  2552 => 766,  2549 => 765,  2546 => 764,  2544 => 763,  2541 => 762,  2535 => 760,  2532 => 759,  2530 => 758,  2527 => 757,  2524 => 756,  2521 => 755,  2518 => 754,  2515 => 753,  2512 => 752,  2509 => 751,  2506 => 750,  2503 => 749,  2496 => 745,  2492 => 744,  2487 => 743,  2484 => 742,  2481 => 741,  2474 => 736,  2471 => 735,  2464 => 732,  2461 => 731,  2456 => 728,  2451 => 725,  2449 => 724,  2444 => 722,  2441 => 721,  2430 => 719,  2427 => 718,  2425 => 717,  2422 => 716,  2419 => 715,  2417 => 714,  2414 => 713,  2411 => 712,  2408 => 711,  2405 => 710,  2402 => 709,  2399 => 708,  2396 => 707,  2393 => 706,  2390 => 705,  2387 => 704,  2384 => 703,  2381 => 702,  2379 => 701,  2376 => 700,  2373 => 699,  2370 => 698,  2367 => 697,  2364 => 696,  2359 => 693,  2353 => 691,  2350 => 690,  2347 => 689,  2344 => 688,  2341 => 687,  2338 => 686,  2335 => 685,  2332 => 684,  2327 => 681,  2321 => 679,  2317 => 677,  2311 => 675,  2308 => 674,  2302 => 672,  2300 => 671,  2295 => 670,  2289 => 668,  2286 => 667,  2280 => 665,  2278 => 664,  2273 => 663,  2270 => 662,  2267 => 661,  2264 => 660,  2261 => 659,  2258 => 658,  2255 => 657,  2252 => 656,  2249 => 655,  2246 => 654,  2243 => 653,  2240 => 652,  2237 => 651,  2234 => 650,  2231 => 649,  2226 => 646,  2222 => 645,  2218 => 643,  2213 => 641,  2209 => 640,  2205 => 639,  2200 => 638,  2194 => 635,  2190 => 634,  2186 => 633,  2180 => 632,  2175 => 631,  2173 => 630,  2167 => 629,  2164 => 628,  2161 => 627,  2159 => 626,  2156 => 625,  2153 => 624,  2150 => 623,  2147 => 622,  2144 => 621,  2141 => 620,  2138 => 619,  2135 => 618,  2132 => 617,  2129 => 616,  2126 => 615,  2123 => 614,  2120 => 613,  2117 => 612,  2114 => 611,  2112 => 610,  2109 => 609,  2106 => 608,  2103 => 607,  2100 => 606,  2097 => 605,  2089 => 601,  2087 => 597,  2084 => 596,  2081 => 595,  2076 => 591,  2071 => 588,  2052 => 586,  2049 => 585,  2046 => 584,  2043 => 583,  2040 => 582,  2037 => 581,  2034 => 580,  2031 => 579,  2028 => 578,  2026 => 577,  2023 => 576,  2020 => 575,  2017 => 574,  2014 => 573,  2011 => 572,  2008 => 571,  2006 => 570,  2003 => 569,  2000 => 568,  1997 => 567,  1995 => 566,  1992 => 565,  1989 => 564,  1986 => 563,  1984 => 562,  1981 => 561,  1978 => 560,  1975 => 559,  1972 => 558,  1969 => 557,  1966 => 556,  1963 => 555,  1960 => 554,  1957 => 553,  1955 => 552,  1952 => 551,  1949 => 550,  1946 => 549,  1943 => 548,  1921 => 543,  1918 => 542,  1915 => 541,  1907 => 538,  1903 => 537,  1898 => 536,  1895 => 535,  1887 => 531,  1884 => 530,  1881 => 529,  1878 => 528,  1870 => 524,  1867 => 523,  1864 => 522,  1861 => 521,  1856 => 518,  1843 => 516,  1832 => 514,  1829 => 513,  1826 => 512,  1823 => 511,  1820 => 510,  1817 => 509,  1814 => 508,  1811 => 507,  1808 => 506,  1805 => 505,  1802 => 504,  1799 => 503,  1791 => 499,  1788 => 498,  1785 => 497,  1782 => 496,  1774 => 492,  1771 => 491,  1768 => 490,  1765 => 489,  1757 => 485,  1754 => 484,  1751 => 483,  1748 => 482,  1739 => 476,  1736 => 475,  1733 => 474,  1730 => 473,  1727 => 472,  1719 => 468,  1716 => 467,  1713 => 466,  1710 => 465,  1702 => 461,  1699 => 460,  1696 => 459,  1693 => 458,  1686 => 453,  1684 => 449,  1681 => 448,  1678 => 447,  1675 => 446,  1667 => 442,  1664 => 441,  1661 => 440,  1658 => 439,  1650 => 435,  1647 => 434,  1645 => 433,  1642 => 432,  1639 => 431,  1634 => 428,  1630 => 426,  1624 => 425,  1619 => 424,  1615 => 423,  1610 => 422,  1607 => 421,  1604 => 420,  1598 => 418,  1595 => 417,  1592 => 416,  1589 => 415,  1584 => 412,  1579 => 409,  1577 => 408,  1576 => 407,  1575 => 406,  1574 => 405,  1569 => 404,  1566 => 403,  1560 => 401,  1557 => 400,  1554 => 399,  1551 => 398,  1546 => 395,  1540 => 392,  1536 => 391,  1532 => 390,  1528 => 389,  1523 => 388,  1520 => 387,  1514 => 385,  1511 => 384,  1508 => 383,  1505 => 382,  1489 => 378,  1486 => 377,  1483 => 376,  1467 => 372,  1464 => 371,  1461 => 370,  1456 => 367,  1452 => 365,  1447 => 362,  1445 => 361,  1440 => 359,  1437 => 358,  1431 => 356,  1425 => 354,  1423 => 353,  1420 => 352,  1414 => 350,  1408 => 348,  1404 => 346,  1402 => 345,  1398 => 344,  1382 => 343,  1379 => 342,  1376 => 341,  1373 => 340,  1370 => 339,  1367 => 338,  1364 => 337,  1361 => 336,  1358 => 335,  1355 => 334,  1352 => 333,  1349 => 332,  1346 => 331,  1343 => 330,  1341 => 329,  1338 => 328,  1330 => 326,  1325 => 324,  1318 => 323,  1315 => 322,  1312 => 321,  1309 => 320,  1307 => 319,  1304 => 318,  1301 => 317,  1298 => 316,  1295 => 315,  1292 => 314,  1289 => 313,  1286 => 312,  1283 => 311,  1280 => 310,  1278 => 309,  1275 => 308,  1273 => 307,  1270 => 306,  1267 => 305,  1264 => 304,  1261 => 303,  1256 => 300,  1252 => 299,  1249 => 298,  1245 => 296,  1240 => 293,  1238 => 292,  1233 => 290,  1230 => 289,  1224 => 287,  1218 => 285,  1216 => 284,  1213 => 283,  1207 => 281,  1201 => 279,  1197 => 277,  1195 => 276,  1191 => 275,  1175 => 274,  1172 => 273,  1169 => 272,  1166 => 271,  1163 => 270,  1160 => 269,  1157 => 268,  1154 => 267,  1151 => 266,  1148 => 265,  1145 => 264,  1142 => 263,  1139 => 262,  1136 => 261,  1134 => 260,  1131 => 259,  1123 => 257,  1118 => 255,  1111 => 254,  1108 => 253,  1105 => 252,  1102 => 251,  1099 => 250,  1097 => 249,  1094 => 248,  1091 => 247,  1088 => 246,  1085 => 245,  1082 => 244,  1079 => 243,  1076 => 242,  1073 => 241,  1070 => 240,  1067 => 239,  1064 => 334,  1061 => 237,  1059 => 236,  1056 => 235,  1053 => 234,  1050 => 233,  1047 => 232,  1044 => 231,  1039 => 228,  1025 => 227,  1013 => 225,  1006 => 222,  1004 => 221,  999 => 220,  996 => 219,  978 => 218,  975 => 305,  972 => 216,  963 => 302,  960 => 210,  957 => 301,  951 => 207,  949 => 206,  944 => 205,  941 => 204,  938 => 203,  925 => 201,  923 => 200,  916 => 280,  913 => 198,  910 => 197,  907 => 196,  904 => 277,  898 => 191,  892 => 190,  886 => 188,  880 => 186,  877 => 185,  873 => 184,  868 => 183,  865 => 182,  862 => 181,  857 => 178,  851 => 176,  845 => 174,  842 => 173,  839 => 172,  836 => 171,  831 => 168,  827 => 166,  825 => 165,  820 => 163,  817 => 162,  809 => 160,  807 => 159,  804 => 233,  801 => 232,  798 => 156,  796 => 155,  793 => 227,  790 => 153,  787 => 152,  785 => 151,  782 => 221,  779 => 216,  776 => 148,  773 => 147,  768 => 144,  764 => 142,  762 => 141,  755 => 139,  752 => 138,  750 => 137,  747 => 136,  739 => 200,  737 => 199,  734 => 132,  731 => 131,  728 => 192,  725 => 129,  722 => 128,  719 => 187,  717 => 186,  714 => 185,  711 => 124,  708 => 123,  705 => 122,  699 => 179,  689 => 116,  687 => 173,  684 => 114,  676 => 111,  668 => 163,  663 => 160,  661 => 159,  656 => 104,  652 => 154,  648 => 102,  644 => 100,  640 => 148,  634 => 97,  631 => 96,  628 => 95,  626 => 94,  623 => 93,  620 => 136,  617 => 135,  614 => 133,  611 => 89,  608 => 88,  605 => 87,  602 => 86,  599 => 128,  596 => 84,  593 => 83,  590 => 82,  587 => 123,  579 => 118,  576 => 115,  573 => 75,  570 => 112,  567 => 110,  564 => 72,  556 => 104,  551 => 66,  545 => 64,  543 => 63,  538 => 62,  535 => 61,  532 => 60,  527 => 57,  523 => 55,  520 => 54,  507 => 52,  505 => 88,  485 => 49,  482 => 48,  477 => 82,  471 => 44,  468 => 43,  465 => 77,  462 => 41,  454 => 38,  452 => 37,  449 => 36,  441 => 34,  439 => 71,  436 => 32,  433 => 31,  421 => 62,  418 => 26,  415 => 25,  412 => 60,  401 => 20,  389 => 51,  386 => 15,  375 => 10,  369 => 8,  363 => 6,  353 => 909,  351 => 899,  348 => 898,  343 => 891,  335 => 865,  333 => 856,  330 => 23,  328 => 22,  325 => 830,  323 => 19,  320 => 823,  318 => 818,  315 => 817,  313 => 794,  310 => 793,  308 => 749,  303 => 741,  300 => 13,  297 => 738,  295 => 11,  292 => 734,  290 => 7,  287 => 5,  280 => 684,  277 => 683,  272 => 648,  270 => 316,  267 => 604,  265 => 299,  262 => 594,  259 => 592,  257 => 291,  249 => 547,  244 => 541,  236 => 534,  231 => 527,  226 => 520,  206 => 54,  201 => 213,  196 => 211,  184 => 50,  181 => 185,  174 => 46,  156 => 40,  151 => 152,  134 => 133,  124 => 32,  121 => 28,  104 => 27,  14 => 1,  81 => 32,  70 => 17,  113 => 31,  110 => 30,  62 => 15,  34 => 7,  459 => 40,  455 => 4,  434 => 187,  424 => 28,  419 => 181,  416 => 180,  406 => 22,  403 => 21,  400 => 174,  397 => 55,  395 => 18,  392 => 17,  380 => 169,  370 => 45,  366 => 7,  358 => 157,  356 => 910,  354 => 155,  350 => 152,  346 => 33,  342 => 30,  338 => 867,  334 => 26,  331 => 142,  327 => 141,  324 => 138,  319 => 134,  316 => 132,  306 => 124,  304 => 123,  301 => 121,  299 => 120,  296 => 118,  291 => 115,  288 => 113,  286 => 112,  284 => 111,  282 => 3,  279 => 108,  275 => 330,  256 => 101,  239 => 535,  237 => 262,  234 => 528,  232 => 249,  228 => 93,  225 => 60,  216 => 495,  213 => 85,  211 => 56,  194 => 197,  191 => 196,  188 => 194,  186 => 190,  183 => 189,  175 => 67,  166 => 44,  161 => 162,  158 => 61,  155 => 60,  152 => 39,  146 => 147,  129 => 122,  117 => 32,  114 => 27,  105 => 43,  90 => 38,  84 => 22,  76 => 20,  65 => 17,  480 => 47,  474 => 80,  469 => 158,  461 => 6,  457 => 39,  453 => 151,  444 => 3,  440 => 148,  437 => 70,  435 => 69,  430 => 30,  427 => 65,  423 => 63,  413 => 134,  409 => 23,  407 => 131,  402 => 58,  398 => 19,  393 => 126,  387 => 122,  384 => 121,  381 => 48,  379 => 119,  374 => 165,  368 => 112,  365 => 41,  362 => 39,  360 => 38,  355 => 106,  341 => 868,  337 => 27,  322 => 137,  314 => 16,  312 => 129,  309 => 126,  305 => 748,  298 => 12,  294 => 117,  285 => 4,  283 => 88,  278 => 331,  268 => 300,  264 => 84,  258 => 81,  252 => 283,  247 => 273,  241 => 540,  229 => 521,  220 => 70,  214 => 231,  177 => 65,  169 => 168,  140 => 36,  132 => 34,  128 => 33,  107 => 36,  93 => 25,  61 => 2,  273 => 317,  269 => 94,  254 => 590,  243 => 88,  240 => 263,  238 => 85,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 502,  219 => 58,  217 => 232,  208 => 83,  204 => 215,  179 => 431,  171 => 173,  163 => 41,  159 => 40,  143 => 56,  138 => 54,  135 => 53,  119 => 95,  102 => 42,  91 => 44,  78 => 21,  59 => 14,  28 => 3,  26 => 3,  46 => 11,  94 => 45,  89 => 19,  85 => 25,  75 => 17,  68 => 14,  56 => 23,  24 => 3,  21 => 2,  44 => 13,  31 => 7,  25 => 4,  19 => 1,  136 => 35,  126 => 121,  87 => 37,  77 => 17,  71 => 15,  67 => 28,  63 => 15,  58 => 14,  53 => 26,  38 => 9,  27 => 5,  23 => 1,  79 => 26,  72 => 16,  69 => 11,  47 => 9,  40 => 8,  37 => 8,  22 => 2,  246 => 545,  157 => 56,  145 => 46,  139 => 139,  131 => 31,  123 => 29,  120 => 31,  115 => 39,  111 => 26,  108 => 28,  101 => 73,  98 => 31,  96 => 25,  83 => 2,  74 => 16,  66 => 16,  55 => 14,  52 => 12,  50 => 12,  43 => 10,  41 => 12,  35 => 5,  32 => 6,  29 => 5,  209 => 55,  203 => 78,  199 => 212,  193 => 73,  189 => 446,  187 => 48,  182 => 66,  176 => 178,  173 => 177,  168 => 65,  164 => 163,  162 => 43,  154 => 153,  149 => 148,  147 => 58,  144 => 37,  141 => 143,  133 => 42,  130 => 41,  125 => 44,  122 => 43,  116 => 30,  112 => 29,  109 => 87,  106 => 24,  103 => 23,  99 => 21,  95 => 28,  92 => 24,  86 => 36,  82 => 22,  80 => 21,  73 => 33,  64 => 14,  60 => 6,  57 => 11,  54 => 13,  51 => 17,  48 => 8,  45 => 11,  42 => 12,  39 => 11,  36 => 7,  33 => 4,  30 => 7,);
    }
}
