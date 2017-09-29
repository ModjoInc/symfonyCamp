<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_10f4786686d89a97183133610a4e6e9b6adc51207bfa05e3c6aa1b1d738a1018 extends Twig_Template
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
        $__internal_78c7d646b487a0d9a592805089b220fb305a4f8557b22b07588efcea3b8c3f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c7d646b487a0d9a592805089b220fb305a4f8557b22b07588efcea3b8c3f32->enter($__internal_78c7d646b487a0d9a592805089b220fb305a4f8557b22b07588efcea3b8c3f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f8cdf542062ab8f86fefa66c4dddbb9e572016bb3af66ff6d9feaf527dc1bdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cdf542062ab8f86fefa66c4dddbb9e572016bb3af66ff6d9feaf527dc1bdb8->enter($__internal_f8cdf542062ab8f86fefa66c4dddbb9e572016bb3af66ff6d9feaf527dc1bdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_78c7d646b487a0d9a592805089b220fb305a4f8557b22b07588efcea3b8c3f32->leave($__internal_78c7d646b487a0d9a592805089b220fb305a4f8557b22b07588efcea3b8c3f32_prof);

        
        $__internal_f8cdf542062ab8f86fefa66c4dddbb9e572016bb3af66ff6d9feaf527dc1bdb8->leave($__internal_f8cdf542062ab8f86fefa66c4dddbb9e572016bb3af66ff6d9feaf527dc1bdb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
