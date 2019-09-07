<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Order\OrderController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\Admin\\Order\\OrderController.php';

$this->services['Eccube\Controller\Admin\Order\OrderController'] = $instance = new \Eccube\Controller\Admin\Order\OrderController(${($_ = isset($this->services['eccube.purchase.flow.order']) ? $this->services['eccube.purchase.flow.order'] : $this->load('getEccube_Purchase_Flow_OrderService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\CsvExportService']) ? $this->services['Eccube\Service\CsvExportService'] : $this->load('getCsvExportServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\CustomerRepository']) ? $this->services['Eccube\Repository\CustomerRepository'] : $this->load('getCustomerRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\PaymentRepository']) ? $this->services['Eccube\Repository\PaymentRepository'] : $this->load('getPaymentRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\SexRepository']) ? $this->services['Eccube\Repository\Master\SexRepository'] : $this->load('getSexRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\OrderStatusRepository']) ? $this->services['Eccube\Repository\Master\OrderStatusRepository'] : $this->load('getOrderStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\PageMaxRepository']) ? $this->services['Eccube\Repository\Master\PageMaxRepository'] : $this->load('getPageMaxRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\ProductStatusRepository']) ? $this->services['Eccube\Repository\Master\ProductStatusRepository'] : $this->load('getProductStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\ProductStockRepository']) ? $this->services['Eccube\Repository\ProductStockRepository'] : $this->load('getProductStockRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\OrderRepository']) ? $this->services['Eccube\Repository\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\OrderPdfRepository']) ? $this->services['Eccube\Repository\OrderPdfRepository'] : $this->load('getOrderPdfRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\OrderStateMachine']) ? $this->services['Eccube\Service\OrderStateMachine'] : $this->load('getOrderStateMachineService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\MailService']) ? $this->services['Eccube\Service\MailService'] : $this->load('getMailServiceService.php')) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : $this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this)) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
