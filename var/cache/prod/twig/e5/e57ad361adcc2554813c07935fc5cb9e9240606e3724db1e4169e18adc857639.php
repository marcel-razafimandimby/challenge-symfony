<?php

/* @BackOffice/sortieproduit/index.html.twig */
class __TwigTemplate_cbf0e800efd1c67d1890c490b6adfe9aedb47b66ea08ff943590cc2ff4a12000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "@BackOffice/sortieproduit/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/sortieproduit/index.html.twig"));

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
    <h1>Historique retrait Produits :</h1>
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
                <th>Date retrait</th>
                <th>Produit</th>
                <th>Qtt</th>
                
                
                <!--th>Actions</th-->
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortieProduits"]) ? $context["sortieProduits"] : $this->getContext($context, "sortieProduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["sortieProduit"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            if ($this->getAttribute($context["sortieProduit"], "dateSortie", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sortieProduit"], "dateSortie", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sortieProduit"], "produit", array()), "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["sortieProduit"], "qtt", array()), "html", null, true);
            echo "</td>
                ";
            // line 43
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortieProduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
    <ul class=\"list-unstyled action\">
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_sortieproduit_new");
        echo "\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Nouveau Retrait produit</a>
        </li>
    </ul>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/sortieproduit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  125 => 45,  118 => 43,  114 => 31,  110 => 30,  104 => 29,  101 => 28,  97 => 27,  82 => 14,  75 => 12,  62 => 10,  58 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Historique retrait Produits :</h1>
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
                <th>Date retrait</th>
                <th>Produit</th>
                <th>Qtt</th>
                
                
                <!--th>Actions</th-->
            </tr>
        </thead>
        <tbody>
        {% for sortieProduit in sortieProduits %}
            <tr>
                <td>{% if sortieProduit.dateSortie %}{{ sortieProduit.dateSortie|date('Y-m-d') }}{% endif %}</td>
                <td>{{ sortieProduit.produit.titre }}</td>
                <td>{{ sortieProduit.qtt }}</td>
                {#<td>
                    <ul class=\"list-unstyled action\">
                        <li>
                            <a href=\"{{ path('backoffice_sortieproduit_edit', { 'id': sortieProduit.id }) }}\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> Edit</a>
                        </li>
                        <li>
                            <a href=\"{{ path('backoffice_sortieproduit_delete', { 'id': sortieProduit.id }) }}\" onclick=\"return deleteList();\"><span class=\"glyphicon glyphicon glyphicon-remove\" aria-hidden=\"true\" ></span> Delete</a>
                        </li>
                    </ul>
                    
                </td>#}
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul class=\"list-unstyled action\">
        <li>
            <a href=\"{{ path('backoffice_sortieproduit_new') }}\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Nouveau Retrait produit</a>
        </li>
    </ul>
    
</div>
{% endblock %}
", "@BackOffice/sortieproduit/index.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\src\\BackOfficeBundle\\Resources\\views\\sortieproduit\\index.html.twig");
    }
}
