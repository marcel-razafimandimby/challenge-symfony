<?php

/* @Main/Fiche/panier.html.twig */
class __TwigTemplate_809a6cbcca223ce427043f7db7754e4e162fb34a30aa9addd8eadf2fe8627430 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Main/Fiche/panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/panier.html.twig"));

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

        echo "Mon panier - Lunettes - Bocasay";
        
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
            <h1 class=\"cover-heading text-left\">Mon Panier</h1>
            <ul class=\"list-unstyled\">
              ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 16
            echo "                  <li class=\"alert ";
            if (($context["key"] == "error")) {
                echo "alert-danger";
            } else {
                echo "alert-success";
            }
            echo "\">
                      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                          ";
                if (($context["key"] == "error")) {
                    echo "<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>";
                } else {
                    echo "<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>&nbsp;";
                }
                echo " ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                  </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "              </ul>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', array("attr" => array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_validerCommandepage"))));
        echo "
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Produit pour achat</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 34
        $context["totalPanier"] = 0;
        // line 35
        echo "                  ";
        if ((isset($context["produitPanier"]) || array_key_exists("produitPanier", $context) ? $context["produitPanier"] : (function () { throw new Twig_Error_Runtime('Variable "produitPanier" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produitPanier"]) || array_key_exists("produitPanier", $context) ? $context["produitPanier"] : (function () { throw new Twig_Error_Runtime('Variable "produitPanier" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["un_panier"]) {
                // line 37
                echo "                      ";
                $context["qttPanier"] = 1;
                // line 38
                echo "                      ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["un_panier"], "qtt", array()))) {
                    // line 39
                    echo "                        ";
                    $context["qttPanier"] = twig_get_attribute($this->env, $this->source, $context["un_panier"], "qtt", array());
                    // line 40
                    echo "                      ";
                }
                // line 41
                echo "                      ";
                $context["totalPanier"] = ((isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new Twig_Error_Runtime('Variable "totalPanier" does not exist.', 41, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["un_panier"], "prixTtc", array()) * (isset($context["qttPanier"]) || array_key_exists("qttPanier", $context) ? $context["qttPanier"] : (function () { throw new Twig_Error_Runtime('Variable "qttPanier" does not exist.', 41, $this->source); })())));
                // line 42
                echo "                  <tr>
                    <input type=\"hidden\" name=\"id[]\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "id", array()), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"prixVente[]\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["un_panier"], "prixTtc", array()) * (isset($context["qttPanier"]) || array_key_exists("qttPanier", $context) ? $context["qttPanier"] : (function () { throw new Twig_Error_Runtime('Variable "qttPanier" does not exist.', 44, $this->source); })())), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"prixUnitaire[]\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "prixTtc", array()), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"prixUnitaire_";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "id", array()), "html", null, true);
                echo "\" id=\"prixUnitaire_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "prixTtc", array()), "html", null, true);
                echo "\">
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "titre", array()), "html", null, true);
                echo "</td>
                    <td><input class=\"form-control qttPanier\" type=\"number\" id=\"qtt_";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "id", array()), "html", null, true);
                echo "\" name=\"qtt[]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["qttPanier"]) || array_key_exists("qttPanier", $context) ? $context["qttPanier"] : (function () { throw new Twig_Error_Runtime('Variable "qttPanier" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\" onchange=\"addQtt(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["qttPanier"]) || array_key_exists("qttPanier", $context) ? $context["qttPanier"] : (function () { throw new Twig_Error_Runtime('Variable "qttPanier" does not exist.', 48, $this->source); })()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new Twig_Error_Runtime('Variable "totalPanier" does not exist.', 48, $this->source); })()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "prixTtc", array()), "html", null, true);
                echo ");\"></td>
                    <td class=\"price_";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["un_panier"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["un_panier"], "prixTtc", array()) * (isset($context["qttPanier"]) || array_key_exists("qttPanier", $context) ? $context["qttPanier"] : (function () { throw new Twig_Error_Runtime('Variable "qttPanier" does not exist.', 49, $this->source); })())), "html", null, true);
                echo "€</td>
                    <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_panierpage_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["un_panier"], "id", array()))), "html", null, true);
                echo "\" onclick=\"return checkDelete();\"><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></td>
                  </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['un_panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                  ";
        }
        // line 54
        echo "                  
                  <tr class=\"sousTotal\">
                    <input type=\"hidden\" name=\"totalPanier\" id=\"totalPanier\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new Twig_Error_Runtime('Variable "totalPanier" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\">
                    <td>&nbsp;</td>
                    <td>Total</td>
                    <td class=\"sousTotalPanier\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new Twig_Error_Runtime('Variable "totalPanier" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "€</td>
                    <td>&nbsp;</td>
                  </tr>
                </tbody>

              </table>
            
            <div class=\"inner row\">
            \t<h2>Remplir votre Information</h2>
            \t<hr/>
            \t
                
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), 'widget');
        echo "
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <input type=\"submit\" id=\"btnValider\" value=\"Valider votre commande\" ";
        // line 74
        if (((isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new Twig_Error_Runtime('Variable "totalPanier" does not exist.', 74, $this->source); })()) == 0)) {
            echo " disabled=\"disabled\" ";
        }
        echo "class=\"btn btn-primary\" />
                            
                        </div>
                    </div>
                    

                
            \t
            </div>
            ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
          </div>

  ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\">
  function checkDelete() {
     if(confirm('Voulez-vous vraiement le supprimer?')){
          return true;
      }else{
          return false;
      }
  }
  function addQtt(id,qttOriginale,prixTotale,prixUnitaire) {
    var qtt = document.getElementById(\"qtt_\"+id).value;
    \$(\".price_\"+id).html((qtt*prixUnitaire)+\"€\");
    var Total = 0;
    \$('input[name^=\"id\"]').each(function() {
        var qttU = \$('#qtt_'+\$(this).val()).val();
        var pTtc = \$('#prixUnitaire_'+\$(this).val()).val();
        Total = Total + (qttU*pTtc);
        //alert(\$(this).val());
    });
    \$(\".sousTotalPanier\").html(Total+\"€\");
    if(Total>0){
      \$('#btnValider').prop('disabled', false);
    }else
       \$('#btnValider').prop('disabled', true);
    
}
  </script>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Fiche/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 87,  315 => 86,  304 => 114,  302 => 86,  296 => 83,  282 => 74,  276 => 71,  261 => 59,  255 => 56,  251 => 54,  248 => 53,  239 => 50,  233 => 49,  219 => 48,  215 => 47,  207 => 46,  203 => 45,  199 => 44,  195 => 43,  192 => 42,  189 => 41,  186 => 40,  183 => 39,  180 => 38,  177 => 37,  172 => 36,  169 => 35,  167 => 34,  153 => 23,  150 => 22,  143 => 20,  128 => 18,  124 => 17,  115 => 16,  111 => 15,  103 => 9,  94 => 8,  82 => 6,  77 => 5,  68 => 4,  50 => 3,  40 => 1,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}
{% block title %}Mon panier - Lunettes - Bocasay{% endblock %}
{% block stylesheets %}
\t<link href=\"{{ asset('css/index.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('css/fiche.css') }}\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
\t

          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading text-left\">Mon Panier</h1>
            <ul class=\"list-unstyled\">
              {% for key, messages in app.session.flashbag.all() %}
                  <li class=\"alert {% if key == 'error'%}alert-danger{%else%}alert-success{% endif %}\">
                      {% for message in messages %}
                          {%if key == 'error'%}<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span><span class=\"sr-only\">Error:</span>{% else %}<span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span>&nbsp;{% endif%} {{ message }}
                      {% endfor %}
                  </li>
              {% endfor %}
              </ul>
            {{ form_start(form,{'attr':{'action':path('main_validerCommandepage')}}) }}
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Produit pour achat</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  {% set totalPanier = 0 %}
                  {% if produitPanier %}
                    {% for un_panier in produitPanier %}
                      {% set qttPanier = 1 %}
                      {% if un_panier.qtt is not null %}
                        {% set qttPanier = un_panier.qtt %}
                      {% endif %}
                      {% set totalPanier = totalPanier + (un_panier.prixTtc*qttPanier) %}
                  <tr>
                    <input type=\"hidden\" name=\"id[]\" value=\"{{ un_panier.id }}\">
                    <input type=\"hidden\" name=\"prixVente[]\" value=\"{{ un_panier.prixTtc*qttPanier }}\">
                    <input type=\"hidden\" name=\"prixUnitaire[]\" value=\"{{ un_panier.prixTtc }}\">
                    <input type=\"hidden\" name=\"prixUnitaire_{{ un_panier.id }}\" id=\"prixUnitaire_{{ un_panier.id }}\" value=\"{{ un_panier.prixTtc }}\">
                    <td>{{ un_panier.titre }}</td>
                    <td><input class=\"form-control qttPanier\" type=\"number\" id=\"qtt_{{ un_panier.id }}\" name=\"qtt[]\" value=\"{{ qttPanier }}\" onchange=\"addQtt({{ un_panier.id }},{{ qttPanier }},{{ totalPanier }},{{ un_panier.prixTtc }});\"></td>
                    <td class=\"price_{{ un_panier.id }}\">{{ un_panier.prixTtc*qttPanier }}€</td>
                    <td><a href=\"{{ path('main_panierpage_delete',{'id':un_panier.id})}}\" onclick=\"return checkDelete();\"><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></td>
                  </tr>
                    {% endfor %}
                  {% endif %}
                  
                  <tr class=\"sousTotal\">
                    <input type=\"hidden\" name=\"totalPanier\" id=\"totalPanier\" value=\"{{ totalPanier }}\">
                    <td>&nbsp;</td>
                    <td>Total</td>
                    <td class=\"sousTotalPanier\">{{ totalPanier }}€</td>
                    <td>&nbsp;</td>
                  </tr>
                </tbody>

              </table>
            
            <div class=\"inner row\">
            \t<h2>Remplir votre Information</h2>
            \t<hr/>
            \t
                
                    {{ form_widget(form) }}
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <input type=\"submit\" id=\"btnValider\" value=\"Valider votre commande\" {% if totalPanier == 0 %} disabled=\"disabled\" {% endif %}class=\"btn btn-primary\" />
                            
                        </div>
                    </div>
                    

                
            \t
            </div>
            {{ form_end(form) }}
          </div>

  {% block javascripts %}
  {{ parent() }}
  <script type=\"text/javascript\">
  function checkDelete() {
     if(confirm('Voulez-vous vraiement le supprimer?')){
          return true;
      }else{
          return false;
      }
  }
  function addQtt(id,qttOriginale,prixTotale,prixUnitaire) {
    var qtt = document.getElementById(\"qtt_\"+id).value;
    \$(\".price_\"+id).html((qtt*prixUnitaire)+\"€\");
    var Total = 0;
    \$('input[name^=\"id\"]').each(function() {
        var qttU = \$('#qtt_'+\$(this).val()).val();
        var pTtc = \$('#prixUnitaire_'+\$(this).val()).val();
        Total = Total + (qttU*pTtc);
        //alert(\$(this).val());
    });
    \$(\".sousTotalPanier\").html(Total+\"€\");
    if(Total>0){
      \$('#btnValider').prop('disabled', false);
    }else
       \$('#btnValider').prop('disabled', true);
    
}
  </script>  
{% endblock %}       
{% endblock %}
", "@Main/Fiche/panier.html.twig", "/opt/lampp/htdocs/challenge-symfony/src/MainBundle/Resources/views/Fiche/panier.html.twig");
    }
}
