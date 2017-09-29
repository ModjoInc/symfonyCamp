<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_18776b82c176eb20be163d00ab4ba020495e380c5f58b67ee2829f732ab7e253 extends Twig_Template
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
        $__internal_70a64af6367facc703f7e4810cea4cdc1aafe2c810592e22981bf334e6859d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a64af6367facc703f7e4810cea4cdc1aafe2c810592e22981bf334e6859d4f->enter($__internal_70a64af6367facc703f7e4810cea4cdc1aafe2c810592e22981bf334e6859d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_17bcc3d61af55898a5d2eafed3eb4df9dc567e292ae069ff3d18ce29955d879b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bcc3d61af55898a5d2eafed3eb4df9dc567e292ae069ff3d18ce29955d879b->enter($__internal_17bcc3d61af55898a5d2eafed3eb4df9dc567e292ae069ff3d18ce29955d879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_70a64af6367facc703f7e4810cea4cdc1aafe2c810592e22981bf334e6859d4f->leave($__internal_70a64af6367facc703f7e4810cea4cdc1aafe2c810592e22981bf334e6859d4f_prof);

        
        $__internal_17bcc3d61af55898a5d2eafed3eb4df9dc567e292ae069ff3d18ce29955d879b->leave($__internal_17bcc3d61af55898a5d2eafed3eb4df9dc567e292ae069ff3d18ce29955d879b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
