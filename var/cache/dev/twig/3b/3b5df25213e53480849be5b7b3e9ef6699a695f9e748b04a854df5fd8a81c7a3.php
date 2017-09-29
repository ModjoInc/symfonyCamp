<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_67ca4283ac4c513189ba611cf0e68525ccf5da3ed53f5d19ce9451d14d61a2bd extends Twig_Template
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
        $__internal_29083d8b0807faf0cbb24fdac4aff22a6f0f83180d62327901255632b1bbb882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29083d8b0807faf0cbb24fdac4aff22a6f0f83180d62327901255632b1bbb882->enter($__internal_29083d8b0807faf0cbb24fdac4aff22a6f0f83180d62327901255632b1bbb882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_03ca0f3b3d9aaa2f9e54104df9fe8b13b395a80494aa23fb4963e9c20b99354e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ca0f3b3d9aaa2f9e54104df9fe8b13b395a80494aa23fb4963e9c20b99354e->enter($__internal_03ca0f3b3d9aaa2f9e54104df9fe8b13b395a80494aa23fb4963e9c20b99354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_29083d8b0807faf0cbb24fdac4aff22a6f0f83180d62327901255632b1bbb882->leave($__internal_29083d8b0807faf0cbb24fdac4aff22a6f0f83180d62327901255632b1bbb882_prof);

        
        $__internal_03ca0f3b3d9aaa2f9e54104df9fe8b13b395a80494aa23fb4963e9c20b99354e->leave($__internal_03ca0f3b3d9aaa2f9e54104df9fe8b13b395a80494aa23fb4963e9c20b99354e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
