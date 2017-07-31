<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
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
        $__internal_9b1ef735bad90e6af787e94d6e1ab6ef3c751f8069cb79a8b14c48350e32bd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1ef735bad90e6af787e94d6e1ab6ef3c751f8069cb79a8b14c48350e32bd06->enter($__internal_9b1ef735bad90e6af787e94d6e1ab6ef3c751f8069cb79a8b14c48350e32bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b1511d559b9adcd44425389c0832c4f500ca7b1213db77e5032ea19eef997c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1511d559b9adcd44425389c0832c4f500ca7b1213db77e5032ea19eef997c2e->enter($__internal_b1511d559b9adcd44425389c0832c4f500ca7b1213db77e5032ea19eef997c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1ef735bad90e6af787e94d6e1ab6ef3c751f8069cb79a8b14c48350e32bd06->leave($__internal_9b1ef735bad90e6af787e94d6e1ab6ef3c751f8069cb79a8b14c48350e32bd06_prof);

        
        $__internal_b1511d559b9adcd44425389c0832c4f500ca7b1213db77e5032ea19eef997c2e->leave($__internal_b1511d559b9adcd44425389c0832c4f500ca7b1213db77e5032ea19eef997c2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbcd985b103a1c402786cebddf7cb021fa51a3367bbe487939a1499282e6cc53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcd985b103a1c402786cebddf7cb021fa51a3367bbe487939a1499282e6cc53->enter($__internal_bbcd985b103a1c402786cebddf7cb021fa51a3367bbe487939a1499282e6cc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c7449fb4b855b9a43b56df07978e34491f66c012601274a5aa674d52f823268e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7449fb4b855b9a43b56df07978e34491f66c012601274a5aa674d52f823268e->enter($__internal_c7449fb4b855b9a43b56df07978e34491f66c012601274a5aa674d52f823268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7449fb4b855b9a43b56df07978e34491f66c012601274a5aa674d52f823268e->leave($__internal_c7449fb4b855b9a43b56df07978e34491f66c012601274a5aa674d52f823268e_prof);

        
        $__internal_bbcd985b103a1c402786cebddf7cb021fa51a3367bbe487939a1499282e6cc53->leave($__internal_bbcd985b103a1c402786cebddf7cb021fa51a3367bbe487939a1499282e6cc53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9d0cce28cf68587d74a4dbecf00473b0bdc49807bcff33aca992a786802313b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d0cce28cf68587d74a4dbecf00473b0bdc49807bcff33aca992a786802313b->enter($__internal_e9d0cce28cf68587d74a4dbecf00473b0bdc49807bcff33aca992a786802313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3de884d8da4535a175d37b00453bef7085be186f1b9ff8c83d5609b7e46e019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3de884d8da4535a175d37b00453bef7085be186f1b9ff8c83d5609b7e46e019->enter($__internal_e3de884d8da4535a175d37b00453bef7085be186f1b9ff8c83d5609b7e46e019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3de884d8da4535a175d37b00453bef7085be186f1b9ff8c83d5609b7e46e019->leave($__internal_e3de884d8da4535a175d37b00453bef7085be186f1b9ff8c83d5609b7e46e019_prof);

        
        $__internal_e9d0cce28cf68587d74a4dbecf00473b0bdc49807bcff33aca992a786802313b->leave($__internal_e9d0cce28cf68587d74a4dbecf00473b0bdc49807bcff33aca992a786802313b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00dd8595d70413e8dd832f10bcfd9467712b4cdb0c2a3e4e08f977efad4afba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00dd8595d70413e8dd832f10bcfd9467712b4cdb0c2a3e4e08f977efad4afba8->enter($__internal_00dd8595d70413e8dd832f10bcfd9467712b4cdb0c2a3e4e08f977efad4afba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce725a1b91e4ba35faa02d1fa81e3667b7372b91fbf99ee8c7b2ab37064cef77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce725a1b91e4ba35faa02d1fa81e3667b7372b91fbf99ee8c7b2ab37064cef77->enter($__internal_ce725a1b91e4ba35faa02d1fa81e3667b7372b91fbf99ee8c7b2ab37064cef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce725a1b91e4ba35faa02d1fa81e3667b7372b91fbf99ee8c7b2ab37064cef77->leave($__internal_ce725a1b91e4ba35faa02d1fa81e3667b7372b91fbf99ee8c7b2ab37064cef77_prof);

        
        $__internal_00dd8595d70413e8dd832f10bcfd9467712b4cdb0c2a3e4e08f977efad4afba8->leave($__internal_00dd8595d70413e8dd832f10bcfd9467712b4cdb0c2a3e4e08f977efad4afba8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\cygwin64\\home\\Okashira\\project\\mini_github\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
