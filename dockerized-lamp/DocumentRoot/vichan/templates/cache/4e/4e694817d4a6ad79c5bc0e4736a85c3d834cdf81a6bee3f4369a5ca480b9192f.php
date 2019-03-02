<?php

/* installer/check-requirements.html */
class __TwigTemplate_214cc9c80454848d9da237ad4c23c2de2261b739392971fb552ec8ab46c48d7a extends Twig_Template
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
        echo "<div style=\"max-width:700px;margin:auto\">
\t<h2 style=\"text-align:center\">Pre-installation tests</h2>
\t<table class=\"modlog\" style=\"margin-top:10px;max-width:600px\">
\t\t<tr>
\t\t\t<th>Category</th>
\t\t\t<th>Test</th>
\t\t\t<th>Result</th>
\t\t</tr>
\t\t";
        // line 9
        $context["errors"] = 0;
        // line 10
        echo "\t\t";
        $context["warnings"] = 0;
        // line 11
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tests"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 12
            echo "\t\t\t<tr>
\t\t\t\t<td class=\"minimal\"><strong>";
            // line 13
            echo $this->getAttribute($context["test"], "category", array());
            echo "</strong></td>
\t\t\t\t<td>";
            // line 14
            echo $this->getAttribute($context["test"], "name", array());
            echo "</td>
\t\t\t\t<td class=\"minimal\" style=\"text-align:center\">
\t\t\t\t\t";
            // line 16
            if ($this->getAttribute($context["test"], "result", array())) {
                // line 17
                echo "\t\t\t\t\t\t<i style=\"font-size:11pt;color:#090\" class=\"fa fa-check\"></i>
\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["test"], "required", array())) {
                    // line 20
                    echo "\t\t\t\t\t\t\t";
                    $context["errors"] = (($context["errors"] ?? null) + 1);
                    // line 21
                    echo "\t\t\t\t\t\t\t<i style=\"font-size:11pt;color:#d00\" class=\"fa fa-exclamation\"></i>
\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    $context["warnings"] = (($context["warnings"] ?? null) + 1);
                    // line 24
                    echo "\t\t\t\t\t\t\t<i style=\"font-size:11pt;color:#f80\" class=\"fa fa-warning\"></i>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</table>
\t";
        // line 31
        if ((($context["errors"] ?? null) || ($context["warnings"] ?? null))) {
            // line 32
            echo "\t\t<p><strong>There were ";
            echo ($context["errors"] ?? null);
            echo " error(s) and ";
            echo ($context["warnings"] ?? null);
            echo " warning(s).</strong></p>
\t\t<ul>
\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                if ( !$this->getAttribute($context["test"], "result", array())) {
                    // line 35
                    echo "\t\t\t\t<li style=\"margin-bottom:5px\">
\t\t\t\t\t";
                    // line 36
                    if ($this->getAttribute($context["test"], "required", array())) {
                        // line 37
                        echo "\t\t\t\t\t\t<i style=\"font-size:11pt;color:#d00\" class=\"fa fa-exclamation\"></i> <strong>Error:</strong> 
\t\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t\t<i style=\"font-size:11pt;color:#f80\" class=\"fa fa-warning\"></i> <strong>Warning:</strong> 
\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t";
                    echo $this->getAttribute($context["test"], "message", array());
                    echo "
\t\t\t\t</li>
\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t</ul>
\t\t";
            // line 45
            if (($context["errors"] ?? null)) {
                // line 46
                echo "\t\t\t<p style=\"text-align:center\"><a href=\"?step=2\">Click here to ignore errors and attempt installing anyway (not recommended).</a></p>
\t\t";
            } else {
                // line 48
                echo "\t\t\t<p style=\"text-align:center\"><a href=\"?step=2\">Click here to proceed with installation.</a></p>
\t\t";
            }
            // line 50
            echo "\t";
        } else {
            // line 51
            echo "\t\t<p>There were no errors or warnings. Good!</p>
\t\t<p style=\"text-align:center\"><a href=\"?step=2\">Clik here to proceed with installation.</a></p>
\t";
        }
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "installer/check-requirements.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 54,  143 => 51,  140 => 50,  136 => 48,  132 => 46,  130 => 45,  127 => 44,  116 => 41,  112 => 39,  108 => 37,  106 => 36,  103 => 35,  98 => 34,  90 => 32,  88 => 31,  85 => 30,  77 => 27,  74 => 26,  70 => 24,  67 => 23,  63 => 21,  60 => 20,  57 => 19,  53 => 17,  51 => 16,  46 => 14,  42 => 13,  39 => 12,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "installer/check-requirements.html", "/var/www/html/vichan/templates/installer/check-requirements.html");
    }
}
