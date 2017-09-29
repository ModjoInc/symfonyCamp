<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_27fcc32cbc727b456cb6bdc4703e93e2968b841d299cdcc212c3aff97df9e93e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffd1661d7d93e7540f7b9d981b310fc67a59041c4c9b6b417522025cae3885a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd1661d7d93e7540f7b9d981b310fc67a59041c4c9b6b417522025cae3885a3->enter($__internal_ffd1661d7d93e7540f7b9d981b310fc67a59041c4c9b6b417522025cae3885a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7791792f1f9bf08e92da2530d55f12bb38b8a675804169abf9075f445be938ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7791792f1f9bf08e92da2530d55f12bb38b8a675804169abf9075f445be938ac->enter($__internal_7791792f1f9bf08e92da2530d55f12bb38b8a675804169abf9075f445be938ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ffd1661d7d93e7540f7b9d981b310fc67a59041c4c9b6b417522025cae3885a3->leave($__internal_ffd1661d7d93e7540f7b9d981b310fc67a59041c4c9b6b417522025cae3885a3_prof);

        
        $__internal_7791792f1f9bf08e92da2530d55f12bb38b8a675804169abf9075f445be938ac->leave($__internal_7791792f1f9bf08e92da2530d55f12bb38b8a675804169abf9075f445be938ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0a202c6ecf4b004fcbcc3845d136c8302f161133e572976ab15eafc5edb0b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a202c6ecf4b004fcbcc3845d136c8302f161133e572976ab15eafc5edb0b1a->enter($__internal_f0a202c6ecf4b004fcbcc3845d136c8302f161133e572976ab15eafc5edb0b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d3bfb84ab858ff64ec1fa3f41e03859457618e40f09f796e20576e00a03370c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bfb84ab858ff64ec1fa3f41e03859457618e40f09f796e20576e00a03370c7->enter($__internal_d3bfb84ab858ff64ec1fa3f41e03859457618e40f09f796e20576e00a03370c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d3bfb84ab858ff64ec1fa3f41e03859457618e40f09f796e20576e00a03370c7->leave($__internal_d3bfb84ab858ff64ec1fa3f41e03859457618e40f09f796e20576e00a03370c7_prof);

        
        $__internal_f0a202c6ecf4b004fcbcc3845d136c8302f161133e572976ab15eafc5edb0b1a->leave($__internal_f0a202c6ecf4b004fcbcc3845d136c8302f161133e572976ab15eafc5edb0b1a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
