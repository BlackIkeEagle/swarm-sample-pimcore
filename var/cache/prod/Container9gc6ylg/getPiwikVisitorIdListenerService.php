<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Targeting\EventListener\PiwikVisitorIdListener' shared autowired service.

return $this->services['Pimcore\Targeting\EventListener\PiwikVisitorIdListener'] = new \Pimcore\Targeting\EventListener\PiwikVisitorIdListener(${($_ = isset($this->services['Pimcore\Targeting\EventListener\TargetingListener']) ? $this->services['Pimcore\Targeting\EventListener\TargetingListener'] : $this->getTargetingListenerService()) && false ?: '_'});
