<?php

/* data/data.html.twig */
class __TwigTemplate_12902226ddf8d70204080b287e3c08b5a5fc719ba74e07e701164deadff10445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "data/data.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ab4c68b8999f035558a03872c85e30e4b79062dd5724d3c11e8a2b015f87c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab4c68b8999f035558a03872c85e30e4b79062dd5724d3c11e8a2b015f87c44->enter($__internal_1ab4c68b8999f035558a03872c85e30e4b79062dd5724d3c11e8a2b015f87c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/data.html.twig"));

        $__internal_5da75518e6b4297705088fca478d4af39cd3b43a55bff5e4b9d4eda00ab3a756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da75518e6b4297705088fca478d4af39cd3b43a55bff5e4b9d4eda00ab3a756->enter($__internal_5da75518e6b4297705088fca478d4af39cd3b43a55bff5e4b9d4eda00ab3a756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/data.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ab4c68b8999f035558a03872c85e30e4b79062dd5724d3c11e8a2b015f87c44->leave($__internal_1ab4c68b8999f035558a03872c85e30e4b79062dd5724d3c11e8a2b015f87c44_prof);

        
        $__internal_5da75518e6b4297705088fca478d4af39cd3b43a55bff5e4b9d4eda00ab3a756->leave($__internal_5da75518e6b4297705088fca478d4af39cd3b43a55bff5e4b9d4eda00ab3a756_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e747445f7f5c8db9299dc9bd1b69d6bf244a47b549a07846b619f348c9ad0aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e747445f7f5c8db9299dc9bd1b69d6bf244a47b549a07846b619f348c9ad0aa3->enter($__internal_e747445f7f5c8db9299dc9bd1b69d6bf244a47b549a07846b619f348c9ad0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a91369237af730dd5034316212ff3535d6a819e67c70df4185c4d8359cd2395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a91369237af730dd5034316212ff3535d6a819e67c70df4185c4d8359cd2395->enter($__internal_0a91369237af730dd5034316212ff3535d6a819e67c70df4185c4d8359cd2395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Data from ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Real Feel</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["temperatures"]) || array_key_exists("temperatures", $context) ? $context["temperatures"] : (function () { throw new Twig_Error_Runtime('Variable "temperatures" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["temperature"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["temperature"], "temperature", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["temperature"], "humidity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["temperature"], "feeledTemperature", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["temperature"], "time", array()), "m/d/Y H:i:s"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temperature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Sound</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sounds"]) || array_key_exists("sounds", $context) ? $context["sounds"] : (function () { throw new Twig_Error_Runtime('Variable "sounds" does not exist.', 35, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sound"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sound"], "sound", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["sound"], "time", array()), "m/d/Y H:i:s"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sound'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Movement</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movements"]) || array_key_exists("movements", $context) ? $context["movements"] : (function () { throw new Twig_Error_Runtime('Variable "movements" does not exist.', 52, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["move"]) {
            // line 53
            echo "            <tr>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["move"], "movement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["move"], "time", array()), "m/d/Y H:i:s"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['move'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

";
        
        $__internal_0a91369237af730dd5034316212ff3535d6a819e67c70df4185c4d8359cd2395->leave($__internal_0a91369237af730dd5034316212ff3535d6a819e67c70df4185c4d8359cd2395_prof);

        
        $__internal_e747445f7f5c8db9299dc9bd1b69d6bf244a47b549a07846b619f348c9ad0aa3->leave($__internal_e747445f7f5c8db9299dc9bd1b69d6bf244a47b549a07846b619f348c9ad0aa3_prof);

    }

    public function getTemplateName()
    {
        return "data/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  150 => 55,  146 => 54,  143 => 53,  139 => 52,  126 => 41,  117 => 38,  113 => 37,  110 => 36,  106 => 35,  93 => 24,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  65 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Data from {{ name }}</h1>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Real Feel</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        {% for temperature in temperatures %}
            <tr>
                <td>{{ temperature.temperature }}</td>
                <td>{{ temperature.humidity }}</td>
                <td>{{ temperature.feeledTemperature }}</td>
                <td>{{ temperature.time|date(\"m/d/Y H:i:s\") }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Sound</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        {% for sound in sounds %}
            <tr>
                <td>{{ sound.sound }}</td>
                <td>{{ sound.time|date(\"m/d/Y H:i:s\") }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <table border=\"1\">
        <thead>
        <tr>
            <th>Movement</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        {% for move in movements %}
            <tr>
                <td>{{ move.movement }}</td>
                <td>{{ move.time|date(\"m/d/Y H:i:s\") }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "data/data.html.twig", "/home/dan/projects/arduino/app/Resources/views/data/data.html.twig");
    }
}
