<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Templating\Helper\HeadLink' shared autowired service.

return $this->services['Pimcore\Templating\Helper\HeadLink'] = new \Pimcore\Templating\Helper\HeadLink(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->services['pimcore.templating.view_helper.placeholder.container_service'] = new \Pimcore\Templating\Helper\Placeholder\ContainerService()) && false ?: '_'});
