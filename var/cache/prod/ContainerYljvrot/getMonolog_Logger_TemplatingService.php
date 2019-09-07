<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger.templating' shared service.

$this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

$instance->pushProcessor(${($_ = isset($this->services['Eccube\Log\Processor\SessionProcessor']) ? $this->services['Eccube\Log\Processor\SessionProcessor'] : $this->getSessionProcessorService()) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Eccube\Log\Processor\TokenProcessor']) ? $this->services['Eccube\Log\Processor\TokenProcessor'] : $this->getTokenProcessorService()) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Monolog\Processor\UidProcessor']) ? $this->services['Monolog\Processor\UidProcessor'] : $this->services['Monolog\Processor\UidProcessor'] = new \Monolog\Processor\UidProcessor()) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Monolog\Processor\IntrospectionProcessor']) ? $this->services['Monolog\Processor\IntrospectionProcessor'] : $this->services['Monolog\Processor\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', array(0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log'))) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Symfony\Bridge\Monolog\Processor\WebProcessor']) ? $this->services['Symfony\Bridge\Monolog\Processor\WebProcessor'] : $this->getWebProcessorService()) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

return $instance;
