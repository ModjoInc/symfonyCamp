<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_77cb403ac9f5d693785a8bf26efa5d431e95dcc39820057b02a197d57f751ce0 extends Twig_Template
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
        $__internal_424db0a4e97e1f1b6c8ad73483983ae35b43de06342d42b7d08b7345d4d09bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424db0a4e97e1f1b6c8ad73483983ae35b43de06342d42b7d08b7345d4d09bfe->enter($__internal_424db0a4e97e1f1b6c8ad73483983ae35b43de06342d42b7d08b7345d4d09bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_670e0f5bc2c534759f6b6f8958bd9963962973b325b986149188cec1c9892b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670e0f5bc2c534759f6b6f8958bd9963962973b325b986149188cec1c9892b6b->enter($__internal_670e0f5bc2c534759f6b6f8958bd9963962973b325b986149188cec1c9892b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_424db0a4e97e1f1b6c8ad73483983ae35b43de06342d42b7d08b7345d4d09bfe->leave($__internal_424db0a4e97e1f1b6c8ad73483983ae35b43de06342d42b7d08b7345d4d09bfe_prof);

        
        $__internal_670e0f5bc2c534759f6b6f8958bd9963962973b325b986149188cec1c9892b6b->leave($__internal_670e0f5bc2c534759f6b6f8958bd9963962973b325b986149188cec1c9892b6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
