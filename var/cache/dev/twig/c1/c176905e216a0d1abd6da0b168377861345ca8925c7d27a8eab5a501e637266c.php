<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_706fd843bab6223675ccfe5ff976746c2835e1e4d529cc56678541534707f112 extends Twig_Template
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
        $__internal_09de9c060ec6a39c042bf66b4ea5c35cee4044e076eb8216fc7f408ab40d48b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09de9c060ec6a39c042bf66b4ea5c35cee4044e076eb8216fc7f408ab40d48b2->enter($__internal_09de9c060ec6a39c042bf66b4ea5c35cee4044e076eb8216fc7f408ab40d48b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_9da19417439ad56a4c7b537dd4c38bbaf5d91d6737ed692dfef4e2c53535ea54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da19417439ad56a4c7b537dd4c38bbaf5d91d6737ed692dfef4e2c53535ea54->enter($__internal_9da19417439ad56a4c7b537dd4c38bbaf5d91d6737ed692dfef4e2c53535ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_09de9c060ec6a39c042bf66b4ea5c35cee4044e076eb8216fc7f408ab40d48b2->leave($__internal_09de9c060ec6a39c042bf66b4ea5c35cee4044e076eb8216fc7f408ab40d48b2_prof);

        
        $__internal_9da19417439ad56a4c7b537dd4c38bbaf5d91d6737ed692dfef4e2c53535ea54->leave($__internal_9da19417439ad56a4c7b537dd4c38bbaf5d91d6737ed692dfef4e2c53535ea54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
