<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0da1c25ba5562351c3a054bfd1e40c9ce90e383bc266e3837526ed18557ab818 extends Twig_Template
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
        $__internal_7a55c39630811b9e938ff3ccba1f960e878cab2f534d2f0ebc1bec916e80f359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a55c39630811b9e938ff3ccba1f960e878cab2f534d2f0ebc1bec916e80f359->enter($__internal_7a55c39630811b9e938ff3ccba1f960e878cab2f534d2f0ebc1bec916e80f359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_030962d7b0c5cbc38d7930ad4fb1a0ef5488950d288a78cf2d80a265b4744ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030962d7b0c5cbc38d7930ad4fb1a0ef5488950d288a78cf2d80a265b4744ed0->enter($__internal_030962d7b0c5cbc38d7930ad4fb1a0ef5488950d288a78cf2d80a265b4744ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7a55c39630811b9e938ff3ccba1f960e878cab2f534d2f0ebc1bec916e80f359->leave($__internal_7a55c39630811b9e938ff3ccba1f960e878cab2f534d2f0ebc1bec916e80f359_prof);

        
        $__internal_030962d7b0c5cbc38d7930ad4fb1a0ef5488950d288a78cf2d80a265b4744ed0->leave($__internal_030962d7b0c5cbc38d7930ad4fb1a0ef5488950d288a78cf2d80a265b4744ed0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
