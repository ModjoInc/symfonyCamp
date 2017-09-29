<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_04b7e365edc6d0270359b108e26ab84aed7e2c8714c81d85055c1b56c5fbfa66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a5b92ce2dffa06b44c6570423aa2695ac95940f79d68eeac46cff5f1a7eb2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5b92ce2dffa06b44c6570423aa2695ac95940f79d68eeac46cff5f1a7eb2ed->enter($__internal_5a5b92ce2dffa06b44c6570423aa2695ac95940f79d68eeac46cff5f1a7eb2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9170ecf59593123f63f3364dc9eeffc72e0fe2558d2524c718221cbdc1b8a2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9170ecf59593123f63f3364dc9eeffc72e0fe2558d2524c718221cbdc1b8a2ba->enter($__internal_9170ecf59593123f63f3364dc9eeffc72e0fe2558d2524c718221cbdc1b8a2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5b92ce2dffa06b44c6570423aa2695ac95940f79d68eeac46cff5f1a7eb2ed->leave($__internal_5a5b92ce2dffa06b44c6570423aa2695ac95940f79d68eeac46cff5f1a7eb2ed_prof);

        
        $__internal_9170ecf59593123f63f3364dc9eeffc72e0fe2558d2524c718221cbdc1b8a2ba->leave($__internal_9170ecf59593123f63f3364dc9eeffc72e0fe2558d2524c718221cbdc1b8a2ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fca4cad7062f5d5617d909458bd5898b0eacc9bfc35b5cb176030cf33937c768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca4cad7062f5d5617d909458bd5898b0eacc9bfc35b5cb176030cf33937c768->enter($__internal_fca4cad7062f5d5617d909458bd5898b0eacc9bfc35b5cb176030cf33937c768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9743cbc40db8a4aa3b205c960e2ba9daf268991b1dd901830c22fe1a9a40b1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9743cbc40db8a4aa3b205c960e2ba9daf268991b1dd901830c22fe1a9a40b1ae->enter($__internal_9743cbc40db8a4aa3b205c960e2ba9daf268991b1dd901830c22fe1a9a40b1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9743cbc40db8a4aa3b205c960e2ba9daf268991b1dd901830c22fe1a9a40b1ae->leave($__internal_9743cbc40db8a4aa3b205c960e2ba9daf268991b1dd901830c22fe1a9a40b1ae_prof);

        
        $__internal_fca4cad7062f5d5617d909458bd5898b0eacc9bfc35b5cb176030cf33937c768->leave($__internal_fca4cad7062f5d5617d909458bd5898b0eacc9bfc35b5cb176030cf33937c768_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca1c585d881e69fd541c15043292864dbe3da9cf69b859a7b96c789306046fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1c585d881e69fd541c15043292864dbe3da9cf69b859a7b96c789306046fab->enter($__internal_ca1c585d881e69fd541c15043292864dbe3da9cf69b859a7b96c789306046fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb98b7720ea7f8fb9c4886c0c262d52e4d8d357c043115f5542777a4a2c54638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb98b7720ea7f8fb9c4886c0c262d52e4d8d357c043115f5542777a4a2c54638->enter($__internal_eb98b7720ea7f8fb9c4886c0c262d52e4d8d357c043115f5542777a4a2c54638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_eb98b7720ea7f8fb9c4886c0c262d52e4d8d357c043115f5542777a4a2c54638->leave($__internal_eb98b7720ea7f8fb9c4886c0c262d52e4d8d357c043115f5542777a4a2c54638_prof);

        
        $__internal_ca1c585d881e69fd541c15043292864dbe3da9cf69b859a7b96c789306046fab->leave($__internal_ca1c585d881e69fd541c15043292864dbe3da9cf69b859a7b96c789306046fab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
