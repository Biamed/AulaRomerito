<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_96e8ea07466f297f0e3a7159bca5aaf2ee3c3a1f615b1dac7921057a2bde5215 extends Twig_Template
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
        $__internal_7c713ad50c6abfebd7d189ec23bd24910bbf055c429d8e079f5e15c64d45106b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c713ad50c6abfebd7d189ec23bd24910bbf055c429d8e079f5e15c64d45106b->enter($__internal_7c713ad50c6abfebd7d189ec23bd24910bbf055c429d8e079f5e15c64d45106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c713ad50c6abfebd7d189ec23bd24910bbf055c429d8e079f5e15c64d45106b->leave($__internal_7c713ad50c6abfebd7d189ec23bd24910bbf055c429d8e079f5e15c64d45106b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5eab652f2d3ebb24c3659acf270c810dbf49468d36f9eaf8d3758c285e799517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eab652f2d3ebb24c3659acf270c810dbf49468d36f9eaf8d3758c285e799517->enter($__internal_5eab652f2d3ebb24c3659acf270c810dbf49468d36f9eaf8d3758c285e799517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_5eab652f2d3ebb24c3659acf270c810dbf49468d36f9eaf8d3758c285e799517->leave($__internal_5eab652f2d3ebb24c3659acf270c810dbf49468d36f9eaf8d3758c285e799517_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46b4b1508ac22d29ef553f0552e37ae5a6ef90c76ad7d68f901074769f921be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b4b1508ac22d29ef553f0552e37ae5a6ef90c76ad7d68f901074769f921be0->enter($__internal_46b4b1508ac22d29ef553f0552e37ae5a6ef90c76ad7d68f901074769f921be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46b4b1508ac22d29ef553f0552e37ae5a6ef90c76ad7d68f901074769f921be0->leave($__internal_46b4b1508ac22d29ef553f0552e37ae5a6ef90c76ad7d68f901074769f921be0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_171dcd89e9354741588bcd21258c715b5671a91eb4eb7965e61bdcf682cb8ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171dcd89e9354741588bcd21258c715b5671a91eb4eb7965e61bdcf682cb8ef9->enter($__internal_171dcd89e9354741588bcd21258c715b5671a91eb4eb7965e61bdcf682cb8ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_171dcd89e9354741588bcd21258c715b5671a91eb4eb7965e61bdcf682cb8ef9->leave($__internal_171dcd89e9354741588bcd21258c715b5671a91eb4eb7965e61bdcf682cb8ef9_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\HORTENSIA\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
