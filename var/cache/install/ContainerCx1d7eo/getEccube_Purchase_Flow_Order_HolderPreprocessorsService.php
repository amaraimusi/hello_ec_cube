<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.order.holder_preprocessors' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Collection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\ArrayCollection.php';

return $this->services['eccube.purchase.flow.order.holder_preprocessors'] = new \Doctrine\Common\Collections\ArrayCollection(array(0 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\TaxProcessor']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\TaxProcessor'] : $this->load('getTaxProcessorService.php')) && false ?: '_'}));
