<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
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
        $__internal_839b1ad55390a3ff7b020766b7053054dda89447f5c88187bf058cf4369aa826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839b1ad55390a3ff7b020766b7053054dda89447f5c88187bf058cf4369aa826->enter($__internal_839b1ad55390a3ff7b020766b7053054dda89447f5c88187bf058cf4369aa826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cb28825d18688c2940c855761cde7657f9ec785d7adc7862752fed1b88691d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb28825d18688c2940c855761cde7657f9ec785d7adc7862752fed1b88691d49->enter($__internal_cb28825d18688c2940c855761cde7657f9ec785d7adc7862752fed1b88691d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_839b1ad55390a3ff7b020766b7053054dda89447f5c88187bf058cf4369aa826->leave($__internal_839b1ad55390a3ff7b020766b7053054dda89447f5c88187bf058cf4369aa826_prof);

        
        $__internal_cb28825d18688c2940c855761cde7657f9ec785d7adc7862752fed1b88691d49->leave($__internal_cb28825d18688c2940c855761cde7657f9ec785d7adc7862752fed1b88691d49_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11e9478f66db1cb6434ad67ca82eb6d950dfd85f95b165a98292eeee3953d386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e9478f66db1cb6434ad67ca82eb6d950dfd85f95b165a98292eeee3953d386->enter($__internal_11e9478f66db1cb6434ad67ca82eb6d950dfd85f95b165a98292eeee3953d386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6052ee7c876e0fa77e66cdd255badd461ae00885aeec1d0b88f70bee080169cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6052ee7c876e0fa77e66cdd255badd461ae00885aeec1d0b88f70bee080169cd->enter($__internal_6052ee7c876e0fa77e66cdd255badd461ae00885aeec1d0b88f70bee080169cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6052ee7c876e0fa77e66cdd255badd461ae00885aeec1d0b88f70bee080169cd->leave($__internal_6052ee7c876e0fa77e66cdd255badd461ae00885aeec1d0b88f70bee080169cd_prof);

        
        $__internal_11e9478f66db1cb6434ad67ca82eb6d950dfd85f95b165a98292eeee3953d386->leave($__internal_11e9478f66db1cb6434ad67ca82eb6d950dfd85f95b165a98292eeee3953d386_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c4c4c73d966349d33beefb3023cec32e8bb0b866063c133ba88635098f0a9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4c4c73d966349d33beefb3023cec32e8bb0b866063c133ba88635098f0a9c5->enter($__internal_5c4c4c73d966349d33beefb3023cec32e8bb0b866063c133ba88635098f0a9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5dbea2b363aa1045f4559bbf177209e01502e9453f3819fa64d42bd1a1c3df29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbea2b363aa1045f4559bbf177209e01502e9453f3819fa64d42bd1a1c3df29->enter($__internal_5dbea2b363aa1045f4559bbf177209e01502e9453f3819fa64d42bd1a1c3df29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5dbea2b363aa1045f4559bbf177209e01502e9453f3819fa64d42bd1a1c3df29->leave($__internal_5dbea2b363aa1045f4559bbf177209e01502e9453f3819fa64d42bd1a1c3df29_prof);

        
        $__internal_5c4c4c73d966349d33beefb3023cec32e8bb0b866063c133ba88635098f0a9c5->leave($__internal_5c4c4c73d966349d33beefb3023cec32e8bb0b866063c133ba88635098f0a9c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8ef4d7a4f1f9a8ea144bef1072e62ae3c918706d65cfd3b62b530cc43a2d81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ef4d7a4f1f9a8ea144bef1072e62ae3c918706d65cfd3b62b530cc43a2d81a->enter($__internal_e8ef4d7a4f1f9a8ea144bef1072e62ae3c918706d65cfd3b62b530cc43a2d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_072c40f84b3b1f3593c12f7ac4e9659e3f13a12a8e67d8b46ad4115e801f7f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072c40f84b3b1f3593c12f7ac4e9659e3f13a12a8e67d8b46ad4115e801f7f0d->enter($__internal_072c40f84b3b1f3593c12f7ac4e9659e3f13a12a8e67d8b46ad4115e801f7f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_072c40f84b3b1f3593c12f7ac4e9659e3f13a12a8e67d8b46ad4115e801f7f0d->leave($__internal_072c40f84b3b1f3593c12f7ac4e9659e3f13a12a8e67d8b46ad4115e801f7f0d_prof);

        
        $__internal_e8ef4d7a4f1f9a8ea144bef1072e62ae3c918706d65cfd3b62b530cc43a2d81a->leave($__internal_e8ef4d7a4f1f9a8ea144bef1072e62ae3c918706d65cfd3b62b530cc43a2d81a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b28ee4299a69466a958c6077ae4712affa06b8bf64e70e052b5ca71afa587ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b28ee4299a69466a958c6077ae4712affa06b8bf64e70e052b5ca71afa587ff->enter($__internal_1b28ee4299a69466a958c6077ae4712affa06b8bf64e70e052b5ca71afa587ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_697f41f7b883525534a7871416b15601f716e124b85405cc721dcd1d5be9a1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697f41f7b883525534a7871416b15601f716e124b85405cc721dcd1d5be9a1c9->enter($__internal_697f41f7b883525534a7871416b15601f716e124b85405cc721dcd1d5be9a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_697f41f7b883525534a7871416b15601f716e124b85405cc721dcd1d5be9a1c9->leave($__internal_697f41f7b883525534a7871416b15601f716e124b85405cc721dcd1d5be9a1c9_prof);

        
        $__internal_1b28ee4299a69466a958c6077ae4712affa06b8bf64e70e052b5ca71afa587ff->leave($__internal_1b28ee4299a69466a958c6077ae4712affa06b8bf64e70e052b5ca71afa587ff_prof);

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
", "base.html.twig", "C:\\cygwin64\\home\\Okashira\\project\\mini_github\\app\\Resources\\views\\base.html.twig");
    }
}
