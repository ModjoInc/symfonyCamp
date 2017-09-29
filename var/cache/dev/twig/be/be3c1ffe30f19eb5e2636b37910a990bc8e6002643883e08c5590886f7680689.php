<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_268d95beb4061e727eea787c5670fa28b7c2b616fc053ccd560ff1dd528c3083 extends Twig_Template
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
        $__internal_f3625c5c6f976152eaec99bb734d2508e32b31077db3a5bd4e8b669b07e4b8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3625c5c6f976152eaec99bb734d2508e32b31077db3a5bd4e8b669b07e4b8ac->enter($__internal_f3625c5c6f976152eaec99bb734d2508e32b31077db3a5bd4e8b669b07e4b8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_356fcd18d170f0c76b589004e0eb12518525b892990dd588c58e0327bb97e8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356fcd18d170f0c76b589004e0eb12518525b892990dd588c58e0327bb97e8ab->enter($__internal_356fcd18d170f0c76b589004e0eb12518525b892990dd588c58e0327bb97e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f3625c5c6f976152eaec99bb734d2508e32b31077db3a5bd4e8b669b07e4b8ac->leave($__internal_f3625c5c6f976152eaec99bb734d2508e32b31077db3a5bd4e8b669b07e4b8ac_prof);

        
        $__internal_356fcd18d170f0c76b589004e0eb12518525b892990dd588c58e0327bb97e8ab->leave($__internal_356fcd18d170f0c76b589004e0eb12518525b892990dd588c58e0327bb97e8ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
