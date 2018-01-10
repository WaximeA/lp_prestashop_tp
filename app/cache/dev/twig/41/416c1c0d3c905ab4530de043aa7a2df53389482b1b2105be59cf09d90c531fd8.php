<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d148e164415ac9c90ba60b4048052000adf94fea4e665be6b4ebe0705871eb93 extends Twig_Template
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
        $__internal_290a70848f642c563d6a7dabdc766c8de074bcb550778093a6de6cfa7c5292a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290a70848f642c563d6a7dabdc766c8de074bcb550778093a6de6cfa7c5292a7->enter($__internal_290a70848f642c563d6a7dabdc766c8de074bcb550778093a6de6cfa7c5292a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290a70848f642c563d6a7dabdc766c8de074bcb550778093a6de6cfa7c5292a7->leave($__internal_290a70848f642c563d6a7dabdc766c8de074bcb550778093a6de6cfa7c5292a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58a9cd150384e94945d5f0af9bce7f46202a8f298b9543ea7288f00e8617c79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a9cd150384e94945d5f0af9bce7f46202a8f298b9543ea7288f00e8617c79a->enter($__internal_58a9cd150384e94945d5f0af9bce7f46202a8f298b9543ea7288f00e8617c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58a9cd150384e94945d5f0af9bce7f46202a8f298b9543ea7288f00e8617c79a->leave($__internal_58a9cd150384e94945d5f0af9bce7f46202a8f298b9543ea7288f00e8617c79a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34b86743c4caf3f92a9c5ba8a9a2e986c6b5d0eee443de90df4639cefe07a17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b86743c4caf3f92a9c5ba8a9a2e986c6b5d0eee443de90df4639cefe07a17a->enter($__internal_34b86743c4caf3f92a9c5ba8a9a2e986c6b5d0eee443de90df4639cefe07a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34b86743c4caf3f92a9c5ba8a9a2e986c6b5d0eee443de90df4639cefe07a17a->leave($__internal_34b86743c4caf3f92a9c5ba8a9a2e986c6b5d0eee443de90df4639cefe07a17a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81817dfe479e5058c3d539de4521d9821c3e8173d9a2b9b31a235d670e8ea500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81817dfe479e5058c3d539de4521d9821c3e8173d9a2b9b31a235d670e8ea500->enter($__internal_81817dfe479e5058c3d539de4521d9821c3e8173d9a2b9b31a235d670e8ea500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81817dfe479e5058c3d539de4521d9821c3e8173d9a2b9b31a235d670e8ea500->leave($__internal_81817dfe479e5058c3d539de4521d9821c3e8173d9a2b9b31a235d670e8ea500_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
