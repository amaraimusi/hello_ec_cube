<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.rememberme.customer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\ListenerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Firewall\\RememberMeListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Http\\Session\\SessionAuthenticationStrategy.php';

return $this->services['security.authentication.listener.rememberme.customer'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.rememberme.services.simplehash.customer']) ? $this->services['security.authentication.rememberme.services.simplehash.customer'] : $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_CustomerService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, true, ${($_ = isset($this->services['security.authentication.session_strategy.admin']) ? $this->services['security.authentication.session_strategy.admin'] : $this->services['security.authentication.session_strategy.admin'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate')) && false ?: '_'});
