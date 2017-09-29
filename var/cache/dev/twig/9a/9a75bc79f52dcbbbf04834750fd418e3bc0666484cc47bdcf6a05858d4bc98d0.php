<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9fe2e90eb41f38649dbaf0d214681ed23e2a8bf3b12ee0f2f5c08f3d5f04ba59 extends Twig_Template
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
        $__internal_ba5ce30f4031eb86df7e7c9f88c3b4070131ffd0b6a775306638d9d34ae3212b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5ce30f4031eb86df7e7c9f88c3b4070131ffd0b6a775306638d9d34ae3212b->enter($__internal_ba5ce30f4031eb86df7e7c9f88c3b4070131ffd0b6a775306638d9d34ae3212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_07df502cac34e0e3f59c665e2b6cc8bddc1ae2dea9704c3bce4cd1d575a89578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07df502cac34e0e3f59c665e2b6cc8bddc1ae2dea9704c3bce4cd1d575a89578->enter($__internal_07df502cac34e0e3f59c665e2b6cc8bddc1ae2dea9704c3bce4cd1d575a89578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ba5ce30f4031eb86df7e7c9f88c3b4070131ffd0b6a775306638d9d34ae3212b->leave($__internal_ba5ce30f4031eb86df7e7c9f88c3b4070131ffd0b6a775306638d9d34ae3212b_prof);

        
        $__internal_07df502cac34e0e3f59c665e2b6cc8bddc1ae2dea9704c3bce4cd1d575a89578->leave($__internal_07df502cac34e0e3f59c665e2b6cc8bddc1ae2dea9704c3bce4cd1d575a89578_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
