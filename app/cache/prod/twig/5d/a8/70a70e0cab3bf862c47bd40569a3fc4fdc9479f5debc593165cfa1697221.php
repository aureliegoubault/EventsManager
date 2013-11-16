<?php

/* MyConventionsListBundle:List:index.html.twig */
class __TwigTemplate_5da870a70e0cab3bf862c47bd40569a3fc4fdc9479f5debc593165cfa1697221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
\t<div class=\"container\">
  \t\t\t
\t\t<!-- Titre de l'application -->
\t\t<h1>My Conventions</h1>
\t\t
\t\t<!-- Barre de menu -->
\t\t<div class=\"navbar navbar-default\">
         
        \t<ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Conventions</a></li>
        \t</ul>
            
        </div>
\t    
\t    <!-- Liste des conventions -->
\t    <ul class=\"list-group\">
\t    \t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conventions"]) ? $context["conventions"] : $this->getContext($context, "conventions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["convention"]) {
            // line 23
            echo "      \t\t\t<li class=\"list-group-item\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convention"]) ? $context["convention"] : $this->getContext($context, "convention")), "name"), "html", null, true);
            echo " </li>
    \t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "      \t\t\t<li class=\"list-group-item\">Pas encore de convention!</li>
    \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['convention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  \t\t</ul>
\t\t
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "MyConventionsListBundle:List:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  63 => 25,  55 => 23,  50 => 22,  31 => 5,  28 => 4,);
    }
}
