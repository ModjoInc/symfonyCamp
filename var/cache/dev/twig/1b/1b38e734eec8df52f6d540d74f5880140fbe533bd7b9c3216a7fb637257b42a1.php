<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d4bbefb3b0dd532cc5b5f0a8b92e321fb27daac20e573b0a169576677f285fe4 extends Twig_Template
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
        $__internal_8f7be84dc10839215834e18784bd49a6b3a9d219eb75823f320ffabe2987697f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7be84dc10839215834e18784bd49a6b3a9d219eb75823f320ffabe2987697f->enter($__internal_8f7be84dc10839215834e18784bd49a6b3a9d219eb75823f320ffabe2987697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_98dd9bd179754a9a10fc5347bd9a18139d495a7453919fe77abfc0c34adf2f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dd9bd179754a9a10fc5347bd9a18139d495a7453919fe77abfc0c34adf2f58->enter($__internal_98dd9bd179754a9a10fc5347bd9a18139d495a7453919fe77abfc0c34adf2f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8f7be84dc10839215834e18784bd49a6b3a9d219eb75823f320ffabe2987697f->leave($__internal_8f7be84dc10839215834e18784bd49a6b3a9d219eb75823f320ffabe2987697f_prof);

        
        $__internal_98dd9bd179754a9a10fc5347bd9a18139d495a7453919fe77abfc0c34adf2f58->leave($__internal_98dd9bd179754a9a10fc5347bd9a18139d495a7453919fe77abfc0c34adf2f58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
