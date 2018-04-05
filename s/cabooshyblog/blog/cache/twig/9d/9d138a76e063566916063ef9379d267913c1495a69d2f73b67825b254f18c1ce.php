<?php

/* @Page:C:/UniformServer/UniServerZ/www/blog/user/pages/posts/first-post */
class __TwigTemplate_f533703376ed6a755ef6f1c1348995e73a620f4b16d30535c6355cddbf4b524a extends Twig_Template
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
        echo "<p><strong>Hey Guys!</strong></p>
<p>Here is my first post on the blog! expect some shit like tech talk and me rambling about games and shit!</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/UniformServer/UniServerZ/www/blog/user/pages/posts/first-post";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p><strong>Hey Guys!</strong></p>
<p>Here is my first post on the blog! expect some shit like tech talk and me rambling about games and shit!</p>", "@Page:C:/UniformServer/UniServerZ/www/blog/user/pages/posts/first-post", "");
    }
}
