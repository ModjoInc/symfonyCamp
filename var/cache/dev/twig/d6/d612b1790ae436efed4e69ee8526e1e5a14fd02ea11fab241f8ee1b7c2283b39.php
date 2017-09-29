<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_67bc54a9cfb341627c78f590329a16538b5900722b5ff93d79e4a1eba52725cd extends Twig_Template
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
        $__internal_f081aae3dca0af33016c351f0ebf25edde0e140258fd19a841c891a6e62e14a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f081aae3dca0af33016c351f0ebf25edde0e140258fd19a841c891a6e62e14a7->enter($__internal_f081aae3dca0af33016c351f0ebf25edde0e140258fd19a841c891a6e62e14a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5db6e62fc4875050ae8c6d1660a62a9d7e519da67f994d1c473d9b85860e7b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db6e62fc4875050ae8c6d1660a62a9d7e519da67f994d1c473d9b85860e7b88->enter($__internal_5db6e62fc4875050ae8c6d1660a62a9d7e519da67f994d1c473d9b85860e7b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f081aae3dca0af33016c351f0ebf25edde0e140258fd19a841c891a6e62e14a7->leave($__internal_f081aae3dca0af33016c351f0ebf25edde0e140258fd19a841c891a6e62e14a7_prof);

        
        $__internal_5db6e62fc4875050ae8c6d1660a62a9d7e519da67f994d1c473d9b85860e7b88->leave($__internal_5db6e62fc4875050ae8c6d1660a62a9d7e519da67f994d1c473d9b85860e7b88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
