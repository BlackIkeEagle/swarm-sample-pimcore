<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.0s1uji8' shared service.

return $this->services['service_locator.0s1uji8'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('siteConfigProvider' => function () {
    $f = function (\Pimcore\Analytics\SiteId\SiteIdProvider $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Analytics\SiteId\SiteIdProvider']) ? $this->services['Pimcore\Analytics\SiteId\SiteIdProvider'] : $this->getSiteIdProviderService()) && false ?: '_'});
}, 'sitesManager' => function () {
    $f = function (\Pimcore\Analytics\Piwik\Api\SitesManager $v = null) { return $v; }; return $f(${($_ = isset($this->services['Pimcore\Analytics\Piwik\Api\SitesManager']) ? $this->services['Pimcore\Analytics\Piwik\Api\SitesManager'] : $this->load(__DIR__.'/getSitesManagerService.php')) && false ?: '_'});
}));
