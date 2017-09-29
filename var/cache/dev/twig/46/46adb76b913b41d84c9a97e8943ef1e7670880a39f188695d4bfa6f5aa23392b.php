<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_126f9d29f853e2cae2b1b3eae1a15db7b503b27c39443e9259a0801a9aea4fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c91e5258b49d21904618f836dedd904d383ef1b5675317a293001f61500eb625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91e5258b49d21904618f836dedd904d383ef1b5675317a293001f61500eb625->enter($__internal_c91e5258b49d21904618f836dedd904d383ef1b5675317a293001f61500eb625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bf7ea5cfbebec0801255bc55c026563269947b2412cbef9cf33e5121a7c8fb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7ea5cfbebec0801255bc55c026563269947b2412cbef9cf33e5121a7c8fb17->enter($__internal_bf7ea5cfbebec0801255bc55c026563269947b2412cbef9cf33e5121a7c8fb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c91e5258b49d21904618f836dedd904d383ef1b5675317a293001f61500eb625->leave($__internal_c91e5258b49d21904618f836dedd904d383ef1b5675317a293001f61500eb625_prof);

        
        $__internal_bf7ea5cfbebec0801255bc55c026563269947b2412cbef9cf33e5121a7c8fb17->leave($__internal_bf7ea5cfbebec0801255bc55c026563269947b2412cbef9cf33e5121a7c8fb17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_312d2f78047b0cf3720fcdedf96158db6d1d925729193d9318a9cd61807d7500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312d2f78047b0cf3720fcdedf96158db6d1d925729193d9318a9cd61807d7500->enter($__internal_312d2f78047b0cf3720fcdedf96158db6d1d925729193d9318a9cd61807d7500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_533615f01944fe80f5130db67864f2961c0ec48e0ce51dcfdda6c1885d1a568e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533615f01944fe80f5130db67864f2961c0ec48e0ce51dcfdda6c1885d1a568e->enter($__internal_533615f01944fe80f5130db67864f2961c0ec48e0ce51dcfdda6c1885d1a568e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_533615f01944fe80f5130db67864f2961c0ec48e0ce51dcfdda6c1885d1a568e->leave($__internal_533615f01944fe80f5130db67864f2961c0ec48e0ce51dcfdda6c1885d1a568e_prof);

        
        $__internal_312d2f78047b0cf3720fcdedf96158db6d1d925729193d9318a9cd61807d7500->leave($__internal_312d2f78047b0cf3720fcdedf96158db6d1d925729193d9318a9cd61807d7500_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_95a32b1d859c38b68c2fb40d58e612cbcbff79c0a18c9499f6df894b943a6704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a32b1d859c38b68c2fb40d58e612cbcbff79c0a18c9499f6df894b943a6704->enter($__internal_95a32b1d859c38b68c2fb40d58e612cbcbff79c0a18c9499f6df894b943a6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca559da1626f71a2e2ad56dc3dacd96f637665f415bae8b17544eb4bc3974e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca559da1626f71a2e2ad56dc3dacd96f637665f415bae8b17544eb4bc3974e04->enter($__internal_ca559da1626f71a2e2ad56dc3dacd96f637665f415bae8b17544eb4bc3974e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca559da1626f71a2e2ad56dc3dacd96f637665f415bae8b17544eb4bc3974e04->leave($__internal_ca559da1626f71a2e2ad56dc3dacd96f637665f415bae8b17544eb4bc3974e04_prof);

        
        $__internal_95a32b1d859c38b68c2fb40d58e612cbcbff79c0a18c9499f6df894b943a6704->leave($__internal_95a32b1d859c38b68c2fb40d58e612cbcbff79c0a18c9499f6df894b943a6704_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_607ece463c24ab23c7e6c36e529d08471ccb0393c67ec2aac94489918487e9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607ece463c24ab23c7e6c36e529d08471ccb0393c67ec2aac94489918487e9d3->enter($__internal_607ece463c24ab23c7e6c36e529d08471ccb0393c67ec2aac94489918487e9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d944c6f0c68167effa456b44f50d4c860bef2df586e2420b55b89b9af8c1312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d944c6f0c68167effa456b44f50d4c860bef2df586e2420b55b89b9af8c1312->enter($__internal_5d944c6f0c68167effa456b44f50d4c860bef2df586e2420b55b89b9af8c1312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_5d944c6f0c68167effa456b44f50d4c860bef2df586e2420b55b89b9af8c1312->leave($__internal_5d944c6f0c68167effa456b44f50d4c860bef2df586e2420b55b89b9af8c1312_prof);

        
        $__internal_607ece463c24ab23c7e6c36e529d08471ccb0393c67ec2aac94489918487e9d3->leave($__internal_607ece463c24ab23c7e6c36e529d08471ccb0393c67ec2aac94489918487e9d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
