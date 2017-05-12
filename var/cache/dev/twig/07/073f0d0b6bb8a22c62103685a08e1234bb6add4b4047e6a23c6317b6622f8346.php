<?php

/* base.html.twig */
class __TwigTemplate_12a9784906875215e0dff72fbea6a70a80828e4aa3365ff25286dac4ee04c2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fbb47bd6c132ba2c3ba2c966089d4ec56665186763ec890dca257f8d120b716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbb47bd6c132ba2c3ba2c966089d4ec56665186763ec890dca257f8d120b716->enter($__internal_7fbb47bd6c132ba2c3ba2c966089d4ec56665186763ec890dca257f8d120b716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bdcba98876a118fb8e9bfbeecde3f7c6734e2553b7a143d2662bcc5b650014df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcba98876a118fb8e9bfbeecde3f7c6734e2553b7a143d2662bcc5b650014df->enter($__internal_bdcba98876a118fb8e9bfbeecde3f7c6734e2553b7a143d2662bcc5b650014df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7fbb47bd6c132ba2c3ba2c966089d4ec56665186763ec890dca257f8d120b716->leave($__internal_7fbb47bd6c132ba2c3ba2c966089d4ec56665186763ec890dca257f8d120b716_prof);

        
        $__internal_bdcba98876a118fb8e9bfbeecde3f7c6734e2553b7a143d2662bcc5b650014df->leave($__internal_bdcba98876a118fb8e9bfbeecde3f7c6734e2553b7a143d2662bcc5b650014df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd5cf678297d5754208fcfb942ff87dd90c92a04fbde1e89759527a2bcb921b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5cf678297d5754208fcfb942ff87dd90c92a04fbde1e89759527a2bcb921b0->enter($__internal_bd5cf678297d5754208fcfb942ff87dd90c92a04fbde1e89759527a2bcb921b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3459b8d20e0bfe5e9e2765f8e2d6a6df915bb7e07a0725c91fc47e5ea2110827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3459b8d20e0bfe5e9e2765f8e2d6a6df915bb7e07a0725c91fc47e5ea2110827->enter($__internal_3459b8d20e0bfe5e9e2765f8e2d6a6df915bb7e07a0725c91fc47e5ea2110827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3459b8d20e0bfe5e9e2765f8e2d6a6df915bb7e07a0725c91fc47e5ea2110827->leave($__internal_3459b8d20e0bfe5e9e2765f8e2d6a6df915bb7e07a0725c91fc47e5ea2110827_prof);

        
        $__internal_bd5cf678297d5754208fcfb942ff87dd90c92a04fbde1e89759527a2bcb921b0->leave($__internal_bd5cf678297d5754208fcfb942ff87dd90c92a04fbde1e89759527a2bcb921b0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea2137925e796dcb32b83d73b9561ab8a259a5b1b3681c2e6db1b3b731a53e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2137925e796dcb32b83d73b9561ab8a259a5b1b3681c2e6db1b3b731a53e65->enter($__internal_ea2137925e796dcb32b83d73b9561ab8a259a5b1b3681c2e6db1b3b731a53e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c87f7f8b50edef25fea8a37e27fb228f74294a7a089ddb26e472da85cc9903b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c87f7f8b50edef25fea8a37e27fb228f74294a7a089ddb26e472da85cc9903b->enter($__internal_1c87f7f8b50edef25fea8a37e27fb228f74294a7a089ddb26e472da85cc9903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c87f7f8b50edef25fea8a37e27fb228f74294a7a089ddb26e472da85cc9903b->leave($__internal_1c87f7f8b50edef25fea8a37e27fb228f74294a7a089ddb26e472da85cc9903b_prof);

        
        $__internal_ea2137925e796dcb32b83d73b9561ab8a259a5b1b3681c2e6db1b3b731a53e65->leave($__internal_ea2137925e796dcb32b83d73b9561ab8a259a5b1b3681c2e6db1b3b731a53e65_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7d57205a6d66247e8c1d5fdaa0a11de1d5ae47a518cc55e60100d96cc3a6d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d57205a6d66247e8c1d5fdaa0a11de1d5ae47a518cc55e60100d96cc3a6d47->enter($__internal_b7d57205a6d66247e8c1d5fdaa0a11de1d5ae47a518cc55e60100d96cc3a6d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8054da4bf291cae72795484fd4bb038c8c6f5124feefeaef0233c36fa96caa52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8054da4bf291cae72795484fd4bb038c8c6f5124feefeaef0233c36fa96caa52->enter($__internal_8054da4bf291cae72795484fd4bb038c8c6f5124feefeaef0233c36fa96caa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8054da4bf291cae72795484fd4bb038c8c6f5124feefeaef0233c36fa96caa52->leave($__internal_8054da4bf291cae72795484fd4bb038c8c6f5124feefeaef0233c36fa96caa52_prof);

        
        $__internal_b7d57205a6d66247e8c1d5fdaa0a11de1d5ae47a518cc55e60100d96cc3a6d47->leave($__internal_b7d57205a6d66247e8c1d5fdaa0a11de1d5ae47a518cc55e60100d96cc3a6d47_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e794f1344d52a693fcc3ab77287d8290819e5d6bcbdbdecd680dcd9a5b9b1d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e794f1344d52a693fcc3ab77287d8290819e5d6bcbdbdecd680dcd9a5b9b1d05->enter($__internal_e794f1344d52a693fcc3ab77287d8290819e5d6bcbdbdecd680dcd9a5b9b1d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b7a4244a9528053cabc22d6c1838a54065a32c9d7af8829cd15760a1291eebb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a4244a9528053cabc22d6c1838a54065a32c9d7af8829cd15760a1291eebb5->enter($__internal_b7a4244a9528053cabc22d6c1838a54065a32c9d7af8829cd15760a1291eebb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b7a4244a9528053cabc22d6c1838a54065a32c9d7af8829cd15760a1291eebb5->leave($__internal_b7a4244a9528053cabc22d6c1838a54065a32c9d7af8829cd15760a1291eebb5_prof);

        
        $__internal_e794f1344d52a693fcc3ab77287d8290819e5d6bcbdbdecd680dcd9a5b9b1d05->leave($__internal_e794f1344d52a693fcc3ab77287d8290819e5d6bcbdbdecd680dcd9a5b9b1d05_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/dan/projects/arduino/app/Resources/views/base.html.twig");
    }
}
