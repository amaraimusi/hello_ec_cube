<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator..dejvic' shared service.

return $this->services['service_locator..dejvic'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('Product' => function () {
    $f = function (\Eccube\Entity\Product $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Eccube\Entity\Product']) ? $this->services['autowired.Eccube\Entity\Product'] : $this->services['autowired.Eccube\Entity\Product'] = new \Eccube\Entity\Product()) && false ?: '_'});
}));
