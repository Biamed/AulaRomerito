<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee0581d535bd451c2ccb992586e76c44ec15821a4c15d5c83624e29358933b38 extends Twig_Template
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
        $__internal_2d0c6f76eab7099453dbbc4a6d8bbcf8f6fd827367674a5285fe19770dc325ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0c6f76eab7099453dbbc4a6d8bbcf8f6fd827367674a5285fe19770dc325ac->enter($__internal_2d0c6f76eab7099453dbbc4a6d8bbcf8f6fd827367674a5285fe19770dc325ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0c6f76eab7099453dbbc4a6d8bbcf8f6fd827367674a5285fe19770dc325ac->leave($__internal_2d0c6f76eab7099453dbbc4a6d8bbcf8f6fd827367674a5285fe19770dc325ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcc359783df1aeff88f2f8fb33eff8c544b986dffb1513fb4884de88acf0e6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc359783df1aeff88f2f8fb33eff8c544b986dffb1513fb4884de88acf0e6a0->enter($__internal_fcc359783df1aeff88f2f8fb33eff8c544b986dffb1513fb4884de88acf0e6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fcc359783df1aeff88f2f8fb33eff8c544b986dffb1513fb4884de88acf0e6a0->leave($__internal_fcc359783df1aeff88f2f8fb33eff8c544b986dffb1513fb4884de88acf0e6a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00ea0476d9da19fc041c61901eac0b922f1eef48f1bc42cd9f65e72ebfb4d7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ea0476d9da19fc041c61901eac0b922f1eef48f1bc42cd9f65e72ebfb4d7b0->enter($__internal_00ea0476d9da19fc041c61901eac0b922f1eef48f1bc42cd9f65e72ebfb4d7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00ea0476d9da19fc041c61901eac0b922f1eef48f1bc42cd9f65e72ebfb4d7b0->leave($__internal_00ea0476d9da19fc041c61901eac0b922f1eef48f1bc42cd9f65e72ebfb4d7b0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1343d0c2e62b7ae59b92248a0693e6591f5fcce11fe549ec8be4dc1d98d9ad3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1343d0c2e62b7ae59b92248a0693e6591f5fcce11fe549ec8be4dc1d98d9ad3c->enter($__internal_1343d0c2e62b7ae59b92248a0693e6591f5fcce11fe549ec8be4dc1d98d9ad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1343d0c2e62b7ae59b92248a0693e6591f5fcce11fe549ec8be4dc1d98d9ad3c->leave($__internal_1343d0c2e62b7ae59b92248a0693e6591f5fcce11fe549ec8be4dc1d98d9ad3c_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\HORTENSIA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
