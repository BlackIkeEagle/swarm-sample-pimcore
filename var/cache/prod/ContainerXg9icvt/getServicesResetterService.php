<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->services['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : null) && false ?: '_'};
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : null) && false ?: '_'};
    }
    if (isset($this->services['pimcore.cache.core.symfony_adapter.filesystem'])) {
        yield 'pimcore.cache.core.symfony_adapter.filesystem' => ${($_ = isset($this->services['pimcore.cache.core.symfony_adapter.filesystem']) ? $this->services['pimcore.cache.core.symfony_adapter.filesystem'] : null) && false ?: '_'};
    }
    if (isset($this->services['pimcore.cache.core.symfony_adapter.array'])) {
        yield 'pimcore.cache.core.symfony_adapter.array' => ${($_ = isset($this->services['pimcore.cache.core.symfony_adapter.array']) ? $this->services['pimcore.cache.core.symfony_adapter.array'] : null) && false ?: '_'};
    }
}, function () {
    return 0 + (int) (isset($this->services['debug.stopwatch'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->services['pimcore.cache.core.symfony_adapter.filesystem'])) + (int) (isset($this->services['pimcore.cache.core.symfony_adapter.array']));
}), array('debug.stopwatch' => 'reset', 'security.token_storage' => 'setToken', 'pimcore.cache.core.symfony_adapter.filesystem' => 'reset', 'pimcore.cache.core.symfony_adapter.array' => 'reset'));
