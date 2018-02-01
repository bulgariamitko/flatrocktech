<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4ab0f48e35d788846c09bea88b0a9bbc4773e662c28c735c4f7216f52d4696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_fa62561d7346b0364368c67fafb2281f572ad978c971779fd21e1ecad6b52b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa62561d7346b0364368c67fafb2281f572ad978c971779fd21e1ecad6b52b2d->enter($__internal_fa62561d7346b0364368c67fafb2281f572ad978c971779fd21e1ecad6b52b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b82e54d4cca8fdac88e9457458264b79daa6cb37594600ba0209692075c91556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82e54d4cca8fdac88e9457458264b79daa6cb37594600ba0209692075c91556->enter($__internal_b82e54d4cca8fdac88e9457458264b79daa6cb37594600ba0209692075c91556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa62561d7346b0364368c67fafb2281f572ad978c971779fd21e1ecad6b52b2d->leave($__internal_fa62561d7346b0364368c67fafb2281f572ad978c971779fd21e1ecad6b52b2d_prof);

        
        $__internal_b82e54d4cca8fdac88e9457458264b79daa6cb37594600ba0209692075c91556->leave($__internal_b82e54d4cca8fdac88e9457458264b79daa6cb37594600ba0209692075c91556_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9007307070a29a0fa291b45235e8e474b323f17c8540746919271425ac4db014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9007307070a29a0fa291b45235e8e474b323f17c8540746919271425ac4db014->enter($__internal_9007307070a29a0fa291b45235e8e474b323f17c8540746919271425ac4db014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_069ba8d70804971bbc1cb4b0f221ee433ee1cce5115cd7b861d7764c2f1fb2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069ba8d70804971bbc1cb4b0f221ee433ee1cce5115cd7b861d7764c2f1fb2d0->enter($__internal_069ba8d70804971bbc1cb4b0f221ee433ee1cce5115cd7b861d7764c2f1fb2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_069ba8d70804971bbc1cb4b0f221ee433ee1cce5115cd7b861d7764c2f1fb2d0->leave($__internal_069ba8d70804971bbc1cb4b0f221ee433ee1cce5115cd7b861d7764c2f1fb2d0_prof);

        
        $__internal_9007307070a29a0fa291b45235e8e474b323f17c8540746919271425ac4db014->leave($__internal_9007307070a29a0fa291b45235e8e474b323f17c8540746919271425ac4db014_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f66c122a5d484d66274178aff24deed818de1159cddc21a54e82ee22734df9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66c122a5d484d66274178aff24deed818de1159cddc21a54e82ee22734df9dd->enter($__internal_f66c122a5d484d66274178aff24deed818de1159cddc21a54e82ee22734df9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b5acdb27200c61c43195448157570508c156ff0024f846f2af8002d40b7e1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5acdb27200c61c43195448157570508c156ff0024f846f2af8002d40b7e1a6->enter($__internal_6b5acdb27200c61c43195448157570508c156ff0024f846f2af8002d40b7e1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b5acdb27200c61c43195448157570508c156ff0024f846f2af8002d40b7e1a6->leave($__internal_6b5acdb27200c61c43195448157570508c156ff0024f846f2af8002d40b7e1a6_prof);

        
        $__internal_f66c122a5d484d66274178aff24deed818de1159cddc21a54e82ee22734df9dd->leave($__internal_f66c122a5d484d66274178aff24deed818de1159cddc21a54e82ee22734df9dd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8bfa096f190c44d3e5e893a194d512b92f8708448cddc9069edd65e0e46e7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bfa096f190c44d3e5e893a194d512b92f8708448cddc9069edd65e0e46e7b8->enter($__internal_e8bfa096f190c44d3e5e893a194d512b92f8708448cddc9069edd65e0e46e7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db074c83efae741965932d711fa1942ca2423c2d1fdb17279d2cbc5cf446b337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db074c83efae741965932d711fa1942ca2423c2d1fdb17279d2cbc5cf446b337->enter($__internal_db074c83efae741965932d711fa1942ca2423c2d1fdb17279d2cbc5cf446b337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_db074c83efae741965932d711fa1942ca2423c2d1fdb17279d2cbc5cf446b337->leave($__internal_db074c83efae741965932d711fa1942ca2423c2d1fdb17279d2cbc5cf446b337_prof);

        
        $__internal_e8bfa096f190c44d3e5e893a194d512b92f8708448cddc9069edd65e0e46e7b8->leave($__internal_e8bfa096f190c44d3e5e893a194d512b92f8708448cddc9069edd65e0e46e7b8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/demos/flatrocktech/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
