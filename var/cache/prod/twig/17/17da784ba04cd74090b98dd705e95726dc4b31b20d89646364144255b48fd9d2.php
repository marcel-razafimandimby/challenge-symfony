<?php

/* @BackOffice/produit/index.html.twig */
class __TwigTemplate_04dbe1252efaee32d4b10048e175b7fc38de7b4473432915c2defbe044bcd284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "@BackOffice/produit/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/produit/index.html.twig"));

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
    <h1>Liste Produits</h1>
    <ul class=\"list-unstyled\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 8
            echo "        <li class=\"alert ";
            if (($context["key"] == "error")) {
                echo "alert-danger";
            } else {
                echo "alert-success";
            }
            echo "\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "                ";
                if (($context["key"] == "error")) {
                    echo "<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>";
                }
                echo " ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                
                <th>Titre</th>
                <th>Description</th>
                <th>Marque</th>
                <th>Fournisseur</th>
                <th>Qtt</th>
                <th>Prix TTC</th>
                <th>Type</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 32
            echo "            <tr>
                
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_truncate_filter($this->env, $this->getAttribute($context["produit"], "description", array()), 100, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "marque", array()), "marque", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["produit"], "marque", array()), "fournisseur", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qtt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixTtc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "genre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"list-unstyled action\">
                        <li>
                            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_produit_edit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Edit</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_produit_delete", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return deleteList();\"><span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\" ></span> Delete</a>
                        </li>
                    </ul>
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
    <ul class=\"list-unstyled action\">
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_produit_new");
        echo "\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Nouveau Produit</a>
        </li>
    </ul>
    
</div>
";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 65,  178 => 64,  170 => 59,  164 => 55,  151 => 48,  145 => 45,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  106 => 32,  102 => 31,  83 => 14,  76 => 12,  63 => 10,  59 => 9,  50 => 8,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    <h1>Liste Produits</h1>
    <ul class=\"list-unstyled\">
    {% for key, messages in app.session.flashbag.all() %}
        <li class=\"alert {% if key == 'error'%}alert-danger{%else%}alert-success{% endif %}\">
            {% for message in messages %}
                {%if key == 'error'%}<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>{% endif%} {{ message }}
            {% endfor %}
        </li>
    {% endfor %}
    </ul>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                
                <th>Titre</th>
                <th>Description</th>
                <th>Marque</th>
                <th>Fournisseur</th>
                <th>Qtt</th>
                <th>Prix TTC</th>
                <th>Type</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                
                <td>{{ produit.titre }}</td>
                <td>{{ produit.description|truncate(100, true)|raw }}</td>
                <td>{{ produit.marque.marque }}</td>
                <td>{{ produit.marque.fournisseur.nom }}</td>
                <td>{{ produit.qtt }}</td>
                <td>{{ produit.prixTtc }}</td>
                <td>{{ produit.type }}</td>
                <td>{{ produit.genre }}</td>
                <td>
                    <ul class=\"list-unstyled action\">
                        <li>
                            <a href=\"{{ path('backoffice_produit_edit', { 'id': produit.id }) }}\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Edit</a>
                        </li>
                        <li>
                            <a href=\"{{ path('backoffice_produit_delete', { 'id': produit.id }) }}\" onclick=\"return deleteList();\"><span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\" ></span> Delete</a>
                        </li>
                    </ul>
                    
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul class=\"list-unstyled action\">
        <li>
            <a href=\"{{ path('backoffice_produit_new') }}\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Nouveau Produit</a>
        </li>
    </ul>
    
</div>
{% block javascripts %}
    {{ parent() }}
{% endblock %}
{% endblock %}
", "@BackOffice/produit/index.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\src\\BackOfficeBundle\\Resources\\views\\produit\\index.html.twig");
    }
}
