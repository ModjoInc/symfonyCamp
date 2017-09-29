<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bcee72b5a49fa11ebb864b9c54977b53673b38d5ff421148bb4188ba0eead1f8 extends Twig_Template
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
        $__internal_3f86f887cd2a69dab061d4429927b935e4ad834353d0ee687a01cc9b8c531245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f86f887cd2a69dab061d4429927b935e4ad834353d0ee687a01cc9b8c531245->enter($__internal_3f86f887cd2a69dab061d4429927b935e4ad834353d0ee687a01cc9b8c531245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d6b02d238051891a480139183d2cf9c0b49095c0401b25972ef2afcb7d1980f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b02d238051891a480139183d2cf9c0b49095c0401b25972ef2afcb7d1980f1->enter($__internal_d6b02d238051891a480139183d2cf9c0b49095c0401b25972ef2afcb7d1980f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3f86f887cd2a69dab061d4429927b935e4ad834353d0ee687a01cc9b8c531245->leave($__internal_3f86f887cd2a69dab061d4429927b935e4ad834353d0ee687a01cc9b8c531245_prof);

        
        $__internal_d6b02d238051891a480139183d2cf9c0b49095c0401b25972ef2afcb7d1980f1->leave($__internal_d6b02d238051891a480139183d2cf9c0b49095c0401b25972ef2afcb7d1980f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
