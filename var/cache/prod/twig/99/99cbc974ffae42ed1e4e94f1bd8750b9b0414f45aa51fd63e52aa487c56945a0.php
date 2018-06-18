<?php

/* @BackOffice/entreeproduit/show.html.twig */
class __TwigTemplate_a51621ac7f37d64492a8d78e1fb060fc20ad002656962d35b6905ec3b45e6512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@BackOffice/entreeproduit/show.html.twig", 1);
        $this->blocks = array(
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/entreeproduit/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Entreeproduit</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreeProduit"]) ? $context["entreeProduit"] : $this->getContext($context, "entreeProduit")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Qtt</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreeProduit"]) ? $context["entreeProduit"] : $this->getContext($context, "entreeProduit")), "qtt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixentree</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entreeProduit"]) ? $context["entreeProduit"] : $this->getContext($context, "entreeProduit")), "prixEntree", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateentree</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["entreeProduit"]) ? $context["entreeProduit"] : $this->getContext($context, "entreeProduit")), "dateEntree", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entreeProduit"]) ? $context["entreeProduit"] : $this->getContext($context, "entreeProduit")), "dateEntree", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_entreeproduit_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_entreeproduit_edit", array("id" => $this->getAttribute((isset($context["entreeProduit"]) ? $context["entreeProduit"] : $this->getContext($context, "entreeProduit")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/entreeproduit/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <h1>Entreeproduit</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entreeProduit.id }}</td>
            </tr>
            <tr>
                <th>Qtt</th>
                <td>{{ entreeProduit.qtt }}</td>
            </tr>
            <tr>
                <th>Prixentree</th>
                <td>{{ entreeProduit.prixEntree }}</td>
            </tr>
            <tr>
                <th>Dateentree</th>
                <td>{% if entreeProduit.dateEntree %}{{ entreeProduit.dateEntree|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('backoffice_entreeproduit_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('backoffice_entreeproduit_edit', { 'id': entreeProduit.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@BackOffice/entreeproduit/show.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\src\\BackOfficeBundle\\Resources\\views\\entreeproduit\\show.html.twig");
    }
}
