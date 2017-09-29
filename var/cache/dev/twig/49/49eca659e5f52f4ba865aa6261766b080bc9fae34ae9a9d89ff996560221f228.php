<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_11c34f90e1aa70931d1156a33513002793bc32544b5198745360de3ad7100084 extends Twig_Template
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
        $__internal_545b906cedc5d8aa63f982b7b98acbb22b5d1db810e926438aaf8fcabbb9c26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545b906cedc5d8aa63f982b7b98acbb22b5d1db810e926438aaf8fcabbb9c26c->enter($__internal_545b906cedc5d8aa63f982b7b98acbb22b5d1db810e926438aaf8fcabbb9c26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c7791ddb295097834469b21c3db60527c7317d8b6a6f617d95a45488bb15d7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7791ddb295097834469b21c3db60527c7317d8b6a6f617d95a45488bb15d7be->enter($__internal_c7791ddb295097834469b21c3db60527c7317d8b6a6f617d95a45488bb15d7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_545b906cedc5d8aa63f982b7b98acbb22b5d1db810e926438aaf8fcabbb9c26c->leave($__internal_545b906cedc5d8aa63f982b7b98acbb22b5d1db810e926438aaf8fcabbb9c26c_prof);

        
        $__internal_c7791ddb295097834469b21c3db60527c7317d8b6a6f617d95a45488bb15d7be->leave($__internal_c7791ddb295097834469b21c3db60527c7317d8b6a6f617d95a45488bb15d7be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
