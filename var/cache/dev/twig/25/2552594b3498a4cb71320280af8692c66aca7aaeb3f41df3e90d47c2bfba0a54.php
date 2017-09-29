<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e4541210b1f5919a8a3438bc3eadef5a6c5230cf7f8f361f8733d451f5389b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4541210b1f5919a8a3438bc3eadef5a6c5230cf7f8f361f8733d451f5389b6->enter($__internal_0e4541210b1f5919a8a3438bc3eadef5a6c5230cf7f8f361f8733d451f5389b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_ce32205c2322b3e3701e501c08e965b2aa2b599e8171e2a8f59a247e4eb38140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce32205c2322b3e3701e501c08e965b2aa2b599e8171e2a8f59a247e4eb38140->enter($__internal_ce32205c2322b3e3701e501c08e965b2aa2b599e8171e2a8f59a247e4eb38140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0e4541210b1f5919a8a3438bc3eadef5a6c5230cf7f8f361f8733d451f5389b6->leave($__internal_0e4541210b1f5919a8a3438bc3eadef5a6c5230cf7f8f361f8733d451f5389b6_prof);

        
        $__internal_ce32205c2322b3e3701e501c08e965b2aa2b599e8171e2a8f59a247e4eb38140->leave($__internal_ce32205c2322b3e3701e501c08e965b2aa2b599e8171e2a8f59a247e4eb38140_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_577bd126eeebc0e2148e4cf824e230ebff9be86d91998465c7c95ca1ead4e996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577bd126eeebc0e2148e4cf824e230ebff9be86d91998465c7c95ca1ead4e996->enter($__internal_577bd126eeebc0e2148e4cf824e230ebff9be86d91998465c7c95ca1ead4e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2173a185a1535b85900eb6533c81e14fd883a5cdebf93edac49c4d6483d85223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2173a185a1535b85900eb6533c81e14fd883a5cdebf93edac49c4d6483d85223->enter($__internal_2173a185a1535b85900eb6533c81e14fd883a5cdebf93edac49c4d6483d85223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2173a185a1535b85900eb6533c81e14fd883a5cdebf93edac49c4d6483d85223->leave($__internal_2173a185a1535b85900eb6533c81e14fd883a5cdebf93edac49c4d6483d85223_prof);

        
        $__internal_577bd126eeebc0e2148e4cf824e230ebff9be86d91998465c7c95ca1ead4e996->leave($__internal_577bd126eeebc0e2148e4cf824e230ebff9be86d91998465c7c95ca1ead4e996_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f27a3b38634a4a4169af3174f7cf5a680c6a02edd89565730baa00104fa9a891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27a3b38634a4a4169af3174f7cf5a680c6a02edd89565730baa00104fa9a891->enter($__internal_f27a3b38634a4a4169af3174f7cf5a680c6a02edd89565730baa00104fa9a891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2924b8886bac97bef2578943d4b30c5ab5db2fbdda83fc4e694207cf7ddd8031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2924b8886bac97bef2578943d4b30c5ab5db2fbdda83fc4e694207cf7ddd8031->enter($__internal_2924b8886bac97bef2578943d4b30c5ab5db2fbdda83fc4e694207cf7ddd8031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2924b8886bac97bef2578943d4b30c5ab5db2fbdda83fc4e694207cf7ddd8031->leave($__internal_2924b8886bac97bef2578943d4b30c5ab5db2fbdda83fc4e694207cf7ddd8031_prof);

        
        $__internal_f27a3b38634a4a4169af3174f7cf5a680c6a02edd89565730baa00104fa9a891->leave($__internal_f27a3b38634a4a4169af3174f7cf5a680c6a02edd89565730baa00104fa9a891_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e94a004cc85bcbf8be409f954d7d721bc3bdd894aa37e777f6aa52b963d612a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94a004cc85bcbf8be409f954d7d721bc3bdd894aa37e777f6aa52b963d612a4->enter($__internal_e94a004cc85bcbf8be409f954d7d721bc3bdd894aa37e777f6aa52b963d612a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a56a47163f19d1a8ade159645932372c858341715c76ed2fa71ba120fab0d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a56a47163f19d1a8ade159645932372c858341715c76ed2fa71ba120fab0d39->enter($__internal_9a56a47163f19d1a8ade159645932372c858341715c76ed2fa71ba120fab0d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a56a47163f19d1a8ade159645932372c858341715c76ed2fa71ba120fab0d39->leave($__internal_9a56a47163f19d1a8ade159645932372c858341715c76ed2fa71ba120fab0d39_prof);

        
        $__internal_e94a004cc85bcbf8be409f954d7d721bc3bdd894aa37e777f6aa52b963d612a4->leave($__internal_e94a004cc85bcbf8be409f954d7d721bc3bdd894aa37e777f6aa52b963d612a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
