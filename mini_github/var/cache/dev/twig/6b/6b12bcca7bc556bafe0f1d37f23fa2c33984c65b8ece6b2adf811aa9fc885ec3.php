<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e49418f7c1a4718135d7120d0163aa3907b7ae03f5cd43ffbba16eb6a7aff51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49418f7c1a4718135d7120d0163aa3907b7ae03f5cd43ffbba16eb6a7aff51b->enter($__internal_e49418f7c1a4718135d7120d0163aa3907b7ae03f5cd43ffbba16eb6a7aff51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_43078aa8a807c2f29c8b27a29ded0730f05e8f05d6a8e7de1e2fb8c249e0e23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43078aa8a807c2f29c8b27a29ded0730f05e8f05d6a8e7de1e2fb8c249e0e23d->enter($__internal_43078aa8a807c2f29c8b27a29ded0730f05e8f05d6a8e7de1e2fb8c249e0e23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e49418f7c1a4718135d7120d0163aa3907b7ae03f5cd43ffbba16eb6a7aff51b->leave($__internal_e49418f7c1a4718135d7120d0163aa3907b7ae03f5cd43ffbba16eb6a7aff51b_prof);

        
        $__internal_43078aa8a807c2f29c8b27a29ded0730f05e8f05d6a8e7de1e2fb8c249e0e23d->leave($__internal_43078aa8a807c2f29c8b27a29ded0730f05e8f05d6a8e7de1e2fb8c249e0e23d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af6e5f5d0acb17ca58975d62ee6840561b1b6158e31ce065b6d8ddfae2530a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6e5f5d0acb17ca58975d62ee6840561b1b6158e31ce065b6d8ddfae2530a85->enter($__internal_af6e5f5d0acb17ca58975d62ee6840561b1b6158e31ce065b6d8ddfae2530a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28eee9ea9e0eeb86dbfaef3651863c90844548a6be43ffdf780f6459e74b8be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eee9ea9e0eeb86dbfaef3651863c90844548a6be43ffdf780f6459e74b8be0->enter($__internal_28eee9ea9e0eeb86dbfaef3651863c90844548a6be43ffdf780f6459e74b8be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_28eee9ea9e0eeb86dbfaef3651863c90844548a6be43ffdf780f6459e74b8be0->leave($__internal_28eee9ea9e0eeb86dbfaef3651863c90844548a6be43ffdf780f6459e74b8be0_prof);

        
        $__internal_af6e5f5d0acb17ca58975d62ee6840561b1b6158e31ce065b6d8ddfae2530a85->leave($__internal_af6e5f5d0acb17ca58975d62ee6840561b1b6158e31ce065b6d8ddfae2530a85_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_010cfa5fcf4004167623615f3689aeb02043697eada8caa7e068d85f5c2308b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010cfa5fcf4004167623615f3689aeb02043697eada8caa7e068d85f5c2308b9->enter($__internal_010cfa5fcf4004167623615f3689aeb02043697eada8caa7e068d85f5c2308b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3cd8be4a090004a9cc52c47f541889e6650c3cf1bb7949cba13a794e6ffdcec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd8be4a090004a9cc52c47f541889e6650c3cf1bb7949cba13a794e6ffdcec9->enter($__internal_3cd8be4a090004a9cc52c47f541889e6650c3cf1bb7949cba13a794e6ffdcec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3cd8be4a090004a9cc52c47f541889e6650c3cf1bb7949cba13a794e6ffdcec9->leave($__internal_3cd8be4a090004a9cc52c47f541889e6650c3cf1bb7949cba13a794e6ffdcec9_prof);

        
        $__internal_010cfa5fcf4004167623615f3689aeb02043697eada8caa7e068d85f5c2308b9->leave($__internal_010cfa5fcf4004167623615f3689aeb02043697eada8caa7e068d85f5c2308b9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_991bdd74c6df5ae6cd999d5e2e8f5dceb8fdfddbc83135752dd4cb1e7e8e277f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991bdd74c6df5ae6cd999d5e2e8f5dceb8fdfddbc83135752dd4cb1e7e8e277f->enter($__internal_991bdd74c6df5ae6cd999d5e2e8f5dceb8fdfddbc83135752dd4cb1e7e8e277f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_563082caea019ba4bfd4f8d83ff005b863df6e1bf00a58a33bd67d3e89ba511e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563082caea019ba4bfd4f8d83ff005b863df6e1bf00a58a33bd67d3e89ba511e->enter($__internal_563082caea019ba4bfd4f8d83ff005b863df6e1bf00a58a33bd67d3e89ba511e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_563082caea019ba4bfd4f8d83ff005b863df6e1bf00a58a33bd67d3e89ba511e->leave($__internal_563082caea019ba4bfd4f8d83ff005b863df6e1bf00a58a33bd67d3e89ba511e_prof);

        
        $__internal_991bdd74c6df5ae6cd999d5e2e8f5dceb8fdfddbc83135752dd4cb1e7e8e277f->leave($__internal_991bdd74c6df5ae6cd999d5e2e8f5dceb8fdfddbc83135752dd4cb1e7e8e277f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\cygwin64\\home\\Okashira\\project\\mini_github\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
