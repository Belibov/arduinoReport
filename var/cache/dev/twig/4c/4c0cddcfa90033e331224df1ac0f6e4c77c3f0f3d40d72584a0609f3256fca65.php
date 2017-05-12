<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48bea09ebd00fb56f2a8703429db06968d6a07e8f872d1042d9213fcdeca6e03 extends Twig_Template
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
        $__internal_22cbb5972a1667108d3ec8641bc5c8984b20777c74b71387777d498fec04ef1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cbb5972a1667108d3ec8641bc5c8984b20777c74b71387777d498fec04ef1c->enter($__internal_22cbb5972a1667108d3ec8641bc5c8984b20777c74b71387777d498fec04ef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3025246231fac7fe465f6bcf35fd6f2946c26e0b620bfa63e831d060f69f0b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3025246231fac7fe465f6bcf35fd6f2946c26e0b620bfa63e831d060f69f0b1a->enter($__internal_3025246231fac7fe465f6bcf35fd6f2946c26e0b620bfa63e831d060f69f0b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22cbb5972a1667108d3ec8641bc5c8984b20777c74b71387777d498fec04ef1c->leave($__internal_22cbb5972a1667108d3ec8641bc5c8984b20777c74b71387777d498fec04ef1c_prof);

        
        $__internal_3025246231fac7fe465f6bcf35fd6f2946c26e0b620bfa63e831d060f69f0b1a->leave($__internal_3025246231fac7fe465f6bcf35fd6f2946c26e0b620bfa63e831d060f69f0b1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ed2e1df924e9a17c4aa4b8474d3fc8c71c416ed0ec4349c3ec95bf5042b3bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed2e1df924e9a17c4aa4b8474d3fc8c71c416ed0ec4349c3ec95bf5042b3bd1->enter($__internal_6ed2e1df924e9a17c4aa4b8474d3fc8c71c416ed0ec4349c3ec95bf5042b3bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db6798781304e73a5e0e82342302ea544649576567a8bbd820fc3b65b8a82e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6798781304e73a5e0e82342302ea544649576567a8bbd820fc3b65b8a82e19->enter($__internal_db6798781304e73a5e0e82342302ea544649576567a8bbd820fc3b65b8a82e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_db6798781304e73a5e0e82342302ea544649576567a8bbd820fc3b65b8a82e19->leave($__internal_db6798781304e73a5e0e82342302ea544649576567a8bbd820fc3b65b8a82e19_prof);

        
        $__internal_6ed2e1df924e9a17c4aa4b8474d3fc8c71c416ed0ec4349c3ec95bf5042b3bd1->leave($__internal_6ed2e1df924e9a17c4aa4b8474d3fc8c71c416ed0ec4349c3ec95bf5042b3bd1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_301e9f6132a7632108b50ef39a671f93ce0ad4a963d6bacacd0a2014c7f3c6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301e9f6132a7632108b50ef39a671f93ce0ad4a963d6bacacd0a2014c7f3c6e7->enter($__internal_301e9f6132a7632108b50ef39a671f93ce0ad4a963d6bacacd0a2014c7f3c6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_864804cd7c29503ce28c616b2c9d37f49691fc5a8fc95847d23927d3af908a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864804cd7c29503ce28c616b2c9d37f49691fc5a8fc95847d23927d3af908a4a->enter($__internal_864804cd7c29503ce28c616b2c9d37f49691fc5a8fc95847d23927d3af908a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_864804cd7c29503ce28c616b2c9d37f49691fc5a8fc95847d23927d3af908a4a->leave($__internal_864804cd7c29503ce28c616b2c9d37f49691fc5a8fc95847d23927d3af908a4a_prof);

        
        $__internal_301e9f6132a7632108b50ef39a671f93ce0ad4a963d6bacacd0a2014c7f3c6e7->leave($__internal_301e9f6132a7632108b50ef39a671f93ce0ad4a963d6bacacd0a2014c7f3c6e7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddf3b8f30a0261b370e3b92812dcc049b4192c97c2094fd257e49c33327a6685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf3b8f30a0261b370e3b92812dcc049b4192c97c2094fd257e49c33327a6685->enter($__internal_ddf3b8f30a0261b370e3b92812dcc049b4192c97c2094fd257e49c33327a6685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bef293180e98fca913dcae64a8e7deb950f026f591f3e86d5a7ca85721959fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef293180e98fca913dcae64a8e7deb950f026f591f3e86d5a7ca85721959fde->enter($__internal_bef293180e98fca913dcae64a8e7deb950f026f591f3e86d5a7ca85721959fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_bef293180e98fca913dcae64a8e7deb950f026f591f3e86d5a7ca85721959fde->leave($__internal_bef293180e98fca913dcae64a8e7deb950f026f591f3e86d5a7ca85721959fde_prof);

        
        $__internal_ddf3b8f30a0261b370e3b92812dcc049b4192c97c2094fd257e49c33327a6685->leave($__internal_ddf3b8f30a0261b370e3b92812dcc049b4192c97c2094fd257e49c33327a6685_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/dan/projects/arduino/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
