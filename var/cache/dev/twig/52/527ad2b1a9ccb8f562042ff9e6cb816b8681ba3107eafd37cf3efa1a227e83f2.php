<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_624075785c095260ceab89457b4dac6a48a241898921aeb6cd8257a204ee9b36 extends Twig_Template
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
        $__internal_4c4194bde5ac9acd20b75aa7f0606f516738dcbfed69848fb578ec8438c4b912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4194bde5ac9acd20b75aa7f0606f516738dcbfed69848fb578ec8438c4b912->enter($__internal_4c4194bde5ac9acd20b75aa7f0606f516738dcbfed69848fb578ec8438c4b912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_aadd14b859fd47ef79b9c4ec8bf796f73dbe3403274fd7d5412811abfb001acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadd14b859fd47ef79b9c4ec8bf796f73dbe3403274fd7d5412811abfb001acb->enter($__internal_aadd14b859fd47ef79b9c4ec8bf796f73dbe3403274fd7d5412811abfb001acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4c4194bde5ac9acd20b75aa7f0606f516738dcbfed69848fb578ec8438c4b912->leave($__internal_4c4194bde5ac9acd20b75aa7f0606f516738dcbfed69848fb578ec8438c4b912_prof);

        
        $__internal_aadd14b859fd47ef79b9c4ec8bf796f73dbe3403274fd7d5412811abfb001acb->leave($__internal_aadd14b859fd47ef79b9c4ec8bf796f73dbe3403274fd7d5412811abfb001acb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
