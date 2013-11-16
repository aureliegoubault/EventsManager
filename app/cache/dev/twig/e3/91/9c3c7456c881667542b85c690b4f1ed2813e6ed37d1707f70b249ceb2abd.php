<?php

/* MyConventionsListBundle:List:ajouter.html.twig */
class __TwigTemplate_e3919c3c7456c881667542b85c690b4f1ed2813e6ed37d1707f70b249ceb2abd extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<!-- Formulaire d'ajout de convention -->
\t<div class=\"well\">
\t\t<form role=\"form\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t  \t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t</form>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "MyConventionsListBundle:List:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
