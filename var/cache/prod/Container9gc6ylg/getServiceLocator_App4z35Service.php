<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.app4z35' shared service.

return $this->services['service_locator.app4z35'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('service' => function () {
    $f = function (\Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects']) ? $this->services['Pimcore\Bundle\AdminBundle\GDPR\DataProvider\DataObjects'] : $this->load(__DIR__.'/getDataObjectsService.php')) && false ?: '_'});
}));
