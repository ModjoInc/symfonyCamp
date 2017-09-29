<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1d248dcab04f8cbde7f9f83d30aa6fe4d619c84bcc9614f7da894e29a15f9d8d extends Twig_Template
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
        $__internal_6553d1716e826f729fb403f4cba9dc871f5c6def2421d91f7310bb38115760c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6553d1716e826f729fb403f4cba9dc871f5c6def2421d91f7310bb38115760c9->enter($__internal_6553d1716e826f729fb403f4cba9dc871f5c6def2421d91f7310bb38115760c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a068ab7133e5f71a2dc7dca98dd57b79f524c8d818a2b9bd1bfc258fe3b651a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a068ab7133e5f71a2dc7dca98dd57b79f524c8d818a2b9bd1bfc258fe3b651a6->enter($__internal_a068ab7133e5f71a2dc7dca98dd57b79f524c8d818a2b9bd1bfc258fe3b651a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6553d1716e826f729fb403f4cba9dc871f5c6def2421d91f7310bb38115760c9->leave($__internal_6553d1716e826f729fb403f4cba9dc871f5c6def2421d91f7310bb38115760c9_prof);

        
        $__internal_a068ab7133e5f71a2dc7dca98dd57b79f524c8d818a2b9bd1bfc258fe3b651a6->leave($__internal_a068ab7133e5f71a2dc7dca98dd57b79f524c8d818a2b9bd1bfc258fe3b651a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
