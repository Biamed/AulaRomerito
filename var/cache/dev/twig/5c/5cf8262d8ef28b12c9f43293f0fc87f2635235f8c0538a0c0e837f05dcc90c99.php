<?php

/* hort/home.html.php */
class __TwigTemplate_b8ccdf51ff506cd35487f98e9c6faec5728c9d7cba43192b8123f11c1461abc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_041579a3c63d478b14c8b50b6b79057e84194e301e5a76551bad4c2c12a52c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041579a3c63d478b14c8b50b6b79057e84194e301e5a76551bad4c2c12a52c0b->enter($__internal_041579a3c63d478b14c8b50b6b79057e84194e301e5a76551bad4c2c12a52c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hort/home.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Página Home</title>
</head>
<body>
\t<h1>Olá! <?php echo \$nome ?> </h1>
\t<h1>Senha: <?php echo \$senha ?> </h1>

</body>
</html>";
        
        $__internal_041579a3c63d478b14c8b50b6b79057e84194e301e5a76551bad4c2c12a52c0b->leave($__internal_041579a3c63d478b14c8b50b6b79057e84194e301e5a76551bad4c2c12a52c0b_prof);

    }

    public function getTemplateName()
    {
        return "hort/home.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
\t<title>Página Home</title>
</head>
<body>
\t<h1>Olá! <?php echo \$nome ?> </h1>
\t<h1>Senha: <?php echo \$senha ?> </h1>

</body>
</html>", "hort/home.html.php", "C:\\wamp64\\www\\HORTENSIA\\app\\Resources\\views\\hort\\home.html.php");
    }
}
