<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // main_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MainBundle\\Controller\\IndexController::indexAction',  '_route' => 'main_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_main_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'main_homepage'));
            }

            return $ret;
        }
        not_main_homepage:

        if (0 === strpos($pathinfo, '/lunette')) {
            // main_fichepage
            if (preg_match('#^/lunette/(?P<id>[^/]++)/fiche\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_fichepage')), array (  '_controller' => 'MainBundle\\Controller\\FicheController::ficheAction',));
            }

            // main_inscriptionpage
            if (preg_match('#^/lunette/(?P<id>[^/]++)/inscription\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_inscriptionpage')), array (  '_controller' => 'MainBundle\\Controller\\FicheController::inscriptionAction',));
            }

            // main_panierpage
            if ('/lunette/mon-panier.html' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\FicheController::panierAction',  '_route' => 'main_panierpage',);
            }

            // main_panierpage_ajout
            if (preg_match('#^/lunette/(?P<id>[^/]++)/ajout\\-panier\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_panierpage_ajout')), array (  '_controller' => 'MainBundle\\Controller\\FicheController::panierAddAction',));
            }

            // main_panierpage_delete
            if (preg_match('#^/lunette/(?P<id>[^/]++)/delete\\-panier\\.html$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'main_panierpage_delete')), array (  '_controller' => 'MainBundle\\Controller\\FicheController::panierDeleteAction',));
            }

            // main_validerCommandepage
            if ('/lunette/valider-commande.html' === $pathinfo) {
                return array (  '_controller' => 'MainBundle\\Controller\\FicheController::validerCommandeAction',  '_route' => 'main_validerCommandepage',);
            }

        }

        elseif (0 === strpos($pathinfo, '/backoffice')) {
            if (0 === strpos($pathinfo, '/backoffice/client')) {
                // backoffice_client_index
                if ('/backoffice/client' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::indexAction',  '_route' => 'backoffice_client_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_client_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_client_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_client_index;
                    }

                    return $ret;
                }
                not_backoffice_client_index:

                // backoffice_client_show
                if (preg_match('#^/backoffice/client/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_client_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_client_show;
                    }

                    return $ret;
                }
                not_backoffice_client_show:

                // backoffice_client_new
                if ('/backoffice/client/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::newAction',  '_route' => 'backoffice_client_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_client_new;
                    }

                    return $ret;
                }
                not_backoffice_client_new:

                // backoffice_client_edit
                if (preg_match('#^/backoffice/client/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_client_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_client_edit;
                    }

                    return $ret;
                }
                not_backoffice_client_edit:

                // backoffice_client_delete
                if (preg_match('#^/backoffice/client/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_client_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ClientController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                        goto not_backoffice_client_delete;
                    }

                    return $ret;
                }
                not_backoffice_client_delete:

            }

            elseif (0 === strpos($pathinfo, '/backoffice/commande')) {
                // backoffice_commande_index
                if ('/backoffice/commande' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\CommandeController::indexAction',  '_route' => 'backoffice_commande_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_commande_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_commande_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_commande_index;
                    }

                    return $ret;
                }
                not_backoffice_commande_index:

                // backoffice_commande_show
                if (preg_match('#^/backoffice/commande/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_commande_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CommandeController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_commande_show;
                    }

                    return $ret;
                }
                not_backoffice_commande_show:

                // backoffice_commande_new
                if ('/backoffice/commande/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\CommandeController::newAction',  '_route' => 'backoffice_commande_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_commande_new;
                    }

                    return $ret;
                }
                not_backoffice_commande_new:

                // backoffice_commande_edit
                if (preg_match('#^/backoffice/commande/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_commande_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CommandeController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_commande_edit;
                    }

                    return $ret;
                }
                not_backoffice_commande_edit:

                // backoffice_commande_delete
                if (preg_match('#^/backoffice/commande/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_commande_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CommandeController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_commande_delete;
                    }

                    return $ret;
                }
                not_backoffice_commande_delete:

                // backoffice_commande_details
                if (0 === strpos($pathinfo, '/backoffice/commande/detail') && preg_match('#^/backoffice/commande/detail/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_commande_details')), array (  '_controller' => 'BackOfficeBundle\\Controller\\CommandeController::detailAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_commande_details;
                    }

                    return $ret;
                }
                not_backoffice_commande_details:

            }

            elseif (0 === strpos($pathinfo, '/backoffice/fournisseur')) {
                // backoffice_fournisseur_index
                if ('/backoffice/fournisseur' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\FournisseurController::indexAction',  '_route' => 'backoffice_fournisseur_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_fournisseur_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_fournisseur_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_fournisseur_index;
                    }

                    return $ret;
                }
                not_backoffice_fournisseur_index:

                // backoffice_fournisseur_show
                if (preg_match('#^/backoffice/fournisseur/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_fournisseur_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\FournisseurController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_fournisseur_show;
                    }

                    return $ret;
                }
                not_backoffice_fournisseur_show:

                // backoffice_fournisseur_new
                if ('/backoffice/fournisseur/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\FournisseurController::newAction',  '_route' => 'backoffice_fournisseur_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_fournisseur_new;
                    }

                    return $ret;
                }
                not_backoffice_fournisseur_new:

                // backoffice_fournisseur_edit
                if (preg_match('#^/backoffice/fournisseur/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_fournisseur_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\FournisseurController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_fournisseur_edit;
                    }

                    return $ret;
                }
                not_backoffice_fournisseur_edit:

                // backoffice_fournisseur_delete
                if (preg_match('#^/backoffice/fournisseur/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_fournisseur_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\FournisseurController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                        goto not_backoffice_fournisseur_delete;
                    }

                    return $ret;
                }
                not_backoffice_fournisseur_delete:

            }

            elseif (0 === strpos($pathinfo, '/backoffice/marqueproduit')) {
                // backoffice_marqueproduit_index
                if ('/backoffice/marqueproduit' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueProduitController::indexAction',  '_route' => 'backoffice_marqueproduit_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_marqueproduit_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_marqueproduit_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_marqueproduit_index;
                    }

                    return $ret;
                }
                not_backoffice_marqueproduit_index:

                // backoffice_marqueproduit_show
                if (preg_match('#^/backoffice/marqueproduit/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_marqueproduit_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueProduitController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_marqueproduit_show;
                    }

                    return $ret;
                }
                not_backoffice_marqueproduit_show:

                // backoffice_marqueproduit_new
                if ('/backoffice/marqueproduit/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueProduitController::newAction',  '_route' => 'backoffice_marqueproduit_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_marqueproduit_new;
                    }

                    return $ret;
                }
                not_backoffice_marqueproduit_new:

                // backoffice_marqueproduit_edit
                if (preg_match('#^/backoffice/marqueproduit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_marqueproduit_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueProduitController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_marqueproduit_edit;
                    }

                    return $ret;
                }
                not_backoffice_marqueproduit_edit:

                // backoffice_marqueproduit_delete
                if (preg_match('#^/backoffice/marqueproduit/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_marqueproduit_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\MarqueProduitController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                        goto not_backoffice_marqueproduit_delete;
                    }

                    return $ret;
                }
                not_backoffice_marqueproduit_delete:

            }

            elseif (0 === strpos($pathinfo, '/backoffice/produit')) {
                // backoffice_produit_index
                if ('/backoffice/produit' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\ProduitController::indexAction',  '_route' => 'backoffice_produit_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_produit_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_produit_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_produit_index;
                    }

                    return $ret;
                }
                not_backoffice_produit_index:

                // backoffice_produit_show
                if (preg_match('#^/backoffice/produit/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_produit_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ProduitController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_produit_show;
                    }

                    return $ret;
                }
                not_backoffice_produit_show:

                // backoffice_produit_new
                if ('/backoffice/produit/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\ProduitController::newAction',  '_route' => 'backoffice_produit_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_produit_new;
                    }

                    return $ret;
                }
                not_backoffice_produit_new:

                // backoffice_produit_edit
                if (preg_match('#^/backoffice/produit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_produit_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ProduitController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_produit_edit;
                    }

                    return $ret;
                }
                not_backoffice_produit_edit:

                // backoffice_produit_delete
                if (preg_match('#^/backoffice/produit/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_produit_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\ProduitController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                        goto not_backoffice_produit_delete;
                    }

                    return $ret;
                }
                not_backoffice_produit_delete:

            }

            elseif (0 === strpos($pathinfo, '/backoffice/entreeproduit')) {
                // backoffice_entreeproduit_index
                if ('/backoffice/entreeproduit' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\EntreeProduitController::indexAction',  '_route' => 'backoffice_entreeproduit_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_entreeproduit_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_entreeproduit_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_entreeproduit_index;
                    }

                    return $ret;
                }
                not_backoffice_entreeproduit_index:

                // backoffice_entreeproduit_show
                if (preg_match('#^/backoffice/entreeproduit/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_entreeproduit_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\EntreeProduitController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_entreeproduit_show;
                    }

                    return $ret;
                }
                not_backoffice_entreeproduit_show:

                // backoffice_entreeproduit_new
                if ('/backoffice/entreeproduit/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\EntreeProduitController::newAction',  '_route' => 'backoffice_entreeproduit_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_entreeproduit_new;
                    }

                    return $ret;
                }
                not_backoffice_entreeproduit_new:

                // backoffice_entreeproduit_edit
                if (preg_match('#^/backoffice/entreeproduit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_entreeproduit_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\EntreeProduitController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_entreeproduit_edit;
                    }

                    return $ret;
                }
                not_backoffice_entreeproduit_edit:

                // backoffice_entreeproduit_delete
                if (preg_match('#^/backoffice/entreeproduit/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_entreeproduit_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\EntreeProduitController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                        goto not_backoffice_entreeproduit_delete;
                    }

                    return $ret;
                }
                not_backoffice_entreeproduit_delete:

            }

            elseif (0 === strpos($pathinfo, '/backoffice/sortieproduit')) {
                // backoffice_sortieproduit_index
                if ('/backoffice/sortieproduit' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\SortieProduitController::indexAction',  '_route' => 'backoffice_sortieproduit_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_sortieproduit_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_sortieproduit_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_sortieproduit_index;
                    }

                    return $ret;
                }
                not_backoffice_sortieproduit_index:

                // backoffice_sortieproduit_show
                if (preg_match('#^/backoffice/sortieproduit/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_sortieproduit_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SortieProduitController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_sortieproduit_show;
                    }

                    return $ret;
                }
                not_backoffice_sortieproduit_show:

                // backoffice_sortieproduit_new
                if ('/backoffice/sortieproduit/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\SortieProduitController::newAction',  '_route' => 'backoffice_sortieproduit_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_sortieproduit_new;
                    }

                    return $ret;
                }
                not_backoffice_sortieproduit_new:

                // backoffice_sortieproduit_edit
                if (preg_match('#^/backoffice/sortieproduit/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_sortieproduit_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SortieProduitController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_sortieproduit_edit;
                    }

                    return $ret;
                }
                not_backoffice_sortieproduit_edit:

                // backoffice_sortieproduit_delete
                if (preg_match('#^/backoffice/sortieproduit/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_sortieproduit_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\SortieProduitController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                        goto not_backoffice_sortieproduit_delete;
                    }

                    return $ret;
                }
                not_backoffice_sortieproduit_delete:

            }

            // back_office_homepage
            if ('/backoffice' === $pathinfo) {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
            }

            if (0 === strpos($pathinfo, '/backoffice/l')) {
                if (0 === strpos($pathinfo, '/backoffice/lignecommande')) {
                    // backoffice_lignecommande_index
                    if ('/backoffice/lignecommande' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\LigneCommandeController::indexAction',  '_route' => 'backoffice_lignecommande_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_lignecommande_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_lignecommande_index'));
                        }

                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_backoffice_lignecommande_index;
                        }

                        return $ret;
                    }
                    not_backoffice_lignecommande_index:

                    // backoffice_lignecommande_show
                    if (preg_match('#^/backoffice/lignecommande/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_lignecommande_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\LigneCommandeController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_backoffice_lignecommande_show;
                        }

                        return $ret;
                    }
                    not_backoffice_lignecommande_show:

                    // backoffice_lignecommande_new
                    if ('/backoffice/lignecommande/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\LigneCommandeController::newAction',  '_route' => 'backoffice_lignecommande_new',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_backoffice_lignecommande_new;
                        }

                        return $ret;
                    }
                    not_backoffice_lignecommande_new:

                    // backoffice_lignecommande_edit
                    if (preg_match('#^/backoffice/lignecommande/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_lignecommande_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\LigneCommandeController::editAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_backoffice_lignecommande_edit;
                        }

                        return $ret;
                    }
                    not_backoffice_lignecommande_edit:

                    // backoffice_lignecommande_delete
                    if (preg_match('#^/backoffice/lignecommande/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_lignecommande_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\LigneCommandeController::deleteElementAction',));
                        if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                            goto not_backoffice_lignecommande_delete;
                        }

                        return $ret;
                    }
                    not_backoffice_lignecommande_delete:

                }

                elseif (0 === strpos($pathinfo, '/backoffice/login')) {
                    // fos_user_security_login
                    if ('/backoffice/login' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_security_login;
                        }

                        return $ret;
                    }
                    not_fos_user_security_login:

                    // fos_user_security_check
                    if ('/backoffice/login_check' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_fos_user_security_check;
                        }

                        return $ret;
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ('/backoffice/logout' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_logout;
                    }

                    return $ret;
                }
                not_fos_user_security_logout:

            }

            elseif (0 === strpos($pathinfo, '/backoffice/stock')) {
                // backoffice_stock_index
                if ('/backoffice/stock' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\StockController::indexAction',  '_route' => 'backoffice_stock_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_stock_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_stock_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_stock_index;
                    }

                    return $ret;
                }
                not_backoffice_stock_index:

                // backoffice_stock_show
                if (preg_match('#^/backoffice/stock/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_stock_show')), array (  '_controller' => 'BackOfficeBundle\\Controller\\StockController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_backoffice_stock_show;
                    }

                    return $ret;
                }
                not_backoffice_stock_show:

                // backoffice_stock_new
                if ('/backoffice/stock/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'BackOfficeBundle\\Controller\\StockController::newAction',  '_route' => 'backoffice_stock_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_stock_new;
                    }

                    return $ret;
                }
                not_backoffice_stock_new:

                // backoffice_stock_edit
                if (preg_match('#^/backoffice/stock/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_stock_edit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\StockController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_backoffice_stock_edit;
                    }

                    return $ret;
                }
                not_backoffice_stock_edit:

                // backoffice_stock_delete
                if (preg_match('#^/backoffice/stock/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'backoffice_stock_delete')), array (  '_controller' => 'BackOfficeBundle\\Controller\\StockController::deleteElementAction',));
                    if (!in_array($canonicalMethod, array('POST', 'DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET'));
                        goto not_backoffice_stock_delete;
                    }

                    return $ret;
                }
                not_backoffice_stock_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
