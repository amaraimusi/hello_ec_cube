<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\EntryController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Controller\\EntryController.php';

$this->services['Eccube\Controller\EntryController'] = $instance = new \Eccube\Controller\EntryController(${($_ = isset($this->services['Eccube\Service\CartService']) ? $this->services['Eccube\Service\CartService'] : $this->getCartServiceService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\Master\CustomerStatusRepository']) ? $this->services['Eccube\Repository\Master\CustomerStatusRepository'] : $this->load('getCustomerStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\MailService']) ? $this->services['Eccube\Service\MailService'] : $this->load('getMailServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\CustomerRepository']) ? $this->services['Eccube\Repository\CustomerRepository'] : $this->load('getCustomerRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->load('getSecurity_EncoderFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : $this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this)) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
