<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a9c0110698b3c47443e96d43d4e3c192a73ab852772d5f2575e9bcd752a9e475 extends Twig_Template
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
        $__internal_a3a3bb2700467b014141b4fa932bd6885459e0802085d78b388163f908b99e00 = $this->env->getExtension("native_profiler");
        $__internal_a3a3bb2700467b014141b4fa932bd6885459e0802085d78b388163f908b99e00->enter($__internal_a3a3bb2700467b014141b4fa932bd6885459e0802085d78b388163f908b99e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3a3bb2700467b014141b4fa932bd6885459e0802085d78b388163f908b99e00->leave($__internal_a3a3bb2700467b014141b4fa932bd6885459e0802085d78b388163f908b99e00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ecf302d6ac25a7836b87acb471cdbc8845b9554779d5cda3f2417a4359cd73e = $this->env->getExtension("native_profiler");
        $__internal_3ecf302d6ac25a7836b87acb471cdbc8845b9554779d5cda3f2417a4359cd73e->enter($__internal_3ecf302d6ac25a7836b87acb471cdbc8845b9554779d5cda3f2417a4359cd73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ecf302d6ac25a7836b87acb471cdbc8845b9554779d5cda3f2417a4359cd73e->leave($__internal_3ecf302d6ac25a7836b87acb471cdbc8845b9554779d5cda3f2417a4359cd73e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_015a95292da554ec50f5fab16abc66809ae85ea07562ccb2d2d58e9f009fdf00 = $this->env->getExtension("native_profiler");
        $__internal_015a95292da554ec50f5fab16abc66809ae85ea07562ccb2d2d58e9f009fdf00->enter($__internal_015a95292da554ec50f5fab16abc66809ae85ea07562ccb2d2d58e9f009fdf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_015a95292da554ec50f5fab16abc66809ae85ea07562ccb2d2d58e9f009fdf00->leave($__internal_015a95292da554ec50f5fab16abc66809ae85ea07562ccb2d2d58e9f009fdf00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_666a140e578f7380037d1186970542c1fe2351e35db52a9cc0d806ea687ad87f = $this->env->getExtension("native_profiler");
        $__internal_666a140e578f7380037d1186970542c1fe2351e35db52a9cc0d806ea687ad87f->enter($__internal_666a140e578f7380037d1186970542c1fe2351e35db52a9cc0d806ea687ad87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_666a140e578f7380037d1186970542c1fe2351e35db52a9cc0d806ea687ad87f->leave($__internal_666a140e578f7380037d1186970542c1fe2351e35db52a9cc0d806ea687ad87f_prof);

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
