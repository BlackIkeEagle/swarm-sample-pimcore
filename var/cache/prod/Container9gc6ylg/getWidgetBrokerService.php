<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Analytics\Piwik\WidgetBroker' shared autowired service.

return $this->services['Pimcore\Analytics\Piwik\WidgetBroker'] = new \Pimcore\Analytics\Piwik\WidgetBroker(${($_ = isset($this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider']) ? $this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider'] : $this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider'] = new \Pimcore\Analytics\Piwik\Config\ConfigProvider()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Analytics\Piwik\Api\ApiClient']) ? $this->services['Pimcore\Analytics\Piwik\Api\ApiClient'] : $this->load(__DIR__.'/getApiClientService.php')) && false ?: '_'}, ${($_ = isset($this->services['pimcore.cache.core.handler']) ? $this->services['pimcore.cache.core.handler'] : $this->getPimcore_Cache_Core_HandlerService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});