<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.cart.item_validators' shared service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ValidatorTrait.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\ItemValidator.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\StockValidator.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\SaleLimitValidator.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Collection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\ArrayCollection.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PurchaseFlow\\Processor\\PriceChangeValidator.php';

return $this->services['eccube.purchase.flow.cart.item_validators'] = new \Doctrine\Common\Collections\ArrayCollection(array(0 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\DeliverySettingValidator']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\DeliverySettingValidator'] : $this->load('getDeliverySettingValidatorService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\ProductStatusValidator']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\ProductStatusValidator'] : $this->services['Eccube\Service\PurchaseFlow\Processor\ProductStatusValidator'] = new \Eccube\Service\PurchaseFlow\Processor\ProductStatusValidator()) && false ?: '_'}, 2 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\PriceChangeValidator']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\PriceChangeValidator'] : $this->services['Eccube\Service\PurchaseFlow\Processor\PriceChangeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PriceChangeValidator()) && false ?: '_'}, 3 => new \Eccube\Service\PurchaseFlow\Processor\StockValidator(), 4 => new \Eccube\Service\PurchaseFlow\Processor\SaleLimitValidator()));
