<?php

/* @Main/Fiche/inscription.html.twig */
class __TwigTemplate_f3399f48f907c97a30e197905b845a67ef7f2e04212054bb192782c46c84f243 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Main/Fiche/inscription.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/inscription.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), array(0 => "bootstrap_3_horizontal_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 3, $this->source); })()), "titre", array()), "html", null, true);
        echo " - Inscription - Bocasay!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fiche.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t

          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading text-left\">Votre Commande :</h1>
            <hr>
            <h2 class=\"text-left\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 15, $this->source); })()), "titre", array()), "html", null, true);
        echo "</h2>
            <p class=\"lead text-left\">";
        // line 16
        echo twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 16, $this->source); })()), "description", array());
        echo "</p>
            <h3>Détail produit :</h3>
            <ul>
              <li><strong>Marque </strong>: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 19, $this->source); })()), "marque", array()), "marque", array()), "html", null, true);
        echo "</li>
              <li><strong>Genre </strong>: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 20, $this->source); })()), "genre", array()), "html", null, true);
        echo "</li>
              <li><strong>Type </strong>: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 21, $this->source); })()), "type", array()), "html", null, true);
        echo "</li>
              <li><strong>Qtt </strong>: ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["qtt"]) || array_key_exists("qtt", $context) ? $context["qtt"] : (function () { throw new Twig_Error_Runtime('Variable "qtt" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</li>
              <li><strong>Prix Total </strong>: ";
        // line 23
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 23, $this->source); })()), "prixTtc", array()) * (isset($context["qtt"]) || array_key_exists("qtt", $context) ? $context["qtt"] : (function () { throw new Twig_Error_Runtime('Variable "qtt" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "€</li>
            </ul>
            
            <p class=\"text-right\"><a href=\"javascript:window.history.back();\">  « Prècedente</a></p>

            <div class=\"inner row\">
            \t<h2>Remplir votre Informations</h2>
            \t<hr/>

              ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), 'form_start', array("attr" => array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_validerCommandepage"))));
        echo "
                <input type=\"hidden\" name=\"titre\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 33, $this->source); })()), "titre", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 34, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"qttProduit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["qtt"]) || array_key_exists("qtt", $context) ? $context["qtt"] : (function () { throw new Twig_Error_Runtime('Variable "qtt" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"prixTtc\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 36, $this->source); })()), "prixTtc", array()) * (isset($context["qtt"]) || array_key_exists("qtt", $context) ? $context["qtt"] : (function () { throw new Twig_Error_Runtime('Variable "qtt" does not exist.', 36, $this->source); })())), "html", null, true);
        echo "\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), 'widget');
        echo "
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <input type=\"submit\" value=\"Valider votre commande\" class=\"btn btn-primary\" />
                            
                        </div>
                    </div>
                    

                ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "

            \t
            \t
            </div>
            <div class=\"inner row\">
              <h2>Nos Autres Produits</h2>
              <hr/>
              ";
        // line 54
        if ((isset($context["autresProduits"]) || array_key_exists("autresProduits", $context) ? $context["autresProduits"] : (function () { throw new Twig_Error_Runtime('Variable "autresProduits" does not exist.', 54, $this->source); })())) {
            // line 55
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["autresProduits"]) || array_key_exists("autresProduits", $context) ? $context["autresProduits"] : (function () { throw new Twig_Error_Runtime('Variable "autresProduits" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["un_produit"]) {
                // line 56
                echo "                    <div class=\"col-md-6\">
                        <h3><a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_fichepage", array("id" => twig_get_attribute($this->env, $this->source, $context["un_produit"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_produit"], "titre", array()), "html", null, true);
                echo "</a></h3>
                        <div class=\"descLunette\">
                            ";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["un_produit"], "description", array());
                echo "
                        </div>
                        <p class=\"text-right price\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_produit"], "prixTtc", array()), "html", null, true);
                echo "€</p>
                        <div class=\"row\">
                            <div class=\"col-xs-6 text-left\"><a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_panierpage_ajout", array("id" => twig_get_attribute($this->env, $this->source, $context["un_produit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">Ajouter Panier</a></div>
                            <div class=\"col-xs-6 text-right\"><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_fichepage", array("id" => twig_get_attribute($this->env, $this->source, $context["un_produit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">Commander</a></div>
                        </div>
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['un_produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                  ";
        }
        // line 69
        echo "              
            </div>
            
          </div>

          
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Fiche/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 69,  233 => 68,  223 => 64,  219 => 63,  214 => 61,  209 => 59,  202 => 57,  199 => 56,  194 => 55,  192 => 54,  181 => 46,  169 => 37,  165 => 36,  161 => 35,  157 => 34,  153 => 33,  149 => 32,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  121 => 19,  115 => 16,  111 => 15,  103 => 9,  94 => 8,  82 => 6,  77 => 5,  68 => 4,  49 => 3,  39 => 1,  37 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}
{% block title %}{{ produit.titre }} - Inscription - Bocasay!{% endblock %}
{% block stylesheets %}
\t<link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('css/fiche.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
\t

          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading text-left\">Votre Commande :</h1>
            <hr>
            <h2 class=\"text-left\">{{ produit.titre }}</h2>
            <p class=\"lead text-left\">{{ produit.description|raw }}</p>
            <h3>Détail produit :</h3>
            <ul>
              <li><strong>Marque </strong>: {{ produit.marque.marque }}</li>
              <li><strong>Genre </strong>: {{ produit.genre }}</li>
              <li><strong>Type </strong>: {{ produit.type }}</li>
              <li><strong>Qtt </strong>: {{ qtt }}</li>
              <li><strong>Prix Total </strong>: {{ produit.prixTtc*qtt }}€</li>
            </ul>
            
            <p class=\"text-right\"><a href=\"javascript:window.history.back();\">  « Prècedente</a></p>

            <div class=\"inner row\">
            \t<h2>Remplir votre Informations</h2>
            \t<hr/>

              {{ form_start(form,{'attr':{'action':path('main_validerCommandepage')}}) }}
                <input type=\"hidden\" name=\"titre\" value=\"{{ produit.titre }}\">
                <input type=\"hidden\" name=\"id\" value=\"{{ produit.id }}\">
                <input type=\"hidden\" name=\"qttProduit\" value=\"{{ qtt }}\">
                <input type=\"hidden\" name=\"prixTtc\" value=\"{{ produit.prixTtc*qtt }}\">
                    {{ form_widget(form) }}
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <input type=\"submit\" value=\"Valider votre commande\" class=\"btn btn-primary\" />
                            
                        </div>
                    </div>
                    

                {{ form_end(form) }}

            \t
            \t
            </div>
            <div class=\"inner row\">
              <h2>Nos Autres Produits</h2>
              <hr/>
              {% if autresProduits %}
                        {% for un_produit in autresProduits %}
                    <div class=\"col-md-6\">
                        <h3><a href=\"{{ path('main_fichepage',{'id':un_produit.id})}}\">{{ un_produit.titre }}</a></h3>
                        <div class=\"descLunette\">
                            {{ un_produit.description|raw }}
                        </div>
                        <p class=\"text-right price\">{{ un_produit.prixTtc }}€</p>
                        <div class=\"row\">
                            <div class=\"col-xs-6 text-left\"><a href=\"{{ path('main_panierpage_ajout',{'id':un_produit.id})}}\" class=\"btn btn-sm btn-default\">Ajouter Panier</a></div>
                            <div class=\"col-xs-6 text-right\"><a href=\"{{ path('main_fichepage',{'id':un_produit.id})}}\" class=\"btn btn-sm btn-default\">Commander</a></div>
                        </div>
                    </div>
                  {% endfor %}
                  {% endif %}
              
            </div>
            
          </div>

          
{% endblock %}
", "@Main/Fiche/inscription.html.twig", "/opt/lampp/htdocs/challenge-symfony/src/MainBundle/Resources/views/Fiche/inscription.html.twig");
    }
}
