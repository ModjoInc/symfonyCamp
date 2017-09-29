<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_acacba1794e10f6c9f681ada3edf5afef455597ac8d2cf1b0f35f2e08cb37226 extends Twig_Template
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
        $__internal_638d6770b788a5289f4bbb152157c86abc811f307f113754b380529100472078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638d6770b788a5289f4bbb152157c86abc811f307f113754b380529100472078->enter($__internal_638d6770b788a5289f4bbb152157c86abc811f307f113754b380529100472078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_889c4e48e4e644c14f3d6484ea986f9ace7b3e369808a981aeebb76635a12c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889c4e48e4e644c14f3d6484ea986f9ace7b3e369808a981aeebb76635a12c21->enter($__internal_889c4e48e4e644c14f3d6484ea986f9ace7b3e369808a981aeebb76635a12c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_638d6770b788a5289f4bbb152157c86abc811f307f113754b380529100472078->leave($__internal_638d6770b788a5289f4bbb152157c86abc811f307f113754b380529100472078_prof);

        
        $__internal_889c4e48e4e644c14f3d6484ea986f9ace7b3e369808a981aeebb76635a12c21->leave($__internal_889c4e48e4e644c14f3d6484ea986f9ace7b3e369808a981aeebb76635a12c21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
