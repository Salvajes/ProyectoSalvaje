<?php

/* base.html.twig */
class __TwigTemplate_4ffa657e81336f71195dd416ce1aa40f9f4ff5a259f0cd3dc47bf6f7544bceec extends Twig_Template
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
        $__internal_458ea2b89309c172273c3f7e6449ada170a838643d2f97d1ad207f60515f6138 = $this->env->getExtension("native_profiler");
        $__internal_458ea2b89309c172273c3f7e6449ada170a838643d2f97d1ad207f60515f6138->enter($__internal_458ea2b89309c172273c3f7e6449ada170a838643d2f97d1ad207f60515f6138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_458ea2b89309c172273c3f7e6449ada170a838643d2f97d1ad207f60515f6138->leave($__internal_458ea2b89309c172273c3f7e6449ada170a838643d2f97d1ad207f60515f6138_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e8999ec0f7a6326d4c93edc06c4e24e5db6f8568f221af85279f7498328d287 = $this->env->getExtension("native_profiler");
        $__internal_6e8999ec0f7a6326d4c93edc06c4e24e5db6f8568f221af85279f7498328d287->enter($__internal_6e8999ec0f7a6326d4c93edc06c4e24e5db6f8568f221af85279f7498328d287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6e8999ec0f7a6326d4c93edc06c4e24e5db6f8568f221af85279f7498328d287->leave($__internal_6e8999ec0f7a6326d4c93edc06c4e24e5db6f8568f221af85279f7498328d287_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c52f056f3cb5973b213332160e83413a95984b45df1ee0c0f5ede699cb30c060 = $this->env->getExtension("native_profiler");
        $__internal_c52f056f3cb5973b213332160e83413a95984b45df1ee0c0f5ede699cb30c060->enter($__internal_c52f056f3cb5973b213332160e83413a95984b45df1ee0c0f5ede699cb30c060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c52f056f3cb5973b213332160e83413a95984b45df1ee0c0f5ede699cb30c060->leave($__internal_c52f056f3cb5973b213332160e83413a95984b45df1ee0c0f5ede699cb30c060_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_161b9a7318e839c37b3fc8db288aecb0637f6a678227b1378a1e18950bc6a861 = $this->env->getExtension("native_profiler");
        $__internal_161b9a7318e839c37b3fc8db288aecb0637f6a678227b1378a1e18950bc6a861->enter($__internal_161b9a7318e839c37b3fc8db288aecb0637f6a678227b1378a1e18950bc6a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_161b9a7318e839c37b3fc8db288aecb0637f6a678227b1378a1e18950bc6a861->leave($__internal_161b9a7318e839c37b3fc8db288aecb0637f6a678227b1378a1e18950bc6a861_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4856f9b1642cc0c8c947305840d263aeb313b3b878d98b6fe7016cacaa93ac71 = $this->env->getExtension("native_profiler");
        $__internal_4856f9b1642cc0c8c947305840d263aeb313b3b878d98b6fe7016cacaa93ac71->enter($__internal_4856f9b1642cc0c8c947305840d263aeb313b3b878d98b6fe7016cacaa93ac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4856f9b1642cc0c8c947305840d263aeb313b3b878d98b6fe7016cacaa93ac71->leave($__internal_4856f9b1642cc0c8c947305840d263aeb313b3b878d98b6fe7016cacaa93ac71_prof);

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
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
