<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba4eeaddd5d43926e9828b0f443f7b3eb6428665e77b8be38e5fb4fe681b7168 extends Twig_Template
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
        $__internal_36ae06035ec86c33eef8ed64d6faf5b8e950db1b9b8d3aa0aa646e008d30ccb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ae06035ec86c33eef8ed64d6faf5b8e950db1b9b8d3aa0aa646e008d30ccb4->enter($__internal_36ae06035ec86c33eef8ed64d6faf5b8e950db1b9b8d3aa0aa646e008d30ccb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_400e8b52bd31e1e58946ece7287e5a13405d1ed317fda625423084fe02bd36de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400e8b52bd31e1e58946ece7287e5a13405d1ed317fda625423084fe02bd36de->enter($__internal_400e8b52bd31e1e58946ece7287e5a13405d1ed317fda625423084fe02bd36de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_36ae06035ec86c33eef8ed64d6faf5b8e950db1b9b8d3aa0aa646e008d30ccb4->leave($__internal_36ae06035ec86c33eef8ed64d6faf5b8e950db1b9b8d3aa0aa646e008d30ccb4_prof);

        
        $__internal_400e8b52bd31e1e58946ece7287e5a13405d1ed317fda625423084fe02bd36de->leave($__internal_400e8b52bd31e1e58946ece7287e5a13405d1ed317fda625423084fe02bd36de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
