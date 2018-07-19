<?php

/* @BackOffice/commande/details-commande.html.twig */
class __TwigTemplate_26b7a5a07e017017f9ca080f99ed282b8685e154095f186910b9001354533383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "@BackOffice/commande/details-commande.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/commande/details-commande.html.twig"));

        // line 2
        $context["sousTotal"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
    <h1>Detail commande </h1>

            <ul>
                <li><strong>Numero commande </strong>: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "numeroCmde", array()), "html", null, true);
        echo "</li>
                <li><strong>Date </strong>: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCommande", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</li>
                <li><strong>Nom </strong>: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "client", array()), "nom", array()), "html", null, true);
        echo "</li>
                <li><strong>Prenom </strong>: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "client", array()), "prenom", array()), "html", null, true);
        echo "</li>
                <li><strong>email </strong>: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "client", array()), "email", array()), "html", null, true);
        echo "</li>
                <li><strong>Adresse </strong>: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "client", array()), "adresse", array()), "html", null, true);
        echo "</li>
                
                
                
            </ul>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Prix total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ligneCommande"]) ? $context["ligneCommande"] : $this->getContext($context, "ligneCommande")));
        foreach ($context['_seq'] as $context["_key"] => $context["un_produit"]) {
            // line 30
            echo "            ";
            $context["sousTotal"] = ($this->getAttribute($context["un_produit"], "prixVente", array()) + (isset($context["sousTotal"]) ? $context["sousTotal"] : $this->getContext($context, "sousTotal")));
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["un_produit"], "produit", array()), "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["un_produit"], "qtt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["un_produit"], "produit", array()), "prixTtc", array()), "html", null, true);
            echo "€</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["un_produit"], "prixVente", array()), "html", null, true);
            echo "€</td>
                
                <td>
                    <ul class=\"list-unstyled action\">
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_lignecommande_edit", array("id" => $this->getAttribute($context["un_produit"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Edit</a>
                        </li>
                        ";
            // line 45
            echo "                    </ul>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['un_produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Total </strong></td>
            <td><strong>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["sousTotal"]) ? $context["sousTotal"] : $this->getContext($context, "sousTotal")), "html", null, true);
        echo "€</strong></td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
  </div>
  ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/commande/details-commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 61,  149 => 60,  140 => 54,  134 => 50,  124 => 45,  119 => 40,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  96 => 31,  93 => 30,  89 => 29,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.backoffice.html.twig' %}
{% set sousTotal = 0 %}
{% block body %}
    <div class=\"row\">
    <h1>Detail commande </h1>

            <ul>
                <li><strong>Numero commande </strong>: {{ commande.numeroCmde}}</li>
                <li><strong>Date </strong>: {{ commande.dateCommande|date('Y-m-d H:i:s') }}</li>
                <li><strong>Nom </strong>: {{ commande.client.nom }}</li>
                <li><strong>Prenom </strong>: {{ commande.client.prenom }}</li>
                <li><strong>email </strong>: {{ commande.client.email }}</li>
                <li><strong>Adresse </strong>: {{ commande.client.adresse }}</li>
                
                
                
            </ul>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom du produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Prix total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for un_produit in ligneCommande %}
            {% set sousTotal = un_produit.prixVente + sousTotal %}
            <tr>
                <td>{{ un_produit.produit.titre }}</td>
                <td>{{ un_produit.qtt }}</td>
                <td>{{ un_produit.produit.prixTtc }}€</td>
                <td>{{ un_produit.prixVente }}€</td>
                
                <td>
                    <ul class=\"list-unstyled action\">
                        <li>
                            <a href=\"{{ path('backoffice_lignecommande_edit', { 'id': un_produit.id }) }}\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Edit</a>
                        </li>
                        {#<li>
                            <a href=\"{{ path('backoffice_lignecommande_delete', { 'id': un_produit.id }) }}\" onclick=\"return deleteList();\"><span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\" ></span> Delete</a>
                        </li>#}
                    </ul>

                </td>
            </tr>
        {% endfor %}
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><strong>Total </strong></td>
            <td><strong>{{ sousTotal }}€</strong></td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
  </div>
  {% block javascripts %}
    {{ parent() }}
{% endblock %}
{% endblock %}
", "@BackOffice/commande/details-commande.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\src\\BackOfficeBundle\\Resources\\views\\commande\\details-commande.html.twig");
    }
}
