<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e86572db1a92ab303048537ee4700b8a0cd2dfa2eadb7dccc3536c68e5759eae extends Twig_Template
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
        $__internal_0f16264e65e705450f441acff4e39cfc9ba0b866f147d70137193fa209e7576f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f16264e65e705450f441acff4e39cfc9ba0b866f147d70137193fa209e7576f->enter($__internal_0f16264e65e705450f441acff4e39cfc9ba0b866f147d70137193fa209e7576f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_60c387e3e484439461a2725f3fbf4faba6cd685edbc77f50882d509037830a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c387e3e484439461a2725f3fbf4faba6cd685edbc77f50882d509037830a1a->enter($__internal_60c387e3e484439461a2725f3fbf4faba6cd685edbc77f50882d509037830a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0f16264e65e705450f441acff4e39cfc9ba0b866f147d70137193fa209e7576f->leave($__internal_0f16264e65e705450f441acff4e39cfc9ba0b866f147d70137193fa209e7576f_prof);

        
        $__internal_60c387e3e484439461a2725f3fbf4faba6cd685edbc77f50882d509037830a1a->leave($__internal_60c387e3e484439461a2725f3fbf4faba6cd685edbc77f50882d509037830a1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
