<?php

/* ::base.html.twig */
class __TwigTemplate_491577b6e1f29df81f67f77f871ec17db7430c438dd085cf8437b7e60fcfe0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    
    \t<div class=\"container\">
  \t\t\t
\t\t\t<!-- Titre de l'application -->
\t\t\t<h1>My Conventions</h1>
\t\t\t
\t\t\t<!-- Barre de menu -->
\t\t\t<div class=\"navbar navbar-default\">
\t         
\t        \t<ul class=\"nav navbar-nav\">
\t                <li ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "MyConventions_accueil")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("MyConventions_accueil");
        echo "\">Conventions</a></li>
\t                <li ";
        // line 23
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "MyConventions_ajouter")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("MyConventions_ajouter");
        echo "\">Ajouter</a></li>
\t        \t</ul>
\t            
\t        </div>
\t        
\t        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "    
    \t</div>
   
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MyConventions";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    \t";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "\t    \t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
\t    \t<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  111 => 33,  108 => 32,  103 => 28,  96 => 7,  93 => 6,  87 => 5,  81 => 36,  79 => 32,  74 => 29,  72 => 28,  60 => 23,  52 => 22,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
