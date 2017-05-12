<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea1eba626b721d5f2f2b54b1e4a553c84fdc8f20c6305b61e40a9951a6d8df25 extends Twig_Template
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
        $__internal_1373dd6680199a67a16e0251b2a11333aa64c909e09305b31801ac5ee61071a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1373dd6680199a67a16e0251b2a11333aa64c909e09305b31801ac5ee61071a4->enter($__internal_1373dd6680199a67a16e0251b2a11333aa64c909e09305b31801ac5ee61071a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_932710383eb9261304a77b0b62c70a19ceb0ec8c359d7125404da5c598a29a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932710383eb9261304a77b0b62c70a19ceb0ec8c359d7125404da5c598a29a51->enter($__internal_932710383eb9261304a77b0b62c70a19ceb0ec8c359d7125404da5c598a29a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1373dd6680199a67a16e0251b2a11333aa64c909e09305b31801ac5ee61071a4->leave($__internal_1373dd6680199a67a16e0251b2a11333aa64c909e09305b31801ac5ee61071a4_prof);

        
        $__internal_932710383eb9261304a77b0b62c70a19ceb0ec8c359d7125404da5c598a29a51->leave($__internal_932710383eb9261304a77b0b62c70a19ceb0ec8c359d7125404da5c598a29a51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5ef9ec69b8ef493bee02d7e977076b245b19193f2172d96b71a281c0d1b189a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ef9ec69b8ef493bee02d7e977076b245b19193f2172d96b71a281c0d1b189a->enter($__internal_f5ef9ec69b8ef493bee02d7e977076b245b19193f2172d96b71a281c0d1b189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc64e8a3a7bf4de21b081209731f6d133ff108ae8545e7a6349aeebe323185c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc64e8a3a7bf4de21b081209731f6d133ff108ae8545e7a6349aeebe323185c6->enter($__internal_fc64e8a3a7bf4de21b081209731f6d133ff108ae8545e7a6349aeebe323185c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc64e8a3a7bf4de21b081209731f6d133ff108ae8545e7a6349aeebe323185c6->leave($__internal_fc64e8a3a7bf4de21b081209731f6d133ff108ae8545e7a6349aeebe323185c6_prof);

        
        $__internal_f5ef9ec69b8ef493bee02d7e977076b245b19193f2172d96b71a281c0d1b189a->leave($__internal_f5ef9ec69b8ef493bee02d7e977076b245b19193f2172d96b71a281c0d1b189a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9819ec1a3bbe338815c3c242cadcca40ae57881f1f3ffe32c1053da573a6868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9819ec1a3bbe338815c3c242cadcca40ae57881f1f3ffe32c1053da573a6868->enter($__internal_e9819ec1a3bbe338815c3c242cadcca40ae57881f1f3ffe32c1053da573a6868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_855c9a88cdc96096d846843ef2c2ddde2896276106531a1fb284f0e25c4a4249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855c9a88cdc96096d846843ef2c2ddde2896276106531a1fb284f0e25c4a4249->enter($__internal_855c9a88cdc96096d846843ef2c2ddde2896276106531a1fb284f0e25c4a4249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_855c9a88cdc96096d846843ef2c2ddde2896276106531a1fb284f0e25c4a4249->leave($__internal_855c9a88cdc96096d846843ef2c2ddde2896276106531a1fb284f0e25c4a4249_prof);

        
        $__internal_e9819ec1a3bbe338815c3c242cadcca40ae57881f1f3ffe32c1053da573a6868->leave($__internal_e9819ec1a3bbe338815c3c242cadcca40ae57881f1f3ffe32c1053da573a6868_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7df6d3b30791111144d98ad34d7b5903a1c4ac5a1f2da7d7913e27e3bf1127b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7df6d3b30791111144d98ad34d7b5903a1c4ac5a1f2da7d7913e27e3bf1127b->enter($__internal_c7df6d3b30791111144d98ad34d7b5903a1c4ac5a1f2da7d7913e27e3bf1127b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65dc46ff90cb863e8a5b94242d554e554c8bcb2eb0cd1008f330c3d52ca87877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dc46ff90cb863e8a5b94242d554e554c8bcb2eb0cd1008f330c3d52ca87877->enter($__internal_65dc46ff90cb863e8a5b94242d554e554c8bcb2eb0cd1008f330c3d52ca87877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_65dc46ff90cb863e8a5b94242d554e554c8bcb2eb0cd1008f330c3d52ca87877->leave($__internal_65dc46ff90cb863e8a5b94242d554e554c8bcb2eb0cd1008f330c3d52ca87877_prof);

        
        $__internal_c7df6d3b30791111144d98ad34d7b5903a1c4ac5a1f2da7d7913e27e3bf1127b->leave($__internal_c7df6d3b30791111144d98ad34d7b5903a1c4ac5a1f2da7d7913e27e3bf1127b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/dan/projects/arduino/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
