<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pimcore_admin.security.webservice_authenticator' shared autowired service.

$this->services['pimcore_admin.security.webservice_authenticator'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\Guard\WebserviceAuthenticator();

$instance->setLogger(${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->getMonolog_Logger_SecurityService()) && false ?: '_'});

return $instance;
