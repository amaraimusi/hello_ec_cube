<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.cs_p8lu' shared service.

return $this->services['service_locator.cs_p8lu'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('paginator' => function () {
    return ${($_ = isset($this->services['knp_paginator']) ? $this->services['knp_paginator'] : $this->load('getKnpPaginatorService.php')) && false ?: '_'};
}));
