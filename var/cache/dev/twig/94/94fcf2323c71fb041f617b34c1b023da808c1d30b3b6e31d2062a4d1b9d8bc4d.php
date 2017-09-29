<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_565d7b34017e7b0d00cabe1ad15d79198e7f69bc178b026aab416bff8ead0d57 extends Twig_Template
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
        $__internal_d09128e988f99f067b8b0e106158af136e5c257593fbfdd67806fdba5d1af1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09128e988f99f067b8b0e106158af136e5c257593fbfdd67806fdba5d1af1de->enter($__internal_d09128e988f99f067b8b0e106158af136e5c257593fbfdd67806fdba5d1af1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4fb39cabc0a853d7b465e578a5b30c4273cc3d350eef8bc133fdf61074ed331d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb39cabc0a853d7b465e578a5b30c4273cc3d350eef8bc133fdf61074ed331d->enter($__internal_4fb39cabc0a853d7b465e578a5b30c4273cc3d350eef8bc133fdf61074ed331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d09128e988f99f067b8b0e106158af136e5c257593fbfdd67806fdba5d1af1de->leave($__internal_d09128e988f99f067b8b0e106158af136e5c257593fbfdd67806fdba5d1af1de_prof);

        
        $__internal_4fb39cabc0a853d7b465e578a5b30c4273cc3d350eef8bc133fdf61074ed331d->leave($__internal_4fb39cabc0a853d7b465e578a5b30c4273cc3d350eef8bc133fdf61074ed331d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
