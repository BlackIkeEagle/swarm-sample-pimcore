<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.zz.snxj' shared service.

return $this->services['service_locator.zz.snxj'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('provider' => function () {
    $f = function (\Pimcore\Controller\Config\ControllerDataProvider $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Controller\Config\ControllerDataProvider']) ? $this->services['Pimcore\Controller\Config\ControllerDataProvider'] : $this->load(__DIR__.'/getControllerDataProviderService.php')) && false ?: '_'});
}));