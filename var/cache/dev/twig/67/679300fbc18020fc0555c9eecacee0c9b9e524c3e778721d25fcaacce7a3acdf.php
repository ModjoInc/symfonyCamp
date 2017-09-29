<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8164888d581e84e2c2e32d1d7e2cc60682776e22eade1d87e4afcf2377b3459d extends Twig_Template
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
        $__internal_026254efd09ecfc5e1ef8d154982335634691231d3ad7c9f1e3b3cc365d3d04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026254efd09ecfc5e1ef8d154982335634691231d3ad7c9f1e3b3cc365d3d04c->enter($__internal_026254efd09ecfc5e1ef8d154982335634691231d3ad7c9f1e3b3cc365d3d04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_4abefc1291a430554fc0c7cd0c94def8318d376bb9aed63520630d73b5e581d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abefc1291a430554fc0c7cd0c94def8318d376bb9aed63520630d73b5e581d5->enter($__internal_4abefc1291a430554fc0c7cd0c94def8318d376bb9aed63520630d73b5e581d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_026254efd09ecfc5e1ef8d154982335634691231d3ad7c9f1e3b3cc365d3d04c->leave($__internal_026254efd09ecfc5e1ef8d154982335634691231d3ad7c9f1e3b3cc365d3d04c_prof);

        
        $__internal_4abefc1291a430554fc0c7cd0c94def8318d376bb9aed63520630d73b5e581d5->leave($__internal_4abefc1291a430554fc0c7cd0c94def8318d376bb9aed63520630d73b5e581d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
