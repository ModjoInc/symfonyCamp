<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_83308ca1b8ae09e2e8878d149b1eb814f2c3872d06b0ece4682fea359edcc633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52809d9094baed36a763aebc4baeae0f2e0dbca7bbdce90d31ae98655fb1b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52809d9094baed36a763aebc4baeae0f2e0dbca7bbdce90d31ae98655fb1b13->enter($__internal_b52809d9094baed36a763aebc4baeae0f2e0dbca7bbdce90d31ae98655fb1b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7fb7d0199f4e6081e61d9f590e7749c6f0b644cb988cda34bb41e0ef27ab64a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb7d0199f4e6081e61d9f590e7749c6f0b644cb988cda34bb41e0ef27ab64a7->enter($__internal_7fb7d0199f4e6081e61d9f590e7749c6f0b644cb988cda34bb41e0ef27ab64a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52809d9094baed36a763aebc4baeae0f2e0dbca7bbdce90d31ae98655fb1b13->leave($__internal_b52809d9094baed36a763aebc4baeae0f2e0dbca7bbdce90d31ae98655fb1b13_prof);

        
        $__internal_7fb7d0199f4e6081e61d9f590e7749c6f0b644cb988cda34bb41e0ef27ab64a7->leave($__internal_7fb7d0199f4e6081e61d9f590e7749c6f0b644cb988cda34bb41e0ef27ab64a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f02e3d16e5cebdfd56008c8e3d22b8cbb2cefb55f07de52a705dd896e4dddb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02e3d16e5cebdfd56008c8e3d22b8cbb2cefb55f07de52a705dd896e4dddb39->enter($__internal_f02e3d16e5cebdfd56008c8e3d22b8cbb2cefb55f07de52a705dd896e4dddb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73bcc220d44e61c918f0054b55af34dcd34d2534ab1cd75d76412fb4b6078228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bcc220d44e61c918f0054b55af34dcd34d2534ab1cd75d76412fb4b6078228->enter($__internal_73bcc220d44e61c918f0054b55af34dcd34d2534ab1cd75d76412fb4b6078228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_73bcc220d44e61c918f0054b55af34dcd34d2534ab1cd75d76412fb4b6078228->leave($__internal_73bcc220d44e61c918f0054b55af34dcd34d2534ab1cd75d76412fb4b6078228_prof);

        
        $__internal_f02e3d16e5cebdfd56008c8e3d22b8cbb2cefb55f07de52a705dd896e4dddb39->leave($__internal_f02e3d16e5cebdfd56008c8e3d22b8cbb2cefb55f07de52a705dd896e4dddb39_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b25578ef9dbda9066c46dfd5f8006ab0b3c40f774412a303426e5d4967e72904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25578ef9dbda9066c46dfd5f8006ab0b3c40f774412a303426e5d4967e72904->enter($__internal_b25578ef9dbda9066c46dfd5f8006ab0b3c40f774412a303426e5d4967e72904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fab26cfeda7d503b5cc3473c4bc965be73dfa1b352452762ad51a6d3dd5ba1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab26cfeda7d503b5cc3473c4bc965be73dfa1b352452762ad51a6d3dd5ba1d7->enter($__internal_fab26cfeda7d503b5cc3473c4bc965be73dfa1b352452762ad51a6d3dd5ba1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fab26cfeda7d503b5cc3473c4bc965be73dfa1b352452762ad51a6d3dd5ba1d7->leave($__internal_fab26cfeda7d503b5cc3473c4bc965be73dfa1b352452762ad51a6d3dd5ba1d7_prof);

        
        $__internal_b25578ef9dbda9066c46dfd5f8006ab0b3c40f774412a303426e5d4967e72904->leave($__internal_b25578ef9dbda9066c46dfd5f8006ab0b3c40f774412a303426e5d4967e72904_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
