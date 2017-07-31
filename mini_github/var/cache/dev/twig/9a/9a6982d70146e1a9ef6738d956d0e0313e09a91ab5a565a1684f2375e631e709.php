<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08eda9fd8f4586963fcd9b6037d2dd27f2cf59667da62654227fb0c8ec97dfd0 extends Twig_Template
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
        $__internal_33ecffe413db503f948dd0af0359891eb3559c83615102f3010547e2a2295647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ecffe413db503f948dd0af0359891eb3559c83615102f3010547e2a2295647->enter($__internal_33ecffe413db503f948dd0af0359891eb3559c83615102f3010547e2a2295647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1d1b67d5eeb005ce9adedc1701f41864fc89bcdf895dab96d32cb8fae2ed0776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1b67d5eeb005ce9adedc1701f41864fc89bcdf895dab96d32cb8fae2ed0776->enter($__internal_1d1b67d5eeb005ce9adedc1701f41864fc89bcdf895dab96d32cb8fae2ed0776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ecffe413db503f948dd0af0359891eb3559c83615102f3010547e2a2295647->leave($__internal_33ecffe413db503f948dd0af0359891eb3559c83615102f3010547e2a2295647_prof);

        
        $__internal_1d1b67d5eeb005ce9adedc1701f41864fc89bcdf895dab96d32cb8fae2ed0776->leave($__internal_1d1b67d5eeb005ce9adedc1701f41864fc89bcdf895dab96d32cb8fae2ed0776_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e06d90b695e6bfa28ebac4aa6174e2df7ad794e23761f9d40d39eeae0435cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e06d90b695e6bfa28ebac4aa6174e2df7ad794e23761f9d40d39eeae0435cad->enter($__internal_4e06d90b695e6bfa28ebac4aa6174e2df7ad794e23761f9d40d39eeae0435cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5318a10b4449f71008b4c6e0d3b6f49f13cab7a11a97feea17ac207bcccc1a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5318a10b4449f71008b4c6e0d3b6f49f13cab7a11a97feea17ac207bcccc1a65->enter($__internal_5318a10b4449f71008b4c6e0d3b6f49f13cab7a11a97feea17ac207bcccc1a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5318a10b4449f71008b4c6e0d3b6f49f13cab7a11a97feea17ac207bcccc1a65->leave($__internal_5318a10b4449f71008b4c6e0d3b6f49f13cab7a11a97feea17ac207bcccc1a65_prof);

        
        $__internal_4e06d90b695e6bfa28ebac4aa6174e2df7ad794e23761f9d40d39eeae0435cad->leave($__internal_4e06d90b695e6bfa28ebac4aa6174e2df7ad794e23761f9d40d39eeae0435cad_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_932b51166ca494647ae4c78d13b14cddd3227f8d35f2aaa29874db5d4ca03298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932b51166ca494647ae4c78d13b14cddd3227f8d35f2aaa29874db5d4ca03298->enter($__internal_932b51166ca494647ae4c78d13b14cddd3227f8d35f2aaa29874db5d4ca03298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb0fb53659d2d800f87d8940729cde7187508820a200eca9394476d61c17429c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0fb53659d2d800f87d8940729cde7187508820a200eca9394476d61c17429c->enter($__internal_eb0fb53659d2d800f87d8940729cde7187508820a200eca9394476d61c17429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb0fb53659d2d800f87d8940729cde7187508820a200eca9394476d61c17429c->leave($__internal_eb0fb53659d2d800f87d8940729cde7187508820a200eca9394476d61c17429c_prof);

        
        $__internal_932b51166ca494647ae4c78d13b14cddd3227f8d35f2aaa29874db5d4ca03298->leave($__internal_932b51166ca494647ae4c78d13b14cddd3227f8d35f2aaa29874db5d4ca03298_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_31d4dc67be6260e7e2a47a5c28e4c926bd3abf2b27536522f3896e6bec6d8d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d4dc67be6260e7e2a47a5c28e4c926bd3abf2b27536522f3896e6bec6d8d72->enter($__internal_31d4dc67be6260e7e2a47a5c28e4c926bd3abf2b27536522f3896e6bec6d8d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4cfe85805cc605c7f1912a9ecc21756b2ab8e472eabf6cb8e59b2896f647d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cfe85805cc605c7f1912a9ecc21756b2ab8e472eabf6cb8e59b2896f647d94->enter($__internal_f4cfe85805cc605c7f1912a9ecc21756b2ab8e472eabf6cb8e59b2896f647d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f4cfe85805cc605c7f1912a9ecc21756b2ab8e472eabf6cb8e59b2896f647d94->leave($__internal_f4cfe85805cc605c7f1912a9ecc21756b2ab8e472eabf6cb8e59b2896f647d94_prof);

        
        $__internal_31d4dc67be6260e7e2a47a5c28e4c926bd3abf2b27536522f3896e6bec6d8d72->leave($__internal_31d4dc67be6260e7e2a47a5c28e4c926bd3abf2b27536522f3896e6bec6d8d72_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\cygwin64\\home\\Okashira\\project\\mini_github\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
