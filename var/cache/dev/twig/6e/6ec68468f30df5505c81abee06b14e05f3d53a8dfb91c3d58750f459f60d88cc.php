<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9ec924366e2f87664ba94044a4897bf66d2b63a663b41eee1f997752f7076340 extends Twig_Template
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
        $__internal_d103bc1fd955601f89e282ed15cfa59f51df56fb66ebb764ff6f79d3b68453e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d103bc1fd955601f89e282ed15cfa59f51df56fb66ebb764ff6f79d3b68453e3->enter($__internal_d103bc1fd955601f89e282ed15cfa59f51df56fb66ebb764ff6f79d3b68453e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8d501b17fe5341f7152083f483fdadaad4c8ac0ec6277383cd58dc11605c92b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d501b17fe5341f7152083f483fdadaad4c8ac0ec6277383cd58dc11605c92b7->enter($__internal_8d501b17fe5341f7152083f483fdadaad4c8ac0ec6277383cd58dc11605c92b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d103bc1fd955601f89e282ed15cfa59f51df56fb66ebb764ff6f79d3b68453e3->leave($__internal_d103bc1fd955601f89e282ed15cfa59f51df56fb66ebb764ff6f79d3b68453e3_prof);

        
        $__internal_8d501b17fe5341f7152083f483fdadaad4c8ac0ec6277383cd58dc11605c92b7->leave($__internal_8d501b17fe5341f7152083f483fdadaad4c8ac0ec6277383cd58dc11605c92b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
