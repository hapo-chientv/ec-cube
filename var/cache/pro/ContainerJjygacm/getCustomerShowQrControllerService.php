<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Plugin\CustomerRank\Controller\Block\CustomerShowQrController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\app\\Plugin\\CustomerRank\\Controller\\Block\\CustomerShowQrController.php';

$this->services['Plugin\\CustomerRank\\Controller\\Block\\CustomerShowQrController'] = $instance = new \Plugin\CustomerRank\Controller\Block\CustomerShowQrController(${($_ = isset($this->services['Plugin\\CustomerRank\\Service\\CustomerRankService']) ? $this->services['Plugin\\CustomerRank\\Service\\CustomerRankService'] : $this->load('getCustomerRankServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\CustomerRank\\Controller\\Admin\\CustomerSalonCodeEditController']) ? $this->services['Plugin\\CustomerRank\\Controller\\Admin\\CustomerSalonCodeEditController'] : $this->load('getCustomerSalonCodeEditControllerService.php')) && false ?: '_'}, ${($_ = isset($this->services['Plugin\\CustomerRank\\Repository\\CustomerSalonCodeRepository']) ? $this->services['Plugin\\CustomerRank\\Repository\\CustomerSalonCodeRepository'] : $this->load('getCustomerSalonCodeRepositoryService.php')) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

return $instance;
