<?php

/* page.html */
class __TwigTemplate_9d7249f1cc2b03ad8d8cce705a513b35b2d0b93fc84c1bb2bd6f66a6b58d8654 extends Twig_Template
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
        echo "<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<script type=\"text/javascript\">
\t\tvar active_page = \"page\";
\t</script>
\t";
        // line 8
        $this->loadTemplate("header.html", "page.html", 8)->display($context);
        // line 9
        echo "\t<title>";
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 11
        if (($context["mod"] ?? null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-page\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", array()), 1, array()) != "")) {
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", array()), 1, array());
        } else {
            echo "default";
        }
        echo "\">
        ";
        // line 12
        echo $this->getAttribute(($context["boardlist"] ?? null), "top", array());
        echo "

\t";
        // line 14
        if (($context["pm"] ?? null)) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            echo $this->getAttribute(($context["pm"] ?? null), "id", array());
            echo "\">an unread PM</a>";
            if (($this->getAttribute(($context["pm"] ?? null), "waiting", array()) > 0)) {
                echo ", plus ";
                echo $this->getAttribute(($context["pm"] ?? null), "waiting", array());
                echo " more waiting";
            }
            echo ".</div><hr>";
        }
        // line 15
        echo "\t<header>
\t\t<h1>";
        // line 16
        echo ($context["title"] ?? null);
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 18
        if (($context["subtitle"] ?? null)) {
            // line 19
            echo "\t\t\t\t";
            echo ($context["subtitle"] ?? null);
            echo "
\t\t\t";
        }
        // line 21
        echo "\t\t\t";
        if ((($context["mod"] ?? null) &&  !($context["hide_dashboard_link"] ?? null))) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 22
        echo "\t\t</div>
\t</header>
\t";
        // line 24
        echo ($context["body"] ?? null);
        echo "
\t<hr>
\t<footer>
\t\t<p class=\"unimportant\" style=\"margin-top:20px;text-align:center;\">- Tinyboard + 
\t\t\t<a href=\"https://engine.vichan.net/\">vichan</a> ";
        // line 28
        echo $this->getAttribute(($context["config"] ?? null), "version", array());
        echo " -
\t\t<br>Tinyboard Copyright &copy; 2010-2014 Tinyboard Development Group    
\t\t<br><a href=\"https://engine.vichan.net/\">vichan</a> Copyright &copy; 2012-2018 vichan-devel</p>
\t</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  94 => 24,  90 => 22,  83 => 21,  77 => 19,  75 => 18,  70 => 16,  67 => 15,  55 => 14,  50 => 12,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html", "/var/www/html/vichan/templates/page.html");
    }
}
