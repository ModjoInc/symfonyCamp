<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7bd36af570d7e8e3cd6332c5b810750aae9bc5356b7a1fc7226b578b8debba57 extends Twig_Template
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
        $__internal_e33f57cbae52fc0ab865b799fdf36ca47da6f77e6d0b320f1bff1a03625d5d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33f57cbae52fc0ab865b799fdf36ca47da6f77e6d0b320f1bff1a03625d5d34->enter($__internal_e33f57cbae52fc0ab865b799fdf36ca47da6f77e6d0b320f1bff1a03625d5d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7e669bda369ccadbb3adb808004ef5627af90007f1848dbf2729aed2d5b376d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e669bda369ccadbb3adb808004ef5627af90007f1848dbf2729aed2d5b376d6->enter($__internal_7e669bda369ccadbb3adb808004ef5627af90007f1848dbf2729aed2d5b376d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e33f57cbae52fc0ab865b799fdf36ca47da6f77e6d0b320f1bff1a03625d5d34->leave($__internal_e33f57cbae52fc0ab865b799fdf36ca47da6f77e6d0b320f1bff1a03625d5d34_prof);

        
        $__internal_7e669bda369ccadbb3adb808004ef5627af90007f1848dbf2729aed2d5b376d6->leave($__internal_7e669bda369ccadbb3adb808004ef5627af90007f1848dbf2729aed2d5b376d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
