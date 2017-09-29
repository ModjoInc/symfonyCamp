<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_0fc2ba81e0194392c15cf97444fce413a6ce66a050af6dd7499f3a078f28bb52 extends Twig_Template
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
        $__internal_53cc8de8240aa96efb0ae1b88149cd7da1fa9aa2238bf5bc239c3a0b7746c996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cc8de8240aa96efb0ae1b88149cd7da1fa9aa2238bf5bc239c3a0b7746c996->enter($__internal_53cc8de8240aa96efb0ae1b88149cd7da1fa9aa2238bf5bc239c3a0b7746c996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_08d6f203fc33f4f56c163dbcb8555398e031091c08b9a1f5e6263cd838f40772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d6f203fc33f4f56c163dbcb8555398e031091c08b9a1f5e6263cd838f40772->enter($__internal_08d6f203fc33f4f56c163dbcb8555398e031091c08b9a1f5e6263cd838f40772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_53cc8de8240aa96efb0ae1b88149cd7da1fa9aa2238bf5bc239c3a0b7746c996->leave($__internal_53cc8de8240aa96efb0ae1b88149cd7da1fa9aa2238bf5bc239c3a0b7746c996_prof);

        
        $__internal_08d6f203fc33f4f56c163dbcb8555398e031091c08b9a1f5e6263cd838f40772->leave($__internal_08d6f203fc33f4f56c163dbcb8555398e031091c08b9a1f5e6263cd838f40772_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
