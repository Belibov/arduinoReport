<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2fb77542c6772bb2529a5ead5e73eec3e4ab666fa172210c3434beea8d68eccb extends Twig_Template
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
        $__internal_c27b709e590162c3ff13a1e39288771f9a81f6af139f7ce79b09c5c8782b07cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27b709e590162c3ff13a1e39288771f9a81f6af139f7ce79b09c5c8782b07cb->enter($__internal_c27b709e590162c3ff13a1e39288771f9a81f6af139f7ce79b09c5c8782b07cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2f326cf4d2962b040e9458a4d10b781b24f7bfeca43d2d7ef10cd577011571c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f326cf4d2962b040e9458a4d10b781b24f7bfeca43d2d7ef10cd577011571c1->enter($__internal_2f326cf4d2962b040e9458a4d10b781b24f7bfeca43d2d7ef10cd577011571c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c27b709e590162c3ff13a1e39288771f9a81f6af139f7ce79b09c5c8782b07cb->leave($__internal_c27b709e590162c3ff13a1e39288771f9a81f6af139f7ce79b09c5c8782b07cb_prof);

        
        $__internal_2f326cf4d2962b040e9458a4d10b781b24f7bfeca43d2d7ef10cd577011571c1->leave($__internal_2f326cf4d2962b040e9458a4d10b781b24f7bfeca43d2d7ef10cd577011571c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/dan/projects/arduino/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
