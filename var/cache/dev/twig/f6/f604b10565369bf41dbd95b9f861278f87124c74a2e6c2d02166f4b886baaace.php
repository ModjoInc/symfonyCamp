<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_94f2eb4198013dc295c045882ffcee0c845e89a9371ac29f4ad50235d639f4ae extends Twig_Template
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
        $__internal_d90bece72d99418d9da87bbb99c254490561f6e8c1cbee63a92ee3cd48705eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90bece72d99418d9da87bbb99c254490561f6e8c1cbee63a92ee3cd48705eef->enter($__internal_d90bece72d99418d9da87bbb99c254490561f6e8c1cbee63a92ee3cd48705eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5cbcfc0e140b5830aebe8bc0a37fe5cc61202fef7ceff75287c63fef7d43a677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbcfc0e140b5830aebe8bc0a37fe5cc61202fef7ceff75287c63fef7d43a677->enter($__internal_5cbcfc0e140b5830aebe8bc0a37fe5cc61202fef7ceff75287c63fef7d43a677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d90bece72d99418d9da87bbb99c254490561f6e8c1cbee63a92ee3cd48705eef->leave($__internal_d90bece72d99418d9da87bbb99c254490561f6e8c1cbee63a92ee3cd48705eef_prof);

        
        $__internal_5cbcfc0e140b5830aebe8bc0a37fe5cc61202fef7ceff75287c63fef7d43a677->leave($__internal_5cbcfc0e140b5830aebe8bc0a37fe5cc61202fef7ceff75287c63fef7d43a677_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
