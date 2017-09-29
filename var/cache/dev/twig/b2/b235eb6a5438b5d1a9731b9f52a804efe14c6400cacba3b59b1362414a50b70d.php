<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b0585c49b20b01a3d94f4f4e7a6f23972e69e61e6939f7264194d1d425d7a7c3 extends Twig_Template
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
        $__internal_db0d78edb086b00366b9a271914b19d9f7f3a30e4b343df90364d0ba114c1a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0d78edb086b00366b9a271914b19d9f7f3a30e4b343df90364d0ba114c1a7c->enter($__internal_db0d78edb086b00366b9a271914b19d9f7f3a30e4b343df90364d0ba114c1a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0943013047daf42b060dae864c3f34b5c7df30a6c0495a9c65b4c96ae6275bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0943013047daf42b060dae864c3f34b5c7df30a6c0495a9c65b4c96ae6275bc3->enter($__internal_0943013047daf42b060dae864c3f34b5c7df30a6c0495a9c65b4c96ae6275bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_db0d78edb086b00366b9a271914b19d9f7f3a30e4b343df90364d0ba114c1a7c->leave($__internal_db0d78edb086b00366b9a271914b19d9f7f3a30e4b343df90364d0ba114c1a7c_prof);

        
        $__internal_0943013047daf42b060dae864c3f34b5c7df30a6c0495a9c65b4c96ae6275bc3->leave($__internal_0943013047daf42b060dae864c3f34b5c7df30a6c0495a9c65b4c96ae6275bc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
