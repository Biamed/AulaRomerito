<?php

/* base.html.twig */
class __TwigTemplate_20426bf90dabf40497985e6bfa4ca562f71e21170f3663dd033963911e359aae extends Twig_Template
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
        $__internal_26f18bc9208f91246786b58bf7288600c622eab4cb82851a94aa5203d64d98fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f18bc9208f91246786b58bf7288600c622eab4cb82851a94aa5203d64d98fd->enter($__internal_26f18bc9208f91246786b58bf7288600c622eab4cb82851a94aa5203d64d98fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_26f18bc9208f91246786b58bf7288600c622eab4cb82851a94aa5203d64d98fd->leave($__internal_26f18bc9208f91246786b58bf7288600c622eab4cb82851a94aa5203d64d98fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f57aa92b2540cb6324da97f0205be012c65f59b62a507370bb1e52a2882c631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f57aa92b2540cb6324da97f0205be012c65f59b62a507370bb1e52a2882c631->enter($__internal_8f57aa92b2540cb6324da97f0205be012c65f59b62a507370bb1e52a2882c631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_8f57aa92b2540cb6324da97f0205be012c65f59b62a507370bb1e52a2882c631->leave($__internal_8f57aa92b2540cb6324da97f0205be012c65f59b62a507370bb1e52a2882c631_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be1b2e0445036dfaa56af720626ad1713455df515f72cff8a4133e317a6092b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1b2e0445036dfaa56af720626ad1713455df515f72cff8a4133e317a6092b4->enter($__internal_be1b2e0445036dfaa56af720626ad1713455df515f72cff8a4133e317a6092b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_be1b2e0445036dfaa56af720626ad1713455df515f72cff8a4133e317a6092b4->leave($__internal_be1b2e0445036dfaa56af720626ad1713455df515f72cff8a4133e317a6092b4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc703d13283f5ac7f53cd676d81400c245d5d28bc5fdb691d6c7041a566323d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc703d13283f5ac7f53cd676d81400c245d5d28bc5fdb691d6c7041a566323d3->enter($__internal_cc703d13283f5ac7f53cd676d81400c245d5d28bc5fdb691d6c7041a566323d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_cc703d13283f5ac7f53cd676d81400c245d5d28bc5fdb691d6c7041a566323d3->leave($__internal_cc703d13283f5ac7f53cd676d81400c245d5d28bc5fdb691d6c7041a566323d3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72b841466370623585776ce796494798d1156ef6e82f90d65974ae3624f59558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b841466370623585776ce796494798d1156ef6e82f90d65974ae3624f59558->enter($__internal_72b841466370623585776ce796494798d1156ef6e82f90d65974ae3624f59558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_72b841466370623585776ce796494798d1156ef6e82f90d65974ae3624f59558->leave($__internal_72b841466370623585776ce796494798d1156ef6e82f90d65974ae3624f59558_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "base.html.twig", "C:\\wamp64\\www\\HORTENSIA\\app\\Resources\\views\\base.html.twig");
    }
}
