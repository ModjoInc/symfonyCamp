<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9c4f657469d396758145b0b399b9355e90943c3e96346630fc1eab2a16180b53 extends Twig_Template
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
        $__internal_18f1ebefa900ea8c0c43a4ffcb7e4586d9a5637b178b38cf3ceee68918581cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f1ebefa900ea8c0c43a4ffcb7e4586d9a5637b178b38cf3ceee68918581cde->enter($__internal_18f1ebefa900ea8c0c43a4ffcb7e4586d9a5637b178b38cf3ceee68918581cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a181bb0297c341e531093a52b8525bc7f3c8f15a7fa16aff52a0547bcc4399c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a181bb0297c341e531093a52b8525bc7f3c8f15a7fa16aff52a0547bcc4399c3->enter($__internal_a181bb0297c341e531093a52b8525bc7f3c8f15a7fa16aff52a0547bcc4399c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_18f1ebefa900ea8c0c43a4ffcb7e4586d9a5637b178b38cf3ceee68918581cde->leave($__internal_18f1ebefa900ea8c0c43a4ffcb7e4586d9a5637b178b38cf3ceee68918581cde_prof);

        
        $__internal_a181bb0297c341e531093a52b8525bc7f3c8f15a7fa16aff52a0547bcc4399c3->leave($__internal_a181bb0297c341e531093a52b8525bc7f3c8f15a7fa16aff52a0547bcc4399c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
