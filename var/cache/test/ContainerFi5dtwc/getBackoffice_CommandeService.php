<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'backoffice.commande' shared service.

include_once $this->targetDirs[3].'/src/BackOfficeBundle/Services/Commande/CommandeService.php';

return $this->services['backoffice.commande'] = new \BackOfficeBundle\Services\Commande\CommandeService(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'});
