<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* author/list.html.twig */
class __TwigTemplate_53b397b343fa03512f78efe1fad86ace extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "author/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AuthorController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">

    <h1>Liste des auteurs</h1>
     ﻿<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
   
   ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
   
   ";
        // line 21
        $context["totalBooks"] = 0;
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["List"]) || array_key_exists("List", $context) ? $context["List"] : (function () { throw new RuntimeError('Variable "List" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 23
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["List"]) || array_key_exists("List", $context) ? $context["List"] : (function () { throw new RuntimeError('Variable "List" does not exist.', 23, $this->source); })())) == 0)) {
                // line 24
                echo "
 <p>Le tableau est vide /nest pas defini</p>
 ";
            } else {
                // line 27
                echo " <li>
";
                // line 28
                $context["totalBooks"] = ((isset($context["totalBooks"]) || array_key_exists("totalBooks", $context) ? $context["totalBooks"] : (function () { throw new RuntimeError('Variable "totalBooks" does not exist.', 28, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["author"], "nb_books", [], "any", false, false, false, 28));
                // line 29
                echo "       <ul> <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "</div> </ul>

        <ul> <div><img src =\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "picture", [], "any", false, false, false, 31), "html", null, true);
                echo "\"></div> </ul>
     
      <ul> <div>";
                // line 33
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "username", [], "any", false, false, false, 33)), "html", null, true);
                echo "</div> </ul>
     
        <ul> <div>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "email", [], "any", false, false, false, 35), "html", null, true);
                echo "</div> </ul>

        <ul> <div>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "nb_books", [], "any", false, false, false, 37), "html", null, true);
                echo "</div>
        </ul>
  </li>

    ";
            }
            // line 42
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        // line 44
        $context["authors"] = ["Auteur 1", "Auteur 2", "Auteur 3"];
        // line 45
        echo "Il y a ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 45, $this->source); })())), "html", null, true);
        echo " auteur(s).<br>
Le nombre total de livres de tous les auteurs est : ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["totalBooks"]) || array_key_exists("totalBooks", $context) ? $context["totalBooks"] : (function () { throw new RuntimeError('Variable "totalBooks" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " livre(s).

";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/default.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "author/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 49,  215 => 48,  204 => 17,  194 => 16,  181 => 51,  179 => 48,  174 => 46,  169 => 45,  167 => 44,  164 => 43,  158 => 42,  150 => 37,  145 => 35,  140 => 33,  135 => 31,  129 => 29,  127 => 28,  124 => 27,  119 => 24,  116 => 23,  112 => 22,  110 => 21,  104 => 19,  102 => 16,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AuthorController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">

    <h1>Liste des auteurs</h1>
     ﻿<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
   
   {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/default.min.css\">
{% endblock %}
   <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
   
   {% set totalBooks = 0 %}
{% for author in List %}
 {% if List|length == 0 %}

 <p>Le tableau est vide /nest pas defini</p>
 {% else %}
 <li>
{% set totalBooks = totalBooks + author.nb_books %}
       <ul> <div>{{ author.id }}</div> </ul>

        <ul> <div><img src =\"{{ author.picture }}\"></div> </ul>
     
      <ul> <div>{{ author.username |upper}}</div> </ul>
     
        <ul> <div>{{ author.email}}</div> </ul>

        <ul> <div>{{ author.nb_books}}</div>
        </ul>
  </li>

    {% endif %}
   {% endfor %}

{% set authors = ['Auteur 1', 'Auteur 2', 'Auteur 3'] %}
Il y a {{ authors|length }} auteur(s).<br>
Le nombre total de livres de tous les auteurs est : {{ totalBooks }} livre(s).

{% block javascripts %}
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js\"></script>
{% endblock %}



{% endblock %}", "author/list.html.twig", "C:\\Users\\DELL\\Atelier3.3\\templates\\author\\list.html.twig");
    }
}
