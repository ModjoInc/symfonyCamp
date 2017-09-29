<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_f3ed18cf424b56f95d3e2b09d1f7ff84c2cf2d9dcde67f8574d093c3bac364ec extends Twig_Template
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
        $__internal_0e5c540f4090b9de7982533280d9d797ebb2c3ae124251ed644fc75b2c3a2e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5c540f4090b9de7982533280d9d797ebb2c3ae124251ed644fc75b2c3a2e1f->enter($__internal_0e5c540f4090b9de7982533280d9d797ebb2c3ae124251ed644fc75b2c3a2e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_93df92eb007f47b133a31e3928989f81214cff08e7d6ffdf89fc38278dd75f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93df92eb007f47b133a31e3928989f81214cff08e7d6ffdf89fc38278dd75f42->enter($__internal_93df92eb007f47b133a31e3928989f81214cff08e7d6ffdf89fc38278dd75f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0e5c540f4090b9de7982533280d9d797ebb2c3ae124251ed644fc75b2c3a2e1f->leave($__internal_0e5c540f4090b9de7982533280d9d797ebb2c3ae124251ed644fc75b2c3a2e1f_prof);

        
        $__internal_93df92eb007f47b133a31e3928989f81214cff08e7d6ffdf89fc38278dd75f42->leave($__internal_93df92eb007f47b133a31e3928989f81214cff08e7d6ffdf89fc38278dd75f42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
