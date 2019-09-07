<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.handler' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Fragment\\FragmentHandler.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DependencyInjection\\LazyLoadingFragmentHandler.php';

return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
    return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->load('getFragment_Renderer_EsiService.php')) && false ?: '_'};
}, 'hinclude' => function () {
    return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->load('getFragment_Renderer_HincludeService.php')) && false ?: '_'};
}, 'inline' => function () {
    return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->load('getFragment_Renderer_InlineService.php')) && false ?: '_'};
})), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, true);
