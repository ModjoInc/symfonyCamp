<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_73df4408d4afd78de1a8195505139769de9e3d178bbd706eaf09d5975e7b1cfe extends Twig_Template
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
        $__internal_695d9d83865d78221b7de3f183e3ab89b2ed415bde71a8df4607f71fd604335d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695d9d83865d78221b7de3f183e3ab89b2ed415bde71a8df4607f71fd604335d->enter($__internal_695d9d83865d78221b7de3f183e3ab89b2ed415bde71a8df4607f71fd604335d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_70f6d428d39e191f725e1cbf293bdffe6f7b821b6592c255d25561434e7fa1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f6d428d39e191f725e1cbf293bdffe6f7b821b6592c255d25561434e7fa1cd->enter($__internal_70f6d428d39e191f725e1cbf293bdffe6f7b821b6592c255d25561434e7fa1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_695d9d83865d78221b7de3f183e3ab89b2ed415bde71a8df4607f71fd604335d->leave($__internal_695d9d83865d78221b7de3f183e3ab89b2ed415bde71a8df4607f71fd604335d_prof);

        
        $__internal_70f6d428d39e191f725e1cbf293bdffe6f7b821b6592c255d25561434e7fa1cd->leave($__internal_70f6d428d39e191f725e1cbf293bdffe6f7b821b6592c255d25561434e7fa1cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
