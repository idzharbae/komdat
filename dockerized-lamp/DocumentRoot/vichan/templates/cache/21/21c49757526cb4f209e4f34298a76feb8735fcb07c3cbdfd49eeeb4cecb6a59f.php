<?php

/* installer/config.html */
class __TwigTemplate_7ccc6cfd7fc25878a9a58413058c13f23e303dffa9e9a0608d56ebfaa168aa62 extends Twig_Template
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
        echo "<form action=\"?step=3\" method=\"post\" autocomplete=\"off\">
\t<fieldset>
\t<legend>Database (MySQL)</legend>
\t\t<label for=\"db_server\">Server:</label> 
\t\t<input type=\"text\" id=\"db_server\" name=\"db[server]\" value=\"";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "db", array()), "server", array());
        echo "\">

\t\t<label for=\"db_db\">Database:</label> 
\t\t<input type=\"text\" id=\"db_db\" name=\"db[database]\" value=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "db", array()), "database", array());
        echo "\">

\t\t<label for=\"db_prefix\">Table prefix (optional):</label> 
\t\t<input type=\"text\" id=\"db_prefix\" name=\"db[prefix]\" value=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "db", array()), "prefix", array());
        echo "\">

\t\t<label for=\"db_user\">Username:</label> 
\t\t<input type=\"text\" id=\"db_user\" name=\"db[user]\" value=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "db", array()), "user", array());
        echo "\">

\t\t<label for=\"db_pass\">Password:</label> 
\t\t<input type=\"password\" id=\"db_pass\" name=\"db[password]\" value=\"\">
\t</fieldset>
\t<p style=\"text-align:center\" class=\"unimportant\">The following is all later configurable. For more options, <a href=\"http://tinyboard.org/docs/?p=Config\">edit your configuration files</a> after installing.</p>
\t<fieldset>
\t<legend>Cookies</legend>
\t\t<label for=\"cookies_mod\">Moderator cookie:</label> 
\t\t<input type=\"text\" id=\"cookies_mod\" name=\"cookies[mod]\" value=\"";
        // line 23
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "cookies", array()), "mod", array());
        echo "\">

\t\t<label for=\"cookies_salt\">Secure salt:</label> 
\t\t<input type=\"text\" id=\"cookies_salt\" name=\"cookies[salt]\" value=\"";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "cookies", array()), "salt", array());
        echo "\" size=\"40\">
\t</fieldset>

\t<fieldset>
\t<legend>Flood control</legend>
\t\t<label for=\"flood_time\">Seconds before each post:</label> 
\t\t<input type=\"text\" id=\"flood_time\" name=\"flood_time\" value=\"";
        // line 32
        echo $this->getAttribute(($context["config"] ?? null), "flood_time", array());
        echo "\">

\t\t<label for=\"flood_time_ip\">Seconds before you can repost something (post the exact same text):</label> 
\t\t<input type=\"text\" id=\"flood_time_ip\" name=\"flood_time_ip\" value=\"";
        // line 35
        echo $this->getAttribute(($context["config"] ?? null), "flood_time_ip", array());
        echo "\">

\t\t<label for=\"flood_time_same\">Same as above, but with a different IP address:</label> 
\t\t<input type=\"text\" id=\"flood_time_same\" name=\"flood_time_same\" value=\"";
        // line 38
        echo $this->getAttribute(($context["config"] ?? null), "flood_time_same", array());
        echo "\">

\t\t<label for=\"max_body\">Maximum post body length:</label> 
\t\t<input type=\"text\" id=\"max_body\" name=\"max_body\" value=\"";
        // line 41
        echo $this->getAttribute(($context["config"] ?? null), "max_body", array());
        echo "\">

\t\t<label for=\"reply_limit\">Replies in a thread before it can no longer be bumped:</label> 
\t\t<input type=\"text\" id=\"reply_limit\" name=\"reply_limit\" value=\"";
        // line 44
        echo $this->getAttribute(($context["config"] ?? null), "reply_limit", array());
        echo "\">

\t\t<label for=\"max_links\">Maximum number of links in a single post:</label> 
\t\t<input type=\"text\" id=\"max_links\" name=\"max_links\" value=\"";
        // line 47
        echo $this->getAttribute(($context["config"] ?? null), "max_links", array());
        echo "\">\t\t\t
\t</fieldset>

\t<fieldset>
\t<legend>Images</legend>
\t\t<label for=\"max_filesize\">Maximum image filesize (bytes):</label> 
\t\t<input type=\"text\" id=\"max_filesize\" name=\"max_filesize\" value=\"";
        // line 53
        echo $this->getAttribute(($context["config"] ?? null), "max_filesize", array());
        echo "\">

\t\t<label for=\"thumb_width\">Thumbnail width:</label> 
\t\t<input type=\"text\" id=\"thumb_width\" name=\"thumb_width\" value=\"";
        // line 56
        echo $this->getAttribute(($context["config"] ?? null), "thumb_width", array());
        echo "\">

\t\t<label for=\"thumb_height\">Thumbnail height:</label> 
\t\t<input type=\"text\" id=\"thumb_height\" name=\"thumb_height\" value=\"";
        // line 59
        echo $this->getAttribute(($context["config"] ?? null), "thumb_height", array());
        echo "\">

\t\t<label for=\"max_width\">Maximum image width:</label> 
\t\t<input type=\"text\" id=\"max_width\" name=\"max_width\" value=\"";
        // line 62
        echo $this->getAttribute(($context["config"] ?? null), "max_width", array());
        echo "\">

\t\t<label for=\"max_height\">Maximum image height:</label> 
\t\t<input type=\"text\" id=\"max_height\" name=\"max_height\" value=\"";
        // line 65
        echo $this->getAttribute(($context["config"] ?? null), "max_height", array());
        echo "\">
\t</fieldset>

\t<fieldset>
\t<legend>Display</legend>
\t\t<label for=\"threads_per_page\">Threads per page:</label> 
\t\t<input type=\"text\" id=\"threads_per_page\" name=\"threads_per_page\" value=\"";
        // line 71
        echo $this->getAttribute(($context["config"] ?? null), "threads_per_page", array());
        echo "\">

\t\t<label for=\"max_pages\">Page limit:</label> 
\t\t<input type=\"text\" id=\"max_pages\" name=\"max_pages\" value=\"";
        // line 74
        echo $this->getAttribute(($context["config"] ?? null), "max_pages", array());
        echo "\">

\t\t<label for=\"threads_preview\">Number of replies to show per thread on the index page:</label> 
\t\t<input type=\"text\" id=\"threads_preview\" name=\"threads_preview\" value=\"";
        // line 77
        echo $this->getAttribute(($context["config"] ?? null), "threads_preview", array());
        echo "\">
\t</fieldset>

\t<fieldset>
\t<legend>Directories</legend>
\t\t<label for=\"root\">Root URI (include trailing slash):</label> 
\t\t<input type=\"text\" id=\"root\" name=\"root\" value=\"";
        // line 83
        echo $this->getAttribute(($context["config"] ?? null), "root", array());
        echo "\" size=\"40\">
\t</fieldset>

\t<fieldset>
\t<legend>Miscellaneous</legend>
\t\t<label for=\"secure_trip_salt\">Secure trip (##) salt:</label> 
\t\t<input type=\"text\" id=\"secure_trip_salt\" name=\"secure_trip_salt\" value=\"";
        // line 89
        echo $this->getAttribute(($context["config"] ?? null), "secure_trip_salt", array());
        echo "\" size=\"40\">

\t\t<label for=\"more\">Additional configuration:</label>
\t\t<textarea id=\"more\" name=\"more\">";
        // line 92
        echo ($context["more"] ?? null);
        echo "</textarea>
\t</fieldset>

\t<p style=\"text-align:center\">
\t\t<input type=\"submit\" value=\"Complete installation\">
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "installer/config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 92,  172 => 89,  163 => 83,  154 => 77,  148 => 74,  142 => 71,  133 => 65,  127 => 62,  121 => 59,  115 => 56,  109 => 53,  100 => 47,  94 => 44,  88 => 41,  82 => 38,  76 => 35,  70 => 32,  61 => 26,  55 => 23,  43 => 14,  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "installer/config.html", "/var/www/html/vichan/templates/installer/config.html");
    }
}
