<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_35ac850a0417c3a4a8a05e667660d9f613d834031aa28d5e26ef72805f4706a8 extends Twig_Template
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
        $__internal_01e8eb351b7167d856e01fcd596f133c6dcc483ce6797859acfd771ec5ec00ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e8eb351b7167d856e01fcd596f133c6dcc483ce6797859acfd771ec5ec00ba->enter($__internal_01e8eb351b7167d856e01fcd596f133c6dcc483ce6797859acfd771ec5ec00ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_04e02de47fa854a98ed01351d0455ca2dd1ced2bc887aae5b915c0b1a4518110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e02de47fa854a98ed01351d0455ca2dd1ced2bc887aae5b915c0b1a4518110->enter($__internal_04e02de47fa854a98ed01351d0455ca2dd1ced2bc887aae5b915c0b1a4518110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_01e8eb351b7167d856e01fcd596f133c6dcc483ce6797859acfd771ec5ec00ba->leave($__internal_01e8eb351b7167d856e01fcd596f133c6dcc483ce6797859acfd771ec5ec00ba_prof);

        
        $__internal_04e02de47fa854a98ed01351d0455ca2dd1ced2bc887aae5b915c0b1a4518110->leave($__internal_04e02de47fa854a98ed01351d0455ca2dd1ced2bc887aae5b915c0b1a4518110_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
