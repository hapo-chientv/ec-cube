<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.vagkkui' shared service.

return $this->services['service_locator.vagkkui'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['fs' => function () {
    return ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'};
}, 'twig' => function () {
    return ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'};
}]);
