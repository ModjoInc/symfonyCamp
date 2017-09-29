<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0a150352ead77b8f4825c5cb64eb12a87033c68131590abccc15d5143742aa77 extends Twig_Template
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
        $__internal_3b184290c1765a39b82d8c360617dca3297df17df9ab3097e726827116c54b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b184290c1765a39b82d8c360617dca3297df17df9ab3097e726827116c54b35->enter($__internal_3b184290c1765a39b82d8c360617dca3297df17df9ab3097e726827116c54b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6a61c98793481682c8e7530c6f0de087db08bbc7011afaa4e234e8561d1417b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a61c98793481682c8e7530c6f0de087db08bbc7011afaa4e234e8561d1417b6->enter($__internal_6a61c98793481682c8e7530c6f0de087db08bbc7011afaa4e234e8561d1417b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3b184290c1765a39b82d8c360617dca3297df17df9ab3097e726827116c54b35->leave($__internal_3b184290c1765a39b82d8c360617dca3297df17df9ab3097e726827116c54b35_prof);

        
        $__internal_6a61c98793481682c8e7530c6f0de087db08bbc7011afaa4e234e8561d1417b6->leave($__internal_6a61c98793481682c8e7530c6f0de087db08bbc7011afaa4e234e8561d1417b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
