<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.rtwovhe' shared service.

return $this->services['service_locator.rtwovhe'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('router' => function () {
    return ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};
}));
