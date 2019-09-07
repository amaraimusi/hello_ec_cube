<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\OrderPdfService' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\tecnickcom\\tcpdf\\tcpdf.php';
include_once $this->targetDirs[3].'\\vendor\\setasign\\fpdi\\src\\FpdiTrait.php';
include_once $this->targetDirs[3].'\\vendor\\setasign\\fpdi\\src\\TcpdfFpdi.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\OrderPdfService.php';

return $this->services['Eccube\Service\OrderPdfService'] = new \Eccube\Service\OrderPdfService(${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : $this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this)) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\OrderRepository']) ? $this->services['Eccube\Repository\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\ShippingRepository']) ? $this->services['Eccube\Repository\ShippingRepository'] : $this->load('getShippingRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\TaxRuleService']) ? $this->services['Eccube\Service\TaxRuleService'] : $this->load('getTaxRuleServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->load('getBaseInfoRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Twig\Extension\EccubeExtension']) ? $this->services['Eccube\Twig\Extension\EccubeExtension'] : $this->getEccubeExtensionService()) && false ?: '_'});
