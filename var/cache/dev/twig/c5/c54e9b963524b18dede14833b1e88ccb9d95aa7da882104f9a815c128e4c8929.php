<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_37e46c76d02729b1ef2fea2576c1b1aba23cda9eef4c1c20a78c979265363716 extends Twig_Template
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
        $__internal_cc770128508fd54b86e5bfd57463fc353b77068c8dc32c75fec64b911b9d8649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc770128508fd54b86e5bfd57463fc353b77068c8dc32c75fec64b911b9d8649->enter($__internal_cc770128508fd54b86e5bfd57463fc353b77068c8dc32c75fec64b911b9d8649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e634509c58ebb4554c32b1a292af738bf5762cd51b46eaaeea28197780ef9ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e634509c58ebb4554c32b1a292af738bf5762cd51b46eaaeea28197780ef9ad6->enter($__internal_e634509c58ebb4554c32b1a292af738bf5762cd51b46eaaeea28197780ef9ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cc770128508fd54b86e5bfd57463fc353b77068c8dc32c75fec64b911b9d8649->leave($__internal_cc770128508fd54b86e5bfd57463fc353b77068c8dc32c75fec64b911b9d8649_prof);

        
        $__internal_e634509c58ebb4554c32b1a292af738bf5762cd51b46eaaeea28197780ef9ad6->leave($__internal_e634509c58ebb4554c32b1a292af738bf5762cd51b46eaaeea28197780ef9ad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
