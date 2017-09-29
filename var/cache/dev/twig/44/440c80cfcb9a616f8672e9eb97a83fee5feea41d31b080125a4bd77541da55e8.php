<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa31c7e191ff782a3a5468e162637150d42504414a35e2c448f799d93d4b86d2 extends Twig_Template
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
        $__internal_e7815ecff46e517066c765dfd26e62050ded6251026e599ee171f92b237a6281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7815ecff46e517066c765dfd26e62050ded6251026e599ee171f92b237a6281->enter($__internal_e7815ecff46e517066c765dfd26e62050ded6251026e599ee171f92b237a6281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_719158bcad0fe7be9f04010a3e3f7b15ebde97d21e46a0250132a4d852dea255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719158bcad0fe7be9f04010a3e3f7b15ebde97d21e46a0250132a4d852dea255->enter($__internal_719158bcad0fe7be9f04010a3e3f7b15ebde97d21e46a0250132a4d852dea255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e7815ecff46e517066c765dfd26e62050ded6251026e599ee171f92b237a6281->leave($__internal_e7815ecff46e517066c765dfd26e62050ded6251026e599ee171f92b237a6281_prof);

        
        $__internal_719158bcad0fe7be9f04010a3e3f7b15ebde97d21e46a0250132a4d852dea255->leave($__internal_719158bcad0fe7be9f04010a3e3f7b15ebde97d21e46a0250132a4d852dea255_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
