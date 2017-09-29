<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_090b1f152a917b9f715044b30f08eed4dd30828b3a94637058ffbccb5cdae65b extends Twig_Template
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
        $__internal_f774572c2cc0b0a4a8195677cb9244d6e1a413998b69257978166994f128f31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f774572c2cc0b0a4a8195677cb9244d6e1a413998b69257978166994f128f31a->enter($__internal_f774572c2cc0b0a4a8195677cb9244d6e1a413998b69257978166994f128f31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fea174ad90e931e0c14182faf707c92a8ee58dfd258937b968dafb918dc994fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea174ad90e931e0c14182faf707c92a8ee58dfd258937b968dafb918dc994fe->enter($__internal_fea174ad90e931e0c14182faf707c92a8ee58dfd258937b968dafb918dc994fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f774572c2cc0b0a4a8195677cb9244d6e1a413998b69257978166994f128f31a->leave($__internal_f774572c2cc0b0a4a8195677cb9244d6e1a413998b69257978166994f128f31a_prof);

        
        $__internal_fea174ad90e931e0c14182faf707c92a8ee58dfd258937b968dafb918dc994fe->leave($__internal_fea174ad90e931e0c14182faf707c92a8ee58dfd258937b968dafb918dc994fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
