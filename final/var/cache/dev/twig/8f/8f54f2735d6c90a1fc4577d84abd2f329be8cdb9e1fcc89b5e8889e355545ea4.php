<?php

/* base.html.twig */
class __TwigTemplate_e1a21658618236c3ad4315e62836718610e2a7f3b7eb5435e504531ee60882fa extends Twig_Template
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
        $__internal_9452483158df951b5f36e912619f30457b7f1f48347a51246ff281dcdc0c60eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9452483158df951b5f36e912619f30457b7f1f48347a51246ff281dcdc0c60eb->enter($__internal_9452483158df951b5f36e912619f30457b7f1f48347a51246ff281dcdc0c60eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_11826b3bcd5067e1ef9f66b9a7236915befaee368bdb9eeffefed1a11f5eb3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11826b3bcd5067e1ef9f66b9a7236915befaee368bdb9eeffefed1a11f5eb3e5->enter($__internal_11826b3bcd5067e1ef9f66b9a7236915befaee368bdb9eeffefed1a11f5eb3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </head>
    <body>

        <!-- Start Top Bar -->
    <nav class=\"navbar navbar-expand-sm bg-light\">

      <!-- Links -->
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Settings</a>
        </li>
      </ul>

    </nav>
    <!-- End Top Bar -->

    <br>
    <div class=\"container\">
      ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    </div>
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_9452483158df951b5f36e912619f30457b7f1f48347a51246ff281dcdc0c60eb->leave($__internal_9452483158df951b5f36e912619f30457b7f1f48347a51246ff281dcdc0c60eb_prof);

        
        $__internal_11826b3bcd5067e1ef9f66b9a7236915befaee368bdb9eeffefed1a11f5eb3e5->leave($__internal_11826b3bcd5067e1ef9f66b9a7236915befaee368bdb9eeffefed1a11f5eb3e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff4762531e3a8258a7bd81e0f52a37a60361d6e542151ac7fe27eba5823188f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4762531e3a8258a7bd81e0f52a37a60361d6e542151ac7fe27eba5823188f3->enter($__internal_ff4762531e3a8258a7bd81e0f52a37a60361d6e542151ac7fe27eba5823188f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b02b0739f81a07a4554d2ba0bc78f91e7a1d86f0ed646d62bb3416898b13327a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02b0739f81a07a4554d2ba0bc78f91e7a1d86f0ed646d62bb3416898b13327a->enter($__internal_b02b0739f81a07a4554d2ba0bc78f91e7a1d86f0ed646d62bb3416898b13327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FlatRock Quiz";
        
        $__internal_b02b0739f81a07a4554d2ba0bc78f91e7a1d86f0ed646d62bb3416898b13327a->leave($__internal_b02b0739f81a07a4554d2ba0bc78f91e7a1d86f0ed646d62bb3416898b13327a_prof);

        
        $__internal_ff4762531e3a8258a7bd81e0f52a37a60361d6e542151ac7fe27eba5823188f3->leave($__internal_ff4762531e3a8258a7bd81e0f52a37a60361d6e542151ac7fe27eba5823188f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_109f2aecc46c138d69db160bdc514d6296193cc49e00d2cc9347f28464fea82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109f2aecc46c138d69db160bdc514d6296193cc49e00d2cc9347f28464fea82a->enter($__internal_109f2aecc46c138d69db160bdc514d6296193cc49e00d2cc9347f28464fea82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85c2ebf03d42ca61eabe80be34fb4c474fda44e81cbe4a62559001b8590acaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c2ebf03d42ca61eabe80be34fb4c474fda44e81cbe4a62559001b8590acaa4->enter($__internal_85c2ebf03d42ca61eabe80be34fb4c474fda44e81cbe4a62559001b8590acaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85c2ebf03d42ca61eabe80be34fb4c474fda44e81cbe4a62559001b8590acaa4->leave($__internal_85c2ebf03d42ca61eabe80be34fb4c474fda44e81cbe4a62559001b8590acaa4_prof);

        
        $__internal_109f2aecc46c138d69db160bdc514d6296193cc49e00d2cc9347f28464fea82a->leave($__internal_109f2aecc46c138d69db160bdc514d6296193cc49e00d2cc9347f28464fea82a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_12a0f56b3608596eadc5fcc657f1af7faf59ec642412f6b4c8fe49111e663db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a0f56b3608596eadc5fcc657f1af7faf59ec642412f6b4c8fe49111e663db1->enter($__internal_12a0f56b3608596eadc5fcc657f1af7faf59ec642412f6b4c8fe49111e663db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_986ffa5f66661b20d0b7c4aa9abbb099a573ee95435cab9efdf3a0bb40959037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986ffa5f66661b20d0b7c4aa9abbb099a573ee95435cab9efdf3a0bb40959037->enter($__internal_986ffa5f66661b20d0b7c4aa9abbb099a573ee95435cab9efdf3a0bb40959037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_986ffa5f66661b20d0b7c4aa9abbb099a573ee95435cab9efdf3a0bb40959037->leave($__internal_986ffa5f66661b20d0b7c4aa9abbb099a573ee95435cab9efdf3a0bb40959037_prof);

        
        $__internal_12a0f56b3608596eadc5fcc657f1af7faf59ec642412f6b4c8fe49111e663db1->leave($__internal_12a0f56b3608596eadc5fcc657f1af7faf59ec642412f6b4c8fe49111e663db1_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f6a5bfaa46359067638c9d908a84469d0dc8b8a11ab8c22e9a625d5c49c2f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6a5bfaa46359067638c9d908a84469d0dc8b8a11ab8c22e9a625d5c49c2f78->enter($__internal_9f6a5bfaa46359067638c9d908a84469d0dc8b8a11ab8c22e9a625d5c49c2f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4bc0e10612f3c3e55c5dabea942cd875880c3ea6a6cfcc28fad554d6a9169355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc0e10612f3c3e55c5dabea942cd875880c3ea6a6cfcc28fad554d6a9169355->enter($__internal_4bc0e10612f3c3e55c5dabea942cd875880c3ea6a6cfcc28fad554d6a9169355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4bc0e10612f3c3e55c5dabea942cd875880c3ea6a6cfcc28fad554d6a9169355->leave($__internal_4bc0e10612f3c3e55c5dabea942cd875880c3ea6a6cfcc28fad554d6a9169355_prof);

        
        $__internal_9f6a5bfaa46359067638c9d908a84469d0dc8b8a11ab8c22e9a625d5c49c2f78->leave($__internal_9f6a5bfaa46359067638c9d908a84469d0dc8b8a11ab8c22e9a625d5c49c2f78_prof);

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
        return array (  191 => 47,  174 => 33,  157 => 6,  139 => 5,  117 => 53,  113 => 52,  109 => 51,  105 => 50,  101 => 49,  96 => 48,  94 => 47,  79 => 34,  77 => 33,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}FlatRock Quiz{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </head>
    <body>

        <!-- Start Top Bar -->
    <nav class=\"navbar navbar-expand-sm bg-light\">

      <!-- Links -->
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Settings</a>
        </li>
      </ul>

    </nav>
    <!-- End Top Bar -->

    <br>
    <div class=\"container\">
      {% block body %}{% endblock %}
    </div>
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/var/www/html/demos/flatrocktech/final/app/Resources/views/base.html.twig");
    }
}
