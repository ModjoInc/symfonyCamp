<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_77470e93d7e99a8ad23503bf6b10828c6f6254b671b9484f762be2cd0f2da59b extends Twig_Template
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
        $__internal_be0072d6a2ac3ed406bec27ac063e1b2008103590afe0949e97da705c77a09bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0072d6a2ac3ed406bec27ac063e1b2008103590afe0949e97da705c77a09bc->enter($__internal_be0072d6a2ac3ed406bec27ac063e1b2008103590afe0949e97da705c77a09bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4e72cc752abb6970d51ce0092fe2d7f60950fdc0e8f333aeaba3654008dd3ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e72cc752abb6970d51ce0092fe2d7f60950fdc0e8f333aeaba3654008dd3ba5->enter($__internal_4e72cc752abb6970d51ce0092fe2d7f60950fdc0e8f333aeaba3654008dd3ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_be0072d6a2ac3ed406bec27ac063e1b2008103590afe0949e97da705c77a09bc->leave($__internal_be0072d6a2ac3ed406bec27ac063e1b2008103590afe0949e97da705c77a09bc_prof);

        
        $__internal_4e72cc752abb6970d51ce0092fe2d7f60950fdc0e8f333aeaba3654008dd3ba5->leave($__internal_4e72cc752abb6970d51ce0092fe2d7f60950fdc0e8f333aeaba3654008dd3ba5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
