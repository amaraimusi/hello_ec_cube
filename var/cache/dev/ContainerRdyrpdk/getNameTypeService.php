<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\NameType' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractType.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Form\\Type\\NameType.php';

return $this->services['Eccube\Form\Type\NameType'] = new \Eccube\Form\Type\NameType(${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : $this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this)) && false ?: '_'});
