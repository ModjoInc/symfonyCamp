<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_89612bd6c62318aa241fa727dd099b5497e535db6ead2ad52446c47f14020461 extends Twig_Template
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
        $__internal_636ee100f1175a0d7322e606f60345c8d536aa4bb0d7c884a7f03fc77bc9e241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636ee100f1175a0d7322e606f60345c8d536aa4bb0d7c884a7f03fc77bc9e241->enter($__internal_636ee100f1175a0d7322e606f60345c8d536aa4bb0d7c884a7f03fc77bc9e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b32078ea7115c75341631c05fe3ad7f9643dc3136000c7e510ff1cd84fa71e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32078ea7115c75341631c05fe3ad7f9643dc3136000c7e510ff1cd84fa71e3f->enter($__internal_b32078ea7115c75341631c05fe3ad7f9643dc3136000c7e510ff1cd84fa71e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_636ee100f1175a0d7322e606f60345c8d536aa4bb0d7c884a7f03fc77bc9e241->leave($__internal_636ee100f1175a0d7322e606f60345c8d536aa4bb0d7c884a7f03fc77bc9e241_prof);

        
        $__internal_b32078ea7115c75341631c05fe3ad7f9643dc3136000c7e510ff1cd84fa71e3f->leave($__internal_b32078ea7115c75341631c05fe3ad7f9643dc3136000c7e510ff1cd84fa71e3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
