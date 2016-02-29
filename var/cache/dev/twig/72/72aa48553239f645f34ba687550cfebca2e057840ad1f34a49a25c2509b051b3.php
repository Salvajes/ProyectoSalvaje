<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_70493597420a672750bf7ff72a62eff6b331253d17c7f59fc71e13fa2189d58d extends Twig_Template
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
        $__internal_f1359961052f7ba99c50f91793d1d4ccd75eff9196f2141a0fbdc4e137bf6fe9 = $this->env->getExtension("native_profiler");
        $__internal_f1359961052f7ba99c50f91793d1d4ccd75eff9196f2141a0fbdc4e137bf6fe9->enter($__internal_f1359961052f7ba99c50f91793d1d4ccd75eff9196f2141a0fbdc4e137bf6fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1359961052f7ba99c50f91793d1d4ccd75eff9196f2141a0fbdc4e137bf6fe9->leave($__internal_f1359961052f7ba99c50f91793d1d4ccd75eff9196f2141a0fbdc4e137bf6fe9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ddc690cf532d3e0d3c29e4df2178d1f6801cb78c729ac8f5e16bfbf1efbe2bf = $this->env->getExtension("native_profiler");
        $__internal_7ddc690cf532d3e0d3c29e4df2178d1f6801cb78c729ac8f5e16bfbf1efbe2bf->enter($__internal_7ddc690cf532d3e0d3c29e4df2178d1f6801cb78c729ac8f5e16bfbf1efbe2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ddc690cf532d3e0d3c29e4df2178d1f6801cb78c729ac8f5e16bfbf1efbe2bf->leave($__internal_7ddc690cf532d3e0d3c29e4df2178d1f6801cb78c729ac8f5e16bfbf1efbe2bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3a9ea9eb8d20fd32ec06edf1a73b957d6ad97a41823dd3e23e2267da5642011 = $this->env->getExtension("native_profiler");
        $__internal_a3a9ea9eb8d20fd32ec06edf1a73b957d6ad97a41823dd3e23e2267da5642011->enter($__internal_a3a9ea9eb8d20fd32ec06edf1a73b957d6ad97a41823dd3e23e2267da5642011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3a9ea9eb8d20fd32ec06edf1a73b957d6ad97a41823dd3e23e2267da5642011->leave($__internal_a3a9ea9eb8d20fd32ec06edf1a73b957d6ad97a41823dd3e23e2267da5642011_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7d2f03e3a935333b76cdcbbd0f7574f29e4a9443071edcd03dd147d658881f8 = $this->env->getExtension("native_profiler");
        $__internal_b7d2f03e3a935333b76cdcbbd0f7574f29e4a9443071edcd03dd147d658881f8->enter($__internal_b7d2f03e3a935333b76cdcbbd0f7574f29e4a9443071edcd03dd147d658881f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7d2f03e3a935333b76cdcbbd0f7574f29e4a9443071edcd03dd147d658881f8->leave($__internal_b7d2f03e3a935333b76cdcbbd0f7574f29e4a9443071edcd03dd147d658881f8_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
