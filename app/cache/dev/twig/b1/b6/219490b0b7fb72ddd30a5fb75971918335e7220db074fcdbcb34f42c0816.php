<?php

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_b1b6219490b0b7fb72ddd30a5fb75971918335e7220db074fcdbcb34f42c0816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute($this->getContext($context, "collector"), "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute($this->getContext($context, "collector"), "querycount") > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "        ";
        if (($this->getAttribute($this->getContext($context, "collector"), "invalidEntityCount") > 0)) {
            // line 11
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "invalidEntityCount"), "html", null, true);
            echo "</span>
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute($this->getContext($context, "collector"), "cacheEnabled")) {
            // line 14
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-green\" title=\"Second level cache enabled\">2l cache</span>
        ";
        }
        // line 16
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 28
        echo ((($this->getAttribute($this->getContext($context, "collector"), "invalidEntityCount") > 0)) ? ("red") : ("green"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "invalidEntityCount"), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 30
        if ($this->getAttribute($this->getContext($context, "collector"), "cacheEnabled")) {
            // line 31
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Cache hits</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "cacheHitsCount"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache misses</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 37
            echo ((($this->getAttribute($this->getContext($context, "collector"), "cacheMissesCount") > 0)) ? ("yellow") : ("green"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "cacheMissesCount"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Cache puts</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 41
            echo ((($this->getAttribute($this->getContext($context, "collector"), "cachePutsCount") > 0)) ? ("yellow") : ("green"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "cachePutsCount"), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 44
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        // line 49
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 54
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 59
    public function block_panel($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        if (("explain" == $this->getContext($context, "page"))) {
            // line 61
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DoctrineBundle:Profiler:explain", array("token" => $this->getContext($context, "token"), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "query"), "method"))));
            // line 66
            echo "
    ";
        } else {
            // line 68
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 72
    public function block_queries($context, array $blocks = array())
    {
        // line 73
        echo "    <h2>Queries</h2>

    ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "queries"));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 76
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "connection"), "html", null, true);
            echo "</em></h3>
        ";
            // line 77
            if (twig_test_empty($this->getContext($context, "queries"))) {
                // line 78
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 82
                echo "            <p>
                <button type=\"button\" class=\"sf-button\" onclick=\"expandAllQueries(this);\" data-action=\"expand\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Expand all queries</span>
                        </span>
                    </span>
                </button>
            </p>
            <table class=\"alt\" id=\"queriesPlaceholder-";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
                <thead>
                    <tr>
                        <th onclick=\"javascript:sortTable(this, 0, 'queries-";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                        <th onclick=\"javascript:sortTable(this, 1, 'queries-";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                        <th style=\"width: 100%;\">Info</th>
                    </tr>
                </thead>
                <tbody id=\"queries-";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
                ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "queries"));
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 101
                    echo "                    <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getContext($context, "i")), "html", null, true);
                    echo "\">
                        <td>";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 103
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "query"), "executionMS") * 1000)), "html", null, true);
                    echo "&nbsp;ms</td>
                        <td>
                            <div class=\"query-section\" data-state=\"collapsed\" onclick=\"return expandQuery(this);\" title=\"Expand query\" data-target-id=\"code-";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">
                                <img alt=\"+\" src=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none;\" />
                                <span style=\"display: none\">Shrink query</span>
                                <span id=\"smallcode-";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                    ";
                    // line 110
                    echo $this->env->getExtension('doctrine_extension')->minifyQuery($this->getAttribute($this->getContext($context, "query"), "sql"));
                    echo "
                                </span>
                            </div>
                            <code id=\"code-";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                ";
                    // line 114
                    echo SqlFormatter::format($this->getAttribute($this->getContext($context, "query"), "sql"), $this->getContext($context, "i"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"));
                    echo "
                            </code>
                            <span id=\"original-query-";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 117
                    echo $this->env->getExtension('doctrine_extension')->replaceQueryParameters($this->getAttribute($this->getContext($context, "query"), "sql"), $this->getAttribute($this->getContext($context, "query"), "params"));
                    echo "
                            </span>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "query"), "params")), "html", null, true);
                    echo " <br />
                                [<span id=\"expandParams-";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" onclick=\"javascript:toggleRunnableQuery(this);\" target-data-id=\"original-query-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">Display runnable query</span>]<br/>
                            </small>

                            ";
                    // line 124
                    if ($this->getAttribute($this->getContext($context, "query"), "explainable")) {
                        // line 125
                        echo "                                [<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => $this->getContext($context, "token"), "page" => "explain", "connection" => $this->getContext($context, "connection"), "query" => $this->getContext($context, "i"))), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains the query\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" >
                                    <img alt=\"+\" src=\"";
                        // line 126
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                        echo "\" style=\"display: inline; width: 12px; height: 12px;\" />
                                    <img alt=\"-\" src=\"";
                        // line 127
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                        echo "\" style=\"display: none; width: 12px; height: 12px;\" />
                                    <span style=\"vertical-align:top\">Explain query</span>
                                </a>]
                            ";
                    } else {
                        // line 131
                        echo "                                This query cannot be explained
                            ";
                    }
                    // line 133
                    echo "
                            ";
                    // line 134
                    if ($this->getAttribute($this->getContext($context, "query"), "explainable")) {
                        // line 135
                        echo "                                <div id=\"explain-";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" class=\"loading\"></div>
                            ";
                    }
                    // line 137
                    echo "                        </td>
                    </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                </tbody>
            </table>
        ";
            }
            // line 143
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
    <h2>Database Connections</h2>

    ";
        // line 147
        if ($this->getAttribute($this->getContext($context, "collector"), "connections")) {
            // line 148
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "connections")));
            // line 149
            echo "    ";
        } else {
            // line 150
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 154
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 157
        if ($this->getAttribute($this->getContext($context, "collector"), "managers")) {
            // line 158
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "managers")));
            // line 159
            echo "    ";
        } else {
            // line 160
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 164
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 167
        if ($this->getAttribute($this->getContext($context, "collector"), "cacheCounts")) {
            // line 168
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "cacheCounts")));
            // line 169
            echo "
        ";
            // line 170
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "cacheRegions"), "hits")) {
                // line 171
                echo "            <h3>Number of cache hits</h3>
            ";
                // line 172
                $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "cacheRegions"), "hits")));
                // line 173
                echo "        ";
            }
            // line 174
            echo "
        ";
            // line 175
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "cacheRegions"), "misses")) {
                // line 176
                echo "            <h3>Number of cache misses</h3>
            ";
                // line 177
                $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "cacheRegions"), "misses")));
                // line 178
                echo "        ";
            }
            // line 179
            echo "
        ";
            // line 180
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "cacheRegions"), "puts")) {
                // line 181
                echo "            <h3>Number of cache puts</h3>
            ";
                // line 182
                $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "cacheRegions"), "puts")));
                // line 183
                echo "        ";
            }
            // line 184
            echo "    ";
        } else {
            // line 185
            echo "        <p>
            <em>No cache.</em>
        </p>
    ";
        }
        // line 189
        echo "
    <h2>Mapping</h2>

    ";
        // line 192
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "entities"));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 193
            echo "        <h3>Manager <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "manager"), "html", null, true);
            echo "</em></h3>
        ";
            // line 194
            if (twig_test_empty($this->getContext($context, "classes"))) {
                // line 195
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 197
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 205
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "classes"));
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 206
                    echo "                    <tr>
                        <td>";
                    // line 207
                    echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 209
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector", true), "mappingErrors", array(), "any", false, true), $this->getContext($context, "manager"), array(), "array", false, true), $this->getContext($context, "class"), array(), "array", true, true)) {
                        // line 210
                        echo "                                <ul>
                                    ";
                        // line 211
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "mappingErrors"), $this->getContext($context, "manager"), array(), "array"), $this->getContext($context, "class"), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 212
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 214
                        echo "                                </ul>
                            ";
                    } else {
                        // line 216
                        echo "                                Valid
                            ";
                    }
                    // line 218
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "                </tbody>
            </table>
        ";
            }
            // line 224
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandAllQueries(button) {
            var queries = document.getElementsByClassName('query-section'),
                i = queries.length,
                action = button.getAttribute('data-action');

            if (action == 'expand') {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Collapse all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'collapsed') {
                        expandQuery(queries[i]);
                    }
                }
            } else {
                button.getElementsByClassName('btn-bg')[0].innerHTML = 'Expand all queries';

                while (i--) {
                    if (queries[i].getAttribute('data-state') == 'expanded') {
                        expandQuery(queries[i]);
                    }
                }
            }

            button.setAttribute('data-action', action == 'expand' ? 'collapse' : 'expand');
        }

        function expandQuery(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                queriesParameters = document.getElementById('original-query' + targetId);

            if (queriesParameters.style.display != 'none') {
                queriesParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';

                link.setAttribute('data-state', 'expanded');
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';

                link.setAttribute('data-state', 'collapsed');
            }

            return false;
        }

        function toggleRunnableQuery(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-query', ''),
                targetElement = document.getElementById(target.getAttribute('target-data-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 225,  602 => 224,  597 => 221,  589 => 218,  585 => 216,  581 => 214,  572 => 212,  568 => 211,  558 => 207,  555 => 206,  541 => 197,  537 => 195,  535 => 194,  526 => 192,  521 => 189,  515 => 185,  512 => 184,  509 => 183,  507 => 182,  504 => 181,  502 => 180,  499 => 179,  496 => 178,  494 => 177,  491 => 176,  489 => 175,  486 => 174,  483 => 173,  481 => 172,  478 => 171,  476 => 170,  473 => 169,  470 => 168,  468 => 167,  463 => 164,  457 => 160,  454 => 159,  451 => 158,  444 => 154,  438 => 150,  435 => 149,  432 => 148,  430 => 147,  425 => 144,  411 => 143,  406 => 140,  390 => 137,  382 => 135,  377 => 133,  366 => 127,  362 => 126,  339 => 121,  295 => 107,  285 => 105,  250 => 100,  239 => 95,  218 => 82,  205 => 76,  169 => 66,  160 => 59,  148 => 53,  142 => 49,  114 => 37,  107 => 33,  273 => 96,  254 => 92,  240 => 86,  238 => 85,  230 => 82,  221 => 77,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  171 => 64,  159 => 61,  138 => 54,  135 => 53,  78 => 22,  71 => 18,  209 => 82,  193 => 73,  149 => 51,  133 => 42,  103 => 31,  95 => 28,  86 => 24,  57 => 11,  48 => 8,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  800 => 523,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 210,  563 => 209,  559 => 427,  553 => 425,  551 => 205,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 193,  514 => 415,  280 => 103,  271 => 190,  251 => 182,  249 => 181,  93 => 27,  77 => 20,  51 => 10,  34 => 5,  31 => 4,  810 => 529,  807 => 528,  796 => 521,  792 => 488,  788 => 518,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 479,  698 => 477,  694 => 470,  690 => 469,  686 => 472,  682 => 470,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 442,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 416,  522 => 406,  517 => 404,  199 => 71,  196 => 92,  188 => 75,  182 => 70,  173 => 68,  68 => 30,  62 => 12,  28 => 3,  357 => 123,  344 => 119,  341 => 118,  332 => 116,  327 => 114,  324 => 113,  318 => 114,  306 => 110,  297 => 200,  291 => 106,  263 => 95,  258 => 187,  243 => 88,  231 => 83,  224 => 79,  212 => 78,  202 => 94,  190 => 76,  187 => 70,  174 => 65,  143 => 55,  136 => 71,  122 => 37,  117 => 39,  112 => 35,  104 => 32,  85 => 23,  75 => 19,  58 => 25,  44 => 9,  161 => 63,  158 => 80,  154 => 58,  151 => 59,  140 => 58,  125 => 38,  121 => 50,  118 => 49,  100 => 39,  87 => 24,  49 => 14,  46 => 7,  27 => 3,  91 => 27,  88 => 25,  63 => 13,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 126,  358 => 151,  353 => 125,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  309 => 108,  307 => 128,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 101,  283 => 100,  281 => 114,  276 => 102,  274 => 97,  269 => 94,  265 => 96,  259 => 103,  255 => 93,  253 => 100,  235 => 94,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 73,  189 => 71,  184 => 73,  175 => 65,  170 => 84,  166 => 61,  163 => 60,  155 => 47,  152 => 54,  144 => 49,  127 => 35,  109 => 34,  94 => 28,  82 => 22,  76 => 18,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 17,  69 => 16,  54 => 10,  47 => 9,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 60,  157 => 56,  145 => 74,  139 => 48,  131 => 44,  120 => 31,  115 => 39,  111 => 47,  108 => 36,  106 => 33,  101 => 30,  98 => 45,  92 => 27,  83 => 33,  80 => 20,  74 => 14,  66 => 14,  60 => 13,  55 => 24,  52 => 12,  50 => 10,  41 => 8,  32 => 4,  29 => 3,  462 => 202,  453 => 199,  449 => 157,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 134,  373 => 131,  361 => 152,  355 => 150,  351 => 124,  348 => 140,  342 => 137,  338 => 135,  335 => 120,  329 => 117,  325 => 129,  323 => 116,  320 => 127,  315 => 110,  312 => 113,  303 => 106,  300 => 109,  298 => 120,  289 => 196,  286 => 112,  278 => 98,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  248 => 97,  246 => 99,  241 => 93,  233 => 87,  229 => 91,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 75,  203 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 72,  178 => 66,  176 => 64,  172 => 64,  168 => 62,  165 => 83,  162 => 59,  156 => 62,  153 => 77,  150 => 55,  147 => 50,  141 => 48,  134 => 45,  130 => 41,  123 => 41,  119 => 42,  116 => 41,  113 => 48,  105 => 25,  102 => 32,  99 => 31,  96 => 37,  90 => 26,  84 => 40,  81 => 23,  73 => 17,  70 => 16,  67 => 17,  64 => 15,  59 => 14,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
