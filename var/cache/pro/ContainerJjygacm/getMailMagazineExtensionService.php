<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\CustomerRank\Form\Extension\MailMagazineExtension' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
include_once $this->targetDirs[3].'\\app\\Plugin\\CustomerRank\\Form\\Extension\\MailMagazineExtension.php';

return $this->services['Plugin\\CustomerRank\\Form\\Extension\\MailMagazineExtension'] = new \Plugin\CustomerRank\Form\Extension\MailMagazineExtension(${($_ = isset($this->services['Plugin\\CustomerRank\\Repository\\CustomerRankRepository']) ? $this->services['Plugin\\CustomerRank\\Repository\\CustomerRankRepository'] : $this->load('getCustomerRankRepositoryService.php')) && false ?: '_'});
