<?php

/* admin/index.html.twig */
class __TwigTemplate_811f2a1ba1a458f4cc309dde3eba8143027c8d96070b02c7e579dfd0591c693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c877494aceab7c7f47c1989c1815f2f40ab7bf04474361a51152f949b2b4f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c877494aceab7c7f47c1989c1815f2f40ab7bf04474361a51152f949b2b4f51->enter($__internal_6c877494aceab7c7f47c1989c1815f2f40ab7bf04474361a51152f949b2b4f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_ead28397f073164362de7da38933cc7d3169d67035f10c6d0d59b2c9d533cfff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead28397f073164362de7da38933cc7d3169d67035f10c6d0d59b2c9d533cfff->enter($__internal_ead28397f073164362de7da38933cc7d3169d67035f10c6d0d59b2c9d533cfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c877494aceab7c7f47c1989c1815f2f40ab7bf04474361a51152f949b2b4f51->leave($__internal_6c877494aceab7c7f47c1989c1815f2f40ab7bf04474361a51152f949b2b4f51_prof);

        
        $__internal_ead28397f073164362de7da38933cc7d3169d67035f10c6d0d59b2c9d533cfff->leave($__internal_ead28397f073164362de7da38933cc7d3169d67035f10c6d0d59b2c9d533cfff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9fd4bdedbee2e26ebde7989d1508dab839e75c7efe2345f3c4a9f3def0ad094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fd4bdedbee2e26ebde7989d1508dab839e75c7efe2345f3c4a9f3def0ad094->enter($__internal_e9fd4bdedbee2e26ebde7989d1508dab839e75c7efe2345f3c4a9f3def0ad094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7805dfafb5bbc9eeed4550cc4f67688c445fd024b75c675b4adf62d03e31d7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7805dfafb5bbc9eeed4550cc4f67688c445fd024b75c675b4adf62d03e31d7df->enter($__internal_7805dfafb5bbc9eeed4550cc4f67688c445fd024b75c675b4adf62d03e31d7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <h4>Question #1</h4>
    </div>
    <div class=\"row\">
        <p>What is the????</p>
        <p>Anser 1</p>
        <p>Anser 2</p>
      </div>

";
        
        $__internal_7805dfafb5bbc9eeed4550cc4f67688c445fd024b75c675b4adf62d03e31d7df->leave($__internal_7805dfafb5bbc9eeed4550cc4f67688c445fd024b75c675b4adf62d03e31d7df_prof);

        
        $__internal_e9fd4bdedbee2e26ebde7989d1508dab839e75c7efe2345f3c4a9f3def0ad094->leave($__internal_e9fd4bdedbee2e26ebde7989d1508dab839e75c7efe2345f3c4a9f3def0ad094_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
        <h4>Question #1</h4>
    </div>
    <div class=\"row\">
        <p>What is the????</p>
        <p>Anser 1</p>
        <p>Anser 2</p>
      </div>

{% endblock %}
", "admin/index.html.twig", "/var/www/html/demos/flatrocktech/final/app/Resources/views/admin/index.html.twig");
    }
}
