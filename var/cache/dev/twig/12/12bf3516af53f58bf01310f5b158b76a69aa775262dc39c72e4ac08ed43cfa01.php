<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_266692687c2b6b63ca53b4f535837c51c77ace6673b2d225a8da804ba987c01f extends Twig_Template
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
        $__internal_255c4a372a25e89268750fa3ef3f49d51f94b172d7bb84f8aff66df45a363ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255c4a372a25e89268750fa3ef3f49d51f94b172d7bb84f8aff66df45a363ca7->enter($__internal_255c4a372a25e89268750fa3ef3f49d51f94b172d7bb84f8aff66df45a363ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f7feea344d23d215e80db0f3e0aea9d87c13856e2127940fff592766afcb5941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7feea344d23d215e80db0f3e0aea9d87c13856e2127940fff592766afcb5941->enter($__internal_f7feea344d23d215e80db0f3e0aea9d87c13856e2127940fff592766afcb5941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_255c4a372a25e89268750fa3ef3f49d51f94b172d7bb84f8aff66df45a363ca7->leave($__internal_255c4a372a25e89268750fa3ef3f49d51f94b172d7bb84f8aff66df45a363ca7_prof);

        
        $__internal_f7feea344d23d215e80db0f3e0aea9d87c13856e2127940fff592766afcb5941->leave($__internal_f7feea344d23d215e80db0f3e0aea9d87c13856e2127940fff592766afcb5941_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
