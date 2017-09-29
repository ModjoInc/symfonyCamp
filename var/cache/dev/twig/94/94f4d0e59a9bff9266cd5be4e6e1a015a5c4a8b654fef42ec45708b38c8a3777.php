<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8f7e9f0fe9a7c66fc55fbb3b07c90a445a4bab8522dd1c59526c3029735b93e7 extends Twig_Template
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
        $__internal_0ccd5eb53e081221567e41abc37bd9287a2e29ef2a848e8d555961548a3abf4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccd5eb53e081221567e41abc37bd9287a2e29ef2a848e8d555961548a3abf4e->enter($__internal_0ccd5eb53e081221567e41abc37bd9287a2e29ef2a848e8d555961548a3abf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2b8957d1b1e1e5614190e3c81d4b250366136f63471c290aa5cf0b54fd7b803f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8957d1b1e1e5614190e3c81d4b250366136f63471c290aa5cf0b54fd7b803f->enter($__internal_2b8957d1b1e1e5614190e3c81d4b250366136f63471c290aa5cf0b54fd7b803f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0ccd5eb53e081221567e41abc37bd9287a2e29ef2a848e8d555961548a3abf4e->leave($__internal_0ccd5eb53e081221567e41abc37bd9287a2e29ef2a848e8d555961548a3abf4e_prof);

        
        $__internal_2b8957d1b1e1e5614190e3c81d4b250366136f63471c290aa5cf0b54fd7b803f->leave($__internal_2b8957d1b1e1e5614190e3c81d4b250366136f63471c290aa5cf0b54fd7b803f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
