<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_17ba7283a10a58f663a8c9cfa9a16567887e0ac21fd5fa929fb362fd4db8effa extends Twig_Template
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
        $__internal_3828eda7b598d17fda2a7edc843923c423ef1241c82dd5dbfbaffa55b24dd66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3828eda7b598d17fda2a7edc843923c423ef1241c82dd5dbfbaffa55b24dd66d->enter($__internal_3828eda7b598d17fda2a7edc843923c423ef1241c82dd5dbfbaffa55b24dd66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_148354e7e941f0c2ebd298c061dd6f3afde77de8809d2b9a60cfc07ce2280d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148354e7e941f0c2ebd298c061dd6f3afde77de8809d2b9a60cfc07ce2280d50->enter($__internal_148354e7e941f0c2ebd298c061dd6f3afde77de8809d2b9a60cfc07ce2280d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3828eda7b598d17fda2a7edc843923c423ef1241c82dd5dbfbaffa55b24dd66d->leave($__internal_3828eda7b598d17fda2a7edc843923c423ef1241c82dd5dbfbaffa55b24dd66d_prof);

        
        $__internal_148354e7e941f0c2ebd298c061dd6f3afde77de8809d2b9a60cfc07ce2280d50->leave($__internal_148354e7e941f0c2ebd298c061dd6f3afde77de8809d2b9a60cfc07ce2280d50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
