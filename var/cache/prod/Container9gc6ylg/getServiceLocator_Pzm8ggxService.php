<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.pzm8ggx' shared service.

return $this->services['service_locator.pzm8ggx'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('importService' => function () {
    $f = function (\Pimcore\DataObject\Import\Service $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\DataObject\Import\Service']) ? $this->services['Pimcore\DataObject\Import\Service'] : $this->load(__DIR__.'/getService3Service.php')) && false ?: '_'});
}));
