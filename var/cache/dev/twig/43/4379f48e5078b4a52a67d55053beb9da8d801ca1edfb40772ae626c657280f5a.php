<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_119c72e7dff84766de0fd2a32db5fd6c286207212ae9347f60b3d1e16520fd97 extends Twig_Template
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
        $__internal_395e215a4145613b2a8d18fa409299ab4538e2148166750e406d20dd706399c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395e215a4145613b2a8d18fa409299ab4538e2148166750e406d20dd706399c6->enter($__internal_395e215a4145613b2a8d18fa409299ab4538e2148166750e406d20dd706399c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_eb30a2544840a06da71495d34a5803f4c59648a25f8d8d0c244d98acd5d710ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb30a2544840a06da71495d34a5803f4c59648a25f8d8d0c244d98acd5d710ed->enter($__internal_eb30a2544840a06da71495d34a5803f4c59648a25f8d8d0c244d98acd5d710ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_395e215a4145613b2a8d18fa409299ab4538e2148166750e406d20dd706399c6->leave($__internal_395e215a4145613b2a8d18fa409299ab4538e2148166750e406d20dd706399c6_prof);

        
        $__internal_eb30a2544840a06da71495d34a5803f4c59648a25f8d8d0c244d98acd5d710ed->leave($__internal_eb30a2544840a06da71495d34a5803f4c59648a25f8d8d0c244d98acd5d710ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
