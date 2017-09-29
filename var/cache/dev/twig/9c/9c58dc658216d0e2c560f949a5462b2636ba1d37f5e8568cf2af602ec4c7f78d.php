<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_88aa5590e1728b9aa9f696c69b5f470835caa9d563c4be92d673ae82c175976d extends Twig_Template
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
        $__internal_d923a7ac33cd78f813eceb3d21354897853e6c28d42e2f853b44e4fab9c0215e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d923a7ac33cd78f813eceb3d21354897853e6c28d42e2f853b44e4fab9c0215e->enter($__internal_d923a7ac33cd78f813eceb3d21354897853e6c28d42e2f853b44e4fab9c0215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1e4086d9772fcf5fa13e225fdcb37a0d668bf5513eeafd10e264318ba8c35825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4086d9772fcf5fa13e225fdcb37a0d668bf5513eeafd10e264318ba8c35825->enter($__internal_1e4086d9772fcf5fa13e225fdcb37a0d668bf5513eeafd10e264318ba8c35825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d923a7ac33cd78f813eceb3d21354897853e6c28d42e2f853b44e4fab9c0215e->leave($__internal_d923a7ac33cd78f813eceb3d21354897853e6c28d42e2f853b44e4fab9c0215e_prof);

        
        $__internal_1e4086d9772fcf5fa13e225fdcb37a0d668bf5513eeafd10e264318ba8c35825->leave($__internal_1e4086d9772fcf5fa13e225fdcb37a0d668bf5513eeafd10e264318ba8c35825_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
