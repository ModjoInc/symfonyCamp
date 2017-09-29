<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e228ffca48e92cf43c73eba6b9d9dd6a5683aa1a64a8ca7dbcd6c1f21365edb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e228ffca48e92cf43c73eba6b9d9dd6a5683aa1a64a8ca7dbcd6c1f21365edb0->enter($__internal_e228ffca48e92cf43c73eba6b9d9dd6a5683aa1a64a8ca7dbcd6c1f21365edb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7c02ee016fa62c46650e4816ee58927b2490358c385604ffb9b96fe236bc5dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c02ee016fa62c46650e4816ee58927b2490358c385604ffb9b96fe236bc5dec->enter($__internal_7c02ee016fa62c46650e4816ee58927b2490358c385604ffb9b96fe236bc5dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e228ffca48e92cf43c73eba6b9d9dd6a5683aa1a64a8ca7dbcd6c1f21365edb0->leave($__internal_e228ffca48e92cf43c73eba6b9d9dd6a5683aa1a64a8ca7dbcd6c1f21365edb0_prof);

        
        $__internal_7c02ee016fa62c46650e4816ee58927b2490358c385604ffb9b96fe236bc5dec->leave($__internal_7c02ee016fa62c46650e4816ee58927b2490358c385604ffb9b96fe236bc5dec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17d3d1d17135182d80cb260ad4ddd51e6bf7d244d2729559dc1999d668fc97b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d3d1d17135182d80cb260ad4ddd51e6bf7d244d2729559dc1999d668fc97b1->enter($__internal_17d3d1d17135182d80cb260ad4ddd51e6bf7d244d2729559dc1999d668fc97b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e9fdad1c2d8cbe077224113adff06e7bec69b0ded6444cd840499fc6683ecc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9fdad1c2d8cbe077224113adff06e7bec69b0ded6444cd840499fc6683ecc9->enter($__internal_7e9fdad1c2d8cbe077224113adff06e7bec69b0ded6444cd840499fc6683ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7e9fdad1c2d8cbe077224113adff06e7bec69b0ded6444cd840499fc6683ecc9->leave($__internal_7e9fdad1c2d8cbe077224113adff06e7bec69b0ded6444cd840499fc6683ecc9_prof);

        
        $__internal_17d3d1d17135182d80cb260ad4ddd51e6bf7d244d2729559dc1999d668fc97b1->leave($__internal_17d3d1d17135182d80cb260ad4ddd51e6bf7d244d2729559dc1999d668fc97b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c49462b5384dfcafde76e9c780f76614dfaf4144fa7f5cc2de97b0e207dff3e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49462b5384dfcafde76e9c780f76614dfaf4144fa7f5cc2de97b0e207dff3e9->enter($__internal_c49462b5384dfcafde76e9c780f76614dfaf4144fa7f5cc2de97b0e207dff3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_041c69d004a3a3e4eedc6f222684c426eeec73999978113db48b015c08b04f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041c69d004a3a3e4eedc6f222684c426eeec73999978113db48b015c08b04f10->enter($__internal_041c69d004a3a3e4eedc6f222684c426eeec73999978113db48b015c08b04f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_041c69d004a3a3e4eedc6f222684c426eeec73999978113db48b015c08b04f10->leave($__internal_041c69d004a3a3e4eedc6f222684c426eeec73999978113db48b015c08b04f10_prof);

        
        $__internal_c49462b5384dfcafde76e9c780f76614dfaf4144fa7f5cc2de97b0e207dff3e9->leave($__internal_c49462b5384dfcafde76e9c780f76614dfaf4144fa7f5cc2de97b0e207dff3e9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f37f24a4b1b3a9952922d1b51b4060b3281fe07804f0709a74fa93c57a94549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f37f24a4b1b3a9952922d1b51b4060b3281fe07804f0709a74fa93c57a94549->enter($__internal_0f37f24a4b1b3a9952922d1b51b4060b3281fe07804f0709a74fa93c57a94549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_025a63c08a20a1b669b5069b7fc49b2ca3567894a67b6952450b59c52b36f822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025a63c08a20a1b669b5069b7fc49b2ca3567894a67b6952450b59c52b36f822->enter($__internal_025a63c08a20a1b669b5069b7fc49b2ca3567894a67b6952450b59c52b36f822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_025a63c08a20a1b669b5069b7fc49b2ca3567894a67b6952450b59c52b36f822->leave($__internal_025a63c08a20a1b669b5069b7fc49b2ca3567894a67b6952450b59c52b36f822_prof);

        
        $__internal_0f37f24a4b1b3a9952922d1b51b4060b3281fe07804f0709a74fa93c57a94549->leave($__internal_0f37f24a4b1b3a9952922d1b51b4060b3281fe07804f0709a74fa93c57a94549_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40b1e69c4ce944584dd97005a4ec5b24c63b9096317b2c3c59b0b06636a8b12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b1e69c4ce944584dd97005a4ec5b24c63b9096317b2c3c59b0b06636a8b12e->enter($__internal_40b1e69c4ce944584dd97005a4ec5b24c63b9096317b2c3c59b0b06636a8b12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8f383f85f2dc3b81cf8be6bbcce49c24ad0af26334b1533b08abe94a8518de52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f383f85f2dc3b81cf8be6bbcce49c24ad0af26334b1533b08abe94a8518de52->enter($__internal_8f383f85f2dc3b81cf8be6bbcce49c24ad0af26334b1533b08abe94a8518de52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f383f85f2dc3b81cf8be6bbcce49c24ad0af26334b1533b08abe94a8518de52->leave($__internal_8f383f85f2dc3b81cf8be6bbcce49c24ad0af26334b1533b08abe94a8518de52_prof);

        
        $__internal_40b1e69c4ce944584dd97005a4ec5b24c63b9096317b2c3c59b0b06636a8b12e->leave($__internal_40b1e69c4ce944584dd97005a4ec5b24c63b9096317b2c3c59b0b06636a8b12e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/Symfony/app/Resources/views/base.html.twig");
    }
}
