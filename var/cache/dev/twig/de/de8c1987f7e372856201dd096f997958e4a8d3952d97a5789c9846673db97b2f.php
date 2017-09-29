<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c83df82bed91d7b41a844b2a846c37328109ec63b1854d3e239a2f921735b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c83df82bed91d7b41a844b2a846c37328109ec63b1854d3e239a2f921735b14->enter($__internal_4c83df82bed91d7b41a844b2a846c37328109ec63b1854d3e239a2f921735b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_85dc392da465bd8b235eb833734d7dbe2df353eb8b9af44fe6e59f18f3e6e532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dc392da465bd8b235eb833734d7dbe2df353eb8b9af44fe6e59f18f3e6e532->enter($__internal_85dc392da465bd8b235eb833734d7dbe2df353eb8b9af44fe6e59f18f3e6e532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c83df82bed91d7b41a844b2a846c37328109ec63b1854d3e239a2f921735b14->leave($__internal_4c83df82bed91d7b41a844b2a846c37328109ec63b1854d3e239a2f921735b14_prof);

        
        $__internal_85dc392da465bd8b235eb833734d7dbe2df353eb8b9af44fe6e59f18f3e6e532->leave($__internal_85dc392da465bd8b235eb833734d7dbe2df353eb8b9af44fe6e59f18f3e6e532_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bab5ff7f08241af419da9c5e09299b35052c4658e5b3d95bfc679993c15108a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab5ff7f08241af419da9c5e09299b35052c4658e5b3d95bfc679993c15108a5->enter($__internal_bab5ff7f08241af419da9c5e09299b35052c4658e5b3d95bfc679993c15108a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_767d29e7b52749ef0314502179ddad785fbd2b392a0086ca3b4f8f1802cfca97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767d29e7b52749ef0314502179ddad785fbd2b392a0086ca3b4f8f1802cfca97->enter($__internal_767d29e7b52749ef0314502179ddad785fbd2b392a0086ca3b4f8f1802cfca97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_767d29e7b52749ef0314502179ddad785fbd2b392a0086ca3b4f8f1802cfca97->leave($__internal_767d29e7b52749ef0314502179ddad785fbd2b392a0086ca3b4f8f1802cfca97_prof);

        
        $__internal_bab5ff7f08241af419da9c5e09299b35052c4658e5b3d95bfc679993c15108a5->leave($__internal_bab5ff7f08241af419da9c5e09299b35052c4658e5b3d95bfc679993c15108a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9ca2df952ef6ff13f90f68fe33f19e18756adce0bd987d6a0477c4b88127b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ca2df952ef6ff13f90f68fe33f19e18756adce0bd987d6a0477c4b88127b92->enter($__internal_d9ca2df952ef6ff13f90f68fe33f19e18756adce0bd987d6a0477c4b88127b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a60cf3a0f65fdebb9adfca503e0a376b5a0d77eed49aa61e50eeccf46681aa22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60cf3a0f65fdebb9adfca503e0a376b5a0d77eed49aa61e50eeccf46681aa22->enter($__internal_a60cf3a0f65fdebb9adfca503e0a376b5a0d77eed49aa61e50eeccf46681aa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a60cf3a0f65fdebb9adfca503e0a376b5a0d77eed49aa61e50eeccf46681aa22->leave($__internal_a60cf3a0f65fdebb9adfca503e0a376b5a0d77eed49aa61e50eeccf46681aa22_prof);

        
        $__internal_d9ca2df952ef6ff13f90f68fe33f19e18756adce0bd987d6a0477c4b88127b92->leave($__internal_d9ca2df952ef6ff13f90f68fe33f19e18756adce0bd987d6a0477c4b88127b92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7439091aaa8f5e05950be14872187b6c6f78e968547f40a667ba27867ae39fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7439091aaa8f5e05950be14872187b6c6f78e968547f40a667ba27867ae39fbc->enter($__internal_7439091aaa8f5e05950be14872187b6c6f78e968547f40a667ba27867ae39fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5266f8878cfaf296d492c6e623df2237fe619bcb3247be01379f5cc403b02ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5266f8878cfaf296d492c6e623df2237fe619bcb3247be01379f5cc403b02ccb->enter($__internal_5266f8878cfaf296d492c6e623df2237fe619bcb3247be01379f5cc403b02ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5266f8878cfaf296d492c6e623df2237fe619bcb3247be01379f5cc403b02ccb->leave($__internal_5266f8878cfaf296d492c6e623df2237fe619bcb3247be01379f5cc403b02ccb_prof);

        
        $__internal_7439091aaa8f5e05950be14872187b6c6f78e968547f40a667ba27867ae39fbc->leave($__internal_7439091aaa8f5e05950be14872187b6c6f78e968547f40a667ba27867ae39fbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
