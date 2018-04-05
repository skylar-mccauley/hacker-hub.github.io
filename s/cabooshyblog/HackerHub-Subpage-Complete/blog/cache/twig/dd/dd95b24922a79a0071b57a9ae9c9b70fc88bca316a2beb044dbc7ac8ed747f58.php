<?php

/* partials/base.html.twig */
class __TwigTemplate_4e1cadf822cfae428dc7dd5196b95311c8bef5f9465acee007461b87a59a7409 extends Twig_Template
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
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
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
       
        
\t\t<!-- End Banner Area -->
        \t\t<section class=\"section-gap studio-area\">
                                
\t\t\t<div class=\"overlay overlay-bg\"><br>
                <h2 style=\"color:#787878\">";
        // line 32
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
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        
\t\t<!-- Strat Footer Area -->
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

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  49 => 12,  45 => 11,  40 => 8,  38 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
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
       
        
\t\t<!-- End Banner Area -->
        \t\t<section class=\"section-gap studio-area\">
                                
\t\t\t<div class=\"overlay overlay-bg\"><br>
                <h2 style=\"color:#787878\">{{page.title}}</h2>
            </div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 text-center\">
\t\t\t\t\t\t<div class=\"studio-thumb\">
\t\t\t\t\t\t\t<img src=\"/images/Hanako.gif\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        
\t\t<!-- Strat Footer Area -->
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
", "partials/base.html.twig", "C:\\UniformServer\\UniServerZ\\www\\blog\\user\\themes\\dup-blog\\templates\\partials\\base.html.twig");
    }
}
