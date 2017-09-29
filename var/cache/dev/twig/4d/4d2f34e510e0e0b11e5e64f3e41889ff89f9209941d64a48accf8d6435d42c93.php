<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6df3dfb24239c54f6ce06832815f88ac08190800daead0570c872412557bb9f8 extends Twig_Template
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
        $__internal_e5b74f7d7f7e684b9a0f4f24c1284a397ebfd52f951764053e869a3b8701f828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b74f7d7f7e684b9a0f4f24c1284a397ebfd52f951764053e869a3b8701f828->enter($__internal_e5b74f7d7f7e684b9a0f4f24c1284a397ebfd52f951764053e869a3b8701f828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b052ad8df7f253586dd44f465c09911a735bbc46a93fb9e06724305d27b661fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b052ad8df7f253586dd44f465c09911a735bbc46a93fb9e06724305d27b661fc->enter($__internal_b052ad8df7f253586dd44f465c09911a735bbc46a93fb9e06724305d27b661fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e5b74f7d7f7e684b9a0f4f24c1284a397ebfd52f951764053e869a3b8701f828->leave($__internal_e5b74f7d7f7e684b9a0f4f24c1284a397ebfd52f951764053e869a3b8701f828_prof);

        
        $__internal_b052ad8df7f253586dd44f465c09911a735bbc46a93fb9e06724305d27b661fc->leave($__internal_b052ad8df7f253586dd44f465c09911a735bbc46a93fb9e06724305d27b661fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
