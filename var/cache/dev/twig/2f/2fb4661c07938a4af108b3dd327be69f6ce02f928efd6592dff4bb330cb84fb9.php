<?php

/* arduinodevice/edit.html.twig */
class __TwigTemplate_f7b26fd05c81e93ff620a1c40fdad1a68616d256d5d99599ef471b475e0b7d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "arduinodevice/edit.html.twig", 1);
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
        $__internal_9361b2d91290e7cd2640b73e2cc1d07ec38995bc07a6a6b93ec1a3ac95b9b4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9361b2d91290e7cd2640b73e2cc1d07ec38995bc07a6a6b93ec1a3ac95b9b4f4->enter($__internal_9361b2d91290e7cd2640b73e2cc1d07ec38995bc07a6a6b93ec1a3ac95b9b4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "arduinodevice/edit.html.twig"));

        $__internal_f91cd64eee9dbad1e7d340ade0c4c1ef695a0237b2139f9a217441fafa70c16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91cd64eee9dbad1e7d340ade0c4c1ef695a0237b2139f9a217441fafa70c16e->enter($__internal_f91cd64eee9dbad1e7d340ade0c4c1ef695a0237b2139f9a217441fafa70c16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "arduinodevice/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9361b2d91290e7cd2640b73e2cc1d07ec38995bc07a6a6b93ec1a3ac95b9b4f4->leave($__internal_9361b2d91290e7cd2640b73e2cc1d07ec38995bc07a6a6b93ec1a3ac95b9b4f4_prof);

        
        $__internal_f91cd64eee9dbad1e7d340ade0c4c1ef695a0237b2139f9a217441fafa70c16e->leave($__internal_f91cd64eee9dbad1e7d340ade0c4c1ef695a0237b2139f9a217441fafa70c16e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11314fafa2f7c6f5a806a904c016fcc661fdfe4aa477e500d88e9c158814942e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11314fafa2f7c6f5a806a904c016fcc661fdfe4aa477e500d88e9c158814942e->enter($__internal_11314fafa2f7c6f5a806a904c016fcc661fdfe4aa477e500d88e9c158814942e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_919acbd348bc40f9efcff54871a03b5eff3f5bc3cd717e646f0b8c688ff7ac20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919acbd348bc40f9efcff54871a03b5eff3f5bc3cd717e646f0b8c688ff7ac20->enter($__internal_919acbd348bc40f9efcff54871a03b5eff3f5bc3cd717e646f0b8c688ff7ac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Arduinodevice edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("arduinodevice_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_919acbd348bc40f9efcff54871a03b5eff3f5bc3cd717e646f0b8c688ff7ac20->leave($__internal_919acbd348bc40f9efcff54871a03b5eff3f5bc3cd717e646f0b8c688ff7ac20_prof);

        
        $__internal_11314fafa2f7c6f5a806a904c016fcc661fdfe4aa477e500d88e9c158814942e->leave($__internal_11314fafa2f7c6f5a806a904c016fcc661fdfe4aa477e500d88e9c158814942e_prof);

    }

    public function getTemplateName()
    {
        return "arduinodevice/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Arduinodevice edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('arduinodevice_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "arduinodevice/edit.html.twig", "/home/dan/projects/arduino/app/Resources/views/arduinodevice/edit.html.twig");
    }
}
