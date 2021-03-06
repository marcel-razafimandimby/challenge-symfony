<?php

/* @BackOffice/commande/index.html.twig */
class __TwigTemplate_d935f6d09c3d072c7296f4ca8a8693bc0ed9faf71a48c85642b884d9fc9956dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "@BackOffice/commande/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/commande/index.html.twig"));

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
    <h1>Liste commandes</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Numero commande</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>email</th>
                <th>Adresse</th>
                <th>Total TTC</th>
                <th>Etat</th>
                
                <!--th>Actions</th-->
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_commande_details", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "numeroCmde", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "dateCommande", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "client", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "client", array()), "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "client", array()), "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute((isset($context["tabTotal"]) ? $context["tabTotal"] : null), $this->getAttribute($context["commande"], "numeroCmde", array()), array(), "array", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabTotal"]) ? $context["tabTotal"] : $this->getContext($context, "tabTotal")), $this->getAttribute($context["commande"], "numeroCmde", array()), array(), "array"), "html", null, true);
                echo "€ ";
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["commande"], "etat", array())) {
                echo "<span class=\"glyphicon glyphicon-ok\"></span>";
            } else {
                echo "<span class=\"glyphicon glyphicon-remove\" style=\"color:red;\"></span>";
            }
            echo "</td>
                
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
  </div>
  ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  123 => 40,  118 => 37,  103 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  69 => 25,  66 => 24,  62 => 23,  41 => 4,  35 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"row\">
    <h1>Liste commandes</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Numero commande</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>email</th>
                <th>Adresse</th>
                <th>Total TTC</th>
                <th>Etat</th>
                
                <!--th>Actions</th-->
            </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}
            <tr>
                <td><a href=\"{{ path('backoffice_commande_details',{'id':commande.id })}}\">{{ commande.numeroCmde }}</a></td>
                <td>{{ commande.dateCommande|date('Y-m-d H:i:s') }}</td>
                <td>{{ commande.client.nom }}</td>
                <td>{{ commande.client.prenom }}</td>
                <td>{{ commande.client.email }}</td>
                <td>{{ commande.client.adresse }}</td>
                <td>{% if tabTotal[commande.numeroCmde] is defined %} {{ tabTotal[commande.numeroCmde] }}€ {% endif %}</td>
                <td>{% if commande.etat %}<span class=\"glyphicon glyphicon-ok\"></span>{% else %}<span class=\"glyphicon glyphicon-remove\" style=\"color:red;\"></span>{% endif %}</td>
                
                
            </tr>
        {% endfor %}
        </tbody>
    </table>
  </div>
  {% block javascripts %}
    {{ parent() }}
{% endblock %}
{% endblock %}
", "@BackOffice/commande/index.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\src\\BackOfficeBundle\\Resources\\views\\commande\\index.html.twig");
    }
}
