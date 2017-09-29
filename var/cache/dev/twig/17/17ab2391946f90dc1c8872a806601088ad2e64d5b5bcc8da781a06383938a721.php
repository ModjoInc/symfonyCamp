<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e12ba50100984e4be16524ff0b359558caf5114763600052ebc819e4740ad228 extends Twig_Template
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
        $__internal_8ce2dc26117136161c9232477040b440377ee0e17f7b0546f43850fb1f6279e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce2dc26117136161c9232477040b440377ee0e17f7b0546f43850fb1f6279e8->enter($__internal_8ce2dc26117136161c9232477040b440377ee0e17f7b0546f43850fb1f6279e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a4fefa848c1cf8a7a783fdd8e9c64aafc8097448950e32eca72d71457630165b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fefa848c1cf8a7a783fdd8e9c64aafc8097448950e32eca72d71457630165b->enter($__internal_a4fefa848c1cf8a7a783fdd8e9c64aafc8097448950e32eca72d71457630165b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8ce2dc26117136161c9232477040b440377ee0e17f7b0546f43850fb1f6279e8->leave($__internal_8ce2dc26117136161c9232477040b440377ee0e17f7b0546f43850fb1f6279e8_prof);

        
        $__internal_a4fefa848c1cf8a7a783fdd8e9c64aafc8097448950e32eca72d71457630165b->leave($__internal_a4fefa848c1cf8a7a783fdd8e9c64aafc8097448950e32eca72d71457630165b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
