<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.h_v2f09' shared service.

return $this->services['service_locator.h_v2f09'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('kernel' => function () {
    return ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', /* ContainerInterface::NULL_ON_INVALID_REFERENCE */ 2)) && false ?: '_'};
}));
