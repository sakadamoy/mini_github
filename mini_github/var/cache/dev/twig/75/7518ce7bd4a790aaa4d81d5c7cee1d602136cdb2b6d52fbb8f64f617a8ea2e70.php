<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53f035135c1260266175d5e8e1ef7a2d22d4d7f5e066b7aa2e703f8c655560d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f035135c1260266175d5e8e1ef7a2d22d4d7f5e066b7aa2e703f8c655560d5->enter($__internal_53f035135c1260266175d5e8e1ef7a2d22d4d7f5e066b7aa2e703f8c655560d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8b61d54ff95a368c22dace5b02dd83f7d99bcb3dd003f869d9f136b1149f3cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b61d54ff95a368c22dace5b02dd83f7d99bcb3dd003f869d9f136b1149f3cf6->enter($__internal_8b61d54ff95a368c22dace5b02dd83f7d99bcb3dd003f869d9f136b1149f3cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_53f035135c1260266175d5e8e1ef7a2d22d4d7f5e066b7aa2e703f8c655560d5->leave($__internal_53f035135c1260266175d5e8e1ef7a2d22d4d7f5e066b7aa2e703f8c655560d5_prof);

        
        $__internal_8b61d54ff95a368c22dace5b02dd83f7d99bcb3dd003f869d9f136b1149f3cf6->leave($__internal_8b61d54ff95a368c22dace5b02dd83f7d99bcb3dd003f869d9f136b1149f3cf6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d56990dfb07bd7f46a7075e75b22ad310ae779878a752955fb37dcf18c85e9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56990dfb07bd7f46a7075e75b22ad310ae779878a752955fb37dcf18c85e9b5->enter($__internal_d56990dfb07bd7f46a7075e75b22ad310ae779878a752955fb37dcf18c85e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29c65fc67f4ea470fb0941053a38e72bd7f01583f67ff6b487026805ef9ce57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c65fc67f4ea470fb0941053a38e72bd7f01583f67ff6b487026805ef9ce57d->enter($__internal_29c65fc67f4ea470fb0941053a38e72bd7f01583f67ff6b487026805ef9ce57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_29c65fc67f4ea470fb0941053a38e72bd7f01583f67ff6b487026805ef9ce57d->leave($__internal_29c65fc67f4ea470fb0941053a38e72bd7f01583f67ff6b487026805ef9ce57d_prof);

        
        $__internal_d56990dfb07bd7f46a7075e75b22ad310ae779878a752955fb37dcf18c85e9b5->leave($__internal_d56990dfb07bd7f46a7075e75b22ad310ae779878a752955fb37dcf18c85e9b5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bfeab74eeb3da794b54e8174378120fe85556ea135b3127fd0ecb937b213e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfeab74eeb3da794b54e8174378120fe85556ea135b3127fd0ecb937b213e0d->enter($__internal_1bfeab74eeb3da794b54e8174378120fe85556ea135b3127fd0ecb937b213e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66afe7fe8177c5fcb4faf40b6754ab6e4a6ab622239b7301bb1d4a7ed03a296a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66afe7fe8177c5fcb4faf40b6754ab6e4a6ab622239b7301bb1d4a7ed03a296a->enter($__internal_66afe7fe8177c5fcb4faf40b6754ab6e4a6ab622239b7301bb1d4a7ed03a296a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_66afe7fe8177c5fcb4faf40b6754ab6e4a6ab622239b7301bb1d4a7ed03a296a->leave($__internal_66afe7fe8177c5fcb4faf40b6754ab6e4a6ab622239b7301bb1d4a7ed03a296a_prof);

        
        $__internal_1bfeab74eeb3da794b54e8174378120fe85556ea135b3127fd0ecb937b213e0d->leave($__internal_1bfeab74eeb3da794b54e8174378120fe85556ea135b3127fd0ecb937b213e0d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_66ba1a31a72b374ce31199de77751317198370051a0122ebb8fdb611737b3ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ba1a31a72b374ce31199de77751317198370051a0122ebb8fdb611737b3ad4->enter($__internal_66ba1a31a72b374ce31199de77751317198370051a0122ebb8fdb611737b3ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36b8fb824281969aa86f154cff4b76fc879b40c24a8c9b22344a49e5b8eed015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b8fb824281969aa86f154cff4b76fc879b40c24a8c9b22344a49e5b8eed015->enter($__internal_36b8fb824281969aa86f154cff4b76fc879b40c24a8c9b22344a49e5b8eed015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36b8fb824281969aa86f154cff4b76fc879b40c24a8c9b22344a49e5b8eed015->leave($__internal_36b8fb824281969aa86f154cff4b76fc879b40c24a8c9b22344a49e5b8eed015_prof);

        
        $__internal_66ba1a31a72b374ce31199de77751317198370051a0122ebb8fdb611737b3ad4->leave($__internal_66ba1a31a72b374ce31199de77751317198370051a0122ebb8fdb611737b3ad4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\cygwin64\\home\\Okashira\\project\\mini_github\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
