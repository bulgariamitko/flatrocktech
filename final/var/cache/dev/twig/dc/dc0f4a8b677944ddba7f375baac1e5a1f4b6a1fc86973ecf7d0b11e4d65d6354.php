<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f0e7bc1ddb9796db3a54f20d21a1881b9ce7632a4d0923e53b1fb3b6f5eee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f0e7bc1ddb9796db3a54f20d21a1881b9ce7632a4d0923e53b1fb3b6f5eee2->enter($__internal_24f0e7bc1ddb9796db3a54f20d21a1881b9ce7632a4d0923e53b1fb3b6f5eee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a4dc7045bac6269ebddda1fe658827ef40deaaeb6a6044a9c26beb786799044e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dc7045bac6269ebddda1fe658827ef40deaaeb6a6044a9c26beb786799044e->enter($__internal_a4dc7045bac6269ebddda1fe658827ef40deaaeb6a6044a9c26beb786799044e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f0e7bc1ddb9796db3a54f20d21a1881b9ce7632a4d0923e53b1fb3b6f5eee2->leave($__internal_24f0e7bc1ddb9796db3a54f20d21a1881b9ce7632a4d0923e53b1fb3b6f5eee2_prof);

        
        $__internal_a4dc7045bac6269ebddda1fe658827ef40deaaeb6a6044a9c26beb786799044e->leave($__internal_a4dc7045bac6269ebddda1fe658827ef40deaaeb6a6044a9c26beb786799044e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48b946d9a7e7f3d1f921a3d6516f87c5f179f48fb42290bbc449d045a0b6b890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b946d9a7e7f3d1f921a3d6516f87c5f179f48fb42290bbc449d045a0b6b890->enter($__internal_48b946d9a7e7f3d1f921a3d6516f87c5f179f48fb42290bbc449d045a0b6b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c5ef41195d49c800340fdc35efdd9d251bfab31be98590a27721dcc35a08fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5ef41195d49c800340fdc35efdd9d251bfab31be98590a27721dcc35a08fe3->enter($__internal_0c5ef41195d49c800340fdc35efdd9d251bfab31be98590a27721dcc35a08fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c5ef41195d49c800340fdc35efdd9d251bfab31be98590a27721dcc35a08fe3->leave($__internal_0c5ef41195d49c800340fdc35efdd9d251bfab31be98590a27721dcc35a08fe3_prof);

        
        $__internal_48b946d9a7e7f3d1f921a3d6516f87c5f179f48fb42290bbc449d045a0b6b890->leave($__internal_48b946d9a7e7f3d1f921a3d6516f87c5f179f48fb42290bbc449d045a0b6b890_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11a03e45ce0e6c149b0b078548e70e49d263f150a8c79a62f29bd142539530ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a03e45ce0e6c149b0b078548e70e49d263f150a8c79a62f29bd142539530ed->enter($__internal_11a03e45ce0e6c149b0b078548e70e49d263f150a8c79a62f29bd142539530ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6ab6993caba16cb79a7aec3688048a7dc84b30919941e89d2d3d1b400558ad9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab6993caba16cb79a7aec3688048a7dc84b30919941e89d2d3d1b400558ad9a->enter($__internal_6ab6993caba16cb79a7aec3688048a7dc84b30919941e89d2d3d1b400558ad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ab6993caba16cb79a7aec3688048a7dc84b30919941e89d2d3d1b400558ad9a->leave($__internal_6ab6993caba16cb79a7aec3688048a7dc84b30919941e89d2d3d1b400558ad9a_prof);

        
        $__internal_11a03e45ce0e6c149b0b078548e70e49d263f150a8c79a62f29bd142539530ed->leave($__internal_11a03e45ce0e6c149b0b078548e70e49d263f150a8c79a62f29bd142539530ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4000cbaccc0013222e88f980d19aacde93076fe375a35b39754d39c525f42d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4000cbaccc0013222e88f980d19aacde93076fe375a35b39754d39c525f42d88->enter($__internal_4000cbaccc0013222e88f980d19aacde93076fe375a35b39754d39c525f42d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_784425ffb96225b9b8c2f5c53f8ffd6f4529c8edd9356050b24b8c4d9e185787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784425ffb96225b9b8c2f5c53f8ffd6f4529c8edd9356050b24b8c4d9e185787->enter($__internal_784425ffb96225b9b8c2f5c53f8ffd6f4529c8edd9356050b24b8c4d9e185787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_784425ffb96225b9b8c2f5c53f8ffd6f4529c8edd9356050b24b8c4d9e185787->leave($__internal_784425ffb96225b9b8c2f5c53f8ffd6f4529c8edd9356050b24b8c4d9e185787_prof);

        
        $__internal_4000cbaccc0013222e88f980d19aacde93076fe375a35b39754d39c525f42d88->leave($__internal_4000cbaccc0013222e88f980d19aacde93076fe375a35b39754d39c525f42d88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/demos/flatrocktech/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
