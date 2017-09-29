<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6105d531764a47d2abf3d1eb9d52412c37a13bb3b8fe8d06ff3ce497d86df64b extends Twig_Template
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
        $__internal_2c034d576511cd432d3df520746f0a7d139a7f55fc53c23039f23688cc0528d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c034d576511cd432d3df520746f0a7d139a7f55fc53c23039f23688cc0528d9->enter($__internal_2c034d576511cd432d3df520746f0a7d139a7f55fc53c23039f23688cc0528d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_030a57d9fef93ddcc319def10a00e738a005341204ca28d08046aedef904d058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030a57d9fef93ddcc319def10a00e738a005341204ca28d08046aedef904d058->enter($__internal_030a57d9fef93ddcc319def10a00e738a005341204ca28d08046aedef904d058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2c034d576511cd432d3df520746f0a7d139a7f55fc53c23039f23688cc0528d9->leave($__internal_2c034d576511cd432d3df520746f0a7d139a7f55fc53c23039f23688cc0528d9_prof);

        
        $__internal_030a57d9fef93ddcc319def10a00e738a005341204ca28d08046aedef904d058->leave($__internal_030a57d9fef93ddcc319def10a00e738a005341204ca28d08046aedef904d058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
