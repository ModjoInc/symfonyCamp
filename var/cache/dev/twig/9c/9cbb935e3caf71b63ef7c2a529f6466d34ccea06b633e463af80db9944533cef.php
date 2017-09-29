<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_51037d530ac03d4d38aa2e08187d49dcf965546fc0f13386017a8e92e9ad9e7b extends Twig_Template
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
        $__internal_babc70365fd2be25d3a1051711f7444e30f32495003625cc038a7c5f089ac63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babc70365fd2be25d3a1051711f7444e30f32495003625cc038a7c5f089ac63f->enter($__internal_babc70365fd2be25d3a1051711f7444e30f32495003625cc038a7c5f089ac63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_17e3beb3705c2aeaf74a8febfc2192f082670075d7fa865ce9402e3266e402c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e3beb3705c2aeaf74a8febfc2192f082670075d7fa865ce9402e3266e402c8->enter($__internal_17e3beb3705c2aeaf74a8febfc2192f082670075d7fa865ce9402e3266e402c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_babc70365fd2be25d3a1051711f7444e30f32495003625cc038a7c5f089ac63f->leave($__internal_babc70365fd2be25d3a1051711f7444e30f32495003625cc038a7c5f089ac63f_prof);

        
        $__internal_17e3beb3705c2aeaf74a8febfc2192f082670075d7fa865ce9402e3266e402c8->leave($__internal_17e3beb3705c2aeaf74a8febfc2192f082670075d7fa865ce9402e3266e402c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
