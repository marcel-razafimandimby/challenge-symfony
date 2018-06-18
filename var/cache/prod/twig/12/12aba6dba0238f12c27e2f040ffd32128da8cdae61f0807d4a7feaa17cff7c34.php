<?php

/* base.backoffice.html.twig */
class __TwigTemplate_9ac7f92a3c987e5218e27e1aa7d5ea90d8faa4c19575d5a92abc5f55b14679b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom styles for backoffice -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/backoffice.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie8-responsive-file-warning.js"), "html", null, true);
        echo " \"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" width=\"50px\"> Bocasay lunette </a>

        </div>
        <p class=\"text-right deconnexion\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-off\"></span> Deconnexion</a></p>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"row\">

        

        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Gestion Commandes</a></li>
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_commande_index");
        echo "\">Liste</a></li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Produits</a></li>
            <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_produit_index");
        echo "\">Liste</a></li>
            <li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_produit_new");
        echo "\">Nouveau</a></li>
            
            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_stock_index");
        echo "\">Stock</a>
              <ul>
                <li><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_entreeproduit_index");
        echo "\">Ajout</a></li>
                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_sortieproduit_index");
        echo "\">Retrait</a></li>
              </ul>
            </li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Fournisseurs</a></li>
            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_fournisseur_index");
        echo "\">Liste</a></li>
            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_fournisseur_new");
        echo "\">Nouveau</a></li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Marque Produits</a></li>
            <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_marqueproduit_index");
        echo "\">Liste</a></li>
            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_marqueproduit_new");
        echo "\">Nouveau</a></li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Clients</a></li>
            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_client_index");
        echo "\">Liste</a></li>
            <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("backoffice_client_new");
        echo "\">Nouveau client</a></li>
            
          </ul>
          
        </div>
        <div class=\"col-sm-9 col-sm-offset-2 col-md-10 main\">

            ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
          
        </div>
      </div>
    </div>
        
        ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administration lunette - Bocasay!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "            <!-- Bootstrap core JavaScript
                ================================================== -->
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
                <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>
                <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/docs.min.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\">
                  function deleteList(){
                      if(confirm('Voulez-vous vraiement le supprimer?')){
                          return true;
                      }else{
                          return false;
                      }
                  }
              </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 98,  240 => 97,  235 => 94,  229 => 93,  218 => 86,  207 => 6,  195 => 5,  186 => 109,  184 => 93,  176 => 87,  174 => 86,  164 => 79,  160 => 78,  152 => 73,  148 => 72,  140 => 67,  136 => 66,  126 => 59,  122 => 58,  117 => 56,  112 => 54,  108 => 53,  100 => 48,  85 => 36,  77 => 33,  56 => 15,  50 => 12,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Administration lunette - Bocasay!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom styles for backoffice -->
        <link href=\"{{ asset('css/backoffice.css') }}\" rel=\"stylesheet\">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src=\"{{ asset('js/ie8-responsive-file-warning.js') }} \"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"{{ path('main_homepage') }}\"><img src=\"{{ asset('images/logo.png')}}\" width=\"50px\"> Bocasay lunette </a>

        </div>
        <p class=\"text-right deconnexion\"><a href=\"{{ path(\"fos_user_security_logout\") }}\"><span class=\"glyphicon glyphicon-off\"></span> Deconnexion</a></p>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"row\">

        

        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Gestion Commandes</a></li>
            <li><a href=\"{{ path('backoffice_commande_index') }}\">Liste</a></li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Produits</a></li>
            <li><a href=\"{{ path('backoffice_produit_index') }}\">Liste</a></li>
            <li><a href=\"{{ path('backoffice_produit_new') }}\">Nouveau</a></li>
            
            <li><a href=\"{{ path(\"backoffice_stock_index\")}}\">Stock</a>
              <ul>
                <li><a href=\"{{ path('backoffice_entreeproduit_index') }}\">Ajout</a></li>
                <li><a href=\"{{ path('backoffice_sortieproduit_index') }}\">Retrait</a></li>
              </ul>
            </li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Fournisseurs</a></li>
            <li><a href=\"{{ path('backoffice_fournisseur_index') }}\">Liste</a></li>
            <li><a href=\"{{ path('backoffice_fournisseur_new') }}\">Nouveau</a></li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Marque Produits</a></li>
            <li><a href=\"{{ path('backoffice_marqueproduit_index') }}\">Liste</a></li>
            <li><a href=\"{{ path('backoffice_marqueproduit_new') }}\">Nouveau</a></li>
            
          </ul>
          <ul class=\"nav nav-sidebar\">
            <li class=\"active\"><a>Clients</a></li>
            <li><a href=\"{{ path('backoffice_client_index') }}\">Liste</a></li>
            <li><a href=\"{{ path('backoffice_client_new') }}\">Nouveau client</a></li>
            
          </ul>
          
        </div>
        <div class=\"col-sm-9 col-sm-offset-2 col-md-10 main\">

            {% block body %}{% endblock %}

          
        </div>
      </div>
    </div>
        
        {% block javascripts %}
            <!-- Bootstrap core JavaScript
                ================================================== -->
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
                <script src=\"{{ asset('js/bootstrap.min.js') }} \"></script>
                <script src=\"{{ asset('js/docs.min.js')}}\"></script>
                <script type=\"text/javascript\">
                  function deleteList(){
                      if(confirm('Voulez-vous vraiement le supprimer?')){
                          return true;
                      }else{
                          return false;
                      }
                  }
              </script>
        {% endblock %}
    </body>
</html>
", "base.backoffice.html.twig", "C:\\wamp64\\www\\bocasay\\challenge\\app\\Resources\\views\\base.backoffice.html.twig");
    }
}
