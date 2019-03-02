<?php

/* error.html */
class __TwigTemplate_62eb9a4e7a0cd8e0679454f5990709e30db393d5fe67371392357822760fac35 extends Twig_Template
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
        echo "<div style=\"text-align:center\">
\t<h2 style=\"margin:20px 0\">";
        // line 2
        echo ($context["message"] ?? null);
        echo "</h2>
\t";
        // line 3
        if (($context["board"] ?? null)) {
            // line 4
            echo "\t\t<p>
\t\t\t<a href=\"";
            // line 5
            echo $this->getAttribute(($context["config"] ?? null), "root", array());
            if (($context["mod"] ?? null)) {
                echo $this->getAttribute(($context["config"] ?? null), "file_mod", array());
                echo "?/";
            }
            echo $this->getAttribute(($context["board"] ?? null), "dir", array());
            echo $this->getAttribute(($context["config"] ?? null), "file_index", array());
            echo "\">
\t\t\t\t";
            // line 6
            echo gettext("Go back");
            // line 7
            echo "\t\t\t</a>
\t\t</p>
\t";
        }
        // line 10
        echo "</div>
";
        // line 11
        if ((($context["debug"] ?? null) && $this->getAttribute(($context["config"] ?? null), "debug", array()))) {
            // line 12
            echo "\t<hr>
\t<h3>";
            // line 13
            echo gettext("Error information");
            echo "</h3>
\t<pre style=\"white-space:pre-wrap;font-size: 10px;\">
\t\t";
            // line 15
            echo ($context["debug"] ?? null);
            echo "
\t</pre>
\t<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  43 => 7,  41 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error.html", "/var/www/html/vichan/templates/error.html");
    }
}
