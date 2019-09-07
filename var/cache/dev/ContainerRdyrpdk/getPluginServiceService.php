<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\PluginService' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\SchemaService.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\PluginService.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Util\\CacheUtil.php';

$a = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'};

return $this->services['Eccube\Service\PluginService'] = new \Eccube\Service\PluginService($a, ${($_ = isset($this->services['Eccube\Repository\PluginRepository']) ? $this->services['Eccube\Repository\PluginRepository'] : $this->getPluginRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\EntityProxyService']) ? $this->services['Eccube\Service\EntityProxyService'] : $this->load('getEntityProxyServiceService.php')) && false ?: '_'}, new \Eccube\Service\SchemaService($a), ${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : $this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this)) && false ?: '_'}, $this, ${($_ = isset($this->services['Eccube\Util\CacheUtil']) ? $this->services['Eccube\Util\CacheUtil'] : $this->services['Eccube\Util\CacheUtil'] = new \Eccube\Util\CacheUtil(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\Composer\ComposerServiceInterface']) ? $this->services['Eccube\Service\Composer\ComposerServiceInterface'] : $this->load('getComposerServiceInterfaceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\PluginApiService']) ? $this->services['Eccube\Service\PluginApiService'] : $this->load('getPluginApiServiceService.php')) && false ?: '_'});
