<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Analytics\Piwik\Api\ApiClient' shared autowired service.

return $this->services['Pimcore\Analytics\Piwik\Api\ApiClient'] = new \Pimcore\Analytics\Piwik\Api\ApiClient(${($_ = isset($this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider']) ? $this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider'] : $this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider'] = new \Pimcore\Analytics\Piwik\Config\ConfigProvider()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\ClientFactory']) ? $this->services['Pimcore\Http\ClientFactory'] : $this->services['Pimcore\Http\ClientFactory'] = new \Pimcore\Http\ClientFactory()) && false ?: '_'}, ${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->load(__DIR__.'/getSerializerService.php')) && false ?: '_'});