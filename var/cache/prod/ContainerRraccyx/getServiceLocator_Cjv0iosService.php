<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.cjv0ios' shared service.

return $this->services['service_locator.cjv0ios'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('Order' => function () {
    $f = function (\Eccube\Entity\Order $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Eccube\Entity\Order']) ? $this->services['autowired.Eccube\Entity\Order'] : $this->services['autowired.Eccube\Entity\Order'] = new \Eccube\Entity\Order()) && false ?: '_'});
}));
