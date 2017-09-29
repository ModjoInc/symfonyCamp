<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_11e5710c6af86f6f6ce133a04312d2493e47fd7fe737533a5296fb25c92db98b extends Twig_Template
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
        $__internal_338881e70aafa293c0a46e04f8ffbcede12c8142edd5d919cbf7dbe09faacc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338881e70aafa293c0a46e04f8ffbcede12c8142edd5d919cbf7dbe09faacc6d->enter($__internal_338881e70aafa293c0a46e04f8ffbcede12c8142edd5d919cbf7dbe09faacc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b365d11a74df4b66bb1927fd9933faf247e8ace59ca14a75017e8b841dba0c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b365d11a74df4b66bb1927fd9933faf247e8ace59ca14a75017e8b841dba0c5d->enter($__internal_b365d11a74df4b66bb1927fd9933faf247e8ace59ca14a75017e8b841dba0c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_338881e70aafa293c0a46e04f8ffbcede12c8142edd5d919cbf7dbe09faacc6d->leave($__internal_338881e70aafa293c0a46e04f8ffbcede12c8142edd5d919cbf7dbe09faacc6d_prof);

        
        $__internal_b365d11a74df4b66bb1927fd9933faf247e8ace59ca14a75017e8b841dba0c5d->leave($__internal_b365d11a74df4b66bb1927fd9933faf247e8ace59ca14a75017e8b841dba0c5d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
