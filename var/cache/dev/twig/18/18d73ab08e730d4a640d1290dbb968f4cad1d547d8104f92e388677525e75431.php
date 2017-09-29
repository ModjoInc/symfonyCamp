<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d1f22b4d567290d22c377e28534b534b6be4ca8229b3cd7918f74ffa5c91100c extends Twig_Template
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
        $__internal_43e890fd983b0cc5e121bf05d6be0307964592b98dbc95544af1bd4a97158b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43e890fd983b0cc5e121bf05d6be0307964592b98dbc95544af1bd4a97158b7a->enter($__internal_43e890fd983b0cc5e121bf05d6be0307964592b98dbc95544af1bd4a97158b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c389963153b4bf89fa24b8ed700556920fddb31d22f38202560c63167b1547fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c389963153b4bf89fa24b8ed700556920fddb31d22f38202560c63167b1547fb->enter($__internal_c389963153b4bf89fa24b8ed700556920fddb31d22f38202560c63167b1547fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_43e890fd983b0cc5e121bf05d6be0307964592b98dbc95544af1bd4a97158b7a->leave($__internal_43e890fd983b0cc5e121bf05d6be0307964592b98dbc95544af1bd4a97158b7a_prof);

        
        $__internal_c389963153b4bf89fa24b8ed700556920fddb31d22f38202560c63167b1547fb->leave($__internal_c389963153b4bf89fa24b8ed700556920fddb31d22f38202560c63167b1547fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
