<?php

/* item.html.twig */
class __TwigTemplate_69d7fa45d587d72f70dad43d8b15172f21db5086abe9b4863455ae9873df5bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "item.html.twig", 7)->display($context);
        // line 8
        echo "\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,300,500\" rel=\"stylesheet\">
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />


\t\t<link rel=\"stylesheet\" href=\"/css/linearicons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/nice-select.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/magnific-popup.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/main.css\">
        <link href=\"https://file.myfontastic.com/PVB44bKCPgt7mzxTGtPdsT/icons.css\" rel=\"stylesheet\">
</head>
<body class=\"dup-body\">
    <div class=\"dup-body-wrap\">
";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "<!-- Strat Footer Area -->
\t\t<footer class=\"footer-widget-area\">
\t\t\t<div class=\"overlay overlay-bg\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-bottom d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t<p class=\"footer-text m-0\">&copy; Cabooshy 2018 All rights reserved   |   The base template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com/\">Colorlib</a> | <a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
\t\t\t\t\t<div class=\"footer-social d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t</div>
                    <br><br><br><br>
\t\t\t\t</div>
\t\t\t</div>
        </footer>
\t\t<!-- End Footer Area -->
    </div>
        <script src=\"/js/vendor/jquery-2.2.4.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"/js/jquery.ajaxchimp.min.js\"></script>
\t\t<script src=\"/js/owl.carousel.min.js\"></script>
\t\t<script src=\"/js/jquery.nice-select.min.js\"></script>
\t\t<script src=\"/js/jquery.magnific-popup.min.js\"></script>
\t\t<script src=\"/js/main.js\"></script>
</body>
</html>

";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 28
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 28)->display($context);
            // line 29
            echo "\t\t";
        }
        // line 30
        echo "\t\t
<section class=\"section-gap studio-area\">
                                
\t\t\t<div class=\"overlay overlay-bg\"><br>
                <h2 style=\"color:#898989\">";
        // line 34
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
            </div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 text-center\">
\t\t\t\t\t\t<div class=\"studio-thumb\">
\t\t\t\t\t\t\t<img src=\"/images/Hanako.gif\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-6\">
\t\t\t\t\t\t<div class=\"studio-content\">
\t\t\t\t\t\t\t";
        // line 45
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "<br>
                            <a href=\"/blog/posts/\" class=\"genric-btn info-border circle arrow\">Back Home<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 45,  120 => 34,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  69 => 53,  67 => 26,  50 => 12,  46 => 11,  41 => 8,  39 => 7,  31 => 6,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,300,500\" rel=\"stylesheet\">
    
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />


\t\t<link rel=\"stylesheet\" href=\"/css/linearicons.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/owl.carousel.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/nice-select.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/magnific-popup.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/bootstrap.css\">
\t\t<link rel=\"stylesheet\" href=\"/css/main.css\">
        <link href=\"https://file.myfontastic.com/PVB44bKCPgt7mzxTGtPdsT/icons.css\" rel=\"stylesheet\">
</head>
<body class=\"dup-body\">
    <div class=\"dup-body-wrap\">
{% block content %}
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
<section class=\"section-gap studio-area\">
                                
\t\t\t<div class=\"overlay overlay-bg\"><br>
                <h2 style=\"color:#898989\">{{ page.title }}</h2>
            </div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 text-center\">
\t\t\t\t\t\t<div class=\"studio-thumb\">
\t\t\t\t\t\t\t<img src=\"/images/Hanako.gif\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8 col-sm-6\">
\t\t\t\t\t\t<div class=\"studio-content\">
\t\t\t\t\t\t\t{{ page.content }}<br>
                            <a href=\"/blog/posts/\" class=\"genric-btn info-border circle arrow\">Back Home<span class=\"lnr lnr-arrow-right\"></span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endblock %}
<!-- Strat Footer Area -->
\t\t<footer class=\"footer-widget-area\">
\t\t\t<div class=\"overlay overlay-bg\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"footer-bottom d-flex justify-content-between align-items-center flex-wrap\">
\t\t\t\t\t<p class=\"footer-text m-0\">&copy; Cabooshy 2018 All rights reserved   |   The base template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com/\">Colorlib</a> | <a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
\t\t\t\t\t<div class=\"footer-social d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t</div>
                    <br><br><br><br>
\t\t\t\t</div>
\t\t\t</div>
        </footer>
\t\t<!-- End Footer Area -->
    </div>
        <script src=\"/js/vendor/jquery-2.2.4.min.js\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\" integrity=\"sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"/js/jquery.ajaxchimp.min.js\"></script>
\t\t<script src=\"/js/owl.carousel.min.js\"></script>
\t\t<script src=\"/js/jquery.nice-select.min.js\"></script>
\t\t<script src=\"/js/jquery.magnific-popup.min.js\"></script>
\t\t<script src=\"/js/main.js\"></script>
</body>
</html>

", "item.html.twig", "C:\\UniformServer\\UniServerZ\\www\\blog\\user\\themes\\dup-blog\\templates\\item.html.twig");
    }
}
