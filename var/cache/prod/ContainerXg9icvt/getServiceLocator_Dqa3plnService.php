<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.dqa3pln' shared service.

return $this->services['service_locator.dqa3pln'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('localeService' => function () {
    $f = function (\Pimcore\Localization\Locale $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Localization\Locale']) ? $this->services['Pimcore\Localization\Locale'] : $this->load(__DIR__.'/getLocaleService.php')) && false ?: '_'});
}));
