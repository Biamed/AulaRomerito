<?php

/* hort/index.html.php */
class __TwigTemplate_ccbe90aa1b997ffcd2c8e8d1819d5b855bdaeccb6c23bb85eabced9f57cc65cd extends Twig_Template
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
        $__internal_5f4681fb5d0921aafbf0b441dc03be20c496d8834658cb7f484556cf308c576c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4681fb5d0921aafbf0b441dc03be20c496d8834658cb7f484556cf308c576c->enter($__internal_5f4681fb5d0921aafbf0b441dc03be20c496d8834658cb7f484556cf308c576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hort/index.html.php"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Bem Vindo - INDEX</title>
</head>
<body>
<form action=\"<?php echo \$view['router']->path('home_page') ?>\" method=\"POST\">
\t<label>Nome</label>
\t<input type=\"text\" name=\"nome\">
\t<label>Senha</label>
\t<input type=\"password\" name=\"senha\">
\t<input type=\"submit\" name=\"enviar\">
</form>
</body>
</html>";
        
        $__internal_5f4681fb5d0921aafbf0b441dc03be20c496d8834658cb7f484556cf308c576c->leave($__internal_5f4681fb5d0921aafbf0b441dc03be20c496d8834658cb7f484556cf308c576c_prof);

    }

    public function getTemplateName()
    {
        return "hort/index.html.php";
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
\t<title>Bem Vindo - INDEX</title>
</head>
<body>
<form action=\"<?php echo \$view['router']->path('home_page') ?>\" method=\"POST\">
\t<label>Nome</label>
\t<input type=\"text\" name=\"nome\">
\t<label>Senha</label>
\t<input type=\"password\" name=\"senha\">
\t<input type=\"submit\" name=\"enviar\">
</form>
</body>
</html>", "hort/index.html.php", "C:\\wamp64\\www\\HORTENSIA\\app\\Resources\\views\\hort\\index.html.php");
    }
}
