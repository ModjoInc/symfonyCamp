<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8b1fcd48a07dcdfd821f09be903353aec670db3a488b39c395e01584411e7555 extends Twig_Template
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
        $__internal_a3c1f39425e5714f7e1f712debd644f86072e6627514922cf50f2cc4470781b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c1f39425e5714f7e1f712debd644f86072e6627514922cf50f2cc4470781b2->enter($__internal_a3c1f39425e5714f7e1f712debd644f86072e6627514922cf50f2cc4470781b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_02660a7ed2f02eeb94aab38973dee9dd586d8db8375a273424b2c54841ed4dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02660a7ed2f02eeb94aab38973dee9dd586d8db8375a273424b2c54841ed4dd4->enter($__internal_02660a7ed2f02eeb94aab38973dee9dd586d8db8375a273424b2c54841ed4dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a3c1f39425e5714f7e1f712debd644f86072e6627514922cf50f2cc4470781b2->leave($__internal_a3c1f39425e5714f7e1f712debd644f86072e6627514922cf50f2cc4470781b2_prof);

        
        $__internal_02660a7ed2f02eeb94aab38973dee9dd586d8db8375a273424b2c54841ed4dd4->leave($__internal_02660a7ed2f02eeb94aab38973dee9dd586d8db8375a273424b2c54841ed4dd4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
