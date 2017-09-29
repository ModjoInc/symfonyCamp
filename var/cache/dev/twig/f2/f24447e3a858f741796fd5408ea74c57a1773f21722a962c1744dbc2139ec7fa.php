<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_14ee7c3912401387de17c56ebfb16063f7708920acbbc5432689de80cfcc7df9 extends Twig_Template
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
        $__internal_8f5f9b75cf7041b4d691bbcbdeb066741af5faca27decede8854a344a5c57337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5f9b75cf7041b4d691bbcbdeb066741af5faca27decede8854a344a5c57337->enter($__internal_8f5f9b75cf7041b4d691bbcbdeb066741af5faca27decede8854a344a5c57337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9459de601ef0d4ae47956598a43a5879d2d978acef8316e2ad44acee36c06c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9459de601ef0d4ae47956598a43a5879d2d978acef8316e2ad44acee36c06c18->enter($__internal_9459de601ef0d4ae47956598a43a5879d2d978acef8316e2ad44acee36c06c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8f5f9b75cf7041b4d691bbcbdeb066741af5faca27decede8854a344a5c57337->leave($__internal_8f5f9b75cf7041b4d691bbcbdeb066741af5faca27decede8854a344a5c57337_prof);

        
        $__internal_9459de601ef0d4ae47956598a43a5879d2d978acef8316e2ad44acee36c06c18->leave($__internal_9459de601ef0d4ae47956598a43a5879d2d978acef8316e2ad44acee36c06c18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
