<?php

/* @Main/Fiche/fiche.html.twig */
class __TwigTemplate_e98c1c6d80603beb4b1fe061e5a497b76fe36d1edaa985eda599e3f79dfabe8a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Main/Fiche/fiche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/fiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/fiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 2, $this->source); })()), "titre", array()), "html", null, true);
        echo " - Lunette - Bocasay";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fiche.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t

          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading text-left\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 12, $this->source); })()), "titre", array()), "html", null, true);
        echo "</h1>
            
            <p class=\"lead text-left\">";
        // line 14
        echo twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 14, $this->source); })()), "description", array());
        echo "</p>
            <h3>Détail produit :</h3>
            <ul>
              <li><strong>Marque </strong>: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 17, $this->source); })()), "marque", array()), "marque", array()), "html", null, true);
        echo "</li>
              <li><strong>Genre </strong>: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 18, $this->source); })()), "genre", array()), "html", null, true);
        echo "</li>
              <li><strong>Type </strong>: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 19, $this->source); })()), "type", array()), "html", null, true);
        echo "</li>
              <li class=\"qtt\"><strong>Qtt </strong>: <input class=\"form-control\" type=\"number\" id=\"qttOg\" onchange=\"addQtt();\" name=\"qtt\" value=\"1\"></li>
              <li><strong>Prix unitaire  </strong>: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 21, $this->source); })()), "prixTtc", array()), "html", null, true);
        echo "€</li>
            </ul>
            
            <div class=\"row\">
                  <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_panierpage_ajout", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 25, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"GET\" name=\"addPanier\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 26, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"qtt\" value=\"1\" id=\"qtt\">
                  <div class=\"col-xs-6 text-center\">
                    <input type=\"submit\" name=\"commander\" class=\"btn btn-sm btn-default\" value=\"Ajouter Panier\">
                    </div>
                </form>
                  <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_inscriptionpage", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 32, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" name=\"cmdProduct\">
                    <input type=\"hidden\" name=\"titre\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 33, $this->source); })()), "titre", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 34, $this->source); })()), "id", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"prixTtc\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 35, $this->source); })()), "prixTtc", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"qttCmde\" value=\"1\" id=\"qttCmde\">
                    <div class=\"col-xs-6 text-center\"><input type=\"submit\" name=\"commander\" class=\"btn btn-sm btn-default\" value=\"Commander\"></div>
                  </form>
                </div>
            </form>
            <div class=\"inner row\">
            \t<h2>Nos Autres Produits</h2>
            \t<hr/>
            \t";
        // line 44
        if ((isset($context["autresProduits"]) || array_key_exists("autresProduits", $context) ? $context["autresProduits"] : (function () { throw new Twig_Error_Runtime('Variable "autresProduits" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["autresProduits"]) || array_key_exists("autresProduits", $context) ? $context["autresProduits"] : (function () { throw new Twig_Error_Runtime('Variable "autresProduits" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["un_produit"]) {
                // line 46
                echo "                    <div class=\"col-md-6\">
                        <h3><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_fichepage", array("id" => twig_get_attribute($this->env, $this->source, $context["un_produit"], "id", array()))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_produit"], "titre", array()), "html", null, true);
                echo "</strong></a></h3>
                        <div class=\"descLunette\">
                            ";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["un_produit"], "description", array());
                echo "
                        </div>
                        <p class=\"text-right price\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_produit"], "prixTtc", array()), "html", null, true);
                echo "€</p>
                        <div class=\"row\">
                            <div class=\"col-xs-6 text-left\"><a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_panierpage_ajout", array("id" => twig_get_attribute($this->env, $this->source, $context["un_produit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">Ajouter Panier</a></div>
                            <div class=\"col-xs-6 text-right\"><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_fichepage", array("id" => twig_get_attribute($this->env, $this->source, $context["un_produit"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">Commander</a></div>
                        </div>
                    </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['un_produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                  ";
        }
        // line 59
        echo "            \t
            </div>
            
          </div>

";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
function addQtt() {
    var qtt = document.getElementById(\"qttOg\").value;
    \$('#qtt').val(qtt);
    \$('#qttCmde').val(qtt);
    
    
}
</script>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Fiche/fiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 65,  239 => 64,  228 => 75,  226 => 64,  219 => 59,  216 => 58,  206 => 54,  202 => 53,  197 => 51,  192 => 49,  185 => 47,  182 => 46,  177 => 45,  175 => 44,  163 => 35,  159 => 34,  155 => 33,  151 => 32,  142 => 26,  138 => 25,  131 => 21,  126 => 19,  122 => 18,  118 => 17,  112 => 14,  107 => 12,  101 => 8,  92 => 7,  80 => 5,  75 => 4,  66 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}{{ produit.titre }} - Lunette - Bocasay{% endblock %}
{% block stylesheets %}
\t<link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('css/fiche.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
\t

          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading text-left\">{{ produit.titre }}</h1>
            
            <p class=\"lead text-left\">{{ produit.description|raw }}</p>
            <h3>Détail produit :</h3>
            <ul>
              <li><strong>Marque </strong>: {{ produit.marque.marque }}</li>
              <li><strong>Genre </strong>: {{ produit.genre }}</li>
              <li><strong>Type </strong>: {{ produit.type }}</li>
              <li class=\"qtt\"><strong>Qtt </strong>: <input class=\"form-control\" type=\"number\" id=\"qttOg\" onchange=\"addQtt();\" name=\"qtt\" value=\"1\"></li>
              <li><strong>Prix unitaire  </strong>: {{ produit.prixTtc }}€</li>
            </ul>
            
            <div class=\"row\">
                  <form action=\"{{ path('main_panierpage_ajout',{'id':produit.id})}}\" method=\"GET\" name=\"addPanier\">
                    <input type=\"hidden\" name=\"id\" value=\"{{ produit.id }}\">
                    <input type=\"hidden\" name=\"qtt\" value=\"1\" id=\"qtt\">
                  <div class=\"col-xs-6 text-center\">
                    <input type=\"submit\" name=\"commander\" class=\"btn btn-sm btn-default\" value=\"Ajouter Panier\">
                    </div>
                </form>
                  <form action=\"{{ path('main_inscriptionpage',{'id':produit.id})}}\" method=\"POST\" name=\"cmdProduct\">
                    <input type=\"hidden\" name=\"titre\" value=\"{{ produit.titre }}\">
                    <input type=\"hidden\" name=\"id\" value=\"{{ produit.id }}\">
                    <input type=\"hidden\" name=\"prixTtc\" value=\"{{ produit.prixTtc }}\">
                    <input type=\"hidden\" name=\"qttCmde\" value=\"1\" id=\"qttCmde\">
                    <div class=\"col-xs-6 text-center\"><input type=\"submit\" name=\"commander\" class=\"btn btn-sm btn-default\" value=\"Commander\"></div>
                  </form>
                </div>
            </form>
            <div class=\"inner row\">
            \t<h2>Nos Autres Produits</h2>
            \t<hr/>
            \t{% if autresProduits %}
                        {% for un_produit in autresProduits %}
                    <div class=\"col-md-6\">
                        <h3><a href=\"{{ path('main_fichepage',{'id':un_produit.id})}}\"><strong>{{ un_produit.titre }}</strong></a></h3>
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
            \t
            </div>
            
          </div>

{% block javascripts %}
  {{ parent()}}
<script type=\"text/javascript\">
function addQtt() {
    var qtt = document.getElementById(\"qttOg\").value;
    \$('#qtt').val(qtt);
    \$('#qttCmde').val(qtt);
    
    
}
</script>  
{% endblock %}        
{% endblock %}
", "@Main/Fiche/fiche.html.twig", "/opt/lampp/htdocs/challenge-symfony/src/MainBundle/Resources/views/Fiche/fiche.html.twig");
    }
}
