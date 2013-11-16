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
\t<!-- Liste des conventions -->
\t<ul class=\"list-group\">
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conventions"]) ? $context["conventions"] : $this->getContext($context, "conventions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["convention"]) {
            // line 9
            echo "\t\t\t<li class=\"list-group-item\"> 
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convention"]) ? $context["convention"] : $this->getContext($context, "convention")), "thumbnail"), "html", null, true);
            echo "\" width=\"120px;\"/>
\t\t\t\t\t\t</div>
\t  \t\t\t\t\t<div class=\"col-md-10\">
\t  \t\t\t\t\t\t<h4 style=\"color:dark gray;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convention"]) ? $context["convention"] : $this->getContext($context, "convention")), "name"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<span style=\"color:gray;font-size:12px;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["convention"]) ? $context["convention"] : $this->getContext($context, "convention")), "date"), "html", null, true);
            echo "</span>
\t  \t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t<li class=\"list-group-item\">Pas encore de convention!</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['convention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</ul>
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
        return array (  75 => 25,  68 => 23,  57 => 17,  53 => 16,  47 => 13,  41 => 9,  36 => 8,  31 => 5,  28 => 4,);
    }
}
