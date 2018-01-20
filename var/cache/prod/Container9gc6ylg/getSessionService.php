<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'session' shared service.

$this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->load(__DIR__.'/getSession_Storage_NativeService.php')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());

$a = new \Pimcore\Session\SessionConfigurator();
$a->addConfigurator(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator']) ? $this->services['Pimcore\Bundle\AdminBundle\Session\AdminSessionBagConfigurator'] : $this->load(__DIR__.'/getAdminSessionBagConfiguratorService.php')) && false ?: '_'});

$a->configure($instance);

return $instance;
