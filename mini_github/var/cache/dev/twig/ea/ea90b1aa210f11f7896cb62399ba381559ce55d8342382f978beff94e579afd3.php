<?php

/* mini_github/commit.twig */
class __TwigTemplate_5cf6fbef00ed78acee945e80b86805c547c9a1e7034b5c28d74f09363450e4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e8cd4ecb9b8e9b5ee585a73252c469e801cdbd04aa39d35a6e38c7d69e381db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8cd4ecb9b8e9b5ee585a73252c469e801cdbd04aa39d35a6e38c7d69e381db->enter($__internal_3e8cd4ecb9b8e9b5ee585a73252c469e801cdbd04aa39d35a6e38c7d69e381db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mini_github/commit.twig"));

        $__internal_d1cecd8bed9086eb55ab93a9157285707c6efea0d63c7956c9d72984825f1a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cecd8bed9086eb55ab93a9157285707c6efea0d63c7956c9d72984825f1a37->enter($__internal_d1cecd8bed9086eb55ab93a9157285707c6efea0d63c7956c9d72984825f1a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mini_github/commit.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    </head>
\t
\t<body>\t
\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start');
        echo "
\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
\t\t\t";
        // line 10
        echo "\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

\t\t<br>
\t\t
\t\t";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["errorMessage"]) ? $context["errorMessage"] : $this->getContext($context, "errorMessage"))) > 0)) {
            // line 15
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessage"]) ? $context["errorMessage"] : $this->getContext($context, "errorMessage")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "\t\t\t\t<span>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</span><br>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t";
        }
        // line 19
        echo "\t\t
\t\t";
        // line 20
        if ((isset($context["isCommit"]) ? $context["isCommit"] : $this->getContext($context, "isCommit"))) {
            // line 21
            echo "\t\t\tCommit effectué !
\t\t";
        }
        // line 23
        echo "\t</body>
</html>";
        
        $__internal_3e8cd4ecb9b8e9b5ee585a73252c469e801cdbd04aa39d35a6e38c7d69e381db->leave($__internal_3e8cd4ecb9b8e9b5ee585a73252c469e801cdbd04aa39d35a6e38c7d69e381db_prof);

        
        $__internal_d1cecd8bed9086eb55ab93a9157285707c6efea0d63c7956c9d72984825f1a37->leave($__internal_d1cecd8bed9086eb55ab93a9157285707c6efea0d63c7956c9d72984825f1a37_prof);

    }

    public function getTemplateName()
    {
        return "mini_github/commit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  73 => 21,  71 => 20,  68 => 19,  65 => 18,  56 => 16,  51 => 15,  49 => 14,  41 => 10,  37 => 8,  33 => 7,  25 => 1,);
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
    </head>
\t
\t<body>\t
\t\t{{ form_start(formulaire) }}
\t\t\t{{ form_widget(formulaire) }}
\t\t\t{# <input type=\"submit\" value=\"Envoyer\"/> #}
\t\t{{ form_end(formulaire) }}

\t\t<br>
\t\t
\t\t{% if errorMessage|length > 0 %}
\t\t\t{% for message in errorMessage %}
\t\t\t\t<span>{{message}}</span><br>
\t\t\t{% endfor %}
\t\t{% endif %}
\t\t
\t\t{% if isCommit %}
\t\t\tCommit effectué !
\t\t{% endif %}
\t</body>
</html>", "mini_github/commit.twig", "C:\\cygwin64\\home\\Okashira\\project\\mini_github\\app\\Resources\\views\\mini_github\\commit.twig");
    }
}
