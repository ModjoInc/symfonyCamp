<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_44e449d7e286c49bde1eb2722d0db18bc1a44e15941931a92381e123f94f0614 extends Twig_Template
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
        $__internal_460dc8d927d52ae122b1031fb8a8d55fd64ff1694507f64a4d0c24dc24c4a537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460dc8d927d52ae122b1031fb8a8d55fd64ff1694507f64a4d0c24dc24c4a537->enter($__internal_460dc8d927d52ae122b1031fb8a8d55fd64ff1694507f64a4d0c24dc24c4a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_371fd6607806d0c2c58f9e0f74b863ebc8323663c26e41fbd634d9b865c08863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371fd6607806d0c2c58f9e0f74b863ebc8323663c26e41fbd634d9b865c08863->enter($__internal_371fd6607806d0c2c58f9e0f74b863ebc8323663c26e41fbd634d9b865c08863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_460dc8d927d52ae122b1031fb8a8d55fd64ff1694507f64a4d0c24dc24c4a537->leave($__internal_460dc8d927d52ae122b1031fb8a8d55fd64ff1694507f64a4d0c24dc24c4a537_prof);

        
        $__internal_371fd6607806d0c2c58f9e0f74b863ebc8323663c26e41fbd634d9b865c08863->leave($__internal_371fd6607806d0c2c58f9e0f74b863ebc8323663c26e41fbd634d9b865c08863_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
