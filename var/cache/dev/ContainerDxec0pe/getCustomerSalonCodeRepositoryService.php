<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\CustomerRank\Repository\CustomerSalonCodeRepository' shared autowired service.

include_once $this->targetDirs[3].'\\app\\Plugin\\CustomerRank\\Repository\\CustomerSalonCodeRepository.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Security.php';

return $this->services['Plugin\\CustomerRank\\Repository\\CustomerSalonCodeRepository'] = new \Plugin\CustomerRank\Repository\CustomerSalonCodeRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, 'Plugin\\CustomerRank\\Entity\\CustomerSalonCode', new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\ServiceLocator(['security.authorization_checker' => function () {
    return ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'};
}, 'security.token_storage' => function () {
    return ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'};
}])));
