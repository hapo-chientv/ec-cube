<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\CustomerRank\Form\Extension\ProductClassEditExtension' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
include_once $this->targetDirs[3].'\\app\\Plugin\\CustomerRank\\Form\\Extension\\ProductClassEditExtension.php';

return $this->services['Plugin\\CustomerRank\\Form\\Extension\\ProductClassEditExtension'] = new \Plugin\CustomerRank\Form\Extension\ProductClassEditExtension(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\CustomerRank\\Repository\\CustomerRankRepository']) ? $this->services['Plugin\\CustomerRank\\Repository\\CustomerRankRepository'] : $this->load('getCustomerRankRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\CustomerRank\\Repository\\CustomerPriceRepository']) ? $this->services['Plugin\\CustomerRank\\Repository\\CustomerPriceRepository'] : $this->load('getCustomerPriceRepositoryService.php')) && false ?: '_'});