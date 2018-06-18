<?php

/* @Main/Fiche/panier.html.twig */
class __TwigTemplate_3315577a4a1c08fb28c849123d1206648d21ecb0ed342aefb5bca4dc32986fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Main/Fiche/panier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Fiche/panier.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier - Lunettes - Bocasay";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fiche.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t

          <div class=\"inner cover\">
          \t
            <h1 class=\"cover-heading text-left\">Mon Panier</h1>
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_validerCommandepage"))));
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
        // line 25
        $context["totalPanier"] = 0;
        // line 26
        echo "                  ";
        if ((isset($context["produitPanier"]) ? $context["produitPanier"] : $this->getContext($context, "produitPanier"))) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produitPanier"]) ? $context["produitPanier"] : $this->getContext($context, "produitPanier")));
            foreach ($context['_seq'] as $context["_key"] => $context["un_panier"]) {
                // line 28
                echo "                      ";
                $context["qttPanier"] = 1;
                // line 29
                echo "                      ";
                if ($this->getAttribute((isset($context["tabIdsQtt"]) ? $context["tabIdsQtt"] : null), $this->getAttribute($context["un_panier"], "id", array()), array(), "array", true, true)) {
                    // line 30
                    echo "                        ";
                    $context["qttPanier"] = $this->getAttribute((isset($context["tabIdsQtt"]) ? $context["tabIdsQtt"] : $this->getContext($context, "tabIdsQtt")), $this->getAttribute($context["un_panier"], "id", array()), array(), "array");
                    // line 31
                    echo "                      ";
                }
                // line 32
                echo "                      ";
                $context["totalPanier"] = ((isset($context["totalPanier"]) ? $context["totalPanier"] : $this->getContext($context, "totalPanier")) + ($this->getAttribute($context["un_panier"], "prixTtc", array()) * (isset($context["qttPanier"]) ? $context["qttPanier"] : $this->getContext($context, "qttPanier"))));
                // line 33
                echo "                  <tr>
                    <input type=\"hidden\" name=\"id[]\" value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "id", array()), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"prixVente[]\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, ($this->getAttribute($context["un_panier"], "prixTtc", array()) * (isset($context["qttPanier"]) ? $context["qttPanier"] : $this->getContext($context, "qttPanier"))), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"prixUnitaire[]\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "prixTtc", array()), "html", null, true);
                echo "\">
                    <input type=\"hidden\" name=\"prixUnitaire_";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "id", array()), "html", null, true);
                echo "\" id=\"prixUnitaire_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "prixTtc", array()), "html", null, true);
                echo "\">
                    <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "titre", array()), "html", null, true);
                echo "</td>
                    <td><input class=\"form-control qttPanier\" type=\"number\" id=\"qtt_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "id", array()), "html", null, true);
                echo "\" name=\"qtt[]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["qttPanier"]) ? $context["qttPanier"] : $this->getContext($context, "qttPanier")), "html", null, true);
                echo "\" onchange=\"addQtt(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["qttPanier"]) ? $context["qttPanier"] : $this->getContext($context, "qttPanier")), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["totalPanier"]) ? $context["totalPanier"] : $this->getContext($context, "totalPanier")), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "prixTtc", array()), "html", null, true);
                echo ");\"></td>
                    <td class=\"price_";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["un_panier"], "prixTtc", array()) * (isset($context["qttPanier"]) ? $context["qttPanier"] : $this->getContext($context, "qttPanier"))), "html", null, true);
                echo "€</td>
                    <td><a href=\"";
                // line 41
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_panierpage");
                echo "?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["un_panier"], "id", array()), "html", null, true);
                echo "&delete=1&qtt=1\" onclick=\"return checkDelete();\"><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></td>
                  </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['un_panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                  ";
        }
        // line 45
        echo "                  
                  <tr class=\"sousTotal\">
                    <input type=\"hidden\" name=\"totalPanier\" id=\"totalPanier\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["totalPanier"]) ? $context["totalPanier"] : $this->getContext($context, "totalPanier")), "html", null, true);
        echo "\">
                    <td>&nbsp;</td>
                    <td>Total</td>
                    <td class=\"sousTotalPanier\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["totalPanier"]) ? $context["totalPanier"] : $this->getContext($context, "totalPanier")), "html", null, true);
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
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <input type=\"submit\" id=\"btnValider\" value=\"Valider votre commande\" ";
        // line 65
        if (((isset($context["totalPanier"]) ? $context["totalPanier"] : $this->getContext($context, "totalPanier")) == 0)) {
            echo " disabled=\"disabled\" ";
        }
        echo "class=\"btn btn-primary\" />
                            
                        </div>
                    </div>
                    

                
            \t
            </div>
            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          </div>

  ";
        // line 77
        $this->displayBlock('javascript', $context, $blocks);
        // line 105
        echo "       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 78
        echo "  ";
        $this->displayParentBlock("javascript", $context, $blocks);
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
        return array (  279 => 78,  270 => 77,  259 => 105,  257 => 77,  251 => 74,  237 => 65,  231 => 62,  216 => 50,  210 => 47,  206 => 45,  203 => 44,  192 => 41,  186 => 40,  172 => 39,  168 => 38,  160 => 37,  156 => 36,  152 => 35,  148 => 34,  145 => 33,  142 => 32,  139 => 31,  136 => 30,  133 => 29,  130 => 28,  125 => 27,  122 => 26,  120 => 25,  106 => 14,  99 => 9,  90 => 8,  78 => 6,  73 => 5,  64 => 4,  46 => 3,  36 => 1,  34 => 2,  11 => 1,);
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
                      {% if tabIdsQtt[un_panier.id] is defined %}
                        {% set qttPanier = tabIdsQtt[un_panier.id] %}
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
                    <td><a href=\"{{ path('main_panierpage')}}?id={{un_panier.id}}&delete=1&qtt=1\" onclick=\"return checkDelete();\"><span class=\"glyphicon glyphicon-remove\"></span> Supprimer</a></td>
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

  {% block javascript %}
  {{ parent()}}
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
", "@Main/Fiche/panier.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\src\\MainBundle\\Resources\\views\\Fiche\\panier.html.twig");
    }
}
