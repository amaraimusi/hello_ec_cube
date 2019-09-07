<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheCacheWarmer.php';

return $this->services['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
    $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
})))->withContext('twig.cache_warmer', $this), ${($_ = isset($this->services['templating.finder']) ? $this->services['templating.finder'] : $this->load('getTemplating_FinderService.php')) && false ?: '_'}, array(($this->targetDirs[3].'/app/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')) => NULL, ($this->targetDirs[3].'/src/Eccube/Resource/template/default') => NULL, ($this->targetDirs[3].'/app/Plugin') => NULL, ($this->targetDirs[3].'/app/template/admin') => 'admin', ($this->targetDirs[3].'/src/Eccube/Resource/template/admin') => 'admin', ($this->targetDirs[3].'/app/template/user_data') => 'user_data', ($this->targetDirs[3].'/src/Eccube/Resource/template/toolbar') => 'toolbar', ($this->targetDirs[3].'/src/Eccube/Resource/template/common') => 'common', ($this->targetDirs[3].'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL));
