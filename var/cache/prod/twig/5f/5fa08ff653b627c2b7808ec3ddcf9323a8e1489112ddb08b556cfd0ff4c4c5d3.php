<?php

/* @Main/Index/index.html.twig */
class __TwigTemplate_3dd74331c8f4812b06eb5195d4b15c1ae5d9116ba2b2ab88d4f0e99e5c9468d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Main/Index/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil - Lunettes - Bocasay!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading\">Bienvenue</h1>
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide-lunette.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
            <p class=\"lead intro\">Les lunettes sont un instrument permettant de pallier les défauts visuels. Une paire de lunettes est constituée d'une monture sur laquelle sont fixés des verres correcteurs et reposant sur le nez.</p>

            <div class=\"row products\">
            \t<h2>Nos dernieres produits</h2>
            \t<hr/>
                  ";
        // line 18
        if ((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) {
            // line 19
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 20
                echo "                  \t<div class=\"col-md-6\">
                  \t\t<h3 class=\"text-left\"><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_fichepage", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
                echo "</strong></a></h3>
                  \t\t<div class=\"descLunette text-left\">
                                    ";
                // line 23
                echo twig_truncate_filter($this->env, $this->getAttribute($context["produit"], "description", array()), 150, true);
                echo "
                  \t\t</div>
                  \t\t<p class=\"text-right price\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixTtc", array()), "html", null, true);
                echo "€</p>
                  \t\t<div class=\"row\">
                  \t\t\t<div class=\"col-xs-6 text-left\"><a href=\"";
                // line 27
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_panierpage");
                echo "?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
                echo "&qtt=1\" class=\"btn btn-sm btn-default\">Ajouter Panier</a></div>
                  \t\t\t<div class=\"col-xs-6 text-right\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_fichepage", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">Commander</a></div>
                  \t\t</div>
                  \t</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                  ";
        }
        // line 33
        echo "            \t
            </div>
            
          </div>

          
\t

          
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  129 => 32,  119 => 28,  113 => 27,  108 => 25,  103 => 23,  96 => 21,  93 => 20,  88 => 19,  86 => 18,  77 => 12,  70 => 7,  64 => 6,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Accueil - Lunettes - Bocasay!{% endblock %}
{% block stylesheets %}
\t<link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}


          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading\">Bienvenue</h1>
            <img src=\"{{ asset('images/slide-lunette.jpg')}}\" class=\"img-responsive\">
            <p class=\"lead intro\">Les lunettes sont un instrument permettant de pallier les défauts visuels. Une paire de lunettes est constituée d'une monture sur laquelle sont fixés des verres correcteurs et reposant sur le nez.</p>

            <div class=\"row products\">
            \t<h2>Nos dernieres produits</h2>
            \t<hr/>
                  {% if produits %}
                        {% for produit in produits %}
                  \t<div class=\"col-md-6\">
                  \t\t<h3 class=\"text-left\"><a href=\"{{ path('main_fichepage',{'id':produit.id})}}\"><strong>{{ produit.titre }}</strong></a></h3>
                  \t\t<div class=\"descLunette text-left\">
                                    {{ produit.description|truncate(150, true)|raw }}
                  \t\t</div>
                  \t\t<p class=\"text-right price\">{{ produit.prixTtc }}€</p>
                  \t\t<div class=\"row\">
                  \t\t\t<div class=\"col-xs-6 text-left\"><a href=\"{{ path('main_panierpage')}}?id={{ produit.id }}&qtt=1\" class=\"btn btn-sm btn-default\">Ajouter Panier</a></div>
                  \t\t\t<div class=\"col-xs-6 text-right\"><a href=\"{{ path('main_fichepage',{'id':produit.id})}}\" class=\"btn btn-sm btn-default\">Commander</a></div>
                  \t\t</div>
                  \t</div>
                  {% endfor %}
                  {% endif %}
            \t
            </div>
            
          </div>

          
\t

          
{% endblock %}
", "@Main/Index/index.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\src\\MainBundle\\Resources\\views\\Index\\index.html.twig");
    }
}
