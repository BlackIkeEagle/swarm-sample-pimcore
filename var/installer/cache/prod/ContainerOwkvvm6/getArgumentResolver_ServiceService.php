<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Pimcore\\Install\\Controller\\InstallController:indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.dgvr4op']) ? $this->services['service_locator.dgvr4op'] : $this->load(__DIR__.'/getServiceLocator_Dgvr4opService.php')) && false ?: '_'};
}, 'Pimcore\\Install\\Controller\\InstallController:installAction' => function () {
    return ${($_ = isset($this->services['service_locator.qrelym3']) ? $this->services['service_locator.qrelym3'] : $this->load(__DIR__.'/getServiceLocator_Qrelym3Service.php')) && false ?: '_'};
}, 'Pimcore\\Install\\Controller\\InstallController::indexAction' => function () {
    return ${($_ = isset($this->services['service_locator.dgvr4op']) ? $this->services['service_locator.dgvr4op'] : $this->load(__DIR__.'/getServiceLocator_Dgvr4opService.php')) && false ?: '_'};
}, 'Pimcore\\Install\\Controller\\InstallController::installAction' => function () {
    return ${($_ = isset($this->services['service_locator.qrelym3']) ? $this->services['service_locator.qrelym3'] : $this->load(__DIR__.'/getServiceLocator_Qrelym3Service.php')) && false ?: '_'};
})));