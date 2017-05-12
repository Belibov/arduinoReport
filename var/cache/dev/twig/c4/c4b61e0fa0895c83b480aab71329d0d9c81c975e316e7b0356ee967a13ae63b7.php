<?php

/* arduinodevice/index.html.twig */
class __TwigTemplate_f51de4e121ff940a33d36fef1c9f5d9e33d88192bd17c2ff2d14c0f5dc04a25b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "arduinodevice/index.html.twig", 1);
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
        $__internal_e82403b327c8efb59d700d99b59a95d7a9ce6e6d5b176cff536d5de4c902f543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82403b327c8efb59d700d99b59a95d7a9ce6e6d5b176cff536d5de4c902f543->enter($__internal_e82403b327c8efb59d700d99b59a95d7a9ce6e6d5b176cff536d5de4c902f543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "arduinodevice/index.html.twig"));

        $__internal_02f562c10f900c53cf29ce0e02416bdf7c3cfb1b910ad0472b568eb5e396fcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f562c10f900c53cf29ce0e02416bdf7c3cfb1b910ad0472b568eb5e396fcbf->enter($__internal_02f562c10f900c53cf29ce0e02416bdf7c3cfb1b910ad0472b568eb5e396fcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "arduinodevice/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e82403b327c8efb59d700d99b59a95d7a9ce6e6d5b176cff536d5de4c902f543->leave($__internal_e82403b327c8efb59d700d99b59a95d7a9ce6e6d5b176cff536d5de4c902f543_prof);

        
        $__internal_02f562c10f900c53cf29ce0e02416bdf7c3cfb1b910ad0472b568eb5e396fcbf->leave($__internal_02f562c10f900c53cf29ce0e02416bdf7c3cfb1b910ad0472b568eb5e396fcbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b3575eb9e0f96b3f6a50bf74cfb928ecb5e882c2070a56276cda44e470f99d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3575eb9e0f96b3f6a50bf74cfb928ecb5e882c2070a56276cda44e470f99d2->enter($__internal_2b3575eb9e0f96b3f6a50bf74cfb928ecb5e882c2070a56276cda44e470f99d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c129005c71998777bc7e9b6d6517efa668b8e7b4ad189166df1bc128cb4b0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c129005c71998777bc7e9b6d6517efa668b8e7b4ad189166df1bc128cb4b0af->enter($__internal_0c129005c71998777bc7e9b6d6517efa668b8e7b4ad189166df1bc128cb4b0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Arduinodevices list</h1>

    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Accesskey</th>
                <th>Temperaturemax</th>
                <th>Temperaturemin</th>
                <th>Alarmed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arduinoDevices"]) || array_key_exists("arduinoDevices", $context) ? $context["arduinoDevices"] : (function () { throw new Twig_Error_Runtime('Variable "arduinoDevices" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arduinoDevice"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arduinodevice_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "accessKey", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "temperatureMax", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "temperatureMin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "alarmed", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arduinodevice_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arduinodevice_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["arduinoDevice"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arduinoDevice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arduinodevice_new");
        echo "\">Create a new arduinoDevice</a>
        </li>
    </ul>
";
        
        $__internal_0c129005c71998777bc7e9b6d6517efa668b8e7b4ad189166df1bc128cb4b0af->leave($__internal_0c129005c71998777bc7e9b6d6517efa668b8e7b4ad189166df1bc128cb4b0af_prof);

        
        $__internal_2b3575eb9e0f96b3f6a50bf74cfb928ecb5e882c2070a56276cda44e470f99d2->leave($__internal_2b3575eb9e0f96b3f6a50bf74cfb928ecb5e882c2070a56276cda44e470f99d2_prof);

    }

    public function getTemplateName()
    {
        return "arduinodevice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  124 => 39,  112 => 33,  106 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Arduinodevices list</h1>

    <table border=\"1\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Accesskey</th>
                <th>Temperaturemax</th>
                <th>Temperaturemin</th>
                <th>Alarmed</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for arduinoDevice in arduinoDevices %}
            <tr>
                <td><a href=\"{{ path('arduinodevice_show', { 'id': arduinoDevice.id }) }}\">{{ arduinoDevice.id }}</a></td>
                <td>{{ arduinoDevice.name }}</td>
                <td>{{ arduinoDevice.accessKey }}</td>
                <td>{{ arduinoDevice.temperatureMax }}</td>
                <td>{{ arduinoDevice.temperatureMin }}</td>
                <td>{% if arduinoDevice.alarmed %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('arduinodevice_show', { 'id': arduinoDevice.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('arduinodevice_edit', { 'id': arduinoDevice.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('arduinodevice_new') }}\">Create a new arduinoDevice</a>
        </li>
    </ul>
{% endblock %}
", "arduinodevice/index.html.twig", "/home/dan/projects/arduino/app/Resources/views/arduinodevice/index.html.twig");
    }
}
