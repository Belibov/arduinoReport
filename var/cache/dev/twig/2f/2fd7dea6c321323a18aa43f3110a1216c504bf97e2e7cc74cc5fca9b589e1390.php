<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8edf4c7bd80c75d96468d429edbb8cc73d961580ddd9ee269f332f79ca9191c7 extends Twig_Template
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
        $__internal_aa3e504583ad07888b0545cdd4980ae0ec66013f27f7131f2396842e2fa82c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3e504583ad07888b0545cdd4980ae0ec66013f27f7131f2396842e2fa82c66->enter($__internal_aa3e504583ad07888b0545cdd4980ae0ec66013f27f7131f2396842e2fa82c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5742cb34582c4daf6bd1d7238e8cb51c985c48ec26ab52bf24de121de16f5d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5742cb34582c4daf6bd1d7238e8cb51c985c48ec26ab52bf24de121de16f5d47->enter($__internal_5742cb34582c4daf6bd1d7238e8cb51c985c48ec26ab52bf24de121de16f5d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa3e504583ad07888b0545cdd4980ae0ec66013f27f7131f2396842e2fa82c66->leave($__internal_aa3e504583ad07888b0545cdd4980ae0ec66013f27f7131f2396842e2fa82c66_prof);

        
        $__internal_5742cb34582c4daf6bd1d7238e8cb51c985c48ec26ab52bf24de121de16f5d47->leave($__internal_5742cb34582c4daf6bd1d7238e8cb51c985c48ec26ab52bf24de121de16f5d47_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba1be706e0aaa5f20b4b66d37c1ad45b918973b6083af216613bd67698ae0d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba1be706e0aaa5f20b4b66d37c1ad45b918973b6083af216613bd67698ae0d3a->enter($__internal_ba1be706e0aaa5f20b4b66d37c1ad45b918973b6083af216613bd67698ae0d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b9e0eba5fece59f1b60222ed6fd19521c550c62da5a9be2065af1bb606dd69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9e0eba5fece59f1b60222ed6fd19521c550c62da5a9be2065af1bb606dd69c->enter($__internal_8b9e0eba5fece59f1b60222ed6fd19521c550c62da5a9be2065af1bb606dd69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8b9e0eba5fece59f1b60222ed6fd19521c550c62da5a9be2065af1bb606dd69c->leave($__internal_8b9e0eba5fece59f1b60222ed6fd19521c550c62da5a9be2065af1bb606dd69c_prof);

        
        $__internal_ba1be706e0aaa5f20b4b66d37c1ad45b918973b6083af216613bd67698ae0d3a->leave($__internal_ba1be706e0aaa5f20b4b66d37c1ad45b918973b6083af216613bd67698ae0d3a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc7410bfd9558666aa8bd5d9f4626c8e226b7ca8ad8ecc6955ee92f3270630c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7410bfd9558666aa8bd5d9f4626c8e226b7ca8ad8ecc6955ee92f3270630c4->enter($__internal_cc7410bfd9558666aa8bd5d9f4626c8e226b7ca8ad8ecc6955ee92f3270630c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd33f05b74c85e4c9b1f9b011fc381b5f07f422bdb2f2f3e74a3f5028c0e02b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd33f05b74c85e4c9b1f9b011fc381b5f07f422bdb2f2f3e74a3f5028c0e02b6->enter($__internal_fd33f05b74c85e4c9b1f9b011fc381b5f07f422bdb2f2f3e74a3f5028c0e02b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_fd33f05b74c85e4c9b1f9b011fc381b5f07f422bdb2f2f3e74a3f5028c0e02b6->leave($__internal_fd33f05b74c85e4c9b1f9b011fc381b5f07f422bdb2f2f3e74a3f5028c0e02b6_prof);

        
        $__internal_cc7410bfd9558666aa8bd5d9f4626c8e226b7ca8ad8ecc6955ee92f3270630c4->leave($__internal_cc7410bfd9558666aa8bd5d9f4626c8e226b7ca8ad8ecc6955ee92f3270630c4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_01bb57973fe40189310a4de7ac984f0add1ffa6aa8d00e7f64f7c137cdd92c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01bb57973fe40189310a4de7ac984f0add1ffa6aa8d00e7f64f7c137cdd92c5f->enter($__internal_01bb57973fe40189310a4de7ac984f0add1ffa6aa8d00e7f64f7c137cdd92c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_539e4ccadd7c6f6c3ef93ad1d4e5f31da4dea967c7ac02bc447576a073af4c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539e4ccadd7c6f6c3ef93ad1d4e5f31da4dea967c7ac02bc447576a073af4c0f->enter($__internal_539e4ccadd7c6f6c3ef93ad1d4e5f31da4dea967c7ac02bc447576a073af4c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_539e4ccadd7c6f6c3ef93ad1d4e5f31da4dea967c7ac02bc447576a073af4c0f->leave($__internal_539e4ccadd7c6f6c3ef93ad1d4e5f31da4dea967c7ac02bc447576a073af4c0f_prof);

        
        $__internal_01bb57973fe40189310a4de7ac984f0add1ffa6aa8d00e7f64f7c137cdd92c5f->leave($__internal_01bb57973fe40189310a4de7ac984f0add1ffa6aa8d00e7f64f7c137cdd92c5f_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/dan/projects/arduino/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
