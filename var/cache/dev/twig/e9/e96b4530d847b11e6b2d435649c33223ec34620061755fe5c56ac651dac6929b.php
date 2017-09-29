<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf1e9f33d8870d9f7194eb22f9bd0f79ed8c8337b2955d3761d55338cfa86369 extends Twig_Template
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
        $__internal_3efcd38e69accee33c3b75d70d2baadec9fbe771db03b0f077396c5e5a9b9941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efcd38e69accee33c3b75d70d2baadec9fbe771db03b0f077396c5e5a9b9941->enter($__internal_3efcd38e69accee33c3b75d70d2baadec9fbe771db03b0f077396c5e5a9b9941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_81065f06e68c1a4e22c46d0a2b48df08dcb43dc201ea16ee8521c07656002339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81065f06e68c1a4e22c46d0a2b48df08dcb43dc201ea16ee8521c07656002339->enter($__internal_81065f06e68c1a4e22c46d0a2b48df08dcb43dc201ea16ee8521c07656002339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3efcd38e69accee33c3b75d70d2baadec9fbe771db03b0f077396c5e5a9b9941->leave($__internal_3efcd38e69accee33c3b75d70d2baadec9fbe771db03b0f077396c5e5a9b9941_prof);

        
        $__internal_81065f06e68c1a4e22c46d0a2b48df08dcb43dc201ea16ee8521c07656002339->leave($__internal_81065f06e68c1a4e22c46d0a2b48df08dcb43dc201ea16ee8521c07656002339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
