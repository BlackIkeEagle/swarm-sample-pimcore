<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.neqmjr.' shared service.

return $this->services['service_locator.neqmjr.'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('widgetBroker' => function () {
    $f = function (\Pimcore\Analytics\Piwik\WidgetBroker $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Analytics\Piwik\WidgetBroker']) ? $this->services['Pimcore\Analytics\Piwik\WidgetBroker'] : $this->load(__DIR__.'/getWidgetBrokerService.php')) && false ?: '_'});
}));
