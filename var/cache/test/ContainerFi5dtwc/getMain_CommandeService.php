<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'main.commande' shared service.

include_once $this->targetDirs[3].'/src/MainBundle/Services/Commande/CommandeService.php';

return $this->services['main.commande'] = new \MainBundle\Services\Commande\CommandeService(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
