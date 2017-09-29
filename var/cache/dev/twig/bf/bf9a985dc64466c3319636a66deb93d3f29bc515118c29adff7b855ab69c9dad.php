<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6411630e49d7556c6b402a950d82b722ad3ab8c454cda3acc41d70aeb16697a9 extends Twig_Template
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
        $__internal_ea5fe1830e282e866b03ba43285941759cb88de6320d2053d765b2e1693bd5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5fe1830e282e866b03ba43285941759cb88de6320d2053d765b2e1693bd5d8->enter($__internal_ea5fe1830e282e866b03ba43285941759cb88de6320d2053d765b2e1693bd5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7c6c83bd7fd52f5bab3bb96669376698edc09e52ebfeb8aac1cb9b2b1bf36c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6c83bd7fd52f5bab3bb96669376698edc09e52ebfeb8aac1cb9b2b1bf36c00->enter($__internal_7c6c83bd7fd52f5bab3bb96669376698edc09e52ebfeb8aac1cb9b2b1bf36c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ea5fe1830e282e866b03ba43285941759cb88de6320d2053d765b2e1693bd5d8->leave($__internal_ea5fe1830e282e866b03ba43285941759cb88de6320d2053d765b2e1693bd5d8_prof);

        
        $__internal_7c6c83bd7fd52f5bab3bb96669376698edc09e52ebfeb8aac1cb9b2b1bf36c00->leave($__internal_7c6c83bd7fd52f5bab3bb96669376698edc09e52ebfeb8aac1cb9b2b1bf36c00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
