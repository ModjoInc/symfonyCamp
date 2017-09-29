<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8bb5a475bcef4e0db251738308df8e47dbc48a1cd1c7120cdf9a8487afd6b071 extends Twig_Template
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
        $__internal_216c1da3a4f92d147d9642b71e6424621bf69bd8d9fe664a72ea7bd22b210ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216c1da3a4f92d147d9642b71e6424621bf69bd8d9fe664a72ea7bd22b210ac8->enter($__internal_216c1da3a4f92d147d9642b71e6424621bf69bd8d9fe664a72ea7bd22b210ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_579ee429236fd963bd009bce87b9c0a0f76cdd42a4e404353511da5c137bdd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579ee429236fd963bd009bce87b9c0a0f76cdd42a4e404353511da5c137bdd9d->enter($__internal_579ee429236fd963bd009bce87b9c0a0f76cdd42a4e404353511da5c137bdd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_216c1da3a4f92d147d9642b71e6424621bf69bd8d9fe664a72ea7bd22b210ac8->leave($__internal_216c1da3a4f92d147d9642b71e6424621bf69bd8d9fe664a72ea7bd22b210ac8_prof);

        
        $__internal_579ee429236fd963bd009bce87b9c0a0f76cdd42a4e404353511da5c137bdd9d->leave($__internal_579ee429236fd963bd009bce87b9c0a0f76cdd42a4e404353511da5c137bdd9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
