<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e1f7c4110a8589269679854d36d1778cd00a056ff70f139ab1fffed6dcf0c96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_695fd1c87f875a25d5631c112c1db33af6b8dfa7ecfd6ec20a4040db7f6de056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695fd1c87f875a25d5631c112c1db33af6b8dfa7ecfd6ec20a4040db7f6de056->enter($__internal_695fd1c87f875a25d5631c112c1db33af6b8dfa7ecfd6ec20a4040db7f6de056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9a35be868012fb4bf7ee0122f62cc95beb2a4b6e3f407c6fb70206aea32f91c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a35be868012fb4bf7ee0122f62cc95beb2a4b6e3f407c6fb70206aea32f91c9->enter($__internal_9a35be868012fb4bf7ee0122f62cc95beb2a4b6e3f407c6fb70206aea32f91c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_695fd1c87f875a25d5631c112c1db33af6b8dfa7ecfd6ec20a4040db7f6de056->leave($__internal_695fd1c87f875a25d5631c112c1db33af6b8dfa7ecfd6ec20a4040db7f6de056_prof);

        
        $__internal_9a35be868012fb4bf7ee0122f62cc95beb2a4b6e3f407c6fb70206aea32f91c9->leave($__internal_9a35be868012fb4bf7ee0122f62cc95beb2a4b6e3f407c6fb70206aea32f91c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2f001feae5e6f89f45eb59c81b1b48936698fab5dbc2ab887c295d9b7cd45ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f001feae5e6f89f45eb59c81b1b48936698fab5dbc2ab887c295d9b7cd45ac->enter($__internal_a2f001feae5e6f89f45eb59c81b1b48936698fab5dbc2ab887c295d9b7cd45ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c05ee21ad60068b087add0cf9c90ce57d87f4bbda6f9a68e34ee76efa333076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c05ee21ad60068b087add0cf9c90ce57d87f4bbda6f9a68e34ee76efa333076->enter($__internal_3c05ee21ad60068b087add0cf9c90ce57d87f4bbda6f9a68e34ee76efa333076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3c05ee21ad60068b087add0cf9c90ce57d87f4bbda6f9a68e34ee76efa333076->leave($__internal_3c05ee21ad60068b087add0cf9c90ce57d87f4bbda6f9a68e34ee76efa333076_prof);

        
        $__internal_a2f001feae5e6f89f45eb59c81b1b48936698fab5dbc2ab887c295d9b7cd45ac->leave($__internal_a2f001feae5e6f89f45eb59c81b1b48936698fab5dbc2ab887c295d9b7cd45ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\cygwin64\\home\\Okashira\\project\\mini_github\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
