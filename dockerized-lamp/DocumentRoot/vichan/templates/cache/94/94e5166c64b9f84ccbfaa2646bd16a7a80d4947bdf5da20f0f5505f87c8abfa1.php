<?php

/* header.html */
class __TwigTemplate_0ea96695b264c01c86f25c6991f59dd55c2f9fc3aa943bda91abe64dd0514f9b extends Twig_Template
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
        echo "\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo $this->getAttribute(($context["config"] ?? null), "url_stylesheet", array());
        echo "\">
\t\t";
        // line 2
        if ($this->getAttribute(($context["config"] ?? null), "url_favicon", array())) {
            echo "<link rel=\"shortcut icon\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "url_favicon", array());
            echo "\">";
        }
        // line 3
        echo "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
\t\t";
        // line 5
        if ($this->getAttribute(($context["config"] ?? null), "meta_keywords", array())) {
            echo "<meta name=\"keywords\" content=\"";
            echo $this->getAttribute(($context["config"] ?? null), "meta_keywords", array());
            echo "\">";
        }
        // line 6
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", array()), 1, array()) != "")) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" id=\"stylesheet\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "uri_stylesheets", array());
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", array()), 1, array());
            echo "\">";
        }
        // line 7
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "font_awesome", array())) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "root", array());
            echo $this->getAttribute(($context["config"] ?? null), "font_awesome_css", array());
            echo "\">";
        }
        // line 8
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "country_flags_condensed", array())) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "root", array());
            echo $this->getAttribute(($context["config"] ?? null), "country_flags_condensed_css", array());
            echo "\">";
        }
        // line 9
        echo "\t\t<script type=\"text/javascript\">
\t\t\tvar configRoot=\"";
        // line 10
        echo $this->getAttribute(($context["config"] ?? null), "root", array());
        echo "\";
\t\t\tvar inMod = ";
        // line 11
        if (($context["mod"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
\t\t\tvar modRoot=\"";
        // line 12
        echo $this->getAttribute(($context["config"] ?? null), "root", array());
        echo "\"+(inMod ? \"mod.php?/\" : \"\");
\t\t</script>
\t\t";
        // line 14
        if ( !($context["nojavascript"] ?? null)) {
            // line 15
            echo "\t\t\t<script type=\"text/javascript\" src=\"";
            echo $this->getAttribute(($context["config"] ?? null), "url_javascript", array());
            echo "\"></script>
\t\t\t";
            // line 16
            if ( !$this->getAttribute(($context["config"] ?? null), "additional_javascript_compile", array())) {
                // line 17
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "additional_javascript", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                    echo "<script type=\"text/javascript\" src=\"";
                    echo $this->getAttribute(($context["config"] ?? null), "additional_javascript_url", array());
                    echo $context["javascript"];
                    echo "\"></script>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t\t\t";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha", array())) {
            echo "<script src=\"//www.google.com/recaptcha/api.js\"></script>
\t\t<style type=\"text/css\">";
            // line 49
            echo "
\t\t\t#recaptcha_area {
\t\t\t\tfloat: none !important;
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t\t#recaptcha_logo, #recaptcha_privacy {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t#recaptcha_table {
\t\t\t\tborder: none !important;
\t\t\t}
\t\t\t#recaptcha_table tr:first-child {
\t\t\t\theight: auto;
\t\t\t}
\t\t\t.recaptchatable img {
\t\t\t\tfloat: none !important;
\t\t\t}
\t\t\t#recaptcha_response_field {
\t\t\t\tfont-size: 10pt !important;
\t\t\t\tborder: 1px solid #a9a9a9 !important;
\t\t\t\tpadding: 1px !important;
\t\t\t}
\t\t\ttd.recaptcha_image_cell {
\t\t\t\tbackground: transparent !important;
\t\t\t}
\t\t\t.recaptchatable, #recaptcha_area tr, #recaptcha_area td, #recaptcha_area th {
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t";
            echo "</style>";
        }
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 20,  109 => 19,  106 => 18,  93 => 17,  91 => 16,  86 => 15,  84 => 14,  79 => 12,  71 => 11,  67 => 10,  64 => 9,  56 => 8,  48 => 7,  40 => 6,  34 => 5,  30 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.html", "/var/www/html/vichan/templates/header.html");
    }
}
