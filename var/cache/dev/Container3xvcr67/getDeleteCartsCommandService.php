<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\DeleteCartsCommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Command\\DeleteCartsCommand.php';

$this->services['Eccube\\Command\\DeleteCartsCommand'] = $instance = new \Eccube\Command\DeleteCartsCommand($this, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CartRepository']) ? $this->services['Eccube\\Repository\\CartRepository'] : $this->getCartRepositoryService()) && false ?: '_'});

$instance->setName('eccube:delete-carts');

return $instance;
