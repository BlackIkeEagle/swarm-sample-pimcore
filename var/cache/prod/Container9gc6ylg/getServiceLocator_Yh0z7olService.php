<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.yh0z7ol' shared service.

return $this->services['service_locator.yh0z7ol'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('reportBroker' => function () {
    $f = function (\Pimcore\Analytics\Piwik\ReportBroker $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Analytics\Piwik\ReportBroker']) ? $this->services['Pimcore\Analytics\Piwik\ReportBroker'] : $this->load(__DIR__.'/getReportBrokerService.php')) && false ?: '_'});
}));
