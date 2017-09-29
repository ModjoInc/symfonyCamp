<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_badd646d4422676ef897103c4f6f755caf0e7ee2c31bf323e47191483cf58dc4 extends Twig_Template
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
        $__internal_e77b33423c1e0ae9c07f55b95e6f41e2c515d0a868eade6e27dc1d4cf6547509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77b33423c1e0ae9c07f55b95e6f41e2c515d0a868eade6e27dc1d4cf6547509->enter($__internal_e77b33423c1e0ae9c07f55b95e6f41e2c515d0a868eade6e27dc1d4cf6547509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_77d497d9248c90769dae9839a658415bdee357bb8065d7075d9d3641562ca14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d497d9248c90769dae9839a658415bdee357bb8065d7075d9d3641562ca14f->enter($__internal_77d497d9248c90769dae9839a658415bdee357bb8065d7075d9d3641562ca14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e77b33423c1e0ae9c07f55b95e6f41e2c515d0a868eade6e27dc1d4cf6547509->leave($__internal_e77b33423c1e0ae9c07f55b95e6f41e2c515d0a868eade6e27dc1d4cf6547509_prof);

        
        $__internal_77d497d9248c90769dae9839a658415bdee357bb8065d7075d9d3641562ca14f->leave($__internal_77d497d9248c90769dae9839a658415bdee357bb8065d7075d9d3641562ca14f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
