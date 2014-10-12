<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_cdd74ab0a0ab5c8e9ed78335ee43131da9636e7cff90ca0ef7578744fb445bea extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  339 => 130,  336 => 129,  331 => 123,  328 => 122,  323 => 125,  321 => 122,  318 => 121,  315 => 120,  306 => 113,  297 => 106,  292 => 103,  286 => 101,  284 => 100,  278 => 96,  275 => 95,  265 => 86,  259 => 84,  257 => 83,  253 => 82,  250 => 81,  247 => 80,  240 => 73,  231 => 72,  226 => 69,  220 => 68,  217 => 67,  209 => 65,  206 => 64,  203 => 63,  199 => 62,  193 => 59,  189 => 57,  186 => 56,  183 => 55,  178 => 54,  176 => 53,  171 => 51,  168 => 50,  165 => 49,  160 => 36,  155 => 21,  149 => 20,  140 => 140,  135 => 138,  127 => 132,  125 => 129,  121 => 127,  119 => 120,  113 => 116,  111 => 95,  103 => 89,  101 => 80,  96 => 77,  87 => 45,  81 => 41,  67 => 34,  62 => 24,  59 => 31,  57 => 30,  51 => 27,  40 => 21,  31 => 17,  28 => 1,  94 => 49,  89 => 34,  83 => 30,  77 => 37,  75 => 28,  71 => 35,  68 => 25,  61 => 21,  58 => 20,  53 => 19,  48 => 35,  45 => 34,  42 => 12,  39 => 20,  36 => 20,  33 => 18,);
    }
}
