<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.z.vr1op' shared service.

return $this->services['service_locator.z.vr1op'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('paginator' => function () {
    $f = function (\Knp\Component\Pager\Paginator $v) { return $v; }; return $f(${($_ = isset($this->services['knp_paginator']) ? $this->services['knp_paginator'] : $this->load('getKnpPaginatorService.php')) && false ?: '_'});
}));
