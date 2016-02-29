<?php

/* base.html.twig */
class __TwigTemplate_bc1aa4e5edce16e476ef3aae6ab5c32a8e75e9fb8e65c2110393b1f39c0905e7 extends Twig_Template
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
        $__internal_7022f0f4741c35c299be4938724d6dd3194645c987965ffcc40b310f4936e827 = $this->env->getExtension("native_profiler");
        $__internal_7022f0f4741c35c299be4938724d6dd3194645c987965ffcc40b310f4936e827->enter($__internal_7022f0f4741c35c299be4938724d6dd3194645c987965ffcc40b310f4936e827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7022f0f4741c35c299be4938724d6dd3194645c987965ffcc40b310f4936e827->leave($__internal_7022f0f4741c35c299be4938724d6dd3194645c987965ffcc40b310f4936e827_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a939bf26c86f1d2ca594f1bc296e25c5a85ffeedeb691bc06a3d0e09d21cbe58 = $this->env->getExtension("native_profiler");
        $__internal_a939bf26c86f1d2ca594f1bc296e25c5a85ffeedeb691bc06a3d0e09d21cbe58->enter($__internal_a939bf26c86f1d2ca594f1bc296e25c5a85ffeedeb691bc06a3d0e09d21cbe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a939bf26c86f1d2ca594f1bc296e25c5a85ffeedeb691bc06a3d0e09d21cbe58->leave($__internal_a939bf26c86f1d2ca594f1bc296e25c5a85ffeedeb691bc06a3d0e09d21cbe58_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce0e5ea19a389c4791fe838e663d0e2166c9e48838a770230e7b5c91c0793bf3 = $this->env->getExtension("native_profiler");
        $__internal_ce0e5ea19a389c4791fe838e663d0e2166c9e48838a770230e7b5c91c0793bf3->enter($__internal_ce0e5ea19a389c4791fe838e663d0e2166c9e48838a770230e7b5c91c0793bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce0e5ea19a389c4791fe838e663d0e2166c9e48838a770230e7b5c91c0793bf3->leave($__internal_ce0e5ea19a389c4791fe838e663d0e2166c9e48838a770230e7b5c91c0793bf3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_213ebb26928e7e8d0862c6d62294fa7c01e844fbc81679fa05727d9a01845b5b = $this->env->getExtension("native_profiler");
        $__internal_213ebb26928e7e8d0862c6d62294fa7c01e844fbc81679fa05727d9a01845b5b->enter($__internal_213ebb26928e7e8d0862c6d62294fa7c01e844fbc81679fa05727d9a01845b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_213ebb26928e7e8d0862c6d62294fa7c01e844fbc81679fa05727d9a01845b5b->leave($__internal_213ebb26928e7e8d0862c6d62294fa7c01e844fbc81679fa05727d9a01845b5b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecd9b6f8feb52d5290a5fa0c5312cd2b008e77ef415840b4a5aaae886db8779e = $this->env->getExtension("native_profiler");
        $__internal_ecd9b6f8feb52d5290a5fa0c5312cd2b008e77ef415840b4a5aaae886db8779e->enter($__internal_ecd9b6f8feb52d5290a5fa0c5312cd2b008e77ef415840b4a5aaae886db8779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ecd9b6f8feb52d5290a5fa0c5312cd2b008e77ef415840b4a5aaae886db8779e->leave($__internal_ecd9b6f8feb52d5290a5fa0c5312cd2b008e77ef415840b4a5aaae886db8779e_prof);

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
