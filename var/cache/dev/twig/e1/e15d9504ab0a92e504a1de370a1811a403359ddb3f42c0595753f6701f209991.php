<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5c78ddec2dd0213e300968bd3cecc18c8277369c7402f3d95247e69c4acc98c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc5a32fa96a2684b0cb872c4102dc1a5a49f728cb249a44bca2ad1dd4f2556c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5a32fa96a2684b0cb872c4102dc1a5a49f728cb249a44bca2ad1dd4f2556c0->enter($__internal_dc5a32fa96a2684b0cb872c4102dc1a5a49f728cb249a44bca2ad1dd4f2556c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7401e4c674cf5a1348898429205ebbe24424633bef9f90cbac56a8a48e4c36fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7401e4c674cf5a1348898429205ebbe24424633bef9f90cbac56a8a48e4c36fe->enter($__internal_7401e4c674cf5a1348898429205ebbe24424633bef9f90cbac56a8a48e4c36fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc5a32fa96a2684b0cb872c4102dc1a5a49f728cb249a44bca2ad1dd4f2556c0->leave($__internal_dc5a32fa96a2684b0cb872c4102dc1a5a49f728cb249a44bca2ad1dd4f2556c0_prof);

        
        $__internal_7401e4c674cf5a1348898429205ebbe24424633bef9f90cbac56a8a48e4c36fe->leave($__internal_7401e4c674cf5a1348898429205ebbe24424633bef9f90cbac56a8a48e4c36fe_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f24294e96a14c0619e49790b5ab09267ccbd9e694bfb5b3882b28e31014e58c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24294e96a14c0619e49790b5ab09267ccbd9e694bfb5b3882b28e31014e58c7->enter($__internal_f24294e96a14c0619e49790b5ab09267ccbd9e694bfb5b3882b28e31014e58c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9a8a6b6e4cb1e7654fa639133a8606d7a0f0c9edaa6facfb9ff57f3fcd2fd305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8a6b6e4cb1e7654fa639133a8606d7a0f0c9edaa6facfb9ff57f3fcd2fd305->enter($__internal_9a8a6b6e4cb1e7654fa639133a8606d7a0f0c9edaa6facfb9ff57f3fcd2fd305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9a8a6b6e4cb1e7654fa639133a8606d7a0f0c9edaa6facfb9ff57f3fcd2fd305->leave($__internal_9a8a6b6e4cb1e7654fa639133a8606d7a0f0c9edaa6facfb9ff57f3fcd2fd305_prof);

        
        $__internal_f24294e96a14c0619e49790b5ab09267ccbd9e694bfb5b3882b28e31014e58c7->leave($__internal_f24294e96a14c0619e49790b5ab09267ccbd9e694bfb5b3882b28e31014e58c7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_890fa11e4c10c55c56e0cfafebb5ca5c0865759168d7e3f398075d835e63df2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890fa11e4c10c55c56e0cfafebb5ca5c0865759168d7e3f398075d835e63df2b->enter($__internal_890fa11e4c10c55c56e0cfafebb5ca5c0865759168d7e3f398075d835e63df2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35c933691c8b53473062d7390be64133d6ff171006b6ea4eb18c0a7109f6aca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c933691c8b53473062d7390be64133d6ff171006b6ea4eb18c0a7109f6aca9->enter($__internal_35c933691c8b53473062d7390be64133d6ff171006b6ea4eb18c0a7109f6aca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_35c933691c8b53473062d7390be64133d6ff171006b6ea4eb18c0a7109f6aca9->leave($__internal_35c933691c8b53473062d7390be64133d6ff171006b6ea4eb18c0a7109f6aca9_prof);

        
        $__internal_890fa11e4c10c55c56e0cfafebb5ca5c0865759168d7e3f398075d835e63df2b->leave($__internal_890fa11e4c10c55c56e0cfafebb5ca5c0865759168d7e3f398075d835e63df2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
