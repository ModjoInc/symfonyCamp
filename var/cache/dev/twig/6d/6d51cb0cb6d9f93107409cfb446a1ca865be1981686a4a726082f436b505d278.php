<?php

/* HabibPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_b19525ba4dae5ef52189dccff23cc2063d06ddabd21561d2e595545b81848024 extends Twig_Template
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
        $__internal_ed618d91cb1d71ba2e54849da5e6cdbbc47b5867ef9a7b0ba60a77cbec14b5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed618d91cb1d71ba2e54849da5e6cdbbc47b5867ef9a7b0ba60a77cbec14b5ae->enter($__internal_ed618d91cb1d71ba2e54849da5e6cdbbc47b5867ef9a7b0ba60a77cbec14b5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HabibPlatformBundle:Advert:view.html.twig"));

        $__internal_9d65b689b9592aff096acbdbda74ebe1f24da2a3ba702828ec5312f258cbd19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d65b689b9592aff096acbdbda74ebe1f24da2a3ba702828ec5312f258cbd19a->enter($__internal_9d65b689b9592aff096acbdbda74ebe1f24da2a3ba702828ec5312f258cbd19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HabibPlatformBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>View</title>
  </head>
  <body>
    <h1>View announce n° ";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
    <div>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <p>Message Flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

    <p>ici on peut lire l'annonce ayant comme id : ";
        // line 15
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "</p>
    <p>pas pour l'instant</p>

</body>
</html>
";
        
        $__internal_ed618d91cb1d71ba2e54849da5e6cdbbc47b5867ef9a7b0ba60a77cbec14b5ae->leave($__internal_ed618d91cb1d71ba2e54849da5e6cdbbc47b5867ef9a7b0ba60a77cbec14b5ae_prof);

        
        $__internal_9d65b689b9592aff096acbdbda74ebe1f24da2a3ba702828ec5312f258cbd19a->leave($__internal_9d65b689b9592aff096acbdbda74ebe1f24da2a3ba702828ec5312f258cbd19a_prof);

    }

    public function getTemplateName()
    {
        return "HabibPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  52 => 13,  43 => 11,  39 => 10,  34 => 8,  25 => 1,);
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
    <meta charset=\"utf-8\">
    <title>View</title>
  </head>
  <body>
    <h1>View announce n° {{ id }}</h1>
    <div>
      {% for message in app.session.flashbag.get('info') %}
        <p>Message Flash : {{ message }}</p>
      {% endfor %}
    </div>

    <p>ici on peut lire l'annonce ayant comme id : {{ id }}</p>
    <p>pas pour l'instant</p>

</body>
</html>
", "HabibPlatformBundle:Advert:view.html.twig", "/var/www/Symfony/src/Habib/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
