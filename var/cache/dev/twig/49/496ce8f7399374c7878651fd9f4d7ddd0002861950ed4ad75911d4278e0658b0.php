<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c7a3586c769d8ac8fbeb9126643e286decb1acada38f88a003d0ee18bd3bacc9 extends Twig_Template
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
        $__internal_fe8bbad4cc71cbb5718fc2316b94562e00d97d3d2808d2a00184760e7a4b0835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8bbad4cc71cbb5718fc2316b94562e00d97d3d2808d2a00184760e7a4b0835->enter($__internal_fe8bbad4cc71cbb5718fc2316b94562e00d97d3d2808d2a00184760e7a4b0835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a4ea956fe9612d4e35d56ea2f86fc62b23b448b8d91d1e9c34bb0097595e143f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ea956fe9612d4e35d56ea2f86fc62b23b448b8d91d1e9c34bb0097595e143f->enter($__internal_a4ea956fe9612d4e35d56ea2f86fc62b23b448b8d91d1e9c34bb0097595e143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fe8bbad4cc71cbb5718fc2316b94562e00d97d3d2808d2a00184760e7a4b0835->leave($__internal_fe8bbad4cc71cbb5718fc2316b94562e00d97d3d2808d2a00184760e7a4b0835_prof);

        
        $__internal_a4ea956fe9612d4e35d56ea2f86fc62b23b448b8d91d1e9c34bb0097595e143f->leave($__internal_a4ea956fe9612d4e35d56ea2f86fc62b23b448b8d91d1e9c34bb0097595e143f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
